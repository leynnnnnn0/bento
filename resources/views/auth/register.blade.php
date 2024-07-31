<x-layout>
        <x-heading>Register</x-heading>
        <form action="/register" method="POST" class="space-y-3">
            @csrf
            <x-forms.input label="Username"
                           name="username"
                           id="username"
                           placeholder="john.doe"
                           :value="old('username')"
                           error="username"
                           type="text"/>
            <x-forms.input label="Email"
                           name="email"
                           id="email"
                           placeholder="john.doe@gmail.com"
                           :value="old('email')"
                           error="email"
                           type="email"/>
            <x-forms.input label="Password"
                           name="password"
                           id="password"
                           error="password"
                           type="password"/>
            <x-forms.input label="Confirm Password"
                           name="password_confirmation"
                           id="password_confirmation"
                           type="password"/>
            <div class="flex justify-end">
                <button type="submit" class="hover:bg-opacity-75 transition-colors duration-300 mt-3 bg-primary text-white rounded-lg text-medium font-bold px-3 py-1">Submit</button>
            </div>
        </form>

</x-layout>
