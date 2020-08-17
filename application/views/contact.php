<!DOCTYPE html>
<html class="no-js">
<body  class="loading">
    <?php $this->load->view('include/header');?>
    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="map-holder">
                        <div id="map_canvas" class="map-canvas" style="height: 360px;"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <form action="<?php echo base_url('sendMail')?>" method="post" id="contactForm">
                            <fieldset class="col-md-6">
                                <input type="text" class="required" name="contact-name" id="contact-name" placeholder="Name...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="email" class="required email" name="contact-email" id="contact-email" placeholder="Email...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" class="required digits" name="contact-phone" id="contact-phone" placeholder="Phone..." onkeypress="return isNumber(event)">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" class="required" name="contact-subject" id="contact-subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12">
                                <textarea name="contact-message" class="required" id="contact-message" rows="5" placeholder="Message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <button class="main-button">Send Message</button>
                            </fieldset>
                        </form>
                        <?php
                         if($this->session->flashdata('success_email')){
                            echo '<div class="col-sm-12 fit-to-screen"><div class="alert alert-success"><strong>Success! </strong>'.$this->session->flashdata('succces').'</div></div>';
                         }
                         if($this->session->flashdata('error_email')){
                            echo '<div class="col-sm-12 fit-to-screen"><div class="alert alert-danger"><strong>Oops! </strong>'.$this->session->flashdata('error').'</div></div>';
                         }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('include/footer');?>
    <?php $this->load->view('include/js');?>
    <script type="text/javascript">
        jQuery(function($){
            $('#map_canvas').gmap3({
                marker:{
                    address: '13.758468,100.567481' 
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>  
    
</body>
</html>