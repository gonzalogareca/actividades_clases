<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
echo(strlen($usuario)>=10)?"Bienvenido  : ".$usuario :"El usuario debe contener 10 digitos" ;
$num=[0,1,2,3,4,5,6,7,8,9];
$c=0;
foreach ($num as $numeros ){
    # code...
    //encontrar las posiciones de los elementos
    if(strpos($password,$numeros)>=0){
        $c++;
    };
}
echo ($c>0)? " : Contraseña Correcta " : "Error En la contraseña";


?>