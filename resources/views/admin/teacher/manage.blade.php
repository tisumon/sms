@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Teacher</h4>

                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>

                    <div class="table-responsive">
                        <table class="table mb-0 table-bordered table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($teachers as $teacher)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->code}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->mobile}}</td>
                                    <td>{{$teacher->address}}</td>
                                    <td>
                                        <img src="{{asset($teacher->image)}}"alt="image" class="img-thumbnail" width="50px" height="50px"/>
                                    </td>
                                    <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>

                                    <td class="text-center">
                                        <a href="{{route('edit-teacher',['id'=>$teacher->id])}}" class="btn btn-success btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{route('delete-teacher',['id'=>$teacher->id])}}" class="btn btn-danger btn-sm {{$teacher->id == 1 ? 'disabled':''}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
@endsection


