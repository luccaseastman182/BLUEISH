```php
<?php
require_once '../Config/Database_Connect.php';
require_once '../Models/Shift_Model.php';

class Shift_Controller {
    private $db;
    private $shiftModel;

    public function __construct() {
        $this->db = new Database_Connect();
        $this->shiftModel = new Shift_Model($this->db->connect());
    }

    public function createShift($shiftData) {
        return $this->shiftModel->createShift($shiftData);
    }

    public function getShifts() {
        return $this->shiftModel->getShifts();
    }

    public function getShiftById($shiftId) {
        return $this->shiftModel->getShiftById($shiftId);
    }

    public function updateShift($shiftId, $shiftData) {
        return $this->shiftModel->updateShift($shiftId, $shiftData);
    }

    public function deleteShift($shiftId) {
        return $this->shiftModel->deleteShift($shiftId);
    }
}
?>
```