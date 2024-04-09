<br>
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a target="_blank" href="https://www.facebook.com/luna.yave"
                        class="nav-link px-2 text-white"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li class="nav-item"><a target="_blank"
                        href="https://instagram.com/luna.yave?igshid=MzRlODBiNWFlZA=="
                        class="nav-link px-2 text-white"><ion-icon name="logo-instagram"></ion-icon></a></li>
                <form method="POST" action="{{ route('wathsapp') }}">
                    @csrf
                    <!-- Otros campos del formulario -->

                    <button class="btn nav-item text-white" type="submit"> <ion-icon
                            name="logo-whatsapp"></ion-icon> </button>
                </form>
            </ul>
            <p class="text-center text-white">© <?= date('Y') ?> Alma Esencial, Todos los derechos reservados.</p>
        </footer>
    </div>
</main>

<script src={{ asset('src/js/jquery-3.7.0.min.js') }}></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src={{ asset('src/js/bootstrap.min.js') }}></script>
<script src={{ asset('src/aos/dist/aos.js') }}></script>

<script>
    AOS.init();
</script>
</body>
</html>
