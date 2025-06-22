
<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <!-- <img src="../themes/fobia/assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon"> -->
           <ion-icon name="logo-dropbox" class="text-primary" size="large"></ion-icon>
        </div>
        <div>
          <h4 class="logo-text fw-bold text-primary">Gudang</h4>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li class="menu-label">Main Menu</li>
        <li>
            <a href="<?php echo base_url() . 'dashboard/'; ?>">
              <div class="parent-icon">
                <ion-icon name="bar-chart-outline"></ion-icon>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>

          <!-- Menu -->
          <li>
            <a href="<?php echo base_url() . 'barang/'; ?>">
              <div class="parent-icon">
                <ion-icon name="grid-outline"></ion-icon>
              </div>
              <div class="menu-title">Barang</div>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url() . 'pemasok/'; ?>">
              <div class="parent-icon">
                <ion-icon name="people-circle-outline"></ion-icon>
              </div>
              <div class="menu-title">Pemasok</div>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url() . 'transaksi/'; ?>">
              <div class="parent-icon">
                <ion-icon name="journal-outline"></ion-icon>
              </div>
              <div class="menu-title">Transaksi</div>
            </a>
          </li>


          <li>
            <a href="../logout.php">
              <div class="parent-icon">
                <ion-icon name="push-outline"></ion-icon>
              </div>
              <div class="menu-title">Log Out</div>
            </a>
          </li>

      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->
