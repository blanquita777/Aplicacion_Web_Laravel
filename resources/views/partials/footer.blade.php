<!-- resources/views/partials/footer.blade.php -->

<!-- Pie de página -->
<footer>
    <!-- Logo y suscripción -->
    <div class="footer-top">
        <div class="footer-logo">
            <!-- Logo de la empresa -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </div>
        
        <!-- Texto de suscripción y opciones de pago -->
        <div class="subscription">
            <p>Suscríbete y obtén un 15% de descuento en tu primera compra</p>
            <button>Suscribirse</button>
            <div class="payment-options">
                <!-- Imágenes de métodos de pago -->
                <img src="{{ asset('images/visa.png') }}" alt="Visa" />
                <img src="{{ asset('images/mastercard.png') }}" alt="Mastercard" />
                <img src="{{ asset('images/bcp.png') }}" alt="BCP" />
                <img src="{{ asset('images/bbva.png') }}" alt="BBVA" />
                <img src="{{ asset('images/yape.png') }}" alt="Yape" />
                <!-- Añade más métodos de pago según sea necesario -->
            </div>
        </div>
    </div>

    <!-- Sección principal del pie de página -->
    <div class="footer-main">
        <!-- Sección de Nosotros -->
        <div class="footer-section">
            <h3>Nosotros</h3>
            <ul>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Garantías</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
                <li><a href="#">Políticas de privacidad</a></li>
                <li><a href="#">Promociones - Términos y Condiciones</a></li>
                <li><a href="#">Términos y condiciones Venta Telefónica</a></li>
                <li><a href="#">Términos y condiciones Delivery</a></li>
                <li><a href="#">Términos y condiciones Ecommerce</a></li>
                <li><a href="#">Preguntas Frecuentes</a></li>
                <li><a href="#">Buena Visión en Carretera</a></li>
                <li><a href="#">Permisos PRSS</a></li>
            </ul>
        </div>

        <!-- Sección de Servicios -->
        <div class="footer-section">
            <h3>Servicios</h3>
            <ul>
                <li><a href="#">Convenios</a></li>
                <li><a href="#">Agenda tu examen visual</a></li>
                <li><a href="#">Cupones</a></li>
                <li><a href="#">Nuestro blog</a></li>
                <li><a href="#">Ventas institucionales</a></li>
                <li><a href="#">Testimonios</a></li>
                <li><a href="#">Reservas de citas</a></li>
                <li><a href="#">Libro de Reclamaciones</a></li>
            </ul>
        </div>

        <!-- Sección de Contacto -->
        <div class="footer-section">
            <h3>Contacto</h3>
            <p>Horario para atención:</p>
            <p>Lunes a Sábado de 10:00 a 19:00</p>
            <p>Consultas Venta Tienda: 0800-14600</p>
            <p>Horario atención venta telefónica: Lunes a Sábado de 11:00 a 19:00</p>
            <h4>Síguenos en:</h4>
            <div class="social-media">
                <!-- Redes sociales -->
                <a href="#"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" /></a>
                <a href="#"><img src="{{ asset('images/instagram.jpg') }}" alt="Instagram" /></a>
                <a href="#"><img src="{{ asset('images/whatsap.png') }}" alt="WhatsApp" /></a>
                <a href="#"><img src="{{ asset('images/tiktok.png') }}" alt="TikTok" /></a>
            </div>
        </div>

        <!-- Sección de Mapa de Ubicación -->
        <div class="footer-section">
            <h3>Ubicación</h3>
            <!-- Inserta un mapa aquí -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245654.43669209152!2d-70.33103360546875!3d-15.838161399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915d696e49817cef%3A0x6e92db1a883705f9!2zQ2VudHJvIMOzcHRpY28gUGVyw7o!5e0!3m2!1ses!2spe!4v1729978473592!5m2!1ses!2spe" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</footer>

<!-- Estilos básicos (puedes personalizarlos en tu archivo CSS) -->
<style>
    .footer-top {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: #f8f9fa;
    }
    .footer-logo img {
        width: 100px; /* Ajusta el tamaño del logo */
    }
    .subscription button {
        padding: 10px;
        font-size: 14px;
    }
    .payment-options img {
        width: 40px;
        margin-right: 10px;
    }
    .footer-main {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        background-color: #ffffff;
    }
    .footer-section h3 {
        font-size: 16px;
        margin-bottom: 10px;
    }
    .footer-section ul {
        list-style-type: none;
        padding: 0;
    }
    .footer-section ul li {
        margin-bottom: 5px;
    }
    .footer-section ul li a {
        text-decoration: none;
        color: #333;
    }
    .social-media a img {
        width: 24px;
        margin-right: 10px;
    }
</style>
