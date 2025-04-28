<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <?php
        if (session()->get('role') == 'admin') {
        ?>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="dashboard-admin">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Home Nav -->
        <?php
        }
        ?>
        <?php
        if (session()->get('role') == 'user') {
        ?>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'user') ? "" : "collapsed" ?>" href="user">
                <i class="bi bi-cart-check"></i>
                <span>User</span>
            </a>
        </li><!-- End Keranjang Nav --> 
        <?php
        }
        ?>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                <i class="bi bi-receipt"></i>
                <span>Produk</span>
            </a>
        </li><!-- End Produk Nav --> 

    </ul>

</aside><!-- End Sidebar-->