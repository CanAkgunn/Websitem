<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri al
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Burada yapılacak işlemler, örneğin veritabanına kaydetme veya e-posta gönderme gibi, ihtiyaca göre belirlenmelidir.

    // Örnek: Verileri ekrana yazdırma
    echo "<h2>Gönderilen Bilgiler:</h2>";
    echo "<p><strong>Ad:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>E-posta:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Mesaj:</strong> " . htmlspecialchars($message) . "</p>";
}
?>

