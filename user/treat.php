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
    <h3>Upcoming Treat</h3>    
        <div>
            <?php
                require_once("php_action/upcomingTreat.php");
            ?>
        </div>
<br>
<hr>
    <h3>Passed Treat</h3>  
        <div>
            <?php
                require_once("php_action/passedTreat.php");
            ?>
        </div>

        <script>
                                    function statusChange(id){
                                        //trid=id.split('-')[1];
                                        //alert(trid);
                                        $(".btn_sub").attr("disabled",true);
                                        $.ajax({
                                            url: "php_action/join.php",
                                            type:"post",
                                            data:{ val : id, },

                                            success: function(result){
                                               // alert(result);
                                               
                                               //$('table#sHold tr#'+trid).remove();
                                                alert('Thank you for joining , Have a fun !!');
                                                location.reload();

                                        }
                                        });
                                    }
                                    
                                </script>

        
<script src="../asset/jquery-3.2.1.min.js"></script>
                            

                            
</body>

</html>