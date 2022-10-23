<?php
namespace src\dao;
require_once 'src/models/User.php';
use src\models\UserDao;
use src\models\User;
use PDO;

class UserDaoMysql implements UserDao {

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function findByToken($token) {
        if(isset($token)) {

            $sql = $this->pdo->prepare("SELECT * FROM users WHERE token = :token");
            $sql->bindValue(':token', $token);
            $sql->execute();
            
            if($sql->rowCount() > 0) {
                $data = $sql->fetch(PDO::FETCH_ASSOC);
                $newUser = new User;
                $newUser->id    =   $data['id'];
                $newUser->name  =   $data['name'];
                $newUser->email =   $data['email'];
                $newUser->token =   $data['token'];
    
                return $newUser;
            }
            return false;
        }
    }
}