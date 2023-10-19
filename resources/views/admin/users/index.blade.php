
@extends('layout.admin')


@section('content')
    <div id="content">
        <!-- End of Header -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('users.create')}}"
                               class="btn btn-success float-right m-2">
                                Add
                            </a>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Tên User</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            <a href="#"
                                               class="btn btn-danger">
                                                Edit
                                            </a>
                                            <a href=""
                                               data-url=""
                                               class="btn btn-danger action_delete">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
