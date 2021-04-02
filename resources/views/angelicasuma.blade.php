<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mi calculadora</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color:red;
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
          <script type="text/javascript">
        
        function sumar() {
            var numero1 = document.getElementById('dato1').value;
            var numero2 = document.getElementById('dato2').value;
            var sumar = parseInt(numero1) + parseInt(numero2);
            alert("AL SUMAR LOS DOS NUMERO SE OBTUVO EL SIGUIENTE RESULTADO : "+sumar)
        }
        
        function angelicavalidaciondecampos(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)
}

                    </script>
    </head>
    <body>
        <div class="flex-center position-refpaa full-height">
           
                <div class="content">
                <center>Angelica Chavez Gutierrez<hr>
</center>
                    <form >
                    
    

                  <input type="text" id="dato1"   onKeyPress="return angelicavalidaciondecampos(event)" require><br>
                  <input type="text" id="dato2"  onKeyPress="return angelicavalidaciondecampos(event)"  require><br>
                  </form>
                    <button onclick="sumar()">CALCULAR SUMA</button>
                    <div class="links"> 
            <a href="{{ route('inicio') }}">WELCOME</a>
                      
                </div>
            
                </div>
           
                </div>

               
        
    </body>
</html>