@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('Professional Experience and Career in Notable Companies and Projects')}}"/>
    <meta property="og:description" content="{{__("I’ve worked in various roles that have strengthened my expertise in web development and technology.")}}"/>
    <meta name='description' content="{{__("I’ve worked in various roles that have strengthened my expertise in web development and technology.")}}" />
    <meta property="og:url" content="{{langUrl('experience')}}" />
    <meta property="og:image" content="{{gasset("/images/experience.png")}}" />
@endsection
@section('title', __('Professional Experience and Career in Notable Companies and Projects'))
@section('content')

<section id="experience">
    <div class="section-wrapper">
        <h1>{{__('Professional Experience and Career in Notable Companies and Projects')}}</h1>
        <h2>{{__("I’ve worked in various roles that have strengthened my expertise in web development and technology.")}}</h2>
        <div class="experience-boxes boxes-color">
            @foreach($content as $item)
            <div class="experienceBoxes-box">
                <span>{{$item['year']}}</span>
                <p>{{__($item['title'])}}</p>
                <ul>
                    @foreach($item['task'] as $ts)
                    <li>{{__($ts)}}</li>
                    @endforeach
                </ul>
                <span>{{$item['place']}}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
