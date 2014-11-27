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

        public function printMatchesTable(){
            $queryOfMatches = mysql_query("SELECT match_id FROM matches WHERE league_id = '$this->league_id' ORDER BY match_date, match_time DESC"); 
            
            echo ' <div class="row">
            <table class="table table-bordered set-bg" align="center" style="width:50%">
                <thead>
                    <tr>
                        <th>Dato</th>
                        <th>Tid</th>
                        <th>Lag</th>
                        <th>Kanal</th>
                    </tr>
                </thead>
                <tbody>';
    
            while($rowOfMatches = mysql_fetch_array($queryOfMatches)){

            $match = new Match();
            $match->constructWithMatch_id($rowOfMatches['match_id']);

             echo "<tr><td>" .  $match->getDate() . "</td>";
             echo "<td>" . $match->getTimeTrimmed() . "</td>";
             echo "<td>" . $match->getTeams() . "</td>";
             echo "<td>" . $match->getChannel() . "</td>";

            echo '</tr>';
        }
            echo '</tbody> </table>'; 
    }

    public function printLeagueTable(){ 
        $queryOfAllClubs = mysql_query("SELECT club_id FROM clubs WHERE league_id = '$this->league_id' ORDER BY points DESC");
        
        echo '   
        
        <div class="table-container">
        <table class="table table-responsive table-bordered set-bg" align="center" style="width:50% ">
            <thead>
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Lag</th>
                    <th>Kamper</th>
                    <th>Målforskjell</th>
                    <th>Poeng</th>
                </tr>
            </tbody>    
            </thead>
            ';
        
        
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
        echo "</div></tbody></table>";
    }
    
    public function printAllClubLogos(){ 
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
    
    public function printNews(){
        $queryOfNews = mysql_query("SELECT news_id FROM newss WHERE league_id = '$this->league_id' ORDER BY news_id DESC");
        echo '
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-8" role="main">

                    <div class="jumbotron">
        ';
        

        $index = 0;

        while($rowOfNews = mysql_fetch_array($queryOfNews)){
        ?>


        <?php
            

            $news = new News();
            $news->constructWithNews_id($rowOfNews['news_id']);
            echo '
                        
                        
                        
                        <h2><img class="bottom" src="' . $news->getNewsSource() . ' " width="30px" ><b> ' . $news->getNewsTitle() . ' </b></h2>
                    
                        <pp hidden><img id="overlay" src="' . $news->getNewsSource() . '" ></pp>
                        <p><img id="base" src="' . $news->getNewsPicture() . '" width=" ' . $news->getNewsImageSize() . '"></p>
                        
                        '; ?> 
                           
                        <?php $index++; echo '
            
    
                        
                        <h5> <b>' . $news->getNewsBread() . ' </b></h5>
                        <pp> ' . $news->getNewsPreview() . '<a href=" ' . $news->getNewsUrl() . ' ">Les mer</a> </pp>
            
                    <p> </p>
            ';
        }
        echo '
                    </div>
                </div>
            </div>
            ';

    }
    
    public function getAllLogos(){
        return printAllClubLogos();
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