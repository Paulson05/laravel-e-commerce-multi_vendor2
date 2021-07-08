@extends('backend.layout.master')

@section('title', '| post')
@section('content')


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
                                    <th>code</th>

                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                   @foreach($coupon as $item)
                                    <tr>
                                        <td>
                                          {{$item->id}}
                                        </td>
                                        <td>
                                            {{$item->code}}
                                        </td>

                                        <td>
                                            {{$item->type}}
                                        </td>
                                        <td>
                                            {{$item->value}}
                                        </td>
                                        <td>
                                            {{$item->status}}
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                            <form style="display: inline-block" method="post" action="" >
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
                    <h6 class="title" id="defaultModalLabel">Add Coupon</h6>
                </div>
                <form id="basic-form" class="form-control" method="post" action="{{route('coupon.store')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="code" placeholder="code" class="form-control @error('code'){{"is-invalid"}}@enderror" value = "{{Request::old('code') ?: ''}}">
                                    @error('code')
                                    <span class="form-text text-danger">{{$errors->first('code')}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="number" name="value" placeholder="value" class="form-control @error('value'){{"is-invalid"}}@enderror" value = "{{Request::old('value') ?: ''}}">
                                    @error('value')
                                    <span class="form-text text-danger">{{$errors->first('value')}}</span>
                                    @enderror
                                </div>
                            </div>



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
                        <div class="form-group">
                            <select id="single-selection" name="type" class="col-12 form-control multiselect multiselect-custom">
                                <option value="">----------select type----------</option>
                                <option value="fixed" {{old('type')== 'fixed' ? 'selected' : ''}}>fixed</option>
                                <option value="percent" {{old('type')== 'percent' ? 'selected' : ''}}>percent</option>
                            </select>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                    </div>


            </div>
        </div>
                </form>
    </div>

@endsection

@section('script')
    <script src="{{url('backend/assets/vendor/summernote/dist/summernote.js')}}"></script>

    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection
