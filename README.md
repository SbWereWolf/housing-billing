# Billing of Housing and Public Utilities

## Install

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

## Setup

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

## Collect Readings

1. merge `metering_device` and `device_model_scale`
   and `readings_sender_readings_way` into `raw_readings`

## Issue Invoices

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

## Register Payment

1. merge `personal_account` and `currency` into `payment`
2. connect `cashbox_receipt` to `payment`

## Data Source Diagram

![Data Source Diagram](./docs/altogether.png "Data Source Diagram")