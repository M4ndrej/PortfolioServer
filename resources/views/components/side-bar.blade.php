<nav class="flex-1 px-4 py-6 space-y-2" x-data="{ active: '{{ Route::currentRouteName() }}' }">
    <a href="{{route('dashboard.index')}}"
       @click="active = 'dashboard.index'"
       :class="active === 'dashboard.index'
               ? 'bg-gray-200 text-blue-600'
               : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600'"
       class="block px-4 py-2 rounded-lg">
        Home
    </a>

    <a href="{{route('project.index')}}"
       @click="active = 'project.index'"
       :class="active === 'project.index'
               ? 'bg-gray-200 text-blue-600'
               : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600'"
       class="block px-4 py-2 rounded-lg">
        Projects
    </a>

    <a href="{{route('experience.index')}}"
       @click="active = 'experience.index'"
       :class="active === 'experience.index'
               ? 'bg-gray-200 text-blue-600'
               : 'text-gray-700 hover:bg-gray-100 hover:text-blue-600'"
       class="block px-4 py-2 rounded-lg">
        Experience
    </a>

    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit"
                @click="active = 'logout'"
                :class="active === 'logout'
                        ? 'bg-red-100 text-red-600'
                        : 'text-red-600 hover:bg-red-100'"
                class="w-full text-left px-4 py-2 rounded-lg">
            Logout
        </button>
    </form>

</nav>
