@extends('adminMaster')
@section('title', 'Admin Login')

<div class="container col-md-6 col-md-offset-3">

	@if(isset(Auth::User()->email))
	<script > window.location="/admin/adminDashboard";</script>
@endif

@if($message=Session::get('error'))
<div class="alert alert-danger alert-block">
	
	<button type="button"  class="close" data-dismiss="alert">x</button>
	<strong>{{$message}}</strong>
</div>
@endif
@if(count($errors)>0)
<div class="alert alert-danger">
	
	<ul>
	@foreach ($errors->all() as $error)
	<li>
		{{$error}}
	</li>
	@endforeach
	</ul>
</div>
@endif
<div class="well well bs-component">
<form class="form-horizontal" method="post" action="{{url('/admin/checklogin')}}">


{!! csrf_field() !!}
<fieldset>
<legend>Admin Login</legend>
<div class="form-group input-group">
    <label for="email" class="col-lg-2 control-label"></label>
<div class="col-lg-10">
 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>     
<input type="email" class="form-control" id="email" name="email" placeholder="User ID"/value="{{ old('email') }}">
</div>
</div>
<div class="form-group input-group">
<label for="password" class="col-lg-2 control-label"></label>
<div class="col-lg-10">
 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input type="password" class="form-control" name="password" placeholder="Password">
</div>
</div>

<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="submit" class="btn btn-primary">Login</button>
</div>
</div>
</fieldset>
</form>
</div>
</div>
