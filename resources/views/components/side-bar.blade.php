
    <aside class="w-80 hidden md:flex md:flex-col border m-4 mr-0 rounded-lg overflow-hidden">
        <p class='m-4 mb-12 font-bold text-2xl text-center text-[#00446b]'>NextFleet Dynamics</p>

        <div class="flex flex-col mr-4">

            <div class="flex relative my-1 cursor-pointer">
           
            <a href="/dashboard" class="ml-8 flex p-1 w-full rounded-xl sidebar-link {{ Request::is('dashboard') ? 'active' : '' }}">
                    <span class="flex items-center gap-1 px-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                        </svg>
                        <span class="text-lg">Home</span>
                    </span>
                </a>
            </div>

            <div class='flex flex-col relative my-1 cursor-pointer'>
    <a href="/onboarding" class="ml-8 flex p-1 w-full rounded-xl sidebar-link {{ Request::is('onboarding') ? 'active' : '' }}" onclick="setActiveLink(this)">
        <span class='flex items-center gap-1 px-1'>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-data">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M9 17v-4" />
                <path d="M12 17v-1" />
                <path d="M15 17v-2" />
                <path d="M12 17v-1" />
            </svg>
            <span class="text-lg">Onboarding Task</span>
        </span>
    </a>
</div>


            <div class='flex relative my-1 cursor-pointer'>
                <a href="#learnings" class="ml-8 flex p-1 w-full rounded-xl sidebar-link" onclick="setActiveLink(this)">
                    <span class='flex items-center gap-1 px-1'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                            <path d="M4 20h14" />
                        </svg>
                        <span class="text-lg">Learn Management</span>
                    </span>
                </a>
                <div class='ml-12 mt-2'>
        
    </div>
            </div>

            <div class='flex relative my-1 cursor-pointer'>
                <a href="#leave" class="ml-8 flex p-1 w-full rounded-xl sidebar-link" onclick="setActiveLink(this)">
                    <span class='flex items-center gap-1 px-1'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                        </svg>
                        <span class="text-lg">Leave Request</span>
                    </span>
                </a>
            </div>

            <div class='flex relative my-1 cursor-pointer'>
                <a href="#documents" class="ml-8 flex p-1 w-full rounded-xl sidebar-link" onclick="setActiveLink(this)">
                    <span class='flex items-center gap-1 px-1'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                        </svg>
                        <span class="text-lg">Documents</span>
                    </span>
                </a>
            </div>
           

        </div>
    </aside>

