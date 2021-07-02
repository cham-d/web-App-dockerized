<?php
session_start();

if (isset($_SESSION['User']))
{
    header("location:EditAllStudents.php");
}
else
{
    ?>

    <html lang="el">

<head>
    <title>LoginPage</title>
    <meta name="decription" content="Teacher Login>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body oncontextmenu="return false">
<?php require_once 'process.php'; ?>
<form action='process.php' method="POST">
    <div class="login-box">
        <img src="teacher.png" alt="">
        <h1>Sign In</h1>
        <div class="textbox">
            <input type="text" name="user" placeholder="Username">
            <i class="fa fa-user cust"></i>


        </div>

        <div class="textbox">
            <i class="fa fa-lock cust"></i>
            <input type="password" name="pass" placeholder="Password">

        </div>

        <button class="button" name="login">Login</button>
        <?php
        if ($_GET['Empty'] == true) {

            ?>
            <div class="inavlid_data"><?php echo $_GET['Empty'] ?></div>

            <?php
        }
        ?>



        <?php
        if ($_GET['Invalid'] == true) {

            ?>
            <div class="inavlid_data"><?php echo $_GET['Invalid'] ?></div>

            <?php
        }
        ?>
    </div>

</form>


<div class="bottomright">
    © 2019 Chamarousios Demetres TUC ΠΛΗ518 All Rights Reserved
</div>


</body>

    <?php
}
?>