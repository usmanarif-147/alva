@component('mail::message')
  # Thanks for signing up, {{ $user->name }}!

  Your account is ready to use. Testing this mail function.

  @component('mail::button', ['url' => url('/login')])
    Visit your account now!
  @endcomponent

  Thanks,<br>
  Management, {{ config('app.name') }} TESTINGGGGGG
@endcomponent
