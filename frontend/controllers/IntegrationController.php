<?php
namespace frontend\controllers;

use artweb\artbox\ecommerce\models\Brand;
use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\ecommerce\models\Product;
use artweb\artbox\ecommerce\models\ProductCategory;
use artweb\artbox\ecommerce\models\ProductImage;
use artweb\artbox\ecommerce\models\ProductVariant;
use yii\base\Controller;
use yii\base\Exception;

class IntegrationController extends Controller{

    public $result = [];
    public function getItemData(){
      return ' [
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000016",
"name": "OEG",
"image": ""
},
"sku": "89541110",
"image": "a5ef6395-5814-11e7-8043-305a3a578d98.jpg",
"price": "1781.6112",
"category": [
{
"status": false,
"category_id": "000000020",
"parent_id": "         ",
"name": "ÄÂÈÃÓÍ",
"image": "a5ef6395-5814-11e7-8043-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000011111",
"parent_id": "000000020",
"name": "ÏÎÐØÍÅÂÀ ÃÐÓÏÀ",
"image": "a5ef6395-5814-11e7-8043-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000011111",
"upc": "",
"model": "000051585",
"storage_prices": "",
"name": "Ã³ëüçà öèë³íäðà ïîðøíÿ äâèãóíà 050110110003"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000015",
"name": "KOLBENSCHMIDT",
"image": ""
},
"sku": "800036410000",
"image": "04659f15-5815-11e7-8043-305a3a578d98.jpg",
"price": "850.4496",
"category": [
{
"status": false,
"category_id": "000000020",
"parent_id": "         ",
"name": "ÄÂÈÃÓÍ",
"image": "04659f15-5815-11e7-8043-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000011111",
"parent_id": "000000020",
"name": "ÏÎÐØÍÅÂÀ ÃÐÓÏÀ",
"image": "04659f15-5815-11e7-8043-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000011111",
"upc": "",
"model": "000051586",
"storage_prices": "",
"name": "Êîìïëåêò ê³ëåöü ïîðøíÿ äâèãóíà  800036410000"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000066",
"name": "SORL",
"image": ""
},
"sku": "9253220150 T30/24",
"image": "e7d71375-d8db-11e6-8063-305a3a578d98.jpg",
"price": "1799.6652",
"category": [
{
"status": false,
"category_id": "000000480",
"parent_id": "         ",
"name": "ÏÍÅÂÌÎÑÈÑÒÅÌÀ ",
"image": "e7d71375-d8db-11e6-8063-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046044",
"parent_id": "000000480",
"name": "ÅÍÅÐÃÎÀÊÓÌÓËßÒÎÐ",
"image": "e7d71375-d8db-11e6-8063-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000051804",
"parent_id": "000046044",
"name": "ÁÀÐÀÁÀÍÈÉ ÅÍÅÐÃÎÀÊÓÌÓËßÒÎÐ",
"image": "e7d71375-d8db-11e6-8063-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000051805",
"parent_id": "000051804",
"name": "ÒßÃÀ× (ÁÀÐÀÁÀÍÈÉ ÅÍÅÐÃÎÀÊÓÌÓËßÒÎÐ)",
"image": "e7d71375-d8db-11e6-8063-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000051805",
"upc": "",
"model": "000048385",
"storage_prices": "",
"name": "Åíåðãîàêóìóëÿòîð 35300101400"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 1,
"manufacturer": {
"manufacturer_id": "000000255",
"name": "SAMPIYON",
"image": ""
},
"sku": "LX1457",
"image": "7544957d-d8dc-11e6-8063-305a3a578d98.jpg",
"price": "1268.3466",
"category": [
{
"status": false,
"category_id": "000000047",
"parent_id": "         ",
"name": "Ô²ËÜÒÐÀ",
"image": "7544957d-d8dc-11e6-8063-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000044273",
"parent_id": "000000047",
"name": " Ô²ËÜÒÐÀ ÏÎÂ²ÒÐßÍ²",
"image": "7544957d-d8dc-11e6-8063-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000044273",
"upc": "",
"model": "000048386",
"storage_prices": "",
"name": "Ô³ëüòð ïîâ³òðÿíèé CR0075"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "         ",
"name": "",
"image": ""
},
"sku": "",
"image": "421daf39-8395-11e5-807c-305a3a578d98.jpg",
"price": "",
"category": [
{
"status": false,
"category_id": "000000047",
"parent_id": "         ",
"name": "Ô²ËÜÒÐÀ",
"image": "421daf39-8395-11e5-807c-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046358",
"parent_id": "000000047",
"name": " Ô²ËÜÒÐÀ ÑÀËÎÍÓ",
"image": "421daf39-8395-11e5-807c-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000046358",
"upc": "",
"model": "000041003",
"storage_prices": "",
"name": "Ô³ëüòð êàá³íè CU4580"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "         ",
"name": "",
"image": ""
},
"sku": "UX2D",
"image": "9d0b0795-83bb-11e5-807c-305a3a578d98.jpg",
"price": "",
"category": [
{
"status": false,
"category_id": "000000047",
"parent_id": "         ",
"name": "Ô²ËÜÒÐÀ",
"image": "9d0b0795-83bb-11e5-807c-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000044272",
"parent_id": "000000047",
"name": " Ô²ËÜÒÐÀ ÏÀËÈÂÍ²",
"image": "9d0b0795-83bb-11e5-807c-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000044272",
"upc": "",
"model": "000041028",
"storage_prices": "",
"name": "Ô³ëüòð ïàëèâíèé E100UD160"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "         ",
"name": "",
"image": ""
},
"sku": "",
"image": "7af532cb-8708-11e7-8092-305a3a578d98.jpg",
"price": "",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "7af532cb-8708-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000048849",
"parent_id": "         ",
"name": "²ÍÑÒÐÓÌÅÍÒÈ",
"image": "7af532cb-8708-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000048849",
"upc": "",
"model": "000052713",
"storage_prices": "",
"name": "Íàá³ð ù³òîê ç 2 îäèíèöü 140817"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000018",
"name": "LEMA",
"image": ""
},
"sku": "572350",
"image": "3cc1f6c9-870b-11e7-8092-305a3a578d98.jpg",
"price": "1601.77212",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "3cc1f6c9-870b-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000928",
"parent_id": "         ",
"name": "ÏÐÎÊËÀÄÊÈ ÄÂÈÃÓÍÀ / ÊÏÏ / ÐÅÄÓÊÒÎÐ",
"image": "3cc1f6c9-870b-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000000928",
"upc": "",
"model": "000052714",
"storage_prices": "",
"name": "Ïðîêëàäêà ãîëîâêè öèë³íäðà LE10600.10"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000214",
"name": "COJALI",
"image": ""
},
"sku": "2.27143",
"image": "bf1f5142-870c-11e7-8092-305a3a578d98.jpg",
"price": "1025.5734",
"category": [
{
"status": false,
"category_id": "000042923",
"parent_id": "         ",
"name": "ÅËÅÊÒÐÈÊÀ",
"image": "bf1f5142-870c-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000001550",
"parent_id": "000042923",
"name": "ÄÀÒ×ÈÊÈ",
"image": "bf1f5142-870c-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000001550",
"upc": "",
"model": "000052715",
"storage_prices": "",
"name": "Äàò÷èê ãàëüì³âíèé 2260386"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000052",
"name": "PETERS",
"image": ""
},
"sku": "39911",
"image": "fd5d8cac-870c-11e7-8092-305a3a578d98.jpg",
"price": "93.20112",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "fd5d8cac-870c-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000001897",
"parent_id": "         ",
"name": "Ê²ËÜÖß",
"image": "fd5d8cac-870c-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000001897",
"upc": "",
"model": "000052716",
"storage_prices": "",
"name": "Ê³ëüöå ãóìîâå 106.207-30À"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000023",
"name": "DT",
"image": ""
},
"sku": "814882",
"image": "4818a026-870d-11e7-8092-305a3a578d98.jpg",
"price": "19.45584",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "4818a026-870d-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000087",
"parent_id": "         ",
"name": "ÑÀËÜÍÈÊÈ",
"image": "4818a026-870d-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000000087",
"upc": "",
"model": "000052717",
"storage_prices": "",
"name": "Ñàëüíèê êëàïàíà 4.20414"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000023",
"name": "DT",
"image": ""
},
"sku": "47327",
"image": "64ab84d0-870d-11e7-8092-305a3a578d98.jpg",
"price": "308.7234",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "64ab84d0-870d-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000928",
"parent_id": "         ",
"name": "ÏÐÎÊËÀÄÊÈ ÄÂÈÃÓÍÀ / ÊÏÏ / ÐÅÄÓÊÒÎÐ",
"image": "64ab84d0-870d-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000000928",
"upc": "",
"model": "000052718",
"storage_prices": "",
"name": "Ïðîêëàäêà ìåòàëåâà 3.15020"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000011",
"name": "RIDER",
"image": ""
},
"sku": "0221342",
"image": "075284f1-8711-11e7-8092-305a3a578d98.jpg",
"price": "156.4326",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "075284f1-8711-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000029977",
"parent_id": "         ",
"name": "ÊÐ²ÏËÅÍÍß",
"image": "075284f1-8711-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000029977",
"upc": "",
"model": "000052719",
"storage_prices": "",
"name": "Êð³ïëåííÿ ðàä³àòîðà 19-0417"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000009",
"name": "111",
"image": ""
},
"sku": "Âîäà äèñòèëüîâàíà",
"image": "4068229a-8712-11e7-8092-305a3a578d98.jpg",
"price": "63.04032",
"category": [
{
"status": false,
"category_id": "000011290",
"parent_id": "         ",
"name": "ÀÂÒÎÕ²Ì²ß",
"image": "4068229a-8712-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000048826",
"parent_id": "000011290",
"name": "ÂÎÄÀ",
"image": "4068229a-8712-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000048826",
"upc": "",
"model": "000052720",
"storage_prices": "",
"name": "Âîäà äèñòèëüîâàíà XX Â-Î-Ä-À"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000016",
"name": "OEG",
"image": ""
},
"sku": "99330600",
"image": "9ace24c2-8712-11e7-8092-305a3a578d98.jpg",
"price": "4447.4436",
"category": [
{
"status": false,
"category_id": "000000020",
"parent_id": "         ",
"name": "ÄÂÈÃÓÍ",
"image": "9ace24c2-8712-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000011111",
"parent_id": "000000020",
"name": "ÏÎÐØÍÅÂÀ ÃÐÓÏÀ",
"image": "9ace24c2-8712-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000011111",
"upc": "",
"model": "000052721",
"storage_prices": "",
"name": "Ïîðøåíü 020320286602"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000614",
"name": "FERSA",
"image": ""
},
"sku": "F16107",
"image": "dc3fb782-8713-11e7-8092-305a3a578d98.jpg",
"price": "1084.66308",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "dc3fb782-8713-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000037",
"parent_id": "         ",
"name": "Ï²ÄØÈÏÍÈÊÈ / Ï²ÄÂ²ÑÍÈÉ",
"image": "dc3fb782-8713-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000000037",
"upc": "",
"model": "000052723",
"storage_prices": "",
"name": "Ï³äøèïíèê F16107"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000130",
"name": "CARGO",
"image": ""
},
"sku": "237102",
"image": "fcac15de-8713-11e7-8092-305a3a578d98.jpg",
"price": "2048.93784",
"category": [
{
"status": false,
"category_id": "000042923",
"parent_id": "         ",
"name": "ÅËÅÊÒÐÈÊÀ",
"image": "fcac15de-8713-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000006692",
"parent_id": "000042923",
"name": "ÐÅËÅ",
"image": "fcac15de-8713-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000006692",
"upc": "",
"model": "000052724",
"storage_prices": "",
"name": "Ðåëå ñòàðòåðà 237102"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000016",
"name": "OEG",
"image": ""
},
"sku": "2.10119",
"image": "8cb41932-8714-11e7-8092-305a3a578d98.jpg",
"price": "228.1176",
"category": [
{
"status": false,
"category_id": "000029977",
"parent_id": "         ",
"name": "ÊÐ²ÏËÅÍÍß",
"image": "8cb41932-8714-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000029958",
"parent_id": "000029977",
"name": "ÁÎËÒ",
"image": "8cb41932-8714-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000047183",
"parent_id": "000029958",
"name": "ÁÎËÒ M16",
"image": "8cb41932-8714-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000047183",
"upc": "",
"model": "000052725",
"storage_prices": "",
"name": "Áîëò ç øåñòèãðàííîþ ãîë. 030121D00000"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000372",
"name": "TANGDE",
"image": ""
},
"sku": "TDZL01-61-001H",
"image": "d00603f2-8714-11e7-8092-305a3a578d98.jpg",
"price": "585.693",
"category": [
{
"status": false,
"category_id": "000029988",
"parent_id": "         ",
"name": "ÊÓÇÎÂÍ² ÄÅÒÀË²",
"image": "d00603f2-8714-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000031",
"parent_id": "000029988",
"name": "ÊÀÁ²ÍÀ",
"image": "d00603f2-8714-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000029962",
"parent_id": "000000031",
"name": "ÄÇÅÐÊÀËÎ / ÊÐÈØÊÈ / ÊÒ.",
"image": "d00603f2-8714-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000029962",
"upc": "",
"model": "000052726",
"storage_prices": "",
"name": "Äçåðêàëî TDZL01-61-001H"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 1,
"manufacturer": {
"manufacturer_id": "000000130",
"name": "CARGO",
"image": ""
},
"sku": "CARGO-M03",
"image": "5cbcb9fc-8716-11e7-8092-305a3a578d98.jpg",
"price": "190.5228",
"category": [
{
"status": false,
"category_id": "000029988",
"parent_id": "         ",
"name": "ÊÓÇÎÂÍ² ÄÅÒÀË²",
"image": "5cbcb9fc-8716-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000029949",
"parent_id": "000029988",
"name": "ÊÐÈËÀ / ÁÐÈÇÃÎÂÈÊÈ",
"image": "5cbcb9fc-8716-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000029955",
"parent_id": "000029949",
"name": "ÁÐÈÇÃÎÂÈÊÈ",
"image": "5cbcb9fc-8716-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000029955",
"upc": "",
"model": "000052727",
"storage_prices": "",
"name": "Áðèçãîâèê CARGO-M03/SCANIA"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000085",
"name": "NRF",
"image": ""
},
"sku": "49161",
"image": "60f63a8b-872b-11e7-8092-305a3a578d98.jpg",
"price": "10747.44",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "60f63a8b-872b-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000010968",
"parent_id": "         ",
"name": "ÌÓÔÒÈ",
"image": "60f63a8b-872b-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000010968",
"upc": "",
"model": "000052728",
"storage_prices": "",
"name": "Â³ñüêîìóôòà NRF49161"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000646",
"name": "JMAY",
"image": ""
},
"sku": "0503221190",
"image": "ad12697f-8740-11e7-8092-305a3a578d98.jpg",
"price": "1380.9186",
"category": [
{
"status": false,
"category_id": "000000053",
"parent_id": "         ",
"name": "ÐÅÑÎÐÈ / ÏÎËÓÐÅÑÎÐÈ",
"image": "ad12697f-8740-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046225",
"parent_id": "000000053",
"name": "ÊÐ²ÏËÅÍÍß ÐÅÑÎÐ",
"image": "ad12697f-8740-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000048589",
"parent_id": "000046225",
"name": "ÏÀËÅÖ / ÑÊÎÁÈ /  ÐÅÑÎÐ",
"image": "ad12697f-8740-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000048589",
"upc": "",
"model": "000052731",
"storage_prices": "",
"name": "Êð³ïëåííÿ ðåñîðè J-80012-1LH"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000060",
"name": "STR",
"image": ""
},
"sku": "27009",
"image": "17915799-8742-11e7-8092-305a3a578d98.jpg",
"price": "1391.19876",
"category": [
{
"status": false,
"category_id": "000029970",
"parent_id": "         ",
"name": "ÕÎÄÎÂÀ ÑÈÑÒÅÌÀ",
"image": "17915799-8742-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000354",
"parent_id": "000029970",
"name": "ÒßÃÈ ÐÓËÜÎÂ²",
"image": "17915799-8742-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000000354",
"upc": "",
"model": "000052732",
"storage_prices": "",
"name": "Òÿãà ñòàá³ë³çàòîðà STR-90703"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "         ",
"name": "",
"image": ""
},
"sku": "",
"image": "d5b4bb63-8745-11e7-8092-305a3a578d98.jpg",
"price": "7010.4744",
"category": [
{
"status": false,
"category_id": "000000202",
"parent_id": "         ",
"name": "ÌÀÑËÎ / ÇÌÀÇÊÈ",
"image": "d5b4bb63-8745-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000052030",
"parent_id": "000000202",
"name": "ÌÀÑËÎ 75W80",
"image": "d5b4bb63-8745-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000052030",
"upc": "",
"model": "000052733",
"storage_prices": "",
"name": "Îëèâà òðàíñì³ñ³éíà TRANSMISSION GEAR 9 FE 75W-80  20ë "
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000060",
"name": "STR",
"image": ""
},
"sku": "",
"image": "6c11c7d2-8746-11e7-8092-305a3a578d98.jpg",
"price": "408.10536",
"category": [
{
"status": false,
"category_id": "000029970",
"parent_id": "         ",
"name": "ÕÎÄÎÂÀ ÑÈÑÒÅÌÀ",
"image": "6c11c7d2-8746-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000000067",
"parent_id": "000029970",
"name": "ÑÀÉËÅÍÒÁËÎÊÈ / ÂÒÓËÊÈ",
"image": "6c11c7d2-8746-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000048538",
"parent_id": "000000067",
"name": "ÑÀÉËÅÍÒÁËÎÊÈ ÊÀÁÈÍÈ",
"image": "6c11c7d2-8746-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000048538",
"upc": "",
"model": "000052734",
"storage_prices": "",
"name": "Ñàéëåíòáëîê ðåñîðè STR-120409"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000078",
"name": "AIRFREN",
"image": ""
},
"sku": "10.R2030",
"image": "3e19b27f-8747-11e7-8092-305a3a578d98.jpg",
"price": "1880.44092",
"category": [
{
"status": false,
"category_id": "000000480",
"parent_id": "         ",
"name": "ÏÍÅÂÌÎÑÈÑÒÅÌÀ ",
"image": "3e19b27f-8747-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000047029",
"parent_id": "000000480",
"name": "ÐÅÌ. / ÊÒ. ÊÐÀÍÈ",
"image": "3e19b27f-8747-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000047029",
"upc": "",
"model": "000052735",
"storage_prices": "",
"name": "ÐÌÊ êðàíà 10.R2030"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 1,
"manufacturer": {
"manufacturer_id": "000000515",
"name": "TESLA",
"image": ""
},
"sku": "T765B",
"image": "f2a5ef9f-8748-11e7-8092-305a3a578d98.jpg",
"price": "824.9616",
"category": [
{
"status": false,
"category_id": "         ",
"parent_id": "         ",
"name": "",
"image": "f2a5ef9f-8748-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000042923",
"parent_id": "         ",
"name": "ÅËÅÊÒÐÈÊÀ",
"image": "f2a5ef9f-8748-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000042923",
"upc": "",
"model": "000052736",
"storage_prices": "",
"name": "Êîìïëåêò êàáåë³â çàïàëþâàííÿ T765B"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "         ",
"name": "",
"image": ""
},
"sku": "0595301",
"image": "5260643c-874a-11e7-8092-305a3a578d98.jpg",
"price": "768.888",
"category": [
{
"status": false,
"category_id": "000000053",
"parent_id": "         ",
"name": "ÐÅÑÎÐÈ / ÏÎËÓÐÅÑÎÐÈ",
"image": "5260643c-874a-11e7-8092-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046225",
"parent_id": "000000053",
"name": "ÊÐ²ÏËÅÍÍß ÐÅÑÎÐ",
"image": "5260643c-874a-11e7-8092-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000046225",
"upc": "",
"model": "000052737",
"storage_prices": "",
"name": "Ñòðåìÿíêà ç ãàéêàìè 0595302/T"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 2,
"manufacturer": {
"manufacturer_id": "000000092",
"name": "SBP",
"image": ""
},
"sku": "14253",
"image": "d246428f-1cf6-11e6-80a6-305a3a578d98.jpg",
"price": "43.05348",
"category": [
{
"status": false,
"category_id": "000000035",
"parent_id": "         ",
"name": "ÃÀËÜÌ²ÂÍÀ ÑÈÑÒÅÌÀ",
"image": "d246428f-1cf6-11e6-80a6-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046047",
"parent_id": "000000035",
"name": "ÁÀÐÀÁÀÍÈ ÃÀËÜÌ²ÂÍ²",
"image": "d246428f-1cf6-11e6-80a6-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046343",
"parent_id": "000046047",
"name": "ÌÎÍÒÀÆÍÛÅ ê-ò ÁÀØÌÀÊÎÂ",
"image": "d246428f-1cf6-11e6-80a6-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000046343",
"upc": "",
"model": "000044530",
"storage_prices": "",
"name": "Ïðóæèíà ãàëüì³âíî¿ êîëîäêè 12-BP010"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000209",
"name": "CARTECHNIC",
"image": ""
},
"sku": "G11 20l",
"image": "9acf8ea4-8305-11e5-80c9-305a3a578d98.jpg",
"price": "2273.6358",
"category": [
{
"status": false,
"category_id": "000011290",
"parent_id": "         ",
"name": "ÀÂÒÎÕ²Ì²ß",
"image": "9acf8ea4-8305-11e5-80c9-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000004775",
"parent_id": "000011290",
"name": "ÀÍÒÈÔÐÈÇ / ÒÎÑÎË ",
"image": "9acf8ea4-8305-11e5-80c9-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000046382",
"parent_id": "000004775",
"name": "G11",
"image": "9acf8ea4-8305-11e5-80c9-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000046382",
"upc": "",
"model": "000041000",
"storage_prices": "",
"name": "Àíòèôðèç-êîíö.ñèí³é CART999 20L G11 CARTECHNI"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 10,
"manufacturer": {
"manufacturer_id": "         ",
"name": "",
"image": ""
},
"sku": "H3 24V 70W",
"image": "03cae9a7-baac-11e5-80ca-305a3a578d98.jpg",
"price": "36.19296",
"category": [
{
"status": false,
"category_id": "000000692",
"parent_id": "         ",
"name": "ÎÏÒÈÊÀ",
"image": "03cae9a7-baac-11e5-80ca-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000047533",
"parent_id": "000000692",
"name": "ËÀÌÏÀ",
"image": "03cae9a7-baac-11e5-80ca-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000047457",
"parent_id": "000047533",
"name": "H  3",
"image": "03cae9a7-baac-11e5-80ca-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000047457",
"upc": "",
"model": "000042266",
"storage_prices": "",
"name": "Ëàìïà ãîëîâíîãî ñâ³òëà H324V70W"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 6,
"manufacturer": {
"manufacturer_id": "000000022",
"name": "ELRING",
"image": ""
},
"sku": "296660",
"image": "60d62df4-ec4d-11e6-810d-305a3a578d98.jpg",
"price": "107.75052",
"category": [
{
"status": false,
"category_id": "000029977",
"parent_id": "         ",
"name": "ÊÐ²ÏËÅÍÍß",
"image": "60d62df4-ec4d-11e6-810d-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000006694",
"parent_id": "000029977",
"name": "ØÀÉÁÀ / ØÏË²ÍÒ",
"image": "60d62df4-ec4d-11e6-810d-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000006694",
"upc": "",
"model": "000048861",
"storage_prices": "",
"name": "Øàéáà ì³äíà 296.660"
},
{
"product_id": "",
"status": false,
"jan": "",
"quantity": 0,
"manufacturer": {
"manufacturer_id": "000000012",
"name": "FEBI",
"image": ""
},
"sku": "KX72D1",
"image": "e2071d13-ec4d-11e6-810d-305a3a578d98.jpg",
"price": "250.01604",
"category": [
{
"status": false,
"category_id": "000000047",
"parent_id": "         ",
"name": "Ô²ËÜÒÐÀ",
"image": "e2071d13-ec4d-11e6-810d-305a3a578d98.jpg"
},
{
"status": false,
"category_id": "000044272",
"parent_id": "000000047",
"name": " Ô²ËÜÒÐÀ ÏÀËÈÂÍ²",
"image": "e2071d13-ec4d-11e6-810d-305a3a578d98.jpg"
}
],
"ean": "",
"category_id": "000044272",
"upc": "",
"model": "000048862",
"storage_prices": "",
"name": "Ô³ëüòð ïàëèâíèé 47974"
}
]';
    }

    public  function actionImportProducts(){
        try{
            if($data = \Yii::$app->request->post("data")){
                //$data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->ImportProduct($item);
                    }
                } else {
                    throw new Exception("Данные о товарах ожидаются в виде массива.");
                }
                die(\GuzzleHttp\json_encode($this->result));
            }else {
                throw new Exception("Отсутствует data");
            }


        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }

    public function ImportProduct($item){
        if(isset($item->category)){
            $item->category_id = $this->SaveCategories($item->category);
            unset($item->category);
        } else {
            throw new Exception("У товара {$item->model} не указаны категории");
        }

        if(isset($item->manufacturer) && !empty($item->manufacturer) && isset($item->manufacturer->name) && !empty($item->manufacturer->name)){
            $item->brand = $this->SaveBrand($item->manufacturer);
            unset($item->manufacturer);
        }

        $this->SaveItem($item);
    }

    private function SaveCategories($categories){
        $category_id = null;
        foreach ($categories as $category){
            $parent = null;
            if(!empty($category->parent_id)){
                $parent = $model = Category::find()->joinWith('lang')->where(["remote_id" => $category->parent_id])->one();
            }
            $model = Category::find()->joinWith('lang')->where(["remote_id" => $category->category_id])->one();
            if(!$model instanceof Category){
                $model = new Category();
                $model->generateLangs();
                foreach ($model->modelLangs as $category_lang) {
                    $category_lang->title = $category->name;
                    $model->remote_id = $category->category_id;
                }
            } else {
                $model->lang->title = $category->name;
            }

            $model->status    = $category->status;
            $model->parent_id =  $parent ? $parent->id : 0;
            $model->image = $category->image;
            if(!$model->validate()){
                throw new Exception(print_r($model->getErrors()));
            }

            $model->save();
            $category_id = $model->id;
        }

        return $category_id;
    }

    private function SaveBrand($brand){
        $model = Brand::find()->joinWith('lang')->where(["remote_id" => $brand->manufacturer_id])->one();
        if(!$model instanceof Brand){
            $model = new Brand();
            $model->generateLangs();
            foreach ($model->modelLangs as $brand_lang) {
                $brand_lang->title = $brand->name;
            }
        } else {
            $model->lang->title = $brand->name;
        }
        $model->remote_id = $brand->manufacturer_id;
        $model->image = $brand->image;
        if(!$model->validate()){
            throw new Exception(print_r($model->getErrors()));
        }
        $model->save();

        return $model->id;
    }


    private function SaveItem($item){

        $model = Product::find()->joinWith('lang')->where(["remote_id" => $item->model])->one();

        $new_product = false;

        if(!$model instanceof Product){
            $new_product = true;
            $model = new Product();
            $model->generateLangs();
            foreach ($model->modelLangs as $lang) {
                $lang->title = $item->name;
            }
        } else {
            $model->lang->title = $item->name;
        }
        $model->status = $item->status;
        $model->remote_id = $item->model;
        if(isset($item->brand) && !empty($item->brand)){
            $model->brand_id = $item->brand;
        }
        if(!$model->validate()){
            throw new Exception(print_r($model->getErrors()));
        }
        $model->save();



        $variant_id = $this->SaveItemVariant($new_product, $model, $item);
        if(isset($item->category_id)){
            $this->SaveProductCategory($new_product, $model, $item);
        }

        $this->SaveProductImage($new_product,$model,$item,$variant_id);

        $this->result[$item->model] = $model->id;

    }

    private function SaveProductCategory($new_product, $model, $item){

        if(!$new_product){
            $data = ProductCategory::find()
                ->where(["product_id"=>$model->id,
                    "category_id"=>$item->category_id])
                ->one();
            if($data instanceof ProductCategory){
                $data->delete();
            }
        }
        $category = new ProductCategory();
        $category->product_id = $model->id;
        $category->category_id = $item->category_id;
        if(!$category->validate()){
            throw new Exception(print_r($category->getErrors()));
        }
        $category->save();
    }

    private function SaveProductImage($new_product,$model,$item,$variant_id ){
        if($new_product || !isset($model->image)){
            $image = new ProductImage();
            $image->product_id = $model->id;
            $image->product_variant_id = $variant_id;
        } else {
            $image = $model->image;
        }
        $image->image = $item->image;
        if(!$image->validate()){
            throw new Exception(print_r($image->getErrors()));
        }
        $image->save();
    }

    private function SaveItemVariant($new_product, $model, $item){
        if($new_product){
            $variant = new ProductVariant();
            $variant->product_id = $model->id;
            $variant->generateLangs();
            foreach ($variant->modelLangs as $lang) {
                $lang->title = $item->name;
            }
        } else {
            $variant  = $model->variant;
            $variant->lang->title = $item->name;
        }
        $variant->sku = $item->sku;
        $variant->price = $item->price;
        $variant->remote_id = $item->model;
        $variant->stock = $item->quantity;
        if(!$variant->validate()){
            throw new Exception(print_r($variant->getErrors()));
        }
        $variant->save();
        return $variant->id;
    }
}