@extends('layouts.app')


{{-- @foreach ($navbar as $data)
<h5>Navbar :{{ $data->navbar }}</h5>
<h5>URL :{{ $data->url }}</h5>
    @if ($data->sub_navbar > 0)

        @foreach ($data->sub_navbar as $item)

                @foreach ($item as $key => $random)

                    <h5>{{ $key }} : {{ $random }}</h5>
                @endforeach


                @endforeach
                @else
                @endif
                @endforeach --}}
                {{-- <h5>condition : inside else</h5> --}}
                {{-- <h5>{{ $item }}</h5> --}}
            {{-- <h5>{{ $item }}</h5> --}}
        {{-- <h5>{{ $key  }} : {{$item }}</h5> --}}
        {{-- <h5>{{ $data->sub_navbar[0]['sub_navbar'] }}</h5> --}}
       {{-- <h5>conidition : inside if</h5> --}}


{{-- {{dd($navbar,$navbar[1]->sub_navbar[0]['sub_navbar'])}} --}}




{{-- @foreach ($navbar as $data)
        <h5>Navbar :{{ $data->navbar }}</h5>
        <h5>URL :{{ $data->url }}</h5>
        <h5>SUB :{{ $data[0]->sub_navbar }}</h5>
@endforeach --}}

@section('content')
@if(session('status'))
<h1 class="alert alert-success"> {{session('status')}}</h1>
@endif
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
<h1>Middle Page</h1>
@endsection
