<!-- <?php
    //let's copy our db connection code
    try{

        $db = new PDO("mysql:host=localhost;dbname=chat_tutorial","root","");

    }catch(PDOException $e){
        echo "Connection Failed: ". $e->getMessage();
    }


    //Now that we are connected to our database let's create the SELECT query
    $sql = "SELECT * FROM messages ORDER BY id DESC";
    $result = $db->query($sql);
    while($data = $result->fetch()){
        echo "<b>".$data['user_name']." :</b><p>".$data['message_body']."</p><span class='date'>[".$data['date']."]</span><br><br>";
    }

    //Now let's Refrech our index page and see
    //Now let's style our code

?> -->