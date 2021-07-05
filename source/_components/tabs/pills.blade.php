<div x-data="tabs" class="w-full">
    <div class="sm:hidden">
        <label for="tabs" class="sr-only">Choose a tab</label>
        <select name="tabs" id="tabs" class="w-full" x-model="active">
            <option value="information">Information</option>
            <option value="address">Address</option>
            <option value="payment">Payment</option>
            <option value="settings">Settings</option>
        </select>
    </div>
    
    <nav
        class="hidden p-2 space-x-4 bg-gray-100 bg-opacity-75 sm:flex"
        aria-label="Tabs"
    >
        <!-- Active: "text-gray-800 bg-gray-200", Inactive: "text-gray-600 hover:text-gray-800" -->
        <a
            href="#"
            x-on:click.prevent="setActive('information')"
            x-bind:class="{
                'text-gray-800 bg-gray-200': active === 'information',
                'text-gray-600 hover:text-gray-800': active !== 'information',
            }"
            x-bind:aria-current="active === 'information' ? 'page' : false"
            class="px-3 py-2 text-sm font-medium focus:outline-black"
        >
            Information
        </a>
    
        <a
            href="#"
            x-on:click.prevent="setActive('address')"
            x-bind:class="{
                'text-gray-800 bg-gray-200': active === 'address',
                'text-gray-600 hover:text-gray-800': active !== 'address',
            }"
            x-bind:aria-current="active === 'address' ? 'page' : false"
            class="px-3 py-2 text-sm font-medium focus:outline-black"
        >
            Address
        </a>
    
        <a
            href="#"
            x-on:click.prevent="setActive('payment')"
            x-bind:class="{
                'text-gray-800 bg-gray-200': active === 'payment',
                'text-gray-600 hover:text-gray-800': active !== 'payment',
            }"
            x-bind:aria-current="active === 'payment' ? 'page' : false"
            class="px-3 py-2 text-sm font-medium bg-gray-200 focus:outline-black"
        >
            Payment
        </a>
    
        <a
            href="#"
            x-on:click.prevent.prevent="setActive('settings')"
            x-bind:class="{
                'text-gray-800 bg-gray-200': active === 'settings',
                'text-gray-600 hover:text-gray-800': active !== 'settings',
            }"
            x-bind:aria-current="active === 'settings' ? 'page' : false"
            class="px-3 py-2 text-sm font-medium focus:outline-black"
        >
            Settings
        </a>
    </nav>
</div>
