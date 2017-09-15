function_autoload($class) {

  $class = strtolower($class);

  $classpath = 'classes/class.'.$class . 'php';
  if ( file_exists($classpath)) {
    require_once $classpath;
  }

  $classpath = '../classes/class.'.$class . '.php';
  if( file_exists($classpath)) {
    require_once $classpath;
  }
}

$user = new User($db);
