<?php

$message = "Имя: $_POST[name] \n Телефон: $_POST[phone] \n Услуга: $_POST[product]";

echo $message;

mail(
"fortran@vk.com", 
"Заявка на обучение",
$message, 
'From: localhost:8080'
);