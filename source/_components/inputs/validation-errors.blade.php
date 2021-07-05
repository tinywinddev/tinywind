<div class="max-w-md space-y-2">
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
        class="w-full border-2 border-red-600 focus:shadow-none focus:border-red-600 focus:outline-black focus:ring-0"
        aria-required="true"
        aria-invalid="true"
        aria-describedby="name-error"
        value="info@tinywind.dev"
        required
    >
    <p id="name-error" class="font-medium text-red-600">
        <span>This email address already exists.</span>
    </p>
</div>
