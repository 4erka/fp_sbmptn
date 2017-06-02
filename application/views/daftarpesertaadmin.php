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
                                        <td>diterima/tidak</td>
                                        <td><a a data-toggle="modal" data-target="#tombolmodal"><button type="button" class="btn btn-primary" onclick="myFunction()">Tambah</button></a></td>
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
          <div class="text-center">
            <h2> Login Admin: </h2>
        </div>
        </div>

        <div class="modal-body">
              <div class="card">
              <div class="card-block">

                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text"  name="userid" class="form-control" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}" >
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password"  name="pswrd" class="form-control" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                </div>

                <div class="text-center">
                  <button class="btn btn-deep-purple" onclick="check(this.form)" type="submit"> Login</button>
                </div>

              </div>

              <!--div class="modal-footer">
                    <div class="options">
                      <p>Lupa Password <a href="#">Password?</a></p>
                    </div-->
                </div>
              </div>

        </div>

      </div>

    </div>