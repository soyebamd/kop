<?php

$descriptionList = [
    //King of Prussia Tavern
    'KOP Grill & Tavern serves innovative sandwiches, entrees, appetizers, and drinks, along with shuffleboard, pool and poker leagues, bar games, and local events.',
    //King of Prussia Tavern Menu
    'King of Prussia Tavern serves delicious housemade soups, salads, sandwiches, and entrees seven days a week. Check out our oversized sandwiches and game day specials.',
    //King of Prussia Tavern Brunch
    'Saturday and Sunday Brunch at the King of Prussia Tavern features brunch classics plus our innovative appetizers, sandwiches, and craft cocktails.',
    //King of Prussia Tavern Desserts
    'If you\'re in the mood for a late-night or after-dinner dessert treat, the King of Prussia Tavern is the perfect spot to enjoy a boozy shake and our luscious desserts.',
    //Kids Dining King of Prussia Tavern
    'The King of Prussia Tavern is a comfortable and fun restaurant for family-friendly meals that satisfy your family or group\'s little and big members.',
    //King of Prussia Tavern Pool - Poker - Events
    'Sign up to play pool or poker at the King of Prussia Tavern in addition to special events throughout the month. Please have a look at our site for complete details.',
    //King of Prussia Tavern Photo Gallery
    'Take a peek at our delicious menu items served at the King of Prussia Tavern seven days a week.',
    //King of Prussia Tavern Directions
    'Directions and contact information for King of Prussia Tavern.',
    //King of Prussia Tavern About Us
    'Good times, great food, and delicious drinks have always been the motto of a group of Drexel OX fraternity brothers and friends and this is the backbone of the KOP Grill & Tavern in King of Prussia.',
    //Pizza
    'Pizza', 
    //Daily Specials
    ''
];

switch($title){
        case 'King of Prussia Tavern':
        $description = $descriptionList[0];
        break;

        case 'King of Prussia Tavern Menu':
            $description = $descriptionList[1];
        break;

        case 'King of Prussia Tavern Brunch':
            $description = $descriptionList[2];
        break;

        case 'King of Prussia Tavern Desserts':
            $description = $descriptionList[3];
        break;

        case 'Kids Dining King of Prussia Tavern':
            $description = $descriptionList[4];
        break;

        case 'King of Prussia Tavern Pool - Poker - Events':
            $description = $descriptionList[5];
        break;

        case 'King of Prussia Tavern Photo Gallery':
            $description = $descriptionList[6];
        break;

        case 'King of Prussia Tavern Directions':
            $description = $descriptionList[7];
        break;
        case 'King of Prussia Tavern About Us':
            $description = $descriptionList[8];
        break;
         case 'Daily Specials':
            $description = $descriptionList[9];
        break;
        case 'Beverages':
            $description = $descriptionList[10];
        break;
        case 'Pizza':
            $description = $descriptionList[9];
        break;
        default:
        $description = $descriptionList[0];
}
?>
<meta name="description" content="<?php echo $description; ?>">