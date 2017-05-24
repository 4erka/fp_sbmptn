<div class="container-fluid">
  <div class="row">
  <h1 style="text-align: center;">PENDAFTARAN SBMPTN 2017</h1>
  <h3 style="text-align: center;">Isi SMTA</h3>
  <div class="col-md-8 col-md-offset-2" style="padding-top: 30px ">

    <table align="center" class="table table-hover table-striped"  >
      <tr style="border-top: groove;border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Tempat SMTA
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
              <input type="text" class="form-control" id="provinsi_smta" placeholder="Provinsi" name="provinsi_smta">
            </div>
            <div class="form-group" style="margin-bottom: 0px"> 
              <input type="text" class="form-control" id="kab/kota_smta" placeholder="Kabupaten/Kota" name="kab/kota_smta">
            </div>
         </form>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Nama SMTA
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
              <input type="text" class="form-control" id="nama_smta" placeholder="Nama SMTA" name="nama_smta">
            </div>
         </form>

         <div>
           <form>
            <p>Jika Anda Memilih SMTA Lain Lain</p>
            <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
              <label for="SMTA_lain">Nama SMTA :</label>
                <select class="form-control" id="SMTA_lain">
                  <option>Anda lulusan satuan pendidikan setingkat SMTA di dalam negeri tahun 2015, 2016, atau 2017</option>
                  <option>Anda lulusan Paket C tahun 2015, 2016, atau 2017</option>
                  <option>Anda lulusan dari satuan pendidikan setingkat SMTA luar negeri</option>
                  <option>Anda lulusan dari sekolah luar negeri SRI tahun 2015, 2016, atau 2017</option>
                  <option>Anda Memiliki ijazah penyetaraan dan Kemdikbud RI tahun 2015, 2016, atau 2017</option>
                </select>
            </div>
         </form>
         </div>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Jurusan SMTA
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form>
            <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
              <input type="text" class="form-control" id="jurusan_smta" placeholder="IPA/IPS/DLL" name="jurusan_smta">
            </div>
         </form>
        </td>
      </tr>

      <tr style="border-left: groove;border-right: groove;">
        <td style="padding-top: 15px;padding-right: 0px">
          Tahun masuk SMTA
        </td>
        <td style="padding-top: 15px;">:</td>
        <td style="padding-left: 0px">
         <form class="form-inline">
            <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
              <div>
                <input type="text" class="form-control" id="tahun_masuk_smta" placeholder="Tahun" name="tahun_masuk_smta">
              </div>
            </div>

            <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
              <div>
                <input type="text" class="form-control" id="kelas_masuk_smta" placeholder="Kelas" name="kelas_masuk_smta">
              </div>
            </div>

          <tr style="border-left: groove;border-right: groove;">
            <td style="padding-top: 15px;padding-right: 0px">
              Tahun Lulus/ijasah SMTA
            </td>
            <td style="padding-top: 15px;">:</td>
            <td style="padding-left: 0px">
             <form>
                <div class="form-group" style="margin-bottom: 0px; padding-bottom: 20px"> 
                  <input type="text" class="form-control" id="tahun_lulus_ijazah_smta" placeholder="Tahun lulus menurut ijazah" name="tahun_lulus_ijazah_smta">
                </div>
             </form>
            </td>
          </tr>


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
          
          <a href="<?php echo site_url('con_formbiodata') ?>">
              <button type="button" class="btn btn-primary" >sebelumnya</button>
            </a>
            <a href="<?php echo site_url('con_formptn') ?>">
              <button type="button" class="btn btn-primary" >selanjutnya</button>
            </a>
            
      </div>
      </div>

    </div>
</div>

