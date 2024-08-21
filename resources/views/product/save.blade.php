@extends('layouts.app')
@section('title', 'Product Created - Online Store')
@section('subtitle', 'Product Created')
@section('content')
<div class="card mb-3">
    <p style="text-align: center; margin-top: 10px;">
        The product <strong>{{ $viewData["name"] }}</strong> with a price of <strong>${{ $viewData["price"] }}</strong> has been successfully created.
    </p>
</div>
<div style="text-align: center;">
    <a class="button" href="{{ route('product.index') }}">Ok</a>
</div>
@endsection