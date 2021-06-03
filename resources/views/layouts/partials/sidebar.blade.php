<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset('theme/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li @if($currentPage == 'clients') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('client.list') }}">
                        <i class="fas fa-tachometer-alt"></i>Clients</a>
                </li>
                <li @if($currentPage == 'bookings') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('booking.list') }}">
                        <i class="fas fa-tachometer-alt"></i>Reserves</a>
                </li>                
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->