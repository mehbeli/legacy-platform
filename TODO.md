1. fix product list selection on open sale page - click on checkbox does not account as row selection. [/]
2. open sale settings - set fix setting first -> payment methods, delivery methods - pending validation (create, update)
3. open sale time end must be after open sale start (DONE)

open sale
1. update save settings (done)
2. remove delete button on product list for open order (done)
3. validation -> delivery methods (/), payment methods, others should be working like charms
4. product detail view on modal?
5. open sale url validation - stupid async (done)
6. product selection table - change from json to list (inaccurate when product deleted but in the sale not update)

product & stocks
1. product validation -> realtime validation (parsleyjs)
2. add 1 image for products (DONE)
3. VAT / GST?
4. active / deactive product (cannot delete if got orders with products) (DONE - apply soft deletes for delete)

sale page
1. product picture
2. add order
3. auto confirm or need moderation from business owner

orders
1. order listing
2. order add (create page, backend (no)), update, delete
3. order tracking page
4. order id tracking table

invoices / quotation
1. invoices, quotation listing
2. add, update, delete

overview (c3js)
1. popular product
2. monthly graph revenue
3. daily graph revenue
4. order graph

---

1. Unique ID for business (slug-maybe/businessname), products (uniqueid), orders (uniqueid), open-order (longeruniqueid)


- business, orders, products = uniqid()
- long uniqid = hash('crc32b', uniqid('', true)).''.hash('crc32b', uniqid('', true))
- summernote for product description
- date start - end (if end is not specified, open all time without closing)
- future development sales based on day (recurrence)
~
