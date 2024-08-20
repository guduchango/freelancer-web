@extends('custom.layouts.guest')
@section('title', 'Edgardo Ponce - '.__('Management of research papers for events'))
@section('content')
    <section id="client-projects" aria-labelledby="{{__('Management of research papers for events')}}">
        <div class="section-wrapper">
            <div class="client-projects">
                <h1>CLICAP - {{__('Management of research papers for events')}}</h1>
                <h2>{{ __('Software description') }}</h2>
                <p>{{ __('Software to manage the process of presentation, correction and approval of research papers, which are evaluated by different professionals.') }}</p>
                <p>{{ __('Create certificates of approval and attendance to the event where they are exposed and manage payments of attendees.') }}</p>
                <h2>{{__('Objectives of the software')}}</h2>
                <p>{{__('Automate and streamline the process of presentation, correction and approval, which was previously done manually, using emails and excel.')}}</p>
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
                <h2>{{__('Functionalities and Modules')}}</h2>
                <ul>
                    <li>{{__('Presentation page')}}</li>
                    <ul>
                        <li>{{__('General information about the event')}}</li>
                        <li>{{__('Sponsors')}}</li>
                        <li>{{__('Contact')}}</li>
                    </ul>
                    <li>{{__('System Login')}}</li>
                    <ul>
                        <li>{{__('Login')}}</li>
                        <li>{{__('User registration')}}</li>
                        <li>{{__('Password recovery')}}</li>
                        <li>{{__('Send email as appropriate')}}</li>
                    </ul>
                    <li>{{__('Dashboard, according to role you can')}}</li>
                    <ul>
                        <li>{{__('Overview of documents by category')}}</li>
                        <li>{{__('Download list in XML format')}}</li>
                    </ul>
                    <li>{{__('Documents, depending on the role you can')}}</li>
                    <ul>
                        <li>{{__('List documents')}}</li>
                        <li>{{__('Assign user to evaluate')}}</li>
                        <li>{{__('Delete document')}}</li>
                        <li>{{__('Create certificate in PDF format')}}</li>
                        <li>{{__('View iteration history')}}</li>
                        <li>{{__('Evaluate document and upload corrected document')}}</li>
                        <li>{{__('Approve document')}}</li>
                        <li>{{__('View the different corrected versions')}}</li>
                        <li>{{__('Notify users according to document status: approved, rejected, cancelled, revised, corrected.')}}</li>
                    </ul>
                    <li>{{__('My data, update personal information')}}</li>
                    <ul>
                        <li>{{__('Name and surname')}}</li>
                        <li>{{__('DNI')}}</li>
                        <li>{{__('Profession')}}</li>
                        <li>{{__('Zip/Postal Code')}}</li>
                        <li>{{__('Country')}}</li>
                        <li>{{__('Phone')}}</li>
                    </ul>
                    <li>{{__('Users, according to role you can')}}</li>
                    <ul>
                        <li>{{__('List and search for users')}}</li>
                        <li>{{__('Assign as administrator or evaluator')}}</li>
                        <li>{{__('Add payment')}}</li>
                        <li>{{__('Add Delete')}}</li>
                    </ul>
                    <li>{{__('Payments according to role, you can')}}</li>
                    <ul>
                        <li>{{__('List of payments')}}</li>
                        <li>{{__('Approve payment')}}</li>
                        <li>{{__('Load payment')}}</li>
                        <li>{{__('Amount')}}</li>
                        <li>{{__('Currency (pesos, dollars)')}}</li>
                        <li>{{__('Type (transfer, cash)')}}</li>
                        <li>{{__('Comment')}}</li>
                        <li>{{__('Billing information')}}</li>
                        <li>{{__('Attach receipt')}}</li>
                    </ul>
                </ul>
                <h2>{{__('Flowchart: Research Paper Management Process')}}</h2>
                <ol>
                    <li>{{__('Start')}}</li>
                    <ul>
                        <li>{{__('The user accesses the system.')}}</li>
                    </ul>
                    <li>{{__('Login (Select Role)')}}</li>
                    <ul>
                        <li>{{__('The user is authenticated as “Evaluated” or “Evaluator”.')}}</li>
                    </ul>
                    <li>{{__('Flow for Evaluated')}}</li>
                    <ul>
                        <li>{{__('Upload Initial Document')}}</li>
                        <ul>
                            <li>{{__('The evaluee uploads the research document for evaluation.')}}</li>
                            <li>{{__('The system assigns the document to an available evaluator.')}}</li>
                        </ul>
                        <li>{{__('Wait for Evaluation')}}</li>
                        <ul>
                            <li>{{__('The document is in “In Process” status.')}}</li>
                            <li>{{__('The evaluee waits for feedback from the evaluator.')}}</li>
                        </ul>
                        <li>{{__('Receive Evaluation')}}</li>
                        <ul>
                            <li>{{__('The status of the document changes to “Evaluated” or “Cancelled”.')}}</li>
                            <li>{{__('Action According to Status')}}</li>
                        </ul>
                        <li>{{__('Action According to Status')}}</li>
                        <ul>
                            <li>{{__('If “Evaluated”')}}</li>
                            <li>{{__('The evaluated receives feedback and suggestions from the evaluator.')}}</li>
                        </ul>
                        <li>{{__('Upload New Version')}}</li>
                        <ul>
                            <li>{{__('The evaluated can upload a corrected version of the document.')}}</li>
                        </ul>
                    </ul>
                    <li>{{__('Flow for Evaluator')}}</li>
                    <ul>
                        <li>{{__('Review of Assigned Documents')}}</li>
                        <ul>
                            <li>{{__('The evaluator reviews the documents in “In Process” status.')}}</li>
                        </ul>
                        <li>{{__('Document Evaluation')}}</li>
                        <ul>
                            <li>{{__('Evaluator provides feedback and determines the status of the document.')}}</li>
                        </ul>
                        <li>{{__('Assign Status')}}</li>
                        <ul>
                            <li>{{__('Accepted: Document is approved without further changes.')}}</li>
                            <li>{{__('Evaluated: The evaluator must correct and upload a new version.')}}</li>
                            <li>{{__('Cancelled: The document does not meet the required criteria and is cancelled.')}}</li>
                        </ul>
                    </ul>
                    <li>{{__('Finalization')}}</li>
                    <ul>
                        <li>{{__('The process ends with the document in one of the final states: “Accepted” or “Cancelled”.')}}</li>
                    </ul>
                </ol>
                <div class="diagram-img">
                    <img src="{{url('/').'/images/client_projects/clicap_flow/clicap_document.drawio.png'}}">
                </div>
                <h2>{{__('Flowchart: Payment Process')}}</h2>
                <ol>
                    <li>{{__('Start')}}</li>
                    <ul>
                        <li>{{__('The user logs into the system.')}}</li>
                    </ul>
                    <li>{{__('User Registration')}}</li>
                    <ul>
                        <li>{{__('User registers in the system.')}}</li>
                    </ul>
                    <li>{{__('Complete Payment Data')}}</li>
                    <ul>
                        <li>{{__('Amount: The user enters the amount of the payment.')}}</li>
                        <li>{{__('Currency: Choose between pesos or USD.')}}</li>
                        <li>{{__('Payment Type: Select cash or wire transfer.')}}</li>
                        <li>{{__('Comment: Enter additional information, if necessary.')}}</li>
                        <li>{{__('Invoicing Data: Provide the necessary data for the invoice.')}}</li>
                        <li>{{__('Attach Receipt: The user uploads a receipt for the payment.')}}</li>
                    </ul>
                    <li>{{__('Administrator Review')}}</li>
                    <ul>
                        <li>{{__('The administrator reviews the payment details and the attached voucher.')}}</li>
                    </ul>
                    <li>{{__('Administrator Decision')}}</li>
                    <ul>
                        <li>{{__('Approved: If everything is correct, the administrator approves the payment.')}}</li>
                        <li>{{__('Rejected: If there are any problems, the administrator rejects the payment and notifies the user.')}}</li>
                    </ul>
                    <li>{{__('Completion')}}</li>
                    <ul>
                        <li>{{__('The process ends with the payment approved or rejected.')}}</li>
                    </ul>
                </ol>
                <div class="diagram-img">
                    <img src="{{url('/').'/images/client_projects/clicap_flow/clicap_payment.drawio.png'}}">
                </div>
                <h2>{{__('Images')}}</h2>
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    @for($i=1; $i<15 ; $i++)
                    <div class="mySlides fade">
                        <div class="numbertext">1 / {{$i}}</div>
                        <img alt="{{__('Management of research papers for events')}}" src="{{url('/')."/images/client_projects/clicap_system/clicap_$i.png"}}" style="width:100%">
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
