<h1>Test-1</h1>
Para responder a este test encontrarás un archivo llamado test.js en esta misma carpeta donde hay un pequeño fragmento de código que deberás analizar y responder a las siguientes cuestiones.

<ul>
<li>En el fragmento de código de nuestro archivo (script.js) podemos encontrar hasta 3 variables. ¿Podrías decirnos cuál sería el valor de todas ellas al finalizar la ejecución del script?</li>
<code>
var rgb = {
    red: "#FF0000",
    green: "#00FF00",
    blue: "#0000FF",
    white: "#FFFFFF",
    black: "#000000"
};

var wb = {
    white: "#FFFFFF",
    black: "#000000"
};

var colors = {
    red: "#FF0000",
    green: "#00FF00",
    blue: "#0000FF",
    white: "#FFFFFF",
    black: "#000000"
};
</code>  
<li>Modifica el código para que las variables rgb y wb mantengan sus valores iniciales y colors tenga los valores de ambas al finalizar la ejecución del script.</li>
var colors = Object.assign({}, rgb, wb);

<li>Además, tenemos un bug localizado en dispositivos con Internet Explorer… El código de nuestro script no funciona y necesitamos que se ejecute también en este navegador. ¿Sabrías identificar cuál es el problema? ¿Qué solución nos propones?</li>


PS: No es estrictamente necesario tener Internet Explorer para poder identificar y/o resolver el bug.

El navegador Internet Explorer no es compatible con el metodo Object.assign
Una posible solución podría ser iterar el array y las claves y tomar los valores como nueva propiedad del objeto resultante