



<?php

    $name =$_POST["Name"];
    $Title = $_POST["Title"];
    $Description = $_POST["Description"];
    $Country = $_POST["Country"];
    $City = $_POST["City"];
    $DateCreated = $_POST["DateCreated"];
    shell_exec("exiftool -Title='$Title' -Description='$Description'  -Country='$Country'
     -City='$City'  ../uploads/$name");

shell_exec ("exiftool -g -FileName -XMP:all -IPTC:all -EXIF:all -json  ../ui/uploads/$name >../ui/output/$name.json");

    header('Location: details.php?imgid='.$name);

