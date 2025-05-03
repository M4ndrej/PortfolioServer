<x-layout>
    <form method="POST"
        action="{{ isset($experience) ? route('experience.update', $experience->id) : route('experience.store') }}"
        enctype="multipart/form-data">
        @csrf
        @if (isset($experience))
            @method('PUT')
        @endif
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Experience name
            </label>
            <input type="text" name="name" id="name" value="{{ old('name', $experience->name ?? '') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                Experience type
            </label>
            <select name="technology" id="technology"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
                <option value="">Select type</option>
                <option value="frontend" {{(old('technology',$experience->technology ?? '') == 'frontend') ? 'selected':''}}>Frontend</option>
                <option value="backend" {{(old('technology',$experience->technology ?? '') == 'backend') ? 'selected':''}}>Backend</option>
            </select>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                @if (isset($experience))
                    Update
                @else
                    Store
                @endif
            </button>
        </div>
    </form>
</x-layout>
