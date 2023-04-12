<section>
    <div class="pro">
     
        <h2 class="pro1">
            {{ __('Update Password') }}
        </h2>

        <p class="pro2">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </div>
<br>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="field">

        <div class="input-field2">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password"  autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')"  />
            </div> 

            <div class="input-field2">
        
            <x-input-label for="password" :value="__('New Password')" />&nbsp;&nbsp;
            <x-text-input id="password" name="password" type="password"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')"  />
        </div>

        <div class="input-field2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"  autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"  />
        </div>
    </div>

       <div class="butt">

                <button class="btn">{{ __('Save') }}</button>
            </div>

            @if (session('status') === 'password-updated')
                <p class="msg"
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        
    </form>
</section>
