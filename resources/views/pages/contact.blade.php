@extends('layouts.app')
@section('title', '{{ ucwords(basename(__FILE__, ".blade.php")) }} | Go Quote Rocket')
@section('body-class', 'static_pg')
@section('content')
<div class="static_section">
    <div class="container">
        <h1 class="heading">{{ ucwords(basename(__FILE__, ".blade.php")) }}</h1>
        <div class="static_content">
            <p>This page is under construction. Please check back soon!</p>
        </div>
        <div class="btn-bx" style="margin-top: 30px;">
            <a href="{{ route('home') }}" class="comn-btn">Back to Home</a>
        </div>
    </div>
</div>
@endsection
@push('styles')
<style>
.static_section { padding: 80px 0; min-height: 60vh; }
.static_content { max-width: 800px; margin: 0 auto; padding: 40px 0; }
</style>
@endpush
