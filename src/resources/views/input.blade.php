@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@endsection

@section('content')
<main>
 <div class = "main-title">
  <h1 class = "main-title-text">お問い合わせ<h1>
 </div>

<form class = "main-form" action= method=>
   <div class = "main-form-content">
      <label for = 'name'>お名前</label>
      <input type="text" name="name" id = 'name'>
   </div>
   <div class = "main-form-content">
      <label for = 'mail'>メールアドレス</label>
      <input type="text" name="mail" id = 'mail'>
   </div>
   <div class = "main-form-content">
      <label for = 'tel'>電話番号</label>
      <input type="text" name="tel" id = 'tel'>
   </div>
   <div class = "main-form-content">
      <label for = 'text'>お問い合わせ内容</label>
      <textarea name="text" cols=50 rows=10 id = 'text'></textarea>
   </div>
   <div class = "main-form-button">
      <input type="submit">
   </div>
   
</form>

</main>
@endsection