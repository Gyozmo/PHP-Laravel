@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach($posts as $val)
            <div class="card mb-3 shadow">
                <div class="card-header">{{ $val['title'] }}</div>
                {{ $val['author'] }}<br>
                <br>




                <div class="card-body">
                    {{ $val['content']}}<br>
                </div>
                <span class="text-right mr-2"><a href="/edit/{{ $val['id'] }}">Edit</a>
                <a href="/remove/{{ $val['id'] }}">Delete</a></span>
                
            </div>
            
            @endforeach

        </div>
    </div>
</div>
@endsection
