@section ("css")
    <style>

        /* :root define variáveis que vão ser editadas pelo javaScript :-3 favor não mexer!! */
        
        :root { 
            --vh: 3px;
            --vw: 3px;

            --cor1: #FFFFFF; /* << branco */
            --cor2: #ab947e; /* << marrom claro */
            --cor3: #593d3b; /* << marrom escuro */
            --cor4: #000000; /* << preto */

            --fontsize: auto; /* << Tamanho das fontes */
            --fontspace: calc(var(--vw)/100); /* << Espaço entre as letras */
            --linespace: calc(var(--vh)/1.8); /* << Espaço entre as linhas */
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
            padding: calc(var(--vh)/8);
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
                gap: calc(var(--vw)/60)
            }
            .header-buttons {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: calc(var(--vw)/6);
                :last-child {
                    margin-right: calc(var(--vw)/20)
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
            height: 100%;
            position: fixed;
            background-color: var(--cor3);
            top: 0px;
            left: calc(-3*(var(--vw)));
            width: 30%;
            * {
                color: var(--cor1);
            }
            #menu-title {
                display: flex;
                justify-content: space-between;
                margin: calc(var(--vh)/4);
                #menu-close {
                    font-size: calc(var(--fontsize)*1.3);
                    cursor: pointer;
                }
            }
            .ranges {
                display: flex;
                flex-flow: column wrap;
                align-items: center;
                label {
                    font-size: calc(var(--fontsize)/1.6);
                    display: flex;
                    justify-content: space-between;
                }
                input {
                    -webkit-appearance: none; 
                    appearance: none;
                    outline: none;
                }
                .custom-slot {
                    margin-bottom: calc(var(--vh)/2);
                }
            }
            .toggle {
                display: flex;
                justify-content: right;
                * {
                    font-size: calc(var(--fontsize)*2);
                    margin-right: calc(var(--vw)/6);
                    cursor: pointer;
                }
            }
        }

        #comment {
            background-color: var(--cor2);
            color: var(--cor1);
            font-size: calc(var(--fontsize)/1.3);
            padding: calc(var(--vh)/20);
            padding-left: calc(var(--vw)/10);
            margin-bottom: calc(var(--vh)/4);
        }

    </style>
@endsection
