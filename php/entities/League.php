<?php
class League{
	private $league_id;
	private $name;
    
	public function __construct($league_id){
		$this->league_id = $league_id;
		$constructQueryOfLeagues = mysql_query("SELECT * FROM leagues WHERE league_id = '$league_id'");
        
		while($constructRowOfLeagues = mysql_fetch_array($constructQueryOfLeagues)){
			$this->name = $constructRowOfLeagues['name'];
		}
	}
    
    public function printLeagueTable(){
        $queryOfAllClubs = mysql_query("SELECT club_id FROM clubs WHERE league_id = '$this->league_id' ORDER BY points DESC");
        
        echo '   <div class="row">
        <table class="table table-bordered" align="center" style="width:50%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Lag</th>
                    <th>Kamper</th>
                    <th>Målforskjell</th>
                    <th>Poeng</th>
                </tr>
            </thead>
            <tbody>';
        $possition = 1;
        
        while($rowOfClubs = mysql_fetch_array($queryOfAllClubs)){
        $tdType = '';
            
            $club = new Club();
            $club->constructWithClub_id($rowOfClubs['club_id']);
            
        if ($possition == 1){
            $tdType = 'class="success"';   
        }
        
        else if ($possition == sizeof($rowOfClubs) || $possition == sizeof($rowOfClubs) - 1){
            $tdType = 'class="danger"';
        }
        else if ($possition == sizeof($rowOfClubs) - 2){
            $tdType = 'class="warning"';
        }
            echo "<tr " . $tdType . "> <td>" . $possition . "</td>";
            echo "<td>" . $club->getClubPageLink() . "</td>";
            echo "<td>" . $club->getGamesPlayed() . "</td>";
            echo "<td>" . $club->getGoalDifference() . "</td>";
            echo "<td>" . $club->getPoints() . "</td>";

            echo "</tr>";
            $possition++;
        }
        echo "</tbody></table>";
    }
    

    
    public function getName(){
        return $this->name; 
    }

    public function setName($name){
        $this->name = $name;
    }
    
	public function saveInDB(){
		mysql_query("INSERT INTO leagues VALUES('$this->league_id','$this->name')");
	}
}




?>