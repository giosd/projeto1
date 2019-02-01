<?php

$erro[]='';
$sucesso[]='';


$nome = "";
$email = "";
$senha = "";
$senhaconfirma ="";

if(count($_POST) > 0){
print_r($_POST);

foreach ($_POST as $key => $value) {
  $$key = $value;
}

if(!$nome){
  $erro[]= "Digite seu nome !";

}
if(!$email){
  $erro[]= "Digite seu E-mail !";

}
if(!$senha){
   $erro[]= "Digite sua senha !";

}
if(!$senhaconfirma){
   $erro[]= "Digite sua confirmação de senha !";

}else{
  if($senha != $senhaconfirma){
     $erro[]=  "Senha diferentes";
  }
}

if(count($erro) >0){
  foreach ($erro as $key => $value) {
    print_r($value);
  }
}
}

?>

<!DOCTYPE html>
<head>
   <title>Layout</title>
   <link rel="stylesheet" href="colunascss.css" type="text/css" />
   
</head>
<body >
   <div id="total">
      <div id="topo">ECO</div>
     
      
      	<div id="col1">
      		<ul id="cont">
                        <li> Home </li>
                        <li> Cadastro </li>
                        <li> Sobre </li>

              </ul>
      </div>
  
      <div id="col2">
        <form method="post">

        Nome:<br/>
        <input type="text" name="nome"><br/><br/>
       
        E-mail:<br/>
        <input type="text" name="email"><br/><br/>
       
        Senha:<br/>
        <input type="password" name="senha"><br/><br/>
        
        Confirma Senha:<br/>
        <input type="password" name="senhaconfirma"><br/><br/>

        <input type="submit" name="">



        </form> 
      </div>
  
      <div id="inferior">Roda Pé</div>
   </div>
</body>
</html>

