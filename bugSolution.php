function foo(array $arr) {
  for ($i = 0; $i < count($arr); $i++) {
    try {
      // Some code that might throw an exception
    } catch (Exception $e) {
      error_log("Exception caught in foreach loop: " . $e->getMessage());
      // Handle the exception, optionally continue processing
    }
  }
}