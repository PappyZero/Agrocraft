<?php
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Buyer Homepage</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <a href="https://icons8.com/icon/83325/roman-soldier"></a>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
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
          .myfooter {
               background-color: #292b2c;

               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          /* .images {
            transition: 0.5s;
        } */

          .images:hover {

               height: 220px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.3s;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               /* font-family: serif; */
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          .mobtext {
               display: block;
          }

          .destext {
               display: none;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               font-family: serif;
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          /* .settings{
    margin-left:10px;
} */
          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .guard {
                    width: 100%;
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    line-height: 0.1em;
                    margin: 10px 0 20px;
                    font-family: serif;
               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }

               .mobtext {
                    display: none;
               }

               .destext {
                    display: inline-block;
                    width: 90%;
                    margin-left: 5%;
                    margin-right: 5%;
               }

               .mycarousel {
                    display: none;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               /* 
            .settings{
            margin-left:79%;
        } */
               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }

               .guard {
                    /* width: 100%; */
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    /* line-height: 0.1em; */
                    /* margin: 10px 0 20px; */
                    /* font-family: serif; */

               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }
          }




          /* Image Grig */


          * {
               box-sizing: border-box;
          }

          body {
               margin: 0;
               font-family: Arial;
          }

          .header {
               text-align: center;
               padding: 32px;
          }

          .row {
               display: -ms-flexbox;
               /* IE10 */
               display: flex;
               -ms-flex-wrap: wrap;
               /* IE10 */
               flex-wrap: wrap;
               padding: 0 4px;
          }

          /* Create four equal columns that sits next to each other */
          .column {
               -ms-flex: 25%;
               /* IE10 */
               flex: 25%;
               max-width: 25%;
               padding: 0 4px;
          }

          .column img {
               margin-top: 8px;
               vertical-align: middle;
               width: 100%;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }






          #headings {
               /* text-shadow: 2px 1px #666666; */
               font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }

          @media screen and (max-width: 800px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          @media screen and (max-width: 600px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          /* Responsive layout - makes a two column-layout instead of four columns */
          /* @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        } */

          /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
          /* @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        } */
     </style>
     <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>

<nav class="navbar navbar-expand-xl ">

<div class=" flex-row-reverse left ">

    <div class="p-2">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
    <a class="float-left" href="bhome.php">
        <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
    </a>
</div>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
</button>
<a class="float-left" href="bhome.php">
    <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
</a>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <div class="input-group mb-1 ml-2 searchbox">
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
        </div>
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
        </form>
    </div>
    <?php
    getUsername();
    ?>
    <div class="list-group moblists">

        <?php
        if (isset($_SESSION['phonenumber'])) {
            echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
            echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Transactions</a>";
            echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Save For Later</a>";
            echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Subscriptions</a>";
            echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Farmers</a>";
            echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
        } else {
            echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Login</a>";
        }
        ?>

    </div>
</div>




<div class=" flex-row-reverse right ">
    <div class="p-2 cart">
        <div class="icon2">
            <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
            <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
        </div>
    </div>
    <div class="dropdown p-2 settings ">
        <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php
            if (isset($_SESSION['phonenumber'])) {
                echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                echo "<a href='#' class='dropdown-item'  style='padding-right:-20px;'>Subscriptions</a>";
                echo "<a href='saveforlater.php' class='dropdown-item' style='padding-right:-20px;'>Save For Later</a>";
                echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
            } else {
                echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
            }
            ?>
        </div>
    </div>


    <div class="text-success  login">Login</div>
</div>

</nav>
     <div class="container">
          <div class="d-flex justify-content-around bg-white mb-3">

               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Fruits
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getFruits();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Vegetables
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getVegetables();
                              ?>
                         </div>
                    </div>
               </div>
               <div class="p-2 ">
                    <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Crops
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php
                              getCrops();
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>






     <form action="" method="post">
          <div class="container">
               <div class="row   p-2">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                         <div class="text-center">
                              <h4 class="font-weight-bold
                              " style="color: #FFD700 ">Select your region</h4>
                         </div>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 States">

                    <select class="p-2 shadow-lg" id="states" name="stateInput" onchange="state()" tabindex="1" style="border-radius: 6px; margin-right:  200px; border-color:#FFD700 ">
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
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 districts">
                         <!-- <div class="dropdown">
                         <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <b>Districts</b>
                         </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Patato</a>
                              <a class="dropdown-item" href="#">Carrot</a>
                              <a class="dropdown-item" href="#">Onion</a>
                         </div>
                    </div> -->
                         <select class="p-2 ml-5 shadow-lg" name="districtInput" id="district" style="border-radius: 6px; border-color: #FFD700 ">
                              <option>Select District</option>
                         </select>

                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go">
                         <button class='btn btn-border-secondary mx-5 ' name='go' type='submit' style='color:black ;float:right;font-weight:50px; background-color: black;color:#FFD700'>Filter</button>
                    </div>
               </div>

          </div>
          </div>
     </form>
     <?php
     if (isset($_POST['go'])) {
          $districtInput = $_POST['districtInput'];
          $stateInput = $_POST['stateInput'];
          echo $stateInput;
          echo "<br>";
          echo $districtInput;

          if ($stateInput != '0' && $districtInput == 'Select District') {
               echo "<script>window.open('StateSearch.php?state=$stateInput','_self')</script>";
          } else {
               echo "<script>window.open('DistrictSearch.php?district=$districtInput','_self')</script>";
          }
     }

     ?>





     <div class="container">
          <br>
          <div class="row">


               <?php
               cart();
               ?>
               <?php
               if (isset($_GET['type'])) {

                    $search_query = $_GET['type'];
                    $get_pro = "select * from products where product_type = '$search_query'";
                    $run_pro = mysqli_query($con, $get_pro);
                    // $count = mysqli_num_rows($run_pro);
                    if ($run_pro) {
                         echo "<br>";
                         while ($rows = mysqli_fetch_array($run_pro)) {
                              $product_id = $rows['product_id'];
                              $product_title = $rows['product_title'];
                              $product_image = $rows['product_image'];
                              $product_price = $rows['product_price'];
                              $product_delivery = $rows['product_delivery'];
                              $farmer_fk = $rows['farmer_fk'];
                              $farmer_name_query = "select farmer_name from farmerregistration where farmer_id = $farmer_fk";
                              $running_query_name = mysqli_query($con, $farmer_name_query);
                              while ($names = mysqli_fetch_array($running_query_name)) {
                                   $name = $names['farmer_name'];
                              }

                              if ($product_delivery == "yes") {
                                   $product_delivery = "Delivery by Farmer";
                              } else {
                                   $product_delivery = "Delivery by Farmer Not Available";
                              }
                              echo "
                    <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
                <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                    <br>
                    <div class='mt-0'><b>
                            <h4><img src='iconsmall.png' style='width: 28px; margin-bottom:  10px;'> $name
                        </b></h4>
                    </div>
                    <a href='../BuyerPortal2/ProductDetails.php?id=$product_id'>
                        <img class='card-img-top' src='../Admin/product_images/$product_image' alt='Card image cap' height='300px'>
                    </a>
                    <form action = '' method = 'post'>
                    <div class='card-body pb-0'>
                        <div class='row'>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                <div class='input-group mb'>
                                    <div class='input-group-prepend'>
                                        <h5 class='card-title font-weight-bold'>$product_title</h5>
                                    </div>

                                </div>
                            </div>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                <div class='input-group mb-1'>
                                    <div class='input-group-prepend'>
                                        <span class='input-group-text bg-warning border-secondary p-1' style='color:black;' id='inputGroup-sizing-default' placeholder='1'><b>Quantity</b></span>
                                    </div>
                                    <input type='number' class='form-control' aria-label='Default' style='margin-top:0%;width:20%;padding:0%;' aria-describedby='inputGroup-sizing-default'>
                                </div>
                            </div>
                        </div>
                        <p class='card-text mb-2 font-weight-bold'>PRICE:- $product_price Rs/kg</p>
                        <div class='row'>
                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                              <button class='btn btn-warning border-secondary mr-1 ' name='cart' type = 'submit' style='color:black ;font-weight:50px;'>Add to cart<img src='carticons.png' height='20px'></button>
                            </div>
                        </div>
                    </div>
                       </form>
                </div>
            </div>
           ";
                              if (isset($_POST['cart'])) {

                                   if (isset($_POST['quantity'])) {
                                        $qty = $_POST['quantity'];
                                   } else {
                                        $qty = 1;
                                   }
                                   global $con;
                                   if (isset($_SESSION['phonenumber'])) {
                                        $sess_phone_number = $_SESSION['phonenumber'];

                                        $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                                        $run_check = mysqli_query($con, $check_pro);

                                        if (mysqli_num_rows($run_check) > 0) {
                                             echo "";
                                        } else {
                                             $subtotal = $product_price * $qty;
                                             $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                                             $run_insert_pro = mysqli_query($con, $insert_pro);
                                             echo "<script>window.location.reload(true)</script>";
                                        }
                                   } else {
                                        echo "<script>window.alert('Please Login First!');</script>";
                                   }
                              }
                         }
                    } else {
                         echo "<br><br><hr><h1 align = center>Product's Not Available !</h1><br><br><hr>";
                    }
               }
               ?>
          </div>
          <br><br>


     </div>
     </div>



     <!-- footer -->
     <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <br>
                         <h5>Payment Option</h5>
                         <img src="../Images/Website/paytm1.jpg" alt="paytm">
                         <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                         <ul class="list-unstyled list-inline social text-center">
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                         </ul>
                    </div>
                    </hr>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                         <p><u><a href="https://www.agrocraft.com/">AgroCraft Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                         <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agrotech</a></p>
                    </div>
                    </hr>
               </div>
          </div>
     </section>
     <!-- ./Footer a ,myfooter,aligncenter-->
</body>

</html>