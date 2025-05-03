<div class="border border-black rounded-md m-2 p-2 flex gap-5">
    {{$slot}}
    @props(['editRoute', 'deleteRoute'])

    <div class="ml-auto flex gap-2">
        <a class="rounded-md bg-yellow-500 text-white p-2 hover:bg-yellow-700" href="{{$editRoute}}">
            Edit
        </a>
        <form action="{{$deleteRoute}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="rounded-md bg-red-500 text-white p-2 hover:bg-red-700" type="submit">
                Delete
            </button>
        </form>
    </div>
</div>
