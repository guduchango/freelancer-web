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
                            <a target="_blank" href="{{url('clicap')}}">
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
                            <a href="{{url('clicap')}}">{{__('Show more')}} >></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
