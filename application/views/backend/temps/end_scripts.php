<!--[if lt IE 9]>
<script src="<?php echo base_url() ;?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url() ;?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

<script src="<?php echo base_url() ;?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->


<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo base_url() ;?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<script src="<?php echo base_url() ;?>assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

<script src="<?php echo base_url() ;?>assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo base_url() ;?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ;?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>


<script src="<?php echo base_url() ;?>assets/pages/scripts/min4.js" type="text/javascript"></script>

<script type="text/javascript">
    $(window).bind("load", function () {
        window.setTimeout(function () {
            $(".alert-success").fadeTo(1000, 0).slideUp(1000, function () {
                $(this).remove();
            });
        }, 8000);
    });
</script>

<script type="text/javascript">
    $(window).bind("load", function () {
        window.setTimeout(function () {
            $(".alert-danger").fadeTo(1000, 0).slideUp(1000, function () {
                $(this).remove();
            });
        }, 8000);
    });
</script>

<!--<script type="text/javascript">
    $(document).ready(function () {

        $("#search_customers").submit(function (e) {

            e.preventDefault();

            var content = $("#search_customers").serializeArray();
            $.ajax({
                url: '',
                type: 'POST',
                data : content,

                success : function (data) {
                    $("#results").html(data);
                }
            });
        });
    });
</script>-->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>