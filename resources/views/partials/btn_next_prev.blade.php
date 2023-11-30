<div class="btn-box d-flex p-3 gap-4 justify-content-center">
    @if ($prev)
    <a href="{{ route('admin.project.show', $prev->id) }}" class="btn btn-primary">Prev</a>
    @endif

    @if ($next)
    <a href="{{ route('admin.project.show', $next->id) }}" class="btn btn-primary">Next</a>
    @endif
</div>
