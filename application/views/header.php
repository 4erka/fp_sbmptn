<!DOCTYPE html>
<html>
<head>
  <title>SBMPTN 2017</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/mdb.min.css">
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/mdb.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/tether.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function () {
        var url = window.location;
        $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
      });
  </script>
</head>

<body >
	<div class="jumbotron" style="background-color: #1a78c2; padding: 10px; margin: 0">
		<img src="<?php echo base_url(); ?>assets/image/logosbmptn.gif" >
	</div>

</div>
