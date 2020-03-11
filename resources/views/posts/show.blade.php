@extends ('layouts.app')
        
      
@section('content')

<div class="panel panel-danger container">
    <div class="panel-heading">
      <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}
    <a class="pull-right" href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    
    
 
  </h3>
   
    </div>

    <div class="panel-body">

      {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST']) !!}
      {{Form::hidden('_method','DELETE')}}
      {{Form::submit('DELETE',['class'=>' pull-right btn btn-danger btn-sm'])}}
     {!! Form::close() !!}
  
        <h2> {{$post->subject}}</h2> 
        <p> {{$post->body}}</p> 
        <span class="label label-danger">created at : {{$post->created_at}}  </span>
  

  </div>
  <a class="pull-right" href="/posts" class="btn btn-primary">Back</a>

  </div>

 @endsection