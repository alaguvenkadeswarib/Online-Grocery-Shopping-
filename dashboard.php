<?php
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: ../login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

body{
    margin:0;
    background:linear-gradient(135deg,#43cea2,#185a9d);
    font-family:Arial;
}

/* main box */
.box{
    width:650px;
    margin:120px auto;
    background:white;
    padding:40px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

/* card container */
.cards{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
    margin-top:30px;
}

/* card design */
.card{
    background:#f4f6f9;
    padding:25px;
    border-radius:12px;
    text-decoration:none;
    color:#185a9d;
    font-size:18px;
    font-weight:bold;
    transition:0.3s;
}

/* hover effect */
.card:hover{
    background:#185a9d;
    color:white;
    transform:translateY(-5px);
}

/* logout card */
.logout{
    color:red;
}

.logout:hover{
    background:red;
    color:white;
}

</style>
</head>

<body>

<div class="box">

<h2>Welcome Admin</h2>

<div class="cards">

<a href="manage_products.php" class="card">Manage Products</a>

<a href="view_customers.php" class="card">View Customers</a>

<a href="sales_history.php" class="card">Sales History</a>

<a href="../logout.php" class="card logout">Logout</a>

</div>

</div>

</body>
</html>