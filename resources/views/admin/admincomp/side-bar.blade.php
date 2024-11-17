<aside class="w-64 bg-white border-r border-gray-200 p-4 shadow-lg">
            <div class="flex flex-col mr-4">
                <div class="flex flex-col relative my-1 cursor-pointer">
                <a href="/manager/dashboard" class="ml-8 flex p-1 w-full rounded-xl sidebar-link {{ Request::is('manager/dashboard') ? 'active' : '' }}">
                        <span class="flex items-center gap-1 px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard">
                                <path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" />
                            </svg>
                            <span class="text-lg">Home</span>
                        </span>
                    </a>
                </div>

<div class="flex flex-col relative my-1 cursor-pointer">
    <a href="/manager/jobreq" class="ml-8 flex p-1 w-full rounded-xl sidebar-link {{ Request::is('manager/jobreq') ? 'active' : '' }}">
        <span class="flex items-center gap-1 px-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-data">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                <path d="M9 17v-4" />
                <path d="M12 17v-1" />
                <path d="M15 17v-2" />
                <path d="M12 17v-1" />
            </svg>
            <span class="text-lg">User Creation</span>
        </span>
    </a>
</div>


           
            
        </div>
</aside>