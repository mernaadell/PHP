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

<!-- 
What is Operator? Simple answer can be given using expression 4 + 5 is equal to 9. Here 4 and 5 are called operands and + is called operator. PHP language supports following type of operators.

Arithmetic Operators
Comparison Operators
Logical (or Relational) Operators
Assignment Operators
Conditional (or ternary) Operators
Lets have a look on all operators one by one. 


    Arithmetic Operators
+	Adds two operands	A + B will give 30
-	Subtracts second operand from the first	A - B will give -10
*	Multiply both operands	A * B will give 200
/	Divide numerator by de-numerator	B / A will give 2
%	Modulus Operator and remainder of after an integer division	B % A will give 0
++	Increment operator, increases integer value by one	A++ will give 11
--	Decrement operator, decreases integer value by one	A-- will give 9



    Comparison Operators
==	Checks if the value of two operands are equal or not, if yes then condition becomes true.	(A == B) is not true.
!=	Checks if the value of two operands are equal or not, if values are not equal then condition becomes true.	(A != B) is true.
>	Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.	(A > B) is not true.
<	Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.	(A < B) is true.
>=	Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true.	(A >= B) is not true.
<=	Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.	(A <= B) is true.



    Logical Operators
and	Called Logical AND operator. If both the operands are true then condition becomes true.	(A and B) is true.
or	Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.	(A or B) is true.
&&	Called Logical AND operator. If both the operands are non zero then condition becomes true.	(A && B) is true.
||	Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.	(A || B) is true.
!	Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.	!(A && B) is false


    Conditional Operator
? :	Conditional Expression	If Condition is true ? Then value X : Otherwise value Y




    The If...Else Statement
If you want to execute some code if a condition is true and another code if a condition is false, use the if....else statement.

Syntax
if (condition)
   code to be executed if condition is true;
else
   code to be executed if condition is false;


   The Switch Statement
If you want to select one of many blocks of code to be executed, use the Switch statement.

The switch statement is used to avoid long blocks of if..elseif..else code.

Syntax
switch (expression){
   case label1:
      code to be executed if expression = label1;
      break;  
   
   case label2:
      code to be executed if expression = label2;
      break;
      default:
   
   code to be executed
   if expression is different 
   from both label1 and label2;
}


    looping
forloop
 $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b" );

while loop
 $i = 0;
         $num = 50;
         
         while( $i < 10) {
            $num--;
            $i++;
         }

do..while
 $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" );
      ?>

foreach
 $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            echo "Value is $value <br />";
         }


         Arrays
Numeric array − An array with a numeric index. Values are stored and accessed in linear fashion.

Associative array − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.

Multidimensional array − An array containing one or more arrays and values are accessed using multiple indices

 $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }

$salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
         echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
         echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
         echo "Salary of zara is ".  $salaries['zara']. "<br />"

-->