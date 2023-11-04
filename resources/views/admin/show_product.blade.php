<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css');
    <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            border: 2px solid #fff;
            text-align: center;
            margin-top: 40px;
        }
        .font{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .th_color {
            background-color: skyblue;
            color: #092ccc;
        }
        .th_color th {
            padding: 30px;
        }
        td {
            border: 2px solid #fff;
            padding: 5px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                {{session()->get('message')}}
            </div>
            @endif

            <h2 class="font">All product</h2>
            <table class="center">
                <tr class="th_color">
                    <th>Product title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Catagory</th>
                    <th>Price</th>
                    <th>Discount price</th>
                    <th>Product image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($product as $product)
                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->catagory}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>
                        <img style=" margin:auto; " src="/product/{{$product->image}}" alt="">
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure delete product ?') " href="{{url('delete_product',$product->id)}}">Delete</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
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
