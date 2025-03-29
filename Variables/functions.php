<!-- // nika -->
<?php
$doctorName = ['Steven Moffat', 'Jenny Flint', 'Catrin Stewart', 'Richard E. Grant',];
$departmentName = ['Medical Department', 'Rehabilitation Department', 'Radiology Department', 'Outpatient Department',];

function getCombineLable($names)
{
    foreach ($names as $name) {
        echo '<option value="' . $name . '">' . $name . '</option>';
    }
}
?>