@extends('index')

@section('body')
	


 <div class="container">
   <h2 class="text-center title">User Info</h2>
   <p class="lead text-center">
    Please Sign-in <a href="{{ URL::to('signin') }}">Click Here</a><br>
    <!--their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!-->
  </p>
  <div class="row">
    <div class="col-sm-9 col-sm-offset-2">
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
	       	{{ Form::open(array('action' => 'PhotoController@makeClaim', 'files'=>true)) }}
			{{ Form::label('image', 'Upload Image')}}
			{{ Form::file('image') }}
			<!-- {{ Form::submit('Submit') }} -->
			
		   
         <th><input buttom class = "btn btn-warning" type="submit" href="home" Submit value="Submit"></buttom></th>
         <td></td>
       </tr>
     </table>
   </div>
 </div>
</div>

</div>
</div>

 {{ Form::close() }} 
<!--<?php if (!Auth::guest()):?>-->
<!--<?php else:?>-->
<!--<?php endif; ?>-->
@stop