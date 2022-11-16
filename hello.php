<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Использование данных формы</title>
</head>
<body>
<?
print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '')
    $error = 'Введите ваш email';
else if (trim($message) == '')
        $error = 'Введите само сообщение';
    else if (strlen($message) < 10)
        $error = 'Сообщение должно быть более 10 символов';

if ($error != ''){
    echo $error;
    exit;}

$subject = "=?utf-8?B?" . base64_encode("Тестовое сообщение") . "?=";
$headers = "From: $email\r\n Reply-to: $email\r\n Content-type: text/html; charset=utf-8\r\n";

mail('heavenzor143@gmail.com', $subject, $message, $headers);

//header('Location: /index.php');

?>
</body>
</html>