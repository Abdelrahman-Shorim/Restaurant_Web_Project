-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `C_ID` int(10) NOT NULL,
  `U_ID` int(12) NOT NULL,
  `I_ID` int(12) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `ID` int(11) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`ID`, `Type`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `I_ID` int(10) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `img` varchar(250) NOT NULL,
  `I_Type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`I_ID`, `Name`, `Description`, `Price`, `img`, `I_Type`) VALUES
(1, 'Stuffed Mushroom', 'Hand battered and golden fresh mushroom stuffed with spicy cheese mix, served with a creamy blue cheese dip', '72.02', 'Restaurant_Web_Project/Menu_images/Appetizers/Stuffed Mushroom.jpg', 1),
(2, 'Chicken Strips', 'Five pieces of crispy fried chicken strips coated in panko herb breadcrumbs, dipped in tempura butter, served with honey mustard dip', '90.3', 'Restaurant_Web_Project/Menu_images/Appetizers/Chicken Strips.jpg', 1),
(3, 'Shrimp Konafa', 'Fried shrimp rolled in konafa strings with our special seasoning, served with sweet chili dip', '120.58', 'Restaurant_Web_Project/Menu_images/Appetizers/Shrimp Konafa.jpg', 1),
(4, 'Spinach Mushroom', 'Oven creamy stuffed mushroom with spinach and provolone cheese served with our special bread', '92.38', 'Restaurant_Web_Project/Menu_images/Appetizers/Spinach Mushroom.jpg', 1),
(5, 'Combo Platter', 'Stuffed mushrooms, chicken strips, fish fingers and fried mozzarella served with tartar, honey mustard, marinara and blue cheese dips', '126.84', 'Restaurant_Web_Project/Menu_images/Appetizers/Combo Platter.jpg', 1),
(6, 'Chicken Dynamite', 'Fried chicken poppers glazed in our spicy dynamite sauce served with crispy tempura vegetable bites', '97.86', 'Restaurant_Web_Project/Menu_images/Appetizers/Chicken Dynamite.jpg', 1),
(7, 'Aubergine Gratin', 'Oven baked eggplant in a bed of our house made tomato sauce topped with meaty bolognaise and cheesy bechamel gratin served with herbed garlic bread', '93.95', 'Restaurant_Web_Project/Menu_images/Appetizers/Aubergine Gratin.jpg', 1),
(8, 'Marinated Grilled Vegetables', 'Marinated chargrilled zucchini, eggplants, colored bell peppers, mushrooms and onions, served with pesto sauce', '59.49', 'Restaurant_Web_Project/Menu_images/Appetizers/Marinated Grilled Vegetables.jpg', 1),
(9, 'Fried Mozzarella', 'Crispy fried golden mozzarella sticks served with marinara dip', '76.72', 'Restaurant_Web_Project/Menu_images/Appetizers/Fried Mozzarella.jpg', 1),
(10, 'Beef Fillet Three Sauces', 'Three pieces of medallion charbroiled fillet, topped with three sauces (pepper, mushroom and blue cheese) served with rice and sauteed vegetables', '252.15', 'Restaurant_Web_Project/Menu_images/Beef/Beef Fillet Three Sauces.jpg', 2),
(11, 'Diana Steak', 'Charbroiled beef steak in brown sauce, mustard seeds and mushrooms, served with rice and sauteed vegetables', '241.97', 'Restaurant_Web_Project/Menu_images/Beef/Diana Steak.jpg', 2),
(12, 'Fillet Oyster Sauce', 'Charbroiled beef fillet strips with oyster sauce, colored bell peppers, onions and mushrooms, served with sauteed onions, rice and sauteed vegetables', '252.15', 'Restaurant_Web_Project/Menu_images/Beef/Fillet Oyster Sauce.jpg', 2),
(13, 'Beef Teriyaki', 'Charbroiled beef fillet strips, glazed with teriyaki sauce, beans and fresh spinach, served with noodles', '252.15', 'Restaurant_Web_Project/Menu_images/Beef/Beef Teriyaki.jpg', 2),
(14, 'Pepper Soy Glazed Beef', 'Diced beef fillet glazed in a rich pepper soy sauce served with basmati rice and fresh green beans', '241.97', 'Restaurant_Web_Project/Menu_images/Beef/Pepper Soy Glazed Beef.jpg', 2),
(15, 'New York Strip Loin', 'Classic charbroiled imported strip loin steak served with Worcestershire sauce (onion jam) and potato gratin, garnished with chopped chives', '311.67', 'Restaurant_Web_Project/Menu_images/Beef/New York Strip Loin.jpg', 2),
(16, 'Rib-Eye', '300gm of prime rib-eye steak, charbroiled to your choice, topped with cafe de Paris butter, served with spinach Florentine, mixed vegetables and rosemary roasted whole potato', '322.64', 'Restaurant_Web_Project/Menu_images/Beef/Rib-Eye.jpg', 2),
(17, 'Grilled Chicken', 'Charbroiled chicken breasts in our special marinade, served with French fries and sauteed vegetables', '144.85', 'Restaurant_Web_Project/Menu_images/Chicken/Grilled Chicken.jpg', 3),
(18, 'Herb & Fereek Chicken', 'Half boneless grilled chicken in an oriental herb marinade, with Egyptian fereek served with our special pine nut gravy sauce, roasted baby potatoes and sauteed pumpkin', '155.04', 'Restaurant_Web_Project/Menu_images/Chicken/Herb & Fereek Chicken.jpg', 3),
(19, 'Chicken Lemon Dill', 'Chicken breast cubes, tossed in a creamy lemon dill sauce, served with mashed potatoes and sauteed vegetables', '151.90', 'Restaurant_Web_Project/Menu_images/Chicken/Chicken Lemon Dill.jpg', 3),
(20, 'Chicken Cordon Rose', 'Breaded chicken breast stuffed with smoked salmon and emmental cheese, topped with a creamy cheese sauce, served with rice and sauteed vegetables', '162.87', 'Restaurant_Web_Project/Menu_images/Chicken/Chicken Cordon Rose.jpg', 3),
(21, 'Chicken MCM', 'Crispy fried chicken breast topped with mushrooms, onions and melted mozzarella cheese, served with French fries and sauteed vegetables', '155.04', 'Restaurant_Web_Project/Menu_images/Chicken/Chicken MCM.jpg', 3),
(22, 'Turkey Scaloppini', 'Our special breaded turkey served with creamy spaghetti pesto sauce', '169.92', 'Restaurant_Web_Project/Menu_images/Chicken/Turkey Scaloppini.jpg', 3),
(23, 'Chocolate Fondant', 'Our famous chocolate fondant stuffed with hot chocolate sauce topped with chocolate and caramel, served with a scoop of ice cream', '93.95', 'Restaurant_Web_Project/Menu_images/Desserts/Chocolate Fondant.jpg', 4),
(24, 'Date Tulip', 'Tulip biscuit topped with caramel and caramelized dates, served with a scoop of ice cream', '79.07', 'Restaurant_Web_Project/Menu_images/Desserts/Date Tulip.jpg', 4),
(25, 'Mini Cheesecake', '3 different flavors of mini cheesecake (strawberry, caramel and chocolate)', '72.02', 'Restaurant_Web_Project/Menu_images/Desserts/Mini Cheesecake.jpg', 4),
(26, 'Ice Cream', 'Three flavored ice cream (Chocolate, Vanilla, Strawberry) with their sauces ', '35.99', 'Restaurant_Web_Project/Menu_images/Desserts/Ice Cream.jpg', 4),
(27, 'Trio Fruits Tartlets', 'Apple hibiscus, raspberry, banana caramel tartlets topped with cream cheese icing crispy croquant', '81.41', 'Restaurant_Web_Project/Menu_images/Desserts/Trio Fruits Tartlets.jpg', 4),
(28, 'Lotus Konafa Bomb', 'Our signature lava mixed cheese melt in a crusted lotus biscuits topped with konafa and pistachio, served with lotus infused ice cream and caramel lotus sauce topped with flower petals', '92.38', 'Restaurant_Web_Project/Menu_images/Desserts/Lotus Konafa Bomb.jpg', 4),
(29, 'Coffee Toffee Crumble', 'Crumbly lotus biscuit cake with vanilla ice cream and white chocolate, topped with crunchy croquant pieces and served with homemade coffee syrup', '74.37', 'Restaurant_Web_Project/Menu_images/Desserts/Coffee Toffee Crumble.jpg', 4),
(30, 'Chocolate Chip Lava Cake', 'Delicious chocolate chip cookie dough cake with a smooth chocolate center, served with vanilla ice cream', '76.72', 'Restaurant_Web_Project/Menu_images/Desserts/Chocolate Chip Lava Cake.jpg', 4),
(31, 'Pina Colada', 'Pineapple juice, coconut and sweet pineapple rings', '46.17', 'Restaurant_Web_Project/Menu_images/Drinks/Pina Colada.jpg', 5),
(32, 'Strawberry Sensation', 'Fresh strawberry puree, sweet & sour mix, cranberry juice, black pepper and a dash of hot sauce', '46.95', 'Restaurant_Web_Project/Menu_images/Drinks/Strawberry Sensation.jpg', 5),
(33, 'Vimtojito', 'Flavorful vimto and mojito syrup added to a sweet & sour mix with 7up, topped with fresh mint leaves and vimto cotton candy', '45.39', 'Restaurant_Web_Project/Menu_images/Drinks/Vimtojito.jpg', 5),
(34, 'Pineapple Rosemary Crush', 'Fresh rosemary, pineapple juice and fresh ginger', '45.39', 'Restaurant_Web_Project/Menu_images/Drinks/Pineapple Rosemary Crush.jpg', 5),
(35, 'Mango', 'Fresh Mango drink', '46.17', 'Restaurant_Web_Project/Menu_images/Drinks/Mango.jpg', 5),
(36, 'Lemon', 'Fresh Lemon drink', '46.17', 'Restaurant_Web_Project/Menu_images/Drinks/Lemon.jpg', 5),
(37, 'Lemon Mint', 'Fresh Lemon drink with Mint flavor', '46.17', 'Restaurant_Web_Project/Menu_images/Drinks/Lemon Mint.jpg', 5),
(38, 'Strawberry', 'Fresh Strawberry drink', '46.17', 'Restaurant_Web_Project/Menu_images/Drinks/Strawberry.jpg', 5),
(39, 'Orange', 'Fresh Orange drink', '46.17', 'Restaurant_Web_Project/Menu_images/Drinks/Orange.jpg', 5),
(40, 'Fayrouz Pineapple', 'A cold can Fayrouz drink ', '28.16', 'Restaurant_Web_Project/Menu_images/Drinks/Fayrouz Pineapple.jpg', 5),
(41, 'Birell', 'A cold can Birell drink', '28.16', 'Restaurant_Web_Project/Menu_images/Drinks/Birell.jpg', 5),
(42, 'Chocolate Shake', 'Milk, chocolate ice cream and chocolate syrup', '49.30', 'Restaurant_Web_Project/Menu_images/Drinks/Chocolate Shake.jpg', 5),
(43, 'Black Forest Shake', 'Milk, vanilla ice cream and chocolate sauce, topped with crushed hazelnuts', '56.35', 'Restaurant_Web_Project/Menu_images/Drinks/Black Forest Shake.jpg', 5),
(44, 'Jersey Bar Frappe', 'Coconut, cocoa, milk and rice', '41.47', 'Restaurant_Web_Project/Menu_images/Drinks/Jersey Bar Frappe.jpg', 5),
(45, 'Americano', 'A very Tasteful Americano drink ', '39.90', 'Restaurant_Web_Project/Menu_images/Drinks/Americano.jpg', 5),
(46, 'Cappuccino', 'A very Tasteful Cappuccino drink ', '43.04', 'Restaurant_Web_Project/Menu_images/Drinks/Cappuccino.jpg', 5),
(47, 'Chicken Strips', 'Three pieces of crispy fried chicken strips hand battered in panko breadcrumbs, served with French fries or spaghetti red sauce', '67.32', 'Restaurant_Web_Project/Menu_images/Kids/Chicken Strips.jpg', 6),
(48, 'Mini Beef Burger', 'Two mini burgers, served with French fries', '67.32', 'Restaurant_Web_Project/Menu_images/Kids/Mini Beef Burger.jpg', 6),
(49, 'Mini Whole-Wheat Veggie Pizza', 'Whole-wheat dough with pesto sauce, buffalo cheese, colored bell peppers and aubergine, topped with rucola', '67.32', 'Restaurant_Web_Project/Menu_images/Kids/Mini Whole-Wheat Veggie Pizza.jpg', 6),
(50, 'Red Sauce Pasta', 'Your choice of farfalle, penne or spaghetti pasta, in our aromatic red basil sauce', '67.32', 'Restaurant_Web_Project/Menu_images/Kids/Red Sauce Pasta.jpg', 6),
(51, 'White Sauce Pasta', 'Your choice of farfalle, penne or spaghetti pasta, in our creamy white sauce', '67.32', 'Restaurant_Web_Project/Menu_images/Kids/White Sauce Pasta.jpg', 6),
(52, 'Mini Margherita Pizza', 'Mozzarella cheese and tomato sauce', '67.32', 'Restaurant_Web_Project/Menu_images/Kids/Mini Margherita Pizza.jpg', 6),
(53, 'Farfalle Salmon', 'Farfalle pasta in a delicate creamy sauce with parsley garnish topped with smoked salmon', '157.39', 'Restaurant_Web_Project/Menu_images/Pasta/Farfalle Salmon.jpg', 7),
(54, 'Penne Arabiatta', 'Penne pasta in a hearty spicy basil tomato sauce', '97.86', 'Restaurant_Web_Project/Menu_images/Pasta/Penne Arabiatta.jpg', 7),
(55, 'Fettuccine Chicken Alfredo', 'Fettuccine pasta, chicken strips and mushrooms, tossed in rich creamy alfredo sauce', '125.27', 'Restaurant_Web_Project/Menu_images/Pasta/Fettuccine Chicken Alfredo.jpg', 7),
(56, 'Steak & Mushroom Pasta', 'Fettuccine pasta in a creamy balsamic sauce with roasted mushrooms, chopped parsley and pan seared steak strips, with fresh basil on top', '153.47', 'Restaurant_Web_Project/Menu_images/Pasta/Steak & Mushroom Pasta.jpg', 7),
(57, 'Cajun Shrimp Pasta', 'Spaghetti pasta in a creamy sauce with colored bell peppers, onions, mushrooms and cajun spiced shrimp served with fresh basil on top', '168.35', 'Restaurant_Web_Project/Menu_images/Pasta/Cajun Shrimp Pasta.jpg', 7),
(58, 'Penne Fried Chicken', 'Breaded chicken breast stuffed with cheese and mushrooms, sliced on top of penne pasta tossed in our fresh tomato basil sauce, with fresh basil on top', '137.02', 'Restaurant_Web_Project/Menu_images/Pasta/Penne Fried Chicken.jpg', 7),
(59, 'Seafood Pasta', 'Spaghetti pasta in rich red sauce tossed with shrimp, calamari, fish and mushrooms (Recommended with white sauce)', '165.22', 'Restaurant_Web_Project/Menu_images/Pasta/Seafood Pasta.jpg', 7),
(60, 'Almost Lasagne', 'Skillet tossed bolognaise pasta topped with cheesy bechamel gratin and a drizzle of pesto oil', '129.97', 'Restaurant_Web_Project/Menu_images/Pasta/Almost Lasagne.jpg', 7),
(61, 'Wild Mushroom & Truffle Oil Pasta', 'A slow simmered wild creamy mushroom sauce topped with parmesan tagliatelle and infused with a drizzle of truffle oil', '144.85', 'Restaurant_Web_Project/Menu_images/Pasta/Wild Mushroom & Truffle Oil Pasta.jpg', 7),
(62, 'Margherita', 'Mozzarella cheese and dried oregano', '101.78', 'Restaurant_Web_Project/Menu_images/Pizza/Margherita.jpg', 8),
(63, 'Vegetarian', 'Mozzarella cheese, mushrooms, olives and colored bell peppers and sweet corn', '109.61', 'Restaurant_Web_Project/Menu_images/Pizza/Vegetarian.jpg', 8),
(64, 'Fungi', 'Mozzarella cheese and fresh mushrooms', '116.66', 'Restaurant_Web_Project/Menu_images/Pizza/Fungi.jpg', 8),
(65, 'Quattro Formaggi', 'Four kinds of cheese (mozzarella, parmesan, blue cheese and mixed red & yellow cheddar)', '125.27', 'Restaurant_Web_Project/Menu_images/Pizza/Quattro Formaggi.jpg', 8),
(66, 'Frutti Di Mare', 'Mozzarella cheese, shrimp, calamari and parsley', '156.60', 'Restaurant_Web_Project/Menu_images/Pizza/Frutti Di Mare.jpg', 8),
(67, 'Pepperoni', 'Mozzarella cheese, pepperoni and dried oregano', '123.71', 'Restaurant_Web_Project/Menu_images/Pizza/Pepperoni.jpg', 8),
(68, 'BBQ Chicken', 'Mozzarella cheese, chicken with BBQ sauce and colored bell peppers', '122.14', 'Restaurant_Web_Project/Menu_images/Pizza/BBQ Chicken.jpg', 8),
(69, 'Whole-Wheat Veggie', 'Whole-wheat dough, pesto sauce, buffalo cheese, grilled aubergine and colored bell peppers, topped with rucola', '104.13', 'Restaurant_Web_Project/Menu_images/Pizza/Whole-Wheat Veggie.jpg', 8),
(70, 'Steak Pizza', 'Roasted beef fillet strips, mixed peppers, provolone cheese, and homemade garlic confit paste, served with our signature spinach and artichoke sauce', '146.42', 'Restaurant_Web_Project/Menu_images/Pizza/Steak Pizza.jpg', 8),
(71, 'Fungi Salad', 'Mushroom slices served on a bed of green rucola, topped with parmesan cheese, tossed in balsamic vinaigrette', '75.15', 'Restaurant_Web_Project/Menu_images/Salads/Fungi Salad.jpg', 9),
(72, 'Salmon Salad', 'Smoked salmon slices served on a bed of green rucola, topped with marinated avocado, mushrooms and parmesan cheese, tossed in balsamic vinaigrette', '133.89', 'Restaurant_Web_Project/Menu_images/Salads/Salmon Salad.jpg', 9),
(73, 'Caesar Salad', 'Crisp iceberg lettuce tossed in caesar dressing, mixed with parmesan cheese and croutons', '76.72', 'Restaurant_Web_Project/Menu_images/Salads/Caesar Salad.jpg', 9),
(74, 'Chicken Caesar Salad', 'Grilled chicken strips served on crisp iceberg lettuce, tossed in caesar dressing mixed with parmesan cheese and croutons', '112.74', 'Restaurant_Web_Project/Menu_images/Salads/Chicken Caesar Salad.jpg', 9),
(75, 'Taco Salad', 'Chicken cubes, sweet corn, shredded lettuce, caramelized walnuts, onions, mixed cheese and tomatoes served in a crispy fried tortilla shell, topped with ranch dressing', '115.88', 'Restaurant_Web_Project/Menu_images/Salads/Taco Salad.jpg', 9),
(76, 'Cajun Chicken Salad', 'Crispy grilled cajun chicken strips served with mixed greens, beef bacon, sweet corn and spicy toasted almonds, tossed in cajun sauce', '113.53', 'Restaurant_Web_Project/Menu_images/Salads/Cajun Chicken Salad.jpg', 9),
(77, 'Chicken Quinoa Salad', 'Mixed leaves, grilled chicken, quinoa, cherry tomatoes tossed in our sweet dressing with Greek feta cheese, bruschettas on top', '120.58', 'Restaurant_Web_Project/Menu_images/Salads/Chicken Quinoa Salad.jpg', 9),
(78, 'Grilled Shrimp Guacamole', 'Mixed leaves, cherry tomatoes, sweet corn, pineapple and dried apricot slices tossed in herb lemon dressing with marinated grilled shrimp skewers and fresh guacamole on top', '131.54', 'Restaurant_Web_Project/Menu_images/Salads/Grilled Shrimp Guacamole.jpg', 9),
(79, 'Classic Greek Salad', 'Greek feta cheese, cucumber, cherry tomatoes, red onions, yellow bell peppers, kalamata olives and fresh oregano leaves in a light citrus olive oil vinaigrette', '79.07', 'Restaurant_Web_Project/Menu_images/Salads/Classic Greek Salad.jpg', 9),
(80, 'Zombie Burger (Mushroom & Cheese)', 'Our juicy homemade beef burger, with cheese, mushrooms and onions, served with BBQ sauce and French fries', '136.24', 'Restaurant_Web_Project/Menu_images/Sandwiches/Zombie Burger (Mushroom & Cheese).jpg', 10),
(81, 'Zombie Burger (BBQ and Beef Bacon)', 'Our juicy homemade beef burger, with beef bacon and onions, served with BBQ sauce and French fries', '136.24', 'Restaurant_Web_Project/Menu_images/Sandwiches/Zombie Burger (BBQ and Beef Bacon).jpg', 10),
(82, 'Club Sandwich', 'Smoked turkey, chicken breasts, cheese, lettuce, pickled cucumber and tomatoes, topped with mayo dressing', '122.14', 'Restaurant_Web_Project/Menu_images/Sandwiches/Club Sandwich.jpg', 10),
(83, 'Chicken Caesar Sandwich', 'Grilled chicken with romaine lettuce, caesar dressing and emmental cheese', '124.49', 'Restaurant_Web_Project/Menu_images/Sandwiches/Chicken Caesar Sandwich.jpg', 10),
(84, 'Mini Burgers', 'Four mini beef burgers, served with French fries', '121.36', 'Restaurant_Web_Project/Menu_images/Sandwiches/Mini Burgers.jpg', 10),
(85, 'Smoked Salmon Sandwich', 'Smoked salmon, rucola mushroom salad with onions and tomatoes, served in brown bread', '150.34', 'Restaurant_Web_Project/Menu_images/Sandwiches/Smoked Salmon Sandwich.jpg', 10),
(86, 'Philly Cheese Bowl Sandwich', 'Bread bowl filled with grilled steak strips, mushrooms and bell peppers all topped with cheesy gratin, served with French fries and our spicy dynamite dip', 'Bread bowl filled with grilled steak strips, mushr', 'Restaurant_Web_Project/Menu_images/Sandwiches/Philly Cheese Bowl Sandwich.jpg', 10),
(87, 'Chicken Chimichurri Sandwich', 'Grilled marinated spicy chimichurri chicken and melted provolone cheese in a ciabatta bread with guacamole, rocca and sliced tomato, served with French fries and our spicy dynamite dip', '127.62', 'Restaurant_Web_Project/Menu_images/Sandwiches/Chicken Chimichurri Sandwich.jpg', 10),
(88, 'Taco In Style', 'A trio experience of soft tacos, chilli beef, chicken guacamole and sriracha shrimp topped with mixed cheese and tahini paste sauce', '119.01', 'Restaurant_Web_Project/Menu_images/Sandwiches/Taco In Style.jpg', 10),
(89, 'Lemon Butter Fish', 'Fish fillet in lemon butter sauce, served with rice and sauteed vegetables', '156.60', 'Restaurant_Web_Project/Menu_images/Seafood/Lemon Butter Fish.jpg', 11),
(90, 'Chilli Shrimp', 'Shrimp and assorted vegetables in chilli sauce, served with stir fried Chinese rice with eggs and sauteed vegetables', '220.83', 'Restaurant_Web_Project/Menu_images/Seafood/Chilli Shrimp.jpg', 11),
(91, 'Fish A La Capri', 'Fish fillet with olive oil, lemon and capri sauce, served with rucola, topped with spicy French dressing', '162.09', 'Restaurant_Web_Project/Menu_images/Seafood/Fish A La Capri.jpg', 11),
(92, 'Salmon Teriyaki', 'Norwegian fresh salmon fillet glazed with teriyaki sauce, green beans, leeks and fresh spinach, served with glass noodles', '256.07', 'Restaurant_Web_Project/Menu_images/Seafood/Salmon Teriyaki.jpg', 11),
(93, 'Bonne Femme', 'Homemade marinated seafood mix (shrimps, calamari, and fresh fish) with bechamel sauce, mushroom, covered with mozzarella cheese and served with rice and sauteed vegetables', '187.15', 'Restaurant_Web_Project/Menu_images/Seafood/Bonne Femme.jpg', 11),
(94, 'Sriracha Salmon', 'Sriracha glazed salmon steak served with creamy green pea mash loaded parmesan and stir fry vegetables topped with cucumber seaweed salad', '256.07', 'Restaurant_Web_Project/Menu_images/Seafood/Sriracha Salmon.jpg', 11),
(95, 'Tomato Soup', 'A hot delicious Tomato Soup', '56.35', 'Restaurant_Web_Project/Menu_images/Soups/Tomato Soup.jpg', 12),
(96, 'Onion Soup', 'A hot delicious Onion Soup', '56.35', 'Restaurant_Web_Project/Menu_images/Soups/Onion Soup.jpg', 12),
(97, 'Chicken Soup', 'A hot delicious Chicken Soup', '61.83', 'Restaurant_Web_Project/Menu_images/Soups/Chicken Soup.jpg', 12),
(98, 'Mushroom Soup', 'A hot delicious Mushroom Soup', '61.83', 'Restaurant_Web_Project/Menu_images/Soups/Mushroom Soup.jpg', 12),
(99, 'Vegetable Lentil Soup', 'Whole yellow lentil and vegetable soup, with spinach and green onion and leek garnish on top', '54.00', 'Restaurant_Web_Project/Menu_images/Soups/Vegetable Lentil Soup.jpg', 12),
(100, 'Veal Parmesan', '3 pieces of marinated veal piccata, hand breaded with parmesan cheese and Japanese breadcrumbs, served with spaghetti red sauce and side Italian dressing', '230.22', 'Restaurant_Web_Project/Menu_images/Veal/Veal Parmesan.jpg', 13),
(101, 'Veal Pepper', 'Veal piccata with pepper sauce, served with mashed potatoes and sauteed vegetables', '225.53', 'Restaurant_Web_Project/Menu_images/Veal/Veal Pepper.jpg', 13),
(102, 'Veal Mushroom', 'Veal piccata with mushroom sauce, served with mashed potatoes and sauteed vegetables', '225.53', 'Restaurant_Web_Project/Menu_images/Veal/Veal Mushroom.jpg', 13),
(103, 'Veal Brown Lemon', 'Veal piccata with brown lemon sauce, served with mashed potatoes and sauteed vegetables', '225.53', 'Restaurant_Web_Project/Menu_images/Veal/Veal Brown Lemon.jpg', 13),
(104, 'Veal Rosemary', 'Veal piccata with rosemary sauce, served with mashed potatoes and sauteed vegetables', '225.53', 'Restaurant_Web_Project/Menu_images/Veal/Veal Rosemary.jpg', 13),
(105, 'Veal Mustard', 'Veal piccata with mustard sauce, served with mashed potatoes and sauteed vegetables', '225.53', 'Restaurant_Web_Project/Menu_images/Veal/Veal Mustard.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `item_types`
--

CREATE TABLE `item_types` (
  `ID` int(10) NOT NULL,
  `I_Type` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_types`
--

INSERT INTO `item_types` (`ID`, `I_Type`, `description`, `image`) VALUES
(1, 'Appetizers', 'Consider ordering a favorite appetizer and adding a large vegetable salad to go along with it.', '/Restaurant_Web_Project/Menu_images/home/Appetizers.jpg'),
(2, 'Beef', 'A tender, flavorful,Cooked to order, served with sides that you choose, Cooked to perfection.', '/Restaurant_Web_Project/Menu_images/home/Beef.jpg'),
(3, 'Chicken', 'From grilled chicken to Grand Restaurant chicken and shrimp fajita, our irresistible chicken dishes are very savory, topped with one of our mysteriously tasty sauces.', '/Restaurant_Web_Project/Menu_images/home/Chicken.jpg'),
(4, 'Desserts', 'When it comes to dessert, the answer is always yes. Whether it is a cheesecake, brownies on ices or Oreo madness, you are to enjoy a fabulously amazing dessert.', '/Restaurant_Web_Project/Menu_images/home/Desserts.png'),
(5, 'Drinks', 'Whether it is a fizzy drink or a natural juice, out cold drinks are the perfect accompaniments to your meal. Order one, get hydrated and stay cool!', '/Restaurant_Web_Project/Menu_images/home/Drinks.jpeg'),
(6, 'Kids', '', '/Restaurant_Web_Project/Menu_images/home/Kids.jpg'),
(7, 'Pasta', 'Whether it is spaghetti meatballs, penne arrabbiata or chicken mushroom pasta, Sizzler’s Pasta dishes are to melt in your mouth, accompanied by a blast of flavor.', '/Restaurant_Web_Project/Menu_images/home/Pasta.png'),
(8, 'Pizza', '', '/Restaurant_Web_Project/Menu_images/home/Pizza.jpg'),
(9, 'Salads', 'Discover all of our innovative selection of salads. From a simple mix green salad to a more flavorful strawberry one which are seriously over the top delicious.', '/Restaurant_Web_Project/Menu_images/home/Salads.jpg'),
(10, 'Sandwiches', 'Cheer up your taste buds and tickle your appetite with one of our sandwiches.All our sandwiches contain no additives, no preservatives.', '/Restaurant_Web_Project/Menu_images/home/Sandwiches.jpg'),
(11, 'Seafood', 'Grand Restaurant\'s seafood dishes are fabulously delicious and cooked to perfection. Grilled salmon and shrimp, fish fillet and seafood platter are sure to impress.', '/Restaurant_Web_Project/Menu_images/home/Seafood.png'),
(12, 'Soups', 'Kick off your meal in style with our most-loved soups. Try our classic onion soup, cream of chicken soup, seafood bisque soup and creamy seafood.', '/Restaurant_Web_Project/Menu_images/home/Soups.jpg'),
(13, 'Veal', '', '/Restaurant_Web_Project/Menu_images/home/Veal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `O_ID` int(10) NOT NULL,
  `U_ID` int(10) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Pickup_Type` int(10) NOT NULL,
  `Total_Price` varchar(10) NOT NULL,
  `Payment_Method` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `OI_ID` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `I_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `P_ID` int(11) NOT NULL,
  `method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`P_ID`, `method`) VALUES
(1, 'cash'),
(2, 'visa');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_type`
--

CREATE TABLE `pickup_type` (
  `ID` int(11) NOT NULL,
  `pickup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_type`
--

INSERT INTO `pickup_type` (`ID`, `pickup`) VALUES
(1, 'on-site'),
(2, 'take-away');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `R_ID` int(10) NOT NULL,
  `U_ID` int(10) NOT NULL,
  `I_ID` int(10) NOT NULL,
  `rate` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sandwich_items`
--

CREATE TABLE `sandwich_items` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `img` varchar(300) NOT NULL,
  `Type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sandwich_items`
--

INSERT INTO `sandwich_items` (`ID`, `Name`, `price`, `img`, `Type`) VALUES
(1, 'RYE', 15, '/Restaurant_Web_Project/images/1/RYE.png', 1),
(2, 'CROISSANT', 15, '/Restaurant_Web_Project/images/1/CROISSANT.png', 1),
(3, 'WHOLE_WHEAT', 15, '/Restaurant_Web_Project/images/1/WHOLE_WHEAT.png', 1),
(4, 'WHITE', 15, '/Restaurant_Web_Project/images/1/WHITE.png', 1),
(5, 'GLUTEN_FREE', 15, '/Restaurant_Web_Project/images/1/GLUTEN_FREE.png', 1),
(6, 'TURKEY', 20, '/Restaurant_Web_Project/images/2/TURKEY.png', 2),
(7, 'ROAST_BEEF', 20, '/Restaurant_Web_Project/images/2/ROAST_BEEF.png', 2),
(8, 'HAM', 20, '/Restaurant_Web_Project/images/2/HAM.png', 2),
(9, 'PROSCIUTTO', 20, '/Restaurant_Web_Project/images/2/PROSCIUTTO.png', 2),
(10, 'CORNED_BEEF', 20, '/Restaurant_Web_Project/images/2/CORNED_BEEF.png', 2),
(11, 'PASTRAMI', 20, '/Restaurant_Web_Project/images/2/PASTRAMI.png', 2),
(12, 'GENOA_SALAMI', 20, '/Restaurant_Web_Project/images/2/GENOA_SALAMI.png', 2),
(13, 'SOPPRESSATA', 20, '/Restaurant_Web_Project/images/2/SOPPRESSATA.png', 2),
(14, 'CAPOCOLLO', 20, '/Restaurant_Web_Project/images/2/CAPOCOLLO.png', 2),
(15, 'PEPPERONI', 20, '/Restaurant_Web_Project/images/2/PEPPERONI.png', 2),
(16, 'BAKED_CHICKEN', 20, '/Restaurant_Web_Project/images/2/BAKED_CHICKEN.png', 2),
(17, 'BACON', 20, '/Restaurant_Web_Project/images/2/BACON.png', 2),
(18, 'CHICKEN_SALAD', 20, '/Restaurant_Web_Project/images/2/CHICKEN_SALAD.png', 2),
(19, 'TUNA_SALAD', 20, '/Restaurant_Web_Project/images/2/TUNA_SALAD.png', 2),
(20, 'EGG_SALAD', 20, '/Restaurant_Web_Project/images/2/EGG_SALAD.png', 2),
(21, 'SWISS', 10, '/Restaurant_Web_Project/images/3/SWISS.png', 3),
(22, 'PROVOLONE', 10, '/Restaurant_Web_Project/images/3/PROVOLONE.png', 3),
(23, 'MOZZARELLA', 10, '/Restaurant_Web_Project/images/3/MOZZARELLA.png', 3),
(24, 'CHEDDAR', 10, '/Restaurant_Web_Project/images/3/CHEDDAR.png', 3),
(25, 'PEPPER_JACK', 10, '/Restaurant_Web_Project/images/3/PEPPER_JACK.png', 3),
(26, 'MUENSTER', 10, '/Restaurant_Web_Project/images/3/MUENSTER.png', 3),
(27, 'AMERICAN', 10, '/Restaurant_Web_Project/images/3/AMERICAN.png', 3),
(28, 'BRIE', 10, '/Restaurant_Web_Project/images/3/BRIE.png', 3),
(29, 'RICOTTA', 10, '/Restaurant_Web_Project/images/3/RICOTTA.png', 3),
(30, 'PARMESAN', 10, '/Restaurant_Web_Project/images/3/PARMESAN.png', 3),
(31, 'FETA', 10, '/Restaurant_Web_Project/images/3/FETA.png', 3),
(32, 'TOMATOES', 10, '/Restaurant_Web_Project/images/4/TOMATOES.png', 4),
(33, 'LETTUCE', 10, '/Restaurant_Web_Project/images/4/LETTUCE.png', 4),
(34, 'ONIONS', 10, '/Restaurant_Web_Project/images/4/ONIONS.png', 4),
(35, 'ARUGULA', 10, '/Restaurant_Web_Project/images/4/ARUGULA.png', 4),
(36, 'SPINACH', 10, '/Restaurant_Web_Project/images/4/SPINACH.png', 4),
(37, 'KALE', 10, '/Restaurant_Web_Project/images/4/KALE.png', 4),
(38, 'ALFALFA_SPROUTS', 10, '/Restaurant_Web_Project/images/4/ALFALFA_SPROUTS.png', 4),
(39, 'CUCUMBERS', 10, '/Restaurant_Web_Project/images/4/CUCUMBERS.png', 4),
(40, 'PICKLES', 10, '/Restaurant_Web_Project/images/4/PICKLES.png', 4),
(41, 'MUSHROOMS', 10, '/Restaurant_Web_Project/images/4/MUSHROOMS.png', 4),
(42, 'OLIVES', 10, '/Restaurant_Web_Project/images/4/OLIVES.png', 4),
(43, 'BANANA_PEPPERS', 10, '/Restaurant_Web_Project/images/4/BANANA_PEPPERS.png', 4),
(44, 'JALAPENOS', 10, '/Restaurant_Web_Project/images/4/JALAPENOS.png', 4),
(45, 'ROASTED_RED_PEPPERS', 10, '/Restaurant_Web_Project/images/4/ROASTED_RED_PEPPERS.png', 4),
(46, 'SLICED_APPLE', 10, '/Restaurant_Web_Project/images/4/SLICED_APPLE.png', 4),
(47, 'COLESLAW', 10, '/Restaurant_Web_Project/images/4/COLESLAW.png', 4),
(48, 'SAUERKRAUT', 10, '/Restaurant_Web_Project/images/4/SAUERKRAUT.png', 4),
(49, 'KETTLE_COOKED_CHIPS', 10, '/Restaurant_Web_Project/images/4/KETTLE_COOKED_CHIPS.png', 4),
(50, 'AVOCADO', 10, '/Restaurant_Web_Project/images/4/AVOCADO.png', 4),
(51, 'MAYONNAISE', 5, '/Restaurant_Web_Project/images/5/MAYONNAISE.png', 5),
(52, 'SPICY_MATONNAISE', 5, '/Restaurant_Web_Project/images/5/SPICY_MATONNAISE.png', 5),
(53, 'SPICY_BROWN_MUSTARD', 5, '/Restaurant_Web_Project/images/5/SPICY_BROWN_MUSTARD.png', 5),
(54, 'DIJON_MUSTARD', 5, '/Restaurant_Web_Project/images/5/DIJON_MUSTARD.png', 5),
(55, 'HONEY_MUSTARD', 5, '/Restaurant_Web_Project/images/5/HONEY_MUSTARD.png', 5),
(56, 'OIL&VINEGAR', 5, '/Restaurant_Web_Project/images/5/OIL&VINEGAR.png', 5),
(57, 'PESTO', 5, '/Restaurant_Web_Project/images/5/PESTO.png', 5),
(58, 'BALSAMIC_DRESSING', 5, '/Restaurant_Web_Project/images/5/BALSAMIC_DRESSING.png', 5),
(59, 'RUSSIAN_DRESSING', 5, '/Restaurant_Web_Project/images/5/RUSSIAN_DRESSING.png', 5),
(60, 'HORSERADISH', 5, '/Restaurant_Web_Project/images/5/HORSERADISH.png', 5),
(61, 'BBQ_SAUCE', 5, '/Restaurant_Web_Project/images/5/BBQ_SAUCE.png', 5),
(62, 'RANCH', 5, '/Restaurant_Web_Project/images/5/RANCH.png', 5),
(63, 'TZATZIKI', 5, '/Restaurant_Web_Project/images/5/TZATZIKI.png', 5),
(64, 'SRIRACHA', 5, '/Restaurant_Web_Project/images/5/SRIRACHA.png', 5),
(65, 'THAI_PEANUT', 5, '/Restaurant_Web_Project/images/5/THAI_PEANUT.png', 5),
(66, 'HONEY', 5, '/Restaurant_Web_Project/images/5/HONEY.png', 5),
(67, 'HUMMUS', 5, '/Restaurant_Web_Project/images/5/HUMMUS.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sandwich_order`
--

CREATE TABLE `sandwich_order` (
  `SO_ID` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sandwich_order_details`
--

CREATE TABLE `sandwich_order_details` (
  `SOD_ID` int(11) NOT NULL,
  `SO_ID` int(11) NOT NULL,
  `S_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sandwich_types`
--

CREATE TABLE `sandwich_types` (
  `ID` int(11) NOT NULL,
  `Type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sandwich_types`
--

INSERT INTO `sandwich_types` (`ID`, `Type`) VALUES
(1, 'Bread'),
(2, 'Protein'),
(3, 'Cheese'),
(4, 'Toppings'),
(5, 'Sauces');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(10) NOT NULL,
  `FN` varchar(25) NOT NULL,
  `LN` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `National_ID` bigint(50) NOT NULL,
  `Gender` int(5) NOT NULL,
  `Phone_Num` varchar(15) NOT NULL,
  `U_Type` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `ID` int(10) NOT NULL,
  `user_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`ID`, `user_Type`) VALUES
(1, 'customer'),
(2, 'cashier'),
(3, 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `I_ID` (`I_ID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`I_ID`),
  ADD KEY `I_Type` (`I_Type`);

--
-- Indexes for table `item_types`
--
ALTER TABLE `item_types`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `Pickup_Type` (`Pickup_Type`),
  ADD KEY `Payment_Method` (`Payment_Method`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`OI_ID`),
  ADD KEY `O_ID` (`O_ID`),
  ADD KEY `I_ID` (`I_ID`),
  ADD KEY `quantity` (`quantity`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `pickup_type`
--
ALTER TABLE `pickup_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `U_ID` (`U_ID`),
  ADD KEY `I_ID` (`I_ID`);

--
-- Indexes for table `sandwich_items`
--
ALTER TABLE `sandwich_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Type` (`Type`);

--
-- Indexes for table `sandwich_order`
--
ALTER TABLE `sandwich_order`
  ADD PRIMARY KEY (`SO_ID`),
  ADD KEY `O_ID` (`O_ID`);

--
-- Indexes for table `sandwich_order_details`
--
ALTER TABLE `sandwich_order_details`
  ADD PRIMARY KEY (`SOD_ID`),
  ADD KEY `SO_ID` (`SO_ID`),
  ADD KEY `S_item` (`S_item`);

--
-- Indexes for table `sandwich_types`
--
ALTER TABLE `sandwich_types`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`),
  ADD KEY `U_Type` (`U_Type`),
  ADD KEY `Gender` (`Gender`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `C_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `I_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `item_types`
--
ALTER TABLE `item_types`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `O_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `OI_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pickup_type`
--
ALTER TABLE `pickup_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `R_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sandwich_items`
--
ALTER TABLE `sandwich_items`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `sandwich_order`
--
ALTER TABLE `sandwich_order`
  MODIFY `SO_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sandwich_order_details`
--
ALTER TABLE `sandwich_order_details`
  MODIFY `SOD_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sandwich_types`
--
ALTER TABLE `sandwich_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`I_ID`) REFERENCES `items` (`I_ID`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`I_Type`) REFERENCES `item_types` (`ID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`Pickup_Type`) REFERENCES `pickup_type` (`ID`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`Payment_Method`) REFERENCES `payment_method` (`P_ID`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `order` (`O_ID`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`I_ID`) REFERENCES `items` (`I_ID`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `users` (`U_ID`),
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`I_ID`) REFERENCES `items` (`I_ID`);

--
-- Constraints for table `sandwich_items`
--
ALTER TABLE `sandwich_items`
  ADD CONSTRAINT `sandwich_items_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `sandwich_types` (`ID`);

--
-- Constraints for table `sandwich_order`
--
ALTER TABLE `sandwich_order`
  ADD CONSTRAINT `sandwich_order_ibfk_1` FOREIGN KEY (`O_ID`) REFERENCES `order` (`O_ID`);

--
-- Constraints for table `sandwich_order_details`
--
ALTER TABLE `sandwich_order_details`
  ADD CONSTRAINT `sandwich_order_details_ibfk_1` FOREIGN KEY (`SO_ID`) REFERENCES `sandwich_order` (`SO_ID`),
  ADD CONSTRAINT `sandwich_order_details_ibfk_2` FOREIGN KEY (`S_item`) REFERENCES `sandwich_items` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Gender`) REFERENCES `gender` (`ID`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`U_Type`) REFERENCES `user_types` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
