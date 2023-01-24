<?php require APPROOT . '/views/inc/header.php'; ?>


    <div class="container">
                <div class="row tm-content-row tm-mt-big">
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Accounts</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Edit Account</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="<?php echo URLROOT; ?>/users/register" method="post" class="tm-signup-form">
                                <div class="form-group">
                                    <label for="name">Account Name <sup>*</sup> </label>
                                    <input type="text" name="name"  class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data ['name'] ?>">
                                  <span id=""></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Account Email</label>
                                    <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                                     <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Re-enter Password</label>
                                    <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                                  <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input placeholder="010-030-0440" id="phone" name="phone" type="tel" class="form-control validate">
                                </div> -->
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <input type="submit" class="btn btn-primary" value="register">
                                        
                                    </div>
                                    <!-- <div class="col-12 col-sm-8 tm-btn-left">
                                        <a type="submit" class="btn btn-danger" value="Delete Account">
                                    </div> -->
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="tm-col tm-col-small">
                <div class="bg-white tm-block">
                    <h2 class="tm-block-title">Profile Image</h2>
                    <img src="img/profile-image.png" alt="Profile Image" class="img-fluid">
                    <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" style="display:none;" />
                        <input type="button" class="btn btn-primary d-block mx-xl-auto" value="Upload New..." onclick="document.getElementById('fileInput').click();"
                        />
                    </div>
                </div>
            </div> -->
        </div>
      
    </div>

   
    <?php require APPROOT . '/views/inc/footer.php'; ?>
