@extends('books.layout')

@section('content')

<h1 class="text-center">Add Books</h1>
<hr>
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message')}}</div>

@endif


<div class="container">
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Book Title"
                        value="{{old('title')}}">
                    @if ($errors->has('title'))
                    <strong class="text-danger">{{$errors->first('title')}}</strong>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" name="description" placeholder="Description" cols="30"
                        rows="10">{{old('description')}}</textarea>

                    @if ($errors->has('description'))
                    <strong class="text-danger">{{$errors->first('description')}}</strong>
                    @endif

                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary mt-3">Save Book</button>
            </div>
        </div>
    </form>
</div>







@endsection