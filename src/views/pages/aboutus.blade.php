@extends('bidibidi-origin::layouts.app')
@section('titlePage') {{  trans('bidibidi-origin::origin-lang.aboutus.2') }} @endsection
@section('metatag') 
<meta name="description" content="{{  trans('bidibidi-origin::origin-lang.aboutus.3') }} ">
@endsection
@section('style') @endsection

@section('jsheader') @endsection

@section('bidibidicontent')  

<h1>{{  trans('bidibidi-origin::origin-lang.aboutus.4') }}</h1>
{{  trans('bidibidi-origin::origin-lang.aboutus.5') }}

@endsection

@section('jsfooter') @endsection