<?php
    require_once(__DIR__ . "/../model/database.php"); //searches for the database.php file
    
    $connection = new mysqli($host, $username, $password, $database); //creates a connection with the variables

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //filters posts and prints them out
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

    $query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'"); //starts  connection with title and post to send it to the server
 
    if($query) {
        echo "<p>Successfully inserted post: $title</p>"; //displays what the title was in the post
    }
    else {
        echo "<p>$connection->error</p>"; //checks if there's an error with the post
    }
    
    $connection->close(); //closes connection to my database,