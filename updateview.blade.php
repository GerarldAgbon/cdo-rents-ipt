<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">



    @include('admin.css')
  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
      <style>
        .title{
            padding-top: 100px;
        }
        label{
            padding: 10px;
        }
      </style>

      <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <h1 class="title">
                Update Listings
            </h1>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <form action="{{url('updatelisting', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px">
                <label>Listing Title</label>
                <input style="color:black;" type="text" name="title" value="{{$data->title}}" required="">
            </div>
            <div style="padding:15px; position:absolute; left:680px; top: 280px;">
                <label>Price</label>
                <input style="color:black;" type="number" name="price" value="{{$data->price}}" required="">
            </div>
            <div style="padding:15px; position:absolute; left:655px; top: 200px;">
                <label>Location</label>
                <input style="color:black;" type="text" name="location" value="{{$data->location}}" required="">
            </div>
            <div style="padding:15px; position:absolute; left:555px; top: 350px;">
                <label>Additional Information</label>
                <input style="color:black;" type="text" name="information" value="{{$data->information}}" required="">
            </div>
            <div style="padding: 15px; position:absolute; left:740px; bottom: 65px;">
                <label>Old Image</label>
                <img height="100" width="100" src="/productimage/{{$data->image}}">
            </div>
            <div class="file">
                <div style="padding:15px; position:absolute; bottom:30px; left:740px;">
                    <input type="file" name="file">
                </div>

                <div style="padding:15px; position:absolute; bottom:-10px; left:740px;">
                    <input class="btn btn-success" type="submit">
                </div>
            </div>
            </form>
            </div>
          </div>    
          <!-- partial -->
      @include('admin.script')
  </body>
</html>
