 <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="{{ route('homepage') }}" style="color: orange" class="nav-brand"><img width="50" height="50" src="{{ asset('assets_frontend/img/core-img/logo.png') }}" alt=""><i style="color: black"></i></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav" >
                                <ul>
                                    <li  class="active"><a style="color:orange !important" href="{{ route('homepage') }}">Home</a></li>
                                    <li ><a style="color:orange !important" href="{{ route('event_list') }}">Event</a></li>
                                    <li ><a style="color:orange !important" href="{{ route('news_list') }}">News</a></li>
                                    <li ><a style="color:orange !important" href="{{ route('index_shop') }}">Shop</a></li>
                                    <li ><a style="color:orange !important" href="{{ route('index_about') }}">About</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="#" method="post">
                                    <input type="search" name="top-search" id="topSearch" class="topSearch" style="color:black!important;background-color:transparent;" placeholder="Cari..">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <div class="classynav" style="padding: 10px">
                                <ul>
                                    <li>
                                        <a href="#" style="color: orange !important"><i class="fa fa-user fa-lg"></i></a>
                                        <ul class="dropdown">
                                        @if (Auth::user() == null)
                                            <li><a href="{{ route('index_login') }}">Login</a></li>
                                            <li><a href="{{ route('index_register') }}">Daftar</a></li>
                                        @else
                                            <li><a href="{{ route('home') }}">Dashboard</a></li>
                                            <li><a href="{{ route('user_profile',['id'=>Auth::user()->m_id]) }}">Profile</a></li>
                                            <li>
                                                <a  class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" ><i  class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('main_event_create') }}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Buat Event</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>