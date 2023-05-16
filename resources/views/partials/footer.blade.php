<footer>
    <div id="footer-container" class="container">

        <div id="footer-menu">
            @foreach($footerlinks as $link)
            <ul>
                <li class="link-title">{{$link['title']}}</li>
                @foreach($link['links'] as $singleLink)
                <li><a href="">{{$singleLink}}</a></li>
                @endforeach
            </ul>
            @endforeach
        </div>

        <div id="footer-logo">
            <img src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="logo footer">
        </div>

        <div id="footer-copyright">All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved.<br><a href="#">Cookie Settings</a></div>

    </div>
    <nav id="footer-nav">
        <div id="footer-nav-container" class="container">
            <div id="footer-button">
                <button>SIGN-UP NOW!</button>
            </div>
    
            <div id="footer-icons">
                <h3>FOLLOW US</h3>
                @foreach($socialicons as $icon)
                <a href=""><img src="{{ Vite::asset('resources/images/'.$icon) }}" alt="social icon"></a>
                @endforeach
            </div>

        </div>
    </nav>
</footer>