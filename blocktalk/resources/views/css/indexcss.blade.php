@include ("css.css") 
@yield ("css") 

@section ("index")
    <style>

    .index {
            display: flex;
            flex-flow: column;
            :not(.templates, .templates *) {
                margin: calc(var(--vh)/10);
                margin-top: 0px;
                font-size: calc(var(--fontsize)*1.1);
            }
            .templates {
                display: flex;
                flex-flow: row wrap;
                justify-content: space-between;
                margin: auto;
                border: calc(var(--vw)/90) solid var(--cor3);
                width: calc(var(--vw));
                border-radius: 60px;
                background-color: var(--cor2);
                padding: calc(var(--vw)/60);
                :last-child {
                    margin-left: auto !important ;
                }
                .model {
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-flow: row wrap;
                    background-color: var(--cor1);
                    color: var(--cor3);
                    border-radius: 40px;
                    padding: calc(var(--vw)/40);
                    text-align: center;
                    margin: calc(var(--vw)/80);
                    h1 {
                        font-size: calc(var(--fontsize)/1.2);
                    }
                }
            }            
        }

    </style>
@endsection