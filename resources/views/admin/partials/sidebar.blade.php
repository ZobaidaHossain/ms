<!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">

<div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

<nav id="sidebar">

    <ul class="flex-row text-center navbar-nav theme-brand">
        <li class="nav-item theme-logo">
            <a href="/">
                <img src="{{ asset('assets/img/msfoundation_logo.png') }}" class="navbar-logo" alt="logo">
            </a>
        </li>
        <li class="nav-item theme-text">
            <a href="/" class="nav-link"> Admin </a>
        </li>
    </ul>

    <ul class="list-unstyled menu-categories" id="accordionExample">

        <li class="menu active">
            <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>

        <li class="menu">
            <a href="#role" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span> Authentication Manage</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="role" data-parent="#accordionExample">
                <li>
                    <a href="{{ route('admin.role.create') }}"> Add Role</a>
                </li>
                <li>
                    <a href="{{ route('admin.role.index') }}"> Roles List </a>
                </li>
            </ul>
        </li>

        {{-- password --}}

        <li class="menu">
            <a href="#password" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span> Change Password</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="password" data-parent="#accordionExample">
                <li>
                    <a href="{{ route('password.change') }}">Change Password</a>
                </li>

            </ul>
        </li>


        {{--  --}}

        <li
            class="menu {{ request()->is('admin/slider*') || request()->is('admin/introduction*') || request()->is('admin/founder*') || request()->is('admin/bg-memory*') || request()->is('admin/heading*') || request()->is('admin/goal*') || request()->is('admin/team*') || request()->is('admin/social*') || request()->is('admin/service*') || request()->is('admin/gallery*') || request()->is('admin/video*') || request()->is('admin/executive*') || request()->is('admin/contract*') ? 'active' : '' }}">
            <a href="#menu-management" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 1 1 2-2h16a2 2 0 1 1 2 2v10a2 2 0 1 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>হোম পেজ মেনু</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>

            <ul class="collapse submenu list-unstyled" id="menu-management"
                data-parent="#menu-management">


                <li class="menu {{ request()->is('admin/slider*') ? 'active' : '' }} text-decoration-none">
                    <a href="#slider" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> নীড়পাতা</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="slider"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.slider.create') }}"> Slider Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.slider.index') }}"> Slider List </a>
                        </li>
                    </ul>
                </li>
                {{--  introduction --}}
                <li class="menu {{ request()->is('admin/introduction*') ? 'active' : '' }} text-decoration-none">
                    <a href="#introduction" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>ভূমিকা সমূহ </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="introduction"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.introduction.create') }}">Introduction Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.introduction.index') }}">Introduction List </a>
                        </li>
                    </ul>
                </li>

                {{-- founder  --}}
                <li class="menu {{ request()->is('admin/founder*') ? 'active' : '' }} text-decoration-none">
                    <a href="#founder" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> প্রতিষ্ঠাতা</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="founder"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.founder.create') }}"> Founder Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.founder.index') }}"> Founder List </a>
                        </li>
                    </ul>
                </li>

                {{-- bg memory introduction --}}
                <li class="menu {{ request()->is('admin/bg-memory*') ? 'active' : '' }} text-decoration-none">
                    <a href="#background" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> পটভূমি</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="background"
                        data-parent="#menu-management">

                        <li>
                            <a href="{{ route('admin.bg-memory.create') }}"> Background Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.bg-memory.index') }}"> Background List</a>
                        </li>
                    </ul>
                </li>

                <li
                    class="menu {{ request()->is('admin/heading*') || request()->is('admin/goal*') ? 'active' : '' }} text-decoration-none">
                    <a href="#goals" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1-2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>লক্ষ্য</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="goals"
                        data-parent="#menu-management">
                        <!-- Goals Heading Manage -->
                        <li>
                            <a href="#goalsHeadingManage" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                Goals Heading Manage
                            </a>
                            <ul class="collapse list-unstyled" id="goalsHeadingManage"
                                data-parent="#goals">
                                <li>
                                    <a href="{{ route('admin.heading.create') }}">Heading Add</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.heading.index') }}">Heading List</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Goals Manage -->
                        <li>
                            <a href="#goalsManage" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                Goals Manage
                            </a>
                            <ul class="collapse list-unstyled" id="goalsManage" data-parent="#goals">
                                <li>
                                    <a href="{{ route('admin.goal.create') }}">Goal Add</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.goal.index') }}">Goal List</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu {{ request()->is('admin/team*') ? 'active' : '' }} text-decoration-none">
                    <a href="#team" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> টিম ম্যানেজমেন্ট</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="team"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.team.create') }}"> Team Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.team.index') }}"> Team List </a>
                        </li>
                    </ul>
                </li>

                <li class="menu {{ request()->is('admin/service*') ? 'active' : '' }} text-decoration-none">
                    <a href="#service" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> সেবাসমূহ</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="service"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.service.create') }}"> Service Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.service.index') }}"> Service List </a>
                        </li>
                    </ul>
                </li>

                <li class="menu {{ request()->is('admin/social*') ? 'active' : '' }} text-decoration-none">
                    <a href="#social" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> ব্যবস্থাপনা</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="social"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.social.create') }}"> Social Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.social.index') }}"> Social List </a>
                        </li>
                    </ul>
                </li>

                {{-- gallery --}}
                <li class="menu {{ request()->is('admin/gallery*') ? 'active' : '' }} text-decoration-none">
                    <a href="#gallery" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> ফটোগ্যালারি</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="gallery"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.gallery.create') }}"> Gallery Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.gallery.index') }}"> Gallery List </a>
                        </li>
                    </ul>
                </li>

                {{-- video --}}
                <li class="menu {{ request()->is('admin/video*') ? 'active' : '' }} text-decoration-none">
                    <a href="#video" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span>
                                ভিডিও গ্যালারি
                            </span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="video"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.video.create') }}"> Video Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.video.index') }}"> Video List </a>
                        </li>
                    </ul>
                </li>
                {{-- executive --}}
                <li class="menu {{ request()->is('admin/executive*') ? 'active' : '' }} text-decoration-none">
                    <a href="#executive" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> নির্বাহী ব্যবস্থাপনা</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="executive"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.executive.create') }}"> Executive Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.executive.index') }}"> Executive List </a>
                        </li>
                    </ul>
                </li>

                {{-- contract --}}

                <li class="menu {{ request()->is('admin/contract*') ? 'active' : '' }} text-decoration-none">
                    <a href="#contract" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay">
                                <path
                                    d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
                            <span> যোগাযোগের তথ্য</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="contract"
                        data-parent="#menu-management">
                        <li>
                            <a href="{{ route('admin.contract.create') }}"> Contract Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.contract.index') }}"> Contract List </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>

        {{--  --}}
        <li
        class="menu {{ request()->is('admin/objective*') ? 'active' : '' }}">
        <a href="#relation" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                    <path
                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 1 1 2-2h16a2 2 0 1 1 2 2v10a2 2 0 1 1-2 2h-1">
                    </path>
                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                </svg>
                <span>আমাদের সম্পর্কে</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </a>

        <ul class="collapse submenu list-unstyled" id="relation"
            data-parent="#relation">
       {{--  Goals and Objectives --}}
       <li class="menu {{ request()->is('admin/objective*') ? 'active' : '' }}">
        <a href="#objective" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                    <path
                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                    </path>
                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                </svg>
                <span> লক্ষ্য ও উদ্দেশ্যাবলী</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled" id="objective" data-parent="#relation">
            <li>
                <a href="{{ route('admin.objective.create') }}"> Goals and Objectives Add</a>
            </li>
            <li>
                <a href="{{ route('admin.objective.index') }}"> Goals and Objectives List </a>
            </li>
        </ul>
    </li>
        </ul>
        </li>

{{--  --}}

        <li
        class="menu {{  request()->is('admin/organization*') || request()->is('admin/photo*') || request()->is('admin/zone*') || request()->is('admin/project*') || request()->is('admin/audience*') ? 'active' : '' }}">
        <a href="#management" data-toggle="collapse" aria-expanded="false"
            class="dropdown-toggle">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                    <path
                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 1 1 2-2h16a2 2 0 1 1 2 2v10a2 2 0 1 1-2 2h-1">
                    </path>
                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                </svg>
                <span>অঙ্গসংঠন ও প্রকল্প</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </a>

        <ul class="collapse submenu list-unstyled" id="management"
            data-parent="#management">

        {{-- organization --}}
        <li
            class="menu {{ request()->is('admin/organization*') || request()->is('admin/photo*') ? 'active' : '' }}">
            <a href="#organizations" data-toggle="collapse" aria-expanded="false"
                class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1-2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>অঙ্গসংঠনের কার্যক্রম</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="organizations"
                data-parent="#management">
                <!-- Goals Heading Manage -->
                <li>
                    <a href="#organization" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        Activity Manage
                    </a>
                    <ul class="collapse list-unstyled" id="organization" data-parent="#organizations">
                        <li>
                            <a href="{{ route('admin.organization.create') }}">Activity Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.organization.index') }}">Activity List</a>
                        </li>
                    </ul>
                </li>
                <!-- Goals Manage -->
                <li>
                    <a href="#photo" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        Activity Photo
                    </a>
                    <ul class="collapse list-unstyled" id="photo" data-parent="#organizations">
                        <li>
                            <a href="{{ route('admin.photo.create') }}">Photo Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.photo.index') }}">Photo List</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        {{-- project area --}}
        <li class="menu {{ request()->is('admin/zone*') ? 'active' : '' }}">
            <a href="#zone" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>প্রকল্প এলাকা</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="zone" data-parent="#management">
                <li>
                    <a href="{{ route('admin.zone.create') }}"> Zone Add</a>
                </li>
                <li>
                    <a href="{{ route('admin.zone.index') }}"> Zone List </a>
                </li>
            </ul>
        </li>

        {{-- project area --}}
        <li class="menu {{ request()->is('admin/project*') ? 'active' : '' }}">
            <a href="#project" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>বাস্তবায়িত ও সমাপ্ত প্রকল্প</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="project" data-parent="#management">
                <li>
                    <a href="{{ route('admin.project.create') }}"> Ongoing Project Add</a>
                </li>
                <li>
                    <a href="{{ route('admin.project.index') }}"> Ongoing Project List </a>
                </li>
            </ul>
        </li>


        {{--  audience --}}
        <li class="menu {{ request()->is('admin/audience*') ? 'active' : '' }}">
            <a href="#audience" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>লক্ষ্যভূক্ত জনগোষ্ঠী</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="audience" data-parent="#management">
                <li>
                    <a href="{{ route('admin.audience.create') }}">Target Population Add</a>
                </li>
                <li>
                    <a href="{{ route('admin.audience.index') }}">Target Population List </a>
                </li>
            </ul>
        </li>

        </ul>
        </li>

        {{--  Notice --}}
        <li class="menu {{ request()->is('admin/notice*') ? 'active' : '' }}">
            <a href="#notice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>নোটিশ</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="notice" data-parent="#accordionExample">
                <li>
                    <a href="{{ route('admin.notice.create') }}"> Notice Add</a>
                </li>
                <li>
                    <a href="{{ route('admin.notice.index') }}"> Notice List </a>
                </li>
            </ul>
        </li>
        {{-- support --}}
        <li
            class="menu {{ request()->is('admin/help*') || request()->is('admin/support*') ? 'active' : '' }}">
            <a href="#supports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1-2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>সাপোর্ট</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="supports" data-parent="#accordionExample">
                <!-- Goals Heading Manage -->
                <li>
                    <a href="#help" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        Help Desk Manage
                    </a>
                    <ul class="collapse list-unstyled" id="help" data-parent="#goals">
                        <li>
                            <a href="{{ route('admin.help.create') }}">Help Desk Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.help.index') }}">Help Desk List</a>
                        </li>
                    </ul>
                </li>
                <!-- Goals Manage -->
                <li>
                    <a href="#support" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        Support Description
                    </a>
                    <ul class="collapse list-unstyled" id="support" data-parent="#supports">
                        <li>
                            <a href="{{ route('admin.support.create') }}">Support Description Add</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.support.index') }}">Support Description List</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

           {{--  Donation --}}
           <li class="menu {{ request()->is('admin/donation*') ? 'active' : '' }}">
            <a href="#donation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>Donation</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="donation" data-parent="#accordionExample">
                <li>
                    <a href="{{ route('admin.donation.create') }}"> Donation Add</a>
                </li>
                <li>
                    <a href="{{ route('admin.donation.index') }}"> Donation List </a>
                </li>
            </ul>
        </li>

          {{--  Note --}}
           <li class="menu {{ request()->is('admin/note*') ? 'active' : '' }}">
            <a href="{{ route('admin.note.index') }}"  aria-expanded="false" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                        <path
                            d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                    <span>note List</span>
                </div>
                {{-- <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div> --}}
            </a>
            {{-- <ul class="collapse submenu list-unstyled" id="note" data-parent="#accordionExample">
                <li>
                    <a href="{{ route('admin.note.create') }}"> note Add</a>
                </li>
                <li>
                    <a href="{{ route('admin.note.index') }}"> note List </a>
                </li>
            </ul> --}}
        </li>


    </ul>
</nav>

</div>
<!--  END SIDEBAR  -->
