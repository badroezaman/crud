<div class="sidebar sidebar-main">
    <div class="sidebar-content">
        <div class="sidebar-user">
        </div>
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="<?php echo menuaktif('dashboard', $aktif); ?>"><a href="<?php echo base_url(); ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <?php
                    $level = $this->session->userdata('level');
                    if ($level == '1') {
                        $ambil = $this->db->get('menu')->result();
                    } else {
                        $ambil = $this->db->where('id_level', $level)->get('menu')->result();
                    }
                    foreach ($ambil as $row) {
                        if ($row->submenu == "Y") {
                            ?>
                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span><?php echo $row->nama_menu; ?></span></a>
                                <ul>
                                    <?php
                                    $sub = $this->db->where('id_menu', $row->id_menu)->get('submenu')->result();
                                    foreach ($sub as $row1) {
                                        $submenu_aktif = $row1->submenu_aktif;
                                        $link = $row1->link;
                                        $namasubmenu = $row1->nama_submenu;
                                        $icon_sub = $row1->icon;
                                        ?>

                                        <li class="<?php echo menuaktif($submenu_aktif, $aktif); ?>"><a href="<?php echo base_url($link); ?>"><i class="<?php echo $icon_sub; ?>"></i> <?php echo $namasubmenu; ?></a></li>

                                        <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="<?php echo menuaktif($row->menu_aktif, $aktif); ?>"><a href="<?php echo site_url($row->link); ?>"><i class="<?php echo $row->icon; ?>"></i> <span><?php echo $row->nama_menu; ?></span></a></li>

                            <?php
                        }
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>