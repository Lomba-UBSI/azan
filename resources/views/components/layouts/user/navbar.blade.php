<!-- =========================
        Header
=========================== -->
<header class="header header-layout1">
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                            <li>
                                <i class="icon-mail"></i>
                                <a href="mailto:Solatec@7oroof.com">Email: admin@azan.com</a>
                            </li>
                            <li>
                                <i class="icon-clock"></i>
                                <a href="contact-us.html" id="jam-realtime"></a>
                            </li>
                            <script>
                                const currentTime = () => {
                                    const el = document.querySelector("#jam-realtime");

                                    let date = new Date();
                                    let hh = date.getHours();
                                    let mm = date.getMinutes();
                                    let ss = date.getSeconds();

                                    hh = hh < 10 ? `0${hh}` : hh;
                                    mm = mm < 10 ? `0${mm}` : mm;
                                    ss = ss < 10 ? `0${ss}` : ss;

                                    let time = `${hh}:${mm}:${ss}`;
                                    el.innerText = time;
                                };

                                currentTime();
                                setInterval(currentTime, 1000);
                            </script>
                        </ul><!-- /.contact__list -->
                        <div class="d-flex align-items-center">
                            <form class="header-topbar__search mr-20">
                                <input type="text" class="form-control" placeholder="Type Your Search Words...">
                                <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <x-application-logo />
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav">
                    @foreach ($menu as $m)
                        @if ($m->type == 'dropdown')
                            <x-nav-dropdown :menu="$m" />
                        @else
                            <x-nav-link :name="$m->name" :route="$m->route" />
                        @endif
                    @endforeach
                </ul><!-- /.navbar-nav -->
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li>
                    <a href="{{ route('auth.google-redirect') }}" class="btn btn__secondary">
                        <div style="width: 25px">
                            <svg class="fill-current mr-2" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                    fill="#4285f4" />
                                <path
                                    d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                    fill="#34a853" />
                                <path
                                    d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                    fill="#fbbc04" />
                                <path
                                    d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                    fill="#ea4335" />
                            </svg>
                        </div>
                        <span>Login Amil Zakat</span>
                    </a>
                </li>
            </ul><!-- /.navbar-actions -->
        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header><!-- /.Header -->
