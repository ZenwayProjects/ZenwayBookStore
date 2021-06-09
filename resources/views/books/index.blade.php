@extends('books.layout')

@section('content')

<h1 class="text-center">List of Books</h1>

<div class="container">

    <a class="btn btn-info mb-3" href="{{route('books.create')}}">Add Book</a>

    <table class="table table-borderless">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td><a href="{{route('books.show', $book->id)}}">{{$book->title}}</a></td>
                <td>{{$book->description}}</td>
                <td><a class="btn btn-primary" href="{{route('books.edit', $book->id)}}">Edit</a>
                    <form action="{{route('books.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger mt-2"
                            onclick="return confirm('Quiere borrar el registro?')">Delete</button>
                    </form>
                </td>

            </tr>


            @endforeach
            <tr>

            </tr>
        </tbody>
    </table>
    {{ $books->links()}}
</div>


@endsection