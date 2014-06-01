<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php

/* Проверка на заполнение полей */
if (isset($_POST['4a545eea722cf0ae1033bdb91b861d81']) && isset($_POST['cab0d407c2f90da0f7956cb2155f6f26']) && isset($_POST['d244447c221924b34cda6065bd61bb9c']) && isset($_POST['aebf1289d1d0ad50b8b4c302245dd1f9'])) {

  $name = $_POST['4a545eea722cf0ae1033bdb91b861d81'];
  $email = $_POST['cab0d407c2f90da0f7956cb2155f6f26'];
  $title = $_POST['d244447c221924b34cda6065bd61bb9c'];
  $message = $_POST['aebf1289d1d0ad50b8b4c302245dd1f9'];

  /* Убираем все лишние пробелы и переносы строк  и преобразуем все теги html в символы*/
  $name = htmlspecialchars(trim($name));
  $email = htmlspecialchars(trim($email));
  $title = htmlspecialchars(trim($title));
  $message = htmlspecialchars(trim($message));

  $pismo = "<html><head><title>Письмо от пользователя.</title></head><body>"+
  "<b>Имя</b> -- "+ $name +"<br />"+
  "<b>Почта</b> -- "+ $email +"<br />"+
  "<b>Тема</b> -- " + $title + "</body></html>"+
  "<b>Сообщение</b> -- " + $message + "</body></html>";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From:  '.$pochta."\r\n";

  // mail("postavka.transporta@mail.ru","Сообщение от пользователя сайта postavka-transporta.ru",$pismo2,$headers);
  mail("nuriko@inbox.ru","Сообщение от пользователя сайта postavka-transporta.ru",$pismo,$headers);

echo '<script type="text/javascript">
  $('.alert-message').html('Ваше письмо отправлено на электронную почту. Подождите немного и с вами свяжется наш сотрудник.');
</script>';

?>
</body>
</html>