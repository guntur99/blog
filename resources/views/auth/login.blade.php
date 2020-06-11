@extends('layouts.auth')

@section('content')
<main class="admin-main  bg-pattern">
    <div class="container">
        <div class="row m-h-100 ">
            <div class="col-md-8 col-lg-4 m-auto">
                <div class="card shadow-lg ">
                    <div class="card-body ">
                        <div class=" padding-box-2 ">
                            <div class="text-center p-b-20 pull-up-sm">
                                <div class="avatar avatar-lg avatar-offline">
                                    <img src="{{ asset('atmos/getting started/light/assets/img/users/user-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <h3 class="text-center">Access System</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email Anda</label>

                                    <div class="input-group input-group-flush mb-3">
                                        <input id="email" type="email" class="form-control form-control-prepended @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                               placeholder="yourmail@example.com">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class=" mdi mdi-email "></span>
                                            </div>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label>Password Anda</label>
                                    <div class="input-group input-group-flush mb-3">
                                        <input id="password" type="password" class="form-control form-control-prepended @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                                >
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <span class=" mdi mdi-key "></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn text-uppercase btn-block  btn-primary">
                                        Login
                                    </button>
                                </div>
                                {{-- <p class="small">
                                    You have been logged out of system please enter password to continue
                                </p> --}}
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
