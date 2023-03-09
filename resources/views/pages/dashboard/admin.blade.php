@extends('layouts.app')

@section('page-content')
    <div class="d-flex" style="height: 100%;  overflow: hidden;">
        @includeIf('partials.sidebar.admin')
        <div class="w-100" >
            @includeIf('partials.form.admin.search')
            @includeIf('partials.table.admin')
        </div>
    </div>
@endsection
