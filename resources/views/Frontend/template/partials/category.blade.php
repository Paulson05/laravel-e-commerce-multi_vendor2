<div class="shop_by_catagory_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading mb-50">
                    <h5>Shop By Catagory</h5>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="shop_by_catagory_slides owl-carousel">

                @foreach($categories as $category)

                    <!-- Single Slide -->
                    <div class="single_catagory_slide">
                        <a href="#">
                            <img src="{{$category->photo}}" alt="">
                        </a>
                        <p>{{$category->title}}</p>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
