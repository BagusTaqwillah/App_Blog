    <!-- Page Wrapper -->
    <style>
        .navbar-nav{
            background-color:#0d8a7a;
        }
        .img{
            width:50px;
        }
    </style>
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                <i class="fas fa-medal" style="color: #fbf309;"></i>
                </div>
                <div class="sidebar-brand-text ">Lumut <span>.</span></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
             <div class="profi text-center mt-2">
                <img class="img-profile rounded-circle"
                src="<?=base_url('vendor/bg/pelatih.png')?>" width="40%">
                    <p class="text-white"><?=$user['name']?></p>
             </div>
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('admin')?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master Data</h6>
                        <?php if ($user['role']=='pengguna') {?>
                            <a class="collapse-item" href="<?=base_url('adm_blog')?>">Crud Post</a>     
                            <?php }else{?>
                                <a class="collapse-item" href="<?=base_url('adm_blog')?>">Crud Post</a>     
                              <a class="collapse-item" href="<?=base_url('adm_user')?>">Crud User</a>
                        <?php }?>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->