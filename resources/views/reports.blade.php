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

        <div class="grid grid-cols-3 gap-6 mb-12">
            <div class="col-span-2 bg-[#161922] border border-gray-800 rounded-3xl p-8 relative overflow-hidden group">
                <div class="flex justify-between items-start">
                    <span class="bg-[#0e2a2d] text-[#22d3ee] text-[10px] font-bold px-3 py-1 rounded-md">QUARTERLY HIGHLIGHT</span>
                    <span class="text-gray-500 text-[10px] font-medium">Oct 2023 - Dec 2023</span>
                </div>
                <h2 class="text-3xl font-bold text-white mt-6 mb-4 w-3/4 leading-tight">Annual Operational Performance & Scaling Audit</h2>
                <p class="text-gray-400 text-sm leading-relaxed w-2/3">A deep-dive into cross-functional efficiency and resource allocation across all regional clusters.</p>
                
                <div class="mt-12 flex justify-between items-center">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-[#161922]" src="https://ui-avatars.com/api/?name=User+1" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-[#161922]" src="https://ui-avatars.com/api/?name=User+2" alt="">
                        <div class="w-8 h-8 rounded-full border-2 border-[#161922] bg-gray-700 flex items-center justify-center text-[10px] font-bold">+4</div>
                    </div>
                    <a href="#" class="text-[#22d3ee] text-sm font-bold flex items-center gap-2 group-hover:underline">
                        Download PDF 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="bg-[#161922] border border-gray-800 rounded-3xl p-8 flex flex-col justify-between">
                <div>
                    <span class="bg-[#241a3a] text-[#a855f7] text-[10px] font-bold px-3 py-1 rounded-md">AUTOMATION</span>
                    <h3 class="text-xl font-bold text-white mt-6">Daily Health Check</h3>
                    <p class="text-gray-500 text-xs mt-3 leading-relaxed">System-wide diagnostic and uptime report generated automatically by the AI kernel.</p>
                </div>
                <div class="flex justify-between items-center mt-10">
                    <span class="text-gray-500 text-[10px] font-medium uppercase tracking-wider text-xs">2 hours ago</span>
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>