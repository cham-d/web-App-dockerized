<?php
session_start();

if (isset($_SESSION['User']))
{
include_once("navbar.php");
$mysqli = new mysqli('mysql8','root','123456','myDB') or die(mysqli_error($mysqli));

    if (isset($_GET['searchBTN'])) {
        $search_name = $_GET['searchname'];

        $result=$mysqli->query("SELECT * from Students WHERE NAME='$search_name' OR FATHERNAME='$search_name' OR SURNAME='$search_name'") or
        die($mysqli->error);



    }

?>
<head>
    <title>Search Results</title>
    <link rel="stylesheet" href="SearchStudent.css">
    <link rel="stylesheet" href="EditButtons.css">




</head>
<style>
    .table-Decor{

        border-collapse: collapse; /*gia n exoyme mikrotera kena metaksy twn leksewn-kathgoriwn*/
        margin:25px;
        font-size: 0.9em;
        min-width: 750px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.15);
        margin-left: auto;
        margin-right: auto;
    }
    .table-Decor thead tr {
        background-color:#592e35; /*kokkino to heading tou pinaka*/
        color:#ffff;
        text-align: left; /*gia thn eythigrammhsh*/
        font-weight: bold;
    }

    .table-Decor th,
    .table-Decor td{
        padding: 12px 15px;
    }

    .table-Decor tbody tr{ /*pio emfaneis baseis*/
        border-bottom: 1px solid #dddddd;
    }
    .table-Decor tbody tr:last-of-type{ /*gia na mppei kokkinaki sthn teleytaia grammh*/
        border-bottom: 2px solid #592e35;
    }

    .table-Decor tbody tr:nth-of-type(even) /*ektos apo tis even seires*/
    {
        background-color: #f3f3f3; /*gia to effect tou elafrws alagmenoy xrvmatos ana 2 seires*/

    }

</style>
<body>
<div class="results">
<hi id="title"> Search Results</hi>

</div>





<?php
$check=false;
while ($row = $result->fetch_assoc()): $check=true;?>
<div >
    <table class="table-Decor"  >
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Father Name</th>
            <th>Mobile Number</th>
            <th>Birthday</th>
            <th>Grade</th>
            <th align="center">Action</th>

        </tr>


        </thead>


    <tr>
        <td><?php echo $row['ID']; ?></td>
        <td><?php echo $row['NAME']; ?></td>
        <td><?php echo $row['SURNAME']; ?></td>
        <td><?php echo $row['FATHERNAME']; ?></td>
        <td><?php echo $row['MOBILENUMBER']; ?></td>
        <td><?php echo $row['BIRTHDAY']; ?></td>
        <td><?php echo $row['GRADE']; ?></td>

        <td>
            <form action='EditStudent.php' method="GET" >
                <button type="submit" class="button-edit" name="editBtn">Edit</button>
                <input type="hidden" name="editId" value="<?= $row['ID'] ?>" />
            </form>

            <form action='DeleteStudent.php' method="GET" >
                <input type="hidden" name="deleteId" value="<?= $row['ID'] ?>" />
                <button type="submit" class="button-delete" name="deleteBTN">Delete</button>
            </form>

        </td>

    </tr>
<?php endwhile;
if ($check==false)
{
    ?>

    <div class="results1">
        <hi >Can't find anything for this.</hi>
    </div>
    <img src="magn.svg" class="center" height="100" width="100">
    <?php
}
}
else
{

    header("location:index.php");
}
?>
<body>
