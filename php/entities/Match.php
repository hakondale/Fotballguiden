<?php
class Match{
	private $match_id;
	private $league_id;
    private $match_time;
    private $match_date;
    private $match_teams;
    private $match_channel;
    
	public function constructWithMatch_id($match_id){
		$this->match_id = $match_id;
		$constructQueryOfMatches = mysql_query("SELECT * FROM matches WHERE match_id = '$match_id'");
        
		while($constructRowOfMatches = mysql_fetch_array($constructQueryOfMatches)){
			$this->match_id = $constructRowOfMatches['match_id'];
			$this->league_id = $constructRowOfMatches['league_id'];
			$this->match_time = $constructRowOfMatches['match_time'];
			$this->match_date = $constructRowOfMatches['match_date'];
			$this->match_teams = $constructRowOfMatches['match_teams'];
			$this->match_channel = $constructRowOfMatches['match_channel'];
		}
	}

/*    public function constructWithClub_url($club_url){
		$this->club_url = $club_url;
		$constructQueryOfClubs = mysql_query("SELECT * FROM clubs WHERE club_url = '$club_url'");
        
		while($constructRowOfClubs = mysql_fetch_array($constructQueryOfClubs)){
			$this->club_name = $constructRowOfClubs['club_name'];
			$this->club_id = $constructRowOfClubs['club_id'];
			$this->twitter = $constructRowOfClubs['twitter'];
			$this->facebook = $constructRowOfClubs['facebook'];
			$this->year_founded = $constructRowOfClubs['year_founded'];
			$this->description = $constructRowOfClubs['description'];
			$this->club_color1 = $constructRowOfClubs['club_color1'];
			$this->club_color2 = $constructRowOfClubs['club_color2'];
			$this->players = $constructRowOfClubs['players'];
			$this->games_played = $constructRowOfClubs['games_played'];
			$this->points = $constructRowOfClubs['points'];
			$this->goals_home = $constructRowOfClubs['goals_home'];
			$this->goals_away = $constructRowOfClubs['goals_away'];
            $this->league_id = $constructRowOfClubs['league_id'];
		}
	} 
*/
    
    public function getTime(){
        return $this->match_time; 
    }
    public function setTime($match_time){
        $this->match_time = $match_time;
    }
    
    
    public function getTeams(){
        return $this->match_teams; 
    }
     public function setTeams($match_teams){
        $this-> match_teams= $match_teams;
    }
    
    
    public function getDate($match_date){
        return $this->match_date;
    }
    public function setDate($match_date){
        $this->match_date = $match_date;
    }
    
    
    public function getChannel($match_channel){
        return $this->match_date;   
    }
    public function setChannel($match_channel){
        $this->match_channel = $match_channel;
    }
       
    
	public function saveInDB(){
		mysql_query("INSERT INTO clubs VALUES('$this->match_id','$this->league_id','$this->match_time' ,'$this->match_teams','$this->match_date')");
	}
}

?>