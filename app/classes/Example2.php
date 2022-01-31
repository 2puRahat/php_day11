<?php


namespace App\classes;


class Example2
{
    public $student = [];

    public function index()
    {
        $this->student = [
            0 => [
                'name'  => 'rahat',
                'email' => 'tapurahat.swe@gmail.com',
                'phone' =>[
                    'phone1'=>'4555266',
                    'phone2'=>'7859'
                ]
            ],
            1 => [
            'name'  => 'tapu',
            'email' => 'tapurahat.swe@gmail.com',
            'phone' =>[
                'phone1'=>'4125266',
                'phone2'=>'9007859'
            ]
            ],
            2 => 'BITM',
            3 =>[
                'name'  => 'tapu',
                'email' => 'tapurahat.swe@gmail.com',
                'phone' => [
                    'phone1'=>'455500000',
                    'phone2'=>'785111119'
                ]
            ]
        ];

//        echo '<pre>';
//        var_dump($this->student);
//
//        print_r($this->student);
//        foreach ($this->student as $key => $item){
//
////                echo $item['name'].' '.$item['email'].' '.$item['phone'].'<br/>';
////                break;
//            if(is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value)){
//                        foreach ($value as $v_value){
//                            echo $v_value;
//                        }
//                    }
//                    else{
//                        echo $value. ' ';
//                    }
//                }
//            }
//            else
//                {
//                echo $item;
//            }
//            echo '<br/>';
//        }



//        echo $this->student[0]['name'];






//        $this->student = [10,20,'BITM',10.20,true,false];
////        echo $this->student[3];
//        foreach ($this->student as $key => $item){
//            echo 'index no '.$key.' value is -'.$item.'<br/> ';
//        }
    }
}