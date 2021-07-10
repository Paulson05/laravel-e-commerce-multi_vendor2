@extends('backend.layout.master')

@section('title', '| index')
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
                         <h2>Banner List</h2>
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
                                 <th>photo</th>
                                 <th>Description</th>
                                 <th>Status</th>
                                 <th>Condition</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($banners as $banner)
                             <tr>
                                 <td>
                                    {{$banner->id}}
                                 </td>
                                 <td>
                                     {{$banner->title}}
                                 </td>
                                 <td>
       <p>{{Substr(strip_tags($banner->slug), 0, 10)}} {{strlen(strip_tags($banner->slug)) > 10 ? "......" : ""}}</p>

                                 </td>
                                 <td>

                                     <img  src ="{{$banner->photo}}" alt="banner image" height= "70px;" width = "80px;">

                                 </td>
                                 <td>

                                     <p>{{Substr(strip_tags($banner->description), 0, 10)}} {{strlen(strip_tags($banner->description)) > 10 ? "......" : ""}}</p>
                                 </td>
                                 <td>
                                     {{$banner->status}}

                                 </td>
                                 <td>


                                     @if($banner->conditions ==='banner')
                                         <span class="btn btn-primary"> {{$banner->conditions}}</span>
                                     @else
                                         <span class="btn btn-success"> {{$banner->conditions}}</span>
                                     @endif
                                 </td>
                                 <td>
                                     <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                     <form style="display: inline-block" method="post" action="{{route('banner.destroy', ['banner' => $banner->id])}}" >
                                         @csrf
                                         @method('DELETE')
                                         <a href="{{ route('banner.edit',$banner->id) }}" >
                                             <i class="btn btn-danger fas fa-edit" ></i>

                                         </a>
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
                    <h6 class="title" id="defaultModalLabel">Add Banner</h6>
                </div>
                <form id="basic-form" class="form-control" method="post" action="{{route('banner.store')}}">
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
                                <label>condition</label>
                                <select id="single-selection" name="conditions" class="col-12 form-control multiselect multiselect-custom">
                                    <option value="">----------condition----------</option>
                                    <option value="banner" {{old('conditions') == 'banner' ? 'selected' : ''}}>banner</option>
                                    <option value="promo" {{old('conditions')== 'promo' ? 'selected' : ''}}>promo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                               <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                   <option value="">----------select status----------</option>
                                   <option value="active" {{old('status')== 'active' ? 'selected' : ''}}>active</option>
                                   <option value="inactive" {{old('status')== 'inactive' ? 'selected' : ''}}>inactive</option>
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
                          <textarea name="description" id="description"  class="form-control" >

                           </textarea>
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
