@extends('layouts.base')


@section('content')
    
    <div class="container">
    	<h2>What is Laracarte</h2>
    	<p>
    		Laracarte is a clone app of <a href="http://laracarte.herokuapp.com/">LaracarteTDN</a>
    	</p>

    	<div class="row">
    		<div class="col m6">
    			<p class="alert-warning">
    				<strong>
    					<i class="fa fa-warning"></i>This app has been built by Muco Tresor for learning purpose
    				</strong>
    			</p>
    		</div>
    	</div>

    	<p>
    		Feel free to help to improve the <a href="https://github.com/Muco-Tresor">source code</a> 
    	</p>

    	<hr>

    	<h2>What is LaracarteTDN</h2>
    	<p>LaracarteTDN is the website by which Laracarte was inspired 😍 </p>
    	<p>More info <a href="http://laracarte.herokuapp.com/">here</a></p>

    	<hr>

    	<h2>Which tools and services are used in Laracarte</h2>
    	<p>
    		Basically it's built on Laravel &amp; MaterializeCSS. But there's a bunch of services used for email and other sections
    	</p>

    	<ul>
    		<li>Laravel</li>
    		<li>Materializecss</li>
    		<li>Amazon S3</li>
    		<li>Mandrill</li>
    		<li>Google Maps</li>
    		<li>Gravatar</li>
    		<li>Antony Martin's Geolocation Package</li>
    		<li>Michel Fortin's Markdown Parser Package</li>
    		<li>Heroku</li>
    	</ul>
    </div>
@stop