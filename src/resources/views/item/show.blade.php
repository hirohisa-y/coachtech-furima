@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="product-layout">
    <!-- 左: 商品画像 -->
    <div class="product-image2">商品画像</div>
    <!-- 右: 商品情報 -->
    <div class="product-info">
    <div>
        <div class="product-name">商品名がここに入る</div>
        <div class="brand">ブランド名</div>
      </div>

      <div class="price">¥47,000 <span>(税込)</span></div>

      <div class="actions">
        <button class="action-icon" aria-label="いいね">
          <img src="/img/heart.png" height="18"/>
          3
        </button>
        <button class="action-icon" aria-label="コメント">
          <img src="/img/comment.png" height="18" />
          1
        </button>
      </div>
      <button class="btn-primary">購入手続きへ</button>
      <hr class="divider">

      <!-- 商品説明 -->
      <div class="section">
        <div class="section-title">商品説明</div>
        <div class="desc-item"><span class="label">カラー：</span>グレー</div>
        <div class="desc-item">新品<br>商品の状態は良好です。傷もありません。</div>
        <div class="desc-item">購入後、即発送いたします。</div>
      </div>

      <hr class="divider">
      <!-- 商品の情報 -->
      <div class="section">
        <div class="section-title">商品の情報</div>
        <div class="info-table">
          <div class="info-row">
            <span class="info-label">カテゴリー</span>
            <div class="tags">
              <span class="tag">洋服</span>
              <span class="tag">メンズ</span>
            </div>
          </div>
          <div class="info-row">
            <span class="info-label">商品の状態</span>
            <span class="info-value">良好</span>
          </div>
        </div>
      </div>

      <hr class="divider">

      <!-- コメント -->
      <div class="section">
        <div class="section-title">コメント(1)</div>
        <div class="comment-list">
          <div class="comment-item">
            <div class="comment-author">
              <div class="avatar"></div>
              admin
            </div>
            <div class="comment-body">こちらにコメントが入ります。</div>
          </div>
        </div>
      </div>
      <!-- コメント送信 -->
      <div class="section">
        <div class="section-title">商品へのコメント</div>
        <div class="comment-form">
          <textarea placeholder="コメントを入力してください"></textarea>
          <button class="btn-submit">コメントを送信する</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
