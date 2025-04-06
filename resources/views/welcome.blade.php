@extends('ecommerce.layouts.master')

@section('title')
{{siteInfo('name')}}
@endsection


@section('contentHeader')

@endsection
@section('content')
<x-banner-section />
@livewire('ecommerce.products.category-bar')
@livewire('ecommerce.products.product-container')
@include('ecommerce.layouts.tinyBanner')
@endsection

