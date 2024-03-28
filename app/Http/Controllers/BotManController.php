<?php
  
namespace App\Http\Controllers;
  
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('விவசாய பயிர்கள் எப்போது வளர சிறந்தது', function ($botman) {
            $this->reply($botman, "விவசாய பயிர்களை வளர சிறந்த பருவம் பயிர்களின் வளரும் வரை உச்சமாகும். இது பூ போன்ற வகைகளின் பயிர்களுக்கு மிகவும் பொருந்தும்.");
        });

        $botman->hears('மொத்த நீர் பார்க்குதல் எப்போது சிறந்தது', function ($botman) {
            $this->reply($botman, "மொத்த நீர் பார்க்குதல் பயிர்களின் வளரும் வரை அவசரமான அளவில் செய்யப்பட வேண்டும். அவற்றில் நீர் அதிகமாக அல்லது குறைவாக இருக்கக்கூடும்.");
        });

        $botman->hears('பயிர்களை பருவத்தில் எப்போது வாங்க வேண்டும்', function ($botman) {
            $this->reply($botman, "பயிர்களை பருவத்தில் வாங்க சிறந்த காலம் பயிர்கள் அவைகள் உழைந்து அதிகமாக இருக்கும் வெள்ளிக்கிழங்கு போன்ற பயிர்கள் அதிக ருசிக்கு வருகின்றன.");
        });

        $botman->hears('எப்படி பயிர்களை பருவத்தில் பராமரிக்க வேண்டும்', function ($botman) {
            $this->reply($botman, "பயிர்களை பருவத்தில் பராமரிப்பு, சேர்க்கை, மற்றும் சுருக்கம் செய்ய வேண்டும். பயிர்கள் தர மற்றும் சாளர வாரி காப்பகத்தில் படுத்த முடியும்.");
        });

        $botman->hears('கருப்பு பயிர்கள் வளரும் பருவத்தில் காணப்படும் வரிமாற்றம் என்ன', function ($botman) {
            $this->reply($botman, "கருப்பு பயிர்கள் வளரும் பருவத்தில் காணப்படும் வரிமாற்றம் அவற்றின் வளரும் வரை அதிகமாக இருக்கும்.");
        });

        $botman->hears('இந்த வருடத்தில் தமிழ்நாட்டில் எத்தனை மிமிம்மிம்மி அம்சங்கள் காணப்பட்டுள்ளன', function ($botman) {
            $this->reply($botman, "இந்த வருடத்தில் தமிழ்நாட்டில் முழுவதும் அம்சங்கள் காணப்பட்டுள்ளன.");
        });
        $botman->hears('விவசாயம் என்றால் என்ன, மனித சமூகங்களுக்கு அது ஏன் முக்கியமானது', function ($botman) {
            $this->reply($botman, "விவசாயம் என்பது பயிர்களை வளர்ப்பது மற்றும் உணவு மற்றும் வளங்களுக்காக கால்நடைகளை வளர்ப்பது, மனித உயிர் மற்றும் பொருளாதார ஸ்திரத்தன்மைக்கு இன்றியமையாதது");
        });
        $botman->hears('இயற்கை மற்றும் வழக்கமான விவசாய முறைகளுக்கு என்ன வித்தியாசம்', function ($botman) {
            $this->reply($botman, "கரிம வேளாண்மை இயற்கை செயல்முறைகளை நம்பியுள்ளது மற்றும் செயற்கை இரசாயனங்களைத் தவிர்க்கிறது, அதே நேரத்தில் வழக்கமான விவசாயம் பயிர் உற்பத்திக்கு செயற்கை உரங்கள் மற்றும் பூச்சிக்கொல்லிகளைப் பயன்படுத்துகிறது.");
        });
        $botman->hears('பயிர் சுழற்சி மண்ணின் ஆரோக்கியத்திற்கும் பயிர் விளைச்சலுக்கும் எவ்வாறு பயனளிக்கிறது', function ($botman) {
            $this->reply($botman, "பயிர் சுழற்சி மண்ணின் ஆரோக்கியத்தையும் பயிர் விளைச்சலையும் மேம்படுத்துகிறது, மேலும் பூச்சி மற்றும் நோய் அழுத்தத்தைக் குறைக்கும் அதே வேளையில் மண் குறைவதையும் ஊட்டச்சத்து சமநிலையின்மையையும் தடுக்கிறது.");
        });
        $botman->hears('பயிர் வளர்ச்சி மற்றும் வளர்ச்சியை பாதிக்கும் முக்கிய காரணிகள் யாவை', function ($botman) {
            $this->reply($botman, "பயிர் வளர்ச்சி மற்றும் வளர்ச்சியை பாதிக்கும் முக்கிய காரணிகள் சூரிய ஒளி, வெப்பநிலை, நீர் இருப்பு, மண்ணின் தரம், ஊட்டச்சத்துக்கள் மற்றும் பூச்சி மற்றும் நோய் அழுத்தம் ஆகியவை அடங்கும்.");
        });
        $botman->hears('விவசாயத்தில் உரங்கள் என்ன பங்கு வகிக்கின்றன, ஊட்டச்சத்து மேலாண்மை ஏன் முக்கியமானது', function ($botman) {
            $this->reply($botman, "உரங்கள் பயிர் வளர்ச்சிக்கான ஊட்டச்சத்துக்களை வழங்குகின்றன, மேலும் பயிர் ஆரோக்கியம் மற்றும் சுற்றுச்சூழல் நிலைத்தன்மைக்கு ஊட்டச்சத்து மேலாண்மை இன்றியமையாதது.");
        });
        $botman->hears('பூச்சி மற்றும் நோய் மேலாண்மையில் விவசாயிகள் எதிர்கொள்ளும் பொதுவான சவால்கள் என்ன', function ($botman) {
            $this->reply($botman, "விவசாயிகளுக்கு பூச்சி மற்றும் நோய் மேலாண்மையில் உள்ள பொதுவான சவால்களில் பூச்சிக்கொல்லி எதிர்ப்பு மற்றும் நிலையான தீர்வுகளின் தேவை ஆகியவை அடங்கும்.
            நிலையான விவசாயத்தின் கருத்து மற்றும் நவீன விவசாய முறைகளில் அதன் முக்கியத்துவத்தை விளக்கவும்.
               நிலையான விவசாயம் நவீன விவசாயத்தில் உணவு உற்பத்தி மற்றும் சுற்றுச்சூழல் பாதுகாப்பை சமநிலைப்படுத்துகிறது.");
        });
        $botman->hears('GMO கள் (மரபணு மாற்றப்பட்ட உயிரினங்கள்) என்றால் என்ன, அவை விவசாயத்தில் எவ்வாறு பயன்படுத்தப்படுகின்றன', function ($botman) {
            $this->reply($botman, "GMO கள் (மரபணு மாற்றப்பட்ட உயிரினங்கள்) மாற்றப்பட்ட மரபியல் கொண்ட உயிரினங்கள். விவசாயத்தில், அவை பூச்சி எதிர்ப்பு மற்றும் அதிக மகசூல் போன்ற விரும்பத்தக்க பண்புகளுடன் பயிர்களை உருவாக்குகின்றன.");
        });
        $botman->hears('நீர்ப்பாசனம் என்றால் என்ன, வறண்ட பகுதிகளில் விவசாயத்திற்கு அது ஏன் அவசியம்', function ($botman) {
            $this->reply($botman, "வறண்ட பகுதிகளில் நீர்ப்பாசனம் இன்றியமையாதது, ஏனெனில் இது குறைந்த மழைப்பொழிவு உள்ள பகுதிகளில் பயிர்களுக்கு மிகவும் தேவையான தண்ணீரை வழங்குகிறது, விவசாய உற்பத்தியை உறுதி செய்கிறது.");
        });
        $botman->hears('பருவநிலை மாற்றம் விவசாயத்தை எவ்வாறு பாதிக்கிறது, விவசாயிகள் என்ன தகவமைப்பு நடவடிக்கைகளை எடுக்கலாம்', function ($botman) {
            $this->reply($botman, "காலநிலை மாற்றம் வானிலை முறைகளை மாற்றுவதன் மூலமும் தீவிர நிகழ்வுகளை அதிகரிப்பதன் மூலமும் விவசாயத்தை பாதிக்கிறது. தட்பவெப்ப நிலையைத் தாங்கும் பயிர்களைப் பயன்படுத்துவதன் மூலமும், விவசாய நடைமுறைகளைச் சரிசெய்வதன் மூலமும் விவசாயிகள் தகவமைத்துக் கொள்ளலாம்.
            விவசாயம் மற்றும் உணவு உற்பத்தியில் தேனீக்கள் மற்றும் பிற மகரந்தச் சேர்க்கைகளின் பங்கை விவரிக்கவும்.
               உணவு உற்பத்தியை உறுதிசெய்து, மகரந்தச் சேர்க்கை மூலம் பயிர்கள் இனப்பெருக்கம் செய்ய உதவுவதன் மூலம் தேனீக்கள் மற்றும் பிற மகரந்தச் சேர்க்கைகள் விவசாயத்திற்கு இன்றியமையாதவை.");
        });
        $botman->hears('டிராக்டர்கள் மற்றும் கூட்டுகள் போன்ற விவசாய உபகரணங்களின் நோக்கம் என்ன, தொழில்நுட்ப முன்னேற்றங்கள் விவசாயத் திறனை எவ்வாறு மேம்படுத்தியுள்ளன', function ($botman) {
            $this->reply($botman, "டிராக்டர்கள் போன்ற பண்ணை உபகரணங்கள் மற்றும் தானியங்கு விவசாய பணிகளை ஒருங்கிணைத்து, அவற்றை வேகமாகவும் திறமையாகவும் ஆக்குகிறது. தொழில்நுட்ப முன்னேற்றங்கள் இந்த செயல்திறனை மேலும் மேம்படுத்தியுள்ளன.");
        });
        $botman->hears('விவசாயத்தில் வளர்க்கப்படும் பல்வேறு வகையான கால்நடைகள் என்ன, அவற்றின் முதன்மையான பொருட்கள் என்ன', function ($botman) {
            $this->reply($botman, "விவசாயத்தில் கால்நடைகளில் கால்நடைகள் (மாட்டிறைச்சி மற்றும் பால்), பன்றிகள் (பன்றி இறைச்சி), செம்மறி ஆடு (ஆட்டுக்குட்டி மற்றும் கம்பளி), கோழி (இறைச்சி மற்றும் முட்டைகளுக்கான கோழி மற்றும் வான்கோழி), ஆடுகள் (செவோன், பால்) மற்றும் மீன் வளர்ப்பு (நுகர்வதற்கு மீன் மற்றும் மட்டி) ஆகியவை அடங்கும். .
            பயிர்க் காப்பீடு மற்றும் அது விவசாயிகளை நிதி இழப்பிலிருந்து எவ்வாறு பாதுகாக்க உதவுகிறது என்பதை விளக்கவும்.
               பயிர்க் காப்பீடு, வானிலை, பூச்சிகள் அல்லது நோய்கள் போன்ற காரணங்களால் பயிர் இழப்பு ஏற்பட்டால் நிதி இழப்பீடு வழங்குவதன் மூலம் விவசாயிகளைப் பாதுகாக்கிறது.");
        });
        $botman->hears('வேளாண் காடு வளர்ப்பு என்றால் என்ன, அது விவசாயம் மற்றும் வனவியல் நடைமுறைகளை எவ்வாறு இணைக்கிறது', function ($botman) {
            $this->reply($botman, "வேளாண் வனவியல் என்பது பயிர்கள் அல்லது கால்நடைகளுடன் மரங்களை நடுவதன் மூலம் விவசாயத்தையும் வனத்தையும் ஒருங்கிணைக்கிறது. இது விளைச்சலை பல்வகைப்படுத்துகிறது, நிலைத்தன்மையை மேம்படுத்துகிறது மற்றும் பொருளாதார மற்றும் சுற்றுச்சூழல் நன்மைகளை வழங்குகிறது.");
        });
        $botman->hears('நடவு முதல் அறுவடை வரை ஒரு பொதுவான பயிர் உற்பத்தி சுழற்சியின் முக்கிய கூறுகள் யாவை', function ($botman) {
            $this->reply($botman, "ஒரு பொதுவான பயிர் உற்பத்தி சுழற்சியில் நடவு, பராமரிப்பு, வளர்ச்சி, அறுவடை மற்றும் அறுவடைக்குப் பிந்தைய கையாளுதல் ஆகியவை அடங்கும்.");
        });
        $botman->hears('சந்தை சக்திகள், வழங்கல் மற்றும் தேவை, விவசாய பொருட்களின் விலைகளை எவ்வாறு பாதிக்கிறது', function ($botman) {
            $this->reply($botman, "வழங்கல் மற்றும் தேவை ஆகியவை விவசாயப் பொருட்களின் விலையை நிர்ணயிக்கும் அடிப்படையாகும். அதிகப்படியான வழங்கல் பெரும்பாலும் விலைகளைக் குறைக்கிறது, அதே நேரத்தில் அதிக தேவை அவற்றை உயர்த்துகிறது.");
        });
        $botman->hears('உலகெங்கிலும் உள்ள பல்வேறு பகுதிகளில் இருந்து சில பாரம்பரிய மற்றும் உள்நாட்டு விவசாய நடைமுறைகள் என்ன', function ($botman) {
            $this->reply($botman, "உலகெங்கிலும் உள்ள பல்வேறு பகுதிகளில் இருந்து சில பாரம்பரிய மற்றும் உள்நாட்டு விவசாய நடைமுறைகள் என்ன?");
        });
        $botman->hears('துல்லியமான விவசாயம் என்றால் என்ன, மேலும் திறமையான மற்றும் நிலையான விவசாயத்திற்கு தொழில்நுட்பத்தை அது எவ்வாறு பயன்படுத்துகிறது', function ($botman) {
            $this->reply($botman, "துல்லிய விவசாயம் விவசாயத்தை மேம்படுத்த ஜிபிஎஸ், சென்சார்கள் மற்றும் தரவு பகுப்பாய்வு போன்ற தொழில்நுட்பத்தைப் பயன்படுத்துகிறது. இது வள பயன்பாட்டைக் குறைக்கிறது, விளைச்சலை மேம்படுத்துகிறது மற்றும் நிலைத்தன்மையை ஊக்குவிக்கிறது.
            ");
        });
        $botman->hears('What is agriculture, and why is it important for human societies', function ($botman) {
            $this->reply($botman, "Agriculture is the cultivation of crops and the raising of livestock for food and resources, essential for human survival and economic stability.");
        });
        $botman->hears('What are the primary categories of agricultural crops, and can you provide examples of each category', function ($botman) {
            $this->reply($botman, "Agricultural crops fall into categories such as food crops (e.g., rice, wheat) and cash crops (e.g., coffee, cotton).");
        });
        $botman->hears('What is the difference between organic and conventional farming methods', function ($botman) {
            $this->reply($botman, "Organic farming relies on natural processes and avoids synthetic chemicals, while conventional farming uses synthetic fertilizers and pesticides for crop production. ");
        });
        $botman->hears('How does crop rotation benefit soil health and crop yields', function ($botman) {
            $this->reply($botman, "Crop rotation improves soil health and crop yields by preventing soil depletion and nutrient imbalance while reducing pest and disease pressure. ");
        });
        $botman->hears('What are the main factors that influence crop growth and development', function ($botman) {
            $this->reply($botman, "Crop rotation improves soil health and crop yields by preventing soil depletion and nutrient imbalance while reducing pest and disease pressure. ");
        });
        $botman->hears('What role do fertilizers play in agriculture, and why is nutrient management important', function ($botman) {
            $this->reply($botman, "Fertilizers supply nutrients for crop growth, and nutrient management is vital for crop health and environmental sustainability. ");
        });
        $botman->hears('What are the common challenges faced by farmers in pest and disease management', function ($botman) {
            $this->reply($botman, "Common challenges in pest and disease management for farmers include pesticide resistance and the need for sustainable solutions");
        });
        $botman->hears('Explain the concept of sustainable agriculture and its significance in modern farming practices.', function ($botman) {
            $this->reply($botman, "Sustainable agriculture balances food production and environmental preservation in modern farming.");
        });
        $botman->hears('What are GMOs (Genetically Modified Organisms), and how are they used in agriculture', function ($botman) {
            $this->reply($botman, "GMOs (Genetically Modified Organisms) are organisms with altered genetics. In agriculture, they create crops with desirable traits, like pest resistance and higher yield.");
        });
        $botman->hears('What is irrigation, and why is it essential for agriculture in arid regions', function ($botman) {
            $this->reply($botman, "Irrigation is essential in arid regions because it provides much-needed water to crops in areas with low rainfall, ensuring agricultural productivity.");
        });
        $botman->hears('How does climate change impact agriculture, and what adaptive measures can farmers take', function ($botman) {
            $this->reply($botman, "Climate change affects agriculture by altering weather patterns and increasing extreme events. Farmers can adapt by using climate-resilient crops and adjusting farming practices.");
        });
        $botman->hears('Describe the role of bees and other pollinators in agriculture and food production.', function ($botman) {
            $this->reply($botman, "Bees and other pollinators are essential for agriculture by helping crops reproduce through pollination, ensuring food production");
        });
       $botman->hears('What is the purpose of farm equipment such as tractors and combines, and how have technological advancements improved farming efficiency', function ($botman) {
            $this->reply($botman, "Farm equipment like tractors and combines automate farming tasks, making them faster and more efficient. Technological advancements have further improved this efficiency. ");
        });
        $botman->hears('What are the different types of livestock raised in agriculture, and what are their primary products', function ($botman) {
            $this->reply($botman, "Livestock in agriculture include cattle (beef and dairy), pigs (pork), sheep (lamb and wool), poultry (chicken and turkey for meat and eggs), goats (chevon, milk), and aquaculture (fish and shellfish for consumption). ");
        });
        $botman->hears('Explain the concept of crop insurance and how it helps protect farmers from financial losses.', function ($botman) {
            $this->reply($botman, "Crop insurance protects farmers by providing financial compensation in the event of crop losses due to factors like weather, pests, or diseases, helping them recover and maintain financial stability. ");
        });
        $botman->hears('What is agroforestry, and how does it combine agriculture and forestry practices', function ($botman) {
            $this->reply($botman, "Agroforestry combines agriculture and forestry by planting trees alongside crops or livestock. It diversifies yields, improves sustainability, and provides economic and environmental benefits. ");
        });
        $botman->hears('What are the key components of a typical crop production cycle, from planting to harvest', function ($botman) {
            $this->reply($botman, "A typical crop production cycle includes planting, maintenance, growth, harvesting, and post-harvest handling. ");
        });
        $botman->hears('How do market forces, supply and demand, affect agricultural commodity prices', function ($botman) {
            $this->reply($botman, "Supply and demand are fundamental determinants of agricultural commodity prices. Excess supply often lowers prices, while high demand tends to raise them. ");
        });
        $botman->hears('What are some traditional and indigenous farming practices from different regions around the world', function ($botman) {
            $this->reply($botman,"Traditional farming practices vary by region and include methods like terrace farming, milpa farming, and rainwater harvesting, adapted to local conditions and passed down through generations. ");
        });
        $botman->hears('What is precision agriculture, and how does it utilize technology for more efficient and sustainable farming', function ($botman) {
            $this->reply($botman,"Precision agriculture uses technology like GPS, sensors, and data analysis to optimize farming. It reduces resource use, improves yields, and promotes sustainability.
            ");
        });
        $botman->hears('What is the significance of seeds in agriculture', function ($botman) {
            $this->reply($botman,"Seeds are the cornerstone of agriculture, holding the genetic code for crop production and genetic diversity. ");
        });
         $botman->hears('What are the different types of soil and their suitability for various crops ', function ($botman) {
            $this->reply($botman,"Soil types, such as sandy, clay, and loam, have varying textures and nutrient levels, impacting their suitability for specific crops. ");
        });
          $botman->hears('How do farmers manage weeds in their fields? ', function ($botman) {
            $this->reply($botman,"Farmers manage weeds through methods such as mechanical removal, herbicide use, crop rotation, and mulching.  ");
        });
         $botman->hears('Can you explain the concept of fertilizers in agriculture', function ($botman) {
            $this->reply($botman,"Fertilizers in agriculture provide essential nutrients to the soil, promoting healthy plant growth and higher crop yields. ");
        });
        $botman->hears('What is the difference between organic and inorganic fertilizers', function ($botman) {
             $this->reply($botman,"Organic fertilizers are natural and slow-release, while inorganic fertilizers are synthetic and fast-acting. ");
        });
        $botman->hears('How do farmers protect their crops from adverse weather conditions like frost or drought', function ($botman) {
            $this->reply($botman,"Farmers use frost blankets and drought-resistant crops to safeguard their crops from adverse weather conditions. ");
       });
       $botman->hears('What role do pollinators like bees play in agriculture ', function ($botman) {
        $this->reply($botman,"Pollinators, such as bees, are vital in agriculture as they enable the fertilization of crops, ensuring food production. ");
       });
       $botman->hears('What are some common methods of pest control in agriculture ', function ($botman) {
        $this->reply($botman,"Pollinators, such as bees, are vital in agriculture as they enable the fertilization of crops, ensuring food production. ");
       });
       $botman->hears('What is the importance of crop diversity in agriculture', function ($botman) {
        $this->reply($botman,"Crop diversity in agriculture is essential for resilience against pests, climate fluctuations, and nutritional diversity.");
       });
       $botman->hears('How is livestock farming different from crop farming  ', function ($botman) {
        $this->reply($botman,"Livestock farming: animals for meat, and dairy. Crop farming: plants for food, and products. ");
       });
       $botman->hears('What are the primary factors influencing the choice of crops and farming practices in a specific region ', function ($botman) {
        $this->reply($botman,"Crop and farming practices in a region are shaped by climate, soil, water, market demand, and government policies. ");
       });
       $botman->hears('How has technology, such as tractors and irrigation systems, transformed modern agriculture ', function ($botman) {
        $this->reply($botman,"Tractors and irrigation systems have modernized agriculture, boosting productivity, water efficiency, and sustainability.");
       });
       $botman->hears('What are some sustainable farming practices that promote soil health and conservation', function ($botman) {
        $this->reply($botman,"Sustainable farming practices like crop rotation and reduced tillage protect soil health by reducing erosion and preserving fertility. ");
       });
       $botman->hears('Can you explain the concept of agribusiness and its significance in the agricultural section', function ($botman) {
        $this->reply($botman,"Agribusiness involves agriculture, processing, and distribution, playing a key role in the economy, innovation, and food security in agriculture. ");
       });
       $botman->hears('What are the main challenges faced by small-scale farmers in developing countries ', function ($botman) {
        $this->reply($botman,"Small-scale farmers in developing countries grapple with resource constraints and climate challenges.");
       });
       $botman->hears('How does globalization affect the agricultural industry ', function ($botman) {
        $this->reply($botman,"Globalization in agriculture widens markets but can bring price volatility and environmental challenges. ");
       });
       $botman->hears('What is food security, and why is it important in agriculture ', function ($botman) {
        $this->reply($botman,"Food security in agriculture means ensuring consistent access to nutritious food, crucial for health and stability. ");
       });
       $botman->hears('How are genetically modified (GM) crops developed and used in agriculture ', function ($botman) {
        $this->reply($botman,"GM crops are created by modifying plant genes to introduce desired traits, such as pest resistance or higher yield, benefiting agriculture.");
       });
       $botman->hears('What is precision agriculture, and how does it benefit farmers', function ($botman) {
        $this->reply($botman,"Precision agriculture utilizes technology and data to enhance farming efficiency and profitability for farmers. ");
       });
       $botman->hears('How can consumers make more informed and sustainable choices when it comes to the food they buy', function ($botman) {
        $this->reply($botman,"To make sustainable choices, consumers can read labels, buy locally and seasonally, and reduce meat consumption. ");
       });
       $botman->hears('What are the key factors that contribute to high crop production in agriculture ', function ($botman) {
        $this->reply($botman,"Soil Quality: Fertile soil and optimal irrigation are critical for high crop production. ");
       });
       $botman->hears('How does soil quality affect crop yield, and what measures can be taken to improve it ', function ($botman) {
        $this->reply($botman,"Soil quality affects crop yield through nutrient availability and water retention. ");
       });
       $botman->hears('What are some common agricultural practices and techniques that can enhance crop production ', function ($botman) {
        $this->reply($botman,"Crop rotation helps improve soil health and prevent pest buildup. ");
       });
       $botman->hears('How does irrigation play a crucial role in achieving high crop yields, and what are the different irrigation methods used ', function ($botman) {
        $this->reply($botman,"Irrigation ensures consistent water supply, vital for high crop yields. Common methods include drip and sprinkler systems. ");
       });
       $botman->hears('What role do fertilizers and nutrients play in increasing crop production, and how can they be applied effectively', function ($botman) {
        $this->reply($botman,"Fertilizers enhance crop production by providing essential nutrients, applied based on soil tests for effective results. ");
       });
       $botman->hears('How does crop rotation benefit high crop production, and what are some recommended crop rotation strategies  ', function ($botman) {
        $this->reply($botman,"Crop rotation benefits high crop production through reduced soil depletion and pest control, employing strategies like legume integration.");
       });
       $botman->hears('What are the challenges associated with pest and disease management in agriculture, and how can they be mitigated to ensure high yields ', function ($botman) {
        $this->reply($botman,"Integrated pest management and resistant crop varieties are vital for mitigating challenges in pest and disease management in agriculture. ");
       });
       $botman->hears('How can modern technology, such as precision agriculture and data analytics, be employed to optimize crop production ', function ($botman) {
        $this->reply($botman,"Modern technology, including precision agriculture and data analytics, optimizes crop production through precise control and data-driven decision-making. ");
       });
       $botman->hears('What are some sustainable farming practices that can lead to increased crop production while preserving the environment  ', function ($botman) {
        $this->reply($botman,"Sustainable farming practices like crop rotation and no-till farming increase crop production while preserving the environment through improved soil health and reduced chemical usage ");
       });
       $botman->hears('what is agriculture ', function ($botman) {
        $this->reply($botman,"Agriculture is the cultivation of crops and the raising of animals for food and other products ");
       });
       $botman->hears('விவசாயத்தில் அதிக பயிர் உற்பத்திக்கு பங்களிக்கும் முக்கிய காரணிகள் யாவை  ', function ($botman) {
        $this->reply($botman,"மண்ணின் தரம்: வளமான மண் மற்றும் உகந்த நீர்ப்பாசனம் அதிக பயிர் உற்பத்திக்கு முக்கியமானதாகும்.");
       });
       $botman->hears('மண்ணின் தரம் பயிர் விளைச்சலை எவ்வாறு பாதிக்கிறது, அதை மேம்படுத்த என்ன நடவடிக்கைகள் எடுக்கப்படலாம் ', function ($botman) {
        $this->reply($botman,"மண்ணின் தரம் ஊட்டச்சத்து இருப்பு மற்றும் நீர் தக்கவைப்பு மூலம் பயிர் விளைச்சலை பாதிக்கிறது");
       });
       $botman->hears('பயிர் உற்பத்தியை அதிகரிக்கக்கூடிய சில பொதுவான விவசாய நடைமுறைகள் மற்றும் நுட்பங்கள் என்ன ', function ($botman) {
        $this->reply($botman,"பயிர் சுழற்சி மண்ணின் ஆரோக்கியத்தை மேம்படுத்தவும் பூச்சிகள் உருவாகாமல் தடுக்கவும் உதவுகிறது. ");
       });
       $botman->hears('அதிக பயிர் விளைச்சலைப் பெறுவதில் நீர்ப்பாசனம் எவ்வாறு முக்கியப் பங்கு வகிக்கிறது, மற்றும் பயன்படுத்தப்படும் பல்வேறு நீர்ப்பாசன முறைகள் என்ன', function ($botman) {
        $this->reply($botman,"நீர்ப்பாசனம் நிலையான நீர் விநியோகத்தை உறுதி செய்கிறது, அதிக பயிர் விளைச்சலுக்கு இன்றியமையாதது. பொதுவான முறைகளில் சொட்டுநீர் மற்றும் தெளிப்பான் அமைப்புகள் அடங்கும். ");
       });
       $botman->hears('பயிர் உற்பத்தியை அதிகரிப்பதில் உரங்கள் மற்றும் ஊட்டச்சத்துக்கள் என்ன பங்கு வகிக்கின்றன, அவற்றை எவ்வாறு திறம்பட பயன்படுத்தலாம்', function ($botman) {
        $this->reply($botman,"உரங்கள் தேவையான ஊட்டச்சத்துக்களை வழங்குவதன் மூலம் பயிர் உற்பத்தியை மேம்படுத்துகின்றன, பயனுள்ள முடிவுகளுக்கு மண் பரிசோதனையின் அடிப்படையில் பயன்படுத்தப்படுகின்றன  ");
       });
       $botman->hears('பயிர் சுழற்சி அதிக பயிர் உற்பத்திக்கு எவ்வாறு பயனளிக்கிறது மற்றும் சில பரிந்துரைக்கப்பட்ட பயிர் சுழற்சி உத்திகள் என்ன', function ($botman) {
        $this->reply($botman,"பயிர் சுழற்சியின் மூலம் அதிக பயிர் உற்பத்திக்கு குறைந்த மண் குறைதல் மற்றும் பூச்சி கட்டுப்பாடு, பயறு வகைகளை ஒருங்கிணைப்பது போன்ற உத்திகள் மூலம் பயனடைகிறது ");
       });
       $botman->hears('விவசாயத்தில் பூச்சி மற்றும் நோய் மேலாண்மை தொடர்பான சவால்கள் என்ன, அதிக மகசூலை உறுதி செய்ய அவற்றை எவ்வாறு குறைக்கலாம்', function ($botman) {
        $this->reply($botman,"விவசாயத்தில் பூச்சி மற்றும் நோய் மேலாண்மையில் உள்ள சவால்களைத் தணிக்க ஒருங்கிணைந்த பூச்சி மேலாண்மை மற்றும் எதிர்ப்பு பயிர் வகைகள் இன்றியமையாதவை  ");
       });
       $botman->hears('பயிர் உற்பத்தியை மேம்படுத்த துல்லியமான விவசாயம் மற்றும் தரவு பகுப்பாய்வு போன்ற நவீன தொழில்நுட்பத்தை எவ்வாறு பயன்படுத்தலாம்', function ($botman) {
        $this->reply($botman,"துல்லியமான விவசாயம் மற்றும் தரவு பகுப்பாய்வு உள்ளிட்ட நவீன தொழில்நுட்பம், துல்லியமான கட்டுப்பாட்டின் மூலம் பயிர் உற்பத்தியை மேம்படுத்துகிறது ");
       });
       $botman->hears('சுற்றுச்சூழலைப் பாதுகாக்கும் போது பயிர் உற்பத்தியை அதிகரிக்க வழிவகுக்கும் சில நிலையான விவசாய நடைமுறைகள் யாவை', function ($botman) {
        $this->reply($botman,"நிலையான விவசாய முறைகளான பயிர் சுழற்சி மற்றும் விவசாயம் செய்யாதது பயிர் உற்பத்தியை அதிகரிக்கும் அதே வேளையில் மேம்படுத்தப்பட்ட மண் ஆரோக்கியம் மற்றும் குறைக்கப்பட்ட ரசாயன பயன்பாடு மூலம் சுற்றுச்சூழலை பாதுகாக்கிறது.");
       });
       $botman->hears('குறிப்பிட்ட பகுதிகள் மற்றும் தட்பவெப்ப நிலைகளுக்கு ஏற்ற பயிர் வகைகள் மற்றும் பயிர்வகைகளைத் தேர்ந்தெடுப்பதன் முக்கியத்துவம் என்ன?', function ($botman) {
        $this->reply($botman,"குறிப்பிட்ட பகுதிகள் மற்றும் தட்பவெப்ப நிலைகளுக்கு ஏற்ற பயிர் வகைகளைத் தேர்ந்தெடுப்பது, மகசூல் திறனை அதிகரிக்கவும், உள்ளூர் நிலைமைகளுக்கு ஏற்றவாறு மாற்றவும் இன்றியமையாதது.");
       });
       $botman->hears('விவசாயம் என்றால் என்ன', function ($botman) {
        $this->reply($botman,"விவசாயம் என்பது பயிர்களை வளர்ப்பது மற்றும் உணவு மற்றும் பிற பொருட்களுக்காக விலங்குகளை வளர்ப்பது");
       });
      
       
       
       
       

       













       

        


       
        $botman->listen();
    
    }
    private function reply($botman, $message)
    {
        $botman->reply($message);
    }
}
