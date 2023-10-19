@extends('layout.admin')

@section('content')

    <form method="post" action="{{route('users.store')}}">
        @csrf
        <div class="col-md-6">
            <label  class="form-label">
                Name:
            </label>
            <input
                name="name"
                type="text"
                class="form-control"
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
            >
        </div>
        <button type="submit" class="btn btn-primary add">Thêm người dùng</button>
    </form>

@endsection
