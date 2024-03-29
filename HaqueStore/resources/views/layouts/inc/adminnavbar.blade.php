 <!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
     <div class="container-fluid">

         <!-- Brand -->
         <a class="navbar-brand waves-effect" href="#" target="_blank">
             <strong class="blue-text">Haque Store</strong>
         </a>

         <!-- Collapse -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Links -->
         <div class="collapse navbar-collapse" id="navbarSupportedContent">

             <!-- Left -->
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                     <a class="nav-link waves-effect" href="#">Home
                         <span class="sr-only">(current)</span>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link waves-effect" href="#" target="_blank">About</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link waves-effect"
                         href="#" target="_blank">Contact Us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link waves-effect" href="#"
                         target="_blank">Gallary</a>
                 </li>
             </ul>

             <!-- Right -->
             <ul class="navbar-nav nav-flex-icons">
                 <li class="nav-item">
                     <a href="https://www.facebook.com" class="nav-link waves-effect" target="_blank">
                         <i class="fab fa-facebook-f"></i>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="https://twitter.com" class="nav-link waves-effect" target="_blank">
                         <i class="fab fa-twitter"></i>
                     </a>

                 </li>
                 <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="nav-link " href="#">My Profile</a>
                        <a class="nav-link " href="#">Some Others</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
             </ul>

         </div>

     </div>
 </nav>
 <!-- Navbar -->
