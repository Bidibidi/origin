@extends('bidibidi-origin::layouts.app')
@section('titlePage') {{  trans('bidibidi-origin-lang::origin-lang.index.2') }} @endsection
@section('metatag') 
<meta name="description" content="{{  trans('bidibidi-origin-lang::origin-lang.index.3') }} ">
@endsection
@section('style') @endsection

@section('jsheader') @endsection

@section('bidibidicontent')  

<h1>{{  trans('bidibidi-origin-lang::origin-lang.index.4') }}</h1>
{{  trans('bidibidi-origin-lang::origin-lang.index.5') }}

@endsection

@section('jsfooter') @endsection