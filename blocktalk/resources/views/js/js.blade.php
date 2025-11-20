@include ("recursos.account")
@section ("js")
    <script>

        // Adicione script aqui! ;-3c olhe o css.blade.php para entender como importar códigos 

        const r = document.querySelector(":root")
        const vw = window.innerWidth *0.1
        const vh = window.innerHeight *0.1

        r.style.setProperty("--fontsize", vh/2.3 + "px")
        r.style.setProperty("--fontspace", vw/100 + "px")
        r.style.setProperty("--linespace", vh/1.8 + "px")
        function getCssValues() {
            let fsz = (window.getComputedStyle(document.body).getPropertyValue("--fontsize"))
            let fsp = (window.getComputedStyle(document.body).getPropertyValue("--fontspace"))
            let ls = (window.getComputedStyle(document.body).getPropertyValue("--linespace"))
            l = [
            fsz.substring(0,(fsz.length)-2),
            fsp.substring(0,(fsp.length)-2),
            ls.substring(0,(ls.length)-2)
            ]
            return l
        }
        function updateMenuUnits() {
            let values = getCssValues()
            document.getElementById("px-font-size").innerHTML = Math.trunc(values[0]) + "px"
            document.getElementById("px-font-space").innerHTML = Math.trunc(values[1]) + "px"
            document.getElementById("px-line-space").innerHTML = Math.trunc(values[2]) + "px"
            
            document.getElementById("font-size").value = values[0]
            document.getElementById("font-space").value = values[1]
            document.getElementById("line-space").value = values[2]
        }
        
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
        updateMenuUnits()

        document.getElementById("menu-opener").addEventListener("click",function () {
            document.getElementById("menu").style.left = "auto";
        })
        document.getElementById("menu-close").addEventListener("click",function () {
            document.getElementById("menu").style.left = "calc(-3*(var(--vw)))";
        })
        document.getElementById("guia-button").addEventListener("click", function () {
            window.location.href = "https://animated-waddle-5gv4r77x7vwwcvx97-8000.app.github.dev/guide"
        })
        document.getElementById("logo").addEventListener("click", function () {
            window.location.href = "https://animated-waddle-5gv4r77x7vwwcvx97-8000.app.github.dev/"
        })
        document.getElementById("conta-button").addEventListener("click", function () {
            document.getElementById("account").style.display = "flex";
        })
        document.getElementById("account-close").addEventListener("click", function (){
            document.getElementById("account").style.display = "none";
        })
        document.querySelectorAll(".model").forEach(function (child) {
            child.addEventListener("click", function () {
                window.location.href = "https://animated-waddle-5gv4r77x7vwwcvx97-8000.app.github.dev/tool "
            })
        })

        // código está bugado v
    
        // const customRanges = document.querySelectorAll(".custom-range")
        // customRanges.forEach(function (el) {
        //    el.addEventListener("input", function () {
        //        if (el.id = "font-size") {
        //            r.style.setProperty("--fontsize", el.value + "px")
        //        }

        //        if (el.id = "font-space") {
        //            r.style.setProperty("--fontspace", el.value + "px")
        //        }

        //        else {
        //            r.style.setProperty("--linespace", el.value + "px")
        //        }
        //    })
        //})

    </script>
@endsection