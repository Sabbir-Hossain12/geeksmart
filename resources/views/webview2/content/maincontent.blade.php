@extends('webview2.master')

@section('title','Home')

@section('maincontent')
    <div class="home-banner-area mb-4 pt-3">
        <div class="container">
            <div class="row gutters-10 position-relative">
                <div class="col-lg-3 position-static d-none d-lg-block">
                    <div class="aiz-category-menu bg-white rounded  shadow-sm">
                        <div class="p-3 bg-soft-primary d-none d-lg-block rounded-top all-category position-relative text-left">
                            <span class="fw-600 fs-16 mr-3">Categories</span>
                            <a href="{{ url('/view/categories') }}" class="text-reset">
                                <span class="d-none d-lg-inline-block">See All ></span>
                            </a>
                        </div>
                        <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left">
                            @forelse($categories->take(8) as $category) 
                            <li class="category-nav-element" data-id="{{  $category->id}}">
                                <a href="{{  url('category', $category->slug)}}" class="text-truncate text-reset py-2 px-3 d-block">
                                    <img
                                            class="cat-image lazyload mr-2 opacity-60"
                                            src="{{ asset($category->category_icon) }}"
                                            data-src="{{ asset($category->category_icon) }}"
                                            width="16"
                                            alt=""
                                            onerror="this.onerror=null;this.src='{{ asset($category->category_icon) }}';"
                                    >
                                    <span class="cat-name">{{  $category->category_name}}</span>
                                </a>
                                
                                <div class="sub-cat-menu c-scrollbar-light rounded shadow-lg p-4">
                                    <div class="card-columns">
                                        <div class="card shadow-none border-0">
                                            
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>


            {{--    Sliders    --}}
                <div class="col-lg-9">
                    <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                        
                        @forelse($sliders as $slider) 
                        <div class="carousel-box">
                            <a href="">
                                <img
                                        class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                        src="{{ asset($slider->slider_image) }}"
                                        alt=""
                                        height="457"
                                        onerror="this.onerror=null;this.src='{{ asset($slider->slider_image) }}';"
                                >
                            </a>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>

                <div class="col-lg-2 order-3 mt-3 mt-lg-0 d-none">
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

    


    {{-- Promotional Offers--}}
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Promotional Offers</span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="2025/05/31 23:59:00"></div>
                    <a href="https://geekmartbd.com/flash-deal/winter-super-sale-PqEF8" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">View More</a>
                </div>

                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                     data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @forelse($topproducts as $promotional)
                        @php
                            $firstpro = App\Models\Product::with([
                                'sizes' => function ($query) {
                                    $query
                                        ->select('id', 'product_id', 'Discount', 'RegularPrice', 'SalePrice')
                                        ->take(1);
                                },
                            ])
                                ->where('id', json_decode($promotional->RelatedProductIds)[0]->productID)
                                ->select('id', 'ProductName')
                                ->first();

                        @endphp
                    <div class="carousel-box">
                        <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
{{--                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;11%</span></span>--}}
                            <div class="position-relative">
                                <a href="{{ url('view-product/' . $promotional->ProductSlug) }}" class="d-block">
                                    <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                         src="{{ asset($promotional->ProductImage) }}"
                                         data-src="{{ asset($promotional->ProductImage) }}"
                                         alt=""
                                         onerror="this.onerror=null;this.src='{{ asset($promotional->ProductImage) }}';"
                                    >
                                </a>
                                <div class="absolute-top-right aiz-p-hov-icon">
{{--                                    <a href="javascript:void(0)" onclick="addToWishList(178)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">--}}
{{--                                        <i class="la la-heart-o"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="javascript:void(0)" onclick="addToCompare(178)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">--}}
{{--                                        <i class="las la-sync"></i>--}}
{{--                                    </a>--}}
                                    <a href="javascript:void(0)" onclick="showAddToCartModal(178)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                        <i class="las la-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-md-3 p-2 text-left">
                                <div class="fs-15">
                                    <del class="fw-600 opacity-50 mr-1">৳{{ round($firstpro->sizes[0]->RegularPrice) }}</del>
                                    <span class="fw-700 text-primary">৳{{ round($firstpro->sizes[0]->SalePrice) }}</span>
                                </div>
{{--                                <div class="rating rating-sm mt-1">--}}
{{--                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>--}}
{{--                                </div>--}}
                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                    <a href="{{ url('view-product/' . $promotional->ProductSlug) }}" class="d-block text-reset">
                                        {{ $promotional->ProductName }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                        @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    {{-- Ad banners --}}
    <div class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                @forelse($adds as $add)
                    <div class="col-xl-4 col-md-6">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ $add->add_link }}" class="d-block text-reset">
                                <img src="{{ asset($add->add_image) }}" data-src="{{ asset($add->add_image) }}" alt="" class="img-fluid lazyload w-100">
                            </a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    
    {{-- Category Products --}}
    @forelse($categoryproducts as $products)
        @if (count($products->mainproducts) > 0)
            <section class="mb-4">
                <div class="container">
                    <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">

                        <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                            <h3 class="h5 fw-700 mb-0">
                                <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ $products->category_name }}</span>
                            </h3>
{{--                            <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="2025/05/31 23:59:00"></div>--}}
                            <a href="{{ url('products/category/' . $products->slug) }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">View More</a>
                        </div>

                        <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5"
                             data-lg-items="4" data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                            @forelse($products->mainproducts as $promotional)
                                @php
                                    $firstpro = App\Models\Product::with([
                                        'sizes' => function ($query) {
                                            $query
                                                ->select('id', 'product_id', 'Discount', 'RegularPrice', 'SalePrice')
                                                ->take(1);
                                        },
                                    ])
                                        ->where('id', json_decode($promotional->RelatedProductIds)[0]->productID)
                                        ->select('id', 'ProductName')
                                        ->first();

                                @endphp
                                <div class="carousel-box">
                                    <div class="aiz-card-box border border-light rounded hov-shadow-md mt-1 mb-2 has-transition bg-white">
                                        {{--                            <span class="badge-custom">OFF<span class="box ml-1 mr-0">&nbsp;11%</span></span>--}}
                                        <div class="position-relative">
                                            <a href="{{ url('view-product/' . $promotional->ProductSlug) }}" class="d-block">
                                                <img class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                     src="{{ asset($promotional->ProductImage) }}"
                                                     data-src="{{ asset($promotional->ProductImage) }}"
                                                     alt=""
                                                     onerror="this.onerror=null;this.src='{{ asset($promotional->ProductImage) }}';"
                                                >
                                            </a>
                                            <div class="absolute-top-right aiz-p-hov-icon">
                                                {{--                                    <a href="javascript:void(0)" onclick="addToWishList(178)" data-toggle="tooltip" data-title="Add to wishlist" data-placement="left">--}}
                                                {{--                                        <i class="la la-heart-o"></i>--}}
                                                {{--                                    </a>--}}
                                                {{--                                    <a href="javascript:void(0)" onclick="addToCompare(178)" data-toggle="tooltip" data-title="Add to compare" data-placement="left">--}}
                                                {{--                                        <i class="las la-sync"></i>--}}
                                                {{--                                    </a>--}}
                                                <a href="javascript:void(0)" onclick="showAddToCartModal(178)" data-toggle="tooltip" data-title="Add to cart" data-placement="left">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-md-3 p-2 text-left">
                                            <div class="fs-15">
                                                <del class="fw-600 opacity-50 mr-1">৳{{ round($firstpro->sizes[0]->RegularPrice) }}</del>
                                                <span class="fw-700 text-primary">৳{{ round($firstpro->sizes[0]->SalePrice) }}</span>
                                            </div>
                                            {{--                                <div class="rating rating-sm mt-1">--}}
                                            {{--                                    <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>--}}
                                            {{--                                </div>--}}
                                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                <a href="{{ url('view-product/' . $promotional->ProductSlug) }}" class="d-block text-reset">
                                                    {{ $promotional->ProductName }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        @else
        @endif
        
    @empty
    @endforelse
    

    <div id="section_home_categories">

    </div>

    <div id="section_best_sellers">
    </div>


    <section class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                <div class="col-lg-12">
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Top 10 Categories</span>
                        </h3>
                        <a href="https://geekmartbd.com/categories" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">View All Categories</a>
                    </div>
                    <div class="row gutters-5">
                        @forelse($categories->take(10) as $category) 
                        <div class="col-sm-6">
                            <a href="{{ url('category/' . $category->slug ) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-3 text-center">
                                        <img src="{{ asset($category->category_icon) }}" data-src="{{ asset($category->category_icon) }}" alt="Wired Earphones" class="img-fluid img lazyload h-60px" onerror="this.onerror=null;this.src='{{ asset($category->category_icon) }}';">
                                    </div>
                                    <div class="col-7">
                                        <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">{{ $category->category_name }}</div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <i class="la la-angle-right text-primary"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection

