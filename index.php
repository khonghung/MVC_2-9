<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers;

$page = isset($_GET['page']) ? $_GET['page'] : "";

$bookController = new Controllers\BookController();
$studentController = new Controllers\StudentController();

include "src/Views/layout/header.php";
switch ($page) {
    case "book-list":
        if(isset($_GET['search'])){
            $bookController->search($_GET['search']);
        } else {
            $bookController->index();
        }
        break;



    case "student-list":
      if(isset($_GET['search'])){
            $studentController->search($_GET['search']);
        } else {
            $studentController->index();
        }
        break;

    case "book-create":
        $bookController->store();
        break;
    case "book-delete":
        $id = $_GET['id'];
        $bookController->delete($id);
        break;
    case "book-update":
        $id = $_GET['id'];
        $bookController->update($id);
        break;

}


include "src/Views/layout/footer.php";
