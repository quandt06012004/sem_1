<script src="{{asset('assets/js/main.min.js')}}"></script>

<div  class="row">
    <div class="col-lg-8">
        <div class="cart-table-container">
            <table class="table table-cart">
                <thead>
                    <tr>
                        <th class="thumbnail-col">image</th>
                        <th class="product-col">Product</th>
                        <th class="price-col">Price</th>
                        <th class="qty-col">Quantity</th>
                        <th class="text-right">Subtotal</th>
                        <th class="text-right">feature</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @if(Session::has("Cart") != null)
                        @foreach (Session::get("Cart")->products as $item)
                        <tr class="product-row">
                            <td>
                                <figure class="product-image-container">
                                    <a href="" class="product-image">
                                        <img width="60" src="{{asset($item['productInfo']->image)}}" alt="asfas">
                                    </a>

                                    <a href="#"  class="btn-remove icon-cancel" title="Remove Product"></a>
                                </figure>
                            </td>
                            <td class="product-col">
                                <h5 class="product-title">
                                    <a href="#"> {{$item['productInfo']->name}} </a>
                                </h5>
                            </td>
                            <td><h5><b>$</b>{{$item['productInfo']->price}}</h5></td>
                            <td>
                                <div class="product-single-qty">
                                    <input data-id="{{$item['productInfo']->id}}" id="quanty-item-{{$item['productInfo']->id}}" class="horizontal-quantity form-control" type="text" value="{{$item['quanty']}}">
                                </div><!-- End .product-single-qty -->
                            </td>
                            <td class="text-right"><span class="subtotal-price"><h5><b>$</b>{{$item['price']}}</span></p></td>
                            <td style = "text-align:center;display: flex;justify-content:space-evenly">
                                <a href="javascript:"><i onclick="SaveListItemCart({{$item['productInfo']->id}})" class="fa-regular fa-floppy-disk"></i></a>
                                <a href="javascript:" ><i onclick="DeleteListItemCart({{$item['productInfo']->id}})" class="fa-solid fa-circle-xmark" ></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    
                  

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" class="clearfix">
                            <div class="float-left">
                                <div class="cart-discount">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Coupon Code" required>
                                            <div class="input-group-append">
                                                <button class="btn btn-sm" type="submit">Apply
                                                    Coupon</button>
                                            </div>
                                        </div><!-- End .input-group -->
                                    </form>
                                </div>
                            </div><!-- End .float-left -->

                            <div class="float-right">
                                <button id="btn-update-cart" type="submit" class="btn btn-shop btn-update-cart">
                                    Update Cart
                                </button>
                            </div><!-- End .float-right -->
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route("home.index")}}">home</a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div><!-- End .cart-table-container -->
    </div><!-- End .col-lg-8 -->

    <div class="col-lg-4">
        <div class="cart-summary">
            <h3>CART TOTALS</h3>

            <table class="table table-totals">
                <tbody>
                    <tr>
                        <td>Subtotal</td>
                        {{-- <td>${{$cart->getTotalPrice()}}</td> --}}
                    </tr>

                    <tr>
                        <td colspan="2" class="text-left">
                            <h4>Shipping</h4>

                            <div class="form-group form-group-custom-control">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="radio"
                                        checked>
                                    <label class="custom-control-label">Local pickup</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div class="form-group form-group-custom-control mb-0">
                                <div class="custom-control custom-radio mb-0">
                                    <input type="radio" name="radio" class="custom-control-input">
                                    <label class="custom-control-label">Flat rate</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <form action="#">
                                <div class="form-group form-group-sm">
                                    <label>Shipping to <strong>NY.</strong></label>
                                    <div class="select-custom">
                                        <select class="form-control form-control-sm">
                                            <option value="USA">United States (US)</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="China">China</option>
                                            <option value="Germany">Germany</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .form-group -->

                                <div class="form-group form-group-sm">
                                    <div class="select-custom">
                                        <select class="form-control form-control-sm">
                                            <option value="NY">New York</option>
                                            <option value="CA">California</option>
                                            <option value="TX">Texas</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .form-group -->

                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="Town / City">
                                </div><!-- End .form-group -->

                                <div class="form-group form-group-sm">
                                    <input type="text" class="form-control form-control-sm"
                                        placeholder="ZIP">
                                </div><!-- End .form-group -->

                                <button id="" type="submit" class="btn btn-shop btn-update-total">
                                    Update Totals
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>

                <tfoot>
                    @if(Session::has("Cart") != null)
                    <tr>
                        <td>Quantity</td>
                        <td><h5>{{Session::get("Cart")->totalQuanty}}</h5></td>
                    </tr>
                    
                    <tr>
                        <td>Total</td>
                        <td><h4><b>$</b>{{Session::get("Cart")->totalPrice}}</h4></td>
                    </tr>
                    @endif
                </tfoot>
            </table>

            <div class="checkout-methods">
                <a href="cart.html" class="btn btn-block btn-dark">Proceed to Checkout
                    <i class="fa fa-arrow-right"></i></a>
            </div>
        </div><!-- End .cart-summary -->
    </div><!-- End .col-lg-4 -->
</div><!-- End .row -->
<script>
      $('#btn-update-cart').on("click", function(){
            var lists = [];
                $(".table-cart tbody tr td").each(function(){
                    $(this).find("input").each(function(){
                        var element = {key: $(this).data("id"), value: $(this).val()};
                        lists.push(element);
                    })
                });

                $.ajax({
                url: "/frontend/save-all",
                type: "POST",
                data:{
                    "_token" : "{{csrf_token() }}",
                    "data": lists
                }
                }).done(function(res) {
                    alertify.success('cập nhập tất cả thành công');
                    location.reload();
                });
        });
        $('.btn-remove.icon-cancel').on("click", function(){
            if(confirm('bạn có muốn xóa tất cả không ?')){
                $.ajax({
                url: "/frontend/remove-all",
                type: "GET",
               
                }).done(function(res) {
                    alertify.success('đã xóa tất cả thành công');
                    location.reload();
                });
            }
        });
</script>