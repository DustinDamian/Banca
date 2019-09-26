<?php
include 'db.php';
class User extends DB{
    private $nombre;
    private $username;
    
    public function userExists($user, $pass,$tipo){
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE correo = :user AND password = :pass AND tipo = :tipo');
        $query->execute(['user' => $user, 'pass' => $pass, 'tipo' => $tipo]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE correo = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['correo'];
        }
    }
 public function getNombre(){
        return $this->nombre;
    }
}
?>
