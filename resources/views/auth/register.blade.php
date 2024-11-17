<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
    <title>Register</title>





</head>

<body >
<div class="h-screen flex md:flex-row flex-col">
        <div class="lg:w-3/5 h-screen custom-py-1p lg:block hidden">
            <div class="bus-background bg-cover w-full h-full rounded-r-3xl"></div>
        </div>

        <div class="flex flex-col py-4 md:w-1/2 lg:w-2/5 w-full items-center">
            <p class="font-bold lg:text-4xl text-2xl w-full text-center text-[#00446b]">Bus Transportation Management System</p>
            <p class="font-semibold lg:text-3xl text-xl text-center mt-10 text-[#00446b]">&lt;Human Resource 1&gt;</p>

            <form method="POST" action="{{ route('register') }}" class="xl:w-4/6 lg:w-5/6 sm:w-2/3 py-4 rounded-3xl shadow-lg mt-10 flex flex-col items-center border">
                @csrf
                <p class="text-center mb-4 text-xl text-[#00446b]">Register</p>
                <hr class="border w-full border-[#00446b]">

                <!-- Name -->
                <div class="mt-8 w-4/5">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                 </div>


                <!-- Email Address -->
                 <div class="mt-8 w-4/5">
                     <x-input-label for="email" :value="__('Email')" />
                     <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                     <x-input-error :messages="$errors->get('email')" class="mt-2" />
                 </div>


                <!-- Password -->
                <div class="mt-8 w-4/5">
                     <x-input-label for="password" :value="__('Password')" />
                     <x-text-input id="password" class="block mt-1 w-full"  type="password" name="password" required autocomplete="new-password" />
                     <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

               <!-- Confirm Password -->
               <div class="mt-8 w-4/5">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
               </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

        </div>
        <div class="flex items-center mt-4 mb-8 w-4/5">
                    <button type="submit" class="w-full font-medium p-2 rounded-md border bg-[#00446b] text-white">
                        <p class="text-center">{{ __('Register') }}</p>
                    </button>
    </form>


            </form>
        </div>
    </div>

</body>

</html>

