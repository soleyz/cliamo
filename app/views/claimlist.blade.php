
<?php 
            // $claim = DB::table('claim')->where('officer_id',Auth::User()->id)->get();
            // // echo $claim[0]->id;
            // // $firstname = DB::table('users')->where('id',"7")->get();
            // // echo $firstname;
            // // echo "eiei";
            // for($i=0;$i<count($claim);$i++){ 
            //  $dataClaim = DB::table('users')->where('id',$claim[$i]->user_id);
            //  // echo $claim[$i]->id;
            //  echo '<th>'.$claim[$i]->id;
            //  echo '<td>'.$claim[$i]->user_id;

            //  // echo '<td>'.$firstname[0]->firstname;
            //  echo '<td>'.$claim[$i]->ownername;
            //  echo '<td>'.$claim[$i]->incidentdriverage;
            //  echo '<td>'.$claim[$i]->created_at;  
            //  $identifier=$claim[$i]->id;
            // }

?>

<!-- Third (User Info) section -->
@extends('index')

@section('body')


@if (!Auth::guest())

<div class="container">

  <h2 class="text-center title">Claim List</h2>
  
  
  <!-- <a href="{{ URL::to('makeclaim') }}">Make claim</a> -->
  <div class="row">
    <div class="col-sm-10 col-sm-offset-2">
      <div class="panel panel-primary " >
        <div class="panel-heading text-center">User Information</div>
        <div class="panel-body ">
          <table class="table table-striped">
            <tr>
              <th>Claim ID</th>
              <!-- <td><?php echo Auth::User()->firstname; ?></td> -->
              <td>Firstname Lastname</td>
              <td>Age </td>
              <td>Day of Accident</td>
              <td></td>
            </tr> 
            <?php 
            $claim = DB::table('claim')->where('officer_id',Auth::User()->id)->get();
            // echo $claim[0]->id;
            // $firstname = DB::table('users')->where('id',"7")->get();
            // echo $firstname;
            // echo "eiei";
            for($i=0;$i<count($claim);$i++){ 
             $dataClaim = DB::table('users')->where('id',$claim[$i]->user_id);
             // echo $claim[$i]->id;

             echo '<th>'.$claim[$i]->id;
             echo '<td>'.$claim[$i]->incidentdriver;

             // echo '<td>'.$firstname[0]->firstname;
             // echo '<td>'.$claim[$i]->user_id;
             echo '<td>'.$claim[$i]->incidentdriverage;
             echo '<td>'.$claim[$i]->created_at;  
             // $identifier=$claim[$i]->id;
            
            

             ?>
              <td><form action="{{ URL::to('editclaim/'.$claim[$i]->id) }}" method="GET">
                <input buttom class = "btn btn-warning" type="submit" href="home" Submit value="Edit Claim">
              </buttom></form>
              <tr>
                <?php }
                ?>
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