<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if ($username == 'muhammad rahka yahsar renufinnian' && $password == 'h233600435') {
        header('Location: php_form.php');
    } else {
        echo "Username atau password salah";
    }
?>
