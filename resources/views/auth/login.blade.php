<x-layout>
        <x-heading>Login</x-heading>
        <form action="/login" method="POST" class="space-y-3">
            @csrf
            <x-forms.input label="Email"
                           name="email"
                           id="email"
                           placeholder="john.doe@gmail.com"
                           :value="old('email')"
                           type="email"/>
            <x-forms.input label="Password"
                           name="password"
                           id="password"
                           error="email"
                           type="password"/>
            <div class="flex justify-end">
                <button type="submit" class="hover:bg-opacity-75 transition-colors duration-300 mt-3 bg-primary text-white rounded-lg text-medium font-bold px-3 py-1">Login</button>
            </div>
        </form>

</x-layout>
