@extends('layouts.master')

@section('botones')

@endsection

@section('content')
@if(session()->has('message'))
<div class="row mb-4">
    <div class="col">
        <div class="alert alert-success alert-dismissible fade show" 
            role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" 
            aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col">
        <table class="table table-striped text-center" id="datatable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Age</th>
                </tr>
            </thead>

            <tbody>
                @forelse($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->name }}</td>
                        <td>{{ $registro->position }}</td>
                        <td>{{ $registro->age }}</td>
                    </tr>
                @empty
                    <p>There're no entries.</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection