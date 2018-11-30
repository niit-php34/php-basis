<?php
   /**
    *
    */
   class Transporter
   {
       public static $wheel;
       public $color;
       public $brand;
       public $weight;

       protected function getColor()
       {
           return $this->color;
       }

       public function setColor($color)
       {
           $this->color=$color;
       }

       public function __construct()
       {
           echo 'init transporter';
       }

       //nạp chồng dữ liệu (overloading)
       public function run()
       {
           //đếm tham số truyền vào
           $params = func_num_args();
           //lấy tham số truyền vào (mảng)
           $args=func_get_args();
           switch ($params) {
            //truong hop ko có tham số
            case 0:
            echo 'This transporter is running';
            break;

            //truong hợp có 1 tham số
            case 1:
            //$args[0];
            echo 'This transporter run by'.$args[0];
            break;

            default:
            break;
        }
       }
       // function run($by){
    // 	 echo 'This transporter run by'.$by;
    // }
   }

   $car = new Transporter();
   echo '<br>';
   $car->setColor("black");
   //echo '<br>';
   //echo "this transporter have ".$car->getColor();
   echo '<br>';
   $car->run();
   $car->run("diesel");
   echo '<br>';


   //truy cap truc tiep tu Class
   //chu ko phai tu doi tuong(object) tao ra tu Class
   Transporter::$wheel;

   class Flyer extends Transporter
   {
       public function __construct()
       {
           //goi construct cua cha
           parent::__construct();
       }

       //ghi de phuong thuc run cua cha
       public function run()
       {
           echo 'This flyer is flying'.parent::getColor();
       }
   }
   $flyer1 = new Flyer();
   $flyer1->setColor("Red");
   echo '<br>';
   //echo $flyer1->getColor();
   echo '<br>';
   $flyer1->run();
