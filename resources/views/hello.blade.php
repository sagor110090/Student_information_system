@extends('layout/master')

@section('index')
    
<div class="container con">
  <div class="row">
  <form action="/action_page.php" class="col-xs-12 col-sm-12 col-md-12">
  <h2>Registration form</h2>
  <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Enter Name *" name="name" required>
    </div>
	
	<div class="form-group">
      <input type="text" class="form-control" id="surname" placeholder="Enter Second Name *" name="secondName" required>
    </div>
	
    	<div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email *" name="email" required>
    </div>
	<div class="form-group">
      <input type="password" class="form-control" id="pwd1" placeholder="Enter password *" name="pwd" required>
   </div>
   <div class="form-group">
      <input type="password" class="form-control" id="pwd2" placeholder="Repeat password *" name="Rptpwd" required>
   </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> <span>Remember me</span></label>
    </div>
    <button type="submit" class="btn btn-success">Submit <i class="glyphicon glyphicon-send"></i></button>
  </form>
  </div>
</div>
@endsection