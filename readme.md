1. Unique ID for business (slug-maybe/businessname), products (uniqueid), orders (uniqueid), open-order (longeruniqueid)


- business, orders, products = uniqid()
- long uniqid = hash('crc32b', uniqid('', true)).''.hash('crc32b', uniqid('', true))
- summernote for product description
- date start - end (if end is not specified, open all time without closing)
- future development sales based on day (recurrence)