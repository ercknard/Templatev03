<?php
    //open connection to mysql db
    $connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b64914f07d5e65","f742c533","heroku_5142987c57081aa") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from tblusers";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);

    //write to json file
    $fp = fopen('regusers.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
?>