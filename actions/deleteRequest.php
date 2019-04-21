<?php
if (!empty($_POST['req_fields'])) {
    $fields = $_POST['req_fields'];
    foreach ($fields as $field) {
        $field = trim($field);
        unlink(__DIR__.'/../requests/'.$field);
    }
    header('location: ../admin.php');
}



