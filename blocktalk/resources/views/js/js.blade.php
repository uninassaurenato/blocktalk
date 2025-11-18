@section ("js")
    <script>

        // Adicione script aqui! ;-3c olhe o css.blade.php para entender como importar códigos 

        const r = document.querySelector(":root")

        function updateViewportUnits() {
            const vw = window.innerWidth *0.1
            const vh = window.innerHeight *0.1
            if (vw < vh) {
                r.style.setProperty("--vw", vh + "px")
                r.style.setProperty("--vh", vw + "px")
            } else {
                r.style.setProperty("--vw", vw + "px")
                r.style.setProperty("--vh", vh + "px")                
            }

        }

        updateViewportUnits()

    </script>
@endsection