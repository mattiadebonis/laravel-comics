@php

    $dc_comics = [
            [
                "link" =>"characters",    
                "text" =>"Characters"
            ],
            [
                "link" =>"comics",    
                "text" =>"Comics"
            ],
            [
                "link" =>"movies",    
                "text" =>"Movies"
            ],
            [
                "link" =>"tv",    
                "text" =>"TV"
            ],
            [
                "link" =>"games",    
                "text" =>"Games"
            ],
            [
                "link" =>"videos",    
                "text" =>"Videos"
            ],
            [
                "link" =>"news",    
                "text" =>"News"
            ],      
            
    ];
   
    $shop = [
            [
                "link" =>"shopdc",    
                "text" =>"Shop DC"
            ],      
            [
                "link" =>"shopdccollectibles",    
                "text" =>"Shop Dc Collectibles"
            ],
            
    ];
    $dc = [
            [
                "link" =>"terms",    
                "text" =>"Termes Of Use"
            ],      
            [
                "link" =>"privacypolicy",    
                "text" =>"Privacy policy (New)"
            ],
            [
                "link" =>"adchoices",    
                "text" =>"Ad Choices"
            ],
            [
                "link" =>"advertising",    
                "text" =>"Advertising"
            ],
            [
                "link" =>"jobs",    
                "text" =>"Jobs"
            ],
            [
                "link" =>"subscriptions",    
                "text" =>"Subscriptions"
            ],
            [
                "link" =>"talentworshop",    
                "text" =>"Talent Workshop"
            ],
            [
                "link" =>"cpsccertificates",    
                "text" =>"CPSC Certificates"
            ],
            [
                "link" =>"ratings",    
                "text" =>"Ratings"
            ],
            [
                "link" =>"shophelp",    
                "text" =>"Shop Help"
            ],
            [
                "link" =>"contactus",    
                "text" =>"Contact Us"
            ],
            
    ];
    $sites = [
            [
                "link" =>"dc",    
                "text" =>"DC"
            ],
            [
                "link" =>"madmagazine",    
                "text" =>"Maf Magazine"
            ],
            [
                "link" =>"dckids",    
                "text" =>"DC Kids"
            ],
            [
                "link" =>"dcunivers",    
                "text" =>"DC Universe"
            ],
            [
                "link" =>"dcpowervisa",    
                "text" =>"DC Power Visa"
            ],      
            
    ];

@endphp
<!-- footer -->
<footer>
    <!-- footer top -->
    <div id="footer-top">
        <div class="size-page">
            <!-- first column -->
            <div class="footer-column">
                <h3>Dc Comics</h3>
                <ul>
                    @foreach($dc_comics as $item)
                        <li>
                            <a href="">{{$item["text"]}}</a>
                        </li>
                    @endforeach
                </ul>

                <h3>Shop</h3>
                <ul>
                    @foreach($shop as $item)
                        <li>
                            <a href="">{{$item["text"]}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /first column -->
            
            <!-- second column -->
            <div class="footer-column">
                <h3>Dc</h3>
                <ul>
                    @foreach($dc as $item)
                        <li>
                            <a href="">{{$item["text"]}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /second column -->

            <!-- third columns -->
            <div class="footer-column">
                <h3>Sites</h3>
                <ul>
                    @foreach($sites as $item)
                        <li>
                            <a href="">{{$item["text"]}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /third columns -->
        </div>
    </div>
    <!-- /footer top -->

    <!-- footer bottom -->
    <div id="footer-bottom">
        <div class="size-page">
            <button>Sign-up now!</button>
            <div class="social-container">
                <span>Follow us</span>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
                <i class="fab fa-pinterest"></i>
                <i class="fab fa-periscope"></i>

            </div>
        </div>
    </div>
    <!-- /footer bottom -->
</footer>
<!-- /footer -->
