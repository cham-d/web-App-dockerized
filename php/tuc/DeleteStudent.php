<?php
session_start();

if (isset($_SESSION['User']))
{
    include_once("navbar.php");
$mysqli = new mysqli('mysql8','root','123456','myDB') or die(mysqli_error($mysqli));

    if (isset($_GET['deleteBTN'])) {
        $delete_id = $_GET['deleteId'];

        $result=$mysqli->query("SELECT * from Students WHERE ID='$delete_id '") or
        die($mysqli->error);
        $row = $result->fetch_assoc();

        $NAME=$row['NAME'];


    }

    ?>
    <head>
        <title>Delete Student</title>
        <link rel="stylesheet" href="AddStudent.css">
        <link rel="stylesheet" href="EditButtons.css">

    </head>

<div class="submission-form">
    <div class="results">
        <hi id="title" >Are you sure you want delete student <?php echo $NAME ?> ? </hi>
        <br>
        <a id="subtitle"> We will not be able to be undone or altered this action. </a>
    </div>


    <form action='process.php' method="POST" >
<div class="wrapper">
        <input type="hidden" name="deleteId"  value="<?= $delete_id ?>" />
        <input type="submit" name="delete_yes" class="button-delete" value="YES">

    <input type="button" onclick="window.location='Teacher.php';" name="delete_no" class="button-edit"value="NO">
</div>
    </form>

</div>




<?php
}
else
{

header("location:index.php");
}
?>
<body>

