<?php
class Club{
	private $club_id;
	private $club_name;
    private $club_url;
    private $twitter;
    private $facebook;
    private $year_founded;
    private $description;
    private $club_color1;
    private $club_color2;
    private $players;
    private $games_played;
    private $points;
    private $goals_home;
    private $goals_away;
    private $league_id;
    private $twitter_hashtag;
    
	public function constructWithClub_id($club_id){
		$this->club_id = $club_id;
		$constructQueryOfClubs = mysql_query("SELECT * FROM clubs WHERE club_id = '$club_id'");
        
		while($constructRowOfClubs = mysql_fetch_array($constructQueryOfClubs)){
			$this->club_name = $constructRowOfClubs['club_name'];
			$this->club_url = $constructRowOfClubs['club_url'];
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
            $this->twitter_hashtag = $constructRowOfClubs['twitter_hashtag'];
		}
	}

    public function constructWithClub_url($club_url){
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
            $this->twitter_hashtag = $constructRowOfClubs['twitter_hashtag'];
		}
	}
    
    public function getName(){
        return $this->club_name; 
    }
    public function setName($club_name){
        $this->club_name = $club_name;
    }
    
    public function getClubUrl(){
        return '/club.php?club=' . $this->club_url; 
    }
     public function set($club_url){
        $this-> club_url= $club_url;
    }
     public function getTwitterClub(){
        return $this->twitter; 
    }
     public function setTwitterClub($twitter){
        $this->twitter = $twitter;
    }
    public function getTwitterHashtag(){
        return $this->twitter_hashtag;
    }      
    public function setTwitterHashtag($twitter_hashtag){
        $this->twitter_hashtag = $twitter_hashtag;
    }
       public function getFacebook(){
        return $this->facebook; 
    }
     public function setFacebook($facebook){
        $this->facebook = $facebook;
    }
       public function getYearFunded(){
        return $this->year_founded; 
    }
     public function setYearFounded($year_founded){
        $this->year_founded = $year_founded;
    }
       public function getDescription(){
        return $this->description; 
    }
     public function setDescription($description){
        $this->description = $description;
    }
      public function getClubColor1(){
        return $this->club_color1; 
    }
     public function setClubColour1($club_color1){
        $this->club_color1 = $club_color1;
    }
          public function getClubColor2(){
        return $this->club_color2; 
    }
     public function setClubColor2($club_color2){
        $this->club_color2 = $club_color2;
    }
          public function getPlayers(){
        return $this->players; 
    }
     public function setPlayers($players){
        $this->players = $players;
    }
          public function getGamesPlayed(){
        return $this->games_played; 
    }
     public function setGamesPlayed($games_played){
        $this->games_played = $games_played;
    }
          public function getPoints(){
        return $this->points; 
    }
     public function setPoints($points){
        $this->points = $points;
    }
          public function getGoalsHome(){
        return $this->goals_home; 
    }
     public function setGoalsHome($goals_home){
        $this->goals_home = $goals_home;
    }
          public function getGoalsAway(){
        return $this->goals_away; 
    }
     public function setGoalsAway($goals_away){
        $this->goals_away = $goals_away;
    }
        public function getLeagueId(){
        return $this->league_id; 
    }
     public function setLeagueId($league_id){
        $this->league_id = $league_id;
    }
    

    public function getGoalDifference(){
        return $this->getGoalsHome()-$this->getGoalsAway();   
    }
    
    public function getClubPageLink(){
        return '<a href="'. $this->getClubUrl().'"> '. $this->getName().'</a>';
    }
    
    public function printLogo(){
        echo '<img src="media/pics/logos/' . $this->club_url . '.png" width="50%" vertical-align="center"/>';
    }
    public function printHeaderLogo(){
        echo '<img src="media/pics/headerLogo/' . $this->club_url . '.png" width="50%" vertical-align="center"/>';
    }
    public function printTeamPicture(){
        echo '<img src="media/pics/players/' . $this->club_url . '.jpg" width="450" />';
    }
    
   public function getSimpleClubName(){
        return $this->club_url; 
    }
    
    public function printMatches(){
        $limitMatches = 5;
        
         echo' <div class="well">
            <table class="table table-bordered" align="middle" width="50%" vertical-align="center">
                <thead>
                    <tr>
                        <th>Tid</th>
                        <th>Lag</th>
                        <th>Kanal</th>
                    </tr>
                </thead>
                <tbody>';
        
        for($i = 0; $i < $limitMatches; $i++){
               echo '<tr> 
                    <td> 21:00 </td>
                    <td> Brann - Sogndal </td>
                    <td> Tv2 </td>
                    </tr>';
        }
        echo '</tbody> </table> </div>';
    }
    
    public function printTwitterClub(){
        echo $this->getTwitterClub();
    }
    
    public function printTwitterHashtag(){
        echo $this->getTwitterHashtag();
    }
    public function printHistory(){
        
    }
    
    public function printPlayers(){
        
    }  
    
    public function printFunfacts(){
        
    }
    
    
	public function saveInDB(){
		mysql_query("INSERT INTO clubs VALUES('$this->club_id','$this->club_name','$this->twitter','$this->facebook','$this->year_founded','$this->description','$this->club_color1','$this->club_color2','$this->players','$this->games_played','$this->points','$this->goals_home','$this->goals_away' ,'$this->league_id', '$this->twitter_hashtag')");
	}
}




?>