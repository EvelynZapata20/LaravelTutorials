@extends('layouts.app')
@section('title', 'Product Created - Online Store')
@section('subtitle', 'Product Created')
@section('content')
<div class="card mb-3">
    <p style="text-align: center; margin-top: 10px;">
        The product <strong>{{ $productData["name"] }}</strong> with a price of <strong>${{ $productData["price"] }}</strong> has been successfully created.
    </p>
</div>
<div style="text-align: center;">
    <a class="button" href="{{ route('product.index') }}">Ok</a>
</div>
@endsection