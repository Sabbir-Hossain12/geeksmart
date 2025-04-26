<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="">
    <meta name="file-base-url" content="">

    <title>
        @yield('title')
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="" />
    <meta name="keywords" content="">


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="">

    <!-- Open Graph data -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="" />
    <meta property="fb:app_id" content="">

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/vendors.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/aiz-core.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/custom-style.css">


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing found',
            choose_file: 'Choose File',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }

        :root {
            --primary: #fcdf77;
            --hov-primary: #FCCA19;
            --soft-primary: rgba(252, 223, 119, 0.15);
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }
    </style>
    
</head>

<body>
<!-- aiz-main-wrapper -->
<div class="aiz-main-wrapper d-flex flex-column">

@include('webview2.partials.header')
    
   @yield('maincontent')

    @include('webview2.partials.footer')
    
</div>



<script>
    function confirm_modal(delete_url) {
        jQuery('#confirm-delete').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">
                <p>Delete confirmation message</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addToCart">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
        <div class="modal-content position-relative">
            <div class="c-preloader text-center p-3">
                <i class="las la-spinner la-spin la-3x"></i>
            </div>
            <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="la-2x">&times;</span>
            </button>
            <div id="addToCart-modal-body">

            </div>
        </div>
    </div>
</div>


<!-- SCRIPTS -->
<script src="{{asset('public/frontend')}}/assets/js/vendors.js"></script>
<script src="{{asset('public/frontend')}}/assets/js/aiz-core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v3.3'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>


<script>
</script>

<script>
    $(document).ready(function() {
        $('.category-nav-element').each(function(i, el) {
            $(el).on('mouseover', function() {
                if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                    $.post('https://geekmartbd.com/category/nav-element-list', {
                        _token: AIZ.data.csrf,
                        id: $(el).data('id')
                    }, function(data) {
                        $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                    });
                }
            });
        });
        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-menu a').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('https://geekmartbd.com/language', {
                        _token: AIZ.data.csrf,
                        locale: locale
                    }, function(data) {
                        location.reload();
                    });

                });
            });
        }

        if ($('#currency-change').length > 0) {
            $('#currency-change .dropdown-menu a').each(function() {
                $(this).on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this);
                    var currency_code = $this.data('currency');
                    $.post('https://geekmartbd.com/currency', {
                        _token: AIZ.data.csrf,
                        currency_code: currency_code
                    }, function(data) {
                        location.reload();
                    });

                });
            });
        }
    });

    $('#search').on('keyup', function() {
        search();
    });

    $('#search').on('focus', function() {
        search();
    });

    function search() {
        var searchKey = $('#search').val();
        if (searchKey.length > 0) {
            $('body').addClass("typed-search-box-shown");

            $('.typed-search-box').removeClass('d-none');
            $('.search-preloader').removeClass('d-none');
            $.post('https://geekmartbd.com/ajax-search', {
                _token: AIZ.data.csrf,
                search: searchKey
            }, function(data) {
                if (data == '0') {
                    // $('.typed-search-box').addClass('d-none');
                    $('#search-content').html(null);
                    $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                    $('.search-preloader').addClass('d-none');

                } else {
                    $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                    $('#search-content').html(data);
                    $('.search-preloader').addClass('d-none');
                }
            });
        } else {
            $('.typed-search-box').addClass('d-none');
            $('body').removeClass("typed-search-box-shown");
        }
    }

    function updateNavCart(view, count) {
        $('.cart-count').html(count);
        $('#cart_items').html(view);
    }

    function removeFromCart(key) {
        $.post('https://geekmartbd.com/cart/removeFromCart', {
            _token: AIZ.data.csrf,
            id: key
        }, function(data) {
            updateNavCart(data.nav_cart_view, data.cart_count);
            $('#cart-summary').html(data.cart_view);
            AIZ.plugins.notify('success', "Item has been removed from cart");
            $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
        });
    }

    function addToCompare(id) {
        $.post('https://geekmartbd.com/compare/addToCompare', {
            _token: AIZ.data.csrf,
            id: id
        }, function(data) {
            $('#compare').html(data);
            AIZ.plugins.notify('success', "Item has been added to compare list");
            $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
        });
    }

    function addToWishList(id) {
        AIZ.plugins.notify('warning', "Please login first");
    }

    function showAddToCartModal(id) {
        if (!$('#modal-size').hasClass('modal-lg')) {
            $('#modal-size').addClass('modal-lg');
        }
        $('#addToCart-modal-body').html(null);
        $('#addToCart').modal();
        $('.c-preloader').show();
        $.post('https://geekmartbd.com/cart/show-cart-modal', {
            _token: AIZ.data.csrf,
            id: id
        }, function(data) {
            $('.c-preloader').hide();
            $('#addToCart-modal-body').html(data);
            AIZ.plugins.slickCarousel();
            AIZ.plugins.zoom();
            AIZ.extra.plusMinus();
            getVariantPrice();
        });
    }

    $('#option-choice-form input').on('change', function() {
        getVariantPrice();
    });

    function getVariantPrice() {
        if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
            $.ajax({
                type: "POST",
                url: 'https://geekmartbd.com/product/variant_price',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {

                    $('.product-gallery-thumb .carousel-box').each(function(i) {
                        if ($(this).data('variation') && data.variation == $(this).data('variation')) {
                            $('.product-gallery-thumb').slick('slickGoTo', i);
                        }
                    })

                    $('#option-choice-form #chosen_price_div').removeClass('d-none');
                    $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                    $('#available-quantity').html(data.quantity);
                    $('.input-number').prop('max', data.max_limit);
                    if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                        $('.buy-now').addClass('d-none');
                        $('.add-to-cart').addClass('d-none');
                        $('.out-of-stock').removeClass('d-none');
                    } else {
                        $('.buy-now').removeClass('d-none');
                        $('.add-to-cart').removeClass('d-none');
                        $('.out-of-stock').addClass('d-none');
                    }

                    AIZ.extra.plusMinus();
                }
            });
        }
    }

    function checkAddToCartValidity() {
        var names = {};
        $('#option-choice-form input:radio').each(function() { // find unique names
            names[$(this).attr('name')] = true;
        });
        var count = 0;
        $.each(names, function() { // then count them
            count++;
        });

        if ($('#option-choice-form input:radio:checked').length == count) {
            return true;
        }

        return false;
    }

    function addToCart() {

        if (checkAddToCartValidity()) {
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type: "POST",
                url: 'https://geekmartbd.com/cart/addtocart',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {

                    $('#addToCart-modal-body').html(null);
                    $('.c-preloader').hide();
                    $('#modal-size').removeClass('modal-lg');
                    $('#addToCart-modal-body').html(data.modal_view);
                    AIZ.extra.plusMinus();
                    AIZ.plugins.slickCarousel();
                    updateNavCart(data.nav_cart_view, data.cart_count);
                }
            });
        } else {
            AIZ.plugins.notify('warning', "Please choose all the options");
        }
    }

    function buyNow() {

        if (checkAddToCartValidity()) {
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.ajax({
                type: "POST",
                url: 'https://geekmartbd.com/cart/addtocart',
                data: $('#option-choice-form').serializeArray(),
                success: function(data) {
                    if (data.status == 1) {

                        $('#addToCart-modal-body').html(data.modal_view);
                        updateNavCart(data.nav_cart_view, data.cart_count);

                        window.location.replace("https://geekmartbd.com/cart");
                    } else {
                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                    }
                }
            });
        } else {
            AIZ.plugins.notify('warning', "Please choose all the options");
        }
    }
</script>

<script>
    $(document).ready(function() {
        $.post('https://geekmartbd.com/home/section/featured', {
            _token: 'dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A'
        }, function(data) {
            $('#section_featured').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://geekmartbd.com/home/section/best_selling', {
            _token: 'dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A'
        }, function(data) {
            $('#section_best_selling').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://geekmartbd.com/home/section/auction_products', {
            _token: 'dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A'
        }, function(data) {
            $('#auction_products').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://geekmartbd.com/home/section/home_categories', {
            _token: 'dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A'
        }, function(data) {
            $('#section_home_categories').html(data);
            AIZ.plugins.slickCarousel();
        });
        $.post('https://geekmartbd.com/home/section/best_sellers', {
            _token: 'dabpOBbaFeNAMRbTbtLgXlFn1pubBLTApjbjXa7A'
        }, function(data) {
            $('#section_best_sellers').html(data);
            AIZ.plugins.slickCarousel();
        });
    });
</script>

<script>
    //check cart
    function checkcart() {
        $.ajax({
            type: 'GET',
            url: '{{ url('get-checkcart-content') }}',

            success: function(response) {
                $('#checkcartview').html('');
                $('#checkcartview').append(
                    response);
            },
            error: function(error) {
                console.log('error');
            }
        });
    }
</script>


</body>

</html>