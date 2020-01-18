        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""> Info Gempa Terkini </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Menu / Navigasi</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li <?php if($this->uri->segment(2)==="gempa"){echo 'class="active"';}?>><a href="<?php echo site_url(); ?>mkg/gempa/0"><span class="glyphicon glyphicon-map-marker"></span> Info Gempa</a></li>
                        <li <?php if($this->uri->segment(2)==="dirasakan"){echo 'class="active"';}?>><a href="<?php echo site_url(); ?>mkg/dirasakan"><span class="glyphicon glyphicon-globe"></span> Gempa Dirasakan</a></li>

                        <!--li class="dropdown <?php echo $r_kelola_jadwal;?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-calendar"></span> Kelola Jadwal<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url();?>/admin/kelola_jadwal/liga">Jadwal Pertandingan Liga</a></li>
                                <li><a href="<?php echo site_url();?>/admin/kelola_jadwal/timnas">jadwal Pertandingan Timnas</a></li>
                                  <li <?php if($this->uri->segment(2)==="index" || empty($this->uri->segment(2))===true){echo 'class="active"';}?>><a href="<?php echo site_url(); ?>/welcome_message"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
                        <li <?php if($this->uri->segment(2)==="cuaca"){echo 'class="active"';}?>><a href="<?php echo site_url(); ?>/mkg/cuaca/nad"><span class="glyphicon glyphicon-globe"></span> Prakiraan Cuaca</a></li>
                            </ul>
                        </li-->
                    </ul>
                    <!--ul class="nav navbar-nav pull-right">
                        <li><a href="#">3Gen-ITDev</a></li>

                    </ul-->
                </div>
            </div>
        </div>
