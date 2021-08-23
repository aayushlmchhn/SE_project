<?php 
    $title="view record Page";
    require_once 'includes/header.php';
    require_once 'database/connect.php';

    $results = $crud->getCollege();
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>college_name</th>
        <th>college_type</th>
        <th>college_address</th>
        <th>college_state</th>
        <!-- <th>speciality_1</th> -->
        <!-- <th>speciality_2</th> -->
        <!-- <th>speciality_3</th> -->
        <!-- <th>college_email</th> -->
        <th>campus_chief_name</th>
        <!-- <th>campus_chief_email</th> -->
        <!-- <th>campus_chief_number</th> -->
        <th>assistant_chief_1</th>
        <!-- <th>assistant_chief_1_email</th> -->
        <!-- <th>assistant_chief_1_number</th> -->
        <th>assistant_chief_2</th>
        <!-- <th>assistant_chief_2_email</th> -->
        <!-- <th>assistant_chief_2_number</th> -->
        <th>actions</th>
    </tr>
    <?php while ($r=$results->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?php echo $r['college_id']; ?></td>
            <td><?php echo $r['college_name']; ?></td>
            <td><?php echo $r['type_name']; ?></td>
            <td><?php echo $r['college_address']; ?></td>
            <td><?php echo $r['name']; ?></td>
            <td><?php echo $r['campus_chief_name']; ?></td>
            <td><?php echo $r['assistant_chief_1']; ?></td>
            <td><?php echo $r['assistant_chief_2']; ?></td>
            <td>
                <a href="view.php?id=<?php echo $r['college_id']; ?>" class="btn btn-primary"> View</a>
                <a href="edit.php?id=<?php echo $r['college_id']; ?>" class="btn btn-warning"> Edit</a>
                <a onclick="return confirm('are you sure you want to delete this record? ');" 
                href="delete.php?id=<?php echo $r['college_id']; ?>" class="btn btn-danger"> Delete</a>
            </td>



        </tr>
    <?php } ?>

</table>


<br>
<br>
<br>
<?php 
    //$title="indexPage"
    require_once 'includes/footer.php';
?>