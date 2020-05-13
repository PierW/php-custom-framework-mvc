# __Custom PHP Framework MVC__

Semplice framework php (oop) MVC con l'utilizzo di PDO e composer per la gestione delle dipendenze e per l'autoloading delle classi.
La cartella `public` contiene risorse come immagini, js, css compilato ed il file index.php che rappresenta l'entry point dell'app.

Installazione:

> composer Install

Se si inserisce una nuova classe:

> composer dump-autoload


*Rinominare il file __.env.example__ in __.env__ ed inserire i dati richiesti.*


### Struttura:

- __APP__: Qui è dove si concentrerà il nostro lavoro: si definisce la rotta attraverso un controller (praticamente l'entry point della nostra rotta) che DELEGA, (praticamente un intermediario) tra il model, che farà gran parte del lavoro, ed una volta ottenuto i dati caricherà la view specifica con gli appositi dati.
- __CORE__: Custom Framework.
- __PUBLIC__: Document Root.


_NOTA_: Di default c'è già del codice (model per Task ed un controller per gli Users) e dello stile di esempio per una classica app TODO. Sentiti libero di eliminarlo.
Di conseguenza sono previste due tabelle: users e todos(alias tasks).

id | name | username | email
--- | --- | --- | ---
1 | `Pippo` | @pippo | `pippo@email.it`
2 | `Pluto` | @pluto | `pluto@email.it`

id | description | completed | user_id
--- | --- | --- | ---
1 | `Spesa` | 0 | 2
2 | `Uscire` | 1 | 1

#### Example of methods:

> $DB -> selectAll(string 'tablename');

> $DB -> insert(string 'tablename', array [parameters]);

> $task -> isCompleted(); // Return: boolean
