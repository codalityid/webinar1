</div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>1.0.0</b>
        </div>

        <strong>
            Copyright &copy; <?php echo date('Y'); ?> <a href="#">Codality</a>.
        </strong> 
        All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>

    <!-- FastClick -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js'); ?>"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/dist/js/adminlte.min.js'); ?>"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/dist/js/demo.js'); ?>"></script>

    <!-- bootstrap 3 dialog -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/plugins/bootstrap-dialog/bootstrap-dialog.min.js'); ?>"></script>

    <!-- toast -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/toastr/toastr.min.js'); ?>"></script>

    <!-- summernote -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/summernote/dist/summernote.min.js'); ?>"></script>

    <!-- bootstrap datepicker -->
	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/plugins/datepicker/bootstrap-datepicker.min.js'); ?>"></script>

    <!-- select2 -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/select2/dist/js/select2.min.js'); ?>"></script>

    <!-- boostrap tabs scrolling -->
	<script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/jquery-bootstrap-scrolling-tabs/dist/jquery.scrolling-tabs.min.js'); ?>"></script>

    <!-- bootstrap time picker -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>

    <!-- input mask -->
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/inputmask/dist/jquery.inputmask.bundle.js'); ?>"></script>
    <script src="<?php echo base_url('assets/AdminLTE-2.4.2/bower_components/inputmask/dist/inputmask/bindings/inputmask.binding.js'); ?>"></script>
    
    <script>
    $(function () {
        $('.sidebar-menu').tree()
    });

    function remove_row(html_element) {
        BootstrapDialog.show({
            title: 'Konfirmasi',
            message: 'Data akan terhapus, apakah anda yakin?',
            buttons: [{
                label: 'Batal',
                cssClass: 'btn-info',
                action: function(dialog) {
                    dialog.close();
                }
            }, {
                label: 'Hapus',
                cssClass: 'btn-danger',
                action: function(dialog) {
                    $(html_element).remove(); 
                    dialog.close();            
                }
            }]
        });
    }

    function remove_row2(html_element, id, url) {
        BootstrapDialog.show({
            title: 'Konfirmasi',
            message: 'Data akan terhapus, apakah anda yakin?',
            buttons: [{
                label: 'Batal',
                cssClass: 'btn-info',
                action: function(dialog) {
                    dialog.close();
                }
            }, {
                label: 'Hapus',
                cssClass: 'btn-danger',
                action: function(dialog) {
                    $.get(url, {'id': id}, function(){
                        $(html_element).remove(); 
                        dialog.close();
                    });            
                }
            }]
        });
    }
    </script>

    <script type="text/javascript">
    <?php if($this->session->flashdata('success')){ ?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php }else if($this->session->flashdata('error')){  ?>
        toastr.error("<?php echo $this->session->flashdata('error'); ?>");
    <?php }else if($this->session->flashdata('warning')){  ?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php }else if($this->session->flashdata('info')){  ?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php } ?>
    </script>
</body>
</html>
