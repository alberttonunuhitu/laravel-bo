<div
    id="{{ $id }}"
    class="modal fade"
    tabindex="-1"
    role="dialog"
    aria-labelledby="{{ $id }}Label"
    aria-hidden="true"
>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{ $modal_body ?? '...' }}
            </div>

            @if ($modal_footer ?? false)
                <div class="modal-footer">
                    {{ $modal_footer }}
                </div>
            @endif
        </div>
    </div>
</div>
