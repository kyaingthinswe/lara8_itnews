@extends('master')

@section('content')


<div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-12 col-lg-4">
            <div class="">
                <!--                <img src="images/logos/logo.PNG" class="d-block w-50 mx-auto" alt="">-->

                <div class="sign-in-form ">
                    <h3 class="fw-bold text-center">Sign Up</h3>
                    <p class="text-center">
                        Already have an account?
                        <a href="{{route('login')}}">Sign in here</a>
                    </p>

                    <a href="#" class="btn  rounded btn-outline-dark w-100">
                        Sign in with Google
                    </a>

                    <hr class="my-4">

                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fas fa-user"></i>
                                Full Name
                            </label>
                            <input type="text" class="form-control  rounded" name="name">
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fas fa-envelope"></i>
                                Email
                            </label>
                            <input type="email" class="form-control  rounded" name="email">
                            @error('email')
                            <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fas fa-lock"></i>
                                Password
                            </label>
                            <input type="password" class="form-control  rounded" name="password">
                            @error('password')
                            <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                <i class="fas fa-lock"></i>
                                Confirm Password
                            </label>
                            <input type="password" class="form-control  rounded" name="password_confirmation">
                            @error('password_confirmation')
                            <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I accept the Term and Condition
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary  rounded w-100">Sign Up</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
