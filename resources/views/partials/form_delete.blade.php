
<form action="{{route('comics.destroy', ['comic'=>$comic->id]) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger " type="submit" data-comic-title="{{ $comic->title }}"><i class="fa-solid fa-trash-can " ></i></button>
                    </form>