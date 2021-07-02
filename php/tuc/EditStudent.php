<?php
session_start();

if (isset($_SESSION['User']))
{
    include_once("navbar.php");
$mysqli = new mysqli('mysql8','root','123456','myDB') or die(mysqli_error($mysqli));

    if (isset($_GET['editBtn'])) {
        $edit_id = $_GET['editId'];

        $result=$mysqli->query("SELECT * from Students WHERE ID='$edit_id'") or
        die($mysqli->error);
        $row = $result->fetch_assoc();

      $NAME=$row['NAME'];
      $SURNAME=$row['SURNAME'];
      $FATHERNAME=$row['FATHERNAME'];
      $MOBILENUMBER= $row['MOBILENUMBER'];
      $BIRTHDAY =$row['BIRTHDAY'];
      $GRADE=$row['GRADE'];


    }

    ?>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" href="AddStudent.css">

    <link rel="stylesheet" href="SearchStudent.css">


</head>
<body>


<div class="results">
    <hi id="title">Edit Student <?php echo $NAME?></hi>

</div>

<body>
<div class="submission-form">
    <form action='process.php' method="POST" >
        <input type="hidden" name="editId" value="<?= $edit_id ?>" />
        <label for="first-name">
            Name
        </label>

        <input type="text" id="first-name" name="first-name" value=<?php echo $NAME ?> required>

        <label for="last-name">
            SurName
        </label>

        <input type="text" id="last-name" name="last-name" value=<?php echo $SURNAME ?> required>

        <label for="father-name" >
            Fathername
        </label>

        <input type="text" id="father-name" name="father-name" value=<?php echo $FATHERNAME ?> required>


        <label for="phone">
            Mobile number
        </label>

        <input type="tel" id="phone" name="phone" value=<?php echo $MOBILENUMBER ?> required>
        <label for="grade">
            Grade
        </label>

        <input type="number" id="grade" name="grade" value=<?php echo $GRADE ?> required>
        <label for="birthday">
            Birthday
        </label>

        <input type="date" id="birthday" name="birthday" value=<?php echo $BIRTHDAY ?> required>


        <input type="submit" value="Edit Student" name="updateBtn" id="sendBtn">



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
