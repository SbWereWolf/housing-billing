<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Driver\PgSQL\Connection;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230806040536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->connection->beginTransaction();
        /** @var Connection $conn */
        $conn = $this->connection->getNativeConnection();
        $conn->exec('
create table if not exists customer
(
    id     bigserial
        constraint customer_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists customer_code_ux on customer (code);

create table if not exists legal_entity
(
    id          bigserial
        constraint legal_entity_pk primary key,
    customer_id bigint not null
        constraint legal_entity_customer_id_fk
            references customer
);

create unique index if not exists
    legal_entity_customer_id_ux on legal_entity (customer_id);

create table if not exists natural_person
(
    id          bigserial
        constraint natural_person_pk primary key,
    customer_id bigint not null
        constraint natural_person_customer_id_fk
            references customer
);

create unique index if not exists
    natural_person_customer_id_ux on natural_person (customer_id);

create table if not exists contract
(
    id          bigserial
        constraint contract_pk primary key,
    customer_id bigint
        constraint contract_customer_id_fk
            references customer
);

create unique index if not exists
    contract_customer_id_id_ux on contract (customer_id, id);

create table if not exists personal_account
(
    id             bigserial
        constraint personal_account_pk primary key,
    contract_id    bigint,
    public_account text,
    customer_id    bigint,
    constraint personal_account_contract_customer_id_id_fk
        foreign key (customer_id, contract_id)
            references contract (customer_id, id)
);

create unique index if not exists
    personal_account_contract_id_id_ux
    on personal_account (contract_id, id);

create unique index if not exists
    personal_account_customer_id_id_ux
    on personal_account (customer_id, id);

create table if not exists billing_option
(
    id     bigserial
        constraint billing_option_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    billing_option_code_ux on billing_option (code);

create table if not exists distributor
(
    id     bigserial
        constraint distributor_pk primary key,
    title  bigint,
    code   bigint not null,
    remark bigint
);

create unique index if not exists
    distributor_code_ux on distributor (code);

create table if not exists product
(
    id     bigserial
        constraint product_pk primary key,
    title  text,
    code   text not null,
    remark text
);

create unique index if not exists product_code_ux on product (code);

create table if not exists product_distributor
(
    id             bigserial
        constraint product_distributor_pk primary key,
    product_id     bigint
        constraint product_distributor_product_id_fk
            references product,
    distributor_id bigint
        constraint product_distributor_distributor_id_fk
            references distributor
);

create unique index if not exists
    product_distributor_product_id_distributor_id_ux
    on product_distributor (product_id, distributor_id);

create table if not exists units_of_measure
(
    id     bigserial
        constraint units_of_measure_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    units_of_measure_code_ux on units_of_measure (code);

create table if not exists conversion_ratio
(
    id                         bigserial
        constraint conversion_ratio_pk primary key,
    source_units_of_measure_id bigint
        constraint conversion_ratio_units_of_measure_id_fk
            references units_of_measure,
    target_units_of_measure_id bigint
        constraint conversion_ratio_units_of_measure_id_fk_2
            references units_of_measure
);

create table if not exists product_units_of_measure
(
    id                  bigserial
        constraint product_units_of_measure_pk primary key,
    product_id          bigint
        constraint product_units_of_measure_product_id_fk
            references product,
    units_of_measure_id bigint
        constraint product_units_of_measure_units_of_measure_id_fk
            references units_of_measure
);

create unique index if not exists
    product_units_of_measure_product_id_units_of_measure_id_ux
    on product_units_of_measure (product_id, units_of_measure_id);

create table if not exists shared_product
(
    id                    bigserial
        constraint group_products_pk primary key,
    shared_product_id     bigint not null
        constraint group_products_product_id_fk_2
            references product,
    individual_product_id bigint not null
        constraint group_products_product_id_fk
            references product
);

create table if not exists related_product
(
    id                bigserial
        constraint related_product_pk primary key,
    parent_product_id bigint not null
        constraint related_product_product_id_fk
            references product,
    child_product_id  bigint not null
        constraint related_product_product_id_fk_2
            references product
);

create table if not exists distribution_point
(
    id bigserial
        constraint distribution_point_pk
            primary key
);

create table if not exists address
(
    id                    bigserial
        constraint address_pk primary key,
    title                 text,
    code                  text,
    remark                text,
    region                integer not null,
    steads_objectguid     uuid,
    carplaces_objectguid  uuid,
    houses_objectguid     uuid,
    apartments_objectguid uuid,
    rooms_objectguid      uuid,
    level_1_object_id     bigint,
    level_2_object_id     bigint,
    level_3_object_id     bigint,
    level_4_object_id     bigint,
    level_5_object_id     bigint,
    level_6_object_id     bigint,
    level_7_object_id     bigint,
    level_8_object_id     bigint
);

create unique index if not exists address_code_ux on address (code);

create table if not exists location_option
(
    id     bigserial
        constraint address_option_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    address_option_code_ux
    on location_option (code);

create table if not exists address_distribution_point
(
    id                    bigserial
        constraint address_distribution_point_pk primary key,
    address_id            bigint
        constraint address_distribution_point_address_id_fk
            references address,
    distribution_point_id bigint
        constraint address_distribution_point_distribution_point_id_fk
            references distribution_point
);

create unique index if not exists
    address_distribution_point_address_id_distribution_point_id_ux
    on address_distribution_point (address_id, distribution_point_id);

create table if not exists metering_point
(
    id                    bigserial
        constraint metering_point_pk primary key,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    address_id            bigint,
    constraint metering_point_address_distribution_point_address_id_fk
        foreign key (address_id, distribution_point_id)
            references address_distribution_point
                (address_id, distribution_point_id),
    constraint
        metering_point_product_distributor_product_id_distributor_id_fk
        foreign key (product_id, distributor_id)
            references product_distributor (product_id, distributor_id)
);

create unique index if not exists
    metering_point_product_id_distributor_id_point_id_ux
    on metering_point
        (product_id, distributor_id, distribution_point_id);

create unique index if not exists
    metering_point_product_distributor_address_point_ux
    on metering_point (
                       product_id,
                       distributor_id,
                       address_id,
                       distribution_point_id
        );

create table if not exists transit_metering_point
(
    id                          bigserial,
    primary_metering_point_id   bigint
        constraint transit_metering_point_metering_point_id_fk
            references metering_point,
    secondary_metering_point_id bigint
        constraint transit_metering_point_metering_point_id_fk_2
            references metering_point
);

create table if not exists billing_period
(
    id     bigserial
        constraint billing_period_pk primary key,
    year   integer,
    month  integer,
    title  text,
    start  timestamp with time zone,
    finish timestamp with time zone
);

create unique index if not exists
    billing_period_year_month_ux on billing_period (year, month);

create table if not exists testing_rule
(
    id     bigserial
        constraint testing_rule_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    testing_rule_code_ux on testing_rule (code);

create table if not exists testing_set
(
    id     bigserial
        constraint testing_set_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    testing_set_code_ux on testing_set (code);

create table if not exists testing_run
(
    id             bigserial
        constraint testing_run_pk primary key,
    start_time     timestamp with time zone,
    testing_set_id bigint
        constraint testing_run_testing_set_id_fk
            references testing_set,
    remark         text,
    year           integer,
    month          integer,
    constraint testing_run_billing_period_year_month_fk
        foreign key (year, month)
            references billing_period (year, month)
);

create unique index if not exists
    testing_run_id_testing_set_id_ux
    on testing_run (id, testing_set_id);

create unique index if not exists
    testing_run_year_month_id_ux
    on testing_run (year, month, id);

create table if not exists testing_rule_set
(
    id              bigserial
        constraint testing_set_testing_rule_pk primary key,
    testing_set_id  bigint
        constraint testing_set_testing_rule_testing_set_id_fk
            references testing_set,
    testing_rule_id bigint
        constraint testing_set_testing_rule_testing_rule_id_fk
            references testing_rule
);

create unique index if not exists
    testing_set_testing_rule_testing_set_id_testing_rule_id_ux
    on testing_rule_set (testing_set_id, testing_rule_id);

create table if not exists reason_of_weeded_out
(
    id              bigserial
        constraint testing_run_testing_set_testing_rule_pk primary key,
    testing_run_id  bigint,
    testing_set_id  bigint,
    testing_rule_id bigint,
    constraint testing_run_testing_set_testing_rule_testing_rule_id_fk
        foreign key (testing_set_id, testing_rule_id)
            references testing_rule_set
                (testing_set_id, testing_rule_id),
    constraint testing_run_testing_set_testing_rule_testing_run_id_fk
        foreign key (testing_run_id, testing_set_id)
            references testing_run (id, testing_set_id)
);

create unique index if not exists
    reason_for_weed_out_testing_run_id_testing_set_id_rule_id_ux
    on reason_of_weeded_out
        (testing_run_id, testing_set_id, testing_rule_id);

create table if not exists metering_device_model
(
    id     bigserial
        constraint metering_device_model_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    metering_device_model_code_ux
    on metering_device_model (code);

create table if not exists device_option
(
    id     serial
        constraint device_option_pk primary key,
    title  integer,
    code   integer,
    remark integer
);

create unique index if not exists
    device_option_code_ux
    on device_option (code);

create table if not exists number_device_option_metering_device_model
(
    id                       bigserial
        constraint number_device_option_metering_device_model_pk
            primary key,
    device_option_id         bigint
        constraint
            number_device_option_metering_device_model_device_option_id_fk
            references device_option,
    metering_device_model_id bigint
        constraint
            number_device_option_metering_device_model_metering_device_fk
            references metering_device_model,
    number_value             numeric(18, 6)
);

create table if not exists measuring_scale
(
    id                  bigserial
        constraint measuring_scale_pk primary key,
    title               text,
    code                text,
    remark              text,
    readings_limit      bigint,
    readings_resolution bigint
);

create unique index if not exists
    measuring_scale_code_ux
    on measuring_scale (code);

create table if not exists readings_purpose
(
    id     bigserial
        constraint readings_purpose_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    readings_purpose_code_ux
    on readings_purpose (code);

create table if not exists device_model_scale
(
    id                       bigserial,
    metering_device_model_id bigint
        constraint device_model_scale_metering_device_model_id_fk
            references metering_device_model,
    measuring_scale_id       bigint
        constraint device_model_scale_measuring_scale_id_fk
            references measuring_scale,
    readings_purpose_id      bigint
        constraint device_model_scale_readings_purpose_id_fk
            references readings_purpose,
    units_of_measure_id      bigint
        constraint device_model_scale_units_of_measure_id_fk
            references units_of_measure
);

create unique index if not exists
    device_model_scale_metering_device_model_id_id_ux
    on device_model_scale (metering_device_model_id, id);

create table if not exists metering_device_model_product
(
    id                       bigserial
        constraint metering_device_model_product_pk primary key,
    product_id               bigint
        constraint metering_device_model_product_product_id_fk
            references product,
    metering_device_model_id bigint
        constraint
            metering_device_model_product_metering_device_model_id_fk
            references metering_device_model
);

create unique index if not exists
    metering_device_model_product_product_device_model_id_ux
    on metering_device_model_product
        (product_id, metering_device_model_id);

create table if not exists metering_device
(
    metering_device_model_id bigint,
    start                    timestamp with time zone,
    finish                   timestamp with time zone,
    serial                   text,
    product_id               bigint,
    distributor_id           bigint,
    distribution_point_id    bigint,
    id                       bigserial
        constraint metering_device_pk primary key,
    constraint
        metering_device_metering_device_model_product_product_model_fk
        foreign key (product_id, metering_device_model_id)
            references metering_device_model_product
                (product_id, metering_device_model_id),
    constraint
        metering_device_metering_point_product_id_distributor_id_fk
        foreign key (product_id, distributor_id, distribution_point_id)
            references metering_point
                (product_id, distributor_id, distribution_point_id)
);

create unique index if not exists
    metering_device_product_distributor_point_model_start_ux
    on metering_device
        (
         product_id,
         distributor_id,
         distribution_point_id,
         metering_device_model_id,
         start
            );

create table if not exists product_personal_account
(
    product_id          bigint
        constraint product_personal_account_product_id_fk
            references product,
    personal_account_id bigint,
    id                  bigserial
        constraint product_personal_account_pk primary key,
    customer_id         bigint,
    constraint
        product_personal_account_personal_account_customer_id_id_fk
        foreign key (customer_id, personal_account_id)
            references personal_account (customer_id, id)
);

create unique index if not exists
    product_personal_account_product_customer_account_id_ux
    on product_personal_account
        (customer_id, personal_account_id, product_id);

create table if not exists personal_account_share
(
    id                    bigserial
        constraint personal_account_share_pk primary key,
    personal_account_id   bigint,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    address_id            bigint,
    customer_id           bigint,
    share_dividend        integer,
    share_divisor         integer default 1,
    constraint
        personal_account_share_metering_point_product_address_fk
        foreign key
            (
             product_id,
             distributor_id,
             address_id,
             distribution_point_id
                )
            references metering_point
                (
                 product_id,
                 distributor_id,
                 address_id,
                 distribution_point_id
                    ),
    constraint
        personal_account_share_product_personal_account_customer_id_fk
        foreign key (customer_id, personal_account_id, product_id)
            references product_personal_account
                (
                 customer_id,
                 personal_account_id,
                 product_id
                    )
);

comment on column personal_account_share.share_dividend is \'Делимое\';

comment on column personal_account_share.share_divisor is \'Делитель\';


create unique index if not exists
    personal_account_share_product_address_account_id_ux
    on personal_account_share
        (
         product_id,
         distributor_id,
         address_id,
         personal_account_id,
         distribution_point_id
            );

create unique index if not exists
    personal_account_share_product_point_customer_account_ux
    on personal_account_share
        (
         product_id,
         distributor_id,
         address_id,
         distribution_point_id,
         customer_id,
         personal_account_id
            );

create table if not exists readings_sender
(
    id     bigserial
        constraint readings_sender_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    readings_sender_code_ux on readings_sender (code);

create table if not exists readings_way
(
    id     bigserial
        constraint readings_way_pk primary key,
    title  text,
    code   text,
    remark text
);

create unique index if not exists
    readings_way_code_ux on readings_way (code);

create table if not exists readings_sender_readings_way
(
    id                 bigserial
        constraint readings_sender_readings_way_pk primary key,
    readings_sender_id bigint
        constraint readings_sender_readings_way_readings_sender_id_fk
            references readings_sender,
    readings_way_id    bigint
        constraint readings_sender_readings_way_readings_way_id_fk
            references readings_way
);

create unique index if not exists
    readings_sender_readings_way_readings_sender_id_readings_way_id
    on readings_sender_readings_way
        (readings_sender_id, readings_way_id);

create table if not exists raw_readings
(
    id                       bigserial
        constraint raw_readings_pk primary key,
    readings                 text,
    upload_time              timestamp with time zone,
    device_model_scale_id    bigint,
    metering_device_model_id bigint,
    product_id               bigint,
    readings_sender_id       bigint,
    readings_way_id          bigint,
    distributor_id           bigint,
    distribution_point_id    bigint,
    start                    timestamp,
    is_scale_overflow        integer,
    constraint
        raw_readings_device_model_scale_id_metering_device_model_id_fk
        foreign key (device_model_scale_id, metering_device_model_id)
            references device_model_scale
                (id, metering_device_model_id),
    constraint
        raw_readings_readings_sender_readings_way_readings_sender_id_fk
        foreign key (readings_sender_id, readings_way_id)
            references readings_sender_readings_way
                (readings_sender_id, readings_way_id),
    constraint
        raw_readings_metering_device_product_id_distributor_id_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             metering_device_model_id,
             start
                )
            references metering_device
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 metering_device_model_id,
                 start
                    )
);

create unique index if not exists
    raw_readings_product_id_distributor_id_point_id_id_ux
    on raw_readings
        (product_id, distributor_id, distribution_point_id, id);

create table if not exists weed_out_meter_readings
(
    id                    bigserial
        constraint weed_out_meter_readings_pk primary key,
    remark                text,
    raw_readings_id       bigint,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    testing_run_id        bigint,
    testing_set_id        bigint,
    testing_rule_id       bigint,
    constraint
        weed_out_meter_readings_raw_readings_product_distributor_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             raw_readings_id
                )
            references raw_readings
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 id
                    ),
    constraint weed_out_meter_readings_testing_run_set_rule_id_fk
        foreign key (
                     testing_run_id,
                     testing_set_id,
                     testing_rule_id
            )
            references reason_of_weeded_out
                (
                 testing_run_id,
                 testing_set_id,
                 testing_rule_id
                    )
);

create table if not exists approved_meter_readings
(
    id                    bigserial
        constraint approved_meter_readings_pk primary key,
    raw_readings_id       bigint,
    testing_run_id        bigint,
    testing_set_id        bigint,
    year                  integer,
    month                 integer,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    constraint
        approved_meter_readings_testing_run_id_testing_set_id_fk
        foreign key (testing_run_id, testing_set_id)
            references testing_run (id, testing_set_id),
    constraint approved_meter_readings_testing_run_year_month_id_fk
        foreign key (year, month, testing_run_id)
            references testing_run (year, month, id),
    constraint
        approved_meter_readings_raw_readings_product_distributor_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             raw_readings_id
                )
            references raw_readings
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 id
                    )
);

create unique index if not exists
    approved_meter_readings_product_distributor_year_month_run_ux
    on approved_meter_readings
        (
         product_id,
         distributor_id,
         distribution_point_id,
         year,
         month,
         testing_run_id,
         raw_readings_id
            );

create table if not exists meter_readings
(
    id                    bigserial
        constraint meter_readings_pk primary key,
    raw_readings_id       bigint,
    year                  integer,
    month                 integer,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    testing_run_id        bigint,
    constraint
        meter_readings_approved_meter_readings_product_distributor_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             year,
             month,
             testing_run_id,
             raw_readings_id
                )
            references approved_meter_readings
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 year,
                 month,
                 testing_run_id,
                 raw_readings_id
                    )
);

create unique index if not exists
    meter_readings_product_distributor_point_year_month_ux
    on meter_readings
        (
         product_id,
         distributor_id,
         distribution_point_id,
         year,
         month
            );

create table if not exists meter_usage
(
    id                    bigserial
        constraint meter_usage_pk primary key,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    previous_year         integer,
    previous_month        integer,
    year                  integer,
    month                 integer,
    volume                bigint,
    units_of_measure_id   bigint,
    constraint
        meter_usage_meter_readings_product_distributor_point_year1_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             previous_year,
             previous_month
                )
            references meter_readings
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 year,
                 month
                    ),
    constraint
        meter_usage_meter_readings_product_distributor_point_year2_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             year,
             month
                )
            references meter_readings
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 year,
                 month
                    ),
    constraint
        meter_usage_product_units_of_measure_product_id_units_fk
        foreign key (product_id, units_of_measure_id)
            references product_units_of_measure
                (product_id, units_of_measure_id)
);

create unique index if not exists
    meter_usage_product_distributor_point_year_month_units_ux
    on meter_usage
        (
         product_id,
         distributor_id,
         distribution_point_id,
         year,
         month,
         units_of_measure_id
            );

create table if not exists personal_product_usage
(
    id                    bigserial
        constraint personal_share_product_usage_pk primary key,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    year                  integer,
    month                 integer,
    personal_account_id   bigint,
    volume                bigint,
    units_of_measure_id   bigint,
    address_id            bigint,
    customer_id           bigint,
    constraint
        personal_share_product_usage_meter_usage_product_id_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             year,
             month,
             units_of_measure_id
                )
            references meter_usage
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 year,
                 month,
                 units_of_measure_id
                    ),
    constraint
        personal_product_usage_personal_account_share_product_id_fk
        foreign key
            (
             product_id,
             distributor_id,
             address_id,
             distribution_point_id,
             customer_id,
             personal_account_id
                )
            references personal_account_share
                (
                 product_id,
                 distributor_id,
                 address_id,
                 distribution_point_id,
                 customer_id,
                 personal_account_id
                    )
);

create unique index if not exists
    personal_product_usage_product_address_account_year_month_ux
    on personal_product_usage
        (
         product_id,
         distributor_id,
         address_id,
         personal_account_id,
         distribution_point_id,
         year,
         month
            );

create unique index if not exists
    personal_product_usage_product_address_customer_account_ux
    on personal_product_usage
        (
         product_id,
         distributor_id,
         address_id,
         distribution_point_id,
         customer_id,
         personal_account_id,
         year,
         month
            );

create table if not exists control_panel
(
    id            bigserial
        constraint control_panel_pk primary key,
    login         text,
    password_hash text
);

create table if not exists contract_control_panel
(
    id               bigserial
        constraint contract_control_panel_pk primary key,
    contract_id      bigint
        constraint contract_control_panel_contract_id_fk
            references contract,
    control_panel_id bigint
        constraint contract_control_panel_control_panel_id_fk
            references control_panel
);

create table if not exists control_panel_metering_device
(
    id                 bigserial
        constraint control_panel_metering_device_pk primary key,
    control_panel_id   bigint
        constraint control_panel_metering_device_control_panel_id_fk
            references control_panel,
    metering_device_id bigint
        constraint control_panel_metering_device_metering_device_id_fk
            references metering_device
);

create table if not exists currency
(
    id                  bigserial
        constraint currency_pk primary key,
    units_of_measure_id bigint
        constraint currency_units_of_measure_id_fk
            references units_of_measure
);

create unique index if not exists
    currency_units_of_measure_id_ux on currency (units_of_measure_id);

create table if not exists invoice
(
    id                  bigserial
        constraint invoice_pk primary key,
    personal_account_id integer,
    year                integer,
    month               integer,
    billed              timestamp with time zone,
    amount              bigint,
    units_of_measure_id bigint
        constraint invoice_currency_units_of_measure_id_fk
            references currency (units_of_measure_id),
    constraint invoice_billing_period_year_month_fk
        foreign key (year, month)
            references billing_period (year, month)
);

create unique index if not exists
    invoice_personal_account_id_year_month_ux
    on invoice (personal_account_id, year, month);

create unique index if not exists
    invoice_personal_account_id_units_of_measure_id_year_month_ux
    on invoice (personal_account_id, units_of_measure_id, year, month);

create table if not exists invoice_product_usage
(
    id                    bigserial
        constraint invoice_product_usage_pk primary key,
    personal_account_id   bigint,
    year                  integer,
    month                 integer,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id integer,
    amount                bigint,
    units_of_measure_id   bigint,
    constraint
        invoice_product_usage_invoice_personal_account_id_year_month_fk
        foreign key (personal_account_id, year, month)
            references invoice (personal_account_id, year, month),
    constraint
        invoice_product_usage_invoice_account_id_units_id_year_month_fk
        foreign key (
                     personal_account_id,
                     units_of_measure_id,
                     year,
                     month
            )
            references invoice
                (
                 personal_account_id,
                 units_of_measure_id,
                 year,
                 month
                    )
);

create unique index if not exists
    invoice_product_usage_product_distributor_point_year_month_ux
    on invoice_product_usage
        (
         product_id,
         distributor_id,
         distribution_point_id,
         year,
         month,
         personal_account_id,
         units_of_measure_id
            );

create table if not exists payment
(
    id                  bigserial
        constraint payout_pk primary key,
    personal_account_id bigint
        constraint payout_personal_account_id_fk
            references personal_account,
    paid_at             timestamp with time zone,
    amount              bigint,
    units_of_measure_id bigint
        constraint payout_currency_units_of_measure_id_fk
            references currency (units_of_measure_id)
);

create table if not exists cashbox_receipt
(
    id         bigserial
        constraint cashbox_receipt_pk primary key,
    payment_id bigint
        constraint cashbox_receipt_payout_id_fk
            references payment
);

create table if not exists invoice_product_usage_detail
(
    id                    bigserial
        constraint invoice_product_usage_detail_pk primary key,
    product_id            bigint,
    distributor_id        bigint,
    distribution_point_id bigint,
    personal_account_id   bigint,
    year                  integer,
    month                 integer,
    billing_option_id     bigint,
    amount                integer,
    units_of_measure_id   bigint,
    address_id            bigint,
    customer_id           bigint,
    constraint
        invoice_product_usage_detail_product_distributor_point_year_fk
        foreign key
            (
             product_id,
             distributor_id,
             distribution_point_id,
             year,
             month,
             personal_account_id,
             units_of_measure_id
                )
            references invoice_product_usage
                (
                 product_id,
                 distributor_id,
                 distribution_point_id,
                 year,
                 month,
                 personal_account_id,
                 units_of_measure_id
                    ),
    constraint
        invoice_product_usage_detail_product_address_customer_year_fk
        foreign key
            (
             product_id,
             distributor_id,
             address_id,
             distribution_point_id,
             customer_id,
             personal_account_id,
             year,
             month
                )
            references personal_product_usage
                (
                 product_id,
                 distributor_id,
                 address_id,
                 distribution_point_id,
                 customer_id,
                 personal_account_id,
                 year,
                 month
                    )
);

create table if not exists natural_person_option
(
    id     bigserial
        constraint naturel_person_option_pk primary key,
    title  text,
    code   text,
    remark text
);

create table if not exists legal_entity_option
(
    id     bigserial
        constraint legal_entity_option_pk primary key,
    title  text,
    code   text,
    remark text
);

create table if not exists natural_person_billing_option
(
    id                       bigserial
        constraint natural_person_billing_option_pk primary key,
    natural_person_option_id bigint
        constraint
            natural_person_billing_option_natural_person_option_id_fk
            references natural_person_option,
    billing_option_id        bigint
        constraint
            natural_person_billing_option_billing_option_id_fk
            references billing_option
);

create unique index if not exists
    natural_person_billing_option_billing_option_id_ux
    on natural_person_billing_option (billing_option_id);

create unique index if not exists
    natural_person_billing_option_billing_option_natural_option_ux
    on natural_person_billing_option
        (billing_option_id, natural_person_option_id);

create table if not exists customer_natural_person_option
(
    id                       bigserial
        constraint customer_natural_person_option_pk primary key,
    billing_option_id        bigint,
    natural_person_option_id bigint,
    customer_id              bigint
        constraint
            customer_natural_person_option_natural_person_customer_id_fk
            references natural_person (customer_id),
    constraint
        customer_natural_person_option_natural_person_billing_option_fk
        foreign key (billing_option_id, natural_person_option_id)
            references natural_person_billing_option
                (billing_option_id, natural_person_option_id)
);

create table if not exists legal_entity_billing_option
(
    id                     bigserial
        constraint legal_entity_billing_option_pk primary key,
    billing_option_id      bigint
        constraint legal_entity_billing_option_billing_option_id_fk
            references billing_option,
    legal_entity_option_id bigint
        constraint
            legal_entity_billing_option_legal_entity_option_id_fk
            references legal_entity_option
);

create unique index if not exists
    legal_entity_billing_option_billing_option_legal_option_ux
    on legal_entity_billing_option
        (billing_option_id, legal_entity_option_id);

create table if not exists customer_legal_entity_option
(
    id                     bigserial
        constraint customer_legal_entity_option_pk primary key,
    billing_option_id      bigint,
    legal_entity_option_id bigint,
    customer_id            bigint
        constraint
            customer_legal_entity_option_legal_entity_customer_id_fk
            references legal_entity (customer_id),
    constraint
        customer_legal_entity_option_legal_entity_billing_option_fk
        foreign key (billing_option_id, legal_entity_option_id)
            references legal_entity_billing_option
                (billing_option_id, legal_entity_option_id)
);

create table if not exists location_billing_option
(
    id                 bigserial
        constraint location_billing_option_pk primary key,
    billing_option_id  bigint
        constraint location_billing_option_billing_option_id_fk
            references billing_option,
    location_option_id bigint
        constraint location_billing_option_location_option_id_fk
            references location_option
);

create unique index if not exists
    location_billing_option_billing_option_id_location_option_id_ui
    on location_billing_option (billing_option_id, location_option_id);

create table if not exists address_location_option
(
    id                 bigserial
        constraint address_location_option_pk primary key,
    billing_option_id  bigint,
    location_option_id bigint,
    address_id         bigint
        constraint address_location_option_address_id_fk
            references address,
    constraint
        address_location_option_location_billing_option_billing_fk
        foreign key (billing_option_id, location_option_id)
            references location_billing_option
                (billing_option_id, location_option_id)
);

create table if not exists personal_account_option
(
    id     bigserial
        constraint personal_account_option_pk primary key,
    title  text,
    code   text,
    remark text
);

create table if not exists personal_account_billing_option
(
    id                         bigserial
        constraint personal_account_billing_option_pk primary key,
    personal_account_option_id bigint
        constraint
            personal_account_billing_option_personal_account_option_id_fk
            references personal_account_option,
    billing_option_id          bigint
        constraint
            personal_account_billing_option_billing_option_id_fk
            references billing_option
);

create unique index if not exists
    personal_account_billing_option_billing_option_id_ux
    on personal_account_billing_option (billing_option_id);

create unique index if not exists
    personal_account_billing_option_billing_account_option_ux
    on personal_account_billing_option
        (billing_option_id, personal_account_option_id);

create table if not exists contract_personal_account_option
(
    id                         bigserial
        constraint contract_personal_account_option_pk primary key,
    billing_option_id          bigint,
    personal_account_option_id bigint,
    contract_id                bigint,
    personal_account_id        bigint,
    constraint
        contract_personal_account_option_contract_id_account_id_fk
        foreign key (contract_id, personal_account_id)
            references personal_account (contract_id, id),
    constraint
        contract_personal_account_option_billing_account_option_id_fk
        foreign key (billing_option_id, personal_account_option_id)
            references personal_account_billing_option
                (billing_option_id, personal_account_option_id)
);
'
        );


        $this->connection->commit();
    }

    public function down(Schema $schema): void
    {
        $this->connection->beginTransaction();
        /** @var Connection $conn */
        $conn = $this->connection->getNativeConnection();
        $conn->exec('
drop table if exists conversion_ratio;
drop table if exists shared_product;
drop table if exists related_product;
drop table if exists transit_metering_point;
drop table if exists weed_out_meter_readings;
drop table if exists reason_of_weeded_out;
drop table if exists testing_rule_set;
drop table if exists testing_rule;
drop table if exists number_device_option_metering_device_model;
drop table if exists device_option;
drop table if exists cashbox_receipt;
drop table if exists payment;
drop table if exists contract_control_panel;
drop table if exists control_panel_metering_device;
drop table if exists control_panel;
drop table if exists invoice_product_usage_detail;
drop table if exists personal_product_usage;
drop table if exists personal_account_share;
drop table if exists product_personal_account;
drop table if exists meter_usage;
drop table if exists product_units_of_measure;
drop table if exists meter_readings;
drop table if exists approved_meter_readings;
drop table if exists raw_readings;
drop table if exists testing_run;
drop table if exists testing_set;
drop table if exists device_model_scale;
drop table if exists measuring_scale;
drop table if exists readings_purpose;
drop table if exists metering_device;
drop table if exists metering_point;
drop table if exists product_distributor;
drop table if exists distributor;
drop table if exists address_distribution_point;
drop table if exists distribution_point;
drop table if exists metering_device_model_product;
drop table if exists product;
drop table if exists metering_device_model;
drop table if exists readings_sender_readings_way;
drop table if exists readings_sender;
drop table if exists readings_way;
drop table if exists invoice_product_usage;
drop table if exists invoice;
drop table if exists billing_period;
drop table if exists currency;
drop table if exists units_of_measure;
drop table if exists customer_natural_person_option;
drop table if exists natural_person;
drop table if exists natural_person_billing_option;
drop table if exists natural_person_option;
drop table if exists customer_legal_entity_option;
drop table if exists legal_entity;
drop table if exists legal_entity_billing_option;
drop table if exists legal_entity_option;
drop table if exists address_location_option;
drop table if exists address;
drop table if exists location_billing_option;
drop table if exists location_option;
drop table if exists contract_personal_account_option;
drop table if exists personal_account;
drop table if exists contract;
drop table if exists customer;
drop table if exists personal_account_billing_option;
drop table if exists billing_option;
drop table if exists personal_account_option;
'
        );


        $this->connection->commit();
    }
}
