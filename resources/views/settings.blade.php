<x-layouts.app active="settings" title="Settings">
    <div class="p-8">

        <div class="flex justify-between items-center mb-10">
            <div class="relative w-1/3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
                <input type="text" placeholder="Search parameters, security, or protocols..." class="w-full bg-[#161922] border-none text-sm rounded-lg pl-10 pr-4 py-2 text-gray-300 focus:ring-1 focus:ring-purple-500 transition-all">
            </div>
            <div class="flex items-center gap-6">
                <button class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></button>
                <div class="w-8 h-8 rounded-full bg-orange-200 border border-gray-700 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Alex+Sterling&background=fed7aa" alt="Profile">
                </div>
            </div>
        </div>

        <div class="mb-10">
            <p class="text-purple-500 text-[10px] font-black tracking-[0.2em] uppercase mb-1">Configuration Console</p>
            <h1 class="text-5xl font-bold text-white tracking-tight">Workspace Settings</h1>
            <p class="text-gray-400 mt-2 text-sm max-w-xl">Manage your environment, security protocols, and communication filters from one centralized control plane.</p>
        </div>
    </div>
</x-layouts.app>