@extends ('layouts.app')
        
  
@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script> 

{!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
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
    <div class="form-group">

   
    {{Form::file('post_image',['class'=>'form-control'])}}

    </div>

    {{Form::submit('Create',['class'=>'btn btn-primary btn-lg'])}}
    </div>

</div>
</div>




{!! Form::close() !!}

 @endsection