@extends('master')

@section('content')
         <div  class="row">
            <img style="z-index: -1; position: absolute;width: 100%;height: auto;"  src="{{asset('images/1.png')}}">
        <div class="col s8 m8 l8">
            <h1 class="center-align">Разработка сайтов</h1>

        </div>

        <div class="col s4 m4 l4">
            <br>
            <br>
            <div class="card-panel grey lighten-4 z-depth-2">
                <div class="row valign-wrapper">
                    <div class="col s6 m5">
                        <img src="{{asset('images/Avatar.png')}}" alt="" class="circle responsive-img">
                        <!-- notice the "circle" class -->
                    </div>
                    <div class="col s7 m7">
                      <span class="black-text">
                      <P>Привет!Меня зовут Александр. Я php программист и занимаюсь веб-разработкой.</P>
                          <a class="waves-effect waves-light btn">Задать вопрос</a>
                      </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
