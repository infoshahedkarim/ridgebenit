<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img loading="lazy" src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img loading="lazy" src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                <img loading="lazy" src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
            </span>
            <span class="logo-sm">
                <img loading="lazy" src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Service</li>

                <li>
                    
                    <ul class="sub-menu" aria-expanded="false">


                        <li>
                            <a href="{{route('back.services')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Add Service</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('back.show')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Service List</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('back.fcreate')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Add Feature</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('back.fshow')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Feature List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('back.ecreate')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Add Expertise</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('back.eshow')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Expertise List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('back.screate')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Add Solution</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('back.sshow')}}">
                                <i class="bx bx-file-find icon nav-icon"></i>
                                <span class="menu-item" data-key="t-filemanager">Solution List</span>
                            </a>
                        </li>


                    </ul>
                </li>





                <li>
                    <a href="{{route('back.products')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('back.pshow')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Products List</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('add.blog')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Add Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('show.blog')}}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-filemanager">Blogs List</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->