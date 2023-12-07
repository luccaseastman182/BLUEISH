```php
<?php
require_once '../Config/Database_Connect.php';

class User_Model {
    private $db;

    public function __construct() {
        $this->db = new Database_Connect();
        $this->db = $this->db->getDb();
    }

    public function getUser($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($username, $password, $email) {
        $stmt = $this->db->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
        $stmt->execute(['username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'email' => $email]);
        return $this->db->lastInsertId();
    }

    public function updateUser($id, $username, $password, $email) {
        $stmt = $this->db->prepare("UPDATE users SET username = :username, password = :password, email = :email WHERE id = :id");
        $stmt->execute(['id' => $id, 'username' => $username, 'password' => password_hash($password, PASSWORD_DEFAULT), 'email' => $email]);
        return $stmt->rowCount();
    }

    public function deleteUser($id) {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }
}
?>
```