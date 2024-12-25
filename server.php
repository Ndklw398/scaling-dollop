<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Получаем данные из формы
  $name  = $_POST['name']  ?? '';
  $phone = $_POST['phone'] ?? '';

  // Формируем текст письма
  $subject = "Новая заявка с сайта";
  $message = "Имя: $name\nТелефон: $phone";

  // Адрес, на который отправлять
  $to = "freshcarekz@icloud.com";

  // Отправляем письмо
  $headers = "Content-type: text/plain; charset=UTF-8\r\n";
  if (mail($to, $subject, $message, $headers)) {
    // Успешная отправка
    echo "Заявка успешно отправлена!";
  } else {
    echo "Ошибка при отправке письма.";
  }
}
?>
