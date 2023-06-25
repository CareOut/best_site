<?php

	if (isset($_POST['name']) && $_POST['name'] != "")
		$name = $_POST['name'];
	else die ("Не заполнено поле \"Имя\"");

	if (isset($_POST['email']) && $_POST['email'] != "") 
		$email = $_POST['email'];
	else die ("Не заполнено поле \"Email\"");

	if (isset($_POST['tel']) && $_POST['tel'] != "") 
		$sub = $_POST['tel'];
	else die ("Не заполнено поле \"Телефон\"");
	 


	$address = "9226303141@mail.ru";
	$mes  = "Имя: $name \n";	
	$mes .= "E-mail: $email \n";
 	$mes .= "Тема: $sub \n";
	$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");

	if ($send) 
		echo "Сообщение отправлено успешно!";
	else 
		echo "Ошибка, сообщение не отправлено! Возможно, проблемы на сервере";
		 
?>