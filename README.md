## Build a Laravel CRUD

Beste lezer,

Bijgevoegd de code van mijn CRUD applicatie. Totaal ben ik er denk ik 2 avonden aan kwijt geweest (+- 8 uur).

### Installeer lokaal een Laravel applicatie, pas bij voorkeur direct versiebeheer toe. 
Lokaal een Breeze install gemaakt voor o.a. een login functionaliteit. In terminal direct versiebeheer toegepast.

### Maak een entiteit voor de contactpersonen. 

Ik heb een model aangemaakt genaamd 'Contact'.
    
### Draag zorg voor een overzicht van de contactpersonen. 

Migratie gemaakt en een DashboardController voor het overzicht in de dashboard view.

### Maak de contactpersonen beheersbaar middels het CRUD.

ContactController gemaakt om Contacten te:
    - Creeren
    - Tonen
    - Updaten
    - (Soft)Deleten  
    

### Uiteraard zijn alle extra zaken die laat zien extra overtuigend, leef je uit :-). 

Heb bij contacten een optie gemaakt om ze publiek of prive te maken. Publiek is zichtbaar voor andere gebruikers en voor 'guests'


### Stuur geen database in vorm van een sql export mee, bekijk hoe je dat op een andere manier kan doen. Liefst wel met enkele voorbeeld rijen in de tables

Dit was even lastig, wist dat het met factories en seeden kon, had dit echter nog niet gedaan. Aangezien er geen database export meegestuurd mocht worden dacht ik eerst, dan gebruik ik SQLITE, dan kan de hele database meegestuurd worden. Daarna toch gekozen om ContactFactory aan te maken. Dus in .env kan er gekozen worden voor een andere database en deze kan gevuld worden met 'php artisan db:seed'. Wel is het noodzakelijk om een account aan te maken voordat dit commando uitgevoerd kan worden. 

Mochten er vragen zijn, ik hoor het graag!



