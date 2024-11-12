<?php
require_once __DIR__ . '/../config/database.php';

class CustomModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getChassisDetails($chassis_no) {
        $stmt = $this->conn->prepare("SELECT * FROM custom WHERE chassis_no = ?");
        $stmt->bind_param('s', $chassis_no);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return "No details found for this chassis number.";
        }
    }
}
