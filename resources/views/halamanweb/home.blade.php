@extends('halamanweb.layouts.app')

@section('content')
    @include('halamanweb.components.hero-slider')
    
    @include('halamanweb.sections.facilities')
    
    @include('halamanweb.sections.pricing')
    
    @include('halamanweb.sections.testimonials')
    
    @include('halamanweb.sections.cta')
    @include('halamanweb.sections.location')
@endsection