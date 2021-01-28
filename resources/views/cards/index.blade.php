@extends('layouts.app')

@section('title', 'index')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <h1>Flash Card</h1>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <p> List of current flashcards.</p>

        </div>

    </div>


    <div class="container-fluid">
        @include('layouts.dashboard.elements.callout')
    </div>



@endsection
