<?php
session_start();

if (isset($_SESSION['User']))
{
    include_once("navbar.php");
$mysqli = new mysqli('mysql8','root','123456','myDB') or die(mysqli_error($mysqli));



$result=$mysqli->query("SELECT s.NAME,s.SURNAME,GRADE FROM Students s WHERE s.GRADE = (select max(s2.GRADE) from Students s2);
") or
die($mysqli->error);
    ?>
    <head>
        <title>Home Panel</title>
        <link rel="stylesheet" href="SearchStudent.css">


    </head>

<body>
<div class="results">
    <hi id="title"> Students Statistics</hi>
</div>

<?php
$check=false;
$counter=0;
while ($row = $result->fetch_assoc()): $check=true;
    $counter++;
    if ($counter==1) {

        ?>
        <div class="results1">
            <hi>Highest Grade is:  </hi>
            <?php echo $row['GRADE'];
            ?>
            <p
            <hi>Student(s) with the greatest Grade is/are : </hi>
        </div>

        <?php
    }
    ?>
<div class="results">
    <?php echo $row['NAME']." ".$row['SURNAME'];
   ?>
</div>
<?php endwhile;
if ($check==false) {
    ?>


    <div class="results">
        <hi>No data in Database, please insert some students.</hi>
    </div>
    <?php
}
}
else
{

    header("location:index.php");
}
?>
</body>
