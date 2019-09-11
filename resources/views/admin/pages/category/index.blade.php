@extends('layouts.app')
@section('title')
    {{ __('Added car') }}
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-10 mt-5">
                <div class="card shadow-lg mt-5">
                    <div class="card-header">
                        Added category
                    </div>
                    @include('layouts.admin')
                    <div class="card-body">
                        @if($categories->count() < 1)
                            <div class="alert alert-danger w-100 text-center">
                                {{ __('No added categories!') }}
                            </div>
                        @else
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', $category->id) }}" title="Edit">{{__('Edit')}}</a>
                                            <form method="post" action="{{ route('category.destroy', $category->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete-car">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
