<?php
    //Parameter: host/server/Ip Address, username, password, database name, port, socket
    //Host: localhost, root, "", jr

    $conn = mysqli_connect("localhost", "root", "", "jr"); 
    if($conn){
        //echo "Database Connected";
    }

?>