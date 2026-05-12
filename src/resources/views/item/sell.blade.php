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
    <form action="/items" method="POST" enctype="multipart/form-data">
    @csrf
<!-- Image Upload -->
    <div class="section">
      <div class="section-title">商品画像</div>
      <div class="image-upload-area">
        <input class="upload-btn" type="file" name="image" id="fileInput" accept="image/*" style="" multiple>
      </div>
    </div>

    <!-- Category -->
    <div class="field-group">
        <div class="field-label">カテゴリー</div>
        <div class="category-tags">
          <label class="tag" >ファッション</label>
          <label class="tag" >家電</label>
          <label class="tag" >インテリア</label>
          <label class="tag" >レディース</label>
          <label class="tag" >メンズ</label>
          <label class="tag" >コスメ</label>
          <label class="tag" >本</label>
          <label class="tag" >ゲーム</label>
          <label class="tag" >スポーツ</label>
          <label class="tag" >キッチン</label>
          <label class="tag" >ハンドメイド</label>
          <label class="tag" >アクセサリー</label>
          <label class="tag" >おもちゃ</label>
          <label class="tag" >ベビー・キッズ</label>
        </div>
      </div>

      <!-- Condition -->
      <div class="field-group" style="margin-top: 20px;">
        <div class="field-label">商品の状態</div>
        <div class="select-wrapper">
          <select class="select-field" name="status">
            <option value="0" disabled selected>選択してください</option>
            <option value="1">良好</option>
            <option value="2">目立った傷や汚れなし</option>
            <option value="3">やや傷や汚れあり</option>
            <option value="4">状態が悪い</option>
          </select>
          <span class="select-arrow">▼</span>
        </div>
      </div>
      <div id="selected-tags">
      </div>

      <!-- Name & Description -->
    <div class="section">
      <div style="margin-bottom: 5px;" class="section-title">商品名と説明</div>

      <div class="field-group">
        <div class="field-label">商品名</div>
        <input type="text" name="name" class="input-field" placeholder="">
      </div>

      <div class="field-group">
        <div class="field-label">ブランド名</div>
        <input type="text" name="brand_name" class="input-field" placeholder="">
      </div>

      <div class="field-group">
        <div class="field-label">商品の説明</div>
        <textarea class="input-field" name="explanation" placeholder=""></textarea>
      </div>

      <div class="field-group">
        <div class="field-label">販売価格</div>
        <div class="price-wrapper">
          <span class="price-prefix">¥</span>
          <input type="number" name="price" class="input-field price-input" placeholder="">
        </div>
      </div>
    </div>

    <!-- Submit -->
    <div class="submit-section">
      <button type="submit" class="submit-btn">出品する</button>
    </div>
  </form>
</div>
<script>
    const selectedTags = new Set();

    document.querySelectorAll('.tag').forEach(button => {
        button.addEventListener('click', function () {
            const value = this.dataset.value;

            if (selectedTags.has(value)) {
                // 選択解除
                selectedTags.delete(value);
                this.classList.remove('active');
            } else {
                // 選択
                selectedTags.add(value);
                this.classList.add('active');
            }

            // hiddenInputを更新
            updateHiddenInputs();
        });
    });

    function updateHiddenInputs() {
        const container = document.getElementById('selected-tags');
        container.innerHTML = '';

        selectedTags.forEach(tag => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'tags[]';
            input.value = tag;
            container.appendChild(input);
        });
    }
</script>

@endsection
