<?php

class DB{
     
    const DB_HOST = '127.0.0.1';
    const DB_NAME = 'test';
    const DB_USER = 'igorkozirovsky13';
    const DB_PORT = '3306';
    const DB_TYPE = 'mysql';
    private static $_db=null;
      
      public static function getInstance(){
        
         if(self::$_db===null){
              self::$_db = new PDO(self::DB_TYPE.':host='.self::DB_HOST.';dbname='.self::DB_NAME, self::DB_USER, '');
         }
         return self::$_db;
      }
      
      private function __construct(){}
      private function __clone(){}
      private function __wakeup(){}
}



/*

try{

$db = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, '');
$db->exec("SET CHARACTER SET utf8");
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
   echo $e->getMessage();
   die();
}

*/






