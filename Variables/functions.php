<?php
$inputs = [
    'input' => [
        '<input type="text" placeholder="Full Name" name="FullName" required />',
        '<input type="email" placeholder="Email" name="Email" />',
        '<input type="number" placeholder="Phone Number" name="PhoneNumber" />',
        '<input type="text" class="message-box" placeholder="Message" name="Message" />',
    ],
];

function getInputs($inputs)
{
    $i = 0;
    do {
        echo '<div> ' . $inputs['input'][$i] . ' </div>';
        $i++;
    } while ($i < sizeof($inputs['input']));
    return $inputs;
}
?>