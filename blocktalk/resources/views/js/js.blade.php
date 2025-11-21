@include ("recursos.account")
@section ("js")
    <script>

        // Adicione script aqui! ;-3c olhe o css.blade.php para entender como importar códigos 

        const r = document.querySelector(":root")
        const vw = window.getComputedStyle(document.body).getPropertyValue("--vw")
        const vh = window.getComputedStyle(document.body).getPropertyValue("--vh")

         function updateMenuUnits() {
            document.getElementById("px-font-size").innerHTML = (vw.substring(0,vw.indexOf("px")))/30 + "px"
            document.getElementById("px-font-space").innerHTML = ((vw.substring(0,vw.indexOf("px")))/30)/200 + "px"
            document.getElementById("px-line-space").innerHTML = (vw.substring(0,vw.indexOf("px")))/30 + "px"
            
            document.getElementById("font-size").value = (vw.substring(0,vw.indexOf("px")))/30
            document.getElementById("font-space").value = ((vw.substring(0,vw.indexOf("px")))/30)/200
            document.getElementById("line-space").value = (vw.substring(0,vw.indexOf("px")))/30
        }
        
        updateMenuUnits()

        // ações e eventos v

        document.getElementById("menu-opener").addEventListener("click",function () {
            document.getElementById("menu").style.left = "auto"; // Ao clickar nos 3 pontos, abre o menu
        })
        document.getElementById("menu-close").addEventListener("click",function () {
            document.getElementById("menu").style.left = "calc(-3*(var(--vw)))"; // Ao clickar na seta, fecha o menu
        })
        document.getElementById("guia-button").addEventListener("click", function () {
            window.location.href = "https://animated-waddle-5gv4r77x7vwwcvx97-8000.app.github.dev/guide" // Ao clickar no icone de menu, redireciona pra /Guide
        })
        document.getElementById("logo").addEventListener("click", function () {
            window.location.href = "https://animated-waddle-5gv4r77x7vwwcvx97-8000.app.github.dev/" // Ao clickar no cubo, redireciona para /
        })
        document.getElementById("conta-button").addEventListener("click", function () {
            document.getElementById("account").style.display = "flex"; // Ao clickar no ícone da conta, faz o menu de conta aparecer. Significa que o menu está sempre ali, só inacessivel
        })
        document.getElementById("account-close").addEventListener("click", function (){
            document.getElementById("account").style.display = "none"; // Ao clickar no X contido dentro do menu de conta, apaga esse menu
        })
        document.querySelectorAll(".model").forEach(function (child) {
            child.addEventListener("click", function () { // Variável Child representa o elemento específico selecionado
                window.location.href = "https://animated-waddle-5gv4r77x7vwwcvx97-8000.app.github.dev/tool" // Ao clickar em qualquer objeto na tabela de Modelos, redireciona para /Tool
            })
        })

    
         const customRanges = document.querySelectorAll(".custom-range")
         customRanges.forEach(function (el) {
            el.addEventListener("input", function () {
                console.log(
                    "Fontsize: " + window.getComputedStyle(document.body).getPropertyValue("--fontsize") + "\n",
                    "Fontspace: " + window.getComputedStyle(document.body).getPropertyValue("--fontspace") + "\n",
                    "Linespace: " + window.getComputedStyle(document.body).getPropertyValue("--linespace") + "\n"
                )
                switch(el.id) {
                    case "font-size":
                        r.style.setProperty("--fontsize", el.value + "px")
                        document.getElementById("px-font-size").innerHTML = el.value + "px"
                        break;
                    case "font-space":
                        r.style.setProperty("--fontspace", el.value/10 + "px")
                        document.getElementById("px-font-space").innerHTML = el.value + "px"
                        break;
                    case "line-space":
                        r.style.setProperty("--linespace", el.value + "px")
                        document.getElementById("px-line-space").innerHTML = el.value + "px"
                        break;
                }

            })
        })

    </script>
@endsection