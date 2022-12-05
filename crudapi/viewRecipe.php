<?php
header('Access-Control-Allow-Origin: *'); 
    $con = mysqli_connect("localhost","root", "", "test") or die("Connection failed: " . mysqli_connect_error());
    $result= mysqli_query($con, "select * from tblrecipe");
    $data=array();
    while($row = mysqli_fetch_object($result)){
        $data[] = array(
            "id" =>$row->id,
            "title"=>$row->title,
            "imageUrl"=>$row->imageUrl,
            "ingredients"=>$row->ingredients
        );
    }
    echo json_encode($data);
    
?>