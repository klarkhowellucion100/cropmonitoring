Crop monitoring

https://themesbrand.com/velzon/html/galaxy/dashboard-projects.html

tables
usertable_cms
commodity_prod_cms
production_cms

1. CREATE VIEW harvest_schedule_cms AS SELECT
 

  comm,
 
  
  SUM(CASE WHEN week_harvest = '1' THEN vol_del_week END) AS Week1,
  SUM(CASE WHEN week_harvest = '2' THEN vol_del_week END) AS Week2,
  SUM(CASE WHEN week_harvest = '3' THEN vol_del_week END) AS Week3,
  SUM(CASE WHEN week_harvest = '4' THEN vol_del_week END) AS Week4,
  SUM(CASE WHEN week_harvest = '5' THEN vol_del_week END) AS Week5,
  SUM(CASE WHEN week_harvest = '6' THEN vol_del_week END) AS Week6,
  SUM(CASE WHEN week_harvest = '7' THEN vol_del_week END) AS Week7,
  SUM(CASE WHEN week_harvest = '8' THEN vol_del_week END) AS Week8,
  SUM(CASE WHEN week_harvest = '9' THEN vol_del_week END) AS Week9,
  SUM(CASE WHEN week_harvest = '10' THEN vol_del_week END) AS Week10,
  SUM(CASE WHEN week_harvest = '11' THEN vol_del_week END) AS Week11,
  SUM(CASE WHEN week_harvest = '12' THEN vol_del_week END) AS Week12,
  SUM(CASE WHEN week_harvest = '13' THEN vol_del_week END) AS Week13,
  SUM(CASE WHEN week_harvest = '14' THEN vol_del_week END) AS Week14,
  SUM(CASE WHEN week_harvest = '15' THEN vol_del_week END) AS Week15,
  SUM(CASE WHEN week_harvest = '16' THEN vol_del_week END) AS Week16,
  SUM(CASE WHEN week_harvest = '17' THEN vol_del_week END) AS Week17,
  SUM(CASE WHEN week_harvest = '18' THEN vol_del_week END) AS Week18,
  SUM(CASE WHEN week_harvest = '19' THEN vol_del_week END) AS Week19,
  SUM(CASE WHEN week_harvest = '20' THEN vol_del_week END) AS Week20,
  SUM(CASE WHEN week_harvest = '21' THEN vol_del_week END) AS Week21,
  SUM(CASE WHEN week_harvest = '22' THEN vol_del_week END) AS Week22,
  SUM(CASE WHEN week_harvest = '23' THEN vol_del_week END) AS Week23,
  SUM(CASE WHEN week_harvest = '24' THEN vol_del_week END) AS Week24,
  SUM(CASE WHEN week_harvest = '25' THEN vol_del_week END) AS Week25,
  SUM(CASE WHEN week_harvest = '26' THEN vol_del_week END) AS Week26,
  SUM(CASE WHEN week_harvest = '27' THEN vol_del_week END) AS Week27,
  SUM(CASE WHEN week_harvest = '28' THEN vol_del_week END) AS Week28,
  SUM(CASE WHEN week_harvest = '29' THEN vol_del_week END) AS Week29,
  SUM(CASE WHEN week_harvest = '30' THEN vol_del_week END) AS Week30,
  SUM(CASE WHEN week_harvest = '31' THEN vol_del_week END) AS Week31,
  SUM(CASE WHEN week_harvest = '32' THEN vol_del_week END) AS Week32,
  SUM(CASE WHEN week_harvest = '33' THEN vol_del_week END) AS Week33,
  SUM(CASE WHEN week_harvest = '34' THEN vol_del_week END) AS Week34,
  SUM(CASE WHEN week_harvest = '35' THEN vol_del_week END) AS Week35,
  SUM(CASE WHEN week_harvest = '36' THEN vol_del_week END) AS Week36,
  SUM(CASE WHEN week_harvest = '37' THEN vol_del_week END) AS Week37,
  SUM(CASE WHEN week_harvest = '38' THEN vol_del_week END) AS Week38,
  SUM(CASE WHEN week_harvest = '39' THEN vol_del_week END) AS Week39,
  SUM(CASE WHEN week_harvest = '40' THEN vol_del_week END) AS Week40,
  SUM(CASE WHEN week_harvest = '41' THEN vol_del_week END) AS Week41,
  SUM(CASE WHEN week_harvest = '42' THEN vol_del_week END) AS Week42,
  SUM(CASE WHEN week_harvest = '43' THEN vol_del_week END) AS Week43,
  SUM(CASE WHEN week_harvest = '44' THEN vol_del_week END) AS Week44,
  SUM(CASE WHEN week_harvest = '45' THEN vol_del_week END) AS Week45,
  SUM(CASE WHEN week_harvest = '46' THEN vol_del_week END) AS Week46,
  SUM(CASE WHEN week_harvest = '47' THEN vol_del_week END) AS Week47,
  SUM(CASE WHEN week_harvest = '48' THEN vol_del_week END) AS Week48,
  SUM(CASE WHEN week_harvest = '49' THEN vol_del_week END) AS Week49,
  SUM(CASE WHEN week_harvest = '50' THEN vol_del_week END) AS Week50,
  SUM(CASE WHEN week_harvest = '51' THEN vol_del_week END) AS Week51,
  SUM(CASE WHEN week_harvest = '52' THEN vol_del_week END) AS Week52,
  SUM(CASE WHEN week_harvest = '53' THEN vol_del_week END) AS Week53
FROM
  production_cms

GROUP BY
  comm,
