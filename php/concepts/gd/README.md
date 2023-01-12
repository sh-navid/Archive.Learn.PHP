# PHP
## [Graphic Draw](https://www.php.net/manual/en/book.image.php) (GD)
- [ ] TODO: CHECKOUT EVERY FUNCTION IN THIS THREAD
- Output
    - `imagebmp()`
    - [`imagepng()`](gd-draw-dashed-line.php)
- Image
    - `imagecreate()`
    - [`imagecreatetruecolor()`](gd-draw-dashed-line.php)
    - [`imageantialias()`](gd-draw-arc.php)
    - `imagecreatefromjpeg()`
    - `imagecreatefrompng()`
- Set Color
    - `imagecolorallocate()`
    - `imagecolorallocatealpha()`
- Pixels
    - `imagecolorat()`
- Manipulate
    - `imagecopy()`
        >> Copy part of image
    - [`imagecrop()`](gd-image-crop.php)
        >> Crop a rect
    - `imagedestroy()`
- Draw
    - [`imagearc()`](gd-draw-arc.php)
    - ~~[`imagedashedline()`](gd-draw-dashed-line.php)~~
        >> Draw a dashed line
    - [`imageellipse()`](gd-draw-arc.php)
- Other
    - `getimagesize()`
    - `image_type_to_extension()`
    - `image_type_to_mime_type()`