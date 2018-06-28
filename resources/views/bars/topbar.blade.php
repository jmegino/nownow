
<section id="container">
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="search-box">
            <input type="text">
            <span></span>

        </div>

        <!--logo start-->
        <a href="{{url('/home')}}" class="logo text-center"><b>Dashboard</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-header" href="#">
                        <i class="material-icons">notifications_none</i>
                        <span class="badge bg-theme">4</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-notifications notify-arrow-white"></div>
                    </ul>

                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-header" href="#">
                        <i class="material-icons">chat</i>
                        <span class="badge bg-theme">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">

                        <div class="notify-arrow notify-arrow-messages notify-arrow-white"></div>

                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-header" href="#">
                        <i class="material-icons">settings</i>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-settings notify-arrow-white"></div>
                        <li><a class="logout" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
    </header>
    <!--header end-->
</section>