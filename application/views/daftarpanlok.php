
<div class="col-md-6 col-md-offset-3">
  <ul class="nav nav-tabs nav-justified">
<h2>DAFTAR PTN DAN PANLOK</h2>
  <li class="active"><a data-toggle="tab" href="#wilayah1">Wilayah 1</a></li>
  <li><a data-toggle="tab" href="#wilayah2">Wilayah 2</a></li>
  <li><a data-toggle="tab" href="#wilayah3">Wilayah 3</a></li>
  <li><a data-toggle="tab" href="#wilayah4">Wilayah 4</a></li>
  <li><a data-toggle="tab" href="#wilayah">Semua Wilayah</a></li>
</ul>
</div>


<div class="tab-content">
  <div id="wilayah1" class="tab-pane fade in active">
    <div class="container">
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>WILAYAH</th>
            <th>SUB PANLOK</th>
            <th>CBT</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>TELP</th>
            <th>FB/TW</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarpanlok as $res): ?>
            <?php if($res->wil_id == 1): ?>
            <tr>   
                <td><?php echo $res->pl_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
                <td><?php echo $res->wil_id; ?></td>
                <td></td>
                <td><?php echo $res->pl_cbt; ?></td>
                <td><?php echo $res->pl_email; ?></td>
                <td><?php echo $res->pl_alamat; ?></td>
                <td><?php echo $res->pl_telp; ?></td>
                <td><?php echo $res->pl_sosmed; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="wilayah2" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>WILAYAH</th>
            <th>SUB PANLOK</th>
            <th>CBT</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>TELP</th>
            <th>FB/TW</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarpanlok as $res): ?>
            <?php if($res->wil_id == 2): ?>
            <tr>   
                <td><?php echo $res->pl_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
                <td><?php echo $res->wil_id; ?></td>
                <td></td>
                <td><?php echo $res->pl_cbt; ?></td>
                <td><?php echo $res->pl_email; ?></td>
                <td><?php echo $res->pl_alamat; ?></td>
                <td><?php echo $res->pl_telp; ?></td>
                <td><?php echo $res->pl_sosmed; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="wilayah3" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>WILAYAH</th>
            <th>SUB PANLOK</th>
            <th>CBT</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>TELP</th>
            <th>FB/TW</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarpanlok as $res): ?>
            <?php if($res->wil_id == 3): ?>
            <tr>   
                <td><?php echo $res->pl_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
                <td><?php echo $res->wil_id; ?></td>
                <td></td>
                <td><?php echo $res->pl_cbt; ?></td>
                <td><?php echo $res->pl_email; ?></td>
                <td><?php echo $res->pl_alamat; ?></td>
                <td><?php echo $res->pl_telp; ?></td>
                <td><?php echo $res->pl_sosmed; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="wilayah4" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>WILAYAH</th>
            <th>SUB PANLOK</th>
            <th>CBT</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>TELP</th>
            <th>FB/TW</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarpanlok as $res): ?>
            <?php if($res->wil_id == 4): ?>
            <tr>   
                <td><?php echo $res->pl_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
                <td><?php echo $res->wil_id; ?></td>
                <td></td>
                <td><?php echo $res->pl_cbt; ?></td>
                <td><?php echo $res->pl_email; ?></td>
                <td><?php echo $res->pl_alamat; ?></td>
                <td><?php echo $res->pl_telp; ?></td>
                <td><?php echo $res->pl_sosmed; ?></td>
            </tr>
            <?php endif;?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  <div id="wilayah" class="tab-pane fade">
    <div class="container">
      <h2>DAFTAR PTN DAN PANLOK</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>KODE</th>
            <th>NAMA</th>
            <th>WILAYAH</th>
            <th>SUB PANLOK</th>
            <th>CBT</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>TELP</th>
            <th>FB/TW</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($daftarpanlok as $res): ?>
            <tr>   
                <td><?php echo $res->pl_id; ?></td>
                <td><?php echo $res->pl_nama; ?></td>
                <td><?php echo $res->wil_id; ?></td>
                <td></td>
                <td><?php echo $res->pl_cbt; ?></td>
                <td><?php echo $res->pl_email; ?></td>
                <td><?php echo $res->pl_alamat; ?></td>
                <td><?php echo $res->pl_telp; ?></td>
                <td><?php echo $res->pl_sosmed; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
