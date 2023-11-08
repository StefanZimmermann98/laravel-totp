# PHP TOTP Code Generation

Generate simple TOTP-Codes for multi-factor purpoises and validate them quickly.

# Example
```
$captcha = (new SecureImage(env('CAPTCHA_SECRET')))
            ->setFont(__DIR__
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . '..'
            . DIRECTORY_SEPARATOR . 'resources'
            . DIRECTORY_SEPARATOR . 'fonts'
            . DIRECTORY_SEPARATOR . 'arial.ttf')
        ->setNumberOfLines(20) // Random Lines for obfuscation
        ->setNumberOfDots(800) // Random Dots for obfuscation
        ->setBackground(150, 150, 150, 0.4) // RGBA
        ->setLength(7) // Captcha-Length
        ->setWidth(200) // Image Width
        ->setHeight(100); // Image Height

        return $captcha->generateCaptcha();
```

![Example](./example.jpeg)

```
$captcha = new SecureImage(env('CAPTCHA_SECRET'));
return $captcha->is_valid($user_input, $cipher_text_generated_with_captcha);
```



