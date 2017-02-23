<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FinID (Финид) - аутсорсинг бухгалтерии</title>
    <link rel="stylesheet" type="text/css" href="/App/templates/css/style.css">
</head>

<?php
$youremail = "n@gmail.com";
$subject = "FinID";
$email = $_POST['e-mail'];
$name = $_POST['name'];
$message = $_POST['message'];

if ($name == ""){
    ?>
    <script language='javascript'>
        var delay = 500;
        alert("Введите Ваше имя");
        setTimeout("document.location.href='http://finid.ru/index.php?action=One'", delay);
    </script>
    <?php
} elseif ($message == "") {
    ?>
    <script language='javascript'>
        var delay = 500;
        alert("Введите Ваше сообщение");
        setTimeout("document.location.href='http://finid.ru/index.php?action=One'", delay);
    </script>

    <?php
} elseif ($email == "") {
    ?>
    <script language='javascript'>
        var delay = 500;
        alert("Введите e-mail или телефон");
        setTimeout("document.location.href='http://finid.ru/index.php?action=One'", delay);
    </script>
    <?php
}
else {
$message1 = "Кто: $name\n
	Откуда: $email\n
	Сообщение: \n
	$message";
$headers = 'From: robot@finid.ru' . "\r\n" .
    'Reply-To: $email' . "\r\n";
mail($youremail, $subject, $message1, $headers);
echo('Данные для расчета отправлены');
?>
<script language='javascript'>
    var delay = 1000;
    alert("Запрос на расчет успешно отправлен!");
    setTimeout("document.location.href='http://finid.ru/index.php?action=One'", delay);
</script>

<?php
}
?>