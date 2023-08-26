<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href=""><i
                            class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>class</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('classes.create')}}">Create</a></li>
                                <li><i class="fa fa-puzzle-piece"></i><a
                                    href="{{route('admin.classes.view')}}">view</a></li>
                        
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Quize</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('admin.quiz.create')}}">Create</a></li>
                                <li><i class="fa fa-puzzle-piece"></i><a
                                    href="{{route('admin.quiz.view')}}">view</a></li>
                        
                    </ul>
                </li>



                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Question</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('admin.question.create')}}">Create</a></li>
                                <li><i class="fa fa-puzzle-piece"></i><a
                                    href="{{route('admin.question.view')}}">view</a></li>
                        
                    </ul>
                </li>



                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Option</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('admin.option.create')}}">Create</a></li>
                                <li><i class="fa fa-puzzle-piece"></i><a
                                    href="{{route('admin.option.view')}}">view</a></li>
                        
                    </ul>
                </li>
/{{-- 
                <li class="menu-item-has-children dropdown">
                    <a href="{{asset('admin')}}/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>UserRole</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a
                                href="{{route('user_role.create')}}">create</a></li>
                        
                    </ul>
                </li> --}}


            </ul>
        </div>
    </nav>
</aside>
