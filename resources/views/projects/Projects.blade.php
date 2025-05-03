<x-layout>
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex flex-col justify-center">
        @foreach ($projects as $project)
            <x-card :editRoute="route('project.edit', $project->id)" :deleteRoute="route('project.destroy', $project->id)">
                <h1>{{ $project->title }}</h1>
                <img src={{ asset($project->image) }} class="image">
            </x-card>
        @endforeach

        <a class="rounded-md bg-green-500 hover:bg-green-700 text-white p-3 text-center z-50 relative border"
            href="{{ route('project.create') }}">
            Add project
        </a>

    </div>
</x-layout>
