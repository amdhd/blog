@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    <form action="{{ route('article:update',$article)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</lable>
                            <input type="text" class="form-control" name="title" value="{{$article->title}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Description</lable>
                            <textarea name="description" cols="20" rows="10" class="form-control">{{$article->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create New Training</button>
                            <a href="" class="btn btn-link">Cancel</a>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
