@extends('front.layouts.master')
@section('content')
    <!-- Home Section -->
    @include('front.home')

    <!-- About Section -->
    @include('front.about')

    <!-- Resume Section -->
    @include('front.resume')

    <!-- Portfolio Section -->
    @include('front.portfolio')
    <!-- Blog Section -->
  @include('front.blog')

    <!-- Contact Section -->
    @include('front.contact')
@endsection
