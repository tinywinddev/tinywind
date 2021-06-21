<div
    x-data="stars"
    class="flex items-center space-x-2"
>
    <template x-for="i in 5">
        <button type="button" x-on:click="setCount(i)" class="m-0 focus:outline-none">
            <svg
                class="w-8 h-8 mx-1 fill-current"
                x-bind:class="{ 'text-yellow-500': count >= i, 'text-gray-100 hover:text-gray-200': count < i }"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
            >
                <path
                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"
                />
            </svg>
        </button>
    </template>
</div>
