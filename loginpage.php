<?php 
    $title="loginPage";
    require_once 'includes/header.php';
?>
     
     
     <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-4">
                <div class="card bx">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>login page</h4>
                            <p class="card-text small text-muted"> login with your administrative username/email &amp; password</p>
                            <form>
                                <div class="mb-3">
                                    <input type="email" placeholder="username/email" required class="form-control form-control-sm">
                                </div>
                                <div class="mb-3">
                                    <input type="password" placeholder="password" required class="form-control form-control-sm">
                                </div>
                                <div class="mb-3 text-end">
                                    <a href="guestpage.php" class="text-decoration-none">continue as a guest</a>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-sm btn-success" value="sign in">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    

<?php 
    require_once 'includes/footer.php';
?>