<div class="card">
    @if ($header ?? false)
        <div class="card-header">
            {{ $header }}
        </div>
    @endif

    <div class="card-body">
        {{ $body ?? $slot }}
    </div>

    @if ($footer ?? false)
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
