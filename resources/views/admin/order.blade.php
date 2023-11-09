<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type="text/css">
        .title_deg {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            padding-bottom: 40px;
        }
        .table_deg {
            border:  2px solid #fff;
            width: 100%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
        }
        .th_deg tr {
            padding: 10px;
        }
        .table_deg tr td {
            padding: 5px;
        }
        .th_deg {
            background-color: skyblue;
        }
        .img_size {
            width: 130px;
            height: auto;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
      
      <div class="main-panel">
          <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>
                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        
                    </tr>
                        @foreach($order as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$order->image}}" alt="">
                        </td>
                        <td>
                            @if($order->delivery_status == 'processing')
                                <a onclick="return confirm('Confirm receipt of goods?')" class="btn btn-warning" href="{{url('delivered',$order->id)}}">Delivered</a>
                            @else 
                                <p class="btn btn-primary">Delivered</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
          </div>
        </div>
      
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
    
    <!-- End custom js for this page -->
  </body>
</html>
