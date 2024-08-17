<?php

include 'config.php';



if (isset($_GET['id'])) 
{

    $id = $_GET['id'];

    $query = "DELETE FROM schedule WHERE id = '$id'";

    $result = mysqli_query($conn, $query);

    header('location:adminpage.php');
}
    






?>