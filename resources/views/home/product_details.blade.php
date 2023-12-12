<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public"> 
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <style>
         .containerrr {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
         }
         .nameProduct {
            font-size: 48px !important;
            margin: 28px 0;
            font-family: 900;
            color: darkgreen;
            text-align: center;
            
         }
         .price {
            justify-content: space-around;
            font-size: 18px;
            margin: 5px;
            font-weight: 600;
         }
         .catagory {
            font-size: 20px;
            font-weight: 600;
            color: #c11223;
            margin: 21px 0;
            text-align: center;
         }
        .detail{
         margin: 15px 0;
         font-size: 16px;
         font-weight: 500;
         color: #495057;
        }
         .quantity{
            font-size: 20px;
            font-weight: 600;
            color: #010000;
            margin: 20px 0;
            text-align: center;
         }
         .detail-box {
            border: 1px solid #a58f8f;
            border-radius: 40px;
            background-color: #fbfbfb;
            padding: 35px 12px;
            margin: 10px 20px;
         }
         h1.mydetail {
            font-size: 50px;
            text-align: center;
            font-family: 'Figtree';
            color: #2613b5;
            margin-bottom: 20px;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header');
         <!-- end header section -->
         <!-- slider section -->
         <!-- end slider section -->
      
         <h1 class="mydetail">My Detail Product</h1>
      <hr>

      <div class="containerrr" >
                     <div class="img-box" >
                        <img style="height: 450px;" src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5 class="nameProduct">
                           {{$product->title}}
                        </h5>
                        @if($product->discount_price!=null)
                        <div class="d-flex price">
                           <h6 style="color: blue;">
                              Sell :
                              ${{$product->discount_price}}
                           </h6>
                           <h6 style="text-decoration: line-through;">
                              Price :
                              ${{$product->price}}
                           </h6>
                        </div>
                        @else 
                        <h6 class="price" style="color: blue;">
                           Price : 
                           
                           ${{$product->price}}
                        </h6>
                        @endif
                        <h6 class="catagory">Product Catagory : {{$product->catagory}}</h6>
                        <h6 class="detail">Product Details : {{$product->description}}</h6>
                        <h6 class="quantity">Available Quantity : {{$product->quantity}}</h6>
                        <form action="{{url('add_cart',$product->id)}}" method="Post">
                              @csrf
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="number" name="quantity" value="1" min="1">
                                 </div>
                                 <div class="col-md-6">
                                    <input style="padding: 13px 45px;" type="submit" value="Add To Cart">
                                 </div>
                              </div>
                        </form>
                     </div>
                  </div>
               </div>
      <!-- why section -->
      
      @include('home.footer');
      
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>