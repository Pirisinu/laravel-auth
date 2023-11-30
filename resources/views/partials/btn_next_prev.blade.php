<div class="btn-box d-flex p-3 gap-4 justify-content-center">
    @if ($prev)
    <a href="{{ route(request()->route()->getName(), $prev->id) }}" class="btn btn-primary">Prev</a>
    @endif

    @if ($next)
    <a href="{{ route(request()->route()->getName(), $next->id) }}" class="btn btn-primary">Next</a>
    @endif
</div>
