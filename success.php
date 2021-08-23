<?php 
    $title="successPage";
    require_once 'includes/header.php';
    require_once 'database/connect.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
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

        //call function to insert and track if success or not
        $isSuccess = $crud->insert($college_name,$college_type,$college_address,$college_state,$speciality_1,$speciality_2,$speciality_3,$email,$chief_name,$chief_email,$chief_number,$assistant_cheif1_name,$assistant_cheif1_email,$assistant_cheif1_number,$assistant_cheif2_name,$assistant_cheif2_email,$assistant_cheif2_number);

        if($isSuccess){
            echo "<h2 class='container text-center text-success'>you have successfully regeistered details of the college</h2>";
        }
        else{
            echo"<h2 class='container text-center text-danger'>registering details of the college failed</h2>";
        }
    }
?>



<div class="card text-center" style="width: 30rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title">
        <?php 
            echo $_POST['collegeName'];
            // echo "<p>college type:$_POST['inputType']</p>;"
        ?>

    </h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">college type: <?php echo $_POST['inputType']; ?> </li>
    <li class="list-group-item">address: <?php echo $_POST['inputAddress']; ?> </li>
    <li class="list-group-item">state: <?php echo $_POST['inputState']; ?> </li>
    <li class="list-group-item">speciality#1: <?php echo $_POST['inputSpeciality1']; ?> </li>
    <li class="list-group-item">speciality#2: <?php echo $_POST['inputSpeciality2']; ?> </li>
    <li class="list-group-item">speciality#3: <?php echo $_POST['inputSpeciality3']; ?> </li>
    <li class="list-group-item">email:<?php echo $_POST['inputEmail']; ?> </li>
    <li class="list-group-item">campus chief:<?php echo $_POST['inputchiefName']; ?> </li>
    <li class="list-group-item">campus chief email:<?php echo $_POST['inputchiefEmail']; ?> </li>
    <li class="list-group-item">campus chief number:<?php echo $_POST['inputchiefNumber']; ?> </li>
    <li class="list-group-item">assistant campus chief: <?php echo $_POST['inputASSISTANTchiefName1']; ?></li>
    <li class="list-group-item">assistant campus chief email: <?php echo $_POST['inputASSISTANTchiefEmail1']; ?></li>
    <li class="list-group-item">assistant campus chief number: <?php echo $_POST['inputASSISTANTchiefNumber1']; ?></li>
    <li class="list-group-item">assistant campus chief: <?php echo $_POST['inputASSISTANTchiefName2']; ?></li>
    <li class="list-group-item">assistant campus chief email: <?php echo $_POST['inputASSISTANTchiefEmail2']; ?></li>
    <li class="list-group-item">assistant campus chief number: <?php echo $_POST['inputASSISTANTchiefNumber2']; ?></li>
    
  </ul>
  <div class="card-body">
    <a href="index.php" class="card-link text-decoration-none ">add another detail</a>
    <a href="viewrecords.php" class="card-link text-decoration-none ">view the detail added to the database</a>
  </div>
</div>


<?php 
    //$title="indexPage"
    require_once 'includes/footer.php';
?>