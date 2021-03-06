  <aside class="main-sidebar">
  
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('upload/avatars/' . Auth::user()->avatar) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info ">
                <p>{{ Auth::user()->name  }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>


      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>

            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="{{ Request::is('tickets','index') ? 'active' : '' }}"><a href="{{ route('ticket.index') }}"><i class="fa fa-ticket"></i> Tickets</a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Summary 1</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Summary 2</a></li>
                </ul>
            </li>
           <li class="treeview {{ Request::is('notes','profile','help') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Utilities</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('notes') ? 'active' : '' }}"><a href="{{ url('notes') }}"><i class="fa fa-circle-o active"></i> Notes</a></li>
                    <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ url('profile') }}"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li class="{{ Request::is('help') ? 'active' : '' }}"><a href="{{ url('help') }}"><i class="fa fa-circle-o"></i> Help</a></li>
                </ul>
            </li>


            <li class="header">SHORTCUT</li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Website</span></a></li>

      </ul>


    </section>
  </aside>