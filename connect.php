<?php
	 try{
  $handler=new PDO('mysql:host=localhost;dbname=forum','root','');
  $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
  echo $ex->getMessage();
}

?>