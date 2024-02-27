@extends('layouts.app')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Edit Book</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('book.update') }}">
                                <input type="hidden" name="bookId" value="{{ $book->id }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Title<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $book->title }}"
                                            name="title" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Author<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $book->author }}"
                                            name="author" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Genre<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" value="{{ $book->genre }}"
                                            name="genre" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="form-group">
                                        <label class="col-form-label">Published Year<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" type="number" value="{{ $book->published_year }}"
                                            name="published_year" required>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
