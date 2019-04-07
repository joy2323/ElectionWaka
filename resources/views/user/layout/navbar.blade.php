<!-- the nav -->
<nav class="navbar fixed-top navbar-expand-md px-5 mb-5">
    <a class="navbar-brand" href="{{url('/')}}">
      <img class="img-fluid rounded" src="" alt="whotovote" width="95" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="text-dark lead">&#9776;</span>
    </button>
    <div class="collapse navbar-collapse">
      <hr />
      <ul class="navbar-nav">
        <li class="navbar-item mt-2 mr-md-3">
          <a class="text-white ml-2" href="{{url('/')}}">Home</a>
        </li>
        <li class="navbar-item mt-2 mr-md-3">
          <a class="text-white ml-2" href="{{url('/user/social')}}">View manifesto</a>
        </li>
        <li class="navbar-item">
          <a class="text-dark btn btn-warning ml-2" href="{{url('/user/social')}}">Take poll now</a>
        </li>
      </ul>
    </div>
  </nav>
    
