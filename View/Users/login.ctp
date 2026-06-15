<!--?php $this->layout = 'defaultmenu'?-->
<?php $this->layout = 'default'; ?>
<?php
echo $this->Form->create("User");
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }
</style>

<body class="bg-gray-50 min-h-screen">

    <!-- Main Content -->
    <main class="max-w-md mx-auto px-4 py-28 sm:py-12 md:py-20">
        <div class="bg-white rounded-lg shadow-lg p-6 sm:p-8">
            <!-- Title -->
            <div class="text-center mb-8">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Iniciar Sesión</h1>
                <p class="text-gray-600">Ingrese sus credenciales para acceder</p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="space-y-6">
                <!-- Usuario Field -->
                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                        Usuario
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="username"
                            name="data[User][username]"
                            required
                            class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-colors"
                            placeholder="Ingrese su usuario" />
                    </div>
                </div>

                <!-- Contraseña Field -->
                <div class="my-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                        Contraseña
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <input
                            type="password"
                            id="password"
                            name="data[User][password]"
                            required
                            class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-colors"
                            placeholder="Ingrese su contraseña" />
                        <button
                            type="button"
                            onclick="togglePassword()"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg id="eye-icon" class="h-5 w-5 text-gray-400 hover:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex justify-center m-4">
                    <div
                        class="g-recaptcha"
                        data-sitekey="6LeoNUopAAAAAPxpAF0B_T4q7f0-IDfueVJluDda"
                        data-callback="captchaOk"
                        data-expired-callback="captchaExpired">
                    </div>
                </div>

                <!-- Submit Button -->
                <button
                    onfocus="verCod()"
                    type="submit"
                    class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                    Ingresar
                </button>
            </form>
        </div>

        <!-- Additional Info -->
        <div class="mt-6 text-center text-sm text-gray-600">
            <p>Sistema protegido por reCAPTCHA</p>
            <p class="mt-1">
                <a href="#" class="text-teal-600 hover:text-teal-700">Términos de servicio</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-teal-600 hover:text-teal-700">Política de privacidad</a>
            </p>
        </div>

        <div class="mobile-bg-pattern mt-8 p-6 rounded-lg ">
            <div class="flex justify-center gap-3">
                <div class="w-20 h-2 bg-yellow-400 rounded-full"></div>
                <div class="w-20 h-2 bg-blue-500 rounded-full"></div>
                <div class="w-20 h-2 bg-red-500 rounded-full"></div>
            </div>
            <p class="text-center text-sm text-gray-600 mt-4 font-medium">
                República de Colombia
            </p>

            <!-- Footer Logos -->
            <div class="absolute bottom-6 left-6 right-6 flex justify-between">
                <img class="w-[121px] h-[68px] object-contain" alt="WhatsApp logo"
                    src="<?php echo $this->webroot; ?>/img/aps_v2025/secretaria_salud.png" />
                <img class="w-[98px] h-[68px] object-contain" alt="Agsolutic logo"
                    src="<?php echo $this->webroot; ?>/img/aps_v2025/agsolutic.png" />
                <img class="w-[98px] h-[68px] object-contain" alt="Ciudad Bienestar logo"
                    src="<?php echo $this->webroot; ?>/img/aps_v2025/cb.png" />
            </div>
        </div>
    </main>

    <script>
        function captchaOk() {
            const btn = document.getElementById('btnLogin');
            btn.disabled = false;
            btn.classList.remove('bg-gray-400', 'cursor-not-allowed');
            btn.classList.add('bg-teal-600', 'hover:bg-teal-700');
        }

        function captchaExpired() {
            const btn = document.getElementById('btnLogin');
            btn.disabled = true;
            btn.classList.remove('bg-teal-600', 'hover:bg-teal-700');
            btn.classList.add('bg-gray-400', 'cursor-not-allowed');
        }

        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
        `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        `;
            }
        }

        // Handle form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Check if reCAPTCHA is completed
            const recaptchaResponse = grecaptcha.getResponse();

            if (recaptchaResponse.length === 0) {
                alert('Por favor complete el CAPTCHA');
                return;
            }

            // Get form values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Here you would normally send the data to your server
            console.log('Login attempt:', {
                username,
                password,
                recaptchaResponse
            });
            alert('Formulario enviado correctamente');
        });
        captcha();
    </script>

</body>