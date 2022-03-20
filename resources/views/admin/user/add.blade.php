@extends('master.admin.master')

@section('body')

 <div class="row">
     <div class="col-lg-12">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title mb-4">Add User Form</h4>

                 <h3 class="text-center text-success">{{Session::get('message')}}</h3>

                 <form action="{{route('new-user')}}"method="POST">
                     @csrf
                     <div class="form-group row mb-4">
                         <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                         <div class="col-sm-9">
                             <input type="text" class="form-control" id="horizontal-firstname-input" name="name">
                         </div>
                     </div>
                     <div class="form-group row mb-4">
                         <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                         <div class="col-sm-9">
                             <input type="email" class="form-control" id="horizontal-email-input" name="email">
                         </div>
                     </div>
                     <div class="form-group row mb-4">
                         <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                         <div class="col-sm-9">
                             <input type="password" class="form-control" id="horizontal-password-input" name="password">
                         </div>
                     </div>

                     <div class="form-group row justify-content-end">
                         <div class="col-sm-9">
                             <div>
                                 <button type="submit" class="btn btn-primary w-md">Create New User</button>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>


@endsection
