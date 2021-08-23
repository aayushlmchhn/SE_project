<?php 
    $title="view Page";
    require_once 'includes/header.php';
    require_once 'database/connect.php';
    //get college details from id

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $result = $crud->getCollegeDetails($id);
    }else{
        echo"<h3 class='text-danger'>check the details and try again</h3>";
    }

?>



<div class="card text-center" style="width: 30rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title">
        <?php 
            echo $result['college_name'];
            // echo "<p>college type:$_POST['inputType']</p>;"
        ?>

    </h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">college type: <?php echo $result['type_name']; ?> </li>
    <li class="list-group-item">address: <?php echo $result['college_address']; ?> </li>
    <li class="list-group-item">state: <?php echo $result['name']; ?> </li>
    <li class="list-group-item">speciality#1: <?php echo $result['speciality_1_name']; ?> </li>
    <li class="list-group-item">speciality#2: <?php echo $result['speciality_2_name']; ?> </li>
    <li class="list-group-item">speciality#3: <?php echo $result['speciality_3_name']; ?> </li>
    <li class="list-group-item">email:<?php echo $result['college_email']; ?> </li>
    <li class="list-group-item">campus chief:<?php echo $result['campus_chief_name']; ?> </li>
    <li class="list-group-item">campus chief email:<?php echo $result['campus_chief_email']; ?> </li>
    <li class="list-group-item">campus chief number:<?php echo $result['campus_chief_number']; ?> </li>
    <li class="list-group-item">assistant campus chief: <?php echo $result['assistant_chief_1']; ?></li>
    <li class="list-group-item">assistant campus chief email: <?php echo $result['assistant_chief_1_email']; ?></li>
    <li class="list-group-item">assistant campus chief number: <?php echo $result['assistant_chief_1_number']; ?></li>
    <li class="list-group-item">assistant campus chief: <?php echo $result['assistant_chief_2']; ?></li>
    <li class="list-group-item">assistant campus chief email: <?php echo $result['assistant_chief_2_email']; ?></li>
    <li class="list-group-item">assistant campus chief number: <?php echo $result['assistant_chief_2_number']; ?></li>
    
  </ul>
  <!-- <div class="card-body">
    <a href="index.php" class="card-link text-decoration-none ">add another detail</a>
    <a href="viewrecords.php" class="card-link text-decoration-none ">view the detail added to the database</a>
  </div> -->
</div>



<br>
<br>
<br>
<?php 
    //$title="indexPage"
    require_once 'includes/footer.php';
?>