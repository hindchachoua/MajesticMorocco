@extends('layout.layout')
@section('title', 'Product Details')
    
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s" style="background:linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{asset('storage/images/souk.webp')}})">
    <div class="container text-center pt-5 pb-3">
        <h1 class="display-4 text-white animated slideInDown mb-3">Products</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Order</h5>
                <div class="col-md-4">
                    <img src="{{asset('storage/images/order.jpg')}}" class="img-fluid" alt="" style="max-width: 100px;">
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action={{ route('user.reserve') }} method="POST">
                @csrf
                @method("POST")
                <div class="modal-body">
                    <div class="container">
                        <label for="order_products">Order Products:</label>
                        <div id="order_products_container" class="row mb-3">

                        </div>
                        <div class="col-md-8">
                            <label for="order_total_price">Total: MAD</label>
                            <input id="order_total_price" type="number" name="order_total_price" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="checkout()">Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container-xxl bg-light my-6 py-6 pt-0">
    <div class="container">
        <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
           
           
        </div>
        @if ($products->isEmpty())
            <div class="text-center">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>There are no products yet.</p>
                    <hr>
                </div>
            </div>
        @else
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">// Our Products</p>
            <h1 class="display-6 mb-4">Explore Our Cultural Products</h1>
        </div>
        <div class="row g-4">
            
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">
                    <div class="text-center p-4">
                        <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">{{$product->price}} DH</div>
                        <h3 class="mb-3">{{$product->title}}</h3>
                        <span>{{$product->description}}</span>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="{{ asset('images/' . $product->image)}}" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href="{{ route('product.show', ['id' => $product->id]) }}"><i class="fa fa-eye text-primary"></i></a>
                        </div>
                        
                    </div>
                </div>
                <div class="d-inline-block border border-primary rounded-pill px-3 mb-3">{{$product->available_products}}</div>
                @if ($product->available_products <= 0)
                        <p class="alert alert-danger" style="font-family: 'Times New Roman', Times, serif">No available Products</p>
                                        
                        @else
    
                          <div class="bg-white text-center rounded p-4">
                          {{-- <input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
                          <button type="button" onclick="addProduct({{ $product->id }}, {{ $product->price }}, '{{ $product->title }}')" class="btn btn-primary">Buy Product</button>
                          </div>
                @endif
                
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<!-- Product End -->
<script>
    function addProduct(productId, productPrice, productName) {
        console.log(productId, productPrice, productName);

        // Find the existing product with the same productId
        var existingProduct = document.getElementById(`order-product-${productId}`);
        
        if (existingProduct) {
            // If the product already exists, increment or decrement its quantity
            var quantityInput = existingProduct.querySelector(`input[id="product-${productId}-quantity"]`);
            var currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
            
            // Update the product price
            var productPriceElement = existingProduct.querySelector(`input[id="product-${productId}-price"]`);
            productPriceElement.value = productPrice * quantityInput.value;
        } else {
            var productDivContainers = document.querySelectorAll('.product').length;
            console.log(productDivContainers);
            // If the product doesn't exist, create a new product div
            var productDiv = document.createElement('div');
            productDiv.id = `order-product-${productId}`;
            productDiv.classList.add('product');

            // Set the content of the product div
            productDiv.innerHTML = `
                <div class="col-md-8">
                    <h1>${productName}</h1>
                    <input type="number" id="product-${productId}-id" name="order_products[${productDivContainers}][product_id]" value="${productId}" hidden>
                    <input type="number" id="product-${productId}-quantity" name="order_products[${productDivContainers}][quantity]" value="${1}">
                    <label for="product-${productId}-price">Price: ${productPrice}</label>
                    <input type="text" id="product-${productId}-price" name="order_products[${productDivContainers}][price]" value="${productPrice}">
                    <button type="button" class="btn btn-sm btn-primary" data-action="increment" onclick="incrementProductQuantity(${productId}, ${productPrice})">+</button>
                    <button type="button" class="btn btn-sm btn-danger" data-action="decrement" onclick="decrementProductQuantity(${productId}, ${productPrice})">-</button>
                </div>
            `;

            // Append the product div to the chartContainer
            const chartContainer = document.getElementById("order_products_container");
            chartContainer.appendChild(productDiv);
        }
        
        // Calculate and update the total price
        updateTotalPrice();
    }

    function incrementProductQuantity(productId, productPrice) {
        var quantityInput = document.getElementById(`product-${productId}-quantity`);
        quantityInput.value = parseInt(quantityInput.value) + 1;
        // Calculate and update the total price
        var totalPriceInput = document.getElementById('order_total_price');
        totalPriceInput.value = parseInt(totalPriceInput.value) + productPrice;
    }

    function decrementProductQuantity(productId, productPrice) {
        var quantityInput = document.getElementById(`product-${productId}-quantity`);
        if (quantityInput.value > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
            // Calculate and update the total price
            var totalPriceInput = document.getElementById('order_total_price');
            totalPriceInput.value = parseInt(totalPriceInput.value) - productPrice;
        }
    }

    function updateTotalPrice() {
        var totalPriceInput = document.getElementById('order_total_price');
        var products = document.querySelectorAll('.product');
        var total = 0;
        
        products.forEach(function(product) {
            var priceInput = product.querySelector(`input[name^="order_product"][name$="[price]"]`);
            total += parseFloat(priceInput.value);
        });
        
        totalPriceInput.value = total;
    }

    function checkout() {
        var products = document.querySelectorAll('.product');
        if (products.length === 0) {
            // Display an alert if the shopping cart is empty
            alert("Your shopping cart is empty. Please add some products before proceeding to checkout.");
        } else {
            // Proceed to checkout
            document.getElementById('checkout-form').submit();
        }
    }
</script>




@endsection