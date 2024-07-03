<?php

include("../Includes/db.php");
session_start();
$sessphonenumber = $_SESSION['phonenumber'];
$sql = "select * from farmerregistration where farmer_phone = $sessphonenumber";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $pan = $row['farmer_pan'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
    $account = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Password</title>
    <script>
        function state() {
            var a = document.getElementById('states').value;
            if (a === 'ABIA') {
                var array = ['Aba', 'Umuahia', 'Ohafia', 'Arochukwu', 'Bende', 'Ikwuano', 'Isiala Ngwa North', 'Isiala Ngwa South', 'Isuikwuato', 'Ukwa East', 'Ukwa West', 'Umu Nneochi'];
            } else if (a === 'ADAMAWA') {
                var array = ['Yola', 'Mubi', 'Numan', 'Michika', 'Madagali', 'Ganye', 'Gombi', 'Guyuk', 'Hong', 'Jada', 'Lamurde', 'Maiha', 'Mayo-Belwa', 'Shelleng', 'Song', 'Toungo', 'Fufore', 'Demsa', 'Yola South'];
            } else if (a === 'AKWA IBOM') {
                var array = ['Uyo', 'Ikot Ekpene', 'Eket', 'Oron', 'Abak', 'Ibeno', 'Ikot Abasi', 'Itu', 'Mbo', 'Nsit Ibom', 'Nsit Ubium', 'Onna', 'Ukanafun', 'Udung Uko', 'Etinan', 'Ibiono Ibom', 'Mkpat Enin', 'Obot Akara', 'Oruk Anam'];
            } else if (a === 'ANAMBRA') {
                var array = ['Awka', 'Onitsha', 'Nnewi', 'Aguleri', 'Ekwulobia', 'Igbo Ukwu', 'Ihiala', 'Nnobi', 'Obosi', 'Okija', 'Ozubulu', 'Uga', 'Ukpor', 'Umuleri', 'Umunya'];
            } else if (a === 'BAUCHI') {
                var array = ['Bauchi', 'Azare', 'Misau', 'Katagum', 'Ningi', 'Jama\'are', 'Gamawa', 'Dass', 'Darazo', 'Bogoro', 'Zaki', 'Tafawa Balewa', 'Warji', 'Shira', 'Giade', 'Dambam', 'Alkaleri', 'Toro'];
            } else if (a === 'BAYELSA') {
                var array = ['Yenagoa', 'Brass', 'Ekeremor', 'Kolokuma/Opokuma', 'Nembe', 'Ogbia', 'Sagbama', 'Southern Ijaw'];
            } else if (a === 'BENUE') {
                var array = ['Makurdi', 'Gboko', 'Otukpo', 'Katsina-Ala', 'Ukum', 'Logo', 'Guma', 'Tarka', 'Buruku', 'Gwer East', 'Gwer West', 'Konshisha', 'Oju', 'Ohimini', 'Ogbadibo', 'Apa', 'Agatu'];
            } else if (a === 'BORNO') {
                var array = ['Maiduguri', 'Bama', 'Biu', 'Chibok', 'Dikwa', 'Gubio', 'Gwoza', 'Hawul', 'Jere', 'Kaga', 'Kukawa', 'Konduga', 'Kwaya Kusar', 'Mafa', 'Magumeri', 'Ngala', 'Nganzai', 'Shani'];
            } else if (a === 'CROSS RIVER') {
                var array = ['Calabar', 'Ikom', 'Obudu', 'Ogoja', 'Ugep', 'Akpabuyo', 'Bekwarra', 'Biase', 'Boki', 'Etung', 'Obubra', 'Odukpani', 'Yakurr', 'Yala'];
            } else if (a === 'DELTA') {
                var array = ['Asaba', 'Warri', 'Sapele', 'Ughelli', 'Agbor', 'Bomadi', 'Burutu', 'Ethiope East', 'Ethiope West', 'Ika North East', 'Ika South', 'Isoko North', 'Isoko South', 'Ndokwa East', 'Ndokwa West', 'Okpe', 'Oshimili North', 'Oshimili South', 'Patani', 'Udu', 'Ughelli North', 'Ughelli South', 'Ukwuani', 'Uvwie', 'Warri South', 'Warri North', 'Warri South West'];
            } else if (a === 'EBONYI') {
                var array = ['Abakaliki', 'Afikpo', 'Ikwo', 'Ezza North', 'Ezza South', 'Ishielu', 'Ivo', 'Ohaozara', 'Onicha', 'Izzi', 'Ohaukwu'];
            } else if (a === 'EDO') {
                var array = ['Benin City', 'Auchi', 'Ekpoma', 'Uromi', 'Abudu', 'Agenebode', 'Igarra', 'Igueben', 'Irrua', 'Sabongida-Ora'];
            } else if (a === 'EKITI') {
                var array = ['Ado Ekiti', 'Ikere Ekiti', 'Aramoko Ekiti', 'Efon Alaaye', 'Emure Ekiti', 'Ido Ekiti', 'Ijero Ekiti', 'Ikole Ekiti', 'Ise Ekiti', 'Oye Ekiti'];
            } else if (a === 'ENUGU') {
                var array = ['Enugu', 'Nsukka', 'Awgu', 'Udi', 'Oji River', 'Enugu East', 'Enugu North', 'Enugu South', 'Ezeagu', 'Igbo Etiti', 'Igbo Eze North', 'Igbo Eze South', 'Isi Uzo', 'Nkanu East', 'Nkanu West', 'Uzo Uwani'];
            } else if (a === 'GOMBE') {
                var array = ['Gombe', 'Kaltungo', 'Billiri', 'Dukku', 'Funakaye', 'Kumo', 'Kwami', 'Nafada', 'Shongom', 'Yamaltu/Deba'];
            } else if (a === 'IMO') {
                var array = ['Owerri', 'Orlu', 'Okigwe', 'Oguta', 'Mbaise', 'Mbano', 'Nkwerre', 'Njaba', 'Ohaji/Egbema', 'Isiala Mbano', 'Ihitte/Uboma', 'Ideato North', 'Ideato South'];
            } else if (a === 'JIGAWA') {
                var array = ['Dutse', 'Hadejia', 'Kazaure', 'Birnin Kudu', 'Gumel', 'Ringim', 'Babura', 'Birniwa', 'Buji', 'Gagarawa', 'Garki', 'Guri', 'Gwaram', 'Gwiwa', 'Hadejia', 'Jahun', 'Kafin Hausa', 'Kaugama', 'Kazaure', 'Kiri Kasama', 'Kiyawa', 'Maigatari', 'Malam Madori', 'Miga', 'Ringim', 'Roni', 'Sule Tankarkar', 'Taura', 'Yankwashi'];
            } else if (a === 'KADUNA') {
                var array = ['Kaduna', 'Zaria', 'Kafanchan', 'Kagoro', 'Kachia', 'Birnin Gwari', 'Jemaa', 'Saminaka', 'Lere', 'Ikara', 'Soba', 'Zangon Kataf', 'Giwa', 'Chikun', 'Kajuru', 'Kaura', 'Jaba'];
            } else if (a === 'KANO') {
                var array = ['Kano', 'Wudil', 'Gwarzo', 'Rano', 'Karaye', 'Bebeji', 'Bichi', 'Dala', 'Dambatta', 'Dawakin Kudu', 'Dawakin Tofa', 'Doguwa', 'Fagge', 'Gabasawa', 'Garko', 'Garun Mallam', 'Gaya', 'Gezawa', 'Gwale', 'Gwarzo', 'Kabo', 'Kano Municipal', 'Karaye', 'Kibiya', 'Kiru', 'Kumbotso', 'Kunchi', 'Kura', 'Madobi', 'Makoda', 'Minjibir', 'Nasarawa', 'Rano', 'Rimin Gado', 'Rogo', 'Shanono', 'Sumaila', 'Takai', 'Tarauni', 'Tofa', 'Tsanyawa', 'Tudun Wada', 'Ungogo', 'Warawa', 'Wudil'];
            } else if (a === 'KATSINA') {
                var array = ['Katsina', 'Daura', 'Funtua', 'Bakori', 'Batagarawa', 'Batsari', 'Baure', 'Bindawa', 'Charanchi', 'Dan Musa', 'Dandume', 'Danja', 'Daura', 'Dutsi', 'Dutsin Ma', 'Faskari', 'Funtua', 'Ingawa', 'Jibia', 'Kafur', 'Kaita', 'Kankara', 'Kankia', 'Katsina', 'Kurfi', 'Kusada', 'Mai\'Adua', 'Malumfashi', 'Mani', 'Mashi', 'Matazu', 'Musawa', 'Rimi', 'Sabuwa', 'Safana', 'Sandamu', 'Zango'];
            } else if (a === 'KEBBI') {
                var array = ['Birnin Kebbi', 'Argungu', 'Bagudo', 'Aliero', 'Arewa Dandi', 'Augie', 'Birnin Kebbi', 'Bunza', 'Dandi', 'Fakai', 'Gwandu', 'Jega', 'Kalgo', 'Koko Besse', 'Maiyama', 'Ngaski', 'Sakaba', 'Shanga', 'Suru', 'Wasagu Danko', 'Yauri', 'Zuru'];
            } else if (a === 'KOGI') {
                var array = ['Lokoja', 'Anyigba', 'Idah', 'Okene', 'Kabba', 'Ajaokuta', 'Ankpa', 'Bassa', 'Dekina', 'Ibaji', 'Igalamela Odolu', 'Ijumu', 'Kogi', 'Mopa Muro', 'Ofu', 'Ogori Magongo', 'Okehi', 'Olamaboro', 'Omala', 'Yagba East', 'Yagba West'];
            } else if (a === 'KWARA') {
                var array = ['Ilorin', 'Offa', 'Omu Aran', 'Ajase Ipo', 'Bode Saadu', 'Kaiama', 'Lafiagi', 'Patigi', 'Jebba', 'Share', 'Erin Ile', 'Igbaja', 'Kosubosu', 'Malete'];
            } else if (a === 'LAGOS') {
                var array = ['Lagos Island', 'Ikeja', 'Ikorodu', 'Epe', 'Badagry', 'Oshodi', 'Surulere', 'Apapa', 'Eti Osa', 'Kosofe', 'Alimosho', 'Mushin', 'Somolu', 'Amuwo Odofin', 'Ifako Ijaiye', 'Agege', 'Ajeromi-Ifelodun', 'Ojo', 'Lagos Mainland', 'Yaba'];
            } else if (a === 'NASARAWA') {
                var array = ['Lafia', 'Keffi', 'Akwanga', 'Doma', 'Karu', 'Obi', 'Kokona', 'Nasarawa Egon', 'Nasarawa', 'Wamba', 'Awe', 'Toto'];
            } else if (a === 'NIGER') {
                var array = ['Minna', 'Suleja', 'Kontagora', 'Bida', 'Mokwa', 'Lapai', 'Agaie', 'Katcha', 'Rafi', 'Wushishi', 'Borgu', 'Magama', 'Mariga', 'Mashegu', 'Paikoro', 'Shiroro', 'Rijau', 'Tafa', 'Munya', 'Gbako', 'Bosso', 'Gurara', 'Auna'];
            } else if (a === 'OGUN') {
                var array = ['Abeokuta', 'Ijebu Ode', 'Sagamu', 'Ilaro', 'Ota', 'Ayetoro', 'Ifo', 'Ipokia', 'Obafemi Owode', 'Odeda', 'Odogbolu', 'Ogun Waterside', 'Remo North'];
            } else if (a === 'ONDO') {
                var array = ['Akure', 'Ondo', 'Owo', 'Ikare', 'Okitipupa', 'Ore', 'Igbokoda', 'Idanre', 'Ifon', 'Ile Oluji', 'Igbara Oke', 'Ilara Mokin', 'Bolorunduro'];
            } else if (a === 'OSUN') {
                var array = ['Osogbo', 'Ilesa', 'Ile Ife', 'Ede', 'Ikirun', 'Iwo', 'Ejigbo', 'Ikire', 'Iragbiji', 'Oke Ila Orangun', 'Ibokun', 'Ila Orangun', 'Otan Ayegbaju', 'Ifon', 'Ipetumodu', 'Ode Omu'];
            } else if (a === 'OYO') {
                var array = ['Ibadan', 'Oyo', 'Ogbomoso', 'Iseyin', 'Saki', 'Igboho', 'Kishi', 'Igbo Ora', 'Eruwa', 'Fiditi', 'Ilora', 'Otu', 'Igbeti', 'Iresa Adu', 'Tede', 'Ago Are', 'Sepeteri'];
            } else if (a === 'PLATEAU') {
                var array = ['Jos', 'Pankshin', 'Shendam', 'Barkin Ladi', 'Bokkos', 'Kanke', 'Langtang', 'Mangu', 'Mikang', 'Qua\'an Pan', 'Riyom', 'Wase'];
            } else if (a === 'RIVERS') {
                var array = ['Port Harcourt', 'Bonny', 'Opobo', 'Bori', 'Ahoada', 'Omoku', 'Degema', 'Abonnema', 'Okrika', 'Elele', 'Isiokpo', 'Ikwerre', 'Emuoha', 'Ogu Bolo', 'Obio Akpor', 'Tai', 'Khana', 'Gokana', 'Ogba Egbema Ndoni'];
            } else if (a === 'SOKOTO') {
                var array = ['Sokoto', 'Wamako', 'Binji', 'Bodinga', 'Dange Shuni', 'Gada', 'Goronyo', 'Gudu', 'Gwadabawa', 'Illela', 'Kebbe', 'Kware', 'Rabah', 'Sabon Birni', 'Shagari', 'Silame', 'Sokoto North', 'Sokoto South', 'Tambuwal', 'Tangaza', 'Tureta', 'Wurno', 'Yabo'];
            } else if (a === 'TARABA') {
                var array = ['Jalingo', 'Wukari', 'Takum', 'Bali', 'Gembu', 'Gashaka', 'Ibi', 'Karim Lamido', 'Kurmi', 'Lau', 'Sardauna', 'Ussa', 'Yorro', 'Zing', 'Ardo Kola', 'Donga'];
            } else if (a === 'YOBE') {
                var array = ['Damaturu', 'Nguru', 'Potiskum', 'Gashua', 'Geidam', 'Bade', 'Bursari', 'Damaturu', 'Fika', 'Fune', 'Gujba', 'Gulani', 'Jakusko', 'Karasuwa', 'Machina', 'Nangere', 'Nguru', 'Potiskum', 'Tarmuwa', 'Yunusari', 'Yusufari'];
            } else if (a === 'ZAMFARA') {
                var array = ['Gusau', 'Anka', 'Birnin Magaji', 'Bukkuyum', 'Bungudu', 'Gummi', 'Kaura Namoda', 'Maradun', 'Maru', 'Shinkafi', 'Talata Mafara', 'Tsafe', 'Zurmi'];
            }



            var string = "";
            for (let i = 0; i < array.length; i++) {
                string = string + "<option>" + array[i] + "</option>";

            }
            string = "<select nmae = 'lol'>" + string + "</select>"
            document.getElementById('district').innerHTML = string;
        }
    </script>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }

        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }

        textarea {
            border-width: 3px;
            border-radius: 16px;
            border-color: rgb(78, 180, 121);


        }




        .in-icons {
            text-align: center;
        }

        .in-icons i {
            position: absolute;
            left: 600px;
            top: 175px;
        }

        .just {


            float: left;
            margin-left: 1%;
            margin: 20px;
            position: absolute;
            left: 0;
            top: 0px;
            text-shadow: 1px 1px 1px black;

        }

        .again {
            cursor: pointer;
            font-size: 24px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            /* background-color: green; */
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
            margin-left: 100px;


        }

        .say {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            /* width: 96%; */
            padding: 10px;
            padding-left: 10px;
            padding-right: 10px;



        }

        .say:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 94%;
            font-size: 18px;

        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>


    <div class="just">
        <a href="Homepage.php"> <i class="fa fa-home fa-4x"></i></a>
    </div>

    <div class="box">
        <form action="EditProfile.php" method="post">
            <table align="center">
                <tr colspan=2>
                    <h1> EDIT PROFILE</h1>
                </tr>
                <tr align="center">
                    <div class="in-icons">
                        <td>
                            <label><b>Name :</b></label>
                        </td>
                        <td>
                            <textarea rows="2" column="18" value="" disabled><?php echo $name; ?></textarea>
                        </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Pan :</b></label>
                    </td>
                    <td>
                        <textarea rows="2" column="20" disabled><?php echo $pan; ?></textarea>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Phone :</b></label>
                    </td>
                    <td>
                        <input type="phonenumber" name="phonenumber" value="<?php echo $phone; ?>" />
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>Address :</b></label>
                    </td>
                    <td>
                        <input type="text" name="address" value="<?php echo $address; ?> " />
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b>State :</b></label>
                    </td>
                    <td>
                    <select name="statevalue" id="states" onchange="state()" tabindex="1" style="width:170px;">
                        <option value="0">--Select State--</option>
                        <option value="ABIA">ABIA</option>
                        <option value="ADAMAWA">ADAMAWA</option>
                        <option value="AKWA IBOM">AKWA IBOM</option>
                        <option value="ANAMBRA">ANAMBRA</option>
                        <option value="BAUCHI">BAUCHI</option>
                        <option value="BAYELSA">BAYELSA</option>
                        <option value="BENUE">BENUE</option>
                        <option value="BORNO">BORNO</option>
                        <option value="CROSS RIVER">CROSS RIVER</option>
                        <option value="DELTA">DELTA</option>
                        <option value="EBONYI">EBONYI</option>
                        <option value="EDO">EDO</option>
                        <option value="EKITI">EKITI</option>
                        <option value="ENUGU">ENUGU</option>
                        <option value="GOMBE">GOMBE</option>
                        <option value="IMO">IMO</option>
                        <option value="JIGAWA">JIGAWA</option>
                        <option value="KADUNA">KADUNA</option>
                        <option value="KANO">KANO</option>
                        <option value="KATSINA">KATSINA</option>
                        <option value="KEBBI">KEBBI</option>
                        <option value="KOGI">KOGI</option>
                        <option value="KWARA">KWARA</option>
                        <option value="LAGOS">LAGOS</option>
                        <option value="NASARAWA">NASARAWA</option>
                        <option value="NIGER">NIGER</option>
                        <option value="OGUN">OGUN</option>
                        <option value="ONDO">ONDO</option>
                        <option value="OSUN">OSUN</option>
                        <option value="OYO">OYO</option>
                        <option value="PLATEAU">PLATEAU</option>
                        <option value="RIVERS">RIVERS</option>
                        <option value="SOKOTO">SOKOTO</option>
                        <option value="TARABA">TARABA</option>
                        <option value="YOBE">YOBE</option>
                        <option value="ZAMFARA">ZAMFARA</option>
                    </select>

                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <label><b>District :</b></label>
                    </td>
                    <td>
                         <select name="district" id="district"><option>Select District</option></select>
                    </td>
                </tr>

                <tr align="center">
                    <td>
                        <label><b>Bank :</b></label>
                    </td>
                    <td>
                        <input type="number" name="bank" value="<?php echo $account; ?>" />
                    </td>
                    <span style=" display:block;  margin-bottom: .75em; "></span>
                </tr>
                <tr colspan=2>
                    <td colspan=2>
                        <input type="submit" name="confirm" value="Confirm">
                    </td>
                </tr>
            </table>
        </form>

        <div class="again">
            <a href="ChangePassword.php"><button class="say">Change Password</button></a>
        </div>

    </div>



</body>

</html>

<?php


if (isset($_POST['confirm'])) {
    $phone = mysqli_real_escape_string( $con, $_POST['phonenumber']);
    $address = mysqli_real_escape_string( $con, $_POST['address']);
    $district = mysqli_real_escape_string( $con, $_POST['district']);
    $state = mysqli_real_escape_string( $con, $_POST['statevalue']);
    $account = mysqli_real_escape_string( $con, $_POST['bank']);

    $query = "update farmerregistration 
              set farmer_phone = '$phone', farmer_address = '$address',
              farmer_bank = '$account', farmer_state = '$state',
              farmer_district = '$district'
              where farmer_id 
              in (select farmer_id from farmerregistration 
              where farmer_phone='$sessphonenumber')";
    $run = mysqli_query($con, $query);
    
    $_SESSION['phonenumber'] = $phone;
    echo "<script>window.open('FarmerProfile.php','_self')</script>";
}
?>