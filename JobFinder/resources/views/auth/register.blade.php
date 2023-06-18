<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-2">
        @csrf
        <div class="text-center">
            <h1 class="text-4xl font-bold">Sign up</h1>
            <h5 class="text-md text-gray-500 mt-1">Register now and get hired!</h5>
        </div>
        <!--Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('Firstname')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>
         <!--Lastname -->
         <div>
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

         <!--Contact -->
         <div>
            <x-input-label for="contact" :value="__('Contact')" />
            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>

          <!--Type -->
          <div>
            <x-input-label for="classification" :value="__('Classification Type')" />
            <x-input-select id="classification" class="block mt-1 w-full" name="classification" :value="old('classification')" required autofocus>
                @foreach (App\Enums\ClassificationType::values() as $key => $item)
                    <option value="{{$key}}">{{$item}}</option>
                @endforeach
            </x-input-select>
            <x-input-error :messages="$errors->get('classification')" class="mt-2" />
        </div>
         <!-- Username -->
         <div>
            <x-input-label for="username" :value="__('Username')" />

            <x-text-input id="username" class="block mt-1 w-full"
                            type="text"
                            name="username"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>


        <!-- Password -->
        <div>
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

        <div class="flex items-center justify-between">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
