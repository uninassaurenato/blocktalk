@extends ("layout.toollay")
@include ("recursos.header")
@include ("css.toolcss")

@section ("comment")
    <h1 id="comment"> Modelo de [nome do campo] </h1>
@endsection

@section ("ferramenta")
    <center><p>[descrição]</p></center>
    <div class="tool">
        <div class="container-painel">
            <h1> CAMPOS </h1>
            <div class="scroll-painel">
                <h3>PAINEL 1</h3>
                <h3>PAINEL 2</h3>
                <h3>PAINEL 3</h3>
                <h3>PAINEL 4</h3>
                <h3>PAINEL 5</h3>
                <h3>PAINEL 6</h3>
            </div>
            <div class="scroll-campo">
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
                <div class="campo">CAMPO 1</div>
            </div>
        </div>
        <div class="container-tool">
            <div class="tool-inner">
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
                <div class="campo"><h1>CAMPO 1</h1></div>
            </div>
            <div class="tools">
                <button class="enviar">Enviar</button>
            </div>
        </div>
    </div>
@endsection