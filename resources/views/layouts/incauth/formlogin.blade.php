<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>Login</header>
            <form action="{{ route('action-login') }}" method="post">
                @csrf
                <div class="field input-field">
                    <input type="email" placeholder="Email" class="input" name="email">
                </div>

                <div class="field input-field">
                    <input type="password" placeholder="Password" class="password" name="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>

                <div class="form-link">
                    <a href="#" class="forgot-pass">Forgot password?</a>
                </div>

                <div class="field button-field">
                    <button type="submit">Login</button>
                </div>
            </form>

        </div>
    </div>
</section>
