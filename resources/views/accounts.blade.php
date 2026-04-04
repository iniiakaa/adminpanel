<x-layouts.app active="accounts" title="Accounts">
    <div class="p-8">

        <div class="flex justify-between items-center mb-10">
            <div class="relative w-1/3">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </span>
                <input type="text" placeholder="Search accounts, banks, or card holders..." class="w-full bg-[#161922] border-none text-sm rounded-lg pl-10 pr-4 py-2 text-gray-300 focus:ring-1 focus:ring-blue-500">
            </div>
            <div class="flex items-center gap-6">
                <button class="text-gray-400 hover:text-white"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg></button>
                <div class="flex items-center gap-2">
                    <span class="text-[10px] font-bold text-gray-500 uppercase">Gateway</span>
                    <span class="bg-green-950 text-green-400 text-[10px] font-bold px-2 py-0.5 rounded-full border border-green-800">ENCRYPTED</span>
                </div>
            </div>
        </div>

        <div class="mb-10">
            <p class="text-blue-400 text-[10px] font-black tracking-[0.2em] uppercase mb-1">Financial Treasury</p>
            <div class="flex justify-between items-end">
                <div>
                    <h1 class="text-5xl font-bold text-white tracking-tight">Accounts</h1>
                    <p class="text-gray-400 mt-2 text-sm max-w-md">Manage your bank connections, digital wallets, and centralized liquidity sources.</p>
                </div>
                <div class="flex gap-3">
                    <button class="bg-[#1b1f29] text-white px-4 py-2 rounded-lg text-sm font-semibold border border-gray-700 hover:bg-gray-800 flex items-center gap-2 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                        Settings
                    </button>
                    <button class="bg-gradient-to-r from-[#00d2ff] to-[#3a7bd5] text-white px-5 py-2 rounded-lg text-sm font-bold flex items-center gap-2 hover:opacity-90 shadow-lg shadow-blue-900/20 transition">
                        <span class="text-xl leading-none">+</span> Add Account
                    </button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4 mb-12">
            @php
                $stats = [
                    ['label' => 'Total Balance', 'value' => '$428,290', 'color' => 'text-white'],
                    ['label' => 'Bank Accounts', 'value' => '12', 'color' => 'text-cyan-400'],
                    ['label' => 'Pending Sync', 'value' => '02', 'color' => 'text-purple-400'],
                    ['label' => 'Active Wallets', 'value' => '05', 'color' => 'text-blue-400'],
                ];
            @endphp
            @foreach($stats as $stat)
            <div class="bg-[#161922] border border-gray-800 p-6 rounded-2xl">
                <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">{{ $stat['label'] }}</p>
                <h4 class="text-2xl font-bold mt-2 {{ $stat['color'] }}">{{ $stat['value'] }}</h4>
            </div>
            @endforeach
        </div>

        <div class="grid grid-cols-3 gap-6 mb-12">
            <div class="bg-[#161922] border border-gray-800 rounded-3xl p-8 group hover:border-blue-500 transition-all duration-300">
                <div class="flex justify-between items-start">
                    <div class="bg-blue-600/20 p-3 rounded-2xl">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold text-green-400 px-2 py-1 bg-green-400/10 rounded-md uppercase">Primary</span>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-bold text-white leading-tight">Corporate Treasury Bank</h3>
                    <p class="text-gray-500 text-xs mt-1 italic">Chase Manhattan • **** 9920</p>
                </div>
                <div class="mt-8 flex justify-between items-end">
                    <div>
                        <p class="text-[10px] text-gray-600 font-bold uppercase tracking-wider">Balance</p>
                        <p class="text-2xl font-bold text-white mt-1">$214,000.00</p>
                    </div>
                    <button class="bg-[#1e222d] p-2 rounded-lg text-gray-400 group-hover:text-blue-400 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

            <div class="bg-[#161922] border border-gray-800 rounded-3xl p-8 group hover:border-purple-500 transition-all duration-300">
                <div class="flex justify-between items-start">
                    <div class="bg-purple-600/20 p-3 rounded-2xl">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="text-[10px] font-bold text-gray-500 px-2 py-1 bg-gray-500/10 rounded-md uppercase">External</span>
                </div>
                <div class="mt-6">
                    <h3 class="text-xl font-bold text-white leading-tight">Digital Assets Wallet</h3>
                    <p class="text-gray-500 text-xs mt-1 italic">Coinbase Custody • 0x82...221d</p>
                </div>
                <div class="mt-8 flex justify-between items-end">
                    <div>
                        <p class="text-[10px] text-gray-600 font-bold uppercase tracking-wider">Balance</p>
                        <p class="text-2xl font-bold text-white mt-1">$14,550.25</p>
                    </div>
                    <button class="bg-[#1e222d] p-2 rounded-lg text-gray-400 group-hover:text-purple-400 transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

            <div class="border-2 border-dashed border-gray-800 rounded-3xl p-8 flex flex-col items-center justify-center text-center hover:border-gray-600 transition cursor-pointer group">
                <div class="bg-gray-800/50 p-4 rounded-full text-gray-500 group-hover:text-white transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </div>
                <p class="mt-4 text-gray-500 font-bold text-sm uppercase tracking-widest">Connect New Gateway</p>
            </div>
        </div>

        <div>
            <div class="flex justify-between items-center mb-6">
                <h4 class="text-gray-500 text-[10px] font-black tracking-widest uppercase">Recent Operations</h4>
                <p class="text-gray-600 text-[10px]">LATEST ACTIVITY TRACKER</p>
            </div>
            
            <div class="bg-[#161922] border border-gray-800 rounded-2xl overflow-hidden">
                <table class="w-full text-left text-sm text-gray-400">
                    <thead class="bg-[#1b1f29] text-[10px] font-bold text-gray-500 uppercase tracking-tighter">
                        <tr>
                            <th class="px-6 py-4">Action</th>
                            <th class="px-6 py-4">Subject</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4 text-right">Timestamp</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        <tr class="hover:bg-[#1e222d] transition">
                            <td class="px-6 py-4 flex items-center gap-3">
                                <span class="p-1.5 bg-blue-500/20 text-blue-400 rounded-md">↑</span>
                                <span class="font-bold text-white">Funds Transfer</span>
                            </td>
                            <td class="px-6 py-4 italic">Sent $1,200 to Sarah Chen</td>
                            <td class="px-6 py-4 text-[10px]"><span class="bg-blue-900 text-blue-400 px-2 py-0.5 rounded uppercase font-bold">Verified</span></td>
                            <td class="px-6 py-4 text-right text-xs">2 hours ago</td>
                        </tr>
                        <tr class="hover:bg-[#1e222d] transition">
                            <td class="px-6 py-4 flex items-center gap-3">
                                <span class="p-1.5 bg-purple-500/20 text-purple-400 rounded-md">↓</span>
                                <span class="font-bold text-white">Inward Remittance</span>
                            </td>
                            <td class="px-6 py-4 italic">Received from P.D Sinar Plastik</td>
                            <td class="px-6 py-4 text-[10px]"><span class="bg-green-900 text-green-400 px-2 py-0.5 rounded uppercase font-bold">Cleared</span></td>
                            <td class="px-6 py-4 text-right text-xs">5 hours ago</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts.app>