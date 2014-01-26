@extends('layout.main')

@section('content')

	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">

	        @if($errors->count() > 0)
	         <div class="alert alert-danger">
		        @foreach($errors->all() as $error)
		        	<li>{{$error}}</li>
		        @endforeach
			</div>
			@endif
	            <div class="account-wall">
	                <form class="form-signin" action="{{ URL::route('account-create')}}" method="post">
	                <input type="text" class="form-control" placeholder="Email" name="email" {{  Input::old('email') ? ' value="' . Input::old('email') . '"' : '' }}>
	                <input type="password" class="form-control" placeholder="Password" name="password">
	                <button class="btn btn-lg btn-primary btn-block" type="submit">
	                    Create Account</button>

	                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
	                		{{ Form::token() }}
	                </form>
	            </div>
	            <a href="{{ URL::route('home') }}" class="text-center new-account">Already have an account - login </a>
	        </div>
	    </div>
	</div>



@stop