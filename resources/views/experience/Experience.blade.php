<x-layout>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex flex-col justify-center">
        @foreach ($experiences as $experience)
        <x-card :editRoute="route('experience.edit',$experience->id)" :deleteRoute="route('experience.destroy',$experience->id)">
            <h1>Name:{{ $experience->name }}</h1>
                <h2>Type:{{$experience->technology}}</h2>
            </x-card>
        @endforeach

        <a class="rounded-md bg-green-500 hover:bg-green-700 cursor-pointer text-white p-3 text-center"
            href="{{ route('experience.create') }}">
            Add experience
        </a>
    </div>
</x-layout>
