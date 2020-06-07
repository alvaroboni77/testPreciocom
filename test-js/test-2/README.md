<h1>Test-2</h1>
El fragmento de código de nuestro fichero test.js nos devuelve un output no deseado. Queremos imprimir un valor incremental a cada segundo pero lo que nos devuelve el código es el mismo valor en cada iteración.

Sin necesidad de ejecutar el código, ¿sabrías decirnos qué valor imprimiría por consola el script? ¿Cuál es el motivo?
Es un problema con el ámbito de la variable i
<li>>4</li>
<li>>4</li>
<li>>4</li>
<li>>4</li>
<li>>4</li>
Sabiendo que el output que buscamos es el que encuentras bajo estas líneas… ¿Cómo solucionarías el fragmento de código para que el output sea el deseado?
<ul>
<li>>0</li>
<li>>1</li>
<li>>2</li>
<li>>3</li>
<li>>4</li>
</ul>
Cambiando la declaración de var a let.
