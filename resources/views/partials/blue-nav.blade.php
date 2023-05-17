<div id="blue-nav">
    <div id="blue-nav-container" class="container">
        @foreach(config('mainnavicons') as $item)
            <div id="icon-container">
                <img src="{{Vite::asset('resources/images/'. $item['src'])}}" alt="buy icon" class="{{$item['title'] == 'Dc Power Visa' ? 'img-small' : ''}}">
                <span>{{$item['title']}}</span>
            </div>
        @endforeach
        {{-- @foreach($mainnavicons as $item)
            <div id="icon-container">
                <img src="{{Vite::asset('resources/images/'. $item['src'])}}" alt="buy icon" class="{{$item['title'] == 'Dc Power Visa' ? 'img-small' : ''}}">
                <span>{{$item['title']}}</span>
            </div>
        @endforeach --}}
    </div>

</div>