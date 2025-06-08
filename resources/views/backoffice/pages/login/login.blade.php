@extends('base.app')
@section('title','homepage')
@section('content')
<div class="login-container">
        <!-- Bagian Kiri (Form) -->
        <div class="left">
            <div class="logo">
            <!-- <img src="{{asset('assets/left-img.svg')}}" alt=""> -->
            </div>
        </div>
        <div class="right">
            
        <form action="{{ route('dashboard') }}" method="get">
            <div class="judul">
                <div class="logo-right">
                    <img src="{{asset('assets/logo-login.svg')}}" alt="">
                </div>
                <h2>Selamat Datang</h2>
                <p>Masukkan email dan kata sandi akun anda</p>
            </div>
            <div class="contentt">
                    <div class="content-login">
                        <h6>Email</h6>
                        <div class="input">
                        <input type="text" class="form-control" id="email" Placeholder="Email">
                        <img class="email" src="{{asset('assets/email.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="content-login">
                        <h6>Kata Sandi</h6>
                        <div class="input password-input">
                            <input type="password" class="form-control" id="password" placeholder="Kata Sandi">
                            <!-- <img src="{{ asset('assets/hidepass.svg') }}" alt="Password Icon" class="password-icon"> -->
                            <button type="button" id="togglePassword" class="toggle-password">
                                <img class="pass" src="{{ asset('assets/showpass.svg') }}" alt="Show Password" id="toggleIcon">
                            </button>
                        </div>
                    </div>


                    <label class="custom-checkbox">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Remember me
                    </label>

                    <button class="btn-login" type="input">Masuk Akun</button>
            </div>
               
            </form>
        </div>
    </div>
    @push('script')
    <script>
document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    const isPassword = passwordInput.type === 'password';
    passwordInput.type = isPassword ? 'text' : 'password';
    
    // Ganti icon sesuai kondisi (opsional)
    toggleIcon.src = isPassword 
        ? '{{ asset("assets/showpass.svg") }}' 
        : '{{ asset("assets/hidepass.svg") }}';
});
</script>

        
    @endpush
@endsection