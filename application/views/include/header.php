<head>
    <meta charset="utf-8">
    <title>Assignment</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <?php $this->load->view('include/css');?>
</head>
<div class="site-header">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">Stone</a>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li><a href="<?php echo base_url('about-us')?>">About us</a></li>
                        <li><a href="<?php echo base_url('contact')?>">Contact</a></li>
                        <li><a href="<?php echo base_url('register')?>">Registration</a></li>
                    </ul>
                </div>
            </nav>         
        </div>
    </div>
</div>