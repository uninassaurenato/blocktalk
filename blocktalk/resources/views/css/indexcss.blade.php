@include ("css.css") 
@yield ("css") 

@section ("index")
    <style>

    .index {
            display: flex;
            flex-flow: column;
            :not(.templates, .templates *) {
                margin: calc(var(--vw)/5);
                font-size: calc(var(--fontsize)*1.4);
            }
            .templates {
                display: flex;
                flex-flow: row wrap;
                justify-content: center;
                margin: auto;
                border: calc(var(--vw)/20) solid var(--cor3);
                width: calc(var(--vw)*9);
                border-radius: 60px;
                background-color: var(--cor2);
                .model {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-flow: row wrap;
                    background-color: var(--cor1);
                    color: var(--cor3);
                    border-radius: 40px;
                    padding: calc(var(--vw)/6);
                    text-align: center;
                    margin: calc(var(--vw)/6);
                    h1 {
                        font-size: calc(var(--fontsize)/1.1);
                        letter-spacing: calc(var(--fontspace)/10);
                    }
                }
            }            
        }

    </style>
@endsection