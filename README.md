# PHP TOTP Code Generation

Generate simple TOTP-Codes for multi-factor purpoises and validate them quickly.

# Example
```
use StefanZ\LaravelTOTP\TOTP;

$token = (new TOTP('sha256', 0, 600))->GenerateToken('SUPER-SECRET', NULL, 8);

```

```

if (Validator::validate('SUPER-SECRET', 'XXXXXXXX', ['sha256', 0, 600])) {
    // Token is valid
}


```



