<?php
// Укажите данные для подключения к базе данных
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'online_shop';

// Подключение к базе данных
$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buy_button'])) {
    $itemId = $_POST['item_id'];
    
    // Дополнительная логика для обработки покупки
    // ...

    // Перенаправление на страницу оформления покупки
    header("Location: payment.html");
    exit();
}

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<h3>{$row['name']}</h3>";
        echo "<p>Price: {$row['price']} Euro</p>";
        echo "<img src='{$row['image']}' alt='Product Image' width='200'><br>";
        
        // Форма для кнопки "Купить товар"
        echo "<form action='' method='post'>";
        echo "<input type='hidden' name='item_id' value='{$row['id']}'>";
        echo "<button type='submit' name='buy_button'>Купить товар</button>";
        echo "</form><br><br>";
    }
} else {
    echo "No products available.";
}

mysqli_close($conn);
?>


