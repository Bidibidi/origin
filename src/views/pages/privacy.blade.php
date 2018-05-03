@extends('bidibidi-origin::layouts.app')
@section('titlePage') {{  trans('bidibidi-origin::origin-lang.privacy.2') }} @endsection
@section('metatag') 
<meta name="description" content="{{  trans('bidibidi-origin::origin-lang.privacy.3') }} ">
@endsection
@section('style') @endsection

@section('jsheader') @endsection

@section('bidibidicontent')  

<h1>{{  trans('bidibidi-origin::origin-lang.privacy.4') }}</h1>
{{  trans('bidibidi-origin::origin-lang.privacy.5') }}

@endsection

@section('jsfooter') @endsection