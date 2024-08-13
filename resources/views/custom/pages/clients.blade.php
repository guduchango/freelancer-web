@extends('custom.layouts.guest')
@section('title', 'Edgardo Ponce - Clients')
@section('content')
    <section id="projects" aria-labelledby="projects">
        <div class="section-wrapper">
            <h2>{{__('Customized projects for clients')}}</h2>
            <div class="client-boxes boxes-color">
                <div class="clientBoxes-box">
                    <div class="clientBoxesBox-header">
                        <div class="clientBoxesBoxHeader-title">
                            <h3>CLICAP - {{__('Management of research papers for events')}}</h3>
                        </div>
                        <div class="clientBoxesBoxHeader-links">
                            <a target="_blank" href="{{langUrl('client_clicap')}}">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="clientBoxesBox-info">
                        <div class="clientBoxesBoxInfo-image">
                            <a target="_blank" href="{{url('/')."/images/client_projects/clicap_system/clicap_1.png"}}">
                                <img src="{{url('/')."/images/client_projects/clicap_system/clicap_1.png"}}" height="200" width="200"
                                     alt="">
                            </a>
                        </div>
                        <div class="clientBoxesBoxInfo-description">
                            <p class="clientBoxesBoxInfoDescription-title">{{__('Description')}}</p>
                            <p>{{ __('Software to manage the process of presentation, correction and approval of research papers, which are evaluated by different professionals.') }}</p>
                            <p class="clientBoxesBoxInfoDescription-title">{{__('Objetives')}}</p>
                            <p>{{__('Automate and streamline the process of presentation, correction and approval, which was previously done manually, using emails and excel.')}}</p>
                            <a href="{{langUrl('client_clicap')}}">{{__('Show more')}} >></a>
                        </div>
                    </div>
                </div>
                <div class="clientBoxes-box">
                    <div class="clientBoxesBox-header">
                        <div class="clientBoxesBoxHeader-title">
                            <h3>{{__('Truck management - System to manage truck transportation.')}}</h3>
                        </div>
                        <div class="clientBoxesBoxHeader-links">
                            <a target="_blank" href="{{langUrl('client_geoplexo')}}">
                                <i class="icon-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="clientBoxesBox-info">
                        <div class="clientBoxesBoxInfo-image">
                            <a target="_blank" href="{{gasset("/images/client_projects/geoplexo_system/geoplexo_1.png")}}">
                                <img src="{{gasset("/images/client_projects/geoplexo_system/geoplexo_1.png")}}" height="200" width="200"
                                     alt="">
                            </a>
                        </div>
                        <div class="clientBoxesBoxInfo-description">
                            <p class="clientBoxesBoxInfoDescription-title">{{__('Description')}}</p>
                            <p>{{ __('This software is a solution designed for transportation companies that need to manage multiple aspects of their logistics operation. It provides tools for truck and driver assignment, load order management, route tracking, and monitoring of critical alerts related to truck documentation (such as insurance and technical revisions).') }}</p>
                            <p class="clientBoxesBoxInfoDescription-title">{{__('Objetives')}}</p>
                            <p>{{__('The objective of the software is to comprehensively and efficiently manage the logistics operation of a trucking system, facilitating the planning, execution, tracking, and control of load orders, as well as the administration of associated resources, including drivers, trucks, and financial movements.')}}</p>
                            <a href="{{langUrl('client_geoplexo')}}">{{__('Show more')}} >></a>
                        </div>
                    </div>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>SISCAT</h3>
                    <p>{{__('Pre/post operation document management system for patients undergoing cataract surgery, managing patients, documents, images, appointments, modification history, users, among other things. Developed for the company Instituto Dr. Mercado')}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>MY ASSEMBLA</h3>
                    <p>{{__('System that uses the API of https://get.assembla.com/ to report on hours spent on development, and see more easily what is being worked on.')}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>TOTORAS</h3>
                    <p>{{__('System for loan management, made for the company TOTORAS.SA in conjunction with the software factory, installment calculations, refinancing, interpretation of txt bank nation.')}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>POANES</h3>
                    <p>{{__("Pre-surgical management system, for 'Hospital Español', export to excel, data import, patient management, document tracking, among other things.")}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>SISPRO</h3>
                    <p>{{__('Management system used in a bag factory, to control estimated production times, operator tracking, user management, creation of documents with instructions, spreadsheet management, among other things. Made for the company Termoplastica San Rafael.')}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>INSANRAFAEL</h3>
                    <p>{{__('Website oriented to the management of information of local businesses, very careful positioning, advanced manual search engine, image management with watermark printing, information control, mailings, report visits, etc.')}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>MARULA</h3>
                    <p>{{__('System for ice cream shop management, stock control, daily cash register, ticket printing, money movements, among other things.')}}</p>
                </div>
                <div class="clientBoxes-shortInfo">
                    <h3>Sysacad</h3>
                    <p>{{__('Extension of the system used by the university (U.T.N - F.R.S) for student management.')}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
