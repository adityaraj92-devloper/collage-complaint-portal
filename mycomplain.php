<?php
include 'db.php';

$prn = $_POST['prn'] ?? '';

$result = mysqli_query($conn, "SELECT * FROM complaints WHERE prn='$prn'");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>My Complaints</title>

<style>
.status-container{
    width:90%;
    max-width:800px;
    margin:60px auto;
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 10px 20px rgba(0,0,0,0.25);
}
table{
    width:100%;
    border-collapse:collapse;
}
th,td{
    padding:12px;
    border-bottom:1px solid #ccc;
    text-align:center;
}
th{
    background:#0a2a66;
    color:white;
}
.pending{color:orange;font-weight:bold;}
.solved{color:green;font-weight:bold;}
</style>
</head>

<body>

<div class="status-container">
<h2>My Complaints</h2>

<table>
<tr>
<th>ID</th>
<th>Complaint</th>
<th>Category</th>
<th>Status</th>
</tr>

<?php
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $statusClass = strtolower($row['status'])=="solved" ? "solved" : "pending";
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['complaint']}</td>
                <td>{$row['category']}</td>
                <td class='$statusClass'>{$row['status']}</td>
              </tr>";
    }
}else{
    echo "<tr><td colspan='4'>No complaints found</td></tr>";
}
?>

</table>
</div>

</body>
</html>
