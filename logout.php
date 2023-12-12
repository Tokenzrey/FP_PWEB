<?php
session_start();
session_destroy(); // Destroy the whole session
header("Location: index.php"); // Redirect to the home page or any other page after logout
