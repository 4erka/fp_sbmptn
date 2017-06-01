

<div class="container">
	<div class="row">
	<h1 style="text-align: center;">PENDAFTARAN SBMPTN 2017</h1>
	<h3 style="text-align: center;">Upload Foto</h3>
		<div class="container">
			<div class="col-md-6 col-md-offset-3" style="border-style: solid ;border-width: 1px">
				<div class="container-fluid " style="margin: 0px;padding: 0px">
					<div class="row">
						<div align="center">
							<img src="<?php echo base_url("uploads/".$dir); ?>" />
						</div>
						<div align="center">
							<div class="form-group">
    	         	    		<label>Upload Pas Foto</label>
    	         	    		<?php echo form_open_multipart('pendaftaran/do_upload/'.$id);?>
	             	  		  	<input id="input-1" type="file" name="foto_peserta" style="border-style: solid; border-width: 1px; margin-bottom: 5px">

        	    		 	    	<button type="button" class="btn btn-primary" >Hapus</button>
									<button type="submit" class="btn btn-primary" value="upload" >Upload</button>
								</form>
							</div>
							<?php echo $error;?>
						</div>
				
						
					</div>
				</div>
			</div>

		
		<div class="col-md-12">
			<div class="text-center" style="margin-top: 5px;">
			    
					<a href="<?php echo site_url('con_pendaftaran') ?>">
			  			<button type="button" class="btn btn-primary" >sebelumnya</button>
			  		</a>
			  		<a href="<?php echo site_url('pendaftaran/form_biodata/'.$id) ?>">
			  			<button type="button" class="btn btn-primary" >selanjutnya</button>
			  		</a>
			  		
                </div>
			</div>	
		</div>
			
	</div>
</div>

