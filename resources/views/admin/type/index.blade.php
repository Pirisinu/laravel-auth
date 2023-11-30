@extends('admin.home')

@section('content')
<div>
    <nav>
        <ul>
            <li>
                <a href="{{route('admin.type.index')}}">Add New Type</a>
            </li>
        </ul>
    </nav>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <h1>Types: <a href=""></a></h1>
    @foreach ($types as $type)
    <div class="card text-center">
        <div class="card-header">
          <h4><strong>type n°:</strong> {{ $type->id }}</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>type:</strong> {{ $type->name }}</h5>
          <p class="card-text"><strong>type description:</strong> {{ $type->description }}</p>
          <a href="{{route('admin.type.show', $type)}}" class="btn btn-primary">More info</a>
        </div>
        <div class="card-footer text-muted">
            <strong>type start date:</strong> {{ $type->start_date }}
        </div>
      </div>
    @endforeach
    <div class="m-3">
        {{ $types->links() }}
    </div>
</div>

@endsection
