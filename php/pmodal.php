<?php
if(isset($_COOKIE["oka"])) $user = $_COOKIE["oka"]; else header("location:signin.php");
include("db.php");
if(isset($_COOKIE["oka"])){
    $cookie = $_COOKIE["oka"];

$sql = mysqli_query($connect, "SELECT * from users where email = '$cookie' ") 
  or die("could Not Select profile".mysqli_error());

  while ($row = mysqli_fetch_assoc($sql)){
    $id = $row['id'];
    $user = $row['username'];
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
  }
}

if(isset($_POST['submit'])){
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $phone2 = $_POST['phone2'];
    $add = $_POST['address'];
    $region = $_POST['region'];
    $city = $_POST['town'];

    $update = mysqli_query($connect, "update users set firstname='$first', lastname='$last', email='$email', phone='$phone', 
    phone2='$phone2', address='$add', region='$region', town='$city' where id = '$id' ") 
    or die('could not insert'.mysqli_error($connect));
    if($update){
        echo 'You have successfully edited your profile.';
    }else{
        echo 'Sorry, we could not edit your profile.';
    }
}
?>





<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Profile</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-12">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name:</label>
                            <input type="text" name="firstname" class="form-control" value='<?php if(isset($first)) echo $first; ?>'>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name:</label>
                            <input type="text" name="lastname"  class="form-control" value='<?php if(isset($last)) echo $last; ?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Email Address:</label>
                            <input type="email" name="email" value='<?php if(isset($email)) echo $email; ?>' class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Phone Number:</label>
                            <input type="tel" name="phone" class="form-control" value='<?php if(isset($phone)) echo $phone; ?>'>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Additional Phone Number:</label>
                            <input type="tel" name="phone2" class="form-control" value='<?php if(isset($phone2)) echo $phone2; ?>'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Delivery Address:</label>
                            <input type="text" name="address" value='<?php if(isset($add)) echo $add; ?>' class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>Region:</label>
                            <select onChange="city()" class="form-control" id="regions" name="region" value='<?php if(isset($region)) echo $region; ?>'>
                                <option disabled selected value="Select">-- Select a Region --</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross-River">Cross-River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="Abuja">Abuja</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>City:</label>
                            <!-- Abia -->
                            <input type="hidden" disabled id="abia" name="town" value='<?php if(isset($city)) echo $city; ?>' class="form-control" list="myabia">
                            <datalist id="myabia">
                                <option value="Aba">Aba</option>
                                <option value="Amaeke">Amaeke</option>
                                <option value="Arochukwu">Arochukwu</option>
                                <option value="Ikwuano">Ikwuano</option>
                                <option value="Ohafia">Ohafia</option>
                                <option value="Umuahia">Umuahia</option>
                                <option value="Umudike">Umudike</option>
                            </datalist>

                            <!-- Adamawa -->
                            <input type="hidden" disabled id="adamawa" name="town" placeholder="Select your City" class="form-control" list="myadamawa">
                            <datalist id="myadamawa">
                                <option value="Gombi">Gombi</option>
                                <option value="Hong">Hong</option>
                                <option value="Mayo Belwa">Mayo Belwa</option>
                                <option value="Mubi">Mubi</option>
                                <option value="Ngurore">Ngurore</option>
                                <option value="Numan">Numan</option>
                                <option value="Song">Song</option>
                                <option value="Yola">Yola</option>
                            </datalist>

                            <!-- Akwa Ibom -->
                            <input type="hidden" disabled id="ibom" name="town" placeholder="Select your City" class="form-control" list="myibom">
                            <datalist id="myibom">
                                <option value="Abak">Abak</option>
                                <option value="Eket">Eket</option>
                                <option value="Etinan">Etinan</option>
                                <option value="Ikot Abassi">Ikot Abassi</option>
                                <option value="Ikot Ekpene">Ikot Ekpene</option>
                                <option value="Ikot Osura">Ikot Osura</option>
                                <option value="Mkpat Enin">Mkpat Enin</option>
                                <option value="Oron">Oron</option>
                                <option value="Uyo">Uyo</option>
                            </datalist>

                            <!-- Anambra -->
                            <input type="hidden" disabled id="awka" name="town" placeholder="Select your City" class="form-control" list="myanambra">
                            <datalist id="myanambra">
                                <option value="Abagana">Abagana</option>
                                <option value="Achalla/Awka">Achalla/Awka</option>
                                <option value="Amawbia/Awka">Amawbia/Awka</option>
                                <option value="Anambra East LGA">Anambra East LGA</option>
                                <option value="Anambra West LGA">Anambra West LGA</option>
                                <option value="Awka Town">Awka Town</option>
                                <option value="Ayamelum">Ayamelum</option>
                                <option value="Dunukofia">Dunukofia</option>
                                <option value="Ekwulobia">Ekwulobia</option>
                                <option value="Ihiala">Ihiala</option>
                                <option value="Nise/Awka">Nise/Awka</option>
                                <option value="Nkpor">Nkpor</option>
                                <option value="Nnewi-Alor">Nnewi-Alor</option>
                                <option value="Nnewi-Awada Layout">Nnewi-Awada Layout</option>
                                <option value="Nnewi-Nnewi">Nnewi-Nnewi</option>
                                <option value="Nnewi-Oba">Nnewi-Oba</option>
                                <option value="Nnewi-Obosi">Nnewi-Obosi</option>
                                <option value="Nnewi-Ojoto">Nnewi-Ojoto</option>
                                <option value="Nnewi-Oraifite">Nnewi-Oraifite</option>
                                <option value="Nnewi-Oraukwu">Nnewi-Oraukwu</option>
                                <option value="Nnewi-Ozubulu">Nnewi-Ozubulu</option>
                                <option value="Nnewi-Nnobi">Nnewi-Nnobi</option>
                                <option value="Nnewi-Utuh">Nnewi-Utuh</option>
                                <option value="Nnewi-Abatete">Nnewi-Abatete</option>
                                <option value="Nnewi-Amichi">Nnewi-Amichi</option>
                                <option value="Nnewi-Ichi">Nnewi-Ichi</option>
                                <option value="Nnewi-Ogidi">Nnewi-Ogidi</option>
                                <option value="Ogbaru">Ogbaru</option>
                                <option value="Ogidi/Awka">Ogidi/Awka</option>
                                <option value="Onitsha">Onitsha</option>
                                <option value="Onitsha Central Locations">Onitsha Central Locations</option>
                                <option value="Onitsha-GRA">Onitsha-GRA</option>
                                <option value="Oyi">Oyi</option>
                                <option value="Umuokpe/Awka">Umuokpe/Awka</option>
                            </datalist>

                            <!-- Bauchi -->
                            <input type="hidden" disabled id="bauchi" name="town" placeholder="Select your City" class="form-control" list="mybauchi">
                            <datalist id="mybauchi">
                                <option value="Alkaleri">Alkaleri</option>
                                <option value="Awala">Awala</option>
                                <option value="Bauchi Central District">Bauchi Central District</option>
                                <option value="Bauchi North District">Bauchi North District</option>
                                <option value="Bauchi South District">Bauchi South District</option>
                                <option value="Central Market">Central Market</option>
                                <option value="Darazo">Darazo</option>
                                <option value="Fadamar Mada">Fadamar Mada</option>
                                <option value="Gida Dubu">Gida Dubu</option>
                                <option value="Ibrahim Bako">Ibrahim Bako</option>
                                <option value="Katagum/Azare">Katagum/Azare</option>
                                <option value="New GRA/Wuntin Dada">New GRA/Wuntin Dada</option>
                                <option value="Old GRA">Old GRA</option>
                                <option value="Railway/Fed. Low Cost">Railway/Fed. Low Cost</option>
                                <option value="Wunti">Wunti</option>
                                <option value="Yan Doka">Yan Doka</option>
                                <option value="Yelwa/Fed. Poly">Yelwa/Fed. Poly</option>
                            </datalist>

                            <!-- Bayelsa -->
                            <input type="hidden" disabled id="bayelsa" name="town" placeholder="Select your City" class="form-control" list="mybayelsa">
                            <datalist id="mybayelsa">
                                <option value="Amassoma">Amassoma</option>
                                <option value="Brass">Brass</option>
                                <option value="Ekeremor">Ekeremor</option>
                                <option value="Kiama">Kiama</option>
                                <option value="Kolokuma/Opokuma">Kolokuma/Opokuma</option>
                                <option value="Nembe">Nembe</option>
                                <option value="Ogbia">Ogbia</option>
                                <option value="Otuoke">Otuoke</option>
                                <option value="Sagbama">Sagbama</option>
                                <option value="Southern Ijaw">Southern Ijaw</option>
                                <option value="Wilberforce Island">Wilberforce Island</option>
                                <option value="Yenogoa-Agudama">Yenogoa-Agudama</option>
                                <option value="Yenogoa-Akenfa">Yenogoa-Akenfa</option>
                                <option value="Yenogoa-Amarata">Yenogoa-Amarata</option>
                                <option value="Yenogoa-Biogbolo">Yenogoa-Biogbolo</option>
                                <option value="Yenogoa-Okaka">Yenogoa-Okaka</option>
                            </datalist>

                            <!-- Benue -->
                            <input type="hidden" disabled id="benue" name="town" placeholder="Select your City" class="form-control" list="mybenue">
                            <datalist id="mybenue">
                                <option value="Gboko">Gboko</option>
                                <option value="Katsina-Ala">Katsina-Ala</option>
                                <option value="Markurdi-Central Locations">Markurdi-Central Locations</option>
                                <option value="Makurdi-Bank road">Makurdi-Bank road</option>
                                <option value="Makurdi-Airforce base">Makurdi-Airforce base</option>
                                <option value="Makurdi-High-level">Makurdi-High-level</option>
                                <option value="Makurdi-Low-level">Makurdi-Low-level</option>
                                <option value="Makurdi-Modern Market">Makurdi-Modern Market</option>
                                <option value="Makurdi-New GRA">Makurdi-New GRA</option>
                                <option value="Makurdi-Nyima">Makurdi-Nyima</option>
                                <option value="Makurdi-Old GRA">Makurdi-Old GRA</option>
                                <option value="Makurdi Secretariat">Makurdi Secretariat</option>
                                <option value="Makurdi Wadata">Makurdi Wadata</option>
                                <option value="Makurdi Wurukum">Makurdi Wurukum</option>  
                            </datalist>

                            <!-- Borno -->
                            <input type="hidden" disabled id="borno" name="town" placeholder="Select your City" class="form-control" list="myborno">
                            <datalist id="myborno">
                                <option value="Maiduguri">Maiduguri</option>
                                <option value="Mongunu">Mongunu</option>
                            </datalist>

                            <!-- Cross-River -->
                            <input type="hidden" disabled id="cross" name="town" placeholder="Select your City" class="form-control" list="mycross">
                            <datalist id="mycross">
                                <option value="Abi">Abi</option>
                                <option value="Akamkpa">Akamkpa</option>
                                <option value="Akpabuyo">Akpabuyo</option>
                                <option value="Bakassi">Bakassi</option>
                                <option value="Bekwarra">Bekwarra</option>
                                <option value="Biase">Biase</option>
                                <option value="Boki">Boki</option>
                                <option value="Calabar">Calabar</option>
                                <option value="Calabar-Marina">Calabar-Marina</option>
                                <option value="Etung">Etung</option>
                                <option value="Ikom">Ikom</option>
                                <option value="Obanliku">Obanliku</option>
                                <option value="Obubra">Obubra</option>
                                <option value="Obudu">Obudu</option>   
                                <option value="Odukpani">Odukpani</option>  
                                <option value="Ogoja">Ogoja</option> 
                                <option value="Yakuur">Yakuur</option>  
                                <option value="Yala">Yala</option>  
                            </datalist>

                            <!-- Delta -->
                            <input type="hidden" disabled id="delta" name="town" placeholder="Select your City" class="form-control" list="mydelta">
                            <datalist id="mydelta">
                                <option value="Abraka-Ajanomi">Abraka-Ajanomi</option>
                                <option value="Abraka-Ekrejeta">Abraka-Ekrejeta</option>
                                <option value="Abraka-Erho">Abraka-Erho</option>
                                <option value="Abraka-Ojeta">Abraka-Ojeta</option>
                                <option value="Abraka-Oria">Abraka-Oria</option>
                                <option value="Abraka-Oruarivie">Abraka-Oruarivie</option>
                                <option value="Abraka-Otorho">Abraka-Otorho</option>
                                <option value="Abraka-Ughere-Urhuagbesa">Abraka-Ughere-Urhuagbesa</option>
                                <option value="Abraka-Umeghe">Abraka-Umeghe</option>
                                <option value="Abraka-Urhuoka">Abraka-Urhuoka</option>
                                <option value="Agbor-Abavo">Agbor-Abavo</option>
                                <option value="Agbo-Alero">Agbo-Alero</option>
                                <option value="Agbor-Alihame">Agbor-Alihame</option>
                                <option value="Agbor-Boji Boj">Agbor-Boji Boji</option>   
                                <option value="Agbor-Ekuoma">Agbor-Ekuoma</option>  
                                <option value="Agbor-Igbodo">Agbor-Igbodo</option> 
                                <option value="Agbor-Obi">Agbor-Obi</option>  
                                <option value="Agbor-Owa Oyibu">Agbor-Owa Oyibu</option>  
                                <option value="Agbor-Umunede">Agbor-Umunede</option>  
                                <option value="Aladja">Aladja</option>  
                                <option value="Asaba-Achala Ibusa">Asaba-Achala Ibusa</option>  
                                <option value="Asaba-Akuebulu">Asaba-Akuebulu</option>  
                                <option value="Asaba-Akuofor">Asaba-Akuofor</option>  
                                <option value="Asaba-Anwai">Asaba-Anwai</option>  
                                <option value="Asaba-Bonsaac">Asaba-Bonsaac</option>  
                                <option value="Asaba-Camp 74">Asaba-Camp 74</option>  
                                <option value="Asaba-Ezenei">Asaba-Ezenei</option>  
                                <option value="Asaba-GRA Core Area">Asaba-GRA Core Area</option>  
                                <option value="Asaba-Housing Estate">Asaba-Housing Estate</option>  
                                <option value="Asaba-Jarret">Asaba-Jarret</option>  
                                <option value="Asaba-Koka Junction">Asaba-Koka Junction</option>  
                                <option value="Asaba-Nnebisi">Asaba-Nnebisi</option>  
                                <option value="Asaba-Okpanam">Asaba-Okpanam</option>  
                                <option value="Asaba-Okwe">Asaba-Okwe</option>  
                                <option value="Asaba-Summit">Asaba-Summit</option>  
                                <option value="Ebrumede">Ebrumede</option>  
                                <option value="Eku-Eku Central Location">Eku-Eku Central Location</option>  
                                <option value="Fupre">Fupre</option>  
                                <option value="Isele">Isele</option>  
                                <option value="Kwale-Central Location">Kwale-Central Location</option>  
                                <option value="Obiaruku-Central Location">Obiaruku-Central Location</option>  
                                <option value="Oghara-Oghara Junction">Oghara-Oghara Junction</option>  
                                <option value="Oghara-Ogharefe">Oghara-Ogharefe</option>  
                                <option value="Oghara-Oghareki">Oghara-Oghareki</option>  
                                <option value="Oghara-Ovade">Oghara-Ovade</option>  
                                <option value="Oghara-Otefe">Oghara-Otefe</option>  
                                <option value="Ogwashi">Ogwashi</option>  
                                <option value="Oleh-Central Location">Oleh-Central Location</option>  
                                <option value="Oleh-Delsu Oleh Campus">Oleh-Delsu Oleh Campus</option>  
                                <option value="Otor">Otor</option>  
                                <option value="Ovwian">Ovwian</option>  
                                <option value="Ozoro-Ozoro road">Ozoro-Ozoro road</option>  
                                <option value="Sapele-Ajogodo">Sapele-Ajogodo</option>  
                                <option value="Sapele-Akintola">Sapele-Akintola</option>  
                                <option value="Sapele-Amukpe">Sapele-Amukpe</option>  
                                <option value="Sapele-Gana">Sapele-Gana</option>  
                                <option value="Sapele-Jesse">Sapele-Jesse</option>  
                                <option value="Sapele-Mosogar">Sapele-Mosogar</option>  
                                <option value="Sapele-Ogorode">Sapele-Ogorode</option>  
                                <option value="Sapele-Okpe road">Sapele-Okpe road</option>  
                                <option value="Sapele-Ugberikoko">Sapele-Ugberikoko</option>  
                                <option value="Udu-Aladja">Udu-Aladja</option>  
                                <option value="Udu-Ofagbe">Udu-Ofagbe</option>  
                                <option value="Udu-Orhuworun">Udu-Orhuworun</option>  
                                <option value="Udu-Otor">Udu-Otor</option>  
                                <option value="Udu-Usiefrun">Udu-Usiefrun</option>  
                                <option value="Ughelli-Ekuigbo">Ughelli-Ekuigbo</option>  
                                <option value="Ughelli-Isoko road">Ughelli-Isoko road</option>  
                                <option value="Ughelli-Oteri">Ughelli-Oteri</option>  
                                <option value="Ughelli-Sokaj">Ughelli-Sokaji</option>  
                                <option value="Umunede">Umunede</option>  
                                <option value="Warri-Airport road">Warri-Airport road</option>  
                                <option value="Warri-Edjeba">Warri-Edjeba</option>  
                                <option value="Warri-Efurun">Warri-Efurun</option>  
                                <option value="Warri-Ekpan">Warri-Ekpan</option>  
                                <option value="Warri-Enerhen">Warri-Enerhen</option>  
                                <option value="Warri-GRA">Warri-GRA</option>  
                                <option value="Warri-Jakpa">Warri-Jakpa</option>  
                                <option value="Warri-Jeddo">Warri-Jeddo</option>  
                                <option value="Warri-N.P.A">Warri-N.P.A</option>  
                                <option value="Warri-Ogunu">Warri-Ogunu</option>  
                                <option value="Warri-Osubi">Warri-Osubi</option>  
                                <option value="Warri-P.T.I">Warri-P.T.I</option>  
                                <option value="Warri-Ubeji">Warri-Ubeji</option>  
                                <option value="Warri-Ugwuangwe">Warri-Ugwuangwe</option>  
                            </datalist>

                            <!-- Ebonyi -->
                            <input type="hidden" disabled id="ebonyi" name="town" placeholder="Select your City" class="form-control" list="myebonyi">
                            <datalist id="myebonyi">
                                <option value="Abakaliki">Abakaliki</option>
                                <option value="Afikpo North">Afikpo North</option>
                                <option value="Afikpo South(Edda)">Afikpo South(Edda)</option>
                                <option value="Ezza North">Ezza North</option>
                                <option value="Ezza South">Ezza South</option>
                                <option value="Ikwo">Ikwo</option>
                                <option value="Ishielu">Ishielu</option>
                                <option value="Ivo">Ivo</option>
                                <option value="Izzi">Izzi</option>
                                <option value="Ohaozara">Ohaozara</option>
                                <option value="Ohaukwu">Ohaukwu</option>
                                <option value="Onicha">Onicha</option>
                            </datalist>

                            <!-- Edo -->
                            <input type="hidden" disabled id="edo" name="town" placeholder="Select your City" class="form-control" list="myedo">
                            <datalist id="myedo">
                                <option value="Akoko Edo">Akoko Edo</option>
                                <option value="Benin-Adesuwa">Benin-Adesuwa</option>
                                <option value="Benin-Aduwawa">Benin-Aduwawa</option>
                                <option value="Benin-Akpapava">Benin-Akpapava</option>
                                <option value="Benin-Dumez">Benin-Dumez</option>
                                <option value="Benin-Ekae">Benin-Ekae</option>
                                <option value="Benin-Ekenwan">Benin-Ekenwan</option>
                                <option value="Benin-Ekhor">Benin-Ekhor</option>
                                <option value="Benin-Ekosodin">Benin-Ekosodin</option>
                                <option value="Benin-Ekuku">Benin-Ekuku</option>
                                <option value="Benin-Eriaria">Benin-Eriaria</option>
                                <option value="Benin-Etete">Benin-Etete</option>
                                <option value="Benin-Idogbo">Benin-Idogbo</option>
                                <option value="Benin-Ihogben">Benin-Ihogben</option>
                                <option value="Benin-Ikpokan">Benin-Ikpokan</option>
                                <option value="Benin-Obe">Benin-Obe</option>
                                <option value="Benin-Ogbelaka">Benin-Ogbelaka</option>
                                <option value="Benin-Ohovbeokao">Benin-Ohovbeokao</option>
                                <option value="Benin-Oko-gba">Benin-Oko-gba</option>
                                <option value="Benin-Ologbo">Benin-Ologbo</option>
                                <option value="Benin-Oregbeni">Benin-Oregbeni</option>
                                <option value="Benin-Ugbekun">Benin-Ugbekun</option>
                                <option value="Benin-Ugbor">Benin-Ugbor</option>
                                <option value="Benin-Ugbowo">Benin-Ugbowo</option>
                                <option value="Benin-Uhumwuimwu">Benin-Uhumwuimwu</option>
                                <option value="Benin-Urubi">Benin-Urubi</option>
                                <option value="Benin-Use">Benin-Use</option>
                                <option value="Benin-Uselu">Benin-Uselu</option>
                                <option value="Benin-Uwelu">Benin-Uwelu</option>
                                <option value="Egor-Egor">Egor-Egor</option>
                                <option value="Ekiadolor">Ekiadolor</option>
                                <option value="Ekiadoro">Ekiadoro</option>
                                <option value="Ekpoma-Ujoehenien">Ekpoma-Ujoehenien</option>
                                <option value="Ekpoma-Afua">Ekpoma-Afua</option>
                                <option value="Ekpoma-Debow">Ekpoma-Debow</option>
                                <option value="Ekpoma-Ebhoakhua">Ekpoma-Ebhoakhua</option>
                                <option value="Ekpoma-Eguare">Ekpoma-Eguare</option>
                                <option value="Ekpoma-Emado">Ekpoma-Emado</option>
                                <option value="Ekpoma-Idumebo">Ekpoma-Idumebo</option>
                                <option value="Ekpoma-Idumegbede">Ekpoma-Idumegbede</option>
                                <option value="Ekpoma-Ihumudumu">Ekpoma-Ihumudumu</option>
                                <option value="Ekpoma-Ile">Ekpoma-Ile</option>
                                <option value="Ekpoma-Iruekpen">Ekpoma-Iruekpen</option>
                                <option value="Ekpoma-Okpenu">Ekpoma-Okpenu</option>
                                <option value="Ekpoma-Oriafor">Ekpoma-Oriafor</option>
                                <option value="Ekpoma-Ozalla">Ekpoma-Ozalla</option>
                                <option value="Ekpoma-Ujemen">Ekpoma-Ujemen</option>
                                <option value="Esan Center">Esan Center</option>
                                <option value="Esan South">Esan South</option>
                                <option value="Esan West">Esan West</option>
                                <option value="Etsako Central">Etsako Central</option>
                                <option value="Etsako East">Etsako East</option>
                                <option value="Etsako Igbira Camp">Etsako Igbira Camp</option>
                                <option value="Etsako West">Etsako West</option>
                                <option value="Etsako-Agenebode">Etsako-Agenebode</option>
                                <option value="Etsako-Aibotse">Etsako-Aibotse</option>
                                <option value="Etsako-Aigiere">Etsako-Aigiere</option>
                                <option value="Etsako-Azukala">Etsako-Azukala</option>
                                <option value="Etsako-Iraokhor">Etsako-Iraokhor</option>
                                <option value="Etsako-Itsukwi">Etsako-Itsukwi</option>
                                <option value="Etsako-Iyekhei">Etsako-Iyekhei</option>
                                <option value="Etsako-Ogbona">Etsako-Ogbona</option>
                                <option value="Etsako-Okpella">Etsako-Okpella</option>
                                <option value="Etsako-South Ibie">Etsako-South Ibie</option>
                                <option value="Etsako-Uzanu">Etsako-Uzanu</option>
                                <option value="Igueben">Igueben</option>
                                <option value="Ikpoba Okha">Ikpoba Okha</option>
                                <option value="Okada-GRA">Okada-GRA</option>
                                <option value="Okada-Igbinedion">Okada-Igbinedion</option>
                                <option value="Okada-Iyaro">Okada-Iyaro</option>
                                <option value="Okada-New road">Okada-New road</option>
                                <option value="Oluku">Oluku</option>
                                <option value="Orhionmwon">Orhionmwon</option>
                                <option value="Ovia North East">Ovia North East</option>
                                <option value="Ovia South West">Ovia South West</option>
                                <option value="Owan East">Owan East</option>
                                <option value="Owan West">Owan West</option>
                                <option value="Ubiaja">Ubiaja</option>
                                <option value="Ugbowo">Ugbowo</option>
                                <option value="Ugbowo-Isiohor">Ugbowo-Isiohor</option>
                                <option value="Ugbowo-BDPA">Ugbowo-BDPA</option>
                                <option value="Ugbowo-Edpa">Ugbowo-Edpa</option>
                                <option value="Ugbowo-UBTH">Ugbowo-UBTH</option>
                                <option value="Ugbowo-Uselu">Ugbowo-Uselu</option>
                                <option value="Ugbowo-Uwagboe">Ugbowo-Uwagboe</option>
                                <option value="Ugbowo-Uwelu">Ugbowo-Uwelu</option>
                                <option value="Uhen">Uhen</option>
                                <option value="Uromi">Uromi</option>
                            </datalist>

                            <!-- Ekiti -->
                            <input type="hidden" disabled id="ekiti" name="town" placeholder="Select your City" class="form-control" list="myekiti">
                            <datalist id="myekiti">
                                <option value="Ado Ekiti">Ado Ekiti</option>
                                <option value="Aramako">Aramako</option>
                                <option value="Efon">Efon</option>
                                <option value="Efon-Alaaye">Efon-Alaaye</option>
                                <option value="Emure">Emure</option>
                                <option value="Gbonyin">Gbonyin</option>
                                <option value="Ido Osi">Ido Osi</option>
                                <option value="Ijero">Ijero</option>
                                <option value="Ikere">Ikere</option>
                                <option value="Ikole">Ikole</option>
                                <option value="Ilawe">Ilawe</option>
                                <option value="Ilejemeje">Ilejemeje</option>
                                <option value="Irepodun/Ifelodun">Irepodun/Ifelodun</option>
                                <option value="Ise Ekiti">Ise Ekiti</option>   
                                <option value="Ise/Orun">Ise/Orun</option>  
                                <option value="Iworoko">Iworoko</option> 
                                <option value="Moba">Moba</option>  
                                <option value="Omuo">Omuo</option>  
                                <option value="Otun">Otun</option>  
                                <option value="Oye">Oye</option>  
                            </datalist>

                            <!-- Enugu -->
                            <input type="hidden" disabled id="enugu" name="town" placeholder="Select your City" class="form-control" list="myenugu">
                            <datalist id="myenugu">
                                <option value="Agbani Town">Agbani Town</option>
                                <option value="Aninri">Aninri</option>
                                <option value="Aniri">Aniri</option>
                                <option value="Awgu">Awgu</option>
                                <option value="Enugu Garki">Enugu Garki</option>
                                <option value="Enugu Trans-Ekulu">Enugu Trans-Ekulu</option>
                                <option value="Abakpa-Nike">Abakpa-Nike</option>
                                <option value="Ezeagu">Ezeagu</option>
                                <option value="Igbo Etiti">Igbo Etiti</option>
                                <option value="Igbo Eze North">Igbo Eze North</option>
                                <option value="Igbo Eze South">Igbo Eze South</option>
                                <option value="Isi Uzo">Isi Uzo</option>
                                <option value="Ituku Ozalla">Ituku Ozalla</option>
                                <option value="Nkanu East">Nkanu East</option>   
                                <option value="Nkanu West">Nkanu West</option>  
                                <option value="Nsukka">Nsukka</option> 
                                <option value="Nsukka- EdeOballa">Nsukka- EdeOballa</option>  
                                <option value="Nsukka-EhaAlumona">Nsukka-EhaAlumona</option>  
                                <option value="Oji River">Oji River</option>  
                                <option value="Udenu">Udenu</option>  
                                <option value="Udi">Udi</option>  
                                <option value="Uzo-Uwani">Uzo-Uwani</option>  
                            </datalist>

                            <!-- Gombe -->
                            <input type="hidden" disabled id="gombe" name="town" placeholder="Select your City" class="form-control" list="mygombe">
                            <datalist id="mygombe">
                                <option value="Akko">Akko</option>
                                <option value="Arawa">Arawa</option>
                                <option value="Ashaka">Ashaka</option>
                                <option value="Bajoga">Bajoga</option>
                                <option value="Balanga">Balanga</option>
                                <option value="Barunde">Barunde</option>
                                <option value="BCJ">BCJ</option>
                                <option value="Billiri">Billiri</option>
                                <option value="Bolari">Bolari</option>
                                <option value="Dukku">Dukku</option>
                                <option value="Funakaye">Funakaye</option>
                                <option value="GRA">GRA</option>
                                <option value="JekadaFari">JekadaFari</option>
                                <option value="Kaltungo">Kaltungo</option>   
                                <option value="Kasuwan mata">Kasuwan mata</option>  
                                <option value="Kwami">Kwami</option> 
                                <option value="Malamfidi">Malamfidi</option>  
                                <option value="Nafada">Nafada</option>  
                                <option value="Nayi Nawa">Nayi Nawa</option>  
                                <option value="Pantami">Pantami</option>  
                                <option value="Shongom">Shongom</option>  
                                <option value="Tudun Wada">Tudun Wada</option>  
                                <option value="Tunfere">Tunfere</option>  
                                <option value="Yamaltu/Deba">Yamaltu/Deba</option>  
                            </datalist>

                            <!-- Imo -->
                            <input type="hidden" disabled id="imo" name="town" placeholder="Select your City" class="form-control" list="myimo">
                            <datalist id="myimo">
                                <option value="Amakohia-Akwakuma">Amakohia-Akwakuma</option>
                                <option value="Ezinihitte">Ezinihitte</option>
                                <option value="Ihiagwa">Ihiagwa</option>
                                <option value="Ihiala">Ihiala</option>
                                <option value="Isuochi">Isuochi</option>
                                <option value="Mbaise">Mbaise</option>
                                <option value="Ngor Okpala">Ngor Okpala</option>
                                <option value="Nwangele">Nwangele</option>
                                <option value="Obowo">Obowo</option>
                                <option value="Oguta">Oguta</option>
                                <option value="Okigwe">Okigwe</option>
                                <option value="Orlu">Orlu</option>
                                <option value="Owerri Aladinma">Owerri Aladinma</option>
                                <option value="Owerri-Douglas">Owerri-Douglas</option>   
                                <option value="Owerri-Ihiagwa">Owerri-Ihiagwa</option>  
                                <option value="Owerri-Ikenegbu">Owerri-Ikenegbu</option> 
                                <option value="Owerri-Irete">Owerri-Irete</option>  
                                <option value="Owerri-Nekede">Owerri-Nekede</option>  
                                <option value="Owerri-Orji">Owerri-Orji</option>  
                                <option value="Owerri-Portharcourt road">Owerri-Portharcourt road</option>  
                                <option value="Owerri-Umunguma">Owerri-Umunguma</option>  
                                <option value="Owerri-Wetheral">Owerri-Wetheral</option>  
                                <option value="Owerri-World Bank">Owerri-World Bank</option>    
                            </datalist>

                            <!-- Jigawa -->
                            <input type="hidden" disabled id="jigawa" name="town" placeholder="Select your City" class="form-control" list="myjigawa">
                            <datalist id="myjigawa">
                                <option value="Dutse">Dutse</option>
                                <option value="Gumel">Gumel</option>
                                <option value="Hadeja">Hadeja</option>
                                <option value="Hadejia">Hadejia</option>
                                <option value="Jahum">Jahum</option>
                                <option value="Jahun">Jahun</option>
                                <option value="Kazaure">Kazaure</option>
                                <option value="Ringim">Ringim</option>
                            </datalist>

                            <!-- Kaduna -->
                            <input type="hidden" disabled id="kaduna" name="town" placeholder="Select your City" class="form-control" list="mykaduna">
                            <datalist id="mykaduna">
                                <option value="Angwan Sariki">Angwan Sariki</option>
                                <option value="Angwan Sariki/Malali">Angwan Sariki/Malali</option>
                                <option value="Barnawa">Barnawa</option>
                                <option value="Goni Gora">Goni Gora</option>
                                <option value="Ibbi">Ibbi</option>
                                <option value="Jaji">Jaji</option>
                                <option value="Kabala">Kabala</option>
                                <option value="Kachia">Kachia</option>
                                <option value="Kafanchan">Kafanchan</option>
                                <option value="Kakuri">Kakuri</option>
                                <option value="Kawo-Kaduna">Kawo-Kaduna</option>
                                <option value="Kikinu">Kikinu</option>
                                <option value="Kurumashi">Kurumashi</option>
                                <option value="Low Coast">Low Coast</option>   
                                <option value="Makarfi">Makarfi</option>  
                                <option value="Malali">Malali</option> 
                                <option value="Narayi">Narayi</option>  
                                <option value="NDA">NDA</option>  
                                <option value="Regachuku">Regachuku</option>  
                                <option value="Sabo">Sabo</option>  
                                <option value="Trikania">Trikania</option>  
                                <option value="Tundu Wada">Tundu Wada</option>  
                                <option value="Zaria">Zaria</option>    
                            </datalist>

                            <!-- Kano -->
                            <input type="hidden" disabled id="kano" name="town" placeholder="Select your City" class="form-control" list="mykano">
                            <datalist id="mykano">
                                <option value="Audu Bako Wa">Audu Bako Way</option>
                                <option value="Badarawa">Badarawa</option>
                                <option value="Bichi">Bichi</option>
                                <option value="Brigade">Brigade</option>
                                <option value="Buk Old Site/New Site">Buk Old Site/New Site</option>
                                <option value="Fagge">Fagge</option>
                                <option value="Farm Centre">Farm Centre</option>
                                <option value="Gadan Kaya">Gadan Kaya</option>
                                <option value="Gadun Albasu">Gadun Albasu</option>
                                <option value="Gaya">Gaya</option>
                                <option value="Goron Dutse">Goron Dutse</option>
                                <option value="Gwammaja">Gwammaja</option>
                                <option value="Gyadi-Gyadi/Zoo Road">Gyadi-Gyadi/Zoo Road</option>
                                <option value="Gyadi-Gyadi/Zaria Road">Gyadi-Gyadi/Zaria Road</option>   
                                <option value="Hotoro">Hotoro</option>  
                                <option value="Kabuga">Kabuga</option> 
                                <option value="Kano City">Kano City</option>  
                                <option value="Karkasara">Karkasara</option>  
                                <option value="Katsina Road">Katsina Road</option>  
                                <option value="Kawo-Kano">Kawo-Kano</option>  
                                <option value="Panshekara">Panshekara</option>  
                                <option value="Sabon Gari">Sabon Gari</option>  
                                <option value="Sallari">Sallari</option>    
                                <option value="Sharada">Sharada</option>    
                                <option value="Tarauni">Tarauni</option>    
                                <option value="Wudil">Wudil</option>    
                                <option value="Zoo Road">Zoo Road</option>    
                            </datalist>

                            <!-- Katsina -->
                            <input type="hidden" disabled id="katsina" name="town" placeholder="Select your City" class="form-control" list="mykatsina">
                            <datalist id="mykatsina">
                                <option value="Bakori">Bakori</option>
                                <option value="Daura">Daura</option>
                                <option value="Jibia">Jibia</option>
                                <option value="Zango">Zango</option>
                                <option value="Bataragawa">Bataragawa</option>
                                <option value="Funtua">Funtua</option>
                                <option value="Kankia">Kankia</option>
                            </datalist>

                            <!-- Kebbi -->
                            <input type="hidden" disabled id="kebbi" name="town" placeholder="Select your City" class="form-control" list="mykebbi">
                            <datalist id="mykebbi">
                                <option value="Ambrusa">Ambrusa</option>
                                <option value="Argungu">Argungu</option>
                                <option value="Birnin Kebbi">Birnin Kebbi</option>
                            </datalist>

                            <!-- Kogi -->
                            <input type="hidden" disabled id="kogi" name="town" placeholder="Select your City" class="form-control" list="mykogi">
                            <datalist id="mykogi">
                                <option value="Abobo">Abobo</option>
                                <option value="Ajaokuta">Ajaokuta</option>
                                <option value="Ankpa">Ankpa</option>
                                <option value="Ayangba">Ayangba</option>
                                <option value="CBN">CBN</option>
                                <option value="Felele">Felele</option>
                                <option value="Ganaja">Ganaja</option>
                                <option value="Idah">Idah</option>
                                <option value="Itakpe">Itakpe</option>
                                <option value="Jingbe">Jingbe</option>
                                <option value="Kabba">Kabba</option>
                                <option value="Obajana">Obajana</option>
                                <option value="Okenne">Okenne</option>
                                <option value="Zango">Zango</option>
                            </datalist>

                            <!-- Kwara -->
                            <input type="hidden" disabled id="kwara" name="town" placeholder="Select your City" class="form-control" list="mykwara">
                            <datalist id="mykwara">
                                <option value="Asa">Asa</option>
                                <option value="Baruten">Baruten</option>
                                <option value="Edu">Edu</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Ifelodun">Ifelodun</option>
                                <option value="Ilorin-Agbooba-Adewole Estate">Ilorin-Agbooba-Adewole Estate</option>
                                <option value="Ilorin-Challenge-Uith">Ilorin-Challenge-Uith</option>
                                <option value="Ilorin-Gaaakanbi-Asadam-Ganmo">Ilorin-Gaaakanbi-Asadam-Ganmo</option>
                                <option value="Ilorin East">Ilorin East</option>
                                <option value="Ilorin South">Ilorin South</option>
                                <option value="Ilorin West">Ilorin West</option>
                                <option value="Ilorin Central">Ilorin Central</option>
                                <option value="Irepodun">Irepodun</option>
                                <option value="Isin">Isin</option>
                                <option value="Kaiama">Kaiama</option>
                                <option value="Moro">Moro</option>
                                <option value="OFFA">OFFA</option>
                                <option value="Oke Ero">Oke Ero</option>
                                <option value="Oyun">Oyun</option>
                                <option value="Pategi">Pategi</option>
                            </datalist>

                            <!-- Lagos -->
                            <input type="hidden" disabled id="lagos" name="town" placeholder="Select your City" class="form-control" list="mylagos">
                            <datalist id="mylagos">
                                <option value="Abule Egba(Agbado Ijaye Road)">Abule Egba(Agbado Ijaye Road)</option>
                                <option value="Abule Egba(Ajasa Command Road)">Abule Egba(Ajasa Command Road)</option>
                                <option value="Abule Egba(Ajegunle)">Abule Egba(Ajegunle)</option>
                                <option value="Abule Egba(Alagbado)">Abule Egba(Alagbado)</option>
                                <option value="Abule Egba(Alakuko)">Abule Egba(Alakuko)</option>
                                <option value="Abule Egba(Ekoro road)">Abule Egba(Ekoro road)</option>
                                <option value="Abule Egba(Meiran road)">Abule Egba(Meiran road)</option>
                                <option value="Abule Egba(New Oko Oba)">Abule Egba(New Oko Oba)</option>
                                <option value="Agbara">Agbara</option>
                                <option value="Agege(Ajuwon Akute Road)">Agege(Ajuwon Akute Road)</option>
                                <option value="Agege(Dopemu)">Agege(Dopemu)</option>
                                <option value="Agege(Iju Road)">Agege(Iju Road)</option>
                                <option value="Agege(Old Abeokuta Road)">Agege(Old Abeokuta Road)</option>
                                <option value="Agege(Old Otta Road)">Agege(Old Otta Road)</option>
                                <option value="Agege(Orile Agege)">Agege(Orile Agege)</option>
                                <option value="Agiliti">Agiliti</option>
                                <option value="Agungi(Lekki)">Agungi(Lekki)</option>
                                <option value="Ajao Estate">Ajao Estate</option>
                                <option value="Alfa Beach">Alfa Beach</option>
                                <option value="Amuwo">Amuwo</option>
                                <option value="Anthony Village">Anthony Village</option>
                                <option value="Apapa(Ajegunle)">Apapa(Ajegunle)</option>
                                <option value="Apapa(Amukoko)">Apapa(Amukoko)</option>
                                <option value="Apapa(GRA)">Apapa(GRA)</option>
                                <option value="Apapa(Kiri Kiri)">Apapa(Kiri Kiri)</option>
                                <option value="Apapa(Olodi)">Apapa(Olodi)</option>
                                <option value="Apapa(Suru Alaba)">Apapa(Suru Alaba)</option>
                                <option value="Apapa(Tincan)">Apapa(Tincan)</option>
                                <option value="Apapa(Warf Road)">Apapa(Warf Road)</option>
                                <option value="Awoyaya">Awoyaya</option>
                                <option value="Awoyaya-Container bus-stop">Awoyaya-Container bus-stop</option>
                                <option value="Awoyaya-Eko Atete Estate">Awoyaya-Eko Atete Estate</option>
                                <option value="Awoyaya-Eputu">Awoyaya-Eputu</option>
                                <option value="Awoyaya-Gbetu Iwerekun Road">Awoyaya-Gbetu Iwerekun Road</option>
                                <option value="Awoyaya-Idowu Eletu">Awoyaya-Idowu Eletu</option>
                                <option value="Awoyaya-Mayfair Gardens">Awoyaya-Mayfair Gardens</option>
                                <option value="Awoyaya-Ogunlana Bus stop">Awoyaya-Ogunlana Bus stop</option>
                                <option value="Awoyaya-Ologunfe">Awoyaya-Ologunfe</option>
                                <option value="Awoyaya-Oribanwa">Awoyaya-Oribanwa</option>
                                <option value="Badagry">Badagry</option>
                                <option value="Banana Island">Banana Island</option>
                                <option value="Berger">Berger</option>
                                <option value="Bogije">Bogije</option>
                                <option value="Coker">Coker</option>
                                <option value="Doyin">Doyin</option>
                                <option value="Ejigbo-Ailegun Road">Ejigbo-Ailegun Road</option>
                                <option value="Ejigbo-Bucknor">Ejigbo-Bucknor</option>
                                <option value="Ejigbo-Ile Epo">Ejigbo-Ile Epo</option>
                                <option value="Ejigbo-Isheri-Osun">Ejigbo-Isheri-Osun</option>
                                <option value="Ejigbo-Jakande Wood Market">Ejigbo-Jakande Wood Market</option>
                                <option value="Ejigbo-Oke-Afa">Ejigbo-Oke-Afa</option>
                                <option value="Ejigbo-Pipeline">Ejigbo-Pipeline</option>
                                <option value="Ejigbo-Powerline">Ejigbo-Powerline</option>
                                <option value="Elemoro">Elemoro</option>
                                <option value="Epe">Epe</option>
                                <option value="Fagba(Iju Road)">Fagba(Iju Road)</option>
                                <option value="Festac(1st Aveue)">Festac(1st Aveue)</option>
                                <option value="Festac(2nd Aveue)">Festac(2nd Aveue)</option>
                                <option value="Festac(3rd Aveue)">Festac(3rd Aveue)</option>
                                <option value="Festac(4th Aveue)">Festac(4th Aveue)</option>
                                <option value="Festac(5th Aveue)">Festac(5th Aveue)</option>
                                <option value="Festac(6th Aveue)">Festac(6th Aveue)</option>
                                <option value="Festac(7th Aveue)">Festac(7th Aveue)</option>
                                <option value="Gbagada-Ifako">Gbagada-Ifako</option>
                                <option value="Gbagada-Abule Okuta">Gbagada-Abule Okuta</option>
                                <option value="Gbagada-Araromi">Gbagada-Araromi</option>
                                <option value="Gbagada-Deeper Life">Gbagada-Deeper Life</option>
                                <option value="Gbagada-Diya">Gbagada-Diya</option>
                                <option value="Gbagada-Expressway">Gbagada-Expressway</option>
                                <option value="Gbagada-Hospital">Gbagada-Hospital</option>
                                <option value="Gbagada-L&K">Gbagada-L&K</option>
                                <option value="Gbagada-New Garage">Gbagada-New Garage</option>
                                <option value="Gbagada-Olopomeji">Gbagada-Olopomeji</option>
                                <option value="Gbagada-Pedro">Gbagada-Pedro</option>
                                <option value="Gbagada-Sawmill">Gbagada-Sawmill</option>
                                <option value="Gbagada-Sholuyi">Gbagada-Sholuyi</option>
                                <option value="Ijebu-Lekki Aiyeteju">Ijebu-Lekki Aiyeteju</option>
                                <option value="Ijebu-Lekki Akodo">Ijebu-Lekki Akodo</option>
                                <option value="Ijebu-Lekki Amen Estate">Ijebu-Lekki Amen Estate</option>
                                <option value="Ijebu-Lekki Dangote Fertilizer">Ijebu-Lekki Dangote Fertilizer</option>
                                <option value="Ijebu-Lekki Dangote Refinery">Ijebu-Lekki Dangote Refinery</option>
                                <option value="Ijebu-Lekki Dano Milk">Ijebu-Lekki Dano Milk</option>
                                <option value="Ijebu-Lekki Eleko Junction">Ijebu-Lekki Eleko Junction</option>
                                <option value="Ijebu-Lekki Igando">Ijebu-Lekki Igando</option>
                                <option value="Ijebu-Lekki Magbon">Ijebu-Lekki Magbon</option>
                                <option value="Ijebu-Lekki Onosa">Ijebu-Lekki Onosa</option>
                                <option value="Ijebu-Lekki Orimedu">Ijebu-Lekki Orimedu</option>
                                <option value="Ijebu-Lekki Shapati">Ijebu-Lekki Shapati</option>
                                <option value="Idimu">Idimu</option>
                                <option value="Igando">Igando</option>
                                <option value="Ijanikin">Ijanikin</option>
                                <option value="Ijegun Ikotun">Ijegun Ikotun</option>
                                <option value="Ijegun Obadore Road">Ijegun Obadore Road</option>
                                <option value="Ijora">Ijora</option>
                                <option value="Ikeja(Adeniyi Jones)">Ikeja(Adeniyi Jones)</option>
                                <option value="Ikeja(Alausa)">Ikeja(Alausa)</option>
                                <option value="Ikeja(Allen Avenue)">Ikeja(Allen Avenue)</option>
                                <option value="Ikeja(Computer Village)">Ikeja(Computer Village)</option>
                                <option value="Ikeja(GRA)">Ikeja(GRA)</option>
                                <option value="Ikeja(Airport)">Ikeja(Airport)</option>
                                <option value="Ikeja(Mangoro)">Ikeja(Mangoro)</option>
                                <option value="Ikeja(Oba-Akran)">Ikeja(Oba-Akran)</option>
                                <option value="Ikeja(Opebi)">Ikeja(Opebi)</option>
                                <option value="Ikorodu(Adamo)">Ikorodu(Adamo)</option>
                                <option value="Ikorodu(Agbede)">Ikorodu(Agbede)</option>
                                <option value="Ikorodu(Agbowa)">Ikorodu(Agbowa)</option>
                                <option value="Ikorodu(Agric)">Ikorodu(Agric)</option>
                                <option value="Ikorodu(Bayeku)">Ikorodu(Bayeku)</option>
                                <option value="Ikorodu(Eyita)">Ikorodu(Eyita)</option>
                                <option value="Ikorodu(Gberigbe)">Ikorodu(Gberigbe)</option>
                                <option value="Ikorodu(Ijede)">Ikorodu(Ijede)</option>
                                <option value="Ikorodu(Imota)">Ikorodu(Imota)</option>
                                <option value="Ikorodu(Ita Oluwo)">Ikorodu(Ita Oluwo)</option>
                                <option value="Ikorodu(Itamaga)">Ikorodu(Itamaga)</option>
                                <option value="Ikorodu(Offin)">Ikorodu(Offin)</option>
                                <option value="Ikorodu(Owode-Ibese)">Ikorodu(Owode-Ibese)</option>
                                <option value="Ikorodu(RADIO)">Ikorodu(RADIO)</option>
                                <option value="Ikorodu(Road-Ajegunle)">Ikorodu(Road-Ajegunle)</option>
                                <option value="Ikorodu(Road-Irawo)">Ikorodu(Road-Irawo)</option>
                                <option value="Ikorodu(Road-Owode Onirin)">Ikorodu(Road-Owode Onirin)</option>
                                <option value="Ikorodu(Elepe)">Ikorodu(Elepe)</option>
                                <option value="Ikorodu(Laspotech)">Ikorodu(Laspotech)</option>
                                <option value="Ikorodu(Ogolonto)">Ikorodu(Ogolonto)</option>
                                <option value="Ikorodu(Sabo)">Ikorodu(Sabo)</option>
                                <option value="Ikorodu(Agufoye)">Ikorodu(Agufoye)</option>
                                <option value="Ikorodu(Benson)">Ikorodu(Benson)</option>
                                <option value="Ikorodu(Garage)">Ikorodu(Garage)</option>
                                <option value="Ikorodu(Odokekere)">Ikorodu(Odokekere)</option>
                                <option value="Ikorodu(Odonla)">Ikorodu(Odonla)</option>
                                <option value="Ikorodu(Ogijo)">Ikorodu(Ogijo)</option>
                                <option value="Ikota">Ikota</option>
                                <option value="Ikotun">Ikotun</option>
                                <option value="Ikoyi(Awolowo road)">Ikoyi(Awolowo road)</option>
                                <option value="Ikoyi(Bourdillon)">Ikoyi(Bourdillon)</option>
                                <option value="Ikoyi(Dolphin)">Ikoyi(Dolphin)</option>
                                <option value="Ikoyi(Glover road)">Ikoyi(Glover road)</option>
                                <option value="Ikoyi(Keffi)">Ikoyi(Keffi)</option>
                                <option value="Ikoyi(Kings Way road)">Ikoyi(Kings Way road)</option>
                                <option value="Ikoyi(Obalende)">Ikoyi(Obalende)</option>
                                <option value="Ikoyi(Queens Drive)">Ikoyi(Queens Drive)</option>
                                <option value="Ikoyi(Ikoyi-Parkview)">Ikoyi(Ikoyi-Parkview)</option>
                                <option value="Ilaje(Bariga)">Ilaje(Bariga)</option>
                                <option value="Ilupeju">Ilupeju</option>
                                <option value="Isheri Ikotun">Isheri Ikotun</option>
                                <option value="Isheri Magodo">Isheri Magodo</option>
                                <option value="Isolo">Isolo</option>
                                <option value="Iyana Ejigbo">Iyana Ejigbo</option>
                                <option value="Iyana Iba">Iyana Iba</option>
                                <option value="Iyana Ipaja(Abesan)">Iyana Ipaja(Abesan)</option>
                                <option value="Iyana Ipaja(Aboru)">Iyana Ipaja(Aboru)</option>
                                <option value="Iyana Ipaja(Ayobo Road)">Iyana Ipaja(Ayobo Road)</option>
                                <option value="Iyana Ipaja(Command Road)">Iyana Ipaja(Command Road)</option>
                                <option value="Iyana Ipaja(Egbeda)">Iyana Ipaja(Egbeda)</option>
                                <option value="Iyana Ipaja(Ikola Road)">Iyana Ipaja(Ikola Road)</option>
                                <option value="Iyana Ipaja(Iyana Ipaja Road)">Iyana Ipaja(Iyana Ipaja Road)</option>
                                <option value="Iyana Ipaja(Shasha)">Iyana Ipaja(Shasha)</option>
                                <option value="Jakande(Lekki)">Jakande(Lekki)</option>
                                <option value="Jakande(Isolo)">Jakande(Isolo)</option>
                                <option value="Ketu-Agboyi">Ketu-Agboyi</option>
                                <option value="Ketu-Alapere">Ketu-Alapere</option>
                                <option value="Ketu-CMD Road">Ketu-CMD Road</option>
                                <option value="Ketu-Demurin">Ketu-Demurin</option>
                                <option value="Ketu-Ikosi Road">Ketu-Ikosi Road</option>
                                <option value="Ketu-Ile Ile">Ketu-Ile Ile</option>
                                <option value="Ketu-Iyana School">Ketu-Iyana School</option>
                                <option value="Ketu-Tipper Garage">Ketu-Tipper Garage</option>
                                <option value="Lagos Island(Adeniji)">Lagos Island(Adeniji)</option>
                                <option value="Lagos Island(Marina)">Lagos Island(Marina)</option>
                                <option value="Lagos Island(Onikan)">Lagos Island(Onikan)</option>
                                <option value="Lagos Island(Sura)">Lagos Island(Sura)</option>
                                <option value="Lagos Island(TBS)">Lagos Island(TBS)</option>
                                <option value="Lakowe">Lakowe</option>
                                <option value="Lakowe-Adeba Road">Lakowe-Adeba Road</option>
                                <option value="Lakowe-Golf">Lakowe-Golf</option>
                                <option value="Lakowe-Kajola">Lakowe-Kajola</option>
                                <option value="Lakowe-School Gate">Lakowe-School Gate</option>
                                <option value="Lekki-VGC">Lekki-VGC</option>
                                <option value="Lekki 1(Bishop Durosimi)">Lekki 1(Bishop Durosimi)</option>
                                <option value="Lekki 1(F.T Kuboye Street)">Lekki 1(F.T Kuboye Street)</option>
                                <option value="Lekki Phase 1(Omorinre Johnson)">Lekki Phase 1(Omorinre Johnson)</option>
                                <option value="Lekki Phase 1(Admiralty Road)">Lekki Phase 1(Admiralty Road)</option>
                                <option value="Lekki Phase 1(Fola Osibo)">Lekki Phase 1(Fola Osibo)</option>
                                <option value="Lekki-Agungi">Lekki-Agungi</option>
                                <option value="Lekki-Ajah(Abijo)">Lekki-Ajah(Abijo)</option>
                                <option value="Lekki-Ajah(Addo Road)">Lekki-Ajah(Addo Road)</option>
                                <option value="Lekki-Ajah(Badore)">Lekki-Ajah(Badore)</option>
                                <option value="Lekki-Ajah(Ilaje)">Lekki-Ajah(Ilaje)</option>
                                <option value="Lekki-Ajah(Ilaje)">Lekki-Ajah(Ilaje)</option>
                                <option value="Lekki-Ajah(Ilasan)">Lekki-Ajah(Ilasan)</option>
                                <option value="Lekki-Ajah(Jakande)">Lekki-Ajah(Jakande)</option>
                                <option value="Lekki-Ajah(Sangotedo)">Lekki-Ajah(Sangotedo)</option>
                                <option value="Lekki-Awoyaya">Lekki-Awoyaya</option>
                                <option value="Lekki-Chisco">Lekki-Chisco</option>
                                <option value="Lekki-Elf">Lekki-Elf</option>
                                <option value="Lekki-Igboefon">Lekki-Igboefon</option>
                                <option value="Lekki-Ikate Elegushi">Lekki-Ikate Elegushi</option>
                                <option value="Lekki-Jakande(Kazeem Eletu)">Lekki-Jakande(Kazeem Eletu)</option>
                                <option value="Lekki-Maruwa">Lekki-Maruwa</option>
                                <option value="Lekki-Oniru Estate">Lekki-Oniru Estate</option>
                                <option value="Lekki-Osapa London">Lekki-Osapa London</option>
                                <option value="Magboro">Magboro</option>
                                <option value="Maryland(Mende)">Maryland(Mende)</option>
                                <option value="Maryland(Onigbongbo)">Maryland(Onigbongbo)</option>
                                <option value="Mebanmu">Mebanmu</option>
                                <option value="Mile 12">Mile 12</option>
                                <option value="Mile 12-Ajelogo">Mile 12-Ajelogo</option>
                                <option value="Mile 12-Agboyi Ketu">Mile 12-Agboyi Ketu</option>
                                <option value="Mile 12-Doyin Omololu">Mile 12-Doyin Omololu</option>
                                <option value="Mile 12-Orishigun">Mile 12-Orishigun</option>
                                <option value="Mile 2">Mile 2</option>
                                <option value="Mushin-Palm Avenue">Mushin-Palm Avenue</option>
                                <option value="Mushin-Agege Motor Road">Mushin-Agege Motor Road</option>
                                <option value="Mushin-Daleko Market">Mushin-Daleko Market</option>
                                <option value="Mushin-Fatai Atere">Mushin-Fatai Atere</option>
                                <option value="Mushin-Idi Oro">Mushin-Idi Oro</option>
                                <option value="Mushin-Idi Araba">Mushin-Idi Araba</option>
                                <option value="Mushin-Ilasamaja Road">Mushin-Ilasamaja Road</option>
                                <option value="Mushin-Isolo Road">Mushin-Isolo Road</option>
                                <option value="Mushin-Ladipo Road">Mushin-Ladipo Road</option>
                                <option value="Mushin-Mushin Market">Mushin-Mushin Market</option>
                                <option value="Mushin-Olateju">Mushin-Olateju</option>
                                <option value="Mushin-Papa Ajao">Mushin-Papa Ajao</option>
                                <option value="Odongunyan">Odongunyan</option>
                                <option value="Ogba-Akilo Road">Ogba-Akilo Road</option>
                                <option value="Ogba-College Road">Ogba-College Road</option>
                                <option value="Ogba-Lateef Jakande Road">Ogba-Lateef Jakande Road</option>
                                <option value="Ogba-Acme Road">Ogba-Acme Road</option>
                                <option value="Ogba-Aguda">Ogba-Aguda</option>
                                <option value="Ogba-County">Ogba-County</option>
                                <option value="Ogba-Ifako-Idiagbon">Ogba-Ifako-Idiagbon</option>
                                <option value="Ogba-Ifako-Orimolade">Ogba-Ifako-Orimolade</option>
                                <option value="Ogba-Isheri Road">Ogba-Isheri Road</option>
                                <option value="Ogba-Obawole">Ogba-Obawole</option>
                                <option value="Ogba-Ojodu">Ogba-Ojodu</option>
                                <option value="Ogba-Oke Ira">Ogba-Oke Ira</option>
                                <option value="Ogba-Oke Ira 2nd Junction">Ogba-Oke Ira 2nd Junction</option>
                                <option value="Ogba-Surulere Ind Road">Ogba-Surulere Ind Road</option>
                                <option value="Ogba-Wemco Road">Ogba-Wemco Road</option>
                                <option value="Ogudu">Ogudu</option>
                                <option value="Ojo Shibiri">Ojo Shibiri</option>
                                <option value="Ojo-Abule Oshun">Ojo-Abule Oshun</option>
                                <option value="Ojo-Adaloko">Ojo-Adaloko</option>
                                <option value="Ojo-Agric">Ojo-Agric</option>
                                <option value="Ojo-Ajangbadi">Ojo-Ajangbadi</option>
                                <option value="Ojo-Alaba International">Ojo-Alaba International</option>
                                <option value="Ojo-Alaba Rago">Ojo-Alaba Rago</option>
                                <option value="Ojo-Alaba Suru">Ojo-Alaba Suru</option>
                                <option value="Ojo-Alakija">Ojo-Alakija</option>
                                <option value="Ojo-Cassidy">Ojo-Cassidy</option>
                                <option value="Ojo-Ijegun">Ojo-Ijegun</option>
                                <option value="Ojo-Ilogbo">Ojo-Ilogbo</option>
                                <option value="Ojo-Ojo Barracks">Ojo-Ojo Barracks</option>
                                <option value="Ojo-Okokomaiko">Ojo-Okokomaiko</option>
                                <option value="Ojo-Old Ojo road">Ojo-Old Ojo road</option>
                                <option value="Ojo-Onireke">Ojo-Onireke</option>
                                <option value="Ojo-PPL">Ojo-PPL</option>
                                <option value="Ojo-Tedi Town">Ojo-Tedi Town</option>
                                <option value="Ojo-Trade Fair">Ojo-Trade Fair</option>
                                <option value="Ojo-Volks">Ojo-Volks</option>
                                <option value="Ojodu">Ojodu</option>
                                <option value="Ojokoro">Ojokoro</option>
                                <option value="Ojota">Ojota</option>
                                <option value="Okokomaiko">Okokomaiko</option>
                                <option value="Okota">Okota</option>
                                <option value="Omole Phase 1">Omole Phase 1</option>
                                <option value="Omole Phase 2">Omole Phase 2</option>
                                <option value="Oniru">Oniru</option>
                                <option value="Oregun">Oregun</option>
                                <option value="Oreyo-Igbe">Oreyo-Igbe</option>
                                <option value="Orile">Orile</option>
                                <option value="Osapa(Lekki)">Osapa(Lekki)</option>
                                <option value="Oshodi-Bolade">Oshodi-Bolade</option>
                                <option value="Oshodi-Isolo">Oshodi-Isolo</option>
                                <option value="Oshodi-Mafoluku">Oshodi-Mafoluku</option>
                                <option value="Oshodi-Orile">Oshodi-Orile</option>
                                <option value="Oshodi-Shogunle">Oshodi-Shogunle</option>
                                <option value="Palmgroove-Onipanu">Palmgroove-Onipanu</option>
                                <option value="Sari-Iganmu">Sari-Iganmu</option>
                                <option value="Satellite-Town">Satellite-Town</option>
                                <option value="Somolu">Somolu</option>
                                <option value="Surulere(Adeniran Ogunsanya)">Surulere(Adeniran Ogunsanya)</option>
                                <option value="Surulere(Aguda)">Surulere(Aguda)</option>
                                <option value="Surulere(Bode Thomas)">Surulere(Bode Thomas)</option>
                                <option value="Surulere(Fatia Shitta)">Surulere(Fatia Shitta)</option>
                                <option value="Surulere(Idi Araba)">Surulere(Idi Araba)</option>
                                <option value="Surulere(Ijesha)">Surulere(Ijesha)</option>
                                <option value="Surulere(Iporin)">Surulere(Iporin)</option>
                                <option value="Surulere(Itire)">Surulere(Itire)</option>
                                <option value="Surulere(Lawanson)">Surulere(Lawanson)</option>
                                <option value="Surulere(Masha)">Surulere(Masha)</option>
                                <option value="Surulere(Ogunlana drive)">Surulere(Ogunlana drive)</option>
                                <option value="Surulere(Ojuelegba)">Surulere(Ojuelegba)</option>
                                <option value="VI(Adetokunbo Ademola)">VI(Adetokunbo Ademola)</option>
                                <option value="VI(Ahmed Bello way)">VI(Ahmed Bello way)</option>
                                <option value="VI(Bishop Aboyade Cole)">VI(Bishop Aboyade Cole)</option>
                                <option value="VI(Oniru Road)">VI(Oniru Road)</option>
                                <option value="VI(Yesufu Abiodun)">VI(Yesufu Abiodun)</option>
                                <option value="VI(Ajose Adeogun)">VI(Ajose Adeogun)</option>
                                <option value="VI(Akin Adeshola)">VI(Akin Adeshola)</option>
                                <option value="VI(Bishop Oluwale)">VI(Bishop Oluwale)</option>
                                <option value="Victoria Island(Adeola Odeku)">Victoria Island(Adeola Odeku)</option>
                                <option value="Victoria Island(Kofo Abayomi)">Victoria Island(Kofo Abayomi)</option>
                                <option value="Yaba-Abule Ijesha">Yaba-Abule Ijesha</option>
                                <option value="Yaba-Fadeyi">Yaba-Fadeyi</option>
                                <option value="Yaba-Sabo">Yaba-Sabo</option>
                                <option value="Yaba-(Unilag)">Yaba-(Unilag)</option>
                                <option value="Yaba-Abule Oja">Yaba-Abule Oja</option>
                                <option value="Yaba-Adekunle">Yaba-Adekunle</option>
                                <option value="Yaba-Akoka">Yaba-Akoka</option>
                                <option value="Yaba-Alagomeju">Yaba-Alagomeju</option>
                                <option value="Yaba-College of Education">Yaba-College of Education</option>
                                <option value="Yaba-Commercial Avenue">Yaba-Commercial Avenue</option>
                                <option value="Yaba-Folagoro">Yaba-Folagoro</option>
                                <option value="Yaba-Herbert Macaulay Way">Yaba-Herbert Macaulay Way</option>
                                <option value="Yaba-Jibowu">Yaba-Jibowu</option>
                                <option value="Yaba-Makoko">Yaba-Makoko</option>
                                <option value="Yaba-Murtala Mohammed Way">Yaba-Murtala Mohammed Way</option>
                                <option value="Yaba-Onike Iwaya">Yaba-Onike Iwaya</option>
                                <option value="Yaba-Oyingbo">Yaba-Oyingbo</option>
                                <option value="Yaba-Tejuosho">Yaba-Tejuosho</option>
                                <option value="Yaba-University Road">Yaba-University Road</option>
                                <option value="Yaba-Yabatech">Yaba-Yabatech</option>
                            </datalist>

                            <!-- Nasarawa -->
                            <input type="hidden" disabled id="lafia" name="town" placeholder="Select your City" class="form-control" list="mynasarawa">
                            <datalist id="mynasarawa">
                                <option value="Akwanga">Akwanga</option>
                                <option value="Awe">Awe</option>
                                <option value="Doma">Doma</option>
                                <option value="Karu">Karu</option>
                                <option value="Keanna">Keanna</option>
                                <option value="Keffi">Keffi</option>
                                <option value="Lafia-Bukan Sidi">Lafia-Bukan Sidi</option>
                                <option value="Lafia-Central Locations">Lafia-Central Locations</option>
                                <option value="Lafia-College/Polytechnic">Lafia-College/Polytechnic</option>
                                <option value="Lafia-East">Lafia-East</option>
                                <option value="Lafia-Jos Road">Lafia-Jos Road</option>
                                <option value="Lafia-Low Cost">Lafia-Low Cost</option>
                                <option value="Lafia-Sabon Pegi">Lafia-Sabon Pegi</option>
                                <option value="Lafia-Shabu">Lafia-Shabu</option>
                                <option value="Lafia-Tudun Gwandara">Lafia-Tudun Gwandara</option>
                                <option value="Masaka">Masaka</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Nasarawa Egon">Nasarawa Egon</option>
                                <option value="New Karu">New Karu</option>
                                <option value="Obi">Obi</option>
                                <option value="Toto">Toto</option>
                                <option value="Wamba">Wamba</option>
                            </datalist>

                             <!-- Niger -->
                             <input type="hidden" disabled id="niger" name="town" placeholder="Select your City" class="form-control" list="myniger">
                             <datalist id="myniger">
                                 <option value="Agai">Agai</option>
                                 <option value="Baddegi">Baddegi</option>
                                 <option value="Bida">Bida</option>
                                 <option value="Kontagora">Kontagora</option>
                                 <option value="Lapai">Lapai</option>
                                 <option value="Madala">Madala</option>
                                 <option value="Minna-Bosso">Minna-Bosso</option>
                                 <option value="Minna-Central">Minna-Central</option>
                                 <option value="Minna-Chanchaga">Minna-Chanchaga</option>
                                 <option value="Minna-David Mark Way">Minna-David Mark Way</option>
                                 <option value="Minna-Dutsen Kura">Minna-Dutsen Kura</option>
                                 <option value="Minna-Easter Bypass">Minna-Easter Bypass</option>
                                 <option value="Minna-F Layout">Minna-F Layout</option>
                                 <option value="Minna-Fadipe">Minna-Fadipe</option>
                                 <option value="Minna-Farm Center">Minna-Farm Center</option>
                                 <option value="Minna-Gidan Kwano">Minna-Gidan Kwano</option>
                                 <option value="Minna-GRA">Minna-GRA</option>
                                 <option value="Minna-Kpakungu">Minna-Kpakungu</option>
                                 <option value="Minna-Kure Market">Minna-Kure Market</option>
                                 <option value="Minna-Kuta Road">Minna-Kuta Road</option>
                                 <option value="Minna-London Street">Minna-London Street</option>
                                 <option value="Minna-M.I Wushishi">Minna-M.I Wushishi</option>
                                 <option value="Minna-Maikunkele">Minna-Maikunkele</option>
                                 <option value="Minna-Maitunbi">Minna-Maitunbi</option>
                                 <option value="Minna-Mandela">Minna-Mandela</option>
                                 <option value="Minna-Mobil">Minna-Mobil</option>
                                 <option value="Minna-Okada Way">Minna-Okada Way</option>
                                 <option value="Minna-Sango">Minna-Sango</option>
                                 <option value="Minna-Sauka Ka Huta">Minna-Sauka Ka Huta</option>
                                 <option value="Minna-Shiroro Way">Minna-Shiroro Way</option>
                                 <option value="Minna-Tunga">Minna-Tunga</option>
                                 <option value="Minna-Western Bypass">Minna-Western Bypass</option>
                                 <option value="Suleja">Suleja</option>
                                 <option value="Suleja-Guraka">Suleja-Guraka</option>
                                 <option value="Suleja-Kwamba">Suleja-Kwamba</option>
                                 <option value="Suleja-Kwankashe">Suleja-Kwankashe</option>
                                 <option value="Suleja-Maje">Suleja-Maje</option>
                                 <option value="Suleja-Rafinsayi">Suleja-Rafinsayi</option>
                                 <option value="Zuba">Zuba</option>
                             </datalist>

                             <!-- Ogun -->
                             <input type="hidden" disabled id="ogun" name="town" placeholder="Select your City" class="form-control" list="myogun">
                             <datalist id="myogun">
                                 <option value="Abeokuta-Adigbe">Abeokuta-Adigbe</option>
                                 <option value="Abeokuta-Central">Abeokuta-Central</option>
                                 <option value="Abeokuta-Elega">Abeokuta-Elega</option>
                                 <option value="Abeokuta-Idi Aba">Abeokuta-Idi Aba</option>
                                 <option value="Abeokuta-Lafenwa">Abeokuta-Lafenwa</option>
                                 <option value="Abeokuta-MKO Abiola Way">Abeokuta-MKO Abiola Way</option>
                                 <option value="Abeokuta-Oke Mosan">Abeokuta-Oke Mosan</option>
                                 <option value="Agbara(OPIC)">Agbara(OPIC)</option>
                                 <option value="Agbara Estate(Ogun)">Agbara Estate(Ogun)</option>
                                 <option value="Ago Iwoye">Ago Iwoye</option>
                                 <option value="Akute">Akute</option>
                                 <option value="Ewekoro">Ewekoro</option>
                                 <option value="Igbesa(Crawford University)">Igbesa(Crawford University)</option>
                                 <option value="Igbesa(Igbesa Ploytechnic)">Igbesa(Igbesa Ploytechnic)</option>
                                 <option value="Igbesa(Lusada)">Igbesa(Lusada)</option>
                                 <option value="Ijebu Ife">Ijebu Ife</option>
                                 <option value="Ijebu Igbo">Ijebu Igbo</option>
                                 <option value="Ijebu North East">Ijebu North East</option>
                                 <option value="Ijebu Ode Awujaale Street">Ijebu Ode Awujaale Street</option>
                                 <option value="Ijebu Ode Folagbade">Ijebu Ode Folagbade</option>
                                 <option value="Ijebu Ode Molipa">Ijebu Ode Molipa</option>
                                 <option value="Ijebu Ode Asiru">Ijebu Ode Asiru</option>
                                 <option value="Ijebu Ode Bonajo">Ijebu Ode Bonajo</option>
                                 <option value="Ijebu Ode Degun">Ijebu Ode Degun</option>
                                 <option value="Ijebu Ode Ibadan Road">Ijebu Ode Ibadan Road</option>
                                 <option value="Ijebu Ode Igbeda Road">Ijebu Ode Igbeda Road</option>
                                 <option value="Ijebu Ode Italapo">Ijebu Ode Italapo</option>
                                 <option value="Ijebu Ode New Road">Ijebu Ode New Road</option>
                                 <option value="Ijebu Ode Olisa Street">Ijebu Ode Olisa Street</option>
                                 <option value="Ijebu Ode Osinubi">Ijebu Ode Osinubi</option>
                                 <option value="Ijebu Ode Sabo">Ijebu Ode Sabo</option>
                                 <option value="Ijebu Ode Saka">Ijebu Ode Saka</option>
                                 <option value="Ijebu Ode Tuaboat Road">Ijebu Ode Tuaboat Road</option>
                                 <option value="Ijebu Ode Lekuti">Ijebu Ode Lekuti</option>
                                 <option value="Ikenne">Ikenne</option>
                                 <option value="Ilaro-Ajilete">Ilaro-Ajilete</option>
                                 <option value="Ilaro-Ibese">Ilaro-Ibese</option>
                                 <option value="Ilaro-Leslei Road">Ilaro-Leslei Road</option>
                                 <option value="Ilaro-Oke Ela">Ilaro-Oke Ela</option>
                                 <option value="Ilaro-Oke Odan">Ilaro-Oke Odan</option>
                                 <option value="Ilaro-Orita">Ilaro-Orita</option>
                                 <option value="Ilaro-Papa Lanto">Ilaro-Papa Lanto</option>
                                 <option value="Ilishan-Remo Central">Ilishan-Remo Central</option>
                                 <option value="Ilishan-Remo Babcock">Ilishan-Remo Babcock</option>
                                 <option value="Imeko Afon">Imeko Afon</option>
                                 <option value="Iperu Remo">Iperu Remo</option>
                                 <option value="Itele(Ijebu)">Itele(Ijebu)</option>
                                 <option value="Mowe Ibafo">Mowe Ibafo</option>
                                 <option value="Oba">Oba</option>
                                 <option value="Obafemi Owode">Obafemi Owode</option>
                                 <option value="Obantoko">Obantoko</option>
                                 <option value="Odeda">Odeda</option>
                                 <option value="Odogbolu">Odogbolu</option>
                                 <option value="Ogijo">Ogijo</option>
                                 <option value="Ogun-Mowe-Arepo">Ogun-Mowe-Arepo</option>
                                 <option value="Oru">Oru</option>
                                 <option value="Otta Town(Akeja Navy)">Otta Town(Akeja Navy)</option>
                                 <option value="Otta Town(Bells)">Otta Town(Bells)</option>
                                 <option value="Otta Town(Covenant)">Otta Town(Covenant)</option>
                                 <option value="Otta Town(Ifo)">Otta Town(Ifo)</option>
                                 <option value="Otta Town(Obasanjo)">Otta Town(Obasanjo)</option>
                                 <option value="Otta Town(Osi Olosun)">Otta Town(Osi Olosun)</option>
                                 <option value="Otta Town(Owode)">Otta Town(Owode)</option>
                                 <option value="Redeemed Camp">Redeemed Camp</option>
                                 <option value="Remo North">Remo North</option>
                                 <option value="Sagamu-Akarigbo">Sagamu-Akarigbo</option>
                                 <option value="Sagamu-Ayiepe Road">Sagamu-Ayiepe Road</option>
                                 <option value="Sagamu-Coca-Cola">Sagamu-Coca-Cola</option>
                                 <option value="Sagamu-Ewo Oliwo">Sagamu-Ewo Oliwo</option>
                                 <option value="Sagamu-GRA Quarters/GRA Road">Sagamu-GRA Quarters/GRA Road</option>
                                 <option value="Sagamu-Interchange">Sagamu-Interchange</option>
                                 <option value="Sagamu-Makun">Sagamu-Makun</option>
                                 <option value="Sagamu-Olabisi Onabanjo University">Sagamu-Olabisi Onabanjo University</option>
                                 <option value="Sagamu-Sabo">Sagamu-Sabo</option>
                                 <option value="Sango(Ijoko)">Sango(Ijoko)</option>
                                 <option value="Sango Otta(Iju)">Sango Otta(Iju)</option>
                                 <option value="Sango Otta(Oju Ore)">Sango Otta(Oju Ore)</option>
                                 <option value="Sango Otta(Sango)">Sango Otta(Sango)</option>
                                 <option value="Sango Otta(Toll Gate)">Sango Otta(Toll Gate)</option>
                                 <option value="Yewa North/South">Yewa North/South</option>
                            </datalist>

                                <!-- Ondo -->
                                <input type="hidden" disabled id="ondo" name="town" placeholder="Select your City" class="form-control" list="myondo">
                             <datalist id="myondo">
                                 <option value="Akoko-Akungba">Akoko-Akungba</option>
                                 <option value="Akoko-Arigidi">Akoko-Arigidi</option>
                                 <option value="Akoko-Ikare">Akoko-Ikare</option>
                                 <option value="Akoko-Oba">Akoko-Oba</option>
                                 <option value="Akoko-Supare">Akoko-Supare</option>
                                 <option value="Akoko-Oshile">Akoko-Oshile</option>
                                 <option value="Akoko-Alagbaka">Akoko-Alagbaka</option>
                                 <option value="Akoko-FUTA">Akoko-FUTA</option>
                                 <option value="Akoko-Idanre Road">Akoko-Idanre Road</option>
                                 <option value="Akoko-Igbatoro">Akoko-Igbatoro</option>
                                 <option value="Akoko-Ijapo Estate">Akoko-Ijapo Estate</option>
                                 <option value="Akoko-Ijare">Akoko-Ijare</option>
                                 <option value="Akoko-Ijoka">Akoko-Ijoka</option>
                                 <option value="Akoko-Ilara Mokin">Akoko-Ilara Mokin</option>
                                 <option value="Akoko-Ilesha Garage">Akoko-Ilesha Garage</option>
                                 <option value="Akoko-Oba Adesida">Akoko-Oba Adesida</option>
                                 <option value="Akoko-Oba Ile">Akoko-Oba Ile</option>
                                 <option value="Akoko-Oda Road">Akoko-Oda Road</option>
                                 <option value="Akoko-Oluwatuyi">Akoko-Oluwatuyi</option>
                                 <option value="Akoko-Ondo Road">Akoko-Ondo Road</option>
                                 <option value="Akoko-Oyemekun Road">Akoko-Oyemekun Road</option>
                                 <option value="Akoko-Shagari Village">Akoko-Shagari Village</option>
                                 <option value="Ese Odo">Ese Odo</option>
                                 <option value="Idanre">Idanre</option>
                                 <option value="Ifedore">Ifedore</option>
                                 <option value="Igbokoda">Igbokoda</option>
                                 <option value="Illaje">Illaje</option>
                                 <option value="Irele">Irele</option>
                                 <option value="Isuada">Isuada</option>
                                 <option value="Odigbo">Odigbo</option>
                                 <option value="Okitipipa">Okitipipa</option>
                                 <option value="Ondo Town-Sagun">Ondo Town-Sagun</option>
                                 <option value="Ondo Town-Yaba">Ondo Town-Yaba</option>
                                 <option value="Ondo Town-Ajegunle">Ondo Town-Ajegunle</option>
                                 <option value="Ondo Town-Ajemulegun">Ondo Town-Ajemulegun</option>
                                 <option value="Ondo Town-Mimiko Estate">Ondo Town-Mimiko Estate</option>
                                 <option value="Ondo Town-Oka">Ondo Town-Oka</option>
                                 <option value="Ondo Town-Akinjagular">Ondo Town-Akinjagular</option>
                                 <option value="Ondo Town-Ayeyemi">Ondo Town-Ayeyemi</option>
                                 <option value="Ore">Ore</option>
                                 <option value="Ose">Ose</option>
                                 <option value="Owo Achievers University">Owo Achievers University</option>
                                 <option value="Owo-FCM">Owo-FCM</option>
                                 <option value="Owo-Ijebu">Owo-Ijebu</option>
                                 <option value="Owo-Poly">Owo-Poly</option>
                                 <option value="Owo-Post Office">Owo-Post Office</option>
                            </datalist>

                             <!-- Osun -->
                             <input type="hidden" disabled id="osun" name="town" placeholder="Select your City" class="form-control" list="myosun">
                             <datalist id="myosun">
                                 <option value="Arakeji">Arakeji</option>
                                 <option value="Ede">Ede</option>
                                 <option value="Ejigbo">Ejigbo</option>
                                 <option value="Ejigbo(Osun)">Ejigbo(Osun)</option>
                                 <option value="Esaoke">Esaoke</option>
                                 <option value="Ijebu">Ijebu</option>
                                 <option value="Ijebu-Jesa">Ijebu-Jesa</option>
                                 <option value="Ikire">Ikire</option>
                                 <option value="Ikirun">Ikirun</option>
                                 <option value="Ila">Ila</option>
                                 <option value="Ila-Orangun">Ila-Orangun</option>
                                 <option value="Ile Ife">Ile Ife</option>
                                 <option value="Ile Ife-Adesanmi">Ile Ife-Adesanmi</option>
                                 <option value="Ile Ife-Ajebamidele">Ile Ife-Ajebamidele</option>
                                 <option value="Ile Ife-Akarabata">Ile Ife-Akarabata</option>
                                 <option value="Ile Ife-AP">Ile Ife-AP</option>
                                 <option value="Ile Ife-Aserifa">Ile Ife-Aserifa</option>
                                 <option value="Ile Ife-Awoyeku">Ile Ife-Awoyeku</option>
                                 <option value="Ile Ife-Ede Road">Ile Ife-Ede Road</option>
                                 <option value="Ile Ife-Eleyele">Ile Ife-Eleyele</option>
                                 <option value="Ile Ife-Ilesa Garage/OAUTH">Ile Ife-Ilesa Garage/OAUTH</option>
                                 <option value="Ile Ife-Iremo">Ile Ife-Iremo</option>
                                 <option value="Ile Ife-Mayfair">Ile Ife-Mayfair</option>
                                 <option value="Ile Ife-Modomo">Ile Ife-Modomo</option>
                                 <option value="Ile Ife-Mokuro">Ile Ife-Mokuro</option>
                                 <option value="Ile Ife-Moro/Edunabon/Ipetumodu">Ile Ife-Moro/Edunabon/Ipetumodu</option>
                                 <option value="Ile Ife-NTA">Ile Ife-NTA</option>
                                 <option value="Ile Ife-OAU Community">Ile Ife-OAU Community</option>
                                 <option value="Ile Ife-Oduduwa University">Ile Ife-Oduduwa University</option>
                                 <option value="Ile Ife-Oke D.O">Ile Ife-Oke D.O</option>
                                 <option value="Ile Ife-Omole">Ile Ife-Omole</option>
                                 <option value="Ile Ife-Opa">Ile Ife-Opa</option>
                                 <option value="Ile Ife-Our Ladies Modakeke">Ile Ife-Our Ladies Modakeke</option>
                                 <option value="Ile Ife-Parakin">Ile Ife-Parakin</option>
                                 <option value="Ile Ife-Post Office/Sabo">Ile Ife-Post Office/Sabo</option>
                                 <option value="Ile Ife-Lagere">Ile Ife-Lagere</option>
                                 <option value="Ilesha">Ilesha</option>
                                 <option value="Iloko">Iloko</option>
                                 <option value="Iree">Iree</option>
                                 <option value="Iwo">Iwo</option>
                                 <option value="Iwo(Osun)">Iwo(Osun)</option>
                                 <option value="Okuku">Okuku</option>
                                 <option value="Osogbo-Agunbelewo">Osogbo-Agunbelewo</option>
                                 <option value="Osogbo-Dada Estate">Osogbo-Dada Estate</option>
                                 <option value="Osogbo-Igbona">Osogbo-Igbona</option>
                                 <option value="Osogbo-Kobo">Osogbo-Kobo</option>
                                 <option value="Osogbo-Ofatedo">Osogbo-Ofatedo</option>
                                 <option value="Osogbo-Ogo-Oluwa">Osogbo-Ogo-Oluwa</option>
                                 <option value="Osogbo-Oke-Baale">Osogbo-Oke-Baale</option>
                                 <option value="Osogbo-Oke-Fia">Osogbo-Oke-Fia</option>
                                 <option value="Osogbo-Orisunmibare">Osogbo-Orisunmibare</option>
                                 <option value="Osogbo-Ota-Efun">Osogbo-Ota-Efun</option>
                                 <option value="Osogbo-Powerline">Osogbo-Powerline</option>
                                 <option value="Osogbo-Ring Road">Osogbo-Ring Road</option>
                            </datalist>

                            <!-- Oyo -->
                            <input type="hidden" disabled id="oyo" name="town" placeholder="Select your City" class="form-control" list="myoyo">
                            <datalist id="myoyo">
                                <option value="Adeleye">Adeleye</option>
                                <option value="Afijio">Afijio</option>
                                <option value="Akinyele">Akinyele</option>
                                <option value="Alomoja">Alomoja</option>
                                <option value="Atiba">Atiba</option>
                                <option value="Atisbo">Atisbo</option>
                                <option value="Egbeda(Oyo)">Egbeda(Oyo)</option>
                                <option value="Eruwa">Eruwa</option>
                                <option value="Ibadan-Agodi">Ibadan-Agodi</option>
                                <option value="Ibadan-Ajibode">Ibadan-Ajibode</option>
                                <option value="Ibadan-Akobo">Ibadan-Akobo</option>
                                <option value="Ibadan-Alakia">Ibadan-Alakia</option>
                                <option value="Ibadan-Apata">Ibadan-Apata</option>
                                <option value="Ibadan-Bodija">Ibadan-Bodija</option>
                                <option value="Ibadan-Dugbe">Ibadan-Dugbe</option>
                                <option value="Ibadan-Elebu">Ibadan-Elebu</option>
                                <option value="Ibadan-Eleyele">Ibadan-Eleyele</option>
                                <option value="Ibadan-Felele">Ibadan-Felele</option>
                                <option value="Ibadan-Idi Ape-Ashi">Ibadan-Idi Ape-Ashi</option>
                                <option value="Ibadan-Jericho">Ibadan-Jericho</option>
                                <option value="Ibadan-Lalupon">Ibadan-Lalupon</option>
                                <option value="Ibadan-Leadcity">Ibadan-Leadcity</option>
                                <option value="Ibadan-Molete">Ibadan-Molete</option>
                                <option value="Ibadan-Monantan">Ibadan-Monantan</option>
                                <option value="Ibadan-Moniya">Ibadan-Moniya</option>
                                <option value="Ibadan-New Garage">Ibadan-New Garage</option>
                                <option value="Ibadan-North West">Ibadan-North West</option>
                                <option value="Ibadan-Odo-Ona(Elewe)">Ibadan-Odo-Ona(Elewe)</option>
                                <option value="Ibadan-Odo-Ona(Kekere)">Ibadan-Odo-Ona(Kekere)</option>
                                <option value="Ibadan-Ojoo">Ibadan-Ojoo</option>
                                <option value="Ibadan-Olodo">Ibadan-Olodo</option>
                                <option value="Ibadan-Olohunda">Ibadan-Olohunda</option>
                                <option value="Ibadan-Olorunsogo">Ibadan-Olorunsogo</option>
                                <option value="Ibadan-Oluyole">Ibadan-Oluyole</option>
                                <option value="Ibadan-Orita-Challenge">Ibadan-Orita-Challenge</option>
                                <option value="Ibadan-Ring Road">Ibadan-Ring Road</option>
                                <option value="Ibadan-Soka">Ibadan-Soka</option>
                                <option value="Ibadan-Tose">Ibadan-Tose</option>
                                <option value="Ibadan-UI">Ibadan-UI</option>
                                <option value="Ibarapa">Ibarapa</option>
                                <option value="Idi Iroko">Idi Iroko</option>
                                <option value="Ibarapa">Ido</option>
                                <option value="Igbo Oloyin">Igbo Oloyin</option>
                                <option value="Irepo">Irepo</option>
                                <option value="Isebo">Isebo</option>
                                <option value="Iseyin">Iseyin</option>
                                <option value="Itesiwaju">Itesiwaju</option>
                                <option value="Iwajowa">Iwajowa</option>
                                <option value="Iwo(Oyo)">Iwo(Oyo)</option>
                                <option value="Iwo Road-Wema Bank">Iwo Road-Wema Bank</option>
                                <option value="Iwo Road-Ibadan Expressway">Iwo Road-Ibadan Expressway</option>
                                <option value="Iwo Road-Olorunsogo">Iwo Road-Olorunsogo</option>
                                <option value="Iwo Road-Roundabout">Iwo Road-Roundabout</option>
                                <option value="Iwo Road-Academy Amuda Bus-stop">Iwo Road-Academy Amuda Bus-stop</option>
                                <option value="Kajola">Kajola</option>
                                <option value="Lagelu">Lagelu</option>
                                <option value="Lalupon">Lalupon</option>
                                <option value="Lanlate">Lanlate</option>
                                <option value="Moniya">Moniya</option>
                                <option value="Ogbomosho">Ogbomosho</option>
                                <option value="Ogo Oluwa">Ogo Oluwa</option>
                                <option value="Ologun-Eru">Ologun-Eru</option>
                                <option value="Olorunsogo">Olorunsogo</option>
                                <option value="Ona Ara">Ona Ara</option>
                                <option value="Orelope">Orelope</option>
                                <option value="Ori Ire">Ori Ire</option>
                                <option value="Oyo Town-Agodongbo">Oyo Town-Agodongbo</option>
                                <option value="Oyo Town-Akinmorin">Oyo Town-Akinmorin</option>
                                <option value="Oyo Town-Araromi">Oyo Town-Araromi</option>
                                <option value="Oyo Town-Fola Tyre">Oyo Town-Fola Tyre</option>
                                <option value="Oyo Town-Isokun">Oyo Town-Isokun</option>
                                <option value="Oyo Town-Jobele">Oyo Town-Jobele</option>
                                <option value="Oyo Town-Mabolaje">Oyo Town-Mabolaje</option>
                                <option value="Oyo Town-New Cele">Oyo Town-New Cele</option>
                                <option value="Oyo Town-Oroki">Oyo Town-Oroki</option>
                                <option value="Oyo Town-Saki">Oyo Town-Saki</option>
                                <option value="Sagbe">Sagbe</option>
                           </datalist>

                            <!-- Plateau -->
                            <input type="hidden" disabled id="jos" name="town" placeholder="Select your City" class="form-control" list="myjos">
                            <datalist id="myjos">
                                <option value="Ahmadu Bello Way">Ahmadu Bello Way</option>
                                <option value="Barikin Ladi">Barikin Ladi</option>
                                <option value="Bauchi Road">Bauchi Road</option>
                                <option value="Bukuru">Bukuru</option>
                                <option value="Dadin Kowa">Dadin Kowa</option>
                                <option value="Farin Gada">Farin Gada</option>
                                <option value="Haipang">Haipang</option>
                                <option value="Jos South">Jos South</option>
                                <option value="Katako">Katako</option>
                                <option value="Kuru">Kuru</option>
                                <option value="Lamingo">Lamingo</option>
                                <option value="Mangu">Mangu</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Old Airport Road">Old Airport Road</option>
                                <option value="Plateau-Nasarawa">Plateau-Nasarawa</option>
                                <option value="Plateau-Zana Road">Plateau-Zana Road</option>
                                <option value="Plateau-Murtala Mohammed Way">Plateau-Murtala Mohammed Way</option>
                                <option value="Rayfield">Rayfield</option>
                                <option value="Rayfield/Dadin Kowa">Rayfield/Dadin Kowa</option>
                                <option value="Rukuba Road">Rukuba Road</option>
                                <option value="Secretariat Junction">Secretariat Junction</option>
                                <option value="Tina Junction">Tina Junction</option>
                                <option value="VOM">VOM</option>
                                <option value="Zaria Road">Zaria Road</option>
                                <option value="Zarmaganda">Zarmaganda</option>
                                <option value="Zawan">Zawan</option>
                                <option value="Zawan/Bukuru">Zawan/Bukuru</option>
                            </datalist>

                            <!-- Rivers -->
                            <input type="hidden" disabled id="rivers" name="town" placeholder="Select your City" class="form-control" list="myrivers">
                            <datalist id="myrivers">
                                <option value="Abhonema">Abhonema</option>
                                <option value="Ahoada">Ahoada</option>
                                <option value="Airport Road-Port Harcourt">Airport Road-Port Harcourt</option>
                                <option value="Bonny Island">Bonny Island</option>
                                <option value="Bonny-Orosikiri">Bonny-Orosikiri</option>
                                <option value="Bonny-Abalambie">Bonny-Abalambie</option>
                                <option value="Bonny-Akiama">Bonny-Akiama</option>
                                <option value="Bonny-Asimini William Pepple">Bonny-Asimini William Pepple</option>
                                <option value="Bonny-Ayambo">Bonny-Ayambo</option>
                                <option value="Bonny-Bonny town">Bonny-Bonny town</option>
                                <option value="Bonny-Finima">Bonny-Finima</option>
                                <option value="Bonny-Iwuoma">Bonny-Iwuoma</option>
                                <option value="Bonny-Macauley">Bonny-Macauley</option>
                                <option value="Bonny-Navy">Bonny-Navy</option>
                                <option value="Bonny-New Jerusalem">Bonny-New Jerusalem</option>
                                <option value="Bonny-NLNG">Bonny-NLNG</option>
                                <option value="Bonny-NLNG RA">Bonny-NLNG RA</option>
                                <option value="Bonny-Park Community">Bonny-Park Community</option>
                                <option value="Bonny-Sand field">Bonny-Sand field</option>
                                <option value="Bonny-SDP">Bonny-SDP</option>
                                <option value="Elele">Elele</option>
                                <option value="Elelewon">Elelewon</option>
                                <option value="Eleme-Agbonchia">Eleme-Agbonchia</option>
                                <option value="Eleme-Akpajo">Eleme-Akpajo</option>
                                <option value="Eleme-Alesa">Eleme-Alesa</option>
                                <option value="Eleme-Aleto">Eleme-Aleto</option>
                                <option value="Eleme-Alode">Eleme-Alode</option>
                                <option value="Eleme-Ebubu">Eleme-Ebubu</option>
                                <option value="Eleme-Ekporo">Eleme-Ekporo</option>
                                <option value="Eleme-Eteo">Eleme-Eteo</option>
                                <option value="Eleme-Nchia">Eleme-Nchia</option>
                                <option value="Eleme-Odido">Eleme-Odido</option>
                                <option value="Eleme-Ogale">Eleme-Ogale</option>
                                <option value="Eleme-Onne">Eleme-Onne</option>
                                <option value="Emouha">Emouha</option>
                                <option value="Etche">Etche</option>
                                <option value="Isiokpo">Isiokpo</option>
                                <option value="Okrika">Okrika</option>
                                <option value="Okrika-Okrika Town(Kirike)">Okrika-Okrika Town(Kirike)</option>
                                <option value="Omoku">Omoku</option>
                                <option value="Oyigbo-Afam">Oyigbo-Afam</option>
                                <option value="Oyigbo-Egberu">Oyigbo-Egberu</option>
                                <option value="Oyigbo-Izuoma">Oyigbo-Izuoma</option>
                                <option value="Oyigbo-Komkom">Oyigbo-Komkom</option>
                                <option value="Oyigbo-Mirinwanyi">Oyigbo-Mirinwanyi</option>
                                <option value="Oyigbo-Ndoki">Oyigbo-Ndoki</option>
                                <option value="Oyigbo-Obeama">Oyigbo-Obeama</option>
                                <option value="Oyigbo-Umuagbai">Oyigbo-Umuagbai</option>
                                <option value="PHC-New GRA Phase 1,2,3,4">PHC-New GRA Phase 1,2,3,4</option>
                                <option value="PHC-River State University">PHC-River State University</option>
                                <option value="PHC-Woji Central Location">PHC-Woji Central Location</option>
                                <option value="PortHarcourt-Abonnema Town">PortHarcourt-Abonnema Town</option>
                                <option value="PortHarcourt-Abonnema Wharf">PortHarcourt-Abonnema Wharf</option>
                                <option value="PortHarcourt-Abuloma">PortHarcourt-Abuloma</option>
                                <option value="PortHarcourt-Ada George">PortHarcourt-Ada George</option>
                                <option value="PortHarcourt-Agip">PortHarcourt-Agip</option>
                                <option value="PortHarcourt-Airforce Base">PortHarcourt-Airforce Base</option>
                                <option value="PortHarcourt-Akpajo">PortHarcourt-Akpajo</option>
                                <option value="PortHarcourt-Alakahia-UPTH">PortHarcourt-Alakahia-UPTH</option>
                                <option value="PortHarcourt-Alakahia-UPTH">PortHarcourt-Alakahia-UPTH</option>
                                <option value="PortHarcourt-Aluu">PortHarcourt-Aluu</option>
                                <option value="PortHarcourt-Amadi Ama">PortHarcourt-Amadi Ama</option>
                                <option value="PortHarcourt-Aya- Ogologo">PortHarcourt-Aya- Ogologo</option>
                                <option value="PortHarcourt-Azubie">PortHarcourt-Azubie</option>
                                <option value="PortHarcourt-Bori Camp">PortHarcourt-Bori Camp</option>
                                <option value="PortHarcourt-Borokiri">PortHarcourt-Borokiri</option>
                                <option value="PortHarcourt-Choba">PortHarcourt-Choba</option>
                                <option value="PortHarcourt-Choba-UNIPORT">PortHarcourt-Choba-UNIPORT</option>
                                <option value="PortHarcourt-Churchill">PortHarcourt-Churchill</option>
                                <option value="PortHarcourt-D/Line">PortHarcourt-D/Line</option>
                                <option value="PortHarcourt-Darick Polo">PortHarcourt-Darick Polo</option>
                                <option value="PortHarcourt-Diobu">PortHarcourt-Diobu</option>
                                <option value="PortHarcourt-Eagle Island">PortHarcourt-Eagle Island</option>
                                <option value="PortHarcourt-Egbelu">PortHarcourt-Egbelu</option>
                                <option value="PortHarcourt-Elekahia">PortHarcourt-Elekahia</option>
                                <option value="PortHarcourt-Elelewon">PortHarcourt-Elelewon</option>
                                <option value="PortHarcourt-Elibolo">PortHarcourt-Elibolo</option>
                                <option value="PortHarcourt-Eligbam">PortHarcourt-Eligbam</option>
                                <option value="PortHarcourt-Elimgbu">PortHarcourt-Elimgbu</option>
                                <option value="PortHarcourt-Elinparawon">PortHarcourt-Elinparawon</option>
                                <option value="PortHarcourt-Eliohani">PortHarcourt-Eliohani</option>
                                <option value="PortHarcourt-Eliozu">PortHarcourt-Eliozu</option>
                                <option value="PortHarcourt-Eneka">PortHarcourt-Eneka</option>
                                <option value="PortHarcourt-Igwuruta">PortHarcourt-Igwuruta</option>
                                <option value="PortHarcourt-Intels KM 16">PortHarcourt-Intels KM 16</option>
                                <option value="PortHarcourt-Mgbuoba">PortHarcourt-Mgbuoba</option>
                                <option value="PortHarcourt-Mile 1">PortHarcourt-Mile 1</option>
                                <option value="PortHarcourt-Mile 2">PortHarcourt-Mile 2</option>
                                <option value="PortHarcourt-Mile 3">PortHarcourt-Mile 3</option>
                                <option value="PortHarcourt-Mile 4">PortHarcourt-Mile 4</option>
                                <option value="PortHarcourt-Mile 5">PortHarcourt-Mile 5</option>
                                <option value="PortHarcourt-Mugbuosimini">PortHarcourt-Mugbuosimini</option>
                                <option value="PortHarcourt-New GRA-Tombia">PortHarcourt-New GRA-Tombia</option>
                                <option value="PortHarcourt-Nkogu">PortHarcourt-Nkogu</option>
                                <option value="PortHarcourt-Ogbatai">PortHarcourt-Ogbatai</option>
                                <option value="PortHarcourt-Ogbogoro">PortHarcourt-Ogbogoro</option>
                                <option value="PortHarcourt-Ogbunabali">PortHarcourt-Ogbunabali</option>
                                <option value="PortHarcourt-Oginigba">PortHarcourt-Oginigba</option>
                                <option value="PortHarcourt-Okporo Road">PortHarcourt-Okporo Road</option>
                                <option value="PortHarcourt-Okuru">PortHarcourt-Okuru</option>
                                <option value="PortHarcourt-Old GRA">PortHarcourt-Old GRA</option>
                                <option value="PortHarcourt-Orazi">PortHarcourt-Orazi</option>
                                <option value="PortHarcourt-Ozuboko">PortHarcourt-Ozuboko</option>
                                <option value="PortHarcourt-Peter Odili Road">PortHarcourt-Peter Odili Road</option>
                                <option value="PortHarcourt-Peter Reclaimation">PortHarcourt-Peter Reclaimation</option>
                                <option value="PortHarcourt-Rukpokwu">PortHarcourt-Rukpokwu</option>
                                <option value="PortHarcourt-Rumeme">PortHarcourt-Rumeme</option>
                                <option value="PortHarcourt-Rumuaghaolu">PortHarcourt-Rumuaghaolu</option>
                                <option value="PortHarcourt-Rumuakpakolosi">PortHarcourt-Rumuakpakolosi</option>
                                <option value="PortHarcourt-Rumuevolu">PortHarcourt-Rumuevolu</option>
                                <option value="PortHarcourt-Rumuibekwe">PortHarcourt-Rumuibekwe</option>
                                <option value="PortHarcourt-Rumuigbo">PortHarcourt-Rumuigbo</option>
                                <option value="PortHarcourt-Rumukalagbor">PortHarcourt-Rumukalagbor</option>
                                <option value="PortHarcourt-Rumukrushi">PortHarcourt-Rumukrushi</option>
                                <option value="PortHarcourt-Rumumasi">PortHarcourt-Rumumasi</option>
                                <option value="PortHarcourt-Rumuosumaya">PortHarcourt-Rumuosumaya</option>
                                <option value="PortHarcourt-Rumuogba">PortHarcourt-Rumuogba</option>
                                <option value="PortHarcourt-Rumuoke">PortHarcourt-Rumuoke</option>
                                <option value="PortHarcourt-Rumuokoro">PortHarcourt-Rumuokoro</option>
                                <option value="PortHarcourt-Rumuokwuta">PortHarcourt-Rumuokwuta</option>
                                <option value="PortHarcourt-Rumuola">PortHarcourt-Rumuola</option>
                                <option value="PortHarcourt-Rumuolumeni">PortHarcourt-Rumuolumeni</option>
                                <option value="PortHarcourt-Rumuorosi">PortHarcourt-Rumuorosi</option>
                                <option value="PortHarcourt-Rumuowah">PortHarcourt-Rumuowah</option>
                                <option value="PortHarcourt-Stadium Road">PortHarcourt-Stadium Road</option>
                                <option value="PortHarcourt-Town">PortHarcourt-Town</option>
                                <option value="PortHarcourt-Trans Amadi">PortHarcourt-Trans Amadi</option>
                                <option value="PortHarcourt-Woji Illom">PortHarcourt-Woji Illom</option>
                                <option value="PortHarcourt-Woji Road">PortHarcourt-Woji Road</option>
                                <option value="PortHarcourt-Woji YKC">PortHarcourt-Woji YKC</option>
                                <option value="PortHarcourt-Woji-Elijiji">PortHarcourt-Woji-Elijiji</option>
                                <option value="Rumuaghaolu">Rumuaghaolu</option>
                                <option value="Rumudouomaya">Rumudouomaya</option>
                            </datalist>

                            <!-- Sokoto -->
                            <input type="hidden" disabled id="sokoto" name="town" placeholder="Select your City" class="form-control" list="mysokoto">
                            <datalist id="mysokoto">
                                <option value="Sokoto Town">Sokoto Town</option>
                                <option value="Sokoto Town-Central Locations">Sokoto Town-Central Locations</option>
                                <option value="Sokoto Central Location">Sokoto Central Location</option>
                                <option value="Sokoto/Gusau">Sokoto/Gusau</option>
                            </datalist>

                            <!-- Yobe -->
                            <input type="hidden" disabled id="yobe" name="town" placeholder="Select your City" class="form-control" list="myyobe">
                            <datalist id="myyobe">
                                <option value="Bade">Bade</option>
                                <option value="Fika">Fika</option>
                                <option value="Gashua">Gashua</option>
                                <option value="Geidam">Geidam</option>
                                <option value="Nguru">Nguru</option>
                            </datalist>

                             <!-- Abuja -->
                             <input type="hidden" disabled id="abuja" name="town" placeholder="Select your City" class="form-control" list="myabuja">
                             <datalist id="myabuja">
                                 <option value="Abaji">Abaji</option>
                                 <option value="Abuja Airport Road- Abuja Technology Village">Abuja Airport Road- Abuja Technology Village</option>
                                 <option value="Abuja Airport Road- Chika">Abuja Airport Road- Chika</option>
                                 <option value="Abuja Airport Road- Gosa/Sabon Lugbe">Abuja Airport Road- Gosa/Sabon Lugbe</option>
                                 <option value="Abuja Airport Road- Kuchingoro">Abuja Airport Road- Kuchingoro</option>
                                 <option value="Abuja Airport Road- Kyami/Centenary City">Abuja Airport Road- Kyami/Centenary City</option>
                                 <option value="Abuja Airport Road- Nnamdi Azikiwe Airport">Abuja Airport Road- Nnamdi Azikiwe Airport</option>
                                 <option value="Abuja Airport Road- Piwoyi">Abuja Airport Road- Piwoyi</option>
                                 <option value="Abuja Airport Road- Pyakasa">Abuja Airport Road- Pyakasa</option>
                                 <option value="Abuja Airport Road- Riverpark/Trademore">Abuja Airport Road- Riverpark/Trademore</option>
                                 <option value="Abuja Airport Road- Sauka/Immigration HQ">Abuja Airport Road- Sauka/Immigration HQ</option>
                                 <option value="Abuja- Apo Central">Abuja- Apo Central</option>
                                 <option value="Abuja- Apo Legislative Zone A">Abuja- Apo Legislative Zone A</option>
                                 <option value="Abuja- Apo Legislative Zone B">Abuja- Apo Legislative Zone B</option>
                                 <option value="Abuja- Apo Legislative Zone C">Abuja- Apo Legislative Zone C</option>
                                 <option value="Abuja- Apo Legislative Zone D">Abuja- Apo Legislative Zone D</option>
                                 <option value="Abuja- Apo Legislative Zone E">Abuja- Apo Legislative Zone E</option>
                                 <option value="Abuja- Apo Mechanical Village">Abuja- Apo Mechanical Village</option>
                                 <option value="Abuja- Apo Resettlement Zone A">Abuja- Apo Resettlement Zone A</option>
                                 <option value="Abuja- Apo Resettlement Zone B">Abuja- Apo Resettlement Zone B</option>
                                 <option value="Abuja- Apo Resettlement Zone C">Abuja- Apo Resettlement Zone C</option>
                                 <option value="Abuja- Apo Resettlement Zone D">Abuja- Apo Resettlement Zone D</option>
                                 <option value="Abuja- Apo Resettlement Zone E">Abuja- Apo Resettlement Zone E</option>
                                 <option value="Abuja- Durumi">Abuja- Durumi</option>
                                 <option value="Abuja- Durumi Phase 2">Abuja- Durumi Phase 2</option>
                                 <option value="Abuja- Garki Area 1">Abuja- Garki Area 1</option>
                                 <option value="Abuja- Garki Area 10">Abuja- Garki Area 10</option>
                                 <option value="Abuja- Garki Area 11">Abuja- Garki Area 11</option>
                                 <option value="Abuja- Garki Area 2">Abuja- Garki Area 2</option>
                                 <option value="Abuja- Garki Area 3">Abuja- Garki Area 3</option>
                                 <option value="Abuja- Garki Area 7">Abuja- Garki Area 7</option>
                                 <option value="Abuja- Garki Area 8">Abuja- Garki Area 8</option>
                                 <option value="Abuja- Gwarinpa 1st Avenue">Abuja- Gwarinpa 1st Avenue</option>
                                 <option value="Abuja- Gwarinpa 2nd Avenue">Abuja- Gwarinpa 2nd Avenue</option>
                                 <option value="Abuja- Gwarinpa 3rd Avenue">Abuja- Gwarinpa 3rd Avenue</option>
                                 <option value="Abuja- Gwarinpa 4th Avenue">Abuja- Gwarinpa 4th Avenue</option>
                                 <option value="Abuja- Gwarinpa 5th Avenue">Abuja- Gwarinpa 5th Avenue</option>
                                 <option value="Abuja- Gwarinpa 6th Avenue">Abuja- Gwarinpa 6th Avenue</option>
                                 <option value="Abuja- Gwarinpa 7th Avenue">Abuja- Gwarinpa 7th Avenue</option>
                                 <option value="Abuja- Gwarinpa 7th Extension">Abuja- Gwarinpa Extension</option>
                                 <option value="Abuja- Katame Extension">Abuja- Katame Extension</option>
                                 <option value="Abuja- Katame Main">Abuja- Katame Main</option>
                                 <option value="Abuja- Kubwa 2/1 Phase 1">Abuja- Kubwa 2/1 Phase 1</option>
                                 <option value="Abuja- Kubwa 2/2 Phase 2">Abuja- Kubwa 2/2 Phase 2</option>
                                 <option value="Abuja- Kubwa Arab Road">Abuja- Kubwa Arab Road</option>
                                 <option value="Abuja- Kubwa Byazhin">Abuja- Kubwa Byazhin</option>
                                 <option value="Abuja- Kubwa Extension 3">Abuja- Kubwa Extension 3</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Kubwa Gbazango</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Kubwa Phase 3</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Kubwa PW</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Kubwa-FCDA/FHA</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Life Camp Extension</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Mabushi</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Maitama Aleiro</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Maitama Aso Drive</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Maitama Central</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Maitama Extension</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Asokoro</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Bwari</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- CBD</option>
                                 <option value="Abuja- Kubwa Gbazango">Abuja- Dakibiyu</option>
                                 <option value="Abuja- Dawaki">Abuja- Dawaki</option>
                                 <option value="Abuja- Dei Dei">Abuja- Dei Dei</option>
                                 <option value="Abuja- Dutse">Abuja- Dutse</option>
                                 <option value="Abuja- EFAB City Life Camp">Abuja- EFAB City Life Camp</option>
                                 <option value="Abuja- EFAB/APO">Abuja- EFAB/APO</option>
                                 <option value="Abuja- EFAB/IDU">Abuja- EFAB/IDU</option>
                                 <option value="Abuja- Galadimawa">Abuja- Galadimawa</option>
                                 <option value="Abuja- Games Village">Abuja- Games Village</option>
                                 <option value="Abuja- Garki 2">Abuja- Garki 2</option>
                                 <option value="Abuja- Gudu">Abuja- Gudu</option>
                                 <option value="Abuja- Guzape">Abuja- Guzape</option>
                                 <option value="Abuja- Gwagwalada">Abuja- Gwagwalada</option>
                                 <option value="Abuja- Jabi">Abuja- Jabi</option>
                                 <option value="Abuja- Jahi">Abuja- Jahi</option>
                                 <option value="Abuja- Kabusa">Abuja- Kabusa</option>
                                 <option value="Abuja- Kado">Abuja- Kado</option>
                                 <option value="Abuja- Karu">Abuja- Karu</option>
                                 <option value="Abuja- Kaura District">Abuja- Kaura District</option>
                                 <option value="Abuja- Kuje">Abuja- Kuje</option>
                                 <option value="Abuja- Life Camp">Abuja- Life Camp</option>
                                 <option value="Abuja- Lokogoma">Abuja- Lokogoma</option>
                                 <option value="Abuja- Lugbe Across Zone 1-9">Abuja- Lugbe Across Zone 1-9</option>
                                 <option value="Abuja- Lugbe Kapwa">Abuja- Lugbe Kapwa</option>
                                 <option value="Abuja- Lugbe MrBriggs">Abuja- Lugbe MrBriggs</option>
                                 <option value="Abuja- Lugbe New Site">Abuja- Lugbe New Site</option>
                                 <option value="Abuja- Lugbe Peace Village">Abuja- Lugbe Peace Village</option>
                                 <option value="Abuja- Lugbe Police Sign Post">Abuja- Lugbe Police Sign Post</option>
                                 <option value="Abuja- Lugbe Premier Academy">Abuja- Lugbe Premier Academy</option>
                                 <option value="Abuja- Lugbe Sector F">Abuja- Lugbe Sector F</option>
                                 <option value="Abuja- Lugbe Skye Bank">Abuja- Lugbe Skye Bank</option>
                                 <option value="Abuja- Lugbe Total">Abuja- Lugbe Total</option>
                                 <option value="Abuja- Lugbe Tudun Wada">Abuja- Lugbe Tudun Wada</option>
                                 <option value="Abuja- Lugbe Mararaba">Abuja- Mararaba</option>
                                 <option value="Abuja- Nyanya">Abuja- Nyanya</option>
                                 <option value="Abuja- Prince and Princess">Abuja- Prince and Princess</option>
                                 <option value="Abuja- Secretariat">Abuja- Secretariat</option>
                                 <option value="Abuja- Suncity">Abuja- Suncity</option>
                                 <option value="Abuja- Sunny Valle">Abuja- Sunny Valle</option>
                                 <option value="Abuja- Utako">Abuja- Utako</option>
                                 <option value="Abuja- Wuse Zone 1">Abuja- Wuse Zone 1</option>
                                 <option value="Abuja- Wuse Zone 2">Abuja- Wuse Zone 2</option>
                                 <option value="Abuja- Wuse Zone 3">Abuja- Wuse Zone 3</option>
                                 <option value="Abuja- Wuse Zone 4">Abuja- Wuse Zone 4</option>
                                 <option value="Abuja- Wuse Zone 5">Abuja- Wuse Zone 5</option>
                                 <option value="Abuja- Wuse Zone 6">Abuja- Wuse Zone 6</option>
                                 <option value="Abuja- Wuse Zone 7">Abuja- Wuse Zone 7</option>
                                 <option value="Abuja- Wuse 11">Abuja- Wuse 11</option>
                                 <option value="Abuja- Wuye">Abuja- Wuye</option>
                                 <option value="Airport Road Iddo">Airport Road Iddo</option>
                                 <option value="Airport Road Kuchingoro/Chika/Pyakasa">Airport Road Kuchingoro/Chika/Pyakasa</option>
                                 <option value="Airport Road Sauka/Trademore/Airport">Airport Road Sauka/Trademore/Airport</option>
                                 <option value="Dutse">Dutse</option>
                                 <option value="Gidan Mangoro">Gidan Mangoro</option>
                                 <option value="Gwagwalada">Gwagwalada</option>
                                 <option value="Idu">Idu</option>
                                 <option value="Jikowyi">Jikowyi</option>
                                 <option value="Karimo">Karimo</option>
                                 <option value="Karu">Karu</option>
                                 <option value="Kubwa Central">Kubwa Central</option>
                                 <option value="Kwali">Kwali</option>
                                 <option value="Lugbe">Lugbe</option>
                                 <option value="Ministers Hill">Ministers Hill</option>
                                 <option value="Mpape">Mpape</option>
                                 <option value="Nicon Junction">Nicon Junction</option>
                                 <option value="Tungan Maje">Tungan Maje</option>
                                 <option value="Zuba">Zuba</option>
                             </datalist>
                            <input type="text" disabled id="mycity" class="form-control" placeholder="Select City">
                        </div>
                    </div>
                    <div class="form-group mt-3 modalbut">
                        <button type="submit" name="submit" title="submit" class="btn">Save Changes</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>