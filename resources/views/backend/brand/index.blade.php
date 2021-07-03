@extends('backend.layout.master')

@section('title', '| Brand')
@section('content')

    <div class="pt-5">
        <div class="container pt-5">

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Brand List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">

                            <thead>
                                <tr>
                                    <th>S/n</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <td>{{$brand->id}}</td>
                                    <td>{{$brand->title}}</td>
                                    <td >
                                        <p>{{Substr(strip_tags($brand->slug), 0, 10)}} {{strlen(strip_tags($brand->slug)) > 10 ? "......" : ""}}</p>


                                    </td>
                                    <td>
                                    <img  src ="{{$brand->photo}}"  alt="brand" height= "70px;" width = "80px;">
                                    </td>
                                    <td>
                                     @if($brand->status ==='active')
                                         <span class="btn btn-primary"> {{$brand->status}}</span>
                                        @else
                                            <span class="btn btn-success"> {{$brand->status}}</span>
                                       @endif

                                    </td>

                                    <td>
                                        <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                        <form style="display: inline-block" method="post" action="{{route('brand.destroy', ['brand' => $brand->id])}}" >
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
                    <h6 class="title" id="defaultModalLabel">Add Brand</h6>
                </div>
                <form id="basic-form" class="form-control" method="post" action="{{route('brand.store')}}">
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
                                    <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                        <option >----------select status----------</option>
                                        <option value="active" {{old('status')== 'active' ? 'selected' : ''}}>active</option>
                                        <option value="inactive" {{old('status')== 'inactive' ? 'selected' : ''}}>inactive</option>
                                    </select>
                                </div>
                            </div>


                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input type="file" name="photo" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                        </div>

                                                    </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>

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
@endsection
