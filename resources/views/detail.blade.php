@extends('layouts.client-master')
@section('title', $model->name)
@section('breadcrumb-area')
<div class="breadcrumb-area pt--70 pt-md--25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('cate', ['id' => $model->category->id])}}">{{$model->category->cate_name}}</a></li>
                    <li class="current"><span>{{$model->name}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content-inner enable-full-width">
    <div class="container-fluid">
        <div class="row pt--40">
            <div class="col-md-6 product-main-image">
                <div class="product-image">
                    <div class="product-gallery vertical-slide-nav">
                        <div class="product-gallery__thumb">
                            <div class="product-gallery__thumb--image">
                                <div class="nav-slider slick-vertical slick-initialized slick-slider" data-options="{
                                &quot;vertical&quot;: true, 
                                &quot;vertical_md&quot;: false, 
                                &quot;infinite_md&quot;: false, 
                                &quot;slideToShow_sm&quot;: 4,
                                &quot;slideToShow_xs&quot;: 3,
                                &quot;arrows&quot;: true,
                                &quot;arrowPrev&quot;: &quot;fa fa-angle-up&quot;,
                                &quot;arrowNext&quot;: &quot;fa fa-angle-down&quot;,
                                &quot;arrowPrev_md&quot;: &quot;dl-icon-left&quot;,
                                &quot;arrowNext_md&quot;: &quot;dl-icon-right&quot;
                                }"><span class="slick-btn slick-prev slick-arrow" aria-disabled="false" style=""><i class="fa fa-angle-up"></i></span>
                                    <div class="slick-list draggable" style="height: 270.562px;"><div class="slick-track" style="opacity: 1; height: 361px; transform: translate3d(0px, -90px, 0px);"><figure class="product-gallery__thumb--single slick-slide" data-slick-index="0" aria-hidden="true" style="width: 70px;" tabindex="-1">
                                        <img src="assets/img/products/prod-19-1-2.jpg" alt="Products">
                                    </figure><figure class="product-gallery__thumb--single slick-slide" data-slick-index="1" aria-hidden="true" style="width: 70px;" tabindex="-1">
                                        <img src="assets/img/products/prod-19-2-2.jpg" alt="Products">
                                    </figure><figure class="product-gallery__thumb--single slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" style="width: 70px;" tabindex="0">
                                        <img src="assets/img/products/prod-19-3-2.jpg" alt="Products">
                                    </figure><figure class="product-gallery__thumb--single slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 70px;" tabindex="0">
                                        <img src="assets/img/products/prod-19-4-2.jpg" alt="Products">
                                    </figure></div></div>
                                    
                                    
                                    
                                <span class="slick-btn slick-next slick-arrow slick-disabled" style="" aria-disabled="true"><i class="fa fa-angle-down"></i></span></div>
                            </div>
                        </div>
                        <div class="product-gallery__large-image">
                            <div class="gallery-with-thumbs">
                                <div class="product-gallery__wrapper">
                                    <div class="main-slider product-gallery__full-image image-popup slick-initialized slick-slider">
                                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2040px;"><figure class="product-gallery__image zoom slick-slide" data-slick-index="0" style="position: relative; overflow: hidden; width: 510px; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" aria-hidden="true" tabindex="-1">
                                            <img src="assets/img/products/prod-19-1-big.jpg" alt="Product">
                                        <img role="presentation" alt="" src="file:///Users/ginv2/Google%20Drive/17.working/25.%20Son-market/airi/assets/img/products/prod-19-1-big.jpg" class="zoomImg" style="position: absolute; top: -0.960784px; left: -8.64706px; opacity: 0; width: 1000px; height: 1300px; border: none; max-width: none; max-height: none;"></figure><figure class="product-gallery__image zoom slick-slide" data-slick-index="1" style="position: relative; overflow: hidden; width: 510px; left: -510px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" aria-hidden="true" tabindex="-1">
                                            <img src="assets/img/products/prod-19-2-big.jpg" alt="Product">
                                        <img role="presentation" alt="" src="file:///Users/ginv2/Google%20Drive/17.working/25.%20Son-market/airi/assets/img/products/prod-19-2-big.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1000px; height: 1300px; border: none; max-width: none; max-height: none;"></figure><figure class="product-gallery__image zoom slick-slide slick-current slick-active" data-slick-index="2" style="position: relative; overflow: hidden; width: 510px; left: -1020px; top: 0px; z-index: 999; opacity: 1;" aria-hidden="false" tabindex="0">
                                            <img src="assets/img/products/prod-19-3-big.jpg" alt="Product">
                                        <img role="presentation" alt="" src="file:///Users/ginv2/Google%20Drive/17.working/25.%20Son-market/airi/assets/img/products/prod-19-3-big.jpg" class="zoomImg" style="position: absolute; top: -56.6863px; left: -6.72549px; opacity: 0; width: 1000px; height: 1300px; border: none; max-width: none; max-height: none;"></figure><figure class="product-gallery__image zoom slick-slide" data-slick-index="3" style="position: relative; overflow: hidden; width: 510px; left: -1530px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" aria-hidden="true" tabindex="-1">
                                            <img src="assets/img/products/prod-19-4-big.jpg" alt="Product">
                                        <img role="presentation" alt="" src="file:///Users/ginv2/Google%20Drive/17.working/25.%20Son-market/airi/assets/img/products/prod-19-4-big.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 1000px; height: 1300px; border: none; max-width: none; max-height: none;"></figure></div></div>
                                        
                                        
                                        
                                    </div>
                                    <div class="product-gallery__actions">
                                        <button class="action-btn btn-zoom-popup"><i class="dl-icon-zoom-in"></i></button>
                                        <a href="https://www.youtube.com/watch?v=Rp19QD2XIGM" class="action-btn video-popup"><i class="dl-icon-format-video"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="product-badge new">New</span>
                </div>
            </div>
            <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                <div class="product-summary">
                    <div class="product-rating float-left">
                        <span>
                            <i class="dl-icon-star rated"></i>
                            <i class="dl-icon-star rated"></i>
                            <i class="dl-icon-star rated"></i>
                            <i class="dl-icon-star rated"></i>
                            <i class="dl-icon-star rated"></i>
                        </span>
                        <a href="#" class="review-link">(1 customer review)</a>
                    </div>
                    <div class="product-navigation">
                        <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                        <a href="#" class="next"><i class="dl-icon-right"></i></a>
                    </div>
                    <div class="clearfix"></div>
                    <h3 class="product-title">Waxed-effect pleated skirt</h3>
                    <span class="product-stock in-stock float-right">
                        <i class="dl-icon-check-circle1"></i>
                        in stock
                    </span>
                    <div class="product-price-wrapper mb--40 mb-md--10">
                        <span class="money">$49.00</span>
                        <span class="old-price">
                            <span class="money">$60.00</span>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                    <p class="product-short-description mb--45 mb-sm--20">Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                    <form action="#" class="form--action mb--30 mb-sm--20">
                        <div class="product-action flex-row align-items-center">
                            <div class="quantity">
                                <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                            <div class="dec qtybutton">-</div><div class="inc qtybutton">+</div></div>
                            <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                Add To Cart
                            </button>
                            <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                            <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                        </div>  
                    </form>
                    <div class="product-extra mb--40 mb-sm--20">
                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                    </div>
                    <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                        <div class="product-meta">
                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF. LA-887</span></span>
                            <span class="posted_in font-size-12">Categories: 
                                <a href="shop-sidebar.html">Fashions</a>
                            </span>
                            <span class="posted_in font-size-12">Tags: 
                                <a href="shop-sidebar.html">dress,</a>
                                <a href="shop-sidebar.html">fashions,</a>
                                <a href="shop-sidebar.html">women</a>
                            </span>
                        </div>
                        <div class="product-share-box">
                            <span class="font-size-12">Share With</span>
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
            <div class="col-12">
                <div class="product-data-tab tab-style-1">
                    <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab" role="tablist">
                        <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                            <span>Description</span>
                        </a>
                        <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                            <span>Reviews(1)</span>
                        </a>
                    </div>
                    <div class="tab-content product-data-tab__content" id="product-tabContent">
                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                            <div class="product-description">
                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.

                                </p><p>Nunc lacus elit, faucibus ac laoreet sed, dapibus ac mi. Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper. Phasellus accumsan, justo ac mollis pharetra, ex dui pharetra nisl, a scelerisque ipsum nulla ac sem. Cras eu risus urna. Duis lorem sapien, congue eget nisl sit amet, rutrum faucibus elit.</p>
                                
                                <ul>
                                    <li>Maecenas eu ante a elit tempus fermentum. Aliquam commodo tincidunt semper</li>
                                    <li>Aliquam est et tempus. Eaecenas libero ante, tincidunt vel</li>
                                </ul>
                                
                                <p>Curabitur sodales euismod nibh. Sed iaculis sed orci eget semper. Nam auctor, augue et eleifend tincidunt, felis mauris convallis neque, in placerat metus urna laoreet diam. Morbi sagittis facilisis arcu sed ornare. Maecenas dictum urna ut facilisis rhoncus.iaculis sed orci eget semper. Nam auctor, augue et eleifend tincidunt, felis mauris</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                            <div class="product-reviews">
                                <h3 class="review__title">1 review for Waxed-effect pleated skirt</h3>
                                <ul class="review__list">
                                    <li class="review__item">
                                        <div class="review__container">
                                            <img src="assets/img/others/comment-icon-2.png" alt="Review Avatar" class="review__avatar">
                                            <div class="review__text">
                                                <div class="product-rating float-right">
                                                    <span>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                    </span>
                                                </div>
                                                <div class="review__meta">
                                                    <strong class="review__author">John Snow </strong>
                                                    <span class="review__dash">-</span>
                                                    <span class="review__published-date">November 20, 2018</span>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="review__description">Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-form-wrapper">
                                    <span class="reply-title"><strong>Add a review</strong></span>
                                    <form action="#" class="form">
                                        <div class="form-notes mb--20">
                                            <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                        </div>
                                        <div class="form__group mb--30 mb-sm--20">
                                            <div class="revew__rating">
                                                <p class="stars selected">
                                                    <a class="star-1 active" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form__group mb--30 mb-sm--20">
                                            <div class="form-row">
                                                <div class="col-sm-6 mb-sm--20">
                                                    <label class="form__label" for="name">Name<span class="required">*</span></label>
                                                    <input type="text" name="name" id="name" class="form__input">
                                                </div>  
                                                <div class="col-sm-6">
                                                    <label class="form__label" for="email">email<span class="required">*</span></label>
                                                    <input type="email" name="email" id="email" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__group mb--30 mb-sm--20">
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <label class="form__label" for="email">Your Review<span class="required">*</span></label>
                                                    <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__group">
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <input type="submit" value="Submit" class="btn btn-style-1 btn-submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt--65 pt-md--45 pt-sm--25 pb--35 pb-md--25 pb-sm--15">
            <div class="col-12">
                <div class="row mb--40 mb-md--30">
                    <div class="col-12 text-center">
                        <h2 class="heading-secondary">Up-Sells Products</h2>
                        <hr class="separator center mt--25 mt-md--15">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="airi-element-carousel product-carousel nav-vertical-center slick-carousel-0 slick-gutter-30 slick-initialized slick-slider" data-slick-options="{
                        &quot;spaceBetween&quot;: 30,
                        &quot;slidesToShow&quot;: 4,
                        &quot;slidesToScroll&quot;: 1,
                        &quot;arrows&quot;: true, 
                        &quot;prevArrow&quot;: &quot;dl-icon-left&quot;, 
                        &quot;nextArrow&quot;: &quot;dl-icon-right&quot; 
                        }" data-slick-responsive="[
                            {&quot;breakpoint&quot;:1200, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3} },
                            {&quot;breakpoint&quot;:991, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2} },
                            {&quot;breakpoint&quot;:450, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1} }
                        ]">
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1252px; transform: translate3d(0px, 0px, 0px);"><div class="airi-product slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-8-2.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-8-1.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Polka dot blouse</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$60.00</span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div><div class="airi-product slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-3-2.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-3-3.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Dotted mesh blouse</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div><div class="airi-product slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-1-1.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-1-4.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Ruffled polka dot blouse</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div><div class="airi-product slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-20-1.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-20-2.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="product-badge sale">Sale</span>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Limited edition v-neck t-shirt</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div></div></div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
            <div class="col-12">
                <div class="row mb--40 mb-md--30">
                    <div class="col-12 text-center">
                        <h2 class="heading-secondary">Related Products</h2>
                        <hr class="separator center mt--25 mt-md--15">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="airi-element-carousel product-carousel nav-vertical-center slick-carousel-1 slick-gutter-30 slick-initialized slick-slider" data-slick-options="{
                        &quot;spaceBetween&quot;: 30,
                        &quot;slidesToShow&quot;: 4,
                        &quot;slidesToScroll&quot;: 1,
                        &quot;arrows&quot;: true, 
                        &quot;prevArrow&quot;: &quot;dl-icon-left&quot;, 
                        &quot;nextArrow&quot;: &quot;dl-icon-right&quot; 
                        }" data-slick-responsive="[
                            {&quot;breakpoint&quot;:1200, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3} },
                            {&quot;breakpoint&quot;:991, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2} },
                            {&quot;breakpoint&quot;:450, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1} }
                        ]">
                            <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1252px; transform: translate3d(0px, 0px, 0px);"><div class="airi-product slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-12-1.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-12-4.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Open sweatshirt</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                            <span class="product-price-old">
                                                <span class="money">$60.00</span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div><div class="airi-product slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-5-3.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-5-4.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Split suede handbag</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div><div class="airi-product slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-14-2.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-14-1.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Super skinny blazer</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div><div class="airi-product slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 313px;" tabindex="0">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html" tabindex="0">
                                                <img src="assets/img/products/prod-7-2.jpg" alt="Product Image" class="primary-image">
                                                <img src="assets/img/products/prod-7-1.jpg" alt="Product Image" class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Shop" tabindex="0">
                                                    <span data-toggle="modal" data-target="#productModal">
                                                        <i class="dl-icon-view"></i>
                                                    </span>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart" tabindex="0">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist" tabindex="0">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Compare" tabindex="0">
                                                    <i class="dl-icon-compare"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <span class="product-badge sale">Sale</span>
                                    </figure>
                                    <div class="product-info text-center">
                                        <h3 class="product-title">
                                            <a href="product-details.html" tabindex="0">Leopard print satin shirt</a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money">$49.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    