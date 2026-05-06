@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
<div class="container">
  <div class="form-container">
    <h1>住所の変更</h1>

    <div class="form-group">
      <label for="postal-code">郵便番号</label>
      <input type="text" id="postal-code" name="postal-code" placeholder="">
    </div>

    <div class="form-group">
      <label for="address">住所</label>
      <input type="text" id="address" name="address" placeholder="">
    </div>

    <div class="form-group">
      <label for="building">建物名</label>
      <input type="text" id="building" name="building" placeholder="">
    </div>

    <button class="btn-submit" type="button">更新する</button>
  </div>
</div>
@endsection
