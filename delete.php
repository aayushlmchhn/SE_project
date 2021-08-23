<?php
    require_once 'database/connect.php';
    if(!$_GET['id']){
        echo'<p>error occured! </p>';
    }
    else{
        //get id value
        $id=$_GET['id'];

        //call delete function
        $result=$crud->deleteCollegeDetails($id);

        //redirect to the list
        if($result){
            header("Location: viewrecords.php ");
        }
        else{
            echo '<p> error has occured</p>';
        }

    }

?>