@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="container">
<!-- 左カラム -->
<div class="left-column">
<!-- 商品情報 -->
    <div class="product-info-2">
      <div class="product-image-info">商品画像</div>
      <div class="product-details">
        <div class="product-name-info">商品名</div>
        <div class="product-price-info">¥ 47,000</div>
      </div>
    </div>
    <!-- 支払い方法 -->
    <div class="section">
      <div class="section-title">支払い方法</div>
      <div class="select-wrapper">
        <select>
          <option value="">選択してください</option>
          <option value="convenience">コンビニ払い</option>
          <option value="credit">カード払い</option>
        </select>
      </div>
    </div>
    <!-- 配送先 -->
    <div class="section">
        <div class="delivery-header">
          <div class="section-title">配送先</div>
          <a class="change-link" href="#">変更する</a>
        </div>
        <div class="delivery-address">
          〒 XXX-YYYY<br>
          ここには住所と建物が入ります
        </div>
    </div>
</div>


<!-- 右カラム -->
<div class="right-column">
  <div class="summary-box">
    <div class="summary-row">
        <span class="label">商品代金</span>
        <span class="value">¥ 47,000</span>
    </div>
    <div class="summary-row">
        <span class="label">支払い方法</span>
        <span class="value">コンビニ払い</span>
    </div>
  </div>
    <button class="buy-btn">購入する</button>

</div>
</div>
@endsection
