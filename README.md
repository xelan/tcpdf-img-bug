# Demonstration for TCPDF 6.7.6 HTML image rendering bug

When an image with a relative path in the HTML `img` tag is used, that works correctly in TCPDF 6.7.5.
In TCPDF 6.7.6, the image is not shown anymore.

To reproduce:
```
composer update tecnickcom/tcpdf=6.7.5
```

Open `test.php` in your browser. The example image is displayed.

```
composer update tecnickcom/tcpdf=6.7.6
```

Open `test.php` in your browser. The example image is NOT displayed.
