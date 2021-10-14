<?php 
    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "datasiswa");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
              $rows[] = $row;
        }
    return ;
    }
    
?>
