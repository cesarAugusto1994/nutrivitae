        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ Gravatar::get(Auth::user()->email) }}" />
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
                        <a href="{{route('home')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Painel</span> </a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-calendar"></i> <span class="nav-label">Consultas</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-cogs"></i> <span class="nav-label">Pacientes</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-apple"></i> <span class="nav-label">Mensagens</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-apple"></i> <span class="nav-label">Alimentos</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-apple"></i> <span class="nav-label">Receitas</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-apple"></i> <span class="nav-label">Substituições</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-apple"></i> <span class="nav-label">Modelos</span></a>
                    </li>
                    <li>
                        <a href="{{route('patients')}}"><i class="fa fa-apple"></i> <span class="nav-label">Atividades</span></a>
                    </li>

                </ul>

            </div>
        </nav>