<?php
require_once("config.php");

// Check if a session already exists
session_start();
if (isset($_SESSION["user"])) {
    header("Location: homepage.php");
    exit();
}

// Initialize error message variable
$errorMsg = "";
$errorMsgStyle = "";


// Login Section
if (isset($_POST['login'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $sql = "SELECT * FROM users WHERE  email=:email";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(":email" => $email);
    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if (password_verify($password, $user["password"])) {
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman dashboard
            header("Location: homepage.php");
        } else {
            // Password tidak sesuai, berikan feedback ke pengguna
            $errorMsg = "Username atau password salah";
            $errorMsgStyle = "display: flex;";
        }
    } else {
        // User tidak ditemukan, berikan feedback ke pengguna
        $errorMsg = "Username atau password salah";
        $errorMsgStyle = "display: flex;";
    }
}

// Register Section
if (isset($_POST['register'])) {
    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Password validation
    if (!preg_match('/^(?=.*[A-Z])(?=.*[0-9]).{8,}$/', $password)) {
        // Password tidak memenuhi kriteria, berikan feedback ke pengguna
        $errorMsg = "Password minimal 8 karakter, 1 kapital, 1 angka";
        $errorMsgStyle = "display: flex;";
    } else {
        // menyiapkan query
        $sqlCheck = "SELECT * FROM users WHERE email=:email";
        $stmtCheck = $db->prepare($sqlCheck);
        $stmtCheck->bindParam(":email", $email);
        $stmtCheck->execute();

        // Check if email is already registered
        if ($stmtCheck->fetch(PDO::FETCH_ASSOC)) {
            $errorMsg = "Email telah terdaftar!";
            $errorMsgStyle = "display: flex;";
        } else {
            // Email belum terdaftar, lanjutkan proses registrasi
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
            $stmt = $db->prepare($sql);

            // bind parameter ke query
            $params = array(":name" => $name, ":password" => $hashedPassword, ":email" => $email);

            // eksekusi query untuk menyimpan ke database
            $saved = $stmt->execute($params);

            // jika query simpan berhasil, maka user sudah terdaftar
            // maka alihkan ke halaman login
            if ($saved) {
                header("Location: index.php#login");
            } else {
                // Something went wrong during registration
                $errorMsg = "Registrasi gagal";
                $errorMsgStyle = "display: flex;";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Register</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/sign.css">
    <style>
        .error-msg {
            display: none;
            <?php echo $errorMsgStyle; ?>
        }
    </style>
</head>

<body>

    <div class="content">
        <div class="form">
            <div class="error-msg">
                <p><?php echo $errorMsg; ?></p>
            </div>

            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Register</a></li>
                <li class="tab"><a href="#login">Log In</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">
                    <h1>Join To Our Platform</h1>

                    <form action="/" method="post">

                        <div class="top-row">
                            <div class="field-wrap">
                                <label for="signup_name">
                                    Name<span class="req">*</span>
                                </label>
                                <input id="signup_name" type="text" name="name" required autocomplete="off" />
                            </div>
                        </div>

                        <div class="field-wrap">
                            <label for="signup_email">
                                Email<span class="req">*</span>
                            </label>
                            <input id="signup_email" type="email" name="email" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label for="signup_password">
                                Password<span class="req">*</span>
                            </label>
                            <input id="signup_password" type="password" name="password" required autocomplete="off" />
                        </div>

                        <button type="submit" name="register" class="button button-block" />Register</button>

                    </form>

                </div>

                <div id="login">
                    <h1>Welcome!</h1>

                    <form action="/" method="post" name="login">

                        <div class="field-wrap">
                            <label for="login_email">
                                Email<span class="req"></span>
                            </label>
                            <input id="login_email" type="email" name="email" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label for="login_password">
                                Password<span class="req"></span>
                            </label>
                            <input id="login_password" type="password" name="password" required autocomplete="off" />
                        </div>
                        <button type="submit" name="login" class="button button-block" />Log In</button>

                    </form>

                </div>

            </div>

        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/sign.js"></script>
</body>

</html>