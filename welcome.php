

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php $_SESSION['username']?></title>
    <link rel="stylesheet" href="peace.css">
</head>

<body>
    <div class="image">
        <!-- <img src="ogo.png" class="logo"> -->
        <div class="m-text">
            <h1>Peace Solution</h1>
            <p>Welcome To Our Blog Website</p>
            <div class="m-btn">
                <a href="index.php"><span></span>Logout</a>
                <!-- <a href="signup.php"><span></span>Sign Up</a> -->
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
    <!-- features -->
    <div id="blog">
        <div class="title-text">
            <b>
                <h1>
                    <p>BLOG SECTION</p>
                </h1>
            </b><br>
            <i>
                <h2> Blog Members</h2>
            </i>
        </div>
        <div class="container">
            <div class="box">
                <div class="img">
                    <img src="sunil.jpeg">
                </div>
                <div class="content">
                    <h3> Sunil Malav</h3>
                    <!-- <p>This is blog of sunil malav</p> -->
                    <button class="btn"><a href="sunil.php">Read More</a></button>

                </div>

            </div>
            <div class="box">
                <div class="img">
                    <img src="pravin.jpeg">
                </div>
                <div class="content">
                    <h3> Praveen Jangid</h3>
                    <!-- <p>This is blog of praveen jangid</p> -->
                    <button class="btn"><a href="pravin.php">Read More</a> </button>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="box">
                <div class="img">
                    <img src="rizwan.jpeg">
                </div>
                <div class="content">
                    <h3> Rizwan Ansari</h3>
                    <!-- <p>This is blog of rizwan ansari</p> -->
                    <button class="btn"><a href="rizwan.php"> Read more</a></button>

                </div>

            </div>
            <div class="box">
                <div class="img">
                    <img src="sohaibh.jpeg">
                </div>
                <div class="content">
                    <h3> sohaibh Khan</h3>
                    <!-- <p>This is blog of sohaibh khan</p> -->
                    <button class="btn"><a href="Sohaibh.php">Read More</a></button>

                </div>

            </div>




        </div>

    </div>
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



    <table id="footer" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <!-- Heading Start-->
                    <tr>
                        <td height="90" align="center" valign="middle" colspan="1">
                            <font face="arial" color="#f3971b" size="5">
                                Contact us
                            </font>
                            <!-- <hr width="70" color="#f3971b"> -->

                        </td>
                    </tr>
                    <!--Heading End-->

                    <tr>
                        <td align="center" valign="top">
                            <table border="0" width="28%" cellpadding="15" cellspacing="0" align="center"
                                bgcolor="#c2c0c3">
                                <tr>
                                    <td width="30%">
                                        <font face="arial" size="4" color="#ffffff">
                                            Name:
                                        </font>
                                    </td>
                                    <td width="70%">
                                        <font face="arial" size="4" color="#ffffff">
                                            <input type="text" size="44">
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="arial" size="4" color="#ffffff">
                                            Email:
                                        </font>
                                    </td>
                                    <td width="70%">
                                        <font face="arial" size="4" color="#ffffff">
                                            <input type="text" size="44">
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <font face="arial" size="4" color="#ffffff">
                                            Message:
                                        </font>
                                    </td>
                                    <td width="70%">
                                        <font face="arial" size="4" color="#ffffff">
                                            <textarea rows="5" cols="42"></textarea>
                                        </font>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="30%">
                                        <!-- &nbsp;  -->
                                    </td>
                                    <td width="70%">
                                        <button type="Submit">
                                            <font face="arial" size="4" color="#292929">
                                                Submit
                                            </font>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="3">
                            &nbsp;
                        </td>
                    </tr>
                </table>
            </td>

        </tr>

    </table>


    <table id="footer" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#c2c0c3">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
                    <!-- footer Start -->
                    <!-- <tr>
                        <td height="90" align="center" valign="middle" colspan="1">
                            <font face="arial" color="#f3971b" size="5">
                                <p> Copyright reserved by &copy; PeaceSolution.com</p>
                            </font>
                        </td>
                    </tr> -->
                    <!-- footer End -->

                </table>
            </td>

        </tr>

    </table>




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