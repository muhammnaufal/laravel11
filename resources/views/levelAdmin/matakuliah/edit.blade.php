@extends('template.app')
@section('content')
    <div class="section-header">
        <h1>Edit Mata Kuliah</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <form action="{{ route('admin.matakuliah.update', $dataMatakuliah->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Mata Kuliah</label>
                            <input type="text" name="nama_matakuliah" class="form-control"
                                placeholder="Enter nama mata kuliah"
                                value="{{ old('nama_matakuliah', $dataMatakuliah->nama_matakuliah) }}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                            @error('nama_matakuliah')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br />
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            @endsection
