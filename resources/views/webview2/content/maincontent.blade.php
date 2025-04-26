@extends('webview2.master')



@section('maincontent')
    <div class="home-banner-area mb-4 pt-3">
        <div class="container">
            <div class="row gutters-10 position-relative">
                <div class="col-lg-3 position-static d-none d-lg-block">
                    <div class="aiz-category-menu bg-white rounded  shadow-sm">
                        <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
                            <span class="fw-600 fs-16 mr-3">Categories</span>
                            <a href="https://geekmartbd.com/categories" class="text-reset">
                                <span class="d-none d-lg-inline-block">See All ></span>
                            </a>
                        </div>
                        <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                            <li class="category-nav-element" data-id="4">
                                <a href="https://geekmartbd.com/category/audio-iohom" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/DvmieQW7XkhwfUWshUq5gOGbHPVaMLDSgo7RxuDj.png"
                                            width="16"
                                            alt="Audio"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Audio</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="c-preloader text-center absolute-center">
                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="category-nav-element" data-id="9">
                                <a href="https://geekmartbd.com/category/mobile-accessories-avd8w" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/LRCTCMWnWkE78SkIzl1eYhfTwtytiY23IaqHxFom.png"
                                            width="16"
                                            alt="Mobile Accessories"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Mobile Accessories</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="c-preloader text-center absolute-center">
                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="category-nav-element" data-id="12">
                                <a href="https://geekmartbd.com/category/smart-watch-kzzuz" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/oGLFHu61kjHI4tx2jyEsbFTEbEBz238V1gTY2HRp.png"
                                            width="16"
                                            alt="Smart Watch"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Smart Watch</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="c-preloader text-center absolute-center">
                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="category-nav-element" data-id="13">
                                <a href="https://geekmartbd.com/category/computer--laptop-components-wwkzo" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/BtbOPGsZEEkN2pit7h87lxJwZELQpp2EZ4NFh4xE.png"
                                            width="16"
                                            alt="Computer &amp; Laptop Components"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Computer &amp; Laptop Components</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="c-preloader text-center absolute-center">
                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="category-nav-element" data-id="14">
                                <a href="https://geekmartbd.com/category/home-electronics-xbdog" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/uCV6o6F9SaJD7f2ZZqOwFdPPyzy4d9sxqqmWGhWj.png"
                                            width="16"
                                            alt="Home Electronics"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Home Electronics</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="c-preloader text-center absolute-center">
                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="category-nav-element" data-id="38">
                                <a href="https://geekmartbd.com/category/pre-order-kenqb" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/a9u6g51p7Yshed71ApWxxKN27q3h8qSLspMj1Hxm.png"
                                            width="16"
                                            alt="Pre-Order"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Pre-Order</span>
                                </a>
                            </li>
                            <li class="category-nav-element" data-id="50">
                                <a href="https://geekmartbd.com/category/lifestyle-pe3tu" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/UoPzc1ANSdGwA139HYC7uo7ihcFfnUoO1MwLknXy.png"
                                            width="16"
                                            alt="Lifestyle"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Lifestyle</span>
                                </a>
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="c-preloader text-center absolute-center">
                                        <i class="las la-spinner la-spin la-3x opacity-70"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="category-nav-element" data-id="56">
                                <a href="https://geekmartbd.com/category/newest-xxmxh" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/i55yTDxQeukJ2BI9nYgW814VZYTn5xad8Do1fr1T.png"
                                            width="16"
                                            alt="Newest"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                    <span class="cat-name">Newest</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class=" col-lg-7 ">
                    <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                        <div class="carousel-box">
                            <a href="https://geekmartbd.com/brand/HiBy-4pV7g">
                                <img
                                        class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                        src="https://geekmartbd.com/public/uploads/all/QS9h2fVwSMs8k3dnWVtjHsf1RwV7D8UVb83wiqWE.jpg"
                                        alt="Geek Mart promo"
                                        height="457"
                                        onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder-rect.jpg';"
                                >
                            </a>
                        </div>
                        <div class="carousel-box">
                            <a href="https://geekmartbd.com/product/truthear-x-crinacle-zero-red-dual-dynamic-drivers-in-ear-headphone">
                                <img
                                        class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                        src="https://geekmartbd.com/public/uploads/all/42nSbAN2pmL3cRnnlYJDslcyQcEOTurFAG6w822S.jpg"
                                        alt="Geek Mart promo"
                                        height="457"
                                        onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder-rect.jpg';"
                                >
                            </a>
                        </div>
                        <div class="carousel-box">
                            <a href="https://geekmartbd.com/product/rose-techniques-roseselsa-ceramic-x-wireless-earbuds-55db-active-noise-cancelling-earphones">
                                <img
                                        class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                        src="https://geekmartbd.com/public/uploads/all/iPgJUQdTBAtyiAIGWzMjCujiEAOnMzMbKnAUHYKb.jpg"
                                        alt="Geek Mart promo"
                                        height="457"
                                        onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder-rect.jpg';"
                                >
                            </a>
                        </div>
                        <div class="carousel-box">
                            <a href="https://www.geekmartbd.com/brand/KEFINE-6FLWf">
                                <img
                                        class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                        src="https://geekmartbd.com/public/uploads/all/BSqYFv1j399QIhbWrn1cU4wGAGEmKJfdGOt6YD1s.webp"
                                        alt="Geek Mart promo"
                                        height="457"
                                        onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder-rect.jpg';"
                                >
                            </a>
                        </div>
                        <div class="carousel-box">
                            <a href="https://geekmartbd.com/flash-deal/winter-super-sale-PqEF8">
                                <img
                                        class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                        src="https://geekmartbd.com/public/uploads/all/57evu9N6oQqr7pOoYfYhye7h1QsuPniHmOxIJ13Y.jpg"
                                        alt="Geek Mart promo"
                                        height="457"
                                        onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder-rect.jpg';"
                                >
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 order-3 mt-3 mt-lg-0">
                    <div class="bg-white rounded shadow-sm">
                        <div class="bg-soft-primary rounded-top p-3 d-flex align-items-center justify-content-center">
                                <span class="fw-600 fs-16 mr-2 text-truncate">
                                Todays Deal
                            </span>
                            <span class="badge badge-primary badge-inline">Hot</span>
                        </div>
                        <div class="c-scrollbar-light overflow-auto h-lg-400px p-2 bg-primary rounded-bottom">
                            <div class="gutters-5 lg-no-gutters row row-cols-2 row-cols-lg-1">
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/letshuoer-s12-pro-148mm-planar-iem" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/hcPKIHINMRG82OBQb5ZaDyN9fJ5OHrNWXg0UiRU5.webp" alt="LETSHUOER S12 Pro 14.8mm Planar IEM"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳13,990.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/simgot-ea500-10mm-dual-magnetic-circuit-dual-cavity-structure-dynamic-earphones" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/67bzFuV9lVvlbftcECyaHRdAQ07OlXOCiYZXVrWo.webp" alt="SIMGOT EA500 10mm Dual-Magnetic-Circuit &amp; Dual-Cavity Structure Dynamic Earphones"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳7,500.00</span>
                                                    <del class="d-block opacity-70">৳8,000.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/qoa-gimlet-10mm-dynamic-driver-in-ear-monitors-earphone-iems" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/vVpFMmkOvfDGwTaQ41pZl4tnCkw7mpDuhhxDqUD6.webp" alt="QoA Gimlet 10mm Dynamic Driver In-Ear Monitors Earphone IEMs"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳5,500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/moondrop-may-dsp-fully-balanced-ddplanar-hybrid-drivers-hifi-iems" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/Dm04Zg2kyi1Dt6lJyFttXwMWcsTxwjU7MfefhonT.jpg" alt="Moondrop May DSP Fully Balanced DD+Planar Hybrid Drivers HiFi IEMs"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳7,200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/nicehck-tc3-type-c-to-35mm-hifi-dac" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/sFGvNNb3Q3OJrU5ebJ3MQ4kWi3TSqaWvDs2LpG38.webp" alt="NiceHCK TC3 Type-C to 3.5mm HIFI DAC"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳1,350.00</span>
                                                    <del class="d-block opacity-70">৳1,480.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/spinfit-w1-single-size-pack-double-layered-w-shaped-core-eartips" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/97Fqn5vWY61BvagY6IHrDoN6Ylag3L6fTei89Baw.png" alt="SpinFit W1 Single Size Pack Double Layered W Shaped Core Eartips"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳1,300.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/divinus-velvet-silicone-eartips-for-3-5mm-nozzle" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/7fTronyui72QQB9vil4HqSqYoGBxKccWoZP8KNmn.jpg" alt="DIVINUS Velvet Silicone Eartips For 3-5mm Nozzle"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳600.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/aful-explorer-1dd2ba-hybrid-in-ear-monitors" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/nO4Kwx6eJ38YmtI9Rd6amfCerpYXhyH8X5GgDYJw.webp" alt="AFUL Explorer 1DD+2BA Hybrid In-Ear Monitors"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳13,800.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/simgot-ea500-lm" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/LHxLSSqGn4ZU8TzLhLa6AO1hZ4JQBKMJNOj5ckop.webp" alt="SIMGOT EA500 LM" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳8,500.00</span>
                                                    <del class="d-block opacity-70">৳9,000.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/simgot-em6l" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/iZY9caF561eTVOKbam5UxOxAB7YdheKEecfkYsGS.jpg" alt="SIMGOT EM6L" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳12,000.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/aoshida-e20-10mm-beryllium-coated-dynamic-driver-8mm-dlc-diaphragm-iem" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/NEnjIHkMyjfwd7cTaDTvMrJL7NAY6abPjwiwgF04.jpg" alt="Aoshida E20 10mm Beryllium Coated Dynamic Driver 8mm DLC Diaphragm Iem"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳4,800.00</span>
                                                    <del class="d-block opacity-70">৳5,800.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/cvj-night-elf-6mm10mm-dual-dynamic8mm-dynamic-dlc-iems" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/yaAAfL1D1UjxiMWJ7LxvXATY4P6urR8BsmT4597c.webp" alt="CVJ Night Elf 6mm+10mm Dual Dynamic+8mm Dynamic DLC IEMS"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳3,500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/dunu-titan-s2-dual-chamber-magnetic-circuit-dynamic-driver-in-ear-earphones" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/yrDKeRRrFywZ5uwmUw0K2TsyRLXqzcbjndFvcVIK.webp" alt="DUNU Titan S2 Dual-Chamber &amp; Magnetic Circuit Dynamic Driver In-Ear Earphones"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳9,500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/tangzu-waner-se-10mm-pet-diaphragm-dynamic-driver-in-ear-earphones" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/DM4xK467XAAFRY0TueQkgE5sAo8aWkdLaico4yyr.webp" alt="TANGZU Waner SE 10mm PET Diaphragm Dynamic Driver In-Ear Earphones"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳2,150.00</span>
                                                    <del class="d-block opacity-70">৳2,500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/truthear-gate-in-ear-monitor" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/yTbONT9M16dD6bkTWwXsQAP124RJpdAa4bS6ACZx.jpg" alt="TRUTHEAR GATE In-ear Monitor" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳2,500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/truthear-nova-in-ear-monitor" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/1EiCnThIpEsrdwb8trCqBLFcwOTfLtPkhmhwLnRL.jpg" alt="TRUTHEAR NOVA In-ear Monitor" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳18,700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/truthear-hexa-1dd-3ba-in-ear-headphone" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/rnymDFix6w120AMIMNbruag2hLXsk4CVIOCiwiOX.jpg" alt="TRUTHEAR HEXA 1DD 3BA In-Ear Headphone"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳9,900.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/truthear-x-crinacle-zero-red-dual-dynamic-drivers-in-ear-headphone" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/KP4qDdxUctrmnl6Gnkmnhl3yyqoVSMe7nmSynLXX.jpg" alt="TRUTHEAR x Crinacle ZERO: RED Dual Dynamic Drivers In-Ear Headphone"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳6,800.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/dunu-candy-silicone-eartips-for-45mm-6mm-nozzle" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/dkRuG4VodhqybdbIlqF2WDh9fV7iMPW4Hob0azSA.jpg" alt="DUNU Candy Silicone Eartips For 4.5mm-6mm Nozzle"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳450.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/fiio-jadeaudio-ka11-cs43131-hifi-dac-and-headphone-amplifier" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/aIvRMRFJJMRRpB41cY5F5UXSAaCBDnm1zRqMvWGr.webp" alt="FiiO JadeAudio KA11 CS43131 HiFi DAC and Headphone Amplifier"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳3,800.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/simgot-ew300-1dd1planar1pzt-tribrid-driver-iems" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/4AjmpN2L226Z9ZnItoI1I16PBjU4YjMpewUaQA1I.webp" alt="SIMGOT EW300  1DD+1Planar+1PZT Tribrid Driver IEMs"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳8,000.00</span>
                                                    <del class="d-block opacity-70">৳8,500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/onix-alpha-xi1" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/rvf6228I18NroVptvxulTHMkWM4DKIoWf8w5OspK.webp" alt="ONIX Alpha XI1" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳13,700.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/kinera-celest-ignitex-beast-1-dd1-ba-hybrid-dual-driver" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/YIJFHk6iRJ82xqRq5Fbc6GItDOsdqDIwVcsEVwi9.png" alt="Kinera Celest IgniteX Beast 1 DD+1 BA Hybrid Dual Driver"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳5,200.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/epz-q5-pro-10mm-carbon-ceramic-composites-nano-diaphragm-iem" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/C7bkg7z5zer6SOkBefJb0U6DiHum3AtCuBfcTzIg.png" alt="EPZ - Q5 Pro 10mm Carbon-Ceramic Composites Nano Diaphragm IEM"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳4,900.00</span>
                                                    <del class="d-block opacity-70">৳5,800.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col mb-2">
                                    <a href="https://geekmartbd.com/product/hiby-r4-4-way-hifi-android-dap" class="d-block p-2 text-reset bg-white h-100 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img class="lazyload img-fit h-140px h-lg-80px" src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/Yf9AK6DkrWLKeCehgjO2XtP6Og1uJtfzgZ4pEisX.png" alt="HiBy R4 Class A 4-Way ES9018C2M DSD256 Portable Music Player"
                                                         onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">৳31,500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                <div class="col-xl col-md-6">
                    <div class="mb-3 mb-lg-0">
                        <a href="https://geekmartbd.com/category/pre-order-kenqb" class="d-block text-reset">
                            <img src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/A5XbGxaIQx9WDfOu9VIWBhoFcPTvXuqKVy5OoQnX.jpg" alt="Geek Mart promo" class="img-fluid lazyload w-100">
                        </a>
                    </div>
                </div>
                <div class="col-xl col-md-6">
                    <div class="mb-3 mb-lg-0">
                        <a href="https://geekmartbd.com/product/cayin-ru7-portable-usb-dac-headphone-amp-dongle" class="d-block text-reset">
                            <img src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/I9Ig4ZfBldgP5x53dVZJN3lttHI1DgPj8hWmsMR8.jpg" alt="Geek Mart promo" class="img-fluid lazyload w-100">
                        </a>
                    </div>
                </div>
                <div class="col-xl col-md-6">
                    <div class="mb-3 mb-lg-0">
                        <a href="https://geekmartbd.com/flash-deal/winter-super-sale-PqEF8" class="d-block text-reset">
                            <img src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/O6qHSTSXPTZKGUCSSXMCArcPYXU4peAl1VpEkVzV.jpg" alt="Geek Mart promo" class="img-fluid lazyload w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Flash Sale</span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="2025/05/31 23:59:00"></div>
                    <a href="https://geekmartbd.com/flash-deal/winter-super-sale-PqEF8" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">View More</a>
                </div>

                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;11%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/tangzu-waner-sg-2022-10mm-dynamic-driver-in-ear-earphone-iems" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/LvplhH2G8HRL1tmceNhziQYcZzH5DkLxyIXaa0fD.jpg"
                                            alt="Tangzu WAN&#039;ER SG 2022 10mm Dynamic Driver In-Ear Earphone IEMs"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(178)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(178)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(178)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳1,750.00</del>
                                    <span class="fw-700 text-primary">৳1,550.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/tangzu-waner-sg-2022-10mm-dynamic-driver-in-ear-earphone-iems" class="d-block text-reset">Tangzu WAN&#039;ER SG 2022 10mm Dynamic Driver In-Ear Earphone IEMs</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;48%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/tripowin-piccolo-11mm-dual-cavity-lcp-dynamic-driver-earphones" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/cTR8NI3w8eg6KeElA8gEsJ7CpDmiz5C9aP5kadIA.webp"
                                            alt="Tripowin Piccolo 11mm Dual-Cavity LCP Dynamic Driver Earphones"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(199)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(199)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(199)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳2,999.00</del>
                                    <span class="fw-700 text-primary">৳1,549.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/tripowin-piccolo-11mm-dual-cavity-lcp-dynamic-driver-earphones" class="d-block text-reset">Tripowin Piccolo 11mm Dual-Cavity LCP Dynamic Driver Earphones</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;9%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/7hz-x-crinacle-zero-2" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/sgLRpS8zRsIiLQbYgvbHwoG0i7ydlnNms156APVi.jpg"
                                            alt="7HZ x Crinacle Zero: 2"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(241)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(241)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(241)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳2,800.00</del>
                                    <span class="fw-700 text-primary">৳2,550.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/7hz-x-crinacle-zero-2" class="d-block text-reset">7HZ x Crinacle Zero: 2</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;9%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/nicehck-tc3-type-c-to-35mm-hifi-dac" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/sFGvNNb3Q3OJrU5ebJ3MQ4kWi3TSqaWvDs2LpG38.webp"
                                            alt="NiceHCK TC3 Type-C to 3.5mm HIFI DAC"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(277)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(277)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(277)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳1,480.00</del>
                                    <span class="fw-700 text-primary">৳1,350.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/nicehck-tc3-type-c-to-35mm-hifi-dac" class="d-block text-reset">NiceHCK TC3 Type-C to 3.5mm HIFI DAC</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;16%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/nicehck-nk1-cx31993-decoding-chip-type-c-to-35mm" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/bxLeLIKvGax6xlAwVOeMYoaZKRGRJtBCYewLOTip.png"
                                            alt="NiceHCK NK1 CX31993 Decoding Chip Type-C to 3.5mm"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(279)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(279)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(279)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳950.00</del>
                                    <span class="fw-700 text-primary">৳799.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/nicehck-nk1-cx31993-decoding-chip-type-c-to-35mm" class="d-block text-reset">NiceHCK NK1 CX31993 Decoding Chip Type-C to 3.5mm</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;6%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/simgot-ea500-lm" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/LHxLSSqGn4ZU8TzLhLa6AO1hZ4JQBKMJNOj5ckop.webp"
                                            alt="SIMGOT EA500 LM"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(317)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(317)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(317)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳9,000.00</del>
                                    <span class="fw-700 text-primary">৳8,500.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/simgot-ea500-lm" class="d-block text-reset">SIMGOT EA500 LM</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;6%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/simgot-ew300-1dd1planar1pzt-tribrid-driver-iems" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/4AjmpN2L226Z9ZnItoI1I16PBjU4YjMpewUaQA1I.webp"
                                            alt="SIMGOT EW300  1DD+1Planar+1PZT Tribrid Driver IEMs"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(350)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(350)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(350)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳8,500.00</del>
                                    <span class="fw-700 text-primary">৳8,000.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/simgot-ew300-1dd1planar1pzt-tribrid-driver-iems" class="d-block text-reset">SIMGOT EW300  1DD+1Planar+1PZT Tribrid Driver IEMs</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;10%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/roseselsa-star-ring-anc-tws-earbuds-high-fidelity-headphones-gaming-earphones" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/2mW6nBkaCv3oAtHYQvwsDMOwpU0HUpK8hoqTOMnS.webp"
                                            alt="ROSESELSA STAR RING ANC TWS Earbuds High Fidelity Headphones Gaming Earphones"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(355)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(355)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(355)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳3,000.00</del>
                                    <span class="fw-700 text-primary">৳2,700.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/roseselsa-star-ring-anc-tws-earbuds-high-fidelity-headphones-gaming-earphones" class="d-block text-reset">ROSESELSA STAR RING ANC TWS Earbuds High Fidelity Headphones Gaming Earphones</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;22%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/kefine-klean-10mm-dlc-diaphragm-dynamic-driver-iem" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/jHZPdmxJWzZ1xxRxALLKUHi7O4S6Rram1dzvgjIf.png"
                                            alt="KEFINE Klean 10mm DLC Diaphragm Dynamic Driver IEM"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(363)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(363)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(363)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳5,500.00</del>
                                    <span class="fw-700 text-primary">৳4,300.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/kefine-klean-10mm-dlc-diaphragm-dynamic-driver-iem" class="d-block text-reset">KEFINE Klean 10mm DLC Diaphragm Dynamic Driver IEM</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;45%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/new-kinera-celest-rue-in-ear-earphones-composite-titanium-diaphragm-6mm-micro-dynamic-driver-headset-cable-hifi-iems-for-gifts" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/rO39LNUjfrsLPUa2nx6SI9V2hVhuzG2LC1Oq6mfe.png"
                                            alt="New Kinera Celest Rue In Ear Earphones Composite Titanium Diaphragm 6mm Micro Dynamic Driver Headset Cable Hifi IEMs For Gifts"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(367)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(367)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(367)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳1,450.00</del>
                                    <span class="fw-700 text-primary">৳800.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/new-kinera-celest-rue-in-ear-earphones-composite-titanium-diaphragm-6mm-micro-dynamic-driver-headset-cable-hifi-iems-for-gifts" class="d-block text-reset">New Kinera Celest Rue In Ear Earphones Composite Titanium Diaphragm 6mm Micro Dynamic Driver Headset Cable Hifi IEMs For Gifts</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;11%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/kefine-delci-ae-10mm-dynamic-driver-in-ear-earphone" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/7oQ6k4BwzLc8Isp6ioRSSHbALYgRyL9Er7hV8xUf.png"
                                            alt="KEFINE Delci AE 10mm Dynamic Driver In-Ear Earphone"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(369)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(369)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(369)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳9,500.00</del>
                                    <span class="fw-700 text-primary">৳8,499.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/kefine-delci-ae-10mm-dynamic-driver-in-ear-earphone" class="d-block text-reset">KEFINE Delci AE 10mm Dynamic Driver In-Ear Earphone</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;13%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/kefine-klanar-145mm-planar-driver-in-ear-monitors" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/vYT4TxKqowFiq4ip7ZbhHxYyDZksCKvkAY4XEkEW.png"
                                            alt="KEFINE Klanar 14.5MM Planar Driver In-Ear Monitors"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(370)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(370)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(370)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳11,500.00</del>
                                    <span class="fw-700 text-primary">৳9,999.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/kefine-klanar-145mm-planar-driver-in-ear-monitors" class="d-block text-reset">KEFINE Klanar 14.5MM Planar Driver In-Ear Monitors</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;16%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/epz-q5-pro-10mm-carbon-ceramic-composites-nano-diaphragm-iem" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/C7bkg7z5zer6SOkBefJb0U6DiHum3AtCuBfcTzIg.png"
                                            alt="EPZ - Q5 Pro 10mm Carbon-Ceramic Composites Nano Diaphragm IEM"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(373)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(373)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(373)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳5,800.00</del>
                                    <span class="fw-700 text-primary">৳4,900.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/epz-q5-pro-10mm-carbon-ceramic-composites-nano-diaphragm-iem" class="d-block text-reset">EPZ - Q5 Pro 10mm Carbon-Ceramic Composites Nano Diaphragm IEM</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;17%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/epz-q5-iem" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/QFYyBNdN3rBBLQOwAvHuRRONREdMDsC5qovJrNdg.png"
                                            alt="EPZ - Q5 IEM"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(374)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(374)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(374)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳5,200.00</del>
                                    <span class="fw-700 text-primary">৳4,300.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/epz-q5-iem" class="d-block text-reset">EPZ - Q5 IEM</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;22%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/epz-q1-pro-10mm-lcppu-composite-diaphragm-iem" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/LscqWN4jUZc9LjjPWk3vbxukbEe2fjKBQkoyRIMs.png"
                                            alt="EPZ - Q1 Pro 10mm LCP+PU Composite Diaphragm IEM"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(376)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(376)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(376)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳3,200.00</del>
                                    <span class="fw-700 text-primary">৳2,500.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/epz-q1-pro-10mm-lcppu-composite-diaphragm-iem" class="d-block text-reset">EPZ - Q1 Pro 10mm LCP+PU Composite Diaphragm IEM</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;17%</span></span>
                            <div class="position-relative">
                                <a href="https://geekmartbd.com/product/roseselsa-distant-mountain-over-ear-hifi-wired-headphones-ootd-vintage-headset-metal-earphones-mmcx-35mm" class="d-block">
                                    <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                            data-src="https://geekmartbd.com/public/uploads/all/Ccoq3m4Ahh2pLB3SLRFsrzs7V7hozhipqNsiwIKZ.png"
                                            alt="ROSESELSA Distant Mountain Over Ear HIFI Wired Headphones OOTD Vintage Headset Metal Earphones MMCX 3.5mm"
                                            onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
                                    <a href="javascript:void(0)" onclick="addToWishList(377)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                        <i class="la la-heart-o"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="addToCompare(377)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                        <i class="las la-sync"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(377)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳7,800.00</del>
                                    <span class="fw-700 text-primary">৳6,500.00</span>
                                </div>
                                <div class="rating rating-sm mt-1">
                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                </div>
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="https://geekmartbd.com/product/roseselsa-distant-mountain-over-ear-hifi-wired-headphones-ootd-vintage-headset-metal-earphones-mmcx-35mm" class="d-block text-reset">ROSESELSA Distant Mountain Over Ear HIFI Wired Headphones OOTD Vintage Headset Metal Earphones MMCX 3.5mm</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="section_newest">
        <section class="mb-4">
            <div class="container">
                <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">
                                    New Products
                                </span>
                        </h3>
                    </div>
                    <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-digital-m300-masterhifi-dac-cs43131-dsd256-pocketable-bluetooth-digital-audio-player" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/PNVf5BtMzX6bgbtx30MGf2ypBMEh1yi0c6Rec6mY.png"
                                                alt="HiBy Digital M300 MasterHiFi DAC CS43131 DSD256 Pocketable Bluetooth Digital Audio Player"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(400)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(400)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(400)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳23,800.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-digital-m300-masterhifi-dac-cs43131-dsd256-pocketable-bluetooth-digital-audio-player" class="d-block text-reset">HiBy Digital M300 MasterHiFi DAC CS43131 DSD256 Pocketable Bluetooth Digital Audio Player</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-fd5-ak44934-cyberpunk-desktop-dac-headphone-amp" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/NZt2SajKtCUcZCkVeNNHga5m29I1QmvT3MIvfOpD.png"
                                                alt="HiBy FD5 AK4493*4 Cyberpunk Desktop DAC &amp; Headphone AMP"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(399)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(399)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(399)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳52,000.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-fd5-ak44934-cyberpunk-desktop-dac-headphone-amp" class="d-block text-reset">HiBy FD5 AK4493*4 Cyberpunk Desktop DAC &amp; Headphone AMP</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-fc4-mqa-8-unfolding-dual-es9218pc-portable-usb-dac-headphone-amp" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/WJioUYejjgZIjc1bDyeXTjLK357P6rtLBOj7tdS1.png"
                                                alt="HiBy FC4 MQA 8× Unfolding Dual ES9218PC Portable USB DAC / Headphone AMP"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(397)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(397)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(397)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳9,000.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-fc4-mqa-8-unfolding-dual-es9218pc-portable-usb-dac-headphone-amp" class="d-block text-reset">HiBy FC4 MQA 8× Unfolding Dual ES9218PC Portable USB DAC / Headphone AMP</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-r6-iii-2025-cs431984-portable-music-player-hifi-dap" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/kd6qVhqGCueCnWuMYHFcIWKTgHatXyIqZ3arWuuT.png"
                                                alt="HiBy R6 III 2025 CS43198*4 Portable Music Player HiFi DAP"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(396)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(396)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(396)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳52,500.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-r6-iii-2025-cs431984-portable-music-player-hifi-dap" class="d-block text-reset">HiBy R6 III 2025 CS43198*4 Portable Music Player HiFi DAP</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-r1-cs43131-bluetooth-51-portable-music-player" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/kVJErrEpGzEwXRZ4XuKfKNPoKTUseNQlM4EM5y3l.jpg"
                                                alt="HiBy R1 CS43131 Bluetooth 5.1 Portable Music Player"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(395)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(395)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(395)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳10,500.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-r1-cs43131-bluetooth-51-portable-music-player" class="d-block text-reset">HiBy R1 CS43131 Bluetooth 5.1 Portable Music Player</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-rs2-hifi-audio-player-medium-end-dap-with-darwin-architecture" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/zof3spvuIUBPY63vXGVMZ2bgLh0RyDLy5Bj6KrAE.jpg"
                                                alt="HiBy RS2 - HiFi Audio Player Medium-end DAP with Darwin Architecture"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(394)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(394)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(394)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳55,000.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-rs2-hifi-audio-player-medium-end-dap-with-darwin-architecture" class="d-block text-reset">HiBy RS2 - HiFi Audio Player Medium-end DAP with Darwin Architecture</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/hiby-r4-4-way-hifi-android-dap" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/Yf9AK6DkrWLKeCehgjO2XtP6Og1uJtfzgZ4pEisX.png"
                                                alt="HiBy R4 Class A 4-Way ES9018C2M DSD256 Portable Music Player"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(393)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(393)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(393)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳31,500.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/hiby-r4-4-way-hifi-android-dap" class="d-block text-reset">HiBy R4 Class A 4-Way ES9018C2M DSD256 Portable Music Player</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/bqeyz-weather-series-frost-10mm-dynamic-driver-micro-planar-transducers-iem" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/ZoSMMw28ng6afh0CQutyg63vS3ImVlvNFU7gy7lU.png"
                                                alt="BQEYZ Weather Series Frost 10mm Dynamic Driver +Micro Planar Transducers IEM"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(390)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(390)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(390)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳21,500.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/bqeyz-weather-series-frost-10mm-dynamic-driver-micro-planar-transducers-iem" class="d-block text-reset">BQEYZ Weather Series Frost 10mm Dynamic Driver +Micro Planar Transducers IEM</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/bqeyz-bq10-in-ear-earphone" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/LJH5331PN7p5TdvYusSjLA5fASRKaTsFhi9JEph7.png"
                                                alt="BQEYZ BQ10 In-ear Earphone"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(389)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(389)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(389)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳3,500.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/bqeyz-bq10-in-ear-earphone" class="d-block text-reset">BQEYZ BQ10 In-ear Earphone</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/softears-volumes-2dd-2ba-hybrid-drivers-iems" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/bxPE6RuK3wTBESLy72PePz8i4Jq91PlSXri04JEL.png"
                                                alt="Softears VolumeS 2DD +2BA Hybrid Drivers IEMs"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(385)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(385)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(385)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳36,000.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/softears-volumes-2dd-2ba-hybrid-drivers-iems" class="d-block text-reset">Softears VolumeS 2DD +2BA Hybrid Drivers IEMs</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/moondrop-meteor-1dd2ba4-planar-drivers-iems" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/yekKhtcqBJZiNEm0JpeLvYTQJRS6WefLu6eY19Gm.png"
                                                alt="Moondrop METEOR 1DD+2BA+4 Planar Drivers IEMs"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(384)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(384)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(384)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳59,000.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/moondrop-meteor-1dd2ba4-planar-drivers-iems" class="d-block text-reset">Moondrop METEOR 1DD+2BA+4 Planar Drivers IEMs</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                <div class="position-relative">
                                    <a href="https://geekmartbd.com/product/dunu-dk3001bd-1dd4ba4micro-planar-drivers-iems" class="d-block">
                                        <img
                                                class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                src="https://geekmartbd.com/public/assets/img/placeholder.jpg"
                                                data-src="https://geekmartbd.com/public/uploads/all/s4gSHwIPdibHS43wTK4gKzRSLLPH94uHNd5tGkfl.png"
                                                alt="DUNU DK3001BD 1DD+4BA+4Micro Planar Drivers IEMS"
                                                onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(383)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="addToCompare(383)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">
                                            <i class="las la-sync"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(383)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-left">
                                    <div class="fs-15">
                                        <span class="fw-700 text-primary">৳59,000.00</span>
                                    </div>
                                    <div class="rating rating-sm mt-1">
                                        <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                    </div>
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                        <a href="https://geekmartbd.com/product/dunu-dk3001bd-1dd4ba4micro-planar-drivers-iems" class="d-block text-reset">DUNU DK3001BD 1DD+4BA+4Micro Planar Drivers IEMS</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div id="section_featured">

    </div>

    <div id="section_best_selling">

    </div>

    <!-- Auction Product -->

    <div class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                <div class="col-xl col-md-6">
                    <div class="mb-3 mb-lg-0">
                        <a href="https://geekmartbd.com/product/blon-x-hbb-z300-10mm-silicone-diaphragm-in-ear-monitor-hifi-iem" class="d-block text-reset">
                            <img src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/59MAPDkWzwLv6IDCD24j2Mk6tyAy3fL19dQeRZCy.jpg" alt="Geek Mart promo" class="img-fluid lazyload w-100">
                        </a>
                    </div>
                </div>
                <div class="col-xl col-md-6">
                    <div class="mb-3 mb-lg-0">
                        <a href="https://geekmartbd.com/product/kiwi-ears-quartet-2dd2ba-hybrid-in-ear-monitor" class="d-block text-reset">
                            <img src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/oYdDiv8UsPDZ9axuRg7LKgnWeD6yIDBtqHebRVaS.jpg" alt="Geek Mart promo" class="img-fluid lazyload w-100">
                        </a>
                    </div>
                </div>
                <div class="col-xl col-md-6">
                    <div class="mb-3 mb-lg-0">
                        <a href="https://www.geekmartbd.com/brand/NiceHCK-zR7DU" class="d-block text-reset">
                            <img src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/454qfN7FWSiIoHuCcPOhMkWxzJMYXbiIZD2JcJFc.jpg" alt="Geek Mart promo" class="img-fluid lazyload w-100">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="section_home_categories">

    </div>

    <div id="section_best_sellers">
    </div>


    <section class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                <div class="col-lg-6">
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Top 10 Categories</span>
                        </h3>
                        <a href="https://geekmartbd.com/categories" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View All Categories</a>
                    </div>
                    <div class="row gutters-5">
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/wired-earphones-otove" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/Z5nCeNQvOKQFjXMSxKP9p6izP06OtuKWde8whRr7.png" alt="Wired Earphones" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Wired Earphones</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/tws" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/dzDIrwCj0LW80nXivfdXpcYrjfmCAInEldj9SRVH.png" alt="TWS" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">TWS</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/portable-dacamps-npp3g" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/SRhdUnWYTmImkb0YtyCOPDreG4wo2Um5FHz2nXL7.png" alt="Portable DAC/Amps" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Portable DAC/Amps</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/audio-cables-rpxcq" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/JUrHYlo2Z4NhosusUMpndoXTWwkefC0eDaaWDTxI.png" alt="Audio cables" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Audio cables</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/bluetooth-speakers-2gmqe" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/7K244iyPmwGmwcRSPhmhPLaaOs8mSCmVcZRCaj7W.png" alt="Bluetooth Speakers" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Bluetooth Speakers</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/powerbank-po8jd" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/hCsXljkqRHgGMVQwoDECMqLMMYxsqrT3UyjhzO1v.png" alt="Powerbank" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Powerbank</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/smart-watches-aghqr" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/xjnMOmjmtJwcF0Tyo2ua82f9WPu5uIpvtmcwS10T.png" alt="Smart Watches" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Smart Watches</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/laptop-bags--cases-rexjg" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/I8ZUPO2CIqLAed4wXjh1vbiytjRqzq0RvHNjFFp1.png" alt="Laptop Bags &amp; Cases" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Laptop Bags &amp; Cases</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/portable-fans-7conq" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/NRwPiLI0xNiTbpss9jihcyWDOTVKIUyStKzRbTci.png" alt="Portable Fans" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Portable Fans</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/category/car-accessories-ynhwn" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/rZ0yCgiRv0sgEJ7s9hfpzXRm0zzgpUX05KoGaifV.png" alt="Car Accessories" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">Car Accessories</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Top 10 Brands</span>
                        </h3>
                        <a href="https://geekmartbd.com/brands" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View All Brands</a>
                    </div>
                    <div class="row gutters-5">
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/demo-brand-12" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/WKRuVdZRcw9nt6CwMHr2SC2Gwpzxl0fqU3TGav0A.jpg" alt="MI" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">MI</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/apple-wwnlb" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/Xb4A81RYwQEfca9kzFqrgBJ833Y5YO8EkKVmdKJr.png" alt="Apple" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">Apple</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/Baseus-xM6kc" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/bOaBOtLO8ZrLNspiTMvqQ5nnHmAHwYwhHUC982N1.jpg" alt="Baseus" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">Baseus</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/Anker-n7hhf" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/qj5fF8Nd3SrfFb0NenRa9BmXOAWL2PwoxyGWdjXG.png" alt="Anker" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">Anker</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/KZ-ef5bo" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/1tN8tPMUuNnOXsH1XERj4n5tzq6PDswZbg1b0WtD.jpg" alt="KZ" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">KZ</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/Amazfit-1f5U2" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/nT66AjdNJvmomGhJaDwOIpNATe1GIJNU8cJntTvH.png" alt="Amazfit" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">Amazfit</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/blitzwolf-ydg4k" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/cMulmJrIjMwDzOr9alAjG3f0LalQXTajXsjhpPuQ.png" alt="BlitZwolf" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">BlitZwolf</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/jbl" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/7pAGVIBCIyxfFMEsKnfG7onS67vSXhToS3wtKoGh.png" alt="JBL" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">JBL</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/Haylou-dhww2" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/cEv3Qyd7Uioada8m6hi51F9uIMnh0e87XaePRnc8.png" alt="Haylou" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">Haylou</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="https://geekmartbd.com/brand/DUNU-aF4p2" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-4 text-center">
                                        <img src="https://geekmartbd.com/public/assets/img/placeholder.jpg" data-src="https://geekmartbd.com/public/uploads/all/B8rOxZPUzMJD0QS9lE1LpQtdQDqv94cXr1pGouwi.png" alt="DUNU" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='https://geekmartbd.com/public/assets/img/placeholder.jpg';">
                                    </div>
                                    <div class="col-6">
                                        <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">DUNU</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white border-top mt-auto">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <a class="text-reset border-left text-center p-4 d-block" href="https://geekmartbd.com/terms">
                        <i class="la la-file-text la-3x text-primary mb-2"></i>
                        <h4 class="h6">Terms &amp; conditions</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="text-reset border-left text-center p-4 d-block" href="https://geekmartbd.com/return-policy">
                        <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                        <h4 class="h6">return policy</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="text-reset border-left text-center p-4 d-block" href="https://geekmartbd.com/support-policy">
                        <i class="la la-support la-3x text-primary mb-2"></i>
                        <h4 class="h6">Support Policy</h4>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a class="text-reset border-left border-right text-center p-4 d-block" href="https://geekmartbd.com/privacy-policy">
                        <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                        <h4 class="h6">privacy policy</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark py-5 text-light footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4 text-center text-md-left">
                    <div class="mt-4">
                        <a href="https://geekmartbd.com" class="d-block">
                            <img class="lazyload" src="https://geekmartbd.com/public/assets/img/placeholder-rect.jpg" data-src="https://geekmartbd.com/public/uploads/all/vQliQMkOYxXSehK8slE91arax2SOhL2Som2HmUiw.webp" alt="Geek Mart" height="44">
                        </a>
                        <div class="my-3">
                            <span style="color: rgb(255, 255, 255); font-family: Inter; font-size: 15px; background-color: rgb(25, 25, 25);">Geek Mart provides top notch Gadgets, Mobile Phone &amp; different Lifestyle products. We use our own channels to import Original products. We deliver products anywhere in Bangladesh.</span>
                        </div>
                        <div class="d-inline-block d-md-block mb-4">
                            <form class="form-inline" method="POST" action="https://geekmartbd.com/subscribers">
                                <input type="hidden" name="_token" value="dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A">
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="Your Email Address" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                        <div class="w-300px mw-100 mx-auto mx-md-0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ml-xl-auto col-md-4 mr-0">
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            Contact Info
                        </h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <span class="d-block opacity-30">Address:</span>
                                <span class="d-block opacity-70">Geek Mart Shop: 3044, 3rd Floor, Shimanto Shomvar, Dhanmondi-2, Dhaka-1209</span>
                            </li>
                            <li class="mb-2">
                                <span class="d-block opacity-30">Phone:</span>
                                <span class="d-block opacity-70">01818512513</span>
                            </li>
                            <li class="mb-2">
                                <span class="d-block opacity-30">Email:</span>
                                <span class="d-block opacity-70">
                               <a href="mailto:geekmartbd@gmail.com" class="text-reset">geekmartbd@gmail.com</a>
                            </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">

                        </h4>
                        <ul class="list-unstyled">
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2">
                    <div class="text-center text-md-left mt-4">
                        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">
                            My Account
                        </h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="https://geekmartbd.com/users/login">
                                    Login
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="https://geekmartbd.com/purchase_history">
                                    Order History
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="https://geekmartbd.com/wishlists">
                                    My Wishlist
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="opacity-50 hov-opacity-100 text-reset" href="https://geekmartbd.com/track-your-order">
                                    Track Order
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

