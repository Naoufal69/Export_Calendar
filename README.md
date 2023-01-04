## Rédacteur : AYACHE NAOUFAL

### Documentation :
Exemple d'utilisation : 
```php
//Events à exporter
$events = array(
    array(
        'summary' => 'Réunion de travail', //Champ obligatoire
        'date_start' => '2023-01-02T00:00:00', //Champ obligatoire, le format de la date doit être comme dans l'exemple
        'date_end' => '2023-01-03T23:59:59', //Champ obligatoire, le format de la date doit être comme dans l'exemple
        'summary' => 'Autres absence', //Champ obligatoire
        'description' => 'Urgence sanitaire', //Champ non-obligatoire
        'location' => 'Hôpital', //Champ non-obligatoire
    ),
    array(
        'summary' => 'Anniversaire',
        'description' => 'Célébration de mon anniversaire', //Champ obligatoire
        'date_start' => '2024-02-17T00:00:00', //Champ obligatoire, le format de la date doit être comme dans l'exemple
        'date_end' => '2024-02-18T12:00:00', //Champ obligatoire, le format de la date doit être comme dans l'exemple
        'summary' => 'RTT', //Champ obligatoire
    ),
);
require_once('./Chemin/vers/Export_Calendar.php');
use ECalendar as EC;
$e = new EC\ECalendar('Congés plannifié',$events) //Premier argument => Nom des events
$e->exportCalendar();
```