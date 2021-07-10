@extends('backend.layout.master')

@section('title', '| Product | index')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            @include('backend.layout.partials.blockheader')
            <div class="pt-5">
                <div class="container pt-5">

                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Product List</h2>
                                    <ul class="header-dropdown">
                                        <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="body table-responsive">
                                    <table class="table table-hover m-b-0 c_list">
                                        <thead>
                                        <tr>
                                            <th>
                                               S/n
                                            </th>
                                            <th>Title</th>
        {{--                                    <th>Slug</th>--}}
        {{--                                    <th>stock</th>--}}
        {{--                                    <th>Summary</th>--}}
        {{--                                    <th>Description</th>--}}
                                            <th>photo</th>
                                            <th>price</th>
        {{--                                    <th>offer_price</th>--}}
                                            <th>discount</th>
        {{--                                    <th>cat_id</th>--}}
        {{--                                    <th>brand_id</th>--}}
        {{--                                    <th>child_cat_id</th>--}}
                                            <th>size</th>
                                            <th>conditions</th>
        {{--                                    <th>vendor_id</th>--}}
                                            <th>status</th>
                                            <th>Action</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                               {{$product->id}}
                                            </td>
                                            <td>
                                                {{$product->title}}
                                            </td>
        {{--                                    <td>--}}
        {{--                                        <p>{{Substr(strip_tags($product->slug), 0, 10)}} {{strlen(strip_tags($product->slug)) > 10 ? "......" : ""}}</p>--}}


        {{--                                    </td>--}}
        {{--                                    <td>--}}
        {{--                                        <p>{{Substr(strip_tags($product->summary), 0, 10)}} {{strlen(strip_tags($product->summary)) > 10 ? "......" : ""}}</p>--}}

        {{--                                    </td>--}}
        {{--                                    <td>--}}
        {{--                                        <p>{{Substr(strip_tags($product->description), 0, 10)}} {{strlen(strip_tags($product->description)) > 10 ? "......" : ""}}</p>--}}


        {{--                                    </td>--}}
        {{--                                    <td>{{$product->stock}}</td>--}}
                                            <td>
                                                <img  src ="{{$product->photo}}" height= "70px;" width = "80px;">


                                            </td>
                                            <td>{{$product->price}}</td>
        {{--                                    <td>{{$product->offer_price}}</td>--}}
                                            <td>{{$product->discount}}</td>
        {{--                                    <td>{{$product->cat_id}}</td>--}}
        {{--                                    <td>{{$product->brand_id}}</td>--}}
        {{--                                    <td>{{$product->child_cat_id}}</td>--}}
        {{--                                    <td>{{$product->vendor_id}}</td>--}}
                                            <td>{{$product->size}}</td>
                                            <td>{{$product->conditions}}</td>
                                            <td>{{$product->status}}</td>


                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example2Modal">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <form style="display: inline-block" method="post" action="{{route('product.destroy', ['product' => $product->id])}}" >
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger  p-0"><i class="btn btn-danger btn-sm fa fa-trash" ></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--CREATE Modal -->

            <div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h6 class="title" id="defaultModalLabel">Add Product</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="basic-form" class="form-control" method="post" action="{{route('product.store')}}">
                            @csrf
                            <div class="modal-body">
                                <div class="row clearfix">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" name="title" placeholder="title" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                            @error('title')
                                            <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" name="slug"  placeholder="slug" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                            @error('slug')
                                            <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>stock</label>
                                            <input type="number" name="stock" placeholder="stock" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                            @error('title')
                                            <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>price</label>
                                            <input type="number" step="any" name="price"  placeholder="price" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                            @error('slug')
                                            <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>offer price</label>
                                            <input type="number" name="offer_price" placeholder="offer-price" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                            @error('title')
                                            <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>discount</label>
                                            <input type="number" name="discount"  step="any" placeholder="discount" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{Request::old('slug') ?: ''}}">
                                            @error('slug')
                                            <span class="form-text text-danger">{{$errors->first('slug')}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                                <option value="">----------select status----------</option>
                                                <option value="active">active</option>
                                                <option value="inactive">inactive</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>SIZE</label>
                                            <select id="single-selection" name="size" class="col-12 form-control multiselect multiselect-custom">
                                                <option value="">----------select size----------</option>
                                                <option value="S">small</option>
                                                <option value="M">medium</option>
                                                <option value="XL">extra large</option>
                                                <option value="L">large</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>description</label>
                                            <textarea name="description" class="form-control col-12" rows="5" cols="30" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Brands</label>
                                            <select id="single-selection" name="brand_id" class="col-12 form-control multiselect multiselect-custom">
                                                <option value="">----------Brand----------</option>
                                              @foreach(\App\Models\Brand::get() as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->title}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-group">
                                            <select id="single-selection" name="conditions" class="col-12 form-control multiselect multiselect-custom">
                                                <option value="">----------select condition----------</option>
                                                <option value="new">new</option>
                                                <option value="winter">winter</option>
                                                <option value="popular">popular</option>

                                            </select>
                                        </div>
                                    </div>

        {{--                            <div class="col-12">--}}
        {{--                                <div class="form-group">--}}
        {{--                                    <label>Vendor</label>--}}
        {{--                                    <select id="single-selection" name="conditions" class="col-12 form-control multiselect multiselect-custom">--}}

        {{--                                        <option value="cheese">---------vendor id----------</option>--}}
        {{--                                      @foreach(\App\Models\User::where('role','winter')->get() as $vendor)--}}
        {{--                                            <option value="{{$vendor->id}}">{{$vendor->full_name}}</option>--}}
        {{--                                        @endforeach--}}

        {{--                                    </select>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}


                                    <div class="col-12" >
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id="cat_id" name="cat_id" class="col-12 form-control ">

                                                <option value="">---------category----------</option>
                                                @foreach(\App\Models\Category::where('is_parent', 1)->get() as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-none " id="child_cat_div" >
                                        <div class="form-group">
                                            <label>child Category</label>
                                            <select id="child_cat_id" name="child_cat_id" class="col-12 form-control multiselect multiselect-custom ">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Summary</label>
                                            <textarea name="summary" class="form-control col-12" rows="5" cols="30" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                               <span class="input-group-btn">
                                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose
                                                 </a>
                                               </span>
                                            <input id="thumbnail" class="form-control" type="text" name="photo">
                                        </div>
                                        <img id="holder" style="margin-top:15px;max-height:100px;">

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- Edit Modal -->
            <div class="modal fade pt-5" id="example2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog mt-2">
                    <div class="modal-content mt-5">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mt-5">
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="First Name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="company">Company Name</label>
                                        <input type="text" class="form-control" id="company" placeholder="Company Name" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email_address">Email Address</label>
                                        <input type="email" class="form-control" id="email_address" placeholder="Email Address" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="number" class="form-control" id="phone_number" min="0" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100 form-control" id="country">
                                            <option value="usa">United States</option>
                                            <option value="uk">United Kingdom</option>
                                            <option value="ger">Germany</option>
                                            <option value="fra">France</option>
                                            <option value="ind">India</option>
                                            <option value="aus">Australia</option>
                                            <option value="bra">Brazil</option>
                                            <option value="cana">Canada</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="street_address">Street address</label>
                                        <input type="text" class="form-control" id="street_address" placeholder="Street Address" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="apartment_suite">Apartment/Suite/Unit</label>
                                        <input type="text" class="form-control" id="apartment_suite" placeholder="Apartment, suite, unit etc" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="city">Town/City</label>
                                        <input type="text" class="form-control" id="city" placeholder="Town/City" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" id="state" placeholder="State" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="postcode">Postcode/Zip</label>
                                        <input type="text" class="form-control" id="postcode" placeholder="Postcode / Zip" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{url('backend/assets/vendor/summernote/dist/summernote.js')}}"></script>

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
    <script>
        $('#cat_id').change(function () {
            var cat_id= $(this).val();
            // alert(cat_id);
            if(cat_id !=null){
                $.ajax({
                    url:"/admin/category/"+cat_id+"/child",
                    type:"POST",
                    data:{
                        _token:"{{csrf_token()}}",
                        cat_id:cat_id,
                    },
                    success:function(response){
                        // console.log(response)
                        var html_option = "<option value =''>--child category--</option>";
                        if (response.status){

                            $('#child_cat_div').removeClass('d-none');
                            $.each(response.data,function (id, title){
                                html_option += "<option value ='"+id+"'>"+title+"</option>";
                            });
                        }
                        else{
                            $('#child_cat_div').addClass('d-none');
                        }
                        $('#child_cat_id').html(html_option);
                    }
                });
            }
        });

    </script>
@endsection
{{--if (cat_id !=null){--}}


{{--$.ajax({--}}
{{--url:"/admin/category/"+cat_id+"/child",--}}
{{--type:"POST",--}}
{{--data:{--}}
{{--_token:"{{csrf_token()}}",--}}
{{--cat_id:cat_id,--}}
{{--},--}}
{{--success:function(response) {--}}
{{--// console.log(response);--}}
{{--var html_option = "<option value = ''>--child category--</option>";--}}
{{--if (response.status){--}}
{{--$('#child_cat_div').removeClass('d-none');--}}
{{--$.each(response.data,function (id, title){--}}
{{--html_option += "<option value = '"+id+"'>"+title+"</option>";--}}
{{--});--}}
{{--}--}}
{{--else {--}}
{{--// alert('no chilh cat');--}}
{{--$('#child_cat_div').addClass('d-none');--}}

{{--}--}}
{{--$('#chil_cat_id').html(html_option);--}}
{{--}--}}
{{--});--}}
{{--}--}}
