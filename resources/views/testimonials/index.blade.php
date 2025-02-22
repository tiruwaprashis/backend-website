@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Testimonials</h1>
    <a href="{{ route('testimonials.create') }}" class="btn btn-primary">Add Testimonial</a>
    <div class="row mt-4">
        @foreach($testimonials as $testimonial)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top" alt="{{ $testimonial->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $testimonial->name }}</h5>
                        <p class="card-text">{{ $testimonial->position }}</p>
                        <p class="card-text">{{ $testimonial->message }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
