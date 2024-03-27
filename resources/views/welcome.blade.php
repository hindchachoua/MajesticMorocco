@extends('layout.layout')
@section('title', 'Welcome')
    
@section('content')
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('storage/images/produits-locals.jpg')}}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <p class="text-primary text-uppercase fw-bold mb-2">// The Best For You</p>
                            <h1 class="display-1 text-light mb-4 animated slideInDown">Discover the Magic of Morocco</h1>
                            <p class="text-light fs-5 mb-4 pb-3"><span style="">Welcome</span> to our portal of enchantment, where the allure of Morocco  awaits. Immerse yourself in the vibrant tapestry of Moroccan culture, as  we unveil the mesmerizing beauty and rich heritage of its traditional  products. Let the journey begin.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('storage/images/produits-locals.jpg')}}" alt="">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8">
                            <p class="text-primary text-uppercase fw-bold mb-2">// The Best Bakery</p>
                            <h1 class="display-1 text-light mb-4 animated slideInDown">We Bake With Passion</h1>
                            <p class="text-light fs-5 mb-4 pb-3">Vero elitr justo clita lorem. Ipsum dolor sed stet sit diam rebum ipsum.</p>
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facts Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                    <p class="mb-2">Years Experience</p>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">50</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-users fa-4x text-primary mb-4"></i>
                    <p class="mb-2">Skilled Professionals</p>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">175</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-bread-slice fa-4x text-primary mb-4"></i>
                    <p class="mb-2">Total Products</p>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">135</h1>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="fact-item bg-light rounded text-center h-100 p-5">
                    <i class="fa fa-cart-plus fa-4x text-primary mb-4"></i>
                    <p class="mb-2">Order Everyday</p>
                    <h1 class="display-5 mb-0" data-toggle="counter-up">9357</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

 <!-- About Start -->
 <div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row img-twice position-relative h-100">
                    <div class="col-6">
                        <img class="img-fluid rounded" src="{{asset('storage/images/ceramic.jpg')}}" alt="">
                    </div>
                    <div class="col-6 align-self-end">
                        <img class="img-fluid rounded" src="{{asset('storage/images/Moroccan.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <p class="text-primary text-uppercase mb-2">// About Us</p>
                    <h1 class="display-6 mb-4">We collect Every Item From The Core Of Our Hearts</h1>
                    <p>Majestic Morocco is your gateway to the captivating world of Moroccan culture and craftsmanship. Explore our curated collection of traditional Moroccan products, each infused with the rich heritage and timeless elegance of this enchanting North African country. From vibrant textiles and handcrafted ceramics to aromatic spices and exquisite home decor, immerse yourself in the magic of Morocco and bring a touch of its majesty into your own home.</p>
                    <div class="row g-2 mb-4">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Quality Products
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Custom Products
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Online Order
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Home Delivery
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Product Start -->
<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
           
           
        </div>
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Bakery Products</p>
            <h1 class="display-6 mb-4">Explore The Categories Of Our Cultural Products</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">$11 - $99</div>
                        <h3 class="mb-3">Cosmetic</h3>
                        <span>Moroccan cultural cosmetic products encompass a rich tapestry of traditions and ingredients passed down through generations. From the soothing properties of argan oil to the rejuvenating effects of rose water, these products reflect Morocco's diverse landscapes and centuries-old beauty rituals</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('storage/images/Cosmetic.png')}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                        <h3 class="mb-3">Furniture</h3>
                        <span>Moroccan cultural furniture products are a reflection of the rich tapestry of Moroccan heritage and traditions. Crafted with meticulous attention to detail and infused with symbolic motifs, these pieces embody the essence of Moroccan culture and design. From intricately carved wooden tables to sumptuous leather poufs and vibrant kilim rugs, each piece tells a story steeped in history and craftsmanship.</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('storage/images/furniture.png')}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill pt-1 px-3 mb-3">$11 - $99</div>
                        <h4 class="mb-3">Decoration</h4>
                        <span>Moroccan cultural decoration products encompass a diverse array of handcrafted items that reflect the rich heritage and artistic traditions of Morocco. From vibrant textiles to intricately designed ceramics, these products blend elements of Berber, Arab, and Andalusian influences, creating a unique and captivating aesthetic</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{asset('storage/images/decoration.jpg')}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->

<!-- Service Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="text-primary text-uppercase mb-2">// Our Services</p>
                <h1 class="display-6 mb-4">What Do We Offer For You?</h1>
                <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-bread-slice text-white"></i>
                            </div>
                            <h5 class="mb-0">Quality Products</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-birthday-cake text-white"></i>
                            </div>
                            <h5 class="mb-0">Custom Products</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-cart-plus text-white"></i>
                            </div>
                            <h5 class="mb-0">Online Order</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="fa fa-truck text-white"></i>
                            </div>
                            <h5 class="mb-0">Home Delivery</h5>
                        </div>
                        <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row img-twice position-relative h-100">
                    <div class="col-6">
                        <img class="img-fluid rounded" src="{{asset('storage/images/girl.jpg')}}" alt="">
                    </div>
                    <div class="col-6 align-self-end">
                        <img class="img-fluid rounded" src="{{asset('storage/images/Marocain.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@endSection 
