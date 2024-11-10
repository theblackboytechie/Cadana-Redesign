$(document).ready(function() {

    address_select_onload();

    var africanCountries = [
        "Algeria", "Angola", "Benin", "Botswana", "Burkina Faso", "Burundi", "Cameroon", "Cape Verde", 
        "Central African Republic", "Chad", "Comoros", "Côte d'Ivoire", "Democratic Republic of the Congo",
        "Djibouti", "Egypt", "Equatorial Guinea", "Eritrea", "Eswatini", "Ethiopia", "Gabon", "Gambia", 
        "Ghana", "Guinea", "Guinea-Bissau", "Kenya", "Lesotho", "Liberia", "Libya", "Madagascar", "Malawi",
        "Mali", "Mauritania", "Mauritius", "Morocco", "Mozambique", "Namibia", "Niger", "Nigeria", "Republic of the Congo", 
        "Rwanda", "São Tomé and Principe", "Senegal", "Seychelles", "Sierra Leone", "Somalia",
        "South Africa", "South Sudan", "Sudan", "Tanzania", "Togo", "Tunisia", "Uganda", "Zambia", "Zimbabwe",

        "Canada", "United States", "Mexico", "Guatemala", "Belize", "Honduras", "El Salvador", "Nicaragua", 
        "Costa Rica", "Panama", "Cuba", "Haiti", "Dominican Republic", "Jamaica", "Bahamas", "Barbados", "Saint Lucia", 
        "Saint Vincent and the Grenadines", "Grenada", "Trinidad and Tobago", "Antigua and Barbuda", 
        "Saint Kitts and Nevis"
    ];

    var nigerianStates = [
        "Abia", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", "Bayelsa", "Benue",
        "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu",
        "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi",
        "Kwara", "Lagos", "Nasarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo",
        "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara"
    ];

    var ghanaStates = [
        "Ahafo Region", "Ahafo Region", "Ashanti Region", "Bono East Region", "Bono Region",
        "Central Region", "Eastern Region", "Greater Accra Region", "North East Region", "Northern Region", 
        "Oti Region", "Savannah Region", "Upper East Region", "Upper West Region", 
        "Volta Region",  "Western North Region", "Western Region"
    ];

    var congoStatesDR = [
        "Bouenza", "Brazzaville", "Cuvette", "Cuvette-Ouest", "Kouilou", "Lékoumou",
        "Likouala", "Niari", "Plateaux", "Pointe-Noire", "Pool", "Sangha"
    ];

    var rwandaProvinces = [
        "Northern Province", "Eastern Province", "Southern Province", "Western Province", "Kigali Province"
    ];

    var saoTomeDistricts = [
        "Água Grande", "Cantagalo", "Caué", "Lembá", "Lobata", "Mé-Zóchi", "Pagué"
    ];

    var senegalRegions = [
        "Dakar Region", "Diourbel Region", "Fatick Region", "Kaffrine Region", "Kaolack Region", "Kédougou Region",
        "Kolda Region", "Louga Region", "Matam Region", "Saint-Louis Region", "Sédhiou Region", "Tambacounda Region",
        "Thiès Region", "Ziguinchor Region"
    ];

    var seychellesDistricts = [
        "Anse aux Pins", "Anse Boileau", "Anse Etoile", "Anse Louis", "Anse Royale", "Baie Lazare", "Baie Sainte Anne",
        "Beau Vallon", "Bel Ombre", "Cascade", "Glacis", "Grand Anse", "Grand Anse Praslin", "La Digue",
        "La Riviere Anglaise", "Les Mamelles", "Mont Buxton", "Mont Fleuri", "Plaisance", "Pointe La Rue",
        "Port Glaud", "Roche Caiman", "Saint Louis", "Takamaka", "Victoria"
    ];

    var sierraLeoneProvinces = [
        "Bombali District", "Kambia District", "Karene District", "Koinadugu District", "Kono District", "Falaba District",
        "Kenema District", "Kailahun District", "Bo District", "Bonthe District", "Pujehun District", "Western Area"
    ];

    var somaliaRegions = [
        "Awdal Region", "Bakool Region", "Banaadir Region", "Bari Region", "Bay Region", "Galguduud Region", "Gedo Region",
        "Hiran Region", "Jubaland Region", "Lower Juba Region", "Middle Juba Region", "Middle Shebelle Region", "Mudug Region",
        "Nugal Region", "Sanaag Region", "Shabelle Region", "Sool Region", "Togdheer Region"
    ];
    
    var southAfricaProvinces = [
        "Eastern Cape", "Free State", "Gauteng", "KwaZulu-Natal", "Limpopo", "Mpumalanga", "North West",
        "Northern Cape", "Western Cape"
    ];

    var southSudanStates = [
        "Central Equatoria", "Eastern Equatoria", "Jonglei", "Lakes", "Northern Bahr el Ghazal", "Unity",
        "Upper Nile", "Warrap", "Western Bahr el Ghazal", "Western Equatoria"
    ];

    var sudanStates = [
        "Al Jazirah", "Al Qadarif", "Blue Nile", "Central Darfur", "East Darfur", "Gedaref", "Gezira",
        "Kassala", "Khartoum", "North Darfur", "North Kordofan", "Northern", "Red Sea", "River Nile",
        "Sennar", "South Darfur", "South Kordofan", "West Darfur"
    ];

    var tanzaniaRegions = [
        "Arusha", "Dar es Salaam", "Dodoma", "Geita", "Iringa", "Kagera", "Katavi", "Kigoma", "Kilimanjaro",
        "Lindi", "Manyara", "Mara", "Mbeya", "Morogoro", "Mtwara", "Mwanza", "Pemba North", "Pemba South",
        "Rukwa", "Ruvuma", "Shinyanga", "Singida", "Tabora", "Tanga", "Zanzibar Central/South", "Zanzibar North",
        "Zanzibar Urban/West"
    ];

    var togoRegions = [
        "Centrale", "Kara", "Maritime", "Plateaux", "Savanes"
    ];

    var tunisianStates = [
        "Ariana", "Beja", "Ben Arous", "Bizerte", "Gabès", "Gafsa", "Jendouba", "Kairouan", "Kasserine",
        "Kebili", "Kef", "Mahdia", "Manouba", "Mednine", "Monastir", "Nabeul", "Sfax",
        "Sidi Bouzid", "Siliana", "Sousse", "Tataouine", "Tozeur", "Tunis", "Zaghouan"
    ];

    var ugandanRegions = [
        "Central Region-Uganda", "Eastern Region-Uganda", "Northern Region-Uganda", "Western Region-Uganda"
    ];

    var zambianProvinces = [
        "Central Province-Zambia", "Copperbelt Province-Zambia", "Eastern Province-Zambia", "Luapula Province-Zambia", "Lusaka Province-Zambia",
        "Muchinga Province-Zambia", "Northern Province-Zambia", "North-Western Province-Zambia", "Southern Province-Zambia", "Western Province-Zambia"
    ];
    
    var zimbabweanProvinces = [
        "Harare", "Bulawayo", "Manicaland", "Mashonaland Central", "Mashonaland East", "Mashonaland West", 
        "Masvingo", "Matabeleland North", "Matabeleland South", "Midlands"
    ];
    
    var nigerianRegions = [
        "Agadez", "Diffa", "Dosso", "Maradi", "Niamey", "Tahoua", "Tillabéri", "Zinder"
    ];

    var namibianRegions = ["Erongo", "Hardap", "Hochfeld", "Karas", "Kavango East", "Kavango West", "Khomas",
        "Kunene", "Ohangwena", "Omaheke", "Omusati", "Oshana", "Oshikoto", "Otjozondjupa", "Zambezi"
    ];

    var mozambicanProvinces = [
        "Cabo Delgado", "Gaza-Mozambique", "Inhambane", "Manica", "Maputo", "Maputo City", "Nampula", "Niassa",
        "Sofala", "Tete", "Zambézia"
    ];
    
    var moroccanRegions = [
        "Tanger-Tétouan-Al Hoceïma", "L'Oriental", "Fès-Meknès", "Rabat-Salé-Kénitra", "Béni Mellal-Khénifra", 
        "Casablanca-Settat", "Marrakech-Safi", "Souss-Massa", "Guelmim-Oued Noun", "Draâ-Tafilalet"
    ];

    var mauritianDistricts = [
        "Port Louis", "Curepipe", "Quatre Bornes", "Vacoas-Phoenix", "Beau Bassin-Rose Hill", "Plaines Wilhems", 
        "Rivière du Rempart", "Rivière Noire", "Savanne", "Flacq", "Moka"
    ];

    var mauritanianRegions = [
        "Adrar", "Assaba", "Brakna", "Gorgol", "Guidimaka", "Hodh Ech Chargui", "Hodh El Gharbi", 
        "Inchiri", "Tagant", "Tiris Zemmour", "Trarza", "Nouakchott", "Nouadhibou"
    ];

    var maliRegions = [
        "Bamako", "Gao", "Kidal", "Kayes", "Koulikoro", "Mopti", "Ségou", "Sikasso",
        "Tombouctou", "Taoudénit", "Mopti"
    ];
    
    var malawianRegions = [
        "Central Region-Malawi", "Northern Region-Malawi", "Southern Region-Malawi"
    ];

    var madagascanRegions = [
        "Antananarivo", "Antsiranana", "Fianarantsoa", "Mahajanga", "Toamasina", "Toliara", "Vakinankaratra", 
        "Analamanga", "Atsimo-Andrefana", "Atsinanana", "Bongolava", "Haute Matsiatra", "Ihorombe", "Itasy", "Melaky", 
        "Sava", "Sofia", "Atsimo-Atsinanana"
    ];

    var libyanRegions = [
        "Ajdabiya", "Al Aziziyah", "Al Bayda", "Al Kufrah", "Al Marj", "Al Jufrah", "Al Wahat", 
        "Benghazi", "Derna", "Gharyan", "Jabal al Akhdar", "Jufra", "Misrata", "Nalut", "Sebha", 
        "Sirt", "Tajura", "Tripoli", "Tubruq", "Wadi al Shatii"
    ];

    var liberianCounties = [
        "Bong County", "Bomi County", "Bassa County", "Grand Bassa County", "Grand Cape Mount County", "Grand Gedeh County", 
        "Grand Kru County", "Lofa County", "Margibi County", "Maryland County", "Montserrado County", "Nimba County", 
        "River Cess County", "River Gee County", "Sinoe County"
    ];

    var lesothoDistricts = [
        "Berea", "Butha-Buthe", "Leribe", "Mafeteng", "Maseru", "Mohale's Hoek", "Mokhotlong", "Qacha's Nek", "Quthing", "Thaba-Tseka"
    ];
    
    var kenyanCounties = [
        "Bomet", "Bungoma", "Busia", "Elgeyo-Marakwet", "Embu", "Garissa", "Homa Bay", "Isiolo", 
        "Kajiado", "Kakamega", "Kericho", "Kerugoya", "Kisii", "Kisumu", "Kitui", "Koru", "Laikipia", 
        "Lamu", "Machakos", "Makueni", "Mandera", "Marsabit", "Meru", "Migori", "Mombasa", "Murang'a", 
        "Nairobi", "Nakuru", "Nandi", "Narok", "Nyamira", "Nyandarua", "Nyeri", "Samburu", "Siaya", 
        "Taita-Taveta", "Tana River", "Tharaka Nithi", "Trans-Nzoia", "Uasin Gishu", "Vihiga", "Wajir", 
        "West Pokot", "Kitui", "Kajiado", "Tana River", "Kericho"
    ];

    var guineaBissauRegions = [
        "Bafatá Region", "Bissau Region", "Bolama Region", "Oio Region", "Tombali Region"
    ];

    var guineaRegions = [
        "Beyla Region", "Boke Region", "Conakry Region", "Faranah Region", "Kankan Region", 
        "Kerouane Region", "Labe Region", "Mali Region", "Nzerekore Region"
    ];
    
    var algerianStates = [
        "Adrar", "Chlef", "Laghouat", "Oum El Bouaghi", "Batna", "Béjaïa", "Biskra", "Béchar", 
        "Blida", "Bouira", "Tamanrasset", "Tébessa", "Tlemcen", "Tiaret", "Tizi Ouzou", 
        "Algiers", "Djelfa", "Jijel", "Sétif", "Saïda", "Skikda", "Sidi Bel Abbès", "Annaba", 
        "Guelma", "Constantine", "Médéa", "Mostaganem", "M'sila", "Mascara", "Ouargla", "Oran", 
        "El Bayadh", "El Oued", "El Tarf", "Tindouf", "Tissemsilt", "El Madania", "Tiaret", 
        "Tizi Ouzou", "Sidi Bel Abbès"
    ];
    
    var angolanStates = [
        "Bengo", "Benguela", "Bié", "Cabinda", "Cuando Cubango", "Cuanza Norte", 
        "Cuanza Sul", "Cunene", "Huambo", "Huíla", "Luanda", "Lunda Norte", "Lunda Sul", 
        "Malanje", "Moxico", "Namibe", "Uíge", "Zaire"
    ];

    var beninRepublicStates = [
        "Alibori", "Atakora", "Atlantique", "Borgou", "Collines", "Donga", "Kouffo", 
        "Kouandé", "Littoral", "Mono", "Ouémé", "Plateau", "Zou"
    ];

    var botswanaStates = [
        "Central-Botswana", "Chobe", "Francistown", "Gaborone", "Ghanzi", "Kgalagadi", "Kgatleng", 
        "Kweneng", "North East-Botswana", "North West-Botswana", "Southern-Botswana", "South East-Botswana"
    ];
    
    var burkinafasoStates = [
        "Boucle du Mouhoun", "Cascades", "Centre", "Centre-Est", "Centre-Nord", "Centre-Ouest", 
        "Centre-Sud", "Est", "Hauts-Bassins", "Nord", "Sahel", "Sud-Ouest"
    ];

    var burundiStates = [
        "Bubanza", "Bujumbura Mairie", "Bujumbura Rural", "Bururi", "Cankuzo", "Cibitoke", 
        "Gitega", "Karuzi", "Kayanza", "Kirundo", "Makamba", "Muramvya", "Muyinga", "Mwaro", 
        "Ngozi", "Rumonge", "Rutana", "Ruyigi"
    ];

    var cameroonStates = [
        "Adamawa-Cameroon", "Centre-Cameroon", "East-Cameroon", "Far North-Cameroon", "Littoral", 
        "North-Cameroon", "Northwest-Cameroon", "South-Cameroon", "Southwest-Cameroon", "West-Cameroon"
    ];
      
    var capeVerdeStates = [
        "Santo Antão", "São Vicente", "São Nicolau", "Sal", "Boa Vista", "Maio", "Santiago", "Fogo", "Brava"
    ];
      
    var carPrefectures = [
        "Bamingui-Bangoran", "Bangui", "Basse-Kotto", "Haut-Mbomou", "Haute-Kotto", "Kémo", "Lobaye", 
        "Mambéré-Kadéï", "Mbomou", "Nana-Grébizi", "Nana-Mambéré", "Ombella-M'Poko", "Ouaka", "Ouham", 
        "Ouham-Pendé", "Sangha-Mbaéré", "Vakaga"
    ];

    var chadStates = [
        "Batha", "Borkou", "Chari-Baguirmi", "Guéra", "Hadjer-Lamis", "Kanem", "Lac", 
        "Logone Occidental", "Logone Oriental", "Mandoul", "Mayo-Kebbi Est", "Mayo-Kebbi Ouest", 
        "Moyen-Chari", "Ouaddaï", "Salamat", "Sila", "Tandjilé", "Tibesti", "Wadi Fira", "N'Djamena"
    ];
      
    var comorosStates = [
        "Grande Comore", "Mohéli", "Anjouan", "Maroni"
    ];

    var coteDIvoireStates = [
        "Abidjan", "Bas-Sassandra", "Denguelé", "Gôh", "Lacs", "Lagunes", "Marahoué", "Montagnes", 
        "Savanes", "Vallee du Bandama", "Woroba", "Zanzan"
    ];      

    var drcProvinces = [
        "Bandundu", "Bas-Uele", "Haut-Lomami", "Haut-Uele", "Ituri", "Kasaï", "Kasaï-Central", 
        "Kasaï-Oriental", "Katanga", "Kinshasa", "Kivu du Nord", "Kivu du Sud", "Maniema", "Maï-Ndombe", 
        "Sankuru", "Tshopo", "Tshuapa", "Tanganyika"
    ];

    var djiboutiStates = [
        "Ali Sabieh", "Arta", "Dikhil", "Djibouti", "Obock", "Tadjourah"
    ];

    var egyptStates = [
        "Cairo", "Alexandria", "Aswan", "Asyut", "Beheira", "Beni Suef", "Dakahlia", "Damietta", "Faiyum", 
        "Gharbia", "Giza", "Ismailia", "Kafr El Sheikh", "Minya", "Monufia", "New Valley", 
        "North Sinai", "Port Said", "Qalyubia", "Qena", "Red Sea", "Sharqia", "Sohag", "South Sinai", "Suez"
    ];
      
    var equatorialGuineaStates = [
        "Annobón", "Bioko Norte", "Bioko Sur", "Centro Sur", "Kie-Ntem", "Litoral", "Wele-Nzas"
    ];
      
    var eritreaStates = [
        "Anseba", "Central", "Debub", "Gash-Barka", "Maekel", "Northern Red Sea"
    ];
      
    var eswatiniStates = [
        "Hhohho", "Lubombo", "Manzini", "Shiselweni"
    ];
      
    var ethiopiaStates = [
        "Addis Ababa", "Afar", "Amhara", "Benishangul-Gumuz", "Dire Dawa", "Gambela", "Harari", 
        "Oromia", "Sidama", "Somali", "Southern Nations, Nationalities, and Peoples' Region (SNNPR)",
        "South West Ethiopia Peoples' Region",
        "Tigray"
    ];

    var gabonStates = [
        "Estuaire", "Haut-Ogooué", "Moyen-Ogooué", "Ngounié", "Ogooué-Ivindo", "Ogooué-Lolo", "Ogooué-Maritime", "Woleu-Ntem"
    ];
      
    var gambiaStates = [
        "Banjul", "Basse", "Brikama", "Janjanbureh", "Kerewan", "Mansakonko", "Serekunda"
    ];

    var canadaStates = [
        "Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", 
        "Northwest Territories", "Nova Scotia", "Nunavut", "Ontario", "Prince Edward Island", "Quebec", 
        "Saskatchewan", "Yukon"
    ];
      
    var unitedStatesStates = [
        "Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", 
        "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", 
        "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", 
        "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", 
        "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", 
        "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
    ];
      

    // Define cities for each state
    var citiesByState = {
        "Abia": ["Aba", "Arochukwu", "Bende", "Ikwuano", "Isiala Ngwa", "Isuikwuato", "Obi Ngwa", "Ohafia", "Osisioma", "Umuahia", "Umunneochi", "Akwa Ibom", "Ariaria", "Ibeku", "Igbere", "Ikot Ekpene", "Ngwa", "Omoba", "Umuahia"],
        "Adamawa": ["Demsa", "Fufore", "Ganye", "Girei", "Gombi", "Guyuk", "Hong", "Jada", "Lamurde", "Madagali", "Maiha", "Mayo-Belwa", "Michika", "Mubi", "Numan", "Shelleng", "Song", "Toungo", "Yola", "Jimeta"],
        "Akwa Ibom": ["Abak", "Eket", "Esit Eket", "Etinan", "Ibeno", "Ibiono Ibom", "Ikot Abasi", "Ikot Ekpene", "Ikot Ekpene", "Ini", "Itu", "Mkpat Enin", "Nsit Atai", "Nsit Ibom", "Nsit Ubium", "Obot Akara", "Okobo", "Onna", "Oron", "Oruk Anam", "Ukanafun", "Uruan", "Urue Offong", "Uyo", "Etim Ekpo", "Ika", "Ikono", "Ikot Ekpene", "Itu", "Mbo", "Oro"],
        "Anambra": ["Awka", "Onitsha", "Nnewi", "Ekwulobia", "Akwu", "Anambra", "Obosi", "Ihiala", "Nkpor", "Oko", "Umuahia", "Ogbunike", "Eziani", "Ichida", "Uga", "Agulu", "Adazi-Nnukwu", "Nanka", "Aguleri", "Umueri", "Oraifite"],
        "Bauchi": ["Bauchi", "Azare", "Dass", "Ganjuwa", "Giade", "Jama'are", "Katagum", "Kirfi", "Misau", "Ningi", "Shira", "Tafawa Balewa", "Toro", "Warji", "Zaki", "Bununu", "Dambam", "Darazo", "Itas", "Gwana", "Kaltungo"],
        "Bayelsa": ["Yenagoa", "Brass", "Ekeremor", "Kolokuma", "Opokuma", "Oporoma", "Sagbama", "Southern Ijaw", "Nembe", "Ogbia", "Twon-Brass", "Akassa", "Peremabiri", "Odi", "Ozubu", "Egbedi", "Imiringi", "Agudama"],
        "Benue": ["Makurdi", "Otukpo", "Gboko", "Katsina-Ala", "Vandeikya", "Ugbokolo", "Adikpo", "Aliade", "Ikyogen", "Wannune", "Daudu", "Zaki-Biam", "Apa", "Ohimini", "Oju", "Obi", "Ogbadibo", "Okpokwu", "Tarka"],
        "Borno": ["Maiduguri", "Bama", "Biu", "Dikwa", "Gamboru", "Gubio", "Kaga", "Kala/Balge", "Konduga", "Kukawa", "Mafa", "Magumeri", "Marte", "Mobbar", "Monguno", "Ngala", "Nganzai", "Shani"],
        "Cross River": ["Calabar", "Ikom", "Ogoja", "Obudu", "Obanliku", "Bekwarra", "Boki", "Etung", "Yakurr", "Akamkpa", "Akpabuyo", "Bakassi", "Biase", "Odukpani"],
        "Delta": ["Asaba", "Warri", "Ughelli", "Sapele", "Agbor", "Ogwashi-Uku", "Oleh", "Ozoro", "Kwale", "Abraka", "Effurun", "Bomadi", "Burutu", "Isoko", "Patani"],
        "Ebonyi": ["Abakaliki", "Afikpo", "Ebonyi", "Ikwo", "Ishielu", "Ivo", "Izzi", "Ohaozara", "Ohaukwu", "Onicha"],
        "Edo": ["Benin City", "Auchi", "Abudu", "Deghele", "Ekpoma", "Igarra", "Igueben", "Irrua", "Ubiaja", "Uromi"],
        "Ekiti": ["Ado Ekiti", "Aiyekire", "Araromi", "Effon Alaiye", "Emure Ekiti", "Igede Ekiti", "Ijero Ekiti", "Ikere Ekiti", "Ikole Ekiti", "Iloro Ekiti"],
        "Enugu": ["Enugu", "Nsukka", "Agbani", "Awgu", "Udi", "Oji River", "Ezeagu", "Igbo-Eze North", "Igbo-Eze South", "Isi-Uzo"],
        "Gombe": ["Gombe", "Bajoga", "Bambam", "Billiri", "Dukku", "Funakaye", "Kaltungo", "Kwami", "Nafada", "Shongom", "Yamaltu/Deba"],
        "Imo": ["Owerri", "Aba", "Ahiara", "Egbu", "Etiti", "Okigwe", "Orlu", "Umuahia", "Mbaise", "Mbano"],
        "Jigawa": ["Dutse", "Hadejia", "Kazaure", "Birnin Kudu", "Gwiwa", "Jahun", "Kafin Hausa", "Kiyawa", "Maigatari", "Mallam Madori"],
        "Kaduna": ["Kaduna", "Zaria", "Kafanchan", "Zonkwa", "Kachia", "Kaduna North", "Kaduna South", "Kauru", "Kubau", "Lere"],
        "Kano": ["Kano", "Wudil", "Tarauni", "Fagge", "Dala", "Gwale", "Kumbotso", " Ungogo", "Dawakin Tofa", "Bichi", "Rano"],
        "Katsina": ["Katsina", "Daura", "Kankia", "Malumfashi", "Funtua", "Safana", "Batsari", "Baure", "Zango", "Jibia"],
        "Kebbi": ["Birnin Kebbi", "Argungu", "Yelwa", "Zuru", "Jega", "Koko", "Shanga", "Suru", "Wasagu", "Danko"],
        "Kogi": ["Lokoja", "Kabba", "Okene", "Idah", "Igbo", "Okehi", "Adogo", "Ajaokuta", "Ankpa", "Dekina"],
        "Kwara": ["Ilorin", "Offa", "Omu-Aran", "Iwo", "Jebba", "Pategi", "Lafiagi", "Bode-Saadu", "Ilorin South", "Ilorin East"],
        "Lagos": ["Ikeja", "Lagos Island", "Surulere", "Agege", "Alimosho", "Ifako-Ijaiye", "Kosofe", "Mushin", "Ojo", "Oshodi-Isolo"],
        "Nasarawa": ["Lafia", "Akun", "Doma", "Keffi", "Karu", "Nasarawa-Eggon", "Obi", "Wamba", "Akwanga", "Nasarawa"],
        "Niger": ["Minna", "Bida", "Kontagora", "Lapai", "Mokwa", "New Bussa", "Suleja", "Zungeru", "Agwara", "Rafi"],
        "Ogun": ["Abeokuta", "Ijebu-Ode", "Sagamu", "Ikorodu", "Ijebu-Igbo", "Ota", "Ilaro", "Shagamu", "Aiyetoro", "Ifo"],
        "Ondo": ["Akpabu", "Akure", "Owo", "Ondo", "Ile-Oluji", "Oke-Igbo", "Irele", "Ikare", "Araromi", "Isua"],
        "Osun": ["Osogbo", "Ile-Ife", "Iwo", "Ede", "Ilesa", "Ikire", "Ilobu", "Ifetedo", "Ejigbo", "Oke-Ila"],
        "Oyo": ["Ibadan", "Oyo", "Ogbomosho", "Iseyin", "Saki", "Igboho", "Kisi", "Eruwa", "Lanlate", "Okeho"],
        "Plateau": ["Jos", "Bokkos", "Dankwambo", "Kanam", "Kanke", "Langtang", "Mangu", "Pankshin", "Shendam", "Wase"],
        "Rivers": ["Port Harcourt", "Aba", "Eleme", "Okrika", "Oporoma", "Bonny", "Degema", "Omoku", "Igrita", "Buguma"],
        "Sokoto": ["Sokoto", "Bodinga", "Dange-Shuni", "Kware", "Rabah", "Sabon Birni", "Shagari", "Silame", "Tambuwal", "Wamako"],
        "Taraba": ["Jalingo", "Bali", "Donga", "Gashaka", "Karin-Lamido", "Kurmi", "Lau", "Sardauna", "Takum", "Ussa"],
        "Yobe": ["Damaturu", "Bade", "Buni Yadi", "Dapchi", "Fika", "Fune", "Geidam", "Gujba", "Jakusko", "Karasuwa"],
        "Zamfara": ["Gusau", "Anka", "Bakura", "Birnin Magaji", "Bukkuyum", "Bungudu", "Gummi", "Kaura Namoda", "Maradun", "Shinkafi"],

        "Ahafo Region": ["Goaso", "Bechem", "Duayaw Nkwanta", "Kenyasi", "Hwidiem", "Mim", "Sankore", "Kukuom", "Yamfo", "Achiresua"],
        "Ashanti Region": ["Kumasi", "Obuasi", "Bekwai", "Mampong", "Konongo", "Ejisu", "Juaben", "Agogo", "Asante-Mampong", "Effiduase", "Kibi", "Akomadan", "Tafo", "Nyinahin", "Ejura"],
        "Bono East Region": ["Techiman", "Kintampo", "Nkoranza", "Atebubu", "Amantin", "Yeji", "Sene", "Prang", "Derma", "Jema", "Drobo", "Odumase"],
        "Bono Region": ["Sunyani", "Berekum", "Dormaa Ahenkro", "Wenchi", "Tain", "Odumase", "Sampa", "Nsoatre", "Banda", "Abesim"],
        "Central Region": ["Cape Coast", "Winneba", "Elmina", "Kasoa", "Swedru", "Agona Nsaba", "Saltpond", "Assin Fosu", "UCC", "Abura-Dunkwa", "Gomoa Obuasi", "Mankessim", "Twifo Praso", "Ajumako"],
        "Eastern Region": ["Koforidua", "Nkawkaw", "Akim Oda", "Aburi", "Suhum", "Kade", "Asamankese", "Akropong", "Somanya", "Adeiso", "Nsawam", "Begoro", "Mampong", "New Abirem", "Oda"],
        "Greater Accra Region": ["Accra", "Tema", "Kasoa", "Achimota", "Madina", "Adenta", "Ashaiman", "Teshie", "Nungua", "Lashibi", "Sakumono", "Spintex", "Dansoman", "Kaneshie", "Odorkor", "Weija", "Gbawe", "Amasaman", "Bortianor", "Ngleshie Amanfro"],
        "North East Region": ["Nalerigu", "Gambaga", "Walewale", "Bunkpurugu", "Nakpanduri", "Yunyoo", "Chereponi", "Saboba", "Zabzugu", "Langbinsi"],
        "Northern Region": ["Tamale", "Yendi", "Bimbilla", "Salaga", "Walewale", "Damongo", "Buipe", "Kpandai", "Gushegu", "Karaga", "Kumbungu", "Mion", "Nanton", "Saboba", "Savelugu", "Tolon", "Zabzugu", "Chereponi", "Gushiegu", "Kparigu"],
        "Oti Region": ["Dambai", "Kadjebi", "Jasikan", "Kete Krachi", "Nkonya", "Chinderi", "Akyem Oda", "Kpassa", "Tapa Abotoase", "Wurupong"],
        "Savannah Region": ["Damongo", "Bole", "Sawla", "Salaga", "Gushiegu", "Bunkpurugu", "Nakpanduri", "Yapei", "Kpandai", "Diare", "Daboya", "Kulmasa"],
        "Upper East Region": ["Bolgatanga", "Navrongo", "Bawku", "Zebilla", "Paga", "Binduri", "Garu", "Tempane", "Nangodi", "Sandema", "Fumbisi", "Tongo", "Widana", "Kologo"],
        "Upper West Region": ["Wa", "Nandom", "Lawra", "Tumu", "Jirapa", "Lambussie", "Hamile", "Kaleo", "Daffiama", "Issa", "Wechiau", "Funsi"],
        "Volta Region": ["Ho", "Hohoe", "Kpando", "Keta", "Sogakope", "Akatsi", "Denu", "Nkonya", "Jasikan", "Kadjebi", "Peki", "Anloga", "Aflao", "Agortime-Kpetoe", "Dzodze"],
        "Western North Region": ["Sefwi Wiawso", "Bibiani", "Sefwi Bekwai", "Awaso", "Juaboso", "Bodi", "Akontombra", "Enchi", "Dadieso", "Kwasikrom", "Sefwi Debiso"],
        "Western Region": ["Sekondi-Takoradi", "Tarkwa", "Cape Coast", "Prestea", "Effia-Kuma", "Kwesimintsim", "Axim", "Essikado", "Shama", "Busua", "Mpohor", "Asankragwa", "Enchi", "Daboase", "Elmina"],

        "Bouenza": ["Madingou", "Boko", "Tsiaki", "Loudima", "Mfouati"],
        "Brazzaville": ["Brazzaville", "Kintele", "Talangai", "Mfilou", "Makelekele"],
        "Cuvette": ["Owando", "Mbondjo", "Tchikapika", "Mokéko", "Loukoléla"],
        "Cuvette-Ouest": ["Ewo", "Kéllé", "Mbama", "Mbomo", "Okoyo"],
        "Kouilou": ["Loango", "Pointe-Noire", "Madingo-Kayes", "Bouanga", "Mvouti"],
        "Lékoumou": ["Sibiti", "Bambama", "Kayes", "Mouyondzi", "Mangombo"],
        "Likouala": ["Impfondo", "Epena", "Bozo", "Enyellé", "Dongou"],
        "Niari": ["Loubomo", "Dolisie", "Kimbonga", "Mbinda", "Mayoko"],
        "Plateaux": ["Djambala", "Gamboma", "Lékana", "Makotimpoko", "Mpouya"],
        "Pointe-Noire": ["Pointe-Noire", "Tchiamba-Nzassi", "Mvoumvou", "Ngoyo", "Kabinda"],
        "Pool": ["Kinkala", "Boko", "Kindamba", "Goma Tsé-Tsé", "Mindouli"],
        "Sangha": ["Ouésso", "Sembé", "Pokola", "Nouabalé-Ndoki", "Mokéko"],

        "Kigali Province": ["Kigali"],
        "Northern Province": ["Musanze", "Burera", "Gicumbi", "Rulindo", "Gakenke"],
        "Eastern Province": ["Rwamagana", "Nyagatare", "Kayonza", "Kirehe", "Ngoma"],
        "Southern Province": ["Huye", "Nyanza", "Ruhango", "Nyamagabe", "Gisagara"],
        "Western Province": ["Rubavu", "Karongi", "Nyamasheke", "Rusizi", "Rutsiro"],

        "Água Grande": ["São Tomé"],
        "Cantagalo": ["Santana"],
        "Caué": ["Caué"],
        "Lembá": ["Neves"],
        "Lobata": ["Guadalupe"],
        "Mé-Zóchi": ["Trindade"],
        "Pagué": ["Santo António"],

        "Dakar Region": ["Dakar", "Pikine", "Guediawaye", " Rufisque", "Sangalkam"],
        "Diourbel Region": ["Diourbel", "Bambey", "Mbacké"],
        "Fatick Region": ["Fatick", "Gossas", "Foundiougne"],
        "Kaffrine Region": ["Kaffrine", "Birkelane", "Malem Hodar"],
        "Kaolack Region": ["Kaolack", "Guinguineo", "Nioro du Rip"],
        "Kédougou Region": ["Kédougou", "Saraya", "Médina Yoro Foulah"],
        "Kolda Region": ["Kolda", "Vélingara", "Médina Yoro Foulah"],
        "Louga Region": ["Louga", "Kébémer", "Linguère"],
        "Matam Region": ["Matam", "Ourossogui", "Thille Boubacar"],
        "Saint-Louis Region": ["Saint-Louis", "Dagana", "Podor"],
        "Sédhiou Region": ["Sédhiou", "Bounkiling", "Goudomp"],
        "Tambacounda Region": ["Tambacounda", "Bakel", "Goudiry"],
        "Thiès Region": ["Thiès", "Mbour", "Tivaouane"],
        "Ziguinchor Region": ["Ziguinchor", "Bignona", "Oussouye"],

        "Anse aux Pins": ["Anse aux Pins", "Cape Barbarao"],
        "Anse Boileau": ["Anse Boileau", "Conception", "Mare Anglaise"],
        "Anse Etoile": ["Anse Etoile", "Savoy", "Ile Perseverance"],
        "Anse Louis": ["Anse Louis", "Dan zil", "Anse Royale"],
        "Anse Royale": ["Anse Royale", "Baie Lazare", "Takamaka"],
        "Baie Lazare": ["Baie Lazare", "Takamaka", "Plaisance"],
        "Baie Sainte Anne": ["Baie Sainte Anne", "Anse Royale", "Grand Anse"],
        "Beau Vallon": ["Beau Vallon", "Bel Ombre", "Glacis"],
        "Bel Ombre": ["Bel Ombre", "Beau Vallon", "Malbrook"],
        "Cascade": ["Cascade", "Hirondelle", "Val des Creoles"],
        "Glacis": ["Glacis", "La Riviere Anglaise", "Mont Buxton"],
        "Grand Anse": ["Grand Anse", "Anse Georgette", "Praslin"],
        "Grand Anse Praslin": ["Grand Anse Praslin", "Baie Sainte Anne", "Vallée de Mai"],
        "La Digue": ["La Digue", "La Passe", "Anse Source d'Argent"],
        "La Riviere Anglaise": ["La Riviere Anglaise", "Glacis", "Mont Buxton"],
        "Les Mamelles": ["Les Mamelles", "Anse Forbans", "Cap Ternay"],
        "Mont Buxton": ["Mont Buxton", "Victoria", "Saint Louis"],
        "Mont Fleuri": ["Mont Fleuri", "Saint Louis", "Roche Caiman"],
        "Plaisance": ["Plaisance", "Baie Lazare", "Takamaka"],
        "Pointe La Rue": ["Pointe La Rue", "Anse Marie Louise", "Anse Baleine"],
        "Port Glaud": ["Port Glaud", "Baie Sainte Anne", "Anse Georgette"],
        "Roche Caiman": ["Roche Caiman", "Victoria", "Mont Buxton"],
        "Saint Louis": ["Saint Louis", "Mont Fleuri", "Roche Caiman"],
        "Takamaka": ["Takamaka", "Anse Royale", "Baie Lazare"],
        "Victoria": ["Victoria", "Mont Buxton", "Saint Louis"],

        "Bombali District": ["Makeni", "Kamabai", "Kamakwie", "Bendugu", "Kafaya"],
        "Kambia District": ["Kambia", "Kukuna", "Mambolo", "Mange", "Tonko Limba"],
        "Karene District": ["Karene", "Kamalo", "Kamadugu", "Fadugu", "Katalin"],
        "Koinadugu District": ["Kabala", "Neya", "Kamadugu", "Fadugu", "Warawara"],
        "Kono District": ["Koidu", "Njaiama", "Sefadu", "Yengema", "Mafindor"],
        "Falaba District": ["Falaba", "Kamadugu", "Kamalo", "Bendugu", "Kafaya"],
        "Kenema District": ["Kenema", "Hangha", "Nongowa", "Dama", "Tongo"],
        "Kailahun District": ["Kailahun", "Kissi", "Segbwema", "Pendembu", "Koindu"],
        "Bo District": ["Bo", "Njala", "Tikonko", "Kewul", "Gbo"],
        "Bonthe District": ["Bonthe", "Mattru", "Jong", "Bonth", "Yambuku"],
        "Pujehun District": ["Pujehun", "Bendu", "Kpaka", "Potoru", "Zimmi"],
        "Western Area": ["Freetown", "Waterloo", "Kissy", "Lungi", "Goderich"],

        "Awdal Region": ["Baki", "Borama", "Lughaya", "Zeila", "Saylac"],
        "Bakool Region": ["Hudur", "Rabdhure", "Tiyeglow", "Wajid", "Yed"],
        "Banaadir Region": ["Abdiaziz District", "Bondhere District", "Hammarjajab District", "Hodan District", "Howlwadag District", "Kaxda District", "Shibis District", "Waberi District", "Wadajir District", "Yaqshid District"],
        "Bari Region": ["Bosaso", "Alula", "Banderbayla", "Qandala", "Ufeyn"],
        "Bay Region": ["Baidoa", "Burhakaba", "Dinsor", "Qasahdhere", "Yed"],
        "Galguduud Region": ["Abudwak", "Adado", "Bahdo", "El Buur", "El Dher"],
        "Gedo Region": ["Bardera", "Beledhawo", "El Wak", "Dolow", "Garbaharey"],
        "Hiran Region": ["Beledweyne", "Buloburte", "Jalalaqsi", "Mataban", "Maxaas"],
        "Jubaland Region": ["Bu'ale", "Jilib", "Kismayo", "Sakow", "Jamame"],
        "Lower Juba Region": ["Afgooye", "Badhaadhe", "Jamame", "Kismayo", "Sakow"],
        "Middle Juba Region": ["Buurhakaba", "Jilib", "Sakow", "Salagle"],
        "Middle Shebelle Region": ["Adan Yabal", "Bal'ad", "Jowhar", "Mahaday", "Warsheikh"],
        "Mudug Region": ["Galkayo", "Harardhere", "Jiriiban", "Wargalo"],
        "Nugal Region": ["Eyl", "Garowe", "Dangorayo", "Burtinle"],
        "Sanaag Region": ["Badhan", "Dhahar", "El Buh", "Erigavo", "Lasqoray"],
        "Shabelle Region": ["Afgoye", "Bal'ad", "Jowhar", "Mahaday", "Warsheikh"],
        "Sool Region": ["Aynabo", "Lugaya", "Taleh", "Xudun"],
        "Togdheer Region": ["Burao", "Oodweyne", "Sheikh", "Beerbaha"],

        "Eastern Cape": ["Bhisho", "East London", "Grahamstown", "King William's Town", "Mthatha", "Port Elizabeth", "Queenstown", "Uitenhage"],
        "Free State": ["Bethlehem", "Bloemfontein", "Jagersfontein", "Kroonstad", "Odendaalsrus", "Parys", "Phuthaditjhaba", "Sasolburg", "Virginia", "Welkom"],
        "Gauteng": ["Johannesburg", "Pretoria", "Benoni", "Boksburg", "Brakpan", "Carletonville", "Germiston", "Krugersdorp", "Randburg", "Randfontein", "Roodepoort", "Soweto", "Springs", "Vereeniging"],
        "KwaZulu-Natal": ["Pietermaritzburg", "Durban", "Empangeni", "Ladysmith", "Newcastle", "Port Shepstone", "Richards Bay", "Ulundi", "Vryheid"],
        "Limpopo": ["Polokwane", "Giyanani", "Lebowakgomo", "Louis Trichardt", "Mokopane", "Musina", "Phalaborwa", "Thabazimbi", "Tzaneen"],
        "Mpumalanga": ["Nelspruit", "Emalahleni", "Secunda", "Standerton", "Witbank"],
        "North West": ["Mafikeng", "Klerksdorp", "Mahikeng", "Potchefstroom", "Rustenburg", "Vryburg"],
        "Northern Cape": ["Kimberley", "Cape Town", "Upington", "Springbok", "De Aar", "Kuruman", "Prieska"],
        "Western Cape": ["Cape Town", "Bellville", "George", "Paarl", "Somerset West", "Stellenbosch", "Worcester"],

        "Central Equatoria": ["Juba", "Kajo Keji", "Lainya", "Mundri", "Terekeka", "Yei"],
        "Eastern Equatoria": ["Torit", "Kapoeta", "Budi", "Ilemi", "Magwi", "Nimule"],
        "Jonglei": ["Bor", "Akobo", "Ayod", "Fangak", "Kolnyang", "Nyirol", "Pibor", "Pochalla", "Twic East", "Uror"],
        "Lakes": ["Rumbek", "Aweil", "Cuibet", "Mvolo", "Wulu", "Yirol"],
        "Northern Bahr el Ghazal": ["Aweil", "Aweil East", "Aweil South", "Nyamlell", "Udici"],
        "Unity": ["Bentiu", "Guit", "Koch", "Leer", "Mayom", "Pariang", "Rubkona"],
        "Upper Nile": ["Malakal", "Akoka", "Baliet", "Fashoda", "Kodok", "Maban", "Manyo", "Melut", "Nasir", "Renk"],
        "Warrap": ["Kuajok", "Aweil West", "Tonj", "Gogrial", "Twic"],
        "Western Bahr el Ghazal": ["Wau", "Deim Zubeir", "Kuacjok", "Nyirol", "Raga"],
        "Western Equatoria": ["Yambio", "Ezo", "Ibba", "Maridi", "Nzara", "Tambura", "Yei"],

        "Al Jazirah": ["Wad Madani", "Al Kamlin", "Al Hasaheisa", "East Sinnar", "Um El Gowesin"],
        "Al Qadarif": ["Gedaref", "Galabat", "Doka", "Fashaga", "Um Kaddadah"],
        "Blue Nile": ["Damazin", "Al Roseires", "Baw", "Gesan", "Kurmuk"],
        "Central Darfur": ["Zalingei", "Nertiti", "Rokoro", "Wada", "Um Dukhun"],
        "East Darfur": ["Edd al Fursan", "Adila", "Bosh", "Shieria", "Abu Jabra"],
        "Gedaref": ["Gedaref", "Galabat", "Doka", "Fashaga", "Um Kaddadah"],
        "Gezira": ["Wad Madani", "Al Kamlin", "Al Hasaheisa", "East Sinnar", "Um El Gowesin"],
        "Kassala": ["Kassala", "Aroma", "Hamashkoreb", "Kawa", "Nahud"],
        "Khartoum": ["Khartoum", "Omdurman", "Bahri", "Sharg El Nil", "South Khartoum"],
        "North Darfur": ["El Fasher", "Ain Siro", "Kabkabiya", "Kutum", "Tawilah"],
        "North Kordofan": ["El Obeid", "Barah", "Ghebeish", "Sodari", "Sheikan"],
        "Northern": ["Dongola", "Karima", "Kurru", "Wadi Halfa", "Merowe"],
        "Red Sea": ["Port Sudan", "Arbaat", "Haya", "Sawakin", "Toker"],
        "River Nile": ["Ad Damir", "Atbara", "Berber", "Damer", "Shendi"],
        "Sennar": ["Sennar", "Dinder", "Abu Naama", "Eldali", "Singa"],
        "South Darfur": ["Nyala", "Akle", "Buram", "Kalma", "Tullus"],
        "South Kordofan": ["Kadugli", "Abu Jabra", "Dilling", "Lagawa", "Talodi"],
        "West Darfur": ["Geneina", "Kereinik", "Zalingei", "Nertiti", "Rokoro"],

        "Arusha": ["Arusha", "Moshi", "Meru", "Karatu"],
        "Dar es Salaam": ["Dar es Salaam", "Kinondoni", "Temeke", "Ilala"],
        "Dodoma": ["Dodoma"],
        "Geita": ["Geita"],
        "Iringa": ["Iringa", "Makambako", "Njombe", "Kilolo"],
        "Kagera": ["Bukoba", "Misenyi", "Ngara", "Biharamulo"],
        "Katavi": ["Mpanda", "Kaliua", "Nsimbo"],
        "Kigoma": ["Kigoma", "Uvinza", "Buhigwe", "Kasulu"],
        "Kilimanjaro": ["Moshi", "Hai", "Rombo", "Kilimanjaro"],
        "Lindi": ["Lindi", "Kilwa", "Nachingwea"],
        "Manyara": ["Babati", "Hanang", "Moshi", "Mbulu"],
        "Mara": ["Mara", "Tarime", "Serengeti", "Musoma"],
        "Mbeya": ["Mbeya", "Chunya", "Rungwe", "Tunduma"],
        "Morogoro": ["Morogoro", "Ifakara", "Kilosa", "Mvomero"],
        "Mtwara": ["Mtwara", "Nachingwea", "Masasi", "Tandahimba"],
        "Mwanza": ["Mwanza", "Geita", "Kwimba", "Ukerewe"],
        "Pemba North": ["Chake Chake", "Wete", "Mkoani"],
        "Pemba South": ["Chake Chake", "Wete", "Mkoani"],
        "Rukwa": ["Sumbawanga", "Kalambo", "Nkasi"],
        "Ruvuma": ["Mbinga", "Songea", "Tunduru"],
        "Shinyanga": ["Shinyanga", "Kahama", "Nzega", "Maswa"],
        "Singida": ["Singida", "Ikungi", "Manyoni"],
        "Tabora": ["Tabora", "Igunga", "Nzega"],
        "Tanga": ["Tanga", "Pangani", "Korogwe", "Lushoto"],
        "Zanzibar Central/South": ["Zanzibar City", "Unguja South"],
        "Zanzibar North": ["Zanzibar North"],
        "Zanzibar Urban/West": ["Zanzibar City", "West"],

        "Maritime": ["Lomé", "Aného", "Vogan", "Togo", "Tsévié", "Kpéssé", "Sotouboua", "Zanguéra"],
        "Plateaux": ["Kpalimé", "Notsé", "Amou", "Danyi", "Kétou", "Tchamba", "Kouma-Konda"],
        "Centrale": ["Atakpamé", "Tchamba", "Kassé", "Tové", "Notsé"],
        "Kara": ["Kara", "Cinkassé", "Niamtougou", "Kpendjal", "Kara", "Notsé"],
        "Savanes": ["Dapaong", "Mango", "Tône", "Pya", "Dapaong"],

        "Ariana": ["Ariana", "La Soukra", "Ksar es-S'id", "Raoued", "Ettadhamen", "El Mnihla"],
        "Beja": ["Beja", "Téboursouk", "Tébar", "Mateur", "Nadhour", "Goubellat"],
        "Ben Arous": ["Ben Arous", "Mégrine", "El Mourouj", "El Manouba", "Radès", "La Marsa"],
        "Bizerte": ["Bizerte", "Menzel Bourguiba", "Menzel Jemil", "Menzel Abderrahmen", "Ras Jebel", "Ghar el Melh"],
        "Gabès": ["Gabès", "Medenine", "Matmata", "Ghannouch", "El Hamma", "Jerba"],
        "Gafsa": ["Gafsa", "Metlaoui", "Redeyef", "Mdhilla", "Ksar", "Sidi Aich"],
        "Jendouba": ["Jendouba", "Oued Melliz", "Fernana", "Ain Draham", "Bordj El Amri", "Ghardimaou"],
        "Kairouan": ["Kairouan", "El Alaa", "El Mâa", "Sidi Bouzid", "Haffouz", "Oueslatia"],
        "Kasserine": ["Kasserine", "Thala", "Hassi el Ferid", "Foussana", "Sbeïtla", "Tadjenanet"],
        "Kebili": ["Kebili", "Douz", "Souk Lahad", "Nefta", "El Golâa", "Sabria"],
        "Kef": ["Kef", "Tajerouine", "El Ksour", "Sers", "Rouhia", "Laarb"],
        "Mahdia": ["Mahdia", "El Jem", "Chebba", "Ksar es-S'id", "Raghdane", "El Guetar"],
        "Manouba": ["Manouba", "Tebourba", "Djedeida", "El Mnihla", "Mornag", "La Marsa"],
        "Mednine": ["Mednine", "Ben Gardane", "Bani Khedache", "Djerba", "El Hamma", "Mednine"],
        "Monastir": ["Monastir", "Moknine", "Ksibet el Mediouni", "Teboulba", "Bembla", "Jemmal"],
        "Nabeul": ["Nabeul", "Hammamet", "Kélibia", "Mrezga", "Beni Khalled", "El Haouaria"],
        "Sfax": ["Sfax", "Kerkennah", "Skhira", "Mahares", "Sidi Mansour", "El Hamma"],
        "Sidi Bouzid": ["Sidi Bouzid", "Menzel Bouzelfa", "Joumine", "Chtaura", "El Ouerd", "Maknassy"],
        "Siliana": ["Siliana", "Bouarada", "El Aroussa", "Maktar", "Sidi Bou Rouis", "Zaghouan"],
        "Sousse": ["Sousse", "Port El Kantaoui", "Hammam Sousse", "Kantaoui", "Sidi Bou Said", "Sousse El Jadida"],
        "Tataouine": ["Tataouine", "Medenine", "Djerba", "Remada", "Beni Khedache", "Tataouine"],
        "Tozeur": ["Tozeur", "Nefta", "Degache", "Tamerza", "Sidi Bouhlel", "Chébika"],
        "Tunis": ["Tunis", "La Marsa", "El Mourouj", "El Manouba", "Carthage", "Tunis El Khadra"],
        "Zaghouan": ["Zaghouan", "El Fahs", "Bir Mcherga", "Nadhour", "Zaghouan", "Jebel"],

        "Central Region-Uganda": ["Kampala", "Wakiso", "Entebbe", "Mubende", "Masaka", "Kalangala", "Luweero", "Nakasongola", "Mpigi", "Gomba"],
        "Eastern Region-Uganda": ["Jinja", "Mbale", "Soroti", "Kumi", "Tororo", "Iganga", "Budaka", "Mayuge", "Kaberamaido", "Pallisa"],
        "Northern Region-Uganda": ["Gulu", "Lira", "Arua", "Kitgum", "Pader", "Nebbi", "Yumbe", "Moyo", "Apac", "Nwoya"],
        "Western Region-Uganda": ["Mbarara", "Kabale", "Kasese", "Fort Portal", "Bushenyi", "Ntungamo", "Rukungiri", "Kabarole", "Isingiro", "Kanungu"],

        "Central Province-Zambia": ["Kabwe", "Kapiri Mposhi", "Mumbwa", "Chibombo", "Mkushi", "Serenje", "Itezhi-Tezhi"],
        "Copperbelt Province-Zambia": ["Ndola", "Kitwe", "Chingola", "Luanshya", "Mufulira", "Kalulushi", "Lufwanyama"],
        "Eastern Province-Zambia": ["Chipata", "Katete", "Petauke", "Vubwi", "Chadiza", "Lundazi", "Nyimba"],
        "Luapula Province-Zambia": ["Mansa", "Samfya", "Nchelenge", "Mwense", "Mambilima", "Chiengi", "Kawambwa"],
        "Lusaka Province-Zambia": ["Lusaka", "Kafue", "Chongwe", "Shibuyunji", "Mumbwa", "Ngwerere", "Zambezi"],
        "Muchinga Province-Zambia": ["Chinsali", "Mpika", "Isoka", "Nakonde", "Shiwang'andu", "Kawambwa", "Luwingu"],
        "Northern Province-Zambia": ["Kasama", "Mbala", "Mporokoso", "Luwingu", "Mpulungu", "Nkamba", "Kanchibiya"],
        "North-Western Province-Zambia": ["Solwezi", "Zambezi", "Mufumbwe", "Kabompo", "Chavuma", "Kasempa", "Lunga"],
        "Southern Province-Zambia": ["Livingstone", "Monze", "Mazabuka", "Choma", "Kalomo", "Sesheke", "Namwala"],
        "Western Province-Zambia": ["Sesheke", "Mongu", "Kalabo", "Kaoma", "Limulunga", "Nkeyema", "Sikongo"],

        "Harare": ["Harare", "Chitungwiza", "Epworth", "Ruwa", "Highfield", "Mbare", "Warren Park"],
        "Bulawayo": ["Bulawayo", "Nkayi", "Luveve", "Pumula", "Mpopoma", "Entumbane", "Cowdray Park"],
        "Manicaland": ["Mutare", "Chipinge", "Rusape", "Buhera", "Makoni", "Hondoro", "Nyanga"],
        "Mashonaland Central": ["Bindura", "Mazowe", "Mount Darwin", "Guruve", "Concession", "Rushinga", "Musana"],
        "Mashonaland East": ["Marondera", "Murehwa", "Chivhu", "Goromonzi", "Mutoko", "Hwedza", "Wedza"],
        "Mashonaland West": ["Chinhoyi", "Kariba", "Chegutu", "Zvimba", "Kadoma", "Hurungwe", "Makonde"],
        "Masvingo": ["Masvingo", "Zvishavane", "Chivi", "Gutu", "Mwenezi", "Bindura", "Masvingo"],
        "Matabeleland North": ["Hwange", "Victoria Falls", "Binga", "Lupane", "Dete", "Nkayi", "Zambezi"],
        "Matabeleland South": ["Gwanda", "Beitbridge", "Filabusi", "Kezi", "Mzingwane", "Esigodini", "Maphisa"],
        "Midlands": ["Gweru", "Kwekwe", "Zvishavane", "Shurugwi", "Gokwe", "Mvuma", "Kwekwe"],

        "Agadez": ["Agadez", "Tazalit", "Timia", "Iférouane", "Assamaka", "Bilma", "Azelik"],
        "Diffa": ["Diffa", "Chetimari", "Goudoumaria", "N'Guigmi", "Maïné-Soroa", "Kablewa", "Boudoua"],
        "Dosso": ["Dosso", "Gaya", "Kollo", "Ouallam", "Téra", "Filingue", "Say"],
        "Maradi": ["Maradi", "Aderbissinat", "Tessaoua", "Mirriah", "Guidan Roumdji", "Madaoua", "Tessaoua"],
        "Niamey": ["Niamey", "Niamey I", "Niamey II", "Niamey III", "Niamey IV", "Yantala", "Goudel"],
        "Tahoua": ["Tahoua", "Birni N'Konni", "Tataoua", "Illéla", "Kollong", "Abalak", "El Kouro"],
        "Tillabéri": ["Tillabéri", "Niamey", "Ouallam", "Téra", "Kollo", "Filingue", "Say"],
        "Zinder": ["Zinder", "Mirriah", "Maïné-Soroa", "Gaya", "Magaria", "Droum", "Kouti"],

        "Erongo": ["Swakopmund", "Walvis Bay", "Henties Bay", "Arandis", "Usakos", "Karibib", "Omaruru"],
        "Hardap": ["Mariental", "Aranos", "Gochas", "Bethanie", "Rehoboth", "Hochfeld", "Uis"],
        "Hochfeld": ["Hochfeld", "Henties Bay", "Arandis", "Karibib", "Usakos", "Omaruru", "Swakopmund"],
        "Karas": ["Keetmanshoop", "Lüderitz", "Aranos", "Karasburg", "Tses", "Bogenfels", "Fish River"],
        "Kavango East": ["Rundu", "Divundu", "Andara", "Nankudu", "Shambyu", "Mukwe", "Sikanduko"],
        "Kavango West": ["Nkurenkuru", "Kongola", "Rundu", "Katima Mulilo", "Divundu", "Andara", "Shambyu"],
        "Khomas": ["Windhoek", "Hochland Park", "Krusenstern", "Klein Windhoek", "Okahandja", "Rehoboth", "Hosea Kutako"],
        "Kunene": ["Opuwo", "Khorixas", "Kamanjab", "Sesfontein", "Palmwag", "Ruacana", "Epupa"],
        "Ohangwena": ["Ongwediva", "Ondangwa", "Engela", "Okongo", "Oshikango", "Oshikuku", "Onhuno" ],
        "Omaheke": ["Gobabis", "Otjiwarongo", "Omitara", "Buitepos", "Maltahohe", "Kalahari", "Hukuntsi"],
        "Omusati": ["Outapi", "Oshikuku", "Tsandi", "Omatako", "Oshana", "Onesi", "Okahao"],
        "Oshana": ["Oshakati", "Ondangwa", "Okahao", "Ongwediva", "Engela", "Oshikuku", "Onhuno"],
        "Oshikoto": ["Tsumeb", "Oshikango", "Omuthiya", "Ongha", "Onandjokwe", "Ongwediva", "Oshikuku"],
        "Otjozondjupa": ["Otjiwarongo", "Tsumeb", "Okahandja", "Khorixas", "Omaruru", "Omatako", "Buitepos"],
        "Zambezi": ["Katima Mulilo", "Zambezi", "Divundu", "Andara", "Kongola", "Shamvura", "Rundu"],        

        "Cabo Delgado": ["Pemba", "Montepuez", "Mueda", "Mocímboa da Praia", "Nacala", "Balama", "Namuno"],
        "Gaza-Mozambique": ["Xai-Xai", "Chókwè", "Bilene", "Chigubo", "Massingir", "Mabalane", "Guijá"],
        "Inhambane": ["Inhambane", "Maxixe", "Vilankulo", "Pemba", "Jangamo", "Quissico", "Morrumbene"],
        "Manica": ["Chimoio", "Beira", "Gondola", "Sussundenga", "Vanduzi", "Manica", "Barue"],
        "Maputo": ["Maputo", "Matola", "Boane", "Magude", "Marracuene", "Matutuine", "Sede"],
        "Maputo City": ["Maputo"],
        "Nampula": ["Nampula", "Nacala", "Monapo", "Marrere", "Muecate", "Ribaué", "Memba"],
        "Niassa": ["Lichinga", "Mandimba", "Cuamba", "Marrupa", "Metarica", "Ngauma", "Mecula"],
        "Sofala": ["Beira", "Chiredzi", "Dondo", "Gorongosa", "Muanza", "Nhamatanda", "Buzi"],
        "Tete": ["Tete", "Zambezi", "Mutarara", "Moatize", "Chifunde", "Changara", "Congo"],
        "Zambézia": ["Quelimane", "Lugela", "Milange", "Marrubeni", "Gurué", "Chinde", "Namacurra"],

        "Tanger-Tétouan-Al Hoceïma": ["Tanger", "Tétouan", "Al Hoceïma", "Chefchaouen", "Ouezzane", "Larache", "Martil"],
        "L'Oriental": ["Oujda", "Nador", "Driouch", "Taourirt", "Berkane", "Figuig", "Guercif"],
        "Fès-Meknès": ["Fès", "Meknès", "Taza", "Ifrane", "Azrou", "Sefrou", "El Hajeb"],
        "Rabat-Salé-Kénitra": ["Rabat", "Salé", "Kénitra", "Temara", "Sidi Kacem", "Sidi Slimane", "Khemisset"],
        "Béni Mellal-Khénifra": ["Béni Mellal", "Khénifra", "Azilal", "Beni-Mellal", "Khenifra", "Kasba Tadla", "El Kbab"],
        "Casablanca-Settat": ["Casablanca", "Mohammedia", "El Jadida", "Settat", "Berrechid", "Benslimane", "Sidi Bennour"],
        "Marrakech-Safi": ["Marrakech", "Essaouira", "El Kelaa des Sraghna", "Chichaoua", "Safí", "Asni", "Ouarzazate"],
        "Souss-Massa": ["Agadir", "Taroudant", "Tiznit", "Inezgane", "Chtouka Ait Baha", "Ouarzazate", "Sidi Ifni"],
        "Guelmim-Oued Noun": ["Guelmim", "Tan-Tan", "Sidi Ifni", "Bouizakarne", "Foum Zguid", "Laaouina", "Tata"],
        "Draâ-Tafilalet": ["Errachidia", "Rissani", "Midelt", "Zagora", "Ouarzazate", "Tineghir", "Goulmima"],
        
        "Port Louis": ["Port Louis", "La Tour Koenig", "Beau Bassin", "Rose Hill", "Grand Gaube", "Pointe-aux-Sables", "Les Salines"],
        "Curepipe": ["Curepipe", "Phoenix", "Vacoas", "Quatre Bornes", "Floréal", "Rose Hill", "Moka"],
        "Quatre Bornes": ["Quatre Bornes", "Bambous", "Black River", "Tamarin", "Flic-en-Flac", "Rivière Noire", "Mokhtaran"],
        "Vacoas-Phoenix": ["Vacoas", "Phoenix", "Beau Bassin", "Rose Hill", "Floréal", "Curepipe", "Pamplemousses"],
        "Beau Bassin-Rose Hill": ["Beau Bassin", "Rose Hill", "Quatre Bornes", "Vacoas", "Floréal", "Curepipe", "Phoenix"],
        "Plaines Wilhems": ["Quatre Bornes", "Beau Bassin", "Rose Hill", "Vacoas", "Floréal", "Moka", "Curepipe"],
        "Rivière du Rempart": ["Grand Bay", "Rivière du Rempart", "Poudre d'Or", "Roches Noires", "Cap Malheureux", "Calodyne", "Mont Choisy"],
        "Rivière Noire": ["Black River", "Flic-en-Flac", "Tamarin", "Le Morne", "Chamarel", "La Preneuse", "Rivière Noire"],
        "Savanne": ["Souillac", "Bel Ombre", "Chemin Grenier", "Surinam", "Bambou", "La Caverne", "Bel Air"],
        "Flacq": ["Centre de Flacq", "Belle Mare", "Roches Noires", "Poudre d'Or", "Palmar", "Grand Gaube", "Anse la Raie"],
        "Moka": ["Moka", "Phoenix", "Beau Bassin", "Rose Hill", "Quatre Bornes", "Vacoas", "Floréal"],

        "Adrar": ["Atar", "Chinguetti", "Ouadane", "Zouerate", "Akjoujt", "Aoujeft", "Tidjikja"],
        "Assaba": ["Kiffa", "Ould Yengé", "Ould Naga", "Monguel", "Amourj", "Rachid", "Aleg"],
        "Brakna": ["Boghé", "Monguel", "R’kiz", "Brakna", "Sougue", "Gouilimime", "Aoujeft"],
        "Gorgol": ["Kaédi", "Monguel", "Sagna", "Aïoun", "Ksar", "Gorgol", "El Ghaïa"],
        "Guidimaka": ["Sélibaby", "Guidimakha", "Monguel", "Ould Yengé", "Ould Naga", "Chinguetti", "Ouadane"],
        "Hodh Ech Chargui": ["Néma", "Aoujeft", "Tichitt", "Nema", "Ould Yengé", "Ould Naga", "Monguel"],
        "Hodh El Gharbi": ["Aioun", "Kiffa", "Monguel", "Ould Naga", "Tichitt", "Nema", "Ksar"],
        "Inchiri": ["Akjoujt", "Ouadane", "Chinguetti", "Atar", "Zouerate", "Tidjikja", "Aoujeft"],
        "Tagant": ["Tidjikja", "El Ghaïa", "Tichitt", "Ouadane", "Chinguetti", "Atar", "Aoujeft"],
        "Tiris Zemmour": ["Zouerate", "F’Dérik", "Akjoujt", "Chinguetti", "Ouadane", "Atar", "Tidjikja"],
        "Trarza": ["Rosso", "Aleg", "Gouilimime", "Sougue", "Boghé", "Monguel", "Brakna"],
        "Nouakchott": ["Nouakchott", "Nouakchott-Ouest", "Nouakchott-Nord", "Nouakchott-Sud", "Arafat", "Teyarett", "El Mina"],
        "Nouadhibou": ["Nouadhibou", "Cansado", "Bouhdida", "El Aouafia", "Moghrein", "Ouadane", "Chinguetti"],

        "Bamako": ["Bamako", "Cocody", "Hamdallaye", "Kati", "Sikasso", "Ségou", "Mopti"],
        "Gao": ["Gao", "Ansongo", "Bourem", "Tombouctou", "Menaka", "Ménaka", "Gao"],
        "Kidal": ["Kidal", "Aguelhok", "Tinzawaten", "Kidal", "Abeibara", "Essakane", "Inékar"],
        "Kayes": ["Kayes", "Kati", "Bafoulabé", "Bamako", "Diéma", "Nioro du Sahel", "Sikasso"],
        "Koulikoro": ["Koulikoro", "Sikasso", "Diema", "Nioro du Sahel", "Bamako", "Kati", "Kangaba"],
        "Mopti": ["Mopti", "Djenné", "Tombouctou", "Bandiagara", "Sévaré", "Sikasso", "Koro"],
        "Ségou": ["Ségou", "San", "Macina", "Koro", "Tominian", "Djenne", "Bandiagara"],
        "Sikasso": ["Sikasso", "Koutiala", "Zégoua", "Bougouni", "Kadiolo", "Koutiala", "Kangaba"],
        "Tombouctou": ["Tombouctou", "Diré", "Gao", "Ménaka", "Tombouctou", "Bamba", "Niafunké"],
        "Taoudénit": ["Taoudénit", "Tessalit", "Kidal", "Inhalid", "Kidal", "Tombouctou", "Menaka"],
        "Mopti": ["Mopti", "Djenné", "Sévaré", "Tombouctou", "Bandiagara", "Koro", "Bandiagara"],

        "Central Region-Malawi": ["Lilongwe", "Dedza", "Kasungu", "Salima", "Mchinji", "Ntchisi", "Nkhotakota", "Jenda", "Lumbadzi", "Dowa"],
        "Northern Region-Malawi": ["Mzuzu", "Karonga", "Chitipa", "Rumphi", "Mzimba", "Nkhata Bay", "Likoma Island", "Mpherembe", "Mzimba", "Chintheche"],
        "Southern Region-Malawi": ["Blantyre", "Zomba", "Limbe", "Mulanje", "Thyolo", "Phalombe", "Mangochi", "Balaka", "Nsanje", "Chikwawa", "Luchenza"],
        
        "Antananarivo": ["Antananarivo", "Ambohimanambola", "Antananarivo-Avaradrano", "Antananarivo-Renivohitra", "Antananarivo-Analakely", "Ambohimangakely", "Andoharanofotsy"],
        "Antsiranana": ["Antsiranana", "Ambanja", "Ambilobe", "Sambava", "Diego Suarez", "Joffreville", "Ankify"],
        "Fianarantsoa": ["Fianarantsoa", "Ambalavao", "Ihosy", "Ranohira", "Lalaina", "Tsienimparihy", "Vohibinany"],
        "Mahajanga": ["Mahajanga", "Belo-sur-Tsiribihina", "Mitsinjo", "Sambaina", "Morondava", "Sakaraha", "Antsalova"],
        "Toamasina": ["Toamasina", "Foulpointe", "Soanierana Ivongo", "Mananara Nord", "Vatomandry", "Mahanoro", "Andilamena"],
        "Toliara": ["Toliara", "Sakaraha", "Morombe", "Benavony", "Ampanihy", "Tsiombe", "Isalo"],
        "Vakinankaratra": ["Antananarivo", "Betafo", "Antanifotsy", "Miarinarivo", "Ambatolampy", "Fandriana", "Tsiroanomandidy"],
        "Analamanga": ["Antananarivo", "Andoharanofotsy", "Ambohimanambola", "Antananarivo-Avaradrano", "Antananarivo-Renivohitra", "Andramasina", "Ambohimangakely"],
        "Atsimo-Andrefana": ["Toliara", "Morombe", "Sakaraha", "Ampanihy", "Belo-sur-Tsiribihina", "Morondava", "Befandriana"],
        "Atsinanana": ["Toamasina", "Mananara Nord", "Vatomandry", "Foulpointe", "Soanierana Ivongo", "Andilamena", "Mahanoro"],
        "Bongolava": ["Tsiroanomandidy", "Antananarivo", "Ambatolampy", "Miarinarivo", "Betafo", "Ankazomanga", "Soavinandriana"],
        "Haute Matsiatra": ["Fianarantsoa", "Ambalavao", "Ihosy", "Ranohira", "Vohibinany", "Lalaina", "Tsienimparihy"],
        "Ihorombe": ["Ihosy", "Ambalavao", "Ranohira", "Vohibinany", "Lalaina", "Tsienimparihy", "Miarinarivo"],
        "Itasy": ["Antananarivo", "Betafo", "Ambatolampy", "Tsiroanomandidy", "Miarinarivo", "Fandriana", "Antanifotsy"],
        "Melaky": ["Antsalova", "Mitsinjo", "Belo-sur-Tsiribihina", "Sakaraha", "Morondava", "Ampanihy", "Isalo"],
        "Sava": ["Sambava", "Antalaha", "Vohemar", "Andapa", "Antalaha", "Sambava", "Mananara Nord"],
        "Sofia": ["Mahajanga", "Belo-sur-Tsiribihina", "Mitsinjo", "Sambaina", "Morondava", "Sakaraha", "Antsalova"],
        "Atsimo-Atsinanana": ["Tolagnaro", "Fort-Dauphin", "Ampanihy", "Belo-sur-Tsiribihina", "Sakaraha", "Morombe", "Befandriana"],

        "Ajdabiya": ["Ajdabiya", "Maradah", "Jalu", "Awjilah", "Uqaylah", "Bida", "Sidr"],
        "Al Aziziyah": ["Al Aziziyah", "Ghiryan", "Janzour", "Zawiya", "Tajura", "Jadid", "Naser"],
        "Bayda": ["Al Bayda", "Shahat", "Qubbah", "Derna", "Suluq", "Marj", "Abyar"],
        "Al Kufrah": ["Al Kufrah", "Sebha", "Jalu", "Murzuq", "Tamanhint", "Tibesti", "Ghat"],
        "Al Marj": ["Al Marj", "Barqa", "Ajdabiya", "Jalu", "Benghazi", "Derna", "Quba"],
        "Al Jufrah": ["Al Jufrah", "Houn", "Sirt", "Wadi al Shatii", "Sidi al Razi", "Hun", "Zalla"],
        "Al Wahat": ["Al Wahat", "Gat", "Uqaylah", "Ajdabiya", "Al Bayda", "Jalu", "Awjilah"],
        "Benghazi": ["Benghazi", "Al Marj", "Derna", "Ajdabiya", "Tobruk", "Shahat", "Qubbah"],
        "Derna": ["Derna", "Martuba", "Al Bayda", "Shahat", "Qubbah", "Ajdabiya", "Gubba"],
        "Gharyan": ["Gharyan", "Jadu", "Nalut", "Zintan", "Rujban", "Yafran", "Qasr al Haj"],
        "Jabal al Akhdar": ["Benghazi", "Al Bayda", "Shahat", "Qubbah", "Derna", "Marj", "Abyar"],
        "Jufra": ["Houn", "Sirt", "Wadi al Shatii", "Hun", "Zalla", "Sidi al Razi", "Al Jufrah"],
        "Misrata": ["Misrata", "Sirte", "Zliten", "Khoms", "Tajura", "Houn", "Qasr al-Haj"],
        "Nalut": ["Nalut", "Jadu", "Zintan", "Rujban", "Yafran", "Qasr al Haj", "Janzour"],
        "Sebha": ["Sebha", "Murzuq", "Al Kufrah", "Tamanhint", "Tibesti", "Ghat", "Ubari"],
        "Sirt": ["Sirt", "Houn", "Wadi al Shatii", "Al Jufrah", "Hun", "Zalla", "Sidi al Razi"],
        "Tajura": ["Tajura", "Janzour", "Al Aziziyah", "Ghiryan", "Zawiya", "Jadid", "Naser"],
        "Tripoli": ["Tripoli", "Janzour", "Al Aziziyah", "Ghiryan", "Zawiya", "Tajura", "Jadid"],
        "Tubruq": ["Tobruk", "Benghazi", "Derna", "Marj", "Al Bayda", "Shahat", "Qubbah"],
        "Wadi al Shatii": ["Wadi al Shatii", "Sirt", "Hun", "Zalla", "Sidi al Razi", "Houn", "Al Jufrah"],

        "Bong County": ["Gbarnga", "Putu", "Salala", "Sanniquellie", "Bong Mines", "Jorquelleh", "Kpaai"],
        "Bomi County": ["Tubmanburg", "Bomi Hills", "Klay", "Bomi County", "Sodoken", "Jorwah"],
        "Bassa County": ["Buchanan", "Edina", "Harper", "Webo", "Riverside", "Salala"],
        "Grand Bassa County": ["Buchanan", "Harper", "Edina", "Webo", "Riverside", "Salala"],
        "Grand Cape Mount County": ["Robertsport", "Gola Konneh", "Tewor", "Voinjama", "Tappita", "Foya"],
        "Grand Gedeh County": ["Zwedru", "Gbarzon", "Tappita", "Foya", "Gbarpolu", "Voinjama"],
        "Grand Kru County": ["Barclayville", "Gbehlay Geh", "Sasstown", "Duru", "Mahn", "Fishtown"],
        "Lofa County": ["Voinjama", "Kolahun", "Foya", "Zorzor", "Gbarpolu", "Tappita"],
        "Margibi County": ["Kakata", "Zorzor", "Gbarnga", "Sanniquellie", "Putu", "Ganta"],
        "Maryland County": ["Harper", "Pleebo", "Gbehlin", "Webo", "Bahn", "Zwedru"],
        "Montserrado County": ["Monrovia", "Paynesville", "New Kru Town", "West Point", "Old Road", "Red Light"],
        "Nimba County": ["Sanniquellie", "Ganta", "Zorzor", "Yekepa", "Gbarnga", "Saclepea"],
        "River Cess County": ["River Cess", "Cestos City", "Babi", "Dodo", "Juarzon", "Bahn"],
        "River Gee County": ["Fishtown", "Zleh", "Bahn", "Dodo", "Dodo Town", "Doru"],
        "Sinoe County": ["Greenville", "Sinoe", "Bensonville", "Barclayville", "Gbehlay Geh", "Duru"],

        "Berea": ["Berea", "Seforong", "Mokema", "Ha Ramathe", "Ha Mofokeng", "Ha Mahali"],
        "Butha-Buthe": ["Butha-Buthe", "Maputsoe", "Leribe", "Bokong", "Teyateyaneng", "Ha 'Moleka"],
        "Leribe": ["Leribe", "Hlotse", "Bokong", "Teyateyaneng", "Maputsoe", "Hale"],
        "Mafeteng": ["Mafeteng", "Mokhotlong", "Leribe", "Ha 'Moleka", "Ha Mofokeng", "Ha Ramathe"],
        "Maseru": ["Maseru", "Roma", "Teyateyaneng", "Ha 'Moleka", "Ha Mofokeng", "Ha Ramathe"],
        "Mohale's Hoek": ["Mohale's Hoek", "Mokhotlong", "Ha Mofokeng", "Mokema", "Ha Ramathe", "Seforong"],
        "Mokhotlong": ["Mokhotlong", "Berea", "Seforong", "Maputsoe", "Ha 'Moleka", "Teyateyaneng"],
        "Qacha's Nek": ["Qacha's Nek", "Mokhotlong", "Leribe", "Teyateyaneng", "Bokong", "Ha Ramathe"],
        "Quthing": ["Quthing", "Maputsoe", "Leribe", "Ha Mofokeng", "Ha 'Moleka", "Mokhotlong"],
        "Thaba-Tseka": ["Thaba-Tseka", "Berea", "Mokhotlong", "Ha Mofokeng", "Seforong", "Ha Ramathe"],

        "Bomet": ["Bomet", "Sigor", "Chepalungu", "Kapsimotwa", "Kipsonoi", "Mogogosiek"],
        "Bungoma": ["Bungoma", "Chwele", "Webuye", "Kimilili", "Kanduyi", "Tongaren"],
        "Busia": ["Busia", "Nambale", "Teso", "Butula", "Masaba", "Sio Port"],
        "Elgeyo-Marakwet": ["Iten", "Kapcherop", "Kapsowar", "Emboo", "Siron", "Kamariny"],
        "Embu": ["Embu", "Runyenjes", "Mbeere", "Kangundo", "Kangundo Town", "Mwea"],
        "Garissa": ["Garissa", "Modogashe", "Fafi", "Dadaab", "Bura", "Ijara"],
        "Homa Bay": ["Homa Bay", "Kendu Bay", "Mbita", "Rachuonyo", "Kisumu", "Rodi Kopany"],
        "Isiolo": ["Isiolo", "Merti", "Garbatulla", "Kinna", "Bulesa", "Kambi Garba"],
        "Kajiado": ["Kajiado", "Kitengela", "Namanga", "Oloitokitok", "Matasia", "Sotik"],
        "Kakamega": ["Kakamega", "Kakamega Town", "Mumias", "Butere", "Khwisero", "Lugari"],
        "Kericho": ["Kericho", "Kipkelion", "Litein", "Ainamoi", "Kapsabet", "Bomet"],
        "Kerugoya": ["Kerugoya", "Kutus", "Kianyaga", "Ngariama", "Sagana", "Mwea"],
        "Kisii": ["Kisii", "Kisii Town", "Nyamache", "Nyaribari", "Gucha", "Bomachoge"],
        "Kisumu": ["Kisumu", "Kisumu City", "Maseno", "Ahero", "Kisian", "Muhoroni"],
        "Kitui": ["Kitui", "Mwingi", "Kangundo", "Kyuso", "Kwa Vonza", "Kitui Town"],
        "Laikipia": ["Nanyuki", "Nyahururu", "Rumuruti", "Ol Kalou", "Doldol", "Mugiririr"],
        "Lamu": ["Lamu", "Mpeketoni", "Faza", "Witu", "Patta", "Kiunga"],
        "Machakos": ["Machakos", "Mwala", "Mavoko", "Kangundo", "Masinga", "Matungulu"],
        "Makueni": ["Wote", "Makueni", "Kangundo", "Mbooni", "Makindu", "Mtito Andei"],
        "Mandera": ["Mandera", "El Wak", "Banisa", "Rhamu", "Fino", "Takaba"],
        "Marsabit": ["Marsabit", "Moyale", "Laisamis", "North Horr", "Sololo", "Kargi"],
        "Meru": ["Meru", "Nchiru", "Kibirichia", "Nkubu", "Maua", "Igembe"],
        "Migori": ["Migori", "Rongo", "Suna", "Kuria", "Nyatike", "Kegogi"],
        "Mombasa": ["Mombasa", "Likoni", "Kisauni", "Nyali", "Jomvu", "Changamwe"],
        "Murang'a": ["Murang'a", "Kenol", "Kangema", "Kangari", "Maragua", "Kigumo"],
        "Nairobi": ["Nairobi", "Westlands", "Kasarani", "Lang'ata", "Embakasi", "Kibera"],
        "Nakuru": ["Nakuru", "Naivasha", "Molo", "Njoro", "Subukia", "Kuresoi"],
        "Nandi": ["Kapsabet", "Nandi Hills", "Mosoriot", "Chesumei", "Nandi", "Chepkumia"],
        "Narok": ["Narok", "Maasai Mara", "Nakuru", "Lolgorian", "Sekenani", "Kakunyu"],
        "Nyamira": ["Nyamira", "Kisii Town", "Boma", "Kegogi", "Kerina", "Mogonga"],
        "Nyandarua": ["Ol Kalou", "Ndaragwa", "Nyahururu", "Kiamwangi", "Gatimu", "Kipipiri"],
        "Nyeri": ["Nyeri", "Othaya", "Kangema", "Kieni", "Mathira", "Gatundu"],
        "Samburu": ["Maralal", "Baragoi", "Wamba", "Samburu", "Kapedo", "Ngutuk Ongiron"],
        "Siaya": ["Siaya", "Bondo", "Ugunja", "Alego", "Bondo Town", "Yala"],
        "Taita-Taveta": ["Voi", "Wundanyi", "Taveta", "Mwatate", "Wundanyi", "Mwatate"],
        "Tana River": ["Hola", "Garsen", "Tana Delta", "Bura", "Bura Town", "Witu"],
        "Tharaka Nithi": ["Chuka", "Tharaka", "Marimanti", "Ishiara", "Nkubu", "Kibirichia"],
        "Trans-Nzoia": ["Kitale", "Kiminini", "Saboti", "Trans-Nzoia", "Lelboin", "Endebess"],
        "Uasin Gishu": ["Eldoret", "Ziwa", "Moiben", "Kapsaret", "Kapseret", "Turbo"],
        "Vihiga": ["Vihiga", "Mango", "Chavakali", "Luanda", "Sabatia", "Hamisi"],
        "Wajir": ["Wajir", "Wajir South", "Wajir East", "Wajir North", "Wajir West", "Eldas"],
        "West Pokot": ["Kapenguria", "Kacheliba", "Sigor", "Pokot South", "Pokot North", "Makutano"],

        "Bafatá Region": ["Bafatá", "Gabu", "Piche", "Tite", "Varela"],
        "Bissau Region": ["Bissau", "Aguas", "Farim", "Bolama"],
        "Bolama Region": ["Bolama", "Bubaque", "Formosa", "Tombali"],
        "Oio Region": ["Bambadinca", "Farim", "Mansoa", "Oio"],
        "Tombali Region": ["Canchungo", "Tombali", "Tite", "Bafata"],
        
        "Beyla Region": ["Beyla", "Cissela", "Dinguiraye", "Faranah", "Kouroussa", "Labe", "Mali", "N'Zerekore"],
        "Boke Region": ["Boke", "Fria", "Kamsar", "Kita", "Labe", "Télimélé", "Tougué"],
        "Conakry Region": ["Conakry", "Kaloum", "Dixinn", "Matam", "Ratoma", "Cosa", "Kipé"],
        "Faranah Region": ["Faranah", "Dinguiraye", "Kouroussa", "Beyla", "Kissidougou", "Kankan", "Siguiri"],
        "Kankan Region": ["Kankan", "Kouroussa", "Siguiri", "Kissidougou", "Dinguiraye", "Faranah", "Beyla"],
        "Kerouane Region": ["Kerouane", "Dinguiraye", "Kissidougou", "Faranah", "Beyla", "Kankan", "Siguiri"],
        "Labe Region": ["Labe", "Télimélé", "Tougué", "Koubia", "Kissidougou", "Lola", "Mali"],
        "Mali Region": ["Mali", "Beyla", "Lola", "Kissidougou", "Faranah", "Dinguiraye", "Kankan"],
        "Nzerekore Region": ["Nzerekore", "Kissidougou", "Lola", "Beyla", "Dinguiraye", "Faranah", "Kankan"],

        "Adrar": ["Adrar", "In Salah", "Timimoun", "Reggane", "Tamanrasset"],
        "Chlef": ["Chlef", "Tiaret", "El Marsa", "El Asnam", "Oued Fodda"],
        "Laghouat": ["Laghouat", "Aflou", "Sidi Makhlouf", "Ksar El Hirane"],
        "Oum El Bouaghi": ["Oum El Bouaghi", "Ain Beida", "El Madher", "Khemissa"],
        "Batna": ["Batna", "Khenchela", "Arris", "Tazoult", "Menaa"],
        "Béjaïa": ["Béjaïa", "El Kseur", "Akbou", "Toudja", "El Madania"],
        "Biskra": ["Biskra", "El Kantara", "Sidi Okba", "Ourlal", "Bordj Bou Arréridj"],
        "Béchar": ["Béchar", "El Ouata", "Tindouf", "Ksar Ouled Sidi Cheikh"],
        "Blida": ["Blida", "Boufarik", "Khemis El Khechna", "El Affroun", "Chréa"],
        "Bouira": ["Bouira", "M'Chouneche", "Arouna", "El Hakem", "Lakhdaria"],
        "Tamanrasset": ["Tamanrasset", "In Guezzam", "In Salah", "Tinzouline"],
        "Tébessa": ["Tébessa", "El Etadham", "El Meridja", "Cheria"],
        "Tlemcen": ["Tlemcen", "El Abed", "Ghazaouet", "Nedroma", "Maghnia"],
        "Tiaret": ["Tiaret", "Tissemsilt", "Ksar Chellala", "Frenda"],
        "Tizi Ouzou": ["Tizi Ouzou", "Azazga", "Bougie", "Akbou", "El Kseur"],
        "Algiers": ["Algiers", "El Madania", "Kouba", "El Harrach", "El Mouradia"],
        "Djelfa": ["Djelfa", "Moudjebara", "El Idrissia", "Hassi El Djebar"],
        "Jijel": ["Jijel", "El Milia", "Setif", "Tizi Ouzou"],
        "Sétif": ["Sétif", "El Eulma", "Bir El Ater", "Ain Arnat"],
        "Saïda": ["Saïda", "Ain Sefra", "El Hadjira", "Boudouaou"],
        "Skikda": ["Skikda", "El Harrouch", "Oued Kebrit", "Berrahal"],
        "Sidi Bel Abbès": ["Sidi Bel Abbès", "El Khemis", "Moulay Slissen", "Tessala"],
        "Annaba": ["Annaba", "El Hadjar", "El Tarf", "Berrahal"],
        "Guelma": ["Guelma", "Ain Benbeida", "Khemis El Khechna"],
        "Constantine": ["Constantine", "El Khroub", "Ain Smara", "Hamma Bouziane"],
        "Médéa": ["Médéa", "El Oued", "El Ghrous", "Sidi Naamane"],
        "Mostaganem": ["Mostaganem", "Ain Tedles", "Kheir Eddine", "Sidi Lakhdar"],
        "M'sila": ["M'sila", "Ouled Djellal", "Mekhada", "Hassi Bounif"],
        "Mascara": ["Mascara", "El Bordj", "El Kseur", "Oued El Abtal"],
        "Ouargla": ["Ouargla", "Hassi Messaoud", "Touggourt", "El Hadjar"],
        "Oran": ["Oran", "El Madania", "Ain El Turck", "Bethioua"],
        "El Bayadh": ["El Bayadh", "Ksar es-S'id", "Ain Sefra", "Moulay Slissen"],
        "El Oued": ["El Oued", "Oum El Bouaghi", "Ksar el Kebir"],
        "El Tarf": ["El Tarf", "Ain El Arba", "El Kala"],
        "Tindouf": ["Tindouf", "Farsia", "Oum El Assel"],
        "Tissemsilt": ["Tissemsilt", "Khemis Miliana", "Theniat El Had"],
        
        "Bengo": ["Caxito", "Pango Aluquém", "Dande", "Bengo", "Nambuangongo"],
        "Benguela": ["Benguela", "Lobito", "Catumbela", "Ganda", "Caimbambo"],
        "Bié": ["Kuito", "Andulo", "Chinguar", "Camacupa", "Cuemba"],
        "Cabinda": ["Cabinda", "Belize", "Cacongo", "Tchiowa", "Tembo"],
        "Cuando Cubango": ["Menongue", "Cuito Cuanavale", "Cuchi", "Mavinga", "Rivungo"],
        "Cuanza Norte": ["Ndalatando", "Lucala", "Cambambe", "Golungo Alto", "Dembos"],
        "Cuanza Sul": ["Sumbe", "Seles", "Libolo", "Quibala", "Cacuso"],
        "Cunene": ["Ondjiva", "Cuanhama", "Curoca", "Cunene", "Namacunde"],
        "Huambo": ["Huambo", "Caála", "Londuimbali", "Chicala-Choloanga", "Bailundo"],
        "Huíla": ["Lubango", "Jamba", "Humpata", "Matala", "Chibia"],
        "Luanda": ["Luanda", "Viana", "Cazenga", "Belas", "Ingombota"],
        "Lunda Norte": ["Dundo", "Lucapa", "Lóvua", "Cuilo", "Caungula"],
        "Lunda Sul": ["Saurimo", "Cacolo", "Muconda", "Dala", "Saurimo"],
        "Malanje": ["Malanje", "Cacuso", "Luquembo", "Marimba", "Mucari"],
        "Moxico": ["Luena", "Cameia", "Léua", "Luau", "Camanongue"],
        "Namibe": ["Namibe", "Moçâmedes", "Tômbwa", "Vila Arriaga", "Lucira"],
        "Uíge": ["Uíge", "Sanza Pombo", "Negage", "Maio", "Quitexe"],
        "Zaire": ["Mbanza Kongo", "Soyo", "Tomboco", "Nzeto", "M'Banza Kongo"],

        "Alibori": ["Kandi", "Ségbana", "Banikoara", "Gaya", "Kalale"],
        "Atakora": ["Natitingou", "Tanguieta", "Kouande", "Péhunco", "Kouandé"],
        "Atlantique": ["Cotonou", "Ouidah", "Abomey-Calavi", "Sô-Ava", "Kpomassè"],
        "Borgou": ["Parakou", "Nikki", "Kalalé", "Kandi", "Pèrèrè"],
        "Collines": ["Dassa-Zoumé", "Savalou", "Savè", "Glazoué", "Sikècen"],
        "Donga": ["Djougou", "Porto-Novo", "Bembèrèkè", "Copargo", "Ouassa-Péhunco"],
        "Kouffo": ["Aplahoué", "Elavagnon", "Lalo", "Djidja", "Toviklin"],
        "Kouandé": ["Kouandé", "Nikki", "Gogounou", "Sinendé", "Bembèrèkè"],
        "Littoral": ["Cotonou", "Porto-Novo", "Ouidah", "Abomey-Calavi", "Sô-Ava"],
        "Mono": ["Dogo", "Bopa", "Grand-Popo", "Malanville", "Ouidah"],
        "Ouémé": ["Porto-Novo", "Adjohoun", "Agbado", "Sèmè-Podji", "Sô-Ava"],
        "Plateau": ["Ifangni", "Houéyogbé", "Kétou", "Malanville", "Pobè"],
        "Zou": ["Abomey", "Dassa-Zoumé", "Savalou", "Glazoué", "Sikècen"],

        "Central-Botswana": ["Palapye", "Serowe", "Mochudi", "Letlhakane", "Orapa", "Mahalapye", "Lobatse"],
        "Chobe": ["Kasane", "Savuti", "Sowa Town", "Maun", "Ngoma", "Ghoha Hills"],
        "Francistown": ["Francistown", "Tati Siding", "Tonota", "Selibe Phikwe", "Palapye"],
        "Gaborone": ["Gaborone", "Mochudi", "Tlokweng", "Ramotswa", "Mmopane", "Gabane"],
        "Ghanzi": ["Ghanzi", "D’Kar", "Kang", "Hukuntsi", "Sandveld"],
        "Kgalagadi": ["Kanye", "Tsabong", "Kgalagadi District", "Gakgatla", "Lokgwabe"],
        "Kgatleng": ["Mochudi", "Lephalae", "Bromhof", "Kgatleng District", "Pitseng"],
        "Kweneng": ["Kanye", "Mahalapye", "Mogoditshane", "Rakhuna", "Kweneng District"],
        "North East-Botswana": ["Kasane", "Sowa Town", "Maun", "Ngoma", "Ghoha Hills"],
        "North West-Botswana": ["Maun", "Ngamiland District", "Shakawe", "Tsau", "Ghanzi"],
        "Southern-Botswana": ["Lobatse", "Jwaneng", "Moshupa", "Gaborone", "Kanye"],
        "South East-Botswana": ["Gaborone", "Mochudi", "Tlokweng", "Ramotswa", "Mmopane"],

        "Boucle du Mouhoun": ["Dédougou", "Nouna", "Koro", "Toma", "Pella"],
        "Cascades": ["Banfora", "Solenzo", "Sikasso", "Loropéni", "Sindou"],
        "Centre": ["Ouagadougou", "Kaya", "Ziniaré", "Tenkodogo", "Koudougou"],
        "Centre-Est": ["Fada N'gourma", "Pama", "Mango", "Bagré", "Tenkodogo"],
        "Centre-Nord": ["Kaya", "Ouahigouya", "Yalgo", "Sakoula", "Dori"],
        "Centre-Ouest": ["Koudougou", "Dédougou", "Nouna", "Tougan", "Réo"],
        "Centre-Sud": ["Po", "Léo", "Orodara", "Bobo-Dioulasso", "Léo"],
        "Est": ["Fada N'gourma", "Pama", "Mango", "Bagré", "Tenkodogo"],
        "Hauts-Bassins": ["Bobo-Dioulasso", "Sorgho", "Houndé", "Orodara", "Nouna"],
        "Nord": ["Ouahigouya", "Kongoussi", "Yalgo", "Dori", "Bourzanga"],
        "Sahel": ["Dori", "Sebba", "Oursi", "Aribinda", "Manni"],
        "Sud-Ouest": ["Kangemi", "Orodara", "Léo", "Dano", "Nouna"],

        "Bubanza": ["Bubanza", "Musigati", "Gihanga"],
        "Bujumbura Mairie": ["Bujumbura"],
        "Bujumbura Rural": ["Isale", "Kabezi", "Mutambu", "Mugongo-Manga", "Mutimbuzi", "Nyabiraba"],
        "Bururi": ["Bururi", "Rumonge", "Matana", "Songa", "Vyanda"],
        "Cankuzo": ["Cankuzo", "Cendajuru", "Mishiha", "Gisagara"],
        "Cibitoke": ["Cibitoke", "Buganda", "Mabayi", "Murwi", "Bukinanyana", "Rugombo"],
        "Gitega": ["Gitega", "Itaba", "Makebuko", "Mutaho", "Ryansoro"],
        "Karuzi": ["Karuzi", "Buhiga", "Gitaramuka", "Nyabikere", "Shombo"],
        "Kayanza": ["Kayanza", "Butaganzwa", "Matongo", "Muhanga", "Muruta", "Rango"],
        "Kirundo": ["Kirundo", "Bwambarangwe", "Busoni", "Vumbi"],
        "Makamba": ["Makamba", "Mabanda", "Nyanza-Lac", "Vugizo", "Kibago"],
        "Muramvya": ["Muramvya", "Bukeye", "Mbuye", "Rutegama"],
        "Muyinga": ["Muyinga", "Gashoho", "Giteranyi", "Gasorwe"],
        "Mwaro": ["Mwaro", "Bisoro", "Gisozi", "Nyabihanga"],
        "Ngozi": ["Ngozi", "Kiremba", "Marangara", "Mwumba", "Tangara"],
        "Rumonge": ["Rumonge", "Bugarama", "Minago"],
        "Rutana": ["Rutana", "Giharo", "Gitanga", "Bukemba"],
        "Ruyigi": ["Ruyigi", "Butaganzwa", "Bweru", "Nyabitsinda", "Kinyinya"],

        "Adamawa-Cameroon": ["Ngaoundéré", "Tignère", "Meiganga", "Banyo", "Tibati"],
        "Centre-Cameroon": ["Yaoundé", "Mbalmayo", "Eseka", "Obala", "Akonolinga", "Bafia", "Mfou", "Nanga-Eboko"],
        "East-Cameroon": ["Bertoua", "Abong-Mbang", "Yokadouma", "Batouri", "Mindourou"],
        "Far North-Cameroon": ["Maroua", "Kousséri", "Mokolo", "Yagoua", "Kaélé"],
        "Littoral": ["Douala", "Nkongsamba", "Edea", "Loum", "Mbanga"],
        "North-Cameroon": ["Garoua", "Guider", "Figuil", "Pitoa", "Lagdo"],
        "Northwest-Cameroon": ["Bamenda", "Ndop", "Kumbo", "Wum", "Nkambe"],
        "South-Cameroon": ["Ebolowa", "Sangmélima", "Kribi", "Ambam", "Meyomessala"],
        "Southwest-Cameroon": ["Buea", "Limbe", "Kumba", "Mamfe", "Tiko"],
        "West-Cameroon": ["Bafoussam", "Dschang", "Foumban", "Bangangté", "Mbouda"],

        "Santo Antão": ["Porto Novo", "Ribeira Grande", "Ponta do Sol"],
        "São Vicente": ["Mindelo", "São Pedro", "Baía das Gatas"],
        "São Nicolau": ["Ribeira Brava", "Tarrafal de São Nicolau"],
        "Sal": ["Espargos", "Santa Maria", "Palmeira"],
        "Boa Vista": ["Sal Rei", "Rabil", "Bofareira"],
        "Maio": ["Vila do Maio", "Calheta", "Morro"],
        "Santiago": ["Praia", "Assomada", "Tarrafal", "Cidade Velha", "São Domingos"],
        "Fogo": ["São Filipe", "Mosteiros", "Cova Figueira"],
        "Brava": ["Nova Sintra", "Fajã de Água"],

        "Bamingui-Bangoran": ["Ndélé", "Bamingui"],
        "Bangui": ["Bangui"],
        "Basse-Kotto": ["Mobaye", "Alindao", "Kembé"],
        "Haut-Mbomou": ["Obo", "Zemio"],
        "Haute-Kotto": ["Bria", "Yalinga"],
        "Kémo": ["Sibut", "Dekoa"],
        "Lobaye": ["Mbaïki", "Boda", "Boganangone"],
        "Mambéré-Kadéï": ["Berbérati", "Carnot", "Gamboula"],
        "Mbomou": ["Bangassou", "Rafai"],
        "Nana-Grébizi": ["Kaga-Bandoro", "Grébizi"],
        "Nana-Mambéré": ["Bouar", "Baoro"],
        "Ombella-M'Poko": ["Bimbo", "Damara"],
        "Ouaka": ["Bambari", "Ippy"],
        "Ouham": ["Bossangoa", "Bouca"],
        "Ouham-Pendé": ["Bozoum", "Bocaranga"],
        "Sangha-Mbaéré": ["Nola", "Baye"],
        "Vakaga": ["Birao", "Ouanda Djallé"],

        "Batha": ["Ati", "Oum Hadjer"],
        "Borkou": ["Faya-Largeau", "Kirdimi"],
        "Chari-Baguirmi": ["Massenya", "Bousso"],
        "Guéra": ["Mongo", "Melfi"],
        "Hadjer-Lamis": ["Massakory", "N'Djamena Fara"],
        "Kanem": ["Mao", "Rig Rig"],
        "Lac": ["Bol", "Liwa"],
        "Logone Occidental": ["Moundou", "Doba"],
        "Logone Oriental": ["Doba", "Koumra"],
        "Mandoul": ["Sarh", "Bébédjia"],
        "Mayo-Kebbi Est": ["Bongor", "Gounou Gaya"],
        "Mayo-Kebbi Ouest": ["Pala", "Léré"],
        "Moyen-Chari": ["Sarh", "Kyabé"],
        "Ouaddaï": ["Abéché", "Adré"],
        "Salamat": ["Am Timan", "Abou-Deïa"],
        "Sila": ["Goz Beïda", "Am Dam"],
        "Tandjilé": ["Laï", "Kélo"],
        "Tibesti": ["Bardaï", "Zouar"],
        "Wadi Fira": ["Biltine", "Iriba"],
        "N'Djamena": ["N'Djamena"],

        "Grande Comore": ["Moroni", "Moutsamoudou", "Fomboni", "Iconi", "Ntsaouéni"],
        "Mohéli": ["Fomboni", "Litsambouillé", "Nioumachoua"],
        "Anjouan": ["Mutsamudu", "Hahaya", "Domoni", "Mramani", "Oichili"],
        "Maroni": ["Maroni"],

        "Abidjan": ["Abidjan"],
        "Bas-Sassandra": ["San Pedro", "Sassandra", "Tabou"],
        "Denguelé": ["Odienné", "Minignan", "Kani"],
        "Gôh": ["Gagnoa", "Ouragahio", "Zoukougbeu"],
        "Lacs": ["Yamoussoukro", "Daloa", "Toumodi"],
        "Lagunes": ["Abidjan", "Grand-Lahou", "Jacqueville"],
        "Marahoué": ["Bouaflé", "Didiévi", "M'bahiakro"],
        "Montagnes": ["Man", "Danané", "Séguéla"],
        "Savanes": ["Kong", "Ferkessédougou", "Nionko"],
        "Vallee du Bandama": ["Katiola", "Bongouanou", "N'Djibole"],
        "Woroba": ["Sikasso", "Ouangolodougou", "Korhogo"],
        "Zanzan": ["Bondoukou", "Bouna", "Tanda"],

        "Bandundu": ["Bandundu", "Kikwit", "Mweka", "Tshuapa"],
        "Bas-Uele": ["Buta", "Bondo", "Aketi"],
        "Haut-Lomami": ["Kamina", "Lualaba", "Kamituga"],
        "Haut-Uele": ["Isiro", "Dungu", "Aru"],
        "Ituri": ["Bunia", "Irumu", "Tchomia"],
        "Kasaï": ["Kananga", "Mbuji-Mayi", "Tshikapa"],
        "Kasaï-Central": ["Kananga", "Mbuji-Mayi", "Tshikapa"],
        "Kasaï-Oriental": ["Mbuji-Mayi", "Tshikapa", "Kamina"],
        "Katanga": ["Lubumbashi", "Kolwezi", "Kipushi"],
        "Kinshasa": ["Kinshasa"],
        "Kivu du Nord": ["Goma", "Beni", "Butembo"],
        "Kivu du Sud": ["Bukavu", "Uvira", "Fizi"],
        "Maniema": ["Sange", "Kindu", "Mwenga"],
        "Maï-Ndombe": ["Inongo", "Kikwit", "Mbandaka"],
        "Sankuru": ["Kamina", "Sankuru", "Kaniama"],
        "Tshopo": ["Wamba", "Kisangani", "Bondo"],
        "Tshuapa": ["Boende", "Lulingu", "Tshuapa"],
        "Tanganyika": ["Kalemie", "Manono", "Moba"],
        "Tshopo": ["Kisangani", "Wamba", "Bondo"],
        
        "Ali Sabieh": ["Ali Sabieh", "Day"],
        "Arta": ["Arta", "Chabelley"],
        "Dikhil": ["Dikhil", "Balho"],
        "Djibouti": ["Djibouti", "Heron"],
        "Obock": ["Obock", "Ras Sarda"],
        "Tadjourah": ["Tadjourah", "Tadjourah"],

        "Cairo": ["Cairo"],
        "Alexandria": ["Alexandria"],
        "Aswan": ["Aswan"],
        "Asyut": ["Asyut", "Manfalut", "Sahel Selim"],
        "Beheira": ["Damanhour", "Rosetta", "Kafr El Dawwar"],
        "Beni Suef": ["Beni Suef", "El Wasta", "Fayoum"],
        "Dakahlia": ["Mansoura", "Dikernis", "Belqas"],
        "Damietta": ["Damietta", "Ras El Bar", "Zarqa"],
        "Faiyum": ["Faiyum", "Tameiah", "Ibsheway"],
        "Gharbia": ["Tanta", "El Mahalla", "Kafr El Zayat"],
        "Giza": ["Giza", "6th October", "Dokki"],
        "Ismailia": ["Ismailia", "Qantara", "Fayed"],
        "Kafr El Sheikh": ["Kafr El Sheikh", "Desouk", "Rasheed"],
        "Minya": ["Minya", "Mallawi", "Samalut"],
        "Monufia": ["Shebin El Kom", "Menouf", "Sadat"],
        "New Valley": ["Kharga", "Dakhla", "Balat"],
        "North Sinai": ["Arish", "Rafah", "Sheikh Zuweid"],
        "Port Said": ["Port Said"],
        "Qalyubia": ["Benha", "Shibin El Kawm", "Kafr Shukr"],
        "Qena": ["Qena", "Luxor", "Nag Hammadi"],
        "Red Sea": ["Hurghada", "Safaga", "El Quseir"],
        "Sharqia": ["Zagazig", "El Hossainia", "Abu Kabir"],
        "Sohag": ["Sohag", "Tahta", "Juhayna"],
        "South Sinai": ["Sharm El Sheikh", "Dahab", "Nuweiba"],
        "Suez": ["Suez"],

        "Annobón": ["San Antonio de Palé"],
        "Bioko Norte": ["Malabo", "Luba", "Bikoro"],
        "Bioko Sur": ["Ebebiyin", "Aconibe", "Sangat"],
        "Centro Sur": ["Ngonam", "Evinayong", "Cogo"],
        "Kie-Ntem": ["Oyala", "Mengomeyén", "Akok"],
        "Litoral": ["Bata", "Mbini", "Ebebiyin"],
        "Wele-Nzas": ["Mongomo", "Mongomo", "Bata"],

        "Anseba": ["Keren", "Habero", "Akele Guzai"],
        "Central": ["Asmara", "Keren", "Mendefera"],
        "Debub": ["Mendefera", "Dige", "Adi Quala"],
        "Gash-Barka": ["Barentu", "Kerkebet", "Goluj"],
        "Maekel": ["Asmara", "Halhal", "Ginda"],
        "Northern Red Sea": ["Massawa", "Assab", "Badaa"],

        "Hhohho": ["Mbabane", "Lobamba", "Pigg's Peak", "Mhlambanyatsi"],
        "Lubombo": ["Siteki", "Big Bend", "Nhlangano", "Lomahasha"],
        "Manzini": ["Manzini", "Mbabane", "Mhlume", "Sidvokodvo"],
        "Shiselweni": ["Nhlangano", "Lusoti", "Vulindlela", "Nisela"],

        "Addis Ababa": ["Addis Ababa"],
        "Afar": ["Semera", "Eldera", "Asayita"],
        "Amhara": ["Bahir Dar", "Gondar", "Debre Markos", "Debre Birhan"],
        "Benishangul-Gumuz": ["Asosa", "Mao Komo", "Guba"],
        "Dire Dawa": ["Dire Dawa"],
        "Gambela": ["Gambela", "Metu"],
        "Harari": ["Harar", "Jigjiga"],
        "Oromia": ["Addis Ababa", "Adama", "Bishoftu", "Jimma", "Dessie"],
        "Sidama": ["Hawassa", "Yirgalem"],
        "Somali": ["Jigjiga", "Dolo"],
        "Southern Nations, Nationalities, and Peoples' Region (SNNPR)": ["Hawassa", "Arba Minch", "Wolaita Sodo"],
        "South West Ethiopia Peoples' Region": ["Mizan Teferi", "Bonga"],
        "Tigray": ["Mekelle", "Adigrat", "Shire"],

        "Estuaire": ["Libreville", "Owendo", "Ntoum"],
        "Haut-Ogooué": ["Franceville", "Mouila", "Bongoville"],
        "Moyen-Ogooué": ["Lébamba", "Fougamou", "Ndjolé"],
        "Ngounié": ["Gamba", "Mbigou", "Lébamba"],
        "Ogooué-Ivindo": ["Makokou", "Ovan", "Lékoko"],
        "Ogooué-Lolo": ["Leconi", "Omboué", "Ovan"],
        "Ogooué-Maritime": ["Port-Gentil", "Gamba", "Sogara"],
        "Woleu-Ntem": ["Mouila", "Minvoul", "Medouneu"],

        "Banjul": ["Banjul"],
        "Basse": ["Basse"],
        "Brikama": ["Brikama", "Faraba Banta", "Siffoe"],
        "Janjanbureh": ["Janjanbureh"],
        "Kerewan": ["Kerewan", "Soma"],
        "Mansakonko": ["Mansakonko", "Soma"],
        "Serekunda": ["Serekunda", "Latri Kunda", "Bakau"],

        "Alberta": ["Calgary", "Edmonton", "Red Deer", "Lethbridge", "St. Albert", "Medicine Hat", "Grande Prairie", "Airdrie", "Spruce Grove", "Leduc", "Lloydminster", "Fort Saskatchewan", "Chestermere", "Camrose", "Cold Lake", "Wetaskiwin", "Brooks", "Lacombe", "Beaumont"], 
        "British Columbia": ["Vancouver", "Victoria", "Surrey", "Burnaby", "Richmond", "Abbotsford", "Coquitlam", "Kelowna", "Langley", "Saanich", "Delta", "Kamloops", "Nanaimo", "Chilliwack", "Maple Ridge", "Prince George", "New Westminster", "Port Coquitlam", "North Vancouver", "West Vancouver", "Vernon", "Campbell River", "Penticton", "Port Moody", "Courtenay", "Fort St. John", "Cranbrook", "Terrace", "Parksville", "Quesnel"],
        "Manitoba": ["Winnipeg", "Brandon", "Steinbach", "Thompson", "Portage la Prairie", "Winkler", "Selkirk", "Dauphin", "Morden", "Flin Flon", "The Pas", "Virden", "Neepawa"], 
        "New Brunswick": ["Fredericton", "Saint John", "Moncton", "Dieppe", "Rothesay", "Quispamsis", "Bathurst", "Edmundston", "Miramichi", "Grand Bay-Westfield", "Campbellton", "St. Stephen", "Sussex", "Nackawic", "Woodstock", "Dalhousie", "Neguac", "Caraquet", "Saint Andrews", "Beresford", "Tracadie-Sheila", "Sackville", "Petitcodiac", "Bouctouche", "St. George", "Saint-Léonard", "Pointe-Verte", "Minto", "Riverview", "Hampton", "Gagetown", "Richibucto"],
        "Newfoundland and Labrador": ["St. John's", "Mount Pearl", "Corner Brook", "Conception Bay South", "Paradise", "Grand Falls-Windsor", "Gander", "Happy Valley-Goose Bay"],
        "Northwest Territories": ["Yellowknife", "Inuvik", "Hay River", "Fort Smith", "Behchokò", "Arctic Bay", "Aklavik", "Tuktoyaktuk", "Fort Simpson", "Norman Wells", "Wekweeti", "Gamètì", "Whati", "Łutselkʼe", "Sachs Harbour", "Paulatuk", "Fort Providence", "Trout Lake", "Rae Lakes"],
        "Nova Scotia": ["Halifax", "Dartmouth", "Sydney", "Truro", "New Glasgow", "Yarmouth", "Amherst", "Antigonish", "Kentville", "Bridgewater", "Wolfville", "Mahone Bay", "Lunenburg", "Pictou", "Arichat", "Baddeck", "Canso", "Louisbourg", "Westville", "Mulgrave"],
        "Nunavut": ["Iqaluit", "Rankin Inlet", "Arviat", "Clyde River", "Pangnirtung", "Kimmirut", "Igloolik", "Kugluktuk", "Baker Lake", "Hall Beach", "Qikiqtarjuaq", "Cape Dorset", "Gjoa Haven", "Grise Fiord", "Resolute", "Pond Inlet", "Sanikiluaq", "Tuktuyaqtuq", "Umingmaktok"],
        "Ontario": ["Toronto", "Ottawa", "Mississauga", "Brampton", "Hamilton", "London", "Markham", "Vaughan", "Kitchener", "Windsor", "Richmond Hill", "Oakville", "Burlington", "Guelph", "Thunder Bay", "St. Catharines", "Niagara Falls", "Waterloo", "Cambridge", "Kingston", "Peterborough", "Sarnia", "Belleville", "Brantford", "Sudbury", "North Bay", "Midland", "Sault Ste. Marie", "Orangeville", "Collingwood", "Stratford", "Tavistock", "Arnprior", "Carleton Place", "Cochrane", "Dryden", "Elliot Lake", "Fort Erie", "Huntsville", "Leamington", "Lindsay", "Muskoka", "Parry Sound", "Pembroke", "Petawawa", "Renfrew", "Sault Ste. Marie"],
        "Prince Edward Island": ["Charlottetown", "Summerside", "Montague", "Souris", "Cornwall", "Stratford", "Belfast", "Georgetown", "Albion", "West Royalty", "Morell", "St. Peters Bay", "Tignish"],
        "Quebec": ["Montreal", "Quebec City", "Laval", "Gatineau", "Longueuil", "Sherbrooke", "Trois-Rivières", "Drummondville", "Saint-Jérôme", "Saint-Jean-sur-Richelieu", "Granby", "Victoriaville", "Saint-Hyacinthe", "Boucherville", "Bromont", "Blainville", "Terrebonne", "Repentigny", "Saint-Lambert", "Châteauguay", "Sept-Îles", "Joliette", "Rimouski", "Baie-Comeau", "Sept-Îles", "Rouyn-Noranda", "Val-d'Or", "Alma", "Thetford Mines", "La Tuque", "Havre-Saint-Pierre", "Chibougamau", "Matane", "Sorel-Tracy"],
        "Saskatchewan": ["Saskatoon", "Regina", "Prince Albert", "Moose Jaw", "Swift Current", "Yorkton", "North Battleford", "Weyburn", "Estevan", "La Ronge", "Kindersley", "Melfort", "Humboldt", "Carrot River", "Tisdale", "Battleford", "Rosetown", "Melville", "Canora", "St. Walburg"],
        "Yukon": ["Whitehorse", "Dawson City", "Watson Lake", "Haines Junction", "Faro", "Carmacks", "Teslin", "Pelly Crossing", "Ross River", "Beaver Creek", "Burwash Landing", "Destruction Bay"],

        "Alabama": ["Birmingham", "Montgomery", "Mobile", "Huntsville", "Tuscaloosa", "Hoover", "Dothan", "Auburn", "Decatur", "Madison", "Florence", "Gadsden", "Prattville", "Opelika", "Anniston", "Selma", "Pelham", "Bessemer", "Alabaster", "Cullman", "Enterprise", "Mountain Brook", "Saraland", "Jasper", "Clanton", "Wetumpka", "Ozark", "Eufaula", "Talladega", "Fairfield", "Guntersville", "Limestone", "Centre", "Lauderdale", "Troy", "Hartselle", "Sylacauga", "Alexander City", "Demopolis", "Foley", "Helena", "Northport"], 
        "Alaska": ["Anchorage", "Juneau", "Fairbanks", "Wasilla", "Sitka", "Ketchikan", "Kenai", "Palmer", "Kodiak", "Bethel", "Homer", "Barrow", "Nome", "Seward", "Unalaska", "Soldotna", "Delta Junction", "Sand Point", "Dillingham", "Wrangell", "Petersburg", "Kodiak", "North Pole", "Gustavus", "Eagle River", "Valdez", "Cordova", "Haines", "Skagway", "McGrath"],
        "Arizona": ["Phoenix", "Tucson", "Mesa", "Chandler", "Scottsdale", "Glendale", "Gilbert", "Tempe", "Peoria", "Surprise", "Yuma", "Avondale", "Goodyear", "Flagstaff", "Buckeye", "Casa Grande", "Lake Havasu City", "Sierra Vista", "Maricopa", "Oro Valley", "Prescott", "Bullhead City", "Prescott Valley", "Queen Creek", "Florence", "San Luis", "Sahuarita", "El Mirage", "Kingman", "Apache Junction", "Douglas", "Nogales", "Sedona", "Globe", "Payson", "Coolidge", "Winslow", "Show Low", "Eloy", "Safford", "Fountain Hills", "Cave Creek", "Camp Verde", "Litchfield Park", "Chino Valley", "Page", "Dewey-Humboldt", "Snowflake", "Youngtown", "Willcox", "Tolleson"],
        "Arkansas": ["Little Rock", "Fort Smith", "Fayetteville", "Springdale", "Jonesboro", "Rogers", "Conway", "North Little Rock", "Bentonville", "Pine Bluff", "Hot Springs", "Benton", "Sherwood", "Texarkana", "Russellville", "Bella Vista", "Paragould", "Cabot", "Searcy", "Van Buren", "El Dorado", "West Memphis", "Maumelle", "Bryant", "Blytheville", "Forrest City", "Mountain Home", "Marion", "Camden", "Arkadelphia", "Magnolia", "Hope", "Harrison", "Helena-West Helena", "Wynne", "Malvern", "Clarksville", "Heber Springs", "Crossett", "Monticello", "Greenwood", "Mena", "Trumann", "Newport", "Osceola", "Batesville", "Stuttgart", "Beebe", "Warren", "De Queen"],
        "California": ["Los Angeles", "San Diego", "San Jose", "San Francisco", "Fresno", "Sacramento", "Long Beach", "Oakland", "Bakersfield", "Anaheim", "Santa Ana", "Riverside", "Stockton", "Chula Vista", "Irvine", "Fremont", "San Bernardino", "Modesto", "Oxnard", "Fontana", "Moreno Valley", "Huntington Beach", "Glendale", "Santa Clarita", "Garden Grove", "Oceanside", "Rancho Cucamonga", "Santa Rosa", "Ontario", "Elk Grove", "Corona", "Lancaster", "Palmdale", "Hayward", "Salinas", "Pomona", "Escondido", "Torrance", "Pasadena", "Fullerton", "Orange", "Roseville", "Visalia", "Concord", "Thousand Oaks", "Simi Valley", "Victorville", "Vallejo", "Berkeley", "Fairfield", "El Monte", "Carlsbad", "Temecula", "Murrieta", "Clovis", "Antioch", "Richmond", "Ventura", "Inglewood", "Santa Maria", "Daly City", "West Covina", "Norwalk", "San Mateo", "Rialto", "Burbank", "Downey", "El Cajon", "Vista", "Jurupa Valley", "Vacaville", "San Marcos", "Compton", "Menifee", "Tracy", "Hesperia", "Chico", "Carson", "Santa Monica", "Redding", "Mission Viejo", "San Leandro", "Redwood City", "Yuba City", "Alameda", "Livermore", "Bellflower", "Buena Park", "Hawthorne", "Lakewood", "Merced", "Napa", "Tustin", "Mountain View", "Chino", "Alhambra", "Indio", "Redlands", "Folsom", "Pleasanton", "Lynwood", "Union City", "Apple Valley", "Redondo Beach", "Lake Forest", "Upland", "Hemet", "Perris", "El Centro", "Laguna Niguel", "San Ramon", "Turlock", "Rancho Cordova", "Citrus Heights", "La Habra", "Encinitas", "Paramount", "Culver City", "Azusa", "Yorba Linda", "Monterey Park", "Pittsburg", "Walnut Creek", "Arcadia", "South Gate", "San Clemente", "Laguna Hills", "Poway", "South San Francisco", "Lompoc", "Baldwin Park", "Ceres", "La Mesa", "Cathedral City", "National City", "Colton", "Manteca", "San Rafael", "Dublin", "Monrovia", "Cupertino", "Gardena", "Rocklin", "Petaluma", "Hanford", "Bell Gardens", "San Jacinto", "Rancho Palos Verdes", "La Puente", "Paramount", "Madera", "Cerritos", "Highland", "Santee", "Porterville", "Rosemead", "San Gabriel", "Camarillo", "Coachella", "Pico Rivera", "Montebello", "San Luis Obispo", "Lodi", "Palm Desert", "Santa Barbara", "Chino Hills", "Lake Elsinore", "Florence-Graham", "Danville", "Atascadero", "Perris"],         "Colorado": ["Denver", "Colorado Springs", "Aurora", "Fort Collins", "Boulder", "Greeley", "Pueblo", "Castle Rock", "Littleton", "Englewood"],
        "Connecticut": ["Bridgeport", "New Haven", "Stamford", "Hartford", "Waterbury", "Norwalk", "Danbury", "New Britain", "West Hartford", "Greenwich", "Bristol", "Meriden", "Milford", "West Haven", "Middletown", "Norwich", "Shelton", "Torrington", "New London", "Ansonia", "Derby", "Groton", "Windsor", "Mansfield", "Naugatuck", "South Windsor", "East Hartford", "Farmington", "Enfield", "Cheshire", "Southington", "Wallingford", "Glastonbury", "Newington", "Stonington", "East Haven", "Darien", "New Canaan", "Monroe", "Simsbury", "Trumbull", "Fairfield", "New Milford", "Bethel", "Watertown", "Wethersfield", "Ridgefield", "Wolcott", "Plainville", "Windsor Locks", "Berlin", "Rocky Hill", "Woodbridge", "Cromwell", "Canton", "East Lyme", "Branford", "Ellington", "Brookfield", "North Haven", "Tolland", "Weston", "Easton", "Colchester", "Avon", "Old Saybrook", "Orange", "Madison", "Killingly", "Coventry", "Marlborough", "Willimantic", "Seymour", "Haddam", "Putnam", "Litchfield", "Thomaston", "Killingworth", "New Fairfield", "North Branford", "Woodbury"],
        "Delaware": ["Wilmington", "Dover", "Newark", "Middletown", "Smyrna", "Milford", "Seaford", "Georgetown", "Elsmere", "New Castle", "Lewes", "Rehoboth Beach", "Harrington", "Camden", "Laurel", "Claymont", "Millsboro", "Milton", "Selbyville", "Bridgeville", "Delmar", "Townsend", "Dagsboro", "Greenwood", "Felton", "Cheswold", "Dewey Beach", "Bethany Beach", "Fenwick Island", "Ocean View", "Blades", "Houston", "Arden", "Farmington", "Ellendale", "Bowers", "South Bethany", "Slaughter Beach", "Woodside", "Bethel", "Little Creek", "Leipsic", "Viola", "Hartly", "Ardentown"],
        "Florida": ["Jacksonville", "Miami", "Tampa", "Orlando", "St. Petersburg", "Hialeah", "Tallahassee", "Fort Lauderdale", "Port St. Lucie", "Cape Coral", "Pembroke Pines", "Hollywood", "Miramar", "Gainesville", "Coral Springs", "Clearwater", "Palm Bay", "Miami Gardens", "Pompano Beach", "West Palm Beach", "Lakeland", "Davie", "Miami Beach", "Deltona", "Plantation", "Sunrise", "Boca Raton", "Largo", "Melbourne", "Fort Myers", "Palm Coast", "Boynton Beach", "Lauderhill", "Weston", "Kissimmee", "Homestead", "Delray Beach", "Tamarac", "Daytona Beach", "North Miami", "Wellington", "North Port", "Jupiter", "Ocala", "Port Orange", "Sanford", "Margate", "Coconut Creek", "Pensacola", "Bradenton", "Sarasota", "Bonita Springs", "Pinellas Park", "Apopka", "Altamonte Springs", "Coral Gables", "Winter Haven", "Deerfield Beach", "Titusville", "Plant City", "Palm Beach Gardens", "Dunedin", "Winter Park", "Rockledge", "Fort Pierce", "North Lauderdale", "Ormond Beach", "Ocoee", "Cutler Bay", "Greenacres", "Hallandale Beach", "Royal Palm Beach", "St. Cloud", "Oviedo", "Oakland Park", "Winter Springs", "Clermont", "Sanibel", "Doral", "Lake Worth Beach", "Palmetto Bay", "Altamonte Springs", "Temple Terrace", "Parkland", "Crestview", "Miami Lakes", "Riviera Beach", "Aventura", "Maitland", "Bartow", "Panama City", "Lake Wales", "Key West", "Florida City", "Venice", "Zephyrhills", "Marco Island", "Haines City", "Port St. Joe", "Sebastian", "Fernandina Beach", "Belle Glade", "Lady Lake", "Mount Dora", "Perry", "Tavares", "Stuart", "Eustis", "Wildwood", "Callaway", "Vero Beach", "Lake City", "Oldsmar", "Marianna", "Live Oak", "Palatka", "Punta Gorda", "Fort Walton Beach", "Niceville", "Gulf Breeze", "Holly Hill", "Cocoa Beach", "Alachua", "Gulfport", "Chipley", "St. Augustine", "Green Cove Springs", "Key Biscayne", "Surfside", "Bay Harbor Islands", "Naples", "South Miami", "Bal Harbour", "Glen Ridge", "Yankeetown"],
        "Georgia": ["Atlanta", "Augusta", "Columbus", "Macon", "Savannah", "Athens", "Sandy Springs", "Roswell", "Johns Creek", "Warner Robins", "Albany", "Alpharetta", "Marietta", "Smyrna", "Valdosta", "Brookhaven", "Dunwoody", "Peachtree Corners", "Gainesville", "Newnan", "Rome", "East Point", "Milton", "Hinesville", "Dalton", "Douglasville", "Kennesaw", "LaGrange", "Statesboro", "Lawrenceville", "Griffin", "Carrollton", "Woodstock", "Canton", "McDonough", "Acworth", "Cartersville", "Union City", "Decatur", "Snellville", "Sugar Hill", "Stockbridge", "Forest Park", "Pooler", "Martinez", "Dallas", "Duluth", "Loganville", "St. Marys", "Thomasville", "Suwanee", "Brunswick", "Riverdale", "Powder Springs", "Milledgeville", "Tifton", "Fayetteville", "Norcross", "Calhoun", "College Park", "Waycross", "Americus", "Covington", "Perry", "Grayson", "Douglas", "Fort Valley", "Vidalia", "Winder", "Chamblee", "Fairburn", "Kingsland", "Moultrie", "Lilburn", "Jesup", "Lovejoy", "Cordele", "Dublin", "Bainbridge", "Richmond Hill", "Stone Mountain", "Doraville", "Cedartown", "Conyers", "Bremen", "Swainsboro", "Blakely", "Thomaston", "Eatonton", "Barnesville", "Cairo", "Commerce", "Baxley", "Elberton", "Hartwell", "Waynesboro", "Hogansville", "Sylvester", "Jackson", "Sandersville", "Hazlehurst", "Fort Oglethorpe", "LaFayette", "Lyons", "Metter", "Greensboro", "Darien", "Sylvania", "Louisville", "Blairsville", "Thomson", "Alma", "Toccoa", "Monroe", "Jesup", "Tallapoosa", "Camilla", "Lumpkin", "Hinesville", "Fitzgerald", "Chatsworth", "Springfield", "Manchester", "Claxton", "Hawkinsville", "Lincolnton", "Mount Vernon", "Ashburn", "Reidsville", "Hampton", "Cuthbert", "Dawson", "Greenville", "Fort Gaines", "Ludowici", "Lakeland", "Crawfordville", "Wrightsville", "Roberta", "Pembroke", "Folkston", "Homerville", "Vienna", "Ashburn", "Gibson", "Ocilla", "Clayton", "Hiawassee", "Carnesville", "Franklin", "Swainsboro", "Summerville", "Cleveland", "Monticello", "Madison", "Lincolnton", "Lavonia", "Nahunta", "Dillard"],
        "Hawaii": ["Honolulu", "Hilo", "Kailua", "Kapolei", "Kaneohe", "Pearl City", "Waipahu", "Mililani", "Ewa Beach", "Lahaina", "Kahului", "Kihei", "Makakilo", "Waianae", "Wailuku", "Wahiawa", "Aiea", "Lihue", "Kapaʻa", "Koloa", "Princeville", "Haiku", "Pukalani", "Lanai City", "Kualapuu", "Maunaloa", "Hawi", "Pahala", "Naalehu", "Volcano", "Honokaa", "Kamuela", "Pahoa", "Keaau", "Mountain View", "Papaikou", "Pepeekeo", "Laupahoehoe", "Paauilo", "Hakalau", "Holualoa", "Honaunau", "Captain Cook", "Kealakekua", "Kailua-Kona", "Waikoloa Village", "Kamuela", "Ocean View", "Pahoa", "Waianae", "Haleiwa", "Laie", "Hauula", "Kaaawa", "Waialua", "Kahuku", "Kaneohe Station", "Schofield Barracks", "Kilauea", "Hanapepe", "Kalaheo", "Anahola", "Kapaa", "Hanalei", "Kealia", "Makawao", "Paia", "Puunene", "Hana", "Kula", "Wailuku", "Kahului", "Maalaea", "Lahaina", "Napili-Honokowai", "Kaanapali", "Lanai City", "Molokai", "Kaunakakai", "Kalaupapa", "Hana", "Puunene"],
        "Idaho": ["Boise", "Nampa", "Meridian", "Idaho Falls", "Pocatello", "Caldwell", "Coeur d'Alene", "Twin Falls", "Lewiston", "Post Falls", "Rexburg", "Mountain Home", "Eagle", "Sandpoint", "Moscow", "Hailey", "Ketchum", "Driggs", "Ammon", "Chubbuck", "Ponderay", "Rathdrum", "Blackfoot", "Fruitland", "Payette", "Weiser", "Gooding", "Jerome", "Sun Valley", "Moscow", "McCall", "Cascade", "St. Maries", "Bonners Ferry", "Kuna", "American Falls", "Salmon", "Shelley", "Sandpoint", "Eagle", "Star", "Emmett", "Teton", "Iona", "Tetonia", "Clearwater", "Weston", "Malad City", "Donnelly", "New Meadows", "Homedale", "Harrison", "Driggs", "Ririe", "Glen's Ferry", "Cascade", "Soda Springs", "Bear Lake", "Pine", "Cedar", "Junction", "Kamiah"],
        "Illinois": ["Chicago", "Aurora", "Naperville", "Joliet", "Elgin", "Peoria", "Waukegan", "Cicero", "Champaign", "Bloomington", "Decatur", "Evanston", "Schaumburg", "Arlington Heights", "Skokie", "Des Plaines", "Orland Park", "Tinley Park", "Oak Lawn", "Berwyn", "Mount Prospect", "Palatine", "Downers Grove", "Carol Stream", "Oak Brook", "Urbana", "Glenview", "Hoffman Estates", "Bolingbrook", "Wheaton", "Normal", "Romeoville", "Lombard", "Elmhurst", "Naperville", "Champaign", "Rockford", "Quincy", "Alton", "Peoria Heights", "Galesburg", "Moline", "East St. Louis", "Cairo", "Belleville", "Collinsville", "Carbondale", "Macomb", "Jerseyville", "Canton", "Lincoln", "Centralia", "Effingham", "Olney", "Mattoon", "Granite City", "Charleston", "Salem", "Wood River", "Kankakee", "Taylorville", "Benton", "Mount Vernon", "Murrayville", "Harrisburg", "Benton", "Sesser", "Carterville", "Herrin", "Sparta", "Tuscola", "Altamont", "Norris City", "Shiloh", "Grayville", "St. Joseph", "DeKalb", "Chenoa", "Clinton", "Roanoke", "Pana", "Petersburg", "Shelbyville", "Williamsville", "Mason City", "Cuba", "Champaign", "Gibson City", "Tuscola", "New Berlin", "Mount Sterling", "Eldorado", "Mason City", "Roodhouse", "Virden", "Harrisburg", "Benton", "Saline", "Cairo", "Cairo", "East Alton", "Centralia", "Maroa", "Greenville", "Lincoln", "Nokomis", "Red Bud", "Marion", "Elkhart"],
        "Indiana": ["Indianapolis", "Fort Wayne", "Evansville", "South Bend", "Carmel", "Fishers", "Bloomington", "Muncie", "Terre Haute", "Gary", "Noblesville", "Greenwood", "Westfield", "Anderson", "Columbus", "Elkhart", "Kokomo", "Lafayette", "Jeffersonville", "Valparaiso", "Michigan City", "Indianapolis", "Zionsville", "Brownsburg", "Plainfield", "Logansport", "Hobart", "La Porte", "Greenfield", "Shelbyville", "Richmond", "New Albany", "Plymouth", "Martinsville", "Mooresville", "Crawfordsville", "Decatur", "Nappanee", "Boonville", "Princeton", "Vincennes", "Rensselaer", "Wabash", "North Vernon", "Winamac", "Bainbridge", "Linton", "Greensburg", "North Manchester", "Batesville", "Brookville", "Huntingburg", "Rushville", "Scottsburg", "Warsaw", "Cedar Lake", "Dyer", "Schererville", "St. John", "Crown Point", "Lowell", "Hebron", "Gary", "East Chicago", "Whiting", "Highland", "Portage", "Valparaiso", "Michigan City", "La Porte", "Knox", "Monticello", "Winfield", "Hammond", "Schererville", "Griffith", "Demotte", "Lake Station", "Oak Brook", "Southport", "Lakewood Park", "Valparaiso", "New Haven", "New Whiteland", "Greenwood", "Fishers", "Lawrence", "Speedway", "Mooresville", "Pendleton", "Greenfield", "Shelbyville", "Whiteland", "Lapel", "Columbus", "Edinburgh", "Elwood", "Alexandria", "Fairmount", "Bluffton", "Wells County", "Decatur", "Berne", "Geneva", "Montpelier", "Ridgeville", "Winamac", "Osgood", "Milan", "Rising Sun", "Vevay", "Aurora", "Greensburg", "Versailles", "Dillsboro", "Lawrenceburg", "Osgood", "North Vernon", "Vincennes", "Princeton", "Boonville", "Henderson", "Tell City", "Seymour", "Jacksonville", "Ferdinand", "Santa Claus", "Jasper", "Huntingburg", "Petersburg", "Dugger", "Linton"],
        "Iowa": ["Des Moines", "Cedar Rapids", "Davenport", "Sioux City", "Waterloo", "Iowa City", "Ames", "West Des Moines", "Council Bluffs", "Ankeny", "Cedar Falls", "Marshalltown", "Burlington", "Fort Dodge", "Urbandale", "Newton", "Mason City", "Clinton", "Ottumwa", "Indianola", "Encampment", "Keokuk", "Storm Lake", "Grinnell", "Monticello", "Atlantic", "Pella", "Boone", "Washington", "Clarinda", "Oskaloosa", "Harlan", "Perry", "West Burlington", "Creston", "Cherokee", "Charles City", "Humboldt", "Coralville", "North Liberty", "Hiawatha", "Eldridge", "Sully", "Maquoketa", "Lamoni", "Osceola", "Dubuque", "Columbus Junction", "Vinton", "Denison", "Red Oak", "Waukee", "Carlisle", "Altoona", "Dewitt", "Sigourney", "Keosauqua", "Fairfield", "Eldora", "Mediapolis", "Bettendorf", "Griswold", "Hudson", "Tama", "Manning", "Le Mars", "Northwood", "Clarion", "Bancroft", "South Sioux City", "Sheldon", "Ida Grove", "Glenwood", "Holstein", "Eagle Grove", "Red Oak", "Waverly", "Pocahontas", "Lake City", "Cedar Rapids", "Sioux Center", "Eldora", "Guthrie Center", "Waukon", "Keokuk", "Grinnell", "West Liberty", "Le Mars", "Stanton", "Walnut", "Atlantic", "Manchester", "Onawa", "Norwalk", "Maquoketa", "Shenandoah", "Cass County", "Schleswig", "Van Meter", "Dysart"],
        "Kansas": ["Wichita", "Overland Park", "Kansas City", "Olathe", "Topeka", "Lawrence", "Shawnee", "Lenexa", "Manhattan", "Salina", "Hutchinson", "Gardner", "Leavenworth", "Emporia", "Dodge City", "Great Bend", "Andover", "Russell", "Liberal", "Hays", "Wellington", "Hiawatha", "Pratt", "Colby", "McPherson", "Atchison", "Fort Scott", "Chanute", "Junction City", "Oakley", "Norton", "Garden City", "El Dorado", "Baxter Springs", "Winfield", "Pittsburg", "Abilene", "Eureka", "Coffeyville", "Columbus", "Larned", "Horton", "Leoti", "Mound City", "Oswego", "Marysville", "Plainville", "Pratt", "Russell", "Haysville", "Clay Center", "St. Marys", "Sabetha", "Sedan", "Scott City", "Kingman", "Perry", "Belleville", "Holton", "Dighton", "Hesston", "Beloit", "Hiawatha", "Yates Center", "Rolla", "Oskaloosa", "Edwardsville", "Eudora", "Garnett", "Lyndon", "Syracuse", "Johnson City", "Arkansas City", "Westwood", "Haysville", "Lindsborg", "Sylvan Grove", "St. John", "Alton", "Axtell", "La Cygne", "Scandia", "Holt", "Lyndon", "Leavenworth", "Osage City", "Moscow", "Maple Hill", "Lincoln Center", "Grainfield", "Ellis", "Gove City", "Moscow", "Norwich", "Spearville", "Cunningham"],
        "Kentucky": ["Louisville", "Lexington", "Bowling Green", "Owensboro", "Covington", "Hopkinsville", "Independence", "Richmond", "Elizabethtown", "Frankfort", "Georgetown", "Paducah", "Florence", "Ashland", "Jackson", "Shelbyville", "Berea", "Harlan", "Paris", "Madisonville", "Somerset", "Campbellsville", "Pikeville", "Carrollton", "La Grange", "Bardstown", "Cynthiana", "Erlanger", "Maysville", "Mount Sterling", "Danville", "Perryville", "Washington", "Princeton", "Morganfield", "Whitesburg", "Hindman", "Jenkins", "Hazard", "Louisa", "Russell", "Vanceburg", "Morehead", "Fort Thomas", "Fort Mitchell", "Edgewood", "Florence", "Newport", "Cold Spring", "Dry Ridge", "Auburn", "Madison", "Middlesboro", "Lynch", "Williamsburg", "Stanford", "Mount Vernon", "London", "Laurel", "Salyersville", "Hazard", "Harlan", "Pikeville", "Eubank", "Barbourville", "Campbellsville", "Elkton", "Falmouth", "Gallatin", "Glasgow", "Hickman", "Jackson", "Mason", "Mayfield", "Owenton", "Salyersville", "Taylorsville", "Waddy", "Wilmore", "Berea", "Burgin", "Carlisle", "Centertown", "Clay", "Flemingsburg", "Hazard", "Kenton", "Lawrenceburg", "Lebanon", "Munfordville", "Owenton", "Wurtland", "Zion Hill", "Laurel", "Jeffersontown", "Richwood", "Vine Grove"],
        "Louisiana": ["New Orleans", "Baton Rouge", "Shreveport", "Metairie", "Lafayette", "Lake Charles", "Kenner", "Bossier City", "Slidell", "Monroe", "Alexandria", "Houma", "Ruston", "Central", "Gretna", "Natchitoches", "Zachary", "Pineville", "Mandeville", "Thibodaux", "Bastrop", "Sulphur", "Morgan City", "Bogalusa", "Franklin", "Plaquemine", "Luling", "Vidalia", "LaPlace", "Jena", "Rayville", "Coushatta", "Deridder", "DeQuincy", "Winnfield", "Eunice", "Natchitoches", "New Roads", "Vinton", "Delcambre", "Opelousas", "Bossier City", "Baton Rouge", "Covington", "Lafayette", "Alexandria", "Hammond", "Moss Bluff", "Scott", "Youngsville", "West Monroe", "East Baton Rouge", "Chalmette", "Destrehan", "Donaldsonville", "Jeanerette", "Lafourche", "Harahan", "Kenner", "Marrero", "Waggaman", "Belle Chasse", "Gretna", "Saint Rose", "Kenner", "Sunset", "Vernon", "Mamou", "Crowley", "Lafayette", "Cameron", "Benton", "Oakdale", "Epps", "Tallulah", "Clinton", "Homer", "Bernice", "Logansport", "Baker", "Patterson", "Carencro", "Cottonport", "Epps", "Lecompte", "Basile", "St. Martinville", "Homer", "Labadieville", "Grosse Tête", "Amite City", "Colfax", "Haughton", "Harrisonburg", "Hester", "Montpelier", "Plaquemine", "Saint Martinville", "New Iberia", "Sarepta", "Grambling", "Minden", "Clinton", "Bunkie"],
        "Maine": ["Portland", "Lewiston", "Bangor", "South Portland", "Auburn", "Biddeford", "Sanford", "Saco", "Westbrook", "Augusta", "Waterville", "Ellsworth", "Brunswick", "Scarborough", "Kennebunk", "Bath", "Houlton", "Presque Isle", "Machias", "Caribou", "Orono", "Gorham", "Old Orchard Beach", "Sagadahoc", "Falmouth", "Belfast", "North Yarmouth", "Gray", "Harrison", "York", "Damariscotta", "Standish", "South Berwick", "Rockland", "Wells", "Freeport", "Bridgton", "Newport", "Bangor", "Limerick", "Glenburn", "Eastport", "Ellsworth", "Norway", "South China", "Lincoln", "Richmond", "China", "Windham", "Harrison", "Belgrade", "Auburn", "Pittsfield", "Kittery", "Portland", "Lyman", "Shapleigh", "Topsham", "Sabattus", "Monmouth", "Pownal", "Cumberland", "Woolwich", "Vassalboro", "Turner", "Westbrook", "South Portland", "Dover-Foxcroft", "Bucksport", "South Portland", "Old Orchard Beach", "Milbridge", "Castine", "Harrington", "Lamoine", "Franklin", "Alfred", "Jay", "Hermon", "Buxton", "Springvale", "Saco", "Gorham", "Naples", "Oakland", "Bar Harbor", "Milo", "Cornish", "Mount Desert", "Sanford"],
        "Maryland": ["Baltimore", "Frederick", "Gaithersburg", "Rockville", "Bowie", "Hagerstown", "Annapolis", "Salisbury", "Laurel", "Ellicott City", "Columbia", "Silver Spring", "Hyattsville", "Greenbelt", "Westminster", "Cumberland", "Bel Air", "Mount Airy", "Owings Mills", "Parkville", "Randallstown", "Dundalk", "Waldorf", "Edgewood", "Aberdeen", "Germantown", "Sykesville", "Rosedale", "Pikesville", "Severna Park", "Easton", "Cambridge", "Chestertown", "La Plata", "Havre de Grace", "Elkton", "Marlow Heights", "Middletown", "North Bethesda", "South Laurel", "Suitland", "Clinton", "Largo", "Denton", "Solomons", "Queenstown", "Bladensburg", "New Carrollton", "Fruitland", "Ocean City", "Perry Hall", "Salisbury", "Timonium", "Bowie", "Elkridge", "Laurel", "Churchville", "Beltsville", "Hunt Valley", "Glen Burnie", "Potomac", "Towson", "Chevy Chase", "Mount Rainier", "Catoctin", "Brunswick", "Eldersburg", "Forest Hill", "Woodlawn", "Riviera Beach", "Brooklyn Park", "Owings Mills", "Windsor Mill", "Parkton", "Baltimore Highlands", "Greenwood", "Elkridge", "Perryville", "Bowie", "Upper Marlboro"],
        "Massachusetts": ["Boston", "Worcester", "Springfield", "Cambridge", "Lowell", "Brockton", "Quincy", "Lynn", "Fall River", "Newton", "Somerville", "Lawrence", "Framingham", "Haverhill", "Malden", "Medford", "Taunton", "Chicopee", "Revere", "Westfield", "Pittsfield", "Fitchburg", "Waltham", "Beverly", "Plymouth", "Chelmsford", "Northampton", "Milford", "Braintree", "Everett", "Leominster", "Salem", "Weymouth", "Burlington", "Hingham", "Arlington", "Danvers", "Shrewsbury", "Andover", "Woburn", "Hudson", "Gardner", "Westborough", "Belmont", "Somerville", "Ashland", "Saugus", "Sudbury", "Needham", "Natick", "Tewksbury", "Wrentham", "Methuen", "Franklin", "Hopkinton", "Swampscott", "West Newton", "North Andover", "Middleton", "Dracut", "Wilmington", "Holliston", "Winthrop", "Westfield", "Sharon", "Millis", "Northbridge", "Southbridge", "South Hadley", "Ashby", "Amesbury", "Gloucester", "Boxborough", "Sudbury", "Milton", "Carlisle", "Wilmington", "Hopkinton", "Hudson", "Plymouth", "Lynnfield", "Weston", "Wayland", "Groton", "Bellingham", "Dunstable", "Lancaster", "Wachusett", "Harvard", "Rochester", "Grafton", "Foxborough", "Belmont", "Haverhill", "Dighton", "Bridgewater", "Westwood", "Marshfield", "Scituate", "Norwell", "Hull", "Milton", "Beverly", "North Reading", "Somerset", "Newburyport"],
        "Michigan": ["Detroit", "Grand Rapids", "Warren", "Sterling Heights", "Lansing", "Ann Arbor", "Flint", "Dearborn", "Livonia", "Westland", "Troy", "Farmington Hills", "Kalamazoo", "Wyoming", "Southfield", "Rochester Hills", "Taylor", "Pontiac", "Traverse City", "Saginaw", "Midland", "Jackson", "East Lansing", "Muskegon", "Portage", "Royal Oak", "Bloomfield Township", "Benton Harbor", "Adrian", "Alpena", "Cadillac", "Cheboygan", "Coldwater", "Corunna", "Davison", "Detroit Lakes", "Fenton", "Flushing", "Greenville", "Holly", "Holland", "Ionia", "Lapeer", "Ludington", "Mason", "Mount Pleasant", "Owosso", "Plymouth", "Sandusky", "St. Clair Shores", "Wixom", "Zeeland", "Bad Axe", "Charlevoix", "Clio", "Escanaba", "Iron Mountain", "Kingsford", "Manistique", "Marquette", "Menominee", "Negaunee", "Rogers City", "Sault Ste. Marie", "St. Joseph", "Tawas City", "Whitehall", "Alpena", "Cadillac", "Caro", "Coldwater", "Carleton", "Ellsworth", "Empire", "Grayling", "Harrison", "Houghton", "Kalkaska", "Kewadin", "Laingsburg", "New Baltimore", "Pinckney", "Saranac", "South Haven", "Vicksburg", "Wayland", "Waterford", "Clinton Township", "Rochester", "West Bloomfield", "Harper Woods", "Inkster"],
        "Minnesota": ["Minneapolis", "Saint Paul", "Rochester", "Duluth", "Bloomington", "Brooklyn Park", "Plymouth", "Eagan", "Woodbury", "Coon Rapids", "Burnsville", "Minnetonka", "Apple Valley", "Lakeville", "Edina", "Blaine", "Minnesota City", "Shakopee", "Moorhead", "Maple Grove", "Roseville", "Owatonna", "Eden Prairie", "Andover", "Prior Lake", "Saint Cloud", "Bemidji", "Albert Lea", "Faribault", "Hastings", "Northfield", "Stillwater", "Grand Rapids", "Anoka", "Golden Valley", "Hibbing", "International Falls", "Jasper", "Kasson", "Lino Lakes", "Montevideo", "Mound", "New Ulm", "Red Wing", "Rogers", "Sauk Rapids", "Winona", "Waconia", "Willmar", "Aitkin", "Bagley", "Cedar", "Chaska", "Columbia Heights", "Crookston", "Dodge Center", "Fergus Falls", "Grand Marais", "Hutchinson", "Isanti", "Kimball", "Litchfield", "Mankato", "Moorhead", "Morris", "New Prague", "Paynesville", "Redwood Falls", "Renville", "Rochester", "Rush City", "Silver Bay", "South St. Paul", "Thief River Falls", "Wabasha", "Waseca", "Winthrop", "Chisholm", "Hastings", "Jordan", "Little Falls", "Pine City", "Walker", "West St. Paul", "Winsted"],
        "Mississippi": ["Jackson", "Gulfport", "Biloxi", "Southaven", "Hattiesburg", "Meridian", "Olive Branch", "Horn Lake", "Pearl", "Madison", "Natchez", "Brandon", "D'Iberville", "Columbus", "Brookhaven", "Laurel", "Clinton", "Ridgeland", "Indianola", "Pass Christian", "Moss Point", "Batesville", "Tupelo", "Starkville", "Greenville", "Greensboro", "Cleveland", "Waynesboro", "Ocean Springs", "Pascagoula", "Forest", "Bay St. Louis", "McComb", "Petal", "Holly Springs", "Ripley", "West Point", "Nettleton", "Carrollton", "Calhoun City", "Myrtle", "Booneville", "Iuka", "Shannon", "Taylorsville", "Kosciusko", "Louisville", "Drew", "Pelahatchie", "Ruleville", "Sumrall", "Senatobia", "Poplarville", "Bogue Chitto", "Wiggins", "Durant", "Canton", "Doddsville", "Eupora", "Durant", "Leakesville", "Marks", "Mantee", "McAdams", "Benton", "Rosedale", "Leland", "Byhalia", "Sledge", "Hernando", "Senatobia", "Lucedale", "Southaven"],
        "Missouri": ["Kansas City", "St. Louis", "Springfield", "Columbia", "Independence", "Lee's Summit", "O'Fallon", "St. Joseph", "Blue Springs", "Florissant", "Joplin", "Jefferson City", "Warrensburg", "Cape Girardeau", "St. Charles", "Oakville", "University City", "Ballwin", "Kirksville", "Parker", "Raytown", "Hannibal", "Mexico", "Nixa", "Belton", "West Plains", "Richmond Heights", "Clinton", "Park Hills", "Republic", "Clayton", "Branson", "Kirkwood", "Ladue", "Moberly", "Washington", "Gladstone", "De Soto", "Herculaneum", "Neosho", "Sullivan", "Aurora", "Marshall", "Bolivar", "Carthage", "Monett", "Cameron", "Harrisonville", "Platte City", "Wentzville", "Crestwood", "Dardenne Prairie", "Maryville", "Shelbina", "Rolla", "Farmington", "Riverton", "Perryville", "Bridgeton", "St. Peters", "Chesterfield", "Bonne Terre", "Osage Beach", "Spring Hill", "Fulton", "Waynesville", "Osage Beach", "St. Robert", "Willow Springs", "St. Louis Park", "Jackson", "Maplewood", "Ferguson", "O'Fallon", "Moscow Mills", "Ballwin", "Sappington", "Grandview", "Florissant", "East Prairie", "Licking", "Richmond", "Steelville"],
        "Montana": ["Billings", "Missoula", "Great Falls", "Bozeman", "Butte", "Helena", "Kalispell", "Havre", "Miles City", "Lewistown", "Laurel", "Whitefish", "Livingston", "Columbia Falls", "Polson", "Sidney", "Glendive", "Roundup", "Big Sky", "Cut Bank", "Shelby", "Dillon", "Troy", "Eureka", "Hardin", "Harlowton", "Anaconda", "West Yellowstone", "St. Ignatius", "Wolf Point", "Deer Lodge", "Ronan", "Baker", "Hamilton", "Red Lodge", "Choteau", "Philipsburg", "Poplar", "Broadus", "Scobey", "Big Timber", "Forsyth", "Belt", "Fort Benton", "Superior", "Richey", "St. Marie", "Libby", "Ponderay", "Hinsdale", "Bridger", "Ekalaka", "Melstone", "Saco", "Terry", "Belt", "Lame Deer", "Crow Agency", "Birney", "Harlowton", "Winifred"],
        "Nebraska": ["Omaha", "Lincoln", "Bellevue", "Grand Island", "Kearney", "Fremont", "Hastings", "North Platte", "Papillion", "Scottsbluff", "Columbus", "South Sioux City", "Beatrice", "McCook", "Gering", "Plattsmouth", "Seward", "York", "Blair", "Nebraska City", "Chadron", "Holdrege", "Lexington", "Wayne", "Ogallala", "Alliance", "Falls City", "Crete", "Minden", "Broken Bow", "Auburn", "Imperial", "Sutherland", "St. Paul", "Howells", "Ravenna", "Hershey", "Wilber", "Wahoo", "Sutton", "Gothenburg", "Elkhorn", "Arthur", "Loup City", "Palmyra", "Atkinson", "Rulo", "David City", "Waverly", "Tiffany", "Lynch", "Fullerton", "Pawnee City", "Greeley", "Stromsburg", "Dunning", "Springview", "Tekamah", "Mason City", "Dodge", "Dorchester", "Trenton", "Ansley", "Ainsworth", "Pleasanton", "Neligh", "Dixon", "Benkelman", "Oconto", "Nebraska City", "Litchfield", "Sargent", "Cairo", "Gothenburg", "Brady", "Gothenburg", "Sargent", "Eustis", "Mason City", "Bancroft", "Blue Hill"],
        "Nevada": ["Las Vegas", "Henderson", "Reno", "North Las Vegas", "Sparks", "Carson City", "Elko", "Boulder City", "Mesquite", "Fallon", "Fernley", "Pahrump", "Winnemucca", "Ely", "Yerington", "Genoa", "Lovelock", "Caliente", "Hawthorne", "Wells", "Searchlight", "Tonopah", "Silver Springs", "Dayton", "Rural", "Jean", "Humboldt", "Sandy Valley", "Battle Mountain", "Eureka", "Gardnerville", "Mount Charleston", "Reno", "Stateline", "Laughlin", "Logandale", "Moapa", "Baker", "Dyer", "Gerlach", "Incline Village", "Ruth", "Zion", "Goldfield", "Beatty", "Crescent Valley", "Duckwater", "Oasis", "Silver Peak", "Wells"],
        "New Hampshire": ["Manchester", "Nashua", "Concord", "Derry", "Rochester", "Keene", "Salem", "Portsmouth", "Londonderry", "Hooksett", "Merrimack", "Gilford", "Exeter", "Laconia", "Goffstown", "Hudson", "Pembroke", "Somersworth", "Bedford", "Plaistow", "Milford", "Windham", "Hampton", "Claremont", "Franklin", "Winnisquam", "Hillsborough", "Newport", "Alstead", "Bow", "Hanover", "Jaffrey", "Brookline", "Newmarket", "Northfield", "Grantham", "Candia", "Mason", "Northwood", "Haverhill", "Lancaster", "Ossipee", "Warren", "Sanbornville", "Strafford", "Wilton", "Epping", "Wilmot", "Charlestown", "Grafton", "Hampton Falls", "Plymouth", "Troy", "Richmond", "Dublin", "Sullivan", "Bristol", "Weare", "Hancock", "Pittsfield", "Chester", "Rindge", "Seabrook", "New London", "Sugar Hill", "Ashland", "Lyndeborough", "Columbia", "Stoddard", "Temple", "Washington", "Madbury", "Lempster", "Acworth", "Atkinson", "Westmoreland", "Greenville", "Gilmanton", "West Lebanon", "Enfield"],
        "New Jersey": ["Newark", "Jersey City", "Paterson", "Elizabeth", "Edison", "Woodbridge", "Bayonne", "Perth Amboy", "Hoboken", "Camden", "Trenton", "Union City", "New Brunswick", "Englewood", "East Orange", "Hackensack", "Atlantic City", "Cherry Hill", "Passaic", "Plainfield", "Mount Laurel", "North Bergen", "Somerville", "West New York", "South Amboy", "Middletown", "Vineland", "Morristown", "Dover", "Harrison", "Fair Lawn", "Fort Lee", "Warren", "Bridgewater", "Rutherford", "New Milford", "Hackettstown", "Westfield", "Cranford", "Livingston", "Montclair", "Sparta", "Hoboken", "Lincoln Park", "Roselle", "South Orange", "Woodbury", "Ridgewood", "Marlton", "Parsippany-Troy Hills", "Nutley", "Kearny", "East Brunswick", "Haddonfield", "Burlington", "Ewing", "Voorhees", "Haddon Heights", "Caldwell", "Ocean City", "Cherry Hill", "Red Bank", "Hackensack", "Jersey Shore", "Pompton Lakes", "Clifton", "Medford", "Wayne", "Willingboro", "Holmdel", "Saddle Brook", "Mahwah", "River Edge", "Wyckoff", "Raritan", "Little Ferry", "Garfield", "Linden"],
        "New Mexico": ["Albuquerque", "Las Cruces", "Santa Fe", "Roswell", "Farmington", "Clovis", "Hobbs", "Carlsbad", "Rio Rancho", "Gallup", "Artesia", "Los Lunas", "Silver City", "Belen", "Ruidoso", "Espanola", "Deming", "Portales", "Truth or Consequences", "Tucumcari", "Lordsburg", "Aztec", "Edgewood", "Santa Teresa", "Elephant Butte", "Chavez", "Bosque Farms", "Logan", "Capitan", "Moriarty", "Cuba", "Grants", "Eunice", "Sunland Park", "Bernalillo", "La Junta", "Mimbres", "Bluewater", "T or C", "Cedar Crest", "North Valley", "South Valley", "West Mesa", "Midway", "Sandia Park", "Los Alamos", "Angel Fire", "Red River", "Eagle Nest", "Pecos", "Ponderosa"],
        "New York": ["New York City", "Buffalo", "Rochester", "Yonkers", "Syracuse", "Albany", "New Rochelle", "Schenectady", "Utica", "White Plains", "Ithaca", "Binghamton", "Saratoga Springs", "Saratoga Springs", "Saratoga Springs", "Troy", "Poughkeepsie", "Hempstead", "Mount Vernon", "Niagara Falls", "Jamestown", "Elmira", "Olean", "Kingston", "North Tonawanda", "Oswego", "Plattsburgh", "Cohoes", "Watertown", "Middletown", "Glens Falls", "Oneonta", "Cortland", "Rensselaer", "Newburgh", "Haverstraw", "Auburn", "Hudson", "Rome", "Peekskill", "Port Jervis", "Amsterdam", "Poughkeepsie", "Westbury", "Lynbrook", "Garden City", "Great Neck", "Harrison", "Hartsdale", "Rye", "Saratoga Springs", "Katonah", "Ossining", "Pleasantville", "Sleepy Hollow", "Tarrytown", "Larchmont", "Scarsdale", "Mamaroneck", "Bronxville", "Nyack", "Middletown", "Goshen", "New Paltz", "Rhinebeck", "Chatham", "Hudson", "Catskill"],
        "North Carolina": ["Charlotte", "Raleigh", "Greensboro", "Durham", "Winston-Salem", "Fayetteville", "Cary", "High Point", "Concord", "Gastonia", "Jacksonville", "Burlington", "Huntersville", "Indian Trail", "Mooresville", "Apex", "Goldboro", "Asheville", "Wilson", "Kannapolis", "Matthews", "Carrboro", "Statesville", "Lenoir", "Morrisville", "Hickory", "Clemmons", "Pinehurst", "Brevard", "Lincolnton", "Southern Pines", "China Grove", "New Bern", "Graham", "Thomasville", "Lexington", "Taylorsville", "Reidsville", "Shelby", "Elkin", "Boone", "Bessemer City", "Lumberton", "Gastonia", "Mooresville", "Mint Hill", "Wilmington", "Clayton", "Havelock", "Mount Airy", "Sylva", "Spruce Pine", "Salisbury", "King", "Walkertown", "Cornelius", "Belmont", "Lincolnton", "Mount Olive", "Pineville", "Franklin", "Roanoke Rapids", "Morganton", "Yadkinville", "Bunn", "Smithfield", "Southern Pines", "Oak Ridge"],
        "North Dakota": ["Fargo", "Bismarck", "Grand Forks", "Minot", "West Fargo", "Williston", "Dickinson", "Jamestown", "Mandan", "Garrison", "Watford City", "Devils Lake", "Beulah", "Valley City", "Dickinson", "New Town", "Lincoln", "Harvey", "Bowman", "Linton", "Oakes", "Rugby", "Langdon", "Hazen", "Medora", "Cavalier", "Huff", "Pembina", "Kindred", "Stanley", "Hannover", "Parshall", "Watford City", "Mott", "Epping", "Ray", "Wilton", "Sharon", "Fort Yates", "Starkweather", "Glen Ullin", "Kramer", "Plaza", "Rolette", "Pingree", "Sykeston", "Wahpeton", "Raleigh", "New Rockford", "Westhope", "Eldridge"],
        "Ohio": ["Columbus", "Cleveland", "Cincinnati", "Toledo", "Akron", "Dayton", "Parma", "Canton", "Youngstown", "Lorain", "Hamilton", "Middletown", "Lakewood", "Euclid", "Mentor", "Grove City", "Dublin", "Newark", "Reynoldsburg", "Lima", "Springfield", "Marion", "Portsmouth", "Stow", "Fairfield", "North Olmsted", "Brunswick", "Barberton", "Xenia", "Lancaster", "Massillon", "Marietta", "Wooster", "Hudson", "Oregon", "Clyde", "Sandusky", "Piqua", "Warren", "Findlay", "Upper Arlington", "Westerville", "Oberlin", "Cleveland Heights", "New Philadelphia", "Bexley", "Shaker Heights", "Kettering", "Mason", "North Ridgeville", "Solon", "Gahanna", "Avon", "Sunbury", "Groveport", "Painesville", "Jackson", "Sylvania", "Avon Lake", "Cambridge", "Nelsonville", "Westlake", "Harrison", "Bainbridge", "Broadview Heights", "Chardon", "Richfield", "Cincinnati", "Bellevue", "Cleveland Heights"],
        "Oklahoma": ["Oklahoma City", "Tulsa", "Norman", "Broken Arrow", "Edmond", "Lawton", "Moore", "Midwest City", "Stillwater", "Enid", "Muskogee", "Bartlesville", "Shawnee", "Owasso", "Bixby", "Claremore", "Ponca City", "Altus", "Del City", "Guthrie", "Mustang", "Ada", "Yukon", "Cushing", "Collinsville", "El Reno", "Sapulpa", "Paul's Valley", "Guymon", "Kingfisher", "Alva", "Hugo", "Stroud", "Weatherford", "Poteau", "Walters", "Checotah", "Marlow", "Lone Grove", "Laverne", "Altus", "Hinton", "Okeene", "Sallisaw", "Carnegie", "Custer City", "Perry", "Custer City", "Cordell", "Duncan", "Geary", "Hydro", "Vici", "Custer City", "Dewey", "Sayre", "Hobart", "Hollis", "Braggs", "Roff", "Kingston"],
        "Oregon": ["Portland", "Salem", "Eugene", "Gresham", "Hillsboro", "Beaverton", "Bend", "Medford", "Grants Pass", "Albany", "Corvallis", "Tualatin", "Keizer", "Lake Oswego", "Oregon City", "Pendleton", "Redmond", "Ashland", "Sherwood", "Woodburn", "Cottage Grove", "La Grande", "Canby", "St. Helens", "Clatskanie", "Hood River", "West Linn", "Silverton", "The Dalles", "Hermiston", "Klamath Falls", "Molalla", "Dallas", "Roseburg", "John Day", "Baker City", "Burns", "Ontario", "Prineville", "Eagle Point", "Amity", "Dundee", "Dayton", "Monmouth", "Newport", "Florence", "Sutherlin", "Eugene", "Yamhill", "Rogue River", "Cascade Locks", "Bandon", "Halsey", "Winston", "Oakridge", "Junction City", "Scappoose", "Warrenton", "Sandy"],
        "Pennsylvania": ["Philadelphia", "Pittsburgh", "Allentown", "Erie", "Reading", "Scranton", "Bethlehem", "Lancaster", "Harrisburg", "York", "Middletown", "Wilkes-Barre", "Altoona", "Johnstown", "Scranton", "State College", "Lebanon", "Lancaster", "Chester", "Pottstown", "West Chester", "Quakertown", "New Castle", "Greensburg", "Shamokin", "Pottsville", "Selinsgrove", "Easton", "Hazleton", "Beaver Falls", "Sunbury", "Tamaqua", "Pittsburgh", "Doylestown", "Jenkintown", "Montgomery", "King of Prussia", "Radnor", "Bethlehem", "Wayne", "Plymouth Meeting", "Haverford", "Upper Darby", "Norristown", "Doylestown", "West Norriton", "Downingtown", "Warren", "Blairsville", "Indiana", "Carnegie", "Ephrata", "Phoenixville", "Trevose", "Bristol", "Shippensburg", "Hummelstown", "Franklin"],
        "Rhode Island": ["Providence", "Cranston", "Warwick", "Pawtucket", "East Providence", "Woonsocket", "Central Falls", "North Providence", "Coventry", "West Warwick", "South Kingstown", "North Kingstown", "Lincoln", "Johnston", "Smithfield", "Westerly", "Tiverton", "Bristol", "Barrington", "Exeter", "Glocester", "Scituate", "Foster", "Charlestown", "Little Compton", "Middletown", "Newport", "Jamestown", "New Shoreham"],
        "South Carolina": ["Columbia", "Charleston", "North Charleston", "Greenville", "Spartanburg", "Mount Pleasant", "Florence", "Sumter", "Goose Creek", "Hilton Head Island", "Aiken", "Rock Hill", "Anderson", "Mauldin", "Greer", "West Columbia", "Easley", "Gaffney", "Darlington", "Clemson", "Seneca", "Lexington", "Blythewood", "York", "Walhalla", "Cayce", "Bennettsville", "Kershaw", "Cheraw", "Camden", "Bamberg", "Hartsville", "Lancaster", "Orangeburg", "Moncks Corner", "Newberry", "Pickens", "Santee", "Saluda", "Loris", "Myrtle Beach", "Sumter", "Clinton", "Tega Cay", "Simmonsville", "Pawleys Island", "Hemingway", "Ridgeland", "Fort Mill", "Pineville"],
        "South Dakota": ["Sioux Falls", "Rapid City", "Aberdeen", "Brookings", "Mitchell", "Yankton", "Pierre", "Huron", "Watertown", "Spearfish", "Sturgis", "Vermillion", "Harrisburg", "Box Elder", "Hill City", "Custer", "Deadwood", "Kadoka", "Gettysburg", "Belle Fourche", "Mobridge", "Philip", "Eureka", "Lemmon", "Lead", "Martin", "Plankinton", "Winner", "Parker", "Dell Rapids", "Edgemont", "Canton", "White", "Presho", "Kadoka", "Oacoma", "Onida", "Sisseton", "McLaughlin", "Clear Lake", "De Smet", "Wessington Springs", "Wall", "Rapid City", "Tea"],
        "Tennessee": ["Memphis", "Nashville", "Knoxville", "Chattanooga", "Clarksville", "Jackson", "Murfreesboro", "Franklin", "Johnson City", "Bartlett", "Columbia", "Hendersonville", "Smyrna", "Brentwood", "Kingsport", "Cookeville", "Mount Juliet", "Gallatin", "Lebanon", "Dyersburg", "Morristown", "Spring Hill", "Goodlettsville", "Paris", "Sevierville", "La Vergne", "Clinton", "Farragut", "Oak Ridge", "Manchester", "Alcoa", "Eagleton Village", "Harrogate", "Newport", "Lenoir City", "Greeneville", "Pigeon Forge", "Collegedale", "Harriman", "Chapel Hill", "Trenton", "Shelbyville", "Brownsville", "Dayton", "Germantown", "Halls", "McKenzie", "Collierville", "Soddy-Daisy", "Thompson’s Station", "Rockwood", "Sweetwater", "Martin"],
        "Texas": ["Houston", "San Antonio", "Dallas", "Austin", "Fort Worth", "El Paso", "Arlington", "Corpus Christi", "Plano", "Laredo", "Lubbock", "Garland", "Irving", "Frisco", "McKinney", "Amarillo", "Grand Prairie", "Brownsville", "Killeen", "Waco", "Carrollton", "Midland", "Abilene", "Beaumont", "Lewisville", "Round Rock", "Sugar Land", "Longview", "The Woodlands", "Euless", "Pharr", "Georgetown", "Cedar Park", "San Angelo", "Richardson", "Mission", "North Richland Hills", "Wylie", "Weatherford", "Haltom City", "Burleson", "Temple", "College Station", "Victoria", "Ennis", "Lufkin", "Harker Heights", "Texarkana", "Sherman", "Odessa", "Mansfield", "Cleburne", "Seguin", "Denton", "San Marcos", "Orange", "La Porte", "Sweetwater", "Gainesville", "Houston", "Southlake", "Buda", "Kyle", "Forney", "Alvin", "Humble", "Greenville", "Rockwall", "Pflugerville", "Hurst"],
        "Utah": ["Salt Lake City", "West Valley City", "Provo", "West Jordan", "Orem", "Sandy", "Ogden", "St. George", "Layton", "Taylorsville", "South Jordan", "Lehi", "Midvale", "Murray", "Pleasant Grove", "Spanish Fork", "Bountiful", "Logan", "Eagle Mountain", "Tooele", "Draper", "American Fork", "Roy", "Cottonwood Heights", "Kearns", "Cedar City", "Brigham City", "Washington", "Park City", "Holladay", "Hyrum", "Smithfield", "South Salt Lake", "Millcreek", "Clearfield", "Saratoga Springs", "Northridge", "Woods Cross", "Kanab", "Delta", "Manti", "Heber City", "San Juan", "Richfield", "Moab", "Paget", "Salina", "Sevier", "Gunnison"],
        "Vermont": ["Burlington", "South Burlington", "Rutland", "Barre", "Montpelier", "Winooski", "Stowe", "Essex Junction", "Brattleboro", "Bennington", "Middlebury", "Williston", "Fair Haven", "Newport", "St. Albans", "Shelburne", "Manchester", "Morristown", "Johnson", "Poultney", "Hartford", "Northfield", "Milton", "Swanton", "Alburg", "Richford", "West Rutland", "Weathersfield", "Waterbury", "Craftsbury", "Enosburg Falls", "Stowe", "Woodstock", "Danville", "Lyndonville", "Springfield", "South Royalton", "Hinesburg", "Fairfax", "Hyde Park", "Derby", "Orleans", "Richmond", "East Montpelier", "Westfield"],
        "Virginia": ["Virginia Beach", "Norfolk", "Chesapeake", "Richmond", "Newport News", "Hampton", "Alexandria", "Portsmouth", "Lynchburg", "Harrisonburg", "Roanoke", "Charlottesville", "Danville", "Manassas", "Leesburg", "Fairfax", "Midlothian", "Woodbridge", "Falls Church", "Centreville", "Galax", "Blacksburg", "Abingdon", "Emporia", "South Boston", "Hopewell", "Warrenton", "Radford", "Staunton", "Lexington", "Clifton Forge", "Salem", "Martinsville", "Pulaski", "Gate City", "Big Stone Gap", "Tazewell", "Front Royal", "Colonial Heights", "Bristol", "Altavista", "West Point", "Chincoteague", "Altavista", "South Hill", "Dublin", "Orange", "Charlottesville", "Richlands", "Gloucester"],
        "Washington": ["Seattle", "Spokane", "Tacoma", "Vancouver", "Bellevue", "Kent", "Everett", "Renton", "Federal Way", "Kennewick", "Bellingham", "Auburn", "Marysville", "Lakewood", "Redmond", "Yakima", "Richland", "Bremerton", "Puyallup", "Issaquah", "Olympia", "Des Moines", "Pullman", "Wenatchee", "Lacey", "Burien", "Moses Lake", "Shoreline", "Centralia", "Aberdeen", "Hoquiam", "Kenmore", "Battle Ground", "Clyde Hill", "Mount Vernon", "Port Orchard", "University Place", "Snohomish", "Selah", "Sultan", "Enumclaw", "Arlington", "Shelton", "Stanwood", "La Conner", "Longview", "Oak Harbor", "Colville", "Forks", "South Hill", "Chimacum", "Chehalis", "Ridgefield"],
        "West Virginia": ["Charleston", "Huntington", "Morgantown", "Parkersburg", "Wheeling", "Fairmont", "Clarksburg", "Beckley", "Weirton", "Martinsburg", "Bluefield", "South Charleston", "Grafton", "Logan", "Elkins", "St. Albans", "Nitro", "Weston", "Bridgeport", "Oak Hill", "Ripley", "Fayetteville", "Barboursville", "Williamson", "Hurricane", "New Martinsville", "Moundsville", "Rainelle", "Rand", "New Cumberland", "Dunbar", "Sutton", "Paden City", "Point Pleasant", "Hinton", "Summersville", "Kingwood", "Philippi", "Wellsburg", "Harrisville", "Ravenswood", "Mason", "Montgomery", "Cameron", "Bruceton Mills", "Richwood"],
        "Wisconsin": ["Milwaukee", "Madison", "Green Bay", "Kenosha", "Racine", "Appleton", "Waukesha", "Oshkosh", "Eau Claire", "Janesville", "West Allis", "Sheboygan", "Fond du Lac", "Brookfield", "New Berlin", "Wauwatosa", "La Crosse", "Menomonee Falls", "Beloit", "Sun Prairie", "Marshfield", "Portage", "Stevens Point", "Pewaukee", "Cedarburg", "Grafton", "Wausau", "Rhinelander", "Hudson", "Ashwaubenon", "Kaukauna", "Menasha", "Whitefish Bay", "Shorewood", "Greenfield", "Watertown", "Slinger", "Pewaukee", "Richfield", "South Milwaukee", "Antigo", "Neenah", "Janesville", "Cuba City", "Black River Falls", "Dodgeville", "Port Washington", "Elkhorn", "Hales Corners", "Fox Point", "East Troy", "Lake Geneva"],
        "Wyoming": ["Cheyenne", "Casper", "Laramie", "Gillette", "Rock Springs", "Sheridan", "Evanston", "Rawlins", "Jackson", "Riverton", "Green River", "Douglas", "Buffalo", "Worland", "Cody", "Lander", "Powell", "Pinedale", "Kemmerer", "Sundance", "Lingle", "Hulett", "Upton", "Moorcroft", "Wheatland", "Ranchester", "Hanna", "Yoder", "Ft. Bridger", "Basin", "Big Piney", "Jackson", "Evanston", "Bar Nunn", "Gillette", "Pinedale", "Afton"],
    };//moroccanRegions
    
    
    $.each(africanCountries, function(index, country) {
        $('#gbpeter-primary-country').append('<option value="' + country + '">' + country + '</option>');
        $('#gbpeter-secondary-country').append('<option value="' + country + '">' + country + '</option>');
    });

    // when primary country is clicked
    $('body').on('change', '#gbpeter-primary-country', function() {
        // empty the things in the primary select
        $("#gbpeter-primary-state").empty();
        var country_val = $(this).val();
        states_by_country("primary_states", country_val);
    });

    // when secondary country is clicked
    $('body').on('change', '#gbpeter-secondary-country', function() {
        // empty the things in the primary select
        $("#gbpeter-secondary-state").empty();
        var country_val = $(this).val();
        states_by_country("secondary_states", country_val);
    });

    function states_by_country(owner, country) {
        var state_destination;
        if (owner == "primary_states") {
          state_destination = "#gbpeter-primary-state";
        } else if (owner == "secondary_states") {
          state_destination = "#gbpeter-secondary-state";
        }
      
        var states;
        if (country == "Nigeria") {
          states = nigerianStates;
        } else if (country == "Ghana") {
          states = ghanaStates;
        } else if(country == "Republic of the Congo"){
            states = congoStatesDR;
        }else if(country == "Rwanda"){
            states = rwandaProvinces;
        }else if(country == "São Tomé and Principe"){
            states = saoTomeDistricts;
        }else if(country == "Senegal"){
            states = senegalRegions;
        }else if(country == "Seychelles"){
            states = seychellesDistricts;
        }else if(country == "Sierra Leone"){
            states = sierraLeoneProvinces;
        }else if(country == "Somalia"){
            states = somaliaRegions;
        }else if(country == "South Africa"){
            states = southAfricaProvinces;
        }else if(country == "South Sudan"){
            states = southSudanStates;
        }else if(country == "Sudan"){
            states = sudanStates;
        }else if(country == "Tanzania"){
            states = tanzaniaRegions;
        }else if(country == "Togo"){
            states = togoRegions;
        }else if(country == "Tunisia"){
            states = tunisianStates;
        }else if(country == "Uganda"){
            states = ugandanRegions;
        }else if(country == "Zambia"){
            states = zambianProvinces;
        }else if(country == "Zimbabwe"){
            states = zimbabweanProvinces;
        }else if(country == "Niger"){
            states = nigerianRegions;
        }else if(country == "Namibia"){
            states = namibianRegions;
        }else if(country == "Mozambique"){
            states = mozambicanProvinces;
        }else if(country == "Morocco"){
            states = moroccanRegions;
        }else if(country == "Mauritius"){
            states = mauritianDistricts;
        }else if(country == "Mauritania"){
            states = mauritanianRegions;
        }else if(country == "Mali"){
            states = maliRegions;
        }else if(country == "Malawi"){
            states = malawianRegions;
        }else if(country == "Madagascar"){
            states = madagascanRegions;
        }else if(country == "Libya"){
            states = libyanRegions;
        }else if(country == "Liberia"){
            states = liberianCounties;
        }else if(country == "Lesotho"){
            states = lesothoDistricts;
        }else if(country == "Kenya"){
            states = kenyanCounties;
        }else if(country == "Guinea-Bissau"){
            states = guineaBissauRegions;
        }else if(country == "Guinea"){
            states = guineaRegions;
        }else if(country == "Algeria"){
            states = algerianStates;
        }else if(country == "Angola"){
            states = angolanStates;
        }else if(country == "Benin"){
            states = beninRepublicStates;
        }else if(country == "Botswana"){
            states = botswanaStates;
        }else if(country == "Burkina Faso"){
            states = burkinafasoStates;
        }else if(country == "Burundi"){
            states = burundiStates;
        }else if(country == "Cameroon"){
            states = cameroonStates;
        }else if(country == "Cape Verde"){
            states = capeVerdeStates;
        }else if(country == "Central African Republic"){
            states = carPrefectures;
        }else if(country == "Chad"){
            states = chadStates;
        }else if(country == "Comoros"){
            states = comorosStates;
        }else if(country == "Côte d'Ivoire"){
            states = coteDIvoireStates;
        }else if(country == "Democratic Republic of the Congo"){
            states = drcProvinces;
        }else if(country == "Djibouti"){
            states = djiboutiStates;
        }else if(country == "Egypt"){
            states = egyptStates;
        }else if(country == "Equatorial Guinea"){
            states = equatorialGuineaStates;
        }else if(country == "Eritrea"){
            states = eritreaStates;
        }else if(country == "Eswatini"){
            states = eswatiniStates;
        }else if(country == "Ethiopia"){
            states = ethiopiaStates;
        }else if(country == "Gabon"){
            states = gabonStates;
        }else if(country == "Gambia"){
            states = gambiaStates;
        }else if(country == "Canada"){
            states = canadaStates;
        }else if(country == "United States"){
            states = unitedStatesStates;
        }
        // unitedStatesStates

        // Clear the existing city options
        $(state_destination).empty().append('<option value="">Select State/Province</option>');
      
        $.each(states, function(index, state) {
          $(state_destination).append('<option value="' + state + '">' + state + '</option>');
        });
    }

    $('body').on('change', '.gbpeter-select-state', function() {
        var state_val = $(this).val();//alert(state_val);
        var owner = $(this).attr("id");

        // Determine the destination city dropdown
        var city_destination = (owner === "gbpeter-primary-state") ? "#gbpeter-primary-city" : "#gbpeter-secondary-city";
        
        // Clear the existing city options
        $(city_destination).empty().append('<option value="">Select City</option>');
        
        // Populate city options based on selected state
        if (citiesByState[state_val]) {
            $.each(citiesByState[state_val], function(index, city) {
                $(city_destination).append('<option value="' + city + '">' + city + '</option>');
            });
        }
    });

    function address_select_onload(){
        var primary_state = $("#gbpeter-primary-state").attr("actual_result");

        $("#gbpeter-primary-state").append("<option value='"+primary_state+"'>"+primary_state+"</option>");

        // var secondary_state = $("#gbpeter-secondary-state").attr("actual_result");

        // $("#gbpeter-secondary-state").append("<option value='"+secondary_state+"'>"+secondary_state+"</option>");

        // var primary_city = $("#gbpeter-primary-city").attr("actual_result");

        // $("#gbpeter-primary-city").append("<option value='"+primary_city+"'>"+primary_city+"</option>");

        // var secondary_city = $("#gbpeter-secondary-city").attr("actual_result");

        // $("#gbpeter-secondary-city").append("<option value='"+secondary_city+"'>"+secondary_city+"</option>");
    }

});