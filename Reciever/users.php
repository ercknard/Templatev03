<?php
    //open connection to mysql db
    $connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b64914f07d5e65","f742c533","heroku_5142987c57081aa") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from tblusers";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $post = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $id=$row['id']; 
            $username=$row['username'];
            $contact=$row['contact'];  

            $posts[] = array('id'=> $id, 'username'=> $username, 'contact'=> $contact);
    }
    echo json_encode($post);

        //write to json file
        $fp = fopen('regusers.json', 'w');
        fwrite($fp, json_encode($emparray));
        fclose($fp);

    //close the db connection
    mysqli_close($connection);
?>