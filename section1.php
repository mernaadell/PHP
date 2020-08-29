<!-- 
All variables in PHP are denoted with a leading dollar sign ($).

The value of a variable is the value of its most recent assignment.

Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.

Variables can, but do not need, to be declared before assignment.

Variables in PHP do not have intrinsic types - a variable does not know in advance whether 
it will be used to store a number or a string of characters.

Variables used before they are assigned have default values.

PHP does a good job of automatically converting types from one to another when necessary.

PHP variables are Perl-like.
 -->
 <!-- 
PHP has a total of eight data types which we use to construct our variables −

Integers − are whole numbers, without a decimal point, like 4195.

Doubles − are floating-point numbers, like 3.14159 or 49.1.

Booleans − have only two possible values either true or false.

NULL − is a special type that only has one value: NULL.

Strings − are sequences of characters, like 'PHP supports string operations.'

Arrays − are named and indexed collections of other values.

Objects − are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.

Resources − are special variables that hold references to resources external to PHP (such as database connections).
 -->
 <!-- 
     integers
$int_var = 12345;
$another_int = -12345 + 12345; 
Integer can be in decimal (base 10), octal (base 8), and hexadecimal (base 16) format. Decimal format is the default,
octal integers are specified with a leading 0, and hexadecimals have a leading 0x
the largest integer is (2**31 . 1) (or 2,147,483,647), and the smallest (most negative) integer is . (2**31 . 1) (or .2,147,483,647).


    doubles
$many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;


    Boolean
They have only two possible values either true or false. 
PHP provides a couple of constants especially for use as Booleans: TRUE and FALSE

Here are the rules for determine the "truth" of any value not already of the Boolean type −

If the value is a number, it is false if exactly equal to zero and true otherwise.

If the value is a string, it is false if the string is empty (has zero characters) or is the string "0", and is true otherwise.

Values of type NULL are always false.

If the value is an array, it is false if it contains no other values, and it is true otherwise. For an object, containing a value means having a member variable that has been assigned a value.

Valid resources are true (although some functions that return resources when they are successful will return FALSE when unsuccessful).

Don't use double as Booleans.

$true_num = 3 + 0.14159;
$true_str = "Tried and true"
$true_array[49] = "An array element";
$false_array = array();
$false_null = NULL;
$false_num = 999 - 999;
$false_str = "";


    NULL

$my_var = null;

A variable that has been assigned NULL has the following properties −

It evaluates to FALSE in a Boolean context.

It returns FALSE when tested with IsSet() function


    Strings
They are sequences of characters, like "PHP supports string operations". Following are valid examples of string

$string_1 = "This is a string in double quotes";
$string_2 = 'This is a somewhat longer, singly quoted string';
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters

The escape-sequence replacements are −

\n is replaced by the newline character
\r is replaced by the carriage-return character
\t is replaced by the tab character
\$ is replaced by the dollar sign itself ($)
\" is replaced by a single double-quote (")
\\ is replaced by a single backslash (\)



    Variable Scope
Scope can be defined as the range of availability a variable has to the program in which it is declared. PHP variables can be one of four scope types −

Local variables

Function parameters

Global variables

Static variables



    Variable Naming
Rules for naming a variable is −

Variable names must begin with a letter or underscore character.

A variable name can consist of numbers, letters, underscores but you cannot use characters like + , - , % , ( , ) . & , etc

There is no size limit for variables.
-->