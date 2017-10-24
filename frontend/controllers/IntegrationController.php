<?php
namespace frontend\controllers;

use artweb\artbox\ecommerce\models\Order;
use artweb\artbox\ecommerce\models\OrderProduct;
use common\models\CustomerCategoryDiscount;
use artweb\artbox\ecommerce\models\Brand;
use artweb\artbox\ecommerce\models\Category;
use artweb\artbox\ecommerce\models\Product;
use artweb\artbox\ecommerce\models\ProductCategory;
use artweb\artbox\ecommerce\models\ProductImage;
use artweb\artbox\ecommerce\models\ProductVariant;
use artweb\artbox\models\Customer;
use common\models\CustomerPayment;
use common\models\CustomerPaymentHistory;
use frontend\models\SignupForm;
use yii\base\Controller;
use yii\base\Exception;

class IntegrationController extends Controller{

    public $result = [];
    public function getItemData(){
      return '[
  {
    "id": "81",
    "coming": 620375.85,
    "consumption": 614450.85,
    "remainder": 5925,
    "orders": [
      {
        "nom": "ÿƒ-00002752",
        "date": "19.06.2014",
        "documentamount": 7962,
        "coming": 7962,
        "consumption": 7962,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.06.2014",
            "coming": 7962,
            "consumption": 0
          },
          {
            "date": "23.07.2014",
            "coming": 0,
            "consumption": 7962
          }
        ]
      },
      {
        "nom": "ÿƒ-00002871",
        "date": "25.06.2014",
        "documentamount": 10320.01,
        "coming": 10320.01,
        "consumption": 10320.01,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.06.2014",
            "coming": 10320.01,
            "consumption": 0
          },
          {
            "date": "09.07.2014",
            "coming": 0,
            "consumption": 10320.01
          }
        ]
      },
      {
        "nom": "ÿƒ-00002950",
        "date": "30.06.2014",
        "documentamount": 4808.04,
        "coming": 4808.04,
        "consumption": 4808.04,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.06.2014",
            "coming": 4808.04,
            "consumption": 0
          },
          {
            "date": "23.07.2014",
            "coming": 0,
            "consumption": 4808.04
          }
        ]
      },
      {
        "nom": "ÿƒ-00002935",
        "date": "01.07.2014",
        "documentamount": 580,
        "coming": 580,
        "consumption": 580,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.07.2014",
            "coming": 580,
            "consumption": 0
          },
          {
            "date": "23.07.2014",
            "coming": 0,
            "consumption": 580
          }
        ]
      },
      {
        "nom": "ÿƒ-00003015",
        "date": "09.07.2014",
        "documentamount": 3512.99,
        "coming": 3512.99,
        "consumption": 3512.99,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.07.2014",
            "coming": 3512.99,
            "consumption": 0
          },
          {
            "date": "25.07.2014",
            "coming": 0,
            "consumption": 3512.99
          }
        ]
      },
      {
        "nom": "ÿƒ-00003085",
        "date": "10.07.2014",
        "documentamount": 130.01,
        "coming": 130.01,
        "consumption": 130.01,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.07.2014",
            "coming": 130.01,
            "consumption": 0
          },
          {
            "date": "23.07.2014",
            "coming": 0,
            "consumption": 130.01
          }
        ]
      },
      {
        "nom": "ÿƒ-00003087",
        "date": "10.07.2014",
        "documentamount": 1965,
        "coming": 1965,
        "consumption": 1965,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.07.2014",
            "coming": 1965,
            "consumption": 0
          },
          {
            "date": "25.07.2014",
            "coming": 0,
            "consumption": 1965
          }
        ]
      },
      {
        "nom": "ÿƒ-00003134",
        "date": "12.07.2014",
        "documentamount": 2198.39,
        "coming": 2198.39,
        "consumption": 2198.39,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.07.2014",
            "coming": 2198.39,
            "consumption": 0
          },
          {
            "date": "25.07.2014",
            "coming": 0,
            "consumption": 2198.39
          }
        ]
      },
      {
        "nom": "ÿƒ-00003180",
        "date": "15.07.2014",
        "documentamount": 2276,
        "coming": 2276,
        "consumption": 2276,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.07.2014",
            "coming": 2276,
            "consumption": 0
          },
          {
            "date": "25.07.2014",
            "coming": 0,
            "consumption": 2276
          }
        ]
      },
      {
        "nom": "ÿƒ-00003266",
        "date": "17.07.2014",
        "documentamount": 1288,
        "coming": 1288,
        "consumption": 1288,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.07.2014",
            "coming": 1288,
            "consumption": 0
          },
          {
            "date": "23.07.2014",
            "coming": 0,
            "consumption": 1288
          }
        ]
      },
      {
        "nom": "ÿƒ-00003301",
        "date": "18.07.2014",
        "documentamount": 105.01,
        "coming": 105.01,
        "consumption": 105.01,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.07.2014",
            "coming": 105.01,
            "consumption": 0
          },
          {
            "date": "23.07.2014",
            "coming": 0,
            "consumption": 105.01
          }
        ]
      },
      {
        "nom": "ÿƒ-00003409",
        "date": "23.07.2014",
        "documentamount": 2456,
        "coming": 2456,
        "consumption": 2456,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.07.2014",
            "coming": 2456,
            "consumption": 0
          },
          {
            "date": "25.07.2014",
            "coming": 0,
            "consumption": 2456
          }
        ]
      },
      {
        "nom": "ÿƒ-00003518",
        "date": "29.07.2014",
        "documentamount": 796,
        "coming": 796,
        "consumption": 796,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.07.2014",
            "coming": 796,
            "consumption": 0
          },
          {
            "date": "30.07.2014",
            "coming": 0,
            "consumption": 796
          }
        ]
      },
      {
        "nom": "ÿƒ-00003577",
        "date": "30.07.2014",
        "documentamount": 8586,
        "coming": 8586,
        "consumption": 8586,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.07.2014",
            "coming": 8586,
            "consumption": 0
          },
          {
            "date": "29.08.2014",
            "coming": 0,
            "consumption": 8586
          }
        ]
      },
      {
        "nom": "ÿƒ-00003591",
        "date": "30.07.2014",
        "documentamount": 821,
        "coming": 821,
        "consumption": 821,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.07.2014",
            "coming": 821,
            "consumption": 0
          },
          {
            "date": "08.08.2014",
            "coming": 0,
            "consumption": 821
          }
        ]
      },
      {
        "nom": "ÿƒ-00003615",
        "date": "31.07.2014",
        "documentamount": 436,
        "coming": 436,
        "consumption": 436,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.07.2014",
            "coming": 436,
            "consumption": 0
          },
          {
            "date": "08.08.2014",
            "coming": 0,
            "consumption": 436
          }
        ]
      },
      {
        "nom": "ÿƒ-00003748",
        "date": "06.08.2014",
        "documentamount": 1195,
        "coming": 1195,
        "consumption": 1195,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.08.2014",
            "coming": 1195,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 1195
          }
        ]
      },
      {
        "nom": "ÿƒ-00003768",
        "date": "07.08.2014",
        "documentamount": 45,
        "coming": 45,
        "consumption": 45,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.08.2014",
            "coming": 45,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 45
          }
        ]
      },
      {
        "nom": "ÿƒ-00003791",
        "date": "07.08.2014",
        "documentamount": 2318,
        "coming": 2318,
        "consumption": 2318,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.08.2014",
            "coming": 2318,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 2318
          }
        ]
      },
      {
        "nom": "ÿƒ-00003879",
        "date": "12.08.2014",
        "documentamount": 2300,
        "coming": 2300,
        "consumption": 2300,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.08.2014",
            "coming": 2300,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 2300
          }
        ]
      },
      {
        "nom": "ÿƒ-00003892",
        "date": "12.08.2014",
        "documentamount": 810,
        "coming": 810,
        "consumption": 810,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.08.2014",
            "coming": 810,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 810
          }
        ]
      },
      {
        "nom": "ÿƒ-00004037",
        "date": "19.08.2014",
        "documentamount": 510,
        "coming": 510,
        "consumption": 510,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.08.2014",
            "coming": 510,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 510
          }
        ]
      },
      {
        "nom": "ÿƒ-00004084",
        "date": "20.08.2014",
        "documentamount": 360,
        "coming": 360,
        "consumption": 360,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.08.2014",
            "coming": 360,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 360
          }
        ]
      },
      {
        "nom": "ÿƒ-00004133",
        "date": "21.08.2014",
        "documentamount": 330,
        "coming": 330,
        "consumption": 330,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.08.2014",
            "coming": 330,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 330
          }
        ]
      },
      {
        "nom": "ÿƒ-00004196",
        "date": "26.08.2014",
        "documentamount": 55,
        "coming": 55,
        "consumption": 55,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.08.2014",
            "coming": 55,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 55
          }
        ]
      },
      {
        "nom": "ÿƒ-00004230",
        "date": "27.08.2014",
        "documentamount": 88,
        "coming": 88,
        "consumption": 88,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.08.2014",
            "coming": 88,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 88
          }
        ]
      },
      {
        "nom": "ÿƒ-00004274",
        "date": "29.08.2014",
        "documentamount": 1724,
        "coming": 1724,
        "consumption": 1724,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.08.2014",
            "coming": 1724,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 1724
          }
        ]
      },
      {
        "nom": "ÿƒ-00004472",
        "date": "08.09.2014",
        "documentamount": 1630,
        "coming": 1630,
        "consumption": 1630,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.09.2014",
            "coming": 1630,
            "consumption": 0
          },
          {
            "date": "19.09.2014",
            "coming": 0,
            "consumption": 1630
          }
        ]
      },
      {
        "nom": "ÿƒ-00004587",
        "date": "15.09.2014",
        "documentamount": 96,
        "coming": 96,
        "consumption": 96,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.09.2014",
            "coming": 96,
            "consumption": 0
          },
          {
            "date": "06.10.2014",
            "coming": 0,
            "consumption": 96
          }
        ]
      },
      {
        "nom": "ÿƒ-00004607",
        "date": "15.09.2014",
        "documentamount": 5963,
        "coming": 5963,
        "consumption": 5963,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.09.2014",
            "coming": 5963,
            "consumption": 0
          },
          {
            "date": "06.10.2014",
            "coming": 0,
            "consumption": 5963
          }
        ]
      },
      {
        "nom": "ÿƒ-00004698",
        "date": "17.09.2014",
        "documentamount": 4885,
        "coming": 4885,
        "consumption": 4885,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.09.2014",
            "coming": 4045,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 1050
          },
          {
            "date": "15.10.2014",
            "coming": 840,
            "consumption": 0
          },
          {
            "date": "17.10.2014",
            "coming": 0,
            "consumption": 3835
          }
        ]
      },
      {
        "nom": "ÿƒ-00004726",
        "date": "18.09.2014",
        "documentamount": 190,
        "coming": 190,
        "consumption": 190,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.09.2014",
            "coming": 190,
            "consumption": 0
          },
          {
            "date": "06.10.2014",
            "coming": 0,
            "consumption": 190
          }
        ]
      },
      {
        "nom": "ÿƒ-00004744",
        "date": "19.09.2014",
        "documentamount": 6966,
        "coming": 6966,
        "consumption": 6966,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.09.2014",
            "coming": 6966,
            "consumption": 0
          },
          {
            "date": "06.10.2014",
            "coming": 0,
            "consumption": 6966
          }
        ]
      },
      {
        "nom": "ÿƒ-00004876",
        "date": "29.09.2014",
        "documentamount": 400,
        "coming": 400,
        "consumption": 400,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2014",
            "coming": 400,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 400
          }
        ]
      },
      {
        "nom": "ÿƒ-00004879",
        "date": "29.09.2014",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2014",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 1250
          }
        ]
      },
      {
        "nom": "ÿƒ-00004880",
        "date": "29.09.2014",
        "documentamount": 1160,
        "coming": 1160,
        "consumption": 1160,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2014",
            "coming": 1160,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 1160
          }
        ]
      },
      {
        "nom": "ÿƒ-00004510",
        "date": "30.09.2014",
        "documentamount": 540,
        "coming": 540,
        "consumption": 540,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2014",
            "coming": 540,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 540
          }
        ]
      },
      {
        "nom": "ÿƒ-00004995",
        "date": "02.10.2014",
        "documentamount": 4525,
        "coming": 4525,
        "consumption": 4525,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.10.2014",
            "coming": 4525,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 4525
          }
        ]
      },
      {
        "nom": "ÿƒ-00005004",
        "date": "03.10.2014",
        "documentamount": 1980,
        "coming": 1980,
        "consumption": 1980,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.10.2014",
            "coming": 1980,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 1980
          }
        ]
      },
      {
        "nom": "ÿƒ-00005140",
        "date": "09.10.2014",
        "documentamount": 1635,
        "coming": 1635,
        "consumption": 1635,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.10.2014",
            "coming": 1635,
            "consumption": 0
          },
          {
            "date": "13.10.2014",
            "coming": 0,
            "consumption": 1635
          }
        ]
      },
      {
        "nom": "ÿƒ-00005186",
        "date": "10.10.2014",
        "documentamount": 2287,
        "coming": 2287,
        "consumption": 2287,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.10.2014",
            "coming": 2287,
            "consumption": 0
          },
          {
            "date": "17.10.2014",
            "coming": 0,
            "consumption": 2287
          }
        ]
      },
      {
        "nom": "ÿƒ-00005231",
        "date": "13.10.2014",
        "documentamount": 712,
        "coming": 712,
        "consumption": 712,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.10.2014",
            "coming": 712,
            "consumption": 0
          },
          {
            "date": "17.10.2014",
            "coming": 0,
            "consumption": 712
          }
        ]
      },
      {
        "nom": "ÿƒ-00005271",
        "date": "15.10.2014",
        "documentamount": 310,
        "coming": 310,
        "consumption": 310,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.10.2014",
            "coming": 310,
            "consumption": 0
          },
          {
            "date": "17.10.2014",
            "coming": 0,
            "consumption": 310
          }
        ]
      },
      {
        "nom": "ÿƒ-00005303",
        "date": "16.10.2014",
        "documentamount": 660,
        "coming": 660,
        "consumption": 660,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.10.2014",
            "coming": 660,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 660
          }
        ]
      },
      {
        "nom": "ÿƒ-00005307",
        "date": "17.10.2014",
        "documentamount": 215,
        "coming": 215,
        "consumption": 215,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.10.2014",
            "coming": 215,
            "consumption": 0
          },
          {
            "date": "22.10.2014",
            "coming": 0,
            "consumption": 215
          }
        ]
      },
      {
        "nom": "ÿƒ-00005320",
        "date": "17.10.2014",
        "documentamount": 3148,
        "coming": 3148,
        "consumption": 3148,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.10.2014",
            "coming": 3148,
            "consumption": 0
          },
          {
            "date": "22.10.2014",
            "coming": 0,
            "consumption": 3148
          }
        ]
      },
      {
        "nom": "ÿƒ-00005369",
        "date": "20.10.2014",
        "documentamount": 455,
        "coming": 455,
        "consumption": 455,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.10.2014",
            "coming": 455,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 455
          }
        ]
      },
      {
        "nom": "ÿƒ-00005373",
        "date": "20.10.2014",
        "documentamount": 615,
        "coming": 615,
        "consumption": 615,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.10.2014",
            "coming": 615,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 615
          }
        ]
      },
      {
        "nom": "ÿƒ-00005385",
        "date": "20.10.2014",
        "documentamount": 5000,
        "coming": 5000,
        "consumption": 5000,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.10.2014",
            "coming": 5000,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 5000
          }
        ]
      },
      {
        "nom": "ÿƒ-00005396",
        "date": "21.10.2014",
        "documentamount": 3145,
        "coming": 3145,
        "consumption": 3145,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.10.2014",
            "coming": 3145,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 3145
          }
        ]
      },
      {
        "nom": "ÿƒ-00005398",
        "date": "21.10.2014",
        "documentamount": 116,
        "coming": 116,
        "consumption": 116,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.10.2014",
            "coming": 116,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 116
          }
        ]
      },
      {
        "nom": "ÿƒ-00005497",
        "date": "25.10.2014",
        "documentamount": 2444,
        "coming": 2444,
        "consumption": 2444,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.10.2014",
            "coming": 2444,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 2444
          }
        ]
      },
      {
        "nom": "ÿƒ-00005522",
        "date": "28.10.2014",
        "documentamount": 145,
        "coming": 145,
        "consumption": 145,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.10.2014",
            "coming": 145,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 145
          }
        ]
      },
      {
        "nom": "ÿƒ-00005548",
        "date": "28.10.2014",
        "documentamount": 2319,
        "coming": 2319,
        "consumption": 2319,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.11.2014",
            "coming": 2319,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 2319
          }
        ]
      },
      {
        "nom": "ÿƒ-00005605",
        "date": "30.10.2014",
        "documentamount": 600,
        "coming": 600,
        "consumption": 600,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.11.2014",
            "coming": 600,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 600
          }
        ]
      },
      {
        "nom": "ÿƒ-00005661",
        "date": "03.11.2014",
        "documentamount": 850,
        "coming": 850,
        "consumption": 850,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.11.2014",
            "coming": 850,
            "consumption": 0
          },
          {
            "date": "07.11.2014",
            "coming": 0,
            "consumption": 850
          }
        ]
      },
      {
        "nom": "ÿƒ-00005718",
        "date": "06.11.2014",
        "documentamount": 352,
        "coming": 352,
        "consumption": 352,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.11.2014",
            "coming": 352,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 352
          }
        ]
      },
      {
        "nom": "ÿƒ-00005826",
        "date": "12.11.2014",
        "documentamount": 667,
        "coming": 667,
        "consumption": 667,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.11.2014",
            "coming": 667,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 667
          }
        ]
      },
      {
        "nom": "ÿƒ-00005854",
        "date": "12.11.2014",
        "documentamount": 970,
        "coming": 970,
        "consumption": 970,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.11.2014",
            "coming": 970,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 970
          }
        ]
      },
      {
        "nom": "ÿƒ-00005872",
        "date": "13.11.2014",
        "documentamount": 216,
        "coming": 216,
        "consumption": 216,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.11.2014",
            "coming": 216,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 216
          }
        ]
      },
      {
        "nom": "ÿƒ-00005907",
        "date": "14.11.2014",
        "documentamount": 850,
        "coming": 850,
        "consumption": 850,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.11.2014",
            "coming": 850,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 850
          }
        ]
      },
      {
        "nom": "ÿƒ-00006028",
        "date": "21.11.2014",
        "documentamount": 1580,
        "coming": 1580,
        "consumption": 1580,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.11.2014",
            "coming": 1580,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 1580
          }
        ]
      },
      {
        "nom": "ÿƒ-00006091",
        "date": "27.11.2014",
        "documentamount": 579,
        "coming": 579,
        "consumption": 579,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.11.2014",
            "coming": 579,
            "consumption": 0
          },
          {
            "date": "12.12.2014",
            "coming": 0,
            "consumption": 579
          }
        ]
      },
      {
        "nom": "ÿƒ-00006139",
        "date": "29.11.2014",
        "documentamount": 6434,
        "coming": 6434,
        "consumption": 6434,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.11.2014",
            "coming": 6434,
            "consumption": 0
          },
          {
            "date": "19.12.2014",
            "coming": 0,
            "consumption": 6434
          }
        ]
      },
      {
        "nom": "ÿƒ-00006201",
        "date": "02.12.2014",
        "documentamount": 3266,
        "coming": 3266,
        "consumption": 3266,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.12.2014",
            "coming": 3266,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 3266
          }
        ]
      },
      {
        "nom": "ÿƒ-00006261",
        "date": "05.12.2014",
        "documentamount": 220,
        "coming": 220,
        "consumption": 220,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.12.2014",
            "coming": 220,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 220
          }
        ]
      },
      {
        "nom": "ÿƒ-00006323",
        "date": "09.12.2014",
        "documentamount": 278,
        "coming": 278,
        "consumption": 278,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.12.2014",
            "coming": 278,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 278
          }
        ]
      },
      {
        "nom": "ÿƒ-00006344",
        "date": "10.12.2014",
        "documentamount": 3292,
        "coming": 3292,
        "consumption": 3292,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.12.2014",
            "coming": 3292,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 3292
          }
        ]
      },
      {
        "nom": "ÿƒ-00006359",
        "date": "10.12.2014",
        "documentamount": 1035,
        "coming": 1035,
        "consumption": 1035,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.12.2014",
            "coming": 1035,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 1035
          }
        ]
      },
      {
        "nom": "ÿƒ-00006407",
        "date": "15.12.2014",
        "documentamount": 680,
        "coming": 680,
        "consumption": 680,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.12.2014",
            "coming": 680,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 680
          }
        ]
      },
      {
        "nom": "ÿƒ-00006441",
        "date": "16.12.2014",
        "documentamount": 220,
        "coming": 220,
        "consumption": 220,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.12.2014",
            "coming": 220,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 220
          }
        ]
      },
      {
        "nom": "ÿƒ-00006461",
        "date": "17.12.2014",
        "documentamount": 1280,
        "coming": 1280,
        "consumption": 1280,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.12.2014",
            "coming": 1280,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 1280
          }
        ]
      },
      {
        "nom": "ÿƒ-00006526",
        "date": "20.12.2014",
        "documentamount": 2068,
        "coming": 2068,
        "consumption": 2068,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.12.2014",
            "coming": 2068,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 2068
          }
        ]
      },
      {
        "nom": "ÿƒ-00006558",
        "date": "23.12.2014",
        "documentamount": 650,
        "coming": 650,
        "consumption": 650,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.12.2014",
            "coming": 650,
            "consumption": 0
          },
          {
            "date": "08.01.2015",
            "coming": 0,
            "consumption": 650
          }
        ]
      },
      {
        "nom": "ÿƒ-00006598",
        "date": "24.12.2014",
        "documentamount": 1180,
        "coming": 1180,
        "consumption": 1180,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.12.2014",
            "coming": 1180,
            "consumption": 0
          },
          {
            "date": "21.01.2015",
            "coming": 0,
            "consumption": 1180
          }
        ]
      },
      {
        "nom": "ÿƒ-00006657",
        "date": "29.12.2014",
        "documentamount": 640,
        "coming": 640,
        "consumption": 640,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.12.2014",
            "coming": 640,
            "consumption": 0
          },
          {
            "date": "21.01.2015",
            "coming": 0,
            "consumption": 640
          }
        ]
      },
      {
        "nom": "ÿƒ-00006691",
        "date": "30.12.2014",
        "documentamount": 900,
        "coming": 900,
        "consumption": 900,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.12.2014",
            "coming": 900,
            "consumption": 0
          },
          {
            "date": "21.01.2015",
            "coming": 0,
            "consumption": 900
          }
        ]
      },
      {
        "nom": "ÿƒ-00000023",
        "date": "06.01.2015",
        "documentamount": 840,
        "coming": 840,
        "consumption": 840,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.01.2015",
            "coming": 840,
            "consumption": 0
          },
          {
            "date": "23.01.2015",
            "coming": 0,
            "consumption": 840
          }
        ]
      },
      {
        "nom": "ÿƒ-00000048",
        "date": "09.01.2015",
        "documentamount": 4078,
        "coming": 4078,
        "consumption": 4078,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.01.2015",
            "coming": 4078,
            "consumption": 0
          },
          {
            "date": "23.01.2015",
            "coming": 0,
            "consumption": 4078
          }
        ]
      },
      {
        "nom": "ÿƒ-00000061",
        "date": "09.01.2015",
        "documentamount": 2727,
        "coming": 2727,
        "consumption": 2727,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.01.2015",
            "coming": 2727,
            "consumption": 0
          },
          {
            "date": "26.01.2015",
            "coming": 0,
            "consumption": 2727
          }
        ]
      },
      {
        "nom": "ÿƒ-00000170",
        "date": "15.01.2015",
        "documentamount": 938,
        "coming": 938,
        "consumption": 938,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2015",
            "coming": 938,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 938
          }
        ]
      },
      {
        "nom": "ÿƒ-00000201",
        "date": "17.01.2015",
        "documentamount": 783,
        "coming": 783,
        "consumption": 783,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2015",
            "coming": 783,
            "consumption": 0
          },
          {
            "date": "26.01.2015",
            "coming": 0,
            "consumption": 783
          }
        ]
      },
      {
        "nom": "ÿƒ-00000202",
        "date": "17.01.2015",
        "documentamount": 2000,
        "coming": 2000,
        "consumption": 2000,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2015",
            "coming": 2000,
            "consumption": 0
          },
          {
            "date": "26.01.2015",
            "coming": 0,
            "consumption": 2000
          }
        ]
      },
      {
        "nom": "ÿƒ-00000203",
        "date": "17.01.2015",
        "documentamount": 1405,
        "coming": 1405,
        "consumption": 1405,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.01.2015",
            "coming": 1405,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 1405
          }
        ]
      },
      {
        "nom": "ÿƒ-00000204",
        "date": "17.01.2015",
        "documentamount": 4595,
        "coming": 4595,
        "consumption": 4595,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2015",
            "coming": 4595,
            "consumption": 0
          },
          {
            "date": "25.02.2015",
            "coming": 0,
            "consumption": 4595
          }
        ]
      },
      {
        "nom": "ÿƒ-00000205",
        "date": "17.01.2015",
        "documentamount": 894,
        "coming": 894,
        "consumption": 894,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2015",
            "coming": 894,
            "consumption": 0
          },
          {
            "date": "26.01.2015",
            "coming": 0,
            "consumption": 894
          }
        ]
      },
      {
        "nom": "ÿƒ-00000206",
        "date": "17.01.2015",
        "documentamount": 440,
        "coming": 440,
        "consumption": 440,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2015",
            "coming": 440,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 440
          }
        ]
      },
      {
        "nom": "ÿƒ-00000260",
        "date": "20.01.2015",
        "documentamount": 891,
        "coming": 891,
        "consumption": 891,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.01.2015",
            "coming": 891,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 891
          }
        ]
      },
      {
        "nom": "ÿƒ-00000430",
        "date": "29.01.2015",
        "documentamount": 1050,
        "coming": 1050,
        "consumption": 1050,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.01.2015",
            "coming": 1050,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 1050
          }
        ]
      },
      {
        "nom": "ÿƒ-00000464",
        "date": "30.01.2015",
        "documentamount": 146,
        "coming": 146,
        "consumption": 146,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.01.2015",
            "coming": 146,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 146
          }
        ]
      },
      {
        "nom": "ÿƒ-00000513",
        "date": "02.02.2015",
        "documentamount": 150,
        "coming": 150,
        "consumption": 150,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.02.2015",
            "coming": 150,
            "consumption": 0
          },
          {
            "date": "04.02.2015",
            "coming": 0,
            "consumption": 150
          }
        ]
      },
      {
        "nom": "ÿƒ-00000541",
        "date": "03.02.2015",
        "documentamount": 292,
        "coming": 292,
        "consumption": 292,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.02.2015",
            "coming": 292,
            "consumption": 0
          },
          {
            "date": "13.02.2015",
            "coming": 0,
            "consumption": 292
          }
        ]
      },
      {
        "nom": "ÿƒ-00000690",
        "date": "12.02.2015",
        "documentamount": 1895,
        "coming": 1895,
        "consumption": 1895,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.02.2015",
            "coming": 1895,
            "consumption": 0
          },
          {
            "date": "18.02.2015",
            "coming": 0,
            "consumption": 1895
          }
        ]
      },
      {
        "nom": "ÿƒ-00000785",
        "date": "18.02.2015",
        "documentamount": 1485,
        "coming": 1485,
        "consumption": 1485,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.02.2015",
            "coming": 1485,
            "consumption": 0
          },
          {
            "date": "27.02.2015",
            "coming": 0,
            "consumption": 1485
          }
        ]
      },
      {
        "nom": "ÿƒ-00000851",
        "date": "23.02.2015",
        "documentamount": 5720,
        "coming": 5720,
        "consumption": 5720,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.02.2015",
            "coming": 5720,
            "consumption": 0
          },
          {
            "date": "27.02.2015",
            "coming": 0,
            "consumption": 5720
          }
        ]
      },
      {
        "nom": "ÿƒ-00000905",
        "date": "25.02.2015",
        "documentamount": 450,
        "coming": 450,
        "consumption": 450,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.02.2015",
            "coming": 450,
            "consumption": 0
          },
          {
            "date": "11.03.2015",
            "coming": 0,
            "consumption": 450
          }
        ]
      },
      {
        "nom": "ÿƒ-00001027",
        "date": "27.02.2015",
        "documentamount": 120,
        "coming": 120,
        "consumption": 120,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.02.2015",
            "coming": 120,
            "consumption": 0
          },
          {
            "date": "11.03.2015",
            "coming": 0,
            "consumption": 120
          }
        ]
      },
      {
        "nom": "ÿƒ-00000957",
        "date": "02.03.2015",
        "documentamount": 190,
        "coming": 190,
        "consumption": 190,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.03.2015",
            "coming": 190,
            "consumption": 0
          },
          {
            "date": "11.03.2015",
            "coming": 0,
            "consumption": 190
          }
        ]
      },
      {
        "nom": "ÿƒ-00001140",
        "date": "11.03.2015",
        "documentamount": 272,
        "coming": 272,
        "consumption": 272,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.03.2015",
            "coming": 272,
            "consumption": 0
          },
          {
            "date": "13.03.2015",
            "coming": 0,
            "consumption": 272
          }
        ]
      },
      {
        "nom": "ÿƒ-00001183",
        "date": "12.03.2015",
        "documentamount": 136,
        "coming": 136,
        "consumption": 136,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.03.2015",
            "coming": 136,
            "consumption": 0
          },
          {
            "date": "27.03.2015",
            "coming": 0,
            "consumption": 136
          }
        ]
      },
      {
        "nom": "ÿƒ-00001377",
        "date": "20.03.2015",
        "documentamount": 1980,
        "coming": 1980,
        "consumption": 1980,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.03.2015",
            "coming": 1980,
            "consumption": 0
          },
          {
            "date": "27.03.2015",
            "coming": 0,
            "consumption": 1980
          }
        ]
      },
      {
        "nom": "ÿƒ-00001432",
        "date": "24.03.2015",
        "documentamount": 262,
        "coming": 262,
        "consumption": 262,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.03.2015",
            "coming": 262,
            "consumption": 0
          },
          {
            "date": "27.03.2015",
            "coming": 0,
            "consumption": 262
          }
        ]
      },
      {
        "nom": "ÿƒ-00001448",
        "date": "24.03.2015",
        "documentamount": 70,
        "coming": 70,
        "consumption": 70,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.03.2015",
            "coming": 70,
            "consumption": 0
          },
          {
            "date": "27.03.2015",
            "coming": 0,
            "consumption": 70
          }
        ]
      },
      {
        "nom": "ÿƒ-00001484",
        "date": "26.03.2015",
        "documentamount": 1300,
        "coming": 1300,
        "consumption": 1300,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.03.2015",
            "coming": 1300,
            "consumption": 0
          },
          {
            "date": "27.03.2015",
            "coming": 0,
            "consumption": 1300
          }
        ]
      },
      {
        "nom": "ÿƒ-00001485",
        "date": "26.03.2015",
        "documentamount": 455,
        "coming": 455,
        "consumption": 455,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.03.2015",
            "coming": 455,
            "consumption": 0
          },
          {
            "date": "27.03.2015",
            "coming": 0,
            "consumption": 455
          }
        ]
      },
      {
        "nom": "ÿƒ-00001514",
        "date": "27.03.2015",
        "documentamount": 849,
        "coming": 849,
        "consumption": 849,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.03.2015",
            "coming": 849,
            "consumption": 0
          },
          {
            "date": "03.04.2015",
            "coming": 0,
            "consumption": 849
          }
        ]
      },
      {
        "nom": "ÿƒ-00001539",
        "date": "28.03.2015",
        "documentamount": 1300,
        "coming": 1300,
        "consumption": 1300,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.03.2015",
            "coming": 1300,
            "consumption": 0
          },
          {
            "date": "03.04.2015",
            "coming": 0,
            "consumption": 1300
          }
        ]
      },
      {
        "nom": "ÿƒ-00001618",
        "date": "31.03.2015",
        "documentamount": 996,
        "coming": 996,
        "consumption": 996,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.03.2015",
            "coming": 996,
            "consumption": 0
          },
          {
            "date": "05.05.2015",
            "coming": 0,
            "consumption": 996
          }
        ]
      },
      {
        "nom": "ÿƒ-00001635",
        "date": "01.04.2015",
        "documentamount": 1227,
        "coming": 1227,
        "consumption": 1227,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.04.2015",
            "coming": 1227,
            "consumption": 0
          },
          {
            "date": "05.05.2015",
            "coming": 0,
            "consumption": 1227
          }
        ]
      },
      {
        "nom": "ÿƒ-00001842",
        "date": "11.04.2015",
        "documentamount": 2797,
        "coming": 2797,
        "consumption": 2797,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.04.2015",
            "coming": 2797,
            "consumption": 0
          },
          {
            "date": "05.05.2015",
            "coming": 0,
            "consumption": 2797
          }
        ]
      },
      {
        "nom": "ÿƒ-00001968",
        "date": "18.04.2015",
        "documentamount": 1580,
        "coming": 1580,
        "consumption": 1580,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.04.2015",
            "coming": 1580,
            "consumption": 0
          },
          {
            "date": "05.05.2015",
            "coming": 0,
            "consumption": 1580
          }
        ]
      },
      {
        "nom": "ÿƒ-00002016",
        "date": "21.04.2015",
        "documentamount": 338,
        "coming": 338,
        "consumption": 338,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.04.2015",
            "coming": 338,
            "consumption": 0
          },
          {
            "date": "05.05.2015",
            "coming": 0,
            "consumption": 338
          }
        ]
      },
      {
        "nom": "ÿƒ-00002079",
        "date": "24.04.2015",
        "documentamount": 1244,
        "coming": 1244,
        "consumption": 1244,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.04.2015",
            "coming": 1244,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 1244
          }
        ]
      },
      {
        "nom": "ÿƒ-00002110",
        "date": "27.04.2015",
        "documentamount": 1246,
        "coming": 1246,
        "consumption": 1246,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.04.2015",
            "coming": 1246,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 1246
          }
        ]
      },
      {
        "nom": "ÿƒ-00002507",
        "date": "18.05.2015",
        "documentamount": 1690,
        "coming": 1690,
        "consumption": 1690,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.05.2015",
            "coming": 1690,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 1690
          }
        ]
      },
      {
        "nom": "ÿƒ-00002522",
        "date": "19.05.2015",
        "documentamount": 280,
        "coming": 280,
        "consumption": 280,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.05.2015",
            "coming": 280,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 280
          }
        ]
      },
      {
        "nom": "ÿƒ-00002538",
        "date": "19.05.2015",
        "documentamount": 534,
        "coming": 534,
        "consumption": 534,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.05.2015",
            "coming": 534,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 534
          }
        ]
      },
      {
        "nom": "ÿƒ-00002700",
        "date": "26.05.2015",
        "documentamount": 2065,
        "coming": 2065,
        "consumption": 2065,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.05.2015",
            "coming": 2065,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 2065
          }
        ]
      },
      {
        "nom": "ÿƒ-00002801",
        "date": "01.06.2015",
        "documentamount": 825,
        "coming": 825,
        "consumption": 825,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.06.2015",
            "coming": 825,
            "consumption": 0
          },
          {
            "date": "08.06.2015",
            "coming": 0,
            "consumption": 825
          }
        ]
      },
      {
        "nom": "ÿƒ-00002861",
        "date": "03.06.2015",
        "documentamount": 60,
        "coming": 60,
        "consumption": 60,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.06.2015",
            "coming": 60,
            "consumption": 0
          },
          {
            "date": "22.06.2015",
            "coming": 0,
            "consumption": 60
          }
        ]
      },
      {
        "nom": "ÿƒ-00002908",
        "date": "04.06.2015",
        "documentamount": 650,
        "coming": 650,
        "consumption": 650,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.06.2015",
            "coming": 650,
            "consumption": 0
          },
          {
            "date": "22.06.2015",
            "coming": 0,
            "consumption": 650
          }
        ]
      },
      {
        "nom": "ÿƒ-00002933",
        "date": "05.06.2015",
        "documentamount": 2700,
        "coming": 2700,
        "consumption": 2700,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.06.2015",
            "coming": 2700,
            "consumption": 0
          },
          {
            "date": "22.06.2015",
            "coming": 0,
            "consumption": 2700
          }
        ]
      },
      {
        "nom": "ÿƒ-00002934",
        "date": "05.06.2015",
        "documentamount": 126,
        "coming": 126,
        "consumption": 126,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.06.2015",
            "coming": 126,
            "consumption": 0
          },
          {
            "date": "31.07.2015",
            "coming": 0,
            "consumption": 126
          }
        ]
      },
      {
        "nom": "ÿƒ-00003007",
        "date": "10.06.2015",
        "documentamount": 680,
        "coming": 680,
        "consumption": 680,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.06.2015",
            "coming": 680,
            "consumption": 0
          },
          {
            "date": "22.06.2015",
            "coming": 0,
            "consumption": 680
          }
        ]
      },
      {
        "nom": "ÿƒ-00003141",
        "date": "15.06.2015",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.06.2015",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "22.06.2015",
            "coming": 0,
            "consumption": 1250
          }
        ]
      },
      {
        "nom": "ÿƒ-00003164",
        "date": "15.06.2015",
        "documentamount": 550,
        "coming": 550,
        "consumption": 550,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.06.2015",
            "coming": 550,
            "consumption": 0
          },
          {
            "date": "22.06.2015",
            "coming": 0,
            "consumption": 550
          }
        ]
      },
      {
        "nom": "ÿƒ-00003175",
        "date": "16.06.2015",
        "documentamount": 560,
        "coming": 560,
        "consumption": 560,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.06.2015",
            "coming": 560,
            "consumption": 0
          },
          {
            "date": "10.07.2015",
            "coming": 0,
            "consumption": 560
          }
        ]
      },
      {
        "nom": "ÿƒ-00003202",
        "date": "17.06.2015",
        "documentamount": 498,
        "coming": 498,
        "consumption": 498,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.06.2015",
            "coming": 498,
            "consumption": 0
          },
          {
            "date": "10.07.2015",
            "coming": 0,
            "consumption": 498
          }
        ]
      },
      {
        "nom": "ÿƒ-00003323",
        "date": "24.06.2015",
        "documentamount": 1050,
        "coming": 1050,
        "consumption": 1050,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.06.2015",
            "coming": 1050,
            "consumption": 0
          },
          {
            "date": "10.07.2015",
            "coming": 0,
            "consumption": 1050
          }
        ]
      },
      {
        "nom": "ÿƒ-00003390",
        "date": "25.06.2015",
        "documentamount": 175,
        "coming": 175,
        "consumption": 175,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.06.2015",
            "coming": 175,
            "consumption": 0
          },
          {
            "date": "10.07.2015",
            "coming": 0,
            "consumption": 175
          }
        ]
      },
      {
        "nom": "ÿƒ-00003412",
        "date": "26.06.2015",
        "documentamount": 540,
        "coming": 540,
        "consumption": 540,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.06.2015",
            "coming": 540,
            "consumption": 0
          },
          {
            "date": "10.07.2015",
            "coming": 0,
            "consumption": 540
          }
        ]
      },
      {
        "nom": "ÿƒ-00013523",
        "date": "01.07.2015",
        "documentamount": 680,
        "coming": 680,
        "consumption": 680,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.07.2015",
            "coming": 680,
            "consumption": 0
          },
          {
            "date": "31.07.2015",
            "coming": 0,
            "consumption": 680
          }
        ]
      },
      {
        "nom": "ÿƒ-00013528",
        "date": "01.07.2015",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.07.2015",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "31.07.2015",
            "coming": 0,
            "consumption": 1250
          }
        ]
      },
      {
        "nom": "ÿƒ-00013646",
        "date": "07.07.2015",
        "documentamount": 430,
        "coming": 430,
        "consumption": 430,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.07.2015",
            "coming": 430,
            "consumption": 0
          },
          {
            "date": "31.07.2015",
            "coming": 0,
            "consumption": 430
          }
        ]
      },
      {
        "nom": "ÿƒ-00013857",
        "date": "14.07.2015",
        "documentamount": 920,
        "coming": 920,
        "consumption": 920,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.07.2015",
            "coming": 920,
            "consumption": 0
          },
          {
            "date": "25.08.2015",
            "coming": 0,
            "consumption": 920
          }
        ]
      },
      {
        "nom": "ÿƒ-00014188",
        "date": "28.07.2015",
        "documentamount": 775,
        "coming": 775,
        "consumption": 775,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.07.2015",
            "coming": 575,
            "consumption": 0
          },
          {
            "date": "28.07.2015",
            "coming": 200,
            "consumption": 0
          },
          {
            "date": "25.08.2015",
            "coming": 0,
            "consumption": 775
          }
        ]
      },
      {
        "nom": "ÿƒ-00014324",
        "date": "03.08.2015",
        "documentamount": 195,
        "coming": 195,
        "consumption": 195,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.08.2015",
            "coming": 195,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 195
          }
        ]
      },
      {
        "nom": "ÿƒ-00014321",
        "date": "03.08.2015",
        "documentamount": 790,
        "coming": 790,
        "consumption": 790,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.08.2015",
            "coming": 790,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 790
          }
        ]
      },
      {
        "nom": "ÿƒ-00014417",
        "date": "05.08.2015",
        "documentamount": 190,
        "coming": 190,
        "consumption": 190,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.08.2015",
            "coming": 190,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 190
          }
        ]
      },
      {
        "nom": "ÿƒ-00014418",
        "date": "05.08.2015",
        "documentamount": 307,
        "coming": 307,
        "consumption": 307,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.08.2015",
            "coming": 307,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 307
          }
        ]
      },
      {
        "nom": "ÿƒ-00014439",
        "date": "06.08.2015",
        "documentamount": 108,
        "coming": 108,
        "consumption": 108,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.08.2015",
            "coming": 108,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 108
          }
        ]
      },
      {
        "nom": "ÿƒ-00014503",
        "date": "07.08.2015",
        "documentamount": 266,
        "coming": 266,
        "consumption": 266,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.08.2015",
            "coming": 266,
            "consumption": 0
          },
          {
            "date": "23.09.2015",
            "coming": 0,
            "consumption": 266
          }
        ]
      },
      {
        "nom": "ÿƒ-00014597",
        "date": "11.08.2015",
        "documentamount": 850,
        "coming": 850,
        "consumption": 850,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.08.2015",
            "coming": 850,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 850
          }
        ]
      },
      {
        "nom": "ÿƒ-00014647",
        "date": "13.08.2015",
        "documentamount": 550,
        "coming": 550,
        "consumption": 550,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.08.2015",
            "coming": 550,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 550
          }
        ]
      },
      {
        "nom": "ÿƒ-00014693",
        "date": "17.08.2015",
        "documentamount": 450,
        "coming": 450,
        "consumption": 450,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.08.2015",
            "coming": 450,
            "consumption": 0
          },
          {
            "date": "26.08.2015",
            "coming": 0,
            "consumption": 450
          }
        ]
      },
      {
        "nom": "ÿƒ-00014728",
        "date": "17.08.2015",
        "documentamount": 970,
        "coming": 970,
        "consumption": 970,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.08.2015",
            "coming": 970,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 970
          }
        ]
      },
      {
        "nom": "ÿƒ-00014875",
        "date": "21.08.2015",
        "documentamount": 800,
        "coming": 800,
        "consumption": 800,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.08.2015",
            "coming": 800,
            "consumption": 0
          },
          {
            "date": "21.09.2015",
            "coming": 0,
            "consumption": 800
          }
        ]
      },
      {
        "nom": "ÿƒ-00014873",
        "date": "22.08.2015",
        "documentamount": 7000,
        "coming": 7000,
        "consumption": 7000,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.08.2015",
            "coming": 3500,
            "consumption": 0
          },
          {
            "date": "10.09.2015",
            "coming": 3500,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 7000
          }
        ]
      },
      {
        "nom": "ÿƒ-00015158",
        "date": "03.09.2015",
        "documentamount": 296,
        "coming": 296,
        "consumption": 296,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.09.2015",
            "coming": 296,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 296
          }
        ]
      },
      {
        "nom": "ÿƒ-00015214",
        "date": "07.09.2015",
        "documentamount": 800,
        "coming": 800,
        "consumption": 800,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.09.2015",
            "coming": 800,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 800
          }
        ]
      },
      {
        "nom": "ÿƒ-00015259",
        "date": "07.09.2015",
        "documentamount": 4900,
        "coming": 4900,
        "consumption": 4900,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.09.2015",
            "coming": 1200,
            "consumption": 0
          },
          {
            "date": "08.09.2015",
            "coming": 3700,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 4900
          }
        ]
      },
      {
        "nom": "ÿƒ-00015260",
        "date": "07.09.2015",
        "documentamount": 307,
        "coming": 307,
        "consumption": 307,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.09.2015",
            "coming": 307,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 307
          }
        ]
      },
      {
        "nom": "ÿƒ-00015327",
        "date": "08.09.2015",
        "documentamount": 3680,
        "coming": 3680,
        "consumption": 3680,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.09.2015",
            "coming": 3680,
            "consumption": 0
          },
          {
            "date": "16.09.2015",
            "coming": 0,
            "consumption": 3680
          }
        ]
      },
      {
        "nom": "ÿƒ-00015553",
        "date": "16.09.2015",
        "documentamount": 350,
        "coming": 350,
        "consumption": 350,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.09.2015",
            "coming": 350,
            "consumption": 0
          },
          {
            "date": "23.09.2015",
            "coming": 0,
            "consumption": 350
          }
        ]
      },
      {
        "nom": "ÿƒ-00015668",
        "date": "19.09.2015",
        "documentamount": 210,
        "coming": 210,
        "consumption": 210,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.09.2015",
            "coming": 210,
            "consumption": 0
          },
          {
            "date": "23.09.2015",
            "coming": 0,
            "consumption": 210
          }
        ]
      },
      {
        "nom": "ÿƒ-00015716",
        "date": "21.09.2015",
        "documentamount": 2563,
        "coming": 2563,
        "consumption": 2563,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.09.2015",
            "coming": 2563,
            "consumption": 0
          },
          {
            "date": "23.09.2015",
            "coming": 0,
            "consumption": 2563
          }
        ]
      },
      {
        "nom": "ÿƒ-00015835",
        "date": "24.09.2015",
        "documentamount": 560,
        "coming": 560,
        "consumption": 560,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.09.2015",
            "coming": 560,
            "consumption": 0
          },
          {
            "date": "07.10.2015",
            "coming": 0,
            "consumption": 560
          }
        ]
      },
      {
        "nom": "ÿƒ-00015841",
        "date": "24.09.2015",
        "documentamount": 34,
        "coming": 34,
        "consumption": 34,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.09.2015",
            "coming": 34,
            "consumption": 0
          },
          {
            "date": "07.10.2015",
            "coming": 0,
            "consumption": 34
          }
        ]
      },
      {
        "nom": "ÿƒ-00015909",
        "date": "28.09.2015",
        "documentamount": 554,
        "coming": 554,
        "consumption": 554,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.09.2015",
            "coming": 554,
            "consumption": 0
          },
          {
            "date": "07.10.2015",
            "coming": 0,
            "consumption": 554
          }
        ]
      },
      {
        "nom": "ÿƒ-00015975",
        "date": "29.09.2015",
        "documentamount": 170,
        "coming": 170,
        "consumption": 170,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.09.2015",
            "coming": 170,
            "consumption": 0
          },
          {
            "date": "12.10.2015",
            "coming": 0,
            "consumption": 170
          }
        ]
      },
      {
        "nom": "ÿƒ-00016012",
        "date": "30.09.2015",
        "documentamount": 92,
        "coming": 92,
        "consumption": 92,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2015",
            "coming": 92,
            "consumption": 0
          },
          {
            "date": "12.10.2015",
            "coming": 0,
            "consumption": 92
          }
        ]
      },
      {
        "nom": "ÿƒ-00100054",
        "date": "12.10.2015",
        "documentamount": 630,
        "coming": 630,
        "consumption": 630,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.10.2015",
            "coming": 630,
            "consumption": 0
          },
          {
            "date": "21.10.2015",
            "coming": 0,
            "consumption": 630
          }
        ]
      },
      {
        "nom": "ÿƒ-00100269",
        "date": "20.10.2015",
        "documentamount": 110,
        "coming": 110,
        "consumption": 110,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.10.2015",
            "coming": 110,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 110
          }
        ]
      },
      {
        "nom": "ÿƒ-00100339",
        "date": "22.10.2015",
        "documentamount": 1360,
        "coming": 1360,
        "consumption": 1360,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.10.2015",
            "coming": 540,
            "consumption": 0
          },
          {
            "date": "23.10.2015",
            "coming": 820,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 1360
          }
        ]
      },
      {
        "nom": "ÿƒ-00100340",
        "date": "22.10.2015",
        "documentamount": 630,
        "coming": 630,
        "consumption": 630,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.10.2015",
            "coming": 630,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 630
          }
        ]
      },
      {
        "nom": "ÿƒ-00100439",
        "date": "27.10.2015",
        "documentamount": 290,
        "coming": 290,
        "consumption": 290,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.10.2015",
            "coming": 290,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 290
          }
        ]
      },
      {
        "nom": "ÿƒ-00100463",
        "date": "27.10.2015",
        "documentamount": 150,
        "coming": 150,
        "consumption": 150,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.10.2015",
            "coming": 150,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 150
          }
        ]
      },
      {
        "nom": "ÿƒ-00100481",
        "date": "28.10.2015",
        "documentamount": 138,
        "coming": 138,
        "consumption": 138,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.10.2015",
            "coming": 138,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 138
          }
        ]
      },
      {
        "nom": "ÿƒ-00100500",
        "date": "28.10.2015",
        "documentamount": 3680,
        "coming": 3680,
        "consumption": 3680,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.10.2015",
            "coming": 3680,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 3680
          }
        ]
      },
      {
        "nom": "ÿƒ-00100546",
        "date": "29.10.2015",
        "documentamount": 2690,
        "coming": 2690,
        "consumption": 2690,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.10.2015",
            "coming": 2690,
            "consumption": 0
          },
          {
            "date": "06.11.2015",
            "coming": 0,
            "consumption": 2690
          }
        ]
      },
      {
        "nom": "ÿƒ-00100685",
        "date": "04.11.2015",
        "documentamount": 336,
        "coming": 336,
        "consumption": 336,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.11.2015",
            "coming": 336,
            "consumption": 0
          },
          {
            "date": "11.11.2015",
            "coming": 0,
            "consumption": 336
          }
        ]
      },
      {
        "nom": "ÿƒ-00100770",
        "date": "09.11.2015",
        "documentamount": 858,
        "coming": 858,
        "consumption": 858,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.11.2015",
            "coming": 858,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 858
          }
        ]
      },
      {
        "nom": "ÿƒ-00100794",
        "date": "09.11.2015",
        "documentamount": 110,
        "coming": 110,
        "consumption": 110,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.11.2015",
            "coming": 110,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 110
          }
        ]
      },
      {
        "nom": "ÿƒ-00100846",
        "date": "11.11.2015",
        "documentamount": 1875,
        "coming": 1875,
        "consumption": 1875,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.11.2015",
            "coming": 1875,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 1875
          }
        ]
      },
      {
        "nom": "ÿƒ-00100855",
        "date": "11.11.2015",
        "documentamount": 72,
        "coming": 72,
        "consumption": 72,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.11.2015",
            "coming": 72,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 72
          }
        ]
      },
      {
        "nom": "ÿƒ-00100971",
        "date": "13.11.2015",
        "documentamount": 4200,
        "coming": 4200,
        "consumption": 4200,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.11.2015",
            "coming": 4200,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 4200
          }
        ]
      },
      {
        "nom": "ÿƒ-00100930",
        "date": "13.11.2015",
        "documentamount": 128,
        "coming": 128,
        "consumption": 128,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.11.2015",
            "coming": 128,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 128
          }
        ]
      },
      {
        "nom": "ÿƒ-00101014",
        "date": "16.11.2015",
        "documentamount": 1782,
        "coming": 1782,
        "consumption": 1782,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.11.2015",
            "coming": 1782,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 1782
          }
        ]
      },
      {
        "nom": "ÿƒ-00101122",
        "date": "20.11.2015",
        "documentamount": 1100,
        "coming": 1100,
        "consumption": 1100,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.11.2015",
            "coming": 1100,
            "consumption": 0
          },
          {
            "date": "25.11.2015",
            "coming": 0,
            "consumption": 1100
          }
        ]
      },
      {
        "nom": "ÿƒ-00101146",
        "date": "23.11.2015",
        "documentamount": 1920,
        "coming": 1920,
        "consumption": 1920,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.11.2015",
            "coming": 1920,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 1920
          }
        ]
      },
      {
        "nom": "ÿƒ-00101163",
        "date": "23.11.2015",
        "documentamount": 65,
        "coming": 65,
        "consumption": 65,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.11.2015",
            "coming": 65,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 65
          }
        ]
      },
      {
        "nom": "ÿƒ-00101196",
        "date": "25.11.2015",
        "documentamount": 1960,
        "coming": 1960,
        "consumption": 1960,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.11.2015",
            "coming": 1960,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 1960
          }
        ]
      },
      {
        "nom": "ÿƒ-00101257",
        "date": "26.11.2015",
        "documentamount": 481,
        "coming": 481,
        "consumption": 481,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.11.2015",
            "coming": 481,
            "consumption": 0
          },
          {
            "date": "09.12.2015",
            "coming": 0,
            "consumption": 481
          }
        ]
      },
      {
        "nom": "ÿƒ-00101281",
        "date": "27.11.2015",
        "documentamount": 685,
        "coming": 685,
        "consumption": 685,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.11.2015",
            "coming": 685,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 685
          }
        ]
      },
      {
        "nom": "ÿƒ-00101285",
        "date": "27.11.2015",
        "documentamount": 2180,
        "coming": 2180,
        "consumption": 2180,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.11.2015",
            "coming": 2180,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 2180
          }
        ]
      },
      {
        "nom": "ÿƒ-00101294",
        "date": "27.11.2015",
        "documentamount": 190,
        "coming": 190,
        "consumption": 190,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.11.2015",
            "coming": 190,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 190
          }
        ]
      },
      {
        "nom": "ÿƒ-00101359",
        "date": "30.11.2015",
        "documentamount": 650,
        "coming": 650,
        "consumption": 650,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.11.2015",
            "coming": 650,
            "consumption": 0
          },
          {
            "date": "02.12.2015",
            "coming": 0,
            "consumption": 650
          }
        ]
      },
      {
        "nom": "ÿƒ-00101477",
        "date": "02.12.2015",
        "documentamount": 880,
        "coming": 880,
        "consumption": 880,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.12.2015",
            "coming": 880,
            "consumption": 0
          },
          {
            "date": "09.12.2015",
            "coming": 0,
            "consumption": 880
          }
        ]
      },
      {
        "nom": "ÿƒ-00101607",
        "date": "08.12.2015",
        "documentamount": 480,
        "coming": 480,
        "consumption": 480,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.12.2015",
            "coming": 480,
            "consumption": 0
          },
          {
            "date": "11.12.2015",
            "coming": 0,
            "consumption": 480
          }
        ]
      },
      {
        "nom": "ÿƒ-00101615",
        "date": "08.12.2015",
        "documentamount": 1090,
        "coming": 1090,
        "consumption": 1090,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.12.2015",
            "coming": 1090,
            "consumption": 0
          },
          {
            "date": "11.12.2015",
            "coming": 0,
            "consumption": 1090
          }
        ]
      },
      {
        "nom": "ÿƒ-00101643",
        "date": "09.12.2015",
        "documentamount": 300,
        "coming": 300,
        "consumption": 300,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.12.2015",
            "coming": 300,
            "consumption": 0
          },
          {
            "date": "11.12.2015",
            "coming": 0,
            "consumption": 300
          }
        ]
      },
      {
        "nom": "ÿƒ-00101694",
        "date": "10.12.2015",
        "documentamount": 250,
        "coming": 250,
        "consumption": 250,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.12.2015",
            "coming": 250,
            "consumption": 0
          },
          {
            "date": "30.12.2015",
            "coming": 0,
            "consumption": 250
          }
        ]
      },
      {
        "nom": "ÿƒ-00101702",
        "date": "10.12.2015",
        "documentamount": 4680,
        "coming": 4680,
        "consumption": 4680,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.12.2015",
            "coming": 4680,
            "consumption": 0
          },
          {
            "date": "30.12.2015",
            "coming": 0,
            "consumption": 4680
          }
        ]
      },
      {
        "nom": "ÿƒ-00101706",
        "date": "10.12.2015",
        "documentamount": 250,
        "coming": 250,
        "consumption": 250,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.12.2015",
            "coming": 250,
            "consumption": 0
          },
          {
            "date": "30.12.2015",
            "coming": 0,
            "consumption": 250
          }
        ]
      },
      {
        "nom": "ÿƒ-00101880",
        "date": "18.12.2015",
        "documentamount": 265,
        "coming": 265,
        "consumption": 265,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.12.2015",
            "coming": 265,
            "consumption": 0
          },
          {
            "date": "30.12.2015",
            "coming": 0,
            "consumption": 265
          }
        ]
      },
      {
        "nom": "ÿƒ-00101956",
        "date": "21.12.2015",
        "documentamount": 880,
        "coming": 880,
        "consumption": 880,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.12.2015",
            "coming": 880,
            "consumption": 0
          },
          {
            "date": "30.12.2015",
            "coming": 0,
            "consumption": 880
          }
        ]
      },
      {
        "nom": "ÿƒ-00102182",
        "date": "30.12.2015",
        "documentamount": 68,
        "coming": 68,
        "consumption": 68,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.01.2016",
            "coming": 68,
            "consumption": 0
          },
          {
            "date": "25.01.2016",
            "coming": 0,
            "consumption": 68
          }
        ]
      },
      {
        "nom": "ÿƒ-16000141",
        "date": "12.01.2016",
        "documentamount": 385,
        "coming": 385,
        "consumption": 385,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.01.2016",
            "coming": 385,
            "consumption": 0
          },
          {
            "date": "25.01.2016",
            "coming": 0,
            "consumption": 385
          }
        ]
      },
      {
        "nom": "ÿƒ-16000184",
        "date": "13.01.2016",
        "documentamount": 180,
        "coming": 180,
        "consumption": 180,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.01.2016",
            "coming": 180,
            "consumption": 0
          },
          {
            "date": "02.03.2016",
            "coming": 0,
            "consumption": 180
          }
        ]
      },
      {
        "nom": "ÿƒ-16000572",
        "date": "17.01.2016",
        "documentamount": 1130,
        "coming": 1130,
        "consumption": 1130,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.01.2016",
            "coming": 1130,
            "consumption": 0
          },
          {
            "date": "19.02.2016",
            "coming": 0,
            "consumption": 1130
          }
        ]
      },
      {
        "nom": "ÿƒ-16000328",
        "date": "19.01.2016",
        "documentamount": 144,
        "coming": 144,
        "consumption": 144,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2016",
            "coming": 144,
            "consumption": 0
          },
          {
            "date": "25.01.2016",
            "coming": 0,
            "consumption": 144
          }
        ]
      },
      {
        "nom": "ÿƒ-16000391",
        "date": "21.01.2016",
        "documentamount": 240,
        "coming": 240,
        "consumption": 240,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.01.2016",
            "coming": 240,
            "consumption": 0
          },
          {
            "date": "25.01.2016",
            "coming": 0,
            "consumption": 240
          }
        ]
      },
      {
        "nom": "ÿƒ-16000465",
        "date": "25.01.2016",
        "documentamount": 2270,
        "coming": 2270,
        "consumption": 2270,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.01.2016",
            "coming": 2270,
            "consumption": 0
          },
          {
            "date": "08.02.2016",
            "coming": 0,
            "consumption": 2270
          }
        ]
      },
      {
        "nom": "ÿƒ-16000444",
        "date": "25.01.2016",
        "documentamount": 330,
        "coming": 330,
        "consumption": 330,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.01.2016",
            "coming": 330,
            "consumption": 0
          },
          {
            "date": "08.02.2016",
            "coming": 0,
            "consumption": 330
          }
        ]
      },
      {
        "nom": "ÿƒ-16000530",
        "date": "26.01.2016",
        "documentamount": 2323,
        "coming": 2323,
        "consumption": 2323,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.01.2016",
            "coming": 2323,
            "consumption": 0
          },
          {
            "date": "08.02.2016",
            "coming": 0,
            "consumption": 2323
          }
        ]
      },
      {
        "nom": "ÿƒ-16000546",
        "date": "26.01.2016",
        "documentamount": 1050,
        "coming": 1050,
        "consumption": 1050,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.01.2016",
            "coming": 1050,
            "consumption": 0
          },
          {
            "date": "19.02.2016",
            "coming": 0,
            "consumption": 1050
          }
        ]
      },
      {
        "nom": "ÿƒ-16000713",
        "date": "01.02.2016",
        "documentamount": 1135,
        "coming": 1135,
        "consumption": 1135,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.02.2016",
            "coming": 1135,
            "consumption": 0
          },
          {
            "date": "19.02.2016",
            "coming": 0,
            "consumption": 1135
          }
        ]
      },
      {
        "nom": "ÿƒ-16000719",
        "date": "01.02.2016",
        "documentamount": 1136,
        "coming": 1136,
        "consumption": 1136,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.02.2016",
            "coming": 1136,
            "consumption": 0
          },
          {
            "date": "19.02.2016",
            "coming": 0,
            "consumption": 1136
          }
        ]
      },
      {
        "nom": "ÿƒ-16000791",
        "date": "03.02.2016",
        "documentamount": 470,
        "coming": 470,
        "consumption": 470,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.02.2016",
            "coming": 470,
            "consumption": 0
          },
          {
            "date": "19.02.2016",
            "coming": 0,
            "consumption": 470
          }
        ]
      },
      {
        "nom": "ÿƒ-16001090",
        "date": "11.02.2016",
        "documentamount": 4100,
        "coming": 4100,
        "consumption": 4100,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.02.2016",
            "coming": 4100,
            "consumption": 0
          },
          {
            "date": "13.04.2016",
            "coming": 0,
            "consumption": 4100
          }
        ]
      },
      {
        "nom": "ÿƒ-16001111",
        "date": "12.02.2016",
        "documentamount": 630,
        "coming": 630,
        "consumption": 630,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.02.2016",
            "coming": 630,
            "consumption": 0
          },
          {
            "date": "19.02.2016",
            "coming": 0,
            "consumption": 630
          }
        ]
      },
      {
        "nom": "ÿƒ-16001232",
        "date": "17.02.2016",
        "documentamount": 75,
        "coming": 75,
        "consumption": 75,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.02.2016",
            "coming": 75,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 75
          }
        ]
      },
      {
        "nom": "ÿƒ-16001260",
        "date": "17.02.2016",
        "documentamount": 840,
        "coming": 840,
        "consumption": 840,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.02.2016",
            "coming": 840,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 840
          }
        ]
      },
      {
        "nom": "ÿƒ-16001568",
        "date": "26.02.2016",
        "documentamount": 765,
        "coming": 765,
        "consumption": 765,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.02.2016",
            "coming": 765,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 765
          }
        ]
      },
      {
        "nom": "ÿƒ-16001612",
        "date": "26.02.2016",
        "documentamount": 500,
        "coming": 500,
        "consumption": 500,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.03.2016",
            "coming": 500,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 500
          }
        ]
      },
      {
        "nom": "ÿƒ-16001669",
        "date": "29.02.2016",
        "documentamount": 1080,
        "coming": 1080,
        "consumption": 1080,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.03.2016",
            "coming": 1080,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 1080
          }
        ]
      },
      {
        "nom": "ÿƒ-16001754",
        "date": "02.03.2016",
        "documentamount": 600,
        "coming": 600,
        "consumption": 600,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.03.2016",
            "coming": 600,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 600
          }
        ]
      },
      {
        "nom": "ÿƒ-16001541",
        "date": "02.03.2016",
        "documentamount": 171,
        "coming": 171,
        "consumption": 171,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.03.2016",
            "coming": 171,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 171
          }
        ]
      },
      {
        "nom": "ÿƒ-16001776",
        "date": "03.03.2016",
        "documentamount": 150,
        "coming": 150,
        "consumption": 150,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.03.2016",
            "coming": 150,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 150
          }
        ]
      },
      {
        "nom": "ÿƒ-16001782",
        "date": "03.03.2016",
        "documentamount": 110,
        "coming": 110,
        "consumption": 110,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.03.2016",
            "coming": 110,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 110
          }
        ]
      },
      {
        "nom": "ÿƒ-16001990",
        "date": "14.03.2016",
        "documentamount": 325,
        "coming": 325,
        "consumption": 325,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.03.2016",
            "coming": 325,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 325
          }
        ]
      },
      {
        "nom": "ÿƒ-16001994",
        "date": "14.03.2016",
        "documentamount": 285,
        "coming": 285,
        "consumption": 285,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.03.2016",
            "coming": 285,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 285
          }
        ]
      },
      {
        "nom": "ÿƒ-16002127",
        "date": "17.03.2016",
        "documentamount": 180,
        "coming": 180,
        "consumption": 180,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.03.2016",
            "coming": 180,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 180
          }
        ]
      },
      {
        "nom": "ÿƒ-16002129",
        "date": "17.03.2016",
        "documentamount": 1230,
        "coming": 1230,
        "consumption": 1230,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.03.2016",
            "coming": 1230,
            "consumption": 0
          },
          {
            "date": "11.04.2016",
            "coming": 0,
            "consumption": 1230
          }
        ]
      },
      {
        "nom": "ÿƒ-16002130",
        "date": "17.03.2016",
        "documentamount": 350,
        "coming": 350,
        "consumption": 350,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.03.2016",
            "coming": 350,
            "consumption": 0
          },
          {
            "date": "13.04.2016",
            "coming": 0,
            "consumption": 350
          }
        ]
      },
      {
        "nom": "ÿƒ-16002166",
        "date": "18.03.2016",
        "documentamount": 1100,
        "coming": 1100,
        "consumption": 1100,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.03.2016",
            "coming": 1100,
            "consumption": 0
          },
          {
            "date": "13.04.2016",
            "coming": 0,
            "consumption": 1100
          }
        ]
      },
      {
        "nom": "ÿƒ-16002170",
        "date": "18.03.2016",
        "documentamount": 1100,
        "coming": 1100,
        "consumption": 1100,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.03.2016",
            "coming": 1100,
            "consumption": 0
          },
          {
            "date": "13.04.2016",
            "coming": 0,
            "consumption": 1100
          }
        ]
      },
      {
        "nom": "ÿƒ-16002222",
        "date": "21.03.2016",
        "documentamount": 3170,
        "coming": 3170,
        "consumption": 3170,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.03.2016",
            "coming": 3170,
            "consumption": 0
          },
          {
            "date": "13.04.2016",
            "coming": 0,
            "consumption": 3170
          }
        ]
      },
      {
        "nom": "ÿƒ-16002257",
        "date": "22.03.2016",
        "documentamount": 415,
        "coming": 415,
        "consumption": 415,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.03.2016",
            "coming": 415,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 415
          }
        ]
      },
      {
        "nom": "ÿƒ-16002273",
        "date": "22.03.2016",
        "documentamount": 545,
        "coming": 545,
        "consumption": 545,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.03.2016",
            "coming": 545,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 545
          }
        ]
      },
      {
        "nom": "ÿƒ-16002276",
        "date": "22.03.2016",
        "documentamount": 1150,
        "coming": 1150,
        "consumption": 1150,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.03.2016",
            "coming": 1150,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 1150
          }
        ]
      },
      {
        "nom": "ÿƒ-16002318",
        "date": "23.03.2016",
        "documentamount": 225,
        "coming": 225,
        "consumption": 225,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.03.2016",
            "coming": 225,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 225
          }
        ]
      },
      {
        "nom": "ÿƒ-16002347",
        "date": "24.03.2016",
        "documentamount": 145,
        "coming": 145,
        "consumption": 145,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.03.2016",
            "coming": 145,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 145
          }
        ]
      },
      {
        "nom": "ÿƒ-16002309",
        "date": "24.03.2016",
        "documentamount": 840,
        "coming": 840,
        "consumption": 840,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.03.2016",
            "coming": 840,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 840
          }
        ]
      },
      {
        "nom": "ÿƒ-16002462",
        "date": "28.03.2016",
        "documentamount": 3138,
        "coming": 3138,
        "consumption": 3138,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.03.2016",
            "coming": 3138,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 3138
          }
        ]
      },
      {
        "nom": "ÿƒ-16002683",
        "date": "04.04.2016",
        "documentamount": 9350,
        "coming": 9350,
        "consumption": 9350,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.04.2016",
            "coming": 9350,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 9350
          }
        ]
      },
      {
        "nom": "ÿƒ-16002722",
        "date": "05.04.2016",
        "documentamount": 626,
        "coming": 626,
        "consumption": 626,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.04.2016",
            "coming": 626,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 626
          }
        ]
      },
      {
        "nom": "ÿƒ-16002801",
        "date": "08.04.2016",
        "documentamount": 250,
        "coming": 250,
        "consumption": 250,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.04.2016",
            "coming": 250,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 250
          }
        ]
      },
      {
        "nom": "ÿƒ-16002868",
        "date": "11.04.2016",
        "documentamount": 3500,
        "coming": 3500,
        "consumption": 3500,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.04.2016",
            "coming": 3500,
            "consumption": 0
          },
          {
            "date": "27.04.2016",
            "coming": 0,
            "consumption": 3500
          }
        ]
      },
      {
        "nom": "ÿƒ-16002898",
        "date": "12.04.2016",
        "documentamount": 1450,
        "coming": 1450,
        "consumption": 1450,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.04.2016",
            "coming": 1450,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 1450
          }
        ]
      },
      {
        "nom": "ÿƒ-16002924",
        "date": "12.04.2016",
        "documentamount": 1090,
        "coming": 1090,
        "consumption": 1090,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.04.2016",
            "coming": 1090,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 1090
          }
        ]
      },
      {
        "nom": "ÿƒ-16002939",
        "date": "13.04.2016",
        "documentamount": 510,
        "coming": 510,
        "consumption": 510,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.04.2016",
            "coming": 510,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 510
          }
        ]
      },
      {
        "nom": "ÿƒ-16002995",
        "date": "14.04.2016",
        "documentamount": 980,
        "coming": 980,
        "consumption": 980,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.04.2016",
            "coming": 980,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 980
          }
        ]
      },
      {
        "nom": "ÿƒ-16003048",
        "date": "15.04.2016",
        "documentamount": 1198,
        "coming": 1198,
        "consumption": 1198,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.04.2016",
            "coming": 1198,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 1198
          }
        ]
      },
      {
        "nom": "ÿƒ-16003058",
        "date": "16.04.2016",
        "documentamount": 575,
        "coming": 575,
        "consumption": 575,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.04.2016",
            "coming": 450,
            "consumption": 0
          },
          {
            "date": "26.04.2016",
            "coming": 125,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 575
          }
        ]
      },
      {
        "nom": "ÿƒ-16003129",
        "date": "19.04.2016",
        "documentamount": 788,
        "coming": 788,
        "consumption": 788,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.04.2016",
            "coming": 100,
            "consumption": 0
          },
          {
            "date": "12.05.2016",
            "coming": 688,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 788
          }
        ]
      },
      {
        "nom": "ÿƒ-16003152",
        "date": "20.04.2016",
        "documentamount": 3460,
        "coming": 3460,
        "consumption": 3460,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.04.2016",
            "coming": 2120,
            "consumption": 0
          },
          {
            "date": "25.04.2016",
            "coming": 1340,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 3460
          }
        ]
      },
      {
        "nom": "ÿƒ-16003166",
        "date": "20.04.2016",
        "documentamount": 596,
        "coming": 596,
        "consumption": 596,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.04.2016",
            "coming": 596,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 596
          }
        ]
      },
      {
        "nom": "ÿƒ-16003183",
        "date": "21.04.2016",
        "documentamount": 1900,
        "coming": 1900,
        "consumption": 1900,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.04.2016",
            "coming": 1900,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 1900
          }
        ]
      },
      {
        "nom": "ÿƒ-16003192",
        "date": "21.04.2016",
        "documentamount": 3500,
        "coming": 3500,
        "consumption": 3500,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.04.2016",
            "coming": 3500,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 3500
          }
        ]
      },
      {
        "nom": "ÿƒ-16003193",
        "date": "21.04.2016",
        "documentamount": 2600,
        "coming": 2600,
        "consumption": 2600,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.04.2016",
            "coming": 2600,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 2600
          }
        ]
      },
      {
        "nom": "ÿƒ-16003285",
        "date": "25.04.2016",
        "documentamount": 1690,
        "coming": 1690,
        "consumption": 1690,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.04.2016",
            "coming": 1690,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 1690
          }
        ]
      },
      {
        "nom": "ÿƒ-16003313",
        "date": "26.04.2016",
        "documentamount": 125,
        "coming": 125,
        "consumption": 125,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.04.2016",
            "coming": 125,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 125
          }
        ]
      },
      {
        "nom": "ÿƒ-16003373",
        "date": "28.04.2016",
        "documentamount": 500,
        "coming": 500,
        "consumption": 500,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.04.2016",
            "coming": 500,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 500
          }
        ]
      },
      {
        "nom": "ÿƒ-16003389",
        "date": "28.04.2016",
        "documentamount": 560,
        "coming": 560,
        "consumption": 560,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.04.2016",
            "coming": 560,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 560
          }
        ]
      },
      {
        "nom": "ÿƒ-16003452",
        "date": "04.05.2016",
        "documentamount": 100,
        "coming": 100,
        "consumption": 100,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.05.2016",
            "coming": 100,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 100
          }
        ]
      },
      {
        "nom": "ÿƒ-16003460",
        "date": "04.05.2016",
        "documentamount": 280,
        "coming": 280,
        "consumption": 280,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.05.2016",
            "coming": 280,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 280
          }
        ]
      },
      {
        "nom": "ÿƒ-16003642",
        "date": "13.05.2016",
        "documentamount": 3460,
        "coming": 3460,
        "consumption": 3460,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.05.2016",
            "coming": 3460,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 3460
          }
        ]
      },
      {
        "nom": "ÿƒ-16003646",
        "date": "13.05.2016",
        "documentamount": 680,
        "coming": 680,
        "consumption": 680,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.05.2016",
            "coming": 680,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 680
          }
        ]
      },
      {
        "nom": "ÿƒ-16003707",
        "date": "17.05.2016",
        "documentamount": 1515,
        "coming": 1515,
        "consumption": 1515,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.05.2016",
            "coming": 1515,
            "consumption": 0
          },
          {
            "date": "20.05.2016",
            "coming": 0,
            "consumption": 452
          },
          {
            "date": "23.05.2016",
            "coming": 0,
            "consumption": 1063
          }
        ]
      },
      {
        "nom": "ÿƒ-16003783",
        "date": "21.05.2016",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.05.2016",
            "coming": 0,
            "consumption": 1132
          },
          {
            "date": "23.05.2016",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "03.06.2016",
            "coming": 0,
            "consumption": 118
          }
        ]
      },
      {
        "nom": "ÿƒ-16003848",
        "date": "25.05.2016",
        "documentamount": 385,
        "coming": 385,
        "consumption": 385,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.05.2016",
            "coming": 385,
            "consumption": 0
          },
          {
            "date": "03.06.2016",
            "coming": 0,
            "consumption": 385
          }
        ]
      },
      {
        "nom": "ÿƒ-16003847",
        "date": "25.05.2016",
        "documentamount": 1660,
        "coming": 1660,
        "consumption": 1660,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.05.2016",
            "coming": 1660,
            "consumption": 0
          },
          {
            "date": "03.06.2016",
            "coming": 0,
            "consumption": 1660
          }
        ]
      },
      {
        "nom": "ÿƒ-16003932",
        "date": "28.05.2016",
        "documentamount": 790,
        "coming": 790,
        "consumption": 790,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.05.2016",
            "coming": 790,
            "consumption": 0
          },
          {
            "date": "03.06.2016",
            "coming": 0,
            "consumption": 790
          }
        ]
      },
      {
        "nom": "ÿƒ-16003968",
        "date": "30.05.2016",
        "documentamount": 105,
        "coming": 105,
        "consumption": 105,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.05.2016",
            "coming": 105,
            "consumption": 0
          },
          {
            "date": "03.06.2016",
            "coming": 0,
            "consumption": 105
          }
        ]
      },
      {
        "nom": "ÿƒ-16004111",
        "date": "03.06.2016",
        "documentamount": 465,
        "coming": 465,
        "consumption": 465,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.06.2016",
            "coming": 465,
            "consumption": 0
          },
          {
            "date": "08.06.2016",
            "coming": 0,
            "consumption": 465
          }
        ]
      },
      {
        "nom": "ÿƒ-16004129",
        "date": "04.06.2016",
        "documentamount": 3550,
        "coming": 3550,
        "consumption": 3550,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.06.2016",
            "coming": 3550,
            "consumption": 0
          },
          {
            "date": "08.06.2016",
            "coming": 0,
            "consumption": 3550
          }
        ]
      },
      {
        "nom": "ÿƒ-16004167",
        "date": "07.06.2016",
        "documentamount": 570,
        "coming": 570,
        "consumption": 570,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.06.2016",
            "coming": 570,
            "consumption": 0
          },
          {
            "date": "08.06.2016",
            "coming": 0,
            "consumption": 570
          }
        ]
      },
      {
        "nom": "ÿƒ-16004280",
        "date": "10.06.2016",
        "documentamount": 1781,
        "coming": 1781,
        "consumption": 1781,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.06.2016",
            "coming": 1781,
            "consumption": 0
          },
          {
            "date": "15.06.2016",
            "coming": 0,
            "consumption": 1781
          }
        ]
      },
      {
        "nom": "ÿƒ-16004310",
        "date": "13.06.2016",
        "documentamount": 1600,
        "coming": 1600,
        "consumption": 1600,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.06.2016",
            "coming": 1600,
            "consumption": 0
          },
          {
            "date": "15.06.2016",
            "coming": 0,
            "consumption": 1600
          }
        ]
      },
      {
        "nom": "ÿƒ-16004312",
        "date": "13.06.2016",
        "documentamount": 1130,
        "coming": 1130,
        "consumption": 1130,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2016",
            "coming": 1130,
            "consumption": 0
          },
          {
            "date": "15.06.2016",
            "coming": 0,
            "consumption": 1130
          }
        ]
      },
      {
        "nom": "ÿƒ-16004355",
        "date": "14.06.2016",
        "documentamount": 2590,
        "coming": 2590,
        "consumption": 2590,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2016",
            "coming": 2590,
            "consumption": 0
          },
          {
            "date": "15.06.2016",
            "coming": 0,
            "consumption": 2590
          }
        ]
      },
      {
        "nom": "ÿƒ-16004368",
        "date": "15.06.2016",
        "documentamount": 105,
        "coming": 105,
        "consumption": 105,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.06.2016",
            "coming": 105,
            "consumption": 0
          },
          {
            "date": "22.06.2016",
            "coming": 0,
            "consumption": 105
          }
        ]
      },
      {
        "nom": "ÿƒ-16004407",
        "date": "16.06.2016",
        "documentamount": 2110,
        "coming": 2110,
        "consumption": 2110,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.06.2016",
            "coming": 2110,
            "consumption": 0
          },
          {
            "date": "22.06.2016",
            "coming": 0,
            "consumption": 2110
          }
        ]
      },
      {
        "nom": "ÿƒ-16004471",
        "date": "21.06.2016",
        "documentamount": 1700,
        "coming": 1700,
        "consumption": 1700,
        "remainder": 0,
        "indetail": [
          {
            "date": "21.06.2016",
            "coming": 1700,
            "consumption": 0
          },
          {
            "date": "24.06.2016",
            "coming": 0,
            "consumption": 1700
          }
        ]
      },
      {
        "nom": "ÿƒ-16004495",
        "date": "22.06.2016",
        "documentamount": 320,
        "coming": 320,
        "consumption": 320,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.06.2016",
            "coming": 320,
            "consumption": 0
          },
          {
            "date": "01.07.2016",
            "coming": 0,
            "consumption": 320
          }
        ]
      },
      {
        "nom": "ÿƒ-16004532",
        "date": "24.06.2016",
        "documentamount": 245,
        "coming": 245,
        "consumption": 245,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.06.2016",
            "coming": 245,
            "consumption": 0
          },
          {
            "date": "01.07.2016",
            "coming": 0,
            "consumption": 245
          }
        ]
      },
      {
        "nom": "ÿƒ-16004586",
        "date": "30.06.2016",
        "documentamount": 590,
        "coming": 590,
        "consumption": 590,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.07.2016",
            "coming": 590,
            "consumption": 0
          },
          {
            "date": "11.07.2016",
            "coming": 0,
            "consumption": 590
          }
        ]
      },
      {
        "nom": "ÿƒ-16004616",
        "date": "01.07.2016",
        "documentamount": 495,
        "coming": 495,
        "consumption": 495,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.07.2016",
            "coming": 495,
            "consumption": 0
          },
          {
            "date": "11.07.2016",
            "coming": 0,
            "consumption": 495
          }
        ]
      },
      {
        "nom": "ÿƒ-16004644",
        "date": "02.07.2016",
        "documentamount": 1600,
        "coming": 1600,
        "consumption": 1600,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.07.2016",
            "coming": 1600,
            "consumption": 0
          },
          {
            "date": "11.07.2016",
            "coming": 0,
            "consumption": 1600
          }
        ]
      },
      {
        "nom": "ÿƒ-16004648",
        "date": "02.07.2016",
        "documentamount": 4220,
        "coming": 4220,
        "consumption": 4220,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.07.2016",
            "coming": 4220,
            "consumption": 0
          },
          {
            "date": "11.07.2016",
            "coming": 0,
            "consumption": 4220
          }
        ]
      },
      {
        "nom": "ÿƒ-16004692",
        "date": "05.07.2016",
        "documentamount": 420,
        "coming": 420,
        "consumption": 420,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.07.2016",
            "coming": 420,
            "consumption": 0
          },
          {
            "date": "11.07.2016",
            "coming": 0,
            "consumption": 420
          }
        ]
      },
      {
        "nom": "ÿƒ-16004746",
        "date": "06.07.2016",
        "documentamount": 420,
        "coming": 420,
        "consumption": 420,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.07.2016",
            "coming": 420,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 420
          }
        ]
      },
      {
        "nom": "ÿƒ-16004747",
        "date": "06.07.2016",
        "documentamount": 480,
        "coming": 480,
        "consumption": 480,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.07.2016",
            "coming": 480,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 480
          }
        ]
      },
      {
        "nom": "ÿƒ-16004775",
        "date": "07.07.2016",
        "documentamount": 7775,
        "coming": 7775,
        "consumption": 7775,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.07.2016",
            "coming": 7775,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 7775
          }
        ]
      },
      {
        "nom": "ÿƒ-16004803",
        "date": "08.07.2016",
        "documentamount": 1100,
        "coming": 1100,
        "consumption": 1100,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.07.2016",
            "coming": 1100,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 1100
          }
        ]
      },
      {
        "nom": "ÿƒ-16004818",
        "date": "09.07.2016",
        "documentamount": 460,
        "coming": 460,
        "consumption": 460,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.07.2016",
            "coming": 460,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 460
          }
        ]
      },
      {
        "nom": "ÿƒ-16004830",
        "date": "11.07.2016",
        "documentamount": 1714,
        "coming": 1714,
        "consumption": 1714,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.07.2016",
            "coming": 1714,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 1714
          }
        ]
      },
      {
        "nom": "ÿƒ-16004823",
        "date": "11.07.2016",
        "documentamount": 1043,
        "coming": 1043,
        "consumption": 1043,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.07.2016",
            "coming": 1043,
            "consumption": 0
          },
          {
            "date": "18.07.2016",
            "coming": 0,
            "consumption": 1043
          }
        ]
      },
      {
        "nom": "ÿƒ-16004969",
        "date": "18.07.2016",
        "documentamount": 100,
        "coming": 100,
        "consumption": 100,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.07.2016",
            "coming": 100,
            "consumption": 0
          },
          {
            "date": "22.07.2016",
            "coming": 0,
            "consumption": 100
          }
        ]
      },
      {
        "nom": "ÿƒ-16005039",
        "date": "21.07.2016",
        "documentamount": 330,
        "coming": 330,
        "consumption": 330,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.07.2016",
            "coming": 330,
            "consumption": 0
          },
          {
            "date": "27.07.2016",
            "coming": 0,
            "consumption": 330
          }
        ]
      },
      {
        "nom": "ÿƒ-16005071",
        "date": "25.07.2016",
        "documentamount": 480,
        "coming": 480,
        "consumption": 480,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.07.2016",
            "coming": 480,
            "consumption": 0
          },
          {
            "date": "29.07.2016",
            "coming": 0,
            "consumption": 480
          }
        ]
      },
      {
        "nom": "ÿƒ-16005085",
        "date": "25.07.2016",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.07.2016",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "29.07.2016",
            "coming": 0,
            "consumption": 1250
          }
        ]
      },
      {
        "nom": "ÿƒ-16005086",
        "date": "25.07.2016",
        "documentamount": 1890,
        "coming": 1890,
        "consumption": 1890,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.07.2016",
            "coming": 1890,
            "consumption": 0
          },
          {
            "date": "29.07.2016",
            "coming": 0,
            "consumption": 1890
          }
        ]
      },
      {
        "nom": "ÿƒ-16005113",
        "date": "26.07.2016",
        "documentamount": 2440,
        "coming": 2440,
        "consumption": 2440,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.07.2016",
            "coming": 2440,
            "consumption": 0
          },
          {
            "date": "29.07.2016",
            "coming": 0,
            "consumption": 2440
          }
        ]
      },
      {
        "nom": "ÿƒ-16005152",
        "date": "28.07.2016",
        "documentamount": 985,
        "coming": 985,
        "consumption": 985,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.07.2016",
            "coming": 985,
            "consumption": 0
          },
          {
            "date": "01.08.2016",
            "coming": 0,
            "consumption": 985
          }
        ]
      },
      {
        "nom": "ÿƒ-16005153",
        "date": "28.07.2016",
        "documentamount": 985,
        "coming": 985,
        "consumption": 985,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.07.2016",
            "coming": 985,
            "consumption": 0
          },
          {
            "date": "01.08.2016",
            "coming": 0,
            "consumption": 985
          }
        ]
      },
      {
        "nom": "ÿƒ-16005154",
        "date": "28.07.2016",
        "documentamount": 48,
        "coming": 48,
        "consumption": 48,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.07.2016",
            "coming": 48,
            "consumption": 0
          },
          {
            "date": "01.08.2016",
            "coming": 0,
            "consumption": 48
          }
        ]
      },
      {
        "nom": "ÿƒ-16005212",
        "date": "29.07.2016",
        "documentamount": 710,
        "coming": 710,
        "consumption": 710,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.07.2016",
            "coming": 710,
            "consumption": 0
          },
          {
            "date": "05.08.2016",
            "coming": 0,
            "consumption": 710
          }
        ]
      },
      {
        "nom": "ÿƒ-16005190",
        "date": "30.07.2016",
        "documentamount": 950,
        "coming": 950,
        "consumption": 950,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.07.2016",
            "coming": 950,
            "consumption": 0
          },
          {
            "date": "05.08.2016",
            "coming": 0,
            "consumption": 950
          }
        ]
      },
      {
        "nom": "ÿƒ-16005301",
        "date": "05.08.2016",
        "documentamount": 6000,
        "coming": 6000,
        "consumption": 6000,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.08.2016",
            "coming": 6000,
            "consumption": 0
          },
          {
            "date": "19.08.2016",
            "coming": 0,
            "consumption": 6000
          }
        ]
      },
      {
        "nom": "ÿƒ-16005295",
        "date": "08.08.2016",
        "documentamount": 455,
        "coming": 455,
        "consumption": 455,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.08.2016",
            "coming": 455,
            "consumption": 0
          },
          {
            "date": "19.08.2016",
            "coming": 0,
            "consumption": 455
          }
        ]
      },
      {
        "nom": "ÿƒ-16005361",
        "date": "10.08.2016",
        "documentamount": 250,
        "coming": 250,
        "consumption": 250,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.08.2016",
            "coming": 250,
            "consumption": 0
          },
          {
            "date": "22.08.2016",
            "coming": 0,
            "consumption": 250
          }
        ]
      },
      {
        "nom": "ÿƒ-16005507",
        "date": "22.08.2016",
        "documentamount": 900,
        "coming": 900,
        "consumption": 900,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.08.2016",
            "coming": 900,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 900
          }
        ]
      },
      {
        "nom": "ÿƒ-16005614",
        "date": "30.08.2016",
        "documentamount": 3590,
        "coming": 3590,
        "consumption": 3590,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.08.2016",
            "coming": 3590,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 3590
          }
        ]
      },
      {
        "nom": "ÿƒ-16005617",
        "date": "30.08.2016",
        "documentamount": 725,
        "coming": 725,
        "consumption": 725,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.08.2016",
            "coming": 725,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 725
          }
        ]
      },
      {
        "nom": "ÿƒ-16005647",
        "date": "31.08.2016",
        "documentamount": 950,
        "coming": 950,
        "consumption": 950,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.09.2016",
            "coming": 950,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 950
          }
        ]
      },
      {
        "nom": "ÿƒ-16005679",
        "date": "01.09.2016",
        "documentamount": 1760,
        "coming": 1760,
        "consumption": 1760,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.09.2016",
            "coming": 1760,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 1760
          }
        ]
      },
      {
        "nom": "ÿƒ-16005680",
        "date": "01.09.2016",
        "documentamount": 280,
        "coming": 280,
        "consumption": 280,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.09.2016",
            "coming": 280,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 280
          }
        ]
      },
      {
        "nom": "ÿƒ-16005772",
        "date": "06.09.2016",
        "documentamount": 690,
        "coming": 690,
        "consumption": 690,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.09.2016",
            "coming": 690,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 690
          }
        ]
      },
      {
        "nom": "ÿƒ-16005817",
        "date": "08.09.2016",
        "documentamount": 3580,
        "coming": 3580,
        "consumption": 3580,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.09.2016",
            "coming": 3580,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 3580
          }
        ]
      },
      {
        "nom": "ÿƒ-16005889",
        "date": "12.09.2016",
        "documentamount": 3156,
        "coming": 3156,
        "consumption": 3156,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.09.2016",
            "coming": 3156,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 3156
          }
        ]
      },
      {
        "nom": "ÿƒ-16005939",
        "date": "14.09.2016",
        "documentamount": 35,
        "coming": 35,
        "consumption": 35,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.09.2016",
            "coming": 35,
            "consumption": 0
          },
          {
            "date": "19.09.2016",
            "coming": 0,
            "consumption": 35
          }
        ]
      },
      {
        "nom": "ÿƒ-16005948",
        "date": "14.09.2016",
        "documentamount": 810,
        "coming": 810,
        "consumption": 810,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.09.2016",
            "coming": 810,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 810
          }
        ]
      },
      {
        "nom": "ÿƒ-16005961",
        "date": "15.09.2016",
        "documentamount": 1280,
        "coming": 1280,
        "consumption": 1280,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.09.2016",
            "coming": 1280,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 1280
          }
        ]
      },
      {
        "nom": "ÿƒ-16005992",
        "date": "16.09.2016",
        "documentamount": 450,
        "coming": 450,
        "consumption": 450,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.09.2016",
            "coming": 450,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 450
          }
        ]
      },
      {
        "nom": "ÿƒ-16006012",
        "date": "19.09.2016",
        "documentamount": 1350,
        "coming": 1350,
        "consumption": 1350,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.09.2016",
            "coming": 1350,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 1350
          }
        ]
      },
      {
        "nom": "ÿƒ-16006036",
        "date": "20.09.2016",
        "documentamount": 1190,
        "coming": 1190,
        "consumption": 1190,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.09.2016",
            "coming": 1190,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 1190
          }
        ]
      },
      {
        "nom": "ÿƒ-16006049",
        "date": "20.09.2016",
        "documentamount": 2380,
        "coming": 2380,
        "consumption": 2380,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.09.2016",
            "coming": 2380,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 2380
          }
        ]
      },
      {
        "nom": "ÿƒ-16006105",
        "date": "22.09.2016",
        "documentamount": 870,
        "coming": 870,
        "consumption": 870,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.09.2016",
            "coming": 870,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 870
          }
        ]
      },
      {
        "nom": "ÿƒ-16006129",
        "date": "23.09.2016",
        "documentamount": 1365,
        "coming": 1365,
        "consumption": 1365,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.09.2016",
            "coming": 1365,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 1365
          }
        ]
      },
      {
        "nom": "ÿƒ-16006189",
        "date": "27.09.2016",
        "documentamount": 1885,
        "coming": 1885,
        "consumption": 1885,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.09.2016",
            "coming": 1885,
            "consumption": 0
          },
          {
            "date": "09.11.2016",
            "coming": 0,
            "consumption": 275
          },
          {
            "date": "11.11.2016",
            "coming": 0,
            "consumption": 1610
          }
        ]
      },
      {
        "nom": "ÿƒ-16006214",
        "date": "28.09.2016",
        "documentamount": 1615,
        "coming": 1615,
        "consumption": 1615,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.09.2016",
            "coming": 1615,
            "consumption": 0
          },
          {
            "date": "11.11.2016",
            "coming": 0,
            "consumption": 1615
          }
        ]
      },
      {
        "nom": "ÿƒ-16006227",
        "date": "28.09.2016",
        "documentamount": 600,
        "coming": 600,
        "consumption": 600,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.09.2016",
            "coming": 600,
            "consumption": 0
          },
          {
            "date": "11.11.2016",
            "coming": 0,
            "consumption": 600
          }
        ]
      },
      {
        "nom": "ÿƒ-16006000",
        "date": "28.09.2016",
        "documentamount": 1685,
        "coming": 1685,
        "consumption": 1685,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.09.2016",
            "coming": 1685,
            "consumption": 0
          },
          {
            "date": "11.11.2016",
            "coming": 0,
            "consumption": 1685
          }
        ]
      },
      {
        "nom": "ÿƒ-16006244",
        "date": "29.09.2016",
        "documentamount": 275,
        "coming": 275,
        "consumption": 275,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.09.2016",
            "coming": 275,
            "consumption": 0
          },
          {
            "date": "11.11.2016",
            "coming": 0,
            "consumption": 275
          }
        ]
      },
      {
        "nom": "ÿƒ-16006265",
        "date": "29.09.2016",
        "documentamount": 850,
        "coming": 850,
        "consumption": 850,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.09.2016",
            "coming": 850,
            "consumption": 0
          },
          {
            "date": "11.11.2016",
            "coming": 0,
            "consumption": 850
          }
        ]
      },
      {
        "nom": "ÿƒ-16006284",
        "date": "30.09.2016",
        "documentamount": 1360,
        "coming": 1360,
        "consumption": 1360,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2016",
            "coming": 1360,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 1360
          }
        ]
      },
      {
        "nom": "ÿƒ-16006302",
        "date": "30.09.2016",
        "documentamount": 700,
        "coming": 700,
        "consumption": 700,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.09.2016",
            "coming": 700,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 700
          }
        ]
      },
      {
        "nom": "ÿƒ-16006358",
        "date": "04.10.2016",
        "documentamount": 275,
        "coming": 275,
        "consumption": 275,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.10.2016",
            "coming": 275,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 275
          }
        ]
      },
      {
        "nom": "ÿƒ-16006463",
        "date": "10.10.2016",
        "documentamount": 1245,
        "coming": 1245,
        "consumption": 1245,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.10.2016",
            "coming": 1245,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 1245
          }
        ]
      },
      {
        "nom": "ÿƒ-16006478",
        "date": "10.10.2016",
        "documentamount": 600,
        "coming": 600,
        "consumption": 600,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.10.2016",
            "coming": 600,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 600
          }
        ]
      },
      {
        "nom": "ÿƒ-16006493",
        "date": "10.10.2016",
        "documentamount": 1075,
        "coming": 1075,
        "consumption": 1075,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.10.2016",
            "coming": 1075,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 1075
          }
        ]
      },
      {
        "nom": "ÿƒ-16006629",
        "date": "18.10.2016",
        "documentamount": 1860,
        "coming": 1860,
        "consumption": 1860,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.10.2016",
            "coming": 1860,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 1860
          }
        ]
      },
      {
        "nom": "ÿƒ-16006657",
        "date": "19.10.2016",
        "documentamount": 700,
        "coming": 700,
        "consumption": 700,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.10.2016",
            "coming": 700,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 700
          }
        ]
      },
      {
        "nom": "ÿƒ-16006689",
        "date": "20.10.2016",
        "documentamount": 600,
        "coming": 600,
        "consumption": 600,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.10.2016",
            "coming": 600,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 600
          }
        ]
      },
      {
        "nom": "ÿƒ-16006781",
        "date": "25.10.2016",
        "documentamount": 650,
        "coming": 650,
        "consumption": 650,
        "remainder": 0,
        "indetail": [
          {
            "date": "25.10.2016",
            "coming": 650,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 650
          }
        ]
      },
      {
        "nom": "ÿƒ-16007024",
        "date": "03.11.2016",
        "documentamount": 410,
        "coming": 410,
        "consumption": 410,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.11.2016",
            "coming": 410,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 410
          }
        ]
      },
      {
        "nom": "ÿƒ-16007048",
        "date": "03.11.2016",
        "documentamount": 1139,
        "coming": 1139,
        "consumption": 1139,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.11.2016",
            "coming": 1139,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 1139
          }
        ]
      },
      {
        "nom": "ÿƒ-16007158",
        "date": "08.11.2016",
        "documentamount": 290,
        "coming": 290,
        "consumption": 290,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.11.2016",
            "coming": 290,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 290
          }
        ]
      },
      {
        "nom": "ÿƒ-16007205",
        "date": "09.11.2016",
        "documentamount": 7200,
        "coming": 7200,
        "consumption": 7200,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.11.2016",
            "coming": 7200,
            "consumption": 0
          },
          {
            "date": "25.11.2016",
            "coming": 0,
            "consumption": 2695
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 4505
          }
        ]
      },
      {
        "nom": "ÿƒ-16007385",
        "date": "17.11.2016",
        "documentamount": 2345,
        "coming": 2345,
        "consumption": 2345,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.11.2016",
            "coming": 2345,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 2345
          }
        ]
      },
      {
        "nom": "ÿƒ-16007498",
        "date": "22.11.2016",
        "documentamount": 3440,
        "coming": 3440,
        "consumption": 3440,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.11.2016",
            "coming": 3440,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 3440
          }
        ]
      },
      {
        "nom": "ÿƒ-16007504",
        "date": "22.11.2016",
        "documentamount": 350,
        "coming": 350,
        "consumption": 350,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.11.2016",
            "coming": 350,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 350
          }
        ]
      },
      {
        "nom": "ÿƒ-16007601",
        "date": "24.11.2016",
        "documentamount": 255,
        "coming": 255,
        "consumption": 255,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.11.2016",
            "coming": 255,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 255
          }
        ]
      },
      {
        "nom": "ÿƒ-16007630",
        "date": "28.11.2016",
        "documentamount": 475,
        "coming": 475,
        "consumption": 475,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.11.2016",
            "coming": 475,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 475
          }
        ]
      },
      {
        "nom": "ÿƒ-16007742",
        "date": "01.12.2016",
        "documentamount": 760,
        "coming": 760,
        "consumption": 760,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.12.2016",
            "coming": 760,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 760
          }
        ]
      },
      {
        "nom": "ÿƒ-16007789",
        "date": "02.12.2016",
        "documentamount": 8900,
        "coming": 8900,
        "consumption": 8900,
        "remainder": 0,
        "indetail": [
          {
            "date": "02.12.2016",
            "coming": 8900,
            "consumption": 0
          },
          {
            "date": "16.12.2016",
            "coming": 0,
            "consumption": 620
          },
          {
            "date": "23.12.2016",
            "coming": 0,
            "consumption": 8280
          }
        ]
      },
      {
        "nom": "ÿƒ-16007851",
        "date": "06.12.2016",
        "documentamount": 1350,
        "coming": 1350,
        "consumption": 1350,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.12.2016",
            "coming": 1350,
            "consumption": 0
          },
          {
            "date": "23.12.2016",
            "coming": 0,
            "consumption": 1350
          }
        ]
      },
      {
        "nom": "ÿƒ-16007880",
        "date": "07.12.2016",
        "documentamount": 1864,
        "coming": 1864,
        "consumption": 1864,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.12.2016",
            "coming": 1864,
            "consumption": 0
          },
          {
            "date": "23.12.2016",
            "coming": 0,
            "consumption": 1864
          }
        ]
      },
      {
        "nom": "ÿƒ-16007908",
        "date": "08.12.2016",
        "documentamount": 2480,
        "coming": 2480,
        "consumption": 2480,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.12.2016",
            "coming": 2480,
            "consumption": 0
          },
          {
            "date": "23.12.2016",
            "coming": 0,
            "consumption": 2480
          }
        ]
      },
      {
        "nom": "ÿƒ-16007972",
        "date": "11.12.2016",
        "documentamount": 180,
        "coming": 180,
        "consumption": 180,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.12.2016",
            "coming": 180,
            "consumption": 0
          },
          {
            "date": "23.12.2016",
            "coming": 0,
            "consumption": 180
          }
        ]
      },
      {
        "nom": "ÿƒ-16008181",
        "date": "19.12.2016",
        "documentamount": 575,
        "coming": 575,
        "consumption": 575,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.12.2016",
            "coming": 575,
            "consumption": 0
          },
          {
            "date": "04.01.2017",
            "coming": 0,
            "consumption": 575
          }
        ]
      },
      {
        "nom": "ÿƒ-16008182",
        "date": "19.12.2016",
        "documentamount": 175,
        "coming": 175,
        "consumption": 175,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.12.2016",
            "coming": 175,
            "consumption": 0
          },
          {
            "date": "04.01.2017",
            "coming": 0,
            "consumption": 175
          }
        ]
      },
      {
        "nom": "ÿƒ-16008454",
        "date": "28.12.2016",
        "documentamount": 350,
        "coming": 350,
        "consumption": 350,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.12.2016",
            "coming": 350,
            "consumption": 0
          },
          {
            "date": "16.01.2017",
            "coming": 0,
            "consumption": 350
          }
        ]
      },
      {
        "nom": "ÿƒ-00000218",
        "date": "13.01.2017",
        "documentamount": 570,
        "coming": 570,
        "consumption": 570,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.01.2017",
            "coming": 570,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 570
          }
        ]
      },
      {
        "nom": "ÿƒ-00000335",
        "date": "19.01.2017",
        "documentamount": 1600,
        "coming": 1600,
        "consumption": 1600,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.01.2017",
            "coming": 1600,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 1600
          }
        ]
      },
      {
        "nom": "ÿƒ-00000443",
        "date": "23.01.2017",
        "documentamount": 820,
        "coming": 820,
        "consumption": 820,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.01.2017",
            "coming": 820,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 820
          }
        ]
      },
      {
        "nom": "ÿƒ-17000521",
        "date": "01.02.2017",
        "documentamount": 575,
        "coming": 575,
        "consumption": 575,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.02.2017",
            "coming": 575,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 575
          }
        ]
      },
      {
        "nom": "ÿƒ-17000587",
        "date": "03.02.2017",
        "documentamount": 260,
        "coming": 260,
        "consumption": 260,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.02.2017",
            "coming": 260,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 260
          }
        ]
      },
      {
        "nom": "ÿƒ-17000726",
        "date": "09.02.2017",
        "documentamount": 725,
        "coming": 725,
        "consumption": 725,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.02.2017",
            "coming": 725,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 725
          }
        ]
      },
      {
        "nom": "ÿƒ-17000836",
        "date": "14.02.2017",
        "documentamount": 935,
        "coming": 935,
        "consumption": 935,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.02.2017",
            "coming": 935,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 935
          }
        ]
      },
      {
        "nom": "ÿƒ-17000942",
        "date": "20.02.2017",
        "documentamount": 560,
        "coming": 560,
        "consumption": 560,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.02.2017",
            "coming": 560,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 560
          }
        ]
      },
      {
        "nom": "ÿƒ-17001082",
        "date": "27.02.2017",
        "documentamount": 265,
        "coming": 265,
        "consumption": 265,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.02.2017",
            "coming": 265,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 265
          }
        ]
      },
      {
        "nom": "ÿƒ-17001062",
        "date": "01.03.2017",
        "documentamount": 2820,
        "coming": 2820,
        "consumption": 2820,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.03.2017",
            "coming": 2820,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 2820
          }
        ]
      },
      {
        "nom": "ÿƒ-17001128",
        "date": "01.03.2017",
        "documentamount": 220,
        "coming": 220,
        "consumption": 220,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.03.2017",
            "coming": 220,
            "consumption": 0
          },
          {
            "date": "20.03.2017",
            "coming": 0,
            "consumption": 80
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 140
          }
        ]
      },
      {
        "nom": "ÿƒ-17001332",
        "date": "09.03.2017",
        "documentamount": 795,
        "coming": 795,
        "consumption": 795,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.03.2017",
            "coming": 795,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 795
          }
        ]
      },
      {
        "nom": "ÿƒ-17001382",
        "date": "10.03.2017",
        "documentamount": 110,
        "coming": 110,
        "consumption": 110,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.03.2017",
            "coming": 110,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 110
          }
        ]
      },
      {
        "nom": "ÿƒ-17001391",
        "date": "13.03.2017",
        "documentamount": 825,
        "coming": 825,
        "consumption": 825,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.03.2017",
            "coming": 825,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 825
          }
        ]
      },
      {
        "nom": "ÿƒ-17001436",
        "date": "14.03.2017",
        "documentamount": 1160,
        "coming": 1160,
        "consumption": 1160,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.03.2017",
            "coming": 1160,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 1160
          }
        ]
      },
      {
        "nom": "ÿƒ-17001437",
        "date": "14.03.2017",
        "documentamount": 150,
        "coming": 150,
        "consumption": 150,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.03.2017",
            "coming": 150,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 150
          }
        ]
      },
      {
        "nom": "ÿƒ-17001456",
        "date": "15.03.2017",
        "documentamount": 1470,
        "coming": 1470,
        "consumption": 1470,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.03.2017",
            "coming": 1470,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 1470
          }
        ]
      },
      {
        "nom": "ÿƒ-17001675",
        "date": "22.03.2017",
        "documentamount": 1365,
        "coming": 1365,
        "consumption": 1365,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.03.2017",
            "coming": 1365,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 1365
          }
        ]
      },
      {
        "nom": "ÿƒ-17001703",
        "date": "22.03.2017",
        "documentamount": 4735,
        "coming": 4735,
        "consumption": 4735,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.03.2017",
            "coming": 4735,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 4735
          }
        ]
      },
      {
        "nom": "ÿƒ-17001704",
        "date": "22.03.2017",
        "documentamount": 170,
        "coming": 170,
        "consumption": 170,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.03.2017",
            "coming": 170,
            "consumption": 0
          },
          {
            "date": "29.03.2017",
            "coming": 0,
            "consumption": 95
          },
          {
            "date": "10.04.2017",
            "coming": 0,
            "consumption": 75
          }
        ]
      },
      {
        "nom": "ÿƒ-17001784",
        "date": "27.03.2017",
        "documentamount": 250,
        "coming": 250,
        "consumption": 250,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.03.2017",
            "coming": 250,
            "consumption": 0
          },
          {
            "date": "10.04.2017",
            "coming": 0,
            "consumption": 250
          }
        ]
      },
      {
        "nom": "ÿƒ-17001854",
        "date": "28.03.2017",
        "documentamount": 440,
        "coming": 440,
        "consumption": 440,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.03.2017",
            "coming": 440,
            "consumption": 0
          },
          {
            "date": "10.04.2017",
            "coming": 0,
            "consumption": 440
          }
        ]
      },
      {
        "nom": "ÿƒ-17001873",
        "date": "29.03.2017",
        "documentamount": 610,
        "coming": 610,
        "consumption": 610,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.03.2017",
            "coming": 610,
            "consumption": 0
          },
          {
            "date": "10.04.2017",
            "coming": 0,
            "consumption": 170
          },
          {
            "date": "24.04.2017",
            "coming": 0,
            "consumption": 440
          }
        ]
      },
      {
        "nom": "ÿƒ-17001975",
        "date": "03.04.2017",
        "documentamount": 2210,
        "coming": 2210,
        "consumption": 2210,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.04.2017",
            "coming": 2210,
            "consumption": 0
          },
          {
            "date": "21.04.2017",
            "coming": 0,
            "consumption": 440
          },
          {
            "date": "24.04.2017",
            "coming": 0,
            "consumption": 1770
          }
        ]
      },
      {
        "nom": "ÿƒ-17001992",
        "date": "03.04.2017",
        "documentamount": 210,
        "coming": 210,
        "consumption": 210,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.04.2017",
            "coming": 210,
            "consumption": 0
          },
          {
            "date": "24.04.2017",
            "coming": 0,
            "consumption": 210
          }
        ]
      },
      {
        "nom": "ÿƒ-17002086",
        "date": "10.04.2017",
        "documentamount": 370.6,
        "coming": 370.6,
        "consumption": 370.6,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.04.2017",
            "coming": 370.6,
            "consumption": 0
          },
          {
            "date": "24.04.2017",
            "coming": 0,
            "consumption": 370.6
          }
        ]
      },
      {
        "nom": "ÿƒ-17002104",
        "date": "10.04.2017",
        "documentamount": 2235,
        "coming": 2235,
        "consumption": 2235,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.04.2017",
            "coming": 2235,
            "consumption": 0
          },
          {
            "date": "24.04.2017",
            "coming": 0,
            "consumption": 1514.41
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 720.59
          }
        ]
      },
      {
        "nom": "ÿƒ-17002330",
        "date": "20.04.2017",
        "documentamount": 350,
        "coming": 350,
        "consumption": 350,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.04.2017",
            "coming": 350,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 350
          }
        ]
      },
      {
        "nom": "ÿƒ-17002389",
        "date": "24.04.2017",
        "documentamount": 100,
        "coming": 100,
        "consumption": 100,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.04.2017",
            "coming": 100,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 100
          }
        ]
      },
      {
        "nom": "ÿƒ-17002388",
        "date": "24.04.2017",
        "documentamount": 185,
        "coming": 185,
        "consumption": 185,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.04.2017",
            "coming": 185,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 185
          }
        ]
      },
      {
        "nom": "ÿƒ-17002403",
        "date": "24.04.2017",
        "documentamount": 298.8,
        "coming": 298.8,
        "consumption": 298.8,
        "remainder": 0,
        "indetail": [
          {
            "date": "24.04.2017",
            "coming": 298.8,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 298.8
          }
        ]
      },
      {
        "nom": "ÿƒ-17002708",
        "date": "10.05.2017",
        "documentamount": 1040,
        "coming": 1040,
        "consumption": 1040,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.05.2017",
            "coming": 1040,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 1040
          }
        ]
      },
      {
        "nom": "ÿƒ-17002758",
        "date": "11.05.2017",
        "documentamount": 2669,
        "coming": 2669,
        "consumption": 2669,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.05.2017",
            "coming": 2669,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 2669
          }
        ]
      },
      {
        "nom": "ÿƒ-17002849",
        "date": "16.05.2017",
        "documentamount": 460,
        "coming": 460,
        "consumption": 460,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.05.2017",
            "coming": 460,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 460
          }
        ]
      },
      {
        "nom": "ÿƒ-17002873",
        "date": "16.05.2017",
        "documentamount": 1200,
        "coming": 1200,
        "consumption": 1200,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.05.2017",
            "coming": 1200,
            "consumption": 0
          },
          {
            "date": "17.05.2017",
            "coming": 0,
            "consumption": 3245.01
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 1730
          },
          {
            "date": "14.06.2017",
            "coming": 0,
            "consumption": 530
          },
          {
            "date": "14.07.2017",
            "coming": 0,
            "consumption": -4305.01
          }
        ]
      },
      {
        "nom": "ÿƒ-17002913",
        "date": "18.05.2017",
        "documentamount": 597,
        "coming": 597,
        "consumption": 597,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.05.2017",
            "coming": 597,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 597
          }
        ]
      },
      {
        "nom": "ÿƒ-17002918",
        "date": "18.05.2017",
        "documentamount": 140,
        "coming": 140,
        "consumption": 140,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.05.2017",
            "coming": 140,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 140
          }
        ]
      },
      {
        "nom": "ÿƒ-17003004",
        "date": "23.05.2017",
        "documentamount": 1820,
        "coming": 1820,
        "consumption": 1820,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.05.2017",
            "coming": 1820,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 1820
          }
        ]
      },
      {
        "nom": "ÿƒ-17003021",
        "date": "23.05.2017",
        "documentamount": 420,
        "coming": 420,
        "consumption": 420,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.05.2017",
            "coming": 420,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 420
          }
        ]
      },
      {
        "nom": "ÿƒ-17003040",
        "date": "31.05.2017",
        "documentamount": 395,
        "coming": 395,
        "consumption": 395,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.05.2017",
            "coming": 395,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 395
          }
        ]
      },
      {
        "nom": "ÿƒ-17003188",
        "date": "31.05.2017",
        "documentamount": 50,
        "coming": 50,
        "consumption": 50,
        "remainder": 0,
        "indetail": [
          {
            "date": "31.05.2017",
            "coming": 50,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 50
          }
        ]
      },
      {
        "nom": "ÿƒ-17003267",
        "date": "06.06.2017",
        "documentamount": 85,
        "coming": 85,
        "consumption": 85,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.06.2017",
            "coming": 85,
            "consumption": 0
          },
          {
            "date": "07.06.2017",
            "coming": 0,
            "consumption": 85
          }
        ]
      },
      {
        "nom": "ÿƒ-17003353",
        "date": "08.06.2017",
        "documentamount": 960,
        "coming": 960,
        "consumption": 960,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.06.2017",
            "coming": 960,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 960
          }
        ]
      },
      {
        "nom": "ÿƒ-17003436",
        "date": "12.06.2017",
        "documentamount": 285,
        "coming": 285,
        "consumption": 285,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.06.2017",
            "coming": 285,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 285
          }
        ]
      },
      {
        "nom": "ÿƒ-17003437",
        "date": "12.06.2017",
        "documentamount": 672,
        "coming": 672,
        "consumption": 672,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.06.2017",
            "coming": 672,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 672
          }
        ]
      },
      {
        "nom": "ÿƒ-17003438",
        "date": "12.06.2017",
        "documentamount": 150,
        "coming": 150,
        "consumption": 150,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.06.2017",
            "coming": 150,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 150
          }
        ]
      },
      {
        "nom": "ÿƒ-17003471",
        "date": "14.06.2017",
        "documentamount": 990,
        "coming": 990,
        "consumption": 990,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2017",
            "coming": 990,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 990
          }
        ]
      },
      {
        "nom": "ÿƒ-17003473",
        "date": "14.06.2017",
        "documentamount": 4270,
        "coming": 4270,
        "consumption": 4270,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2017",
            "coming": 4270,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 4270
          }
        ]
      },
      {
        "nom": "ÿƒ-17003486",
        "date": "14.06.2017",
        "documentamount": 800,
        "coming": 800,
        "consumption": 800,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2017",
            "coming": 800,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 800
          }
        ]
      },
      {
        "nom": "ÿƒ-17003482",
        "date": "14.06.2017",
        "documentamount": 590,
        "coming": 590,
        "consumption": 590,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2017",
            "coming": 590,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 590
          }
        ]
      },
      {
        "nom": "ÿƒ-17003495",
        "date": "14.06.2017",
        "documentamount": 270,
        "coming": 270,
        "consumption": 270,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.06.2017",
            "coming": 270,
            "consumption": 0
          },
          {
            "date": "16.06.2017",
            "coming": 0,
            "consumption": 270
          }
        ]
      },
      {
        "nom": "ÿƒ-17003712",
        "date": "22.06.2017",
        "documentamount": 660,
        "coming": 660,
        "consumption": 660,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.06.2017",
            "coming": 660,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 660
          }
        ]
      },
      {
        "nom": "ÿƒ-17003717",
        "date": "22.06.2017",
        "documentamount": 1050,
        "coming": 1050,
        "consumption": 1050,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.06.2017",
            "coming": 1050,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 1050
          }
        ]
      },
      {
        "nom": "ÿƒ-17003781",
        "date": "26.06.2017",
        "documentamount": 525,
        "coming": 525,
        "consumption": 525,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.06.2017",
            "coming": 525,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 525
          }
        ]
      },
      {
        "nom": "ÿƒ-17003789",
        "date": "26.06.2017",
        "documentamount": 2230,
        "coming": 2230,
        "consumption": 2230,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.06.2017",
            "coming": 2230,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 2230
          }
        ]
      },
      {
        "nom": "ÿƒ-17003850",
        "date": "29.06.2017",
        "documentamount": 1530,
        "coming": 1530,
        "consumption": 1530,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.06.2017",
            "coming": 1530,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 1530
          }
        ]
      },
      {
        "nom": "ÿƒ-17003876",
        "date": "30.06.2017",
        "documentamount": 235,
        "coming": 235,
        "consumption": 235,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.06.2017",
            "coming": 235,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 235
          }
        ]
      },
      {
        "nom": "ÿƒ-17003906",
        "date": "03.07.2017",
        "documentamount": 2385,
        "coming": 2385,
        "consumption": 2385,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.07.2017",
            "coming": 2385,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 2385
          }
        ]
      },
      {
        "nom": "ÿƒ-17003912",
        "date": "03.07.2017",
        "documentamount": 540,
        "coming": 540,
        "consumption": 540,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.07.2017",
            "coming": 540,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 540
          }
        ]
      },
      {
        "nom": "ÿƒ-17003982",
        "date": "05.07.2017",
        "documentamount": 400,
        "coming": 400,
        "consumption": 400,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.07.2017",
            "coming": 400,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 400
          }
        ]
      },
      {
        "nom": "ÿƒ-17004015",
        "date": "06.07.2017",
        "documentamount": 1730,
        "coming": 1730,
        "consumption": 1730,
        "remainder": 0,
        "indetail": [
          {
            "date": "06.07.2017",
            "coming": 1730,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 1730
          }
        ]
      },
      {
        "nom": "ÿƒ-17004074",
        "date": "10.07.2017",
        "documentamount": 470,
        "coming": 470,
        "consumption": 470,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.07.2017",
            "coming": 470,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 470
          }
        ]
      },
      {
        "nom": "ÿƒ-17004077",
        "date": "10.07.2017",
        "documentamount": 3618,
        "coming": 3618,
        "consumption": 3618,
        "remainder": 0,
        "indetail": [
          {
            "date": "10.07.2017",
            "coming": 3618,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 3618
          }
        ]
      },
      {
        "nom": "ÿƒ-17004149",
        "date": "12.07.2017",
        "documentamount": 690,
        "coming": 690,
        "consumption": 690,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.07.2017",
            "coming": 690,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 690
          }
        ]
      },
      {
        "nom": "ÿƒ-17004192",
        "date": "13.07.2017",
        "documentamount": 1440,
        "coming": 1440,
        "consumption": 1440,
        "remainder": 0,
        "indetail": [
          {
            "date": "13.07.2017",
            "coming": 1440,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 1440
          }
        ]
      },
      {
        "nom": "ÿƒ-17004224",
        "date": "14.07.2017",
        "documentamount": 900,
        "coming": 900,
        "consumption": 900,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.07.2017",
            "coming": 900,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 900
          }
        ]
      },
      {
        "nom": "ÿƒ-17004240",
        "date": "17.07.2017",
        "documentamount": 515,
        "coming": 515,
        "consumption": 515,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.07.2017",
            "coming": 515,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 515
          }
        ]
      },
      {
        "nom": "ÿƒ-17004241",
        "date": "17.07.2017",
        "documentamount": 2300,
        "coming": 2300,
        "consumption": 2300,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.07.2017",
            "coming": 2300,
            "consumption": 0
          },
          {
            "date": "21.07.2017",
            "coming": 0,
            "consumption": 2300
          }
        ]
      },
      {
        "nom": "ÿƒ-17004256",
        "date": "17.07.2017",
        "documentamount": 1130,
        "coming": 1130,
        "consumption": 1130,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.07.2017",
            "coming": 1130,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 1130
          }
        ]
      },
      {
        "nom": "ÿƒ-17004298",
        "date": "18.07.2017",
        "documentamount": 1420,
        "coming": 1420,
        "consumption": 1420,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.07.2017",
            "coming": 1420,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 1420
          }
        ]
      },
      {
        "nom": "ÿƒ-17004527",
        "date": "27.07.2017",
        "documentamount": 3060,
        "coming": 3060,
        "consumption": 3060,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.07.2017",
            "coming": 3060,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 3060
          }
        ]
      },
      {
        "nom": "ÿƒ-17004552",
        "date": "28.07.2017",
        "documentamount": 685,
        "coming": 685,
        "consumption": 685,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.07.2017",
            "coming": 685,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 685
          }
        ]
      },
      {
        "nom": "ÿƒ-17004554",
        "date": "28.07.2017",
        "documentamount": 115,
        "coming": 115,
        "consumption": 115,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.07.2017",
            "coming": 115,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 115
          }
        ]
      },
      {
        "nom": "ÿƒ-17004630",
        "date": "01.08.2017",
        "documentamount": 920,
        "coming": 920,
        "consumption": 920,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.08.2017",
            "coming": 920,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 920
          }
        ]
      },
      {
        "nom": "ÿƒ-17004670",
        "date": "03.08.2017",
        "documentamount": 1260,
        "coming": 1260,
        "consumption": 1260,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.08.2017",
            "coming": 1260,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 1260
          }
        ]
      },
      {
        "nom": "ÿƒ-17004672",
        "date": "03.08.2017",
        "documentamount": 660,
        "coming": 660,
        "consumption": 660,
        "remainder": 0,
        "indetail": [
          {
            "date": "03.08.2017",
            "coming": 660,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 660
          }
        ]
      },
      {
        "nom": "ÿƒ-17004705",
        "date": "04.08.2017",
        "documentamount": 235,
        "coming": 235,
        "consumption": 235,
        "remainder": 0,
        "indetail": [
          {
            "date": "04.08.2017",
            "coming": 235,
            "consumption": 0
          },
          {
            "date": "14.08.2017",
            "coming": 0,
            "consumption": 235
          }
        ]
      },
      {
        "nom": "ÿƒ-17004778",
        "date": "08.08.2017",
        "documentamount": 920,
        "coming": 920,
        "consumption": 920,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.08.2017",
            "coming": 920,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 920
          }
        ]
      },
      {
        "nom": "ÿƒ-17004816",
        "date": "09.08.2017",
        "documentamount": 1190,
        "coming": 1190,
        "consumption": 1190,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.08.2017",
            "coming": 1190,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 1190
          }
        ]
      },
      {
        "nom": "ÿƒ-17004831",
        "date": "09.08.2017",
        "documentamount": 1190,
        "coming": 1190,
        "consumption": 1190,
        "remainder": 0,
        "indetail": [
          {
            "date": "09.08.2017",
            "coming": 1190,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 1190
          }
        ]
      },
      {
        "nom": "ÿƒ-17004857",
        "date": "11.08.2017",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.08.2017",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 1250
          }
        ]
      },
      {
        "nom": "ÿƒ-17004892",
        "date": "15.08.2017",
        "documentamount": 1860,
        "coming": 1860,
        "consumption": 1860,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.08.2017",
            "coming": 1860,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 1860
          }
        ]
      },
      {
        "nom": "ÿƒ-17004916",
        "date": "15.08.2017",
        "documentamount": 1020,
        "coming": 1020,
        "consumption": 1020,
        "remainder": 0,
        "indetail": [
          {
            "date": "15.08.2017",
            "coming": 1020,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 1020
          }
        ]
      },
      {
        "nom": "ÿƒ-17004950",
        "date": "16.08.2017",
        "documentamount": 1850,
        "coming": 1850,
        "consumption": 1850,
        "remainder": 0,
        "indetail": [
          {
            "date": "16.08.2017",
            "coming": 1850,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 1850
          }
        ]
      },
      {
        "nom": "ÿƒ-17004957",
        "date": "17.08.2017",
        "documentamount": 585,
        "coming": 585,
        "consumption": 585,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.08.2017",
            "coming": 585,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 0,
            "consumption": 585
          }
        ]
      },
      {
        "nom": "ÿƒ-17004970",
        "date": "17.08.2017",
        "documentamount": 400,
        "coming": 400,
        "consumption": 400,
        "remainder": 0,
        "indetail": [
          {
            "date": "17.08.2017",
            "coming": 400,
            "consumption": 0
          },
          {
            "date": "05.09.2017",
            "coming": 0,
            "consumption": 400
          }
        ]
      },
      {
        "nom": "ÿƒ-17004997",
        "date": "18.08.2017",
        "documentamount": 1685,
        "coming": 1685,
        "consumption": 1685,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.08.2017",
            "coming": 1195,
            "consumption": 0
          },
          {
            "date": "18.08.2017",
            "coming": 490,
            "consumption": 0
          },
          {
            "date": "05.09.2017",
            "coming": 0,
            "consumption": 1685
          }
        ]
      },
      {
        "nom": "ÿƒ-17005004",
        "date": "19.08.2017",
        "documentamount": 4700,
        "coming": 4700,
        "consumption": 4700,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.08.2017",
            "coming": 4700,
            "consumption": 0
          },
          {
            "date": "05.09.2017",
            "coming": 0,
            "consumption": 4700
          }
        ]
      },
      {
        "nom": "ÿƒ-17005068",
        "date": "22.08.2017",
        "documentamount": 100,
        "coming": 100,
        "consumption": 100,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.08.2017",
            "coming": 100,
            "consumption": 0
          },
          {
            "date": "05.09.2017",
            "coming": 0,
            "consumption": 100
          }
        ]
      },
      {
        "nom": "ÿƒ-17005080",
        "date": "22.08.2017",
        "documentamount": 9230,
        "coming": 9230,
        "consumption": 9230,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.08.2017",
            "coming": 4620,
            "consumption": 0
          },
          {
            "date": "22.08.2017",
            "coming": 4610,
            "consumption": 0
          },
          {
            "date": "05.09.2017",
            "coming": 0,
            "consumption": 3130
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 6100
          }
        ]
      },
      {
        "nom": "ÿƒ-17005101",
        "date": "23.08.2017",
        "documentamount": 190,
        "coming": 190,
        "consumption": 190,
        "remainder": 0,
        "indetail": [
          {
            "date": "23.08.2017",
            "coming": 190,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 190
          }
        ]
      },
      {
        "nom": "ÿƒ-17005135",
        "date": "28.08.2017",
        "documentamount": 1410,
        "coming": 1410,
        "consumption": 1410,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.08.2017",
            "coming": 1410,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 1410
          }
        ]
      },
      {
        "nom": "ÿƒ-17005151",
        "date": "28.08.2017",
        "documentamount": 2185,
        "coming": 2185,
        "consumption": 2185,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.08.2017",
            "coming": 2185,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 2185
          }
        ]
      },
      {
        "nom": "ÿƒ-17005168",
        "date": "28.08.2017",
        "documentamount": 400,
        "coming": 400,
        "consumption": 400,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.08.2017",
            "coming": 400,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 400
          }
        ]
      },
      {
        "nom": "ÿƒ-17005165",
        "date": "29.08.2017",
        "documentamount": 1325,
        "coming": 1325,
        "consumption": 1325,
        "remainder": 0,
        "indetail": [
          {
            "date": "29.08.2017",
            "coming": 1325,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 1325
          }
        ]
      },
      {
        "nom": "ÿƒ-17005214",
        "date": "30.08.2017",
        "documentamount": 845,
        "coming": 845,
        "consumption": 845,
        "remainder": 0,
        "indetail": [
          {
            "date": "30.08.2017",
            "coming": 845,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 845
          }
        ]
      },
      {
        "nom": "ÿƒ-17005287",
        "date": "01.09.2017",
        "documentamount": 1130,
        "coming": 1130,
        "consumption": 1130,
        "remainder": 0,
        "indetail": [
          {
            "date": "01.09.2017",
            "coming": 1130,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 1130
          }
        ]
      },
      {
        "nom": "ÿƒ-17005372",
        "date": "05.09.2017",
        "documentamount": 1120,
        "coming": 1120,
        "consumption": 1120,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.09.2017",
            "coming": 1120,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 1120
          }
        ]
      },
      {
        "nom": "ÿƒ-17005382",
        "date": "05.09.2017",
        "documentamount": 170,
        "coming": 170,
        "consumption": 170,
        "remainder": 0,
        "indetail": [
          {
            "date": "05.09.2017",
            "coming": 170,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 170
          }
        ]
      },
      {
        "nom": "ÿƒ-17005441",
        "date": "07.09.2017",
        "documentamount": 470,
        "coming": 470,
        "consumption": 470,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.09.2017",
            "coming": 470,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 470
          }
        ]
      },
      {
        "nom": "ÿƒ-17005443",
        "date": "07.09.2017",
        "documentamount": 3030,
        "coming": 3030,
        "consumption": 3030,
        "remainder": 0,
        "indetail": [
          {
            "date": "07.09.2017",
            "coming": 3030,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 3030
          }
        ]
      },
      {
        "nom": "ÿƒ-17005468",
        "date": "08.09.2017",
        "documentamount": 500,
        "coming": 500,
        "consumption": 500,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.09.2017",
            "coming": 500,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 500
          }
        ]
      },
      {
        "nom": "ÿƒ-17005481",
        "date": "08.09.2017",
        "documentamount": 1015,
        "coming": 1015,
        "consumption": 1015,
        "remainder": 0,
        "indetail": [
          {
            "date": "08.09.2017",
            "coming": 865,
            "consumption": 0
          },
          {
            "date": "08.09.2017",
            "coming": 150,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 1015
          }
        ]
      },
      {
        "nom": "ÿƒ-17005484",
        "date": "11.09.2017",
        "documentamount": 1105,
        "coming": 1105,
        "consumption": 1105,
        "remainder": 0,
        "indetail": [
          {
            "date": "11.09.2017",
            "coming": 1105,
            "consumption": 0
          },
          {
            "date": "22.09.2017",
            "coming": 0,
            "consumption": 120
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 985
          }
        ]
      },
      {
        "nom": "ÿƒ-17005483",
        "date": "12.09.2017",
        "documentamount": 660,
        "coming": 660,
        "consumption": 660,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.09.2017",
            "coming": 660,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 660
          }
        ]
      },
      {
        "nom": "ÿƒ-17005532",
        "date": "12.09.2017",
        "documentamount": 725,
        "coming": 725,
        "consumption": 725,
        "remainder": 0,
        "indetail": [
          {
            "date": "12.09.2017",
            "coming": 725,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 725
          }
        ]
      },
      {
        "nom": "ÿƒ-17005575",
        "date": "14.09.2017",
        "documentamount": 120,
        "coming": 120,
        "consumption": 120,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.09.2017",
            "coming": 120,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 120
          }
        ]
      },
      {
        "nom": "ÿƒ-17005583",
        "date": "14.09.2017",
        "documentamount": 5735,
        "coming": 5735,
        "consumption": 5735,
        "remainder": 0,
        "indetail": [
          {
            "date": "14.09.2017",
            "coming": 5735,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 5735
          }
        ]
      },
      {
        "nom": "ÿƒ-17005633",
        "date": "18.09.2017",
        "documentamount": 110,
        "coming": 110,
        "consumption": 110,
        "remainder": 0,
        "indetail": [
          {
            "date": "18.09.2017",
            "coming": 110,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 110
          }
        ]
      },
      {
        "nom": "ÿƒ-17005647",
        "date": "19.09.2017",
        "documentamount": 1480,
        "coming": 1480,
        "consumption": 1480,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.09.2017",
            "coming": 1480,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 1480
          }
        ]
      },
      {
        "nom": "ÿƒ-17005656",
        "date": "19.09.2017",
        "documentamount": 1008,
        "coming": 1008,
        "consumption": 1008,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.09.2017",
            "coming": 1008,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 1008
          }
        ]
      },
      {
        "nom": "ÿƒ-17005662",
        "date": "19.09.2017",
        "documentamount": 750,
        "coming": 750,
        "consumption": 750,
        "remainder": 0,
        "indetail": [
          {
            "date": "19.09.2017",
            "coming": 750,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 750
          }
        ]
      },
      {
        "nom": "ÿƒ-17005666",
        "date": "20.09.2017",
        "documentamount": 1250,
        "coming": 1250,
        "consumption": 1250,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.09.2017",
            "coming": 1250,
            "consumption": 0
          },
          {
            "date": "25.09.2017",
            "coming": 0,
            "consumption": 145
          },
          {
            "date": "27.09.2017",
            "coming": 0,
            "consumption": 1105
          }
        ]
      },
      {
        "nom": "ÿƒ-17005675",
        "date": "20.09.2017",
        "documentamount": 170,
        "coming": 170,
        "consumption": 170,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.09.2017",
            "coming": 170,
            "consumption": 0
          },
          {
            "date": "27.09.2017",
            "coming": 0,
            "consumption": 170
          }
        ]
      },
      {
        "nom": "ÿƒ-17005695",
        "date": "20.09.2017",
        "documentamount": 990,
        "coming": 990,
        "consumption": 990,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.09.2017",
            "coming": 990,
            "consumption": 0
          },
          {
            "date": "27.09.2017",
            "coming": 0,
            "consumption": 990
          }
        ]
      },
      {
        "nom": "ÿƒ-17005700",
        "date": "20.09.2017",
        "documentamount": 1980,
        "coming": 1980,
        "consumption": 1980,
        "remainder": 0,
        "indetail": [
          {
            "date": "20.09.2017",
            "coming": 1980,
            "consumption": 0
          },
          {
            "date": "27.09.2017",
            "coming": 0,
            "consumption": 1980
          }
        ]
      },
      {
        "nom": "ÿƒ-17005749",
        "date": "22.09.2017",
        "documentamount": 1480,
        "coming": 1480,
        "consumption": 1480,
        "remainder": 0,
        "indetail": [
          {
            "date": "22.09.2017",
            "coming": 1480,
            "consumption": 0
          },
          {
            "date": "27.09.2017",
            "coming": 0,
            "consumption": 1480
          }
        ]
      },
      {
        "nom": "ÿƒ-17005811",
        "date": "26.09.2017",
        "documentamount": 1785,
        "coming": 1785,
        "consumption": 1785,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.09.2017",
            "coming": 1785,
            "consumption": 0
          },
          {
            "date": "27.09.2017",
            "coming": 0,
            "consumption": 680
          },
          {
            "date": "11.10.2017",
            "coming": 0,
            "consumption": 1105
          }
        ]
      },
      {
        "nom": "ÿƒ-17005815",
        "date": "26.09.2017",
        "documentamount": 1145,
        "coming": 1145,
        "consumption": 1145,
        "remainder": 0,
        "indetail": [
          {
            "date": "26.09.2017",
            "coming": 1145,
            "consumption": 0
          },
          {
            "date": "11.10.2017",
            "coming": 0,
            "consumption": 1145
          }
        ]
      },
      {
        "nom": "ÿƒ-17005823",
        "date": "27.09.2017",
        "documentamount": 245,
        "coming": 245,
        "consumption": 245,
        "remainder": 0,
        "indetail": [
          {
            "date": "27.09.2017",
            "coming": 245,
            "consumption": 0
          },
          {
            "date": "11.10.2017",
            "coming": 0,
            "consumption": 245
          }
        ]
      },
      {
        "nom": "ÿƒ-17005862",
        "date": "28.09.2017",
        "documentamount": 1260,
        "coming": 1260,
        "consumption": 1260,
        "remainder": 0,
        "indetail": [
          {
            "date": "28.09.2017",
            "coming": 1260,
            "consumption": 0
          },
          {
            "date": "11.10.2017",
            "coming": 0,
            "consumption": 1260
          }
        ]
      },
      {
        "nom": "ÿƒ-17005870",
        "date": "02.10.2017",
        "documentamount": 1050,
        "coming": 1050,
        "consumption": 605,
        "remainder": 445,
        "indetail": [
          {
            "date": "02.10.2017",
            "coming": 1050,
            "consumption": 0
          },
          {
            "date": "11.10.2017",
            "coming": 0,
            "consumption": 605
          }
        ]
      },
      {
        "nom": "ÿƒ-17005964",
        "date": "03.10.2017",
        "documentamount": 2060,
        "coming": 2060,
        "consumption": 0,
        "remainder": 2060,
        "indetail": [
          {
            "date": "03.10.2017",
            "coming": 2060,
            "consumption": 0
          }
        ]
      },
      {
        "nom": "ÿƒ-17005995",
        "date": "04.10.2017",
        "documentamount": 2050,
        "coming": 2050,
        "consumption": 0,
        "remainder": 2050,
        "indetail": [
          {
            "date": "04.10.2017",
            "coming": 2050,
            "consumption": 0
          }
        ]
      },
      {
        "nom": "ÿƒ-17006009",
        "date": "04.10.2017",
        "documentamount": 290,
        "coming": 290,
        "consumption": 0,
        "remainder": 290,
        "indetail": [
          {
            "date": "04.10.2017",
            "coming": 290,
            "consumption": 0
          }
        ]
      },
      {
        "nom": "ÿƒ-17006078",
        "date": "09.10.2017",
        "documentamount": 870,
        "coming": 870,
        "consumption": 0,
        "remainder": 870,
        "indetail": [
          {
            "date": "09.10.2017",
            "coming": 540,
            "consumption": 0
          },
          {
            "date": "09.10.2017",
            "coming": 330,
            "consumption": 0
          }
        ]
      },
      {
        "nom": "ÿƒ-17006197",
        "date": "12.10.2017",
        "documentamount": 210,
        "coming": 210,
        "consumption": 0,
        "remainder": 210,
        "indetail": [
          {
            "date": "12.10.2017",
            "coming": 210,
            "consumption": 0
          }
        ]
      }
    ]
  }
]';
    }

    public function actionImportCustomers(){
        try{
           if($data = \Yii::$app->request->post("data")){
               // $data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->SaveCustomers($item);
                    }
                } else {
                    throw new Exception("Данные о пользователях ожидаются в виде массива.");
                }
                die(\GuzzleHttp\json_encode($this->result));
            }else {
                throw new Exception("Отсутствует data");
            }


        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }

    public function actionImportOrdersHistory(){
        try{
            if($data = \Yii::$app->request->post("data")){

               // $data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->SavePaymentHistory($item);
                    }
                } else {
                    throw new Exception("Данные о пользователях ожидаются в виде массива.");
                }
                die(\GuzzleHttp\json_encode($this->result));
            }else {
                throw new Exception("Отсутствует data");
            }


        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }

    public function actionImportOrders(){
        try{
            if($data = \Yii::$app->request->post("data")){
//                $data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    foreach ($data as $item){
                        $this->SaveOrders($item);
                    }
                } else {
                    throw new Exception("Данные о пользователях ожидаются в виде массива.");
                }
                die(json_encode($this->result,JSON_UNESCAPED_UNICODE));
            }else {
                throw new Exception("Отсутствует data");
            }
        } catch (Exception $e) {
            echo 'Выброшено исключение: ',  $e->getMessage(), "\n", 'в файле ', $e->getFile() , "\n",' на строке ', $e->getLine(), "\n"," ", $e->getTraceAsString();
        }
    }

    private function SavePaymentHistory($item){
        if(!isset($item->id)){
            throw new Exception("Не указан id пользователя");
        }
        $customerPayments = CustomerPayment::find()->where(['customer_id'=> $item->id])->one();
        if(!$customerPayments instanceof  CustomerPayment){
            $customerPayments = new CustomerPayment();
            $customerPayments->customer_id = $item->id;
        }
        $customerPayments->remainder = $item->remainder;
        if(!$customerPayments->validate()){
            throw new Exception(print_r($customerPayments->getErrors()));
        }
        $customerPayments->save();
        if(!isset($item->orders)){
            throw new Exception("Не указан orders пользователя");
        }
        CustomerPaymentHistory::deleteAll(['customer_id'=> $item->id]);
        foreach ($item->orders as $order){
            if(!isset($order->indetail)){
                throw new Exception("Не указан indetail пользователя в заказе " .$order->nom );
            }
            $orderData = Order::find()->where(['remote_id'=> $order->nom])->one();
            if($orderData instanceof Order ){
                foreach ($order->indetail as $row){
                    $customerPaymentHistory = new CustomerPaymentHistory();
                    $customerPaymentHistory->customer_id = $item->id;
                    $customerPaymentHistory->order_id = $orderData->id;
                    $customerPaymentHistory->remainder = $row->remainder;
                    $customerPaymentHistory->order_remainder = $order->remainder;
                    $customerPaymentHistory->days_of_delay = $row->DaysOfDelay;
                    $date = new \DateTime($order->date);
                    $date->format("d.m.Y");
                    $customerPaymentHistory->date = $date->getTimestamp();
                    $date = new \DateTime($row->date);
                    $date->format("d.m.Y");
                    $customerPaymentHistory->action_date = $date->getTimestamp();
                    $date = new \DateTime($row->DateOfDelay);
                    $date->format("d.m.Y");
                    $customerPaymentHistory->date_of_delay = $date->getTimestamp();
                    if(!$customerPaymentHistory->validate()){
                        throw new Exception(print_r($customerPaymentHistory->getErrors()));
                    }
                    $customerPaymentHistory->save();
                }
            } else {
                throw new Exception("На сайте нет заказа с Order.nom " . $order->nom);
            }

        }
        $this->result[$item->id] = 'true';
    }

    private function SaveOrders($data){
        $order = Order::find()->where(["remote_id" => $data->nomer])->one();
        if(!$order instanceof Order){
            $order = new Order();
            $order->remote_id = $data->nomer;

        }
        $date = new \DateTime($data->date);
        $date->format("Y-m-dTH:i:s");
        $order->created_at = $date->getTimestamp();
        if(isset($data->Counterparties)){
            $order->name = $data->Counterparties->username;
            if(isset($data->Counterparties->phone)){
                $order->phone = $data->Counterparties->phone;
            }
            if(isset($data->Counterparties->Email)){
                $order->email = $data->Counterparties->Email;
            }

        } else {
            throw new \Exception("В заказе ". $data->nomer." не указан Counterparties");
        }
        if(!$order->validate()){
            throw new Exception(print_r($order->getErrors()));
        }
        $order->save();
        if(isset($data->ItemS)){
            OrderProduct::deleteAll(['order_id'=>$order->id]);
            $total = 0;
            $discount_total = 0;
            foreach ($data->ItemS as $item){
                /**
                 * @var $product Product
                 */
                $product = Product::find()->where(["remote_id" => $item->model])->one();
                $orderProduct = new OrderProduct();
                $orderProduct->product_variant_id = $product->id;
                $orderProduct->name =$product->lang->title;
                $orderProduct->sku = isset($product->variant->sku) ?$product->variant->sku:$product->lang->title;
                $orderProduct->price = $item->price*1;
                $orderProduct->discount_price = ((100-$item->discount)/100)* $item->price;
                $orderProduct->discount = $item->discount;
                $orderProduct->count = $item->quantity;
                $orderProduct->remote_id = $item->model;
                $orderProduct->order_id = $order->id;
                $orderProduct->sum_cost = (((100-$item->discount)/100)* $item->price) * $orderProduct->count ;
                if(!$orderProduct->validate()){
                    throw new Exception(print_r($orderProduct->getErrors()));
                }
                $orderProduct->save();
                $total += $orderProduct->price * $orderProduct->count ;
                $discount_total += $orderProduct->sum_cost;

            }
            $order->total = $total;
            $order->discount_total = $discount_total;
            if(!$order->validate()){
                throw new Exception(print_r($order->getErrors()));
            }
            $order->save();
            $this->result[$data->nomer] = $order->id;
        } else {
            throw new \Exception("В заказе ". $data->nomer." не указан ItemS");
        }
    }

    private function SaveCustomers($item){
        $user = Customer::find()->where(["remote_id" => $item->Code])->one();
        if(!$user instanceof Customer){
            $user = new Customer();
            $user->remote_id = $item->Code;
            $user->status = 10;
            $user->setPassword($item->password);
            $user->generateAuthKey();
        }else if(isset($item->password) && !empty($item->password)){
            $user->setPassword($item->password);
            $user->generateAuthKey();
        }

        if(isset($item->YurfizLizso)){
            if($item->YurfizLizso == "Юр. лицо"){
                $user->role = "entity";
            }else if($item->YurfizLizso == "Физ. лицо"){
                $user->role = "person";
            }
        }
        $user->username = $item->username;
        $user->email = !empty($item->Email) ? $item->Email : $user->email;
        $user->phone = !empty($item->Phone) ? $item->Phone : $user->phone;
        $user->discount_rate = $item->discount_rate;
        $user->validate();
        if(!$user->validate()){
            throw new Exception(print_r($user->getErrors()));
        }
        $user->save();
        if(isset($item->Discount) && !empty($item->Discount)){
            $this->SaveDiscount($item->Discount, $user);
        }



        $this->result[$item->Code] = $user->id;



    }

    private function SaveDiscount($discounts, $customer){
        CustomerCategoryDiscount::deleteAll(['customer_id'=>$customer->id]);
        foreach ($discounts as $discount){
            $category = Category::find()->where(['remote_id'=>$discount->Group])->one();
            if($category instanceof Category){
                $discountModel = new CustomerCategoryDiscount();
                $discountModel->category_id = $category->id;
                $discountModel->customer_id = $customer->id;
                $discountModel->discount = $discount->Discount;
                $discountModel->save();
            } else {
                throw new \Exception("Категории ".$discount->Group." указаной в Discount у пользователя ".$customer->remote_id." нет в базе");
            }
        }
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


    public  function actionImportCategory(){
        try{
            if($data = \Yii::$app->request->post("data")){
                //$data = $this->getItemData();
                $data = json_decode($data);
                if(is_array($data)){
                    $this->SaveCategories($data);
                } else {
                    throw new Exception("Данные о категориях ожидаются в виде массива.");
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
        if(isset($item->category_id)){
             $category =  Category::find()->where(['remote_id'=>$item->category_id])->one();
             if($category instanceof Category){
                 $item->category_id = $category->id;
             } else {
                 throw new Exception("Категории {$item->category_id} указаной у товара {$item->model} не существует");
             }

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

            $this->result[$category->category_id] = $category_id;
        }

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
        $model->discount_rate = $item->discount_rate;
        $model->is_discount = $item->discount;
        $model->is_top = $item->top;
        $model->is_new = $item->new;
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
        if($item->quantity == 0){
            if(empty($variant->sold_date)){
                $sold_date = new \DateTime('NOW');
                $variant->sold_date  = $sold_date->getTimestamp();
            }
        }else {
            $variant->sold_date  = '';
        }
        if(!$variant->validate()){
            throw new Exception(print_r($variant->getErrors()));
        }
        $variant->save();
        return $variant->id;
    }
}