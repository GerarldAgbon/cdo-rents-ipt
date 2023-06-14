<div class="latest-products" id="listings">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Listings</h2>
              <a href="products.html">view all listings <i class="fa fa-angle-right"></i></a>
              <form action="{{url('search')}}" method="get" class="form-inline" style="float:right; padding:10px;">
                <input class="form-control" type="search" name="search" placeholder="Search Location">
                <input type="submit" value="search" class="btn btn-success" style="color:black;">
              </form>


            </div>
          </div>

          @foreach($data as $product)

          <div class="col-md-4">
            <div class="product-item">
              <a href="{{url('product_details', $product->id)}}"><img height="300" width="150" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="{{url('product_details', $product->id)}}"><h4>{{$product->title}}</h4></a>
                <h6>{{$product->price}}</h6>
                <p>{{$product->information}}</p>
                <span>{{$product->location}}</span>
                
                <form action="{{url('addbookmark', $product->id)}}" method="post">
                  @csrf    
                  <input class="btn btn-primary" type="submit" value="Bookmark" style="color:black;">
                </form>
              </div>
            </div>
          </div>
          @endforeach

          @if(method_exists($data, 'links'))


          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
          </div>
          @endif
        </div>
      </div>
    </div>