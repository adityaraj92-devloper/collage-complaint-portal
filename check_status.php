<?php
include 'db.php';

$prn = $_POST['prn'];

$sql = "INSERT INTO complaints (name, prn, category, complaint, status)
VALUES ('$name', '$prn', '$category', '$complaint', '$status')";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "Status: " . $row['status'];
    }
}else{
    echo "No Complaint Found!";
}
?>