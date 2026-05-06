@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="container">
<!-- プロフィール -->
  <div class="profile-section">
    <div class="avatar"></div>
    <div class="username">ユーザー名</div>
    <a class="edit-btn" href="/mypage/profile">プロフィールを編集</a>
  </div>

<!-- タブ -->
  <div class="tabs">
    <a class="tab active" href="#">出品した商品</a>
    <a class="tab" href="#">購入した商品</a>
  </div>

<!-- 商品グリッド -->
  <div class="product-grid">
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
    <div class="product-card">
      <div class="product-image">商品画像</div>
      <div class="product-name">商品名</div>
    </div>
  </div>
</div>

@endsection
