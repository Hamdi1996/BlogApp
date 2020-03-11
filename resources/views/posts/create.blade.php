@extends ('layouts.app')
        
      
@section('content')
 

{!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
<div class="container">
<div class="panel panel-info">

    <div class="panel-heading">
        <h3 class="panel-title">Create Post</h3>
        
    </div>

    <div class="panel-body">
    <div class="form-group">

    {{Form::label('subject', 'Subject')}}
    {{Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject'])}}

    </div>

    <div class="form-group">

    {{Form::label('firstname', 'First Name')}}
    {{Form::text('firstname','',['class'=>'form-control','placeholder'=>'First Name'])}}

    </div>
    <div class="form-group">

    {{Form::label('lastname', 'Last Name')}}
    {{Form::text('lastname','',['class'=>'form-control','placeholder'=>'Last Name'])}}

    </div>
    <div class="form-group">

    {{Form::label('body', 'Discription')}}
    {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Discription'])}}

    </div>

    {{Form::submit('Create',['class'=>'btn btn-primary btn-lg'])}}
    </div>

</div>
</div>




{!! Form::close() !!}

 @endsection