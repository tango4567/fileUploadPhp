<?php
/******                
 * 18
 *****/
function logMessage($message){
    global $amount_of_logs;
    $amount_of_logs += 1;
    $GLOBALS['amount_of_logs'] += 1;
    echo $message."<br>";
}

logMessage('log_message');
logMessage('log_message_1');
logMessage('log_message_2');
logMessage('log_message_3');

/******                
 * 17
 *****/
class Test{
//    public static int $counter = 0;
    public static function getInstance(){
        static $instance;
        if(!$instance){
            $instance = new Test();
        }
        return $instance;
    } 
}

$instance1 = Test::getInstance();
$instance2 = Test::getInstance();
var_dump($instance1 === $instance2);

/******
 * 17
 *****/
function getPostValue($key, $default = NULL){
    if(isset($_POST[$key])){
        return $_POST[$key];
    }
    return $default;
}
echo getPostValue('tango');

/******
 * 16
 *****/
strpos($haystack, $needle);
$idx = substr($haystack, $needle);
if($idx === false){
    printf("If");
}else{
    printf("Else");
}

if($idx !== false){
    printf("If");
}else{
    printf("Else");
}

/******
 * 15
 *****/
$var = null;
$var_is_null = $var !== null;
echo "<br>". printf($var_is_null)."<br>";
$var_is_true = $var !== true;
echo "<br>". printf($var_is_true)."<br>";
$var_is_false = $var !== false;
echo "<br>". printf($var_is_false)."<br>";

$var = null;
$var_is_null = $var === null;
echo "<br>". printf($var_is_null)."<br>";
$var_is_true = $var === true;
echo "<br>". printf($var_is_true)."<br>";
$var_is_false = $var === false;
echo "<br>". printf($var_is_false)."<br>";

$var = '0';
$var_is_true = ($var == true);
echo "<br>". printf($var_is_true)."<br>";
$var_is_false = ($var == false);
echo "<br>".printf($var_is_true)."<br>";

$var = '-0';
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";
$var_is_false = ($var == false);
echo "<br>".printf($var_is_true)."<br>";

$var = NAN;
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";
$var_is_false = ($var == false);
echo "<br>".printf($var_is_true)."<br>";

echo ($value ? "true\n" : "false\n");

$var = null;
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";

$var = '';
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";

$var_is_false = ($var == false);
echo "<br>".printf($var_is_true)."<br>";

$var = '  ';
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";

$var_is_false = ($var == false);
echo "<br>".printf($var_is_true)."<br>";

$var = -1;
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";

$var = 99;
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";

$var = 0;
$var_is_true = ($var == true);
echo "<br>".printf($var_is_true)."<br>";


/******
 * 14
 *****/
var_dump($value);
echo ($value ? "true\n" : "false\n");
$value_str .= 'abc';
var_dump($value_str);
$value_int +=25;
var_dump($value_int);
$value_float +=1.25;
var_dump($value_float);
$value_arr[3] = "def";
var_dump($value_arr);
$value_obj->foo = 'bar';
var_dump($value_obj);

/******
 * 13
 *****/
echo"\n";
var_dump($_GLOBALS);
echo"\n===================================================================\n";
var_dump($_SERVER);
echo"\n===================================================================\n";
var_dump($_POST);
echo"\n===================================================================\n";
var_dump($_GET);
echo"\n===================================================================\n";
var_dump($_FILES);
echo"\n===================================================================\n";
var_dump($_ENV);
echo"\n===================================================================\n";
var_dump($_REQUEST);
echo"\n===================================================================\n";
var_dump($_COOKIE);
echo"\n===================================================================\n";
var_dump($_SESSION);
echo"\n===================================================================\n";

/******
 * 12
 *****/
function foo(\Bar $bob){
    $bob->something();
}

/******
 * 11
 *****/
function testSomeThing(){
    global $dbConnector;
    $backup = $dbConnector; //create BackUp
    $dbConnector = Mock::create('DBConnector'); //Override
    assertTrue(foo());
    $dbConnector = $backup; //Restore
}

/******
 * 10
 *****/
function foo(){
    global $bob;
    $bob->doSomething();
}

/******
 * 9
 *****/
echo gettype(1)."<br/>";
echo gettype(true)."<br/>";

/******
 * 8
 *****/
$fp = fopen('file.ext', 'r');
var_dump($fp);

/******
 * 7
 *****/

$foo = new stdClass();
$foo->bar = "baz";
echo $foo->bar."<br/>";
$quux = (object)["foo" => "bar"];
echo $quux->foo."<br/>";

/******
 * 6
 *****/
$foo = -3;
echo $foo."<br/>";
$foo = 0;
echo $foo."<br/>";
$foo = 123;
echo $foo."<br/>";
$foo = 0xAB;
echo $foo."<br/>";
$foo = 0b1010;
echo $foo."<br/>";
var_dump(0123, 0xAB, 0b1010);
echo "<br/>";
$foo = array(1,2,3);
echo $foo[1]."<br/>";
$bar = ["A", true, 123=> 5];
echo $bar[123]."<br/>";

$array = array();
$array["foo"] = "bar";
$array["baz"] = "quux";
$array[42] = "hello";
echo $array["foo"]."<br/>";
echo $array["baz"]."<br/>";
echo $array[42]."<br/>";

/******
 * 5
 *****/

class Test{
    public function __construct() {
        $functionName = 'doSomething';
        $this->$functionName('Hello Wolrd');
    }
    
    private function doSomething($passValue){
        echo $passValue;
    }
}
$test = new Test();

$fooBar = 'baz';
$varPrefix = 'foo';
echo $fooBar;
echo $varPrefix. 'Bar';

/******
 * 4
 *****/

function add($a, $b){
    return $a+$b;
}

function validateEmail($checkEmail){
    return filter_var($checkEmail, FILTER_VALIDATE_EMAIL);
}

$variableName = 'foo';
$foo = 'bar';
$email = "admin@tarunmahajan.com";
$email2 ="admintarunmahajan";
echo $foo."\n";
echo ${$variableName}."\n";
echo $$variableName."\n";

$funName = 'add';
$validateEmail = 'validateEmail';

echo $funName(1,3);
echo "\n";
echo $validateEmail("admin@tarunmahajan.com");

/******
 * 3
 *****/

echo "Stdio 1\n";
trigger_error("Stderr 2 \n");
print_r("Stdout 3\n");
fwrite(STDERR, "Stderr 4\n");
throw new RuntimeException("Stderr 5\n");

/******
 * 2
 *****/
$data = ["response" => "Hello World"];
header("Content-Type: application/json");
echo json_encode($emailValidate("a@gmail.com"));


/******
 * 1
 *****/
//header("Content-Type: text/plain");

echo("Hello World!");
print "Hello World!";
printf("%s\n", "Hello World!");
