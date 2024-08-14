@extends('custom.layouts.guest')
@section('title', 'Edgardo Ponce - Custom Booking')
@section('content')
    <section id="client-projects" aria-labelledby="custom booking">
        <div class="section-wrapper">
            <div class="client-projects">
                <h1>{{__('Custom Booking - Lodging management system')}}</h1>
                <h2>{{ __('Software description') }}</h2>
                <p>{{ __('The lodging management system is a comprehensive solution that allows property owners and managers to efficiently manage their bookings, pricing, and associated expenses. With advanced features such as synchronization with Google Calendar, booking validation, and automatic price calculations with discounts, this system ensures a hassle-free experience for both hosts and guests. Additionally, it enables users to check the availability of lodgings and get detailed quotes without needing to log in or directly contact the hosts.') }}</p>
                <h2>{{__('Objectives of the software')}}</h2>
                <ul>
                    <li>{{__('Automate booking management: Streamline the process of recording and tracking bookings, ensuring efficient management of lodging calendars.')}}</li>
                    <li>{{__('Optimize pricing: Provide flexible daily price management and automatically apply discounts based on the number of people and length of stay.')}}</li>
                    <li>{{__('Control lodging expenses: Allow property owners to record and manage additional expenses like cleaning, electricity, water, and gas, providing detailed tracking of operational costs.')}}</li>
                    <li>{{__('Enhance user experience: Allow users to check lodging availability and receive detailed price calculations without needing to log in or communicate with the host, making the booking process more accessible and convenient.')}}</li>
                    <li>{{__('Synchronization with Google Calendar: Integrate the system with Google Calendar to keep bookings up-to-date and avoid scheduling conflicts.')}}</li>
                </ul>
                <h2>{{__('Technologies Used:')}}</h2>
                <ul>
                    <li>{{__('Backend')}}</li>
                    <ul>
                        <li>{{__('Laravel: PHP framework used for backend development.')}}</li>
                        <li>{{__('PHP: Programming language used for server-side logic.')}}</li>
                    </ul>
                    <li>{{__('Frontend')}}</li>
                    <ul>
                        <li>{{__('JavaScript: Programming language used for client-side interactivity.')}}</li>
                        <li>{{__('jQuery: JavaScript library used to simplify DOM manipulation, events, animations, and AJAX.')}}</li>
                    </ul>
                    <li>{{__('Infrastructure:')}}</li>
                    <ul>
                        <li>{{__('MySQL: Relational database management system used for storing and managing data.')}}</li>
                        <li>{{__('Docker: Tool used for creating containers and managing development environments.')}}</li>
                    </ul>
                    <li>{{__('Additional Details:')}}</li>
                    <ul>
                        <li>{{__('Git: Version control system used for source code management.')}}</li>
                        <li>{{__('Apache: Web server used to host the application.')}}</li>
                        <li>{{__('SMTP: Email management for notification')}}</li>
                    </ul>
                </ul>
                <h2>{{__('Workflow')}}</h2>
                <ol>
                    <li>{{__('User checks availability')}}</li>
                    <ul>
                        <li>{{__('The user enters the check-in and check-out dates and the number of people into the system.')}}</li>
                        <li>{{__('The system verifies the availability of lodgings for the selected dates.')}}</li>
                    </ul>
                    <li>{{__('Price calculation')}}</li>
                    <ul>
                        <li>{{__('The system displays available lodgings and automatically calculates the base price for each.')}}</li>
                        <li>{{__('Discounts are applied based on the number of people and the length of stay.')}}</li>
                        <li>{{__('Additional expenses are added as applicable (cleaning, services, etc.).')}}</li>
                    </ul>
                    <li>{{__('Presentation of results')}}</li>
                    <ul>
                        <li>{{__('The system presents the user with a list of available lodgings along with detailed total prices.')}}</li>
                        <li>{{__('The user can select a lodging and proceed with the booking.')}}</li>
                    </ul>
                    <li>{{__('Booking process')}}</li>
                    <ul>
                        <li>{{__('Once the user selects a lodging, the system records the booking and updates the lodging’s calendar.')}}</li>
                        <li>{{__('The system also synchronizes the booking with the host’s Google Calendar to keep availability updated.')}}</li>
                    </ul>
                    <li>{{__('Lodging management by the host')}}</li>
                    <ul>
                        <li>{{__('The host can access the system to modify daily prices, apply discounts, and add additional expenses.')}}</li>
                        <li>{{__('The host can also view all synchronized bookings and manage them from the system or Google Calendar.')}}</li>
                    </ul>
                    <li>{{__('Booking validation')}}</li>
                    <ul>
                        <li>{{__('The system periodically checks for new bookings or modifications and updates the data accordingly.')}}</li>
                        <li>{{__('If scheduling conflicts or availability issues are detected, the system notifies the host to take action.')}}</li>
                    </ul>
                </ol>
                <h2>{{__('Images')}}</h2>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    @for($i=1; $i<13 ; $i++)
                        <div class="mySlides fade">
                            <div class="numbertext">1 / {{$i}}</div>
                            <img alt="{{__('Truck management - System to manage truck transportation.')}}" src="{{gasset("/images/client_projects/booking_system/booking_$i.png")}}" style="width:100%">
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
