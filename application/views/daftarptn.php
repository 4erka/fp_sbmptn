<ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#home">Wilayah 1</a></li>
  <li><a data-toggle="tab" href="#menu1">Wilayah 2</a></li>
  <li><a data-toggle="tab" href="#menu2">Wilayah 3</a></li>
  <li><a data-toggle="tab" href="#menu3">Wilayah 4</a></li>
  <li><a data-toggle="tab" href="#menu4">Semua Wilayah</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>WILAYAH</th>
            <th>PANLOK</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarptn as $res): ?>
            <?php if($res->wil_id == 1): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><button type="button" class="btn btn-info">Lihat Profil</button></td>
                <td><?php echo $res->wil_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
            </tr>
          <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>WILAYAH</th>
            <th>PANLOK</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach($daftarptn as $res): ?>
            <?php if($res->wil_id == 2): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><button type="button" class="btn btn-info">Lihat Profil</button></td>
                <td><?php echo $res->wil_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
            </tr>
          <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu2" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>WILAYAH</th>
            <th>PANLOK</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach($daftarptn as $res): ?>
            <?php if($res->wil_id == 3): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><button type="button" class="btn btn-info">Lihat Profil</button></td>
                <td><?php echo $res->wil_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
            </tr>
          <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu3" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>WILAYAH</th>
            <th>PANLOK</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach($daftarptn as $res): ?>
            <?php if($res->wil_id == 4): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><button type="button" class="btn btn-info">Lihat Profil</button></td>
                <td><?php echo $res->wil_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
            </tr>
          <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="menu4" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>WILAYAH</th>
            <th>PANLOK</th>
          </tr>
        </thead>
          <tbody>
            <?php foreach($daftarptn as $res): ?>
            <tr>   
                <td><?php echo $res->ptn_id; ?></td>
                <td><?php echo $res->ptn_nama; ?></td>
                <td><button type="button" class="btn btn-info">Lihat Profil</button></td>
                <td><?php echo $res->wil_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
