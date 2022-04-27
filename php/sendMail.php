<?php   
$userName = $_POST['user_name'];
mail('amenhottep21@gmail.com', 'Тестовое письмо', "Привет, $userName");
//echo "Hello $userName";
?>