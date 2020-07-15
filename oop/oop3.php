<?php
class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct( $colorCode = '' ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parseColor();
    }

    function getColor() {
        return $this->color;
    }

    function setColor( $colorCode ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parseColor();
    }

    function getRGBcolor() {
        return array( $this->red, $this->green, $this->blue );
    }

    function setRGBcolor() {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    private function parseColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( '%02x%02x%02', $this->color );
        } else {
            list( $this->red, $this->green, $this->blue ) = array( 0, 0, 0 );
        }
    }

    function getRed() {
        return $this->red;
    }

    function getGreen() {
        return $this->green;
    }

    function getBlue() {
        return $this->blue;
    }
}
$myColor = new RGb( 'ff02ff' );
$myColor->getRGBcolor();