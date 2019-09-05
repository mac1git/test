<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>G2 blog</title>
        <!-- ① CSS を追加 -->
        <link rel="stylesheet" href="/css/app.css">
 
        <!-- ② JavaScript を追加 -->
        <script src="/js/app.js" defer></script>
</head>
    <body>
    {{-- ナビゲーションバーの Partial を使用 --}}
    @include('navbar')
 
    <div class="container">
        @if (Session::has('flash_message'))
            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif
 
        @yield('content')
    </div>
    </body>
</html>
