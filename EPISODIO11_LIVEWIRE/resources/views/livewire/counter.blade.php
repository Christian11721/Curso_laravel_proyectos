<div>
<input type="text" wire:model="note"/>
<button wire:click="store">Guardar Nota</button>
<p style="color: red;">{{ $feedback }}</p>
@foreach ($notes as $note )
<p>{{ $note->content }}
<button wire:click="update('{{$note->id}}')">Actualizar</button>
<button wire:click="destroy('{{$note->id}}')">Eliminar</button></p>
@endforeach
</div>
