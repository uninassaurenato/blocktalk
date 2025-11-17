@include ("recursos.menu")
@include ("recursos.head")
@include ("css.css")
@yield("css")
@section ("header")
    @yield("head")
    <div class="header">
        <div class="menu-icon">
            <span class="material-symbols-rounded" id="menu-opener">
                more_vert
            </span>        
            <span class="material-symbols-rounded" id="logo">
                deployed_code
            </span>                
        </div>
        <h1>BLOCKTALK</h1>
        <div class="header-buttons">
            <div class="button" id="guia-button">
                <span class="material-symbols-rounded">
                    book
                </span>
                <h1>GUIA</h1>
            </div>
            <div class="button" id="conta-button">
                <span class="material-symbols-rounded">
                    contacts_product
                </span>
                <h1>CONTA</h1>
            </div>
        </div>
        @yield("menu")
    </div>
@endsection
