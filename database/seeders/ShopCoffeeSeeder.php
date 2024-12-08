<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShopHomepage;


class ShopCoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $coffeeShopItems = [
            [
                "title" => "Black Eye Espresso",
                "img"=> "espresso",
                "description"=> "Brewed coffee with two shots of espresso for extra kick.",
                "description2"=>"A powerhouse of caffeine, the Black Eye Espresso is perfect for those who need an extra boost to start their day. This drink combines brewed coffee with two shots of espresso, resulting in a robust and intense flavor that is sure to wake you up. The rich bitterness of the espresso complements the smoothness of the coffee, offering a well-rounded experience for true coffee lovers. Its bold profile makes it a favorite for anyone seeking that extra jolt.",
                "price"=> 180,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
            ],
            [
                "title"=> "Caffè Mocha",
                "img"=> "caffe_mocha",
                "description"=> "Brewed coffee with chocolate and steamed milk.",
                "description2"=>"The Caffè Mocha is a delicious fusion of coffee and chocolate, creating a drink that perfectly balances sweet and bitter. A shot of espresso is blended with steamed milk and rich chocolate syrup, making it a decadent treat. The creamy texture of the milk enhances the boldness of the espresso, while the chocolate adds a layer of sweetness that appeals to both coffee and dessert lovers. Topped with whipped cream, this drink feels indulgent and satisfying.",
                "price"=> 170,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Cortadito",
                "img"=> "cortadito",
                "description"=> "Cuban coffee made with espresso and condensed milk.",
                "description2"=>"A traditional Cuban delight, the Cortadito offers a perfect blend of strong espresso and sweetened condensed milk. Its creamy texture and rich flavor make it a favorite among those who love a sweet but strong coffee. The bold espresso is softened by the sweetness of the condensed milk, creating a smooth, balanced drink that feels indulgent yet energizing. This small but mighty coffee packs a punch of flavor in every sip.",
                "price"=> 150,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Frappe",
                "img"=> "frappe",
                "description"=> "A cold blended coffee with sweet milk and ice.",
                "description2"=>" Ideal for warm weather, the Frappe is a cold, blended coffee drink that combines espresso, milk, ice, and sweetener for a refreshing and creamy beverage. Its chilled, frothy texture makes it a popular choice for those looking for a coffee with a dessert-like quality. Whether topped with whipped cream or flavored syrups, the Frappe provides a sweet escape for coffee lovers who prefer a cooler option without sacrificing flavor.",
                "price"=> 190,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Latte Macchiato",
                "img"=> "latte_macchiato",
                "description"=> "Layered drink with steamed milk, espresso, and milk foam.",
                "description2"=>" A beautifully layered drink, the Latte Macchiato offers a perfect combination of steamed milk, a shot of espresso, and a light foam topping. This drink is for those who enjoy a creamier coffee experience, as the milk takes center stage, creating a smooth and velvety texture. The espresso is 'marked' into the milk, giving the drink its name, and providing a gentle bitterness that complements the sweetness of the milk. It’s both elegant and comforting.",
                "price"=> 165,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Decaf",
                "img"=> "decaf",
                "description"=> "A coffee where caffeine has been removed.",
                "description2"=>"For those who want to enjoy the full flavor of coffee without the caffeine, Decaf offers a smooth, balanced option. Made from beans that have had the caffeine removed, Decaf still provides the rich taste of coffee but without the buzz, making it perfect for late afternoons or evenings. Its mild, slightly nutty flavor ensures that even without the kick of caffeine, you’re still left with a satisfying cup of coffee.",
                "price"=> 135,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Nitro Brewed",
                "img"=> "nitro",
                "description"=> "Coffee infused with nitrogen gas for a creamy texture.",
                "description2"=>"A cutting-edge coffee experience, Nitro Brewed coffee is cold brew infused with nitrogen gas, giving it a smooth and creamy texture unlike any other coffee. The nitrogen adds a rich, velvety foam, enhancing the drink’s natural sweetness and reducing the acidity typically found in regular cold brews. Served cold from a tap, this drink is both refreshing and unique, offering a new way to enjoy cold coffee with a luxurious mouthfeel.",
                "price"=> 210,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Caramel Macchiato",
                "img"=> "caramel",
                "description"=> "With vanilla syrup, milk, espresso, and caramel drizzle.",
                "description2"=>"A sweet and indulgent coffee drink, the Caramel Macchiato combines layers of espresso, steamed milk, vanilla syrup, and a rich caramel drizzle. The contrasting flavors of the espresso’s bitterness and the caramel’s sweetness create a drink that is both complex and satisfying. With every sip, you get a taste of the espresso’s boldness followed by the smoothness of milk and the lingering sweetness of caramel. It’s a perfect choice for those who love dessert-like coffees.",
                "price"=> 200,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
            [
                "title"=> "Matcha",
                "img"=> "matcha",
                "description"=> "A blend of matcha green tea and coffee for a caffeine boost.",
                "description2"=>"A unique blend of flavors, Matcha combines the earthy taste of green tea with the boldness of espresso, creating a drink that’s both energizing and flavorful. The vibrant green color of the matcha is complemented by the creamy texture of the milk, offering a refreshing alternative to traditional coffee drinks. Rich in antioxidants, this drink provides a clean, smooth caffeine boost, perfect for those looking for a blend of coffee and tea in one cup.",
                "price"=> 189,
                "rating"=> "",
                "reviews"=> "",
                "link"=> "/Add_to_Cart",
    
            ],
        ];

        foreach ($coffeeShopItems as $coffeeShopHomepage) {
            ShopHomepage::create($coffeeShopHomepage);
        }
    }
}
