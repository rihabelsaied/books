

<!-- Header -->

<header class="header trans_300">
	<!-- Top Navigation -->

	<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free Books for borrowing</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
							<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
									@guest
									<li><a data-toggle="modal" href="{{ route('login')}}" onclick="openLoginModal();"><i class="fa fa-user-plus"  aria-hidden="true"></i>Sign In</a></li>
									@if (Route::has('register'))

									<li><a data-toggle="modal" href="{{ route('register') }}" onclick="openRegisterModal();"><i class="fa fa-user-plus"  aria-hidden="true"></i>Register</a></li>
									@endif
                                 @endguest
								</ul>
								</li>
							</ul>
							</div>
					</div>
				</div>
			</div>
		</div>

	
	<!-- Main Navigation -->

	<div class="main_nav_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-right">
					<div class="logo_container">
						<a href="/home">Book<span>shop</span></a>
					</div>
					<nav class="navbar">
						<ul class="navbar_menu">
							<li><a href="/home">home</a></li>
							<li><a href="/user/favour/{{Auth::id()}}">Favouirate</a></li>
							<li><a href="/books/create">Add books</a></li>
							<li>
						
  <!-- Topbar Search -->
  <form onsubmit="return false;" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST" action="{{url('/searchautocomplete/searchfetch')}}" autocomplete="off">
            <div class="input-group">
              <input type="text" name="searchData" id="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search fa-sm"></i>
                </button>
              </div>
			</div>
			<div id="searchList">
			</div>
          </form>


						<li>
							
							
						</ul>
						<div class="top_nav_right">
						<ul class="top_nav_menu navbar_user">
							
							@if(Auth::check() and Auth::user()->role==0)
							
							<li class="account" style="background: #FFFFFF;"><i class="fa fa-user" aria-hidden="true"></i>
							<ul class="account_selection" style="width:120px">
						 	<li><a href="/user/profile/{{Auth::user()->id}}">Profile</a></li> 

								<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
										</li>
										</ul>
						</li>	
						
								

							<li class="checkout">
								<a href="#">
								<i class="fa fa-bell" aria-hidden="true"></i>
								<span id="checkout_items" class="checkout_items">2</span>
								</a>
							</li>
		
								
							@endif
						
						</ul>
						</div>
					
					</nav>
				</div>
			</div>
		</div>
	</div>


</header>

 
