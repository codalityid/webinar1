<?php $this->load->view('layout/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Entry 1
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <p class="text-muted font-13 m-b-30">
                        <a href="<?php echo site_url('entry1/add'); ?>" class="btn btn-primary">
                            <i class="fa fa-plus"></i>
                            Tambah
                        </a>

                        <a href="#" onclick="confirm_delete_all()" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Hapus Semua Data
                        </a>
                    </p>

                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" width="100%">
                        <thead>
                            <tr>
                                <th data-visible="false" data-searchable="false">pk_id</th>
                                <th>Item</th>
								<th>Desc</th>
                                <th data-sortable="false" data-searchable="false"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$(function() {
    $('#datatable').DataTable( {
        "ajax" : "<?php echo site_url('entry1/datatable'); ?>",
        columns: [
            { data: 'id' },
            { data: 'items' },
            { data: 'descriptions' },
            { data: null, render: render_action_link }
        ]
    });
});

function render_action_link(data, type, row) {
	var action = '<div class="btn-group">';
    action += '<a href="<?php echo site_url('entry1/edit'); ?>/' + row.id + '" title="Edit" class="btn btn-sm btn-default"><i class="fa fa-edit text-info"></i></a> ';
    action += '<a href="#" onclick="confirm_delete(' + row.id +');" title="Delete" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></a> ';
    action += '</div>';
	return action;
}

function confirm_delete(id) {
	BootstrapDialog.confirm({
		title: 'Konfirmasi',
		message: 'Data akan terhapus, apakah anda yakin?',
		type: BootstrapDialog.TYPE_WARNING,
		closable: true,
		btnCancelLabel: 'Cancel',
		btnOKLabel: 'Ok',
		btnOKClass: 'btn-danger',
		btnCancelClass: 'btn-primary',
		callback: function(result) {
	        if(result) {
	            location.href= "<?php echo site_url('entry1/delete'); ?>/" + id;
	        }
		}
    });
}

function confirm_delete_all() {
	BootstrapDialog.confirm({
		title: 'Konfirmasi',
		message: 'Semua data akan terhapus, apakah anda yakin?',
		type: BootstrapDialog.TYPE_WARNING,
		closable: true,
		btnCancelLabel: 'Cancel',
		btnOKLabel: 'Ok',
		btnOKClass: 'btn-danger',
		btnCancelClass: 'btn-primary',
		callback: function(result) {
	        if(result) {
	            location.href= "<?php echo site_url('entry1/delete_all'); ?>";
	        }
		}
    });
}
</script>

<?php $this->load->view('layout/footer'); ?>