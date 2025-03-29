
<!-- giorgi -->
<?php
$testimonialcarousel = [
    [
        'main-title' => ' Morijorch',
        'title' => 'Default model text',
        'text' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will
                   uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their
                   default model text, and a search for lorem ipsum will uncover many web sites still in
                   their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search
                   for lorem ipsum will uncover many web sites still in their infancy. Various',
    ],
    [
        'main-title' => 'Rochak',
        'title' => 'Default model text',
        'text' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem
                   ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem
                   Ipsum as their default model text, and a search for lorem ipsum will uncover many web
                   sites still in their infancy. editors now use Lorem Ipsum as their default model text, and
                   a search for lorem ipsum will uncover many web sites still in their infancy.',
    ],
    [
        'main-title' => 'Brad Johns',
        'title' => 'Default model text',
        'text' => 'Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem
                   ipsum will uncover many web sites still in their infancy, editors now use Lorem Ipsum as
                   their default model text, and a search for lorem ipsum will uncover many web sites still
                   in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a
                   search for lorem ipsum will uncover many web sites still in their infancy. Various',
    ],
];
function getTestimonial($testimonialcarousel)
{
    for ($i = 0; $i < sizeof($testimonialcarousel); $i++) {
        if ($i == 0) {
            $carouselClass = 'carousel-item active';
        } else {
            $carouselClass = 'carousel-item';
        }
        echo '<div class="' . $carouselClass . '">
                <div class="box">
                    <div class="client_info">
                        <div class="client_name">
                    <h5> ' . $testimonialcarousel[$i]['main-title'] . ' </h5>
                    <h6> ' . $testimonialcarousel[$i]['title'] . ' </h6>
                </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                    <p> ' . $testimonialcarousel[$i]['text'] . ' </p>
                </div>
            </div>';
    };
    return $testimonialcarousel;
}
?>