<?php

require('./dbconnect.php');



class tableUser{
   private  $_db=null;
 
   public function __construct(){
    
     $this->_db = DB::getInstance(); 
    
   }

   public function userName(){
   
     $sql = $this->_db->query("SELECT id,name From author");
      
     while($res = $sql->fetch(PDO::FETCH_OBJ)){
          print $res->id.'<br>';
          print $res->name.'<br>';
     }
     
      
  }
  
  
   public function insertUser(){
 
    $sql = "INSERT INTO author (name) VALUES (:name)";
    $res = $this->_db->prepare($sql);
  
    $username = "Aleksandr";
    $res->bindParam(':name',$name);
    $res->execute();
  
   }
  
}


$user  = new tableUser();

 $user->userName();
 $user->insertUser();
 
 
 
 
 /*
class tableUser{
 //private $_db=null;
 
  //public function __construct(){
   //  $this->_db = DB::getInstance(); 
//}

  public function userName(){
    // global $db;
      //  $sql = $db->query("SELECT id,username FROM user");
        $sql=$_db->query("SELECT id,username From user where id<=6");
        //$res = $sql->fetchAll(PDO::FETCH_ASSOC);
 // echo'<pre>' ;
        //     print_r($res);
       //  echo'</pre>';
    
    while( $res = $sql->fetch(PDO::FETCH_OBJ)){
        //return "ID:".$res["id"]."-"."USERNAME:".$res["username"]."<br>";
        // print "ID:".$res["id"]."-"."USERNAME:".$res["username"]."<br>";
         // print "USERNAME:".$res["username"]."<br>";
       print $res->id.'<br>';
       print $res->username.'<br>';
        
    }
}

/*

public function insertUser(){
 //global $db;
  $sql = "INSERT INTO user (username) VALUES (:username)";
  $res = $db->prepare($sql);
  
  $username = "Bot";
  $res->bindParam(':username',$username);
  $res->execute();
  
}


public function updateUser(){
 // global $db;
  $sql ="UPDATE user SET username = :username WHERE id = :id";
  $res=$db->prepare($sql);
  
  $username = 'newName';
  $id = '6';
  
  $res->bindParam(':username',$username);
  $res->bindParam(':id',$id);
  $res->execute();
  
  
}

public function deleteUser(){
// global $db;
 $sql = "DELETE FROM user WHERE id>6";
$res = $db->prepare($sql);
$res->execute(); 
 
// $sql=$db->prepare("delete from user where id > 10 ");

//$sql->execute();
 
 
// $id ='7' ;
// $res->bindParam(':id',$id);
// $res->execute();
}
*/
//}
//$user  = new tableUser();
//$user->userName();