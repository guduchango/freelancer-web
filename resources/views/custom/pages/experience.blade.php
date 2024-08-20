@extends('custom.layouts.guest')
@section('title', 'Edgardo Ponce - '.__('Experience'))
@section('content')

<section id="experience" aria-labelledby="{{__('Experience')}}">
    <div class="section-wrapper">
        <h2>{{__('Experience')}}</h2>
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
