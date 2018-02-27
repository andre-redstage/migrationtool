This is a standalone application created with Yii framework, not an extension which would be installed on Magento.

Just clone it and set a web location for it. 
Once you have it running it'll ask for the M1 and M2 credentials, from there you'll be able to import data.

After migration run a reindex

``` $ php bin/magento indexer:reindex```

If you face any errors related to Customer, please add the following columns to customer_entity table:

```
alter table customer_entity add failures_num smallint(6) default 0;
alter table customer_entity add first_failure timestamp;
alter table customer_entity add lock_expires timestamp;
```