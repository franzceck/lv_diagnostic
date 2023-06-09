</style>
<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-primary elevation-4 sidebar-no-expand">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>user" style="background-color: #8080807d" class="brand-link text-sm">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image  elevation-3" style="opacity: .8;width: 2.5rem;height: 3rem;max-height: unset">
        <span class="brand-text font-weight-bolder"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home"  >
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p style="font-size: 20px; font-weight:600;">
                            Dashboard
                        </p>
                      </a>
                    </li> 
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>user/?page=appointments" class="nav-link nav-appointments">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p style="font-size: 20px; font-weight:600;">
                          List of Bookings
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>user/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p style="font-size: 20px;  font-weight:600;">
                          Settings
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>user/?page=user/FloorPlan" class="nav-link nav-user_FloorPlan">
                        <i class="nav-icon fas fa-users"></i>
                        <p style="font-size: 20px; font-weight:600;">
                          Floor Plan
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>user/?page=user/Support" class="nav-link nav-user_support">
                        <i class="nav-icon fas fa-users"></i>
                        <p style="font-size: 20px; font-weight:600;">
                          Support
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.replace(/\//g,'_');

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>
