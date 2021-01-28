<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-lightblue elevation-4">
    <a href="{{ url('/cards') }}" class="brand-link ">
        <img src="http://la2.icat.tw/vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE" class="brand-image img-circle elevation-3" style="opacity:.8">
        <span class="brand-text font-weight-light ">
                    <b>Flashcard</b>System
                </span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">
                <li  class="nav-item">
                    <a class="nav-link" href="http://la2.icat.tw/admin/pages">
                        <i class="far fa-fw fa-file "></i>
                        <p>Pages<span class="badge badge-info right">4</span></p>
                    </a>
                </li>

                <li  class="nav-header ">帳戶設定</li>
                <li  class="nav-item">
                    <a class="nav-link active" href="http://la2.icat.tw/admin/settings">
                        <i class="fas fa-fw fa-user "></i>
                        <p>Profile</p>
                    </a>
                </li>

                <li  class="nav-item">
                    <a class="nav-link" href="http://la2.icat.tw/admin/settings">
                        <i class="fas fa-fw fa-lock "></i>
                        <p>Change Password</p>
                    </a>
                </li>

                <li class="nav-header">多層次目次</li>
                <li  class="nav-item has-treeview ">
                    <a class="nav-link" href="" >
                        <i class="fas fa-fw fa-sitemap"></i> <!--fa-share-->
                        <p>選項一<i class="fas fa-angle-double-left right"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li  class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>Level 1</p>
                            </a>
                        </li>

                        <li  class="nav-item has-treeview ">
                            <a class="nav-link" href="" >
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1<i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li  class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li  class="nav-item has-treeview ">
                                    <a class="nav-link  " href="" >
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2<i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">
                                        <li  class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li  class="nav-item">
                                            <a class="nav-link" href="#">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>

                        <li  class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li  class="nav-header ">標籤</li>

                <li  class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="far fa-fw fa-circle text-red"></i>
                        <p>Important</p>
                    </a>
                </li>

                <li  class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="far fa-fw fa-circle text-yellow"></i>
                        <p>Warning</p>
                    </a>
                </li>

                <li  class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="far fa-fw fa-circle text-cyan"></i>
                        <p>Information</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

