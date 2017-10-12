@extends('layouts.app')

@section('content')
  	<header id="masthead" class="top-header" role="banner">
		<h1 class="top-title"><a href="//www.kuruma-kinokawa.jp/ku-pit/" rel="home">
			<img src="common/image/kupito_logo_L.png" alt="熊井自動車クーピットロゴ"  />
			</a>
		</h1>

		<div class="top-branding">
			<p class="top-description"><!---サイト説明--->
				お車の整備・相談・レンタル予約なら <br class="hidden-lg hidden-md hidden-sm"/>［和歌山県紀の川市］熊井自動車へ
			</p>
					        <ul class="row top__member_link">
					            <li class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
					                <a href="//www.kuruma-kinokawa.jp/common/test/entry/">
					                    <img src="common/image/head_button1L.png" alt="新規会員登録" width="auto">
					                </a>
					            </li>
					            <li class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
					                <a href="//www.kuruma-kinokawa.jp/common/test/login/">
					                    <img src="common/image/head_button1L_1.png" alt="ログイン" width="auto">
					                </a>
					            </li>
					        </ul>
	</header><!-- #masthead -->

	<div class="top__contents">
		<article>
			<div class="top__main row">
				<div class="col-lg-4 col-md-4 col-md-4 col-sm-12 top__button">
					<a href="//www.kuruma-kinokawa.jp/kupitcms/service/"><img src="common/image/top_button1.png" alt="整備予約" width="auto" height="auto" /></a>
				</div>
				<div class="col-lg-4 col-md-4 col-md-4 col-sm-12 top__button">
					<a href="common/"><img src="common/image/top_button2.png" alt="商談予約" width="auto" height="auto" /></a>
				</div>
				<div class="col-lg-4 col-md-4 col-md-4 col-sm-12 top__button">
					<a href="common/"><img src="common/image/top_button3.png" alt="レンタカー予約" width="auto" height="auto" /></a>
				</div>
			</div>


		</article>
	</div><!-- .top__contents -->

	<footer class="top__footer">
		<p>熊井グループは、お客様の待ち時間を軽減し、より快適にご利用いただけるよう、<br />
来店のご予約サービスを提供しております。<br />
ご予約なしでのご来店も大歓迎ですが、事前にご来店予約をいただくとスムーズなご案内が可能です。<br />
予約後、ご都合でご来店ができない場合は、キャンセルのお電話をお願いいたします。</p>

		<p class="copyright">© 有限会社熊井自動車 all rights reserved.</p>
	</footer>

@endsection
