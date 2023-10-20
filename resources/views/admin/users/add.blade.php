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
                value="{{old('name')}}"
                placeholder="Nhập tên người dùng"
            >
            @error('name')
            <div class="alert alert-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label  class="form-label">
                Email:
            </label>
            <input
                name="email"
                class="form-control"
                placeholder="Nhập email"
                value="{{old('email')}}"
            >
            @error('email')
            <div class="alert alert-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label  class="form-label">
                Password:
            </label>
            <input
                name="password"
                type="password"
                class="form-control"
                placeholder="Nhập mật khẩu"
                value="{{old('password')}}"
            >
            @error('password')
            <div class="alert alert-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6" >
            <label  class="form-label">
                Phone:
            </label>
            <input
                name="phone"
                type="text"
                class="form-control"
                placeholder="Nhập số điện thoại"
                value="{{old('phone')}}"
            >
            @error('phone')
            <div class="alert alert-danger">* {{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label  class="form-label">
                Role:
            </label>
            <input
                name="role"
                type="text"
                class="form-control"
                placeholder="Nhập vai trò"
                value="{{old('role')}}"
            >
            @error('role')
            <div class="alert alert-danger">* {{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Thêm người dùng</button>
    </form>

@endsection
