<?php 
namespace main\news;

    class Page{

        protected $content;


        function setContent($content){
            $this->content = $content;
            return true;
        }
    }


    class Section extends Page{

        function setContent($content){
            $this->content = strtoupper($content);
            return true;
        }

        function setContent2($content){
            parent::setContent($content);
        }

        function showContent(){
            echo"
            <h1>{$this->content}</h1>
            ";
        }
    }
    $section1 = new Section();
    // $section1->setContent("testing sections");
    // $section1->showContent();

    //$mainPage = new Page();
    
    // if($mainPage->setContent("abra kadabra")){
    //     echo "success <br>";
    // }

    //var_dump($section1);


    class News {
        function __construct($title,$date){
            $this->title = $title;
            $this->date = $date;
        }

        function showNews(){
            echo "<h1>{$this->title}</h1>";
            echo "<p>{$this->date}</p>";
        }
    }

    class mainNews extends News{
        function __construct($title,$date,$author){
            parent:: __construct($title,$date);

            $this->author=$author;
        }
    }

    $news = new News("History of USSR", "21.03.22");
    $news1 = new mainNews("History of USA", "21.03.22", "Lenin");

    // $news->showNews();
    // $news1->showNews();


    // var_dump($news);
    // var_dump($news1);
?>
