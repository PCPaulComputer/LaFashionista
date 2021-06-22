<?php
/**
 * Author: Paul Madduma
 * 
 * Code for Subscribe
 */
?>
<?php 
class Subscribe{
    public $email_check;

    /**
     * subscribe_email method to show the output after user successfully input proper email format
     */
    public function subscribe_email(){
      $this->email_check = isset($_POST['submit']);
      if($this->email_check){
        $email = htmlspecialchars($_POST["emailad"]);
        echo '<h6>'.$email.'</h6>';
      } else {      
        $input = '<input type="text" name="emailad" placeholder="name@address.com" class="c-input-text">
        <div class="u-mar-t-1x">
            <input type="submit" name="submit" value="Subscribe" class="c-btn c-btn-submit">
        </div>';
        echo '<div>'. $input .'</div>';
      }
    }

    /**
     * active_page method shows the active page in the navigation menu
     */
    public function active_page($page){
      if($_GET['page'] === $page) { 
        if($page === 'women' || $page === 'men' 
        || $page === 'lifestyle' || $page === 'culture'){
          return 'nav-active'; 
        }        
      } else {
        return '';
      }
    }

    /**
     * default_page method similar to active_page role but refers to the landing page
     */
    public function default_page(){
      if(!isset($_GET['page']) || $_GET['page'] === 'cities') { 
          return 'nav-active'; 
      } else {
        return '';
      }
    }

    public function date_update(){
      return date('Y');
    }
}
?>