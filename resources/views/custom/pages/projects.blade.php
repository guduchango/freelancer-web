@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('Technical Challenges and Skill-Building Projects')}}"/>
    <meta property="og:description" content="{{__("Here, I showcase projects I've undertaken to challenge myself and enhance my skills across various technologies.")}}"/>
    <meta name='description' content="{{__("Here, I showcase projects I've undertaken to challenge myself and enhance my skills across various technologies.")}}">.
    <meta property="og:url" content="{{langUrl('education')}}" />
    <meta property="og:image" content="{{gasset("/images/challenges.png")}}" />
@endsection
@section('title', __('Technical Challenges and Skill-Building Projects'))
@section('content')
    <section id="projects">
        <div class="section-wrapper">
            <h1>{{__('Technical Challenges and Skill-Building Projects')}}</h1>
            <h2>{{__("Here, I showcase projects I've undertaken to challenge myself and enhance my skills across various technologies.")}}</h2>
            <div class="proyect-boxes boxes-color">
                @foreach($content as $item)
                    <div class="proyectBoxes-box">
                        <div class="proyectBoxesBox-header">
                            <div class="proyectBoxesBoxHeader-title">
                                <h3>{{__($item['title'])}}</h3>
                            </div>
                            <div class="proyectBoxesBoxHeader-links">
                                <a target="_blank"
                                   href="{{$item['url_live']}}">
                                    <i class="icon-link"></i>
                                </a>
                                <a target="_blank" href="{{$item['url_github']}}">
                                    <i class="icon-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="proyectBoxesBox-info">
                            <a target="_blank" href="{{$item['url_image']}}">
                                <img src="{{gasset($item['url_image'])}}" height="200" width="200"
                                     alt="{{$item['title']}}">
                            </a>
                            <ul>
                                @foreach($item['items'] as $it)
                                    <li>{{__($it)}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
