<?php
$Name = $_POST["Name"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "cstump", "uicha4Ei", "cstump");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->query("INSERT INTO Users(user_id) VALUES ($Name)") && !empty($_POST))
{
    if ($Name != "")
    {
        echo ("Already Has a user");
    }

    else
    echo ("Please do not submit empty name");
}
else
{
    echo("Name successfully added to database");
}

$mysqli->close();
?>
