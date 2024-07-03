<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Product Details</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

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
               margin-left: -400px;
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
               margin-left: 150px;
               margin-right: -400px;
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

          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
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
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
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
               clear: both;
          }

          .payment {
               float: left;
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
          }

          .ribbon {
               /* text-align: center; */
               height: 200px;
               margin-left: 10%;
               margin-top: 8%;
          }

          .box {

               color: rgb(6, 36, 7);
               width: 370px;
               line-height: 40px;
               float: center;
               margin: auto;
               text-align: center;
               margin-top: 50px;
               padding: 5px;
               border-style: outset;
               /* border-width: 5px;
            border-radius: 16px; */
               border-color: lightgrey;
               /* font-size:20px; */
               height: 400px;

          }

          .idk {
               /* text-align:center; */
               margin-top: 10%;

          }

          .textarea {
               width: 50%;
               height: 10%;
          }

          .one {
               /* width:35px; */
               text-align: center;
               background-color: #FFD700;
               /* float:left; */
               /* margin-right: 50%; */
          }

          .hen {
               float: right;
          }

          .newarrival {
               background: green;
               width: 50px;
               color: white;
               font-size: 12px;
               font-weight: bold;
          }

          .col-md-7 h2 {
               color: #555;
          }

          /* .col-md-7{
                 text-align: center;
            } */
          .price {
               font-size: 20px;
               font-weight: bold;
               padding-top: 20px;
               /* margin-left: 15%; */
               color: darkolivegreen;

          }

          .some {

               font-weight: 10px;
          }

          .ri {
               float: right;
          }

          input {
               width: 9%;
               text-align: center;
          }

          .th {
               background-color: #FFD700;
               float: right;
          }

          .done {
               float: left;
               margin-left: 10%;
          }

          .mid {
               text-align: top;

          }

          .bye {
               margin-left: 10%;
          }

          .happy {
               float: right;
          }

          .doing {
               /* width:15px;    */
               text-align: center;
               background-color: #FFD700;
               float: right;
               /* float:left; */
               /* margin-right: 50%; */
               /* margin-bottom: 0px;
               bottom: 0px; */
               /* margin-top: 125px; */
               margin-right: 15px;

          }

          .mid {
               text-align: center;
               font-size: 20px;
          }

          .midone {
               margin-left: 20px;
               float: left;
          }

          .midd {
               text-align: center;
               /* margin-right:5%; */
               float: right;

          }

          .nice {
               border-color: gray;
               border-width: 5px;
               border-style: outset;
               height: 400px;
               width: 400px;
               margin-top: 50px;

          }

          #linebreak {
               display: block;
               margin-bottom: 1.25em;
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

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Customer Care</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmer</label></a></li>";

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
          <div id="majic" class="headerdown ">
               <table>
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


                    <select name="" id="district">
                         <option>Select District</option>
                    </select>


               </table>
          </div>
     </div>


     <div>



          <?php
          if (isset($_GET['id'])) {
               global $con;
               $product_id  = $_GET['id'];
               $query = "select * from products where product_id = $product_id";
               $run_query = mysqli_query($con, $query);
               echo "<br>";
               while ($rows = mysqli_fetch_array($run_query)) {
                    $farmer_fk = $rows['farmer_fk'];
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_price = $rows['product_price'];
                    $product_stock = $rows['product_stock'];
                    $product_delivery = $rows['product_delivery'];
                    $product_desc = $rows['product_desc'];
                    if ($product_delivery == "yes") {
                         $product_delivery = "Delivery by Farmer";
                    } else {
                         $product_delivery = "Delivery by Farmer Not Available";
                    }
                    $querya = "select * from farmerregistration where farmer_id = $farmer_fk";
                    $runa_query = mysqli_query($con, $querya);
                    echo "<br>";
                    while ($rows = mysqli_fetch_array($runa_query)) {
                         $name = $rows['farmer_name'];
                         $phone = $rows['farmer_phone'];
                         $address = $rows['farmer_address'];

                         echo "<div class='container'>
                              <div class='row'>
                                   <div class='col-md-4'>
                                        <div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
                                             <div class='carousel-inner'>
                                                  <div class='carousel-item active'>
                                                       <div class='nice'> <img src='../Admin/product_images/$product_image' height=400px class='d-block w-100'></div>
                                                  </div>

                                             </div>

                                        </div>
                                   </div>
                                   <div class='col-md-4'>
                                        <label>
                                             <p class='newarrival text-center'>FRESH</p>
                                        </label>
                                        <div class='mid'>
                                             <h2> $product_title</h2>
                                        </div><br>

                                        <p class='price'>Price<i class='fa fa-rupee fa-1x'></i> : $product_price  Rs</p>
                                        <p class='price'>Stock : $product_stock Kg</p>
                                        <br>


                                        <form action = '' method = 'post'>
                                        <div class='mid'><label ><b>Quantity</b></label>
                                             
                                             <input type='number' style = 'width:80px;' name = 'quantity' value='1'>
                                            
                                        </div>

                                        <br><button type = 'submit' name = 'save' class='one'>Save for Later<i  style = 'padding:4px;padding-bottom:7px;' class='fa fa-shopping-basket fa-2x'></i></button>

                                        <div class='ri'><button type = 'submit' name = 'cart'  style = 'padding:4px;padding-bottom:7px;' class='addtocart'>ADD TO CART <i class='fa fa-shopping-cart fa-2x' style=' background-color:#FFD700'></i></button></a><br><br>    
                                        </div><br>
                                        </form>



                                        <br><br><i class='fa fa-truck fa-1x'></i><label  style = 'padding-left:9px;' > $product_delivery</label>
                                   </div>
                                   <div class='box'><br>
                                        <h2> FARMER DETAILS </h2>
                                        <span id='linebreak'></span>
                                        <label><b> Name: </b></label><label style = 'padding-left:10px;'>$name</label><br>
                                        <label><b>  Phone Number :  </b> </label><label style = 'padding-left:10px;'>$phone</label>
                                        <br><label>
                                             <div class='midd'>
                                                  <div class='midone'><b  style = 'padding-right:10px;' >Address:</b></div><textarea style = 'background-color:transparent' disabled cols='24'>$address</textarea>
                                             </div>
                                        </label><label></label>
                                        <a href = '../ChatSystem/index.php'><button class='doing' style = 'padding-left:7px;'>Chat <i class='fa fa-comment fa-1x'></i></button></a>
                                   </div>

                                   <div class='col-md-4'> <br>
                                        <div class='bye'>
                                             <p class='some'>
                                                  <h2> Description</h2>
                                             </p><br>
                                             <p>$product_desc</p><br>
                                        </div>

                                   </div>
                              </div>

                         </div>";

                         if (isset($_POST['cart'])) {

                              if (isset($_POST['quantity'])) {
                                   $qty = $_POST['quantity'];
                              } else {
                                   $qty = 1;
                              }
                              global $con;
                              $sess_phone_number = $_SESSION['phonenumber'];

                              $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                              $run_check = mysqli_query($con, $check_pro);

                              if (mysqli_num_rows($run_check) > 0) {
                                   echo "";
                              } else {
                                   $insert_pro = "insert into cart (product_id,phonenumber,qty) values ('$product_id','$sess_phone_number','$qty')";
                                   $run_insert_pro = mysqli_query($con, $insert_pro);
                                   // echo "<script>window.location.reload(true)</script>";
                              }
                         }
                    }
               }
          }
          ?>







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
               <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
     </div>

</body>

</html>