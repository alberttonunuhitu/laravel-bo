<div class="card">
    @if ($card_header ?? false)
        <div class="card-header">
            {{ $card_header }}
        </div>
    @endif

    <div class="card-body">
        {{ $card_body ?? $slot }}
    </div>

    @if ($card_footer ?? false)
        <div class="card-footer">
            {{ $card_footer }}
        </div>
    @endif
</div>
