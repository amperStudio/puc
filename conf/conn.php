<?php
 function conn_mysql(){

   $servidor = '186.233.184.19';
  /* $servidor = '127.0.0.1';*/
   $porta = 3306;
   //$porta = 3306;
   $banco = "pucminas";
   //$usuario = "root";
   $usuario = "jppuc";
   //Elias2014 root
   $senha = "anaclara";
   
      $conn = new PDO("mysql:host=$servidor;
                      port=$porta;
                  dbname=$banco", 
                  $usuario, 
                  $senha,
                  array(PDO::ATTR_PERSISTENT => true)
                  );
      //Seta para UTF-8
      $conn->exec("SET CHARACTER SET utf8");
      return $conn;
   }
?>
