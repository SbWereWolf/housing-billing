# Billing of Housing and Public Utilities

## Install

### Legal and Technical Setup

1. add `product`
2. merge `product` and `product` into  `related_product`
3. merge `product` and `product` into  `shared_product`

4. add `units_of_measure`
5. add `conversion_ratio`
6. merge `product` and `units_of_measure`
   into  `product_units_of_measure`

7. add `metering_device_model`
8. merge `metering_device_model` and `product`
   into `metering_device_model_product`
9. add `device_option`
10. merge `metering_device_model` and `device_option`
    into `number_device_option_metering_device_model`
11. add `measuring_scale`
12. add `readings_purpose`
13. merge `metering_device_model`
    and `measuring_scale` and `units_of_measure`
    and `readings_purpose` into  `device_model_scale`

14. add `readings_sender`
15. add `readings_way`
16. merge `readings_sender` and `readings_way`
    into  `readings_sender_readings_way`

17. add `testing_set`
18. add `testing_rule`
19. merge `testing_set` and `testing_rule`
    into  `testing_rule_set`

20. add `billing_option`
21. add `location_option`
22. merge `location_option` and `billing_option`
    into `location_billing_option`
23. add `personal_account_option`
24. merge `personal_account_option` and `billing_option`
    into `personal_account_billing_option`
25. add `legal_entity_option`
26. merge `legal_entity_option` and `billing_option`
    into `legal_entity_billing_option`
27. add `natural_person_option`
28. merge `natural_person_option` and `billing_option`
    into `natural_person_billing_option`

29. add `currency`

### Contracts Detail Setup

1. add `distributor`
2. merge `product` and `distributor` into `product_distributor`

3. add `customer`
4. connect `natural_person` to `customer`
5. connect `legal_entity` to `customer`
6. connect `contract` to `customer`
7. add `contract` into `personal_account`
8. merge `product` and `personal_account`
   into `product_personal_account`
9. add `address`
10. add `distribution_point`
11. merge `address` and `distribution_point`
    into `address_distribution_point`

12. merge `address` and `location_billing_option`
    into `address_location_option`
13. merge `personal_account` and `personal_account_billing_option`
    into `contract_personal_account_option`
14. merge `legal_entity` and `legal_entity_billing_option`
    into `customer_legal_entity_option`
15. merge `natural_person` and `natural_person_billing_option`
    into `customer_natural_person_option`

16. merge `product_distributor` and `address_distribution_point`
    into `metering_point`
17. merge `metering_point` and `metering_point`
    into `transit_metering_point`
18. merge `product_personal_account` and `metering_point`
    into `personal_account_share`
19. merge `metering_point` and `metering_device_model_product`
    into `metering_device`

20. add `control_panel`
21. merge `contract` and `control_panel`
    into `contract_control_panel`
22. merge `control_panel` and `metering_device`
    into `control_panel_metering_device`

### Collect Readings

1. merge `metering_device` and `device_model_scale`
   and `readings_sender_readings_way` into `raw_readings`

### Issue Invoices

1. add `billing_period`
2. merge `testing_set` and `billing_period` into `testing_run`
3. merge `testing_rule_set` and `testing_run`
   into `reason_of_weeded_out`
4. merge `raw_readings` and `reason_of_weeded_out`
   into `weed_out_meter_readings`
5. connect `approved_meter_readings` to `raw_readings`
6. connect `meter_readings` to `approved_meter_readings`
7. merge `meter_readings` and `meter_readings`
   and `product_units_of_measure` into `meter_usage`
8. merge `personal_account_share` and `meter_usage`
   into `personal_product_usage`
9. merge `billing_period` and `currency` into `invoice`
10. connect `invoice_product_usage` to `invoice`
11. merge `personal_product_usage` and `invoice_product_usage`
    into `invoice_product_usage_detail`

### Register Payment

1. merge `personal_account` and `currency` into `payment`
2. connect `cashbox_receipt` to `payment`

### Data Source Diagram

![Data Source Diagram](./docs/altogether.png "Data Source Diagram")

## Fixtures Rollup

### Base
product
- product1
- related_product1
- related_product2
- shared_product1
- shared_product2


related_product (related_product1; related_product2;)

shared_product (shared_product1; shared_product2;)

units_of_measure
- units_of_measure1;
- units_of_measure2;
- currency1;
- currency2;


conversion_ratio
- units_of_measure1; units_of_measure2;
- currency1; currency2;

product_units_of_measure (all product * 
[units_of_measure1; units_of_measure2;])

metering_device_model x3

metering_device_model_product (all metering_device_model * 
all product_units_of_measure)

device_option x2

number_device_option_metering_device_model (all device_option * 
all metering_device_model)

readings_purpose (all metering_device_model_product * 2)

measuring_scale (all readings_purpose)

device_model_scale (all metering_device_model * all measuring_scale)

readings_sender x4

readings_way x4

readings_sender_readings_way (all readings_sender * all readings_way)

testing_set x4

testing_rule x10

testing_rule_set (all testing_set * all testing_rule)

billing_option
- location_option1
- location_option2
- location_option3
- location_option4
- personal_account_option1
- personal_account_option2
- personal_account_option3
- personal_account_option4
- legal_entity_option1
- legal_entity_option2
- legal_entity_option3
- legal_entity_option4
- natural_person_option1
- natural_person_option2
- natural_person_option3
- natural_person_option4
)

location_option
- location_option1
- location_option2
- location_option3
- location_option4

location_billing_option
(
- location_option1; location_option1;
- location_option2; location_option2;
- location_option3; location_option3;
)

personal_account_option
- personal_account_option1
- personal_account_option2
- personal_account_option3
- personal_account_option4

personal_account_billing_option
(
- personal_account_option1; personal_account_option1;
- personal_account_option2; personal_account_option2;
- personal_account_option3; personal_account_option3;
)

legal_entity_option
- legal_entity_option1
- legal_entity_option2
- legal_entity_option3
- legal_entity_option4

legal_entity_billing_option
(
- legal_entity_option1; legal_entity_option1;
- legal_entity_option2; legal_entity_option2;
- legal_entity_option3; legal_entity_option3;
)

natural_person_option
- natural_person_option1
- natural_person_option2
- natural_person_option3
- natural_person_option4

natural_person_billing_option
(
- natural_person_option1; natural_person_option1;
- natural_person_option2; natural_person_option2;
- natural_person_option3; natural_person_option3;
)

currency
- currency1
- currency2

### Local Peculiar Properties

distributor x3

product_distributor (all product * all distributor)

customer
- natural_person1
- natural_person2
- natural_person3
- legal_entity1
- legal_entity2
- legal_entity3

natural_person
- natural_person1
- natural_person2
- natural_person3

customer_natural_person_option (all natural_person * 
all natural_person_billing_option)

legal_entity
- legal_entity1
- legal_entity2
- legal_entity3

customer_legal_entity_option (all legal_entity * 
all legal_entity_billing_option)

contract
- natural_person1
- natural_person2
- natural_person3
- legal_entity1
- legal_entity2
- legal_entity3
- natural_person1
- natural_person2
- natural_person3
- legal_entity1
- legal_entity2
- legal_entity3

personal_account (all contract * 3)

product_personal_account (all product * all personal_account)

contract_personal_account_option (all personal_account * 
all personal_account_billing_option)

address x20

address_location_option (all address * all location_billing_option)

distribution_point (all address *2)

address_distribution_point (all address * all distribution_point)

metering_point (all address_distribution_point * 
all product_distributor)

personal_account_share (all metering_point)

metering_device (all metering_point * 
all metering_device_model_product)

### Generate Readings

raw_readings (all metering_device * all device_model_scale * 
all readings_sender_readings_way * 100 )

### Issue Invoices

billing_period x30

perform TESTING_RUN (move raw_readings into weed_out_meter_readings 
or into approved_meter_readings)

perform MOVE_TO_METER_READINGS (from approved_meter_readings with 
same testing_run_id)

perform BUILD_METER_USAGE func(meter_readings)

perform CALC_PERSONAL_PRODUCT_USAGE func(personal_account_share, 
meter_usage)

invoice (all billing_period * all currency)

invoice_product_usage (all invoice * all personal_product_usage)

invoice_product_usage_detail (all personal_product_usage * 
all billing_option)

perform CALC_TOTAL_OF_DETAIL (sum of invoice_product_usage_detail
with same [personal_account, year, month, product, distributor, 
point, units_of_measure] )

perform CALC_TOTAL_OF_USAGE (sum of invoice_product_usage with same
[personal_account, year, month, units_of_measure] )
