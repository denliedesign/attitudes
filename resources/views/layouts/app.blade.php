<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-HM35Y8FR0N"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-HM35Y8FR0N');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta property="og:title" content="Dance Classes | Old Bethpage, NY">
        <meta property="og:description" content="More than just great dancing! At AIM, we offer one of the most complete dance instruction programs in New York and work with students of all ages and abilities.">
        <meta property="og:image" content="https://attitudesmotion.com/images/header-aim.jpg">
        <meta property="og:url" content="https://attitudesmotion.com">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="description" content="@yield('description', 'From your child’s first class to their graduation performance. AIM has a class for everyone!')">

        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1148423693172241');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1148423693172241&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->

        <title>@yield('title', 'Attitudes in Motion | Dance Old Bethpage, NY')</title>

        <!-- Fonts -->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&family=Nunito&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Staatliches&family=Syne&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Crimson+Text&family=Nunito&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        </style>

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

        <!-- Scripts -->
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollToPlugin.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="https://cdn.tiny.cloud/1/5kctqg5sa09fd8d1o32j7i9xpvwu1wzubt2thxu7k565blzw/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    </head>
    <body>

        @if(session()->has('message'))
            <div class="alert alert-success mb-0" role="alert">
                <strong>Success</strong> {{ session()->get('message') }}
            </div>
        @endif

        <div id="scroll-container">
            @include('_nav')
            @yield('content')
            @include('_footer')
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script>
            // tinymce.init({
            //     selector: 'textarea',
            //     plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            // });
            //
            tinymce.init({
                selector: '#content-textarea',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            });
            // tinymce.init({
            //     selector: '#bio-textarea',
            //     plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            //     menubar: 'file edit view insert format tools table help',
            //     toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            // });
        </script>


    </body>
</html>
