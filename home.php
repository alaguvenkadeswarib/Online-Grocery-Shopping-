<?php
session_start();
include("../config/db.php");

if(!isset($_SESSION['customer_id'])) {
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
<link rel="stylesheet" href="../assets/css/style.css">

<style>

.top-bar{
    position:relative;
    padding:20px;
    text-align:center;
}

.back-btn{
    position:absolute;
    right:20px;
    top:20px;
    background:#ff7675;
    color:white;
    padding:10px 18px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.category-container{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
    gap:20px;
    padding:30px;
}

.category-card{
    background:white;
    border-radius:15px;
    text-align:center;
    padding:20px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

.category-card img{
    width:100%;
    height:150px;
    border-radius:10px;
}

.category-card h3{
    color:#185a9d;
}

.category-card a{
    display:inline-block;
    margin-top:10px;
    background:#43cea2;
    color:white;
    padding:10px 15px;
    border-radius:8px;
    text-decoration:none;
}

</style>
</head>

<body class="bg">

<div class="top-bar">

<h2 style="color:white;">
Welcome <?php echo $_SESSION['customer_name']; ?>
</h2>

<a href="../index.php" class="back-btn">⬅ Go Back</a>

</div>

<div class="category-container">

<?php
$result = mysqli_query($conn,"SELECT * FROM categories");

while($row = mysqli_fetch_assoc($result)){
?>
    <div class="category-card">

        <img src="../assets/images/<?php echo $row['image']; ?>">

        <h3><?php echo $row['category_name']; ?></h3>

        <a href="products.php?cat_id=<?php echo $row['id']; ?>">
        View Products
        </a>

    </div>
<?php } ?>

</div>

</body>
</html>