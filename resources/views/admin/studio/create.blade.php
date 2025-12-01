@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">

            <h5 class="card-title mb-4">Tambah Studio</h5>

            <form action="{{ route('admin.studio.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Studio</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <button class="btn btn-primary">Simpan</button>
                <a href="{{ route('admin.studio.index') }}" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
@endsection
