<?php $this->load->view('layout/header'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
          Entry 1
      </h1>
</section>

<section class="content">
    <div class="box box-default">
        <div class="box-body">
			<form method="post" action="<?php echo site_url('entry1/create'); ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Item</label> <span style="color:red">*</span><br/>
                        <input type="text" name="items" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Descriptions</label> <span style="color:red">*</span><br/>
						<textarea name="descriptions" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
						<a href="<?php echo site_url('entry1/index'); ?>" class="btn btn-danger">
							<i class="fa fa-mail-reply"></i>
							Kembali
						</a>

						<button type="submit" class="btn btn-primary">
							<i class="fa fa-floppy-o"></i>
							Simpan
						</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<?php $this->load->view('layout/footer'); ?>