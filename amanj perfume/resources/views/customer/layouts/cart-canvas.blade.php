
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
    <div class="offcanvas-header shadow-md">
        <h5 class="offcanvas-title title-font" id="offcanvasCartLabel">سبد خرید <small class="text-muted font-14 ms-1">({{$cartItems->count()}})</small></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <form action="{{route('customer.sales-process.update-cart')}}" method="post">
            @csrf
            @php
                 $totalProductPrice = 0;
                 $totalDiscountPrice = 0;
            @endphp
        <ul class="navbar-nav cart-canvas-parent">
            @foreach($cartItems as $cartItem)
            @php

            $totalProductPrice += $cartItem->cartItemProductPrice() * $cartItem->number;
            $totalDiscountPrice += $cartItem->cartItemProductDiscount() * $cartItem->number;
        @endphp
            <li class="nav-item">
                <div class="cart-canvas">
                    <div class="row align-items-center">
                        <div class="col-4 ps-0">
                            <img src="{{ asset($cartItem->product->image['indexArray']['medium']) }}" alt="{{$cartItem->product->name}}">
                        </div>
                        <div class="col-8">
                            <a href="">
                                <h3 class="text-overflow-1 title-font font-14">{{ $cartItem->product->name }}
                                </h3>
                                @if($cartItem->cartItemProductDiscount())
                                <div class="cart-canvas-price my-3 d-flex align-items-center">
                                    <p class="mb-0 text-muted me-2 font-16 text-decoration-line-through">{{ priceFormat($cartItem->cartItemProductPrice()) }}</p>
                                    <h6 class="title-font main-color-one-color">{{ priceFormat($cartItem->cartItemProductPrice() - $cartItem->cartItemProductDiscount()) }} ریال</h6>
                                </div>
                                @else
                                <div class="cart-canvas-price my-3 d-flex align-items-center">
                                    <h6 class="title-font main-color-one-color">{{ priceFormat($cartItem->cartItemProductPrice()) }} ریال</h6>
                                </div>
                                @endif
                            </a>
                            <div class="cart-canvas-foot d-flex align-items-center justify-content-between">
                                <div class="cart-canvas-count">
                                    <span>تعداد:</span>
                                    <span class="fw-bold main-color-one-color">{{$cartItem->number}}</span>
                                </div>
                                <div class="cart-canvas-delete">
                                    <a href="{{route('customer.sales-process.remove-from-cart' , $cartItem->id)}}" class="btn"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </form>
        <div class="cart-canvas-foots bg-white shadow-md">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="cart-canvas-foot-sum">
                        <p class="text-muted mb-2">جمع کل</p>
                        <h5 class="title-font">{{ priceFormat($totalProductPrice - $totalDiscountPrice) }} ریال</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div class="cart-canvas-foot-link text-end">
                        <a href="{{route('customer.sales-process.cart')}}" class="btn border-0 main-color-green text-white"><i
                                class="bi bi-arrow-left me-1"></i> تکمیل خرید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
