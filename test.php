<?php
/* Принимаем данные из формы */
  $name = $_POST["sirname"]; 
  $email = $_POST["email"];
  $address = $_POST["address"];
  $text_message = $_POST["message"];

/* Подключаемся к базе данных */
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "POLI");

/* Записывает данные */ 
$sql = "INSERT INTO Pol(name, email, address, message) VALUES ('$name', '$email','$address', '$text_message')";
$result=mysqli_query($link, $sql);

/* Делаем редирект обратно */
header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;
?>
