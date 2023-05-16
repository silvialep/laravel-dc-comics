<div id="blue-nav">
    <div id="blue-nav-container" class="container">
        @foreach($mainnavicons as $item)
            <div id="icon-container">
                <img src="{{Vite::asset('resources/images/'. $item['src'])}}" alt="">
                <span>{{$item['title']}}</span>
            </div>
        @endforeach
    </div>

</div>