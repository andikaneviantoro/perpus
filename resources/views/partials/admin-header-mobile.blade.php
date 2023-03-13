<header class="header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img src="{{asset('admin/images/puskom.png')}}" alt="CoolAdmin" />
                </a>

            </div>
        </div>
    </div>

</header>
<div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">

        <div class="account-wrap">
            <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="image">
                    <img src="{{asset('admin/images/icon/avatar-01.jpg')}}" alt="{{ Auth::user()->name }}" />
                </div>
                <div class="content">
                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="image">
                            <a href="#">
                                <img src="{{asset('admin/images/icon/avatar-01.jpg')}}" alt="{{ Auth::user()->name }}" />
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="name">
                                <a href="#">{{ Auth::user()->name }}</a>
                            </h5>
                            <span class="email">{{ Auth::user()->email }}</span>
                        </div>
                    </div>

                    <div class="account-dropdown__footer">
                        <a href="#">
                            <i class="zmdi zmdi-power"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
