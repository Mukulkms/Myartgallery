<section>

        <div class="pro">
            <h2 class="pro1">
                {{ __('Profile Information') }}
            </h2>
    
            <p class="pro2">
                {{ __("Update your account's profile information and email address.") }}
            </p>
        </div>
        
        <br>
   

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" >
        @csrf
        @method('patch')
         
        <div class="field">

            <div class="input-field">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" name="name" type="text"  :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error  :messages="$errors->get('name')" />
                    </div> 
                    <div class="input-field">
                        
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email"  :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error  :messages="$errors->get('email')" />
                            </div >
                            
                        </div>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    
                    <p >
                        {{ __('Your email address is unverified.') }}
                         
                        <button  form="send-verification" >
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p >
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div >
            <div class="butt">

                <button class="btn">{{ __('Save') }}</button>
            </div>

            @if (session('status') === 'profile-updated')
                <p class="msg"
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
