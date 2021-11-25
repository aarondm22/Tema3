
/*

Contraseñas válidas
^(?=.*[A-Z].*[A-Z])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[a-z].*[a-z].*[a-z]).{8}$

Color Hexadecimal
//#([a-fA-F]|[0-9]){3, 6}

Validar dirección de email
/[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}/igm

Dirección IPv4
/b(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?).){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)b/


Dirección IPv6
(([0-9a-fA-F]{1,4}:){7,7}[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,7}:|([0-9a-fA-F]{1,4}:){1,6}:[0-9a-fA-F]{1,4}|([0-9a-fA-F]{1,4}:){1,5}(:[0-9a-fA-F]{1,4}){1,2}|([0-9a-fA-F]{1,4}:){1,4}(:[0-9a-fA-F]{1,4}){1,3}|([0-9a-fA-F]{1,4}:){1,3}(:[0-9a-fA-F]{1,4}){1,4}|([0-9a-fA-F]{1,4}:){1,2}(:[0-9a-fA-F]{1,4}){1,5}|[0-9a-fA-F]{1,4}:((:[0-9a-fA-F]{1,4}){1,6})|:((:[0-9a-fA-F]{1,4}){1,7}|:)|fe80:(:[0-9a-fA-F]{0,4}){0,4}%[0-9a-zA-Z]{1,}|::(ffff(:0{1,4}){0,1}:){0,1}((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]).){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9])|([0-9a-fA-F]{1,4}:){1,4}:((25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]).){3,3}(25[0-5]|(2[0-4]|1{0,1}[0-9]){0,1}[0-9]))

Separador de miles
/d{1,3}(?=(d{3})+(?!d))/g

Anteponer HTTP a enlace
if (!s.match(/^[a-zA-Z]+:///))
{
    s = 'http://' + s;
}

Obtener nombre de dominio
/https?://(?:[-w]+.)?([-w]+).w+(?:.w+)?/?.*/  //i

/*
Ordenar palabras clave por número de palabras
^[^s]*$        matches exactly 1-word keyword
^[^s]*s[^s]*$    matches exactly 2-word keyword
^[^s]*s[^s]*     matches keywords of at least 2 words (2 and more)
^([^s]*s){2}[^s]*$    matches exactly 3-word keyword
^([^s]*s){4}[^s]*$    matches 5-words-and-more keywords (longtail)

Encontrar una cadena Base64 en PHP
?php[ t]eval(base64_decode('(([A-Za-z0-9+/]{4})*([A-Za-z0-9+/]{3}=|[A-Za-z0-9+/]{2}==)?){1}'));

Extraer ruta de la imagen
< *[img][^>]*[src] *= *["']{0,1}([^"' >]*)

Validar fecha en formato dd/mm/YYYY
^(?:(?:31(/|-|.)(?:0?[13578]|1[02]))1|(?:(?:29|30)(/|-|.)(?:0?[1,3-9]|1[0-2])2))(?:(?:1[6-9]|[2-9]d)?d{2})$|^(?:29(/|-|.)0?23(?:(?:(?:1[6-9]|[2-9]d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1d|2[0-8])(/|-|.)(?:(?:0?[1-9])|(?:1[0-2]))4(?:(?:1[6-9]|[2-9]d)?d{2})$

Extraer ID de video de YouTube
/http://(?:youtu.be/|(?:[a-z]{2,3}.)?youtube.com/watch(?:?|#!)v=)([w-]{11}).*/  //gi

/*
Validar ISBN
/b(?:ISBN(?:: ?| ))?((?:97[89])?d{9}[dx])b/i

Comprobar Código Postal
^d{5}(?:[-s]d{4})?$

Validar nombre de usuario de Twitter
/@([A-Za-z0-9_]{1,15})/

Encontrar atributos CSS
^s*[a-zA-Z-]+s*[:]{1}s[a-zA-Z0-9s.#]+[;]{1}

Comprobar tarjeta de crédito
^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35d{3})d{11})$

Url de perfil de Facebook
/(?:http://)?(?:www.)?facebook.com/(?:(?:w)*#!/)?(?:pages/)?(?:[w-]*/    //)*([w-]*)/

/*
Comprobar la versión de Internet Explorer
^.*MSIE [5-8](?:.[0-9]+)?(?!.*Trident/[5-9].0).*$

Extraer precio
/($[0-9,]+(.[0-9]{2})?)/

Parsear cabeceras de email
/b[A-Z0-9._%+-]+@(?:[A-Z0-9-]+.)+[A-Z]{2,6}b/i


Encontrar una extensión específica
/^(.*.(?!(htm|html|class|js)$))?[^.]*$/i

Añadir rel="nofollow" a enlaces
(<as*(?!.*brel=)[^>]*)(href="https?://)((?!(?:(?:www.)?'.implode('|(?:www.)?', $follow_list).'))[^"]+)"((?!.*brel=)[^>]*)(?:[^>]*)>

*/