 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class="ri-home-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title">Management</li>
                
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-hotel-fill"></i>
                                    <span>Manage Suppliers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-delete-back-fill"></i>
                                    <span>Manage Units</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('unit.all') }}">All Unit</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-apps-2-fill"></i>
                                    <span>Manage Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('category.all') }}">All Category</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-reddit-fill"></i>
                                    <span>Manage Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('product.all') }}">All Product</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-oil-fill"></i>
                                    <span>Manage Purchase</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                                    <li><a href="{{ route('purchase.pending') }}">Approval Purchase</a></li>
                                    <li><a href="{{ route('daily.purchase.report') }}">Daily Purchase Report</a></li>

                                </ul>
                            </li>

                            

                            <li class="menu-title">Stock</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-gift-fill"></i>
                                    <span>Manage Stock</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('stock.report') }}">Stock Report</a></li>

                                </ul>
                            </li>

                            

                           

                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>