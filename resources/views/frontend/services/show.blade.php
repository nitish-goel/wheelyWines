@extends('frontend.layouts.app')

@section('title', 'Book Service')

@section('content')
    <h2>{{ $service->name }}</h2>

    <form method="POST" action="{{ route('booking.store') }}">
        @csrf

        <input type="hidden" name="service_id" value="{{ $service->id }}">

        <label>Date</label>
        <input type="date" name="service_date" required>

        <button type="submit">Book Appointment</button>
    </form>
@endsection
