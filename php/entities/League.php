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

        public function printMatchTable(){
            $queryOfMatches = mysql_query("SELECT match_id FROM clubs WHERE league_id = '$this->league_id' ORDER BY match_time DESC"); 
            
            echo' <div class="row">
            <table class="table table-bordered" align="center" style="width:50">
                <thead>
                    <tr>
                        <th>Tid</th>
                        <th>Lag</th>
                        <th>Kanal</th>
                    </tr>
                </thead>
                <tbody>';
    
            while($rowOfMatches = mysql_fetch_array($queryOfAllClubs)){

            $match = new Match();
            $match->constructWithMatch_id($rowOfMatches['club_id']);

             echo "<tr> <td>" . $match_time . "</td>";
             echo "<tr> <td>" . $match_teams . "</td>";
             echo "<tr> <td>" . $match_channel . "</td>";

            echo "</tr>";
        
        }
        echo "</tbody></table>"; 
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
        
        else if ($possition == 16 || $possition == 15){
            $tdType = 'class="danger"';
        }
        else if ($possition == 14){
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