@extends('layouts.app')

@section('title', 'แก้ไขข่าวสาร')

@section('content')
    @livewire('admin.settings.news.edit', ['new_id' => $id])
@endsection

@push('script')
    <script src="{{ asset('assets/lib/ckeditor5-build-classic/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/lib/ckeditor5-build-classic/translations/th.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: 'th'
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
