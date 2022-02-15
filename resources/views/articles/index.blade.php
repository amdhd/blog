@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Article Index') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>

                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>


                @foreach($articles as $article)
                <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>
                    <a href="{{route('article:edit', $article)}}" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                </tr>
                
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
