<?php
namespace weather {


    class WeatherQuestion
    {

  
        public function readline()
        {
            $loop = true;
            $token = '######'; // Hidden obviously
            print_r("\nThis is a simple weather request API. \nType something like 
            \n\n'Dakar' or 'London'\nHave fun!\nTo exit, press type 'exit' or press CTRL+C\n");

            do {
                $line = readline("Please type a real city name :");
                test_if_String($line);
                $line = clean_string($line);
                if ($line == "exit") {
                    $loop = false;
                    die(); // And extra precaution if the user types exit, habit.
                }

                if (!empty($line)) { // Don't give me an empty input!
                    //Use Input
                    $url = `curl --silent "api.openweathermap.org/data/2.5/weather?q=$line&appid=$token&units=metric"`;
                    $currentCurl = $url;
                    $ch = curl_init($currentCurl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_exec($ch);
                    curl_close($ch);
                    $weather = json_decode($currentCurl);
                    test_if_object($weather);
                    if (isset($weather->weather[0]->main) && isset($weather->name)) {
                        $cityName = $weather->name;
                        $weatherResult = $weather->weather[0]->main;
                        $temprature = $weather->main->temp;
                        //Return Input
                        print_r("\nThe current weather in " . $cityName  ." is " . $weatherResult.", "
                        . $temprature . " degrees celcius.\n");
                    }
                    if (isset($weather->cod) && $weather->cod == "404") { // If API returns 404, then it's a mistake.
                        print_r("City not found\n");
                    }
                }
            } while ($loop == true);
        }
    }
    /*
    //Simple tests to make sure that the user doesn't mess up bash or the api doesn't return the right required element.
    */
    function test_if_String(string $string)
    {
        if (is_string($string) == false) {
            print_r("ERROR USER INPUT : Not a string.\n");
        }
    }
    function test_if_object($object)
    {
        if (is_object($object) == false) {
            print_r("ERROR API OUTPUT : API did not return array.\n");
        }
    }
    // Originally this was supposed to test other things but it turned out to fix some stuff with quotes and so on.
    {
    function clean_string(string $string)
    {
        $return = escapeshellcmd($string);
        return $return;
    }
//Request input
    $line = new WeatherQuestion();
    $answer = $line->readline();


    }
}
