<?php
echo(ceil(0.40) . "<br>");
echo(ceil(5) . "<br>");
echo(ceil(-5.1) . "<br>");
echo(ceil(-5.9));

echo "<br>";
echo "<br>";

echo(cos(3) . "<br>");
echo(cos(-3) . "<br>");
echo(cos(0) . "<br>");
echo(cos(M_PI) . "<br>");
echo(cos(2*M_PI));

echo "<br>";
echo "<br>";

echo decbin("3") . "<br>";
echo decbin("1") . "<br>";
echo decbin("1587") . "<br>";
echo decbin("7");

echo "<br>";
echo "<br>";

echo bindec("0011") . "<br>";
echo bindec("01") . "<br>";
echo bindec("11000110011") . "<br>";
echo bindec("111");

echo "<br>";
echo "<br>";

echo decoct("30") . "<br>";
echo decoct("10") . "<br>";
echo decoct("1587") . "<br>";
echo decoct("70");

echo "<br>";
echo "<br>";

echo deg2rad("45") . "<br>";
echo deg2rad("90") . "<br>";
echo deg2rad("360");

echo "<br>";
echo "<br>";

echo(floor(0.60) . "<br>");
echo(floor(0.40) . "<br>");
echo(floor(5) . "<br>");
echo(floor(5.1) . "<br>");
echo(floor(-5.1) . "<br>");
echo(floor(-5.9));

echo "<br>";
echo "<br>";

echo hexdec("1e") . "<br>";

echo is_finite(2) . "<br>";
echo is_finite(INF) . "<br>";

echo is_infinite(INF) . "<br>";

echo(max(2,4,6,8,10) . "<br>");

echo(min(2,4,6,8,10) . "<br>");

echo(sqrt(9) . "<br>");

echo(sqrt(-9) . "<br>");

srand(mktime());
echo(rand());