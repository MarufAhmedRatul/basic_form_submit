<?php

session_start();

//extraction form data
$applicant_name = $_POST['applicant_name'];
$applicant_name_ban = $_POST['applicant_name_ban'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$mobile = $_POST['mobile'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$guardian_name = $_POST['guardian_name'];
$relation_guardian = $_POST['relation_guardian'];
$dob = $_POST['dob'];
$nationality = $_POST['nationality'];
$marital_status = $_POST['marital_status'];
$cff = $_POST['cff'];
$blood_grp = $_POST['blood_grp'];
$gander = $_POST['gander'];
$exam_name = $_POST['exam_name'];
$exam_group = $_POST['exam_group'];
$subjects = $_POST['subjects'];
$application_date = date("m.d.Y");


$connection = new mysqli('localhost', 'root', '', 'clg_admission_form');

if($connection->connect_error){
    die('Unable to connect : '.$connection->connect_error);
}else{

    if($applicant_name != "" AND $father_name != "" AND $mother_name != "" AND $mobile != "" AND $present_address != "" AND $present_address != "" AND $guardian_name != "" AND $relation_guardian != "" AND $dob != "" AND $nationality != "" AND $cff != "" AND $blood_grp != "" AND $gander != "" AND $exam_name != "" AND $exam_group != "" AND $subjects != ""){


        if($mobile){}

        $stmt = $connection->prepare("insert into students(applicant_name, applicant_name_ban, father_name, mother_name, mobile, present_address, permanent_address, guardian_name, relation_guardian, dob, nationality, marital_status, cff, blood_grp, gander, exam_name, exam_group, subjects, application_date) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param('sssssisssssssssssss', $applicant_name, $applicant_name_ban, $father_name, $mother_name, $mother_name, $present_address, $permanent_address, $guardian_name, $relation_guardian, $dob, $nationality, $marital_status, $cff, $blood_grp, $gander, $exam_name, $exam_group, $subjects, $application_date);


        $stmt->execute();

        $success = 'Form submit successful.';

        header("Location: index.php?message=$success");

        $stmt->close();

        $connection->close();

        
    }
    else{
        $submit_error = 'Please Fill all required fields.';

        header("Location: index.php?submit_error=$submit_error");
    }
}

?>



