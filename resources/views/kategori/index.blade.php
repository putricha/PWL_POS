@extends ('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span>Manage Kategori</span>
                <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add</a>
            </div>
        </div>
        <div css="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('scripts')
{{ $dataTable->scripts()}}
@endpush

