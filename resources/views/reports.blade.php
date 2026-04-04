<x-layouts.app active="reports" title="Reports">
    <div class="p-8">
        <div class="flex justify-between items-center mb-10">
            <div class="relative w-1/3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
                <input type="text" placeholder="Search reports, files, or authors..." class="w-full bg-[#161922] border-none text-sm rounded-lg pl-10 pr-4 py-2 text-gray-300 focus:ring-1 focus:ring-blue-500">
            </div>
            <div class="flex items-center gap-6">
                <button class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></button>
                <div class="flex items-center gap-2">
                    <span class="text-[10px] font-bold text-gray-500">STATUS</span>
                    <span class="bg-cyan-950 text-cyan-400 text-[10px] font-bold px-2 py-0.5 rounded-full border border-cyan-800">LIVE</span>
                </div>
            </div>
        </div>

        <div class="mb-10">
            <p class="text-purple-500 text-[10px] font-black tracking-[0.2em] uppercase mb-1">Intelligence Hub</p>
            <div class="flex justify-between items-end">
                <div>
                    <h1 class="text-5xl font-bold text-white tracking-tight">Reports</h1>
                    <p class="text-gray-400 mt-2 text-sm max-w-md">Access detailed performance metrics, quarterly audits, and automated strategic insights.</p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-[#1b1f29] text-white px-4 py-2 rounded-lg text-sm font-semibold border border-gray-700 hover:bg-gray-800 flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                        Filters
                    </button>
                    <button class="bg-gradient-to-r from-[#818cf8] to-[#22d3ee] text-black px-5 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:opacity-90 transition">
                        <span class="text-xl leading-none">+</span> Generate Report
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>