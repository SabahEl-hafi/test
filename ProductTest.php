  <?php

   use PHPUnit\Framework\TestCase;

   class Category{


    /*public function  browse($name){


      }*/

    }

    class Product

   {

    public $title ;
    public $description;
    public $price ;
    public $categories = array();



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
    public function  getcategory(){
        return $this->categories ;
    }
    public function  setcategory($categories){
        // is array
        $this->categories =$categories;
    }

}

    class ProductTest extends TestCase
    {

    public function  test_Product_fields()

    {

        $productX = new Product();
        $productX -> title = $productX -> getTitle();
        $productX -> description =$productX -> getDescription();
        $productX -> price = $productX -> getPrice();


        $this->assertEquals($productX ->getTitle(), $productX -> title);
        $this->assertEquals($productX -> getDescription() , $productX->description);
        $this->assertEquals($productX -> getPrice(), $productX->price);


    }
    public function  product_may_classified_in_multiple_categories(){
       
        $productY = new Product();

        $cats = array() ;

        $cat1 = new Category();
        $cat1->name = "Vegtables";

        $cat2 = new Category();
        $cat2->name = "Fruits";

        array_push($cats , $cat1);
        array_push($cats , $cat2);

        $this->assertEquals(0 , $productY->getcategory($cats) );

    }


       public function testBrowseProductCategory(){

        $category1 = new Category();
        $category2 = new Category();

        $product1 = new Product();
        $product1->setTitle("Tomato");
        $product1->categories = array(
            $category1 , $category2
        );

       $this->assertEquals($category1  ,$product1->getcategory());
       $this->assertEquals($category2 ,$product1->getcategory() );

     // $this->assertContainsOnlyInstancesOf( Product::class , );
  /*  if ($product1->categories instanceof $category1) {
     echo 'Frite';
    }
    if ($product1->categories instanceof $category2) {
     echo 'Vegitable';
    }*/

    } 

}
?>

