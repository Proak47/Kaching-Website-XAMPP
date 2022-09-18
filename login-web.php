<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Kaching|Home</title>
        <link rel="stylesheet" type="text/css" href="form.css">
        
        <meta charset= "utf-8"> 
    </head>

    <body>
    <div id="container">
        <header id= "top">
            <h1><a href ="home.html">
                <img src ="logo1.png" style="width:500px;height:100px;">
            </a></h1>
            <h4>The Most Trusted Sellers! &nbsp;|&nbsp; The Best Quality Products! &nbsp;|&nbsp; Guaranteed Cashback!</h4>
            <br>
            <div class="nav">
                <!--Buttons-->
                <a href = "signin-web.php">Login</a>
                <a href = "home.html" >Home</a>

                <a href="contacts.html" >Contact Us</a>
               
                <a href = "categories.html" >Categories</a>

                <div class="search">
                <input type="search" width="400px" height="15px" placeholder="Search">
                <input type="submit">
                </div>
            </div>            
        </header>
        <br><br><br><br><br>
        
        <div class="flex">
            <form action="login.check.php" method="post" id="fr">
                <table>
                    <tr>
                        <th colspan="2">
                            Log In 
                        </th>
                    </tr>
                    <tr class="child">
                        <td><label for="mail">Email:</label></td>
                        <td><input type="email" id="mail" name="mail"></td>
                    </tr>
                    <tr>
                    <tr class="child">
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" id="password" name="password"></td>
                    
                    <tr class="child">
                        <td colspan="2">
                            <input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        

    </div>
    </body>
    <footer>
        <small>
            <i>Copyright &copy; 2020 Kaching.com </i>
        </small>
    </footer>
</html>
        