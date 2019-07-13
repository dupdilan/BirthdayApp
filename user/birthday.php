<html>
<head>
    <title>Dashbord User</title>
    <style >
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            display: inline;
            float: left;
            width: 60px;
            border: 1px solid ;
            width: 18%;
        }
    </style>
</head>
<body>
    <h1>Users Dashbord</h1>
    <hr>
    <ul>
        <li><a href="userDashbord.php">Dashbord</a></li>
        <li><a href="birthday.php">Birthday</a></li>
        <li><a href="treat.php">Treat</a> </li>
        <li><a href="../login.php">Logout</a></li>
    </ul>
    <br>
    <hr>
    <h3>List of Birthday</h3>        
        <div>
            <?php
                require_once("php_action/viewAllBirthdays.php");
            ?>
        </div>

</body>

</html>