        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{route('home')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="{{route('consultas')}}"><i class="fa fa-calendar"></i> <span class="nav-label">Consultas</span></a>
                    </li>
                    <li>
                        <a href="{{route('pacientes')}}"><i class="fa fa-apple"></i> <span class="nav-label">Pacientes</span></a>
                    </li>
                    <li>
                        <a href="{{route('consultas')}}"><i class="fa fa-apple"></i> <span class="nav-label">Alimentos</span></a>
                    </li>
                </ul>

            </div>
        </nav>