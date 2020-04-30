# sharex-custom-uploader
A one-file ShareX uploader. Forked from https://github.com/MrSheldon/sharex-custom-uploader.

# Setup
1. Copy `upload.php` to the **root** of your webserver.
2. Change the configuration (`$key` and `$dir`). `$dir` must be the output directory **name**. Make sure it's in the same directory as the `upload.php` script (root, again).
3. Create the custom uploader in ShareX:

URL: http://your-domain.com/upload.php

Body: Form data

| Name | Value              |
| -----|------------------- |
| key  | your key           |
| name | %rn%rn%rn%rn%rn%rn |

File form name: `d`

# Custom Uploader Example
![Image](https://i.ibb.co/p0w0nJc/Share-X-Faku-KU2o-Zl.png)
