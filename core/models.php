<?php
require_once 'dbConfig.php';

function insertNewUserToRecords ($pdo, $firstName, $lastName, $gender, $age, $experience, $job) {
    $sql = "INSERT INTO registration_records (first_name, last_name, gender, age, experience, type_of_job)
    VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$firstName, $lastName, $gender, $age, $experience, $job]);

    if ($executeQuery ) {
        return true;
    }

}

function seeAllUserRecords($pdo) {
    $sql = "SELECT * FROM registration_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery ) {
        return $stmt->fetchAll();
    }
}

function getUserByID($pdo, $user_id) {
    $sql = "SELECT * FROM registration_records
            WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$user_id])) {
        return $stmt->fetch();
    }
}

function updateAUser($pdo, $user_id, $firstName, $lastName, $gender, $age, $experience, $job) {
    $sql = "UPDATE registration_records
                SET  first_name = ?, 
                     last_name = ?, 
                     gender = ?,
                     age = ?, 
                     experience = ?, 
                     type_of_job = ?
            WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$firstName, $lastName, $gender, $age, $experience, $job, $user_id]);

    if($executeQuery) {
        return true;
    }
}

function deleteAUser($pdo, $user_id){
    $sql = "DELETE FROM registration_records
            WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$user_id]);

    if ($executeQuery){
        return true;
    }
}
?>