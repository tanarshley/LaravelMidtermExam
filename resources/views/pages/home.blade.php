@extends('layouts.app')

@section('content')
   <html>
       <body>
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="card" style="width: 400px; margin-top: 5px;">
                <div class="card-body">
                    <img src="{{ asset($profilePhoto) }}" alt="image" style="width: 150px; height: 150px; display:block; margin-left: auto; margin-right: auto; margin-bottom: 5px;">
                    <h3 class="card-title text-center" style="margin-bottom: 10px">{{$name}}</h3>
                    <div class="row text-center">
                        <div class="col">
                            <a href="{{URL::route('educationbg')}}" class="btn btn-outline-info">Education</a>
                        </div>
                        <div class="col" style="margin-bottom: 15px;">
                            <a href="{{URL::route('expertisepage')}}" class="btn btn-outline-info">Expertise</a>
                        </div>
                      </div>
                    <p class="card-text" style="font-size: 16px;"><strong>Age: </strong> {{$age}}</p>
                    <p class="card-text"style="font-size: 16px;"><strong>Mobile Number: </strong>{{$contactNumber}}</p>
                    <p class="card-text"style="font-size: 16px;"><strong>Hobbies: </strong>{{$hobbies}}</p>
                    <h5 class="card-title"><strong>Connect With Me</strong></h5>
                    <p class="card-text"style="font-size: 16px;"><strong>Facebook: </strong> {{$facebook}}</p>
                    <p class="card-text"style="font-size: 16px;"><strong>Instagram: </strong>{{$instagram}}</p>
                    <p class="card-text"style="font-size: 16px;"><strong>Github: </strong>{{$github}}</p>
                </div>
              </div>
            </div>
          </div>
       </body>
   </html>
@endsection
