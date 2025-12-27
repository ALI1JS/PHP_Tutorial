<?php 
/*
====================================================
 PHP Operator Precedence
====================================================

Operator Precedence determines **the order in which
operators are executed** in an expression.

If multiple operators exist in one statement,
PHP evaluates them based on precedence rules,
not from left to right.

-----------------------------------
1) Highest Precedence
-----------------------------------

1. Parentheses ()
- Forces expressions inside () to be evaluated first.

Example:
  (5 + 3) * 2 // 16

-----------------------------------
2) Unary Operators
-----------------------------------

2. Identity (+)
3. Negation (-)
4. Increment / Decrement (++ --)
5. Logical NOT (!)

Example:
  -5 + 10 // 5

-----------------------------------
3) Arithmetic Operators
-----------------------------------

6. Exponentiation (**)
- Highest arithmetic precedence
- Right associative

Example:
  2 ** 3 ** 2 // 512

7. Multiplication (*), Division (/), Modulus (%)
- Same precedence, evaluated left to right

Example:
  10 * 2 / 5 // 4

8. Addition (+), Subtraction (-)
- Same precedence, evaluated left to right

Example:
  10 + 5 - 3 // 12

-----------------------------------
4) Comparison Operators
-----------------------------------

9. Comparison:
   <  >  <=  >=
10. Equality:
   ==  !=  ===  !==  <>

Example:
  5 > 3 == true // true

-----------------------------------
5) Logical Operators
-----------------------------------

11. AND (&&)
12. OR (||)

Note:
- && has higher precedence than ||

Example:
  true || false && false // true

-----------------------------------
6) Assignment Operators
-----------------------------------

13. Assignment (=, +=, -=, *=, /=, %=, **=)

Example:
  $a += 5;

-----------------------------------
Important Notes:
-----------------------------------
- Parentheses () always override precedence.
- Operators with same precedence follow associativity.
- Use parentheses for readability and safety.
- Never rely on precedence in complex expressions.

====================================================
*/
