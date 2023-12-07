```php
<?php
require_once '../Config/Database_Connect.php';

class Schedule_Model {
    private $db;

    public function __construct() {
        $this->db = new Database_Connect();
        $this->db = $this->db->getDb();
    }

    public function getSchedule($id) {
        $stmt = $this->db->prepare("SELECT * FROM schedules WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createSchedule($data) {
        $stmt = $this->db->prepare("INSERT INTO schedules (user_id, start_time, end_time) VALUES (:user_id, :start_time, :end_time)");
        $stmt->execute(['user_id' => $data['user_id'], 'start_time' => $data['start_time'], 'end_time' => $data['end_time']]);
        return $this->db->lastInsertId();
    }

    public function updateSchedule($id, $data) {
        $stmt = $this->db->prepare("UPDATE schedules SET user_id = :user_id, start_time = :start_time, end_time = :end_time WHERE id = :id");
        $stmt->execute(['id' => $id, 'user_id' => $data['user_id'], 'start_time' => $data['start_time'], 'end_time' => $data['end_time']]);
        return $stmt->rowCount();
    }

    public function deleteSchedule($id) {
        $stmt = $this->db->prepare("DELETE FROM schedules WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount();
    }
}
?>
```