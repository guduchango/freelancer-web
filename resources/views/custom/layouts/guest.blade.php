<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{gasset('/css/custom_v2.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" sizes="192x192" href="{{gasset('/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{gasset('/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{gasset('/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{gasset('/images/favicon/favicon-16x16.png')}}">
    <meta property="og:type" content="website"/>
    @yield('header_meta')
    <title>@yield('title', 'Edgardo Ponce - About Me')</title>

</head>

<body>
<div class="layout">
    <div class="layout-wrapper">
        <div id="overlay" class="overlay"></div>
        <div id="popup" class="popup">
            <h3>{{__('Language')}}</h3>
            <div class="popup-links">
                <a title="change language english" href="{{url('/language/en')}}">EN</a>
                <a title="change language spanish" href="{{url('/language/es')}}">ES</a>
                <a title="change language portuguese" href="{{url('/language/pt')}}">PT</a>
{{--                <a href="{{url('/language/de')}}">DE</a>
                <a href="{{url('/language/fr')}}">FR</a>--}}
            </div>

            {{--<button id="closePopup">Close</button>--}}
        </div>
        <header class="header">
            <nav>
                <div class="nav-box" title="home" id="boxMob-about_me">
                    <a id="mobileHomeIcon-btn" href="{{langUrl('about_me')}}">
                        <i class="icon-home" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="clients" id="boxMob-clients">
                    <a id="projectsHomeIcon-btn" href="{{langUrl('clients')}}">
                        <i class="icon-rocket" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="experience" id="boxMob-experience">
                    <a id="experienceHomeIcon-btn" href="{{langUrl('experience')}}">
                        <i class="icon-file-text" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="challenges" id="boxMob-projects">
                    <a id="projectsHomeIcon-btn" href="{{langUrl('projects')}}">
                        <i class="icon-fire" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="education" id="boxMob-education">
                    <a id="educationHomeIcon-btn" href="{{langUrl('education')}}">
                        <i class="icon-shield" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-lang" title="lenguage" >
                    <a  id="openPopup" href="#">
                        <span>{{strtoupper($language)}}</span>
                    </a>
                </div>

            </nav>
        </header>
        <main>
            <div class="main-wrapper">
                <a href="/" aria-current="page">
                    <img src="{{gasset('/images/chango.jpeg')}}" width="256" height="256"
                         alt="Foto edgardo ponce" property="og:image">
                </a>
                <h2>Edgardo Ponce</h2>
                <h3>Full Stack Developer</h3>
                <div class="mainWrapper-socialIcons" aria-labelledby="social networks">
                    <a target="_blank"
                       href="https://www.linkedin.com/in/edgardo-dami%C3%A1n-ponce-p%C3%A1ez-b9069470/">
                        <i class="icon-linkedin" aria-hidden="true"></i>
                    </a>
                    <a target="_blank" href="https://github.com/guduchango">
                        <i class="icon-github" aria-hidden="true"></i>
                    </a>
                    <a target="_blank" href="https://twitter.com/edgardo__ponce">
                        <i class="icon-twitter" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="mainWrapper-personalInfo" aria-labelledby="personal info">
                    <div class="mainWrapperPersonalInfo-item">
                        <div class="mainWrapperPersonalInfoItem-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="mainWrapperPersonalInfoItem-text">
                            <p>{{__('Phone')}}</p>
                            <p>+54 9 260 484-5139</p>
                        </div>
                    </div>
                    <div class="mainWrapperPersonalInfo-item">
                        <div class="mainWrapperPersonalInfoItem-icon">
                            <i class="icon-location"></i>
                        </div>
                        <div class="mainWrapperPersonalInfoItem-text">
                            <p>{{__('Location')}}</p>
                            <p>San Rafael, Mendoza, Argentina</p>
                        </div>
                    </div>
                    <div class="mainWrapperPersonalInfo-item">
                        <div class="mainWrapperPersonalInfoItem-icon">
                            <i class="icon-mail"></i>
                        </div>
                        <div class="mainWrapperPersonalInfoItem-text">
                            <p>{{__('Email')}}</p>
                            <p>hello@edgardoponce.com </p>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <div class="menu">
            <div class="menu-wrapper">
                <div class="menuWrapper-box" id="boxDesk-about_me">
                    <a id="btn-about-me" href="{{langUrl('about_me')}}">
                        <i class="icon-home"></i>
                        {{__('Home')}}
                    </a>
                </div>
                <div class="menuWrapper-box" id="boxDesk-clients">
                    <a id="btn-education" href="{{langUrl('clients')}}">
                        <i class="icon-rocket"></i>
                        {{__('Clients')}}
                    </a>
                </div>
                <div class="menuWrapper-box" id="boxDesk-experience">
                    <a id="btn-experience" href="{{langUrl('experience')}}">
                        <i class="icon-file-text"></i>
                        {{__('Experience')}}
                    </a>
                </div>
                <div class="menuWrapper-box" id="boxDesk-projects">
                    <a id="btn-projects" href="{{langUrl('projects')}}">
                        <i class="icon-fire"></i>
                        {{__('Challenges')}}
                    </a>
                </div>
                <div class="menuWrapper-box" id="boxDesk-education">
                    <a id="btn-education" href="{{langUrl('education')}}">
                        <i class="icon-shield"></i>
                        {{__('Education')}}
                    </a>
                </div>
                <div class="menuWrapper-lang">
                    <a id="openPopupDesktop" href="#">
                        {{strtoupper($language)}}
                    </a>
                </div>
            </div>
        </div>
        @yield('content')

    </div>
    <footer>
        <p>© {{date('Y')}} Edgardo Ponce. {{__('All rights reserved.')}}</p>
        <p>{{__('This website and its content are protected by intellectual property laws. Any reproduction, distribution, or modification of the content without prior authorization is prohibited.')}}</p>
    </footer>
</div>
<input type="hidden" id="section" value="{{$section}}">
<script src="{{gasset('/js/custom_v1.js')}}"></script>

</body>

</html>

