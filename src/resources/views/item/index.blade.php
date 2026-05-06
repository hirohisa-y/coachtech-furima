@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="tabs">
  <div class="tab">おすすめ</div>
  <div class="tab active" >マイリスト</div>
</div>
  <div class="product-grid">
  <div class="product-card">
    <div class="product-image">
      <img src="画像パス" alt="商品名">
    </div>
    <p class="product-name">商品名</p>
  </div>
  <div class="product-card">
    <div class="product-image">
      <img src="画像パス" alt="商品名">
    </div>
    <p class="product-name">商品名</p>
  </div>
  <div class="product-card">
    <div class="product-image">
      <img src="画像パス" alt="商品名">
    </div>
    <p class="product-name">商品名</p>
  </div>
</div>

</div>
@endsection
