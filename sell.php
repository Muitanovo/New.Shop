<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Получение данных из формы
  $productName = $_POST["productName"];
  $productPrice = $_POST["productPrice"];

  $uploadDir = "uploads/";
  $uploadedFile = $uploadDir . basename($_FILES["productImage"]["name"]);

  // Проверка и перемещение загруженного изображения
  if (move_uploaded_file($_FILES["productImage"]["tmp_name"], $uploadedFile)) {
    // Вставка данных в таблицу products (здесь необходимо настроить подключение к БД и запрос)
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "online_shop";

    $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

    // Проверка соединения
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO products (name, price, image) VALUES ('$productName', $productPrice, '$uploadedFile')";

    if (mysqli_query($conn, $query)) {
      echo "Product sold successfully.";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Закрытие соединения
    mysqli_close($conn);
  } else {
    echo "Error moving file: " . $_FILES["productImage"]["error"];
    echo "Uploaded file: " . $_FILES["productImage"]["tmp_name"];
    echo "Destination: " . $uploadedFile;
  }
}
?>
