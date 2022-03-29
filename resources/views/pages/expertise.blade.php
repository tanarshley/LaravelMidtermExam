@extends('layouts.app')

@section('content')
   <html>
     <body>
        <h1 class="text-center" style="margin-top: 15px;">{{$title}}</h1>
        <br>
        <div class="container">
            <!--Container of array svgs-->
            <div class="container">
                @if(count($svgs) > 0)
                    @foreach($svgs as $svg)
                        <div class="container" style="display: table-cell; width: 320px; height: 100px;">
                            <div class="card" style="width: 11rem; border-bottom: none; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                                <div class="card-body">
                                    <img src="{{ asset($svg) }}" alt="image">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <!--Container of array languages-->
            <div class="container">
                @if(count($languages) > 0)
                    @foreach($languages as $language)
                        <div class="container" style="display: table-cell; width: 320px; height: 100px;">
                            <div class="card" style="text-align: center; width: 11rem; border-top: none; border-top-left-radius: 0; border-top-right-radius: 0;">
                                <div class="card-body">
                                    @if($loop->iteration === 1)
                                        <h3 class="card-title" style="color: rgb(255, 145, 0); font-weight: 600;'">{{$language}}</h3>

                                        @elseif($loop->iteration === 2)
                                        <h3 class="card-title" style="color: rgb(0, 110, 255); font-weight: 600;'">{{$language}}</h3>

                                        @elseif($loop->iteration === 3)
                                        <h3 class="card-title" style="color:rgb(248, 34, 34); font-weight: 600;'">{{$language}}</h3>

                                        @elseif($loop->iteration === 4)
                                        <h3 class="card-title" style="color:rgb(248, 34, 34); font-weight: 600;'">{{$language}}</h3>

                                        @else
                                        <h3 class="card-title" style="font-weight: 600;">{{$language}}</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>

        <div class="container">
            <div class="row">
              <div class="col text-center">
                <a href="{{URL::route('educationbg')}}" class="btn btn-outline-primary" style="width: 300px;">Education</a>
                <a href="{{URL::route('homepage')}}" class="btn btn-outline-primary" style="width: 300px;">Home</a>
            </div>
            </div>
          </div>
     </body>
   </html>
@endsection
