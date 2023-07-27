<?php
require_once 'db_config.php';

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST['name']);
    $country = sanitize($_POST['country']);
    $email = sanitize($_POST['email']);
    $mobile_number = sanitize($_POST['mobile']);
    $about_you = sanitize($_POST['about']);
    $birthday = sanitize($_POST['birthday']);

    $sql = "INSERT INTO users (name, country, email, mobile_number, about_you, birthday) 
            VALUES ('$name', '$country', '$email', '$mobile_number', '$about_you', '$birthday')";
if (mysqli_query($conn, $sql)) {
        echo "User information saved successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

