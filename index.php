<?php
// index.php

require_once 'Speedometer.php';

const BR = '<br> <br> <br>';

echo Speedometer::convertKmToMiles(10);
echo BR;
echo Speedometer::convertMilesToKm(10);
