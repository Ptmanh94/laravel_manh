<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Nectaria - Free HTML Template by WowThemes.net</title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="assets/css/screen.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="post-template page-template page">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
	<a class="blog-logo" href="index.html"><img src="assets/img/logo.png" alt="Fashion Critiques"/></a>
	<ul id="menu">
		<li class="nav-home nav-current" role="presentation"><a href="index.html">Home</a></li>
		<li class="nav-article-example" role="presentation"><a href="article.html">Post Example</a></li>
		<li class="nav-about-us" role="presentation"><a href="about.html">Page Example</a></li>
		<li class="nav-author-page" role="presentation"><a href="author.html">Author Page</a></li>
		<span class="socialheader">
		<a href="#"><span class='symbol'>circletwitterbird</span></a>
		<a href="#"><span class='symbol'>circlefacebook</span></a>
		<a href="#"><span class='symbol'>circlegoogleplus</span></a>
		<a href="mailto:wowthemesnet@gmail.com"><span class='symbol'>circleemail</span></a>
		</span>
	</ul>
	</nav>
	<header class="main-header post-head " style="background-image: url(http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/10/10174958/fas-compressor.jpg)">
	<div class="vertical">
		<div class="main-header-content inner">
			<h1 class="post-title">About Me</h1>
		</div>
	</div>
	</header>
	<main class="content" role="main">
	
		<div class="d-flex justify-content-end">
		<form action="" method="GET">
			<input type="text" class="form-control" name="Search" placeholder="Search ..."/>
			<button onclick="SearchFunction()">Do Search</button>
		</form>
		</div>
	<hr>
	<section class="post-content">
	@foreach($posts as $post)
	<section>
		<h3>User Information</h3>
	<div class="post-preview">
		<a href="{{ $post->slug }}">
			<h4 class="post-title">
				{{ $post->title }}
			</h4>
			<h5 class="sub-title">
				{{ substr($post->content,0,50) }}
			</h5>
		</a>
		<p class="post-meta">Posted by
			<a href="#">Start boostrap</a> {{ $post->created_at }}</p>	
	</div>
	</section>
	<hr>
	@endforeach
	@if($posts->hasMorePages())
	<div class="clearfix">
		<a href="{{ $posts->nextPageUrl() }}">Next Page</a>
	</div>
	@endif
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>