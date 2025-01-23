<?php
    function conectaBD()
    {
        $host = "127.0.0.1";
        $dbname = "tdiw-j10";
        $user = "tdiw-j10";
        $password = "CS6TFpQQ";

        $conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

        return $conn;
    }