
<?php
    //get the db connection file
    require_once 'ConnectDB.php';

    try {
        //query
        $sql = " SELECT * from Students";

        //Excute the query
        $result = mysqli_query($connect,$sql);

        //check if data executed
        if (mysqli_num_rows($result)>0) {
            //fetch the data from rows
            while ($row = mysqli_fetch_assoc($result)){
                print_r($row);
            } 
        }else {
            echo "No results";
            
        }
    
    } catch (Exception $e) {
        //throw $th;
        die($e ->getMessage());
    }


?>