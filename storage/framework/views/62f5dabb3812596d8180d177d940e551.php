<div class="ecaps-sidemenu-area">
    <!-- Desktop Logo -->
    <div class="ecaps-logo max-h-[90px]">
        <a href="<?php echo e(route('home')); ?>" target="_blank"><img class="desktop-logo w-10 h-7 bg-fixed"
                src="<?php echo e(asset('admin/img/core-img/logo.png')); ?>" alt="لوگوی دسک تاپ"> <img class="small-logo"
               >
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->

            
                
            
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="<?php echo e(Request::routeIs('admin.home') ? 'active' : ''); ?>"><a href="<?php echo e(route('admin.home')); ?>"><i class="zmdi zmdi-view-dashboard"></i><span>داشبورد</span></a></li>
                    
                    <li><a <?php echo e(Request::routeIs(['admin.logs']) ? "style=color:#54c6d0" : ''); ?>

                        href="<?php echo e(route('admin.logs')); ?>"><i class="zmdi zmdi-chart"></i><span>گزارشات سیستم</span></a></li>
                    <li class="treeview <?php echo e(Request::routeIs(['admin.settings.footer.label','admin.settings.footer.social','admin.settings.footer.logo']) ? 'active' : ''); ?>">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> <span>تنظیمات</span> <i class="fa fa-angle-left"></i></a>
                        <ul class="treeview-menu">
                            <!-- تنظیمات فوتر-برچسب ها-تنظیمات عمومی(لوگو و ...) -  -->
                            <li><a <?php echo e(Request::routeIs(['admin.settings.footer.label','admin.settings.footer.social','admin.settings.footer.logo']) ? "style=color:#54c6d0" : ''); ?> href="<?php echo e(route('admin.settings.footer.label')); ?>">تنظیمات فوتر</a></li>
                            <!-- استان و شهر و ... -  -->
                            <li><a href="#">تنظیمات فروشگاه</a></li>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH E:\Becafe\Becofe\resources\views/livewire/admin/layouts/sidebar.blade.php ENDPATH**/ ?>