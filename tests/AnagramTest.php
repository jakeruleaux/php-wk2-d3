<?php

    require_once "src/Anagram.php";

    class AnagramMakerTest extends PHPUnit_Framework_TestCase
    {
        function test_makeAnagram_one()
        {
            $test_AnagramMaker = new AnagramMaker;
            $input = "red";

            $result =
            $test_AnagramMaker->makeAnagram($input);

            $this->assertEquals("der", $result);
        }

        function test_makeAnagram_two()
        {

          $test_AnagramMaker = new AnagramMaker();
          $input = "edr, red";

          $result = $test_AnagramMaker->makeAnagram($input);

          $this->assertEquals(['der'], ['der'], $result);
        }

        function test_compareTheShit()
        {

          $test_AnagramMaker = new AnagramMaker();
          $input1 = "der";
          $input2 = 'der';

          $result =
          $test_AnagramMaker->makeAnagram($input1, $input2);

          $this->assertEquals('der', $result);
        }
    }

 ?>
