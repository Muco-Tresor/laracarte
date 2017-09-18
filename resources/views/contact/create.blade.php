@extends('layouts.base')


@section('content')
    
    <div class="container">
    	<h2>Get In Touch</h2>
    	<p>If you having trouble with this service please <a href="mailto:mucyotreasure@gmail.com">ask for help</a> </p>

    	<div class="row">
    		<div class="col l9 m9 s12">
    			<div class="card-panel">
    				<div class="card-content">
    					<form action="#" method="POST">
    						{{-- name field --}}
    						<div class="input-field">
    							<label for="name">Name</label>
    							<input type="text" name="name" id="name" required="required">
    						</div>
							
							{{-- email field --}}
    						<div class="input-field">
    							<label for="email">Email</label>
    							<input type="email" name="email" id="email" required="required">
    						</div>
							
							{{-- message field --}}
    						<div class="input-field">
    							<label for="message">Message</label>
    							<textarea name="message" id="message" class="materialize-textarea"></textarea>
    						</div>

    						<input type="submit" value="Submit Enquiry &raquo;" class="btn light-blue">
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>    
@stop