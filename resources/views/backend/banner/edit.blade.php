@extends('backend.layout.master')

@section('title', '| edit')
@section('content')



    <div class="container justify-content-center">

            <div class="container justify-content-center">

                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">edit Banner</h6>
                </div>
                <form id="basic-form" class="form-control" method="post" action="{{route('banner.edit', $banner->id)}}">
                      @csrf
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="title" placeholder="title" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{$banner->title}}">
                                @error('title')
                                <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="slug"  placeholder="slug" class="form-control @error('slug'){{"is-invalid"}}@enderror" value = "{{$banner->slug}}">
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
                                    <option value="banner" {{$banner->conditions == 'banner' ? 'selected' : ''}}>banner</option>
                                    <option value="promo" {{$banner->conditions== 'promo' ? 'selected' : ''}}>promo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                               <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                   <option value="">----------select status----------</option>
                                   <option value="active" {{$banner->status== 'active' ? 'selected' : ''}}>active</option>
                                   <option value="inactive" {{$banner->status== 'inactive' ? 'selected' : ''}}>inactive</option>
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
                                    <input id="thumbnail" class="form-control" type="text" name="photo" value="$banner->photo">
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
                        <button type="submit" class="btn btn-primary">update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>

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
