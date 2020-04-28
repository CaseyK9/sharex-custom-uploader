# sharex-uploader
A one-file ShareX uploader. Forked from https://github.com/MrSheldon/sharex-custom-uploader.

# Setup
1. Copy `upload.php` to your webserver. It must be in the same directory as the output folder.
2. Change the configuration (`$key` and `$dir`). `$dir` must be the output directory NAME. Make sure it's in the same directory as the `upload.php` script.
3. Create the custom uploader in ShareX:

Body: Form data

| Name | Value              |
| -----|------------------- |
| key  | your key           |
| name | %rn%rn%rn%rn%rn%rn |

File form name: `d`

# Custom Uploader Example
![Image](https://i.ibb.co/p0w0nJc/Share-X-Faku-KU2o-Zl.png)
