@extends('default.layouts.layout')

@section('navbar')
	@parent
	@section('navActive')
		<li><a href="<?php echo route('home'); ?>">Home</a></li>
		<li><a href="<?php echo route('about'); ?>">About</a></li>
		<li><a href="<?php echo route('articles'); ?>">Articles</a></li>
		<li><a href="<?php echo route('article',array('id'=>10)); ?>">Article</a></li>
		<li class="active"><a href="<?php echo route('contact'); ?>">Contact</a></li>
	@endsection
@endsection

@section('content')

<div class="col-md-9">

	<pre>{{ print_r(Session::all()) }}</pre>
	
	<div class="">
		<h2>Contact us!</h2>
    </div>

	<p>
	This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
	</p>

	<form method="post" action="{{ route('contact',array('name'=>'hello')) }}">
		{!! csrf_field() !!}
	  <div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Jane Doe">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="email" class="form-control" id="email" value="{{ old('email') }}" name="email" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="site">Site</label>
	    <input type="text" class="form-control" id="site" value="{{ old('site') }}" name="site" placeholder="Site">
	  </div>
	  <div class="form-group">
	    <label for="text">Text</label>
	    <textarea class="form-control" id="text" name="text" rows="3">{{ old('text') }}</textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>	
@endsection