<div class="bg-gray-900 text-white h-screen w-64 p-4">
    <div class="flex items-center space-x-2 mb-6">
        <img src="{{ $user->profile_photo_url ?? 'https://via.placeholder.com/50' }}" 
             alt="Profile" 
             class="w-12 h-12 rounded-full">
        <h2 class="font-bold">{{ $user->name ?? 'Admin' }}</h2>
    </div>
    <ul class="space-y-4">
        <li><a href="{{ route('admin.dashboard') }}" class="hover:text-gray-400">Dashboard</a></li>
        <li><a href="{{ route('admin.laporan') }}" class="hover:text-gray-400">Laporan</a></li>
        <li><a href="{{ route('admin.konseling') }}" class="hover:text-gray-400">Konseling</a></li>
        <li><a href="{{ route('admin.artikel') }}" class="hover:text-gray-400">Artikel</a></li>
    </ul>
    <button wire:click="logout" class="mt-6 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
        Log Out
    </button>
</div>
