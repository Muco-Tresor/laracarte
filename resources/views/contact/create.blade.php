@extends('layouts.base')


@section('content')
    
    <div class="container">
    	<h2>Get In Touch</h2>
    	<p>If you having trouble with this service please <a href="mailto:{{config('laracrte.admin_support_email')}}">ask for help</a> </p>

    	<div class="row">
    		<div class="col l9 m9 s12">
    			<div class="card-panel">
    				<div class="card-content">
    					<form action="{{ route('post_contact_path') }}" method="POST" novalidate>
    						{{-- name field --}}
                            {{ csrf_field() }}
    						<div class="input-field">
    							<label for="name">Name</label>
    							<input type="text" name="name" id="name" required="required" class="{{ $errors->has('name') ? 'invalid' : '' }}" value="{{ old('name') }}">

                                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    						</div>
							
							{{-- email field --}}
    						<div class="input-field">
    							<label for="email">Email</label>
    							<input type="email" name="email" id="email" required="required" class="{{ $errors->has('email') ? 'invalid' : '' }}" value="{{ old('email') }}">
                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
    						</div>
							
							{{-- message field --}}
    						<div class="input-field">
    							<label for="message">Message</label>
    							<textarea name="message" id="message" class="materialize-textarea {{ $errors->has('name') ? 'invalid' : '' }}">{{ old('message') }}</textarea>
                                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
    						</div>

    						<input type="submit" value="Submit Enquiry &raquo;" class="btn light-blue">
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>    
@stop