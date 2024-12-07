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
                </ol>
            </nav>
            <h2 class="h4">Data Siswa</h2>
            <p class="mb-0">List Seluruh Data Siswa</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('siswa.create') }}"
                class="btn btn-success text-white d-inline-flex align-items-center justify-content-center px-3 py-2"
                style="gap: 0.75rem; font-size: 1rem;">
                <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                Tambah Data
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <form method="get" action="{{ route('siswa.list') }}">
                    <div class="row">
                        <div class="col-md-2">
                            <select name="kelas" onchange="this.form.submit()" class="form-select">
                                <option value="">All Classes</option>
                                <option value="12"{{ request('kelas') == '12' ? 'selected' : '' }}>12</option>
                                <option value="11"{{ request('kelas') == '11' ? 'selected' : '' }}>11</option>
                                <option value="10"{{ request('kelas') == '10' ? 'selected' : '' }}>10</option>
                                <option value="9"{{ request('kelas') == '9' ? 'selected' : '' }}>9</option>
                                <option value="8"{{ request('kelas') == '8' ? 'selected' : '' }}>8</option>
                                <option value="7"{{ request('kelas') == '7' ? 'selected' : '' }}>7</option>
                                <option value="6"{{ request('kelas') == '6' ? 'selected' : '' }}>6</option>
                                <option value="5"{{ request('kelas') == '5' ? 'selected' : '' }}>5</option>
                                <option value="4"{{ request('kelas') == '4' ? 'selected' : '' }}>4</option>
                                <option value="3"{{ request('kelas') == '3' ? 'selected' : '' }}>3</option>
                            </select>
                        </div>
                        <div class="col-md-2">

                            <div class="mb-3">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" id="exampleInputIconRight"
                                        placeholder="Search" aria-label="Search">
                                    <button type="submit" class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    @if (request('search'))
                                        <a href="{{ request()->fullUrlWithQuery(['search' => null]) }}"
                                            class="btn btn-outline-secondary ml-3" id="clear-search"> Clear</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="page" value="{{ $dataSiswa->currentPage() }}">
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded" id="table-pelanggan">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">No</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">No HP</th>
                            <th class="border-0">Alamat</th>
                            <th class="border-0">Kelas</th>
                            <th class="border-0">Mata Pelajaran</th>
                            <th class="border-0">Tanggal</th>
                            <th class="border-0">Pukul</th>
                            <th class="border-0 rounded-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($dataSiswa as $row)
                            <tr>
                                <td>{{ ($dataSiswa->currentPage() - 1) * $dataSiswa->perPage() + $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->kelas }}</td>
                                <td>{{ $row->mataPelajaran }}</td>
                                <td>{{ $row->tanggal }}</td>
                                <td>{{ $row->pukul }}</td>
                                <td>
                                    <a href="{{ route('siswa.edit', $row->siswa_id) }}" class="btn btn-info btn-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                                        </path>
                                        </svg>
                                        Edit
                                    </a>
                                    <a href="{{ route('siswa.destroy', $row->siswa_id) }}" class="btn btn-danger btn-sm">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                        </path>
                                        </svg>
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $dataSiswa->links('pagination::simple-bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
