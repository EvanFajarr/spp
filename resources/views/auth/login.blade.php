@extends('layouts.auth')

<div class="vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4 p-5 shadow-sm border rounded-5 border-success">
        <h2 class="text-center mb-4 text-success">Login</h2>
        @include('pesan.pesan')
        <form action="/" method="post">
            @csrf

            <div class="mb-3">
                <label for="username_15483" class="form-label">Username</label>
                <input type="username_15483" name="username_15483" value="{{ Session::get('username_15483') }}"  class="form-control bg-success bg-opacity-10 border border-success">
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label ">Password</label>
                <input type="password" name="password" class="form-control bg-success bg-opacity-10 border border-success">
            </div>

            <p>Login Siswa<a href="/loginSiswa">sini</a></p>
            <div class="d-grid">
                <button class="btn btn-success" type="submit">login</button>
            </div>
        </form>
      
    </div>
</div>

