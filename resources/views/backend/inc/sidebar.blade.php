
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="text-center">
                    <div class="image">
                        <a href="{{url('/admin')}}"><img src="{{asset('public/backend/assets/img-icon/n.jpg')}}" class="img-circle"></a>
                        <div class="dot"></div>
                        <div class="dropdown-admin">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Admin
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Admin</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('/admin')}}" class="nav-link active">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope-open"></i>
                                <i class=""></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/admin/categories/add')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Category</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/categories/manage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Category</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="{{url('/admin/products/sold')}}" class="nav-link">
                                <i class="nav-icon far fa-chart-bar"></i>
                                <p>
                                    All Files
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/admin/products/unsold')}}" class="nav-link">
                                <i class="nav-icon fas fa-hand-holding-usd"></i>
                                <p>
                                    Downloded File
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Repositories
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/admin/products/manage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Repositories</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/orders/request')}}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Download Request
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/orders/confirm')}}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Confirmed Download
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/admin/customerlist')}}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    All Post 
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    User
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{url('/admin/suppliers/add')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/suppliers/manage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage User</p>
                                    </a>
                                </li>
                               <!--  <li class="nav-item">
                                    <a href="{{url('/admin/suppliers/due')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Due User</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <!-- <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Purchase
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('/admin/purchase/add')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Purchase</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/purchase/manage')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Purchase</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/admin/purchase/due')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Due Purchase</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>