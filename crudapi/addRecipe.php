<?php
// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Headers: X-Requested-With");
// header("Content-Type: application/json; charset=UTF-8");

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: text/plain');

$input = file_get_contents("php://input");
$data = json_decode($input, true);

        $title = $data['title'];
        $imageUrl = $data['imageUrl'];
        $ingredients = $data['ingredients'];
        
        // Create connection
        $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed: " . mysqli_connect_error());

        $sql = "INSERT INTO tblrecipe (title, imageUrl, ingredients) VALUES ('$title', '$imageUrl', '$ingredients')";

        if (mysqli_query($conn, $sql)) {
            echo '{ "msg": "Done" }';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
?>
