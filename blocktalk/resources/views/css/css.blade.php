@section ("css")
    <style>

        /* :root define variáveis que vão ser editadas pelo javaScript :-3 favor não mexer!! */
        
        :root { 

            @media only screen and (min-width: 300px) {
                --vh: 600px;
                --vw: 400px;
            }
            @media only screen and (min-width: 600px) {
                --vh: 500px;
                --vw: 600px;
            }
            @media only screen and (min-width: 900px) {
                --vh: 400px;
                --vw: 800px;
            }
            @media only screen and (min-width: 1200px) {
                --vh: 400px;
                --vw: 900px;
            }
            @media only screen and (min-width: 1500px) {
                --vh: 400px;
                --vw: 1000px;
            }


            --cor1: #FFFFFF; /* << branco */
            --cor2: #ab947e; /* << marrom claro */
            --cor3: #593d3b; /* << marrom escuro */
            --cor4: #000000; /* << preto */

            --fontsize: calc(var(--vw)/30); /* << Tamanho das fontes */
            --fontsizem: calc(var(--vw)/30);
            --fontspacem: calc(var(--fontsizem)/30);
            --linespacem: var(--fontsizem);
            --fontspace: calc(var(--fontsize)/200); /* << Espaço entre as letras */
            --linespace: calc(var(--fontsize)); /* << Espaço entre as linhas */
        }

        /* O resto é só um css comum!! apenas não deixe os valores fora da tag style ;-3 */
        /* Esse é o css universal!! Vai ser usado em todas as páginas :-3 */

        /* para criar um css próprio para uma página, só é necessário criar uma view para ele e */
        /* incluir + yieldar o css universal e dps editar as tags qual você quer que fiquem */
        /* diferentes!!! */

        * {
            margin: 0px;
            padding: 0px;
            font-family: arial;
            font-size: var(--fontsize);
            letter-spacing: var(--fontspace);
            line-height: var(--linespace);
            color: var(--cor3);
        }

        body {
            background-color: var(--cor1);
        }

        .header {
            padding: calc(var(--vh)/30);
            background-color: var(--cor3);
            font-size: var(--fontsize);
            display: flex;
            align-items: center;
            justify-content: space-between;
            * {
                color: var(--cor1);
            }
            .menu-icon {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: calc(var(--vw)/100)
            }
            .header-buttons {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: calc(var(--vw)/20);
                :last-child {
                    margin-right: calc(var(--vw)/40)
                }
            }            
            .button {
                h1 {
                    font-size: calc(var(--fontsize)/1.5);
                }
                display: flex;
                align-items: center;
                justify-content: center;
                gap: calc(var(--vw)/100);
            }
            span {
                font-size: calc(var(--fontsize)*1.10)
            }

            span, .button {
                cursor: pointer;
            }
        }

        .menu {
            display: flex;
            align-items: flex-start;
            align-content: flex-start;
            flex-flow: column;
            letter-spacing: var(--fontspacem);
            line-height: var(--linespacem);
            font-size: var(--fontsizem);
            height: 100%;
            position: fixed;
            background-color: var(--cor3);
            top: 0px;
            left: calc(-3*(var(--vw)));
            width: 30%;
            * {
                font-size: var(--fontsizem);
                color: var(--cor1);
                letter-spacing: var(--fontspacem);
                line-height: var(--linespacem);
            }
            #menu-title {
                display: flex;
                justify-content: space-between;
                margin: calc(var(--vh)/20);
                width: 90%;
                letter-spacing: var(--fontspacem);
                line-height: var(--linespacem);
                #menu-close {
                    font-size: calc(var(--fontsizem)*1.2);
                    cursor: pointer;
                }
            }
            .ranges {
                display: flex;
                flex-flow: column wrap;
                align-items: center;
                width: 100%;
                letter-spacing: var(--fontspacem);
                line-height: var(--linespacem);
                label {
                    letter-spacing: var(--fontspacem);
                    line-height: var(--linespacem);
                    font-size: calc(var(--fontsizem)/1.4);
                    display: flex;
                    justify-content: space-between;
                    margin: calc(var(--vh)/30);
                    h1 {
                        letter-spacing: var(--fontspacem);
                        line-height: var(--linespacem);
                        font-size: inherit;
                    }
                }
                input {
                    letter-spacing: var(--fontspacem);
                    line-height: var(--linespacem);
                    -webkit-appearance: none; 
                    appearance: none;
                    outline: none;
                }
                .custom-slot {
                    letter-spacing: var(--fontspacem);
                    line-height: var(--linespacem);
                    margin-bottom: calc(var(--vh)/20);
                }
            }
            .toggle {
                letter-spacing: var(--fontspacem);
                line-height: var(--linespacem);
                display: flex;
                justify-content: right;
                width: 100%;
                * {
                    font-size: calc(var(--fontsizem)*1.5);
                    margin-right: calc(var(--vw)/30);
                    cursor: pointer;
                    letter-spacing: var(--fontspacem);
                    line-height: var(--linespacem);
                }
            }
        }

        #comment {
            background-color: var(--cor2);
            color: var(--cor1);
            font-size: calc(var(--fontsize)/1.8);
            padding: calc(var(--vh)/30);
            padding-left: calc(var(--vw)/40);
            margin-bottom: calc(var(--vh)/20);
        }

        .account {
            #account-close {
                display: flex;
                justify-content: end;
                cursor: pointer;
            }
            display: none;
            position: absolute;
            flex-flow: column;
            background-color: var(--cor2);
            padding: calc(var(--vw)/50);
            border-radius: 30px;
            border: calc(var(--vw)/100) solid var(--cor3);
            left: 64%;
            top: 12%;
            .account-input {
                width: 70%;
                border-radius: 20px;
                border: none;
                margin: calc(var(--vh)/50);
                padding: calc(var(--vw)/40);
                padding-bottom: 0px;
                padding-top: 0px;
            }
            input::placeholder {
                color: var(--cor3);
                font-size: 60%;
                font-weight: bolder;
            }
            .account-hotbar {
                margin-top: calc(var(--vh)/50);
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: calc(var(--fontsize)*1.5);
                button {
                    cursor: pointer;
                    letter-spacing: calc(var(--fontspace)/2);
                    background-color: var(--cor3);
                    border: none;
                    color: var(--cor2);
                    padding: calc(var(--vw)/30);
                    padding-bottom: 0px;
                    padding-top: 0px;
                    border-radius: 15px;
                    font-size: calc(var(--fontsize)/1.5)
                }
            }
        }

    </style>
@endsection
