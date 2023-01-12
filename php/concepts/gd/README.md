# PHP
## [Graphic Draw](https://www.php.net/manual/en/book.image.php) (GD)
- [ ] TODO: CHECKOUT EVERY FUNCTION IN THIS THREAD
- Output
    - [`imagepng()`](gd-draw-dashed-line.php)
        - `imagebmp()`
        - `imagegif()`
        - `imagejpeg()`
- Image
    - [`imagecreatetruecolor()`](gd-draw-dashed-line.php)
        - `imagecreate()`
    - [`imageantialias()`](gd-draw-arc.php)
    - [`imagecreatefrompng()`](gd-image-crop.php)
        - `imagecreatefromjpeg()`
- Set Color
    - [`imagecolorallocate()`](gd-draw-arc.php)
        - `imagecolorallocatealpha()`
- Pixels
    - [`imagecolorat()`](gd-image-color-at.php)
        - [`imagecolorsforindex()`](gd-image-color-at.php)
    - [`imagesetpixel()`](dg-image-set-pixel.php)
- Manipulate
    - [`imagecopy()`](gd-image-copy.php)
        >> Copy part of image
    - [`imagecrop()`](gd-image-crop.php)
        >> Crop a rect
    - [`imagedestroy()`](gd-draw-arc.php)
    - [`imageflip()`](gd-image-flip.php)
    - [`imagerotate()`](gd-image-rotate.php)
    - [`imagescale()`](gd-image-scale.php)
    - [`imagefilter()`](gd-image-filter.php)
- Draw
    - [`imagearc()`](gd-draw-arc.php)
        - `imagefilledarc()`
    - ~~[`imagedashedline()`](gd-draw-dashed-line.php)~~
        >> Draw a dashed line
    - [`imageellipse()`](gd-draw-arc.php)
        - `imagefilledellipse()`
    - [`imagefill()`](gd-image-flood-fill.php)
        >> Flood Fill
        - `imagefilltoborder()`
            >> Flood Fill to defined color
    - `imagepolygon()`
        - `imageopenpolygon()`
        - `imagefilledpolygon()`
    - [`imagerectangle()`](gd-draw-rectangle.php)
        - `imagefilledrectangle()`
    - [`imageline()`](gd-draw-line.php)
        - [`imagesetthickness()`](gd-draw-line.php)
    - `imagefttext()`
    - `imagettftext()`
- Other
    - [`getimagesize()`](gd-image-size.php)