<!DOCTYPE html>
<html class="no-js">
<body class="loading">
    <?php $this->load->view('include/header');?> 
    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Registration</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 mx-auto">
                                <div class="card border-secondary">
                                    <div class="card-body">
                                        <form class="form" role="form" autocomplete="off" action="<?php echo base_url('registerAdd') ?>" id="registerForm" enctype='multipart/form-data' method="post">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input type="text" class="form-control required" id="fname" name="fname" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input type="text" class="form-control required" id="lname" name="lname" placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="age">Age</label>
                                                <input type="text" class="form-control required digits" id="age" name="age" placeholder="Age" onkeypress="return isNumber(event)">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control required email" id="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control required" id="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="confirmPassword">Confirm Password</label>
                                                <input type="password" class="form-control required equalTo" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea id="address" name="address" class="form-control required" placeholder="Address"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Contact No.</label>
                                                <input type="text" class="form-control required digits" id="contact" name="contact" placeholder="Contact No" onkeypress="return isNumber(event)">
                                            </div>
                                            <div class="form-group">
                                                <label for="profile">Profile Picture</label>
                                                <input type="file" class="form-control required" id="profile" name="profile" accept=".jpg,.jpeg,.png">
                                            </div>
                                            <div class="form-group">
                                                <label for="resume">Resume</label>
                                                <input type="file" class="form-control required" id="resume" name="resume" accept=".doc,.docx,.pdf">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" value="Submit"/>
                                                <input type="reset" class="btn btn-info" value="Reset"/>
                                                <a href="<?php echo base_url() ?>"><input type="button" class="btn btn-danger" value="Cancel" /></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mx-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
                                        if($this->session->flashdata('errorProfile')) { ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <span><?php echo $this->session->flashdata('errorProfile'); ?></span>
                                                <button type="button" class="close topgo" data-dismiss="alert" aria-hidden="true">×</button>
                                            </div>
                                        <?php }
                                        if($this->session->flashdata('errorResume')) {
                                        ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                <span><?php echo $this->session->flashdata('errorResume'); ?></span>
                                                <button type="button" class="close topgo" data-dismiss="alert" aria-hidden="true">×</button>
                                            </div>
                                        <?php
                                        }
                                        if($this->session->flashdata('response')) {?>
                                           <div class="alert alert-success alert-dismissable"><span><?php echo $this->session->flashdata('response')?></span> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('include/js');?>
</body>
</html>