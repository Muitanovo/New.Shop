<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
    <link rel="stylesheet" href="profile icon.css"> <!-- Подключаем стили для иконки профиля -->
</head>
<body>
    <div class="profile-icon-wrapper">
        <div class="profile-icon" onclick="toggleSettings()"> <!-- В этом месте появится иконка профиля -->
            <span><?php echo strtoupper(substr($username, 0, 1)); ?></span>
        </div>
        <div class="settings-popup" id="settingsPopup">
            <a href="profile-settings.php">Настройки профиля</a>
            <a href="logout.php">Выйти</a>
        </div>
    </div>

    <script>
        function toggleSettings() {
            var settingsPopup = document.getElementById("settingsPopup");
            settingsPopup.style.display = (settingsPopup.style.display === "block") ? "none" : "block";
        }
    </script>
</body>
</html>
