<x-admin-guest-layout>
    <!-- Create By Joker Banny -->
    <div class="min-h-screen bg-no-repeat bg-cover bg-center"
         style="background-image: url('https://images.unsplash.com/photo-1486520299386-6d106b22014b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80')">
        <div class="flex justify-end">
            <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                <div>

                    <form class="w-[300px]" action="{{route('admin.login')}}" method="post">
                        @csrf

                        <div>
                            <span class="text-sm text-gray-900">Welcome back</span>
                            <h1 class="text-2xl font-bold">Login to admin area</h1>
                        </div>


                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')"/>

                        <div class="mt-5">
                            <x-admin.input id="email" class="block mt-1 w-full" type="email" name="email"
                                           placeholder="Your email address"
                                           label="Email"
                                           :value="old('email')" required autofocus/>
                        </div>
                        <div class="my-3">
                            <x-admin.input id="password" class="block mt-1 w-full"
                                           type="password"
                                           name="password"
                                           placeholder="Your Password"
                                           label="Password"
                                           :value="old('password')" required autofocus/>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <input class="cursor-pointer" type="radio" name="rememberme">
                                <span class="text-sm">Remember Me</span>
                            </div>
                            <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                        </div>
                        <div class="">
                            <button
                                class="mt-4 mb-3 w-full bg-green-500 hover:bg-green-400 text-white py-2 rounded-md transition duration-100">
                                Login now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-admin-guest-layout>
