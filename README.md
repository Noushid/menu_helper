#menu_helper

use of menu helper

->define your menu
example ->
protected $menu = [
        'home' => [
            'title' => 'Home',
            'class' => 'menu'
        ],
        'about' => [
            'title' => 'About',
            'class' => '<your class>'
        ],
        'service' => [
            'title' => 'Service'
        ]
    ]; 
    
  
  
  call render function
  $menu = render_menu($this->menu, your class, current class));
