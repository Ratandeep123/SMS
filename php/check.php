<body style="background-color:pink">
    <h3 style="text-align:right;"><a href="login.php">Admin Portal</a></h3>
    <h1 style="text-align:center; margin-top:55px">Welcome to Student Management System</h1>
            <table width="30%;" align="center" border="1">
                        <tr>
                            <td colspan="2" align="center"><b>Student Information</b></td>
                        </tr>
                        <tr>
                            <td align="right">Choose Standerd</td>
                        <td>
                            <select name="student" style="text-align:center;">
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                                <option value="5">5th</option>
                                <option value="6">6th</option>
                            </select>
                        </td>
                        </tr>
                        <tr>
                            <td align="right"> Enter Roll No</td>
                            <td><input type="text" name="rollno" required></td>
                        </tr>
                    `<tr>
                            <td colspan="2" align="center"><input type="submit" name="submit" value="show info"></td>
                        </tr>
                    </table>
</body>
<?php

