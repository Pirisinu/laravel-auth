@extends('admin.home')

@section('content')
<div>
    <nav>
        <ul>
            <li>
                <a href="{{route('admin.project.create')}}">Add New Project</a>
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

    <h1>Projects: <a href=""></a></h1>
    @foreach ($projects as $project)
    <div class="card text-center">
        <div class="card-header">
          <h4><strong>Project n°:</strong> {{ $project->id }}</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong>Project title:</strong> {{ $project->title }}</h5>
          <p class="card-text"><strong>Project description:</strong> {{ $project->description }}</p>
          <a href="{{route('admin.project.show', $project)}}" class="btn btn-primary">More info</a>
        </div>
        <div class="card-footer text-muted">
            <strong>Project start date:</strong> {{ $project->start_date }}
        </div>
      </div>
    @endforeach
    <div class="m-3">
        {{ $projects->links() }}
    </div>
</div>

@endsection
