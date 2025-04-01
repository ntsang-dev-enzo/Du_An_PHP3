@extends('client.layouts.auth')
@push('stylesheet')
<style>body{color: yellow}</style>
@endpush
@section('meta_title')
    sản phẩm nè
@endsection
{{$category->name}}