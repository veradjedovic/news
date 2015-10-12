<?php 
class HomeController extends Controller{
	public $layout = "home_layout";
        
	public function index(){
            
            /****************************
             * $allCategories niz podataka iz tabele main_cats 
             * $articles niz podataka iz pogleda viewArticles
             * $data niz - zbir svih nizova. Redosled MORA da ostane nepromenjen!!
             * Dodavanje novog niza u $data mora da ide po redu na poslednje mesto!!
             ******************************/
            
            
            $articlesWorld = ViewArticles::getAll("WHERE main_cat_name='World' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $articlesPolitics = ViewArticles::getAll("WHERE main_cat_name='Politics' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $articlesBusiness = ViewArticles::getAll("WHERE main_cat_name='Business' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $articlesCulture = ViewArticles::getAll("WHERE main_cat_name='Culture' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $articlesTech = ViewArticles::getAll("WHERE main_cat_name='Tech' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $articlesSports = ViewArticles::getAll("WHERE main_cat_name='Sports' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $articlesHelth = ViewArticles::getAll("WHERE main_cat_name='Health' and article_status='1' and article_index_status='1' order by `article_time` desc limit 3");
            $slider = ViewArticles::getAll("WHERE article_status='1' and article_slider_status ='1' order by `article_time` desc limit 4");
            
            $data = array($articlesWorld,$articlesPolitics,$articlesBusiness,$articlesCulture,$articlesTech,$articlesSports,$articlesHelth,$slider);
            $this->loadView("home_page",$data);
        }
        
        
        public function World(){
              $articlesEurope = ViewArticles::getAll("WHERE cat_name='Europe' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $articlesAmericas = ViewArticles::getAll("WHERE cat_name='Americas' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $articlesMiddleEast = ViewArticles::getAll("WHERE cat_name='Middle East' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $articlesAsia = ViewArticles::getAll("WHERE cat_name='Asia Pacific' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $articlesAfrica = ViewArticles::getAll("WHERE cat_name='Africa' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $top_story = ViewArticles::getAll("WHERE main_cat_name='World' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 1");
              $data = array($articlesEurope,$articlesAmericas,$articlesMiddleEast,$articlesAsia,$articlesAfrica,$top_story);
              
              $this->loadView("world",$data);
         }
        
         public function Politics(){
              $articlesWorldPolitics = ViewArticles::getAll("WHERE cat_name='World Politics' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $articlesDomesticPolitics = ViewArticles::getAll("WHERE cat_name='Domestic' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              $topStory = ViewArticles::getAll("WHERE main_cat_name='Politics' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 1");
      
              $data = array($articlesWorldPolitics,$articlesDomesticPolitics,$topStory);
              $this->loadView("politics",$data);
         }
         
	public function Business(){
              $articlesInternational = ViewArticles::getAll("WHERE cat_name='International' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
              $articlesEconomy = ViewArticles::getAll("WHERE cat_name='Economy' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
              $articlesEnergy = ViewArticles::getAll("WHERE cat_name='Energy' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3 ");
			  
              $articlesSmallBusiness = ViewArticles::getAll("WHERE cat_name='Small Business' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              
			  $articlesYourMoney = ViewArticles::getAll("WHERE cat_name='Your Money' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
			  $topStory = ViewArticles::getAll("WHERE main_cat_name='Business' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 1");
			  
              $data = array($articlesInternational,$articlesEconomy,$articlesEnergy,$articlesSmallBusiness,$articlesYourMoney,$topStory);
            $this->loadView("business",$data);
         }
         
         public function culture(){
              $articlesBooks = ViewArticles::getAll("WHERE cat_name='Books' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
              $articlesTheater = ViewArticles::getAll("WHERE cat_name='Theater' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
              $articlesMovies = ViewArticles::getAll("WHERE cat_name='Movies' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
              
			  $articlesArt = ViewArticles::getAll("WHERE cat_name='Art' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
			  $topStory = ViewArticles::getAll("WHERE main_cat_name='Culture' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 1");
			  
              $data = array($articlesBooks,$articlesTheater,$articlesMovies,$articlesArt,$topStory);
			  
			  $this->loadView("culture",$data);
         }
         
        public function tech(){
			$articlesMobile = ViewArticles::getAll("WHERE cat_name='Mobile' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
			$articlesComputers = ViewArticles::getAll("WHERE cat_name='Computers' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
			$articlesApps = ViewArticles::getAll("WHERE cat_name='Apps' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
           $topStory = ViewArticles::getAll("WHERE main_cat_name='Tech' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 6");
		   
           $data = array($articlesMobile,$articlesComputers,$articlesApps,$topStory);
		   
           $this->loadView("tech",$data);
         }
         
         
        public function sports(){
            $articlesFootball = ViewArticles::getAll("WHERE cat_name='Football' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
			$articlesSocker = ViewArticles::getAll("WHERE cat_name='Socker' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
			$articlesBasketball = ViewArticles::getAll("WHERE cat_name='Basketball' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
			$articlesHockey = ViewArticles::getAll("WHERE cat_name='Hockey' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			
			$articlesTennis = ViewArticles::getAll("WHERE cat_name='Tennis' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 4");
			
			$topStory = ViewArticles::getAll("WHERE main_cat_name='Sports' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 1");
			
            $data = array($articlesFootball,$articlesSocker,$articlesBasketball,$articlesHockey,$articlesTennis,$topStory);
			
            $this->loadView("sports",$data);
       
         }
         
         public function health(){
              $articlesWell = ViewArticles::getAll("WHERE cat_name='Well' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
              $articlesMoneyPolicy = ViewArticles::getAll("WHERE cat_name='Money & Policy' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
              $articlesHealthGuide = ViewArticles::getAll("WHERE cat_name='Health Guide' and article_status='1' and article_category_page_status='1' order by `article_time` desc limit 3");
			  
			  $topStory = ViewArticles::getAll("WHERE main_cat_name='Health' and article_status='1' and main_category_top_story='1' order by `article_time` desc limit 1");
			  
			  
              $data = array($articlesWell,$articlesMoneyPolicy,$articlesHealthGuide,$topStory);
             $this->loadView("health",$data);
         
         }    
}