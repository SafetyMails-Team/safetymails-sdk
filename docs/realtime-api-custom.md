# Custom Real-time API for Developers

For developers who prefer to integrate SafetyMails via HTTP requests (instead of standard scripts), the real-time API can be fully customized.

## 🛡️ Authentication via HMAC

All API requests require HMAC authentication with the SHA256 algorithm.

- VALUE: the email address
- KEY: your API Key
- Formula:
```python
hash = HMAC_SHA256(VALUE, KEY)
```

## 📥 API Request

- URL Format:
```
https://<TICKET_ORIGEM>.safetymails.com/api/<CODE_TICKET>
```

- Headers:
```
Sf-Hmac: <HASH GENERATED WITH API KEY>
```

- Body (form-data):
```
email: user@example.com
```

## ✅ Example of Success Response
```json
{
  "Success": true,
  "Email": "user@example.com",
  "Status": "valid",
  "Score": 97
}
```

## ❌ Example of Error Response
```json
{
  "Success": false,
  "ErrorCode": "401",
  "Message": "Invalid API Key"
}
```

To get your API key and ticket origin, access the Real-time API panel on [SafetyMails](https://www.safetymails.com)
