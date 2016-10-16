To Send a SMS via the Command Line:
------------------
Example Below

With out flash
----

```
curl --data "to=077123456789&message=YOUR MESSAGE&hash=ENTERYOURHASH" https://www.smspi.co.uk/api/send/

```

with flash
---
```
curl --data "to=077123456789&message=YOUR MESSAGE&hash=ENTERYOURHASH&flash=yes" https://www.smspi.co.uk/api/send/

```


This can be thrown in to a bash

