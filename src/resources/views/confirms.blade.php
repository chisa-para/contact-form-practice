@extends('layouts.app')
<link rel="stylesheet" href="css/comfirms.css">

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<main>
 <div class = "main-title">
  <h1 class = "main-title-text">お問い合わせ確認<h1>
 </div>

<div class = "1">
 <div>
  <table>
   <tr>
    <th>名前</th> <td></td> 
   </tr>
   <tr>
    <th>メールアドレス</th> <td></td>
   </tr>
   <tr>
    <th>お問い合わせ内容</th> <td></td>
   </tr>
  </table>
 </div>
 </form>
</div>
</main>
@endsection