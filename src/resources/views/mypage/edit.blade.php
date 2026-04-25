@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form__content">
  <div class="register-form__heading">
    <h1>プロフィール設定</h1>
  </div>
  <!-- <form class="form"> -->
  <form class="form" action="/mypage/profile/update" method="POST">
  @csrf
  <div style="display: flex; align-items: center; gap: 16px;">
  <!-- プレビュー円 -->
  <div id="preview-circle" style="
    width: 80px; height: 80px;
    border-radius: 50%;
    background: #e0e0e0;
    overflow: hidden;
    display: flex; align-items: center; justify-content: center;
  ">

  </div>

  <!-- ボタン -->
  <label for="profile_image" style="
    padding: 4px 16px;
    border: 1px solid #ccc;
    border-radius: 6px;
    border-color: #FF0000;
    cursor: pointer;
    font-size: 14px;
    color: #FF0000;
  ">
    画像を選択する
  </label>
  <input type="file" id="profile_image" name="profile_image"
         accept="image/*" style="display: none;">
</div>
    <div class="form__group" style="margin-top: 40px;">
      <div class="form__group-title">
        <span class="form__label--item">ユーザー名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">郵便番号</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="postal_code" name="postal_code" value="{{ old('postal_code') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" value="{{ old('address') }}"/>
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" value="{{ old('building') }}"/>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">更新する</button>
    </div>
  </form>
</div>
@endsection
