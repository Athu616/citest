<?php
require_once __DIR__ . '/../model/CustomModel.php';

class CustomController {
    private $model;

    public function __construct() {
        $this->model = new CustomModel();
    }

    public function index() {
        $chassisDetails = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $chassis_no = $_POST['chassis_no'];
            $chassisDetails = $this->model->getChassisDetails($chassis_no);
        }

        require_once __DIR__ . '/../view/custom_view.php';
    }
}
