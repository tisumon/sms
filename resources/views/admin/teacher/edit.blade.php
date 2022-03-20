@extends('master.admin.master')

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Teacher Form</h4>

                    <h3 class="text-center text-success">{{Session::get('message')}}</h3>

                    <form action="{{route('update-teacher',['id' => $teacher->id])}}"method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$teacher->name}}" class="form-control" id="horizontal-firstname-input" name="name">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" value="{{$teacher->email}}"class="form-control" id="horizontal-email-input" name="email">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" value="{{$teacher->mobile}}" class="form-control" id="horizontal-mobile-input" name="mobile">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" value="{{$teacher->address}}" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for=horizontal-firstname-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file"  name="image" accept="image/*">
                                <img src="{{asset($teacher->image)}}" alt="" width="100px" height="100px"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for=horizontal-firstname-input" class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                               <label><input type="radio"{{$teacher->status == 1 ? 'checked': ''}} name="status" value="1"/> Active</label>
                                <label><input type="radio"{{$teacher->status == 0 ? 'checked': ''}} name="status" value="0"/> Inactive </label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher Info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection






