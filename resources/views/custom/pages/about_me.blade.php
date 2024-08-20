@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('Edgardo Ponce Freelance Web Developer: Expert in Digital Solutions')}}"/>
    <meta property="og:description" content="{{__('Freelance Web Developer specializing in custom websites and digital solutions, delivering quality and innovation.')}}"/>
    <meta property="og:url" content="{{langUrl('about_me')}}" />
    <meta property="og:image" content="{{gasset('/images/chango.jpeg')}}" />
@endsection
@section('title', __('Edgardo Ponce Freelance Web Developer: Expert in Digital Solutions'))
@section('content')
    <section id="about-me">
        <div class="section-wrapper">
            <div class="aboutMe-info">
                <h2>{{__('Freelance Web Development Services')}}</h2>
                <p>{{__('I am a Full Stack developer with an innate passion for creating end-to-end technology solutions.')}}<p>
                <p>{{__('With over 12 years of experience in software development, I have had the privilege of working on a variety of exciting and challenging projects.')}}</p>
                <p>{{__('From designing elegant user interfaces to implementing robust backend systems, I have excelled in all aspects of the software development lifecycle.')}}</p>
            </div>
            <div class="aboutMe-info">
                <h2>{{__('What I Offer?')}}</h2>
                <h3>{{__('Backend Development')}}</h3>
                <ul>
                    <li><span>{{__('PHP & Laravel:')}}</span> {{__('Development of robust and scalable web applications using Laravel, the most popular PHP framework.')}}</li>
                    <li><span>{{__('MySQL:')}}</span> {{__('Design and optimization of databases for optimal performance.')}}</li>
                </ul>
                <h3>{{__('Frontend Development')}}</h3>
                <ul>
                    <li><span>{{__('React & TypeScript:')}}</span> {{__('Creation of interactive and dynamic user interfaces with React and TypeScript.')}}</li>
                    <li><span>{{__('HTML, CSS, Bootstrap & Tailwind:')}}</span> {{__('Design of responsive and attractive websites using the latest web design technologies.')}}</li>
                    <li><span>{{__('jQuery:')}}</span> {{__('Implementation of advanced functionalities and visual effects')}}.</li>
                </ul>
                <h3>{{__('Integrations and More')}}</h3>
                <ul>
                    <li><span>{{__('Magento:')}}</span> {{__('Development and customization of online stores with Magento.')}}</li>
                    <li><span>{{__('API-REST:')}}</span> {{__("Development and integration of APIs to enhance your application's functionality.")}}</li>
                    <li><span>{{__('Docker:')}}</span> {{__('Configuration of development and deployment environments using Docker containers.')}}</li>
                </ul>
                <h2>{{__('Work Process')}}</h2>
                <ol>
                    <li><span>{{__('Initial Consultation:')}}</span> {{__('Understanding your needs and goals.')}}</li>
                    <ul>
                        <li>{{__('Discuss project requirements, objectives, and timelines.')}}</li>
                        <li>{{__('Identify key functionalities and design preferences.')}}</li>
                    </ul>
                    <li><span>{{__('Project Planning:')}}</span> {{__('Development of a detailed plan and timeline.')}}</li>
                    <ul>
                        <li>{{__('Create a project roadmap with milestones and deliverables.')}}</li>
                        <li>{{__('Define technical specifications and choose the right technologies.')}}</li>
                    </ul>
                    <li><span>{{__('Design Phase:')}}</span> {{__('Crafting the visual and user experience.')}}</li>
                    <ul>
                        <li>{{__('Develop wireframes and mockups for key pages.')}}</li>
                        <li>{{__('Iterate on designs based on your feedback.')}}</li>
                        <li>{{__('Finalize the UI/UX design ensuring a responsive and user-friendly interface.')}}</li>
                    </ul>
                    <li><span>{{__('Development Phase:')}}</span> {{__('Bringing the design to life.')}}</li>
                    <ul>
                        <li>{{__('Set up the development environment and configure necessary tools.')}}</li>
                        <li>{{__('Implement backend functionalities and database structures.')}}</li>
                        <li>{{__('Develop the frontend using React, TypeScript, HTML, CSS/Bootstrap/Tailwind.')}}</li>
                        <li>{{__('Integrate APIs and other third-party services as needed.')}}</li>
                    </ul>
                    <li><span>{{__('Testing and Quality Assurance:')}}</span> {{__('Ensuring everything works perfectly.')}}</li>
                    <ul>
                        <li>{{__('Conduct unit testing, integration testing, and end-to-end testing.')}}</li>
                        <li>{{__('Perform cross-browser and cross-device testing for compatibility.')}}</li>
                        <li>{{__('Fix any bugs and optimize performance.')}}</li>
                    </ul>
                    <li><span>{{__('Review and Feedback:')}}</span> {{__('Fine-tuning the final product.')}}</li>
                    <ul>
                        <li>{{__('Present the completed project for your review.')}}</li>
                        <li>{{__('Make necessary adjustments based on your feedback.')}}</li>
                    </ul>
                    <li><span>{{__('Deployment and Launch:')}}</span> {{__('Making your site live.')}}</li>
                    <ul>
                        <li>{{__('Prepare the deployment environment and configurations.')}}</li>
                        <li>{{__('Deploy the project to the live server.')}}</li>
                        <li>{{__('Conduct final checks to ensure everything is functioning correctly.')}}</li>
                    </ul>
                    <li><span>{{__('Post-Launch Support:')}}</span> {{__('Ensuring continued success.')}}</li>
                    <ul>
                        <li>{{__('Provide maintenance and support services.')}}</li>
                        <li>{{__('Address any issues that arise post-launch.')}}</li>
                        <li>{{__('Implement updates and improvements as needed.')}}</li>
                    </ul>
                </ol>
                <h2>{{__('Why Choose Me?')}}</h2>
                <ul>
                    <li><span>{{__('Experience:')}}</span> {{__('Years of experience in web development, handling projects across various industries.')}}</li>
                    <li><span>{{__('Quality:')}}</span> {{__('Commitment to excellence in every project.')}}</li>
                    <li><span>{{__('Flexibility:')}}</span> {{__('Ability to adapt to your specific needs and timelines.')}}</li>
                    <li><span>{{__('Support:')}}</span> {{__('Post-launch support service to ensure your website runs smoothly.')}}</li>
                </ul>
                <h2>{{__('Ready to Start?')}}</h2>
                <p>{{__('If you are looking for a web developer who can deliver complete and customized solutions, do not hesitate to get in touch. I am here to turn your ideas into reality.')}}</p>
                <p>{{__('Contact me today to discuss your next project.')}}</p>
            </div>
        </div>
    </section>
@endsection




