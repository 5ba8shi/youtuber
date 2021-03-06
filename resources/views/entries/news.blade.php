@extends('layouts.app')

@section('content')
  <div id="news" class="big-bg">
    @component('components.header')
    @endcomponent
    <div class="wrapper">
      <h2 class="page-title">News</h2>
    </div><!-- /.wrapper -->
  </div><!-- /#news -->

  <div class="news-contents wrapper">
    <article>
      <header class="post-info">
          <h2 class="post-title">店内ギャラリーの絵が新しくなりました</h2>
          <p class="post-date">3/30 <span>2019</span></p>
          <p class="post-cat">カテゴリー：お店の紹介</p>
      </header>
      <img src="img/wall.jpg" alt="店内の様子">
      <p>
          体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
          おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
          体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
          おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
      </p>
      <p>
          体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
          おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
          体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
          おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
          体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
          おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
      </p>
      <p>体に優しい自然食を提供する、WCB CAFE。</p>
    </article>

    <aside>
      <h3 class="sub-title">カテゴリー</h3>
      <ul class="sub-menu">
        <li><a href="#">お店の紹介</a></li>
        <li><a href="#">期間限定メニュー</a></li>
        <li><a href="#">イベント</a></li>
        <li><a href="#">お客様との会話</a></li>
      </ul>

      <h3 class="sub-title">このお店について</h3>
      <p>
          体に優しい自然食を提供する、WCB CAFE。無添加の食材を利用したメニューが特徴です。
          おいしいブレンドコーヒーとヘルシーなオーガニックフードで体の内側から癒やされてください。
      </p>
    </aside>
  </div><!-- /.news-contents -->
  <footer>
    <div class="wrapper">
      <p><small>&copy; 2019 Manabox</small></p>
    </div>
  </footer>
@endsection

