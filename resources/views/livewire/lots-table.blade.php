<div x-data="{ lots: @entangle('lots') }">


    <div id="lotform" class="modal" tabindex="-1" wire:model="showForm" style="display: {{ $showForm ? 'block' : 'none' }};">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" wire:click="setShowForm(false)" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('lotes')}}" method="POST">

                        @csrf

                        @method('PUT')
                        <h1>{{ optional($currentLot)->id }}</h1>
                        @error('currentLot.title')
                        <div class="alert alert-danger">

                            {{ $message }}
                        </div>
                        @enderror

                        @error('currentLot.description')
                        <div class="alert alert-danger">

                            {{ $message }}
                        </div>
                        @enderror


                        <div class="mb-3">

                            <label class="form-label">TITULO</label>
                            <input wire:model="currentLot.title" type="text" class="form-control fs-4" name="title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label ">DESCRIPCION</label>
                            <textarea wire:model="currentLot.description" class="form-control" name="description" cols="30" rows="4"></textarea>

                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button wire:click="setShowForm(false)" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="save">Save changes</button>
                </div>
            </div>
        </div>
    </div>




    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>CODIGO</th>
                <th>FOTO</th>
                <th>TITULO</th>
                <th>ZONA</th>
                <th>PRECIO</th>
                <th>CATEGORIA</th>
                <th>SE REGISTRÓ EL</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($lots as $lote )
            <tr>
                <td>

                    <button wire:click="edit({{$lote->id }})" class="btn btn-primary btn-sm">
                        <i class="align-middle" data-feather="edit-2"> Editar</i>
                    </button>
                    <a class="btn btn-primary btn-sm" href="{{route('lotes').'/borrar/' . $lote->id  }}">
                        <i class="align-middle" data-feather="trash"></i>
                    </a>
                </td>
                <td>{{$lote->id}}</td>

                <td>
                    @if ($lote->front_photo_url)
                    <img src="{{ $lote->front_photo_url }}" style="width:200px; height:auto;" alt="">
                    @else <img src="{{ asset('image/logo.png') }}" style="width:200px; height:auto;opacity: .2;" alt="">

                    @endif
                </td>
                <td>{{$lote->title}}</td>
                <td>{{$lote->zone}}</td>
                <td>{{$lote->price}}</td>
                <td>{{ optional( $lote->category)->description }}</td>
                <td>{{ optional($lote->created_at)->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>