
<!-- Fifth (Sign up) section -->
@extends('index')

@section('body')
<form action="{{ URL::to('register') }}" method="POST">					
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 ">	

				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="text-center title">Sign Up</h1>
				<h2 class="text-center title">Free</h2>

				<!-- Short introductory (optional) -->
				<div class = "thumbnail">
								<table class="table table-bordered">
										<form>
											<tr>
												<td width="200">
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Username</font>
												</span>
												</td>
												<td><input type="text" name="username" required ></td>
											</tr>
											<tr>
												<td width="200">
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">First Name</font>
												</span>
												</td>
												<td><input type="text" name="firstname" required></td>
											</tr>
											<tr>
												<td width="200">
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Last Name</font>
												</span>
												</td>
												<td><input type="text" name="lastname" required></td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Address</font>
												</span>
												</td>
												<td><input type="text" name="address" required> years</td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Phonenumber</font>
												</span>
												</td>
												<td><input type="text" name="phonenumber" required> years</td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Longtitude</font>
												</span>
												</td>
												<td><input type="number" step="0.01" name="longtitude" required> cm</td>
											</tr>
											<tr >
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Latitude</font>
												</span>
												</td>
												<td><input type="number" step="0.01" name="latitude" required> kg</td>
											</tr>
											<tr >
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Gender</font>
												</span>
												</td>										
												<td><input type="radio" checked name ="gender" value="Male"> Male<br>
													<input type="radio" name ="gender" value="Female"> Female<br>
												</td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">platenumber1</font>
												</span>
												</td>
												<td><input type="text" name="platenumpart1" required> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">platenumber2</font>
												</span>
												</td>
												<td><input type="text" name="platenumpart2" required> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">platenumber3</font>
												</span>
												</td>
												<td><input type="text" name="platenumpart3" required> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">checktype</font>
												</span>
												</td>
												<td><input type="number" name="checktype" required> </td>
											</tr>
											<tr>
												<div class="form-group">
												    <td>
													<span class="label label-info" style=" width:100%; display:block;">
													<font size = "4">E-mail Address</font>
													</span>
													</td>		
												    <td><input type="email" name ="email"class="form-control" placeholder="Enter email" required></td>
												</div>
											</tr>
											<tr>
												<div class="form-group">
												    <td>
													<span class="label label-info" style=" width:100%; display:block;">
													<font size = "4">Password</font>
													</span>
													</td>		
												    <td><input type="password" name ="password" class="form-control" placeholder="Password" required></td>
												</div>
											</tr>
											<tr>
												<td>
													<span class="label label-info" style=" width:100%; display:block;">
													<font size = "4">Submit</font>
													</span>
												</td>		
												<td>
													<input buttom class = "btn btn-warning" type="submit" href="home" Submit value="Submit">
													</buttom>

												</td>
											</tr>
										</form>
								</table>
							</div>
					</div>
			</div> <!-- /col -->
		</div> <!-- /row -->
	</div>
</form>
@stop


