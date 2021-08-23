<!-- this is for the admin for collecting data field to the existing database -->
<!-- registering details of a college by the administrator -->
<!-- college name -->
<!-- college location -->
<!-- college location details -->
<!-- college type<constituent/affiliate> -->
<!-- college speciliaty<management/arts/education/medicine...> -->
<!-- college contact number -->
<!-- college email -->
<!-- campus chief -->
<!-- contact details -->
<!-- assistant campus chief(administrative) -->
<!-- contact details -->
<!-- assistant campus chief(academic) -->
<!-- contact details -->
<!-- about college <reference to the college website> -->

<!-- <div class="container text-center mt-3"><h2>add details of the new college</h2></div> -->
<?php 
    $title="indexPage";
    require_once 'includes/header.php';
    require_once 'database/connect.php';

    $results = $crud->getType();

    

?>
<div class="container text-center mt-3"><h4>add details of the new college</h4></div>
    <form class="row g-3 mt-5 mb-3" method="post" action="success.php">
        <div class="col-md-8">
            <label for="collegeName" class="form-label">College Name</label>
            <input type="text" class="form-control"  id="collegeName" name="collegeName">
        </div>
            
            
        <div class="col-md-4">
            <label for="inputType" class="form-label">Type</label>
            <select id="inputType" class="form-select" name="inputType">
                <option selected disabled>Choose from the list</option>
                <option value="1">constituent</option>
                <option value="3">affiliate</option>
                <option value="5">other</option>

                <!-- <option></option> -->
            </select>
        </div>
            
            
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="inputAddress">
            </div>
            <!-- <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div> -->
            <!-- <div class="col-md-6">
                <label for="inputCity" class="form-label">city</label>
                <input type="text" class="form-control" id="inputCity">
            </div> -->
            
            
            <div class="col-md-10">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" name="inputState">
                <option selected disabled>Choose from the list</option>
                <option value="1">state_1</option>
                <option value="3">state_2</option>
                <option value="5">bagmati_state</option>
                <option value="7">gandaki_state</option>
                <option value="9">lumbini_state</option>
                <option value="11">karnali_state</option>
                <option value="13">state_7</option>
                <option value="15">kathmandu_valley</option>
                <!-- <option></option> -->
                </select>
            </div>
            
            <!-- college speciality -->
            <div class="col-md-4" required>
                <label for="inputSpeciality1" class="form-label">College Speciality#1(*)</label>
                <select id="inputSpeciality1" class="form-select" name="inputSpeciality1">
                <option selected disabled>Choose from the list</option>
                <option value="1">management</option>
                <option value="3">arts</option>
                <option value="5">medicine</option>
                <option value="7">education</option>
                <option value="9">engineering</option>
                <option value="11">science</option>
                <option value="13">applied-science</option>
                <option value="15">mathematics</option>
                <option disabled>none</option>
                <!-- <option></option> -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputSpeciality2" class="form-label">College Speciality#2</label>
                <select id="inputSpeciality2" class="form-select" name="inputSpeciality2">
                <option selected disabled>Choose from the list</option>
                <option value="1">management</option>
                <option value="3">arts</option>
                <option value="5">medicine</option>
                <option value="7">education</option>
                <option value="9">engineering</option>
                <option value="11">science</option>
                <option value="13">applied-science</option>
                <option value="15">mathematics</option>
                <option value="17">none</option>
                <!-- <option></option> -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputSpeciality3" class="form-label">College Speciality#3</label>
                <select id="inputSpeciality3" class="form-select" name="inputSpeciality3">
                <option selected disabled>Choose from the list</option>
                <option value="1">management</option>
                <option value="3">arts</option>
                <option value="5">medicine</option>
                <option value="7">education</option>
                <option value="9">engineering</option>
                <option value="11">science</option>
                <option value="13">applied-science</option>
                <option value="15">mathematics</option>
                <option value="17">none</option>
                <!-- <option></option> -->
                </select>
            </div>

            <!-- <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div> -->
            <!-- <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div> -->
            
            <div class="col-md-8">
                <label for="inputEmail" class="form-label">College Email</label>
                <input type="email" class="form-control" id="inputEmail"  placeholder="college@email.com" name="inputEmail">
            </div>

            <!-- college official #1 -->
            <div class="col-9">
                <label for="inputchiefName" class="form-label">Campus Chief Name</label>
                <input type="text" class="form-control" id="inputchiefName" placeholder="ChiefName" name="inputchiefName">
            </div>
            <div class="col-4">
                <label for="inputchiefEmail" class="form-label">Contact email</label>
                <input type="email" class="form-control" id="inputchiefEmail" placeholder="ChiefEmail" name="inputchiefEmail">
            </div>

            <div class="col-4">
                <label for="inputchiefNumber" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="inputchiefNumber" placeholder="ChiefNumber" name="inputchiefNumber">
            </div>

                <!-- college official #2 -->
                <div class="col-9">
                <label for="inputASSISTANTchiefName1" class="form-label">Campus Assistant Chief Name#1</label>
                <input type="text" class="form-control" id="inputASSISTANTchiefName1" placeholder="ASSISTANTChief#1 Name" name="inputASSISTANTchiefName1">
            </div>
            <div class="col-4">
                <label for="inputASSISTANTchiefEmail1" class="form-label">Contact email</label>
                <input type="email" class="form-control" id="inputASSISTANTchiefEmail1" placeholder="ASSISTANTChief#1 Email" name="inputASSISTANTchiefEmail1">
            </div>

            <div class="col-4">
                <label for="inputASSISTANTchiefNumber1" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="inputASSISTANTchiefNumber1" placeholder="ASSISTANTChief#1 number" name="inputASSISTANTchiefNumber1">
            </div>

                <!-- college official #3 -->
                <div class="col-9">
                <label for="inputASSISTANTchiefName2" class="form-label">Campus Assistant Chief Name#2</label>
                <input type="text" class="form-control" id="inputASSISTANTchiefName2" placeholder="ASSISTANTChief#2 Name" name="inputASSISTANTchiefName2">
            </div>
            <div class="col-4">
                <label for="inputASSISTANTchiefEmail2" class="form-label">Contact email</label>
                <input type="email" class="form-control" id="inputASSISTANTchiefEmail2" placeholder="ASSISTANTChief#2 Email" name="inputASSISTANTchiefEmail2">
            </div>

            <div class="col-4">
                <label for="inputASSISTANTchiefNumber2" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="inputASSISTANTchiefNumber2" placeholder="ASSISTANTChief#2 number" name="inputASSISTANTchiefNumber2">
            </div>



            <!-- submit button -->
            <div class="col-12 text-center">
                <button type="submit" name="submit" class="btn btn-lg btn-primary ">Register New!</button>
            </div>
    </form>




<?php 
    //$title="indexPage"
    require_once 'includes/footer.php';
?>