```php
<?php
require_once '../Config/Database_Connect.php';
require_once '../Models/Shift_Model.php';

class Shift_View {
    private $shiftModel;

    public function __construct() {
        $this->shiftModel = new Shift_Model();
    }

    public function displayShifts() {
        $shifts = $this->shiftModel->getAllShifts();

        foreach($shifts as $shift) {
            echo "<div class='shift'>";
            echo "<h2>" . $shift['shift_name'] . "</h2>";
            echo "<p>Start Time: " . $shift['start_time'] . "</p>";
            echo "<p>End Time: " . $shift['end_time'] . "</p>";
            echo "</div>";
        }
    }
}

$shiftView = new Shift_View();
$shiftView->displayShifts();
?>
```