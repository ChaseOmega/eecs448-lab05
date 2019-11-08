<?php
$Post = $_POST["Post"];
$Name = $_POST["Name"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "cstump", "uicha4Ei", "cstump");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (!$mysqli->query("INSERT INTO Posts(content,author_id) VALUES ($Post,$Name)") && !empty($_POST))
{
    if ($Post!= "")
    {
        echo ("User Not Found");
    }

    else
    echo ("Please do not submit empty post");
}
else if (!empty($_POST))
{
    echo("Post successfully added to database");
}

$mysqli->close();
?>
