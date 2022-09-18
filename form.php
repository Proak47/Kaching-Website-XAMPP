<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Kaching|Contacts</title>
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
                <a href = "home.html" >Home</a>

                <a href="contacts.html" >Contact Us</a>
               
                <a href = "categories.html" >Categories</a>

                <div class="search">
                    <input type="search" width="400px" height="15px" placeholder="Search">
                    <input type="submit">
            </div>            
        </header>
        <div class="flex">
        <form action="form.check.php" method="post" id="fr">
            <table>
                <tr>
                    <th colspan="2">
                        Feedback Form
                    </th>
                </tr>
                <tr class="child">
                    <td><label for="user">Name:</label></td>
                    <td><input type="text" id="user" name="user"></td>
                </tr>                           
                <tr class="child">
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr class="child" >
                    <td rowspan="2"><label for="text1">Inquiry:</label></td>
                    <td rowspan="2"><input type="textarea" id="text1" name="text1"></td>
                </tr>
                <tr class="child">
                    <td colspan="2">
                        <input type="submit" value="Submit">
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
    
