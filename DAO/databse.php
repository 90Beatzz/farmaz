<?php
class DatabaseUtility{
        private $dsn, $username, $password, $database, $host;
    public $name, $pdo;
        public function __construct($host = "127.0.0.1:3306", $username ="root", $password = "", $database = "farmaz"){
            $this->host = $host;
            $this->dsn = "mysqli:dbname=$database;host:$host";
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
      
        }
    
    
               
        
public function connect(){
            try{
                $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password,null);
              //  $this->pdo = new PDO($this->dsn,$this->username,$this->password,null);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch(PDOException $err){
                die($err->getMessage());
            }
        }


public function search_med(){
    $sql = "select * from medicamento";
    $query = $this->pdo->query($sql);
    while ($linha=$query->fetch(PDO::FETCH_ASSOC))                          
            {  
                echo "============================================= <br>";
                echo "ID do medicamento: ".$linha['id']."<br>";
                echo "Nome do Produto ".$linha['nome_do_prod']."<br>";
                echo "Preço do Produto ".$linha['preco']."R$ <br>";            
                }
    }


}
