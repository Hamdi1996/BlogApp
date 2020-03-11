@extends ('layouts.app')
        
      
@section('content')
 
<div class="content">
  <div class="container">
    <h1>Posts</h1>

    @if(count($post)> 0)

    <div class="row container">
    @foreach ($post as $item)
    <div class="col-sm-4">
        
        <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">{{$item->firstname}} - {{$item->lastname}}</h3>
        </div>
        <div class="panel-body">
          <h2> {{$item->subject}}</h2> 
          <span class="label label-danger">created at : {{$item->created_at}}  </span>

          <a class="pull-right" href="/posts/{{$item->id}}" class="btn btn-warning">More</a>
    
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

@endif
 @endsection