@extends('layouts.app')

@section('content')
  <div id="contact" class="big-bg">
    @component('components.header')
    @endcomponent
    <div class="wrapper">
      <h2 class="page-title">内容確認</h2>
      <form method="POST" action="{{ route('contacts.send') }}">
        @csrf

        <div>
          <label for="name">お名前</label>
          {{ $inputs['name'] }}
          <input id="name" name="name" value="{{ $inputs['name'] }}" type="hidden">
        </div>
        
        <div>
          <label for="email">メールアドレス</label>
          {{ $inputs['email'] }}
          <input id="email" name="email" value="{{ $inputs['email'] }}" type="hidden">
        </div>

        <div>
          <label for="message">メッセージ</label>
          {!! nl2br(e($inputs['body'])) !!}
          <input id="message" name="body" value="{{ $inputs['body'] }}" type="hidden">
        </div>

        <button  class="button" name="action" value="back">
          入力内容修正
        </button>

        <button type="submit" class="button" name="action" value="submit">
          送信する
        </button>
      </form>
    </div><!-- /.wrapper -->
  </div><!-- /#contact -->

  <footer>
    <div class="wrapper">
      <p><small>&copy; 2019 Manabox</small></p>
    </div>
  </footer>
@endsection

