{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    @include('partials.pageblocks.hero')
    @include('partials.pageblocks.about')
    {{-- @include('partials.pageblocks.projects')
    @include('partials.pageblocks.customers')
    @include('partials.pageblocks.contact') --}}
  @endwhile
@endsection
