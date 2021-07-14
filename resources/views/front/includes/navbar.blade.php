 <!-- start navar -->
 <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-light">
  	<div class="container">
  <a class="navbar-brand" href="{{route('front.index')}}"><img src="{{asset('public/images/logo.png')}}"></a>
  <!-- start mobile lang -->
  @if(Auth::user() !== null)
    <div class="login-mobile">
     <a class="dashboard" href="{{route('user.dashboard')}}">{{Auth::user()->fullName}}</a>
    </div>
    @else
    
    <div class="login-mobile">
          <a href="{{route('user.login')}}" class="login"><i class="ft-user"></i> الدخول</a>
          <a href="{{route('user.register')}}" class="btn btn-primary register"><i class="ft-plus-circle"></i> أنشئ حسابك</a>
    </div> 
    @endif 

  <!-- end mobile lang -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
  <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z"/>
  </svg>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	  
	  <li class="nav-item">
        <a class="nav-link" href="{{route('front.index')}}">الصفحة الرئيسية</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{route('front.contact')}}">إتصل بنا</a>
    </li>
	  <!-- dropdwon menu for languges -->
    @if(Auth::user() !== null)
    <div class="login-desctop">
    <li class="nav-item">
    <a class="nav-link" href="{{route('user.dashboard')}}">{{Auth::user()->fullName}}</a>
    </li>
    </div>
    @else
    <div class="login-desctop">
          <a href="{{route('user.login')}}" class="login"><i class="ft-user"></i> الدخول</a>
          <a href="{{route('user.register')}}" class="btn btn-primary register"><i class="ft-plus-circle"></i> أنشئ حسابك</a>
    </div> 
    @endif
  </div>
</div>
</nav>
	<!-- end navbar section -->