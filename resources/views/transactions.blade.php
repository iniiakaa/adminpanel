<x-layouts.app active="transactions" title="Transactions">
    <div class="p-8">

        <div class="flex justify-end items-center mb-10">
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="text-[10px] font-bold text-gray-500 uppercase">Auto-Sync</span>
                    <span
                        class="bg-cyan-950 text-cyan-400 text-[10px] font-bold px-2 py-0.5 rounded-full border border-cyan-800">ACTIVE</span>
                </div>

            </div>
        </div>

        <div class="mb-10">
            <p class="text-cyan-500 text-[10px] font-black tracking-[0.2em] uppercase mb-1">Financial Ledger</p>
            <div class="flex justify-between items-end">
                <div>
                    <h1 class="text-5xl font-bold text-white tracking-tight">Transactions</h1>
                    <p class="text-gray-400 mt-2 text-sm max-w-md">Track and manage all incoming and outgoing financial
                        flows with real-time audit trails.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-[#1b1f29] text-white px-4 py-2 rounded-lg text-sm font-semibold border border-gray-700 hover:bg-gray-800 flex items-center gap-2">
                        Export CSV
                    </button>
                    <button
                        class="bg-gradient-to-r from-[#00d2ff] to-[#9d50bb] text-white px-5 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:opacity-90 transition shadow-lg shadow-cyan-900/20">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                            </path>
                        </svg>
                        Advanced Filters
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-6 mb-12">
            <div class="col-span-2 bg-[#161922] border border-gray-800 rounded-3xl p-8">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-lg font-bold text-white">Cash Flow Overview</h3>
                    <select class="bg-transparent text-gray-500 text-xs border-none focus:ring-0 cursor-pointer">
                        <option>Last 7 Days</option>
                        <option>Last 30 Days</option>
                    </select>
                </div>
                <div class="flex items-end gap-2 h-32 mt-10">
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[40%] rounded-t-sm"></div>
                    <div class="w-full bg-purple-900/30 border-t-2 border-purple-500 h-[70%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[55%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[90%] rounded-t-sm"></div>
                    <div class="w-full bg-purple-900/30 border-t-2 border-purple-500 h-[60%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[75%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[45%] rounded-t-sm"></div>
                </div>
                <div class="flex justify-between mt-4 text-[10px] text-gray-600 font-bold uppercase tracking-wider">
                    <span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-[#161922] to-[#0f111a] border border-gray-800 rounded-3xl p-8 flex flex-col justify-between shadow-2xl">
                <div>
                    <span
                        class="bg-cyan-500/10 text-cyan-400 text-[10px] font-bold px-3 py-1 rounded-md uppercase">Monthly
                        Volume</span>
                    <h4 class="text-4xl font-bold text-white mt-4">Rp 1.2M</h4>
                    <p class="text-xs text-green-400 mt-2 flex items-center gap-1">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" />
                        </svg>
                        +14.2% from last month
                    </p>
                </div>
                <div class="pt-6 border-t border-gray-800">
                    <p class="text-[10px] text-gray-500 uppercase font-bold tracking-widest">Next Settlement</p>
                    <p class="text-sm text-gray-300 mt-1">April 05, 2026 • 23:59 WIB</p>
                </div>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-center mb-6">
                <h4 class="text-gray-500 text-[10px] font-black tracking-widest uppercase">Transaction History</h4>
                <p class="text-gray-600 text-[10px]">Showing 2,401 operations</p>
            </div>

            <div class="bg-[#161922] border border-gray-800 rounded-2xl overflow-hidden">
                <table class="w-full text-left text-sm text-gray-400">
                    <thead
                        class="bg-[#1b1f29] text-[10px] font-bold text-gray-500 uppercase tracking-tighter border-b border-gray-800">
                        <tr>
                            <th class="px-6 py-4">Transaction Source</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-center">Amount</th>
                            <th class="px-6 py-4 text-right">Timestamp</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        <tr class="hover:bg-[#1e222d] transition group cursor-pointer">
                            <td class="px-6 py-5 flex items-center gap-3">
                                <div class="p-2 bg-purple-500/10 text-purple-500 rounded-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-white">Merchant Payment: PT Tokopedia</p>
                                    <p class="text-[10px] text-gray-500">ID: TXN-99201-BETA</p>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span
                                    class="bg-cyan-950 text-cyan-400 px-2 py-0.5 rounded text-[10px] font-bold border border-cyan-800 uppercase">Cleared</span>
                            </td>
                            <td class="px-6 py-5 text-center font-mono text-white">-Rp 21.3jt</td>
                            <td class="px-6 py-5 text-right text-xs font-mono">20:34:11</td>
                        </tr>
                        <tr class="hover:bg-[#1e222d] transition group cursor-pointer">
                            <td class="px-6 py-5 flex items-center gap-3">
                                <div class="p-2 bg-pink-500/10 text-pink-500 rounded-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-bold text-white">Incoming Wire: PT Sinar Plastik</p>
                                    <p class="text-[10px] text-gray-500">ID: TXN-00219-WIRE</p>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span
                                    class="bg-orange-950 text-orange-400 px-2 py-0.5 rounded text-[10px] font-bold border border-orange-800 uppercase">Pending</span>
                            </td>
                            <td class="px-6 py-5 text-center font-mono text-green-400">+Rp 187.5jt</td>
                            <td class="px-6 py-5 text-right text-xs font-mono">19:42:01</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex justify-center items-center gap-2">
                <button class="p-2 text-gray-600 hover:text-white"><svg class="w-4 h-4" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg></button>
                <span class="bg-indigo-600 text-white px-3 py-1 rounded-md text-xs font-bold">1</span>
                <span class="text-gray-500 px-3 py-1 text-xs hover:text-white cursor-pointer">2</span>
                <span class="text-gray-500 px-3 py-1 text-xs hover:text-white cursor-pointer">3</span>
                <button class="p-2 text-gray-600 hover:text-white"><svg class="w-4 h-4" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg></button>
            </div>
        </div>

    </div>
</x-layouts.app>