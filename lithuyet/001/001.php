<?php
class Test extends Exception{}

try {

throw new Test();
} catch (Test $t) {

echo("Got the Test Exception");
} finally {

echo("Inside finally block ");
}

