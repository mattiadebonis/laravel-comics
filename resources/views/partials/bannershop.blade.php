@php
    $banner_shop = [
        [
            "text" => "Digital Comics",
            "img" => "img/buy-comics-digital-comics.png"
        ],
        [
            "text" => "Dc merchandise",
            "img" => "img/buy-comics-merchandise.png"
        ],
        [
            "text" => "Subscription",
            "img" => "img/buy-comics-subscriptions.png"
        ],
        [
            "text" => "Comic shop Locator",
            "img" => "img/buy-comics-shop-locator.png"
        ],
        [
            "text" => "Dc power Visa",
            "img" => "img/buy-dc-power-visa.svg"
        ]
    ];
@endphp

<section id="banner-shop-container">
    <div class="size-page">
        <ul>
            @foreach($banner_shop as $item)
                <li>
                    <img src="{{$item['img']}}" alt="">
                    <span>{{$item['text']}}</span>
                </li>
            @endforeach
        </ul>

    </div>

</section>