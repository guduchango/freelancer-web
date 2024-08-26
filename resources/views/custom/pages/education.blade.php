@extends('custom.layouts.guest')
@section('header_meta')
    <meta property="og:title" content="{{__('My Educational Background and Professional Certifications')}}"/>
    <meta property="og:description" content="{{__("I’ve earned various certifications and completed courses that highlight my expertise in web development. Here are the key achievements in my educational journey.")}}"/>
    <meta name='description' content="{{__("I’ve earned various certifications and completed courses that highlight my expertise in web development. Here are the key achievements in my educational journey.")}}" />
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
            @php
                $count = 0;
            @endphp
            @foreach($content as $item)
                @php
                    $count++;
                @endphp
                <div class="educationBoxes-box">
                    <div class="educationBoxes-header">
                        <div class="educationBoxesHeader-icon">
                            <img width="100" src="{{gasset($item['url_image'])}}">
                        </div>
                        <div class="educationBoxesHeader-title">
                            <a href="{{$item['url_course']}}">{{__($item['title'])}}</a>
                            <a class="download-certification" target="_blank" href="{{gasset($item['url_certification'])}}" ><i class="icon-download2"></i></a>
                        </div>
                    </div>
                    <div class="educationBoxes-body">
                        <div class="educationBoxes-text">
                            <p>{{__('Topics')}}</p>
                            <ul id="educationBoxesText-ul_{{$count}}">
                                @php
                                $items = explode("|", __($item['topics']))
                                @endphp
                                @foreach($items as $item)
                                    <li>{{$item}}</li>
                                @endforeach
                            </ul>
                            <div class="educationBoxesText-showMore">
                                <a id="educationBoxesTextShowMore-id_{{$count}}">Show more >>></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    </div>

</section>
@endsection
