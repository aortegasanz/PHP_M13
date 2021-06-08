<!-- HEADER DESKTOP-->
<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Busca per datas o reports ..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">1</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>Tens 2 missatges nous</p>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="{!! asset('theme/images/icon/avatar-06.jpg') !!}" alt="Michelle Moreno" />
                                    </div>
                                    <div class="content">
                                        <h6>Michelle Moreno</h6>
                                        <p>Ha enviat una foto</p>
                                        <span class="time">fa 3 minutos</span>
                                    </div>
                                </div>
                                <div class="mess__item">
                                    <div class="image img-cir img-40">
                                        <img src="{!! asset('theme/images/icon/avatar-03.jpg') !!}" alt="Diane Myers" />
                                    </div>
                                    <div class="content">
                                        <h6>Diane Myers</h6>
                                        <p>Ara estás conectat amb missatges</p>
                                        <span class="time">Ahir</span>
                                    </div>
                                </div>
                                <div class="mess__footer">
                                    <a href="#">Veure tots els missatges</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">1</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>Tens 3 emails nous</p>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{!! asset('theme/images/icon/avatar-06.jpg') !!}" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Encontre sobre nou dashboard...</p>
                                        <span>Cynthia Harvey, fa 3 minuts</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{!! asset('theme/images/icon/avatar-05.jpg') !!}" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Encontre sobre nou dashboard...</p>
                                        <span>Cynthia Harvey, Ahir</span>
                                    </div>
                                </div>
                                <div class="email__item">
                                    <div class="image img-cir img-40">
                                        <img src="{!! asset('theme/images/icon/avatar-04.jpg') !!}" alt="Cynthia Harvey" />
                                    </div>
                                    <div class="content">
                                        <p>Encontre sobre nou dashboard...</p>
                                        <span>Cynthia Harvey, 12 Abril de 2018</span>
                                    </div>
                                </div>
                                <div class="email__footer">
                                    <a href="#">Veure tots els emails</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity">3</span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Tens 3 Notificacions</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>Tens una notificació de email</p>
                                        <span class="date">12 Abril de 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>El teu compte ha sigut bloquejat</p>
                                        <span class="date">12 Abril de 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>Tens un nou fitxer</p>
                                        <span class="date">12 Abril de 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">Totes les notificacions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{!! asset('theme/images/icon/avatar-03.jpg') !!}" alt="{{ Auth::user()->name }}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">
                                    @php
                                        $roles = '';
                                        foreach (Auth::user()->getRoleNames() as $role) {
                                            if ($roles == '') {
                                                $roles = $role;
                                            } else {
                                                $roles .= ','.$role;
                                            }                                            
                                        }
                                    @endphp                                
                                    {{ Auth::user()->name }} ({{ $roles }})                                    
                                </a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{!! asset('theme/images/icon/avatar-03.jpg') !!}" alt="{{ Auth::user()->name }}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                        <br/>
                                        <span class="email"><stront>Roles:</strong> {{ $roles }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            <i class="zmdi zmdi-power"></i> Sortir
                                        </x-dropdown-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER DESKTOP-->