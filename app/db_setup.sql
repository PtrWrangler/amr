DROP TABLE IF EXISTS rooms;
CREATE TABLE rooms (
    RoomName varchar(255),
    imageURL varchar(255),
    RoomPrice varchar(255),
    RoomDesc TEXT,
	RoomFeatures TEXT
);

INSERT INTO rooms (RoomName, imageURL, RoomPrice, RoomDesc, RoomFeatures) VALUES 
	(
		"Chambre 201", 
		"http://localhost:8080/assets/img/rooms-sized/chambre-201-rs.jpg",
		"$109.95 - $79.95 / soir",
		"Une chambre no 201 Avec deux lits double pouvant accueillir 4 adultes situés dans un semi-sous-sol.",
		"<li><i class=\"icon ion-android-people\"></i><i class=\"icon ion-android-people\"></i> 2 Lits Double</li>
					<li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
					<li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
					<li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 205",
		"http://localhost:8080/assets/img/rooms-sized/chambre-205-rs.jpg",
		"$129.95 - $89.95 / soir",
		"Une chambre no 205 supérieure de luxe avec 1 grand lit King size.",
		"<li><i class=\"icon ion-android-people\"></i> Lit King-Size de Luxe</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV Cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 216",
		"http://localhost:8080/assets/img/rooms-sized/chambre-216-rs.jpg",
		"$119.95 - $89.95 / soir",
		"Chambre Lit Queen-Size de Luxe.",
		"<li><i class=\"icon ion-android-person\"></i><i class=\"icon ion-android-person\"></i> 2 Lits Simple</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 217",
		"http://localhost:8080/assets/img/rooms-sized/chambre-217-rs.jpg",
		"$119.95 - $89.95 / soir",
		"Chambre avec lit Queen size supérieur.",
		"<li><i class=\"icon ion-android-people\"></i> 1 Lit Queen-size</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 210",
		"http://localhost:8080/assets/img/rooms-sized/chambre-210-rs.jpg",
		"$109.95 - $79.85 / soir",
		"Chambre Double de Luxe avec lit double.",
		"<li><i class=\"icon ion-android-person\"></i> 1 Lit Double</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 212",
		"http://localhost:8080/assets/img/rooms-sized/chambre-212-rs.jpg",
		"$109.95 - $79.85 / soir",
		"Chambre double de luxe avec balcon.",
		"<li><i class=\"icon ion-android-people\"></i> 1 Lit Double</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 214",
		"http://localhost:8080/assets/img/rooms-sized/chambre-214-rs.jpg",
		"$109.95 - $79.85 / soir",
		"Chambre Double de Luxe avec lit double.",
		"<li><i class=\"icon ion-android-people\"></i> 1 Lit Double</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 215",
		"http://localhost:8080/assets/img/rooms-sized/chambre-215-rs.jpg",
		"$119.95 - $89.95 / soir",
		"Chambre Double Standard (style européen)",
		"<li><i class=\"icon ion-android-people\"></i> 1 Lit Double</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 211",
		"http://localhost:8080/assets/img/rooms-sized/chambre-211-rs.jpg",
		"$119.95 - $89.95 / soir",
		"Chambre Lits Jumeaux Standard 2 personnes.",
		"<li><i class=\"icon ion-android-person\"></i><i class=\"icon ion-android-person\"></i> 2 Lit Simple</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 206",
		"http://localhost:8080/assets/img/rooms-sized/chambre-206-rs.jpg",
		"$129.95 - $99.95 / soir",
		"Studio avec cuisinette, lit Queen et sofa lit - 4 a 6 personnes idéal pour famille avec enfants.",
		"<li><i class=\"icon ion-android-people\"></i><i class=\"icon ion-android-person\"></i> 1 Lit Queen, 1 sofa.</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	),
	(
		"Chambre 209",
		"http://localhost:8080/assets/img/rooms-sized/chambre-209-rs.jpg",
		"$109.95 - $79.95 / soir",
		"Chambre Lits Jumeaux Standard 2 personnes.",
		"<li><i class=\"icon ion-android-people\"></i><i class=\"icon ion-android-people\"></i> 2 Lits Jumeaux</li>
                    <li><i class=\"icon ion-coffee\"></i> Déjeuner ($3.00)</li>
                    <li><i class=\"icon ion-android-sunny\"></i> Chauffage / Air conditionné</li>
                    <li><i class=\"icon ion-wineglass\"></i> Mini Frigo</li>
                    <li><i class=\"icon ion-monitor\"></i> TV cable</li>
                    <li><i class=\"icon ion-wifi\"></i> Wi-Fi</li>"
	);