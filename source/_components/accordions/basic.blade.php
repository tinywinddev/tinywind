<div x-data="accordion" class="max-w-md border border-gray-300 divide-y divide-gray-300">
    <h3 class="text-lg">
        <button x-bind="header('general')" class="flex items-center justify-between w-full px-4 py-2 font-medium focus:outline-black focus:border-blue-600">
            <span>General</span>
            <!-- Active: `transform rotate-180`, Inactive: `transform rotate-0` -->
            <svg x-bind="headerIcon('general')" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
            </svg>
        </button>
    </h3>

    <div x-bind="section('general')" class="px-4 py-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim quis ante ut pellentesque. Quisque bibendum dapibus laoreet. Aliquam eget consectetur sem. Suspendisse massa lectus, rhoncus sed sollicitudin sed, auctor vel velit.
    </div>

    <h3 class="text-lg">
        <button x-bind="header('settings')" class="flex items-center justify-between w-full px-4 py-2 font-medium focus:outline-black focus:border-blue-600">
            <span>Settings</span>
            <!-- Active: `transform rotate-180`, Inactive: `transform rotate-0` -->
            <svg x-bind="headerIcon('settings')" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
            </svg>
        </button>
    </h3>
    
    <div x-bind="section('settings')" class="px-4 py-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim quis ante ut pellentesque. Quisque bibendum dapibus laoreet. Aliquam eget consectetur sem. Suspendisse massa lectus, rhoncus sed sollicitudin sed, auctor vel velit.
    </div>
</div>