@extends('layouts.dashboard.elements.card')

@section('card-title','<i class="fas fa-exclamation-triangle"></i>Callouts')

@section('card-body')

    <div class="callout callout-danger">
        <h5>I am a danger callout!</h5>

        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
            soul,
            like these sweet mornings of spring which I enjoy with my whole heart.</p>
    </div>
    <div class="callout callout-info">
        <h5>I am an info callout!</h5>

        <p>Follow the steps to continue to payment.</p>
    </div>
    <div class="callout callout-warning">
        <h5>I am a warning callout!</h5>

        <p>This is a yellow callout.</p>
    </div>
    <div class="callout callout-success">
        <h5>I am a success callout!</h5>

        <p>This is a green callout.</p>
    </div>

@endsection
