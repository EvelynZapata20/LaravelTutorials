@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div style="text-align: center;">
    <div class="container">
        <p><strong>Email:</strong> {{ $viewData['email'] }}</p>
        <p><strong>Address:</strong> {{ $viewData['address'] }}</p>
        <p><strong>Phone:</strong> {{ $viewData['phone'] }}</p>
    </div>
</div>
@endsection