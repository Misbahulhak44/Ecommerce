 <!-- Sidebar -->
 <div class="sidebar-fixed position-fixed">

<a class="logo-wrapper waves-effect">
  <!--<img src="https://mdbootstrap.com/img/logo/mdb-email.png" class="img-fluid" alt="">-->
  <img src="images/logo1.png" class="img-fluid" alt="">
</a>

<div class="list-group list-group-flush">
  <a href="#" class="list-group-item active waves-effect">
    <i class="fa fa-pie-chart mr-3"></i>Dashboard
  </a>
  <a href="#" class="list-group-item list-group-item-action waves-effect">
    <i class="fa fa-user mr-3"></i>Profile</a>

    <li class="list-group list-group-flush ">
        <a id="navbarDropdown" class=" list-group-item list-group-item-action waves-effect dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fa fa-user mr-3"></i> Collections
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="{{ url('group') }}">Group</a>
            <a class="dropdown-item " href="{{ url('category') }}">Category</a>
            <a class="dropdown-item " href="{{ url('sub-category') }}">Sub-Categories</a>
            <a class="dropdown-item" href="{{ url('product') }}">Products(Items)</a>
        </div>
    </li>

  <a href="#" class="list-group-item list-group-item-action waves-effect">
    <i class="fa fa-table mr-3"></i>Tables</a>
  <a href="#" class="list-group-item list-group-item-action waves-effect">
    <i class="fa fa-map mr-3"></i>Maps</a>
  <a href="{{ url('registered-user') }}" class="list-group-item list-group-item-action waves-effect">
    <i class="fa fa-users mr-3"></i>Registered Users</a>
</div>

</div>
<!-- Sidebar -->
