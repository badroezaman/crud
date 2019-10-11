<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/echarts/echarts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/charts/echarts/bars_tornados.js') ?>"></script>
<?php 
$data=$this->session->flashdata('sukses');
if($data!=""){ ?>
<div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
<?php } ?>
<?php 
$data2=$this->session->flashdata('error');
if($data2!=""){ ?>
<div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
<?php } ?>
Selamat datang