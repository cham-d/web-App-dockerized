
<div

</htm>
<head>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="nav">
    <ul>


        <li class="left"><a href="Teacher.php">Home</a> </li>
        <li class="left"><a href="EditAllStudents.php">Edit students</a> </li>
        <li class="left"><a href="AddStudent.php">Add Student</a> </li>


        <form action='SearchStudent.php' method="GET" >



        <input type="text" name="searchname" class="seach" placeholder="Search a Student" value=<?php
        echo $_GET['searchname'];

        ?> >
        <button type="submit" class="btn" name="searchBTN"><i class="fa fa-search"></i></button>
        </form>

        <li class="right"><a href="#"><?php echo $_SESSION['Name'] ?></a>
            <ul>
                <li><a href="logout.php"> LOGOUT</a></li>
            </ul>
        </li>


    </ul>
</div>
</body>