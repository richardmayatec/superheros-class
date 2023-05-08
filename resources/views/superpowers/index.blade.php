@extends('layouts.master')

@section('botones')
<div class="row mb-4">
    <div class="col text-end">
        <a href="{{ route('superpowers.create') }}" class="btn btn-success">Create superpower</a>
    </div>
</div>
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
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th style="width: 30%;">ID</th>
                    <th style="width: 30%;">Name</th>
                    <th style="width: 30%;">Description</th>
                </tr>
            </thead>

            <tbody>
                @forelse($superpowers as $superpower)
                    <tr>
                        <td>{{ $superpower->id }}</td>
                        <td>
                            <a href="{{ route('superpowers.show', $superpower->id) }}">{{ $superpower->name }}</a>
                        </td>
                        <td>{{ $superpower->description }}</td>
                    </tr>
                @empty
                    <p>There're no superpowers.</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection