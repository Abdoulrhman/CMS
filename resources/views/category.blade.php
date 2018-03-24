@extends('layouts.temp')
@section('content')


    <!--Page Header-->
    <section class="page_header shop_one padding_t">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center padding_t">
                    <h1 class="text-uppercase bottom10">{{$category->name}}</h1>
                    <p class="title_text blackcolor padding_b">Best Selling Products Our all the World</p>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a> </li>
                        <li class="active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header ends -->


    <!--Gallery Starts-->
    <section id="emp_gallery" class="padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 heading_space">
                    <div id="project-filter" class="cbp-l-filters bottom10">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Show All</div>
                        <div data-filter=".style" class="cbp-filter-item"> Lifestyle </div>
                        <div data-filter=".shoes" class="cbp-filter-item">  Shoes  </div>
                        <div data-filter=".essentials" class="cbp-filter-item">Essentials </div>
                        <div data-filter=".fall" class="cbp-filter-item">Fall 2015 </div>
                    </div>
                </div>
            </div>
            <div id="shop_two" class="cbp">
                <div class="cbp-item shoes style fall">
                    <div class="image">
                        <div class="ptags"><span class="off"> 40% </span></div>
                        <div class="fader">
                            <img src="images/shop-product1.jpg" alt="">
                            <img src="images/shop-product8.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item essentials">
                    <div class="image">
                        <div class="ptags"><span class="hot"> Hot </span></div>
                        <div class="fader">
                            <img src="images/shop-product2.jpg" alt="">
                            <img src="images/shop-product5.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like fill"><i class="icon-heart"></i></span>
                    </div>
                </div>
                <div class="cbp-item sale">
                    <div class="image">
                        <div class="fader">
                            <img src="images/shop-product3.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item latest rent">
                    <div class="image">
                        <div class="fader">
                            <img src="images/shop-product4.jpg" alt="">
                            <img src="images/shop-product14.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                    </div>
                </div>
                <div class="cbp-item sale">
                    <div class="image">
                        <div class="ptags"><span class="new"> NEW </span></div>
                        <div class="fader">
                            <img src="images/shop-product6.jpg" alt="">
                            <img src="images/shop-product4.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item latest rent">
                    <div class="image">
                        <div class="ptags"><span class="hot"> HOT </span></div>
                        <div class="fader">
                            <img src="images/shop-product9.jpg" alt="">
                            <img src="images/shop-product15.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item management sale">
                    <div class="image">
                        <div class="ptags"><span class="off"> 15% </span></div>
                        <div class="fader">
                            <img src="images/shop-product7.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item services style shoes">
                    <div class="image">
                        <div class="fader">
                            <img src="images/shop-product8.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item services sale latest">
                    <div class="image">
                        <div class="ptags"><span class="off"> 15% </span></div>
                        <div class="fader">
                            <img src="images/shop-product9.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item shoes">
                    <div class="image">
                        <div class="ptags"><span class="hot"> HOT </span></div>
                        <div class="fader">
                            <img src="images/shop-product10.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item services sale latest">
                    <div class="image">
                        <div class="fader">
                            <img src="images/shop-product11.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
                <div class="cbp-item services sale latest">
                    <div class="image">
                        <div class="ptags"><span class="hot"> HOT </span> <span class="off"> 15% </span></div>
                        <div class="fader">
                            <img src="images/shop-product12.jpg" alt="">
                            <img src="images/shop-product1.jpg" alt="">
                        </div>
                        <div class="shop_buttons">
                            <a class="add_emp" href="#."> <i class="icon-icons102"></i> add to bag </a>
                            <a class="ext_emp" href="javascript:void(0)" data-toggle="modal" data-target="#demo"> <i class="icon-expand"></i></a>
                        </div>
                    </div>
                    <div class="product_caption padding_b">
                        <a href="#.">
                            <h6 class="bottom10">Little Barrel in White</h6>
                        </a>
                        <p class="p-price">$160.00</p>
                        <span class="like"><i class="icon-heart3"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center">
                <div id="loadMore-gallery" class="btn btn_default button_moema margin40">
                    <a href="loadmore-gallery/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">
                        <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
                        <span class="cbp-l-loadMore-loadingText">LOADING...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade emp-quickview" id="demo" tabindex="-1" role="dialog" aria-labelledby="demo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="image">
                                <img src="images/product5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="view-rating">
                                <span class="view-stars bottom30">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <span>(3 customer review)</span>
                            </div>
                            <h2>Barber’s Broom Classiscs</h2>
                            <h3 class="top10">$112.00</h3>
                            <p class="top30 bottom30">It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its distribution of letters.</p>
                            <a class="btn btn_colored btn_rounded button_moema icon-drop" href="#."> <i class="icon-icons102"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    @stop