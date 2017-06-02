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
         <?php
        // Open form and set URL for submit form
        echo form_open('pendaftaran/form_ptn_submit/'.$id[0]);?>

            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px"> 
              <!-- <input type="text" class="form-control" id="Panlok" placeholder="Panlok" name="Panlok"> -->
              <select class="form-control" name="inp_subpanlok">
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
                      echo '<option value="0">'.$pl->pl_nama.'</option>';
                    }
                    echo '</optgroup>';
                    //echo '<option value="'.$row->pl_nama.'">'.$row->pl_nama.'</option>';
                  }
                ?>
              </select>
            </div>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Pilihan 1
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
            <div class="form-group" style="margin-bottom: 0px"> 
              <select class="form-control" id="pilihan1" name="inp_pil1">
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
              <select class="form-control" name="inp_pil2">
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
              <select class="form-control" name="inp_pil3">
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
            </div>
        </td>
      </tr>


      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          PTN tempat anda mengikuti ujian keterampilan
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Olahraga
              <div class="input-group">
                <span class="input-group-addon">
                  <input onclick="myFunction()" id="cek" type="checkbox" aria-label="...">
                </span>
                  <select class="form-control" id="disabledInput" disabled name="inp_uk1">
                    <?php 
                        foreach($ptnuk as $row)
                        { 
                          if($row->ptnuk_jenis == "OLAHRAGA"){
                            echo '<option value="'.$row->ptnuk_id.'">'.$row->ptn_nama.'</option>';
                          }
                        }
                    ?>
                  </select>
              </div>
            </div>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px"> 
              Ujian Keterampilan Senirupa / Desain
              <div class="input-group">
                <span class="input-group-addon">
                  <input onclick="myFunction2()" id="cek2" type="checkbox" aria-label="...">
                </span>
                  <select class="form-control" id="disabledInput2" disabled name="inp_uk2">
                    <?php 
                        foreach($ptnuk as $row)
                        { 
                          if($row->ptnuk_jenis == "SENI RUPA DAN DESAIN"){
                            echo '<option value="'.$row->ptnuk_id.'">'.$row->ptn_nama.'</option>';
                          }
                        }
                    ?>
                  </select>
              </div>
            </div>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Sendratari
              <div class="input-group">
                <span class="input-group-addon">
                  <input onclick="myFunction3()" id="cek3" type="checkbox" aria-label="...">
                </span>
                  <select class="form-control" id="disabledInput3" disabled name="inp_uk3">
                    <?php 
                        foreach($ptnuk as $row)
                        { 
                          if($row->ptnuk_jenis == "SENDRATASIK"){
                            echo '<option value="'.$row->ptnuk_id.'">'.$row->ptn_nama.'</option>';
                          }
                        }
                    ?>
                  </select>
              </div>
            </div>
             <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Seni Musik
              <div class="input-group">
                <span class="input-group-addon">
                  <input onclick="myFunction4()" id="cek4" type="checkbox" aria-label="...">
                </span>
                  <select class="form-control" id="disabledInput4" disabled name="inp_uk4">
                    <?php 
                        foreach($ptnuk as $row)
                        { 
                          if($row->ptnuk_jenis == "SENI TARI"){
                            echo '<option value="'.$row->ptnuk_id.'">'.$row->ptn_nama.'</option>';
                          }
                        }
                    ?>
                  </select>
              </div>
            </div>
             <div class="form-group" style="margin-bottom: 0px"> 
              Ujian Keterampilan Seni Tari
              <div class="input-group">
                <span class="input-group-addon">
                  <input onclick="myFunction5()" id="cek5" type="checkbox" aria-label="..." >
                </span>
                  <select class="form-control" id="disabledInput5" disabled name="inp_uk5">
                    <?php 
                        foreach($ptnuk as $row)
                        { 
                          if($row->ptnuk_jenis == "SENI MUSIK"){
                            echo '<option value="'.$row->ptnuk_id.'">'.$row->ptn_nama.'</option>';
                          }
                        }
                    ?>
                  </select>
              </div>
            </div>
        </td>
      </tr>

      <script>
      function myFunction(){
        if (document.getElementById("cek").checked) 
          document.getElementById("disabledInput").disabled = false;
        else 
          document.getElementById("disabledInput").disabled = true;
        }
      </script>

      <script>
      function myFunction2(){
        if (document.getElementById("cek2").checked) 
          document.getElementById("disabledInput2").disabled = false;
        else 
          document.getElementById("disabledInput2").disabled = true;
        }
      </script>

      <script>
      function myFunction3(){
        if (document.getElementById("cek3").checked) 
          document.getElementById("disabledInput3").disabled = false;
        else 
          document.getElementById("disabledInput3").disabled = true;
        }
      </script>

      <script>
      function myFunction4(){
        if (document.getElementById("cek4").checked) 
          document.getElementById("disabledInput4").disabled = false;
        else 
          document.getElementById("disabledInput4").disabled = true;
        }
      </script>

      <script>
      function myFunction5(){
        if (document.getElementById("cek5").checked) 
          document.getElementById("disabledInput5").disabled = false;
        else 
          document.getElementById("disabledInput5").disabled = true;
        }
      </script>

      <tr style="border-left: groove;border-right: groove;border-bottom: groove;">  
        <td></td>
        <td></td>  
        <td>  
          <button type="button" class="btn btn-primary" >Hapus</button>
          <button type="submit" class="btn btn-primary" >Simpan</button>
        </td>  
      </tr>  
    <?php
          // close form 
          echo form_close();?>
    </div>
      

    </table>
  </div>

  

  <div class="col-md-12">
      <div class="text-center" style="margin-top: 5px;">
          
          <a href="<?php echo site_url('pendaftaran/form_biodata/').$id[0] ?>">
              <button type="button" class="btn btn-primary" >sebelumnya</button>
            </a>
            <a href="<?php echo site_url('pendaftaran/form_cetak/'.$id[0]) ?>">
              <button type="button" class="btn btn-primary" >selesai</button>
            </a>
            
      </div>
      </div>
    </div>
</div>

