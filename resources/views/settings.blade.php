<x-layouts.app active="settings" title="Settings">
    <div class="p-8">

        <div class="flex justify-end items-center mb-10">
              </div>

        <div class="mb-10">
            <p class="text-purple-500 text-[10px] font-black tracking-[0.2em] uppercase mb-1">Configuration Console</p>
            <h1 class="text-5xl font-bold text-white tracking-tight">Workspace Settings</h1>
            <p class="text-gray-400 mt-2 text-sm max-w-xl">Manage your environment, security protocols, and communication filters from one centralized control plane.</p>
        </div>

        <div class="grid grid-cols-3 gap-8">
            <div class="col-span-2 space-y-8">

                <div class="bg-[#161922] border border-gray-800 rounded-3xl p-8">
                    <div class="flex justify-between items-start mb-8">
                        <div>
                            <h3 class="text-xl font-bold text-white">Identity Profile</h3>
                            <p class="text-gray-500 text-xs mt-1">Publicly visible metadata and identity markers.</p>
                        </div>
                        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-lg text-xs font-bold transition">Save Changes</button>
                    </div>

                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">Full Display Name</label>
                            <input type="text" value="Budi Santoso" class="w-full bg-[#0f111a] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-300 focus:border-indigo-500 outline-none transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">Professional Email</label>
                            <input type="email" value="budi.santoso@finvault.co.id" class="w-full bg-[#0f111a] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-300 focus:border-indigo-500 outline-none transition">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-bold text-gray-500 uppercase tracking-wider">Professional Bio</label>
                        <textarea rows="4" class="w-full bg-[#0f111a] border border-gray-800 rounded-xl px-4 py-3 text-sm text-gray-300 focus:border-indigo-500 outline-none transition resize-none">Senior Finance Manager with expertise in portfolio analytics, capital allocation, and operational efficiency across regional business units.</textarea>
                    </div>
                </div>

                <div class="bg-[#161922] border border-gray-800 rounded-3xl p-8">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="text-cyan-400">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white">Security Protocols</h3>
                            <p class="text-gray-500 text-xs mt-1">Protect your workspace with advanced encryption settings.</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-[#0f111a] rounded-2xl border border-gray-800">
                            <div class="flex items-center gap-4">
                                <div class="p-2 bg-gray-800 rounded-lg text-cyan-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-white">Two-Factor Authentication</p>
                                    <p class="text-[10px] text-gray-500">Add an extra layer of security to your account.</p>
                                </div>
                            </div>
                            <div class="w-10 h-5 bg-cyan-500 rounded-full relative cursor-pointer">
                                <div class="absolute right-1 top-1 bg-white w-3 h-3 rounded-full"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between p-4 bg-[#0f111a] rounded-2xl border border-gray-800">
                            <div class="flex items-center gap-4">
                                <div class="p-2 bg-gray-800 rounded-lg text-purple-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-white">Hardware Key Support</p>
                                    <p class="text-[10px] text-gray-500">Use physical keys like Yubikey for authentication.</p>
                                </div>
                            </div>
                            <div class="w-10 h-5 bg-gray-700 rounded-full relative cursor-pointer">
                                <div class="absolute left-1 top-1 bg-gray-400 w-3 h-3 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-red-950/10 border border-red-900/50 rounded-3xl p-8 flex justify-between items-center">
                    <div>
                        <h3 class="text-lg font-bold text-red-500">Danger Zone</h3>
                        <p class="text-gray-500 text-xs mt-1 italic">Irreversible actions for your workspace account.</p>
                    </div>
                    <button class="border border-red-900 text-red-500 px-6 py-2 rounded-xl text-xs font-bold hover:bg-red-900/20 transition">Deactivate Workspace</button>
                </div>
            </div>

            <div class="space-y-8">

                <div class="bg-[#161922] border border-gray-800 rounded-3xl p-8">
                    <h3 class="text-lg font-bold text-white mb-6">Notification Logic</h3>
                    <div class="space-y-6">
                        @php
                            $notifs = [
                                ['label' => 'Critical Alerts', 'active' => true],
                                ['label' => 'Team Mentions', 'active' => true],
                                ['label' => 'Daily Digest', 'active' => false],
                                ['label' => 'Marketing Comms', 'active' => false],
                            ];
                        @endphp
                        @foreach($notifs as $notif)
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-400 font-medium">{{ $notif['label'] }}</span>
                            <div class="w-8 h-4 {{ $notif['active'] ? 'bg-cyan-500' : 'bg-gray-700' }} rounded-full relative">
                                <div class="absolute {{ $notif['active'] ? 'right-0.5' : 'left-0.5' }} top-0.5 bg-white w-3 h-3 rounded-full"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-gradient-to-br from-[#161922] to-[#0f111a] border border-gray-800 rounded-3xl p-8 shadow-2xl">
                    <p class="text-[10px] font-bold text-cyan-500 uppercase tracking-widest">Active Session</p>
                    <div class="flex items-baseline gap-2 mt-2">
                        <h4 class="text-4xl font-bold text-white">12</h4>
                        <span class="text-gray-500 text-xs">Days Uptime</span>
                    </div>
                    <div class="flex items-center gap-2 mt-4 text-[10px] text-gray-500">
                        <div class="w-1.5 h-1.5 rounded-full bg-cyan-400"></div>
                        Verified Connection: Jakarta, ID
                    </div>
                    <button class="w-full mt-10 py-3 rounded-xl border border-gray-800 text-gray-400 text-[10px] font-black uppercase tracking-widest hover:text-white hover:border-gray-600 transition">Terminate All Sessions</button>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>
