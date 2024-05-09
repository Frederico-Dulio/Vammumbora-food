<div class="home">
    <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
            <form action="{{ route('client.login') }}" method="POST">
                @csrf
                <h2>Login</h2>

                <div class="input_box">
                    <input type="email" placeholder="exemplo@gmail.com" name="email" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>
                <div class="input_box">
                    <input type="password" placeholder="Inserir a password" name="password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <div class="option_field">
                    <a href="#" >Esqueceu a password?</a>
                </div>

                <button class="button">Login</button>

                <div class="login_signup">Não tem uma conta? <a href="#" id="signup">Cadastar</a></div>
            </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
            <form action="{{ route('admin.register') }}" method="POST">
                <h2>Cadastrar</h2>
                @csrf

                <div class="input_box">
                    <input type="text" placeholder="Inserir o teu nome completo" name="name" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>

                <div class="input_box">
                    <input type="email" placeholder="Inserir o email" name="email" required />
                    <i class="uil uil-envelope-alt email"></i>
                </div>

                <div class="input_box">
                    <input type="password" placeholder="Criar password" name="password" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>
                <div class="input_box">
                    <input type="password" placeholder="Confirmar password" name="cpassword" required />
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw_hide"></i>
                </div>

                <button type="submit" class="button">Cadastar</button>

                <div class="login_signup">Já tem uma conta? <a href="#" id="login">Login</a></div>
            </form>
        </div>
    </div>
</div>
