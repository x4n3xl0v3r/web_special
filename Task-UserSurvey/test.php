<?php

function a($i)
{
    throw new Exception('Brumomento\n');
}

function wrap($_a) {
    echo 'lololo lalala' . "\n";
    a($_a);
    echo '4exv' . "\n";
}

try
{
    wrap(51);
} 
catch (Exception $e)
{
    echo $e->getMessage();
}
echo 'working' . "\n";