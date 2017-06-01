<ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#home">OLAHRAGA</a></li>
  <li><a data-toggle="tab" href="#menu1">SENI RUPA DAN DESAIN</a></li>
  <li><a data-toggle="tab" href="#menu2">SENDRATASIK</a></li>
  <li><a data-toggle="tab" href="#menu3">SENI TARI</a></li>
  <li><a data-toggle="tab" href="#menu4">SENI MUSIK</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="container">
      <h2>DAFTAR PTN PENYELENGGARA UJIAN KETERAMPILAN</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>JENIS UK</th>
            <th>ALAMAT</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarptnuk as $res): ?>
            <?php if($res->ptnuk_jenis == "OLAHRAGA"): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><?php echo $res->ptnuk_jenis; ?></td>
                <td><?php echo $res->ptnuk_alamat; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN PENYELENGGARA UJIAN KETERAMPILAN</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>JENIS UK</th>
            <th>ALAMAT</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarptnuk as $res): ?>
            <?php if($res->ptnuk_jenis == "SENI RUPA DAN DESAIN"): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><?php echo $res->ptnuk_jenis; ?></td>
                <td><?php echo $res->ptnuk_alamat; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN PENYELENGGARA UJIAN KETERAMPILAN</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>JENIS UK</th>
            <th>ALAMAT</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarptnuk as $res): ?>
            <?php if($res->ptnuk_jenis == "SENDRATASIK"): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><?php echo $res->ptnuk_jenis; ?></td>
                <td><?php echo $res->ptnuk_alamat; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu3" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN PENYELENGGARA UJIAN KETERAMPILAN</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>JENIS UK</th>
            <th>ALAMAT</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarptnuk as $res): ?>
            <?php if($res->ptnuk_jenis == "SENI TARI"): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><?php echo $res->ptnuk_jenis; ?></td>
                <td><?php echo $res->ptnuk_alamat; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu4" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN PENYELENGGARA UJIAN KETERAMPILAN</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>JENIS UK</th>
            <th>ALAMAT</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarptnuk as $res): ?>
            <?php if($res->ptnuk_jenis == "SENI MUSIK"): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><?php echo $res->ptnuk_jenis; ?></td>
                <td><?php echo $res->ptnuk_alamat; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
