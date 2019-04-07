@extends('user.vote.webb')
@section('title', 'Overall Candidates Result')
@section('content')

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px; margin-right: 20px;">

  <!-- Header -->
  <div class="poll">
    <h5><b>Overall Poll Result</b></h5>
  </div><br><br>
   
  <div class="row" style="border: 1px solid #99ca49; padding: 40px; text-align: center;">
        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
          <img src="{{asset ('public/images/Atiku-Abubakar.jpg')}}" class="rounded-circle img-fluid mx-auto d-block" style="height: 150px; width: 190px;">  
      </div>
      <div class="col-md-4 col-sm-12" style="margin-bottom: 50px;">
          <h3>Alhaji Atiku Abubakar</h3>
          <h6>Party: People's Democratic Party</h6>
          <h6>Position:President</h6>
      </div>
      <div class="col-md-4 col-sm-12">
            <h1 style="text-align:center; margin-top: 50px;"><b>26%</b>vote</h1>
      </div><br><br>
      
    
    </div><br><br>
    
  <div class="row" style="border: 1px solid #99ca49; padding: 40px; text-align: center;">
        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
          <img src="{{asset ('public/images/buhari.jpeg')}}" class="rounded-circle img-fluid mx-auto d-block" style="height: 150px; width: 190px;">  
      </div>
      <div class="col-md-4 col-sm-12" style="margin-bottom: 50px;">
          <h3>Alhaji Muhammadu Buhari</h3>
          <h6>Party: All Progressive Congress</h6>
          <h6>Position:President</h6>
      </div>
      <div class="col-md-4 col-sm-12">
            <h1 style="text-align:center; margin-top: 50px;"><b>6%</b>vote</h1>
      </div><br><br>
      
    
    </div><br><br>
    
  <div class="row" style="border: 1px solid #99ca49; padding: 40px; text-align: center;">
        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
          <img src="{{asset ('public/images/kingsley.jpeg')}}" class="rounded-circle img-fluid mx-auto d-block" style="height: 150px; width: 190px;">  
      </div>
      <div class="col-md-4 col-sm-12" style="margin-bottom: 50px;">
          <h3>Kingsley Moghalu</h3>
          <h6>Party: Youth Progressive Party</h6>
          <h6>Position:President</h6>
      </div>
      <div class="col-md-4 col-sm-12">
            <h1 style="text-align:center; margin-top: 50px;"><b>60%</b>vote</h1>
      </div><br><br>
      
    
    </div><br><br>
    
  <div class="row" style="border: 1px solid #99ca49; padding: 40px; text-align: center;">
        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
          <img src="{{asset ('public/images/oby.jpeg')}}" class="rounded-circle img-fluid mx-auto d-block" style="height: 150px; width: 190px;">  
      </div>
      <div class="col-md-4 col-sm-12" style="margin-bottom: 50px;">
          <h3>Oby Ezekwesili</h3>
          <h6>Party: Allied Congress Party of Nigeria</h6>
          <h6>Position:President</h6>
      </div>
      <div class="col-md-4 col-sm-12">
            <h1 style="text-align:center; margin-top: 50px;"><b>14%</b>vote</h1>
      </div><br><br>
      
    
    </div><br><br>
    
  <div class="row" style="border: 1px solid #99ca49; padding: 40px; text-align: center;">
        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
          <img src="{{asset ('public/images/Fela-Durotoye.jpg')}}" class="rounded-circle img-fluid mx-auto d-block" style="height: 150px; width: 190px;">  
      </div>
      <div class="col-md-4 col-sm-12" style="margin-bottom: 50px;">
          <h3>Fela Durotoye</h3>
          <h6>Party: Alliance of New Nigeria</h6>
          <h6>Position:President</h6>
      </div>
      <div class="col-md-4 col-sm-12">
            <h1 style="text-align:center; margin-top: 50px;"><b>4%</b>vote</h1>
      </div><br><br>
      
    
    </div><br><br>
     <div class="row" style="border: 1px solid #99ca49; padding: 40px; text-align: center;">
        <div class="col-md-4 col-sm-12" style="margin-bottom: 10px;">
          <img src="{{asset ('public/images/duke.jpeg')}}" class="rounded-circle img-fluid mx-auto d-block" style="height: 150px; width: 190px;">  
      </div>
      <div class="col-md-4 col-sm-12" style="margin-bottom: 50px;">
          <h3>Donald Duke</h3>
          <h6>Party: Social Democratic Party</h6>
          <h6>Position:President</h6>
      </div>
      <div class="col-md-4 col-sm-12">
            <h1 style="text-align:center; margin-top: 50px;"><b>4%</b>vote</h1>
      </div><br><br>
      
    
    </div><br><br>
    
 
</div>



@endsection