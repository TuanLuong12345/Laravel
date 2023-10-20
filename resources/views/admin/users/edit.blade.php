@extends('layout.admin')

@section('content')

    <form method="post" action="{{route('users.update',['id'=>$users->id])}}">
        @csrf
        <div class="col-md-6">
            <label  class="form-label">
                Name:
            </label>
            <input
                name="name"
                type="text"
                class="form-control"
                value="{{$users->name}}"
            >


        </div>
        <div class="col-md-6">
            <label  class="form-label">
                Email:
            </label>
            <input
                name="email"
                type="email"
                class="form-control"
                value="{{$users->email}}"
            >

        </div>
        <div class="col-md-6">
            <label  class="form-label">
                Password:
            </label>
            <input
                name="password"
                type="password"
                class="form-control"
                value="{{$users->password}}"
            >
        </div>
        <div class="col-md-6" >
            <label  class="form-label">
                Phone:
            </label>
            <input
                name="phone"
                type="text"
                class="form-control"
                value="{{$users->phone}}"
            >
        </div>
        <div class="col-md-6">
            <label  class="form-label">
                Role:
            </label>
            <input
                name="role"
                type="text"
                class="form-control"
                value="{{$users->role}}"
            >
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>

@endsection
