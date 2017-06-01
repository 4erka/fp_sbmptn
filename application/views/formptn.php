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
              <select class="form-control" id="panlok" onChange="cekSubpanlok(this);">
                <?php 
                  foreach($panlok as $row)
                  { 
                    echo '<option value="'.$row->pl_nama.'">'.$row->pl_nama.'</option>';
                  }
                ?>
              </select>
            </div>

            <!-- <script type="text/javascript">
                function cekSubpanlok(elem) {
                    document.getElementById('subpanlok').disabled = !elem.selectedIndex;
                  }
            </script> -->

            <div class="form-group" style="margin-bottom: 0px;"> 
              <!-- <input type="text" class="form-control" id="subPanlok" placeholder="subPanlok (Kabupaten atau Kota)" name="subPanlok"> -->
              <select class="form-control" id="subpanlok">
                <?php 
                  foreach($subpanlok as $row)
                  { 
                    echo '<option value="'.$row->spl_nama.'">'.$row->spl_nama.'</option>';
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
         <form>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="nama_ptn" placeholder="Pilih Perguruan tinggi" name="nama_ptn">
            </div>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="nama_prodi" placeholder="Pilih Program Studi" name="nama_prodi">
            </div>
            <div>
              Isi lokasi ujian terlebih dahulu
            </div>
         </form>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Pilihan 2
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="nama_ptn" placeholder="Pilih Perguruan tinggi" name="nama_ptn">
            </div>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="nama_prodi" placeholder="Pilih Program Studi" name="nama_prodi">
            </div>
            <div>
              Isi pilihan 1 terlebih dahulu
            </div>
         </form>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Pilihan 3
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="nama_ptn" placeholder="Pilih Perguruan tinggi" name="nama_ptn">
            </div>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="nama_prodi" placeholder="Pilih Program Studi" name="nama_prodi">
            </div>
            <div>
              Isi pilihan 2 terlebih dahulu
            </div>
         </form>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          PTN tempat anda mengikuti ujian keterampilan
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Olahraga<input type="text" class="form-control" id="nama_ptn_olahraga" placeholder="Pilih Perguruan tinggi" name="nama_ptn_olahraga">
            </div>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px"> 
              Ujian Keterampilan Senirupa / Desain<input type="text" class="form-control" id="nama_prodi_senirupa_desain" placeholder="Pilih Program Studi" name="nama_prodi_senirupa_desain">
            </div>
            <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Sendratari<input type="text" class="form-control" id="nama_prodi_Sendratari" placeholder="Pilih Program Studi" name="nama_prodi_Sendratari">
            </div>
             <div class="form-group" style="margin-bottom: 0px;padding-bottom: 20px""> 
              Ujian Keterampilan Seni Musik<input type="text" class="form-control" id="nama_prodi_seni_musik" placeholder="Pilih Program Studi" name="nama_prodi_seni_musik">
            </div>
             <div class="form-group" style="margin-bottom: 0px"> 
              Ujian Keterampilan Seni Tari<input type="text" class="form-control" id="nama_prodi_seni_tari" placeholder="Pilih Program Studi" name="nama_prodi_seni_tari">
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

