<section>
     <header>
         <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
             User Avatar
         </h2>
 
         <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
             Add or Update user Avatar
         </p>
     </header>
 
     @if (session('success'))
        <div class="text-red-500">
            {{session('success')}}
        </div>
     @endif

     <form id="send-verification" method="post" action="{{ route('verification.send') }}">
         @csrf
     </form>
     <form method="post" action="{{route('profile.avatar')}}">
        @csrf
        @method('PATCH')
          <div>
               <x-input-label for="name" value="Avatar" />
               <x-text-input id="avatar" name="avatar" type="file" class="mt-1 block w-full" :value="old('avatar', $user->avatar)" required autofocus autocomplete="avatar" />
               <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
          </div>
     
          <div class="flex items-center gap-4">
               <x-primary-button>{{ __('Save') }}</x-primary-button>
          </div>
     </form>
 </section>
 