@extends ('layouts.app')
        
      
@section('content')
 

{!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST']) !!}
<div class="container">
<div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">Edit Post</h3>
        
    </div>

    <div class="panel-body">
    <div class="form-group">

    {{Form::label('subject', 'Subject')}}
    {{Form::text('subject',$post->subject,['class'=>'form-control','placeholder'=>'Subject'])}}

    </div>

    <div class="form-group">

    {{Form::label('firstname', 'First Name')}}
    {{Form::text('firstname',$post->firstname,['class'=>'form-control','placeholder'=>'First Name'])}}

    </div>
    <div class="form-group">

    {{Form::label('lastname', 'Last Name')}}
    {{Form::text('lastname',$post->lastname,['class'=>'form-control','placeholder'=>'Last Name'])}}

    </div>
    <div class="form-group">

    {{Form::label('body', 'Discription')}}
    {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Discription'])}}

    </div>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('UPDATE',['class'=>'btn btn-primary btn-lg'])}}
    </div>

</div>
</div>




{!! Form::close() !!}

 @endsection