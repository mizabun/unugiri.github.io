@extends('../layout/' . $layout)

@section('head')
    <title>Register - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        Rubick
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign
                        up your account.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your
                        e-commerce accounts in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign up your
                        account. Manage all your e-commerce accounts in one place</div>
                    <div class="intro-x mt-8">
                        {{-- <form id="register-form"> --}}
                        <form method="POST" action="{{ route('register') }}">
                            <input id="nama" type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Nama" value="">
                            <div id="error-nama" class="login__input-error text-danger mt-2"></div>
                            <input id="gender" type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Gender" value="">
                            <div id="error-gender" class="login__input-error text-danger mt-2"></div>
                            <input id="email" type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Email" value="">
                            <div id="error-email" class="login__input-error text-danger mt-2"></div>
                            <input id="password" type="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password"
                                value="">
                            <div id="error-password" class="login__input-error text-danger mt-2"></div>
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button type="submit" id="btn-sign-up"
                                    class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Sign
                                    Up</button>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button type="submit" id="btn-sign-up"
                            class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Sign
                            Up</button>
                    </div> --}}
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                        By signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and
                            Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
@endsection

{{-- @section('script') --}}
<script>
    (function() {
        async function login() {
            // Reset state
            $('#register-form').find('.login__input').removeClass('border-danger')
            $('#register-form').find('.login__input-error').html('')

            // Post form
            let nama = $('#nama').val()
            let gender = $('#gender').val()
            let email = $('#email').val()
            let password = $('#password').val()

            // Loading state
            $('#btn-sign-up').html(
                '<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>')
            tailwind.svgLoader()
            await helper.delay(1500)

            axios.post(`register`, {
                nama: nama,
                gender: gender,
                email: email,
                password: password
            }).then(res => {
                location.href = 'login'
            }).catch(err => {
                $('#btn-sign-up').html('register')
                if (err.response.data.message != 'Pendaftaran gagal.') {
                    for (const [key, val] of Object.entries(err.response.data.errors)) {
                        $(`#${key}`).addClass('border-danger')
                        $(`#error-${key}`).html(val)
                    }
                } else {
                    $(`#password`).addClass('border-danger')
                    $(`#error-password`).html(err.response.data.message)
                }
            })
        }

        $('#register-form').on('keyup', function(e) {
            if (e.keyCode === 13) {
                regis()
            }
        })

        $('#btn-sign-up').on('click', function() {
            regis()
        })
    })()
</script>
@endsection
