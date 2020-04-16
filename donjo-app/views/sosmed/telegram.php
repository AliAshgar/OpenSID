<div class="content-wrapper">
	<section class="content-header">
		<h1>Pengaturan Telegram</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Pengaturan Telegram</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-3">
					<?php $this->load->view('sosmed/_side-menu.php', array('media' => 'telegram')); ?>
				</div>
				<div class="col-md-9">
					<div class="box box-info">
						<div class="box-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label class="col-sm-3 control-label">Tipe</label>
										<div class="col-sm-9">
											<select class="form-control input-sm required" id="tipe" name="tipe" style="width:50%"; onclick="tipe();">
												<option value="1" <?php selected($main['tipe'], 1) ?>>Personal Chat</option>
												<option value="2" <?php selected($main['tipe'], 2) ?>>Group Chat</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Link Username Telegram</label>
										<div class="col-sm-9">
											<textarea id="link" name="link" class="form-control input-sm" placeholder="" style="height: 200px;"><?php $main and print($main['link']) ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label" for="status">Status</label>
										<div class="btn-group col-xs-12 col-sm-9" data-toggle="buttons">
											<label id="sx3" class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-4 col-lg-2 form-check-label <?php if ($main['enabled'] =='1'): ?>active<?php endif ?>">
												<input id="g1" type="radio" name="enabled" class="form-check-input" type="radio" value="1" <?php if ($main['enabled'] =='1'): ?>checked <?php endif ?> autocomplete="off"> Aktif
											</label>
											<label id="sx4" class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-4 col-lg-2 form-check-label <?php if ($main['enabled'] =='2'): ?>active<?php endif ?>">
												<input id="g2" type="radio" name="enabled" class="form-check-input" type="radio" value="2" <?php if ($main['enabled'] =='2'): ?>checked<?php endif ?> autocomplete="off"> Tidak Aktif
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='box-footer'>
							<div class='col-xs-12'>
								<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm reset' onclick="reset_form($(this).val());"><i class='fa fa-times'></i> Batal</button>
								<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
<script>
	tipe(); // Load pertama
	
	function tipe() {
		var tipe_link = document.getElementById("tipe").value;
		if (tipe_link=="1")
		{
			document.getElementById("link").placeholder = ' Personal   : https://t.me/@opensid \n Username : opensid';
			
		}
	  else
		{
		   document.getElementById("link").placeholder = ' Group    : https://t.me/joinchat/I5antRHvea8ohaU7_RsYYQ \n Username : I5antRHvea8ohaU7_RsYYQ';
		}
	};
	
	function reset_form()
	{
		<?php if ($main['enabled'] == '1'): ?>
			$("#sx3").addClass('active');
			$("#sx4").removeClass("active");
		<?php endif ?>
		<?php if ($main['enabled'] == '2'): ?>
			$("#sx4").addClass('active');
			$("#sx3").removeClass("active");
		<?php endif ?>
	};
</script>