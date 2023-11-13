<div class="bg-dark text-white pb-5 font-syne" id="footer">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group" id="footer-list">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="navigate"></ion-icon>
                            756 Old Bethpage Road, Old Bethpage, NY 11804
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            516-756-5144
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            info@attitudesmotion.com
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-white p-0" href="https://www.facebook.com/mistysdance/" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-white p-0 mx-3" href="https://www.instagram.com/mistysdance/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3">
                    <p class="lead">MORE LINKS</p>
                    <div class="row">
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                                @guest
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                    </li>
                                @else
                                    <li class="list-group-item px-0 border-0 dropdown">
                                        <a class="text-decoration-none txt-blue" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                                <li class="list-group-item px-0 border-0">
                                    <a class="text-decoration-none" href="https://app.jackrabbitclass.com/regv2.asp?id=509319" target="_blank">Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                            </ul>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bottom" class="bg-dark text-white-50 text-center py-3 font-syne">
    © 2023 Attitudes in Motion
    <br>
    <a class="text-decoration-none text-white-50" href="https://denliedesign.com/" target="_blank"><small>Dance Website Design by Denlie Design</small></a>
</div>
