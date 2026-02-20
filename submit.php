<?php
include "db.php";

if(isset($_POST['prn'])){

$name = $_POST['name'];
$prn = $_POST['prn'];
$category = $_POST['category'];
$complaint = $_POST['complaint'];
$status = "Pending";

$sql = "INSERT INTO complaints (name, prn, category, complaint, status)
VALUES ('$name', '$prn', '$category', '$complaint', '$status')";

if(mysqli_query($conn, $sql)){
    echo "Complaint Submitted Successfully ✅";
}else{
    echo "DB Error: " . mysqli_error($conn);
}

}