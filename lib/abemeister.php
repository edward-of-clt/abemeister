<?php

class abemeister {

  public function admin() {
    $current = isset($_GET['tab'])
                ? ($_GET['tab'] == "")
                      ? null
                      : $_GET['tab']
                : null;
    echo "<div class=\"wrap\">";
    echo "<h2>Abemeister Settings</h2>";
    echo "<p><em>Use these tabs to further customize your website or blog. If you have any suggestions, feel free to open an issue on GitHub.</em></p>";
    $tabs = array( '' => 'General', 'social' => 'Social Connections' );
      echo '<div class="nav-tab-wrapper">';
      foreach( $tabs as $tab => $name ){
          $class = ( $tab == $current ) ? ' nav-tab-active' : '';
          echo "<a class='nav-tab$class' href='?page=abemeister&tab=$tab'>$name</a>";
      }
      echo '</div>';
      echo "<div class=\"wrap\">";

      if(is_null($current)) {
        print_r($this->page_general());
      }

      echo "</div>";
    echo "</div>";
  }

  public function page_general() {
    echo "test content";
  }


}
