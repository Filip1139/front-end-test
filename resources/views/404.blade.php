@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    {!! get_search_form(false) !!}
  @endif
@endsection
