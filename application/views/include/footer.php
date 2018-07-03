<?php
    /**
     * Created by PhpStorm.
     * Author: Oluwamayowa Steepe
     * Date: 30-Jun-16
     * Time: 10:18 PM
     */
?>
<!-- FOOTER SECTION-->
    <div class=" col-md-12 text-center margin_20 line">
        <p style="color: #ffffff;"><strong>&copy; <?php echo date("Y");?>. <a href="http://www.thispresenthouse.org/" style="color: #fff; ">This Present House</a></strong></p>
    </div>
</div>
<!-- FOOTER SECTION ENDS-->




<!-- Latest compiled and minified JavaScript -->
<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
-->


<script src="<?php echo base_url('assets/js/jquery-2.1.0.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/common-script.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>
<script type="text/javascript"  src="<?php echo base_url('assets/plugins/toggle-switch/toggles.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/checkbox/zepto.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/checkbox/icheck.js');?>"></script>
<script src="<?php echo base_url('assets/js/icheck-init.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/icheck.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/form-components.js');?>"></script>
<script type="text/javascript"  src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.min.js');?>"></script>
<script type="text/javascript"  src="<?php echo base_url('assets/plugins/input-mask/demo-mask.js');?>"></script>
<script type="text/javascript"  src="<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js');?>"></script>
<script type="text/javascript"  src="<?php echo base_url('assets/plugins/dropzone/dropzone.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/ckeditor/ckeditor.js');?>"></script>
<script>
    function move(){
        window.location.replace('https://www.thispresenthouse.org/onlinepay/');
    }

    $( "#first_step" ).validate({
        rules: {
            offering: {
                required: true,
                min: 1
            },
            tithe: {
                required: true,
                min: 1
            },
            freedom_center: {
                required: true,
                min: 1
            },
            freedom_foundation: {
                required: true,
                min: 1
            },
            thanksgiving: {
                required: true,
                min: 1
            },
            pledges: {
                required: true,
                min: 1
            },
            others: {
                required: true,
                min: 1
            },
        }
    });

</script>
</body>
</html>
