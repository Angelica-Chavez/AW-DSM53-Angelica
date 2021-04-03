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
            var suma = function(){
                   /**/
                     parseInt()
                     parseFloat()
                     String()
                   */
                   var num1 = parseFloat(document.getElementById("numero1").value);
                   var num2 = parseFloat(document.getElementById("numero2").value);

                   var res = num1 + num2;
                       document.getElementById("resdata").innerHTLM = res;
                    return alert(res);

            }

            function otro(num1,num2){
                var res = num1+num2;
                resultados.call(this);
                return res;
            }
            
            function  resultado(){
                var info = "DSM";
                document.getElementById("resdata").innerHTML = info;
                document.getElementsByClassName("ejemplo")[0].innerHTML = info;
                document.getElementsByName("txt")[0].innerHTLML = info;
                document.getElementById("numero2").value = "DSM";     
            }

            var fecha1 = new Date();
            var fecha2 = String(fecha1);
          </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <h2>Laravel-Javascript</h2>
                <tr>
                Número 1: <input type="text" id="numero1"> &nbsp; &nbsp;
                Número 2: <input type="text" id="numero2"> <br>
                <input type="submit" value="Suma-1" onclick="suma();" id="sub"> &nbsp; &nbsp;
                <button onclick="suma();">Sumar-2</button>
                <br><br>

                <center>
                     <div id="resdata">RESULTADO-1</div><br>
                     <div class="ejemplo">RESULTADO-2 a</div><br>
                     <div class="ejemplo">RESULTADO-2 b</div><br>
                     <textarea name="txt" rows="5" cols="50">RESULTADO-3</testarea>
                     <p id="fecha">-- -- -- -- --</p>
                     </center>

                     <!-- ------------------------------------ -->
                     <h2 id="colores">Colores</h2>
                        <button onclick="document.getElementById('color').style.color = 'red'">Rojo</button>
                        <button onclick="document.getElementById('colores').style.border ='solid 1px #00FF00'">Verde</button>
                        <button onclick="document.getElementById('colores').style.cssText ='color: #0000FF; border: solid 1px #0000FF'">Azul</button>
                        
                        <select id="comidas">
                        <option>Mango</option>
                        <option>Enchiladas</option>
                    </select>
                
                </div>
                <div class="links">
                    <a href="{{ route('inicio') }}">Regresar</a>
                    
                </div>
            </div>
        </div>
    </body>
        <script>
            document.getElementById("fecha").innerHTML = fecha1;
            var elemento= document.createElement("option");
            var selector = document.getElementById("comidas");
            var objeto = document.getElementsByTagName("option")[0];
            selector.insertBefore(elemento,objeto)
            elemento.setAttribute('value','sopa');
            elemento.textContent = 'SOPA'
            </script>
</html>
