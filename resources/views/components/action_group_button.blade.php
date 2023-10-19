
                    <div class="btn-group" role="group" aria-label="Action button">
                        {{-- <a href="{{ $show }}" type="button" class="btn btn-outline-info btn-sm">{{ ucfirst("show") }}</a> --}}
                        <a href="{{ $edit }}" type="button" class="btn btn-outline-success btn-sm">{{ strtoupper("edit") }} <i class="fas fa-edit"></i></a>
                        <button class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#delete{{ $delete }}">{{ strtoupper("hapus") }} <i class="fas fa-eraser"></i></button>
                    </div>
