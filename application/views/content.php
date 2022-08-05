
  <div class="container-fluid">
    <div class="container">
      <div class="row p-4" style="margin-left:-3px">
        <div class="col-md-6">
            <p class="p-title">PHP Hosting</p>
            <p class="p-sub-title">Cepat, Handal, penuh dengan<br> modul PHP yang anda butuhkan</p>
            <p class="p-content">
                <img class="img-fluid float-left icon-check" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Solusi PHP untuk performa query yang lebih cepat
                <br>
                <img class="img-fluid float-left icon-check" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Konsumsi memori yang lebih rendah
                <br>
                <img class="img-fluid float-left icon-check" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Support PHP 5.3, PHP 5.4, PHP 5.6, PHP 5.7, PHP 7
                <br>
                <img class="img-fluid float-left icon-check" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Fitur enkripsi IonCube dan Zend Guard Loaders
                </li>
            </p>
        </div>
        <div class="col-md-6">
            <img src="assets/svg/illustration banner PHP hosting-01.svg" alt="">
        </div>
      </div>
    </div>
  </div>
    <div class="clear-fix"> </div>
  <div class="container-fluid">
    <div class="container">
      <div class="row justify-content-center align-items-center text-center p-5">
        <div class="col-md-4">
          <figure>
            <img src="assets/svg/icon PHP Hosting_zendguard.svg" alt="Zend Guard">
            <figcaption><p>PHP Zend Guard Loader </p></figcaption>
          </figure>
        </div>
        <div class="col-md-4">
          <img src="assets/svg/icon PHP Hosting_composer.svg" alt="">
          <p>PHP Composer </p>
        </div>
        <div class="col-md-4">
          <img src="assets/svg/icon PHP Hosting_ioncube.svg" alt="">
          <p>PHP ionCube Loader </p>
        </div>
      </div>
    </div>
  </div>
    <div class="clear-fix"> </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center align-items-center p-5">
          <div class="col-md-12 p-4" id="hosting" >
            <h2 class="text-center">Paket Hosting Singapura yang Tepat</h2>
            <p class="text-center">Diskon 40% + DOmain dan SSL gratis untuk anda</p>
          </div>

          <div class="col-md-12">
            <?php foreach($hosting->result_array() as $paket){ ?>
            <div class="card <?php if($paket['best_seller']=="1"){echo "crd-best";} ?>" style="width: 15rem;float:left; border:none; ">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-center <?php if($paket['best_seller']==1){echo "li-best";} ?>">
                  <h4><?php echo $paket['package_name']?></h4>
                </li>
                <li class="list-group-item <?php if($paket['best_seller']==1){echo "li-best";} ?>">
                <?php if($paket['best_seller']==1){?>
                  <div style="position:absolute;z-index:99;margin-top: -78px;margin-left: -26px;margin-right: 46px;"><img style="width:55%;" src="<?php echo base_url()?>/assets/images/best_seller.png" alt=""></div>
                <?php } ?>
                  <p class="text-center"><span style="text-decoration: line-through;">Rp <?php echo $paket['default_price']?></span><br>
                     <sup>Rp</sup><span style="font-weight:bold;font-size:40px;"><?php echo $paket['prom_price']?></span>
                     <span style="font-weight:bold;"><sup>.<?php echo $paket['prom_price_sup']?>/bln</span></sup></p>
                </li>
                <li class="list-group-item text-center">
                  <p>
                    <span style="font-weight:bold;"><?php echo $paket['member_registered']?></span>
                    Pengguna Terdaftar
                  </p>
                </li>
                <li class="list-group-item text-center">
                  <p>
                    <span style="font-weight:bold;"><?php echo $paket['rsc_power']?></span><br>
                    <span style="font-weight:bold;"><?php echo $paket['disk_space']?></span> Disk Space<br>
                    <span style="font-weight:bold;"><?php echo $paket['bandwidth_space']?></span> Bandwidth<br>
                    <span style="font-weight:bold;"><?php echo $paket['bandwidth_space']?></span> POP3 Mail<br>
                    <span style="font-weight:bold;"><?php echo $paket['db_space']?></span> Databases<br>
                    <?php if($paket['domain_addon']==1){?>
                      <b><?php echo $paket['domain_addon']?></b> Domain<br>
                    <?php }else { ?>
                      <b><?php echo $paket['domain_addon']?></b> Addon Domains<br>
                    <?php } ?>
                    <span style="font-weight:bold;"><?php echo $paket['backup_services']?> Backup</span><br>
                    <?php if($paket['domain_services']!=""){ ?>
                      <span style="font-weight:bold;"><?php echo $paket['domain_services']?> Selamanya</span><br>
                    <?php }else{} ?>
                    <span style="font-weight:bold;"><?php echo $paket['ssl_services']?> Gratis Selamanya</span><br>
                    <?php if($paket['name_server']!=""){ ?>
                      <span style="font-weight:bold;"><?php echo $paket['name_server']?></span><br>
                    <?php }else{} ?>
                    <?php if($paket['support_services']!=""){ ?>
                      <span style="font-weight:bold;"><?php echo $paket['support_services']?> Layanan Support</span>
                    <?php }else{} ?>
                    <?php if($paket['star']!=""){?>
                    <ul style="list-style-type:none;vertical-align:middle;margin-left:15px;margin-right:15px;text-align:center;">
                    <?php
                      for($j=0;$j<$paket['star'];$j++){?>
                          <li><img src="<?php echo base_url()?>assets/icon/star.png" style="width:13px;height:13px;margin:2px;float:left;"></li>
                    <?php }?>
                  </ul>
                  <?php }else{} ?>
                  <br>
                    <span style="font-weight:bold;"><?php echo $paket['mail_protection']?></span><br>
                 </p><br>
                 <button type="button" class="btn btn-outline-primary rounded-pill btn-paket">
                   Pilih Sekarang
                 </button>
                </li>
              </ul>
            </div>
           <?php } ?>
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center align-items-center p-5">
          <div class="col-md-12 p-4">
              <p class="text-center" style="font-size:30px;">Powerfull dengan Limit PHP yang Lebih Besar</p>
          </div>
          <div class="col-md-5">
            <ul class="list-group">
              <li class="list-group-item text-center">
                <img class="img-fluid float-left" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Max Execution Time 300s
              </li>
              <li class="list-group-item text-center">
                <img class="img-fluid float-left" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Max Execution Time 300s
              </li>
              <li class="list-group-item text-center">
                <img class="img-fluid float-left" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                PHP Memory Limit 1024 MB
              </li>
            </ul>
          </div>
          <div class="col-md-5">
            <ul class="list-group">
              <li class="list-group-item text-center">
                <img class="img-fluid float-left" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Post Max Size 128 MB
              </li>
              <li class="list-group-item text-center">
                <img class="img-fluid float-left" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Upload Max Filesize 128 MB
              </li>
              <li class="list-group-item text-center">
                <img class="img-fluid float-left" width="25" heught="25" src="assets/icon/check-green.jpg" alt="">
                Max Input vars 2500
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center align-items-center p-5">
          <div class="col-md-12 p-4">
              <p class="text-center" style="font-size:30px;">Semua Paket Hosting Sudah Termasuk</p>
          </div>
          <div class="col-md-4 mb-4 text-center">
            <img width="20%"src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" alt="">
            <p><span style="font-weight:bold;font-size:25px;">PHP Semua Versi</span><br>
              Pilih mulai dari versi PHP 5.3 s/d PHP 7<br>
              Ubah Sesuka Anda!
            </p>
          </div>
          <div class="col-md-4 mb-4 text-center">
            <img width="20%"src="assets/svg/icon PHP Hosting_My SQL.svg" alt="">
            <p><span style="font-weight:bold;font-size:25px;">MySql Versi 5.6</span><br>
              Pilih mulai dari versi PHP 5.3 s/d PHP 7<br>
              Ubah Sesuka Anda!
            </p>
          </div>
          <div class="col-md-4 mb-4 text-center">
            <img width="20%"src="assets/svg/icon PHP Hosting_CPanel.svg" alt="">
            <p><span style="font-weight:bold;font-size:25px;">Panel Hosting cPanel</span><br>
              Pilih mulai dari versi PHP 5.3 s/d PHP 7<br>
              Ubah Sesuka Anda!
            </p>
          </div>
          <div class="col-md-4 mt-4 text-center">
            <img width="20%"src="assets/svg/icon PHP Hosting_garansi uptime.svg" alt="">
            <p><span style="font-weight:bold;font-size:25px;">Garansi Uptime 99.9%</span><br>
              Pilih mulai dari versi PHP 5.3 s/d PHP 7<br>
              Ubah Sesuka Anda!
            </p>
          </div>
          <div class="col-md-4 mt-4 text-center">
            <img width="20%"src="assets/svg/icon PHP Hosting_InnoDB.svg" alt="">
            <p><span style="font-weight:bold;font-size:25px;">Database InnoDB Unlimited</span><br>
              Pilih mulai dari versi PHP 5.3 s/d PHP 7<br>
              Ubah Sesuka Anda!
            </p>
          </div>
          <div class="col-md-4 mt-4 text-center">
            <img width="20%"src="assets/svg/icon PHP Hosting_My SQL remote.svg" alt="">
            <p><span style="font-weight:bold;font-size:25px;">Wildcard Remote MySql</span><br>
              Pilih mulai dari versi PHP 5.3 s/d PHP 7<br>
              Ubah Sesuka Anda!
            </p>
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>
    <div class="contaner-fluid">
      <div class="container">
        <div class="row p-5">
          <div class="col-md-12 p-4">
            <p class="text-center" style="font-size:30px;">Mendukung Penuh Framework Laravel</p>
          </div>
          <div class="col-md-6">
            <p>Tak perlu menggunakan dedicated server ataupun VPS<br>
               yang mahal. Layanan PHP Hosting murah kami<br>
               mendukung penuh framework favorit Anda.</p>
          </div>
          <div class="col-md-6">
            <img src="assets/svg/illustration banner support laravel hosting.svg" alt="">
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row p-5">
          <div class="col-md-12 p-4">
            <p class="text-center" style="font-size:30px;">Modul lengkap untuk menjalankan Aplikasi PHP Anda</p>
          </div>
          <div class="col">
            <ul class="list ml-5">
              <li>IcePHP</li>
              <li>apc</li>
              <li>apcu</li>
              <li>apm</li>
              <li>ares</li>
              <li>bcmath</li>
              <li>bcompiler</li>
              <li>big_int</li>
              <li>bitset</li>
              <li>bloomy</li>
              <li>bz2_filter</li>
              <li>clamav</li>
              <li>coin_acceptor</li>
              <li>crack</li>
              <li>dba</li>
            </ul>
          </div>
          <div class="col">
            <ul class="list ml-5">
              <li>http</li>
              <li>hufman</li>
              <li>idn</li>
              <li>igbinary</li>
              <li>imagick</li>
              <li>imap</li>
              <li>inclued</li>
              <li>inotify</li>
              <li>interbase</li>
              <li>intl</li>
              <li>ioncube_loader</li>
              <li>ioncube_loader_4</li>
              <li>jsmin</li>
              <li>crjsonack</li>
              <li>ldap</li>
            </ul>
          </div>
          <div class="col">
            <ul class="list ml-5">
              <li>nd_pdo_mysql</li>
              <li>oauth</li>
              <li>oci8</li>
              <li>odbc</li>
              <li>opcache</li>
              <li>pdf</li>
              <li>pdo</li>
              <li>pdo_dblib</li>
              <li>pdo_firebird</li>
              <li>pdo_mysql</li>
              <li>pdo_odbc</li>
              <li>pdo_pgsql</li>
              <li>pdo_sqlite</li>
              <li>pgsql</li>
              <li>phalcon</li>
            </ul>
          </div>
          <div class="col">
            <ul class="list ml-5">
              <li>stats</li>
              <li>stem</li>
              <li>stomp</li>
              <li>suhosin</li>
              <li>sybase_ct</li>
              <li>sysvmsg</li>
              <li>sysvsem</li>
              <li>sysvshm</li>
              <li>tidy</li>
              <li>timezonedb</li>
              <li>trader</li>
              <li>translit</li>
              <li>uploadprogress</li>
              <li>uri_template</li>
              <li>uuid</li>
            </ul>
          </div>
          <div class="col-md-12 p-2">
            <center>
              <button type="button" class="btn btn-outline-primary rounded-pill btn-paket">
                Selengkapnya
              </button>
            </canter>
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>
    <div class="container-fluid">
      <div class="container">
        <div class="row p-5">
          <div class="col-md-6 p-4">
              <p class="p-sub-title">Linux Hosting yang stabil<br>
              dengan teknologi LVE</p>
              <p class="p-content">SuperMicro <b>Intel Ceon 24-Cores</b> server dengan RAM <b>128 GB</b> dan
              teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi
              dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching. Apache load balancer
              berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection
              dan auto backup untuk keamanan website PHP Anda</p>
              <div class="mt-1">
                <button type="button" class="btn btn-primary rounded-pill">
                  Pilih Hosting Anda
                </button>
              </div>
          </div>
          <div class="col-md-6 p-4 mt-5">
              <img class="img-fluid"src="assets/images/Image support.png" alt="">
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>
      <!-- <div class="container-fluid bg-grey">
        <div class="container">
          <div class="row p-5">
            <div class="col-md-4">
                <p class="">Bagikan jika anda menyukai halaman ini</p>
            </div>
            <div class="col-md-6">

            </div>
          </div>
        </div>
      </div>
        <div class="clear-fix"> </div> -->
    <div class="container-fluid bg-grey">
      <div class="container">
        <div class="row mx-3 p-3">
          <div class="col-md-6">
            <p>Bagikan jika Anda menyukai halaman ini</p>
          </div>
          <div class="col d-flex justify-content-start">
            <img class="mx-2" width="40" height="40" src="assets/icon/fb.png" alt="Facebook">
            <span class="border p-1">80k</span>
            <img class="img-fluid mx-2" width="40" height="40" src="assets/icon/twitter.png" alt="Twitter">
            <span class="border p-1">450</span>
            <img class="img-fluid mx-2" width="40" height="40" src="assets/icon/g+.png" alt="Google+">
            <span class="border p-1">1900</span>
          </div>
        </div>
      </div>
    </div>
      <div class="clear-fix"> </div>
