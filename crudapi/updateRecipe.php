<?php
header('Access-Control-Allow-Origin: *'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $imageUrl = $_POST["imageUrl"];
    $ingredients = $_POST["ingredients"];

    // Create connection
    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed: " . mysqli_connect_error());

    $sql = "update tblrecipe set title='$title' , imageUrl='$imageUrl', ingredients='$ingredients' where id=$id ";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}