<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')| G-tisel</title>

    @php
        \Debugbar::warning('Path :');
        \Debugbar::info(request()->path());
        \Debugbar::info(request()->url());
    @endphp
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="{{ asset('fontawesome/js/all.js') }}"></script>
    @if (!Request::is('admin*'))
        
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/style.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/stepper/bs-stepper.min.css') }}">  
        <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('plugins/owl-caroussel/owl.carousel.min.css')}}">  
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .btn-floating{
                position: absolute;
                bottom: 20px;
            
                border-radius: 25px;
                box-shadow: 3px 3px 11px 0px rgba(0,0,0,0.5);
                -webkit-box-shadow: 3px 3px 11px 0px rgba(0,0,0,0.5);
                -moz-box-shadow: 3px 3px 11px 0px rgba(0,0,0,0.5);
            }
            .btn-left{
                left: 20px;
            }
            .btn-right{
                right: 20px;
            }
        </style>
    @else
        <link href="{{asset('coreui/dist/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
        <link rel="canonical" href="https://coreui.io/docs/4.0/components/accordion/">
        <link href="{{asset('coreui/dist/css/examples.css')}}" rel="stylesheet">
        <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
         <style>
             .btn-primary {
                --cui-btn-bg: #3B91D1 !important;
                --cui-btn-border-color: #3B91D1 !important;
                --cui-btn-color: rgba(255, 255, 255, 0.87) !important;
                --cui-btn-hover-bg: #4AA0DF !important;
                --cui-btn-hover-border-color: #4AA0DF !important;
                --cui-btn-hover-color: rgba(255, 255, 255, 0.87) !important;
                --cui-btn-active-bg: #4AA0DF !important;
                --cui-btn-active-border-color: #4AA0DF !important;
                --cui-btn-active-color: rgba(255, 255, 255, 0.87) !important;
                --cui-btn-disabled-bg: #7bb6e2 !important;
                --cui-btn-disabled-border-color: #7bb6e2 !important;
                --cui-btn-disabled-color: rgba(255, 255, 255, 0.87) !important;
                --cui-btn-shadow: rgba(59, 145, 209, 0.5) !important;
            }
         </style>
    @endif
    
    @stack('stylesheets')
</head>
<body>
    @yield('body')
    {{-- <a href="" class="btn btn-primary btn-sm btn-floating btn-left"> {{__("demande")}}</a> --}}
    {{-- <a href="" class="btn btn-primary btn-sm btn-floating btn-right assensor p-3"> 
        <i class="fas fa-arrow-up"></i> 
    </a> --}}
   


    @if (!Request::is('admin*'))
        <script>
            var colors = {
                "danger-color": "#e74c3c",
                "success-color": "#81b53e",
                "warning-color": "#f0ad4e",
                "inverse-color": "#2c3e50",
                "info-color": "#2d7cb5",
                "default-color": "#6e7882",
                "default-light-color": "#cfd9db",
                "purple-color": "#9D8AC7",
                "mustard-color": "#d4d171",
                "lightred-color": "#e15258",
                "body-bg": "#f6f6f6"
            };
            var config = {
                theme: "html",
                skins: {
                    "default": {
                        "primary-color": "#42a5f5"
                    }
                }
            };
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.1/viewer.min.js" integrity="sha512-2e2mvwFe4ZwNBifdDlcPESjLL+Y96YVnCM+OlKOnpHgGSN7KYxIxWlZ3kX7vQ348Mm2Kz1qmajPP/gm1gmFErA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   
        <script src="{{ asset('plugins/stepper/bs-stepper.min.js') }}"></script>
        <script src="{{asset('plugins/magnific-popup/jquery.magnific-popup.js')}}"></script>
        <script src="{{asset('plugins/owl-caroussel/owl.carousel.min.js')}}"></script>
        
        <script>
            document.addEventListener("DOMContentLoaded", function(){
            // make it as accordion for smaller screens
            if (window.innerWidth > 992) {
        
                document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
        
                    everyitem.addEventListener('mouseover', function(e){
        
                        let el_link = this.querySelector('a[data-bs-toggle]');
        
                        if(el_link != null){
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                        }
        
                    });
                    everyitem.addEventListener('mouseleave', function(e){
                        let el_link = this.querySelector('a[data-bs-toggle]');
        
                        if(el_link != null){
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                        }
                    })
                });
        
            }
            // end if innerWidth
            }); 
    
            jQuery(document).ready(function() {
      
                var btn = $('.assensor');
    
               console.log($(window));
    
                $(window).scroll(function() {
                    if ($(window).scrollTop() > 900) {
                    btn.removeClass('d-none');
                    } else {
                    btn.addClass('d-none');
                    }
                });
    
                btn.on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({scrollTop:0}, '900');
                });
    
            });
        </script>
        <script>
            $(document).ready(function () {
            
                $('#myToast').toast('show');
                   
            })
        </script>
    @else
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <script src="{{asset('coreui/dist/js/coreui.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{asset('coreui/src/js/main.js')}}"></script>
    @endif

    

    @stack('javascripts')
</body>
</html>
