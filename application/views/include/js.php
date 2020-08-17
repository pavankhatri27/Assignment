<script src="<?php echo base_url('assets/js/vendor/modernizr-2.6.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/vendor/jquery-1.10.1.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/plugins.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/main.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/validation.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    var baseURL = "<?php echo base_url(); ?>";
</script>
<script type="text/javascript">
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
</script>
<script src="<?php echo base_url('assets/js/register.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/contact.js'); ?>" type="text/javascript"></script>