  <?php
        $ambil = $this->db->get('menu')->result();
        foreach ($ambil as $row){
           if($row->submenu=="T"){
               
           } 
               
        }
        ?>



<!--li>
                      <a href="#"><i class="icon-stack2"></i> <span>Master Sistem</span></a>
                      <ul>
                          <li class="<?php echo menuaktif('level', $aktif); ?>"><a href="<?php echo base_url('Level'); ?>"><i class="icon-collaboration"></i> Level</a></li>
                          <li class="<?php echo menuaktif('pengguna', $aktif); ?>"><a href="<?php echo base_url('Pengguna'); ?>"><i class="icon-users"></i> Pengguna</a></li>
                          <li class="<?php echo menuaktif('menu', $aktif); ?>"><a href="<?php echo base_url('Menu'); ?>"><i class="icon-menu"></i> Menu</a></li>
                          <li class="<?php echo menuaktif('submenu', $aktif); ?>"><a href="<?php echo base_url('Submenu'); ?>"><i class="icon-menu2"></i>Sub Menu</a></li>
                          <li class="<?php echo menuaktif('agama', $aktif); ?>"><a href="<?php echo site_url('Agama'); ?>"><i class="icon-sphere"></i>Agama</a></li>
                        <li class="<?php echo menuaktif('kategori', $aktif); ?>"><a href="<?php echo site_url('Kategori'); ?>"><i class="icon-pencil6"></i>Kategori</a></li>
                      </ul>
                    </li>
                    <li class="<?php echo menuaktif('klasifikasi', $aktif); ?>"><a href="<?php echo site_url('Klasifikasi'); ?>"><i class="icon-upload7"></i> <span>Klasifikasi</span></a></li>
                    <li>
                      <a href="#"><i class="icon-people"></i> <span>Penduduk</span></a>
                      <ul>
                        <li class="<?php echo menuaktif('entry', $aktif); ?>"><a href="<?php echo site_url('Entry'); ?>"><i class="icon-pencil7"></i> <span>Data Penduduk</span></a></li>
                        <li class="<?php echo menuaktif('laporan', $aktif); ?>"><a href="<?php echo site_url('Laporan'); ?>"><i class="icon-book"></i> <span>Laporan</span></a></li>
                        <li class="<?php echo menuaktif('all', $aktif); ?>"><a href="<?php echo site_url('Entry/all'); ?>"><i class="icon-file-eye2"></i> <span>Searching</span></a></li>
                      </ul>
                    </li>
                    <li class="<?php echo menuaktif('user', $aktif); ?>"><a href="<?php echo site_url('User'); ?>"><i class="icon-collaboration"></i> <span>Manajemen Akses</span></a></li>
                    <li class="<?php echo menuaktif('ins', $aktif); ?>"><a href="<?php echo site_url('Ins'); ?>"><i class="icon-city"></i> <span>Manajemen Desa</span></a></li>
                  <li class="<?php echo menuaktif('karyawan', $aktif); ?>"><a href="<?php echo site_url('Karyawan'); ?>"><i class="icon-user-tie"></i> <span>Manajemen Karyawan</span></a></li>
                  <li class="<?php echo menuaktif('arsip', $aktif); ?>"><a href="<?php echo site_url('Arsip'); ?>"><i class="icon-book"></i> <span>Manajemen Arsip</span></a></li>
                    -->