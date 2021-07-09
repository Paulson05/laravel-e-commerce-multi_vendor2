@extends('backend.layout.master')

@section('title', '| index')
@section('content')


 <div class="pt-5">
     <div class="container pt-5">

         <div class="row clearfix">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="header">
                         <h2>Shipping</h2>
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
                                 <th>Method</th>
                                 <th>Delivery Time</th>
                                 <th>Price</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($shipping as $item)
                             <tr>
                                 <td>
                                      {{$item->shipping_address}}
                                 </td>
                                 <td>
                                     {{$item->delivery_time}}
                                 </td>
                                 <td>
                                     {{$item->delivery_charge}}
                                 </td>

                                 <td>
                                     {{$item->status}}

                                 </td>

                                 <td>
                                     <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                     <form style="display: inline-block" method="post" action="" >
                                         @csrf
                                         @method('DELETE')
                                         <a href="" >
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
                <form id="basic-form" class="form-control" method="post" action="{{route('shipping.store')}}">
                      @csrf
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="shipping_address" placeholder="shipping-address" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                @error('title')
                                <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="delivery_time" placeholder="delivery-time" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                @error('title')
                                <span class="form-text text-danger">{{$errors->first('title')}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 ">
                            <div class="form-group">
                                <input type="text" name="delivery_charge" placeholder="delivery-charge" class="form-control @error('title'){{"is-invalid"}}@enderror" value = "{{Request::old('title') ?: ''}}">
                                @error('title')
                                <span class="form-text text-danger">{{$errors->first('title')}}</span>
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

@endsection

@section('script')


    <script src="{{url('backend/assets/vendor/summernote/dist/summernote.js')}}"></script>

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection
