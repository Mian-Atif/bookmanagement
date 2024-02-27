@extends('layouts.app')
@section('content')
    <center>
        <a href="{{ route('book.create') }}" class="btn btn-dark btn-block"><i class="fa fa-plus"></i> Add Books</a>
    </center>
    <div class="container">
        <table class="table  border dashboard ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Genre</th>
                    <th scope="col">published_year</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td><input type="hidden" name="id" value="{{ $book->id }}">{{ $book->id }}
                        </td>
                        <td><input type="hidden" name="title" value="{{ $book->title }}">{{ $book->title }}
                        </td>
                        <td><input type="hidden" name="author" value="{{ $book->author }}">{{ $book->author }}
                        </td>
                        <td><input type="hidden" name="genre" value="{{ $book->genre }}">{{ $book->genre }}
                        </td>
                        <td><input type="hidden" name="published_year"
                                value="{{ $book->published_year }}">{{ $book->published_year }}</td>
                        <td>
                            <a class="btn" href="{{ route('book.edit', $book->id) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn" href="{{ route('book.destroy', $book->id) }}"><i
                                    class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
