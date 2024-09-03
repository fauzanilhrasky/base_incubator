<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <title>Sign Up App</title>
</head>

<body>
  <section class="signup-user">
    <div class="right">
      <img src="{{ asset('images/incubator.png') }}" class="logo" alt="">
      <h1 class="header-third">
        Get Ready for the Founder's Journey!
      </h1>
      <p class="subheader">
        First-time Founder? Or is this your second time? No problem, <br>we're here to help. Make sure you fill out the <br> form and choose the incubation method you prefer. <br>
        <br>The next wave will be held in October 2024 - January 2025 <br> (For Mentored Incubation) Self-incubation can be done anytime
      </p>
      <img src="{{ asset('images/signup.png') }}" alt="">
      <p class="subheader">
        Have you successfully created an account?
      </p>
      <a href="{{ route('login') }}" class="btn btn-master btn-primary">
        Sign In
      </a>
    </div>

    <div class="left">
      <h1 class="header-third">
        SIGN UP
      </h1>

      <h2 class="header-second">
        CREATE AN ACCOUNT
      </h2>

      <p class="subheader">
        Come on, fill in your account details <br> completely immediately and accurately
      </p>

      
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <!-- Full Name -->
          <div class="form-floating mb-3">
            
            <input id="name" class="form-control" type="text" name="name" :value="old('name')" placeholder="fullname" required autofocus autocomplete="name" />
            <label for="name">Full Name</label>
            <error :messages="$errors->get('name')" class="mt-2" />
            
          </div>

          <!-- Username -->
          <div class="form-floating mb-3">
            <x-text-input id="username" class="form-control" type="text" name="username" :value="old('username')" placeholder="username" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
            <label for="username">Username</label>
          </div>

          <!-- Email Address -->
          <div class="form-floating mb-3">
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <label for="email">Email address</label>
          </div>

          <!-- Phone Number -->
          <div class="form-floating mb-3">
            
            <x-text-input id="phone" class="form-control" type="tel" name="phone" :value="old('phone')" placeholder="Phone Number" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            <label for="phone">Phone Number</label>
          </div>

          <!-- City -->
          <div class="form-floating mb-3">
          
            <x-text-input id="city" class="form-control" type="text" name="city" :value="old('city')" placeholder="City" required autofocus autocomplete="city" />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
            <label for="city">City</label>
          </div>

          <!-- Country nationality -->
       <!-- Kolom Country Nationality -->
<div class="form-floating mb-3">
  <select id="country" name="country" class="form-select" required>
      <option value="">{{ __('Select a country') }}</option>
      @foreach($countries as $country)
          <option value="{{ $country->code }}" {{ old('country') == $country->code ? 'selected' : '' }}>
              {{ $country->name }}
          </option>
      @endforeach
  </select>
  <label for="country">Country</label>
  <x-input-error :messages="$errors->get('country')" class="mt-2" />
</div>

          

          <!-- Password -->
          <div class="form-floating mb-3">
            
            <x-text-input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <label for="password">Password</label>
          </div>

          <!-- Confirm Password -->
          <div class="form-floating mb-3">
           
            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <label for="password_confirmation">Confirm Password</label>
          </div>

          <!-- Incubation Method -->
         <!-- <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="incubation_method" id="selfPaced" value="self_paced">
            <label class="form-check-label" for="selfPaced">Self-Paced</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="incubation_method" id="guided" value="guided">
            <label class="form-check-label" for="guided">Guided</label>
          </div>-->

          <!-- Submit Button -->
          <div class="flex items-center justify-end mt-4">

            <p>
                <x-primary-button class="btn btn-border btn-primary">
                    Register
                  </x-primary-button>
            </p>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                Already registered?
              </a>
            
          </div>
        </form>
   
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHe" crossorigin="anonymous"></script>
</body>

</html>
