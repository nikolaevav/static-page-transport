<?php
// <html>
// <head>
// <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
// </head>
// <body>

/* Проверка на заполнение полей */
if (isset($_POST['11F1A3A9CC1486DFFECC0F35334CDF16FAEF863D']) && isset($_POST['8835E3D5DF64178F370BF9F841ECF54D5D8D079D'])) {

  $name = $_POST['11F1A3A9CC1486DFFECC0F35334CDF16FAEF863D'];
  $phone = $_POST['8835E3D5DF64178F370BF9F841ECF54D5D8D079D'];


  /* Убираем все лишние пробелы и переносы строк  и преобразуем все теги html в символы*/
  $name = htmlspecialchars(trim($name));
  $phone = htmlspecialchars(trim($phone));


  $pismo = "<html><body><b>Имя:</b> -- ". $name ."<br /><b>Телефон:</b> -- ". $phone ."<br /></body></html>";

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
  $headers .= 'From: h4539@ptzhost.com' . "\r\n";

  // mail('nuriko@inbox.ru','Обратный звонок для клиента сайта postavka-transporta.ru',$pismo,$headers)
  if (mail("postavka.transporta@mail.ru","Сообщение от пользователя сайта postavka-transporta.ru",$pismo,$headers)) {
    echo"Ваши контакты были отправлены. Пожалуйста подождите и с вами свяжется наш сотрудник";
  } else {
    echo"Ошибка при отправке, попробуйте позднее";
  }

}
// echo"<script type='text/javascript'>document.location.href='http://http://postavka-transporta.ru/';</script>";
//
// </body>
// </html>
?>