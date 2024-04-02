@extends ('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')



@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"> Buat kategori baru</h3>
        </div>
        <form method="post" action="../kategori/">
            <div class="form-group">
                <label for="kodeKategori"> Kode Kategori</label>
                <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="">
            </div>
            <div class="form-group">
                <label for="namaKategori"> Nama Kategori</label>
                <input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="">
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Submit</button>
            </div>
        </form>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Ada masalah dengan inputan anda.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection