<div class="container-fluid">
  <div class="row">
  <h1 style="text-align: center;">PENDAFTARAN SBMPTN 2017</h1>
  <h3 style="text-align: center;">Isi Panlok dan PTN</h3>
  <div class="col-md-8 col-md-offset-2" style="padding-top: 30px ">

    <table align="center" class="table table-hover table-striped"  >
      <tr style="border-top: groove;border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Panitia lokal tempat anda mengikuti ujian
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px"> 
              <!-- <input type="text" class="form-control" id="Panlok" placeholder="Panlok" name="Panlok"> -->
              <select class="form-control">
              <?php 
                  foreach($panlok as $pl)
                  { 
                    echo '<optgroup label="'.$pl->pl_nama.'">';
                    $flag = 1;
                      foreach($subpanlok as $spl)
                      { 
                        if($pl->pl_id == $spl->pl_id){
                          echo '<option value="'.$spl->spl_id.'">'.$spl->spl_nama.'</option>';
                          $flag=1;
                        }
                        else{
                          $flag = 0;
                        }
                      }
                    if($flag == 0)
                    {
                      echo '<option value="'.$pl->pl_id.'">'.$pl->pl_nama.'</option>';
                    }
                    echo '</optgroup>';
                    //echo '<option value="'.$row->pl_nama.'">'.$row->pl_nama.'</option>';
                  }
                ?>
              </select>
            </div>
         </form>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Pilihan 1
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form onclick="ujianketerampilan()">
            <div class="form-group" style="margin-bottom: 0px"> 
              <select class="form-control" id="pilihan1">
              <?php 
                  foreach($ptn as $row)
                  { 
                    echo '<optgroup label="'.$row->ptn_nama.'">';
                      foreach($prodi as $pro)
                      { 
                        if($row->ptn_id == $pro->ptn_id){
                          echo '<option value="'.$pro->pro_id.'">'.$pro->pro_nama.'</option>';
                        }
                      }
                    echo '</optgroup>';
                    //echo '<option value="'.$row->pl_nama.'">'.$row->pl_nama.'</option>';
                  }
                ?>
              </select>
            </div>
            <div>
              Isi lokasi ujian terlebih dahulu
            </div>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Pilihan 2
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
            <div class="form-group" style="margin-bottom: 0px"> 
              <select class="form-control">
              <?php 
                  foreach($ptn as $row)
                  { 
                    echo '<optgroup label="'.$row->ptn_nama.'">';
                      foreach($prodi as $pro)
                      { 
                        if($row->ptn_id == $pro->ptn_id){
                          echo '<option value="'.$pro->pro_id.'">'.$pro->pro_nama.'</option>';
                        }
                      }
                    echo '</optgroup>';
                    //echo '<option value="'.$row->pl_nama.'">'.$row->pl_nama.'</option>';
                  }
                ?>
              </select>
            </div>
            <div>
              Isi pilihan 1 terlebih dahulu
            </div>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Pilihan 3
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
            <div class="form-group" style="margin-bottom: 0px"> 
              <select class="form-control">
              <?php 
                  foreach($ptn as $row)
                  { 
                    echo '<optgroup label="'.$row->ptn_nama.'">';
                      foreach($prodi as $pro)
                      { 
                        if($row->ptn_id == $pro->ptn_id){
                          echo '<option value="'.$pro->pro_id.'">'.$pro->pro_nama.'</option>';
                        }
                      }
                    echo '</optgroup>';
                    //echo '<option value="'.$row->pl_nama.'">'.$row->pl_nama.'</option>';
                  }
                ?>
              </select>
            </div>
            <div>
              Isi pilihan 2 terlebih dahulu
            </div>
         </form>
        </td>
      </tr>

      <script type="text/javascript">
        function ujianketerampilan(){
          if(document.getElementById('pilihan1').value != 0){
            document.getElementById('formuk').disabled = false;
          }
        }
      </script>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          PTN tempat anda mengikuti ujian keterampilan
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form id="formuk">
         <?php  
         ?>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Olahraga<input type="text" class="form-control" id="disabledInput" placeholder="Pilih Perguruan tinggi" name="nama_ptn_olahraga " disabled="">
            </div>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px"> 
              Ujian Keterampilan Senirupa / Desain<input type="text" class="form-control" id="disabledInput" placeholder="Pilih Program Studi" name="nama_prodi_senirupa_desain" disabled="">
            </div>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Sendratari<input type="text" class="form-control" id="disabledInput" placeholder="Pilih Program Studi" name="nama_prodi_Sendratari" disabled="">
            </div>
             <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Seni Musik<input type="text" class="form-control" id="disabledInput" placeholder="Pilih Program Studi" name="nama_prodi_seni_musik" disabled="">
            </div>
             <div class="form-group" style="margin-bottom: 0px"> 
              Ujian Keterampilan Seni Tari<input type="text" class="form-control" id="disabledInput" placeholder="Pilih Program Studi" name="nama_prodi_seni_tari" disabled="">
            </div>
         </form>
        </td>
      </tr>

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
            <a href="<?php echo site_url('con_formcetak') ?>">
              <button type="button" class="btn btn-primary" >selesai</button>
            </a>
            
      </div>
      </div>

      




    </div>
</div>

