<x-layouts.app active="dashboard" title="Dashboard">
    <div class="p-8">

        <div class="flex justify-between items-center mb-10">
            <div class="relative w-1/3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </span>
                <input type="text" placeholder="Search metrics, invoices, or reports..."
                    class="w-full bg-[#161922] border-none text-sm rounded-lg pl-10 pr-4 py-2 text-gray-300 focus:ring-1 focus:ring-cyan-500">
            </div>
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="text-[10px] font-bold text-gray-500 uppercase">Real-Time</span>
                    <span
                        class="bg-green-950 text-green-400 text-[10px] font-bold px-2 py-0.5 rounded-full border border-green-800">LIVE</span>
                </div>
                <div class="w-8 h-8 rounded-full border border-gray-700 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=0D8ABC&color=fff" alt="User">
                </div>
            </div>
        </div>

        <div class="mb-10">
            <p class="text-cyan-500 text-[10px] font-black tracking-[0.2em] uppercase mb-1">Command Center</p>
            <div class="flex justify-between items-end">
                <div>
                    <h1 class="text-5xl font-bold text-white tracking-tight">Dashboard</h1>
                    <p class="text-gray-400 mt-2 text-sm max-w-md">Real-time financial metrics, portfolio insights, and
                        operational performance at a glance.</p>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-[#1b1f29] text-white px-4 py-2 rounded-lg text-sm font-semibold border border-gray-700 hover:bg-gray-800 flex items-center gap-2 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Export PDF
                    </button>
                    <button
                        class="bg-gradient-to-r from-[#00d2ff] to-[#9d50bb] text-white px-5 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:opacity-90 transition shadow-lg shadow-cyan-900/20">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Quick Action
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-12">
            @php
                $stats = [
                    ['label' => 'Total Revenue', 'value' => 'Rp 1.24M', 'change' => '+18.2%', 'up' => true, 'color' => 'text-white'],
                    ['label' => 'Total Expenses', 'value' => 'Rp 482jt', 'change' => '-Rp 2.1jt', 'up' => false, 'color' => 'text-purple-400'],
                    ['label' => 'Net Profit', 'value' => 'Rp 758jt', 'change' => '+12.4%', 'up' => true, 'color' => 'text-cyan-400'],
                    ['label' => 'Active Accounts', 'value' => '12', 'change' => '+3 new', 'up' => true, 'color' => 'text-blue-400'],
                ];
            @endphp
            @foreach($stats as $stat)
                <div
                    class="bg-[#161922] border border-gray-800 p-6 rounded-2xl hover:border-gray-700 transition-all duration-300 group">
                    <div class="flex justify-between items-start">
                        <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">{{ $stat['label'] }}</p>
                        <span
                            class="text-[10px] font-bold {{ $stat['up'] ? 'text-green-400' : 'text-pink-400' }}">{{ $stat['change'] }}</span>
                    </div>
                    <h4 class="text-2xl font-bold mt-2 {{ $stat['color'] }}">{{ $stat['value'] }}</h4>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-3 gap-6 mb-12">
            <div class="col-span-2 bg-[#161922] border border-gray-800 rounded-3xl p-8">
                <div class="flex justify-between items-start mb-6">
                    <h3 class="text-lg font-bold text-white">Revenue Trajectory</h3>
                    <select class="bg-transparent text-gray-500 text-xs border-none focus:ring-0 cursor-pointer">
                        <option>2026</option>
                        <option>2025</option>
                    </select>
                </div>
                <div class="flex items-end gap-2 h-32 mt-10">
                    <div class="w-full bg-purple-900/30 border-t-2 border-purple-500 h-[40%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[55%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[65%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[90%] rounded-t-sm"></div>
                    <div class="w-full bg-purple-900/30 border-t-2 border-purple-500 h-[70%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[60%] rounded-t-sm"></div>
                    <div class="w-full bg-purple-900/30 border-t-2 border-purple-500 h-[50%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[75%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[85%] rounded-t-sm"></div>
                    <div class="w-full bg-purple-900/30 border-t-2 border-purple-500 h-[55%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[45%] rounded-t-sm"></div>
                    <div class="w-full bg-cyan-900/30 border-t-2 border-cyan-500 h-[80%] rounded-t-sm"></div>
                </div>
                <div class="flex justify-between mt-4 text-[10px] text-gray-600 font-bold uppercase tracking-wider">
                    <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
                </div>
            </div>

            <div class="bg-gradient-to-br from-[#161922] to-[#0f111a] border border-gray-800 rounded-3xl p-8 flex flex-col justify-between shadow-2xl">
                <div>
                    <span class="bg-cyan-500/10 text-cyan-400 text-[10px] font-bold px-3 py-1 rounded-md uppercase">Net Profit</span>
                    <h4 class="text-4xl font-bold text-white mt-4">Rp 758jt</h4>
                    <p class="text-xs text-green-400 mt-2 flex items-center gap-1">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z"/></svg>
                        +12.4% from last month
                    </p>
                </div>
                <div class="pt-6 border-t border-gray-800">
                    <p class="text-[10px] text-gray-500 uppercase font-bold tracking-widest">Profit Margin</p>
                    <p class="text-sm text-gray-300 mt-1">61.1% of total revenue</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-6">
            <div>
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-gray-500 text-[10px] font-black tracking-widest uppercase">Recent Transactions</h4>
                    <p class="text-gray-600 text-[10px]">LAST 24 HOURS</p>
                </div>

                <div class="bg-[#161922] border border-gray-800 rounded-2xl overflow-hidden">
                    <table class="w-full text-left text-sm text-gray-400">
                        <thead
                            class="bg-[#1b1f29] text-[10px] font-bold text-gray-500 uppercase tracking-tighter border-b border-gray-800">
                            <tr>
                                <th class="px-6 py-4">Description</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800">
                            <tr class="hover:bg-[#1e222d] transition group cursor-pointer">
                                <td class="px-6 py-5 flex items-center gap-3">
                                    <span class="p-1.5 bg-green-500/20 text-green-400 rounded-md">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                        </svg>
                                    </span>
                                    <div>
                                        <p class="font-bold text-white">Payment received — Invoice #1042</p>
                                        <p class="text-[10px] text-gray-500">2 minutes ago</p>
                                    </div>
                                </td>
                                <td class="px-6 py-5"><span
                                        class="bg-cyan-950 text-cyan-400 px-2 py-0.5 rounded text-[10px] font-bold border border-cyan-800 uppercase">Cleared</span>
                                </td>
                                <td class="px-6 py-5 text-right font-mono text-green-400">+Rp 15.5jt</td>
                            </tr>
                            <tr class="hover:bg-[#1e222d] transition group cursor-pointer">
                                <td class="px-6 py-5 flex items-center gap-3">
                                    <span class="p-1.5 bg-blue-500/20 text-blue-400 rounded-md">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                        </svg>
                                    </span>
                                    <div>
                                        <p class="font-bold text-white">Transfer to Savings Account</p>
                                        <p class="text-[10px] text-gray-500">1 hour ago</p>
                                    </div>
                                </td>
                                <td class="px-6 py-5"><span
                                        class="bg-blue-900 text-blue-400 px-2 py-0.5 rounded text-[10px] font-bold uppercase">Verified</span>
                                </td>
                                <td class="px-6 py-5 text-right font-mono text-white">-Rp 5.0jt</td>
                            </tr>
                            <tr class="hover:bg-[#1e222d] transition group cursor-pointer">
                                <td class="px-6 py-5 flex items-center gap-3">
                                    <span class="p-1.5 bg-pink-500/20 text-pink-400 rounded-md">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                        </svg>
                                    </span>
                                    <div>
                                        <p class="font-bold text-white">Vendor Payment — PT Maju Jaya</p>
                                        <p class="text-[10px] text-gray-500">4 hours ago</p>
                                    </div>
                                </td>
                                <td class="px-6 py-5"><span
                                        class="bg-orange-950 text-orange-400 px-2 py-0.5 rounded text-[10px] font-bold border border-orange-800 uppercase">Pending</span>
                                </td>
                                <td class="px-6 py-5 text-right font-mono text-pink-400">-Rp 3.2jt</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-gray-500 text-[10px] font-black tracking-widest uppercase">Budget Utilization</h4>
                    <p class="text-gray-600 text-[10px]">MONTHLY ALLOCATION</p>
                </div>

                <div class="bg-[#161922] border border-gray-800 rounded-2xl p-8">
                    <div class="space-y-6">
                        @php
                            $budgets = [
                                ['label' => 'Operational', 'value' => '78%', 'width' => '78%', 'gradient' => 'from-teal-600 to-teal-400'],
                                ['label' => 'Marketing', 'value' => '52%', 'width' => '52%', 'gradient' => 'from-cyan-600 to-cyan-400'],
                                ['label' => 'R&D', 'value' => '65%', 'width' => '65%', 'gradient' => 'from-purple-600 to-purple-400'],
                                ['label' => 'Infrastructure', 'value' => '41%', 'width' => '41%', 'gradient' => 'from-blue-600 to-blue-400'],
                            ];
                        @endphp
                        @foreach($budgets as $budget)
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span
                                        class="text-xs font-semibold text-gray-400 uppercase tracking-wider">{{ $budget['label'] }}</span>
                                    <span class="text-sm font-bold text-white">{{ $budget['value'] }}</span>
                                </div>
                                <div class="h-2 bg-gray-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r {{ $budget['gradient'] }} rounded-full transition-all duration-1000"
                                        style="width: {{ $budget['width'] }};"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="/reports"
                        class="w-full mt-8 py-3 px-4 rounded-lg bg-[#1b1f29] text-white text-sm font-semibold flex items-center justify-center gap-2 border border-gray-700 hover:bg-gray-800 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Generate Financial Report
                    </a>
                </div>
            </div>
        </div>

    </div>
</x-layouts.app>