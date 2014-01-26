<nav class="navbar navbar-inverse" role="navigation">

<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{ URL::route('home') }}">Center Management System</a>
</div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li><a href="{{ URL::route('home') }}">Home</a></li>

      @if(Auth::check())


      @else

      	<li><a href="{{ URL::route('account-create') }}">Create Account</a></li>

      @endif

  </div><!-- /.navbar-collapse -->
</nav>





