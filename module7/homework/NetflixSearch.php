<?php

class NetflixSearch
{
    /**
     * Title search query
     * @var string
     */
    protected $title;

    /**
     * Director search query
     * @var string
     */
    protected $director;

    /**
     * Year search query
     * @var int
     */
    protected $year;

    /**
     * Actor search query
     * @var string
     */
    protected $actor;

    /**
     * @param string $title
     * @return bool returns true on success, false on input error
     */
    public function setTitle($title)
    {
        if(!is_string($title)) return false;

        //encode for URL
        $title = urlencode($title);

        //put it in GET variable format
        $title = 'title=' . $title;
        $title = strtolower($title);
        $this->title = $title;

        return true;
    }

    /**
     * @param string $director
     * @return bool returns true on success, false on input error
     */
    public function setDirector($director)
    {
        if(!is_string($director)) return false;

        //encode for URL
        $director = urlencode($director);

        //put it in GET variable format
        $director = 'director=' . $director;
        $director = strtolower($director);
        $this->director = $director;

        return true;
    }

    /**
     * @param int $year
     * @return bool returns true on success, false on input error
     */
    public function setYear($year)
    {
        if(!is_int($year) && !in_array($year, range(1900, 2100))) return false;

        //put it in GET variable format
        $year = 'year=' . $year;
        $this->year = $year;

        return true;
    }

    /**
     * @param string $actor
     * @return bool returns true on success, false on input error
     */
    public function setActor($actor)
    {
        if(!is_string($actor)) return false;

        //encode for URL
        $actor = urlencode($actor);

        //put it in GET variable format
        $actor = 'actor=' . $actor;
        $actor = strtolower($actor);
        $this->actor = $actor;

        return true;
    }

    /**
     * Sends a request to the Netflix Roulette API using provided query
     * @return array Contains API body with Netflix Search Results
     * @throws Exception
     */
    public function apiRequest()
    {
        //initialize $query
        $query = [];

        //add search queries to $query
        if(isset($this->title)) $query[] = $this->title;
        if(isset($this->actor)) $query[] = $this->actor;
        if(isset($this->year)) $query[] = $this->year;
        if(isset($this->director)) $query[] = $this->director;

        var_dump($query);
        //implode $query into a string
        $query = implode('&', $query);


        //Request the response
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://netflixroulette.net/api/api.php?' . $query);

        //Check the response status
        $code = $response->getStatusCode();
        $code = strval($code);  //needed to select first character
        $reason = $response->getReasonPhrase();

        if ($code[0] != '2' ) {
            throw new Exception('Request Failed<br/><br/>Code: ' . $code . '<br/>Reason: ' . $reason);
        }

        //Return the response body
        $body = $response->getBody();
        return json_decode($body);

    }
}