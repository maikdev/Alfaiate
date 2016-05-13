<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US">
<!--<![endif]-->

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{!! $title !!}</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="google-site-verification"
	content="" />
<link rel="icon" href="{!! asset('favicon.ico') !!}" />

<link rel='stylesheet' id='rs-plugin-settings-css'
	href="{!! asset('/css/renew/settings.css?ver=4.6.93') !!}"
	type='text/css' media='all' />

@yield('style_plugin')

<link rel='stylesheet' id='x-fa-icon-classes-css'
	href="{!! asset('/css/thecss.css') !!}"
	type='text/css' media='all' />

<link rel='stylesheet' id='x-fa-icon-classes-css'
	href="{!! asset('/css/renew/fa-icon-classes.css?ver=1.0.3') !!}"
	type='text/css' media='all' />
<link rel='stylesheet' id='x-demos-stacks-css'
	href="{!! asset('/css/renew/style.css') !!}" type='text/css'
	media='screen' />

<script type='text/javascript'
	src="{!! asset('/js/renew/jquery.js?ver=1.11.2') !!}"></script>
<script type='text/javascript'
	src="{!! asset('/js/renew/jquery-migrate.min.js?ver=1.2.1') !!}"></script>
<script type='text/javascript'
	src="{!! asset('/js/renew/jquery.themepunch.tools.min.js?ver=4.6.93') !!}"></script>
<script type='text/javascript'
	src="{!! asset('/js/renew/jquery.themepunch.revolution.min.js?ver=4.6.93') !!}"></script>
<script type='text/javascript'
	src="{!! asset('/js/renew/x-head.min.js?ver=4.0.4') !!}"></script>
<script type='text/javascript'
	src="{!! asset('/js/renew/cs-head.min.js?ver=1.0.3') !!}"></script>

<link rel='canonical' href='http://www.rodafresh.com' />
<link rel='shortlink' href='http://www.rodafresh.com' />


<meta property="og:site_name" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:url" content="">

@yield('style_custom')
</head>
<body
	class="home page page-id-3034 page-template page-template-template-blank-4 page-template-template-blank-4-php custom-background x-renew x-navbar-fixed-top-active x-one-page-navigation-active x-full-width-layout-active x-content-sidebar-active x-v4_0_4 cornerstone-v1_0_3">


	@yield('top_site')


	<script type='text/javascript'
		src="{!! asset('/js/renew/jquery.form.min.js?ver=3.51.0-2014.06.20') !!}"></script>
	
	<script type='text/javascript'
		src="{!! asset('/js/renew/scripts.js?ver=4.1.2') !!}"></script>
	<script type='text/javascript'
		src="{!! asset('/js/renew/x-body.min.js?ver=4.0.4') !!}"></script>
	<script type='text/javascript'
		src="{!! asset('/js/renew/comment-reply.min.js?ver=4.2.2') !!}"></script>
	<script type='text/javascript'
		src="{!! asset('/js/renew/cs-body.min.js?ver=1.0.3') !!}"></script>

	@yield('script_final')





</body>
</html>