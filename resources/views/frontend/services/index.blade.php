@extends('frontend.layouts.app')

@section('title', 'Services')

@section('content')
    <h2>Our Services</h2>

    @foreach($services as $service)
        <div>
            <h4>{{ $service->name }}</h4>
            <p>{{ $service->description }}</p>
            <a href="{{ route('service.show', $service->id) }}">Book Now</a>
        </div>
    @endforeach
@endsection
