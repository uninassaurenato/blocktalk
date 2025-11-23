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
                @foreach ($paineis as $p)
                    <a href="{{ route('painel.show', $p->id) }}">
                        <h3>{{ $p->nome }}</h3>
                    </a>    
                @endforeach
            </div>
            
            <div class="scroll-campo">
                @if (count($campos) == 0)
                    <p>selecione um painel</p>
                @else
                    @foreach ($campos as $c)
                        <h3>{{ $c->nome }}</h3>
                    @endforeach
                @endif
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