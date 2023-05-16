<header>
    <nav id="upper-nav">
        <div id="up-nav-container" class="container">
            <span>Dc Powervisa</span>
            <span>Additional Dc Sites</span>
        </div>
    </nav>
    <nav id="main-nav">
        <div id="main-nav-container" class="container">
            <div id="nav-logo">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="comics-logo">
            </div>
            <div id="nav-menu">
                <ul>
                    
                    @for($i = 0; $i < count($menulinks); $i++)
                    <li @if($i == 1)class="active"@endif>
                        <a href="#">{{$menulinks[$i]}}</a>
                    </li>
                    @endfor

                </ul>
            </div>
            <div id="nav-searchbar">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </nav>
</header>