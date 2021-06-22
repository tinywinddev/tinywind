<div class="space-y-2">
    <label
        for="name"
        class="block font-medium font-gray-900"
    >
        First name
    </label>
    <input
        type="text"
        name="name"
        id="name"
        class="w-1/2 border-2 border-red-600 focus:shadow-none focus:border-red-600 focus:outline-black focus:ring-0"
        aria-required="true"
        aria-invalid="true"
        aria-describedby="name-error"
        required
    >
    <p id="name-error" class="font-medium text-red-600">
        <span>This email address already exists.</span>
    </p>
</div>
