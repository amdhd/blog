@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Article Index') }}</div>

                <div class="card-body">
                <table>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>

                @foreach($articles as $article)
                <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                </tr>
                
                @endforeach
                
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
