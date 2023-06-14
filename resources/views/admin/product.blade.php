<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .title
        {
            color:white; 
            padding-top: 25px; 
            font-size: 25px;
        }
        label
        {
            padding: 10px;
        }
        .file
        {
            position: absolute;
            bottom: 130px;
            left: 740px;
        }
    </style>

  </head>
  <body>
      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <h1 class="title">
                Add Listings
            </h1>
            @if(session()->has('message'))
                    <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif
            <form action="{{url('uploadlisting')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div style="padding:15px">
                <label>Listing Title</label>
                <input style="color:black;" type="text" name="title" placeholder="Place description" required="">
            </div>
            <div style="padding:15px; position:absolute; left:680px; top: 280px;">
                <label>Price</label>
                <input style="color:black;" type="number" name="price" placeholder="Enter price" required="">
            </div>
            <div style="padding:15px; position:absolute; left:655px; top: 200px;">
                <label>Location</label>
                <input style="color:black;" type="text" name="location" placeholder="Indicate location" required="">
            </div>
            <div style="padding:15px; position:absolute; left:555px; top: 350px;">
                <label>Additional Information</label>
                <input style="color:black;" type="text" name="information" placeholder="Place additional information" required="">
            </div>
            <div class="file">
                <div style="padding:15px;">
                    <input type="file" name="file">
                </div>

                <div style="padding:15px;">
                    <input class="btn btn-success" type="submit">
                </div>
            </div>
            </form>
            </div>
          </div>    
      @include('admin.script')
  </body>
</html>
