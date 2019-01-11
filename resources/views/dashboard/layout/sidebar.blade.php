<div class="sidebar-panel">
    <ul id="slide-out" class="collapsible sidenav side-left side-nav sidenav-close">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/bg-user.jpg" alt="">
                </div>
                <img class="circle responsive-img" src="images/profile.png" alt=""><span class="white-text name">{{{ Auth::user()->name }}}
</span>
            </div>
        </li>
        <!--
        <li><a href="home-pages.html"><i class="fa fa-home"></i>Home</a>
        </li>
        <li><a href="element-list.html"><i class="fa fa-sliders"></i>Report</a>
        </li>
        <li><a href="pages-list.html"><i class="fa fa-clone"></i>Stok Barang</a>
        </li>
        <li><a href="shop-pages.html"><i class="fa fa-cart-plus"></i>Gudang</a>
        </li>
        <li><a href="apps.html"><i class="fa fa-mobile"></i>Jenis Gudang</a>
        </li>
        <li><a href="blog-pages.html"><i class="fa fa-rss"></i>Surat</a>
        </li>
        <li><a href="main-features.html"><i class="fa fa-support"></i>Permintaan</a>
        </li>
        <li><a href="main-features.html"><i class="fa fa-support"></i>Status Kirim</a>
        </li>
        -->
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>

<div class="sidebar-panel">
    <ul id="slide-out-right" class="collapsible sidenav switcher-right side-nav side-nav-switcher">
        <li>
            <ul class="tabs">
                <li class="tab col s6"><a class="waves-effect waves-light-grey active" href="#tabs1" onclick="setActiveStyleSheet('default'); return false;">Light</a>
                </li>
                <li class="tab col s6 mode-dark"><a class="waves-effect waves-light-grey" href="#tabs2" onclick="setActiveStyleSheet('material-style-dark-blue'); return false;">Dark</a>
                </li>
            </ul>
            <div id="tabs1">
                <div class="contents-tabs">
                    <div class="content-choose">
                        <h6>Material Design Color</h6>
                        <ul>
                            <li>
                                <a class="bg-material-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('default'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-red" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-green" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>iOS Color</h6>
                        <ul>
                            <li>
                                <a class="bg-ios-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-red" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-green" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>Flat Color</h6>
                        <ul>
                            <li>
                                <a class="bg-flat-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-red" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-green" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>Gradient Color</h6>
                        <ul>
                            <li>
                                <a class="bg-blue-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('blue-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-red-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('red-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-purple-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('purple-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-green-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('green-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-orange-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('orange-gradient'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>Multi Color</h6>
                        <ul>
                            <li>
                                <a class="bg-ios-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-red" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-green" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="tabs2">
                <div class="contents-tabs">
                    <div class="content-choose">
                        <h6>Material Design Color</h6>
                        <ul>
                            <li>
                                <a class="bg-material-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-dark-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-red" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-dark-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-dark-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-green" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-dark-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-material-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('material-style-dark-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>iOS Color</h6>
                        <ul>
                            <li>
                                <a class="bg-ios-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-dark-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-red" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-dark-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-dark-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-green" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-dark-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('ios-color-dark-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>Flat Color</h6>
                        <ul>
                            <li>
                                <a class="bg-flat-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-dark-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-red" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-dark-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-dark-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-green" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-dark-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-flat-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('flat-color-dark-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>Gradient Colors</h6>
                        <ul>
                            <li>
                                <a class="bg-blue-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('dark-blue-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-red-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('dark-red-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-purple-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('dark-purple-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-green-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('dark-green-gradient'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-orange-gradient" href="http://astylers.com/" onclick="setActiveStyleSheet('dark-orange-gradient'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="content-choose">
                        <h6>Multi Color</h6>
                        <ul>
                            <li>
                                <a class="bg-ios-blue" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-dark-blue'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-red" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-dark-red'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-purple" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-dark-purple'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-green" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-dark-green'); return false;"></a>
                            </li>
                            <li>
                                <a class="bg-ios-orange" href="http://astylers.com/" onclick="setActiveStyleSheet('multi-color-dark-orange'); return false;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
