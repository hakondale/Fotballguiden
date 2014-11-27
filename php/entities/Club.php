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
    
    
    //$this->getAllLogos();
    

    
    
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
        return " <p> Sportsklubben Brann ble stiftet 26. september 1908, på Johnsens Cafe (som lå omtrent der Telegrafbygget ligger i dag). Den som tok intiativ til dette, var Christen K. Gran, og sammen med han var Birger Gjestland, Hans Larsen, Inggard Ellerstsen, Hans K. Gran, Lars Gran, Chr. Borch, Erling Lothe, Herman Mathiesen og Sverre Sturlung. </p<

<p> Klubbens navn ble da Ski og Fotboldklubben Brann, etter forslag fra Birger Gjestland. Hans larsen ble klubbens første formann. </p>

<p>Branns aller første kamp ble spilt 1. januar 1909 mot Bergens fotballklubb, og endte med uavgjort 1 – 1.  Den første seieren kom i august samme år, da klubben vant 3 – 2 mot Stavanger Idrettsforening.  Stavanger var også motstander første gang brann deltok i NM. 14. september 1913 tapte brann mot siddisene.</p>



<p>1917 var det virkelig store gjennombruddsåret for Brann. Klubben kom helt til finalen i NM, der de gikk på et 4 -1 tap mot Sarpsborg. Det var også dette året brann sikret seg arealet der vår kjære stadion står i dag. Den 25 mai var det innvielseskamp på Stadion mot landslaget, og brann tapte 2 – 6, ikke overraskende i øsende regnvær. Det var også i 1917 brann fikk enda en ny idrettsgren på Stadion, nemlig friidrett. Året etter holdt klubben NM i friidrett på Brann stadion, og de vant tre av øvelsene.</p>

<p>Det har vært mer enn bare fotball i klubben. Det har blandt annet vært avdelinger for ishockey, bordtennis og håndball. I 1922 ble brann faktisk kretsmestere i ishockey. Per i dag er det bare fotball som er i fokus for klubben. </p>";
    }
    
    public function printTeam1(){
        echo ' 
        
        <div class="row">
            <table align="center" style="width:50%">
                <thead>
                    <tr>
                    </tr>
                </thead>
            </div>
                <tbody>
                    ';
        
        for($i=0; $i < 6; $i++){
           
           
                echo '<td align= "center"> <img src="http://fotballguiden.nu/media/pics/logos/brann.png"  width="100" vertical-align="middle" > </a> </td> 
                <tr> </tr>
                </tbody> ';

    }  
    }  
    
     public function printTeam(){
        echo ' <p>
                    <img src="http://cache.images.globalsportsmedia.com/perform/norway/150x150/39510.png">
                </p>';
     }
    
    public function printTrivia(){
        return "
                <p> <b> Top spillere: </b> </p>
                <p> Rolf Birger Pedersen har scoret flest mål for brann med 132 mål i perioden 1957-68, 1972 </p>
                <p>Alexander Olsen har spillt flest landskamper i brann med 37 kamper </p>
                <p> <b> Meritter:  </b> </p>
                <p>Seriemestere:1961-62, 1963 og 2007.</p>
                <p>Cupmestere: 1923, 1925, 1972, 1976, 1982 og 2004.</p>
                <p>Cupvinnercupen: Kvartfinale 1996–97 Slo blant annet PSV Eindhoven.</p>
                <p>UEFA-cupen: 32-dels finale 2007</p>
                <p>Mesterligaen : 3.kvalifiseringsrunde 2008</p>
                <p>Royal League: Kvartfinale 2006-07</p>
                <p>Intertoto cup : 1. runde 1999</p>";
    }
    
    
    
    
    public function printAccordion(){
     echo '<br>
     <div class="panel-group" id="accordion" aria-multiselectable="true">
     
  <div class="panel panel-default "> 
    <div class="panel-heading">
      <h4 class="panel-title">
       <a  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" data-target="#collapseOne" align="center">
        <span class="glyphicon glyphicon-chevron-down"></span> <b>    Historie    </b> <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="history">
      <div class="panel-body">
        ' . $this->printHistory() . '
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="team">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" align="center">
         <span class="glyphicon glyphicon-chevron-down"></span> <b>    Spillere    </b> <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="team">
      <div class="panel-body">
        ' . "a" .  '
      </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="trivia">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" align="center">
         <span class="glyphicon glyphicon-chevron-down"></span> <b>      Trivia      </b> <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="trivia">
      <div class="panel-body">
        ' . $this->printTrivia() . '
      </div>
    </div>
  </div>
  
</div>'; 
    }
    
    
	public function saveInDB(){
		mysql_query("INSERT INTO clubs VALUES('$this->club_id','$this->club_name','$this->twitter','$this->facebook','$this->year_founded','$this->description','$this->club_color1','$this->club_color2','$this->players','$this->games_played','$this->points','$this->goals_home','$this->goals_away' ,'$this->league_id', '$this->twitter_hashtag')");
	}
}




?>

<a href="http://jquery.com/"></a>
    <script src="jquery.js"></script>
    <script>
        
    $('.scrollToBottom').click(function () {
     $('html, body').animate({scrollTop:$(document).height()}, 'slow');
    return false;
    });
        
    </script>

