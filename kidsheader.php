<?php
$toprint .= '<body id="bodyId"><div id="navbar"><a href="index.html">Home</a><a href="kidsclub.php">Kids Club</a>';
$toprint .= '<link rel="stylesheet" type="text/css" href="kidsstyle.css">';
$toprint .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';


//checks if the user is logged in and displays myaccount and logout option
if (isset($_COOKIE["user_logged"]))
{
        $toprint .= '<a href="myaccount.php">My Account</a>';
        $toprint .= '<a href="logout.php">Logout</a>';

//checks if the user is Admin and will display add movies and Users options
        if (isset($_COOKIE["Admin"]))
        {
                $toprint .= '<a href="admin.php">Add movies</a>';
                $toprint .= '<a href="users.php">Users</a>';
        }
}
//if user is not logged in display a option to login
else
{
        $toprint .= '<a href="login.php">Login</a>';
}

//unsets the cookie user_logged to log them out
function logout()
{
        unset($_COOKIE["user_logged"]);
}

$toprint .= '</div>';
echo $toprint;
?>
