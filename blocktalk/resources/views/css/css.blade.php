@section ("css")
    <style>

        /* :root define variáveis que vão ser editadas pelo javaScript :-3 favor não mexer!! */
        
        :root { 

            @media only screen and (min-width: 300px) {
                --vw: 400px;
                --vh: 800px;
            }

            @media only screen and (min-width: 500px) {
                --vw: 500px;
                --vh: 700px;
            }

            @media only screen and (min-width: 800px) {
                --vw: 600px;
                --vh: 600px;
            }

            @media only screen and (min-width: 1000px) {
                --vw: 700px;
                --vh: 600px;
            }

            @media only screen and (min-width: 1200px) {
                --vw: 900px;
                --vh: 700px;
            }

            @media only screen and (min-width: 1400px) {
                --vw: 1000px;
                --vh: 800px;
            }

            --cor1: #FFFFFF; /* << branco */
            --cor2: #ab947e; /* << marrom claro */
            --cor3: #593d3b; /* << marrom escuro */
            --cor4: #000000; /* << preto */

            --fontsize: calc(var(--vw)/25); /* << Tamanho das fontes */
            --fontspace: auto; /* << Espaço entre as letras */
            --linespace: auto; /* << Espaço entre as linhas */
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
            font-size: var(--fontsize)
        }

        body {
            background-color: var(--cor1);
        }

        .header {
            background-color: var(--cor3);
            color: var(--cor1);
            font-size: var(--fontsize);
            display: flex;
            align-items: center;
            justify-content: space-between;
            .menu-icon {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .header-buttons {
                display: flex;
                align-items: center;
                justify-content: center;
                gap: calc(var(--vw)/90);
                :last-child {
                    margin-right: calc(var(--vw)/100)
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
            display: none;
            position: absolute;
        }

    </style>
@endsection
