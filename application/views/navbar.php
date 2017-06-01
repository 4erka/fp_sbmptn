
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo site_url('con_homepage') ?>">SBMPTN 2017</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo site_url('con_homepage') ?>">Halaman utama</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi
        <span class="caret"></span> </a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url('con_pageinformasi') ?>">Informasi Umum</a></li>
          <li><a href="<?php echo site_url('Daftarptn') ?>">Daftar PTN</a></li>
          <li><a href="<?php echo site_url('con_daftarptnuk') ?>">Daftar PTN UK</a></li>
          <li><a href="<?php echo site_url('DaftarPanlok') ?>">Daftar Panlok</a></li>
        </ul>
      </li>
      
      <li><a href="<?php echo site_url('pendaftaran') ?>">Pendaftaran</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> ADMIN</a></li>
    </ul>
  </div>
</nav>

<div class="modal fade" id="myModal" role="dialog">
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
                    <input type="text" id="form2" class="form-control" placeholder="Username">
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="form4" class="form-control" placeholder="Password">
                </div>

                <div class="text-center">
                  <button class="btn btn-deep-purple">Login</button>
                </div>

              </div>

              <div class="modal-footer">
                    <div class="options">
                      <p>Lupa Password <a href="#">Password?</a></p>
                    </div>
                </div>
              </div>

        </div>

      </div>

    </div>
  </div>
