<div class="pb-5 font-syne" id="footer">
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
                    <a href="https://instagram.com/attitudesinmotiondancestudio" target="_blank" class="text-decoration-none text-dark">
                        <div style="max-width:216px;" class="row rounded shadow py-2 border border-dark">
                            <div class="col-4">
                                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100%;">
                                    <div class="instagram-button px-1 py-1 pb-0 mb-0 rounded">
                                        <ion-icon name="logo-instagram" class="text-center text-white" style="font-size: 1.85em;"></ion-icon>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="d-flex align-items-center">
                                    <p class="text-center py-0 my-0">
                                        Follow us on
                                        <br>
                                        <span class="insta-font" style="font-size: 1.25em;">Instagram</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="https://facebook.com/pages/Attitudes-in-Motion/142905822391437" target="_blank" class="text-decoration-none text-dark">
                        <div style="max-width:216px;" class="row my-3 rounded shadow py-2 border border-dark">
                            <div class="col-4">
                                <div class="d-flex align-items-center justify-content-center" style="height: 100%; width: 100%;">
                                    <div class="facebook-button px-1 py-1 pb-0 mb-0 rounded">
                                        <ion-icon name="logo-facebook" class="text-center text-white" style="font-size: 1.85em;"></ion-icon>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="d-flex align-items-center">
                                    <p class="text-center py-0 my-0">
                                        Find us on
                                        <br>
                                        <span class="fb-font" style="font-size: 1.25em;">facebook</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
{{--                    <div class="d-flex d-inline">--}}
{{--                        <div class="d-inline">--}}
{{--                            <a class="nav-link text-white p-0" href="https://www.facebook.com/mistysdance/" target="_blank">--}}
{{--                                <ion-icon name="logo-facebook"></ion-icon>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="d-inline">--}}
{{--                            <a class="nav-link text-white p-0 mx-3" href="https://www.instagram.com/mistysdance/" target="_blank">--}}
{{--                                <ion-icon name="logo-instagram"></ion-icon>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="col-sm-6 mt-3">
                    <p class="lead">MORE LINKS</p>
                    <div class="row">
                        <div class="col-sm">
                            <ul class="list-group" id="footer-list">
                                @guest
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none text-dark" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                    </li>
                                @else
                                    <li class="list-group-item px-0 border-0 dropdown">
                                        <a class="text-decoration-none text-dark" href="{{ route('logout') }}"
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
                                    <a class="text-decoration-none text-dark" href="https://app.jackrabbitclass.com/regv2.asp?id=509319" target="_blank">Register</a>
                                </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none text-dark" href="/policies">Policies</a>
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
<div id="bottom" class="text-muted text-center py-3 font-syne">
    © 2023 Attitudes in Motion
    <br>
    <a class="text-decoration-none text-muted mx-2" href="/dance-bethpage"><small>Dance Bethpage</small></a>
    <a class="text-decoration-none text-muted mx-2" href="/dance-plainview"><small>Dance Plainview</small></a>
    <a class="text-decoration-none text-muted mx-2" href="/dance-dix-hills"><small>Dance Dix Hills</small></a>
    <a class="text-decoration-none text-muted mx-2" href="/dance-syosset"><small>Dance Syosset</small></a>
    <a class="text-decoration-none text-muted mx-2" href="/dance-farmingdale"><small>Dance Farmingdale</small></a>
    <a class="text-decoration-none text-muted mx-2" href="https://denliedesign.com/" target="_blank"><small>Dance Website Design by Denlie Design</small></a>
</div>
<div class="d-block d-md-none" style="padding-bottom: 70px;"></div>
