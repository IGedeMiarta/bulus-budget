<div>
    <aside class="app-sidebar" id="sidebar">

        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="{{ url('index') }}" class="header-logo">
                <img src="{{ asset('jai.png') }}" alt="logo" class="main-logo desktop-logo " style="max-width: 80px;">
                <img src="{{ asset('jai.png') }}" alt="logo" class="main-logo toggle-logo" style="max-width: 50px;">
                <img src="{{ asset('jai.png') }}" alt="logo" class="main-logo desktop-dark"
                    style="max-width: 80px;">
                <img src="{{ asset('jai.png') }}" alt="logo" class="main-logo toggle-dark" style="max-width: 50px;">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar " id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg></div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->
                    <!-- Start::slide -->

                    @foreach ($content as $item)
                        <li class="slide">
                            <a href="{{ route($item->route) }}" class="side-menu__item">
                                <i class="{{ $item->icon }} side-menu__icon"></i>
                                <span class="side-menu__label">{{ $item->name }}</span>
                            </a>
                        </li>
                    @endforeach
                    <li class="slide__category"><span class="category-name">Feature</span></li>
                    <li class="slide  has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-file-text-line side-menu__icon"></i>
                            <span class="side-menu__label">Master Data</span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="{{ route('item') }}" class="side-menu__item">Master Item</a>
                            </li>
                            <li class="slide"><a href="{{ route('carline') }}" class="side-menu__item">Master
                                    Carline</a>
                            </li>
                            <li class="slide"><a href="{{ route('term') }}" class="side-menu__item">Master Term</a>
                            </li>
                            <li class="slide"><a href="{{ route('period') }}" class="side-menu__item">Master
                                    Period</a>
                            </li>
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Master User</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide  has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-inbox-line side-menu__icon"></i>
                            <span class="side-menu__label">Plans </span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Budget Plan</a>
                            </li>
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Profit
                                    Improvment</a>
                            </li>
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Additional
                                    Butget</a>
                            </li>
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Budget Plan
                                    Generation</a>
                            </li>
                        </ul>
                    </li>
                    <li class="slide  has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <i class="ri-stack-line side-menu__icon"></i>
                            <span class="side-menu__label">Actual Section </span>
                            <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            {{-- <li class="slide side-menu__label1"><a href="javascript:void(0)">Budget Realization</a></li> --}}
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Budget Realization
                                </a>
                            </li>
                            <li class="slide"><a href="javascript:void(0)" class="side-menu__item">Compare Plan vs ACT
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    {{-- <li class="slide">
                            <a href="{{ url('widgets') }}" class="side-menu__item">
                                <i class="ri-apps-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Widgets</span>
                            </a>
                        </li> --}}
                    <!-- End::slide -->

                    @if (env('APP_ENV') == 'local')
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-inbox-line side-menu__icon"></i>
                                <span class="side-menu__label">Components</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Components</a></li>
                                <li class="slide"><a href="{{ url('accordion') }}"
                                        class="side-menu__item">Accordion</a></li>
                                <li class="slide"><a href="{{ url('alerts') }}" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide"><a href="{{ url('avatars') }}"
                                        class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide"><a href="{{ url('badges') }}" class="side-menu__item">Badges</a>
                                </li>
                                <li class="slide"><a href="{{ url('blockquotes') }}"
                                        class="side-menu__item">Blockquotes</a></li>
                                <li class="slide"><a href="{{ url('buttons') }}"
                                        class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide"><a href="{{ url('cards') }}" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide"><a href="{{ url('collapse') }}"
                                        class="side-menu__item">Collapse</a>
                                </li>
                                <li class="slide"><a href="{{ url('list-group') }}" class="side-menu__item">List
                                        Group</a></li>
                                <li class="slide"><a href="{{ url('list-page') }}" class="side-menu__item">List</a>
                                </li>
                                <li class="slide"><a href="{{ url('indicators') }}"
                                        class="side-menu__item">Indicators</a></li>
                                <li class="slide"><a href="{{ url('progress') }}"
                                        class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide"><a href="{{ url('skeleton') }}"
                                        class="side-menu__item">Skeleton</a>
                                </li>
                                <li class="slide"><a href="{{ url('spinners') }}"
                                        class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide"><a href="{{ url('toast') }}" class="side-menu__item">Toast</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-cpu-line side-menu__icon"></i>
                                <span class="side-menu__label">Elements</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Elements</a></li>
                                <li class="slide"><a href="{{ url('navbar') }}" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide"><a href="{{ url('mega-menu') }}" class="side-menu__item">Mega
                                        Menu</a></li>
                                <li class="slide"><a href="{{ url('tabs') }}" class="side-menu__item">Nav
                                        &amp;
                                        Tabs</a></li>
                                <li class="slide"><a href="{{ url('scrollspy') }}"
                                        class="side-menu__item">Scrollspy</a></li>
                                <li class="slide"><a href="{{ url('breadcrumb') }}"
                                        class="side-menu__item">Breadcrumb</a></li>
                                <li class="slide"><a href="{{ url('pagination') }}"
                                        class="side-menu__item">Pagination</a></li>
                                <li class="slide"><a href="{{ url('grid') }}" class="side-menu__item">Grids</a>
                                </li>
                                <li class="slide"><a href="{{ url('columns') }}" class="side-menu__item">
                                        Columns</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-file-text-line side-menu__icon"></i>
                                <span class="side-menu__label">Forms</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Forms</a></li>
                                <li class="slide"><a href="{{ url('form-elements') }}" class="side-menu__item">Form
                                        Elements</a></li>
                                <li class="slide"><a href="{{ url('advanced-forms') }}"
                                        class="side-menu__item">Advanced Forms</a></li>
                                <li class="slide"><a href="{{ url('form-inputgroup') }}"
                                        class="side-menu__item">Form Input Group</a></li>
                                <li class="slide"><a href="{{ url('file-upload') }}" class="side-menu__item">File
                                        Uploads</a></li>
                                <li class="slide"><a href="{{ url('form-checkbox') }}" class="side-menu__item">Form
                                        Checkbox</a></li>
                                <li class="slide"><a href="{{ url('form-radio') }}" class="side-menu__item">Form
                                        Radio</a></li>
                                <li class="slide"><a href="{{ url('form-switch') }}" class="side-menu__item">Form
                                        Switch</a></li>
                                <li class="slide"><a href="{{ url('form-select') }}" class="side-menu__item">Form
                                        Select</a></li>
                                <li class="slide"><a href="{{ url('form-layouts') }}" class="side-menu__item">Form
                                        Layouts</a></li>
                                <li class="slide"><a href="{{ url('form-validations') }}"
                                        class="side-menu__item">Form Validations</a></li>
                                <li class="slide"><a href="{{ url('quil-editor') }}" class="side-menu__item">Form
                                        Editor</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-stack-line side-menu__icon"></i>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Advanced Ui</a>
                                </li>
                                <li class="slide"><a href="{{ url('rangeslider') }}"
                                        class="side-menu__item">Rangeslider</a></li>
                                <li class="slide"><a href="{{ url('calendar') }}"
                                        class="side-menu__item">Calendar</a></li>
                                <li class="slide"><a href="{{ url('carousel') }}"
                                        class="side-menu__item">Carousel</a></li>
                                <li class="slide"><a href="{{ url('gallery') }}"
                                        class="side-menu__item">Gallery</a></li>
                                <li class="slide"><a href="{{ url('sweetalert') }}"
                                        class="side-menu__item">Sweetalert</a></li>
                                <li class="slide"><a href="{{ url('ratings') }}" class="side-menu__item">Rating</a>
                                </li>
                                <li class="slide"><a href="{{ url('draggable') }}"
                                        class="side-menu__item">Draggable Cards</a></li>
                                <li class="slide"><a href="{{ url('notifications') }}"
                                        class="side-menu__item">Notifications</a></li>
                                <li class="slide"><a href="{{ url('treeview') }}"
                                        class="side-menu__item">Treeview</a></li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">File
                                        Manager<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('filemanager') }}"
                                                class="side-menu__item">File Manager</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('filemanager-list') }}"
                                                class="side-menu__item">File Manager
                                                List</a></li>
                                        <li class="slide"><a href="{{ url('file-details') }}"
                                                class="side-menu__item">File Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-file-list-3-line side-menu__icon"></i>
                                <span class="side-menu__label">Basic Ui</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Basic Ui</a></li>
                                <li class="slide"><a href="{{ url('dropdown') }}"
                                        class="side-menu__item">Dropdown</a></li>
                                <li class="slide"><a href="{{ url('modal') }}" class="side-menu__item">Modal</a>
                                </li>
                                <li class="slide"><a href="{{ url('offcanvas') }}"
                                        class="side-menu__item">Offcanvas</a></li>
                                <li class="slide"><a href="{{ url('tooltip-popovers') }}"
                                        class="side-menu__item">Tooltips &amp; Popovers</a></li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Tables<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('tables') }}"
                                                class="side-menu__item">Basic Tables</a></li>
                                        <li class="slide"><a href="{{ url('datatables') }}"
                                                class="side-menu__item">Data Tables</a></li>
                                        <li class="slide"><a href="{{ url('edittable') }}"
                                                class="side-menu__item">Edit Tables</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->


                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Levels</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-node-tree side-menu__icon"></i>
                                <span class="side-menu__label">NestedMenu</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Nested Menu</a>
                                </li>
                                <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Nested-2<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="javascript:void(0);"
                                                class="side-menu__item">Nested-2-1</a>
                                        </li>
                                        <li class="slide has-sub"><a href="javascript:void(0);"
                                                class="side-menu__item">Nested-2-2<i
                                                    class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide"><a href="javascript:void(0);"
                                                        class="side-menu__item">Nested-2-2-1</a></li>
                                                <li class="slide"><a href="javascript:void(0);"
                                                        class="side-menu__item">Nested-2-2-2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Maps &amp; charts</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-map-pin-user-line side-menu__icon"></i>
                                <span class="side-menu__label">Maps</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Maps</a></li>
                                <li class="slide"><a href="{{ url('google-maps') }}" class="side-menu__item">Google
                                        Maps</a></li>
                                <li class="slide"><a href="{{ url('leaflet-maps') }}"
                                        class="side-menu__item">Leaflet Maps</a></li>
                                <li class="slide"><a href="{{ url('vector-maps') }}" class="side-menu__item">Vector
                                        Maps</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-pie-chart-2-line side-menu__icon"></i>
                                <span class="side-menu__label">Charts</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Charts</a></li>
                                <li class="slide"><a href="{{ url('apex-charts') }}" class="side-menu__item">Apex
                                        Charts</a></li>
                                <li class="slide"><a href="{{ url('chartjs') }}" class="side-menu__item">Chart
                                        JS</a></li>
                                <li class="slide"><a href="{{ url('echartjs') }}" class="side-menu__item">Echart
                                        Js</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->


                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Pages</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-book-open-line side-menu__icon"></i>
                                <span class="side-menu__label">Pages</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Pages</a></li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Profile<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('profile') }}"
                                                class="side-menu__item">Home</a></li>
                                        <li class="slide"><a href="{{ url('profile-settings') }}"
                                                class="side-menu__item">Profile
                                                Settings</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Invoice<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('invoice-list') }}"
                                                class="side-menu__item">Invoice List</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('invoice') }}"
                                                class="side-menu__item">Invoice Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Blog<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('blog') }}"
                                                class="side-menu__item">Blog</a></li>
                                        <li class="slide"><a href="{{ url('blog-details') }}"
                                                class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('blog-edit') }}"
                                                class="side-menu__item">Edit Blog</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Mail<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('mail-inbox') }}"
                                                class="side-menu__item">Mail Inbox</a></li>
                                        <li class="slide"><a href="{{ url('chat') }}"
                                                class="side-menu__item">Chat</a></li>
                                        <li class="slide"><a href="{{ url('mail-settings') }}"
                                                class="side-menu__item">Mail Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Ecommerce<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('products') }}"
                                                class="side-menu__item">Products</a></li>
                                        <li class="slide"><a href="{{ url('product-list') }}"
                                                class="side-menu__item">Product List</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('add-product') }}"
                                                class="side-menu__item">Add Product</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('edit-product') }}"
                                                class="side-menu__item">Edit Product</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('products-details') }}"
                                                class="side-menu__item">Products Details</a></li>
                                        <li class="slide"><a href="{{ url('cart') }}"
                                                class="side-menu__item">Cart</a></li>
                                        <li class="slide"><a href="{{ url('checkout') }}"
                                                class="side-menu__item">Checkout</a></li>
                                        <li class="slide"><a href="{{ url('orders') }}"
                                                class="side-menu__item">Orders</a></li>
                                        <li class="slide"><a href="{{ url('order-details') }}"
                                                class="side-menu__item">Order Details</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('wishlist') }}"
                                                class="side-menu__item">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="slide"><a href="{{ url('about') }}" class="side-menu__item">About
                                        Us</a></li>
                                <li class="slide"><a href="{{ url('contacts') }}"
                                        class="side-menu__item">Contacts</a></li>
                                <li class="slide"><a href="{{ url('pricing') }}" class="side-menu__item">Pricing
                                        Tables</a></li>
                                <li class="slide"><a href="{{ url('timeline') }}"
                                        class="side-menu__item">Timeline</a></li>
                                <li class="slide"><a href="{{ url('teams') }}" class="side-menu__item">Team</a>
                                </li>
                                <li class="slide"><a href="{{ url('landing') }}"
                                        class="side-menu__item">Landing</a></li>
                                <li class="slide"><a href="{{ url('todo') }}" class="side-menu__item">Todo
                                        List</a></li>
                                <li class="slide"><a href="{{ url('tasks') }}" class="side-menu__item">Tasks</a>
                                </li>
                                <li class="slide"><a href="{{ url('reviews') }}"
                                        class="side-menu__item">Reviews</a></li>
                                <li class="slide"><a href="{{ url('faqs') }}" class="side-menu__item">Faq's</a>
                                </li>
                                <li class="slide"><a href="{{ url('contactus') }}" class="side-menu__item">Contact
                                        Us</a></li>
                                <li class="slide"><a href="{{ url('terms') }}" class="side-menu__item">Terms
                                        &amp; Conditions</a></li>
                                <li class="slide"><a href="{{ url('empty-page') }}" class="side-menu__item">Empty
                                        Page</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-camera-lens-line side-menu__icon"></i>
                                <span class="side-menu__label">Icons</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Icons</a></li>
                                <li class="slide"><a href="{{ url('tabler-icons') }}"
                                        class="side-menu__item">Tabler Icons</a></li>
                                <li class="slide"><a href="{{ url('remix-icons') }}" class="side-menu__item">Remix
                                        Icons</a></li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="ri-error-warning-line side-menu__icon"></i>
                                <span class="side-menu__label">Authentication</span>
                                <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1"><a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Sign-In<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('signin') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('signin-cover') }}"
                                                class="side-menu__item">Cover-1</a></li>
                                        <li class="slide"><a href="{{ url('signin-cover2') }}"
                                                class="side-menu__item">Cover-2</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Sign-Up<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('signup') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('signup-cover') }}"
                                                class="side-menu__item">Cover-1</a></li>
                                        <li class="slide"><a href="{{ url('signup-cover2') }}"
                                                class="side-menu__item">Cover-2</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Create
                                        Password<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('createpassword') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('createpassword-cover') }}"
                                                class="side-menu__item">Cover-1</a></li>
                                        <li class="slide"><a href="{{ url('createpassword-cover2') }}"
                                                class="side-menu__item">Cover-2</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Forgot
                                        Password<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('forgot') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('forgot-cover') }}"
                                                class="side-menu__item">Cover-1</a></li>
                                        <li class="slide"><a href="{{ url('forgot-cover2') }}"
                                                class="side-menu__item">Cover-2</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Reset
                                        Password<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('reset') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('reset-cover') }}"
                                                class="side-menu__item">Cover-1</a></li>
                                        <li class="slide"><a href="{{ url('reset-cover2') }}"
                                                class="side-menu__item">Cover-2</a></li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Lockscreen<i
                                            class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('lockscreen') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('lockscreen-cover') }}"
                                                class="side-menu__item">Cover-1</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('lockscreen-cover2') }}"
                                                class="side-menu__item">Cover-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub"><a href="javascript:void(0);"
                                        class="side-menu__item">Two-Step
                                        Verification<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('verification') }}"
                                                class="side-menu__item">Basic</a></li>
                                        <li class="slide"><a href="{{ url('verification-cover') }}"
                                                class="side-menu__item">Cover-1</a>
                                        </li>
                                        <li class="slide"><a href="{{ url('verification-cover2') }}"
                                                class="side-menu__item">Cover-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide"><a href="{{ url('maintenance') }}" class="side-menu__item">Under
                                        Maintenance</a></li>
                                <li class="slide"><a href="{{ url('construction') }}"
                                        class="side-menu__item">Under Construction</a>
                                </li>
                                <li class="slide"><a href="{{ url('comingsoon') }}" class="side-menu__item">Coming
                                        Soon</a></li>
                                <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Error
                                        Pages<i class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide"><a href="{{ url('error404') }}"
                                                class="side-menu__item">404Error</a></li>
                                        <li class="slide"><a href="{{ url('error500') }}"
                                                class="side-menu__item">500Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->
                    @endif
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>

</div>
