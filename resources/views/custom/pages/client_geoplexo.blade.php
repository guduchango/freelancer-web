@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('Truck management: System to manage truck transportation')}}"/>
    <meta property="og:description" content="{{__('This software is a solution designed for transportation companies that need to manage multiple aspects of their logistics operation.')}}"/>
    <meta name='description' content="{{__('This software is a solution designed for transportation companies that need to manage multiple aspects of their logistics operation.')}}" />
    <meta property="og:url" content="{{langUrl('client_geoplexo')}}" />
    <meta property="og:image" content="{{gasset("/images/client_projects/geoplexo_system/geoplexo_1.png")}}" />
@endsection
@section('title', __('Truck management: System to manage truck transportation'))
@section('content')
    <section id="client-projects">
        <div class="section-wrapper">
            <div class="client-projects">
                <h1>{{__('Truck management: System to manage truck transportation')}}</h1>
                <h2>{{ __('Software description') }}</h2>
                <p>{{ __('This software is a solution designed for transportation companies that need to manage multiple aspects of their logistics operation. It provides tools for truck and driver assignment, load order management, route tracking, and monitoring of critical alerts related to truck documentation (such as insurance and technical revisions).') }}</p>
                <p>{{ __('The software also includes a financial management module that allows you to record and control the cash movements associated with each operation, including different types of payments and their respective status.') }}</p>
                <h2>{{__('Objectives of the software')}}</h2>
                <p>{{__('The objective of the software is to comprehensively and efficiently manage the logistics operation of a trucking system, facilitating the planning, execution, tracking, and control of load orders, as well as the administration of associated resources, including drivers, trucks, and financial movements.')}}</p>
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
                <h2>{{__('Some of the key functionalities include')}}</h2>
                <ul>
                    <li>{{__('Automatic assignment of trucks and drivers based on availability and compliance with requirements.')}}</li>
                    <li>{{__('Generation and tracking of cargo orders, from origin to destination.')}}</li>
                    <li>{{__('Alertas y notificaciones sobre vencimientos críticos (seguro, revisión técnica, etc.).')}}</li>
                    <li>{{__('Operational and financial efficiency reports and analysis.')}}</li>
                </ul>
                <h2>{{__('Workflow')}}</h2>
                <ol>
                    <li>{{__('Registration and Assignment of Trucks and Drivers')}}</li>
                    <ul>
                        <li>{{__('Dispatcher assigns a truck and driver for a new load order.')}}</li>
                        <li>{{__('Verification of truck alerts: expiration of insurance policy, technical revision, route, and municipal authorization.')}}</li>
                        <li>{{__('If any alert is overdue, it is notified and action is taken (e.g., reassign another truck or update documents).')}}</li>
                    </ul>
                    <li>{{__('Load Order Generation')}}</li>
                    <ul>
                        <li>{{__('Sender and receiver are recorded in the loading order.')}}</li>
                        <li>{{__('The type of cargo (pallet, unit), quantity, type of freight (origin/destination), and the place to which the truck is going are defined.')}}</li>
                        <li>{{__('The amount of the charge order is established.')}}</li>
                    </ul>
                    <li>{{__('Transportation Execution')}}</li>
                    <ul>
                        <li>{{__('The truck goes to the place of origin to load the goods.')}}</li>
                        <li>{{__('Truck departure is recorded and tracked in real time (if necessary).')}}</li>
                        <li>{{__('Arrival at destination, unloading of the goods, and confirmation of delivery by the consignee.')}}</li>
                    </ul>
                    <li>{{__('Recording and Tracking of Money Movements')}}</li>
                    <ul>
                        <li>{{__('Generation of money movements associated with the load order, such as freight payment.')}}</li>
                        <li>{{__('Definition of the type of transaction (debit/credit), type of payment (cash, checking account, check), net amount, and final amount.')}}</li>
                        <li>{{__('Record of payment status and due date.')}}</li>
                        <li>{{__('Payment tracking and status update.')}}</li>
                    </ul>
                    <li>{{__('Closing of the Process')}}</li>
                    <ul>
                        <li>{{__('Confirmation of delivery, completion of loading order.')}}</li>
                        <li>{{__('Truck and driver status update.')}}</li>
                        <li>{{__('Operation reporting, including alerts, outstanding payments, and routing compliance.')}}</li>
                    </ul>
                </ol>
                <h2>{{__('Images')}}</h2>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    @for($i=1; $i<13 ; $i++)
                        <div class="mySlides fade">
                            <div class="numbertext">1 / {{$i}}</div>
                            <img alt="{{__('Truck management - System to manage truck transportation.')}}" src="{{gasset("/images/client_projects/geoplexo_system/geoplexo_$i.png")}}" style="width:100%">
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
