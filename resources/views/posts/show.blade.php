@extends ('layouts.app') @section('content')

<div class="panel panel-info  container">
    <div class="panel-heading panel-warning ">
        <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>

    </div>

    @if(!Auth::guest()) @if(Auth::user()->id==$post->user_id)



    <a class="pull-right edit" href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg"><button type="button" class="btn btn-info">Edit</button></a>

    <div class="panel-body">




        @endif @endif
        <img src="/storage/post_image/{{$post->post_image}}" class="img-thumbnail" alt="{{$post->post_image}}" style="width:200px,height:200px">
        <h2> {{$post->subject}}</h2>
        <p> {{$post->body}}</p>
        <span class="label label-warning">created at : {{$post->created_at}}  </span>
        <span class="label label-info">By  {{$post->firstname}}  </span>


        <div class="panel-footer">
            {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST']) !!} {{Form::hidden('_method','DELETE')}} {{Form::submit('DELETE',['class'=>' btn btn-danger btn-sm'])}} {!! Form::close() !!}
            <a class="pull-right back" href="/posts" class="btn btn-primary">
      <button type="button" class="btn btn-secondary">Back</button></a>
        </div>

    </div>



</div>

@endsection

<style>
    .edit
       {
         margin-top:-37px;
         margin-right: 0;
       }
       .back
       {
        margin-top: -42px;
        margin-right: 18px;
       }
</style>