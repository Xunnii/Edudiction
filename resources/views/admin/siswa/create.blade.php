@extends('layouts.admin.app')

@section('title', 'Sample Page')

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
                    <li class="breadcrumb-item active" aria-current="page">Siswa</li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Siswa</li>
                </ol>
            </nav>
            <h2 class="h4">Data Siswa</h2>
            <p class="mb-0">List Seluruh Data Siswa</p>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-3">
            <a href="{{route('siswa.list')}}"
                class="btn btn-dark text-white d-inline-flex align-items-center justify-content-center px-3 py-2"
                style="gap: 0.75rem; font-size: 1rem;">
                Kembali
            </a>
        </div>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5">Tambahkan Data Siswa</h2>
        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
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
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="name">Nama</label>
                        <input class="form-control" id="name" type="text" name="name"
                            placeholder="Ketik Nama" value="">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div>
                        <label for="phone">No HP</label>
                        <input class="form-control" id="phone" type="number" name="phone"
                            placeholder="08**********" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" id="alamat" type="text" name="alamat" placeholder="Ketik Alamat"
                            value="">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="kelas">Kelas</label>
                    <select class="form-select mb-0" id="kelas" name="kelas" value=""
                        aria-label="kelas select example">
                        <option selected>Pilih Kelas</option>
                        <option value="12">12</option>
                        <option value="11">11</option>
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="mataPelajaran">Mata Pelajaran</label>
                    <select class="form-select mb-0" id="mataPelajaran" name="mataPelajaran" value=""
                        aria-label="mataPelajaran select example">
                        <option selected>Pilih Mata Pelajaran</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Kimia">Kimia</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                        <option value="PKN">PKN</option>
                        <option value="Agama Islam">Agama Islam</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tanggal">Tanggal</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input data-datepicker="" class="form-control" id="tanggal" type="date" name="tanggal"
                            placeholder="yyyy/mm/dd" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="pukul">Pukul</label>
                        <input class="form-control" id="pukul" type="time" name="pukul"
                            value="">
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-success text-white mt-2 animate-up-2" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection
