<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <h2 align="center">Daftar Peserta</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No Peserta SBMPTN</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Lulusan</th>
                                        <th>Telp/HP</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>123456789</td>
                                        <td>yolo</td>
                                        <td>surabaya</td>
                                        <td>SMA 9000 Surabaya</td>
                                        <td>08987654321</td>
                                        <td>yolo@gmail.com</td>
                                        <td><a a data-toggle="modal" data-target="#tombolmodal"><button type="button" class="btn btn-primary" onclick="myFunction()">diterima</button></a>
                                        <button type="button" class="btn btn-primary" onclick="myFunction()">Tidak diterima</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

<div class="modal fade" id="tombolmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 align="center">Diterima di</h4> 
        </div>

        <div class="modal-body">
            <div>
                <form>
                    <div class="form-group" style="margin-bottom: 0px"> 
                    <div class="input-group">
                        <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Pilihan 1
                        </label>
                        </div>
                        <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Pilihan 2
                        </label>
                        </div>
                        <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            Pilihan 3
                        </label>
                        </div>
                  </select>
              </div>
            </div>
         </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" >Simpan</button>
        </div>
        </div>
    </div>
</div>