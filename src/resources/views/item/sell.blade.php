@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="container">

    <!-- Header -->
    <div class="page-header">
      <h1>商品の出品</h1>
    </div>

<!-- Image Upload -->
    <div class="section">
      <div class="section-title">商品画像</div>
      <div class="image-upload-area">
        <button class="upload-btn">画像を選択する</button>
        <input type="file" id="fileInput" accept="image/*" style="display:none" multiple>
      </div>
    </div>

    <!-- Category -->
    <div class="field-group">
        <div class="field-label">カテゴリー</div>
        <div class="category-tags">
          <button class="tag" >ファッション</button>
          <button class="tag" >家電</button>
          <button class="tag active" >インテリア</button>
          <button class="tag" >レディース</button>
          <button class="tag" >メンズ</button>
          <button class="tag" >コスメ</button>
          <button class="tag" >本</button>
          <button class="tag" >ゲーム</button>
          <button class="tag" >スポーツ</button>
          <button class="tag" >キッチン</button>
          <button class="tag" >ハンドメイド</button>
          <button class="tag" >アクセサリー</button>
          <button class="tag" >おもちゃ</button>
          <button class="tag" >ベビー・キッズ</button>
        </div>
      </div>

      <!-- Condition -->
      <div class="field-group" style="margin-top: 20px;">
        <div class="field-label">商品の状態</div>
        <div class="select-wrapper">
          <select class="select-field">
            <option value="" disabled selected>選択してください</option>
            <option value="very_good">良好</option>
            <option value="good">目立った傷や汚れなし</option>
            <option value="normal">やや傷や汚れあり</option>
            <option value="bad">状態が悪い</option>
          </select>
          <span class="select-arrow">▼</span>
        </div>
      </div>

      <!-- Name & Description -->
    <div class="section">
      <div style="margin-bottom: 5px;" class="section-title">商品名と説明</div>

      <div class="field-group">
        <div class="field-label">商品名</div>
        <input type="text" class="input-field" placeholder="">
      </div>

      <div class="field-group">
        <div class="field-label">ブランド名</div>
        <input type="text" class="input-field" placeholder="">
      </div>

      <div class="field-group">
        <div class="field-label">商品の説明</div>
        <textarea class="input-field" placeholder=""></textarea>
      </div>

      <div class="field-group">
        <div class="field-label">販売価格</div>
        <div class="price-wrapper">
          <span class="price-prefix">¥</span>
          <input type="number" class="input-field price-input" placeholder="">
        </div>
      </div>
    </div>

    <!-- Submit -->
    <div class="submit-section">
      <button class="submit-btn">出品する</button>
    </div>

</div>

@endsection
