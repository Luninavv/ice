<?php
    $dbname = "a927299g_ice";
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $user = "a927299g_ice";
    $pass = "Lvv1912viva";
    try {
        $con = new PDO($dsn,$user,$pass);
    } catch(PDOExeption $e){
        var_dump($e);
        echo $e->getMessage();
    }

    $send = $con->query('SELECT * FROM `gallery`');
   
    function myFetch($res) {
        $posts =[];
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
        return $posts;
    }

    $posts = myFetch($send);
    