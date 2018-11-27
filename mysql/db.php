<?php 
// mvc: model, models/molds data from DB

include('connection.php');

    $sql = "SELECT * FROM listings";

    
    $result = mysqli_query($conn, $sql);
    // echo $result;    

    $myArray = array();

    // get mysql row as an array, nest each array into $myArray
    while ($row = mysqli_fetch_assoc($result)) {
        $myArray[] = $row;
    };

    mysqli_close($conn);

    // encode the array into JSON string text for ajax to parse back out into an object 
    header('Content-Type: application/json');
    $json = json_encode($myArray);
    echo $json;
    
    // $json = "i see you";
    

?>