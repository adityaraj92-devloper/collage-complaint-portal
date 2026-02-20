<?php
ob_start();
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

include "db.php";

?>
<?php
include "db.php";

$total = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM complaints"))['total'];
$pending = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM complaints WHERE status='Pending'"))['total'];
$approved = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM complaints WHERE status='Approved'"))['total'];
$rejected = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM complaints WHERE status='Rejected'"))['total'];

$result = mysqli_query($conn,"SELECT * FROM complaints");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Complaint Dashboard</title>

<style>
body{
    font-family:Segoe UI, sans-serif;
    background:#f4f6fb;
    padding:30px;
}

h2{text-align:center;color:#1e293b;}

.counter{
    display:flex;
    gap:20px;
    margin-bottom:25px;
}

.box{
    flex:1;
    background:white;
    padding:18px;
    border-radius:12px;
    text-align:center finance;
    box-shadow:0 6px 16px rgba(0,0,0,.08);
}

.table-box{
    background:white;
    border-radius:14px;
    padding:15px;
    box-shadow:0 8px 20px rgba(0,0,0,.08);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#eef2ff;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #eee;
}

select{
    padding:6px;
    border-radius:6px;
}

button{
    background:#4f46e5;
    color:white;
    border:none;
    padding:7px 14px;
    border-radius:8px;
}
</style>
</head>

<body>

<h2>Admin Complaint Dashboard</h2>

<div class="counter">
<div class="box">Total<br><b><?= $total ?></b></div>
<div class="box">Pending<br><b><?= $pending ?></b></div>
<div class="box">Approved<br><b><?= $approved ?></b></div>
<div class="box">Rejected<br><b><?= $rejected ?></b></div>
</div>

<div class="table-box">
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>PRN</th>
<th>Category</th>
<th>Complaint</th>
<th>Status</th>
<th>Update</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<form method="POST">
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['name']) ?></td>
<td><?= $row['prn'] ?></td>
<td><?= $row['category'] ?></td>
<td><?= htmlspecialchars($row['complaint']) ?></td>

<td>
<select name="status">
<option <?= $row['status']=="Pending"?"selected":"" ?>>Pending</option>
<option <?= $row['status']=="Approved"?"selected":"" ?>>Approved</option>
<option <?= $row['status']=="Rejected"?"selected":"" ?>>Rejected</option>
</select>
</td>

<td>
<input type="hidden" name="id" value="<?= $row['id'] ?>">
<button name="update">Update</button>
</td>
</form>
</tr>
<?php } ?>

</table>
</div>

</body>
</html>

<?php
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $status=$_POST['status'];

    mysqli_query($conn,"UPDATE complaints SET status='$status' WHERE id='$id'");
    header("Location: admin_dashboard.php");
}
?>