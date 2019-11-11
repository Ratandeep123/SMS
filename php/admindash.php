
<?php
  
    require ("conn.php");
    session_start();
    $flag = true;
    if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    $sql= "SELECT username,password FROM Admin WHERE username='$username' AND password='$password'";    
    $res = mysqli_query($conn, $sql);
   //$res =  $conn->query($sql);
    if($res->num_rows >0){
     ?>


        <!DOCTYPE html>
        <html>
            <head>
                <title></title>
                <link rel="stylesheet" type="text/css" href="../design.css"/>
            </head>
            <body style="background-color:pink";>
                <div class="container">
                        <div class="admintitle" align="center">
                                <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-szie:20px;">LOGOUT</a></h4>
                                    <h1>Welcome To Admin Dashbord</h1>
                            
                        </div>

                    <div class="dashbord">
                        <table align="center">
                            <tr>
                                <td>1</td><td><a href="insertstu.php">Insert Student Deatils</a></td>
                            </tr>
                            <tr>
                                <td>2</td><td><a href="updtstu.php">Update Student Deatils</a></td>
                            </tr>
                            <tr>
                                <td>3</td><td><a href="delstu.php">Delete Student Deatils</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
        </body> 

        </html>
        <?php

        }
        else{
            header("Location:login.php");
        }
        }
        ?>
