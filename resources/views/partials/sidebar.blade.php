<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('images/sidebar-1.jpg') }}">
    <div class="logo">
        <a href="{{ url('/user')}}" class="simple-text logo-mini">
            {{ substr(Auth::user()->name, 0, 1) }}
        </a>
        <a href="{{ url('/user')}}" class="simple-text logo-normal">
            {{ Auth::user()->name }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('images/faces/avatar.jpg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
        </ul>
    </div>
</div>