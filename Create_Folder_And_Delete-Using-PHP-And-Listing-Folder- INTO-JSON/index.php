<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Create Folder And Delete</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="create.php" method="post">
            Enter The Name of The Folder: <input type="" name="folder_name">
            <input type="submit" value="Create-Folder">
        </form>
        <hr>
    </body>
</html>
<?php
$path = ".";
$dir = opendir($path) or die("Unable to open Directory");
while ($file = readdir($dir)) {
    if ($file == "." || $file == ".." || $file == "index.php" || $file == "create.php" || $file == "delete.php" || $file == "delete.png" || $file == "folder_list.json"){
        continue;
}
        echo "<a href='$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
    
}
closedir($dir);
?>
