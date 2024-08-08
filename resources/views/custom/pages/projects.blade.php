@extends('custom.layouts.guest')
@section('title', 'Edgardo Ponce - Clients')
@section('content')
    <section id="projects" aria-labelledby="projects">
        <div class="section-wrapper">
            <h2>{{__('Challenges to improve my skills')}}</h2>
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
                                     alt="">
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
