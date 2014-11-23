<?php

class Teams{
	private $player_id;
	private $league_id;
    private $player_picture;
    private $player_desc;
    private $player_team;
    
	public function constructWithTeamId($player_id){
		$this->player_id = $player_id;
		$constructQueryOfTeam = mysql_query("SELECT * FROM teams WHERE player_id = '$player_id'");
        
		while($constructrowOfPlayers = mysql_fetch_array($constructQueryOfTeam)){
			$this->player_id = $constructrowOfPlayers['player_id'];
			$this->league_id = $constructrowOfPlayers['league_id'];
			$this->player_picture = $constructrowOfPlayers['player_picture'];
			$this->player_desc = $constructrowOfPlayers['player_desc'];
            $this->player_team = $cunstructrowOfPlayers['player_team'];
		}
	}
    
    public function constructWithClub_url($club_url){
		$this->club_url = $club_url;
		$constructQueryOfClubs = mysql_query("SELECT * FROM clubs WHERE club_url = '$club_url'");
        
        while($constructrowOfPlayers = mysql_fetch_array($constructQueryOfTeam)){
			$this->player_id = $constructrowOfPlayers['player_id'];
			$this->league_id = $constructrowOfPlayers['league_id'];
			$this->player_picture = $constructrowOfPlayers['player_picture'];
			$this->player_desc = $constructrowOfPlayers['player_desc'];
            $this->player_team = $cunstructrowOfPlayers['player_team'];
		}
    }
    
    
    public function getPlayerPicture(){
        return $this->player_picture; 
    }
    public function setPlayerPicture($player_picture){
        $this->player_picture = $player_picture;
    }
    
    
    public function getPlayerDesc(){
        return $this->player_desc; 
    }
     public function setPlayerDesc($player_desc){
        $this->player_desc = $player_desc;
    }
    
    
    public function getPlayerTeam(){
        return $this->player_team;
    }
    public function setPlayerTeam($player_team){
        $this->player_team = $player_team;
    }
    


public function printAllTeamPictures(){ 
       echo '
       
       $queryOfAllTeams = mysql_query("SELECT player_id FROM teams WHERE league_id = '$this->league_id' ORDER BY player_id DESC");
       
            <div class="row">
            <table align="center" style="width:50%">
                <thead>
                    <tr>
                    </tr>
                </thead>
            </div>
                <tbody>
                    '; 
        $maxteller = 5;
        $minteller = 0;
        
        for($i=0; $i < 4; $i++){
            $queryOfAllClubs = mysql_query("SELECT club_id FROM clubs WHERE league_id = '$this->league_id' AND club_id < '".$maxteller."' AND club_id > '".$minteller."' ORDER BY club_id DESC");
            while($rowOfClubs = mysql_fetch_array($queryOfAllClubs)){
                $club = new Club();
                $club->constructWithClub_id($rowOfClubs['club_id']);
                echo '<td align= "center"><a href=/club.php?club=' . $club->getSimpleClubName() . '> <img src="http://fotballguiden.nu/media/pics/logos/' . $club->getSimpleClubName() . '.png"  width="100" vertical-align="middle" > </a> </td>'; 
            }
            $maxteller +=4;
            $minteller +=4;
            echo '<tr> </tr>';
        }
        echo ' </tbody> ';

    }
    
	public function saveInDB(){
		mysql_query("INSERT INTO teams VALUES('$this->player_id','$this->league_id','$this->player_picture' ,'$this->player_desc', '$this->player_team')");
	}
}

?>