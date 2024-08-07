<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{gasset('/css/custom.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" sizes="192x192" href="{{gasset('/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{gasset('/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{gasset('/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{gasset('/images/favicon/favicon-16x16.png')}}">
    <title>@yield('title', 'Edgardo Ponce - About Me')</title>
    <meta property="og:title" content="Edgardo Ponce personal website"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="My personal website with experience, education, works, projects"/>
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:image" content="{{gasset('/images/chango.jpeg')}}" />
</head>

<body>
<div class="layout">
    <div class="layout-wrapper">
        <header class="header">
            <nav>
                <div class="nav-box" title="home">
                    <a id="mobileHomeIcon-btn" href="{{url('about-me')}}">
                        <i class="icon-home" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="experience">
                    <a id="experienceHomeIcon-btn" href="{{url('experience')}}">
                        <i class="icon-file-text" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="education">
                    <a id="educationHomeIcon-btn" href="{{url('education')}}">
                        <i class="icon-shield" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="works">
                    <a id="projectsHomeIcon-btn" href="{{url('clients')}}">
                        <i class="icon-rocket" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="nav-box" title="challenges">
                    <a id="projectsHomeIcon-btn" href="{{url('projects')}}">
                        <i class="icon-fire" aria-hidden="true"></i>
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <div class="main-wrapper">
                <a href="/" aria-current="page">
                    <img src="{{gasset('/images/chango.jpeg')}}" width="256" height="256" og:image
                         alt="Foto edgardo ponce">
                </a>
                <h1>Edgardo Ponce</h1>
                <h2>Full Stack Developer</h2>
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
                            <p>2604558293</p>
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
                            <p>ed.poncepaez@gmail.com</p>
                        </div>
                    </div>
                    <div class="mainWrapperPersonalInfo-item">
                        <div class="mainWrapperPersonalInfoItem-icon">
                            <i class="icon-calendar"></i>
                        </div>
                        <div class="mainWrapperPersonalInfoItem-text">
                            <p>{{__('Birthday')}}</p>
                            <p>July 19, 1987</p>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <div class="menu">
            <div class="menu-wrapper">
                <div class="menuWrapper-box">
                    <a id="btn-about-me" href="{{url('about-me')}}">
                        <i class="icon-home"></i>
                        {{__('Home')}}
                    </a>
                </div>
                <div class="menuWrapper-box">
                    <a id="btn-experience" href="{{url('experience')}}">
                        <i class="icon-file-text"></i>
                        {{__('Experience')}}
                    </a>
                </div>
                <div class="menuWrapper-box">
                    <a id="btn-education" href="{{url('education')}}">
                        <i class="icon-shield"></i>
                        {{__('Education')}}
                    </a>
                </div>
                <div class="menuWrapper-box">
                    <a id="btn-education" href="{{url('clients')}}">
                        <i class="icon-rocket"></i>
                        {{__('Clients')}}
                    </a>
                </div>
                <div class="menuWrapper-box">
                    <a id="btn-projects" href="{{url('projects')}}">
                        <i class="icon-fire"></i>
                        {{__('Challenges')}}
                    </a>
                </div>
            </div>
        </div>
        @yield('content')

    </div>
    <footer>
        <p>{{__('© 2024 Edgardo Ponce. All rights reserved.')}}</p>
        <p>{{__('This website and its content are protected by intellectual property laws. Any reproduction, distribution, or modification of the content without prior authorization is prohibited.')}}</p>
    </footer>
</div>
<script src="{{gasset('/js/custom.js')}}"></script>
</body>

</html>

