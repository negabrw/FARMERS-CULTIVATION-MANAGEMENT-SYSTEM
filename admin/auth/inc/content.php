<?php

if (!isset($_GET['route'])) {
    include("auth/route_pages/add_content.php");
} else {    
        include("auth/route_pages/" . $_GET['route'] . ".php");   
}
?>
