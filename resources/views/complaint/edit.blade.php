@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">Content</div>
    </div>
</div>

@endsection

@push('style')
<style>
    body {
        background-color: lightblue;
    }
</style>
@endpush

@push('script')
{{-- <script>
    alert('Welcome to edit page')
</script> --}}
@endpush