<?php
class News{
    private $league_id;
    private $news_source;
	private $news_id;
    private $news_title;
    private $news_picture;
    private $news_bread;
    private $news_preview;
    private $news_url;
    
	public function constructWithNews_id($news_id){
		$this->news_id = $news_id;
		$constructQueryOfNews = mysql_query("SELECT * FROM newss WHERE news_id = '$news_id' ");
        //AND SELECT * FROM recharge ORDER BY sno DESC LIMIT 5
        
		while($constructRowOfNews = mysql_fetch_array($constructQueryOfNews)){
            
			$this->league_id = $constructRowOfNews['league_id'];
			$this->news_source = $constructRowOfNews['news_source'];
			$this->news_id = $constructRowOfNews['news_id'];
			$this->news_title = $constructRowOfNews['news_title'];
			$this->news_picture = $constructRowOfNews['news_picture'];
			$this->news_bread = $constructRowOfNews['news_bread'];
			$this->news_preview = $constructRowOfNews['news_preview'];
			$this->news_url = $constructRowOfNews['news_url'];
            
		}
	}
    
    public function getNewsSource(){
        return $this->news_source; 
    }
    public function setNewsSource($news_source){
        $this->news_source = $news_source;
    }

    public function getNewsTitle(){
        return $this->news_title; 
    }
    public function setNewsTitle($news_title){
        $this->news_title = $news_title;
    }
    
    
    public function getNewsPicture(){
        return $this->news_picture; 
    }
     public function setNewsPicture($news_picture){
        $this->news_picture= $news_picture;
    }
    
    
    public function getNewsBread(){
        return $this->news_bread;
    }
    public function setNewsBread($news_bread){
        $this->news_bread = $news_bread;
    }
    
    
    public function getNewsPreview(){
        return $this->news_preview;   
    }
    public function setNewsPreview($news_preview){
        $this->news_preview = $news_preview;
    }
     
    public function getNewsUrl(){
        return $this->news_url;   
    }
    public function setNewsUrl($news_url){
        $this->news_url = $news_url;
    }
    
    public function getNewsImageSize(){
        return 500;
    }
    
    
	public function saveInDB(){
		mysql_query("INSERT INTO newss VALUES('$this->league_id','$this->news_source','$this->news_id','$this->league_id','$this->news_title' ,'$this->news_bread','$this->news_preview','$this->news_url')");
	}
}

?>
<script type="text/javascript">
    
    function overlayImage(element, src, alt) {
       var
          div = document.createElement('div'),
          img = new Image();
       element.parentElement.insertBefore(div, element); 
       div.style.display = 'inline-block'; 
       div.style.position = 'relative';
       div.appendChild(element);
       img.src = src;
       img.alt = alt;
       img.style.position = 'absolute';
       img.style.right = 0;
       img.style.top = 0;
       div.appendChild(img);
    }
    
</script>

