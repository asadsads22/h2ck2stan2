<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST['service'];
    $target = $_POST['target'];
    $telegram = $_POST['telegram'];

    $data = "Service: $service | Target: $target | Telegram: $telegram" . PHP_EOL;

    file_put_contents("name.txt", $data, FILE_APPEND | LOCK_EX);

    header("Location: thanks.html");
    exit();
}
?>
