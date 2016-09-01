<?php

use PHPUnit\Framework\TestCase;

class Category{

    public $categories= array();
    public  $cat = array() ;
    public function  getcategory(){
        return $this->categories ;
    }
    public function  setcategory($categories){
        $this->categories =$categories;
    }


    public function addCat($cat){
        $this->categories->append($cat);
    }
    public function addProduct($product){
        $this->cat->append($product);
    }


    public function  browse($name){


    }

}

class Product
{
    public $title ;
    public $description;
    public $price ;



    public function  setTitle($title){
        $this->title = $title ;
    }

    public function  getTitle(){
        return $this->title ;
    }

    public function  getDescription(){
        return $this->description  ;
    }

    public function  setDescription($description){
        $this->description =$description ;
    }

    public function  getPrice(){
        return $this->price ;
    }
    public function  setPrice($price){
        $this->price =$price ;
    }





}

class ProductTest extends TestCase
{

    public function  testProduct()
    {

        $productX = new Product();
        $productX -> title = "apple";
        $productX -> description = "wwwww";
        $productX -> price = "50";


        $this->assertEquals("apple" , $productX->title);
        $this->assertEquals("wwwww" , $productX->description);
        $this->assertEquals("50" , $productX->price);


    }
    public function  testCategory(){
        $productY = new Product();

        $cats = array() ;

        $cat1 = new Category();
        $cat1->name = "Vegtables";

        $cat2 = new Category();
        $cat2->name = "Fruits";

        array_push($cats , $cat1);
        array_push($cats , $cat2);

        $this->assertEquals(0 , $productY->setcategory($cats) );

    }

    public function testBrowseProductCategory(){

        $arry1= new Category();

        $product1 = new Product();
        $product1->setTitle("Tomato");

        $arry1->addCat();



        








    }

}
?>
