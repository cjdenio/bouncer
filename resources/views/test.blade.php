<x-layout>
    <div class="pt-20 mx-auto w-fit">
        <div class="bg-black p-10 rounded-md w-96">
            <div class="flex gap-5 items-center">
                <img src="https://d19o3k50vack1b.cloudfront.net/assets/logo-production-dark-8f8f135056d533085895e9ca1e49d618cf40c1a634e6b8ba01c4a6897a83e660.svg" alt="{{ $app->name }}" class="h-12">

                <div class="flex flex-col">
                    <h3 class="text-gray-400 uppercase">Sign in to</h3>
                    <h1 class="text-3xl font-bold">{{ $app->name }}</h1>
                </div>
            </div>

            <form class="mt-5">
                <input type="email" name="email" id="email" placeholder="Email" autofocus class="bg-transparent text-white block  rounded-md border-gray-600 border-2 py-3 px-4 w-full focus:outline-none">
                <button type="submit" class="mt-5 bg-blue-500 px-4 py-2 rounded-md font-bold">Continue</button>
            </form>
        </div>

        <a href="/" class="text-gray-500 mt-3 block hover:text-gray-400 underline transition-colors duration-75">
            What's this?
        </a>
    </div>
</x-layout>