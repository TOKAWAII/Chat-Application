<?php

    //Now let's first crete a new data base and a new Table
    //Now that we have created our database let's connect using PDO

    //DB connection code

    try{

        $db = new PDO("mysql:host=localhost;dbname=chat_tutorial","root","");

        //Now we need to write the code to insert the message into our database
        $date = date("D M Y g a");
        $user = $_GET['user'];
        $message = $_POST["message"];

        //Now we will Add the sql query that will insert to message into our db
        $sql = "INSERT INTO messages (user_name,date,message_body) VALUES ('$user','$date','$message')";
        //Now let's Execute this query
        $db->exec($sql);
        echo "Message sent succefully";
        //now let's test it
        //Now it should work

        //Now we want to redirect to our index page without seeing this page
        header("location:index.php?user=$user");
        //Now let's fetch our database data

    }catch(PDOException $e){
        echo "Connection Failed: ". $e->getMessage();
    }

?>