<?php
$this->load->view('template/head');
date_default_timezone_set("Asia/Jakarta");
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />
<style type="text/css">
 /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
} 
</style>
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Atur Alarm<small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-lg-3 col-xs-4">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 id="tampiljam"><?=date("H:i:s");?></h3>
                    <p id="tampiltanggal"><?=date("Y-m-d");?></p>
                </div>
                <div class="icon">
                    <i class="fa fa-calendar"></i>
                </div>
            </div>
        </div>
    </div>
  <hr>
  <form action="<?=base_url('dashboard/save');?>" method="post">
  <div class="row">
        <div class="col-xs-3">
<!-- small box -->
                            Jam : 
                            <input name="jam" type="text" class="form-control" id="jam" value="" placeholder="HH:MM..." data-inputmask="'mask': ['99:99']" data-mask />
        </div>
        <!-- ./col -->
        <div class="col-xs-3">
    <!-- small box -->
            Durasi: 
                            <input name="durasi" type="text" class="form-control" id="durasi" value="" placeholder="Detik..."/>
        </div>
        
        <!-- ./col -->
      <!-- ./col -->
  </div>
  <div class="row">
        	<div class="col-xs-2">
                <div class="input-group">
                            <button class="pull-right btn btn-default" id="sendEmail">Add <i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
       </form>
  <div class="form-group">
                      <h3 align="center">Daftar Alarm</h3>
                       <div class="row">
                       <div class="overlay" style="display:none">
              				<i class="fa fa-refresh fa-spin"></i>
            			</div>
                       		<div id="listalarm" class="col-xs-10">
									<?=!empty($table)?$table:""; ?>
                       		</div>
                       </div>
                  </div>
</section><!-- /.content -->


<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/input-mask/jquery.inputmask.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
	$('[data-mask]').inputmask();
	
	setInterval(function() {
        //$('#tampiltanggal').text(momentNow.format('DD MMM YYYY'));
        //$('#tampiljam').html(momentNow.format('HH:mm:ss'));
		var s = $('#tampiltanggal').text()+' ' + $('#tampiljam').html();
		var d = new Date(s);
		//alert(d);
		var c = new Date(d.getTime() + 1000*1);
		var jam = c.getHours();
		var menit = c.getMinutes();
		var detik = c.getSeconds();
		var tahun = c.getFullYear();
		var bulan = c.getMonth()+1;
		var tanggal = c.getDate(); 
		var timetext = tambahNol(jam) +':'+tambahNol(menit)+':'+tambahNol(detik);
		var datetext = tahun +'-'+tambahNol(bulan)+'-'+tambahNol(tanggal);
		$('#tampiljam').html(timetext);
		$('#tampiltanggal').html(datetext);
		//alert(d);
        }, 1000);
	
});

/*
 * From the same frontend js file
 */
function updateLiveTempGraph(mainGraph) {
    // Make our API call again, requesting fresh data
    $.getJSON('/devices/1/recent-temps', function(results) {
        // Set the already-initialised graph to use this new data
        mainGraph.setData(results.graphData);
    });
}
function tambahNol(s){
	var t = ('0'+s).substr(-2);
	return t;
	}
</script>


<?php
$this->load->view('template/foot');
?>