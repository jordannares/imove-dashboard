    <footer class="text-center pt-3 pb-3">
        <div class="active-list">
            <button type="button" class="btn btn-secondary bal" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Balance"><img src="resources/images/balance-icon.svg"></button>
            <button type="button" class="btn btn-secondary cur" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Currency"><img src="resources/images/rate-icon.svg"></button>
        </div>
        <div class="list-of-mods">
            <div class="balance_container">
                <span class="close-mods">x</span>

                <div class="balance-content">
                    <ul class="balance-inner">
                        
                         <div class="balance-header">
                                <i class="header-icon"><img src="resources/images/balance-icon-blue.svg"></i>
                                <h2>Balance</h2>
                            </div> 
                             
                         <li> 
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-usd-flag.svg"></i>
                                USD
                            </div>
                            <span class="b-rate">16.00</span>
                        </li> 
                        <li> 
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-japan-flag.svg"></i>
                                JPY
                            </div>
                            <span class="b-rate">16.00</span>
                        </li>
                        <li>
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-european-union-flag.svg"></i>
                                EUR
                            </div>
                            <span class="b-rate">16.00</span>
                        </li>
                        <li>
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-uk-flag.svg"></i>
                                GBP
                            </div>
                            <span class="b-rate">16.00</span>
                        </li>
                        <li>
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-hk-flag.svg"></i>
                               HKD
                            </div>
                            <span class="b-rate">16.00</span>
                        </li>
                         <li>
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-singapore-flag.svg"></i>
                                SGD
                            </div>
                            <span class="b-rate">16.00</span>
                        </li>
                         <li>
                            <div class="balance-list">
                                <i class="cur-icon"><img src="resources/images/b-australia-flag.svg"></i>
                                AUD
                            </div>
                            <span class="b-rate">16.00</span>
                        </li>

                    
                    </ul>
                </div>

            </div>
            <div class="currency_container">
                <span class="close-mods">x</span>
                
            </div>
        </div>
        <div>
            Copyright @ iMove all right reserved.
        </div>
    </footer>
	<script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/popper.min.js" ></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/c3.min.js"></script>
    <script src="resources/js/d3.min.js"></script>
    <script src="resources/js/swiper.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="resources/js/custom.js"></script>

    <script>
        $('[data-toggle="popover"]').popover()

        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

    </script>
</body>
</html>