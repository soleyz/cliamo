
<!-- Third (User Info) section -->
@extends('index')

@section('body')


@if (!Auth::guest())

<div class="container">

	<h2 class="text-center title">User Info</h2>
	<p class="lead text-center">
		Huge thank you to all people who publish<br>
		their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!
	</p>
	<a href="{{ URL::to('logout') }}">Logout</a><br>
	<a href="{{ URL::to('editprofile') }}">Edit profile</a><br>
  <a href="{{ URL::to('upload') }}">Make claim</a>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-2">
			<div class="panel panel-primary " >
				<div class="panel-heading text-center">User Information</div>
				<div class="panel-body ">
					<table class="table table-striped">
						<tr>
							<th>Name</th>
							<td><?php echo Auth::User()->firstname; ?></td>
						</tr>
						<tr>
							<th>Age</th>
							<td><?php echo Auth::User()->lastname; ?></td>
						</tr>
						<tr>
							<th>Height</th>
							<td><?php echo Auth::User()->phonenumber; ?></td>
						</tr>
						<tr>
							<th>Weight</th>
							<td><?php echo Auth::User()->latitude;  ?></td>
						</tr>
						<tr>
							<th>Gender</th>
							<td><?php echo Auth::User()->longtitude;  ?></td>
						</tr>
            <tr>
              <th>PLateNumber1</th>
              <td><?php echo Auth::User()->platenumpart1;  ?></td>
            </tr>
            <tr>
              <th>PLateNumber2</th>
              <td><?php echo Auth::User()->platenumpart2;  ?></td>
            </tr>
            <tr>
              <th>PLateNumber3</th>
              <td><?php echo Auth::User()->platenumpart3;  ?></td>
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
					<div class="alert alert-success text-center" role="alert">
  			
  						<td><?php echo Auth::User()->caloriesForOneDay;  ?></td>
  					</div>
  					<div class="panel panel-primary " >
  						<div class="panel-heading text-center">Disease from food related</div>

  						<div class="panel-body ">
  							<table class="table table-striped">
  								<tr>
  									<p>เจ้าหน้าที่ ที่อยู่ใกล้ที่สุด</p> 

  								</tr>
  								<tr>
  									<?php $users = DB::table('users')->where('available', '=', 1)->where('checktype','=','0')->get();
                    for($i=0;$i<count($users);$i++){
                        echo '<th>'.$users[$i]->firstname.'  '.$users[$i]->lastname;

                        echo '<td>'.$users[$i]->phonenumber;
                        echo '<tr>';

                  
                    }                      // var_dump($users);
                    // foreach($users as $user){
                        // foreach($users as $value){
                        //   $value=$container;

                        // }
                      // }
                      echo"<tr>";
                      echo "<th>please add food</th>";
                      echo"</tr>";
                    
                    
                      
                    //var_dump($disease);
                    /*foreach($disease as $container){
                      foreach($container as $value){
                        echo"<tr>"; 
                        echo "<th>".$value."</th>";
                        echo "</tr>";
                      }
                    }*/
              
                    ?>

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