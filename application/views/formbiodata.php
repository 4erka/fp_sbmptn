<div class="container-fluid">
  <div class="row">
  <h1 style="text-align: center;">PENDAFTARAN SBMPTN 2017</h1>
  <h3 style="text-align: center;">Isi Biodata</h3>
  <div class="col-md-6 col-md-offset-3" style="padding-top: 30px ">
    <table align="center" class="table table-hover table-striped"  >
    <div id="form_input">
      <?php
        // Open form and set URL for submit form
        echo form_open('pendaftaran/form_ptn/'.$id);?>

      <tr style="border-top: groove;border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Nama yang akan ditulis dalam lembar jawaban
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_nama',
            'placeholder' => 'Nama Lengkap',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Nomor Induk Siswa Nasional (NISN)
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_nisn',
            'placeholder' => 'NISN',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Alamat tetap
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_alamat',
            'placeholder' => 'Alamat',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>      

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Kabupaten/Kota
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_kabuten_kota',
            'placeholder' => 'Kabupaten/Kota',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Provinsi
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_provinsi',
            'placeholder' => 'Provinsi',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Kode Pos
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_kodepos',
            'placeholder' => 'Kode Pos',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Telepon/HP
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_telepon_hp',
            'placeholder' => 'No Telepon/HP',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Alamat Email
        </td>
        <td  style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_email',
            'placeholder' => 'Email',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Tempat Lahir
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_tempat_lahir',
            'placeholder' => 'Tempat Lahir',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Tanggal Lahir
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_tanggal_lahir',
            'class' => 'form-control',
            'type' => 'date'
          );
          echo form_input($data);
          ?>
        </td>
      </tr> 

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" class="control-label" for="Kelamin">
          Jenis Kelamin
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
            <div class="form-group"  style="margin-bottom: 0px"> 
              <div class="col-sm-6">
                <div class="checkbox">
                  <label for="Kelamin-0">
                    <input type="radio" name="inp_kelamin" id="optionsRadios1" value="1" checked <?php echo set_checkbox('inp_kelamin', '1'); ?> />
                    Laki laki
                   </label>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="checkbox">
                  <label for="Kelamin-1">
                  <input type="radio" name="inp_kelamin" id="optionsRadios2" value="2" <?php echo set_checkbox('inp_kelamin', '2'); ?> />
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" class="control-label" for="Kelamin">
          Jenis Kelamin
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
            <div class="form-group"  style="margin-bottom: 0px"> 
              <div class="col-sm-6">
                <div class="checkbox">
                  <label for="Kewarganegaraan-0">
                    <input type="radio" name="inp_kewarganegaraan" id="optionsRadios1" value="1" <?php echo set_checkbox('inp_kewarganegaraan', '1'); ?> />
                    WNI
                   </label>
                </div>
              </div>
              <div class="col-sm-7">
                <div class="checkbox">
                  <label for="Kewarganegaraan-1">
                    <input type="radio" name="inp_kewarganegaraan" id="optionsRadios2" value="2" <?php echo set_checkbox('inp_kewarganegaraan', '2'); ?> />
                    WNA
                  </label>
                </div>
              </div>
            </div>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Nama Ayah
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <?php
          $data= array(  
            'name' => 'inp_ayah',
            'placeholder' => 'Nama Lengkap Ayah',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Nama Ibu
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_ibu',
            'placeholder' => 'Nama Lengkap Ibu',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Nama Wali
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_wali',
            'placeholder' => 'Nama Lengkap Wali',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Pendidikan Ayah
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_pendidikan_ayah',
            'placeholder' => 'Pendidikan Ayah',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Pendidikan Ibu
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_pendidikan_ibu',
            'placeholder' => 'Pendidikan Ibu',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Pendidikan wali
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_pendidikan_wali',
            'placeholder' => 'Pendidikan Wali',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Pekerjaan ayah
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_pekerjaan_ayah',
            'placeholder' => 'Pekerjaan Ayah',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Pekerjaan Ibu
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_pekerjaan_ibu',
            'placeholder' => 'Pekerjaan Ibu',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Pekerjaan wali
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_pekerjaan_wali',
            'placeholder' => 'Pekerjaan Wali',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          Penghasilan Total Gaji Orangtua/Wali per bulan
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_total_gaji',
            'placeholder' => 'Total Gaji',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px" >
          kebutuhan fasilitas khusus 
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
          <?php
          $data= array(  
            'name' => 'inp_kebutuhan_khusus',
            'placeholder' => 'Tuna Rungu, Tuna Wicara, dll',
            'class' => 'form-control'
          );
          echo form_input($data);
          ?>
        </td>
      </tr>
    </div>

      <tr style="border-left: groove;border-right: groove;border-bottom: groove;">  
        <td></td>
        <td></td>  
        <td>  
          <button type="button" class="btn btn-primary" >Hapus</button>
          <button type="button" class="btn btn-primary" >Simpan</button> 
        </td>  
      </tr>  
  
    </div>
      

    </table>
  </div>
       

  <div class="col-md-12">
      <div class="text-center" style="margin-top: 5px;">
          
          <a href="<?php echo site_url('con_formfoto') ?>">
              <button type="button" class="btn btn-primary" >sebelumnya</button>
            </a>
        <div id="form_button" class="text-center" style="margin-top: 20px">
          <?php
            $data = array(
              'type' => 'submit',
              'value'=> 'Selanjutnya',
              'class'=> 'btn btn-primary'
            );
            echo form_submit($data); ?>
        </div>
        <?php
          // close form 
          echo form_close();?>
      </div>
    </div>
  </div>
</div>