<?php

/**
 * Task 1: 
 *   
 * ممنوع التعديل على الأرقام نهائيا ولا أماكنها
 *إستخدم ما تعلمته لتجعل النتيجة النهائية رقم 50 ونوع البيانات Integer
 *في السطر الأول قم بطباعة الرقم وفي الثاني  Integer
 * 
 * echo 15.2 + 14.7 + (10.5 + 10.5); // 50
 * echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
 */

$sum = (int) 15.2 + (int) 14.7 + (10.5 + 10.5);
echo ("$sum" . "\n");
echo (gettype(value: (int) $sum));



/*
* Task 2:
 * لديك الرقم 100
 *
 * المطلوب:
 * 1) استخدام الطريقة الأولى لطباعة نوع البيانات)
 * 2) استخدام الطريقة الثانية لطباعة نوع البيانات)
 * 100
 Method One
 Method Two
 *
 */

echo "\n";
echo gettype(100) . "\n";
var_dump(100);


/*
* Task 3:
* المطلوب:
* - قم بإستبدال علامات الإستفهام بما يناسب
* - يجب أن تنتج النتيجة (Output) المطلوبة
* - يمنع استخدام Heredoc أو Nowdoc
echo "???";
Needed Output
Hello "Elzero" \\ """ We Love "$$PHP"
*/

echo "\n";
echo "\"Elzero \" \\\\ \"\"\" We Love \"\$\$PHP\"";
echo "\n";

/*
 * Task 4:
 * لديك الكود التالي:
 * echo "We \n Love \n Elzero \n Web \n School";
 *
 * المشكلة:
 * - \n هو حرف السطر الجديد (New Line)
 * - ولكن جميع الكلمات تظهر على نفس السطر عند الطباعة
 *
 * المطلوب:
 * - تعديل السطر بحيث تظهر كل كلمة في سطر منفصل عند الطباعة
 *
 * المخرجات المطلوبة:
 * We
 * Love
 * Elzero
 * Web
 * School
 *
 * ملاحظة:
 * - يمكن استخدام \n داخل النص مع علامات الاقتباس المزدوجة ""
 */


echo "We \n Love \n Elzero \n Web \n School";
echo "\n";


/*
 * Task 5:
 * المطلوب:
 * - طباعة السطور كما هي بالأسفل
 * - كل جملة في سطر منفصل
 * - يجب طباعة جميع العلامات الموجودة (مثل " و $ و ')
 *
 * القيود:
 * - ممنوع استخدام Backslash \ نهائياً
 * - ممنوع استخدام عناصر HTML مثل <br>
 *
 * المخرجات المطلوبة:
 * Hello "'Elzero'"
 * We Love $Programming$
 * Languages Specially "PHP"
 */


echo <<<'HELLOMSF'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
HELLOMSF;

echo "\n";


/*
 * Task 6:
 * لديك الكود التالي:
 * 
 * $something = "Programming";
 * 
 * echo <<<'code'
 * Hello \PHP\
 * We Love $something
 *         code;
 * 
 * المطلوب:
 * 1) إصلاح الخطأ الموجود في الكود أولاً
 * 2) إزالة حرفين فقط من الكود للحصول على المخرجات المطلوبة
 * 
 * المخرجات المطلوبة:
 * Hello \PHP\ We Love Programming
 *
 */


$something = "Programming";

echo <<<code
Hello \PHP\ We Love $something
code;
echo "\n";



/*
 * Task 7:
 * لديك الكود التالي:
 * echo "Hello PHP";
 * echo '<br>';
 * echo "Hello PHP";
 *
 * المطلوب:
 * - عدم تعديل الجملة أو نوعها
 * - استخدام ما تعلمته ليخرج المخرجات التالية:
 *
 * المخرجات المطلوبة:
 * 1
 * integer
 *
 */


echo (bool) "Hello PHP";
echo "\n";
echo getType((int) "Hello PHP");
echo "\n";




/*
    * Task 8:
 * المطلوب:
 * - كتابة محتوى الـ Array ليطابق المخرجات التالية عند الطباعة
 *
 * Output المطلوب:
 * Array
 * (
 *   [FrontEnd] => Array
 *     (
 *       [0] => HTML
 *       [1] => CSS
 *       [JS] => Array
 *         (
 *           [Vuejs] => Array
 *             (
 *               [2] => v2
 *               [3] => v3
 *             )
 *
 *           [0] => Reactjs
 *           [1] => Svelte
 *         )
 *     )
 *
 *   [BackEnd] => Array
 *     (
 *       [0] => PHP
 *       [1] => MySQL
 *       [2] => Security
 *     )
 *
 *   [0] => Git
 *   [1] => Github
 *   [Testing] => Array
 *     (
 *       [0] => Unit Testing
 *       [1] => End To End
 *       [2] => Integration
 *     )
 * )
 *
 */



$array_var = [
    "FrontEnd" => [
        "HTML",
        "CSS",
        "JS" => [
            "Vuejs" => [
                2 => "v2",
                3 => "v3",
            ],
            0 => "RactJs",
            1 => "Svelte",
        ]
    ],
   "BackEnd" => [
     "PHP",
     "MySQL",
     "Security"
   ],
   0 => "Git",
   1 => "GitHub",
   "Testing" => [
     "Unit Testing",
      "End To End",
      "Integration"
   ]
];

print_r($array_var);