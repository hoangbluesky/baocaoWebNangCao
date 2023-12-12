<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
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
      <style type="text/css">
        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }
        table,th,td {
            border: 1px solid gray;
        }
        th {
            font-size: 30px;
            padding: 5px;
            background: skyblue;
        }
        td {
            font-size: 18px;
            color: blue;
            font-weight: 600;
        }
        .img_deg {
            width: 300px;
        }
        .total_deg{
            font-size: 25px;
            padding: 40px;
            font-weight: 700;
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
      <!-- why section -->
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
            </div>
        @endif
      <div class="center">
        <table>
            <tr>
                <th>Product title</th>
                <th>Product quantity</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php $totalprice=0; ?>
            @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product_title}}</td>
                <td>{{$cart->quantity}}</td>
                <td>${{$cart->price}}</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}" alt=""></td>
                <td>
                    <a onclick="return confirm('Are you sure delete product?')" href="{{url('remove_cart',$cart->id)}}" class="btn btn-danger">Remove</a>
                </td>
            </tr>
            <?php $totalprice = $totalprice + $cart->price ?>
            @endforeach
            
        </table>
        <div> 
            <h2 class="total_deg">Total Price: ${{$totalprice}}</h2>
        </div>
        <div>
            <h2 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h2>
            <a class="btn btn-danger" href="{{url('cash_order')}}">Cash On Delivery</a>
            <a class="btn btn-danger" href="{{url('stripe',$totalprice)}}">Pay Using Card</a>
        </div>
      </div>
      
      <!-- footer start -->
      
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