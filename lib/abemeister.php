<?php

class abemeister {

  public function admin() {
    $current = isset($_GET['tab']) ? $_GET['tab'] == "" ? null : $_GET['tab'] : null;
    echo "<div class=\"wrap\">";
    echo "<h2>Abemeister Settings</h2>";
    echo "<div class=\"notice notice-success\"><em>Use these pages to further customize your website or blog. If you have any suggestions, feel free to open an issue on GitHub.</em></div>";
    $tabs = array( '' => 'General', 'social' => 'Social Connections' );
    echo '<div id="icon-themes" class="icon32"><br></div>';
    echo '<div class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? ' nav-tab-active' : '';
        echo "<a class='nav-tab$class' href='?page=abemeister&tab=$tab'>$name</a>";
    }
    echo '</div>';
    echo "</div>";
  }

  public function social() {
    echo 'test';
  }

  public function social2() {
    echo 'test2';
  }


}
