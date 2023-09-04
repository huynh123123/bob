<?php
$conn = new mysqli('localhost', 'root', '');
$conn->select_db('db_bob');
$sql1 = 'INSERT INTO Header (header_name, header_link, header_parent) VALUES
("Home", "index.php", null),
("About us", "about.php", null),
("Beaches", "beaches.php", null),
("Gallery", "gallery.php", null),
("QnA", "faq.php", null),
("Feedback", "feedback.php", null),
("Contact", "contact.php", null)
ON DUPLICATE KEY UPDATE header_name = VALUES(header_name), header_link = VALUES(header_link), header_parent = VALUES(header_parent)';
$res = $conn->query($sql1);

if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

$sql2 = 'INSERT INTO Home_banner (HB_name, HB_img, HB_description) VALUES
    ("Hạ Long Bay,Vietnam", "./assets/img/banner/bb1.png","An emerald green waters and towering limestone karsts, it is a UNESCO World Heritage site and one of the most popular tourist destinations in the country."),
    ("Pattaya Beach, Thailand.", "./assets/img/banner/bb3.png","An entertainment scene, offering a wide array of bars, clubs, and shows that cater to visitors seeking a lively and energetic atmosphere after sunset."),
    ("Bondi Beach, Australia", "./assets/img/banner/bb4.png","A vibrant atmosphere and diverse community, offering a unique blend of art, music, and food"),
    ("Waikiki Beach, Hawaii", "./assets/img/banner/bb2.png","A legendary surf culture, attracting surfers from around the world who come to ride the gentle rolling waves of this iconic beach.")
ON DUPLICATE KEY UPDATE HB_name = VALUES(HB_name), HB_img = VALUES(HB_img), HB_description = VALUES(HB_description)';

$res = $conn->query($sql2);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

$Password_hash = password_hash(1234567, PASSWORD_DEFAULT);

$sql3 = "INSERT INTO List_user (user_name, user_password, user_phone, user_email, user_role) 
VALUES ('anonymous', '0', '0', 'anon@gmail.com', 'user'),
    ('admin23', '" . $Password_hash . "', '12345678', 'a@gmail.com', 'admin')
    ON DUPLICATE KEY UPDATE
    user_password = VALUES(user_password),
    user_phone = VALUES(user_phone),
    user_email = VALUES(user_email),
    user_role = VALUES(user_role)";

$res = $conn->query($sql3);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}
$sql4 = 'INSERT INTO Nations (nations_name) VALUES
("Australia"),
("Brazil"),
("France Polynesia"),
("Greece"),
("Kenya"),
("Malawi"),
("Portugal"),
("Puerto Rico"),
("Thailand"),
("Turkey"),
("Turks and Caicos"),
("United Kingdom"),
("United States"),
("Vietnam")
ON DUPLICATE KEY UPDATE
    nations_name = VALUES(nations_name)';
$res = $conn->query($sql4);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}
$sql5 = 'INSERT INTO Regions (regions_name) VALUES
    ("West"),
    ("North"),
    ("East"),
    ("South")
ON DUPLICATE KEY UPDATE
    regions_name = VALUES(regions_name)';

$res = $conn->query($sql5);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

$sql6 ='INSERT INTO Beaches (regions_id,nations_id,beaches_name,beaches_img,beaches_img_array,beaches_rating,beaches_address,beaches_description,beaches_docx_link) VALUES
    (1, 1, "Whitehaven Beach",".\assets\img\beach\WB.jpg", ".\assets\img\beach\WB1.jpg,.\assets\img\beach\WB2.jpg,.\assets\img\beach\WB3.jpg,.\assets\img\beach\WB4.jpg", 4, "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29941.1912514291!2d149.01932775917254!3d-20.273390638981436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bd8543936f3a3a1%3A0x808bfe71f86a4e1e!2sWhitehaven%20Beach!5e0!3m2!1svi!2s!4v1693759675689!5m2!1svi!2", "Whitehaven Beach is a breathtaking beach located in the Whitsunday Islands, Australia. Known for its iconic swirling white sands and crystal-clear turquoise waters, it is a popular destination for tourists and locals alike. Stretching over 7 kilometers, Whitehaven Beach offers stunning panoramic views, serene atmosphere, and the opportunity to relax and unwind in a pristine natural setting.", ".\assets\docx\ "),
    (2, 4, "Navagio Beach",  ".\assets\img\beach\NB.jpg", ".\assets\img\beach\NB1.jpg,.\assets\img\beach\NB2.jpg,.\assets\img\beach\NB3.jpg,.\assets\img\beach\NB4.jpg", 4, "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.030492139467!2d20.6248109!3d37.85957695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13676b8cc2540ae1%3A0x783ee88b75588aee!2sNavagio!5e0!3m2!1svi!2s!4v1693791027374!5m2!1svi!2s", "Navagio Beach, also known as Shipwreck Beach, is a world-famous beach located on the Greek island of Zakynthos. It is renowned for its dramatic beauty, characterized by a secluded cove with crystal-clear turquoise waters, sheer limestone cliffs, and a shipwreck resting on the sandy shore. The beach is only accessible by boat, adding to its allure and exclusivity. Navagio Beach is a popular attraction for visitors seeking stunning scenery and a unique beach experience in Greece.", ".\assets\docx\ "),   
    (3, 2, "Baia do Sancho", ".\assets\img\beach\BDB.jpg", ".\assets\img\beach\BDB1.jpg,.\assets\img\beach\BDB2.jpg,.\assets\img\beach\BDB3.jpg,.\assets\img\beach\BSB4.jpg", 4, "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7950408323436!2d-32.44669332613403!3d-3.854119343822276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6364dff104530a3%3A0x258f9c83f7471d2!2sSancho%20Beach!5e0!3m2!1svi!2s!4v1693757522360!5m2!1svi!2s", "Baia do Sancho is a stunning beach located in the Fernando de Noronha archipelago, Brazil. It is famous for its pristine white sand, crystal-clear turquoise waters, and remarkable biodiversity. Snorkeling and diving enthusiasts are drawn to Baia do Sancho to explore its vibrant coral reefs and diverse marine life. Considered one of the most beautiful beaches of world, it offers a breathtaking and untouched natural environment.",".\assets\docx\ "),
    (3, 9, "Maya Bay", ".\assets\img\beach\MBB.jpg", ".\assets\img\beach\MBB1.jpg,.\assets\img\beach\MBB2.jpg,.\assets\img\beach\MBB3.jpg,.\assets\img\beach\MBB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.046011744762!2d98.76550915!3d7.67820275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304e20be94f73363%3A0x85a4f5bb85cf994f!2sMaya%20Bay!5e0!3m2!1svi!2s!4v1693790251547!5m2!1svi!2s" , "Maya Bay is a picturesque bay located on the island of Koh Phi Phi Leh in Thailand. It gained international fame after being featured in the film "The Beach" starring Leonardo DiCaprio. Maya Bay is known for its stunning turquoise waters, pristine white sandy beach, and encircling limestone cliffs covered in lush greenery. The bay offers excellent opportunities for snorkeling, swimming, and sunbathing. However, due to concerns about environmental impact and the need for conservation, Maya Bay has been temporarily closed to the public since 2018 to allow the ecosystem to recover.", ".\assets\docx\ "),
    (1, 3, "Matira Beach",".\assets\img\beach\MB.jpg", ".\assets\img\beach\MB1.jpg,.\assets\img\beach\MB2.jpg,.\assets\img\beach\MB3.jpg,.\assets\img\beach\MB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.700538042213!2d-151.7378875!3d-16.5412092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x76bda2db0e70300f%3A0xddd9165d897bf26b!2sMatira%20Beach!5e0!3m2!1svi!2s!4v1693790290923!5m2!1svi!2s" , "Matira Beach is a beautiful stretch of coastline located on the island of Bora Bora in French Polynesia. It is often regarded as one of the most stunning beaches in the world. Matira Beach features powdery white sand, crystal-clear turquoise waters, and a backdrop of lush palm trees. The beach offers a tranquil and idyllic setting, perfect for sunbathing, swimming, and snorkeling. Visitors can also enjoy breathtaking sunsets over the water, making Matira Beach a popular destination for romantic getaways and relaxation in paradise.", ".\assets\docx\ "),
    (1, 8, "Flamenco Beach",".\assets\img\beach\FB.jpg", ".\assets\img\beach\FB1.jpg,.\assets\img\beach\FB2.jpg,.\assets\img\beach\FB3.jpg,.\assets\img\beach\FB3.jpg"", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30299.38160800479!2d-65.3152816!3d18.327990449999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c04e8c677f1080d%3A0x7170eea9f0405c15!2sFlamenco%20Beach!5e0!3m2!1svi!2s!4v1693790331505!5m2!1svi!2s" , "Flamenco Beach is a renowned beach located on the island of Culebra in Puerto Rico. It is widely regarded as one of the most beautiful beaches in the Caribbean. With its pristine white sand, clear turquoise waters, and surrounding lush hills, Flamenco Beach offers a stunning tropical paradise experience. The beach is known for its calm and gentle waves, making it ideal for swimming, snorkeling, and sunbathing. Visitors can also explore the nearby Flamenco Point and enjoy panoramic views of the beach and the surrounding natural beauty. Flamenco Beach is a popular destination for both locals and tourists seeking a serene and picturesque beach getaway.", ".\assets\docx\ "),
    (3, 7, "Praia Done Ana",.\assets\img\beach\PDA.jpg", ".\assets\img\beach\PDA1.jpg,.\assets\img\beach\PDA2.jpg,.\assets\img\beach\PDA3.jpg,.\assets\img\beach\PDA4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3182.5556476242377!2d-8.6689975!3d37.0918888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1b3168f8ef5ed9%3A0x39438c504727664b!2sPraia%20Dona%20Ana!5e0!3m2!1svi!2s!4v1693790354695!5m2!1svi!2s" , "Praia Dona Ana is a picturesque beach located in Lagos, Portugal. It is renowned for its stunning rock formations, golden sand, and crystal-clear turquoise waters. Praia Dona Ana is surrounded by towering cliffs, creating a secluded and intimate atmosphere. Visitors can relax on the beach, swim in the refreshing waters, or explore the nearby caves and grottos by boat or kayak. The beach is easily accessible and offers facilities such as restaurants, cafes, and sunbed rentals. Praia Dona Ana is considered one of the most beautiful beaches in the Algarve region, attracting both locals and tourists alike.", ".\assets\docx\ "),
    (4, 6, "Cape Maclear",.\assets\img\beach\CM.jpg", ".\assets\img\beach\CM1.jpg,.\assets\img\beach\CM2.jpg,.\assets\img\beach\CM3.jpg,.\assets\img\beach\CM4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.0640825126256!2d34.850534749999994!3d-14.01421455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18df954604995823%3A0xa7e740c3f8c521f1!2sCape%20Maclear%2C%20Malawi!5e0!3m2!1svi!2s!4v1693790370755!5m2!1svi!2s" , "Cape Maclear, also known as Chembe, is a popular tourist destination located on the southern shore of Lake Malawi in Malawi, Africa. It is a small fishing village that has become well-known for its stunning beaches and clear freshwater. The area is surrounded by picturesque landscapes, including rocky outcrops and lush hills. Cape Maclear is a haven for water activities such as swimming, snorkeling, and diving, as the lake is home to a diverse array of colorful fish species. Visitors can also explore nearby islands, go on boat cruises, or simply relax on the sandy shores. The village offers accommodation options, restaurants, and a laid-back atmosphere, making Cape Maclear a tropical paradise for nature lovers and beach enthusiasts.", ".\assets\docx\ "),
    (3, 14, "Ha Long Bay", .\assets\img\beach\HLB.jpg", ".\assets\img\beach\HLB1.jpg,.\assets\img\beach\HLB2.jpg,.\assets\img\beach\HLB3.jpg,.\assets\img\beach\HLB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238637.35841622867!2d107.1496281!3d20.843465300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a5796518cee87%3A0x55c6b0bcc85478db!2zVuG7i25oIEjhuqEgTG9uZw!5e0!3m2!1svi!2s!4v1693790425141!5m2!1svi!2s" , "Hạ Long Bay is a UNESCO World Heritage Site in northeastern Vietnam, renowned for its stunning natural beauty. It features thousands of limestone karsts and islands rising from the turquoise waters of the Gulf of Tonkin. The bay offers breathtaking views, with its unique landscape of karst formations, caves, and grottoes. Visitors can take cruises to explore the bay, kayak through the karsts, visit floating fishing villages, and swim in the clear waters. Hạ Long Bay is a must-visit destination for its awe-inspiring scenery and the opportunity to immerse oneself in the tranquility of this natural wonder.", ".\assets\docx\ "),
    (3, 14, "Phu Quoc island", .\assets\img\beach\PQI.jpg", ".\assets\img\beach\PQI1.jpg,.\assets\img\beach\PQI2.jpg,.\assets\img\beach\PQI3.jpg,.\assets\img\beach\PQI4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502579.8996878229!2d103.957424!3d10.228845399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a78c62b49eda17%3A0x8aa79fbbdd72cdb!2zUGjDuiBRdeG7kWM!5e0!3m2!1svi!2s!4v1693790442743!5m2!1svi!2s" , "Phu Quoc Island is a tropical paradise located off the southwestern coast of Vietnam, known for its stunning white-sand beaches, crystal-clear waters, and vibrant coral reefs. It offers a range of activities, including swimming, snorkeling, and diving in its pristine waters. The island is also home to Phu Quoc National Park, where visitors can explore lush forests and hiking trails. With its abundant natural beauty, diverse marine life, and luxurious resorts, Phu Quoc Island is a popular destination for beach lovers and nature enthusiasts looking for a tranquil getaway in Southeast Asia.", ".\assets\docx\ "),   
    (3, 14, "Nha Trang Beach",.\assets\img\beach\NTB.jpg", ".\assets\img\beach\NTB1.jpg,.\assets\img\beach\NTB2.jpg,.\assets\img\beach\NTB3.jpg,.\assets\img\beach\NTB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249547.2833273914!2d109.05777751640623!3d12.236339100000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31706770f4958433%3A0xf09b18bfbf27bde7!2zQsOjaSBiaeG7g24gTmhhIFRyYW5n!5e0!3m2!1svi!2s!4v1693790463345!5m2!1svi!2s" , "Nha Trang Beach is a popular coastal destination located in the Khanh Hoa province of Vietnam. It is renowned for its stunning sandy beaches, clear blue waters, and vibrant marine life. Nha Trang Beach offers a wide range of activities for visitors, including swimming, sunbathing, snorkeling, and scuba diving. The beach is known for its excellent diving spots, with colorful coral reefs and diverse marine species to explore. Nha Trang itself is a bustling coastal city, offering a vibrant nightlife, delicious seafood, and a variety of beachfront resorts and hotels. With its beautiful beach and lively atmosphere, Nha Trang is a favored destination for both local and international tourists seeking a beach getaway in Vietnam.", ".\assets\docx\ "),
    (1, 4, "Costa Navarino Beach",.\assets\img\beach\CNB.jpg", ".\assets\img\beach\CNB1.jpg,.\assets\img\beach\CNB2.jpg,.\assets\img\beach\CNB3.jpg,.\assets\img\beach\CNB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12746.27241982121!2d21.64427346977538!3d36.99624120000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x136112998fc683e3%3A0xce3fbb32a0a2ce25!2sCosta%20Navarino!5e0!3m2!1svi!2s!4v1693790553214!5m2!1svi!2s" , "Costa Navarino Beach is a stunning beach located in the southwest region of Peloponnese, Greece. It is part of the Costa Navarino resort complex, which spans over 1,000 hectares and offers a luxurious and sustainable vacation experience. The beach itself boasts golden sand, crystal-clear turquoise waters, and a pristine natural setting. Visitors to Costa Navarino Beach can enjoy swimming, sunbathing, beach sports, and water activities such as paddleboarding and kayaking. The beach is surrounded by beautiful landscapes, including olive groves and rolling hills, creating a picturesque backdrop. With its combination of natural beauty and upscale amenities, Costa Navarino Beach provides a memorable beach holiday for travelers seeking relaxation and indulgence in Greece.", ".\assets\docx\ "),
    (1, 10, "Oludeniz Beach",.\assets\img\beach\OB.jpg", ".\assets\img\beach\OB1.jpg,.\assets\img\beach\OB2.jpg,.\assets\img\beach\OB3.jpg,.\assets\img\beach\OB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12821.337014436964!2d29.118427900000004!3d36.54605275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c040a6a8a0efd9%3A0xdba05aed33b8aefd!2sOludeniz%20Beach!5e0!3m2!1svi!2s!4v1693790574216!5m2!1svi!2s" , "Oludeniz Beach, located in southwestern coast near Fethiye, is a world-renowned beach known for its breathtaking beauty. Its pristine sandy shores, crystal-clear turquoise waters, and the iconic Blue Lagoon make it a true paradise for beach lovers. Visitors can relax on the beach, swim in the calm waters, or indulge in thrilling activities like paragliding from the nearby Babadağ Mountain. Surrounded by picturesque mountains and offering a vibrant atmosphere, Oludeniz Beach is a captivating destination that offers a perfect blend of relaxation and adventure for travelers from around the world.", ".\assets\docx\ "),
    (3, 7, "Praia da Marinha",.\assets\img\beach\PDM.jpg", ".\assets\img\beach\PDM1.jpg,.\assets\img\beach\PDM2.jpg,.\assets\img\beach\PDM3.jpg,.\assets\img\beach\PDM4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1591.3233965548409!2d-8.412947850000002!3d37.08971845000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ad6a403e9e34b%3A0x5cf4506ec0b72698!2sMarinha%20Beach!5e0!3m2!1svi!2s!4v1693790598440!5m2!1svi!2s" , "Praia da Marinha, located in the Algarve region of Portugal, is a stunning beach known for its natural beauty and dramatic limestone cliffs. With its golden sand and crystal-clear turquoise waters, it offers a picturesque setting for sunbathing, swimming, and snorkeling. The beach is also popular for its unique rock formations, including arches and caves, which can be explored during low tide. Praia da Marinha is frequently recognized as one of the most beautiful beaches in Europe, attracting visitors from around the world who seek a captivating and idyllic coastal experience.", ".\assets\docx\ "),
    (3, 12, "St. Ives Beach", .\assets\img\beach\SIB.jpg", ".\assets\img\beach\SIB1.jpg,.\assets\img\beach\SIB2.jpg,.\assets\img\beach\SIB3.jpg,.\assets\img\beach\SIB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1591.3233965548409!2d-8.412947850000002!3d37.08971845000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ad6a403e9e34b%3A0x5cf4506ec0b72698!2sMarinha%20Beach!5e0!3m2!1svi!2s!4v1693790598440!5m2!1svi!2s" , "St. Ives Beach, located in Cornwall, England, is a picturesque coastal destination known for its golden sand, clear waters, and charming surroundings. This popular beach offers visitors the opportunity to relax on the sandy shores, swim in the sea, and engage in water activities such as surfing and paddleboarding. The beach is complemented by the delightful town of St. Ives, which boasts a vibrant art scene, narrow streets, and a range of shops and eateries. With its natural beauty and cultural attractions, St. Ives Beach provides a memorable beach experience for visitors to Cornwall.", ".\assets\docx\ "),
    (3, 5, "Diani Beach",.\assets\img\beach\DB.jpg", ".\assets\img\beach\DB1.jpg,.\assets\img\beach\DB2.jpg,.\assets\img\beach\DB3.jpg,.\assets\img\beach\DB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15914.830023703375!2d39.59476945!3d-4.2769567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1840463f2a0b107d%3A0xafa0063ab0f439ad!2sDiani%20Beach!5e0!3m2!1svi!2s!4v1693790725759!5m2!1svi!2s" , "Diani Beach, located on the southern coast of Kenya, is a tropical paradise known for its pristine white-sand beaches, turquoise waters, and vibrant coral reefs. Visitors to Diani Beach can relax under swaying palm trees, take leisurely walks along the shore, or engage in thrilling water sports like snorkeling and diving.", ".\assets\docx\ "),
    (3, 11, "Grace Bay Beach",.\assets\img\beach\GBB.jpg", ".\assets\img\beach\GBB1.jpg,.\assets\img\beach\GBB2.jpg,.\assets\img\beach\GBB3.jpg,.\assets\img\beach\GBB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29636.33153575274!2d-72.17605049999999!3d21.7980015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x894b4f97e3e25cbb%3A0xcf05e228e2c20c30!2sGrace%20Bay%20Beach!5e0!3m2!1svi!2s!4v1693790767672!5m2!1svi!2s" , "Grace Bay Beach, situated on the island of Providenciales in the Turks and Caicos Islands, is consistently ranked among the world top beaches. With its powdery white sand, clear blue waters, and vibrant marine life, Grace Bay Beach offers a tranquil escape for sun-seekers. Visitors can enjoy swimming, snorkeling, and sailing in this idyllic Caribbean setting.", ".\assets\docx\ "),
    (1, 3, "Bora Bora Beach", ".\assets\img\beach\BBB.jpg", ".\assets\img\beach\BBB1.jpg,.\assets\img\beach\BBB2.jpg,.\assets\img\beach\BBB3.jpg,.\assets\img\beach\BBB4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24311.392388233355!2d19.46879799672851!3d40.38837590886807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13452de69d344519%3A0x3d35b894f749b44f!2sBora%20Bora!5e0!3m2!1svi!2s!4v1693790807231!5m2!1svi!2s" , "Bora Bora Beach, located in French Polynesia, is renowned for its breathtaking beauty and luxurious overwater bungalows. The beach features powdery white sand, crystal-clear turquoise waters, and stunning views of Mount Otemanu. Visitors can indulge in water activities like snorkeling, diving, and paddleboarding, or simply relax and soak up the tropical ambiance.", ".\assets\docx\ "),
(1, 13, "Miami Beach",.\assets\img\beach\MB1-0.jpg", ".\assets\img\beach\MB1-1.jpg,.\assets\img\beach\MB1-2.jpg,.\assets\img\beach\MB1-3.jpg,.\assets\img\beach\MB1-4.jpg", 4, ""https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114937.53204589023!2d-80.1401415!3d25.8102415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a6172bfeddb9%3A0x37be1741259463eb!2sMiami%20Beach%2C%20Florida%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1693790839203!5m2!1svi!2s" , "Miami Beach, situated in Miami, Florida, is a vibrant and iconic beach destination known for its lively atmosphere and Art Deco architecture. With its wide sandy beaches, warm waters, and thriving nightlife, Miami Beach offers something for everyone. Visitors can enjoy sunbathing, swimming, beach sports, and exploring the vibrant South Beach area with its trendy restaurants, bars, and shops.", ".\assets\docx\ ")
        ON DUPLICATE KEY UPDATE
    regions_id = VALUES(regions_id),
    nations_id = VALUES(nations_id),
    beaches_img = VALUES(beaches_img),
    beaches_img_array = VALUES(beaches_img_array),
    beaches_rating = VALUES(beaches_rating),
    beaches_address = VALUES(beaches_address),
    beaches_description = VALUES(beaches_description),
    beaches_docx_link = VALUES(beaches_docx_link);
';
$res = $conn->query($sql6);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

$sql7 = 'INSERT INTO List_transport (transport_name, transport_description)
VALUES
    ("Taxi","Is a personal transportation vehicle with wheels used for traveling on roads. It usually has seating for a small number of people and a cargo compartment. Cars are motorized and commonly used for individual and family transportation."),
    ("Bus","Is a public transportation vehicle used to transport a large number of passengers on roads. It is typically large in size and can accommodate many people. Buses have fixed routes and regular stops for passengers to board and disembark."),
    ("Boat","Is a watercraft used for travel on water. It can include various types such as sailboats, motorboats, tourist boats, fishing boats, and cargo ships. Boats are used to navigate rivers, lakes, bays, or seas. They can serve personal, commercial, and tourism purposes."),
    ("Train","Is a vehicle that runs on rails. It can transport passengers and goods on constructed railway tracks. Trains are often large in size and can reach high speeds. They are used for transportation of both people and cargo on railways."),
    ("Plane","Is an aircraft designed for flying in the air. It can include different types such as jet planes, propeller planes, and helicopters. Planes are used to transport passengers and cargo through the air. They operate on established air routes and are widely used in civil aviation and military operations.")
ON DUPLICATE KEY UPDATE
    transport_description = VALUES(transport_description)';

$res = $conn->query($sql7);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

// Đóng kết 
$sql11 ='INSERT INTO QnA (QnA_id_question, QnA_id_answer) VALUES
("Q:What is Beauty of beaches?","A:Beauty of beaches is a website about the beaches over the world."),
("Q:Why am i here?","A:To search for information about beaches, of course!"),
("Q:Can i book tour in here?","A:Unfortunately....we just a website about information, not sell tour. Maybe, in future, we will add it!"),
("Q:Help!i can not login to the website","A:Sorry to hear that. Please contact us by following the mail and phone in <a href= contact.php >Contact Us</a>"),
("Q:In the future, will you add something more like a wishlist or compare how far the user is from the beach that is set?","A:That is a good idea! We will try to add it in the future!"),
("Q:The website is kinda cool but...the search is not working....","A:Sorry to hear that. We will fix it as soon as possible.")
';
$res = $conn->query($sql11);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

$conn->close();
?>