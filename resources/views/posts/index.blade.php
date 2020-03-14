@extends ('layouts.app') @section('content')

<div class="content">
    <div class="container">
        <h1>Posts</h1>

        @if(count($post)> 0)

        <div class="row container">
            @foreach ($post as $post)
            <div class="col-sm-4">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
                    </div>


                    <div class="panel-body">
                        <h2> {{$post->subject}}</h2>

                        <img src="/storage/post_image/{{$post->post_image}}"  alt="No Image" style="width:200px;height:200px" class="img-responsive img-thumbnail ">


                        <span class="label label-warning">created at : {{$post->created_at}}  </span>
                        <span class="label label-info">By {{$post->user->name}}  </span>

                        <a class="pull-right" href="/posts/{{$post->id}}" class="btn btn-warning">More</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@else


<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Oh  !</strong> <a href="#" class="alert-link">No posts !</a> and try submitting again.
</div>

@endif @endsection