 <?php
	include("../Functions/functions.php");
	?> 

<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Agrocraft Homepage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../portal_files/bootstrap.min.css">
	<script src="../portal_files/jquery.min.js.download"></script>
	<script src="../portal_files/popper.min.js.download"></script>
	<script src="../portal_files/bootstrap.min.js.download"></script>
	<script>
		function state() {
			var a = document.getElementById('states').value;

			if (a === '01') {
                var array = ['ABIA', 'Aba North', 'Aba South', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Obingwa', 'Ohafia', 'Osisioma', 'Ugwunagbo', 'Ukwa East', 'Ukwa West', /* Add more districts */];
                } else if (a === '02') {
                var array = ['ADAMAWA', 'Demsa', 'Fufore', 'Ganye', 'Gombi', 'Guyuk', 'Jada', /* Add more districts */];
                } else if (a === '03') {
                var array = ['AKWA IBOM', 'Abak', 'Eket', 'Etinan', 'Essien Udim', 'Eastern Obolo', 'Etim Ekpo', 'Ibeno', 'Ibiono-Ibom', 'Ika', 'Ikono', 'Ikot Ekpene', 'Ini', 'Mbo', 'Nsit-Atai', 'Nsit-Ubium', 'Okobo', 'Oron', /* Add more districts */];
                } else if (a === '04') {
                var array = ['ANAMBRA', 'Aguata', /* Add more districts */];
                } else if (a === '05') {
                var array = ['BAUCHI', 'Alkaleri', 'Bogoro', 'Darazo', 'Dass', 'Gamawa', 'Ganjuwa', 'Giade', /* Add more districts */];
                } else if (a === '06') {
                var array = ['BENUE', 'Ado', 'Agatu', 'Apa', 'Buruku', 'Gboko', 'Guma', 'Gwer East', 'Gwer West', /* Add more districts */];
                } else if (a === '07') {
                var array = ['BAYELSA', 'Brass', 'Nembe', 'Ekeremor', 'Kolokuma', 'Ogbia', 'Sagbama', 'Yenagoa', 'Southern Ijaw', /* Add more districts */];
                } else if (a === '08') {
                var array = ['BORNO', 'Abadam', 'Bama', 'Uba', 'Bayo', 'Biu', 'Chibok', 'Damboa', 'Dikwa', /* Add more districts */];
                } else if (a === '09') {
                var array = ['CROSS RIVER', 'Abi', 'Akamkpa', 'Akpabuyo', 'Bakassi', 'Bekwarra', 'Biase', 'Boki', /* Add more districts */];
                } else if (a === '10') {
                var array = ['DELTA', 'Aniocha North', 'Aniocha South', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', /* Add more districts */];
                } else if (a === '11') {
                var array = ['EBONYI', 'Abakaliki', 'Afikpo North', 'Ebonyi', 'Ezza North', /* Add more districts */];
                } else if (a === '12') {
                var array = ['EDO', 'Akoko-Edo', 'Egor', 'Esan Central', 'Esan North-East', 'Esan South-East', 'Esan West', /* Add more districts */];
                } else if (a === '13') {
                var array = ['ENUGU', 'Awgu', 'Aninri', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', /* Add more districts */];
                } else if (a === '14') {
                var array = ['GOMBE', 'Akko', 'Balanga', 'Dukku', 'Gombe', /* Add more districts */];
                } else if (a === '15') {
                var array = ['IMO', 'Aboh Mbaise', 'Ahiazu Mbaise', 'Ehime Mbano', 'Ezinihitte', 'Ideato North', 'Ideato South', 'Ihitte/Uboma', 'Ikeduru', 'Isiala Mbano', 'Isu', 'Mbaitoli', 'Ngor Okpala', 'Njaba', 'Nkwerre', 'Nwangele', 'Obowo', 'Oguta', 'Ohaji/Egbema', 'Okigwe', 'Onuimo', 'Orlu', 'Orsu', 'Oru East', 'Oru West', 'Owerri Municipal', 'Owerri North', 'Owerri West', /* Add more districts */];
                } else if (a === '16') {
                var array = ['JIGAWA', 'Auyo', 'Babura', 'Biriniwa', 'Birnin Kudu', 'Buji', 'Dutse', 'Gagarawa', 'Garki', 'Gumel', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kaugama', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Kaugama', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi', /* Add more districts */];
                } else if (a === '17') {
                var array = ['KADUNA', 'Birnin Gwari', 'Chikun', 'Giwa', 'Igabi', 'Ikara', 'Jaba', 'Jema\'a', 'Kachia', 'Kaduna North', 'Kaduna South', 'Kagarko', 'Kajuru', 'Kaura', 'Kauru', 'Kubau', 'Kudan', 'Lere', 'Makarfi', 'Sabon Gari', 'Sanga', 'Soba', 'Zangon Kataf', 'Zaria', /* Add more districts */];
                } else if (a === '18') {
                var array = ['KANO', 'Ajingi', 'Albasu', 'Bagwai', 'Bebeji', 'Bichi', 'Bunkure', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', /* Add more districts */];
                } else if (a === '19') {
                var array = ['KATSINA', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dan Musa', 'Dandume', 'Danja', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango', /* Add more districts */];
                } else if (a === '20') {
                var array = ['KEBBI', 'Aleiro', 'Arewa Dandi', 'Argungu', 'Augie', 'Bagudo', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko/Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu/Danko', 'Yauri', 'Zuru', /* Add more districts */];
                } else if (a === '21') {
                var array = ['KOGI', 'Adavi', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Idah', 'Igalamela Odolu', 'Ijumu', 'Kabba/Bunu', 'Kogi', 'Lokoja', 'Mopa-Muro', 'Ofu', 'Ogori/Magongo', 'Okehi', 'Okene', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West', /* Add more districts */];
                } else if (a === '22') {
                var array = ['KWARA', 'Asa', 'Baruten', 'Edu', 'Ekiti', 'Ifelodun', 'Ilorin East', 'Ilorin South', 'Ilorin West', 'Irepodun', 'Isin', 'Kaiama', 'Moro', 'Offa', 'Oke Ero', 'Oyun', 'Pategi', /* Add more districts */];
                } else if (a === '23') {
                var array = ['LAGOS', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti Osa', 'Ibeju-Lekki', 'Ifako-Ijaiye', 'Ikeja', 'Ikorodu', 'Kosofe', 'Lagos Island', 'Lagos Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere', /* Add more districts */];
                } else if (a === '24') {
                var array = ['NASARAWA', 'Akwanga', 'Awe', 'Doma', 'Karu', 'Keana', 'Keffi', 'Kokona', 'Lafia', 'Nasarawa', 'Nasarawa Egon', 'Obi', 'Toto', 'Wamba', /* Add more districts */];
                } else if (a === '25') {
                var array = ['NIGER', 'Agaie', 'Agwara', 'Bida', 'Borgu', 'Bosso', 'Chanchaga', 'Edati', 'Gbako', 'Gurara', 'Katcha', 'Kontagora', 'Lapai', 'Lavun', 'Magama', 'Mariga', 'Mashegu', 'Mokwa', 'Moya', 'Paikoro', 'Rafi', 'Rijau', 'Shiroro', 'Suleja', 'Tafa', 'Wushishi', /* Add more districts */];
                } else if (a === '26') {
                var array = ['OGUN', 'Abeokuta North', 'Abeokuta South', 'Ado-Odo/Ota', 'Egbado North', 'Egbado South', 'Ewekoro', 'Ifo', 'Ijebu East', 'Ijebu North', 'Ijebu North East', 'Ijebu Ode', 'Ikenne', 'Imeko Afon', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North', 'Shagamu', /* Add more districts */];
                } else if (a === '27') {
                var array = ['ONDO', 'Akoko North-East', 'Akoko North-West', 'Akoko South-East', 'Akoko South-West', 'Akure North', 'Akure South', 'Ese Odo', 'Idanre', 'Ifedore', 'Ilaje', 'Ile Oluji/Okeigbo', 'Irele', 'Odigbo', 'Okitipupa', 'Ondo East', 'Ondo West', 'Ose', 'Owo', /* Add more districts */];
                } else if (a === '28') {
                var array = ['OSUN', 'Aiyedade', 'Aiyedire', 'Atakunmosa East', 'Atakunmosa West', 'Boluwaduro', 'Boripe', 'Ede North', 'Ede South', 'Egbedore', 'Ejigbo', 'Ife Central', 'Ife East', 'Ife North', 'Ife South', 'Ifedayo', 'Ifelodun', 'Ila', 'Ilesa East', 'Ilesa West', 'Irepodun', 'Irewole', 'Isokan', 'Iwo', 'Obokun', 'Odo Otin', 'Ola Oluwa', 'Olorunda', 'Oriade', 'Orolu', 'Osogbo'];

                } else if (a === '29') {
                var array = ['OYO', 'Afijio', 'Akinyele', 'Atiba', 'Atisbo', 'Egbeda', 'Ibadan North', 'Ibadan North-East', 'Ibadan North-West', 'Ibadan South-East', 'Ibadan South-West', 'Ibarapa Central', 'Ibarapa East', 'Ibarapa North', 'Ido', 'Irepo', 'Iseyin', 'Itesiwaju', 'Iwajowa', 'Kajola', 'Lagelu', 'Ogbomosho North', 'Ogbomosho South', 'Ogo Oluwa', 'Olorunsogo', 'Oluyole', 'Ona Ara', 'Orelope', 'Ori Ire', 'Oyo East', 'Oyo West', 'Saki East', 'Saki West', 'Surulere'];

                } else if (a === '30') {
                var array = ['PLATEAU', 'Barkin Ladi', 'Bassa', 'Bokkos', 'Jos East', 'Jos North', 'Jos South', 'Kanam', 'Kanke', 'Langtang North', 'Langtang South', 'Mangu', 'Mikang', 'Pankshin', 'Qua\'an Pan', 'Riyom', 'Shendam', 'Wase'];

                } else if (a === '31') {
                var array = ['RIVERS', 'Abua/Odual', 'Ahoada East', 'Ahoada West', 'Akuku-Toru', 'Andoni', 'Asari-Toru', 'Bonny', 'Degema', 'Eleme', 'Emuoha', 'Etche', 'Gokana', 'Ikwerre', 'Khana', 'Obio/Akpor', 'Ogba/Egbema/Ndoni', 'Ogu/Bolo', 'Okrika', 'Omuma', 'Opobo/Nkoro', 'Oyigbo', 'Port Harcourt', 'Tai'];

                } else if (a === '32') {
                var array = ['SOKOTO', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Isa', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wamako', 'Wurno', 'Yabo'];

                } else if (a === '33') {
                var array = ['TARABA', 'Ardo Kola', 'Bali', 'Donga', 'Gashaka', 'Gassol', 'Ibi', 'Jalingo', 'Karim Lamido', 'Kumi', 'Lau', 'Sardauna', 'Takum', 'Ussa', 'Wukari', 'Yorro', 'Zing'];

                } else if (a === '34') {
                var array = ['YOBE', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Geidam', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];

                } else if (a === '35') {
                var array = ['ZAMFARA', 'Anka', 'Bakura', 'Birnin Magaji/Kiyaw', 'Bukkuyum', 'Bungudu', 'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Chafe', 'Zurmi'];
                }



			var string = "";
			for (let i = 0; i < array.length; i++) {
				string = string + "<option>" + array[i] + "</option>";
			}
			string = "<select nmae = 'lol'>" + string + "</select>"
			document.getElementById('district').innerHTML = string;

		}
	</script>
	<script>
		var a;

		function display() {
			if (a == 0) {
				document.getElementById("majic").style.visibility = "hidden";
				document.getElementById("show").style.visibility = "visible";
				return a = 1;
			} else {
				document.getElementById("majic").style.visibility = "visible";
				document.getElementById("show").style.visibility = "hidden";
				// document.getElementById("show").style. visibility= "hidden";
				return a = 0;
			}

		}
	</script>
	<style>
		
		* {
			margin: 0;
			box-sizing: border-box;
		}


		.header {
			position: sticky;
			z-index: 100;
			top: 0rem;
			height: 69px;
			width: 100%;
			background-color: #00b300;
		}

		.select_element {
			width: 20px;
			background-color: transparent;
			border: none;
			text: none;
		}


		#logo {
			height: 66px;
			width: 100px;
			text-align: left;
			float: left;
		}

		.search_input {
			clear: none;
			float: left;
			margin-left: 20px;
			margin-top: 20px;

		}

		.proicon {
			float: right;
			margin-right: 10px;
			margin-top: 20px;
		}

		#icon {
			background-color: red;
			color: white;
		}

		.dropdown {
			float: right;
			margin-right: 20px;
			margin-top: 20px;


		}

		.options {
			color: yellow;
			margin-left: 5px;
			margin-right: 26px;
		}

		.icon2 {
			float: right;
			margin-right: 10px;
			margin-top: 20px;


		}

		.filter {
			float: right;
			margin-right: 800px;
			margin-top: 15px;
			background-color: transparent;
			color: black;


		}

		.filterbutton {
			background-color: transparent;
			border: none;
			margin-top: 5px;
			color: white;
		}

		.loginz {
			float: right;
			margin-right: 20px;
			margin-top: 20px;
		}

		.headerdown {
			background-color: transparent;
			height: 50px;
			width: 100%;
		}

		#majic {
			height: 70px;
			width: 100%;
			visibility: hidden;


		}

		#states {
			float: left;
			width: 150px;
			margin-left: -800px;
			margin-top: 20px;
			padding: 10px;

			border-radius: 25%;
			border-color: #00b300;
		}

		#district {
			/* height: 200px; */
			border-radius: 25%;
			border-color: #00b300;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 10px;
			margin-left: -400px;
			/* margin-right: -400px; */
		}

		.makeitgreen {
			color: #00b300;
			width: 156px;

		}

		.sel1 {
			color: green;
			float: left;
			margin-top: 3px;
		}

		.sel2 {
			border-color: green;
			color: green;
			float: left;
			margin-left: 600px;
			margin-top: 3px;
		}

		.sel3 {
			font-size: 20px;
			margin-top: 3px;
			float: right;
			margin-right: 5px;
		}

		.slideshow {
			margin-top: 20px;
			margin-left: 100px;
			margin-bottom: 20px;
			float: left;
			border-style: solid;
			clear: both;
			/*background-color: black;*/
		}


		#input1 {
			width: 220px;
			border: none;

		}


		#input1:active {
			background-color: tomato;

		}

		#opt {
			height: 50px;
			width: 100%;
			background-color: red;
			padding-top: 0px;
			margin-top: 0px;
		}

		#bas {
			float: left;
			/*margin-top: 15px;*/
			background-color: #FFD700;
			height: 50px;
		}



		#abc {
			float: right;
			/*margin-top: 15px;*/
			background-color: #FFD700;
			height: 50px;
		}

		#cde {
			float: left;
			margin-left: 680px;
			/*margin-top: 15px;*/
			background-color: #FFD700;
			height: 50px;
		}


		.carousel-indicators {
			list-style: none;
			background-color: transparent;
		}


		.carousel-control-prev {
			margin-left: 60px;
			/*color: red;*/
			margin-top: 10px;
		}

		.carousel-control-next {
			margin-right: 60px;
		}

		.wrapper {
			display: grid;
			grid-template-columns: 20% 20% 20% 20%;


			grid-column-gap: 20px;
			grid-row-gap: 10px;
			grid-column-gap: 20px;
			grid-row-gap: 10px;
			margin-left: 30px;

		}

		.inputwrapper {
			float: left;
			border-style: double;
			text-align: center;
			margin-left: 80px;
			width: 280px;
			margin-bottom: 20px;
			clear: auto;
		}


		.inputwrapper:last-child {
			margin-right: 30px;
			/*background-color: red;*/
		}

		.carousel-control-next {
			margin-right: 60px;
		}



		.addtocart {
			background-color: #FFD700;
		}

		.numberinput {
			width: 35px;

		}

		.tabless {
			border-collapse: separate;
			border-spacing: 20px;
			padding: 20px;
			border-style: solid;
			margin: 10px;
			/*background-color: red;*/
			border-width: 5px;
			border-radius: 16px;
			border-color: black;
			text-align: center;
			align-items: center;
			min-width: 500px;
			margin-left: 100px;
		}


		.picha {
			height: 300px;
			width: 500px;
			background-color: red;
		}

		.images {
			transition: 0.5s;
		}

		.images:hover {
			width: 625px;
			height: 425px;
			box-shadow: 5px 5px 10px grey;
			transition: 0.5s;
		}

		.small_images:hover {
			height: 215px;
			width: 315px;
			box-shadow: 5px 5px 10px grey;
			transition: 0.5s;
		}

		#heading {
			font-size: 20px;
			color: white;
			text-align: center;
			background-color: black;
			justify-content: center;
		}



		.addtocart {
			background-color: #FFD700;
		}

		.bestselers {
			background-color: red;
			border-style: solid;
			float: left;
			margin-top: 10px;
			/*margin: 20px;*/
			margin-bottom: 10px;
			margin-right: 40px;
			margin-left: 45px;
		}

		.bestselers:last-child {
			margin-right: 50px;
		}


		#fruits {
			text-align: center;
		}

		.veg {

			float: left;

			margin-left: 30px;
			border-style: solid;
			margin-top: 10px;
		}

		.veg img:hover {
			height: 270px;
			width: 350px;

		}

		#vegs {
			height: 270px;
			width: 1498px;
			/*margin: 20px;*/
			margin-right: 10px;
			margin-left: 10px;
			/*background-color: blue;*/
			margin-top: 20px;

		}

		.veg:first-child {
			margin-left: 80px;
		}

		.veg:last-child {
			margin-right: 20px;
		}

		#crops {
			height: 270px;
			width: 1498px;
			/*margin: 20px;*/
			margin-right: 10px;
			margin-left: 10px;
			/*background-color: blue;*/
			margin-top: 20px;

		}

		.crop:first-child {
			margin-left: 80px;
		}

		.crop:last-child {
			margin-right: 20px;
		}

		.crop {
			/*    height: 210px;
			width: 300px;
		*/
			float: left;
			/*  height: 200px;
			width: 300px;*/
			margin-left: 30px;
			border-style: solid;
			margin-top: 10px;
		}

		.crop img:hover {
			height: 270px;
			width: 350px;

		}

		.content_item {
			text-align: center;
			justify-content: center;

		}

		.etc {
			margin-left: -90px;
			min-width: 90px;
			font-size: 20px;

		}

		.crop_items {
			color: green;
		}

		.footer {
			height: 70px;
			width: 100%;
			/* background-color:red; */
			clear: both;

		}

		.payment {
			float: left;
			/* size:20% 50%;
		 */
			margin-left: 520px;
			font-size: 20px;
			margin-top: 25px;
		}

		.cash {
			float: left;
			margin-top: 0px;
			margin-left: 20px;
			margin-right: 20px;
		}

		.paytm {
			float: left;
			/* margin-left:500px; */
		}

		h3 {
			width: 100%;
			text-align: center;
			border-bottom: 1px solid #000;
			line-height: 0.1em;
			margin: 10px 0 20px;
		}

		h3 span {
			background: #fff;
			padding: 0 10px;
		}

		.morefooter {
			height: 100px;
			width: 100%;
			background-color: white;

		}

		.call {
			float: left;
			font-size: 20px;
			margin-left: 150px;
			margin-top: 25px;
		}

		.gmail {
			margin-top: 10px;
			float: right;
			margin-right: 150px;

		}

		.instagram {
			margin-top: 10px;
			float: left;
			margin-left: 420px;
		}

		.instaid {
			height: 10px;
			width: 100%;

		}

		.text {
			float: left;
			margin-left: 735px;
			margin-top: -50px;
		}

		.gmailid {
			float: right;
			margin-right: 80px;
			margin-top: -60px;
		}

		.copy {
			float: left;
			margin-top: -65px;
			/* background-color:grey; */
		}

		.dric {
			margin-left: -50px;
		}

		#select1 {
			/* margin-left: -700px; */
			float: right;
			/* margin-right: -100px; */
			border-radius: 25%;
			border-color: #00b300;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 10px;
			margin-right: 400px;
			margin-left: -450px;
			/*	margin-right: -400px; */
		}

		.submit {
			float: right;
			/* margin-right: 20px; */
			margin-right: -70px;
			background-color: transparent;
			border-style: solid;
			border-width: 1px;
			border-radius: 25%;
			border-color: #00b300;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 10px;

		}
	</style>

</head>

<body>


	<div class="header">

		<a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

		<div class="search_input">
			<form action="SearchResults.php" method="get" enctype="multipart/form-data">
				<i class="fas fa-search" style="font-size:20px;color:white; "></i>
				<input type="text" id="input1" name="search" placeholder="Search...">
			</form>
		</div>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
			<ul class="dropdown-menu etc">
				<?php
				if (isset($_SESSION['phonenumber'])) {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransactions.php'><label class='makeitgreen'>Transactions</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Subscription</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmers</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
				} else {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
				}
				?>
		</div>
		<div class="proicon">
			<?php
			if (!isset($_SESSION['phonenumber'])) {
				echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
			} else {
				echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
			}
			?>
		</div>

		<div class="icon2">
			<a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
			<span id="icon"> <?php echo totalItems(); ?> </span>
		</div>

		<div class="loginz">
			<?php getUsername(); ?>
		</div>

		<div class="filter">
			<button class="filterbutton " onclick="display()">Filter
				<i class="fas fa-filter"></i></button>
		</div>
	</div>
	<div class="headerdown">
		<div id="show">
			<div class="sel1 sel">
				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
					<span class="caret"></span></button>
				<ul class="dropdown-menu  ">
					<?php getCrops(); ?>
				</ul>
			</div>
			<div class="sel2 sel">
				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
					<span class="caret"></span></button>
				<ul class="dropdown-menu ">
					<?php getVegetables(); ?>
				</ul>
			</div>
			<div class="sel3 sel">
				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
					<span class="caret"></span></button>
				<ul class="dropdown-menu ">
					<?php getFruits(); ?>
				</ul>
			</div>
		</div>
		<!-- <form action="" method="post"> -->
		<div id="majic" class="headerdown ">

			<table>
				<input class="submit" type="submit" value="SUBMIT">
				<select id="select1">
					<option value="0">Prices</option>
					<option value="1">High to low</option>
					<option value="2">Low to High</option>

				</select>
				<select id="states" onchange="state()" tabindex="1">
					<option value="0">Select State</option>
					<option value="01">ABIA</option>
					<option value="02">ADAMAWA</option>
					<option value="03">AKWA IBOM</option>
					<option value="04">ANAMBRA</option>
					<option value="05">BAUCHI</option>
					<option value="06">BAYELSA</option>
					<option value="07">BENUE</option>
					<option value="08">BORNO</option>
					<option value="09">CROSS RIVER</option>
					<option value="10">DELTA</option>
					<option value="11">EBONYI</option>
					<option value="12">EDO</option>
					<option value="13">EKITI</option>
					<option value="14">ENUGU</option>
					<option value="15">GOMBE</option>
					<option value="16">IMO</option>
					<option value="17">JIGAWA</option>
					<option value="18">KADUNA</option>
					<option value="19">KANO</option>
					<option value="20">KATSINA</option>
					<option value="21">KEBBI</option>
					<option value="22">KOGI</option>
					<option value="23">KWARA</option>
					<option value="24">LAGOS</option>
					<option value="25">NASARAWA</option>
					<option value="26">NIGER</option>
					<option value="27">OGUN</option>
					<option value="28">ONDO</option>
					<option value="29">OSUN</option>
					<option value="30">OYO</option>
					<option value="31">PLATEAU</option>
					<option value="32">RIVERS</option>
					<option value="33">SOKOTO</option>
					<option value="34">TARABA</option>
					<option value="35">YOBE</option>
					<option value="36">ZAMFARA</option>
					<option value="37">FCT (ABUJA)</option>
				</select>



				<select name="selectDistrict" id="district">
					<option>Select District</option>
				</select>
				<!-- Price:low to hight  -->


			</table>
			<!-- </form> -->
			<!-- <?php
				if (isset($_POST['selectState'])) {
					$selectState = $_POST['selectState'];
					echo "<script>window.alert($selectState);</script>";
				} else {
					$selectState = $_POST['selectState'];
					echo "<script>alert($selectState);</script>";
				}
				?> -->
		</div>
	</div>


	<div class="slideshow" id="showing">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">

				<div class="carousel-item">
					<img class="images1" src="../portal_files/same1.jpg" height="500px" width="1300px" alt="...">
				</div>
				<div class="carousel-item active">
					<img class="images1" src="../Images/Website/organic.png" height="500px" width="1350px" alt="...">
				</div>
				<div class="carousel-item">
					<img class="images1" src="../portal_files/same3.jpg" height="500px" width="1350px" alt="...">
				</div>
			</div>
		</div>
	</div>

	<a class="carousel-control-prev" href="" role="button" data-slide="prev">

		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>

	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Fruit's</b></label></div>
	<table class="tabless">
		<tr>
			<th rowspan=2 colspan=2><a href="../BuyerPortal/BuyerProductDetails.php?id=31"><img class="images " src="../Admin/product_images/strawberry.jpg" width=600px height=400px></a></th>
			<td><a href="../BuyerPortal/BuyerProductDetails.php?id=17"><img class="small_images" src="../Admin/product_images/Bananas.jpg" height="200px" width="300px"></a></td>
			<td><a href="../BuyerPortal/BuyerProductDetails.php?id=24"><img class="small_images " src="../Admin/product_images/Apple.jpg" height="200px" width="300px"></a></td>
		</tr>
		<td><a href="../BuyerPortal/BuyerProductDetails.php?id=27"><img class="small_images " src="../Admin/product_images/Mango.jpg" height="200px" width="300px"></a></td>
		<td><a href="../BuyerPortal/BuyerProductDetails.php?id=32"><img class="small_images " src="../Admin/product_images/orange.jpg" height="200px" width="300px"></a></td>
		<tr>

		</tr>
	</table>


	</table><br>
	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Vegetable's</b></label></div>
	<div id="vegs">
		<?php getVegetablesHomepage(); ?>

	</div>


	<br>

	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Crop's</b></label></div>
	<div id="crops">
		<?php getCropsHomepage(); ?>
	</div>
	<hr><br>
	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Best Products </b></label></div><br>
	<hr>
	<div>

		<?php
		cart();
		getProducts();
		?>
	</div>


	<div class="footer">
		<hr>

		<label class="payment">Payment Options:-</label>
		<div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
		<div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
	</div><br><br>
	<h3><span> GET SOCIAL WITH US </span></h3>
	</div>

	<div class="morefooter">
		<div class="call">
			<i class="fas fa-phone-alt call_color"></i>
			<a href="#" style="color:black;">+91-8191046421</a>
		</div>

		<div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
		</div>

		<div class="gmail">
			<img src="../Images/Website/gmail.jpg" height="30px" width="50px">
		</div>

	</div>
	<div class="instaid">
		<div class="text"><a href="#" style="color:black;">@AgroCraft</a></div>
		<div class="gmailid">
			<a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a></div>

	</div>


	<div class="copy">
		<h5 style="text-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
	</div>
</body>

</html>