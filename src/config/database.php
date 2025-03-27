<?php
    
    $host        ="localhost";
    $port        ="5432";
    $dbname       ="petstore";
    $user        ="postgres";
    $possword    ="postgres";

    $data_connection="
        host=$host
        post=$post
        dbname=$dbname
        user=$user
        password=$password
    ";
    
    $conn = pg_connect($data_connection);

    if(!$conn){
        echo("Connection error")

    }else{
        echo("Success !!!")
    }

    pg_close($conn);

?>