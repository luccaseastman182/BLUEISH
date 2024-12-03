```php
<?php
require_once '../Config/Database_Connect.php';

class Shift_Model {
    private $db;

    public function __construct() {
        $this->db = new Database_Connect();
        $this->db = $this->db->connect();
    }

    public function createShift($shiftData) {
        $query = "INSERT INTO shifts (shift_name, start_time, end_time) VALUES (:shift_name, :start_time, :end_time)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($shiftData);
        return $this->db->lastInsertId();
    }

    public function getShift($shiftId) {
        $query = "SELECT * FROM shifts WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $shiftId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateShift($shiftId, $shiftData) {
        $query = "UPDATE shifts SET shift_name = :shift_name, start_time = :start_time, end_time = :end_time WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $shiftData['id'] = $shiftId;
        $stmt->execute($shiftData);
        return $stmt->rowCount();
    }

    public function deleteShift($shiftId) {
        $query = "DELETE FROM shifts WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $shiftId]);
        return $stmt->rowCount();
    }
}
?>
```