<?php
$toprint .= '<body id="bodyId"><div id="navbar"><a href="index.html">Home</a><a href="kidsclub.php">Kids Club</a>';
$toprint .= '<link rel="stylesheet" type="text/css" href="kidsstyle.css">';
$toprint .= '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';



if (isset($_COOKIE["user_logged"]))
{
        $toprint .= '<a href="myaccount.php">My Account</a>';
        $toprint .= '<a href="logout.php">Logout</a>';

        if (isset($_COOKIE["Admin"]))
        {
                $toprint .= '<a href="admin.php">Administrator</a>';
        }
}
else
{
        $toprint .= '<a href="login.php">Login</a>';
}


function logout()
{
        unset($_COOKIE["user_logged"]);
}

$toprint .= '</div>';
echo $toprint;
?>
