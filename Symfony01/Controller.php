<?php
    
    //INCLUDES
    include_once 'DB.php';
    include_once 'User.php';
    session_start();
    //VARIABLES
    $db = new DB();
    $opt = $_REQUEST["opt"];
    
    
    
   
    
    
    //CASOS
    switch($opt){
        case "log":
            $UserName = $_REQUEST["name"];
            //$sessionName =$_SESSION["sessionUser"];
            
            $userCreate = $db->loginUser($UserName);
            
            //var_dump($userCreate);
            $userRol = $userCreate->getTipo_usuario();
            //echo $userRol;
       
           
           
            if($userRol == 'Director'){
                 $_SESSION["value"] = 1;
                 
                 $listaAlumnos = $db->listaAlumnos();
                 $listaFaltas = $db->listaFaltas($userRol);
                 
                 $_SESSION['listaAlumnos'] = $listaAlumnos;
                 $_SESSION['listaFaltas'] = $listaFaltas;
                 
                 header("Location: printerHTML.php ");
                  //1 printerHTML > FORMULARIO FALTAS
            }else{
                
            }
        
            
            
            
            break;
        
        default:
            
            break;
        
    }
?>

