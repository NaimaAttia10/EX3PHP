<?php 
session_start();
    $_SESSION['notes']=array();
    $taille = count($_SESSION['notes']);
    $title = $_POST['title'];
    $cont = $_POST['not'];
    $var = $title.'#'.$cont;
    $_SESSION['notes'][$taille] = $var;    
?>
 <?php 
            foreach($_SESSION['notes'] as $data){
                $position = strpos($data,'#');
                $titre = substr($data,0,$position);
                $contenu = substr($data,$position-strlen($data)+1);
            }?>