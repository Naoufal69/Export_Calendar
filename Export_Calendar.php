<?php
namespace ECalendar;

class ECalendar{
    public array $events;

    public function __construct($events){
        $this->events = $events;
    }

    public function exportCalendar(){
        $ical = "BEGIN:VCALENDAR\n";
        $ical .= "VERSION:2.0\n";
        $ical .= "PRODID:-//LearnPHP.co//NONSGML".$this->name."//EN\n";
        $ical .= "METHOD: REQUEST\n";
        foreach ($events as $event){
            $slug = strtolower((str_replace(array(' ',"'",'.'),array('_','',''),$this->name)));
            $ical .= "BEGIN:VEVENT\n";
            $ical .= "uID:".date ('Y-m-d') . 'T' .date ("H:i:s") ."-" . rand () ."-learnphp.co\n";
            $ical .= "DESCRIPTION:" . $event['description'] . "\n";
            $ical .= "LOCATION:" . $event['location'] . "\n";
            $ical .= "DTSTAMP:" .date ('Y-m-d') . 'T' .date ("H:i:s") . "\n";
            $ical .= "DTSTART:".$event['date_start']." \n";
            $ical .= "DTEND:".$event['date_end']." \n";
            $ical .= "SUMMARY: ".$event['name']."\n";
            $ical .= "DESCRIPTION:".$event['summary']."\n";
            $ical .= "END:VEVENT\n";
        }
        $ical .= "END: VCALENDAR\n";
        header("Content-Type: text/Calendar; charset=utf-8");
        header("Content-Disposition: inline; filename=".$slug.".ics");
        echo $ical;
    }
}