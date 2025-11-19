@section ("menu")
    <div class="menu" id="menu">
        <h1 id="menu-title"> CUSTOMIZAR <span class="material-symbols-rounded" id="menu-close">arrow_back_ios</span></h1>
        <div class="ranges">
            <div class="custom-slot">
                <label for="font-size"> Tamanho do texto: <h1 id="px-font-size"></h1></label>
                <input type="range" name="font-size" id="font-size" class="custom-range" max="30">
            </div>
            <div class="custom-slot">
                <label for="font-space"> Espaçamento do texto: <h1 id="px-font-space"></h1></label>
                <input type="range" name="font-space" id="font-space" class="custom-range">
            </div>
            <div class="custom-slot">
                <label for="line-space"> Espaçamento das linhas: <h1 id="px-line-space"></h1></label>
                <input type="range" name="line-space" id="line-space" class="custom-range"><br> 
            </div>
        </div>
        <div class="toggle">
            <span class="material-symbols-rounded" id="mode-toggle">bedtime</span>            
        </div>

    </div>
@endsection