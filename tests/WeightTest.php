<?php

use RustamAliHussaini\WeightConversions\Weight;

it('it can convert kilograms to pounds', function () {
    $pounds = Weight::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});
