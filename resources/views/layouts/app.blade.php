<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>「クーピット」予約フォーム &#8211; 紀の川市で車のメンテナンスのことなら熊井自動車</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('/css/mystyle.css') }}" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <body>
        <div class="site container_fuild">
        @include('commons.navbar')
        
        <div class="site-content">
            <div id="primary" class="content-area">
		    <main id="main" class="site-main">
            @include('commons.error_messages')
            
            @yield('content')
            </div>
            </main> 
        </div><!---.site-content--->
        @include('commons.footer')
        </div><!---.site--->
    </body>
</html>

