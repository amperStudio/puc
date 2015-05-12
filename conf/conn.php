<?php
 function conn_mysql(){
//Database=pucAKpCXSI0Zx64K;Data Source=br-cdbr-azure-south-a.cloudapp.net;User Id=b8beb24bbb9ba3;Password=870fdc21
   $servidor = 'br-cdbr-azure-south-a.cloudapp.net';
  /* $servidor = '127.0.0.1';*/
   $porta = 3306;
   //$porta = 3306;
   $banco = "pucAKpCXSI0Zx64K";
   //$usuario = "root";
   $usuario = "b8beb24bbb9ba3";
   //Elias2014 root
   $senha = "870fdc21";
   
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
