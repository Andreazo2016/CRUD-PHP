<?php
try{
     $pdo =  new PDO("mysql:host=localhost;dbname=udemy","root","123321a");
}catch(pdoexception $e){
    echo "Erro Ao conectar!!!";

}

?>