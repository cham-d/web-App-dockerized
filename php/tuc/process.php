<?php
session_start();

$mysqli = new mysqli('mysql8','root','123456','myDB') or die(mysqli_error($mysqli));





if (isset($_POST['delete_yes'])) {
    $ID= $_POST['deleteId'];


    $result = $mysqli->query("DELETE FROM Students WHERE ID ='$ID' ") or die($mysqli->error);
    header("location:EditAllStudents.php");}


if (isset($_POST['updateBtn'])) {
    $name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $father_name = $_POST['father-name'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];
    $birthday = $_POST['birthday'];
    $ID= $_POST['editId'];


    $result = $mysqli->query("UPDATE Students SET NAME ='$name',SURNAME = '$last_name',FATHERNAME='$father_name',MOBILENUMBER='$phone',BIRTHDAY='$birthday',GRADE='$grade' WHERE ID='$ID'") or die($mysqli->error);
    header("location:EditAllStudents.php");}




if (isset($_POST['sendBtn'])) {
    $name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $father_name = $_POST['father-name'];
    $phone = $_POST['phone'];
    $grade = $_POST['grade'];
    $birthday = $_POST['birthday'];


    $result = $mysqli->query("INSERT INTO  Students (NAME,SURNAME,FATHERNAME,MOBILENUMBER,BIRTHDAY,GRADE) VALUES('$name','$last_name','$father_name','$phone','$birthday','$grade')") or die($mysqli->error);
    header("location:EditAllStudents.php");}
if (isset($_POST['login'])) {
    //Get values from index.php
    $username = $_POST['user'];
    $password = $_POST['pass'];





    if (empty($_POST['user']) || empty($_POST['pass']))
    {
        header("location:index.php?Empty= Please fill in your details to continue.");
    }
    else
    {
        $result=$mysqli->query("select * from Teachers where USERNAME='$username' and PASSWORD='$password'") or
        die($mysqli->error);

        if ($row=mysqli_fetch_assoc($result))
        {$c = $row['NAME']." ".$row['SURNAME'];
            $_SESSION['Name']=$c;


            $_SESSION['User']=$username;

            header("location:Teacher.php");
        }else
        {
            header("location:index.php?Invalid= Wrong username/password,please try again.");
        }


    }

}

