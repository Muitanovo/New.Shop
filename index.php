<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>New.Shop</title>
    <meta name="author" content="Artiom Jemeljanov">
    <link rel="stylesheet" href="profile icon.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <div class="profile-icon-wrapper">
        <div class='profile-icon'>
            <span><?php echo strtoupper(substr($username, 0, 1)); ?></span>
        </div>

        <div class='settings-popup'>
            <a href='profile-settings.php'>Настройки профиля</a>
            <a href='logout.php'>Выйти</a>
        </div>
    </div>

    <br>
    <header>
                <nav>
                    <ul>
                        <li><a href="sales.html">Sales</a></li>
                        <li><a href="purchase.php">Purchase</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="help.html">Help</a></li>
                    </ul>
                </nav>
                <script src="logo_change_color.js"></script>
                <div class="logo">
                    <p id="changeColor" onclick="changeHeaderColor()">NEW.SHOP</p>
                </div>
            </header>

    <script>
        const profileIcon = document.querySelector('.profile-icon');
        const settingsPopup = document.querySelector('.settings-popup');

        profileIcon.addEventListener('mouseenter', () => {
            settingsPopup.style.display = 'block';
        });

        profileIcon.addEventListener('mouseleave', () => {
            settingsPopup.style.display = 'none';
        });

        settingsPopup.addEventListener('mouseenter', () => {
            settingsPopup.style.display = 'block';
        });

        settingsPopup.addEventListener('mouseleave', () => {
            settingsPopup.style.display = 'none';
        });
    </script>
</body>
</html>





