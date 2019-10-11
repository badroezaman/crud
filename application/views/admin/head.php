<div class="navbar navbar-default navbar-fixed-top header-highlight">
    <div class="navbar-header">
   <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="icon-switch2 icon-2x" style="color: #fff"></i><!--b style="color:white;font-size:17px;"><i>SIPUDES <?php #echo getnamains('desa');?></i></b--></a>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php #echo base_url('uploads/' . getfoto($this->session->userdata('id_penduduk'))); ?>" alt="">
                    <span><?php echo $this->session->userdata('nama'); ?></span> As <?php
                   # if ($this->session->userdata('levelisasi') == 1) {
                    #    echo "Superadmin";
                    #} else {
                        #echo "Admin";
                    #}
                        echo $this->session->userdata('levelisasi');
                    ?>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="" data-toggle="modal" data-target="#ganti"><i class="icon-cog5"></i> Ubah Username Dan Password</a></li>
                    <li><a href="<?php echo site_url('Welcome/logout'); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar');"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>