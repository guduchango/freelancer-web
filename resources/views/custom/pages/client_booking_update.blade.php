@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('Update of custom Booking: The lodging management system')}}"/>
    <meta property="og:description" content="{{__('Update of the lodging management system is a comprehensive solution that allows property owners and managers to efficiently manage their bookings')}}"/>
    <meta name='description' content="{{__('Update of the lodging management system is a comprehensive solution that allows property owners and managers to efficiently manage their bookings')}}">.
    <meta property="og:url" content="{{langUrl('client_booking_update')}}" />
    <meta property="og:image" content="{{gasset("/images/client_projects/booking_update_system/booking_update_1.png")}}" />
@endsection
@section('title', __('Update of custom booking: The lodging management system'))
@section('content')
    <section id="client-projects">
        <div class="section-wrapper">
            <div class="client-projects">
                <h1>{{__('Update of custom booking: The lodging management system')}}</h1>
                <h2>{{ __('Software description') }}</h2>
                <p>{{ __('The lodging management system has been updated to provide a smoother and more accessible user experience. Built with React.js for a dynamic user interface, Dexie DB for offline support, and a custom calendar for reservation management, this system is optimized for user convenience. On the server side, it uses Laravel for robust data management and Sanctum for secure authentication. Additionally, the interface design is mobile-first, ensuring an optimal user experience on mobile devices.') }}</p>
                <h2>{{__('Objectives of the software')}}</h2>
                <ul>
                    <li>{{__('Enhanced user experience: Provide a more intuitive and easy-to-use interface, adaptable to mobile devices, to improve the user’s interaction with the system.')}}</li>
                    <li>{{__('Offline functionality: Implement Dexie DB so that users can access and use the app even without an internet connection, ensuring service continuity.')}}</li>
                    <li>{{__('Efficient reservation management: Develop a custom calendar that allows users to manage their reservations quickly and easily, with a clear and functional display.')}}</li>
                    <li>{{__('Secure authentication: Integrate Sanctum to provide an additional layer of security in user authentication, protecting data and access to the system.')}}</li>
                    <li>{{__('Scalability and performance: Use Laravel on the backend to efficiently handle the system’s data and operations, ensuring optimal performance even under high demand conditions.')}}</li>
                </ul>
                <h2>{{__('Technologies Used:')}}</h2>
                <ul>
                    <li>{{__('Backend')}}</li>
                    <ul>
                        <li>{{__('Laravel')}}</li>
                        <ul>
                            <li>{{__('MVC Architecture: Separates business logic from presentation, making the code easier to maintain and scale.')}}</li>
                            <li>{{__('Eloquent ORM: Provides a simple and expressive interface for interacting with the database.')}}</li>
                            <li>{{__('Routing and Middleware: Offers a robust routing system and middleware support, allowing the implementation of specific logic for certain routes.')}}</li>
                        </ul>
                        <li>{{__('Sanctum (Laravel Sanctum)')}}</li>
                        <ul>
                            <li>{{__('A lightweight authentication system for APIs and Single Page Applications (SPAs) in Laravel.')}}</li>
                            <li>{{__('Simple Authentication: Simplifies user authentication using tokens.')}}</li>
                            <li>{{__('Security: Provides protection against CSRF and other common vulnerabilities.')}}</li>
                            <li>{{__('Support for SPAs and APIs: Designed to work seamlessly with React, Vue, Angular, etc.')}}</li>
                        </ul>
                        <li>{{__('')}}</li>
                    </ul>
                    <li>{{__('Frontend')}}</li>
                    <ul>
                        <li>{{__('React.js')}}</li>
                        <ul>
                            <li>{{__('Reusable Components: Allows the creation of encapsulated UI components that manage their own state.')}}</li>
                            <li>{{__('Virtual DOM: React efficiently updates and renders only the components that change.')}}</li>
                            <li>{{__('Extensive Ecosystem: It has a large community and a rich ecosystem of additional tools and libraries.')}}</li>
                        </ul>
                        <li>{{__('Dexie.js (IndexedDB)')}}</li>
                        <ul>
                            <li>{{__('A JavaScript library that provides an abstraction layer over IndexedDB to facilitate the use of local databases in web applications.')}}</li>
                            <li>{{__('Offline Support: Enables the application to function without an internet connection by storing data locally.')}}</li>
                            <li>{{__('User-Friendly API: Provides a simple and friendly interface for performing CRUD operations on the database.')}}</li>
                            <li>{{__('Complex Transactions and Queries: Supports efficient transactions and complex queries.')}}</li>
                        </ul>
                        <li>{{__('Mobile-First Interface:')}}</li>
                        <ul>
                            <li>{{__('A design approach that prioritizes the user experience on mobile devices.')}}</li>
                            <li>{{__('Accessibility: Ensures that the application is accessible and easy to use on mobile devices.')}}</li>
                            <li>{{__('Responsive Design: Adapts to different screen sizes and devices, providing a consistent user experience.')}}</li>
                            <li>{{__('Fast Loading: Optimizes resources and performance for mobile devices, improving load times.')}}</li>
                        </ul>
                    </ul>
                <h2>{{__('Images')}}</h2>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    @for($i=1; $i<10 ; $i++)
                        <div class="mySlides fade">
                            <div class="numbertext">1 / {{$i}}</div>
                            <img width="300" alt="{{__('Update - Lodging management system')}}" src="{{gasset("/images/client_projects/booking_update_system/booking_update_$i.png")}}" style="width:100%">
                        </div>
                    @endfor

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>

        </div>
    </section>
@endsection
