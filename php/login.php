<!DOCTYPE html>
<html>
    <head>
   <title>Admin Login</title>
    </head>
        <body style="background-color:pink";>
                <h1 style="text-align:center";><b>Admin Login</b></h1>
            <form action="admindash.php" method="post">
                <table align="center">
                    <tr>
                        <td >Username</td><td><input type="text" name="uname" required></td>
                    </tr><br>
                    <tr>
                        <td>Password</td><td><input type="password" name="psw" required></td>
                    </tr>
                    `<tr>
                            <td colspan="2" align="center" ><input type="submit" name="login" value="Login"></td>
                        </tr>
                </table>
            </form>   
        </body>
    
</html>
