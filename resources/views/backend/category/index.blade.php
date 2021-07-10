@extends('backend.layout.master')

@section('title', '| category | index')
@section('content')

    <div id="main-content">
        <div class="container-fluid">
            @include('backend.layout.partials.blockheader')

    <div class="pt-1">
        <div class="container ">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Category List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-hover m-b-0 c_list">
                                <thead>
                                <tr>
                                    <th>
                                       S/N
                                    </th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Photo</th>
{{--                                    <th>Summary</th>--}}
                                    <th>is parent</th>
                                    <th>parent </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                       {{$category->id}}
                                    </td>
                                    <td>
                                        {{$category->title}}
                                    </td>
                                    <td >

                                        <p>{{Substr(strip_tags($category->slug), 0, 10)}} {{strlen(strip_tags($category->slug)) > 10 ? "......" : ""}}</p>

                                    </td>
                                    <td >

                                        <img  src ="{{$category->photo}}" height= "70px;" width = "80px;">

                                    </td>
{{--                                    <td>--}}

{{--                                        <p>{{Substr(strip_tags($category->summary), 0, 10)}} {{strlen(strip_tags($category->summary)) > 10 ? "......" : ""}}</p>--}}

{{--                                    </td>--}}

                                    <td>
                                        {{$category->is_parent === 1 ? 'Yes' : 'No'}}
                                    </td>
                                    <td>
                                        {{\App\Models\Category::where('id', $category->parent_id)->value('title')}}
                                    </td>
                                    <td >
                                        @if($category->status ==='active')
                                            <span class="btn btn-primary"> {{$category->status}}</span>
                                        @else
                                            <span class="btn btn-success"> {{$category->status}}</span>
                                        @endif
                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                        <form style="display: inline-block" method="post" action="{{route('category.destroy', ['category' => $category->id])}}" >
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
    <div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add category</h6>
                </div>
                <form id="basic-form" class="form-control" method="post" action="{{route('category.store')}}">
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label>is parent</label>
                                    <input id="is_parent" type="checkbox" name="is_parent" value="{{$category->is_parent}}" {{$category->is_parent ==true  ?'checked' : '' }}><span>yes</span>
                                </div>
                            </div>
                            <div class="col-12" id="parent_cat_id">
                                <div class="form-group d-none" id="parent_cat_div">
                                    <label>parent category</label>
                                    <select id="" name="parent_id"   class="col-12 form-control multiselect multiselect-custom d-block">
                                        <option value="">----------select parent category----------</option>
                                          @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>

                                        @endforeach
                                    </select>
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
                            <div class="col-12">
                                <div class="form-group">
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option value="">----------select status----------</option>
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Summary</label>
                                    <textarea name="summary" class="form-control col-12" rows="5" cols="30" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="float-left">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
        </div>
    </div>

    @section('script')
        <script src="{{url('backend/assets/vendor/summernote/dist/summernote.js')}}"></script>

        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
        <script>
            $('#lfm').filemanager('image');
        </script>
        <script>
            $('#is_parent').change(function (e){
                e.preventDefault();
                var is_checked = $('#is_parent').prop('checked');
                // alert(is_checked);
                if (is_checked){
                    $('#parent_cat_div').addClass('d-none');
                    $('#parent_cat_div')
                }
                else {
                    $('#parent_cat_div').removeClass('d-none');
                }
            })
        </script>
    @endsection


@endsection
