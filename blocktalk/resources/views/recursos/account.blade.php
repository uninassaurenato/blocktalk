@section ("account")
    <div class="account" id="account">
        <span class="material-symbols-rounded" id="account-close" >close</span>
       <div class="account-info">
        {{-- <h3>NOME: {{ Auth::user()->name }}</h3>
        <h3>EMAIL: {{ Auth::user()->email }}</h3> --}}
    </div>
        </form>
        <div class="account-hotbar">
            <span class="material-symbols-rounded">contacts_product</span>
            <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Sair</button>
        </form>
        </div>
    </div>
@endsection