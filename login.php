<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
include("config/db.php");

$error = "";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

if($role == "admin"){

$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){

$row = mysqli_fetch_assoc($result);
$_SESSION['admin_id'] = $row['id'];
$_SESSION['admin_name'] = $row['name'];

header("Location: admin/dashboard.php");
exit;

}else{
$error = "Invalid Admin Login";
}
}

if($role == "customer"){

$sql = "SELECT * FROM customers WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1){

$row = mysqli_fetch_assoc($result);
$_SESSION['customer_id'] = $row['id'];
$_SESSION['customer_name'] = $row['name'];

header("Location: user/home.php");
exit;

}else{
$error = "Invalid Customer Login";
}

}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

body{
margin:0;
font-family:Arial;

/* FULL BACKGROUND IMAGE */

background-image:url("assets/images/bg.jpg");
background-size:cover;
background-position:center;
background-repeat:no-repeat;

height:100vh;
display:flex;
justify-content:flex-end;   /* moves login box right */
align-items:center;
}

/* LOGIN BOX */

.card{
background:white;
padding:40px;
width:350px;
margin-right:80px;
border-radius:12px;
box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.card h2{
text-align:center;
color:#2c3e50;
margin-bottom:20px;
}

input,select{
width:100%;
padding:12px;
margin-top:10px;
border-radius:6px;
border:1px solid #ccc;
}

button{
width:100%;
padding:12px;
margin-top:15px;
border:none;
background:#43cea2;
color:white;
font-size:16px;
border-radius:6px;
cursor:pointer;
}

button:hover{
background:#2bb190;
}

</style>

</head>

<body>

<div class="card">

<h2>Login</h2>

<?php if(isset($error)){ ?>
<p style="color:red;text-align:center;"><?php echo $error; ?></p>
<?php } ?>

<form method="post">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<select name="role" required>
<option value="">Select Role</option>
<option value="admin">Admin</option>
<option value="customer">Customer</option>
</select>

<button type="submit" name="login">Login</button>

<p style="text-align:center;">
New user? <a href="register.php">Register</a>
</p>

</form>

</div>

</body>
</html>