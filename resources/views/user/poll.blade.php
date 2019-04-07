@extends('user.vote.master')
@section('content')

@foreach($questions as $question)
    
<div class="questions">
    <div class="row">
        <div class="col-md-10">
            <div class="answers">
                <h5><b>Question {{$questions->currentPage()}}</b></h5>
                <!-- <h6>I have no Idea</h6> -->
            </div>
        </div>
    </div>                        
</div>
<div class ="quest">
    <div class="col-md-10">
        <h6>{{$question->question}}</h6>
    </div>
</div>
<div class="response">
    <div class="row">
        <div class="col-md-10">
            <div class="answers">
                <h6><b>Responses</b></h6>
            </div>
        </div>
    </div>                        
</div>

@foreach($question->answer as $answer)
<div class="questionss">
    <div class="row">
        <div class="col-md-1">
            <img class="presido" src="/storage/" alt="presidents"/>
        </div>
        <div class="col-md-10">
            <div class="answers">  
                <h6>{{$answer->answer}}</h6>
            </div>
        </div>
        <div class="col-md-1 radio" >
           
                <!-- <div class="radyo"> -->
                    <input type="radio" value="{{$answer->candidate->id}}"  name="radio-group" onClick="test({{$answer->candidate->id}}, {{$question->id}})" />
                    <!-- <span class="checkmark"></span> -->
                <!-- </div> -->
            
        </div>
    </div>

                            
</div> <br/>
@endforeach
</form>
<!-- 
<div class="questionss">
    <div class="row">
        <div class="col-md-1">
            <img class="presido" src="{{asset('images/ann.png')}}" alt="presidents"/>
        </div>
        <div class="col-md-10">
            <div class="answers">
                <h6>I have no Idea</h6>
            </div>
        </div>
        <div class="col-md-1 radio">
            <form action="#">
                <div class="radyo">
                    <input type="radio" id="test1" name="radio-group" />
                    <span class="checkmark"></span>
                </div>
            </form>
        </div> 
    </div>
                           
</div> -->
@endforeach
<div class="nexxxt text-right">

    <a href="#"><button id="k"  class="btn btn-primary nexxt" onClick="submit()">SUBMIT</button></a>
    <div id="lik">
    {{$questions->links()}}
    </div>
</div><br>
<script>
// var user="{{Auth::user()->email}}";
localStorage.setItem('user',user);
</script>
<script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.js"></script> -->
<!-- <script src="http://code.jquery.com/jquery-2.1.4.js"></script> -->
<script src="{{asset('paginate.js')}}"></script>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<script src="{{asset('public/js/myscript.js')}}"></script>
@endsection