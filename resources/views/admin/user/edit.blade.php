@extends('layouts.admin.app')

@section('title', 'User Edit')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('user.list') }}">User</a></li>
                    <li class="br eadcrumb-item active"><a href="{{ route('user.create') }}">Tambah Data</a></li>
                </ol>
            </nav>
            <h2 class="h4">Data User</h2>
            <p class="mb-0">List Seluruh Data User</p>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <a href="{{ route('user.list') }}"
                class="btn btn-dark text-white d-inline-flex align-items-center justify-content-center px-3 py-2"
                style="gap: 0.75rem; font-size: 1rem;">
                Kembali
            </a>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Edit Data User</h2>
        <form action="{{ route('user.update') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name"
                            placeholder="Enter your name" value="{{ $dataUser->name }}">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email"
                            placeholder="name@company.com" value="{{ $dataUser->email }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" type="password" name="password" placeholder="password"
                            value="">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="role">Role</label>
                    <select class="form-select mb-0" id="role" name="role" value="{{ $dataUser->role }}"
                        aria-label="Gender select example">
                        <option value="Administrator">Guru</option>
                        <option value="Pelanggan">Pelanggan</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $dataUser->id }}">
            <div class="mt-3">
                <button class="btn btn-success text-white mt-2 animate-up-2" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
