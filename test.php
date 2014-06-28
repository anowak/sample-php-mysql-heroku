<?php
require_once("sql.php");
class SQLTest extends PHPUnit_Framework_TestCase {
  public function test() {
    $sql = new SQL();
    $doc = $sql->main();
    $this->assertNotEquals($doc, false);
  }
}
?>

