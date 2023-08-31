<?php
$conn = new mysqli('localhost', 'root', '');
$conn->select_db('db_bob');
$sql1 ='INSERT INTO Header (header_name, header_link, header_parent) VALUES
("Home", "index.php", null),
("About us", "about.php", null),
("Beaches", "beaches.php", null),
("Gallery", "gallery.php", null),
("QnA", "faq.php", null),
("Feedback", "feedback.php", null),
("Contact", "contact.php", null)
';
$res = $conn->query($sql1);
if ($res) {
echo 'Data inserted successfully';
} else {
echo 'Failed to insert data';
}
$sql2 ='INSERT INTO Home_banner (HB_name, HB_img, HB_description) VALUES
("Hạ Long Bay,Vietnam", "./assets/img/banner/bb1.png","An emerald green waters and towering limestone karsts, it is a UNESCO World Heritage site and one of the most popular tourist destinations in the country."),
("Pattaya Beach, Thailand.", "./assets/img/banner/bb3.png","An entertainment scene, offering a wide array of bars, clubs, and shows that cater to visitors seeking a lively and energetic atmosphere after sunset."),
("Bondi Beach, Australia", "./assets/img/banner/bb4.png","A vibrant atmosphere and diverse community, offering a unique blend of art, music, and food"),
("Waikiki Beach, Hawaii", "./assets/img/banner/bb2.png","A legendary surf culture, attracting surfers from around the world who come to ride the gentle rolling waves of this iconic beach.")
';
$res = $conn->query($sql2);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}
$sql3 ='INSERT INTO List_user (user_name, user_password, user_phone, user_email, user_role) VALUES
("admin23", "1234567", "12345678", "a@gmail.com", "admin")
';
$res = $conn->query($sql3);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}
$sql4 ='INSERT INTO Nations (nations_name) VALUES
("Australia"),
("Greece"),
("Brazil"),
("Thailand"),
("French Polynesia"),
("Puerto Rico"),
("Portugal"),
("Thailand"),
("Vietnam"),
("Greece"),
("Turkey"),
("Portugal"),
("United Kingdom"),
("Turks and Caicos"),
("French Polynesia"),
("United States")
';
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
';
$res = $conn->query($sql5);
if ($res) {
   echo 'Data inserted successfully';
} else {
  echo 'Failed to insert data';
}

$sql6 ='INSERT INTO Beaches (regions_id,nations_id,beaches_name,beaches_img,beaches_img_array,beaches_rating,beaches_address,beaches_longitude,beaches_latitude,beaches_description,beaches_docx_link) VALUES
    (1, 1, "Whitehaven Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Quang Ninh Province, Vietnam", 107.023200, 20.910100, "Ha Long Bay Beaches in Quang Ninh Province, Vietnam, offer breathtaking natural beauty. With their iconic limestone karsts, emerald waters, and hidden caves, these beaches create a surreal and enchanting atmosphere. Visitors can enjoy boat tours, kayaking, and exploring the unique rock formations. Ha Long Bay Beaches are a UNESCO World Heritage Site and a must-visit destination for nature enthusiasts.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (2, 2, "Navagio Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.219000, 12.238800, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a popular coastal destination known for its picturesque beauty. With its long sandy shoreline and clear azure waters, it offers a perfect spot for sunbathing, swimming, and water activities. The beach is surrounded by a vibrant city with a range of accommodations, dining options, and entertainment venues. Nha Trang Beach is an ideal choice for both relaxation and adventure.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 3, "Baisa do Sancho", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Da Nang City, Vietnam", 108.230800, 16.054400, "Da Nang Beach in Da Nang City, Vietnam, is a pristine coastal gem. With its soft sandy shores, gentle waves, and panoramic views, it is a paradise for beach lovers. The beach offers a serene environment for sunbathing, leisurely walks, and water sports. Da Nang Beach is also known for its proximity to cultural attractions and vibrant nightlife, making it a perfect destination for a well-rounded vacation.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 4, "Maya Bay", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Kien Giang Province, Vietnam", 104.003600, 10.227000, "Phu Quoc Beach in Kien Giang Province, Vietnam, is a tropical paradise renowned for its pristine beauty. With its powdery white sands, crystal-clear turquoise waters, and lush green surroundings, it offers a tranquil escape from the bustling city life. The beach is perfect for sunbathing, swimming, snorkeling, and enjoying breathtaking sunsets. Phu Quoc Beach is also known for its diverse marine life and vibrant coral reefs, making it a popular destination for underwater exploration.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (1, 5, "Matira Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Thua Thien Hue Province, Vietnam", 107.874300, 16.372400, "Lang Co Beach in Thua Thien Hue Province, Vietnam, is a hidden gem nestled between the turquoise waters of the East Sea and the lush green mountains. With its long stretch of golden sands, calm waves, and serene atmosphere, Lang Co Beach offers a peaceful retreat for nature lovers. Visitors can indulge in beach activities, explore nearby fishing villages, or simply unwind amidst the scenic beauty. Lang Co Beach is a pristine destination that showcases the untouched natural charm of Vietnam.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (1, 6, "Flamenco Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Binh Thuan Province, Vietnam", 108.271300, 10.943400, "Mui Ne Beach in Binh Thuan Province, Vietnam, is a coastal gem known for its unique landscape and vibrant atmosphere. With its vast stretches of golden sand dunes, clear blue waters, and favorable wind conditions, it has become a popular destination for water sports enthusiasts, especially kiteboarding and windsurfing. Mui Ne Beach also offers breathtaking sunrises and sunsets, creating a picturesque setting for relaxation and photography. With its fusion of natural beauty and adventure, Mui Ne Beach offers an unforgettable experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 7, "Praia Done Ana", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Quang Nam Province, Vietnam", 108.316700, 15.875900, "Cua Dai Beach in Quang Nam Province, Vietnam, is a captivating destination known for its pristine beauty and tranquil ambiance. With its long stretch of soft sandy shoreline, clear turquoise waters, and swaying palm trees, it offers a serene retreat for beach lovers. Visitors can relax under the sun, take refreshing dips, or explore nearby fishing villages. Cua Dai Beach is also renowned for its stunning sunrises and fresh seafood, making it a delightful choice for a peaceful coastal getaway.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (4, 8, "Cape Maclear", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Quang Nam Province, Vietnam", 108.317600, 15.936700, "An Bang Beach in Quang Nam Province, Vietnam, is a hidden gem known for its natural beauty and laid-back atmosphere. Its golden sands, gentle waves, and lush vegetation create a picturesque setting for relaxation. An Bang Beach offers a serene environment for sunbathing, swimming, and beachside picnics. The beach is surrounded by charming beachfront cafes and restaurants, where visitors can savor local delicacies. An Bang Beach provides a tranquil escape from the hustle and bustle, making it a perfect destination for a peaceful retreat.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 9, "Railay Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Phu Quoc Island, Vietnam", 103.964700, 10.252200, "Bai Truong Beach, also known as Long Beach, is the most popular and longest beach on Phu Quoc Island, Vietnam. With its powdery white sands, clear waters, and stunning sunsets, it offers a tropical paradise for beach enthusiasts. Visitors can engage in a range of activities, including swimming, snorkeling, and beachside dining. Bai Truong Beach is dotted with resorts, restaurants, and beach bars, providing ample amenities for a relaxing and enjoyable beach vacation.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 10, "Ha Long Bay", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Da Nang City, Vietnam", 108.232400, 16.046000, "My Khe Beach in Da Nang City, Vietnam, is a renowned coastal gem hailed for its pristine beauty and wide sandy shoreline. With its gentle waves, azure waters, and stunning panoramic views, it attracts visitors from around the world. My Khe Beach offers excellent conditions for swimming, sunbathing, and various water sports. The beach is also lined with resorts, restaurants, and beachfront promenades, providing a vibrant atmosphere day and night. My Khe Beach is a must-visit destination for beach lovers seeking a perfect blend of relaxation and excitement.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 10, "Phu Quoc island", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 4, "Phu Quoc Island, Vietnam", 103.959700, 10.240600, "Long Beach, located on Phu Quoc Island, Vietnam, lives up to its name with its seemingly endless stretch of sandy shoreline. The beach offers a tranquil and scenic environment, perfect for relaxation and leisurely walks. Visitors can enjoy activities such as swimming, sunbathing, beachcombing, and watching the mesmerizing sunsets over the Gulf of Thailand. Long Beach is also dotted with beachfront resorts, restaurants, and bars, providing a range of amenities for a memorable beach vacation.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 10, "Nha Trang Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (1, 11, "Costa Navarino Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (1, 12, "Oludeniz Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 13, "Praia da Marinha", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 14, "St. Ives Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 15, "Diani Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (3, 16, "Grace Bay Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (1, 17, "Bora Bora Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]"),
    (1, 18, "Miami Beach", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg", 5, "Khanh Hoa Province, Vietnam", 109.196700, 12.238000, "Nha Trang Beach in Khanh Hoa Province, Vietnam, is a picturesque coastal destination known for its stunning beauty and vibrant atmosphere. With its soft golden sands, clear turquoise waters, and a backdrop of lush green mountains, it offers a tropical paradise for beach lovers. Nha Trang Beach is ideal for swimming, sunbathing, and engaging in a variety of water sports such as snorkeling and scuba diving. The beach is also lined with beachfront resorts, restaurants, and lively bars, providing a dynamic beach experience.", "https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/09/12233018/05-SAii-Phi-Phi-Activities-Excursion-tours-1201x900.jpg[cuz no]")
';
$res = $conn->query($sql6);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

$sql7 ='INSERT INTO List_transport (transport_name, transport_description) VALUES
("Taxi","Is a personal transportation vehicle with wheels used for traveling on roads. It usually has seating for a small number of people and a cargo compartment. Cars are motorized and commonly used for individual and family transportation."),
("Bus","Is a public transportation vehicle used to transport a large number of passengers on roads. It is typically large in size and can accommodate many people. Buses have fixed routes and regular stops for passengers to board and disembark."),
("Boat","Is a watercraft used for travel on water. It can include various types such as sailboats, motorboats, tourist boats, fishing boats, and cargo ships. Boats are used to navigate rivers, lakes, bays, or seas. They can serve personal, commercial, and tourism purposes."),
("Train","Is a vehicle that runs on rails. It can transport passengers and goods on constructed railway tracks. Trains are often large in size and can reach high speeds. They are used for transportation of both people and cargo on railways."),
("Plane","Is an aircraft designed for flying in the air. It can include different types such as jet planes, propeller planes, and helicopters. Planes are used to transport passengers and cargo through the air. They operate on established air routes and are widely used in civil aviation and military operations.")
';
$res = $conn->query($sql7);
if ($res) {
    echo 'Data inserted successfully';
} else {
    echo 'Failed to insert data';
}

// Đóng kết 
$sql11 ='INSERT INTO QnA (QnA_id_question, QnA_id_answer) VALUES
("Q:What is Beauty of beaches?","A:Beauty of beaches is a website about the beaches over the world."),
("Q:Why i here?","A:To search for information about beaches, of course!"),
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