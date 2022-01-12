<x-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-black p-10 rounded-md">
            <div x-data="{ count: 0 }" class="flex flex-col gap-3 items-center">
                <h1 class="text-3xl" x-text="count">0</h1>
                <button @click="count++" class="bg-red-500 rounded-md px-5 py-2">Increment</button>
            </div>

            <div class="mt-2"><a href="/" class="text-blue-400 hover:underline">Back</a></div>
        </div>
    </div>
</x-layout>