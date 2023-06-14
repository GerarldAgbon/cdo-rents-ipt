<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
          <!-- partial -->
          <div style="padding-bottom:20px;" class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <table>
                    <tr style="background-color:grey;">
                        <td style="padding:20px;">Title</td>
                        <td style="padding:20px;">Location</td>
                        <td style="padding:20px;">Price</td>
                        <td style="padding:20px;">Information</td>
                        <td style="padding:20px;">Image</td>
                        <td style="padding:20px;">Update</td>
                        <td style="padding:20px;">Delete</td>
                    </tr>
                    @foreach($data as $product)
                    <tr align:"center" style="background-color:black;">
                        <td style="padding:10px;">{{$product->title}}</td>
                        <td style="padding:10px;">{{$product->location}}</td>
                        <td style="padding:10px;">{{$product->price}}</td>
                        <td style="padding:10px;">{{$product->information}}</td>
                        <td style="padding:10px;">
                            <img height="100 " width="100" src="/productimage/{{$product->image}}">
                        </td>

                        <td style="padding: 10px;">
                            <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('deleteproduct', $product->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </table> 
            </div>
          </div>

      @include('admin.script')
  </body>
</html>
