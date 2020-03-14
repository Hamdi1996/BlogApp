@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary btn-lg">New Post !</a>

                     
                <hr>
                @foreach($posts as $post)
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$post->subject}}</h3>
                    </div>
                    <div class="panel-body">
                        {!!$post->body!!}

  
                    </div>
            <div class="panel-footer">
            <a   href="/posts/{{$post->id}}/edit" class="btn btn-primary  ">Edit</a>
        
        {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'POST']) !!}
        {{Form::hidden('_method' ,'DELETE') }}
        {{Form::submit('Delete',['class'=>"pull-right btn btn-danger btn-md"]) }}
        {!! Form::close() !!}
            
            </div>                
                </div>
                @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .btn-md
    {
        margin-top: -33px;
    }
</style>