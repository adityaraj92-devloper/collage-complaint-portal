<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sandip University Student Complaint Portal</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(#eef2f5,#dbe3ec);
}

header {
    background: #003366;
    color: white;
    padding: 15px;
    display: flex;
    align-items: center;
}

header img {
    height: 50px;
    margin-right: 15px;
}

header h1 {
    font-size: 22px;
}

.container {
    width: 400px;
    max-width: 90%;
    background: white;
    margin: 60px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
}

.container h2 {
    text-align: center;
    margin-bottom: 20px;
    color:#003366;
}

input, select, textarea {
    width: 100%;
    padding: 11px;
    margin: 10px 0;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size:15px;
}

textarea{
    height:120px;
    resize:none;
}

button {
    width: 100%;
    padding: 12px;
    background: #003366;
    color: white;
    border: none;
    border-radius: 6px;
    font-size:16px;
    cursor: pointer;
}

button:hover{
    background:#002244;
}

.status-btn {
    margin-top: 12px;
    background: linear-gradient(to right,#28a745,#4cd964);
    font-weight:bold;
}

.status-btn:hover{
    opacity:0.9;
}
</style>
</head>

<body>

<header>
<img src="https://th.bing.com/th/id/OIP.IiIiMo924DAsoqdm8AMu8gHaHa?w=180&h=180&c=7&r=0&o=7&dpr=1.5&pid=1.7&rm=3">
<h1>Sandip University Student Complaint Portal</h1>
</header>

<div class="container">

<h2>Submit Your Complaint</h2>

<form action="submit.php" method="POST">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <input type="text" name="prn" placeholder="Enter Your PRN Number" required>
    <input type="text" name="cource" placeholder="Enter Your Cource" required>
    <input type="text" name="branch" placeholder="Enter Your Branch" required>

    <select name="category" required>
        <option value="">Select Category</option>
        <option value="Water Problem">Water Problem</option>
        <option value="Electricity">Electricity</option>
        <option value="Teacher Issue">Teacher Issue</option>
        <option value="Classroom">Classroom</option>
        <option value="Lab Issue">Lab Issue</option>
        <option value="Ragging">Ragging</option>
        <option value="Other Issue">Other Issue</option>
    </select>

    <textarea name="complaint" placeholder="Enter your complaint" required></textarea>

    <button type="submit">Submit Complaint</button>

</form>

<a href="check_status_form.php">
    <button type="button" class="status-btn">Check Complaint Status</button>
</a>

</div>

</body>
</html>
<link rel="stylesheet" href="style.css">