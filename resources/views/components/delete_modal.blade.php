<div class="modal fade" id="delete{{ $data }}" tabindex="-1" role="dialog" aria-labelledby="delete {{ $title }}"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $header }}</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">{{ $body }}</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Tidak</button>
                    <form action="{{ $route }}" method="POST">
                        @csrf @method("DELETE")
                        <button type="submit" class="btn btn-primary">Ya, saya yakin!</button>
                    </form>
                </div>
            </div>
        </div>
</div>
