@extends('layouts.app')
@section('content')

<div class="questions">
    <div class="row">
        <div class="col-md-1">
            <img class="presido" src="{{asset('images/ann.png')}}" alt="presidents"/>
        </div>
        <div class="col-md-10">
            <div class="answers">
                <h5>What is your say on the Disability Bill?</h5>
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
                            
</div>




<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.1.4/pagination.js"></script> -->
<!-- <script src="http://code.jquery.com/jquery-2.1.4.js"></script> -->
<script src="/js/paginate.js"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/myscript.js')}}"></script>
@endsection