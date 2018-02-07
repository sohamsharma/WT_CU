<html>

<head>
    <title>
        VroomCar
    </title>
</head>

<body bgcolor="beige" link="darkorange">
    <script>
        function validate(form) {
            var returnValue = true;
            var username = form.user.value;
            var password = form.password.value;
            var u = "martin";
            var p = "1234";

            if ((username != u) && (password != p)) {
                returnValue = false;
                alert("Your Username or password is invalid. \n Please try  again.");
                frmreg.user.value = "";
                frmreg.password.value = "";
                frmreg.user.focus();
            } else if ((username == u) && (password == p)) {
                alert("Welcome!!");
            }
        }
    </script>
    <?php
                    setcookie("user", "martin", time()+ 60,'/'); // expires after 60 seconds
                    echo 'the cookie has been set for 60 seconds<br>';
                    session_start(); //start the PHP_session function 

                    if(isset($_SESSION['page_count']))
                    {
                         $_SESSION['page_count'] += 1;
                    }
                    else
                    {
                         $_SESSION['page_count'] = 1;
                    }
                     echo 'You are visitor number ' . $_SESSION['page_count'];

                    $con = mysqli_connect("localhost","hr","admin","stu");
                    $sql = "create table studentlogin(user varchar(40) NOT NULL PRIMARY KEY, password varchar(25) NOT NULL)";
                    $sql_query = mysqli_query($con,$sql);
                    $ins = "INSERT INTO studentlogin (user , password) VALUES ('martin','1234')";
                    $ins_query = mysqli_query($con,$ins);
                    if ($con->query($ins_query) == TRUE) {
                    echo "New record created successfully";
                    } else {
                        echo "Error: " . $ins_query . "<br>" . $con->error;
                    }
                    mysqli_close($con);

/*                    if (isset($_GET['user']) && isset($_GET['password']))
                        {
                           if ($_GET["user"] == "soham" && $_GET["password"] == "1234") {
                              echo 'You have entered valid use name and password';
                           }else {
                              echo 'Wrong username or password';
                           }
                            }*/
                    if (isset($_POST["ref"]))
                        {
                           if ($_POST["ref"] == "soh") {
                              echo 'Referral Apllied';
                           }else {
                              echo 'Invalid Referral';
                           }
                            }
                  ?>
        <center>
            <form action="<?php $_PHP_SELF ?>">
                <!--method = "GET"-->
                <br>
                <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID:
                <input type="text" name="user">
                <br>
                <br> Password:
                <input type="password" name="password">
                <br>
                <br>
                <input type="submit" name="login" onclick="validate(form)">
                <br>
                <br>
            </form>
            <form action="<?php $_PHP_SELF ?>" method="POST">
                Referral:
                <input type="text" name="ref">
                <br>
                <br>
                <input type="submit" name="login">
            </form>
        </center>
</body>

</html>