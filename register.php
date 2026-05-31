<?php
include("config/db.php");

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($conn,
        "SELECT * FROM customers WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Email already exists');</script>";
    } else {
        mysqli_query($conn,
        "INSERT INTO customers
        (name, gender, age, address, phone, email, password)
        VALUES
        ('$name','$gender','$age','$address','$phone','$email','$password')");

        echo "<script>alert('Registration successful');window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg">

<div class="card">
<h2>Customer Register</h2>

<form method="post">
<input type="text" name="name" placeholder="Name" required>

<select name="gender">
<option>Male</option>
<option>Female</option>
</select>

<input type="number" name="age" placeholder="Age" required>

<textarea name="address" placeholder="Address" required></textarea>

<input type="text" name="phone" placeholder="Phone" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">Register</button>

</form>
</div>

</body>
</html>
