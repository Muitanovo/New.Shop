<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Подключение к базе данных MySQL (замените значения на свои)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_connect";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Ошибка подключения к базе данных: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $name = $_POST["name"];

    $sql = "INSERT INTO users (username, password, name) VALUES ('$username', '$password', '$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Регистрация успешна!";
    } else {
        echo "Ошибка регистрации: " . $conn->error;
    }

    $conn->close();
}
?>