

<div class="top_catagory_area mt-50 clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Catagory -->

          @foreach($categories as $category)
            <div class="col-12 col-md-4">
                <div class="single_catagory_area mt-50">
                    <a href="{{ route('getproductcategory', $category->slug)  }}">
                        <img src="{{$category->photo}}" alt="">
                    </a>
                    <p class="text-center ">{{$category->title}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
