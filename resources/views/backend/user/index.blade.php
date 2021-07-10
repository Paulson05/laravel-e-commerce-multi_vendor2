@extends('backend.layout.master')

@section('title', '| post')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            @include('backend.layout.partials.blockheader')

 <div class="">
     <div class="container ">

         <div class="row clearfix">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="header">
                         <h2>USER List</h2>
                         <ul class="header-dropdown">
                             <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                         </ul>
                     </div>
                     <div class="body table-responsive">
                         <table class="table table-hover m-b-0 c_list">
                             <thead>
                             <tr>
                                 <th>S/n</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Role</th>
                                 <th>Status</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($users as $user)
                             <tr>
                                 <td>
                                     {{$user->id}}
                                 </td>
                                 <td style="width: 50px;">
                                    {{$user->username}}
                                 </td>
                                 <td>
                                     {{$user->email}}
                                 </td>
                                 <td>
                                    {{$user->role}}
                                 </td>
                                 <td>
                                     {{$user->status}}
                                 </td>
                                 <td>
                                     <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                     <button type="button" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
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
                               <select id="single-selection" name="status" class="col-12 form-control multiselect multiselect-custom">
                                   <option value="cheese">----------select status----------</option>
                                   <option value="active">active</option>
                                   <option value="inactive">inactive</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <select id="single-selection" name="condition" class="col-12 form-control multiselect multiselect-custom">
                                    <option value="cheese">----------select condition----------</option>
                                    <option value="active">brand</option>
                                    <option value="inactive">promo</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="file" name="photo" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            </div>
                            <hr>
                        </div>
                       <div class="col-12">
                           <div class="form-group">
                               <label>Text Area</label>
                               <textarea class="form-control col-12" rows="5" cols="30" required></textarea>
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
        </div>
    </div>

@endsection
