@extends('bidibidi-origin::layouts.app')
@section('titlePage') {{  trans('bidibidi-origin::origin-lang.sitemap.2') }} @endsection
@section('metatag') 
<meta name="description" content="{{  trans('bidibidi-origin::origin-lang.sitemap.3') }} ">
@endsection
@section('style') @endsection

@section('jsheader') @endsection

@section('bidibidicontent')  

<h1>{{  trans('bidibidi-origin::origin-lang.sitemap.4') }}</h1>
{{  trans('bidibidi-origin::origin-lang.sitemap.5') }}

@endsection

@section('jsfooter') @endsection