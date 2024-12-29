<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="w-full flex justify-center text-black font-extrabold text-4xl mt-3 px-7 py-6">
            Register
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4 flex-col">
            <div class="w-full">
                <x-primary-button class="w-full">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="mt-2">
                <p>
                    Already registered?
                    <a class="font-bold text-black hover:text-white rounded-md" href="{{ route('login') }}">
                        {{ __('Login') }} 
                    </a>
                </p>
            </div>
        </div>
    </form>
</x-guest-layout>
