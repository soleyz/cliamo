
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
  <a href="{{ URL::to('makeclaim') }}">Make claim</a>
  <div class="row">
    <div class="col-sm-10 col-sm-offset-2">
      <div class="panel panel-primary " >
        <div class="panel-heading text-center">User Information</div>
        <div class="panel-body ">
          <table class="table table-striped">
            <tr>
              <th>Name</th>
              <td><?php echo Auth::User()->firstname; ?></td>
            </tr>
            <?php $claim = DB::table('claim')->get();
            for($i=0;$i<count($claim);$i++){ 
              echo '<th>'.$claim[$i]->id;
              echo '<td>'.$claim[$i]->user_id;
              echo '<td>'.$claim[$i]->incidentdriver;
              echo '<td>'.$claim[$i]->incidentdriverage; 
              $identifier=$claim[$i]->id; ?>
              <td><a href="{{ 'editclaim/'.$claim[$i]->id }}">Edit</a>
                <!-- <td><a href="{{ 'editclaim'}}">Edit</a>  -->
                <!-- <td>{{}}Edit<br> -->
                <tr>
                  <?php } 
                        // echo '<th>'.$users[$i]->firstname.'  '.$users[$i]->lastname;

                        // echo '<td>'.$users[$i]->phonenumber;
                        // echo '<tr>';

                  
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