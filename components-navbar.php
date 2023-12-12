<nav class="navigation">
    <div class="container-navbar">
        <div class="navbar-left">
            <i class="fa-solid fa-bars"></i>
            <div class="navbar-menu">
                <div class="topbar-click-dropdown">
                    <div class="topbar-title">
                        <p>Recent</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="topbar-dropdown">
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    </div>
                </div>
                <div class="topbar-click-dropdown">
                    <div class="topbar-title">
                        <p>Panduan Siswa</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="topbar-dropdown">
                        <a href="/dashboard.php">Sistem Basis Data</a>
                        <a href="/dashboard.php">Kecerdasan Artifisial</a>
                        <a href="/dashboard.php">Pemograman Web</a>
                        <a href="/dashboard.php">Matematika Diskrit</a>
                    </div>
                </div>
                <div class="topbar-click-dropdown">
                    <div class="topbar-title">
                        <p>Panduan Guru</p>
                        <i class="fa-solid fa-angle-down"></i>
                    </div>
                    <div class="topbar-dropdown">
                        <a href="/dashboard.php">Unduh PDF</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="navbar-right">
            <div class="navbar-menu">
                <p><?php echo  $_SESSION["user"]["name"] ?></p>
                <div class="topbar-click-dropdown">
                    <div class="topbar-title">
                        <i class="fa-solid fa-circle-user"></i>
                    </div>
                    <div class="topbar-dropdown">
                        <div class="topbar-dropdown-menu">
                            <i class="fa-solid fa-circle-user"></i>
                            <a href="./profile.php">Profile</a>
                        </div>
                        <div class="topbar-dropdown-menu">
                            <i class="fa-regular fa-clipboard"></i>
                            <a href="./penilaian.php">Grades</a>
                        </div>
                        <div class="topbar-dropdown-menu">
                            <i class="fa-regular fa-message"></i>
                            <a href="/dashboard.php">Messages</a>
                        </div>
                        <div class="topbar-dropdown-menu btn-logout">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <a href="./logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="navigation-mobile ">
    <div class="cross-mark"><i class="fa-solid fa-xmark"></i></div>
    <img src="./img/iconPage.png" alt="iconPage">
    <div class="sidebar-menu">
        <div class="menu">
            <i class="fa-solid fa-gauge"></i>
            <a href="/homePage.php">Home</a>
        </div>
        <div class="menu">
            <i class="fa-solid fa-graduation-cap"></i>
            <a href="/dashboard.php">Dashboard</a>
        </div>
        <div class="navigation-mobile-menu">
            <div class="dropdown">
                <div class="dropdown-title">
                    <p>Recent</p>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <div class="dropdown-menu ">
                    <div>
                        <i class="fa-solid fa-graduation-cap"></i>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-graduation-cap"></i>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-graduation-cap"></i>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-graduation-cap"></i>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    </div>
                    <div>
                        <i class="fa-solid fa-graduation-cap"></i>
                        <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown-title">
                    <p>Panduan Guru</p>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <div class="dropdown-menu">
                    <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                    <a href="/dashboard.php">Konsep Pengembangan Perangkat Lunak (A)</a>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown-title">
                    <p>Panduan Siswa</p>
                    <i class="fa-solid fa-angle-down"></i>
                </div>
                <div class="dropdown-menu">
                    <a href="/dashboard.php">Unduh PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>