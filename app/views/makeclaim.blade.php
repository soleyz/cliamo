
<!-- Fifth (Sign up) section -->
@extends('index')

@section('body')
<form action="{{ URL::to('makeclaim') }}" method="POST">					
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
												<font size = "4">Incident driver</font>
												</span>
												</td>
												<td><input type="text" name="incidentdriver" required ></td>
											</tr>
											<tr>
												<td width="200">
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Incident driver Age</font>
												</span>
												</td>
												<td><input type="text" name="incidentdriverage" required></td>
											</tr>
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


