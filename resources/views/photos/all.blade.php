@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Photos</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Photo</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($photos as $photo)
                      <tr>
                        <td><img src="{{$photo->path}}" class="img img-responsive img-rounded"/></td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {!!$photos->links()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
