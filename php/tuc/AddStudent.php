<?php
session_start();

if (isset($_SESSION['User']))
{
    include_once("navbar.php");
if (isset($_GET['searchBTN'])) {
    $name = $_GET['searhbox'];



    header("location:EditAllStudents.php");}

    ?>
    <head>
        <title>Add New Student</title>
        <link rel="stylesheet" href="AddStudent.css">

    </head>
<body>
<div class="submission-form">
<form action='process.php' method="POST" >
    <div class="results">
    <hi id="title" >Add Student Form</hi>
    </div>
    <label for="first-name">
         Name
    </label>

    <input type="text" id="first-name" name="first-name" required>

    <label for="last-name">
       SurName
    </label>

    <input type="text" id="last-name" name="last-name" required>

    <label for="father-name" >
        Fathername
    </label>

    <input type="text" id="father-name" name="father-name" required>


    <label for="phone">
        Mobile number
    </label>

    <input type="tel" id="phone" name="phone" maxlength="10" required >
    <label for="grade">
        Grade
    </label>

    <input type="number" id="grade" name="grade" step="0.01" min="1" max="10" required>
    <label for="birthday">
        Birthday
    </label>

    <input type="date" id="birthday" name="birthday" required>


    <input type="submit" value="Add Student" name="sendBtn" id="sendBtn">



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
