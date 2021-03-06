


<section>


    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="align-center">
            <div class="image">
                <img src="{{asset('img/ui-sam.png')}}" alt="logo" />
            </div>

        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">

                <li>
                    <a href="{{url('dashboard')}}" onclick="" class="item-nav">
                        <i class="material-icons">multiline_chart</i>
                        <span>User registration approval</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('membersearch')}}" onclick="" class="item-nav">
                        <i class="material-icons">person</i>
                        <span>Member Search</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('transmissionhist')}}" onclick="" class="item-nav">
                        <i class="material-icons">history</i>
                        <span>Transmission History</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="pages/examples/sign-in.html">Sign In</a>
                        </li>
                        <li>
                            <a href="pages/examples/sign-up.html">Sign Up</a>
                        </li>
                        <li>
                            <a href="pages/examples/forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                            <a href="pages/examples/blank.html">Blank Page</a>
                        </li>
                        <li>
                            <a href="pages/examples/404.html">404 - Not Found</a>
                        </li>
                        <li>
                            <a href="pages/examples/500.html">500 - Server Error</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 <a href="javascript:void(0);">nownow</a>
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>



    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    {{--<aside id="rightsidebar" class="right-sidebar">--}}
        {{--<ul class="nav nav-tabs tab-nav-right" role="tablist">--}}
            {{--<li role="presentation" class="active"><a href="#skins" data-toggle="tab"></a></li>--}}
            {{--<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>--}}
        {{--</ul>--}}
        {{--<div class="tab-content">--}}
            {{--<div role="tabpanel" class="tab-pane fade in active in active" id="skins">--}}
                {{--<ul class="demo-choose-skin">--}}
                    {{--<li data-theme="red" class="active">--}}
                        {{--<div class="red"></div>--}}
                        {{--<span>Red</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="pink">--}}
                        {{--<div class="pink"></div>--}}
                        {{--<span>Pink</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="purple">--}}
                        {{--<div class="purple"></div>--}}
                        {{--<span>Purple</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="deep-purple">--}}
                        {{--<div class="deep-purple"></div>--}}
                        {{--<span>Deep Purple</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="indigo">--}}
                        {{--<div class="indigo"></div>--}}
                        {{--<span>Indigo</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="blue">--}}
                        {{--<div class="blue"></div>--}}
                        {{--<span>Blue</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="light-blue">--}}
                        {{--<div class="light-blue"></div>--}}
                        {{--<span>Light Blue</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="cyan">--}}
                        {{--<div class="cyan"></div>--}}
                        {{--<span>Cyan</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="teal">--}}
                        {{--<div class="teal"></div>--}}
                        {{--<span>Teal</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="green">--}}
                        {{--<div class="green"></div>--}}
                        {{--<span>Green</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="light-green">--}}
                        {{--<div class="light-green"></div>--}}
                        {{--<span>Light Green</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="lime">--}}
                        {{--<div class="lime"></div>--}}
                        {{--<span>Lime</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="yellow">--}}
                        {{--<div class="yellow"></div>--}}
                        {{--<span>Yellow</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="amber">--}}
                        {{--<div class="amber"></div>--}}
                        {{--<span>Amber</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="orange">--}}
                        {{--<div class="orange"></div>--}}
                        {{--<span>Orange</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="deep-orange">--}}
                        {{--<div class="deep-orange"></div>--}}
                        {{--<span>Deep Orange</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="brown">--}}
                        {{--<div class="brown"></div>--}}
                        {{--<span>Brown</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="grey">--}}
                        {{--<div class="grey"></div>--}}
                        {{--<span>Grey</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="blue-grey">--}}
                        {{--<div class="blue-grey"></div>--}}
                        {{--<span>Blue Grey</span>--}}
                    {{--</li>--}}
                    {{--<li data-theme="black">--}}
                        {{--<div class="black"></div>--}}
                        {{--<span>Black</span>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div role="tabpanel" class="tab-pane fade" id="settings">--}}
                {{--<div class="demo-settings">--}}
                    {{--<p>GENERAL SETTINGS</p>--}}
                    {{--<ul class="setting-list">--}}
                        {{--<li>--}}
                            {{--<span>Report Panel Usage</span>--}}
                            {{--<div class="switch">--}}
                                {{--<label><input type="checkbox" checked><span class="lever"></span></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<span>Email Redirect</span>--}}
                            {{--<div class="switch">--}}
                                {{--<label><input type="checkbox"><span class="lever"></span></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<p>SYSTEM SETTINGS</p>--}}
                    {{--<ul class="setting-list">--}}
                        {{--<li>--}}
                            {{--<span>Notifications</span>--}}
                            {{--<div class="switch">--}}
                                {{--<label><input type="checkbox" checked><span class="lever"></span></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<span>Auto Updates</span>--}}
                            {{--<div class="switch">--}}
                                {{--<label><input type="checkbox" checked><span class="lever"></span></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<p>ACCOUNT SETTINGS</p>--}}
                    {{--<ul class="setting-list">--}}
                        {{--<li>--}}
                            {{--<span>Offline</span>--}}
                            {{--<div class="switch">--}}
                                {{--<label><input type="checkbox"><span class="lever"></span></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<span>Location Permission</span>--}}
                            {{--<div class="switch">--}}
                                {{--<label><input type="checkbox" checked><span class="lever"></span></label>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</aside>--}}
    <!-- #END# Right Sidebar -->



</section>






