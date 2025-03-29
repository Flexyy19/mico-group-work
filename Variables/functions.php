<?php
// iko
$treatments =   [
    'imgsrc' => [
        '"images/t1.png"', "images/t2.png", "images/t3.png", "images/t4.png",
    ],
    'h4' => [
        'Nephrologist care', 'Eye Care', 'Pediatrician Clinic', 'Parental Care',
    ],
    'p' =>  [
        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
        "alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isn't anything",
    ],
    'href' => ['Read More', 'Read More', 'Read More', 'Read More'],
];
function makeTreatments()
{
    global $treatments;
    for ($i = 0; $i < sizeof($treatments); $i++) {
        echo    '<div class="col-md-6 col-lg-3">
                    <div class="box ">
                        <div class="img-box">
                            <img src= ' . $treatments['imgsrc'][$i] . ' alt="">
                        </div>
                        <div class="detail-box">
                            <h4> ' . $treatments['h4'][$i] . ' </h4>
                            <p> ' . $treatments['p'][$i] . ' </p>
                            <a href=""> ' . $treatments['href'][$i] . ' </a>
                        </div>
                    </div>
                </div>';
    }
}
?>