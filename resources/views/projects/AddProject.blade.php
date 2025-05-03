<x-layout>
    <form method="POST" action="{{ isset($project) ? route('project.update', $project->id) : route('project.store') }}"
        enctype="multipart/form-data">
        @csrf
        @if (isset($project))
            @method('PUT')
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Project Title
            </label>
            <input type="text" name="title" id="title" value="{{ old('title', $project->title ?? '') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                Image
            </label>
            <input type="file" name="image" id="image" accept="image/*"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer focus:outline-none"
                {{ isset($project) ? '' : 'required' }}>
            @if (isset($project) && $project->image)
                <div class="mt-2">
                    <p class="text-sm text-gray-600">Current image:</p>
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-32 h-auto border rounded">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="video">
                Video
            </label>
            <input type="file" name="video" id="image" accept="video/*"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer focus:outline-none"
                {{ isset($project) ? '' : 'required' }}>
            @if (isset($project) && $project->vodeo)
                <div class="mt-2">
                    <p class="text-sm text-gray-600">Current video:</p>
                    <video src="{{ asset('storage/' . $project->video) }}" class="w-32 h-auto border rounded">
                </div>
            @endif
        </div>



        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Project Description
            </label>
            <textarea name="description" id="description" rows="5"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
                {{ old('description', $project->description ?? '') }}
            </textarea>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                @if (isset($project))
                    Update
                @else
                    Store
                @endif
            </button>
        </div>
    </form>
</x-layout>
