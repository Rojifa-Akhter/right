
<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


    
<ul class="mx-auto mt-3 list-group w-75 container-fluid" style="height: 1000px">
@foreach ($users as $user)


    <li class="list-group-item list-group-item-action" wire:click='checkconversation({{$user->id}})'> {{$user->name}}</li>


@endforeach
 </ul>

</div>
