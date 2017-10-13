  	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="header-logo">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!---ヘッダー上部左側-->
						<h1 class="site-title"><a href="/" rel="home"><img src="{{ asset('/image/kupit_logo_s.png') }}" alt="熊井自動車ロゴ"  /></a></h1>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><!--ヘッダー右側-->
						<p class="site-description"><!---サイト説明--->
							お車の整備・相談・レンタル予約なら［和歌山県紀の川市］熊井自動車へ
						</p>
					        <ul class="member_link">
					        <!--ログインしているか-->
					        @if (Auth::check())
					            <li style="margin-left:10px;">
					            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					            		ようこそ{{ Auth::user()->name }} 様<span class="caret"></span>
					            	</a>
					            </li>
					            <li><a href={!! link_to_route('users.show', 'マイページ') !!}</li>
					            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
					      	@else
					            <li style="margin-left:10px;">
					            	<a href="{!! route('signup.get') !!}"><img src="{{ asset('/image/head_button1.png') }}" alt="新規会員登録"></a>
					            </li>
					            <li>
					                	<a href="{!! route('login.get') !!}"><img src="{{ asset('/image/head_button1_1.png') }}" alt="ログイン"></a>
					            </li>
					       @endif
					        </ul>

					</div><!--/ヘッダー右側-->
				</div><!-- .row -->
		</div><!-- .header-logo -->
		</div><!-- .site-branding -->
		<div class="headermenu">
		<div class="nav">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<ul class="nav-menu">
				<li class="letter3"><a href="/">ホーム</a></li>
                <li class="letter4"><a href="/">整備予約</a></li>
                <li class="letter5"><a href="/">ご相談予約</a></li>
        		<li class="letter7"><a href="/">レンタカー予約</a></li>
        		<li class="letter5"><a href="/">ご利用案内</a></li>
        		<li class="letter10"><a href="/">熊井グループについて</a></li>
        		<li class="letter6"><a href="/">お問い合わせ</a></li>
        	</ul>
		</nav>
		</div>
		</div>
	</header>
