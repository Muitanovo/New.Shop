<?php
function getConnection() {
    $dbHost = "localhost"; // Адрес хоста базы данных
    $dbUsername = "root"; // Имя пользователя базы данных
    $dbPassword = ""; // Пароль пользователя базы данных
    $dbName = "online_shop"; // Имя базы данных
  

if (isset($_POST['buy_button'])) {
    $itemId = $_POST['item_id'];

    // Обработка покупки, изменение статуса товара и т.д.

    header("Location: payment.html");
    exit(); 
}
}
?>
