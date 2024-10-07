# Demonstration for TCPDF 6.7.6 HTML image rendering issue

When an image with a relative path in the HTML `img` tag is used, that works correctly in TCPDF 6.7.5.
In TCPDF 6.7.6, the image is not shown anymore.

See https://github.com/tecnickcom/TCPDF/issues/751

## EDIT 2024-10-07 09:30

Apparently the changed behaviour was deliberately added as a security measure so no parent folders can be accessed.
To still use the generated paths, the PHP function `realpath()` can be used to normalize the generated path before usage.

To reproduce:
```
composer update tecnickcom/tcpdf=6.7.5
```

Open `test.php` in your browser. The example image is displayed.

```
composer update tecnickcom/tcpdf=6.7.6
```

Open `test.php` in your browser. The example image is NOT displayed.

