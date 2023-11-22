<div id="top" class="py-2 font-syne d-flex justify-content-center top-bar">
    <ul class="nav">
        <li class="nav-item mx-4" style="font-size: 1.33em;">
            <a href="https://instagram.com/attitudesinmotiondancestudio" target="_blank">
                <ion-icon name="logo-instagram" class="instagram-button text-white p-1 rounded"></ion-icon>
            </a>
        </li>
        <li class="nav-item mx-4" style="font-size: 1.33em;">
            <a href="https://facebook.com/pages/Attitudes-in-Motion/142905822391437" target="_blank">
                <ion-icon name="logo-facebook" class="facebook-button text-white p-1 rounded"></ion-icon>
            </a>
        </li>
        <li class="nav-item mx-4">
            <ion-icon style="font-size: 1.33em;" name="navigate"></ion-icon>
            756 Old Bethpage Road, Old Bethpage, NY 11804
        </li>
        <li class="nav-item mx-4">
            <ion-icon style="font-size: 1.33em;" name="call"></ion-icon>
            516-756-5144
        </li>
        <li class="nav-item mx-4">
            <ion-icon style="font-size: 1.33em;" name="mail"></ion-icon>
            info@attitudesmotion.com
        </li>
        <li class="nav-item mx-4">
            <a href="https://app.jackrabbitclass.com/jr3.0/ParentPortal/Login?orgID=509319" target="_blank" class="text-muted text-decoration-none">Parent Login</a>
        </li>
    </ul>
{{--    <ul style="list-style-type: none;">--}}

{{--    </ul>--}}
</div>

<div class="d-block d-lg-none stix-mobile" style="position: fixed; width: 100%; z-index: 5;">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item" style="border: none !important;">
            <h2 class="accordion-header d-flex justify-content-between" id="headingOne">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <ion-icon name="menu-outline" style="font-size: 1.5em; border: 1px solid lightgray; color: #7F7F7F;" class="m-3 px-2 rounded"></ion-icon>
                </button>
                <div class="d-flex align-items-center">
                    <a class="navbar-brand d-lg-none" href="/"><img src="/images/logo-aim.png" alt="" style="max-width: 133px;"></a>
                </div>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="navbar-nav">
                        @include('_nav-items')
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="height: 92.29px;"></div>

<div class="d-none d-lg-block">
    <nav class="navbar navbar-expand-lg bg-white font-syne fixed-top stix" style="top: 48px; height: 95px;">
        <div class="container-fluid">
{{--            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <a class="navbar-brand d-lg-none" href="/"><img src="/images/logo-aim.png" alt="" style="max-width: 133px;"></a>--}}
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="d-none d-lg-block nav-item">
                        <a class="nav-link" href="/">
                            <img src="/images/logo-aim.png" alt="" style="max-width: 133px;">
                        </a>
                    </li>
                    @include('_nav-items')
                </ul>
            </div>
        </div>
    </nav>
</div>
