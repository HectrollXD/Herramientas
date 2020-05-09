<?php
    $ConnectionString = new mysqli("localhost", "root", "");
    $Query = $ConnectionString -> query("DROP DATABASE ToolboxLIAXY");
    if($Query){
        echo ("The database was droped successfully.");
        
    }
    else{
        echo ("The database must be manually removed");
    }
?>