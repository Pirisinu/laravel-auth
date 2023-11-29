<div class="btn-box d-flex p-3 gap-4 justify-content-center">
    @if ($prevProject)
    <a href="{{ route('admin.project.show', $prevProject->id) }}" class="btn btn-primary">Prev Project</a>
    @endif

    @if ($nextProject)
    <a href="{{ route('admin.project.show', $nextProject->id) }}" class="btn btn-primary">Next Project</a>
    @endif
</div>
