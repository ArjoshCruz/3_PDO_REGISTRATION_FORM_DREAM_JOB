<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewUserBtn'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $job = $_POST['job'];

    if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($age) && !empty($experience) && !empty($job)){
        $query = insertNewUserToRecords($pdo, $firstName, $lastName, $gender, $age, $experience, $job);

        if($query){
            header("Location: ../index.php");
        } else{
            echo "Query Failed";
        }
    } else {
        echo "Do not leave a field empty";
    }
}
if(isset($_POST['editUserBtn'])){
    $user_id = $_GET['user_id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $job = $_POST['job'];

    $query = updateAUser($pdo, $user_id, $firstName, $lastName, $gender, $age, $experience, $job);

    if($query){
        header("Location: ../index.php");
    } else{
        echo "Update Failed";
    }
}

if(isset($_POST['deleteUserBtn'])) {
    $query = deleteAUser($pdo, $_GET['user_id']);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion Failed";
    }
}

?>