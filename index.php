<?php
$categories = array(
    "Procesory" => array(
        "name" => "Procesory",
        "products" => array(
            array("name" => "Procesor INTEL Core i5-12400F", "price" => 800),
            array("name" => "Procesor AMD Ryzen 5 5600", "price" => 700),
            array("name" => "Procesor INTEL Core i5-13600KF", "price" => 1500),
        ),
    ),
    "Karty graficzne" => array(
        "name" => "Karty graficzne",
        "products" => array(
            array("name" => "Karta graficzna MSI GeForce RTX 3060 Ti Ventus 2X 8GB OC LHR", "price" => 2500),
            array("name" => "Karta graficzna GIGABYTE GeForce RTX 3060 Eagle OC LHR 12GB", "price" => 2000),
            array("name" => "Karta graficzna PNY GeForce RTX 4080 Verto Triple Fan 16GB DLSS 3", "price" => 6000),
        ),
    ),
    "Płyty główne" => array(
        "name" => "Płyty główne",
        "products" => array(
            array("name" => "Płyta główna GIGABYTE B550 Aorus Elite V2", "price" => 600),
            array("name" => "Płyta główna GIGABYTE B550 Gaming X V2", "price" =>  600),
            array("name" => "Płyta główna MSI MAG B660 Mortar", "price" => 900),
        ),
    ),
    "Dyski twarde" => array(
        "name" => "Dyski twarde",
        "products" => array(
            array("name" => "Dysk GOODRAM CX400 1TB SSD", "price" => 250),
            array("name" => "Dysk CRUCIAL X8 1TB SSD", "price" => 400),
            array("name" => "Dysk SEAGATE Expansion Portable 2TB HDD", "price" => 300),
        ),
    ),
);
function generate_category_pages($categories) {
    foreach ($categories as $category) {
        echo '<h2>' . $category['name'] . '</h2>';
        echo '<ul>';
        foreach ($category['products'] as $product) {
            echo '<li>';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>Cena: ' . $product['price'] . ' zł</p>';
            echo '</li>';
        }
        echo '</ul>';
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Sklep internetowy z częściami komputerowymi</title>
</head>
<body>
<h1>Sklep internetowy z częściami komputerowymi</h1>
<ul>
    <li><a href="index.php">Strona główna</a></li>
    <li><a href="?category=Procesory">Procesory</a></li>
    <li><a href="?category=Karty%20graficzne">Karty graficzne</a></li>
    <li><a href="?category=Płyty%20główne">Płyty główne</a></li>
    <li><a href="?category=Dyski%20twarde">Dyski twarde</a></li>
</ul>
<hr>
<?php
if (isset($_GET['category'])) {
    $category_name = $_GET['category'];
    if (array_key_exists($category_name, $categories)) {
        generate_category_pages(array($categories[$category_name]));
    } else {
        echo '<p>Nie znaleziono kategorii o nazwie ' . $category_name . '.</p>';
    }
} else {
    echo '<p>Wybierz kategorię, aby zobaczyć listę produktów.</p>';
}
?>
</body>
</html>
 