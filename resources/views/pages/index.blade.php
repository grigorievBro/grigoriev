@extends('master')

@section('content')
         <div  class="row">
            <img style="z-index: -1; position: absolute;width: 100%;height: auto;"  src="{{asset('images/1.png')}}">
        <div class="col s8 m8 l8">
            <div class="row">

            </div>
            <h1 class="center-left">Создание сайтов</h1>

            <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                    <div class="collapsible-body red"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                    <div class="collapsible-body red"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                    <div class="collapsible-body red"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
            </ul>
        </div>

        <div class="col s4 m4 l4">
            <br>
            <br>
            <div class="card-panel hoverable grey lighten-4 z-depth-2">
                <div class="row valign-wrapper">
                    <div class="col s6 m5">
                        <img src="{{asset('images/Avatar.png')}}" alt="" class="circle responsive-img">
                        <!-- notice the "circle" class -->
                    </div>
                    <div class="col s7 m7">
                      <span class="black-text">
                      <P>Привет!Меня зовут Александр. Я php программист и занимаюсь веб-разработкой.</P>
                          <a class="waves-effect waves-light btn black">Задать вопрос</a>
                      </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
