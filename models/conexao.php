
<?php
class conexao{
    public static function getConexao(){
        $database = "VET-PWEB";
        $username = "root";
        $senha = "";
        return new PDO("mysql:host=localhost;dbname=$database", $username, $senha);
    }


}