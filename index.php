<!DOCTYPE html>
<html>
<head>
<title>Quick Grocer</title>

<style>

body{
margin:0;
font-family: 'Segoe UI', Tahoma, sans-serif;
background: linear-gradient(135deg,#44c0a6,#245c9c);
}

/* NAVBAR */

.navbar{
display:flex;
justify-content:space-between;
align-items:center;
padding:18px 60px;
background:#0b1a33;
}

.logo{
font-size:26px;
font-weight:bold;
color:#2ecc71;
}

.nav-buttons a{
color:white;
text-decoration:none;
margin-left:25px;
font-size:16px;
transition:0.3s;
}

.nav-buttons a:hover{
color:#2ecc71;
}

/* HERO SECTION */

.hero{
display:flex;
justify-content:space-between;
align-items:center;
background:white;
margin:40px;
padding:60px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.hero-text{
max-width:500px;
}

.hero-text h1{
font-size:40px;
margin-bottom:15px;
}

.hero-text p{
font-size:18px;
color:#555;
margin-bottom:30px;
line-height:1.6;
}

/* BUTTONS */

.btn{
padding:14px 28px;
border-radius:8px;
text-decoration:none;
color:white;
font-size:16px;
margin-right:15px;
transition:0.3s;
}

.login-btn{
background:#27ae60;
}

.login-btn:hover{
background:#1e874b;
transform:scale(1.05);
}

.register-btn{
background:#3498db;
}

.register-btn:hover{
background:#1c6fb3;
transform:scale(1.05);
}

/* HERO IMAGE */

.hero-image img{
width:480px;
border-radius:12px;
}

/* ABOUT SECTION */

.about{
background:white;
margin:40px;
padding:60px;
border-radius:15px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
text-align:center;
}

.about h2{
font-size:32px;
margin-bottom:20px;
}

.about p{
font-size:17px;
color:#555;
max-width:800px;
margin:auto;
line-height:1.7;
}

/* FOOTER */

.footer{
background:#0b1a33;
color:white;
padding:30px;
text-align:center;
margin-top:40px;
}

.footer h3{
margin-bottom:10px;
}

.footer p{
font-size:14px;
color:#ccc;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<div class="navbar">

<div class="logo">
🛒 Quick Grocer
</div>

</div>


<!-- HERO SECTION -->

<div class="hero">

<div class="hero-text">

<h1>Welcome to Quick Grocer</h1>

<p>
Your one-stop online store for daily grocery essentials.
Shop rice grains, spices, oils, snacks, dry fruits,
tea, coffee powder, noodles and more with ease.
</p>

<a href="login.php" class="btn login-btn">Login</a>

</div>

<div class="hero-image">

<img src="assets/images/grocery.jpg">

</div>

</div>


<!-- ABOUT SECTION -->

<div class="about">

<h2>About Quick Grocer</h2>

<p>
Quick Grocer is an online grocery shopping platform that allows customers to
purchase essential grocery items easily from home. Our store offers a wide
range of products including rice grains, masalas and spices, dry fruits and nuts,
cooking oils, snacks, tea and coffee powder, ready-made noodles and pasta,
and jams and sauces.  

The platform provides a simple and convenient way for users to browse products,
place orders, and manage their grocery shopping efficiently.
</p>

</div>


<!-- FOOTER -->

<div class="footer">

<h3>Quick Grocer</h3>

<p>Your trusted online grocery shopping partner</p>

<p>© 2026 Quick Grocer | Final Year Project</p>

</div>

</body>
</html>