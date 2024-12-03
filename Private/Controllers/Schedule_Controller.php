```php
<?php
require_once '../Config/Database_Connect.php';
require_once '../Models/Schedule_Model.php';

class Schedule_Controller {
    private $db;
    private $scheduleModel;

    public function __construct() {
        $this->db = new Database_Connect();
        $this->scheduleModel = new Schedule_Model($this->db->connect());
    }

    public function createSchedule($userId, $scheduleData) {
        return $this->scheduleModel->create($userId, $scheduleData);
    }

    public function getSchedule($userId) {
        return $this->scheduleModel->get($userId);
    }

    public function updateSchedule($userId, $scheduleData) {
        return $this->scheduleModel->update($userId, $scheduleData);
    }

    public function deleteSchedule($userId) {
        return $this->scheduleModel->delete($userId);
    }
}
?>
```