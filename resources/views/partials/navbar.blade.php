<header>
    <!-- Logo y barra de búsqueda -->
    <div class="top-bar">
        <div class="logo">
            <!-- Logo de la tienda -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
        </div>
        
        <!-- Barra de búsqueda en el centro -->
        <div class="search-bar">
            <form action="#" method="GET">
                <input type="text" placeholder="Buscar en toda la tienda..." name="search" />
                <button type="submit">🔍</button> <!-- Botón de búsqueda -->
            </form>
        </div>

        <!-- Opciones de usuario en la esquina superior derecha -->
        <div class="user-options">
            <a href="/account">Mi Cuenta</a>
            <a href="/cart">Carrito</a>
        </div>
    </div>

    <!-- Menú de navegación principal debajo de la barra superior -->
    <nav class="main-navigation">
        <ul>
            <li><a href="#">SERVICIOS</a></li>
            <li class="dropdown-parent">
                <a href="#">Lentes de Sol</a>
                <!-- Menú desplegable para Lentes de Sol con Categorías y Marcas -->
                <div class="dropdown">
                    <div class="dropdown-section">
                        <h4>Categorías</h4>
                        <ul>
                            <li><a href="#">Mujer</a></li>
                            <li><a href="#">Hombre</a></li>
                            <li><a href="#">Niño</a></li>
                            <li><a href="#">Polarizado</a></li>
                            <li><a href="#" class="view-all">Material Alternativo</a></li>
                        </ul>
                    </div>

                    <div class="dropdown-section">
                        <h4>Marcas</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('images/Ray-ban.png') }}" alt="Ray-Ban" class="brand-icon"> Ray-Ban
                            </li>
                            <li>
                                <img src="{{ asset('images/Oakley.png') }}" alt="Oakley" class="brand-icon"> Oakley
                            </li>
                            <li>
                                <img src="{{ asset('images/Vogue-Eyeward.png') }}" alt="Vogue Eyewear" class="brand-icon"> Vogue Eyewear
                            </li>
                            <li>
                                <img src="{{ asset('images/Arnette.png') }}" alt="Arnette" class="brand-icon"> Arnette
                            </li>
                            <li>
                                <img src="{{ asset('images/Emporio-Armani.png') }}" alt="Emporio Armani" class="brand-icon"> Emporio Armani
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            
            <li class="dropdown-parent">
                <a href="#">Lentes Oftalmológicos</a>
                <!-- Menú desplegable para Lentes Oftalmológicos -->
                <div class="dropdown">
                    <div class="dropdown-section">
                        <h4>Categorías</h4>
                        <ul>
                            <li><a href="#">Mujer</a></li>
                            <li><a href="#">Hombre</a></li>
                            <li><a href="#">Niño</a></li>
                            <li><a href="#">Polarizado</a></li>
                            <li><a href="#" class="view-all">Material Alternativo</a></li>
                        </ul>
                    </div>

                    <div class="dropdown-section">
                        <h4>Marcas</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('images/Ray-ban.png') }}" alt="Ray-Ban" class="brand-icon"> Ray-Ban
                            </li>
                            <li>
                                <img src="{{ asset('images/Oakley.png') }}" alt="Oakley" class="brand-icon"> Oakley
                            </li>
                            <li>
                                <img src="{{ asset('images/Vogue-Eyeward.png') }}" alt="Vogue Eyewear" class="brand-icon"> Vogue Eyewear
                            </li>
                            <li>
                                <img src="{{ asset('images/Arnette.png') }}" alt="Arnette" class="brand-icon"> Arnette
                            </li>
                            <li>
                                <img src="{{ asset('images/Emporio-Armani.png') }}" alt="Emporio Armani" class="brand-icon"> Emporio Armani
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            
            <li class="dropdown-parent">
                <a href="#">Lentes de Contacto</a>
                <!-- Menú desplegable para Lentes de Contacto -->
                <div class="dropdown">
                    <div class="dropdown-section">
                        <h4>Correcion visual</h4>
                        <ul>
                            <li><a href="#">Miopia Hipermetropia</a></li>
                            <li><a href="#">Presbicia</a></li>
                            <li><a href="#">Asignatismo</a></li>
                            <li><a href="#">Cosmeticos</a></li>
                        </ul>
                    </div>

                    <div class="dropdown-section">
                        <h4>Tiempo de Uso</h4>
                        <ul>
                            <li><a href="#">diario</a></li>
                            <li><a href="#">Quincenal</a></li>
                            <li><a href="#">Mensual</a></li>                           
                        </ul>
                    </div>

                    <div class="dropdown-section">
                        <h4>Marcas</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('images/Ray-ban.png') }}" alt="Ray-Ban" class="brand-icon"> Ray-Ban
                            </li>
                            <li>
                                <img src="{{ asset('images/Oakley.png') }}" alt="Oakley" class="brand-icon"> Oakley
                            </li>
                            <li>
                                <img src="{{ asset('images/Vogue-Eyeward.png') }}" alt="Vogue Eyewear" class="brand-icon"> Vogue Eyewear
                            </li>
                            <li>
                                <img src="{{ asset('images/Arnette.png') }}" alt="Arnette" class="brand-icon"> Arnette
                            </li>
                            <li>
                                <img src="{{ asset('images/Emporio-Armani.png') }}" alt="Emporio Armani" class="brand-icon"> Emporio Armani
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li><a href="#">Tecnologías</a></li>
            <li><a href="#">Salud Visual</a></li>
            <li><a href="#">Venta Telefónica</a></li>
            <li><a href="#">Revisión Visual</a></li>
        </ul>
    </nav>
</header>
