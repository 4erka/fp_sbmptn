<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>LOGIN PENGUMUMAN ONLINE SBMPTN 2017</h1>
			<!-- <table>
				<tr>
    	        	<td>Kode Akses Pendaftaran (KAP)</td>
            		<td>:</td>
            		<td><div class="form"><input type="text" class="form-control" id="input1"></div></td>
     		       	<td>-</td>
       		     	<td><div class="form"><input type="text" class="form-control" id="input2"></div></td>
            	</tr>
            		
        	<tr>
            	<td align="left">PIN</td>
            	<td>:</td>
            	<td><div class="form"><input type="text" class="form-control" id="input1"></div></td>
            	<td>-</td>
            	<td><div class="form">	<input type="text" class="form-control" id="input2"></div></td>
            	<td>-</td>
            	<td><div class="form"><input type="text" class="form-control" id="input3"></div></td>
            	<td>-</td>
            	<td><div class="form"><input type="text" class="form-control" id="input4"></div></td>

        	</tr>
        	<tr>
    	        <td align="left">captcha</td>
    	        <td>:</td>
	          
        	</tr>
			</table> -->
            <div id="form_input">
            <?php
            // Open form and set URL for submit form
            echo form_open('pengumuman/pengumuman');

            // Show Name Field in View Page
            echo form_label('Kode Akses Pendaftaran (KAP) :', 'input_kap_kode');
            $data= array(
            'name' => 'inp_kap_kode',
            'placeholder' => 'Kode Akses Pendaftaran',
            'class' => 'form-control'
            );
            echo form_input($data);

            // Show Email Field in View Page
            echo form_label('PIN:', 'input_kap_pin');
            $data= array(
            'name' => 'inp_kap_pin', 
            'placeholder' => 'PIN',
            'class' => 'form-control'
            );
            echo form_input($data);
            ?>
            </div>

            <div id="form_button" class="text-center" style="margin-top: 20px">
                <?php
                $data = array(
                    'type' => 'submit',
                    'value'=> 'Login',
                    'class'=> 'btn btn-primary'
                );
                echo form_submit($data); ?>
            </div>
            <!-- // Show Update Field in View Page
            <div id="form_button">
            </div> -->

            <?php
            // close form 
            echo form_close();?>
		</div>
	</div>
</div>