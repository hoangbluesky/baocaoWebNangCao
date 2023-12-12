<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>

            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
            </div>
            @endif
            <div class="row">
               @foreach($product as $products)
               
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                           Product Detail
                           </a>
                           <form action="{{url('add_cart',$products->id)}}" method="Post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                    <input type="number" name="quantity" value="1" min="1">
                                 </div>
                                 <div class="col-md-4">
                                    <input type="submit" value="Add To Cart">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img style="max-height: 100%;" src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box" style="margin-top: 10px;">
                        <h5>
                           {{$products->title}}
                        </h5>
                        @if($products->discount_price!=null)
                        <h6 style="color: blue;">
                           Sell 
                           <br>
                           ${{$products->discount_price}}
                        </h6>
                        <h6 style="text-decoration: line-through;">
                           Price
                           <br>
                           ${{$products->price}}
                        </h6>
                        @else 
                        <h6 style="color: blue;">
                           Price
                           <br>
                           ${{$products->price}}
                        </h6>
                        @endif
                        
                     </div>
                  </div>
               </div>
               @endforeach
               <span style="padding-top: 20px">
               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
               </span>
         </div>
      </section>