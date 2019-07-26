@extends('layouts.app')

@section('content')
  <h1>@lang('general.welcome')</h1>
  <p> {{ trans_choice('general.apples', 4) }}</p>
@endsection
