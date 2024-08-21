@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('My Educational Background and Professional Certifications')}}"/>
    <meta property="og:description" content="{{__("I’ve earned various certifications and completed courses that highlight my expertise in web development. Here are the key achievements in my educational journey.")}}"/>
    <meta name='description' content="{{__("I’ve earned various certifications and completed courses that highlight my expertise in web development. Here are the key achievements in my educational journey.")}}">.
    <meta property="og:url" content="{{langUrl('education')}}" />
    <meta property="og:image" content="{{gasset("/images/education.jpeg")}}" />
@endsection
@section('title', __('My Educational Background and Professional Certifications'))
@section('content')
<section id="education">
    <div class="section-wrapper">
        <h1>{{__('My Educational Background and Professional Certifications')}}</h1>
        <h2>{{__("I’ve earned various certifications and completed courses that highlight my expertise in web development. Here are the key achievements in my educational journey.")}}</h2>
        <div class="education-boxes boxes-color">
            @foreach($content as $item)
                <div class="educationBoxes-box">
                    <span>{{$item['year']}}</span>
                    <div class="educationBoxesBox-icon">
                        <a href="{{gasset($item['url'])}}" class="icon-download2"></a>
                        <p>{{__($item['title'])}}</p>
                    </div>
                    <span>{{__($item['place'])}}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
