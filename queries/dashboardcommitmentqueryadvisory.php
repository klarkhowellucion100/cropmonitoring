<?php $yearnow=date('Y'); ?>

<?php
$query1 = mysqli_query($conn,"SELECT
production_validated_cms.id,
production_validated_cms.code,
production_validated_cms.name,
registrationhubpos.barangay,
production_validated_cms.comm,
production_validated_cms.hills,
production_validated_cms.date_sown,
production_validated_cms.status_from_admin,
production_validated_cms.status_comm,
production_validated_cms.date_trans,
production_validated_cms.date_harvest,
YEAR(production_validated_cms.date_harvest) AS prod_harvest,
production_validated_cms.date_range,
MAX(production_validated_cms.date_harvest) AS last_harvest_date,

SUM(CASE WHEN production_validated_cms.week_harvest = '1' THEN production_validated_cms.vol_del_week END) AS Week1,
MAX(CASE WHEN production_validated_cms.week_harvest = '1' THEN production_validated_cms.id END)AS id1,
MAX(CASE WHEN production_validated_cms.week_harvest = '1' THEN production_validated_cms.status_mon END)AS status1,
MAX(CASE WHEN production_validated_cms.week_harvest = '1' THEN production_validated_cms.status_details END)AS details1,

SUM(CASE WHEN production_validated_cms.week_harvest = '2' THEN production_validated_cms.vol_del_week END) AS Week2,
MAX(CASE WHEN production_validated_cms.week_harvest = '2' THEN production_validated_cms.id END)AS id2,
MAX(CASE WHEN production_validated_cms.week_harvest = '2' THEN production_validated_cms.status_mon END)AS status2,
MAX(CASE WHEN production_validated_cms.week_harvest = '2' THEN production_validated_cms.status_details END)AS details2,

SUM(CASE WHEN production_validated_cms.week_harvest = '3' THEN production_validated_cms.vol_del_week END) AS Week3,
MAX(CASE WHEN production_validated_cms.week_harvest = '3' THEN production_validated_cms.id END)AS id3,
MAX(CASE WHEN production_validated_cms.week_harvest = '3' THEN production_validated_cms.status_mon END)AS status3,
MAX(CASE WHEN production_validated_cms.week_harvest = '3' THEN production_validated_cms.status_details END)AS details3,

SUM(CASE WHEN production_validated_cms.week_harvest = '4' THEN production_validated_cms.vol_del_week END) AS Week4,
MAX(CASE WHEN production_validated_cms.week_harvest = '4' THEN production_validated_cms.id END)AS id4,
MAX(CASE WHEN production_validated_cms.week_harvest = '4' THEN production_validated_cms.status_mon END)AS status4,
MAX(CASE WHEN production_validated_cms.week_harvest = '4' THEN production_validated_cms.status_details END)AS details4,

SUM(CASE WHEN production_validated_cms.week_harvest = '5' THEN production_validated_cms.vol_del_week END) AS Week5,
MAX(CASE WHEN production_validated_cms.week_harvest = '5' THEN production_validated_cms.id END)AS id5,
MAX(CASE WHEN production_validated_cms.week_harvest = '5' THEN production_validated_cms.status_mon END)AS status5,
MAX(CASE WHEN production_validated_cms.week_harvest = '5' THEN production_validated_cms.status_details END)AS details5,

SUM(CASE WHEN production_validated_cms.week_harvest = '6' THEN production_validated_cms.vol_del_week END) AS Week6,
MAX(CASE WHEN production_validated_cms.week_harvest = '6' THEN production_validated_cms.id END)AS id6,
MAX(CASE WHEN production_validated_cms.week_harvest = '6' THEN production_validated_cms.status_mon END)AS status6,
MAX(CASE WHEN production_validated_cms.week_harvest = '6' THEN production_validated_cms.status_details END)AS details6,

SUM(CASE WHEN production_validated_cms.week_harvest = '7' THEN production_validated_cms.vol_del_week END) AS Week7,
MAX(CASE WHEN production_validated_cms.week_harvest = '7' THEN production_validated_cms.id END)AS id7,
MAX(CASE WHEN production_validated_cms.week_harvest = '7' THEN production_validated_cms.status_mon END)AS status7,
MAX(CASE WHEN production_validated_cms.week_harvest = '7' THEN production_validated_cms.status_details END)AS details7,

SUM(CASE WHEN production_validated_cms.week_harvest = '8' THEN production_validated_cms.vol_del_week END) AS Week8,
MAX(CASE WHEN production_validated_cms.week_harvest = '8' THEN production_validated_cms.id END)AS id8,
MAX(CASE WHEN production_validated_cms.week_harvest = '8' THEN production_validated_cms.status_mon END)AS status8,
MAX(CASE WHEN production_validated_cms.week_harvest = '8' THEN production_validated_cms.status_details END)AS details8,

SUM(CASE WHEN production_validated_cms.week_harvest = '9' THEN production_validated_cms.vol_del_week END) AS Week9,
MAX(CASE WHEN production_validated_cms.week_harvest = '9' THEN production_validated_cms.id END)AS id9,
MAX(CASE WHEN production_validated_cms.week_harvest = '9' THEN production_validated_cms.status_mon END)AS status9,
MAX(CASE WHEN production_validated_cms.week_harvest = '9' THEN production_validated_cms.status_details END)AS details9,

SUM(CASE WHEN production_validated_cms.week_harvest = '10' THEN production_validated_cms.vol_del_week END) AS Week10,
MAX(CASE WHEN production_validated_cms.week_harvest = '10' THEN production_validated_cms.id END)AS id10,
MAX(CASE WHEN production_validated_cms.week_harvest = '10' THEN production_validated_cms.status_mon END)AS status10,
MAX(CASE WHEN production_validated_cms.week_harvest = '10' THEN production_validated_cms.status_details END)AS details10,

SUM(CASE WHEN production_validated_cms.week_harvest = '11' THEN production_validated_cms.vol_del_week END) AS Week11,
MAX(CASE WHEN production_validated_cms.week_harvest = '11' THEN production_validated_cms.id END)AS id11,
MAX(CASE WHEN production_validated_cms.week_harvest = '11' THEN production_validated_cms.status_mon END)AS status11,
MAX(CASE WHEN production_validated_cms.week_harvest = '11' THEN production_validated_cms.status_details END)AS details11,

SUM(CASE WHEN production_validated_cms.week_harvest = '12' THEN production_validated_cms.vol_del_week END) AS Week12,
MAX(CASE WHEN production_validated_cms.week_harvest = '12' THEN production_validated_cms.id END)AS id12,
MAX(CASE WHEN production_validated_cms.week_harvest = '12' THEN production_validated_cms.status_mon END)AS status12,
MAX(CASE WHEN production_validated_cms.week_harvest = '12' THEN production_validated_cms.status_details END)AS details12,

SUM(CASE WHEN production_validated_cms.week_harvest = '13' THEN production_validated_cms.vol_del_week END) AS Week13,
MAX(CASE WHEN production_validated_cms.week_harvest = '13' THEN production_validated_cms.id END)AS id13,
MAX(CASE WHEN production_validated_cms.week_harvest = '13' THEN production_validated_cms.status_mon END)AS status13,
MAX(CASE WHEN production_validated_cms.week_harvest = '13' THEN production_validated_cms.status_details END)AS details13,

SUM(CASE WHEN production_validated_cms.week_harvest = '14' THEN production_validated_cms.vol_del_week END) AS Week14,
MAX(CASE WHEN production_validated_cms.week_harvest = '14' THEN production_validated_cms.id END)AS id14,
MAX(CASE WHEN production_validated_cms.week_harvest = '14' THEN production_validated_cms.status_mon END)AS status14,
MAX(CASE WHEN production_validated_cms.week_harvest = '14' THEN production_validated_cms.status_details END)AS details14,

SUM(CASE WHEN production_validated_cms.week_harvest = '15' THEN production_validated_cms.vol_del_week END) AS Week15,
MAX(CASE WHEN production_validated_cms.week_harvest = '15' THEN production_validated_cms.id END)AS id15,
MAX(CASE WHEN production_validated_cms.week_harvest = '15' THEN production_validated_cms.status_mon END)AS status15,
MAX(CASE WHEN production_validated_cms.week_harvest = '15' THEN production_validated_cms.status_details END)AS details15,

SUM(CASE WHEN production_validated_cms.week_harvest = '16' THEN production_validated_cms.vol_del_week END) AS Week16,
MAX(CASE WHEN production_validated_cms.week_harvest = '16' THEN production_validated_cms.id END)AS id16,
MAX(CASE WHEN production_validated_cms.week_harvest = '16' THEN production_validated_cms.status_mon END)AS status16,
MAX(CASE WHEN production_validated_cms.week_harvest = '16' THEN production_validated_cms.status_details END)AS details16,

SUM(CASE WHEN production_validated_cms.week_harvest = '17' THEN production_validated_cms.vol_del_week END) AS Week17,
MAX(CASE WHEN production_validated_cms.week_harvest = '17' THEN production_validated_cms.id END)AS id17,
MAX(CASE WHEN production_validated_cms.week_harvest = '17' THEN production_validated_cms.status_mon END)AS status17,
MAX(CASE WHEN production_validated_cms.week_harvest = '17' THEN production_validated_cms.status_details END)AS details17,

SUM(CASE WHEN production_validated_cms.week_harvest = '18' THEN production_validated_cms.vol_del_week END) AS Week18,
MAX(CASE WHEN production_validated_cms.week_harvest = '18' THEN production_validated_cms.id END)AS id18,
MAX(CASE WHEN production_validated_cms.week_harvest = '18' THEN production_validated_cms.status_mon END)AS status18,
MAX(CASE WHEN production_validated_cms.week_harvest = '18' THEN production_validated_cms.status_details END)AS details18,

SUM(CASE WHEN production_validated_cms.week_harvest = '19' THEN production_validated_cms.vol_del_week END) AS Week19,
MAX(CASE WHEN production_validated_cms.week_harvest = '19' THEN production_validated_cms.id END)AS id19,
MAX(CASE WHEN production_validated_cms.week_harvest = '19' THEN production_validated_cms.status_mon END)AS status19,
MAX(CASE WHEN production_validated_cms.week_harvest = '19' THEN production_validated_cms.status_details END)AS details19,

SUM(CASE WHEN production_validated_cms.week_harvest = '20' THEN production_validated_cms.vol_del_week END) AS Week20,
MAX(CASE WHEN production_validated_cms.week_harvest = '20' THEN production_validated_cms.id END)AS id20,
MAX(CASE WHEN production_validated_cms.week_harvest = '20' THEN production_validated_cms.status_mon END)AS status20,
MAX(CASE WHEN production_validated_cms.week_harvest = '20' THEN production_validated_cms.status_details END)AS details20,

SUM(CASE WHEN production_validated_cms.week_harvest = '21' THEN production_validated_cms.vol_del_week END) AS Week21,
MAX(CASE WHEN production_validated_cms.week_harvest = '21' THEN production_validated_cms.id END)AS id21,
MAX(CASE WHEN production_validated_cms.week_harvest = '21' THEN production_validated_cms.status_mon END)AS status21,
MAX(CASE WHEN production_validated_cms.week_harvest = '21' THEN production_validated_cms.status_details END)AS details21,

SUM(CASE WHEN production_validated_cms.week_harvest = '22' THEN production_validated_cms.vol_del_week END) AS Week22,
MAX(CASE WHEN production_validated_cms.week_harvest = '22' THEN production_validated_cms.id END)AS id22,
MAX(CASE WHEN production_validated_cms.week_harvest = '22' THEN production_validated_cms.status_mon END)AS status22,
MAX(CASE WHEN production_validated_cms.week_harvest = '22' THEN production_validated_cms.status_details END)AS details22,

SUM(CASE WHEN production_validated_cms.week_harvest = '23' THEN production_validated_cms.vol_del_week END) AS Week23,
MAX(CASE WHEN production_validated_cms.week_harvest = '23' THEN production_validated_cms.id END)AS id23,
MAX(CASE WHEN production_validated_cms.week_harvest = '23' THEN production_validated_cms.status_mon END)AS status23,
MAX(CASE WHEN production_validated_cms.week_harvest = '23' THEN production_validated_cms.status_details END)AS details23,

SUM(CASE WHEN production_validated_cms.week_harvest = '24' THEN production_validated_cms.vol_del_week END) AS Week24,
MAX(CASE WHEN production_validated_cms.week_harvest = '24' THEN production_validated_cms.id END)AS id24,
MAX(CASE WHEN production_validated_cms.week_harvest = '24' THEN production_validated_cms.status_mon END)AS status24,
MAX(CASE WHEN production_validated_cms.week_harvest = '24' THEN production_validated_cms.status_details END)AS details24,

SUM(CASE WHEN production_validated_cms.week_harvest = '25' THEN production_validated_cms.vol_del_week END) AS Week25,
MAX(CASE WHEN production_validated_cms.week_harvest = '25' THEN production_validated_cms.id END)AS id25,
MAX(CASE WHEN production_validated_cms.week_harvest = '25' THEN production_validated_cms.status_mon END)AS status25,
MAX(CASE WHEN production_validated_cms.week_harvest = '25' THEN production_validated_cms.status_details END)AS details25,

SUM(CASE WHEN production_validated_cms.week_harvest = '26' THEN production_validated_cms.vol_del_week END) AS Week26,
MAX(CASE WHEN production_validated_cms.week_harvest = '26' THEN production_validated_cms.id END)AS id26,
MAX(CASE WHEN production_validated_cms.week_harvest = '26' THEN production_validated_cms.status_mon END)AS status26,
MAX(CASE WHEN production_validated_cms.week_harvest = '26' THEN production_validated_cms.status_details END)AS details26,

SUM(CASE WHEN production_validated_cms.week_harvest = '27' THEN production_validated_cms.vol_del_week END) AS Week27,
MAX(CASE WHEN production_validated_cms.week_harvest = '27' THEN production_validated_cms.id END)AS id27,
MAX(CASE WHEN production_validated_cms.week_harvest = '27' THEN production_validated_cms.status_mon END)AS status27,
MAX(CASE WHEN production_validated_cms.week_harvest = '27' THEN production_validated_cms.status_details END)AS details27,

SUM(CASE WHEN production_validated_cms.week_harvest = '28' THEN production_validated_cms.vol_del_week END) AS Week28,
MAX(CASE WHEN production_validated_cms.week_harvest = '28' THEN production_validated_cms.id END)AS id28,
MAX(CASE WHEN production_validated_cms.week_harvest = '28' THEN production_validated_cms.status_mon END)AS status28,
MAX(CASE WHEN production_validated_cms.week_harvest = '28' THEN production_validated_cms.status_details END)AS details28,

SUM(CASE WHEN production_validated_cms.week_harvest = '29' THEN production_validated_cms.vol_del_week END) AS Week29,
MAX(CASE WHEN production_validated_cms.week_harvest = '29' THEN production_validated_cms.id END)AS id29,
MAX(CASE WHEN production_validated_cms.week_harvest = '29' THEN production_validated_cms.status_mon END)AS status29,
MAX(CASE WHEN production_validated_cms.week_harvest = '29' THEN production_validated_cms.status_details END)AS details29,

SUM(CASE WHEN production_validated_cms.week_harvest = '30' THEN production_validated_cms.vol_del_week END) AS Week30,
MAX(CASE WHEN production_validated_cms.week_harvest = '30' THEN production_validated_cms.id END)AS id30,
MAX(CASE WHEN production_validated_cms.week_harvest = '30' THEN production_validated_cms.status_mon END)AS status30,
MAX(CASE WHEN production_validated_cms.week_harvest = '30' THEN production_validated_cms.status_details END)AS details30,

SUM(CASE WHEN production_validated_cms.week_harvest = '31' THEN production_validated_cms.vol_del_week END) AS Week31,
MAX(CASE WHEN production_validated_cms.week_harvest = '31' THEN production_validated_cms.id END)AS id31,
MAX(CASE WHEN production_validated_cms.week_harvest = '31' THEN production_validated_cms.status_mon END)AS status31,
MAX(CASE WHEN production_validated_cms.week_harvest = '31' THEN production_validated_cms.status_details END)AS details31,

SUM(CASE WHEN production_validated_cms.week_harvest = '32' THEN production_validated_cms.vol_del_week END) AS Week32,
MAX(CASE WHEN production_validated_cms.week_harvest = '32' THEN production_validated_cms.id END)AS id32,
MAX(CASE WHEN production_validated_cms.week_harvest = '32' THEN production_validated_cms.status_mon END)AS status32,
MAX(CASE WHEN production_validated_cms.week_harvest = '32' THEN production_validated_cms.status_details END)AS details32,

SUM(CASE WHEN production_validated_cms.week_harvest = '33' THEN production_validated_cms.vol_del_week END) AS Week33,
MAX(CASE WHEN production_validated_cms.week_harvest = '33' THEN production_validated_cms.id END)AS id33,
MAX(CASE WHEN production_validated_cms.week_harvest = '33' THEN production_validated_cms.status_mon END)AS status33,
MAX(CASE WHEN production_validated_cms.week_harvest = '33' THEN production_validated_cms.status_details END)AS details33,

SUM(CASE WHEN production_validated_cms.week_harvest = '34' THEN production_validated_cms.vol_del_week END) AS Week34,
MAX(CASE WHEN production_validated_cms.week_harvest = '34' THEN production_validated_cms.id END)AS id34,
MAX(CASE WHEN production_validated_cms.week_harvest = '34' THEN production_validated_cms.status_mon END)AS status34,
MAX(CASE WHEN production_validated_cms.week_harvest = '34' THEN production_validated_cms.status_details END)AS details34,

SUM(CASE WHEN production_validated_cms.week_harvest = '35' THEN production_validated_cms.vol_del_week END) AS Week35,
MAX(CASE WHEN production_validated_cms.week_harvest = '35' THEN production_validated_cms.id END)AS id35,
MAX(CASE WHEN production_validated_cms.week_harvest = '35' THEN production_validated_cms.status_mon END)AS status35,
MAX(CASE WHEN production_validated_cms.week_harvest = '35' THEN production_validated_cms.status_details END)AS details35,

SUM(CASE WHEN production_validated_cms.week_harvest = '36' THEN production_validated_cms.vol_del_week END) AS Week36,
MAX(CASE WHEN production_validated_cms.week_harvest = '36' THEN production_validated_cms.id END)AS id36,
MAX(CASE WHEN production_validated_cms.week_harvest = '36' THEN production_validated_cms.status_mon END)AS status36,
MAX(CASE WHEN production_validated_cms.week_harvest = '36' THEN production_validated_cms.status_details END)AS details36,

SUM(CASE WHEN production_validated_cms.week_harvest = '37' THEN production_validated_cms.vol_del_week END) AS Week37,
MAX(CASE WHEN production_validated_cms.week_harvest = '37' THEN production_validated_cms.id END)AS id37,
MAX(CASE WHEN production_validated_cms.week_harvest = '37' THEN production_validated_cms.status_mon END)AS status37,
MAX(CASE WHEN production_validated_cms.week_harvest = '37' THEN production_validated_cms.status_details END)AS details37,

SUM(CASE WHEN production_validated_cms.week_harvest = '38' THEN production_validated_cms.vol_del_week END) AS Week38,
MAX(CASE WHEN production_validated_cms.week_harvest = '38' THEN production_validated_cms.id END)AS id38,
MAX(CASE WHEN production_validated_cms.week_harvest = '38' THEN production_validated_cms.status_mon END)AS status38,
MAX(CASE WHEN production_validated_cms.week_harvest = '38' THEN production_validated_cms.status_details END)AS details38,

SUM(CASE WHEN production_validated_cms.week_harvest = '39' THEN production_validated_cms.vol_del_week END) AS Week39,
MAX(CASE WHEN production_validated_cms.week_harvest = '39' THEN production_validated_cms.id END)AS id39,
MAX(CASE WHEN production_validated_cms.week_harvest = '39' THEN production_validated_cms.status_mon END)AS status39,
MAX(CASE WHEN production_validated_cms.week_harvest = '39' THEN production_validated_cms.status_details END)AS details39,

SUM(CASE WHEN production_validated_cms.week_harvest = '40' THEN production_validated_cms.vol_del_week END) AS Week40,
MAX(CASE WHEN production_validated_cms.week_harvest = '40' THEN production_validated_cms.id END)AS id40,
MAX(CASE WHEN production_validated_cms.week_harvest = '40' THEN production_validated_cms.status_mon END)AS status40,
MAX(CASE WHEN production_validated_cms.week_harvest = '40' THEN production_validated_cms.status_details END)AS details40,

SUM(CASE WHEN production_validated_cms.week_harvest = '41' THEN production_validated_cms.vol_del_week END) AS Week41,
MAX(CASE WHEN production_validated_cms.week_harvest = '41' THEN production_validated_cms.id END)AS id41,
MAX(CASE WHEN production_validated_cms.week_harvest = '41' THEN production_validated_cms.status_mon END)AS status41,
MAX(CASE WHEN production_validated_cms.week_harvest = '41' THEN production_validated_cms.status_details END)AS details41,

SUM(CASE WHEN production_validated_cms.week_harvest = '42' THEN production_validated_cms.vol_del_week END) AS Week42,
MAX(CASE WHEN production_validated_cms.week_harvest = '42' THEN production_validated_cms.id END)AS id42,
MAX(CASE WHEN production_validated_cms.week_harvest = '42' THEN production_validated_cms.status_mon END)AS status42,
MAX(CASE WHEN production_validated_cms.week_harvest = '42' THEN production_validated_cms.status_details END)AS details42,

SUM(CASE WHEN production_validated_cms.week_harvest = '43' THEN production_validated_cms.vol_del_week END) AS Week43,
MAX(CASE WHEN production_validated_cms.week_harvest = '43' THEN production_validated_cms.id END)AS id43,
MAX(CASE WHEN production_validated_cms.week_harvest = '43' THEN production_validated_cms.status_mon END)AS status43,
MAX(CASE WHEN production_validated_cms.week_harvest = '43' THEN production_validated_cms.status_details END)AS details43,

SUM(CASE WHEN production_validated_cms.week_harvest = '44' THEN production_validated_cms.vol_del_week END) AS Week44,
MAX(CASE WHEN production_validated_cms.week_harvest = '44' THEN production_validated_cms.id END)AS id44,
MAX(CASE WHEN production_validated_cms.week_harvest = '44' THEN production_validated_cms.status_mon END)AS status44,
MAX(CASE WHEN production_validated_cms.week_harvest = '44' THEN production_validated_cms.status_details END)AS details44,

SUM(CASE WHEN production_validated_cms.week_harvest = '45' THEN production_validated_cms.vol_del_week END) AS Week45,
MAX(CASE WHEN production_validated_cms.week_harvest = '45' THEN production_validated_cms.id END)AS id45,
MAX(CASE WHEN production_validated_cms.week_harvest = '45' THEN production_validated_cms.status_mon END)AS status45,
MAX(CASE WHEN production_validated_cms.week_harvest = '45' THEN production_validated_cms.status_details END)AS details45,

SUM(CASE WHEN production_validated_cms.week_harvest = '46' THEN production_validated_cms.vol_del_week END) AS Week46,
MAX(CASE WHEN production_validated_cms.week_harvest = '46' THEN production_validated_cms.id END)AS id46,
MAX(CASE WHEN production_validated_cms.week_harvest = '46' THEN production_validated_cms.status_mon END)AS status46,
MAX(CASE WHEN production_validated_cms.week_harvest = '46' THEN production_validated_cms.status_details END)AS details46,

SUM(CASE WHEN production_validated_cms.week_harvest = '47' THEN production_validated_cms.vol_del_week END) AS Week47,
MAX(CASE WHEN production_validated_cms.week_harvest = '47' THEN production_validated_cms.id END)AS id47,
MAX(CASE WHEN production_validated_cms.week_harvest = '47' THEN production_validated_cms.status_mon END)AS status47,
MAX(CASE WHEN production_validated_cms.week_harvest = '47' THEN production_validated_cms.status_details END)AS details47,

SUM(CASE WHEN production_validated_cms.week_harvest = '48' THEN production_validated_cms.vol_del_week END) AS Week48,
MAX(CASE WHEN production_validated_cms.week_harvest = '48' THEN production_validated_cms.id END)AS id48,
MAX(CASE WHEN production_validated_cms.week_harvest = '48' THEN production_validated_cms.status_mon END)AS status48,
MAX(CASE WHEN production_validated_cms.week_harvest = '48' THEN production_validated_cms.status_details END)AS details48,

SUM(CASE WHEN production_validated_cms.week_harvest = '49' THEN production_validated_cms.vol_del_week END) AS Week49,
MAX(CASE WHEN production_validated_cms.week_harvest = '49' THEN production_validated_cms.id END)AS id49,
MAX(CASE WHEN production_validated_cms.week_harvest = '49' THEN production_validated_cms.status_mon END)AS status49,
MAX(CASE WHEN production_validated_cms.week_harvest = '49' THEN production_validated_cms.status_details END)AS details49,

SUM(CASE WHEN production_validated_cms.week_harvest = '50' THEN production_validated_cms.vol_del_week END) AS Week50,
MAX(CASE WHEN production_validated_cms.week_harvest = '50' THEN production_validated_cms.id END)AS id50,
MAX(CASE WHEN production_validated_cms.week_harvest = '50' THEN production_validated_cms.status_mon END)AS status50,
MAX(CASE WHEN production_validated_cms.week_harvest = '50' THEN production_validated_cms.status_details END)AS details50,

SUM(CASE WHEN production_validated_cms.week_harvest = '51' THEN production_validated_cms.vol_del_week END) AS Week51,
MAX(CASE WHEN production_validated_cms.week_harvest = '51' THEN production_validated_cms.id END)AS id51,
MAX(CASE WHEN production_validated_cms.week_harvest = '51' THEN production_validated_cms.status_mon END)AS status51,
MAX(CASE WHEN production_validated_cms.week_harvest = '51' THEN production_validated_cms.status_details END)AS details51,

SUM(CASE WHEN production_validated_cms.week_harvest = '52' THEN production_validated_cms.vol_del_week END) AS Week52,
MAX(CASE WHEN production_validated_cms.week_harvest = '52' THEN production_validated_cms.id END)AS id52,
MAX(CASE WHEN production_validated_cms.week_harvest = '52' THEN production_validated_cms.status_mon END)AS status52,
MAX(CASE WHEN production_validated_cms.week_harvest = '52' THEN production_validated_cms.status_details END)AS details52,

-- ... Repeat this structure for Weeks 5 to 53 ...

SUM(CASE WHEN production_validated_cms.week_harvest = '53' THEN production_validated_cms.vol_del_week END) AS Week53,
MAX(CASE WHEN production_validated_cms.week_harvest = '53' THEN production_validated_cms.id END)AS id53,
MAX(CASE WHEN production_validated_cms.week_harvest = '53' THEN production_validated_cms.status_mon END)AS status53,
MAX(CASE WHEN production_validated_cms.week_harvest = '53' THEN production_validated_cms.status_details END)AS details53

FROM
    production_validated_cms, registrationhubpos
WHERE
    registrationhubpos.fname = production_validated_cms.name AND YEAR(production_validated_cms.date_harvest) = '$yearnow' AND (production_validated_cms.status_comm='Committed' OR production_validated_cms.status_comm='Advisory')
GROUP BY
    production_validated_cms.name,
    production_validated_cms.comm,
    production_validated_cms.code
ORDER BY
production_validated_cms.name ASC;
");


$query2 = mysqli_query($conn,"SELECT production_validated_cms.comm,  
YEAR(production_validated_cms.date_harvest) AS prod_year,
registrationhubpos.barangay,
SUM(CASE WHEN production_validated_cms.week_harvest = '1' THEN production_validated_cms.vol_del_week END) AS Week1,
SUM(CASE WHEN production_validated_cms.week_harvest = '2' THEN production_validated_cms.vol_del_week END) AS Week2,
SUM(CASE WHEN production_validated_cms.week_harvest = '3' THEN production_validated_cms.vol_del_week END) AS Week3,
SUM(CASE WHEN production_validated_cms.week_harvest = '4' THEN production_validated_cms.vol_del_week END) AS Week4,
SUM(CASE WHEN production_validated_cms.week_harvest = '5' THEN production_validated_cms.vol_del_week END) AS Week5,
SUM(CASE WHEN production_validated_cms.week_harvest = '6' THEN production_validated_cms.vol_del_week END) AS Week6,
SUM(CASE WHEN production_validated_cms.week_harvest = '7' THEN production_validated_cms.vol_del_week END) AS Week7,
SUM(CASE WHEN production_validated_cms.week_harvest = '8' THEN production_validated_cms.vol_del_week END) AS Week8,
SUM(CASE WHEN production_validated_cms.week_harvest = '9' THEN production_validated_cms.vol_del_week END) AS Week9,
SUM(CASE WHEN production_validated_cms.week_harvest = '10' THEN production_validated_cms.vol_del_week END) AS Week10,
SUM(CASE WHEN production_validated_cms.week_harvest = '11' THEN production_validated_cms.vol_del_week END) AS Week11,
SUM(CASE WHEN production_validated_cms.week_harvest = '12' THEN production_validated_cms.vol_del_week END) AS Week12,
SUM(CASE WHEN production_validated_cms.week_harvest = '13' THEN production_validated_cms.vol_del_week END) AS Week13,
SUM(CASE WHEN production_validated_cms.week_harvest = '14' THEN production_validated_cms.vol_del_week END) AS Week14,
SUM(CASE WHEN production_validated_cms.week_harvest = '15' THEN production_validated_cms.vol_del_week END) AS Week15,
SUM(CASE WHEN production_validated_cms.week_harvest = '16' THEN production_validated_cms.vol_del_week END) AS Week16,
SUM(CASE WHEN production_validated_cms.week_harvest = '17' THEN production_validated_cms.vol_del_week END) AS Week17,
SUM(CASE WHEN production_validated_cms.week_harvest = '18' THEN production_validated_cms.vol_del_week END) AS Week18,
SUM(CASE WHEN production_validated_cms.week_harvest = '19' THEN production_validated_cms.vol_del_week END) AS Week19,
SUM(CASE WHEN production_validated_cms.week_harvest = '20' THEN production_validated_cms.vol_del_week END) AS Week20,
SUM(CASE WHEN production_validated_cms.week_harvest = '21' THEN production_validated_cms.vol_del_week END) AS Week21,
SUM(CASE WHEN production_validated_cms.week_harvest = '22' THEN production_validated_cms.vol_del_week END) AS Week22,
SUM(CASE WHEN production_validated_cms.week_harvest = '23' THEN production_validated_cms.vol_del_week END) AS Week23,
SUM(CASE WHEN production_validated_cms.week_harvest = '24' THEN production_validated_cms.vol_del_week END) AS Week24,
SUM(CASE WHEN production_validated_cms.week_harvest = '25' THEN production_validated_cms.vol_del_week END) AS Week25,
SUM(CASE WHEN production_validated_cms.week_harvest = '26' THEN production_validated_cms.vol_del_week END) AS Week26,
SUM(CASE WHEN production_validated_cms.week_harvest = '27' THEN production_validated_cms.vol_del_week END) AS Week27,
SUM(CASE WHEN production_validated_cms.week_harvest = '28' THEN production_validated_cms.vol_del_week END) AS Week28,
SUM(CASE WHEN production_validated_cms.week_harvest = '29' THEN production_validated_cms.vol_del_week END) AS Week29,
SUM(CASE WHEN production_validated_cms.week_harvest = '30' THEN production_validated_cms.vol_del_week END) AS Week30,
SUM(CASE WHEN production_validated_cms.week_harvest = '31' THEN production_validated_cms.vol_del_week END) AS Week31,
SUM(CASE WHEN production_validated_cms.week_harvest = '32' THEN production_validated_cms.vol_del_week END) AS Week32,
SUM(CASE WHEN production_validated_cms.week_harvest = '33' THEN production_validated_cms.vol_del_week END) AS Week33,
SUM(CASE WHEN production_validated_cms.week_harvest = '34' THEN production_validated_cms.vol_del_week END) AS Week34,
SUM(CASE WHEN production_validated_cms.week_harvest = '35' THEN production_validated_cms.vol_del_week END) AS Week35,
SUM(CASE WHEN production_validated_cms.week_harvest = '36' THEN production_validated_cms.vol_del_week END) AS Week36,
SUM(CASE WHEN production_validated_cms.week_harvest = '37' THEN production_validated_cms.vol_del_week END) AS Week37,
SUM(CASE WHEN production_validated_cms.week_harvest = '38' THEN production_validated_cms.vol_del_week END) AS Week38,
SUM(CASE WHEN production_validated_cms.week_harvest = '39' THEN production_validated_cms.vol_del_week END) AS Week39,
SUM(CASE WHEN production_validated_cms.week_harvest = '40' THEN production_validated_cms.vol_del_week END) AS Week40,
SUM(CASE WHEN production_validated_cms.week_harvest = '41' THEN production_validated_cms.vol_del_week END) AS Week41,
SUM(CASE WHEN production_validated_cms.week_harvest = '42' THEN production_validated_cms.vol_del_week END) AS Week42,
SUM(CASE WHEN production_validated_cms.week_harvest = '43' THEN production_validated_cms.vol_del_week END) AS Week43,
SUM(CASE WHEN production_validated_cms.week_harvest = '44' THEN production_validated_cms.vol_del_week END) AS Week44,
SUM(CASE WHEN production_validated_cms.week_harvest = '45' THEN production_validated_cms.vol_del_week END) AS Week45,
SUM(CASE WHEN production_validated_cms.week_harvest = '46' THEN production_validated_cms.vol_del_week END) AS Week46,
SUM(CASE WHEN production_validated_cms.week_harvest = '47' THEN production_validated_cms.vol_del_week END) AS Week47,
SUM(CASE WHEN production_validated_cms.week_harvest = '48' THEN production_validated_cms.vol_del_week END) AS Week48,
SUM(CASE WHEN production_validated_cms.week_harvest = '49' THEN production_validated_cms.vol_del_week END) AS Week49,
SUM(CASE WHEN production_validated_cms.week_harvest = '50' THEN production_validated_cms.vol_del_week END) AS Week50,
SUM(CASE WHEN production_validated_cms.week_harvest = '51' THEN production_validated_cms.vol_del_week END) AS Week51,
SUM(CASE WHEN production_validated_cms.week_harvest = '52' THEN production_validated_cms.vol_del_week END) AS Week52,
SUM(CASE WHEN production_validated_cms.week_harvest = '53' THEN production_validated_cms.vol_del_week END) AS Week53
FROM
production_validated_cms, registrationhubpos
WHERE
registrationhubpos.fname = production_validated_cms.name AND YEAR(production_validated_cms.date_harvest) = '$year_now' AND (production_validated_cms.status_comm='Committed' OR production_validated_cms.status_comm='Advisory')
GROUP BY
production_validated_cms.comm
ORDER BY
production_validated_cms.comm ASC");

include 'db.inc.php';
$query3 = mysqli_query($conn,"SELECT production_validated_cms.name, 
registrationhubpos.barangay,
YEAR(production_validated_cms.date_harvest) AS prod_year, 
SUM(CASE WHEN production_validated_cms.week_harvest = '1' THEN production_validated_cms.vol_del_week END) AS Week1,
SUM(CASE WHEN production_validated_cms.week_harvest = '2' THEN production_validated_cms.vol_del_week END) AS Week2,
SUM(CASE WHEN production_validated_cms.week_harvest = '3' THEN production_validated_cms.vol_del_week END) AS Week3,
SUM(CASE WHEN production_validated_cms.week_harvest = '4' THEN production_validated_cms.vol_del_week END) AS Week4,
SUM(CASE WHEN production_validated_cms.week_harvest = '5' THEN production_validated_cms.vol_del_week END) AS Week5,
SUM(CASE WHEN production_validated_cms.week_harvest = '6' THEN production_validated_cms.vol_del_week END) AS Week6,
SUM(CASE WHEN production_validated_cms.week_harvest = '7' THEN production_validated_cms.vol_del_week END) AS Week7,
SUM(CASE WHEN production_validated_cms.week_harvest = '8' THEN production_validated_cms.vol_del_week END) AS Week8,
SUM(CASE WHEN production_validated_cms.week_harvest = '9' THEN production_validated_cms.vol_del_week END) AS Week9,
SUM(CASE WHEN production_validated_cms.week_harvest = '10' THEN production_validated_cms.vol_del_week END) AS Week10,
SUM(CASE WHEN production_validated_cms.week_harvest = '11' THEN production_validated_cms.vol_del_week END) AS Week11,
SUM(CASE WHEN production_validated_cms.week_harvest = '12' THEN production_validated_cms.vol_del_week END) AS Week12,
SUM(CASE WHEN production_validated_cms.week_harvest = '13' THEN production_validated_cms.vol_del_week END) AS Week13,
SUM(CASE WHEN production_validated_cms.week_harvest = '14' THEN production_validated_cms.vol_del_week END) AS Week14,
SUM(CASE WHEN production_validated_cms.week_harvest = '15' THEN production_validated_cms.vol_del_week END) AS Week15,
SUM(CASE WHEN production_validated_cms.week_harvest = '16' THEN production_validated_cms.vol_del_week END) AS Week16,
SUM(CASE WHEN production_validated_cms.week_harvest = '17' THEN production_validated_cms.vol_del_week END) AS Week17,
SUM(CASE WHEN production_validated_cms.week_harvest = '18' THEN production_validated_cms.vol_del_week END) AS Week18,
SUM(CASE WHEN production_validated_cms.week_harvest = '19' THEN production_validated_cms.vol_del_week END) AS Week19,
SUM(CASE WHEN production_validated_cms.week_harvest = '20' THEN production_validated_cms.vol_del_week END) AS Week20,
SUM(CASE WHEN production_validated_cms.week_harvest = '21' THEN production_validated_cms.vol_del_week END) AS Week21,
SUM(CASE WHEN production_validated_cms.week_harvest = '22' THEN production_validated_cms.vol_del_week END) AS Week22,
SUM(CASE WHEN production_validated_cms.week_harvest = '23' THEN production_validated_cms.vol_del_week END) AS Week23,
SUM(CASE WHEN production_validated_cms.week_harvest = '24' THEN production_validated_cms.vol_del_week END) AS Week24,
SUM(CASE WHEN production_validated_cms.week_harvest = '25' THEN production_validated_cms.vol_del_week END) AS Week25,
SUM(CASE WHEN production_validated_cms.week_harvest = '26' THEN production_validated_cms.vol_del_week END) AS Week26,
SUM(CASE WHEN production_validated_cms.week_harvest = '27' THEN production_validated_cms.vol_del_week END) AS Week27,
SUM(CASE WHEN production_validated_cms.week_harvest = '28' THEN production_validated_cms.vol_del_week END) AS Week28,
SUM(CASE WHEN production_validated_cms.week_harvest = '29' THEN production_validated_cms.vol_del_week END) AS Week29,
SUM(CASE WHEN production_validated_cms.week_harvest = '30' THEN production_validated_cms.vol_del_week END) AS Week30,
SUM(CASE WHEN production_validated_cms.week_harvest = '31' THEN production_validated_cms.vol_del_week END) AS Week31,
SUM(CASE WHEN production_validated_cms.week_harvest = '32' THEN production_validated_cms.vol_del_week END) AS Week32,
SUM(CASE WHEN production_validated_cms.week_harvest = '33' THEN production_validated_cms.vol_del_week END) AS Week33,
SUM(CASE WHEN production_validated_cms.week_harvest = '34' THEN production_validated_cms.vol_del_week END) AS Week34,
SUM(CASE WHEN production_validated_cms.week_harvest = '35' THEN production_validated_cms.vol_del_week END) AS Week35,
SUM(CASE WHEN production_validated_cms.week_harvest = '36' THEN production_validated_cms.vol_del_week END) AS Week36,
SUM(CASE WHEN production_validated_cms.week_harvest = '37' THEN production_validated_cms.vol_del_week END) AS Week37,
SUM(CASE WHEN production_validated_cms.week_harvest = '38' THEN production_validated_cms.vol_del_week END) AS Week38,
SUM(CASE WHEN production_validated_cms.week_harvest = '39' THEN production_validated_cms.vol_del_week END) AS Week39,
SUM(CASE WHEN production_validated_cms.week_harvest = '40' THEN production_validated_cms.vol_del_week END) AS Week40,
SUM(CASE WHEN production_validated_cms.week_harvest = '41' THEN production_validated_cms.vol_del_week END) AS Week41,
SUM(CASE WHEN production_validated_cms.week_harvest = '42' THEN production_validated_cms.vol_del_week END) AS Week42,
SUM(CASE WHEN production_validated_cms.week_harvest = '43' THEN production_validated_cms.vol_del_week END) AS Week43,
SUM(CASE WHEN production_validated_cms.week_harvest = '44' THEN production_validated_cms.vol_del_week END) AS Week44,
SUM(CASE WHEN production_validated_cms.week_harvest = '45' THEN production_validated_cms.vol_del_week END) AS Week45,
SUM(CASE WHEN production_validated_cms.week_harvest = '46' THEN production_validated_cms.vol_del_week END) AS Week46,
SUM(CASE WHEN production_validated_cms.week_harvest = '47' THEN production_validated_cms.vol_del_week END) AS Week47,
SUM(CASE WHEN production_validated_cms.week_harvest = '48' THEN production_validated_cms.vol_del_week END) AS Week48,
SUM(CASE WHEN production_validated_cms.week_harvest = '49' THEN production_validated_cms.vol_del_week END) AS Week49,
SUM(CASE WHEN production_validated_cms.week_harvest = '50' THEN production_validated_cms.vol_del_week END) AS Week50,
SUM(CASE WHEN production_validated_cms.week_harvest = '51' THEN production_validated_cms.vol_del_week END) AS Week51,
SUM(CASE WHEN production_validated_cms.week_harvest = '52' THEN production_validated_cms.vol_del_week END) AS Week52,
SUM(CASE WHEN production_validated_cms.week_harvest = '53' THEN production_validated_cms.vol_del_week END) AS Week53
FROM
production_validated_cms, registrationhubpos
WHERE
registrationhubpos.fname = production_validated_cms.name AND YEAR(production_validated_cms.date_harvest) = '$year_now' AND (production_validated_cms.status_comm='Committed' OR production_validated_cms.status_comm='Advisory')
GROUP BY
production_validated_cms.name
ORDER BY
production_validated_cms.name ASC");