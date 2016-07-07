<?php

class ControllerBook {
    protected $data = array();
 	private  $_db=null;
	 
   	public function __construct(){
    
     	$this->_db = DB::getInstance(); 
    	
   	}
   
    public function actionIndex(){
        //return $this->actionList();
        
    }
    
 
	
    public function actionList(){
   		
   		$book = new ModelBook();
   		$books = $book->getList();
	}
	
	
	
	  
	  
		  
	
	
}
