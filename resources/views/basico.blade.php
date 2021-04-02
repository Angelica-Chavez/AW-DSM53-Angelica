<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Javascript</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

           <script type="text/javascrip">
                 console.log("Pagina en funcion de consola...");
                 document.write("Escrito del script de");

                 if(confirm("presione Aceptar o Cancelar")){
                     document.write("SI");
                 }
                 else{
                     document.write("NO");
                 }

                 /*
                 var: variables de funcion
                 let: variable de bloque
                 const: variables constante
                 */

                var x;
                var nombre = "Angelica";
                var edad = 20;
                var lista = ['Hugo','Paco',"Luis"];

                var res1 = 2+5;
                var res2 = edad-res1;

                var y = 1;
                /*
                for(x=0; x<=10; x++){
                    console.log("for: " + x);
                }

                while(y<=10){
                    y++;
                    console.log("while: "+ y);
                }

                do{
                    console.log("while:"+ y);
                    y++;
                }while(y<=10);
                */

                for(z in lista){
                    console.log(lista[z]);
                }
                //---------------------------------------------------------------------------------------------

                function cambio(){
                    var info 
                    document.getElementById("num1").value = info;
                    document.getElementByClassName("num2")[0].innerHTML = "2020-b";
                    document.getElementsByName("num3")[0].innerHTML = "2020-c";
                }

                var dato = prompt("Indica un valor"):
                 alert(parseInt(dato)+10);

                </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2>Laravel-Javascript</h2>
                
                <input type="text" id="num1"><br>
                <div class="num2"></div><br>
                <textarea name="num3"></textarea><br>
                <br>
                <button onclick="cambio()">Cambio de información</button>

                
                <div class="links">
                    <a href="{{ route('inicio') }}">Regresar</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
