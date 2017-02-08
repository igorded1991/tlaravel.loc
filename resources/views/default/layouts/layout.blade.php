<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>{{ $title }}</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://bootstrap/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	
  @section('navbar')
	<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel Project:</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          @section('navActive')
          <li class="active"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('articles') }}">Articles</a></li>
          <li><a href="{{ route('article',array('id'=>10)) }}">Article</a></li>
          @show
        </ul>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>
  @show

  @section('header')
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1>{{ $title }}</h1>
      <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
  </div>
  @show

 	<div class="container">
    <!-- Example row of columns -->
    <div class="row">
    
      <div class="col-md-3">
        @section('sidebar')
      	<div class="sidebar-module">
          <h2>Archives</h2>
          <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
          </ol>
        </div>
        @show
      </div>
    	
      @yield('content')
    </div>

    <hr>

    <footer>
      <p>&copy; 2015 Company, Inc.</p>
    </footer>
  </div>
  </body>
</html>