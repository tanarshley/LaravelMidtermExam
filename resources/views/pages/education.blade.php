@extends('layouts.app')

@section('content')
   <html>
      <body>
        <h1 class="text-center" style="margin-top: 15px; margin-bottom: 50px;">{{$title}}</h1>
        <div class="container">
            <div class="row">
              <div class="col text-center">
                <a href="{{URL::route('homepage')}}" class="btn btn-outline-primary" style="width: 300px; margin-top: -50px;">View Profile</a>
            </div>
            </div>
          </div>
          <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Schools</h3>
                        @if(count($schools) > 0)
                            <ul class="list-group">
                                @foreach($schools as $school)
                                    <li class="list-group-item" style="width: 500px;">{{$school}}</li>
                                @endforeach
                            </ul>
                        @endif
                </div>
              <div class="col">
                <h3>Year of Batch</h3>

                    @if(count($batchYears) > 0)
                        <ul class="list-group">
                            @foreach($batchYears as $batchYear)
                                <li class="list-group-item" style="width: 500px;  text-align: center;">{{$batchYear}}</li>
                            @endforeach
                        </ul>
                    @endif
              </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
              <div class="col text-right" style="margin-top: 15px;">
                <a href="{{URL::route('expertisepage')}}" class="btn btn-outline-primary" style="width: 300px; position: absolute; right: 55px;">Go to Expertise</a>
            </div>
            </div>
          </div>
      </body>
   </html>
@endsection
