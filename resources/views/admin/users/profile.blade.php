@extends('admin.layouts.admin')

@section('content')




<form action="{{route('perfil')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="container col-12 col-md-10">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />




        <div class="card mt-2">
            <div class="card-body">
                <div class="">
                    <x-label for="name" :value="__('Nombre')" />

                    <x-input id="name" class="form-control" type="text" name="name" :value="auth()->user()->name " required autofocus />
                </div>

                <div class="">
                    <x-label for="email" :value="__('Email')" />

                    <div class="d-flex flex-row align-items-center">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                    <x-input id="email" class="form-control" type="email" name="email" :value="auth()->user()->email" required /> 
                </div>
                  
                </div>
                <div class="card mt-1">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input onchange=" $('#password,#password_confirmation').prop('disabled', ! this.checked );" id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="change_password">
                                        <span class="ml-2 text-sm fs-4">Cambiar password</span>
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input :disabled="true" id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <!-- Confirm Password -->
                                <div class=" mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input :disabled="true" id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-lg btn-primary">GUARDAR</button>

            </div>
        </div>

    </div>


</form>



@endsection