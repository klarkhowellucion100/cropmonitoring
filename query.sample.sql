SELECT
    production_cms.code,
    production_cms.name,
    registrationhubpos.barangay,
    production_cms.comm,
    production_cms.hills,
    date_sown,
    date_trans,
    production_cms.date_harvest,
    YEAR(production_cms.date_harvest) AS prod_harvest,
    production_cms.date_range,
    
    SUM(CASE WHEN production_cms.week_harvest = '1' THEN production_cms.vol_del_week END) AS Week1,
    CASE WHEN production_cms.week_harvest = '1' THEN production_cms.id END AS id1,
    CASE WHEN production_cms.week_harvest = '1' THEN production_cms.status_mon END AS status1,
    CASE WHEN production_cms.week_harvest = '1' THEN production_cms.status_details END AS details1,

    SUM(CASE WHEN production_cms.week_harvest = '2' THEN production_cms.vol_del_week END) AS Week2,
    CASE WHEN production_cms.week_harvest = '2' THEN production_cms.id END AS id2,
    CASE WHEN production_cms.week_harvest = '2' THEN production_cms.status_mon END AS status2,
    CASE WHEN production_cms.week_harvest = '2' THEN production_cms.status_details END AS details2,

    SUM(CASE WHEN production_cms.week_harvest = '3' THEN production_cms.vol_del_week END) AS Week3,
    CASE WHEN production_cms.week_harvest = '3' THEN production_cms.id END AS id3,
    CASE WHEN production_cms.week_harvest = '3' THEN production_cms.status_mon END AS status3,
    CASE WHEN production_cms.week_harvest = '3' THEN production_cms.status_details END AS details3,

    SUM(CASE WHEN production_cms.week_harvest = '4' THEN production_cms.vol_del_week END) AS Week4,
    CASE WHEN production_cms.week_harvest = '4' THEN production_cms.id END AS id4,
    CASE WHEN production_cms.week_harvest = '4' THEN production_cms.status_mon END AS status4,
    CASE WHEN production_cms.week_harvest = '4' THEN production_cms.status_details END AS details4,

     SUM(CASE WHEN production_cms.week_harvest = '5' THEN production_cms.vol_del_week END) AS Week5,
    CASE WHEN production_cms.week_harvest = '5' THEN production_cms.id END AS id5,
    CASE WHEN production_cms.week_harvest = '5' THEN production_cms.status_mon END AS status5,
    CASE WHEN production_cms.week_harvest = '5' THEN production_cms.status_details END AS details5,

     SUM(CASE WHEN production_cms.week_harvest = '6' THEN production_cms.vol_del_week END) AS Week6,
    CASE WHEN production_cms.week_harvest = '6' THEN production_cms.id END AS id6,
    CASE WHEN production_cms.week_harvest = '6' THEN production_cms.status_mon END AS status6,
    CASE WHEN production_cms.week_harvest = '6' THEN production_cms.status_details END AS details6,

     SUM(CASE WHEN production_cms.week_harvest = '7' THEN production_cms.vol_del_week END) AS Week7,
    CASE WHEN production_cms.week_harvest = '7' THEN production_cms.id END AS id7,
    CASE WHEN production_cms.week_harvest = '7' THEN production_cms.status_mon END AS status7,
    CASE WHEN production_cms.week_harvest = '7' THEN production_cms.status_details END AS details7,

     SUM(CASE WHEN production_cms.week_harvest = '8' THEN production_cms.vol_del_week END) AS Week8,
    CASE WHEN production_cms.week_harvest = '8' THEN production_cms.id END AS id8,
    CASE WHEN production_cms.week_harvest = '8' THEN production_cms.status_mon END AS status8,
    CASE WHEN production_cms.week_harvest = '8' THEN production_cms.status_details END AS details8,

     SUM(CASE WHEN production_cms.week_harvest = '9' THEN production_cms.vol_del_week END) AS Week9,
    CASE WHEN production_cms.week_harvest = '9' THEN production_cms.id END AS id9,
    CASE WHEN production_cms.week_harvest = '9' THEN production_cms.status_mon END AS status9,
    CASE WHEN production_cms.week_harvest = '9' THEN production_cms.status_details END AS details9,

     SUM(CASE WHEN production_cms.week_harvest = '10' THEN production_cms.vol_del_week END) AS Week10,
    CASE WHEN production_cms.week_harvest = '10' THEN production_cms.id END AS id10,
    CASE WHEN production_cms.week_harvest = '10' THEN production_cms.status_mon END AS status10,
    CASE WHEN production_cms.week_harvest = '10' THEN production_cms.status_details END AS details10,

     SUM(CASE WHEN production_cms.week_harvest = '11' THEN production_cms.vol_del_week END) AS Week11,
    CASE WHEN production_cms.week_harvest = '11' THEN production_cms.id END AS id11,
    CASE WHEN production_cms.week_harvest = '11' THEN production_cms.status_mon END AS status11,
    CASE WHEN production_cms.week_harvest = '11' THEN production_cms.status_details END AS details11,

     SUM(CASE WHEN production_cms.week_harvest = '12' THEN production_cms.vol_del_week END) AS Week12,
    CASE WHEN production_cms.week_harvest = '12' THEN production_cms.id END AS id12,
    CASE WHEN production_cms.week_harvest = '12' THEN production_cms.status_mon END AS status12,
    CASE WHEN production_cms.week_harvest = '12' THEN production_cms.status_details END AS details12,

     SUM(CASE WHEN production_cms.week_harvest = '13' THEN production_cms.vol_del_week END) AS Week13,
    CASE WHEN production_cms.week_harvest = '13' THEN production_cms.id END AS id13,
    CASE WHEN production_cms.week_harvest = '13' THEN production_cms.status_mon END AS status13,
    CASE WHEN production_cms.week_harvest = '13' THEN production_cms.status_details END AS details13,

     SUM(CASE WHEN production_cms.week_harvest = '14' THEN production_cms.vol_del_week END) AS Week14,
    CASE WHEN production_cms.week_harvest = '14' THEN production_cms.id END AS id14,
    CASE WHEN production_cms.week_harvest = '14' THEN production_cms.status_mon END AS status14,
    CASE WHEN production_cms.week_harvest = '14' THEN production_cms.status_details END AS details14,

     SUM(CASE WHEN production_cms.week_harvest = '15' THEN production_cms.vol_del_week END) AS Week15,
    CASE WHEN production_cms.week_harvest = '15' THEN production_cms.id END AS id15,
    CASE WHEN production_cms.week_harvest = '15' THEN production_cms.status_mon END AS status15,
    CASE WHEN production_cms.week_harvest = '15' THEN production_cms.status_details END AS details15,

     SUM(CASE WHEN production_cms.week_harvest = '16' THEN production_cms.vol_del_week END) AS Week16,
    CASE WHEN production_cms.week_harvest = '16' THEN production_cms.id END AS id16,
    CASE WHEN production_cms.week_harvest = '16' THEN production_cms.status_mon END AS status16,
    CASE WHEN production_cms.week_harvest = '16' THEN production_cms.status_details END AS details16,

     SUM(CASE WHEN production_cms.week_harvest = '17' THEN production_cms.vol_del_week END) AS Week17,
    CASE WHEN production_cms.week_harvest = '17' THEN production_cms.id END AS id17,
    CASE WHEN production_cms.week_harvest = '17' THEN production_cms.status_mon END AS status17,
    CASE WHEN production_cms.week_harvest = '17' THEN production_cms.status_details END AS details17,

     SUM(CASE WHEN production_cms.week_harvest = '18' THEN production_cms.vol_del_week END) AS Week18,
    CASE WHEN production_cms.week_harvest = '18' THEN production_cms.id END AS id18,
    CASE WHEN production_cms.week_harvest = '18' THEN production_cms.status_mon END AS status18,
    CASE WHEN production_cms.week_harvest = '18' THEN production_cms.status_details END AS details18,

    SUM(CASE WHEN production_cms.week_harvest = '19' THEN production_cms.vol_del_week END) AS Week19,
    CASE WHEN production_cms.week_harvest = '19' THEN production_cms.id END AS id19,
    CASE WHEN production_cms.week_harvest = '19' THEN production_cms.status_mon END AS status19,
    CASE WHEN production_cms.week_harvest = '19' THEN production_cms.status_details END AS details19,
    
    SUM(CASE WHEN production_cms.week_harvest = '20' THEN production_cms.vol_del_week END) AS Week20,
    CASE WHEN production_cms.week_harvest = '20' THEN production_cms.id END AS id20,
    CASE WHEN production_cms.week_harvest = '20' THEN production_cms.status_mon END AS status20,
    CASE WHEN production_cms.week_harvest = '20' THEN production_cms.status_details END AS details20,

    SUM(CASE WHEN production_cms.week_harvest = '21' THEN production_cms.vol_del_week END) AS Week21,
    CASE WHEN production_cms.week_harvest = '21' THEN production_cms.id END AS id21,
    CASE WHEN production_cms.week_harvest = '21' THEN production_cms.status_mon END AS status21,
    CASE WHEN production_cms.week_harvest = '21' THEN production_cms.status_details END AS details21,

    SUM(CASE WHEN production_cms.week_harvest = '22' THEN production_cms.vol_del_week END) AS Week22,
    CASE WHEN production_cms.week_harvest = '22' THEN production_cms.id END AS id22,
    CASE WHEN production_cms.week_harvest = '22' THEN production_cms.status_mon END AS status22,
    CASE WHEN production_cms.week_harvest = '22' THEN production_cms.status_details END AS details22,

    SUM(CASE WHEN production_cms.week_harvest = '23' THEN production_cms.vol_del_week END) AS Week23,
    CASE WHEN production_cms.week_harvest = '23' THEN production_cms.id END AS id23,
    CASE WHEN production_cms.week_harvest = '23' THEN production_cms.status_mon END AS status23,
    CASE WHEN production_cms.week_harvest = '23' THEN production_cms.status_details END AS details23,

    SUM(CASE WHEN production_cms.week_harvest = '24' THEN production_cms.vol_del_week END) AS Week24,
    CASE WHEN production_cms.week_harvest = '24' THEN production_cms.id END AS id24,
    CASE WHEN production_cms.week_harvest = '24' THEN production_cms.status_mon END AS status24,
    CASE WHEN production_cms.week_harvest = '24' THEN production_cms.status_details END AS details24,

    SUM(CASE WHEN production_cms.week_harvest = '25' THEN production_cms.vol_del_week END) AS Week25,
    CASE WHEN production_cms.week_harvest = '25' THEN production_cms.id END AS id25,
    CASE WHEN production_cms.week_harvest = '25' THEN production_cms.status_mon END AS status25,
    CASE WHEN production_cms.week_harvest = '25' THEN production_cms.status_details END AS details25,

    SUM(CASE WHEN production_cms.week_harvest = '26' THEN production_cms.vol_del_week END) AS Week26,
    CASE WHEN production_cms.week_harvest = '26' THEN production_cms.id END AS id26,
    CASE WHEN production_cms.week_harvest = '26' THEN production_cms.status_mon END AS status26,
    CASE WHEN production_cms.week_harvest = '26' THEN production_cms.status_details END AS details26,

    SUM(CASE WHEN production_cms.week_harvest = '27' THEN production_cms.vol_del_week END) AS Week27,
    CASE WHEN production_cms.week_harvest = '27' THEN production_cms.id END AS id27,
    CASE WHEN production_cms.week_harvest = '27' THEN production_cms.status_mon END AS status27,
    CASE WHEN production_cms.week_harvest = '27' THEN production_cms.status_details END AS details27,

    SUM(CASE WHEN production_cms.week_harvest = '28' THEN production_cms.vol_del_week END) AS Week28,
    CASE WHEN production_cms.week_harvest = '28' THEN production_cms.id END AS id28,
    CASE WHEN production_cms.week_harvest = '28' THEN production_cms.status_mon END AS status28,
    CASE WHEN production_cms.week_harvest = '28' THEN production_cms.status_details END AS details28,

    SUM(CASE WHEN production_cms.week_harvest = '29' THEN production_cms.vol_del_week END) AS Week29,
    CASE WHEN production_cms.week_harvest = '29' THEN production_cms.id END AS id29,
    CASE WHEN production_cms.week_harvest = '29' THEN production_cms.status_mon END AS status29,
    CASE WHEN production_cms.week_harvest = '29' THEN production_cms.status_details END AS details29,

    SUM(CASE WHEN production_cms.week_harvest = '30' THEN production_cms.vol_del_week END) AS Week30,
    CASE WHEN production_cms.week_harvest = '30' THEN production_cms.id END AS id30,
    CASE WHEN production_cms.week_harvest = '30' THEN production_cms.status_mon END AS status30,
    CASE WHEN production_cms.week_harvest = '30' THEN production_cms.status_details END AS details30,

    SUM(CASE WHEN production_cms.week_harvest = '31' THEN production_cms.vol_del_week END) AS Week31,
    CASE WHEN production_cms.week_harvest = '31' THEN production_cms.id END AS id31,
    CASE WHEN production_cms.week_harvest = '31' THEN production_cms.status_mon END AS status31,
    CASE WHEN production_cms.week_harvest = '31' THEN production_cms.status_details END AS details31,

    SUM(CASE WHEN production_cms.week_harvest = '32' THEN production_cms.vol_del_week END) AS Week32,
    CASE WHEN production_cms.week_harvest = '32' THEN production_cms.id END AS id32,
    CASE WHEN production_cms.week_harvest = '32' THEN production_cms.status_mon END AS status32,
    CASE WHEN production_cms.week_harvest = '32' THEN production_cms.status_details END AS details32,

    SUM(CASE WHEN production_cms.week_harvest = '33' THEN production_cms.vol_del_week END) AS Week33,
    CASE WHEN production_cms.week_harvest = '33' THEN production_cms.id END AS id33,
    CASE WHEN production_cms.week_harvest = '33' THEN production_cms.status_mon END AS status33,
    CASE WHEN production_cms.week_harvest = '33' THEN production_cms.status_details END AS details33,

    SUM(CASE WHEN production_cms.week_harvest = '34' THEN production_cms.vol_del_week END) AS Week34,
    CASE WHEN production_cms.week_harvest = '34' THEN production_cms.id END AS id34,
    CASE WHEN production_cms.week_harvest = '34' THEN production_cms.status_mon END AS status34,
    CASE WHEN production_cms.week_harvest = '34' THEN production_cms.status_details END AS details34,

    SUM(CASE WHEN production_cms.week_harvest = '35' THEN production_cms.vol_del_week END) AS Week35,
    CASE WHEN production_cms.week_harvest = '35' THEN production_cms.id END AS id35,
    CASE WHEN production_cms.week_harvest = '35' THEN production_cms.status_mon END AS status35,
    CASE WHEN production_cms.week_harvest = '35' THEN production_cms.status_details END AS details35,

    SUM(CASE WHEN production_cms.week_harvest = '36' THEN production_cms.vol_del_week END) AS Week36,
    CASE WHEN production_cms.week_harvest = '36' THEN production_cms.id END AS id36,
    CASE WHEN production_cms.week_harvest = '36' THEN production_cms.status_mon END AS status36,
    CASE WHEN production_cms.week_harvest = '36' THEN production_cms.status_details END AS details36,

    SUM(CASE WHEN production_cms.week_harvest = '37' THEN production_cms.vol_del_week END) AS Week37,
    CASE WHEN production_cms.week_harvest = '37' THEN production_cms.id END AS id37,
    CASE WHEN production_cms.week_harvest = '37' THEN production_cms.status_mon END AS status37,
    CASE WHEN production_cms.week_harvest = '37' THEN production_cms.status_details END AS details37,

    SUM(CASE WHEN production_cms.week_harvest = '38' THEN production_cms.vol_del_week END) AS Week38,
    CASE WHEN production_cms.week_harvest = '38' THEN production_cms.id END AS id38,
    CASE WHEN production_cms.week_harvest = '38' THEN production_cms.status_mon END AS status38,
    CASE WHEN production_cms.week_harvest = '38' THEN production_cms.status_details END AS details38,
    
    SUM(CASE WHEN production_cms.week_harvest = '39' THEN production_cms.vol_del_week END) AS Week39,
    CASE WHEN production_cms.week_harvest = '39' THEN production_cms.id END AS id39,
    CASE WHEN production_cms.week_harvest = '39' THEN production_cms.status_mon END AS status39,
    CASE WHEN production_cms.week_harvest = '39' THEN production_cms.status_details END AS details39,

    SUM(CASE WHEN production_cms.week_harvest = '40' THEN production_cms.vol_del_week END) AS Week40,
    CASE WHEN production_cms.week_harvest = '40' THEN production_cms.id END AS id40,
    CASE WHEN production_cms.week_harvest = '40' THEN production_cms.status_mon END AS status40,
    CASE WHEN production_cms.week_harvest = '40' THEN production_cms.status_details END AS details40,

    SUM(CASE WHEN production_cms.week_harvest = '41' THEN production_cms.vol_del_week END) AS Week41,
    CASE WHEN production_cms.week_harvest = '41' THEN production_cms.id END AS id41,
    CASE WHEN production_cms.week_harvest = '41' THEN production_cms.status_mon END AS status41,
    CASE WHEN production_cms.week_harvest = '41' THEN production_cms.status_details END AS details41,

    SUM(CASE WHEN production_cms.week_harvest = '42' THEN production_cms.vol_del_week END) AS Week42,
    CASE WHEN production_cms.week_harvest = '42' THEN production_cms.id END AS id42,
    CASE WHEN production_cms.week_harvest = '42' THEN production_cms.status_mon END AS status42,
    CASE WHEN production_cms.week_harvest = '42' THEN production_cms.status_details END AS details42,

    SUM(CASE WHEN production_cms.week_harvest = '43' THEN production_cms.vol_del_week END) AS Week43,
    CASE WHEN production_cms.week_harvest = '43' THEN production_cms.id END AS id43,
    CASE WHEN production_cms.week_harvest = '43' THEN production_cms.status_mon END AS status43,
    CASE WHEN production_cms.week_harvest = '43' THEN production_cms.status_details END AS details43,
    
    SUM(CASE WHEN production_cms.week_harvest = '44' THEN production_cms.vol_del_week END) AS Week44,
    CASE WHEN production_cms.week_harvest = '44' THEN production_cms.id END AS id44,
    CASE WHEN production_cms.week_harvest = '44' THEN production_cms.status_mon END AS status44,
    CASE WHEN production_cms.week_harvest = '44' THEN production_cms.status_details END AS details44,

    SUM(CASE WHEN production_cms.week_harvest = '45' THEN production_cms.vol_del_week END) AS Week45,
    CASE WHEN production_cms.week_harvest = '45' THEN production_cms.id END AS id45,
    CASE WHEN production_cms.week_harvest = '45' THEN production_cms.status_mon END AS status45,
    CASE WHEN production_cms.week_harvest = '45' THEN production_cms.status_details END AS details45,

    SUM(CASE WHEN production_cms.week_harvest = '46' THEN production_cms.vol_del_week END) AS Week46,
    CASE WHEN production_cms.week_harvest = '46' THEN production_cms.id END AS id46,
    CASE WHEN production_cms.week_harvest = '46' THEN production_cms.status_mon END AS status46,
    CASE WHEN production_cms.week_harvest = '46' THEN production_cms.status_details END AS details46,

    SUM(CASE WHEN production_cms.week_harvest = '47' THEN production_cms.vol_del_week END) AS Week47,
    CASE WHEN production_cms.week_harvest = '47' THEN production_cms.id END AS id47,
    CASE WHEN production_cms.week_harvest = '47' THEN production_cms.status_mon END AS status47,
    CASE WHEN production_cms.week_harvest = '47' THEN production_cms.status_details END AS details47,

    SUM(CASE WHEN production_cms.week_harvest = '48' THEN production_cms.vol_del_week END) AS Week48,
    CASE WHEN production_cms.week_harvest = '48' THEN production_cms.id END AS id48,
    CASE WHEN production_cms.week_harvest = '48' THEN production_cms.status_mon END AS status48,
    CASE WHEN production_cms.week_harvest = '48' THEN production_cms.status_details END AS details48,

    SUM(CASE WHEN production_cms.week_harvest = '49' THEN production_cms.vol_del_week END) AS Week49,
    CASE WHEN production_cms.week_harvest = '49' THEN production_cms.id END AS id49,
    CASE WHEN production_cms.week_harvest = '49' THEN production_cms.status_mon END AS status49,
    CASE WHEN production_cms.week_harvest = '49' THEN production_cms.status_details END AS details49,

    SUM(CASE WHEN production_cms.week_harvest = '50' THEN production_cms.vol_del_week END) AS Week50,
    CASE WHEN production_cms.week_harvest = '50' THEN production_cms.id END AS id50,
    CASE WHEN production_cms.week_harvest = '50' THEN production_cms.status_mon END AS status50,
    CASE WHEN production_cms.week_harvest = '50' THEN production_cms.status_details END AS details50,

    SUM(CASE WHEN production_cms.week_harvest = '51' THEN production_cms.vol_del_week END) AS Week51,
    CASE WHEN production_cms.week_harvest = '51' THEN production_cms.id END AS id51,
    CASE WHEN production_cms.week_harvest = '51' THEN production_cms.status_mon END AS status51,
    CASE WHEN production_cms.week_harvest = '51' THEN production_cms.status_details END AS details51,

    SUM(CASE WHEN production_cms.week_harvest = '52' THEN production_cms.vol_del_week END) AS Week52,
    CASE WHEN production_cms.week_harvest = '52' THEN production_cms.id END AS id52,
    CASE WHEN production_cms.week_harvest = '52' THEN production_cms.status_mon END AS status52,
    CASE WHEN production_cms.week_harvest = '52' THEN production_cms.status_details END AS details52,

    -- ... Repeat this structure for Weeks 5 to 53 ...

    SUM(CASE WHEN production_cms.week_harvest = '53' THEN production_cms.vol_del_week END) AS Week53,
    CASE WHEN production_cms.week_harvest = '53' THEN production_cms.id END AS id53,
    CASE WHEN production_cms.week_harvest = '53' THEN production_cms.status_mon END AS status53,
    CASE WHEN production_cms.week_harvest = '53' THEN production_cms.status_details END AS details53

FROM
    production_cms, registrationhubpos
WHERE
    registrationhubpos.fname = production_cms.name AND YEAR(production_cms.date_harvest) = '2024'
GROUP BY
    production_cms.name,
    production_cms.comm,
    production_cms.code
ORDER BY
    comm ASC;






