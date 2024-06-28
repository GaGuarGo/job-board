<x-layout>

    <h1 class="my-16 text-center text-4xl font-medium text-slate-600">Sign in to your Account</h1>

    <x-card class="py-8 px-16">
        <form action="{{route('auth.store')}}" method="POST">
            @csrf

            <div class="mb-8">

                <x-label for="email" :required="true">Email</x-label>
                <x-text-input name="email"></x-text-input>

            </div>
            <div class="mb-8">

                <x-label for="password" :required="true">Password</x-label>
                <x-text-input name="password" type="password"></x-text-input>

            </div>

            <div class="mb-8 flex justify-between text-sm font-medium">
                <div>
                    <div class="flex items-center space-x-2">
                        <input name="remember" type="checkbox" class="rounded-sm border border-slate-400"/>
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-indigo-600 hover:underline">Forget Password?</a>
                </div>
            </div>

            <x-button class="w-full bg-indigo-600 text-white hover:bg-indigo-700">
                Login
            </x-button>

        </form>
    </x-card>

</x-layout>
