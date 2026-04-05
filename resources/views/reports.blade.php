<x-layouts.app active="reports" title="Reports">
    <div class="p-8">
        <div class="flex justify-end items-center mb-10">
            <div class="flex items-center gap-6">
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
                    <button class="bg-gradient-to-r from-[#00d2ff] to-[#3a7bd5] text-white px-5 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:opacity-90 shadow-lg shadow-blue-900/20 transition">
                        <span class="text-xl leading-none">+</span> Generate Report
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-6 mb-12">
            <div class="col-span-2 bg-[#161922] border border-gray-800 rounded-3xl p-8 relative overflow-hidden group">
                <div class="flex justify-between items-start">
                    <span class="bg-[#0e2a2d] text-[#22d3ee] text-[10px] font-bold px-3 py-1 rounded-md">QUARTERLY HIGHLIGHT</span>
                    <span class="text-gray-500 text-[10px] font-medium">Oct 2025 - Dec 2025</span>
                </div>
                <h2 class="text-3xl font-bold text-white mt-6 mb-4 w-3/4 leading-tight">Annual Operational Performance & Scaling Audit</h2>
                <p class="text-gray-400 text-sm leading-relaxed w-2/3">A deep-dive into cross-functional efficiency and resource allocation across all regional clusters in Indonesia.</p>

                <div class="mt-12 flex justify-between items-center">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-[#161922]" src="https://ui-avatars.com/api/?name=Andi+P" alt="">
                        <img class="w-8 h-8 rounded-full border-2 border-[#161922]" src="https://ui-avatars.com/api/?name=Sari+W" alt="">
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
                    <span class="text-gray-500 text-[10px] font-medium uppercase tracking-wider">2 hours ago</span>
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-center mb-6">
                <h4 class="text-gray-500 text-[10px] font-black tracking-widest uppercase">Historical Archive</h4>
                <p class="text-gray-600 text-[10px]">Showing 148 documents</p>
            </div>

            <div class="space-y-3">
                @php
                    $reports = [
                        ['title' => 'Q3 2025 Financial Integrity Assessment', 'file' => 'FIN_AUDIT_2025_Q3_FINAL.pdf', 'size' => '14.2 MB', 'author' => 'Reza Pratama'],
                        ['title' => 'Capital Market Volatility Prediction (CSV)', 'file' => 'ANALYTICS_EXPORT_BETA.csv', 'size' => '2.8 MB', 'author' => 'AI Engine'],
                        ['title' => 'Monthly Cash Reconciliation — March 2026', 'file' => 'RECONCILIATION_MAR2026.pdf', 'size' => '5.4 MB', 'author' => 'Sari Wulandari'],
                    ];
                @endphp

                @foreach($reports as $report)
                <div class="flex items-center justify-between bg-[#161922] p-4 rounded-2xl border border-transparent hover:border-gray-700 transition group cursor-pointer">
                    <div class="flex items-center gap-4">
                        <div class="bg-[#1e222d] p-3 rounded-xl text-gray-400 group-hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">{{ $report['title'] }}</p>
                            <p class="text-[10px] text-gray-500 uppercase font-medium mt-0.5">{{ $report['file'] }} • {{ $report['size'] }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-16">
                        <div class="text-right">
                            <p class="text-[9px] text-gray-600 font-bold uppercase tracking-tighter">Author</p>
                            <p class="text-xs font-semibold text-gray-300 italic">{{ $report['author'] }}</p>
                        </div>
                        <div class="flex gap-4 opacity-0 group-hover:opacity-100 transition">
                            <button class="text-gray-500 hover:text-white"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg></button>
                            <button class="text-gray-500 hover:text-white"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg></button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layouts.app>
