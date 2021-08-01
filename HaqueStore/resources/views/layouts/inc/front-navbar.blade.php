<div class="white scrolling-navbar sticky-top">


    {{-- <div class="container-fluid"> --}}
        <div>
        <div class="row">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-lg">
                    <!--<div class="container">-->
                    <!-- Brand -->
                    <a class="navbar-brand waves-effect" href="">
                        <img src="{{ asset('images/logo.png') }}" class="w-100" />
                    </a>
                    <!--<strong class="blue-text">Haque Store</strong>-->
                    <!-- Collapse -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left -->
                        <ul class="navbar-nav mr-auto">

                            {{-- <li class="nav-item">
                               <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About MDB</a>
                                </li>
                             <li class="nav-item">
                               <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank">Free download</a>
                             </li>
                             <li class="nav-item">
                             <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free tutorials</a>
                             </li> --}}
                        </ul>

                        <!-- Right -->
                        <ul class="navbar-nav nav-flex-icons">
                            <li class="nav-item active">
                                <a class="nav-link waves-effect" href="#">Home
                                    <span class="sr-only">(current)</span> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect" href="" target="_blank">Collection</a>
                            </li <li class="nav-item">
                            <a class="nav-link waves-effect" href="" target="_blank">New Arrivals</a>
                            </li <li class="nav-item">
                            <a class="nav-link waves-effect" href="" target="_blank">All Products</a>
                            </li <li class="nav-item">
                            <a class="nav-link waves-effect">
                                <span class="badge red z-depth-1 mr-1"> 1 </span>
                                <i class="fas fa-shopping-cart"></i>
                                <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                            </a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('my-profile') }}">My Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>

                                </li>
                            @endguest
                        </ul>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 py-1 bg-danger shadow">
            @php
                $group = App\Models\Groups::where('status', '!=', '2')->get();
            @endphp
            @foreach ($group as $group_nav_item)
                <a href="{{ url('collection/' . $group_nav_item->url) }}"
                    class="px-4 text-white">{{ $group_nav_item->name }}</a>
            @endforeach
        </div>
    </div>
</div>
<!-- Navbar -->
