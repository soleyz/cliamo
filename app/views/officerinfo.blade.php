
<!-- Third (User Info) section -->
@extends('index')

@section('body')


@if (!Auth::guest())

<div class="container">

	<h2 class="text-center title">Information</h2>

	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-primary " >
				<div class="panel-heading text-center">User Information</div>
				<div class="panel-body ">
					<table class="table table-striped">
						<tr>
							<th>First Name</th>
							<td><?php echo Auth::User()->firstname; ?></td>
						</tr>
						<tr>
							<th>Last Name</th>
							<td><?php echo Auth::User()->lastname; ?></td>
						</tr>
						<tr>
							<th>Phone Number</th>
							<td><?php echo Auth::User()->phonenumber; ?></td>
						</tr>
						<tr>
							<th>Gender</th>
							<td><?php echo Auth::User()->gender;  ?></td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td><?php echo Auth::User()->email;  ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
 </div>
 @else

 <div class="container">
   <h2 class="text-center title">User Info</h2>
   <p class="lead text-center">
    Please Sign-in <a href="{{ URL::to('signin') }}">Click Here</a><br>
    <!--their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!-->
  </p>
  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
     <div class="panel panel-primary " >
      <div class="panel-heading text-center">User Information</div>
      <div class="panel-body ">
       <table class="table table-striped">
        <tr>
         <th>Name</th>
         <td></td>
       </tr>
       <tr>
         <th>Age</th>
         <td></td>
       </tr>
       <tr>
         <th>Weight</th>
         <td></td>
       </tr>
       <tr>
         <th>Hieght</th>
         <td></td>
       </tr>
       <tr>
         <th>Gender</th>
         <td></td>
       </tr>
     </table>
   </div>
 </div>
</div>
<div class="col-sm-4">
 <div class="panel panel-primary " >
  <div class="panel-heading text-center">Calulation</div>
  <div class="panel-body ">
   <p>Your calories for a day</p> 
   <div class="alert alert-success text-center" role="alert"><p>Calories</p></div>
   <div class="panel panel-primary " >
    <div class="panel-heading text-center">Disease from food related</div>
    <div class="panel-body ">
     <table class="table table-striped">
      <tr>
       <p>Your calories for a day</p> 
     </tr>
     <tr>
       <th>Disease</th>
       <th>Food</th>
     </tr>
     <tr>
       <td></td>
       <td></td>
     </tr>
   </table>
 </div>
</div>
</div>									
</div>
</div>
</div>
</div>
@endif
<!--<?php if (!Auth::guest()):?>-->
<!--<?php else:?>-->
<!--<?php endif; ?>-->
@stop