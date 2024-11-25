HTML/PHP-grundstruktur. - Wordpress är ej inblandat i denna övning.

Uppgiften går ut på att skapa en statisk grundstruktur med HTML/PHP/CSS/JavaScript.
Grundstrukturen ska vara anpassat för en
nyhetswebbplats med valfritt innehåll. Fyll ut webbplatsen med platshållarinnehåll (ex. Puppy
Ipsum-text och fria bilder) eller ännu hellre - nyheter som just du tycker är intressant.

Sidor på webbplatsen

- Startsida - index.php
- Nyhetssida (lista alla nyheter) - news.php
- Sida för enskild nyhet - newsOnePage
- Om oss-sida - about
- Kontaktsida - contact
- 404-sida - 404.php

###Krav på sidtyperna:

- Startsidan
  Har en unik layout från övriga sidor, i övrigt fritt att skapa.

- Nyhetssidan
  Listar alla nyheter med ett kort utdrag ur artikelns text och dess bild i miniatyr.

- Sidan för enskild nyhet
  Presenterar artikelns rubrik, dess bild och hela artikelns text. Datum för artikelns publicering och
  nyhetskategori ska också skrivas ut.

- Om oss-sidan
  En enkel beskrivande text om nyhetsbyrån och eventuellt en bild.
  Kontaktsidan
  Ett kontaktformulär ska finnas på sidan med inmatningsfält för minst besökarens namn, e-post och
  meddelande. Ingen funktionalitet behöver kopplas till formuläret i det här skedet - men det är
  ju ett bra tillfälle att repetera php-formulärshantering med tacksida, för den som vill.

- 404-sida
  Egen design med lagom käckt meddelande med förslag på länkar samt en sökruta.

###Krav på webbplatsen:

- En huvudmeny och sidfot ska finnas på alla webbplatsens sidor
- Webbplatsen ska vara responsiv och fungera bra i mobilstorlek.

###Instruktioner

1. Börja med att skapa en enkel designskiss eller wireframes för webbplatsens olika
   sidor, lägg extra fokus på hur och var det olika nyhetsrelaterade innehållet ska visas. (T.ex.
   Hur ska en enskild nyhetsartikel visas och var vill du ha artikelns bild, osv).
2. Skapa varje undersida som en enskild php-fil. Sidhuvud och sidfot kan med fördel brytas ut
   och återanvändas på undersidorna med PHP-include. Använd så långt det är möjligt
   semantisk HTML5 och försök ha en tydlig sektionering av de olika delarna på varje sida.
3. Skapa CSS så att webbplatsen får en enhetlig design. Försök gärna att strukturera din CSS
   så att klasser för olika komponenter såsom knappar, formulär/inmatningsfält och text blir
   universella och enkla att återanvända. Använd gärna element-selektorer i din CSS där så är
   lämpligt (till exempel för alla h1-h6, brödtext, länkar etc.).
   Lycka till!
