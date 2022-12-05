<?php
header('Access-Control-Allow-Origin: *'); 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];
        
        // Create connection
        $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed: " . mysqli_connect_error());

        $sql = "delete from tblrecipe where id=$id";

        if (mysqli_query($conn, $sql)) {
            echo "Data Deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
}
?>