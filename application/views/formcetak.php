<div class="container-fluid" >
<div class="row">
	<div class="col-sm-6 col-sm-offset-3" style="background-color:lavender;">
  <br>
  <!-- <p class="text-center"><img src="<?php echo base_url('assets/image/SBMPTN.jpg'); ?>" class="img-rounded" alt="Cinque Terre" width="600" height="125"></p> -->
  <h4 style="padding-bottom: 10px"><b><center>Kartu Peserta SBMPTN</b></center></h4>
  <p style="font-size: 12px;padding: 0px;margin: 0px"><b>NOMOR PESERTA : </b><?php foreach($peserta as $row){ echo $row->ps_id; }; ?></p>
  <p style="font-size: 12px;padding: 0px;margin: 0px"><b>NAMA DI IJAZAH : </b><?php foreach($peserta as $row){ echo $row->ps_nama; }; ?></p>
  <p style="font-size: 12px;padding: 0px;margin: 0px"><b>NAMA DI LEMBAR JAWABAN (LJU) : </b><?php foreach($peserta as $row){ echo $row->ps_nama; }; ?></p>
  <!-- <p style="font-size: 12px;padding: 0px;margin: 0px"><b>KELOMPOK UJIAN : </b></p> -->
  <p style="font-size: 12px;padding: 0px;margin: 0px"><b>ALAMAT : </b><?php foreach($peserta as $row){ echo $row->ps_alamat; }; ?></p>

  <p class="container-fluid">
  <table class="table table-bordered" style="font-size: 12px;padding: 0px;margin: 0px">
    <thead>
      <tr>
        <th>HARI & TANGGAL</th>
        <th>WIB</th>
        <th>KEGIATAN</th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td>Jumat, 30 Juni 2017</td>
        <td>09.45 - 10.00</td>
        <td>MASUK RUANGAN MENGISI BIODATA DAN PEMERIKSAAN IDENTITAS</td>
      </tr>
      <tr>
        <td>Jumat, 30 Juni 2017</td>
        <td>10.00 - 11.45</td>
        <td>TES KEMAMPUAN DAN POTENSI AKADEMIK (TKPA)</td>
      </tr>
      <tr>
        <td>Jumat, 30 Juni 2017</td>
        <td>11.45 - 12.45</td>
        <td>ISTIRAHAT</td>
      </tr>
      <tr>
        <td>Jumat, 30 Juni 2017</td>
        <td>12.45 - 13.00</td>
        <td>MASUK RUANGAN MENGISI BIODATA DAN PEMERIKSAAN IDENTITAS</td>
      </tr>
      <tr>
        <td>Jumat, 30 Juni 2017</td>
        <td>11.45 - 12.45</td>
        <td>TES KEMAMPUAN DASAR</td>
      </tr>
    </tbody>
  </table>
</p>
  <h6><strong> PERLENGKAPAN YANG HARUS DIBAWA SAAT UJIAN : </strong></h6>
  <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- Kartu Tanda Peserta Ini</p>
  <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- Fotokopi Ijazah yang telah dilegalisasi atau tanda lulus asli</p>
  <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- Pensil 2B secukupnya,karet penghapus,peraut,pensil (jika diperlukan)</p>
  
  <h6><strong> ALAMAT PADA SAAT MENGIKUTI UJIAN (HARUS DIISI) :</strong></h6>
  <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- ALAMAT :</p>
  <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- TELEPON :</p>
  
  <h6><strong>PILIHAN PROGRAM STUDI :</strong></h6>
  <?php foreach($univ1 as $row): ?>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify"><strong>1. <?php echo $row->ptn_nama ?></strong></p>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify"><?php echo $row->pro_id ?> - <?php echo $row->pro_nama ?></p>
  <?php endforeach ?>
  <?php foreach($univ2 as $row): ?>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify"><strong>2. <?php echo $row->ptn_nama ?></strong></p>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify"><?php echo $row->pro_id ?> - <?php echo $row->pro_nama ?></p>
  <?php endforeach ?>
  <?php foreach($univ3 as $row): ?>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify"><strong>3. <?php echo $row->ptn_nama ?></strong></p>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify"><?php echo $row->pro_id ?> - <?php echo $row->pro_nama ?></p>
  <?php endforeach ?>  
    <h5><strong>LOKASI UJIAN :</strong></h5>
    <!-- <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- Sektor :</p>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- Lokasi :</p>
    <p style="font-size: 12px;padding: 0px;margin: 0px" class="text-justify">- Ruang :</p> -->
    <br>
    <p style="font-size: 12px;padding: 0px;margin: 0px"><b>PERNYATAAN :
DENGAN INI SAYA MENYATAKAN BAHWA DATA YANG SAYA ISIKAN DALAM PENDAFTARAN ONLINE SBMPTN TAHUN 2017 ADALAH BENAR. SAYA BERSEDIA MENERIMA SANKSI PEMBATALAN PENERIMAAN DI PTN YANG SAYA PILIH APABILA MELANGGAR PERNYATAAN INI</b></p>
<h5><strong>TANDA TANGAN DAN NAMA TERANG : </strong></h5><br><br/>
</div>
</div>
	
</div>
  