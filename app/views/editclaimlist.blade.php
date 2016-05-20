
<!-- Fifth (Sign up) section -->
@extends('index')

@section('body')
@if (!Auth::guest())
<form action="{{  $claim->id}}" method="POST">					
	<div class="container">
		<h2 class="text-center title">Edit Claim</h2>
		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 ">	



				<!-- Short introductory (optional) -->
				<div class = "thumbnail">
								<table class="table table-bordered">
											<input type="hidden" name="id" required value="<?php echo $claim->id; ?>">
											
											<tr>
												<td width="200">
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Incident Driver</font>
												</span>
												</td>
												<td><input type="text" name="incidentdriver"  value="<?php echo $claim->incidentdriver;//Claim::find($claim[$i]->id)->incidentdriver;?>"></td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Incident Driver Age</font>
												</span>
												</td>
												<td><input type="text" name="incidentdriverage"  value="<?php echo $claim->incidentdriverage; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Car Detail</font>
												</span>
												</td>
												<td><input type="text" name="cardetail"  value="<?php echo $claim->cardetail; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Insurance Holder</font>
												</span>
												</td>
												<td><input type="text" name="insuraceholder"  value="<?php echo $claim->insuraceholder; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Relationship To Policy Holder</font>
												</span>
												</td>
												<td><input type="text" name="relationshiptopolicyholder"  value="<?php echo $claim->relationshiptopolicyholder; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Cause Of Accident</font>
												</span>
												</td>
												<td><input type="text" name="causeofaccident"  value="<?php echo $claim->causeofaccident; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Incident Address</font>
												</span>
												</td>
												<td><input type="text" name="incidentaddress"  value="<?php echo $claim->incidentaddress; ?>"> </td>
											</tr>
											
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Incident Tel-No.</font>
												</span>
												</td>
												<td><input type="text" name="incidenttelnumber"  value="<?php echo $claim->incidenttelnumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Party At Fault</font>
												</span>
												</td>
												<td><input type="text" name="partyatfault"  value="<?php echo $claim->partyatfault; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Notification Number</font>
												</span>
												</td>
												<td><input type="text" name="notificationnumber"  value="<?php echo $claim->notificationnumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Claim Number</font>
												</span>
												</td>
												<td><input type="text" name="claimnumber"  value="<?php echo $claim->claimnumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Incident Driving License Number</font>
												</span>
												</td>
												<td><input type="text" name="incidentdrivinglicensenumber"  value="<?php echo $claim->incidentdrivinglicensenumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Issued At</font>
												</span>
												</td>
												<td><input type="text" name="issuedat"  value="<?php echo $claim->issuedat; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Issued Date</font>
												</span>
												</td>
												<td><input type="text" name="issueddate"  value="<?php echo $claim->issueddate; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Damage Of Vehicle</font>
												</span>
												</td>
												<td><input type="text" name="damageofvehicle"  value="<?php echo $claim->damageofvehicle; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Level Of Damage</font>
												</span>
												</td>
												<td><input type="text" name="levelofdamage"  value="<?php echo $claim->levelofdamage; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Owner Name</font>
												</span>
												</td>
												<td><input type="text" name="ownername"  value="<?php echo $claim->ownername; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Owner Telephone Number</font>
												</span>
												</td>
												<td><input type="text" name="ownertelephonenumber"  value="<?php echo $claim->ownertelephonenumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Owner Car Plate Number</font>
												</span>
												</td>
												<td><input type="text" name="ownercarplatenumber"  value="<?php echo $claim->ownercarplatenumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Owner Make and Model</font>
												</span>
												</td>
												<td><input type="text" name="ownermakeandmodel"  value="<?php echo $claim->ownermakeandmodel; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Owner Insurance</font>
												</span>
												</td>
												<td><input type="text" name="ownerinsurance"  value="<?php echo $claim->ownerinsurance; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Owner Insurance Type</font>
												</span>
												</td>
												<td><input type="text" name="ownerinsurancetype"  value="<?php echo $claim->ownerinsurancetype; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Policy Number</font>
												</span>
												</td>
												<td><input type="text" name="policynumber"  value="<?php echo $claim->policynumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver Name</font>
												</span>
												</td>
												<td><input type="text" name="drivername"  value="<?php echo $claim->drivername; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver Age</font>
												</span>
												</td>
												<td><input type="text" name="driverage"  value="<?php echo $claim->driverage; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Relation To Owner</font>
												</span>
												</td>
												<td><input type="text" name="relationtoowner"  value="<?php echo $claim->relationtoowner; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver Address</font>
												</span>
												</td>
												<td><input type="text" name="driveraddress"  value="<?php echo $claim->driveraddress; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver Tel-number</font>
												</span>
												</td>
												<td><input type="text" name="drivertelnumber"  value="<?php echo $claim->drivertelnumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver Driving License Number</font>
												</span>
												</td>
												<td><input type="text" name="driverdrivinglicensenumber"  value="<?php echo $claim->driverdrivinglicensenumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver License Issued At</font>
												</span>
												</td>
												<td><input type="text" name="driverlicenseissuedat"  value="<?php echo $claim->driverlicenseissuedat; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Driver License Issued Date</font>
												</span>
												</td>
												<td><input type="text" name="driverlicenseissueddate"  value="<?php echo $claim->driverlicenseissueddate; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Damage Of Third Party Vehicle</font>
												</span>
												</td>
												<td><input type="text" name="damageofthirdpartyvehicle"  value="<?php echo $claim->damageofthirdpartyvehicle; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Detail Of Injured And Decease</font>
												</span>
												</td>
												<td><input type="text" name="detailofinjuredanddecease"  value="<?php echo $claim->detailofinjuredanddecease; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Injured Detail</font>
												</span>
												</td>
												<td><input type="text" name="injureddetail"  value="<?php echo $claim->injureddetail; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Hospital</font>
												</span>
												</td>
												<td><input type="text" name="hospital"  value="<?php echo $claim->hospital; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Doctor Name</font>
												</span>
												</td>
												<td><input type="text" name="doctorname"  value="<?php echo $claim->doctorname; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Witness Name</font>
												</span>
												</td>
												<td><input type="text" name="witnessname"  value="<?php echo $claim->witnessname; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Witness Tel-Number</font>
												</span>
												</td>
												<td><input type="text" name="witnesstelnumber"  value="<?php echo $claim->witnesstelnumber; ?>"> </td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Witness Address</font>
												</span>
												</td>
												<td><input type="text" name="witnessaddress"  value="<?php echo $claim->witnessaddress; ?>"> </td>
											</tr>
											<!-- <tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Weight</font>
												</span>
												</td>
												<td><input type="number" step="0.01" name="weight" required value="<?php //echo Auth::User()->lastname; ?>"> kg</td>
											</tr>
											<tr >
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Hieght</font>
												</span>
												</td>
												<td><input type="number" step="0.01" name="height" required value="<?php //echo Claim::find($id)->longtitude ?>"> cm</td>
											</tr>
											<tr >
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Gender</font>
												</span>
												</td>										
												<td><input type="radio" checked name ="gender" value="Male" > Male<br>
													<input type="radio" name ="gender" value="Female"> Female<br>
												</td>
											</tr>
											<tr >
												<div class="form-group">
												    <td>
													<span class="label label-info" style=" width:100%; display:block;">
													<font size = "4">E-mail Address</font>
													</span>
													</td>		
												    <td><input type="email" name ="email"class="form-control" placeholder="Enter email" required value="<?php echo Auth::User()->email; ?>"></td>
												</div>
											</tr> -->
											<tr>	
												<td>
													<input buttom class = "btn btn-warning" type="submit" href="home" Submit value="Edit">
														
													</buttom>

												</td>
											</tr>
									
								</table>
								
							</div>
					</div>
			</div> <!-- /col -->
		</div> <!-- /row -->
	</div>
</form>
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
@stop