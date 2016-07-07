<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('./dbconnect.php');


function __autoload($class_name){
        //class directories
        
		$directorys  = array(
			'Controller/',
			'Model/',
			'View/',
			'Router/'
			
		);
        
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php'))
            {
                require_once($directory.$class_name . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                //return;
            }            
        }
    }


 



$router = new Router($_GET);


$router->setIndexController('book');


print $controllerName = 'Controller' . ucfirst($router->getController());
print "<br />".$actionName = 'action' . ucfirst($router->getAction());

//print $modelName = 'Model' . ucfirst($router->getController());
//print "<br />".$actionName = 'action' . ucfirst($router->getAction());





// Домашнее задание - сделать try{}catch{}, который бы выводил 404 ошибку,
// если параметры неправильные
// Сделать еще один action, который будет выводить id книги
// по урлу - ?page=book&action=view&id=1(любой id)


			
			
try {
    
if (class_exists($controllerName)) {
	$controller = new $controllerName();
	if (method_exists($controller, $actionName)) {
		$data = $controller->$actionName();

		
	//	echo '<pre>';
	//	print_r($data);
	//	echo '<pre>';
		
	
}	
else {
      throw new Exception("Method not found! <b>");
       }
}
 else {
        throw new Exception("Controller not found! <b>");
       }
}
catch (Exception $e) {
    echo   $e->getMessage(), "\n";
}


/*


try {

if (class_exists($modelName)) {
	$model = new $modelName();
	if (method_exists($model, $actionName)) {
	//	$data = $model->$actionName();

	
		
	
}	
else {
      throw new Exception("Method not found! <b>");
       }
}
 else {
        throw new Exception("Model not found! <b>");
       }
       
}
catch (Exception $e) {
    echo   $e->getMessage(), "\n";
}

*/

/*
function __autoload ($class) {
        
        /** AutoLoad Libs */
     //   if(file_exists("Router/".$class.".php")){
     //      require_once "Router/".$class.".php";
        /** AutoLoad Controllers */
     //   } elseif(file_exists("ControllerBook/".$class.".php")) {
      //     require_once "ControllerBook/".$class.".php";
      //  } 
        /** При ошибке */
       // else {
    //      exit("Имя файла не соответствует названию Класса");
    //   }
//	}
	

//require('./Router/Router.php');
//require('./ControllerBook/ControllerBook.php');
//require('./ControllerUser/ControllerUser.php');