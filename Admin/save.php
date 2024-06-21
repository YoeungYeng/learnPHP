<?php
    $server = "localhost";
    $username = "root";
    $pass = "";
    $db_name = "test_model";
    $conn = "";
    $conn = mysqli_connect($server, $username, $pass, $db_name);
    //insert to database
    $id = $_POST['txt_id'];
    $name = $_POST['txt_name'];
    $model = $_POST['txt_model'];
    try{
       
        
        $sql = "INSERT INTO category(category_id, name, model) VALUES('$id', '$name', '$model')";
        $result = $conn->query($sql);
        if($result){
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the database connection
        $conn->close();
    }
?>