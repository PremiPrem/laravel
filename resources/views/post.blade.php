
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createpost') }}" aria-label="{{ __('Create Post') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                                <!-- <input id="description" type="email" class="form-control" name="email"  required autofocus> -->
                            </div>
                        </div>

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="col-md-8">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>title</th>
        <th>description</th>

      </tr>
    </thead>
    <tbody>
    @foreach($allpost as $key => $post)
    <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
    </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</div>
</div>
@endsection