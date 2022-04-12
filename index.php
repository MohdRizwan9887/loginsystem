

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogging-for blog</title>
    <link rel="stylesheet" href="peace.css">
</head>

<body>
    <div class="image">
        <!-- <img src="ogo.png" class="logo"> -->
        <div class="m-text">
            <h1>Peace Solution</h1>
            <p>Welcome To Our Blog Website</p>
            <div class="m-btn">
                <a href="login.php"><span></span>Login</a>
                <a href="signup.php"><span></span>Sign Up</a>
            </div>
        </div>
    </div>
    <div id="sideNav">
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact us">Contact Us</a></li>
                <!-- <li><a href="#about us">About Us</a></li> -->
            </ul>
        </nav>
    </div>
    <div id="menubtn">
        <!-- <a href="#" id="menu">Menu</a> -->
        <img src="menu.png" id="menu">
    </div>

    




    <script>
        var menubtn = document.getElementById("menubtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";

        menubtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "closed.png";
            }
            else {
                sideNav.style.right = "-250px";
                menu.src = "menu.png";
            }
        }
    </script>




    <table id="footer" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#292929">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <!-- footer Start-->
                    <tr>
                        <td height="90" align="center" valign="middle" colspan="1">
                            <font face="arial" color="#f3971b" size="5">
                                <p> Copyright reserved by &copy; PeaceSolution.com</p>
                            </font>
                        </td>
                    </tr>
                    <!--footer End-->

                </table>
            </td>

        </tr>

    </table>
</body>

</html>