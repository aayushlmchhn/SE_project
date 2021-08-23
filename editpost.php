<?php

    require_once 'database/connect.php';
    //get values from the post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id=$_POST['id'];
        $college_name=$_POST['collegeName'];
        $college_type=$_POST['inputType'];
        $college_address=$_POST['inputAddress'];
        $college_state=$_POST['inputState'];
        $speciality_1=$_POST['inputSpeciality1'];
        $speciality_2=$_POST['inputSpeciality2'];
        $speciality_3=$_POST['inputSpeciality3'];
        $email=$_POST['inputEmail'];
        $chief_name=$_POST['inputchiefName'];
        $chief_email=$_POST['inputchiefEmail'];
        $chief_number=$_POST['inputchiefNumber'];
        $assistant_cheif1_name=$_POST['inputASSISTANTchiefName1'];
        $assistant_cheif1_email=$_POST['inputASSISTANTchiefEmail1'];
        $assistant_cheif1_number=$_POST['inputASSISTANTchiefNumber1'];
        $assistant_cheif2_name=$_POST['inputASSISTANTchiefName2'];
        $assistant_cheif2_email=$_POST['inputASSISTANTchiefEmail2'];
        $assistant_cheif2_number=$_POST['inputASSISTANTchiefNumber2'];
            
        
        //call crud function
        $result= $crud->editDetails($id,$college_name,$college_type,$college_address,$college_state,$speciality_1,$speciality_2,$speciality_3,$email,$chief_name,$chief_email,$chief_number,$assistant_cheif1_name,$assistant_cheif1_email,$assistant_cheif1_number,$assistant_cheif2_name,$assistant_cheif2_email,$assistant_cheif2_number);

        //redirect to index.php
        if($result){
            header("Location: index.php");
        }else{
            echo '<p> error encountered</p>';
        }


    }
    else{
        echo '<p>error encountered</p>';
    }



?>