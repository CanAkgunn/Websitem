<?php
    // Giriş durumunu kontrol etmek için kullanıcı adı ve şifreyi burada tanımlayın.
    $username = "s221210067";
    $password = "68284168700";

    // Kullanıcının formu doldurup gönderip göndermediğini kontrol ediyoruz.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];

        // Girilen kullanıcı adı ve şifreyi kontrol ediyoruz.
        if ($inputUsername == $username && $inputPassword == $password) {
            echo "<h1>Giriş yapıldı!</h1>";
        } else {
            echo "<h1>Hatalı kullanıcı adı veya şifre!</h1>";
        }
    }
    ?>