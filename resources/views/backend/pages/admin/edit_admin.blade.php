@extends('admin.admin_dashboard')

@section('admin')


<div class="page-content">


    <div class="row profile-body">

        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Edit Admin</h6>

                        <form id="myForm" method="POST" action="{{ route('update.admin', $user->id) }}" class="forms-sample">
                            @csrf



                            <div class="mb-3">
                                <label for="username" class="form-label">Admin Name</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}"
                                    autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Admin Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                                    autocomplete="off">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Admin Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" autocomplete="off">

                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Admin phone</label>
                                <input type="phone" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Admin Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" autocomplete="off">

                            </div>
                            {{-- <div class="mb-3">
                                <label for="password" class="form-label">Admin password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    autocomplete="off">

                            </div> --}}

                            <div class="mb-3">
                                <label for="role" class="form-label">Role Name</label>
                                <select name="roles" class="form-select" id="roles">
                                    <option selected="" disabled>Select Group</option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $user->hasRole($role->name)?'selected':''}}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                        </form>

                    </div>
                </div>

            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->

        <!-- right wrapper end -->
    </div>

</div>








@endsection