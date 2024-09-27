<?php
$email_benar = "rezasmk1@gmail.com";
$password_benar = "xrpl10";

$login_berhasil = false;

while (!$login_berhasil) {
    echo "masukkan email: ";
    $email = trim(fgets(STDIN));

    echo "masukkan password: ";
    $password = trim(fgets(STDIN));

    if ($email == $email_benar && $password == $password_benar) {
        echo "login berhasil!\n";
   } else {
        echo "Email atau password salah\n";
   }
}
?>
