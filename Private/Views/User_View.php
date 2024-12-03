```php
<?php
require_once '../Models/User_Model.php';
require_once '../Config/Database_Connect.php';

class User_View {
    private $userModel;

    public function __construct() {
        $this->userModel = new User_Model(Database_Connect::getInstance());
    }

    public function displayUsers() {
        $users = $this->userModel->getAllUsers();
        foreach ($users as $user) {
            echo "<div class='user'>";
            echo "<h2>" . htmlspecialchars($user['name']) . "</h2>";
            echo "<p>Email: " . htmlspecialchars($user['email']) . "</p>";
            echo "<p>Role: " . htmlspecialchars($user['role']) . "</p>";
            echo "</div>";
        }
    }
}
?>
```