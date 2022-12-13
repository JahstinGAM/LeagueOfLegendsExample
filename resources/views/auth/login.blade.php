@extends('layouts.app')

@section('content')





<div>
    <div class="body-iniciar-sesion">
        <div>
            <div class="grid grid-direction__column">
                <div class="grid grid-direction__column auth-rso-login-page grid-page theme-lol theme__color-light theme__display-page theme__section-signin grid-page-web">
                    <div class="grid grid-direction__row grid-page-web__header">
                        <div class="grid-page-web__logo-container">
                            <div class="grid-page-web__logo-vendor"></div>
                            <svg class="riot-logo grid-page-web__logo--full riot-logo__full riot-logo--white" viewBox="0 0 169 48" aria-labelledby="riot-logo-id-0-title">
                                <title id="riot-logo-id-0-title">Riot Games</title>
                                <g clip-path="url(#riot-logo-id-0-clip)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.7331 0.0958205L0 13.4034L7.15927 40.6528L12.608 39.9836L11.1098 22.8502L12.8989 22.053L15.9884 39.5676L25.3004 38.4242L23.6451 19.5131L25.4167 18.7247L28.8145 37.9936L38.2342 36.8357L36.4218 16.1062L38.2138 15.3091L41.9287 36.3818L51.2407 35.2384V5.73423L28.7331 0.0958205Z M29.408 41.4238L29.8822 44.1063L51.2407 47.6674V38.7413L29.4196 41.4238H29.408Z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71.4415 35.832V39.5065H75.9709C75.9714 40.2518 75.779 40.9845 75.4124 41.6333C75.0291 42.2797 74.4619 42.7973 73.7833 43.12C72.9718 43.4908 72.0859 43.6699 71.1942 43.6437C70.1645 43.6722 69.1503 43.3882 68.2851 42.829C67.4401 42.2424 66.7881 41.4182 66.4116 40.4608C65.9423 39.2636 65.7177 37.9844 65.7513 36.6989C65.7169 35.4234 65.9467 34.1545 66.4262 32.972C66.8182 32.0296 67.475 31.2211 68.3171 30.6445C69.1661 30.0932 70.1618 29.8113 71.1738 29.8357C71.7007 29.8311 72.2256 29.9006 72.7331 30.0422C73.1846 30.1716 73.6106 30.3772 73.9927 30.6503C74.3556 30.9118 74.6688 31.2359 74.9178 31.6075C75.1781 32.005 75.3745 32.4409 75.4996 32.8993H80.5236C80.3921 31.8449 80.0498 30.8278 79.5171 29.9084C78.987 29.0014 78.2913 28.202 77.4662 27.5518C76.6015 26.8758 75.626 26.3551 74.5833 26.0127C73.4504 25.6455 72.2658 25.4628 71.0749 25.4716C69.6814 25.46 68.2986 25.7168 67.0022 26.228C65.7565 26.7241 64.6301 27.4787 63.6975 28.4421C62.7215 29.4601 61.9676 30.6698 61.4836 31.9945C60.9309 33.5274 60.6618 35.1482 60.6894 36.7775C60.6894 39.0934 61.1297 41.0902 62.0102 42.7679C62.8427 44.384 64.1248 45.7247 65.7018 46.6287C67.2997 47.4814 69.0752 47.9476 70.8859 47.99C72.6965 48.0325 74.4919 47.6499 76.128 46.8731C77.5436 46.1548 78.7223 45.0437 79.5229 43.6728C80.3471 42.2782 80.7583 40.6102 80.7564 38.6686V35.829L71.4415 35.832Z M97.1025 47.7052H102.417L95.0487 25.7596H88.3142L80.9338 47.7052H86.2574L87.6916 42.893H95.6684L97.1025 47.7052ZM88.832 39.0643L91.2233 31.0198H92.1251L94.528 39.0643H88.832Z M130.458 47.7052H125.551V31.0198L125.047 31.014L120.09 47.7052H115.185L110.362 31.014L109.737 31.0198V47.7052H104.829V25.7567H113.169L117.382 40.4666H117.891L122.103 25.7567H130.458V47.7052Z M133.996 47.7052V25.7567H149.027V29.8182H138.956V34.6944H147.098V38.7559H138.956V43.6437H149.05V47.7052H133.996Z M163.619 32.1981C163.597 31.8209 163.493 31.4528 163.316 31.1194C163.138 30.7859 162.89 30.4949 162.589 30.2663C161.981 29.8037 161.135 29.5738 160.061 29.5738C159.441 29.5531 158.823 29.6519 158.24 29.8648C157.8 30.0251 157.414 30.3053 157.126 30.6736C156.876 31.0101 156.74 31.418 156.739 31.8373C156.725 32.1715 156.805 32.5029 156.969 32.7945C157.141 33.0844 157.381 33.3288 157.667 33.5073C158.003 33.725 158.364 33.9 158.743 34.0281C159.185 34.1821 159.636 34.3094 160.093 34.4092L162.022 34.8573C162.967 35.0584 163.889 35.3587 164.771 35.7534C165.536 36.0946 166.243 36.5541 166.865 37.115C167.435 37.6341 167.889 38.2676 168.198 38.9741C168.521 39.7365 168.68 40.5581 168.666 41.386C168.699 42.6391 168.339 43.871 167.636 44.9093C166.894 45.9403 165.868 46.7337 164.684 47.1931C163.207 47.7634 161.632 48.0363 160.049 47.9961C158.443 48.0305 156.846 47.7528 155.345 47.1786C154.082 46.6877 152.995 45.8281 152.227 44.7114C151.484 43.6136 151.096 42.2442 151.063 40.6033H155.843C155.849 41.237 156.049 41.8537 156.415 42.3706C156.782 42.8875 157.298 43.2799 157.894 43.4953C158.566 43.7508 159.281 43.8752 160 43.8619C160.66 43.8763 161.317 43.7688 161.937 43.5448C162.428 43.3716 162.863 43.0702 163.197 42.6719C163.492 42.3014 163.653 41.8421 163.654 41.3685C163.658 40.9439 163.512 40.5315 163.241 40.2048C162.908 39.8422 162.496 39.5623 162.036 39.3872C161.387 39.1227 160.717 38.9144 160.032 38.7646L157.684 38.1973C155.813 37.7512 154.336 37.0471 153.254 36.0851C152.172 35.123 151.634 33.8196 151.642 32.1748C151.608 30.9128 151.988 29.6742 152.724 28.6486C153.495 27.6057 154.533 26.7905 155.729 26.2891C157.109 25.7042 158.595 25.4157 160.093 25.4425C161.584 25.4091 163.064 25.6979 164.433 26.2891C165.596 26.795 166.594 27.6152 167.316 28.6574C168.01 29.7015 168.375 30.9298 168.364 32.1835L163.619 32.1981Z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M71.7324 14.5963L74.2807 22.248H79.7236L76.8902 14.0056H73.0414L72.8116 13.2958C73.5447 13.1532 74.7985 12.9321 75.9098 12.1756C76.6882 11.6461 77.3264 10.9355 77.7698 10.1049C78.2132 9.27437 78.4484 8.34862 78.4553 7.40714C78.4886 6.10668 78.1603 4.8225 77.5069 3.69765C76.8683 2.60844 75.9206 1.73351 74.784 1.18393C73.4512 0.566698 71.9932 0.267888 70.5251 0.311113H61.6727V22.248H66.6356V14.5963H71.7324ZM71.6393 10.0547C70.9637 10.3031 70.2467 10.4197 69.5273 10.398H66.6356V4.32899H69.5185C70.2385 4.30826 70.9555 4.4309 71.6276 4.68976C72.1592 4.90119 72.6082 5.27878 72.9076 5.76623C73.213 6.25764 73.3649 6.82894 73.344 7.40714C73.3677 7.9766 73.2175 8.53979 72.9134 9.02185C72.6125 9.4957 72.1651 9.85835 71.6393 10.0547Z M87.1156 0.299478H82.1556V22.248H87.1156V0.299478Z M110.671 11.2737C110.671 13.6827 110.214 15.7193 109.3 17.3835C108.452 18.9901 107.161 20.3198 105.58 21.2151C103.954 22.0824 102.14 22.536 100.298 22.536C98.456 22.536 96.6421 22.0824 95.0167 21.2151C93.4353 20.3164 92.1442 18.9838 91.296 17.3747C90.3825 15.695 89.9258 13.6585 89.9258 11.265C89.9258 8.87154 90.3825 6.8301 91.296 5.14071C92.1427 3.53888 93.4296 2.21248 95.0051 1.31777C96.6311 0.452518 98.4447 0 100.287 0C102.128 0 103.942 0.452518 105.568 1.31777C107.149 2.21307 108.44 3.5428 109.289 5.14944C110.202 6.82525 110.659 8.86669 110.659 11.2737H110.671ZM105.612 11.2737C105.649 9.98237 105.429 8.69648 104.963 7.49151C104.594 6.54972 103.953 5.73933 103.121 5.16399C102.271 4.64084 101.291 4.36387 100.292 4.36387C99.2935 4.36387 98.3142 4.64084 97.4633 5.16399C96.6306 5.73977 95.9877 6.54984 95.616 7.49151C94.7411 9.93708 94.7411 12.6104 95.616 15.0559C95.9865 15.9983 96.6297 16.8087 97.4633 17.3835C98.3142 17.9066 99.2935 18.1836 100.292 18.1836C101.291 18.1836 102.271 17.9066 103.121 17.3835C103.954 16.8092 104.596 15.9984 104.963 15.0559C105.428 13.8509 105.649 12.5651 105.612 11.2737Z M111.139 0.299481V4.37264H119.663L119.895 5.08543C119.174 5.22508 117.955 5.44038 116.861 6.16191V22.2538H121.769V4.361H127.476V0.287841L111.139 0.299481Z"></path>
                                </g>
                                <defs>
                                    <clipPath id="riot-logo-id-0-clip">
                                        <path d="M0 0H168.6667V48H0V0Z"></path>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="grid grid-direction__row grid-page-web__content">
                        <div class="grid grid-direction__column grid-page-web__wrapper">
                            <div class="grid grid-direction__column grid-size-17 grid-panel-web grid-panel grid-panel-web-has-links">
                                <div class="grid-panel-web__header">
                                    <h5 class="heading text__web-h5 grid-panel-web__title">Iniciar sesión</h5>
                                </div>

                                    <form method="POST" action="{{ route('login') }}" class="grid grid-align-center grid-justify-space-between grid-fill grid-direction__column grid-panel-web__content grid-panel__content">
                                        @csrf
                                        <div class="grid grid-fill grid-direction__column text__web-body2">
                                            <div class="grid grid-align-center grid-justify-space-between grid-fill grid-direction__column">
                                                <div class="grid grid-fill grid-direction__column">
                                                    <div class="field field--non-empty field--animate">
                                                        <div class="field__input field__input--animate">

                                                            <input id="email" name="email" spellcheck="false"  type="email" autocapitalize="off" class="field__form-input text__ignore-subset form-control @error('email') is-invalid @enderror" type="text" required autocomplete="email" value="{{ old('email') }}" autofocus>
                                                            @error('usuario')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror


                                                            <span class="field__placeholder">Nombre de usuario</span>
                                                        </div>
                                                    </div>
                                                    <div class="field password-field field--non-empty field--animate" style="animation-delay: 0.1s;">
                                                        <div class="field__input field__input--animate" style="animation-delay: 0.1s;">
                                                            <input id="password" name="password" autocapitalize="off" class="field__form-input text__ignore-subset" type="password" autocomplete="off" >
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <label for="password" class="field__label">{{ __('Contraseña') }}</label>
                                                            <span class="field__placeholder">Contraseña</span>
                                                        </div>
                                                        <button type="button" tabindex="-1" class="password-field__password-visibility--hide password-field__password-visibility" style="animation-delay: 0.1s;"></button>
                                                    </div>
                                                    <div class="grid grid-justify-space-between grid-direction__row grid-fill signin-social-buttons grid-button-group-compact">
                                                        <button type="button" class="login-button login-button__facebook"  title="facebook">facebook</button>
                                                        <button type="button" class="login-button login-button__google"  title="google">google</button>
                                                        <button type="button" class="login-button login-button__apple"  title="apple">apple</button>
                                                    </div><div class="grid grid-justify-space-between grid-direction__row">
                                                        <div class="grid grid-justify-center grid-direction__column"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button> --}}
                                        <button type="submit" class="mobile-button mobile-button__submit">
                                            <a href="{{url('/')}}">{{ __() }}</a>
                                        </button>


                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{url('password/reset')}}">
                                                {{ __('¿No puedes iniciar sesión?') }}
                                            </a>
                                        @endif
                                        <div class="grid grid-align-center grid-direction__column grid-panel__links grid-panel-web__links text__web-link" data-testid="panel-links">
                                            <a href="#" >¿No puedes iniciar sesión?</a>
                                            <a href="#" >Crear cuenta</a>
                                        </div>
                                    </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
