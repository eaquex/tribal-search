# Tribal Search API
Utilizando el servidor de desarrollo que incluye LARAVEL, de manera predeterminada el servidor se encuentra en la ubicación http://127.0.0.1:8000/.  Si el proyecto lo ejecuta en un servidor web, tome en cuenta que la dirección base de la API se debe cambiar.

## Endpoints
### [GET] /search
Este recurso le devuelve ordenado de forma alfabética una búsqueda según los términnos de busqueda que se le indiquen..

#### Parámetros
- **keywords:**  (requerido) Las palabras claves relacionadas a la búsqueda que se quiere realizar. 
- **type:** (opcional) El tipo de medio que se quiere consultar.  Esta puede ser: movie, music-video, song, person.  No colocar este parámetro permite seleccionar todos los medios disponibles.
-  **source:** Permite filtrar la fuente de datos donde se quiere realizar la búsqueda. Esta puede ser: itunes, tvmaze, crcind.  No colocar este parámetro permite seleccionar todas las fuentes de datos.

### Resultado
Devuelve un arreglo de objetos con la siguiente estructura:
```
[
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"        
    }
]
```
### Ejemplo
Petición CURL:
```
curl --location --request GET 'http://127.0.0.1:8000/api/search?keywords=jack'
```
Respuesta:
```
[
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Gentleman Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": "Greatest Hits",
        "name": "Give Me Everything (feat. Ne-Yo, Afrojack & Nayer)",
        "type": "song",
        "source": "itunes"
    },
    {
        "collection": "Listen",
        "name": "Hey Mama (feat. Nicki Minaj, Bebe Rexha & Afrojack)",
        "type": "song",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": "Carbondale 2000 (Live)",
        "name": "Jack",
        "type": "song",
        "source": "itunes"
    },
    {
        "collection": "Valdosta 1989 (Live)",
        "name": "Jack",
        "type": "song",
        "source": "itunes"
    },
    {
        "collection": "Widespread Panic - 12/31/2009 Atlanta, GA (Live)",
        "name": "Jack",
        "type": "song",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Bobby",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack & Jill",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Irish",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Reacher: Never Go Back",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Ryan: Shadow Recruit",
        "type": "movie",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Taylor",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack Whitehall's Sporting Nation",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jack of All Trades",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Aviel R.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": null,
        "name": "Jackson,Dmitry U.",
        "type": "person",
        "source": "crcind"
    },
    {
        "collection": "Hot Rocks 1964-1971",
        "name": "Jumpin' Jack Flash",
        "type": "song",
        "source": "itunes"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Outback Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Samurai Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Surviving Jack",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    },
    {
        "collection": null,
        "name": "Tom Clancy's Jack Ryan",
        "type": "movie",
        "source": "tvmaze"
    }
]
```
