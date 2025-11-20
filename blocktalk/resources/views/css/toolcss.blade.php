@include ("css.css")
@yield ("css.css")
 
@section ("tool")
    <style>

        .tool{
            display: flex;
            align-items: center;
            justify-content: space-between;
            h1 {
                margin-bottom: calc(var(--vh)/3);
            }
            .container-painel {
                display: flex;
                flex-flow: column wrap;
                width: calc(var(--vw)*3);
                align-items: center;
                justify-content: center;
                .scroll-painel {
                    display: flex;
                    flex-flow: row nowrap;
                    overflow-x: scroll;
                    width: inherit;
                    border: calc(var(--vw)/40) solid var(--cor3);
                    border-bottom: none;
                    border-left: none;
                    * {
                        font-size: calc(var(--fontsize)/2);
                        white-space: nowrap;
                        padding: calc(var(--vw)/7);
                        padding-bottom: calc(var(--vw)/14);
                        padding-top: calc(var(--vw)/14);

                    }
                    *:hover {
                        font-size: calc(var(--fontsize)/1.7);
                    }                    
                }
            }
                .scroll-campo {
                    display: flex;
                    flex-flow: row wrap;
                    height: calc(var(--vh)*4);
                    width: 100%;
                    overflow-y: scroll;
                    border: calc(var(--vw)/40) solid var(--cor3);
                    border-left: none;
                    * {
                        text-align: center;
                        font-size: calc(var(--fontsize)/2.5);
                        font-weight: bold;
                        margin: calc(var(--vw)/10);
                        padding: calc(var(--vw)/10);
                        border: calc(var(--vw)/30) solid var(--cor3);
                        border-radius: 100px;
                        padding-top: 0px;
                        padding-bottom: 0px;
                    }
                }
            .container-tool {
                margin-top: calc(var(--vh)/2);
                border: calc(var(--vw)/20) solid var(--cor3);
                border-radius: 20px;
                background-color: var(--cor2);
                margin-right: calc(var(--vw));
                padding: calc(var(--vw)/10);
                .tool-inner {
                    display: flex;
                    flex-flow: row wrap;
                    background-color: var(--cor1);
                    border-radius: 10px;
                    width: calc(var(--vw)*5);
                    height: calc(var(--vh)*5);
                    overflow-y: scroll;
                    align-content: flex-start;
                    align-items: flex-start;
                    .campo {
                        height: fit-content;
                        * {
                            margin: calc(var(--vw)/10);
                            border: calc(var(--vw)/30) solid var(--cor3);
                            border-radius: 50px;
                            padding: calc(var(--vw)/10);
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
                    margin-top: calc(var(--vh)/5);
                    .enviar {
                        cursor: pointer;
                        letter-spacing: calc(var(--fontspace)/2);
                        background-color: var(--cor3);
                        border: none;
                        color: var(--cor2);
                        padding: calc(var(--vw)/15);
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