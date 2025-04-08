@extends('layouts.base')

@section('main')
<style>
   .branded-bg {
			background-image:url('{{ asset('assets/media/images/2600x1600/bg-2.png') }}');
		}
		.dark .branded-bg {
			background-image: url('{{ asset('assets/media/images/2600x1600/bg-2-dark.png') }}');
		}
  </style>
  <div class="grid lg:grid-cols-2 grow">
   <div class="flex justify-center items-center p-8 lg:p-10 order-2 lg:order-1">
    <div class="card max-w-[370px] w-full">
     <form action="#" class="card-body flex flex-col gap-5 p-10" id="sign_in_form" method="get">
      <div class="text-center mb-2.5">
       <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
        Sign in
       </h3>
       <div class="flex items-center justify-center font-medium">
        <span class="text-2sm text-gray-700 me-1.5">
         Need an account?
        </span>
        <a class="text-2sm link" href="{{ url('demos/authentication/branded/sign-up.html') }}">
         Sign up
        </a>
       </div>
      </div>
      <div class="grid grid-cols-2 gap-2.5">
       <a class="btn btn-light btn-sm justify-center" href="#">
        <img alt="" class="size-3.5 shrink-0" src="{{ asset('assets/media/brand-logos/google.svg') }}"/>
        Use Google
       </a>
       <a class="btn btn-light btn-sm justify-center" href="#">
        <img alt="" class="size-3.5 shrink-0 dark:hidden" src="{{ asset('assets/media/brand-logos/apple-black.svg') }}"/>
        <img alt="" class="size-3.5 shrink-0 light:hidden" src="{{ asset('assets/media/brand-logos/apple-white.svg') }}"/>
        Use Apple
       </a>
      </div>
      <div class="flex items-center gap-2">
       <span class="border-t border-gray-200 w-full"></span>
       <span class="text-2xs text-gray-500 font-medium uppercase">Or</span>
       <span class="border-t border-gray-200 w-full"></span>
      </div>
      <div class="flex flex-col gap-1">
       <label class="form-label font-normal text-gray-900">Email</label>
       <input class="input" placeholder="email@email.com" type="text" value=""/>
      </div>
      <div class="flex flex-col gap-1">
       <div class="flex items-center justify-between gap-1">
        <label class="form-label font-normal text-gray-900">Password</label>
        <a class="text-2sm link shrink-0" href="{{ url('demos/authentication/branded/reset-password/enter-email.html') }}">
         Forgot Password?
        </a>
       </div>
       <div class="input" data-toggle-password="true">
        <input name="user_password" placeholder="Enter Password" type="password" value=""/>
        <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
         <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden"></i>
         <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block"></i>
        </button>
       </div>
      </div>
      <label class="checkbox-group">
       <input class="checkbox checkbox-sm" name="check" type="checkbox" value="1"/>
       <span class="checkbox-label">Remember me</span>
      </label>
      <button class="btn btn-primary flex justify-center grow">Sign In</button>
     </form>
    </div>
   </div>
   <div class="lg:rounded-xl lg:border lg:border-gray-200 lg:m-5 order-1 lg:order-2 bg-top xxl:bg-center xl:bg-cover bg-no-repeat branded-bg">
    <div class="flex flex-col p-8 lg:p-16 gap-4">
     <a href="{{ url('demos/html/demo1.html') }}">
      <img class="h-[28px] max-w-none" src="{{ asset('assets/media/app/mini-logo.svg') }}"/>
     </a>
     <div class="flex flex-col gap-3">
      <h3 class="text-2xl font-semibold text-gray-900">
      API Builder
      </h3>
      <div class="text-base font-medium text-gray-600">
       Create Powerful APIs in Minutes
       <br/>
       Simplifying the
       <span class="text-gray-900 font-semibold">
       API Development 
       </span>
       Process for 
       <br/>
       Developers of All Skill Levels. 
       <span class="text-gray-900 font-semibold">
       No Code Experience Needed!
       </span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- End of Page -->
@endsection