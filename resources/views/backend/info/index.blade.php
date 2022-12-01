@extends('master')

@section('title','Add Info')

@section('body')
    <div class="container">
        <img src="" alt="" >
        <div class="row justify-content-center">
            <div class="col-8 p-5 bg-info mt-3">
                <h1>Add Your Info</h1>
                <h1>{{Session::get('notify')}}</h1>
                <form action="{{route('storeInfo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">UserName</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Student Name">
                        @error('username')
                        <span class="text-danger">{{ $message  }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @error('email')
                        <span class="text-danger">{{ $message  }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
                        @error('password')
                        <span class="text-danger">{{ $message  }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" name="image" class="form-control" id="image" placeholder="Image">
                    </div>
                    <button type="submit" class="btn btn-dark mt-3">Add Info</button>
                </form>
            </div>
        </div>
    </div>
@endsection
