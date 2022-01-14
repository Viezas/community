<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-center mb-4">
                        <div style="height: 100px; width: 100px; border-radius: 500px; background-image: url({{ Auth::user()->profilePicture != null ? asset('/storage/'.Auth::user()->profilePicture->name) : url('/img/default.jpg') }}); background-size: cover; background-position: center;"></div>
                    </div>
                    <form method="post" action="{{ route('dashboard') }}" enctype="multipart/form-data">
                        @csrf

                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ Auth::user()->name }}" required autofocus />
                            </div>

                    <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ Auth::user()->email }}" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="current-password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="biography" :value="__('Biography')" />

                            <x-input id="biography" class="block mt-1 w-full" type="text" name="biography" value="{{ Auth::user()->biography }}" required autofocus />
                        </div>

                        {{-- Profile picture --}}
                        <div class="mt-4">
                            <x-label for="photos" :value="__('user.profile_picture')" />
                            <input type="file" class="form-control" name="photo" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
