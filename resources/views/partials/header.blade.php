@php
    $menu = [
        [
            "link" =>"characters",
            "text" => "Characters"
        ],
        [
            "link" =>"comics",
            "text" => "Comics"
        ],
        [
            "link" =>"movies",
            "text" => "Movies"
        ],
        [
            "link" =>"tv",
            "text" => "Tv"
        ],
        [
            "link" =>"games",
            "text" => "Games"
        ],
        [
            "link" =>"collectibles",
            "text" => "Collectibles"
        ],
        [
            "link" =>"videos",
            "text" => "Videos"
        ],
        [
            "link" =>"fans",
            "text" => "Fans"
        ],
        [
            "link" =>"news",
            "text" => "News"
        ],
        [
            "link" =>"shop",
            "text" => "Shop"
        ]
    ];

@endphp


<!-- header -->
<header>
    <div id="header-top">
        <div class="size-page">
            <a>Dc Power Visa</a>
            <a>Additinonal Dc Site</a>
        </div>
    </div>
    <div id="header-center" class="size-page">
        <img src="{{'img/dc-logo.png'}}" alt="">
        <ul>
            @foreach($menu as $item)
            <li>
                <a href="{{$item['link']}}">{{$item["text"]}}</a>
            </li>
            @endforeach
        </ul>
        <div id="search-container">
            <input value="Search" type="text">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <div id="header-bottom">
        <img src="{{'img/jumbotron.jpg'}}" alt="">
    </div>
</header>
<!-- /header -->