@include ("css.css")
@yield ("css.css")
 
@section ("tool")
    <style>

        .tool{
            display: flex;
            align-items: center;
            justify-content: space-between;
            h1 {
                margin-bottom: calc(var(--vh)/15);
            }
            .container-painel {
                display: flex;
                flex-flow: column wrap;
                width: calc(var(--vw)/2);
                align-items: center;
                justify-content: center;
                .scroll-painel {
                    display: flex;
                    flex-flow: row nowrap;
                    overflow-x: scroll;
                    width: inherit;
                    border: calc(var(--vw)/120) solid var(--cor3);
                    border-bottom: none;
                    border-left: none;
                    * {
                        font-size: calc(var(--fontsize)/2);
                        white-space: nowrap;
                        padding: calc(var(--vw)/30);
                        padding-bottom: calc(var(--vw)/60);
                        padding-top: calc(var(--vw)/60);

                    }
                    *:hover {
                        font-size: calc(var(--fontsize)/1.7);
                    }                    
                }
            }
                .scroll-campo {
                    display: flex;
                    flex-flow: row wrap;
                    height: calc(var(--vh)/2);
                    width: 100%;
                    overflow-y: scroll;
                    border: calc(var(--vw)/120) solid var(--cor3);
                    border-left: none;
                    * {
                        height: fit-content;
                        text-align: center;
                        font-size: calc(var(--fontsize)/2);
                        margin: calc(var(--vw)/40);
                        padding: calc(var(--vw)/70);
                        border: calc(var(--vw)/200) solid var(--cor3);
                        border-radius: 100px;
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                }
            .container-tool {
                margin-right: calc(var(--vw)/20);
                margin-top: calc(var(--vw)/20);
                border: calc(var(--vw)/120) solid var(--cor3);
                border-radius: 20px;
                background-color: var(--cor2); 
                padding: calc(var(--vw)/40);
                .tool-inner {
                    display: flex;
                    flex-flow: row wrap;
                    background-color: var(--cor1);
                    border-radius: 10px;
                    width: calc(var(--vw)/1.5);
                    height: calc(var(--vh)/2);
                    overflow-y: scroll;
                    justify-content: space-between;
                    align-content: flex-start;
                    align-items: flex-start;
                    .campo {
                        height: fit-content;
                        cursor: pointer;
                        * {
                            margin: calc(var(--vw)/100);
                            border: calc(var(--vw)/200) solid var(--cor3);
                            border-radius: 50px;
                            padding: calc(var(--vw)/50);
                            padding-bottom: 0px;
                            padding-top: 0px;
                            font-size: calc(var(--fontsize)/2);                            
                        }
                    }
                }
                .tools {
                    display: flex;
                    flex-flow: row-reverse;
                    justify-content: space-between;
                    margin-top: calc(var(--vh)/25);
                    .enviar {
                        cursor: pointer;
                        letter-spacing: calc(var(--fontspace)/2);
                        background-color: var(--cor3);
                        border: none;
                        color: var(--cor2);
                        padding: calc(var(--vw)/35);
                        padding-bottom: 0px;
                        padding-top: 0px;
                        border-radius: 15px;
                        font-size: calc(var(--fontsize)/1.5)
                    }
                }
            }
        }
        
    </style>
@endsection