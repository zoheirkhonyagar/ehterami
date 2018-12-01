<!DOCTYPE html>
<html class="wide wow-animation" lang="fa">

<head>
	<!-- Site Title-->
	<title>کانون آگهی و تبلیغات احترامی</title>
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<!-- Stylesheets-->
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="نسخه مرورگر شما قدیمی است! برای مرور بهتر و امن تر اینترنت، مرورگر خود را به روز رسانی نمایید."></a></div>
    <script src="js/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Page Loader-->
	<div id="page-loader">
		<div class="page-loader-logo">
			<div class="brand">
				<div class="brand__name"><img src="images/logo.png" alt="" width="135" height="47">
				</div>
			</div>
		</div>
		<div class="page-loader-body">
			<div id="loadingProgressG">
				<div class="loadingProgressG" id="loadingProgressG_1"></div>
			</div>
		</div>
	</div>
	
	<!-- Page-->
	<div class="page">
		<!-- Page content-->
		<div class="section section-single">
			<div class="section-single__inner">
				<div class="section-single__header">
					<div class="shell">
						<!-- Brand-->
						<a class="brand" href="{{ route('main-index') }}">
							<div class="brand__name"> <img src="images/logo.png" alt="کانون آگهی و تبلیغات احترامی" width="135" height="47">
							</div>
						</a>
					</div>
				</div>
				<div class="section-single__main">
					<div class="shell">
						<h3>بزودی بازمیگردیم</h3>
						<div class="countdown-wrap">
							<div class="DateCountdown" data-type="until" data-date="2019-02-31 12:15:00" data-format="wdhms" data-color="#288e90" data-bg="rgba(255, 255, 255, 1)" data-width="0.02"></div>
						</div>
						<p style="max-width: 450px;display: none;">من تنها یک چیز می‌دانم و آن اینکه هیچ نمی‌دانم. (سقراط)</p>
						<div class="rd-mailform-wrap" style="display:none">
							<form class="rd-mailform rd-mailform_inline rd-mailform_inline-centered" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="">
								<div class="form-wrap">
									<input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required" dir="ltr">
									<label class="form-label" for="subscribe-form-email">ایمیل</label>
								</div>
								<button class="button button-primary" type="submit">اشتراک</button>
							</form>
						</div>
					</div>
				</div>
				<div class="section-single__footer">
					<div class="shell">
						<p class="rights">
								تمامی حقوق برای 
							<a href="{{ route('main-index') }}" style="color:#168d89;">کانون آگهی و تبلیغات احترامی</a>
							محفوظ میباشد .
						</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Global Mailform Output-->
	<div class="snackbars" id="form-output-global"></div>
	<!-- Javascript-->
	<script src="js/core.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>