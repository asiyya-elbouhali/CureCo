
<?php require APPROOT . '/views/inc/header.php'; ?>

 
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <!-- <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i> -->
                            <img src="<?= URLROOT; ?>/img/favicon_Cureco.png" alt="" width="10%" srcset="">
                            <h2 class="tm-block-title mt-3">Login</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="<?php echo URLROOT; ?>/users/login" method="post" id="submitLogin" class="tm-login-form">
                                <div class="input-group">
                                    <label for="email" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Email</label>
                                    <input type="text" name="email" id="loginEmail" class="form-control form-control-lg " placeholder="Email" value="<?php echo $data['email'] ?>">
                                    <br> <br> <br>
                                </div>
                                <span id="wrong_account"><?= $data['wrong_account']; ?></span>
                                <span id="loginEmail_err" ></span>

                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input type="password" name="password" id="loginPassword" class="form-control form-control-lg  " placeholder="******" value="<?php echo $data['password'] ?>" >
                                    <br> <br>
                                </div>
                                <span id="loginPassword_err" ></span>

                                <div class="input-group mt-3">
                                    <input type="submit" class="btn btn-primary d-inline-block mx-auto" value="Login" id="">
                                </div>
                            </form> 
                            <div class="input-group mt-3">
                                    <p><em>You don't have an account?</em></p>
                                    <div class="input-group mt-3">
                                    <a href="<?php echo URLROOT; ?>/users/register" type="submit" class="btn btn-primary  d-inline-block ">Register Now </a>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <?php require APPROOT . '/views/inc/footer.php'; ?>
