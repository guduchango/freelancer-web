@extends('custom.layouts.guest')
@section('title', 'Edgardo Ponce - Education')
@section('content')

<section id="education" aria-labelledby="education">
    <div class="section-wrapper">
        <h2>Education</h2>
        <div class="education-boxes boxes-color">
            @foreach($educations as $item)
                <div class="educationBoxes-box">
                    <span>{{$item['year']}}</span>
                    <div class="educationBoxesBox-icon">
                        <a href="{{$item['url']}}" class="icon-download2"></a>
                        <p>{{$item['title']}}</p>
                    </div>
                    <span>{{$item['place']}}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
