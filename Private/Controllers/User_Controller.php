```php
<?php
require_once '../Config/Database_Connect.php';
require_once '../Models/User_Model.php';

class User_Controller {
    private $db;
    private $userModel;

    public function __construct() {
        $this->db = new Database_Connect();
        $this->userModel = new User_Model($this->db->connect());
    }

    public function registerUser($username, $password, $email) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $result = $this->userModel->createUser($username, $hashedPassword, $email);

        if($result) {
            return array('status' => 'SUCCESS', 'message' => 'User registered successfully');
        } else {
            return array('status' => 'ERROR', 'message' => 'Failed to register user');
        }
    }

    public function loginUser($username, $password) {
        $user = $this->userModel->getUserByUsername($username);

        if($user && password_verify($password, $user['password'])) {
            return array('status' => 'SUCCESS', 'message' => 'User logged in successfully');
        } else {
            return array('status' => 'ERROR', 'message' => 'Invalid username or password');
        }
    }

    public function updateUserProfile($username, $email) {
        $result = $this->userModel->updateUser($username, $email);

        if($result) {
            return array('status' => 'SUCCESS', 'message' => 'User profile updated successfully');
        } else {
            return array('status' => 'ERROR', 'message' => 'Failed to update user profile');
        }
    }
}
?>
```