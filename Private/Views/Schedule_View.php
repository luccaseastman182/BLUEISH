```php
<?php
require_once '../Config/Database_Connect.php';
require_once '../Models/Schedule_Model.php';

class Schedule_View {
    private $scheduleModel;

    public function __construct() {
        $this->scheduleModel = new Schedule_Model();
    }

    public function displayAllSchedules() {
        $schedules = $this->scheduleModel->getAllSchedules();

        foreach($schedules as $schedule) {
            echo "<div class='schedule'>";
            echo "<h2>" . $schedule['title'] . "</h2>";
            echo "<p>" . $schedule['description'] . "</p>";
            echo "<p>Start Date: " . $schedule['start_date'] . "</p>";
            echo "<p>End Date: " . $schedule['end_date'] . "</p>";
            echo "</div>";
        }
    }
}
?>
```