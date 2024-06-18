





<!-- meodo con aggiunta di javascript -->

<div class="modal" tabindex="-1" id="delete-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Sei sicuro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-outline-danger" id="modal-delete-btn">Elimina</button>
      </div>
    </div>
  </div>
</div>









<!-- Modo veloce ma brutto -->

<!-- <form action="{{route('comics.destroy', ['comic'=>$comic->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"  onclick="return confirm('Sei sicuro di volerlo eliminare?')"><i class="fa-solid fa-trash-can "></i></button>

                    </form> -->


<!-- uno dei modi per intercettare il messaggio per l'eliminazione di un elemento -->

<!-- <td> -->
                    <!-- Trigger the modal with a button -->
                    <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$comic->id}}">
                        <i class="fa-solid fa-trash"></i>
                    </button> -->

                    <!-- Modal -->
                    <!-- <div class="modal fade" id="deleteModal{{$comic->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{$comic->id}}">Stai per eliminare {{ $comic->title }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annulla</button>
                                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" style="-bs-btn-padding-x: 0.75rem; --bs-btn-padding-y: 0.375rem;">Elimina</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td> -->