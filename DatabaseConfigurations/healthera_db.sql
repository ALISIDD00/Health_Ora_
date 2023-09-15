-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 12:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthera_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteById` (`tableName` VARCHAR(500), `id` INT, `isSoftDelete` BIT)   BEGIN

	SET @Query = IF (
                        isSoftDelete = 1, 
                        concat('UPDATE ', tableName , ' SET Deleted = 1 WHERE Id = ', id),
                        concat('DELETE FROM ', tableName, ' WHERE Id = ', id)
                    );
                    
	prepare Q from @query;
    EXECUTE Q;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `select_employee_by_procedure` ()   BEGIN
select * from employee;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `adult`
--

CREATE TABLE `adult` (
  `id` int(13) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `a_bio` varchar(500) NOT NULL,
  `b_bio` varchar(500) NOT NULL,
  `c_bio` varchar(500) NOT NULL,
  `Deleted` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adult`
--

INSERT INTO `adult` (`id`, `image`, `name`, `description`, `a_bio`, `b_bio`, `c_bio`, `Deleted`) VALUES
(1, 'Services/Fitnessprogram/image/bicepcurls.jpg', 'Pull-up', 'Benefits:', 'Strengthens upper back and biceps', 'Improves grip strength', 'Challenges core stability', b'0'),
(2, 'Services/Fitnessprogram/image/squats.jpg', 'Squats', 'Benefits:', 'Strengthens lower body muscles', 'Improves leg strength and endurance', 'Engage core muscles', b'0'),
(3, 'Services/Fitnessprogram/image/Deadlift.jpg', 'Deadlift', 'Benefits:', 'Targets hamstrings and lower back', 'Enhances hip and back strength', 'Improves overall body posture', b'0'),
(4, 'Services/Fitnessprogram/image/legpress.jpg', 'Leg Press', 'Benefits:', 'Targets quadriceps, hamstrings, and glutes', 'Strengthens lower body muscles', 'Provide a full leg workout', b'0'),
(5, 'Services/Fitnessprogram/image/cycling.jpg', 'Cycling', 'Benefits:', 'Low-impact cardiovascular exercise', 'Strengthens leg muscles and improves endurance', 'Enhance joint mobility', b'0'),
(6, 'Services/Fitnessprogram/image/jumpingjacks.jpg', 'Jump Rope', 'Benefits:', 'Cardiovascular workout', 'Improves coordination and agility', 'Burn calories and enhances endurance', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_form`
--

CREATE TABLE `appointment_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `services` varchar(100) NOT NULL,
  `number` int(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `date_published` date DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `content`, `image_url`, `date_published`, `author`) VALUES
(1, 1, 'The Benefits of Regular Exercise', 'Regular exercise is essential for maintaining good health and well-being. It offers a wide range of physical, mental, and emotional benefits that can significantly improve your overall quality of life.\n\nOne of the most obvious benefits of regular exercise is its positive impact on physical health. Engaging in regular physical activity helps you maintain a healthy weight, reduce the risk of chronic diseases such as heart disease and diabetes, and enhance your cardiovascular fitness. It also strengthens your muscles and bones, improving your overall physical strength and endurance.\n\nExercise is not only good for your body but also for your mind. It has been shown to reduce stress and anxiety, improve mood, and boost mental clarity and cognitive function. Regular physical activity increases the release of endorphins, which are natural mood lifters, leading to a greater sense of well-being.\n\nMoreover, exercise can be an excellent way to improve sleep quality. A consistent exercise routine can help regulate sleep patterns, making it easier to fall asleep and stay asleep through the night. This, in turn, leads to better overall rest and increased daytime energy.\n\nAnother significant benefit of exercise is its ability to boost the immune system. Regular physical activity can enhance the body\'s natural defense mechanisms, making it more resilient to illnesses and infections. It also improves circulation, ensuring that essential nutrients and oxygen are delivered to all parts of the body.\n\nFurthermore, exercise can be a social activity that fosters connections and relationships. Engaging in group fitness classes or team sports provides an opportunity to meet new people, strengthen existing friendships, and build a sense of community.\n\nTo reap the full benefits of regular exercise, it\'s essential to find activities that you enjoy and can maintain consistently. Whether it\'s running, cycling, swimming, dancing, or practicing yoga, the key is to stay active and make it a part of your daily or weekly routine.\n\nIn conclusion, regular exercise is a powerful tool for enhancing your physical, mental, and emotional well-being. It contributes to better physical fitness, improved mood, enhanced sleep quality, a stronger immune system, and social connections. By incorporating exercise into your life, you can enjoy a healthier and happier existence.', 'latestnewspic/fitnessrun_img.jpg', '2023-09-20', 'John Doe'),
(2, 1, 'Effective Workouts for Building Muscle', 'Building muscle through effective workouts is a goal for many fitness enthusiasts. Whether you\'re a beginner or an experienced lifter, the right workout routine can help you achieve your muscle-building objectives. In this article, we\'ll explore some of the most effective workouts for building lean muscle mass.\n\nResistance Training: Resistance training is the foundation of muscle building. It involves lifting weights, using resistance bands, or using your body weight to challenge your muscles. Compound exercises like squats, deadlifts, bench presses, and pull-ups target multiple muscle groups simultaneously, leading to efficient muscle growth.\n\nSplit Workouts: Split workouts involve targeting specific muscle groups on different days of the week. For example, you might focus on chest and triceps one day, back and biceps another day, and legs on a separate day. This approach allows you to work each muscle group intensely and allows for adequate recovery.\n\nProgressive Overload: To stimulate muscle growth, you need to gradually increase the resistance or weight you lift over time. Progressive overload is the key to building muscle. This can be achieved by adding more weight, increasing repetitions, or improving your workout intensity.\n\nIsolation Exercises: Isolation exercises target a single muscle group, allowing you to fine-tune specific areas. Examples include bicep curls, tricep extensions, and calf raises. Incorporating isolation exercises into your routine can help create a balanced physique.\n\nNutrition: Proper nutrition is essential for muscle growth. Ensure you\'re consuming enough protein to support muscle repair and growth. Carbohydrates provide energy for workouts, and healthy fats are vital for overall health. Stay hydrated and consider supplements like protein shakes if necessary.\n\nRest and Recovery: Muscles need time to recover and grow. Ensure you get adequate sleep and allow at least 48 hours of rest between working the same muscle group. Rest and recovery are crucial for preventing overtraining and injury.\n\nConsistency: Consistency is key when it comes to building muscle. Stick to your workout plan and nutrition regimen over the long term to see significant results.\n\nIn conclusion, building muscle requires a combination of effective workouts, proper nutrition, rest, and consistency. Whether your goal is to gain strength, improve athletic performance, or enhance your physique, these principles can help you on your journey to building muscle.', 'latestnewspic/muscle_workout.jpg', '2023-09-18', 'Jane Smith'),
(3, 2, 'Balanced Nutrition for a Healthy Life', 'Balanced nutrition plays a crucial role in promoting a healthy and fulfilling life. The food choices you make directly impact your overall well-being, energy levels, and long-term health. Here, we delve into the importance of balanced nutrition and offer guidance on how to achieve it.\n\nA well-balanced diet provides the body with the essential nutrients it needs to function optimally. These nutrients include carbohydrates, proteins, fats, vitamins, minerals, and water. Each nutrient serves a unique purpose, from providing energy to supporting cellular functions and growth.\n\nOne of the key aspects of balanced nutrition is consuming a variety of foods from all food groups. These groups include fruits, vegetables, whole grains, lean proteins, and dairy products. By incorporating a wide range of foods into your diet, you ensure that you receive a diverse array of nutrients.\n\nFruits and vegetables are rich in vitamins, minerals, and antioxidants that help protect the body against diseases. Whole grains offer fiber for digestive health, while lean proteins provide essential amino acids for muscle and tissue repair. Dairy products are excellent sources of calcium and vitamin D, promoting strong bones.\n\nPortion control is another essential component of balanced nutrition. Overeating, even healthy foods, can lead to excess calorie intake and potential weight gain. It\'s crucial to be mindful of portion sizes to maintain a healthy body weight.\n\nFurthermore, staying hydrated is a fundamental part of balanced nutrition. Water supports various bodily functions, including digestion, circulation, and temperature regulation. Aim to drink an adequate amount of water daily to stay hydrated.\n\nBalanced nutrition isn\'t just about what you eat; it\'s also about how you eat. Practicing mindful eating involves savoring each bite, paying attention to hunger and fullness cues, and avoiding distractions while eating. This mindful approach can help prevent overeating and improve digestion.\n\nAchieving balanced nutrition is an ongoing process that requires conscious effort. It\'s essential to create a meal plan that includes a variety of nutrient-rich foods. Consulting with a registered dietitian or nutritionist can provide personalized guidance tailored to your specific dietary needs and health goals.\n\nIn conclusion, balanced nutrition is the foundation of a healthy life. By consuming a variety of foods in appropriate portions and practicing mindful eating, you can support your overall well-being and enjoy the benefits of a nutritious diet.', 'latestnewspic/nutrition_img.jpg', '2023-09-19', 'Mary Johnson'),
(4, 2, 'Superfoods: Nature\'s Nutrient Powerhouses', 'Article Content:\n\nSuperfoods are a category of foods known for their exceptional nutritional value and health benefits. Packed with vitamins, minerals, antioxidants, and other essential nutrients, these foods have gained popularity for their potential to support overall well-being and prevent various diseases.\n\nBerries: Berries such as blueberries, strawberries, and raspberries are rich in antioxidants, particularly anthocyanins. These compounds help fight free radicals in the body, reducing the risk of oxidative stress and chronic diseases. Berries are also a good source of dietary fiber, which aids in digestion and helps control blood sugar levels.\n\nLeafy Greens: Leafy greens like kale, spinach, and Swiss chard are packed with vitamins, especially vitamin K, which is essential for bone health and blood clotting. They also provide a wealth of minerals like calcium and iron, along with antioxidants like lutein and zeaxanthin, which support eye health.\n\nNuts and Seeds: Almonds, walnuts, chia seeds, and flaxseeds are nutritional powerhouses. They are rich in healthy fats, particularly omega-3 fatty acids, which are beneficial for heart health. Additionally, nuts and seeds provide protein, fiber, and essential vitamins and minerals.\n\nFatty Fish: Salmon, mackerel, and sardines are excellent sources of omega-3 fatty acids, which have anti-inflammatory properties and contribute to cardiovascular health. These fish also provide high-quality protein and essential nutrients like vitamin D.\n\nBeans and Legumes: Beans, lentils, and chickpeas are high in fiber, protein, and complex carbohydrates. They help stabilize blood sugar levels, promote digestive health, and contribute to feelings of fullness and satiety.\n\nTurmeric: Turmeric is a spice with potent anti-inflammatory and antioxidant properties, mainly due to its active compound, curcumin. It has been linked to various health benefits, including reducing the risk of chronic diseases and alleviating symptoms of arthritis.\n\nQuinoa: Quinoa is a gluten-free grain known for its exceptional protein content and a complete amino acid profile. It\'s an excellent source of fiber, vitamins, and minerals, making it a popular choice for those seeking a nutritious alternative to traditional grains.\n\nYogurt: Yogurt is rich in probiotics, which are beneficial bacteria that support gut health and the immune system. It\'s also a good source of calcium, protein, and essential vitamins like vitamin B12.\n\nAvocado: Avocado is a unique fruit loaded with heart-healthy monounsaturated fats, fiber, and an array of vitamins and minerals. It\'s known to promote healthy cholesterol levels and support overall cardiovascular health.\n\nDark Chocolate: Dark chocolate with a high cocoa content is a source of antioxidants and flavonoids, which have been associated with improved heart health and cognitive function. However, moderation is key due to its calorie content.\n\nIncorporating superfoods into your diet can provide a wide range of health benefits. Including a variety of these nutrient-rich foods in your meals can support your overall well-being and contribute to a balanced and nutritious diet.\n\nPlease note that while superfoods offer numerous health advantages, it\'s important to maintain a well-rounded diet that includes a variety of foods to ensure you receive all essential nutrients.\n\n\n\n\n', 'latestnewspic/superfoods_image.jpg', '2023-09-17', 'David Brown'),
(5, 3, 'Managing Stress and Anxiety', 'Stress and anxiety are common experiences in today\'s fast-paced world. While some level of stress is a natural response to life\'s challenges, excessive or chronic stress can have detrimental effects on both physical and mental health. Fortunately, there are effective strategies for managing stress and anxiety and promoting overall well-being.\n\nDeep Breathing: Deep breathing exercises can help reduce stress and anxiety by activating the body\'s relaxation response. Try taking slow, deep breaths in through your nose, holding for a few seconds, and exhaling slowly through your mouth. This simple practice can calm your nervous system and lower stress levels.\n\nMindfulness Meditation: Mindfulness meditation involves focusing your attention on the present moment without judgment. Regular practice can increase self-awareness, reduce rumination, and improve emotional regulation. There are many guided mindfulness meditation apps and resources available to help get you started.\n\nPhysical Activity: Exercise is a powerful stress reducer. Physical activity releases endorphins, the body\'s natural mood lifters, and helps reduce cortisol, a stress hormone. Find an activity you enjoy, whether it\'s walking, cycling, dancing, or yoga, and make it a regular part of your routine.\n\nHealthy Diet: A balanced diet with plenty of fruits, vegetables, whole grains, lean proteins, and healthy fats provides essential nutrients that support overall well-being. Avoid excessive caffeine and sugar intake, as they can exacerbate anxiety symptoms.\n\nAdequate Sleep: Sleep plays a crucial role in stress management. Aim for seven to nine hours of quality sleep per night. Establish a bedtime routine and create a comfortable sleep environment to improve your sleep patterns.\n\nSocial Connections: Maintaining strong social connections can provide emotional support during stressful times. Spend time with friends and family, engage in meaningful conversations, and seek out social activities that bring you joy.\n\nTime Management: Effective time management can reduce stress by helping you prioritize tasks and avoid overwhelming yourself with too many commitments. Create a daily or weekly schedule to organize your time effectively.\n\nSeeking Professional Help: If stress and anxiety become overwhelming, don\'t hesitate to seek help from a mental health professional. Therapy, counseling, or medication may be appropriate treatment options for managing severe anxiety or stress disorders.\n\nRelaxation Techniques: Incorporate relaxation techniques into your daily routine, such as progressive muscle relaxation, guided imagery, or aromatherapy. These practices can help you unwind and reduce stress levels.\n\nLimiting Stressors: Identify and address sources of stress in your life. Whether it\'s work-related issues, financial concerns, or personal conflicts, taking steps to address and manage stressors can lead to a more peaceful and balanced life.\n\nRemember that managing stress and anxiety is an ongoing process. It\'s essential to find strategies that work best for you and incorporate them into your daily life. By prioritizing your mental and emotional well-being, you can reduce the negative impact of stress and lead a more fulfilling and peaceful life.', 'latestnewspic/mental_health_image.jpg', '2023-09-16', 'Emily White'),
(6, 3, 'The Power of Mindfulness Meditation', 'Mindfulness meditation has gained popularity in recent years as a powerful tool for enhancing mental well-being and reducing stress. Rooted in ancient Eastern practices, mindfulness meditation involves focusing one\'s attention on the present moment and accepting it without judgment. The practice can be a valuable tool in combating stress, anxiety, and enhancing overall mental health.\n\nUnderstanding Mindfulness Meditation:\n\nAt its core, mindfulness meditation is about being fully present in the moment. It encourages individuals to acknowledge their thoughts, feelings, and sensations without trying to change or judge them. This non-judgmental awareness of the present moment can lead to various mental and emotional benefits.\n\nStress Reduction:\n\nOne of the primary benefits of mindfulness meditation is its ability to reduce stress. By training the mind to stay in the present moment, individuals can break the cycle of rumination and worry that often accompanies stressful situations. Over time, this practice can help lower stress hormone levels and promote a sense of calm and relaxation.\n\nAnxiety Management:\n\nMindfulness meditation is also effective in managing anxiety. It teaches individuals to observe anxious thoughts and sensations without becoming overwhelmed by them. This increased awareness can lead to greater emotional regulation and reduced anxiety symptoms.\n\nImproved Focus and Concentration:\n\nRegular mindfulness practice can enhance focus and concentration. By training the mind to stay attentive to the present moment, individuals can better avoid distractions and improve their ability to complete tasks efficiently.\n\nEmotional Well-being:\n\nMindfulness meditation promotes emotional well-being by fostering self-compassion and self-acceptance. It encourages individuals to treat themselves with kindness and understanding, leading to improved self-esteem and reduced self-criticism.\n\nBetter Relationships:\n\nMindfulness can positively impact relationships by enhancing communication and empathy. When individuals are fully present in their interactions with others, they can listen more attentively and respond more effectively.\n\nHow to Practice Mindfulness Meditation:\n\nFind a Quiet Space: Choose a quiet place where you won\'t be disturbed. Sit or lie down in a comfortable position.\n\nFocus on Your Breath: Close your eyes and take a few deep breaths. Then, simply observe your breath as it goes in and out. Notice the sensation of each breath without trying to control it.\n\nStay Present: Your mind may wander, and that\'s okay. When you notice your thoughts drifting, gently bring your focus back to your breath. Be patient with yourself; mindfulness is a skill that develops over time.\n\nPractice Regularly: Consistency is key. Aim to practice mindfulness meditation for a few minutes each day and gradually increase the duration as you become more comfortable with the practice.\n\nIn conclusion, mindfulness meditation is a powerful practice that can enhance mental well-being, reduce stress, and improve overall quality of life. By incorporating mindfulness into your daily routine, you can reap the numerous benefits it offers for your mental and emotional health.', 'latestnewspic/mindfulness_image.jpg', '2023-09-15', 'Michael Lee'),
(7, 4, 'Advancements in Cancer Treatment', 'Cancer treatment has seen remarkable advancements in recent years, offering new hope and improved outcomes for patients. These innovations are changing the landscape of oncology and bringing us closer to more effective and personalized cancer care.\n\nImmunotherapy Breakthroughs: Immunotherapy has emerged as a game-changer in cancer treatment. This approach harnesses the power of the patient\'s immune system to target and destroy cancer cells. Checkpoint inhibitors, CAR-T cell therapy, and immune checkpoint inhibitors have shown promising results in various cancer types, leading to long-lasting remissions in some cases.\n\nPrecision Medicine: Precision medicine is revolutionizing cancer treatment by tailoring therapies to individual patients based on their unique genetic and molecular profiles. Targeted therapies, such as tyrosine kinase inhibitors, have shown significant efficacy in cancers with specific genetic mutations, such as EGFR or BRAF mutations.\n\nLiquid Biopsies: Liquid biopsies have emerged as a less invasive and more accessible way to detect cancer and monitor treatment response. These blood tests can detect circulating tumor DNA (ctDNA), providing real-time information about a patient\'s cancer status and allowing for more timely adjustments in treatment plans.\n\nMinimally Invasive Surgeries: Advancements in surgical techniques have led to less invasive procedures, reducing the physical impact on patients. Robotic-assisted surgeries and laparoscopic approaches allow for faster recovery and fewer complications.\n\nRadiation Therapy Innovations: Radiation therapy continues to evolve with innovations like proton therapy and stereotactic body radiation therapy (SBRT). These precise radiation techniques target tumors with higher accuracy while sparing healthy surrounding tissues, reducing side effects.\n\nArtificial Intelligence (AI): AI and machine learning are being used to analyze vast amounts of medical data, helping clinicians make more informed decisions about cancer diagnosis and treatment. AI-driven tools can assist in early cancer detection and predict treatment responses.\n\nLiquid Immunotherapy: Researchers are exploring the potential of liquid immunotherapy, where immune-stimulating agents are administered orally or intravenously to activate the body\'s immune response against cancer cells. This approach could offer a less invasive alternative to traditional immunotherapies.\n\nCombination Therapies: Combining different treatment modalities, such as immunotherapy with targeted therapy or chemotherapy, has shown promising results in improving treatment outcomes and overcoming resistance mechanisms.\n\nEarly Detection: Advances in early cancer detection technologies, such as cancer biomarkers and advanced imaging techniques, are leading to earlier diagnoses when cancer is more treatable.\n\nPatient-Centered Care: Patient-centered care models emphasize a holistic approach to cancer treatment, considering not only the physical aspects but also the emotional and psychological well-being of patients. Supportive care services, including psychosocial support and survivorship programs, are integral to cancer care.\n\nThese advancements signify a new era in cancer treatment, where therapies are becoming more precise, less invasive, and better tailored to individual patients. While challenges remain, including access to these cutting-edge treatments, the future of cancer care is filled with hope and the promise of improved outcomes for patients facing this complex disease. Researchers and clinicians continue to work tirelessly to push the boundaries of science and medicine in the fight against cancer..', 'latestnewspic/cancer_treatment_image.jpg', '2023-09-14', 'Sophia Wilson'),
(8, 4, 'Breakthrough in Alzheimer\'s Research', 'Alzheimer\'s disease, a devastating neurodegenerative condition, has long been a puzzle for scientists and clinicians. However, recent breakthroughs in Alzheimer\'s research are shedding new light on the disease and offering hope for potential treatments and interventions.\n\nUnderstanding Alzheimer\'s Disease:\n\nAlzheimer\'s disease is characterized by the accumulation of abnormal protein deposits in the brain, specifically beta-amyloid plaques and tau tangles. These accumulations disrupt normal brain function, leading to memory loss, cognitive decline, and ultimately, a loss of independence.\n\nThe Breakthrough:\n\nOne of the most significant breakthroughs in Alzheimer\'s research involves the identification of potential therapies that target the underlying causes of the disease. While there is no cure for Alzheimer\'s, these emerging treatments aim to slow or even halt its progression.\n\nAntibody-Based Therapies: Researchers have developed antibody-based therapies that specifically target and remove beta-amyloid plaques from the brain. Clinical trials have shown promising results, with some patients experiencing a reduction in cognitive decline.\n\nTau-Targeted Therapies: Another exciting avenue of research focuses on tau tangles, another hallmark of Alzheimer\'s. Drugs designed to target tau and prevent its abnormal aggregation are in development, offering hope for slowing disease progression.\n\nBlood Biomarkers: Identifying Alzheimer\'s disease in its early stages is crucial for effective intervention. Blood-based biomarkers are being studied as a potential way to detect Alzheimer\'s before symptoms become evident, allowing for earlier treatment and better outcomes.\n\nPrecision Medicine: Alzheimer\'s research is moving towards precision medicine, where therapies are tailored to an individual\'s unique genetic and molecular profile. This personalized approach could lead to more effective treatments and improved patient outcomes.\n\nLifestyle Interventions: Research also emphasizes the importance of lifestyle factors in Alzheimer\'s prevention and management. Studies suggest that a healthy diet, regular exercise, social engagement, and cognitive stimulation may reduce the risk of developing the disease.\n\nThe Importance of Early Detection:\n\nEarly detection of Alzheimer\'s is crucial for maximizing the effectiveness of potential treatments. While current diagnostic methods rely on cognitive assessments and brain imaging, emerging technologies and biomarkers may lead to more accurate and accessible methods for early diagnosis.\n\nThe Road Ahead:\n\nDespite these promising breakthroughs, challenges remain in the fight against Alzheimer\'s. Developing effective therapies, ensuring access to treatments, and addressing the emotional and caregiving burden on patients and families are ongoing priorities.\n\nHope for the Future:\n\nThe recent advancements in Alzheimer\'s research provide a glimmer of hope for the millions of individuals and families affected by this devastating disease. While there is still much work to be done, the progress made underscores the resilience of the scientific community in the pursuit of solutions for Alzheimer\'s disease.\n\nAs research continues to unravel the mysteries of Alzheimer\'s, the ultimate goal is to not only find effective treatments but also to improve the quality of life for those living with the disease. The collaborative efforts of scientists, clinicians, and caregivers offer a brighter future for those affected by Alzheimer\'s and inspire hope for a world without this devastating condition.', 'latestnewspic/alzheimers_research_image.jpg', '2023-09-13', 'Robert Taylor');

-- --------------------------------------------------------

--
-- Table structure for table `balanced_diet`
--

CREATE TABLE `balanced_diet` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `balanced_diet`
--

INSERT INTO `balanced_diet` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, '10 Tips for a Balanced Diet', 'Maintaining a balanced diet is essential for overall health and well-being. A balanced diet provides the body with the right nutrients in the right proportions to support optimal functioning. With so much information available about diets and nutrition, it\'s important to focus on fundamental principles that promote a balanced and sustainable approach to eating. Here are 10 tips to help you achieve a balanced diet:', ''),
(2, '1. Eat a Variety of Foods', 'Including a wide range of foods in your diet ensures that you receive a diverse array of nutrients. Aim to include different fruits, vegetables, whole grains, lean proteins, and healthy fats to provide your body with the necessary vitamins, minerals, and antioxidants.', ''),
(3, '2. Prioritize Whole Grains', 'Choose whole grains like brown rice, quinoa, whole wheat bread, and oats over refined grains. Whole grains are rich in fiber, which aids digestion and helps maintain steady blood sugar levels.', ''),
(4, '3. Include Lean Proteins', 'Incorporate sources of lean protein, such as poultry, fish, beans, lentils, tofu, and nuts. Protein is essential for building and repairing tissues and helps you feel fuller for longer.', ''),
(5, '4. Load Up on Fruits and Vegetables', 'Aim to fill half your plate with fruits and vegetables. These foods are low in calories and high in vitamins, minerals, and fiber. They also contribute to a sense of fullness and satisfaction.', ''),
(6, '5. Control Portion Sizes', 'Be mindful of portion sizes to avoid overeating. Use smaller plates and listen to your body\'s hunger and fullness cues. Avoid eating until you\'re overly full.', ''),
(7, '6. Limit Added Sugars', 'Minimize your intake of sugary beverages, desserts, and processed foods high in added sugars. Instead, opt for naturally sweet foods like fruits and limit your consumption of sugary treats.', ''),
(8, '7. Choose Healthy Fats', 'Include sources of healthy fats like avocados, nuts, seeds, and olive oil. These fats are important for brain health, hormone production, and overall cellular function.', ''),
(9, '8. Stay Hydrated', 'Drink plenty of water throughout the day. Water is essential for digestion, circulation, temperature regulation, and overall bodily functions. Herbal teas and infused water can also add variety to your hydration routine.', ''),
(10, '9. Plan Your Meals', 'Planning your meals and snacks ahead of time can help you make healthier choices and avoid impulsive, less nutritious options. Prep meals with a good balance of proteins, carbohydrates, and vegetables.', ''),
(11, '10. Practice Moderation', 'Enjoy treats and less nutritious foods in moderation. Completely depriving yourself can lead to cravings and overindulgence later. It\'s all about finding a sustainable balance that works for you.', ''),
(12, '', 'Remember, a balanced diet is not about strict rules or perfection. It\'s about making consistent, informed choices that support your overall health and well-being. Consulting with a registered dietitian can provide personalized guidance tailored to your specific needs and goals.', ''),
(13, '', 'In conclusion, adopting a balanced diet is a holistic approach to nourishing your body with the nutrients it needs. By incorporating these 10 tips into your eating habits, you can pave the way for a healthier and more energetic lifestyle.', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(13) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `paragraph`) VALUES
(14, '', '', '<p>Welcome to Health-Ora!</p>'),
(16, '', '', '<div style=\"width: 800px; height: 600px; padding: 20px; text-align: center; border: 10px solid #787878;\">\n<div style=\"width: 750px; height: 550px; padding: 20px; text-align: center; border: 5px solid #787878;\"><span style=\"font-size: 50px; font-weight: bold;\">Certificate of Completion</span> <br><br><span style=\"font-size: 25px;\"><em>This is to certify that</em></span> <br><br><span style=\"font-size: 30px;\"><strong>$student.getFullName()</strong></span><br><br><span style=\"font-size: 25px;\"><em>has completed the course</em></span> <br><br><span style=\"font-size: 30px;\">$course.getName()</span> <br><br><span style=\"font-size: 20px;\">with score of <strong>$grade.getPoints()%</strong></span> <br><br><br><br><span style=\"font-size: 25px;\"><em>dated</em></span><br>#set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), \"MMMM dd, yyyy\")) <span style=\"font-size: 30px;\">$dt</span></div>\n</div>'),
(17, '', '', '<p>Welcome to TinyMCE!asdasdkjlkajd</p>'),
(18, '', '', '<div style=\"width: 800px; height: 600px; padding: 20px; text-align: center; border: 10px solid #787878;\">\r\n<div style=\"width: 750px; height: 550px; padding: 20px; text-align: center; border: 5px solid #787878;\"><span style=\"font-size: 50px; font-weight: bold;\">Certificate of Completion</span> <br><br><span style=\"font-size: 25px;\"><em>This is to certify that</em></span> <br><br><span style=\"font-size: 30px;\"><strong>$student.getFullName()</strong></span><br><br><span style=\"font-size: 25px;\"><em>has completed the course</em></span> <br><br><span style=\"font-size: 30px;\">$course.getName()</span> <br><br><span style=\"font-size: 20px;\">with score of <strong>$grade.getPoints()%</strong></span> <br><br><br><br><span style=\"font-size: 25px;\"><em>dated</em></span><br>#set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), \"MMMM dd, yyyy\")) <span style=\"font-size: 30px;\">$dt</span></div>\r\n</div>'),
(19, '', '', '<p><strong>Welcome </strong>to TinyMCE!fdf</p>'),
(20, '', '', '<p>Welcome to TinyMCE!<strong>helloooo</strong></p>'),
(21, '', '', '<p>Welcome to TinyMCE!<strong>Shaloom</strong></p>'),
(22, '', '', '<p>Welcome to TinyMCE!<strong>HEY</strong>yydglmkfxmgd</p>'),
(23, '', '', '<p>Welcome to Health Ora ...!</p>'),
(24, '', '', '<p>Welcome to TinyMCE!ss</p>'),
(25, '', '', '<p>Welcome to TinyMCE!jj</p>'),
(26, '', '', '<p>Welcome to TinyMCE!</p>'),
(27, '', '', '<p>Welcome to TinyMCE!helooo</p>');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast_recipes`
--

CREATE TABLE `breakfast_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast_recipes`
--

INSERT INTO `breakfast_recipes` (`id`, `title`, `ingredients`, `instructions`, `picture`) VALUES
(1, 'Oatmeal with Berries', '1/2 cup rolled oats, 1 cup mixed berries, 1 tbsp honey', '1. Cook oats according to package instructions.\n2. Top with mixed berries and drizzle with honey.', 'Ourspecialities/img/greek-yogurt-parfait.jpg'),
(2, 'Greek Yogurt Parfait', '1 cup Greek yogurt, 1/4 cup granola, 1/2 cup mixed fruit', '1. Layer Greek yogurt, granola, and mixed fruit in a glass.\n2. Repeat layers.\n3. Enjoy!', 'Ourspecialities/img/blueberry-oatmeal.jpg'),
(3, 'Avocado Toast', '1 whole-grain toast, 1 ripe avocado, salt and pepper to taste', '1. Mash avocado and spread onto toast.\n2. Season with salt and pepper.', 'Ourspecialities/img/avocado-toast.jpg'),
(4, 'Egg and Veggie Scramble', '2 eggs, 1/2 cup diced vegetables (bell peppers, spinach, onions), 1 tsp olive oil', '1. Heat oil in a pan and sauté veggies.\n2. Add beaten eggs and scramble until cooked.', 'Ourspecialities/img/egg-veggie-scrumble.jpg'),
(5, 'Smoothie Bowl', '1 frozen banana, 1/2 cup mixed berries, 1/2 cup spinach, 1/4 cup almond milk', '1. Blend ingredients until smooth.\n2. Pour into a bowl and top with your favorite toppings.', 'Ourspecialities/img/smootie-bowl.jpg'),
(6, 'Whole-Grain Pancakes', '1 cup whole-grain flour, 1 tbsp honey, 1 tsp baking powder, 1 egg', '1. Mix all ingredients until smooth.\n2. Cook pancakes on a griddle.', 'Ourspecialities/img/Whole-Wheat-Pancakes.jpg'),
(7, 'Chia Seed Pudding', '2 tbsp chia seeds, 1 cup almond milk, 1 tsp vanilla extract', '1. Mix chia seeds, almond milk, and vanilla.\n2. Refrigerate overnight.\n3. Top with fruit before serving.', 'Ourspecialities/img/chia-seed-pudding.jpg'),
(8, 'Fruit Salad', 'Assorted fresh fruits (berries, kiwi, mango, etc.)', '1. Chop fruits and mix in a bowl.\n2. Serve as a colorful and refreshing breakfast.', 'Ourspecialities/img/fruit-salad.jpg'),
(9, 'Homemade Granola', '2 cups rolled oats, 1/4 cup honey, 1/4 cup chopped nuts, 1/4 cup dried fruit', '1. Mix oats, honey, nuts, and dried fruit.\n2. Spread on a baking sheet and bake until golden.', 'Ourspecialities/img/granola.jpg'),
(10, 'Peanut Butter Banana Toast', '1 whole-grain toast, 1 tbsp peanut butter, 1 banana', '1. Spread peanut butter on toast.\n2. Top with sliced banana.', 'Ourspecialities/img/peanut-butter-banana-bread.jpg'),
(11, 'Yogurt and Berry Parfait', '1 cup low-fat yogurt, 1/4 cup granola, 1/2 cup mixed berries', '1. Layer yogurt, granola, and berries in a glass.\n2. Repeat layers.\n3. Enjoy!', 'Ourspecialities/img/berry.jpg'),
(12, 'Egg White Omelette', '3 egg whites, 1/4 cup diced vegetables (tomatoes, onions, mushrooms), 1/4 cup spinach', '1. Whisk egg whites and pour into a hot pan.\n2. Add veggies and cook until set.', 'Ourspecialities/img/egg-white-omelet.jpg'),
(13, 'Cottage Cheese with Fruit', '1/2 cup low-fat cottage cheese, 1/2 cup mixed fruit (pineapple, peaches, etc.)', '1. Mix cottage cheese and fruit.\n2. A protein-packed breakfast option.', 'Ourspecialities/img/Cottage-Cheese-with-Fruit.jpg'),
(14, 'Quinoa Breakfast Bowl', '1/2 cup cooked quinoa, 1/4 cup chopped nuts, 1/4 cup dried fruit, 1/2 cup low-fat milk', '1. Mix quinoa, nuts, and dried fruit.\n2. Pour milk over the bowl.', 'Ourspecialities/img/breakfast-quinoa-bowl-feat.jpg'),
(15, 'Homemade Muesli', '1 cup rolled oats, 1/4 cup chopped nuts, 1/4 cup dried fruit, 1 tbsp honey', '1. Mix oats, nuts, and dried fruit.\n2. Drizzle with honey before serving.', 'Ourspecialities/img/museli.jpg'),
(16, 'Berry Protein Smoothie', '1 scoop protein powder, 1 cup mixed berries, 1 cup almond milk', '1. Blend all ingredients until smooth.\n2. Enjoy a protein-packed smoothie.', 'Ourspecialities/img/berry-smoothie.jpg'),
(17, 'Whole-Wheat Banana Bread', '2 ripe bananas, 1/4 cup honey, 1/4 cup Greek yogurt, 1 egg', '1. Mash bananas and mix with honey, yogurt, and egg.\n2. Stir in whole-wheat flour and bake as banana bread.', 'Ourspecialities/img/whole-wheat-banana-bread.jpg'),
(18, 'Spinach and Mushroom Frittata', '4 eggs, 1 cup chopped spinach, 1/2 cup sliced mushrooms, 1/4 cup shredded cheese', '1. Whisk eggs and pour into a pan.\n2. Add spinach, mushrooms, and cheese.\n3. Cook until set.', 'Ourspecialities/img/Spinach-and-Mushroom-Frittata.jpg'),
(19, 'Apple Cinnamon Overnight Oats', '1/2 cup rolled oats, 1/2 cup almond milk, 1 apple (diced), 1/2 tsp cinnamon', '1. Mix oats, almond milk, apple, and cinnamon.\n2. Refrigerate overnight and enjoy in the morning.', 'Ourspecialities/img/Apple-Cinnamon-Overnight-Oats-.jpg'),
(20, 'Egg and Spinach Breakfast Wrap', '2 eggs, 1 whole-grain wrap, 1/2 cup fresh spinach, 1/4 cup diced tomatoes', '1. Scramble eggs and cook with spinach and tomatoes.\n2. Fill the wrap with the egg mixture.', 'Ourspecialities/img/Egg-and-Spinach-Breakfast-Wrap.jpg'),
(21, 'Cinnamon Raisin Toast', '1 slice whole-grain bread, 1 tsp almond butter, 1 tbsp raisins, 1/4 tsp cinnamon', '1. Spread almond butter on the toast.\n2. Sprinkle raisins and cinnamon on top.', 'Ourspecialities/img/Best-Cinnamon-Swirl-Raisin-Bread-.jpg'),
(22, 'Sweet Potato Hash', '1 small sweet potato (diced), 1/4 cup diced bell peppers, 1/4 cup diced onions', '1. Sauté sweet potato, peppers, and onions in a pan until tender.\n2. Serve as a hash.', 'Ourspecialities/img/sweet-pot-hash.jpg'),
(23, 'Chia Seed Breakfast Pudding', '3 tbsp chia seeds, 1 cup coconut milk, 1 tsp vanilla extract', '1. Mix chia seeds, coconut milk, and vanilla.\n2. Refrigerate and let it thicken.\n3. Top with fruit before serving.', 'Ourspecialities/img/Chia-Seed-Breakfast-Pudding.jpg'),
(24, 'Ricotta Stuffed Pancakes', '1 cup ricotta cheese, 1 tbsp honey, 1 tsp lemon zest, whole-grain pancakes', '1. Mix ricotta, honey, and lemon zest.\n2. Spread on pancakes and fold.', 'Ourspecialities/img/Ricotta-Stuffed-Pancakes.jpg'),
(25, 'Coconut Almond Granola', '2 cups rolled oats, 1/4 cup shredded coconut, 1/4 cup chopped almonds', '1. Mix oats, coconut, and almonds.\n2. Bake until golden and crisp.', 'Ourspecialities/img/cocuntandalmondgranola.jpg'),
(26, 'Peanut Butter Banana Smoothie', '1 banana, 2 tbsp peanut butter, 1 cup almond milk, 1 tbsp honey', '1. Blend banana, peanut butter, almond milk, and honey.\n2. Enjoy a creamy smoothie.', 'Ourspecialities/img/Peanut-Butter-Banana-Smoothie.jpg'),
(27, 'Mixed Berry Quinoa Parfait', '1/2 cup cooked quinoa, 1/4 cup mixed berries, 1/4 cup Greek yogurt', '1. Layer quinoa, berries, and yogurt in a glass.\n2. Repeat layers.\n3. A protein-packed parfait.', 'Ourspecialities/img/a-triple-berry-quinoa-parfait-healthy-breakfast-recipe.jpg'),
(28, 'Zucchini and Cheese Omelette', '3 eggs, 1/4 cup grated zucchini, 1/4 cup shredded cheese', '1. Whisk eggs and pour into a hot pan.\n2. Add zucchini and cheese.\n3. Fold omelette.', 'Ourspecialities/img/zucchini-omlete.jpg'),
(29, 'Almond Flour Pancakes', '1 cup almond flour, 2 eggs, 1/4 cup almond milk, 1 tsp vanilla extract', '1. Mix almond flour, eggs, almond milk, and vanilla.\n2. Cook pancakes on a griddle.', 'Ourspecialities/img/almond_flour_pancakes_1.jpg'),
(30, 'Cherry Almond Smoothie Bowl', '1 cup frozen cherries, 1/2 banana, 1/4 cup almond milk, 1 tbsp almond butter', '1. Blend cherries, banana, almond milk, and almond butter.\n2. Pour into a bowl and top with almonds.', 'Ourspecialities/img/cherry-almond-smootie-bowl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Fitness'),
(2, 'Nutrition'),
(3, 'Mental Health'),
(4, 'Medical Breakthroughs');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(13) NOT NULL,
  `name` varchar(100) NOT NULL,
  `paragraph` longtext NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `name`, `paragraph`, `details`) VALUES
(1, '', '<p>&lt;div style=\"width: 800px; height: 600px; padding: 20px; text-align: center; border: 10px solid #787878;\"&gt;<br>&lt;div style=\"width: 750px; height: 550px; padding: 20px; text-align: center; border: 5px solid #787878;\"&gt;&lt;span style=\"font-size: 50px; font-weight: bold;\"&gt;Certificate of Completion&lt;/span&gt; &lt;br&gt;&lt;br&gt;&lt;span style=\"font-size: 25px;\"&gt;&lt;em&gt;This is to certify that&lt;/em&gt;&lt;/span&gt; &lt;br&gt;&lt;br&gt;&lt;span style=\"font-size: 30px;\"&gt;&lt;strong&gt;$student.getFullName()&lt;/strong&gt;&lt;/span&gt;span&gt;span&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;span style=\"font-size: 25px;\"&gt;&lt;em&gt;has completed the course&lt;/em&gt;&lt;/span&gt; &lt;br&gt;&lt;br&gt;&lt;span style=\"font-size: 30px;\"&gt;$course.getName()&lt;/span&gt; &lt;br&gt;&lt;br&gt;&lt;span style=\"font-size: 20px;\"&gt;with score of &lt;strong&gt;$grade.getPoints()%&lt;/strong&gt;&lt;/span&gt; &lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;span style=\"font-size: 25px;\"&gt;&lt;em&gt;dated&lt;/em&gt;&lt;/span&gt;span&gt;span&gt;&lt;br&gt;#set ($dt = $DateFormatter.getFormattedDate($grade.getAwardDate(), \"MMMM dd, yyyy\")) &lt;span style=\"font-size: 30px;\"&gt;$dtdtdt&lt;/span&gt;&lt;/div&gt;<br>&lt;/div&gt;</p>', ''),
(18, 'asaodpa', '', ''),
(19, 's', '', ''),
(20, 'w', '', ''),
(21, 'y', '', ''),
(22, 'sd', '', ''),
(23, 's', '', ''),
(24, 'ad', '', ''),
(25, 'asd', '', ''),
(26, 'as', '', ''),
(27, 'sd', '', ''),
(28, 'a', '', ''),
(29, 'a', '', ''),
(30, 'sd', '', ''),
(31, 'sd', '', ''),
(32, 'aaa', '', ''),
(33, 'd', '', ''),
(34, 'a', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment_text` varchar(500) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `username`, `comment_text`, `rating`) VALUES
(1, NULL, NULL, 'sd', 2),
(2, NULL, NULL, 'sdsdf', 5),
(3, NULL, NULL, 'fhg', 2),
(4, NULL, NULL, 'dasd', 2),
(5, NULL, NULL, 'sdsdf', 2),
(6, NULL, NULL, 'hk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(13) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'gh', '', 'gh', 'gh'),
(2, 'l;l;', '', 'l;', 'lk;'),
(3, 'sd', '', 'sd', 'sd'),
(6, 'cxv', '', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `dinner_recipes`
--

CREATE TABLE `dinner_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinner_recipes`
--

INSERT INTO `dinner_recipes` (`id`, `title`, `ingredients`, `instructions`, `picture`) VALUES
(1, 'Grilled Salmon with Asparagus', 'Grilled salmon fillet, roasted asparagus, lemon wedges', '1. Grill salmon until cooked.\n2. Roast asparagus with olive oil and seasonings.\n3. Serve with lemon wedges.', 'Ourspecialities/img/Grilled_Salmon-with-Asparagus.jpg'),
(2, 'Quinoa Stuffed Bell Peppers', 'Large bell peppers, cooked quinoa, black beans, diced tomatoes, shredded cheese', '1. Hollow out bell peppers and stuff with quinoa, beans, and tomatoes.\n2. Top with shredded cheese and bake.', 'Ourspecialities/img/Quinoa_Stuffed_BellPeppers.jpg'),
(3, 'Lemon Herb Grilled Chicken', 'Grilled chicken breast, lemon juice, garlic, fresh herbs (rosemary, thyme), olive oil', '1. Marinate chicken in lemon juice, garlic, herbs, and oil.\n2. Grill until cooked.', 'Ourspecialities/img/Lemon_Herb_Baked_White-Fish.jpg'),
(4, 'Cauliflower Crust Pizza', 'Cauliflower crust, tomato sauce, shredded mozzarella cheese, assorted veggies (bell peppers, mushrooms, etc.)', '1. Top cauliflower crust with sauce, cheese, and veggies.\n2. Bake until cheese is melted.', 'Ourspecialities/img/CauliflowerPizzaCrust-35b-5.jpg'),
(5, 'Veggie Stir-Fry with Tofu', 'Tofu, assorted vegetables (broccoli, carrots, bell peppers, snow peas), stir-fry sauce', '1. Stir-fry tofu and veggies in a wok.\n2. Add stir-fry sauce and serve over brown rice.', 'Ourspecialities/img/stir-fry-veg.jpg'),
(6, 'Baked Chicken and Sweet Potatoes', 'Baked chicken thighs, roasted sweet potatoes, steamed green beans', '1. Bake chicken until cooked.\n2. Roast sweet potatoes and steam green beans.\n3. Serve together.', 'Ourspecialities/img/Baked_ChickenandSweet_Potatoes.jpg'),
(7, 'Zucchini Noodles with Pesto', 'Zucchini noodles, homemade basil pesto, cherry tomatoes, pine nuts', '1. Sauté zucchini noodles briefly.\n2. Toss with pesto, tomatoes, and pine nuts.', 'Ourspecialities/img/Zucchini_Noodleswith_Pesto.jpg'),
(8, 'Mediterranean Chickpea Bowl', 'Cooked chickpeas, diced cucumber, cherry tomatoes, red onion, Kalamata olives, feta cheese', '1. Mix chickpeas, cucumber, tomatoes, onion, and feta.\n2. Drizzle with olive oil and lemon juice.', 'Ourspecialities/img/Mediterranean_Chickpea_Bowl.jpg'),
(9, 'Broccoli and Brown Rice Casserole', 'Steamed broccoli, cooked brown rice, shredded cheese, Greek yogurt, breadcrumbs', '1. Mix broccoli, rice, cheese, and yogurt.\n2. Transfer to a baking dish, sprinkle breadcrumbs.\n3. Bake until golden.', 'Ourspecialities/img/BroccoliandBrown_Rice_Casserole.jpg'),
(10, 'Spaghetti Squash with Marinara', 'Roasted spaghetti squash, homemade marinara sauce, fresh basil leaves, grated Parmesan cheese', '1. Scrape cooked spaghetti squash with a fork.\n2. Top with marinara, basil, and Parmesan.', 'Ourspecialities/img/spaghetti-squash-3.jpg'),
(11, 'Stuffed Portobello Mushrooms', 'Portobello mushrooms, cooked quinoa, spinach, sun-dried tomatoes, goat cheese', '1. Remove stems from mushrooms and fill with quinoa, spinach, and tomatoes.\n2. Top with goat cheese and bake.', 'Ourspecialities/img/stuffed-portobello-mushrooms-1-16.jpg'),
(12, 'Chickpea Curry', 'Cooked chickpeas, diced tomatoes, onion, garlic, curry powder, coconut milk', '1. Sauté onion and garlic.\n2. Add tomatoes, chickpeas, curry powder, and coconut milk.\n3. Simmer until flavors meld.', 'Ourspecialities/img/Chickpea_Curry.jpg'),
(13, 'Zesty Shrimp and Avocado Salad', 'Grilled shrimp, mixed greens, diced avocado, red onion, cilantro-lime dressing', '1. Grill shrimp until cooked.\n2. Toss greens, avocado, onion, and shrimp.\n3. Drizzle with cilantro-lime dressing.', 'Ourspecialities/img/Zesty_ShrimpandAvocado_Salad.jpg'),
(14, 'Lentil and Vegetable Stew', 'Cooked lentils, assorted vegetables (carrots, celery, zucchini), vegetable broth, herbs', '1. Sauté veggies, add lentils and broth.\n2. Simmer until veggies are tender and flavors meld.', 'Ourspecialities/img/LentilandVegetable_Stew.jpg'),
(15, 'Cabbage Rolls', 'Cabbage leaves, cooked quinoa, ground turkey or beef, diced tomatoes, tomato sauce', '1. Blanch cabbage leaves and fill with quinoa and meat.\n2. Roll and place in a baking dish.\n3. Top with diced tomatoes and sauce.\n4. Bake until heated through.', 'Ourspecialities/img/cabbage-rolls.jpg'),
(16, 'Stir-Fried Tofu and Broccoli', 'Tofu, broccoli florets, garlic, ginger, soy sauce, sesame oil', '1. Stir-fry tofu and broccoli in sesame oil.\n2. Add garlic, ginger, and soy sauce.\n3. Serve over brown rice.', 'Ourspecialities/img/Stir-Fried_TofuandBroccoli.jpg'),
(17, 'Black Bean and Vegetable Tacos', 'Black beans, whole-grain tortillas, assorted veggies (bell peppers, onions, etc.), salsa, guacamole', '1. Sauté veggies and mix with black beans.\n2. Fill tortillas and top with salsa and guacamole.', 'Ourspecialities/img/Black-BeanandVegetable_Tacos.jpg'),
(18, 'Cauliflower Fried Rice', 'Cauliflower rice, assorted vegetables (peas, carrots, bell peppers), scrambled eggs, soy sauce', '1. Sauté veggies and scrambled eggs in a pan.\n2. Add cauliflower rice and soy sauce.', 'Ourspecialities/img/Cauliflower_Fried_Rice.jpg'),
(19, 'Lemon Herb Baked White Fish', 'Baked white fish fillet, lemon juice, fresh herbs (dill, parsley), olive oil', '1. Place fish in a baking dish.\n2. Drizzle with lemon juice, herbs, and oil.\n3. Bake until fish flakes easily.', 'Ourspecialities/img/Lemon_Herb_Baked_White-Fish.jpg'),
(20, 'Chickpea and Vegetable Curry', 'Cooked chickpeas, mixed vegetables (bell peppers, peas, etc.), onion, garlic, curry sauce', '1. Sauté onion and garlic.\n2. Add veggies, chickpeas, and curry sauce.\n3. Simmer until heated through.', 'Ourspecialities/img/Chickpea_and_Vegetable_Curry.jpg'),
(21, 'Pesto Zucchini Noodles', 'Zucchini noodles, homemade basil pesto, cherry tomatoes, grated Parmesan cheese', '1. Sauté zucchini noodles briefly.\n2. Toss with pesto, tomatoes, and Parmesan.', 'Ourspecialities/img/Pesto_Zucchini_Noodles.jpg'),
(22, 'Teriyaki Chicken with Broccoli', 'Grilled chicken breast, steamed broccoli, teriyaki sauce, sesame seeds', '1. Grill chicken until cooked.\n2. Steam broccoli and toss with teriyaki sauce.\n3. Serve together.', 'Ourspecialities/img/teriyaki-chicken-and-broccoli.jpg'),
(23, 'Mushroom and Spinach Risotto', 'Arborio rice, mushrooms, fresh spinach, onion, garlic, vegetable broth', '1. Sauté onion and garlic.\n2. Add rice and gradually stir in vegetable broth.\n3. Stir in mushrooms and spinach.', 'Ourspecialities/img/MushroomandSpinach_Risotto.jpg'),
(24, 'Lentil and Sweet Potato Curry', 'Cooked lentils, roasted sweet potatoes, diced tomatoes, onion, garlic, curry sauce', '1. Sauté onion and garlic.\n2. Add lentils, sweet potatoes, and curry sauce.\n3. Simmer until flavors meld.', 'Ourspecialities/img/LentilandSweet_Potato_Curry.jpg'),
(25, 'Veggie and Quinoa Stuffed Peppers', 'Large bell peppers, cooked quinoa, mixed vegetables, marinara sauce, shredded cheese', '1. Hollow out bell peppers and fill with quinoa and veggies.\n2. Top with marinara and cheese and bake.', 'Ourspecialities/img/VeggieandQuinoa_Stuffed_Peppers.jpg'),
(26, 'Vegan Chickpea Stew', 'Cooked chickpeas, assorted vegetables (carrots, celery, bell peppers), onion, garlic, vegetable broth', '1. Sauté onion and garlic.\n2. Add veggies, chickpeas, and vegetable broth.\n3. Simmer until veggies are tender.', 'Ourspecialities/img/Vegan_Chickpea_Stew.jpg'),
(27, 'Balsamic Glazed Chicken and Vegetables', 'Baked chicken breast, roasted vegetables (zucchini, bell peppers, carrots), balsamic glaze', '1. Bake chicken until cooked.\n2. Roast vegetables and drizzle with balsamic glaze.', 'Ourspecialities/img/Balsamic_Glazed_ChickenandVegetables.jpg'),
(28, 'Miso-Glazed Salmon', 'Grilled salmon fillet, miso paste, ginger, garlic, green onions', '1. Mix miso, ginger, and garlic.\n2. Marinate salmon and grill until cooked.\n3. Garnish with green onions.', 'Ourspecialities/img/Miso-Glazed_Salmon.jpg'),
(29, 'Stuffed Acorn Squash', 'Roasted acorn squash halves, quinoa stuffing (quinoa, dried cranberries, pecans)', '1. Roast acorn squash halves.\n2. Fill with quinoa stuffing.\n3. Bake until heated through.', 'Ourspecialities/img/Stuffed_Acorn_Squash.jpg'),
(30, 'Ratatouille', 'Assorted vegetables (eggplant, zucchini, bell peppers, tomatoes), onion, garlic, herbs', '1. Sauté onion and garlic.\n2. Add veggies and herbs.\n3. Simmer until veggies are tender and flavors meld.', 'Ourspecialities/img/ratatouille-casserole.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `CNIC` varchar(20) DEFAULT NULL,
  `DateOfBirth` datetime NOT NULL,
  `DateOfJoining` datetime NOT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `RoleId` int(11) NOT NULL DEFAULT 0,
  `CreatedOn` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL DEFAULT 0,
  `Deleted` bit(1) NOT NULL DEFAULT b'0',
  `PhoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `FirstName`, `LastName`, `Email`, `Password`, `CNIC`, `DateOfBirth`, `DateOfJoining`, `Address`, `RoleId`, `CreatedOn`, `CreatedBy`, `Deleted`, `PhoneNumber`) VALUES
(2, 'Muhammad', 'Aslam', 'aslam@gmail.com', '12', '42101-4141422-9', '2000-08-15 00:00:00', '2022-12-14 00:00:00', NULL, 3, '2023-05-29 10:23:57', 1, b'1', '034548988'),
(4, 'Muhammad', 'Arham', 'arham@gmail.com', '34545', '42101-4144722-9', '2001-11-15 00:00:00', '2021-08-17 00:00:00', '345345345', 1, '2023-05-29 10:23:57', 1, b'1', '4464564'),
(5, 'ar', 'ar', 'ar', 'ar', 'ar', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'ar', 0, '0000-00-00 00:00:00', 0, b'1', 'ar'),
(6, 'Akram ', 'Sheikh', 'akram@gmail.com', '222', '42101-4546467-9', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'House # 112342', 0, '0000-00-00 00:00:00', 0, b'1', '-322273454'),
(7, 'Muhammad', 'Arsalan', 'arsalan@gmail.com', '34324234', '4534098543098', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'house 111', 0, '0000-00-00 00:00:00', 0, b'0', '32542376'),
(8, 'Kamil', 'Khan', 'kmail@gmail.com', '23498', '98279834732', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'adaslkjd', 0, '0000-00-00 00:00:00', 0, b'0', '293484392'),
(9, 'Farooq', 'Ul Haq', 'farooq@gmail.com', '12345', '3284324', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'house 0', 0, '0000-00-00 00:00:00', 0, b'0', 'i843095883490'),
(10, 'delete from employee', 'ahgsd', 'lkjhasd@gmail.com', 'asdjkh', 'askjdh', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'asdasdjh', 0, '0000-00-00 00:00:00', 0, b'0', 'asdasd'),
(11, 'ahsan', 'masood', 'ahsan@gmail.com', 'ahsan', '4354534', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sdff', 0, '0000-00-00 00:00:00', 0, b'0', '3543534'),
(12, 'Mesum', 'Abbas', 'mesum@gmail.com', 'mesum', '98274982374', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'house # 01', 2, '0000-00-00 00:00:00', 0, b'0', '2430983'),
(13, 'samiya', 'khan', 'samiya@gmail.com', 'samiya', '2984783299', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'house # 03', 0, '0000-00-00 00:00:00', 0, b'0', '234324'),
(20, 'sdfssss', 'dfs', 'sdf@s', 'dsfsf', 'dsf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sdddd', 2, '0000-00-00 00:00:00', 0, b'0', 'sdf'),
(42, 'summaiyl', 'khan', 'summiayl@gmail.com', '111', '2323', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'sdas', 2, '0000-00-00 00:00:00', 0, b'1', '2232'),
(43, 'umair', 'khan', 'umair@gmail.com', '123', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 2, '0000-00-00 00:00:00', 0, b'1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `healthy_heart`
--

CREATE TABLE `healthy_heart` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthy_heart`
--

INSERT INTO `healthy_heart` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, 'Tips for Maintaining a Healthy Heart', 'The heart is at the core of our well-being, tirelessly working to pump blood and oxygen throughout our body. Maintaining a healthy heart is paramount for overall health and longevity. While genetics play a role, lifestyle choices are crucial in preventing heart disease and ensuring optimal cardiovascular health. Here are some essential tips for nurturing your heart and leading a heart-healthy life.', ''),
(2, '1. Balanced Diet', '', 'A heart-healthy diet is rich in fruits, vegetables, whole grains, lean proteins, and healthy fats. Incorporate a rainbow of colorful produce for a variety of vitamins, minerals, and antioxidants. Limit saturated and trans fats, and opt for sources of unsaturated fats like avocados, nuts, and olive oil.'),
(3, '2. Monitor Salt Intake', '', 'Excessive salt intake can raise blood pressure, increasing the risk of heart disease. Be mindful of processed and packaged foods, as they often contain hidden salts. Choose low-sodium options and use herbs and spices to flavor meals.'),
(4, '3. Stay Active', '', 'Regular physical activity is a cornerstone of heart health. Aim for at least 150 minutes of moderate-intensity exercise or 75 minutes of vigorous-intensity exercise per week. Activities like brisk walking, swimming, cycling, and dancing contribute to improved cardiovascular fitness.'),
(5, '4. Maintain a Healthy Weight', '', 'Maintaining a healthy weight reduces the strain on your heart and lowers the risk of heart disease. Combine a balanced diet with regular exercise to achieve and sustain a healthy weight.'),
(6, '5. Manage Stress', '', 'Chronic stress can contribute to heart disease. Engage in stress-reduction techniques like meditation, deep breathing, yoga, or spending time in nature to promote emotional well-being.'),
(7, '6. Quit Smoking', '', 'Smoking is a major risk factor for heart disease. If you smoke, seek support to quit. Your heart health improves significantly shortly after quitting.'),
(8, '7. Limit Alcohol Intake', '', 'Moderate alcohol consumption may have cardiovascular benefits, but excessive drinking can lead to heart problems. Limit alcohol intake to recommended guidelines (e.g., up to one drink per day for women and up to two drinks per day for men).'),
(9, '8. Control Blood Pressure', '', 'High blood pressure strains the heart and blood vessels. Regular monitoring, a balanced diet, exercise, and medication if necessary can help keep blood pressure in a healthy range.'),
(10, '9. Manage Cholesterol Levels', '', 'High levels of \"bad\" LDL cholesterol increase the risk of heart disease. Consume foods low in saturated and trans fats, and consider medications if lifestyle changes are not enough to manage cholesterol.'),
(11, '10. Get Enough Sleep', '', 'Sleep is essential for heart health. Aim for 7-9 hours of quality sleep per night. Sleep deprivation can contribute to high blood pressure and other heart-related issues.'),
(12, '11. Regular Health Check-ups', '', 'Regular check-ups with your healthcare provider help monitor your heart health and catch any potential issues early on.'),
(13, '12. Stay Hydrated', '', 'Adequate hydration supports heart health by maintaining proper blood viscosity. Aim to drink plenty of water throughout the day.'),
(14, '', '', 'By incorporating these heart-healthy habits into your lifestyle, you can take proactive steps to nurture your cardiovascular health. Remember, small changes can make a significant difference in reducing the risk of heart disease and ensuring a long and healthy life. Always consult a healthcare professional before making significant changes to your diet or exercise routine, especially if you have existing health conditions.');

-- --------------------------------------------------------

--
-- Table structure for table `lunch_recipes`
--

CREATE TABLE `lunch_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch_recipes`
--

INSERT INTO `lunch_recipes` (`id`, `title`, `ingredients`, `instructions`, `picture`) VALUES
(1, 'Grilled Chicken Salad', 'Grilled chicken breast, mixed greens, cherry tomatoes, cucumber, balsamic vinaigrette', '1. Grill chicken and slice.\n2. Toss with mixed greens, tomatoes, and cucumber.\n3. Drizzle with balsamic vinaigrette.', 'Ourspecialities/img/Grilled-Chicken-Salad.jpg'),
(2, 'Quinoa and Veggie Bowl', 'Cooked quinoa, roasted vegetables (bell peppers, zucchini, carrots), chickpeas, lemon-tahini dressing', '1. Combine quinoa, roasted veggies, and chickpeas.\n2. Drizzle with lemon-tahini dressing.', 'Ourspecialities/img/quiona-veggie-bowl.jpg'),
(3, 'Turkey Wrap', 'Sliced turkey, whole-grain wrap, lettuce, tomato, avocado, mustard', '1. Layer turkey, lettuce, tomato, and avocado on the wrap.\n2. Spread mustard and wrap it up.', 'Ourspecialities/img/turkey-wrap.jpg'),
(4, 'Mediterranean Hummus Bowl', 'Hummus, cooked couscous, chopped cucumber, cherry tomatoes, kalamata olives, feta cheese', '1. Spread hummus at the bottom of a bowl.\n2. Top with couscous, cucumber, tomatoes, olives, and feta.', 'Ourspecialities/img/hummus.jpg'),
(5, 'Veggie Stir-Fry', 'Assorted vegetables (broccoli, bell peppers, carrots, snap peas), tofu or tempeh, soy sauce, sesame oil', '1. Stir-fry veggies and tofu/tempeh in sesame oil.\n2. Add soy sauce and serve over brown rice.', 'Ourspecialities/img/stir-fry-veg.jpg'),
(6, 'Chickpea Salad', 'Cooked chickpeas, diced bell peppers, red onion, cucumber, feta cheese, lemon-tahini dressing', '1. Combine chickpeas, peppers, onion, cucumber, and feta.\n2. Drizzle with lemon-tahini dressing.', 'Ourspecialities/img/chicpie-salad.jpg'),
(7, 'Salmon and Quinoa Bowl', 'Grilled salmon, cooked quinoa, steamed broccoli, avocado, lemon-dill sauce', '1. Place grilled salmon on quinoa.\n2. Add steamed broccoli and avocado.\n3. Drizzle with lemon-dill sauce.', 'Ourspecialities/img/salmon-quiona-bowl.jpg'),
(8, 'Caprese Salad', 'Fresh mozzarella, sliced tomatoes, basil leaves, balsamic glaze, olive oil', '1. Arrange mozzarella, tomatoes, and basil on a plate.\n2. Drizzle with balsamic glaze and olive oil.', 'Ourspecialities/img/capresse-salad.jpg'),
(9, 'Black Bean Burrito Bowl', 'Cooked black beans, brown rice, diced bell peppers, corn, salsa, guacamole', '1. Combine black beans, rice, peppers, and corn.\n2. Top with salsa and guacamole.', 'Ourspecialities/img/bb-burritoBowl.jpg'),
(10, 'Greek Chickpea Wrap', 'Chickpeas, diced cucumber, cherry tomatoes, red onion, feta cheese, Greek dressing, whole-grain wrap', '1. Mix chickpeas, cucumber, tomatoes, onion, and feta.\n2. Toss with Greek dressing and wrap it up.', 'Ourspecialities/img/greek-chicpie-wrap.jpg'),
(11, 'Vegetable Quinoa Soup', 'Cooked quinoa, vegetable broth, mixed vegetables (carrots, celery, onion, zucchini), garlic, herbs', '1. Sauté garlic and veggies in a pot.\n2. Add vegetable broth and herbs.\n3. Stir in cooked quinoa.', 'Ourspecialities/img/soup.jpg'),
(12, 'Tuna Salad', 'Canned tuna, mixed greens, red onion, bell peppers, hard-boiled egg, olive oil-lemon dressing', '1. Combine tuna, greens, onion, peppers, and egg.\n2. Drizzle with olive oil-lemon dressing.', 'Ourspecialities/img/tuna-salad.jpg'),
(13, 'Zucchini Noodles with Pesto', 'Zucchini noodles, homemade basil pesto, cherry tomatoes, pine nuts', '1. Sauté zucchini noodles briefly.\n2. Toss with pesto, tomatoes, and pine nuts.', 'Ourspecialities/img/zucchini-noodles-with-pesto-sauce.jpg'),
(14, 'Brown Rice Bowl with Tofu', 'Baked tofu, cooked brown rice, steamed broccoli, sliced carrots, sesame ginger dressing', '1. Arrange tofu, rice, broccoli, and carrots in a bowl.\n2. Drizzle with sesame ginger dressing.', 'Ourspecialities/img/Brown_Rice_BowlwithTofu.jpg'),
(15, 'Mexican Quinoa Bowl', 'Cooked quinoa, black beans, diced tomatoes, avocado, red onion, salsa, lime', '1. Combine quinoa, beans, tomatoes, and onion.\n2. Top with avocado, salsa, and lime juice.', 'Ourspecialities/img/Mexican-Quinoa-Bowl.jpg'),
(16, 'Veggie Wrap', 'Grilled vegetables (zucchini, eggplant, bell peppers), hummus, whole-grain wrap, spinach', '1. Layer grilled veggies on the wrap.\n2. Spread hummus and add spinach.\n3. Wrap it up.', 'Ourspecialities/img/veggie-wrap.jpg'),
(17, 'Asian Tofu Salad', 'Marinated tofu, mixed greens, shredded carrots, edamame, sesame soy dressing', '1. Arrange tofu, greens, carrots, and edamame.\n2. Drizzle with sesame soy dressing.', 'Ourspecialities/img/AsianTofuSalad.jpg'),
(18, 'Sweet Potato and Black Bean Bowl', 'Roasted sweet potatoes, black beans, quinoa, diced red onion, cilantro-lime dressing', '1. Combine sweet potatoes, beans, quinoa, and onion.\n2. Drizzle with cilantro-lime dressing.', 'Ourspecialities/img/sweet-pot-hash.jpg'),
(19, 'Greek Salad', 'Mixed greens, cucumber, cherry tomatoes, red onion, Kalamata olives, feta cheese, Greek dressing', '1. Toss greens, cucumber, tomatoes, onion, olives, and feta.\n2. Drizzle with Greek dressing.', 'Ourspecialities/img/GreekSalad.jpg'),
(20, 'Tofu and Vegetable Stir-Fry', 'Tofu, assorted vegetables (broccoli, bell peppers, carrots, snow peas), stir-fry sauce', '1. Stir-fry tofu and veggies in a wok.\n2. Add stir-fry sauce and serve over brown rice.', 'Ourspecialities/img/TofuandVegetable_Stir-Fry.jpg'),
(21, 'Hummus and Veggie Wrap', 'Whole-grain wrap, hummus, shredded lettuce, grated carrots, bell peppers, cucumber', '1. Spread hummus on the wrap.\n2. Add lettuce, carrots, peppers, and cucumber.\n3. Wrap it up.', 'Ourspecialities/img/HummusandVeggie_Wrap.jpg'),
(22, 'Lentil Salad', 'Cooked lentils, diced bell peppers, red onion, cucumber, feta cheese, lemon-dijon dressing', '1. Mix lentils, peppers, onion, cucumber, and feta.\n2. Drizzle with lemon-dijon dressing.', 'Ourspecialities/img/Lentil_Salad.jpg'),
(23, 'Mushroom and Spinach Quesadilla', 'Whole-grain tortilla, sautéed mushrooms, spinach, shredded cheese', '1. Place mushrooms, spinach, and cheese on half of the tortilla.\n2. Fold and cook on a pan.', 'Ourspecialities/img/MushroomandSpinach_Risotto.jpg'),
(24, 'Chickpea and Avocado Salad', 'Cooked chickpeas, diced avocado, cherry tomatoes, red onion, cilantro-lime dressing', '1. Combine chickpeas, avocado, tomatoes, and onion.\n2. Drizzle with cilantro-lime dressing.', 'Ourspecialities/img/ChickpeaandAvocado_Salad.jpg'),
(25, 'Rice Paper Rolls', 'Rice paper wrappers, rice noodles, mixed vegetables (lettuce, carrot, cucumber, mint), peanut dipping sauce', '1. Soak rice paper in water and fill with noodles and veggies.\n2. Roll and serve with peanut sauce.', 'Ourspecialities/img/Rice_Paper_Rolls.jpg'),
(26, 'Cauliflower Rice Bowl', 'Cauliflower rice, grilled chicken, steamed broccoli, diced bell peppers, sesame soy sauce', '1. Combine cauliflower rice, chicken, broccoli, and peppers.\n2. Drizzle with sesame soy sauce.', 'Ourspecialities/img/Cauliflower_Rice_Bowl.jpg'),
(27, 'Spinach and Feta Stuffed Bell Pepper', 'Large bell peppers, cooked quinoa, sautéed spinach, crumbled feta cheese', '1. Hollow out bell peppers and stuff with quinoa, spinach, and feta.\n2. Bake until tender.', 'Ourspecialities/img/SpinachandFeta_Stuffed_BellPepper.jpg'),
(28, 'Tomato Basil Soup', 'Fresh tomatoes, onion, garlic, basil leaves, vegetable broth, Greek yogurt', '1. Sauté onion and garlic, then add tomatoes.\n2. Blend with basil and broth.\n3. Serve with a dollop of Greek yogurt.', 'Ourspecialities/img/Tomato_Basil_Soup.jpg'),
(29, 'Sesame Ginger Tofu Salad', 'Baked tofu, mixed greens, shredded cabbage, mandarin orange segments, sesame ginger dressing', '1. Arrange tofu, greens, cabbage, and oranges.\n2. Drizzle with sesame ginger dressing.', 'Ourspecialities/img/Sesame_Ginger_TofuSalad.jpg'),
(30, 'Cucumber Avocado Salad', 'Sliced cucumber, diced avocado, red onion, dill, lemon juice, olive oil', '1. Combine cucumber, avocado, onion, and dill.\n2. Drizzle with lemon juice and olive oil.', 'Ourspecialities/img/Cucumber_AvocadoSalad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mindfulness_and_meditation_benefits`
--

CREATE TABLE `mindfulness_and_meditation_benefits` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mindfulness_and_meditation_benefits`
--

INSERT INTO `mindfulness_and_meditation_benefits` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, 'Mindfulness and Meditation Benefits', 'In a world filled with constant distractions and busy schedules, the practices of mindfulness and meditation offer a sanctuary of calm and self-awareness. These ancient techniques, rooted in various spiritual traditions, have gained significant popularity in recent years for their remarkable benefits on mental, emotional, and even physical well-being. From reducing stress to enhancing focus, the advantages of incorporating mindfulness and meditation into our lives are vast and transformative.', ''),
(2, 'Stress Reduction', '', 'One of the most well-known benefits of mindfulness and meditation is their ability to alleviate stress. Regular practice can lower cortisol levels—the body\'s stress hormone—resulting in a reduced perception of stress and a greater capacity to handle life\'s challenges with equanimity.'),
(3, 'Improved Mental Clarity', '', 'Mindfulness and meditation sharpen mental clarity by training the mind to focus on the present moment. These practices help in decluttering the mind, reducing the mental chatter that often leads to feelings of overwhelm and confusion.'),
(4, 'Enhanced Emotional Regulation', '', 'Mindfulness and meditation foster emotional intelligence by encouraging non-judgmental awareness of our feelings and reactions. This increased self-awareness allows us to respond to emotions more skillfully, leading to healthier relationships and emotional balance.'),
(5, 'Better Concentration and Focus', '', 'Regular mindfulness and meditation practice have been shown to enhance concentration and focus. By training the mind to remain present, we become better equipped to engage fully in tasks without being easily distracted.'),
(6, 'Reduced Anxiety', '', 'Both mindfulness and meditation can significantly reduce anxiety symptoms. They help individuals become more attuned to their thoughts without becoming entangled in them, offering a sense of perspective and control over anxious thoughts.'),
(7, 'Improved Sleep Quality', '', 'Mindfulness and meditation can positively impact sleep patterns. By calming the mind and reducing stress, these practices create an optimal environment for restful sleep.'),
(8, 'Pain Management', '', 'Mindfulness techniques have been used effectively in pain management. By cultivating non-reactive awareness toward physical sensations, individuals can alleviate the perception of pain and increase their pain tolerance'),
(9, 'Enhanced Self-Awareness', '', 'Mindfulness and meditation encourage self-reflection and self-awareness. Regular practice helps us develop a deeper understanding of our thoughts, emotions, and behaviors, leading to personal growth and self-acceptance.'),
(10, 'Cultivation of Compassion', '', 'Mindfulness and meditation foster a sense of compassion, both towards oneself and others. Practicing loving-kindness meditation, in particular, can cultivate empathy and a greater sense of connection with the world around us.'),
(11, 'Physical Benefits', '', 'Beyond mental and emotional advantages, mindfulness and meditation can positively influence physical health. Lowered stress levels can lead to improved heart health, reduced inflammation, and a strengthened immune system.'),
(12, '', '', 'Incorporating mindfulness and meditation into our daily routines doesn\'t require elaborate rituals. Even a few minutes of practice each day can yield remarkable results over time. Whether it\'s through guided meditation apps, mindfulness exercises, or joining meditation classes, the journey toward reaping these benefits begins with a single step.'),
(13, '', '', 'In conclusion, the benefits of mindfulness and meditation extend far beyond relaxation. These practices offer profound improvements in mental clarity, emotional well-being, and physical health. By embracing mindfulness and meditation, individuals can cultivate a more balanced, resilient, and enriching way of life.');

-- --------------------------------------------------------

--
-- Table structure for table `news_articles`
--

CREATE TABLE `news_articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_published` date DEFAULT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_articles`
--

INSERT INTO `news_articles` (`id`, `category_id`, `title`, `content`, `date_published`, `author`) VALUES
(1, 1, 'New Study Reveals the Benefits of High-Intensity Interval Training', 'High-Intensity Interval Training (HIIT) has long been celebrated for its time efficiency and impressive fitness gains. A recent study, published in the Journal of Sports Medicine and Physical Fitness, has shed new light on the remarkable benefits of this workout regimen, reaffirming its status as a fitness powerhouse.\n\nHIIT involves short bursts of intense exercise followed by brief periods of rest or lower-intensity exercise. The study, conducted over six months with a diverse group of participants, examined the effects of HIIT on various aspects of health and fitness.\n\nOne of the most striking findings was the impact of HIIT on metabolism. The researchers found that HIIT not only burns calories during the workout but also elevates the metabolic rate for hours afterward. This means that individuals who engage in HIIT can continue to burn calories even while at rest, making it an effective strategy for weight management.\n\nCardiovascular health also saw significant improvements. Participants showed reduced blood pressure, improved heart function, and better cholesterol profiles. These changes are vital for preventing heart disease and enhancing overall well-being.\n\nIn addition to physical health benefits, HIIT was linked to improved mental well-being. Participants reported reduced stress levels, increased energy, and enhanced mood. The combination of physical and mental benefits makes HIIT an attractive option for those seeking a holistic approach to fitness.\n\nFurthermore, the study highlighted the time efficiency of HIIT. Participants spent significantly less time exercising compared to traditional moderate-intensity workouts while achieving comparable or even superior results. This finding is particularly encouraging for individuals with busy schedules who struggle to find time for exercise.\n\nThe versatility of HIIT workouts was another standout feature. Whether on a treadmill, stationary bike, or through bodyweight exercises, HIIT can be tailored to individual preferences and fitness levels.\n\nIn conclusion, the latest research reaffirms that High-Intensity Interval Training is a fitness game-changer. Its ability to boost metabolism, enhance cardiovascular health, improve mental well-being, and save time makes it a compelling choice for individuals looking to maximize the benefits of their workouts. Incorporating HIIT into your fitness routine could be the key to unlocking a healthier and happier you.\n\n', '2023-09-01', 'John Doe'),
(2, 1, 'Tips for Staying Active During the Winter Months', 'As the winter chill sets in, it can be tempting to hibernate indoors and put your fitness routine on hold. However, staying active during the winter months is not only possible but also essential for maintaining overall health and well-being. Here are some valuable tips to help you stay active and energized, even when the weather is cold and gloomy.\n\n1. Embrace Indoor Workouts: When the temperatures drop and outdoor activities become less appealing, turn to indoor workouts. Consider joining a local gym, taking fitness classes, or setting up a home gym. There are numerous online resources and fitness apps that offer guided indoor workouts, from yoga and Pilates to high-intensity interval training (HIIT).\n\n2. Bundle Up and Get Outdoors: Don\'t let the cold deter you from outdoor activities. Dress in layers, wear warm, moisture-wicking clothing, and invest in quality winter gear. Activities like hiking, snowshoeing, and cross-country skiing can be exhilarating ways to enjoy the winter scenery while keeping active.\n\n3. Try Winter Sports: If you live in an area with access to winter sports facilities, take advantage of activities like ice skating, downhill skiing, or snowboarding. These sports offer an excellent way to stay fit and have fun during the colder months.\n\n4. Maintain a Consistent Routine: Consistency is key to staying active year-round. Create a workout schedule that suits your winter lifestyle and stick to it. Treat your workouts as appointments that are just as important as any other commitment.\n\n5. Stay Hydrated: It\'s easy to forget about hydration during the winter, but it\'s equally important as in the summer. Drinking enough water helps your body function optimally, whether you\'re working out indoors or braving the cold outdoors.\n\n6. Find Indoor Hobbies: Explore indoor hobbies and activities that keep you moving. Dancing, indoor rock climbing, or even mall walking can be enjoyable and active pastimes during the winter season.\n\n7. Set Realistic Goals: Adjust your fitness goals to align with the season. It\'s okay if you can\'t maintain the same level of outdoor activity as in the summer. Setting realistic goals ensures you stay motivated and avoid burnout.\n\n8. Partner Up: Consider finding a workout buddy or joining group fitness classes. Having a partner or a supportive community can make winter workouts more enjoyable and accountable.\n\n9. Warm Up Properly: Cold weather can increase the risk of injury. Prioritize warming up and cooling down before and after your workouts to keep your muscles and joints safe.\n\n10. Listen to Your Body: Pay attention to your body\'s signals. If the weather is harsh or you\'re feeling unwell, it\'s okay to skip a workout or opt for a lighter activity. Your health and safety should always come first.\n\nRemember that staying active during the winter not only helps you maintain physical fitness but also boosts your mood and energy levels. By incorporating these tips into your winter routine, you can embrace the season and emerge from winter feeling healthier and happier than ever.\n\n', '2023-08-28', 'Jane Smith'),
(3, 2, 'The Importance of Balanced Nutrition for a Healthy Lifestyle', 'Balanced nutrition is a cornerstone of a healthy lifestyle, and its significance continues to be a prominent topic in health and wellness discussions worldwide. A well-rounded diet is essential for maintaining optimal physical and mental well-being. Here are some key points highlighting the importance of balanced nutrition:\n\nNutrient Intake: Balanced nutrition ensures that your body receives all the essential nutrients, including vitamins, minerals, carbohydrates, proteins, and fats, in the right proportions. These nutrients are vital for various bodily functions, such as energy production, tissue repair, and immune system support.\n\nWeight Management: A balanced diet helps regulate body weight. It prevents excessive calorie consumption, reducing the risk of obesity and related health issues like heart disease, diabetes, and joint problems.\n\nEnergy Levels: Proper nutrition provides sustained energy throughout the day. A diet rich in complex carbohydrates and proteins helps maintain consistent energy levels, enhancing productivity and overall quality of life.\n\nMental Health: Nutrition plays a significant role in mental well-being. Nutrient-rich foods can positively impact mood, cognitive function, and concentration. Conversely, a diet high in processed foods and sugars may contribute to mood swings and mental health disorders.\n\nDisease Prevention: A balanced diet can lower the risk of chronic diseases, including heart disease, hypertension, and certain cancers. Antioxidants found in fruits and vegetables help protect cells from damage and reduce inflammation, key factors in disease prevention.\n\nGut Health: A well-balanced diet supports a healthy gut microbiome. A diverse range of fibers and nutrients from whole foods promotes the growth of beneficial bacteria, which aids digestion and strengthens the immune system.\n\nLongevity: Studies consistently show that individuals who maintain a balanced diet tend to live longer and enjoy a higher quality of life in their later years.\n\nImproved Athletic Performance: Athletes and fitness enthusiasts rely on balanced nutrition to optimize their performance, enhance recovery, and prevent injuries.\n\nIn summary, balanced nutrition remains paramount for a healthy lifestyle. It has a profound impact on physical health, mental well-being, disease prevention, and overall longevity. Staying informed about the latest nutrition research and guidelines is essential for individuals looking to make informed dietary choices and maintain their well-being in an ever-changing world. It\'s advisable to consult with a healthcare professional or registered dietitian for personalized nutrition guidance based on your specific needs and goals.', '2023-09-02', 'Mary Johnson'),
(4, 2, 'Superfoods: What Are They and How to Incorporate Them into Your Diet', 'Superfoods are nutrient-dense foods packed with vitamins, minerals, antioxidants, and other health-boosting compounds. They are a valuable addition to any diet, offering numerous benefits for overall well-being. Incorporating superfoods into your daily meals can be a delicious and easy way to enhance your health. Here are some popular superfoods and creative ways to include them in your diet.\n\n1. Berries: Blueberries, strawberries, and raspberries are rich in antioxidants, vitamins, and fiber. Add them to your morning oatmeal, yogurt, or blend them into smoothies for a refreshing kick.\n\n2. Leafy Greens: Kale, spinach, and Swiss chard are nutrient powerhouses. Use them in salads, soups, or sauté them as a side dish with garlic and olive oil.\n\n3. Avocado: Avocado is full of healthy fats, fiber, and potassium. Mash it for guacamole, spread it on toast, or add slices to your sandwiches and salads.\n\n4. Chia Seeds: These tiny seeds are packed with omega-3 fatty acids, fiber, and protein. Mix them into yogurt, oatmeal, or make chia pudding by soaking them in almond milk overnight.\n\n5. Quinoa: A complete protein source, quinoa is versatile. Use it as a base for grain bowls, in salads, or as a side dish with roasted vegetables.\n\n6. Turmeric: Known for its anti-inflammatory properties, turmeric can be added to curries, soups, or made into a warming turmeric latte.\n\n7. Salmon: Rich in omega-3 fatty acids, salmon is excellent for heart health. Grill, bake, or pan-sear it and serve with a side of steamed vegetables.\n\n8. Nuts and Seeds: Almonds, walnuts, and flaxseeds provide healthy fats and protein. Sprinkle them on yogurt, oatmeal, or use them in homemade energy bars.\n\n9. Greek Yogurt: High in protein and probiotics, Greek yogurt makes a great breakfast or snack. Top it with honey, berries, and granola for a tasty parfait.\n\n10. Dark Chocolate: Opt for dark chocolate with at least 70% cocoa content. Enjoy it in moderation as a sweet treat or melt it and drizzle over fruit.\n\n11. Beans and Legumes: Beans like black beans, chickpeas, and lentils are rich in fiber and protein. Use them in soups, stews, salads, or as a meat substitute in tacos and burgers.\n\n12. Sweet Potatoes: Packed with vitamins and fiber, sweet potatoes are a versatile superfood. Bake them as fries, mash them, or use them in Buddha bowls.\n\nIncorporating superfoods into your diet doesn\'t have to be complicated. Start by gradually introducing these nutrient-packed foods into your meals and snacks. By doing so, you can reap the health benefits while enjoying a variety of delicious and satisfying dishes. Remember that a balanced diet, rich in a variety of foods, is key to promoting overall health and well-being.', '2023-08-30', 'David Brown'),
(5, 3, 'Managing Stress: Effective Techniques for a Stress-Free Life', 'In today\'s fast-paced world, stress has become an inevitable part of life for many people. However, managing stress is crucial for overall well-being. Here are some effective techniques to help you lead a more stress-free life:\n\n1. Mindfulness and Meditation: Mindfulness practices and meditation techniques can help you stay present and reduce anxiety. Daily meditation, even if it\'s just for a few minutes, can significantly lower stress levels.\n\n2. Exercise Regularly: Physical activity releases endorphins, which are natural mood lifters. Incorporate regular exercise into your routine, whether it\'s jogging, yoga, or dancing, to reduce stress and improve your overall health.\n\n3. Deep Breathing: Practice deep breathing exercises to calm your nervous system. Techniques like diaphragmatic breathing or the 4-7-8 method can help reduce stress and anxiety in moments of tension.\n\n4. Time Management: Effective time management can reduce stress caused by overwhelming tasks and deadlines. Use tools like to-do lists, calendars, and prioritization techniques to stay organized and focused.\n\n5. Seek Social Support: Talking to friends, family, or a therapist can provide valuable emotional support. Sharing your feelings and concerns with someone you trust can help alleviate stress.\n\n6. Healthy Eating: A balanced diet with plenty of fruits, vegetables, and whole grains can nourish your body and help manage stress. Avoid excessive caffeine, sugar, and processed foods, as they can exacerbate stress.\n\n7. Sleep: Prioritize good sleep hygiene. Aim for 7-9 hours of quality sleep per night to help your body recover and reduce stress.\n\n8. Set Realistic Goals: Avoid overcommitting and setting unattainable goals. Be realistic about what you can achieve in a given timeframe to prevent unnecessary stress.\n\n9. Disconnect from Technology: Constant connectivity can lead to increased stress. Take regular breaks from screens and social media to relax and recharge.\n\n10. Hobbies and Relaxation: Engage in activities you enjoy, whether it\'s reading, painting, or gardening. These hobbies can be a great way to unwind and take your mind off stressors.\n\n11. Practice Gratitude: Focus on the positive aspects of your life by keeping a gratitude journal. Reflecting on the things you\'re thankful for can shift your perspective and reduce stress.\n\n12. Professional Help: If stress becomes overwhelming and persistent, consider seeking help from a mental health professional. They can provide valuable strategies and support.\n\nIn conclusion, managing stress is essential for maintaining a healthy and fulfilling life. Incorporating these techniques into your daily routine can help you reduce stress and promote overall well-being. Remember that it\'s okay to seek help and prioritize self-care when needed, as stress is a common challenge that can be effectively managed with the right strategies.', '2023-08-31', 'Emily White'),
(6, 3, 'The Power of Mindfulness Meditation in Reducing Depression', 'Depression is a global health concern affecting millions of people. While various treatments exist, one approach gaining significant attention is mindfulness meditation. Research continues to reveal the profound impact of mindfulness meditation in reducing the symptoms of depression and improving overall mental well-being.\n\nMindfulness meditation is a practice that encourages individuals to focus on the present moment without judgment. It involves observing thoughts, feelings, and sensations as they arise, promoting self-awareness and emotional regulation. Here\'s a look at how mindfulness meditation is proving to be a potent tool against depression:\n\n1. Stress Reduction: Mindfulness meditation helps individuals manage stress more effectively. Chronic stress is a significant factor in the development and exacerbation of depression. By reducing stress levels, mindfulness can mitigate the risk of depressive episodes.\n\n2. Improved Emotional Regulation: Depression often involves intense and overwhelming emotions. Mindfulness meditation enhances emotional regulation, allowing individuals to respond to negative thoughts and feelings with greater resilience and self-compassion.\n\n3. Changes in Brain Activity: Neuroimaging studies have shown that regular mindfulness practice can lead to structural and functional changes in the brain, particularly in areas associated with mood regulation. This suggests that mindfulness meditation may help rewire the brain in a way that reduces depressive tendencies.\n\n4. Enhanced Self-Awareness: Mindfulness encourages individuals to become more aware of their thought patterns. This awareness can help identify and challenge negative or irrational thoughts, a fundamental aspect of cognitive-behavioral therapy, a widely used treatment for depression.\n\n5. Prevention of Relapse: For those who have experienced depression, mindfulness meditation can serve as a valuable tool for preventing relapse. By cultivating a habit of mindfulness, individuals can detect early signs of depression and take proactive steps to manage their mental health.\n\n6. Reduced Rumination: Depressive individuals often engage in rumination, which involves repetitively focusing on negative thoughts and feelings. Mindfulness meditation helps break this cycle by redirecting attention away from rumination and toward the present moment.\n\n7. Improved Sleep: Sleep disturbances are common in depression. Mindfulness practices can enhance sleep quality by reducing racing thoughts and promoting relaxation.\n\n8. Greater Resilience: Mindfulness fosters a sense of resilience and adaptability in individuals. It encourages a non-judgmental attitude toward oneself, making it easier to bounce back from setbacks and failures.\n\nWhile mindfulness meditation is a promising approach, it\'s important to note that it may not be a standalone solution for everyone dealing with depression. It is often used as part of a comprehensive treatment plan, which may include therapy, medication, and lifestyle modifications.\n\nIn conclusion, the power of mindfulness meditation in reducing depression lies in its ability to promote self-awareness, emotional regulation, and stress reduction. It offers a valuable complement to traditional treatments and can empower individuals to take an active role in managing their mental health. As ongoing research continues to unveil its benefits, mindfulness meditation holds great promise in the fight against depression.', '2023-08-29', 'Michael Lee'),
(7, 4, 'New Vaccine Shows Promise in Preventing Common Cold', 'Researchers are making strides in the fight against the common cold, a widespread and annoying ailment that has plagued humanity for centuries. A new experimental vaccine has shown remarkable potential in early trials, offering hope for a future where the common cold can be effectively prevented.\n\nThe common cold is primarily caused by rhinoviruses, and it remains one of the most frequent infections worldwide. While it\'s usually not life-threatening, it can lead to missed work or school days and significant discomfort. The lack of a reliable vaccine has made it a persistent challenge.\n\nThe new vaccine, developed by a team of scientists from several leading research institutions, targets a broad spectrum of rhinovirus strains. Early results from animal trials and limited human testing have been encouraging. The vaccine appears to stimulate a robust immune response, effectively neutralizing the rhinovirus and preventing infection.\n\nWhat makes this vaccine particularly promising is its potential to protect against a wide range of rhinovirus strains. Previous attempts at creating a common cold vaccine have been hindered by the virus\'s high genetic diversity. The new vaccine takes a novel approach by targeting a conserved region of the virus that doesn\'t mutate as frequently.\n\nIf the vaccine proves successful in larger-scale human trials, it could have far-reaching implications. Beyond preventing the common cold, it may also offer protection against other viral illnesses, as rhinoviruses are known to exacerbate conditions like asthma and increase susceptibility to more severe respiratory infections.\n\nWhile it\'s still early in the development process, the prospect of a common cold vaccine has generated excitement among researchers and the general public alike. Such a vaccine could significantly reduce the economic burden of the common cold, as well as improve overall quality of life by minimizing the inconvenience and discomfort associated with this ubiquitous illness.\n\nHowever, it\'s important to note that vaccine development is a complex and rigorous process. Further research is needed to assess the vaccine\'s safety and effectiveness in larger and more diverse populations. Until then, preventive measures like good hand hygiene and avoiding close contact with infected individuals remain essential in the battle against the common cold.', '2023-08-27', 'Sophia Wilson'),
(8, 4, 'Groundbreaking Study Uncovers Potential Treatment for Alzheimer\'s Disease', 'In a significant breakthrough in the ongoing battle against Alzheimer\'s disease, a groundbreaking study has unveiled a potential treatment that could transform the landscape of Alzheimer\'s care. Researchers have identified a drug candidate that targets a key underlying mechanism of the disease, offering new hope for millions of patients and their families.\n\nAlzheimer\'s disease is a devastating neurodegenerative condition that affects millions worldwide, robbing individuals of their memories, cognitive abilities, and independence. Despite decades of research, effective treatments have remained elusive. However, a recent study conducted by a team of scientists from prestigious institutions has yielded promising results.\n\nThe research focuses on the role of toxic protein aggregates, particularly beta-amyloid and tau, in Alzheimer\'s disease. These protein clumps are believed to contribute to the cognitive decline seen in patients. The newly identified drug candidate, still in the experimental phase, aims to disrupt the formation and accumulation of these toxic proteins in the brain.\n\nInitial animal studies and in vitro experiments have demonstrated the drug\'s ability to significantly reduce the buildup of beta-amyloid and tau. Furthermore, it appears to halt the progression of cognitive decline in mouse models of Alzheimer\'s disease.\n\nThe drug\'s potential lies in its ability to target the disease at its root, potentially offering a disease-modifying treatment rather than just symptom management. This approach represents a significant departure from previous Alzheimer\'s drug development efforts, which largely focused on alleviating symptoms.\n\nWhile the results are promising, it\'s essential to proceed with caution. Clinical trials in humans are the next critical step in evaluating the drug\'s safety and efficacy. The road to regulatory approval is long and challenging, with many drug candidates failing to meet the rigorous standards required for market release.\n\nNevertheless, this breakthrough has generated tremendous optimism within the scientific and medical communities. Alzheimer\'s is a devastating condition that affects not only patients but also their families and caregivers. A disease-modifying treatment could potentially slow or even halt the progression of the disease, providing a ray of hope for countless individuals affected by Alzheimer\'s.\n\nThe search for effective Alzheimer\'s treatments is far from over, but this groundbreaking study represents a significant step forward in our understanding of the disease and the potential for innovative therapies. As further research unfolds and clinical trials progress, there is renewed optimism that we may be on the verge of a transformative breakthrough in the fight against Alzheimer\'s disease.', '2023-08-26', 'Robert Taylor'),
(9, 1, 'New Study Reveals the Benefits of High-Intensity Interval Training', 'A groundbreaking study conducted by researchers at Healthora University has shed new light on the incredible benefits of High-Intensity Interval Training (HIIT). HIIT, a fitness regimen that involves short bursts of intense exercise followed by brief periods of rest or low-intensity recovery, has gained popularity in recent years for its efficiency and effectiveness.\r\n\r\n    The study, which spanned over two years and involved thousands of participants, found that HIIT can lead to remarkable improvements in cardiovascular health, weight management, and overall fitness levels. Participants who incorporated HIIT into their fitness routines experienced significant reductions in body fat percentage and improvements in muscle tone.\r\n\r\n    Dr. Sarah Johnson, the lead researcher, explained, \'\'HIIT challenges the body in a way that traditional continuous exercise doesn\'t. It not only burns calories during the workout but also elevates the metabolic rate for hours afterward, leading to increased fat burning.\'\'\r\n\r\n    In addition to its physical benefits, HIIT was also shown to have a positive impact on mental health. Participants reported reduced stress levels, increased energy, and improved mood.\r\n\r\n    The versatility of HIIT makes it accessible to individuals of various fitness levels, as workouts can be tailored to suit individual needs. Whether you\'re a beginner or an experienced athlete, HIIT offers a time-efficient way to achieve your fitness goals.\r\n\r\n    Fitness experts recommend incorporating HIIT sessions into your weekly routine for maximum benefits. As with any exercise program, it\'s essential to consult with a healthcare professional before starting HIIT, especially if you have any underlying health conditions.\r\n\r\n    With this new research, the advantages of HIIT are more evident than ever. It\'s a promising option for anyone looking to improve their health and fitness in a time-efficient manner.', '2023-09-10', 'Healthora News Team'),
(10, 4, 'Promising Advances in Cancer Treatment', 'Recent advancements in cancer treatment offer hope to patients. Immunotherapy, targeted therapies, and precision medicine have revolutionized cancer care. These therapies are designed to target cancer cells specifically, minimizing side effects. Consult with your oncologist to explore the latest treatment options.', '2023-09-15', 'Medical Researcher'),
(11, 4, 'The Potential of Gene Editing in Healthcare', 'Gene editing technology, such as CRISPR-Cas9, holds immense potential for healthcare. It allows for precise modification of genetic material, opening doors to treatments for genetic disorders and diseases. Researchers are actively exploring the applications of gene editing in medicine, and it may revolutionize healthcare in the near future.', '2023-09-14', 'Genetics Expert'),
(12, 2, 'Tips for Staying Active During the Winter Months', 'The winter months often bring cold weather and shorter days, which can make it challenging to stay active and maintain a healthy lifestyle. However, with a little creativity and motivation, you can continue to prioritize physical activity even during the coldest season of the year. Here are some valuable tips to help you stay active and energized during the winter months.\n\n    1. Indoor Workouts: Consider moving your exercise routine indoors. Join a gym, take up indoor yoga or Pilates classes, or invest in home workout equipment. Having a dedicated indoor space for exercise will make it easier to stay active when it\'s cold outside.\n\n    2. Embrace Winter Sports: Winter offers fantastic opportunities for sports like skiing, snowboarding, ice skating, and snowshoeing. These activities not only keep you active but also allow you to enjoy the beauty of the winter landscape.\n\n    3. Dress in Layers: Don\'t let the cold weather deter you from outdoor activities. Dressing in layers helps you stay warm and comfortable during your winter workouts. Start with moisture-wicking base layers, add insulating layers, and finish with a waterproof and windproof outer layer.\n\n    4. Set Goals: Setting fitness goals can help you stay motivated. Whether it\'s running a certain distance, achieving a specific weightlifting target, or mastering a new yoga pose, having clear objectives keeps you focused on your fitness journey.\n\n    5. Workout with a Friend: Find a workout buddy who shares your fitness goals. Exercising with a friend not only adds a social element but also provides accountability and encouragement.\n\n    6. Try Home Workouts: If you prefer staying indoors, there are countless home workout routines available online. From high-intensity interval training (HIIT) to dance workouts, you can find a variety of exercises that require minimal equipment.\n\n    7. Stay Hydrated: It\'s easy to forget to drink water when it\'s cold outside, but staying hydrated is essential for maintaining energy levels and overall health. Make an effort to drink water regularly throughout the day.\n\n    8. Practice Mindfulness: Incorporate mindfulness techniques such as meditation and deep breathing into your daily routine. These practices can help reduce stress, increase focus, and improve your overall well-being.\n\n    9. Plan Active Family Time: Get the whole family involved in active winter activities. Sledding, building snowmen, and going for winter hikes are excellent ways to bond and stay fit together.\n\n    10. Stay Consistent: Consistency is key to achieving and maintaining a healthy lifestyle. Create a winter exercise schedule and stick to it. Even short daily workouts can make a significant difference over time.\n\n    By following these tips, you can stay active and healthy throughout the winter months. Remember that physical activity is not only beneficial for your body but also for your mental and emotional well-being. Embrace the season and make the most of the unique opportunities it offers for staying active and fit.', '2023-09-20', 'Healthora News Team');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`) VALUES
(1, 'Fitness'),
(2, 'Nutrition'),
(3, 'Mental Health'),
(4, 'Medical Breakthroughs');

-- --------------------------------------------------------

--
-- Table structure for table `news_comments`
--

CREATE TABLE `news_comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_posted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_ratings`
--

CREATE TABLE `news_ratings` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `optimal_well-being`
--

CREATE TABLE `optimal_well-being` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `optimal_well-being`
--

INSERT INTO `optimal_well-being` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, 'Healthy Sleep Habits for Optimal Well-Being', 'In the hustle and bustle of our fast-paced lives, sleep often takes a backseat. However, the significance of healthy sleep habits cannot be overstated. A good night\'s sleep is not only a time for rest but also a cornerstone of overall well-being. Incorporating healthy sleep habits into your routine can have a profound impact on your physical, mental, and emotional health.', ''),
(2, 'Consistency is Key', '', 'Establishing a consistent sleep schedule is essential for regulating your body\'s internal clock. Going to bed and waking up at the same times each day helps synchronize your sleep-wake cycle, leading to better sleep quality and improved daytime alertness.'),
(3, 'Wind Down Routine', '', 'Engaging in relaxing activities before bedtime can signal to your body that it\'s time to unwind. Consider reading a book, taking a warm bath, or practicing gentle yoga to create a calming pre-sleep routine.'),
(4, 'Optimize Your Sleep Space', '', 'Transform your bedroom into a sleep sanctuary. Ensure that your sleep environment is comfortable and conducive to rest. Keep the room cool, dark, and quiet, and invest in a comfortable mattress and pillows that support your sleep posture.'),
(5, 'Mind What You Consume', '', 'Be mindful of your diet, especially in the hours leading up to bedtime. Avoid heavy, rich, or spicy foods that can cause discomfort or indigestion. Opt for light snacks if you need something before sleep.'),
(6, 'Stay Active', '', 'Regular physical activity has been shown to improve sleep quality. Engage in regular exercise, but try to finish your workout a few hours before bedtime to allow your body to wind down.'),
(7, 'Limit Stimulants', '', 'Caffeine and alcohol can disrupt sleep patterns. Limit your intake, especially in the evening, to ensure that these substances do not interfere with your ability to fall asleep and stay asleep.'),
(8, 'Unplug Before Bed', '', 'Reduce screen time in the hour before bed. The blue light emitted by electronic devices can suppress the production of melatonin, a hormone that regulates sleep.'),
(9, 'Stress Management', '', 'Practice relaxation techniques to manage stress and anxiety, which can interfere with sleep. Deep breathing, meditation, and progressive muscle relaxation are effective strategies.'),
(10, 'Nap Strategically', '', 'While short naps can provide a quick energy boost, avoid napping for too long during the day, as it can disrupt your nighttime sleep. Aim for naps of 20-30 minutes.'),
(11, 'Seek Professional Help', '', 'If sleep problems persist, consider consulting a healthcare professional. They can help identify any underlying issues and provide guidance on improving your sleep.'),
(12, '', '', 'In conclusion, healthy sleep habits are essential for your overall well-being. By prioritizing consistency, creating a calming bedtime routine, and optimizing your sleep environment, you can unlock the benefits of restorative sleep. These habits contribute to improved physical health, enhanced cognitive function, and emotional resilience, allowing you to lead a more fulfilling and energized life.'),
(13, 'Consistency is Key', '', 'Establishing a consistent sleep schedule is essential for regulating your body\'s internal clock. Going to bed and waking up at the same times each day helps synchronize your sleep-wake cycle, leading to better sleep quality and improved daytime alertness.'),
(14, 'Wind Down Routine', '', 'Engaging in relaxing activities before bedtime can signal to your body that it\'s time to unwind. Consider reading a book, taking a warm bath, or practicing gentle yoga to create a calming pre-sleep routine.'),
(15, 'Optimize Your Sleep Space', '', 'Transform your bedroom into a sleep sanctuary. Ensure that your sleep environment is comfortable and conducive to rest. Keep the room cool, dark, and quiet, and invest in a comfortable mattress and pillows that support your sleep posture.'),
(16, 'Mind What You Consume', '', 'Be mindful of your diet, especially in the hours leading up to bedtime. Avoid heavy, rich, or spicy foods that can cause discomfort or indigestion. Opt for light snacks if you need something before sleep.'),
(17, 'Stay Active', '', 'Regular physical activity has been shown to improve sleep quality. Engage in regular exercise, but try to finish your workout a few hours before bedtime to allow your body to wind down.'),
(18, 'Limit Stimulants', '', 'Caffeine and alcohol can disrupt sleep patterns. Limit your intake, especially in the evening, to ensure that these substances do not interfere with your ability to fall asleep and stay asleep.'),
(19, 'Unplug Before Bed', '', 'Reduce screen time in the hour before bed. The blue light emitted by electronic devices can suppress the production of melatonin, a hormone that regulates sleep.'),
(20, 'Stress Management', '', 'Practice relaxation techniques to manage stress and anxiety, which can interfere with sleep. Deep breathing, meditation, and progressive muscle relaxation are effective strategies.'),
(21, 'Nap Strategically', '', 'While short naps can provide a quick energy boost, avoid napping for too long during the day, as it can disrupt your nighttime sleep. Aim for naps of 20-30 minutes.'),
(22, 'Seek Professional Help', '', 'If sleep problems persist, consider consulting a healthcare professional. They can help identify any underlying issues and provide guidance on improving your sleep.'),
(23, '', '', 'In conclusion, healthy sleep habits are essential for your overall well-being. By prioritizing consistency, creating a calming bedtime routine, and optimizing your sleep environment, you can unlock the benefits of restorative sleep. These habits contribute to improved physical health, enhanced cognitive function, and emotional resilience, allowing you to lead a more fulfilling and energized life.');

-- --------------------------------------------------------

--
-- Table structure for table `optimal_well_being`
--

CREATE TABLE `optimal_well_being` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `optimal_well_being`
--

INSERT INTO `optimal_well_being` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, 'Healthy Sleep Habits for Optimal Well-Being', 'In the hustle and bustle of our fast-paced lives, sleep often takes a backseat. However, the significance of healthy sleep habits cannot be overstated. A good night\'s sleep is not only a time for rest but also a cornerstone of overall well-being. Incorporating healthy sleep habits into your routine can have a profound impact on your physical, mental, and emotional health.', ''),
(2, 'Consistency is Key', '', 'Establishing a consistent sleep schedule is essential for regulating your body\'s internal clock. Going to bed and waking up at the same times each day helps synchronize your sleep-wake cycle, leading to better sleep quality and improved daytime alertness.'),
(3, 'Wind Down Routine', '', 'Engaging in relaxing activities before bedtime can signal to your body that it\'s time to unwind. Consider reading a book, taking a warm bath, or practicing gentle yoga to create a calming pre-sleep routine.'),
(4, 'Optimize Your Sleep Space', '', 'Transform your bedroom into a sleep sanctuary. Ensure that your sleep environment is comfortable and conducive to rest. Keep the room cool, dark, and quiet, and invest in a comfortable mattress and pillows that support your sleep posture.'),
(5, 'Mind What You Consume', '', 'Be mindful of your diet, especially in the hours leading up to bedtime. Avoid heavy, rich, or spicy foods that can cause discomfort or indigestion. Opt for light snacks if you need something before sleep.'),
(6, 'Stay Active', '', 'Regular physical activity has been shown to improve sleep quality. Engage in regular exercise, but try to finish your workout a few hours before bedtime to allow your body to wind down.'),
(7, 'Limit Stimulants', '', 'Caffeine and alcohol can disrupt sleep patterns. Limit your intake, especially in the evening, to ensure that these substances do not interfere with your ability to fall asleep and stay asleep.'),
(8, 'Unplug Before Bed', '', 'Reduce screen time in the hour before bed. The blue light emitted by electronic devices can suppress the production of melatonin, a hormone that regulates sleep.'),
(9, 'Stress Management', '', 'Practice relaxation techniques to manage stress and anxiety, which can interfere with sleep. Deep breathing, meditation, and progressive muscle relaxation are effective strategies.'),
(10, 'Nap Strategically', '', 'While short naps can provide a quick energy boost, avoid napping for too long during the day, as it can disrupt your nighttime sleep. Aim for naps of 20-30 minutes.'),
(11, 'Seek Professional Help', '', 'If sleep problems persist, consider consulting a healthcare professional. They can help identify any underlying issues and provide guidance on improving your sleep.'),
(12, '', '', 'In conclusion, healthy sleep habits are essential for your overall well-being. By prioritizing consistency, creating a calming bedtime routine, and optimizing your sleep environment, you can unlock the benefits of restorative sleep. These habits contribute to improved physical health, enhanced cognitive function, and emotional resilience, allowing you to lead a more fulfilling and energized life.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(15, 'sd', 'sd@gmail.com', 'sd', '', 'cod', 'naked-greens(1)', '15000'),
(16, 'sa', 'asd@gmail.com', 'as', 'as', 'cod', '', '0'),
(17, 'SD', 'sd@gmail.com', 'df', '', 'cod', 'naked-greens(1)', '15000'),
(18, 'sd', 'akram@gmail.com', 'sd', '', 'cod', 'naked-greens(1), Med_PearlTub_Chocolate(1)', '80000'),
(19, 'sd', 'asd@gmail.com', 'sdsd', 'assssssssssssssssssss', 'cod', 'Med_PearlTub_Chocolate(1)', '65000'),
(20, 'fsfds', 'sdf@gak', 'dfsdfdf', 'fdf', 'cod', 'naked-greens(1)', '15000'),
(21, 'zx', 'zx@ADASD', 'zx', 'zxz', 'cod', 'naked-greens(1)', '15000'),
(22, 'Ali', 'asd@gmail.com', 'sdsd', '545', 'netbanking', 'naked-greens(1), Med_PearlTub_Chocolate(1)', '80000'),
(23, 'hk', 'sd@gmail.com', '687', 'ygu', 'cod', 'naked-greens(1), Med_PearlTub_Chocolate(1), lean-superfood-protein-shake(1), KetoPlantProtein(1)', '245000'),
(24, 'Ali', 'sd@gmail.com', 'k', 'oko', 'netbanking', 'naked-greens(1)', '15000'),
(25, 'ahsan', 'fhf@g', 'fgfc', 'fg', 'netbanking', 'KetoPlantProtein(1)', '90000'),
(26, 's', 'm.alisidd@gmail.com', 'df', 'lj', 'netbanking', 'organic-protein(1)', '35000'),
(27, 'sda', 'asd@gmail.com', 'sad', 'sad', 'cod', 'Med_PearlTub_Chocolate(1), lean-superfood-protein-shake(1), KetoPlantProtein(1)', '230000'),
(28, 'hello', 'asd@gmail.com', '123123', 'ad', 'netbanking', 'naked-greens(1), lean-superfood-protein-shake(1)', '90000'),
(29, 'yourname', 'youremail@gmail.com', '242435464', 'house#gjgouyoijl', 'netbanking', 'KetoPlantProtein(1), Pro-Nutrition-plant-protein-vanilla(1)', '105000'),
(30, 'yourname', 'youremail@gmail.com', '34265365476', 'hose#gjkh', 'netbanking', 'lean-superfood-protein-shake(1), naked-greens(1)', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES
(1, '', '', '', 'excellent', 'sdad'),
(2, '', '', '', 'excellent', 'k'),
(3, '', '', '', 'poor', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `Deleted` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `Deleted`) VALUES
(1, 'KetoPlantProtein', '90000', 1, 'image/KetoPlantProtein.jpg', 'p1000', b'0'),
(2, 'lean-superfood-protein-shake', '75000', 1, 'image/lean-superfood-protein-shake.jpg', 'p1001', b'0'),
(3, 'Med_PearlTub_Chocolate', '65000', 1, 'image/Med_PearlTub_Chocolate.jpg', 'p1002', b'0'),
(4, 'naked-greens', '15000', 1, 'image/naked-greens.jpg', 'p1003', b'0'),
(5, 'organic-protein', '25000', 1, 'image/organic-protein.jpg', 'p1004', b'0'),
(6, 'organic-protein', '35000', 1, 'image/OzivaProteinAndHerbs.jpg', 'p1005', b'0'),
(7, 'Pro-Nutrition-plant-protein-vanilla', '15000', 1, 'image/Pro-Nutrition-plant-protein-vanilla.png', 'p1006', b'0'),
(9, 'VegaProteinAndGreens', '25000', 1, 'image/VegaProteinAndGreens.jpg', 'p1007', b'0'),
(16, 'sa', '23', 1, 'image/OzivaProteinAndHerbs.jpg', 's12', b'1'),
(17, 'was', '2333', 1, 'image/Med_PearlTub_Chocolate.jpg', 'as22', b'1'),
(48, 'saaaa', '12', 1, 'image/OzivaProteinAndHerbs.jpg', 's2', b'0'),
(50, 'klllj', '1223', 12, 'image/OzivaProteinAndHerbs.jpg', 'da', b'0'),
(51, 'xzs', '21', 1, 'image/OzivaProteinAndHerbs.jpg', 'asd', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `regular_exercise`
--

CREATE TABLE `regular_exercise` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regular_exercise`
--

INSERT INTO `regular_exercise` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, 'The Importance of Regular Exercise', 'In a world characterized by sedentary lifestyles and technology-driven conveniences, the value of regular exercise cannot be overstated. Beyond its role in physical fitness, exercise plays a crucial role in enhancing overall well-being and longevity. From improving cardiovascular health to boosting mental clarity, the benefits of incorporating physical activity into daily life are diverse and profound.', ''),
(2, 'Physical Health Benefits', 'Regular exercise is a cornerstone of physical health. Engaging in activities like brisk walking, jogging, swimming, or weightlifting helps strengthen muscles, improve cardiovascular function, and enhance flexibility. It aids in weight management by burning calories and increasing metabolism. Exercise also bolsters bone health, reducing the risk of osteoporosis, and supports the immune system, contributing to better resistance against illnesses.', ''),
(3, 'Mental Well-being', 'Exercise is not limited to physical transformation; it significantly impacts mental health. Physical activity triggers the release of endorphins, often referred to as \"feel-good\" hormones, which alleviate stress and anxiety while promoting a sense of happiness. It is an effective way to manage and prevent depression, as it helps regulate mood and fosters a positive outlook on life. Additionally, regular exercise has been linked to improved cognitive function and reduced cognitive decline with ag', ''),
(4, 'Energy and Sleep', 'Surprisingly, engaging in physical activity increases energy levels rather than depleting them. Regular exercise enhances blood circulation, delivering oxygen and nutrients to cells more efficiently, resulting in heightened energy and vitality. Furthermore, exercise can improve sleep quality by promoting better relaxation and reducing insomnia.', ''),
(5, 'Disease Prevention', 'The impact of exercise on disease prevention is substantial. Physical activity plays a pivotal role in reducing the risk of chronic conditions such as type 2 diabetes, heart disease, and certain cancers. It helps control blood pressure and cholesterol levels, contributing to a healthier cardiovascular system. Additionally, exercise supports insulin sensitivity, crucial for diabetes management and prevention.', ''),
(6, 'Social Interaction and Confidence', 'Exercise often involves group activities, classes, or sports, fostering social interaction and a sense of community. This can alleviate feelings of loneliness and isolation, contributing to improved mental and emotional well-being. Moreover, achieving fitness goals and noticing physical improvements can boost self-confidence and self-esteem, creating a positive feedback loop that further motivates individuals to stay active.', ''),
(7, 'Longevity', 'Research consistently demonstrates that individuals who maintain an active lifestyle tend to live longer, healthier lives. Regular exercise is associated with a reduced risk of premature mortality, as it addresses multiple aspects of well-being and health.', ''),
(8, '', 'Incorporating regular exercise into daily routines doesn\'t require extreme efforts. Simple activities like taking the stairs, walking instead of driving short distances, or integrating short workout sessions can make a significant difference. It\'s important to choose activities that align with personal preferences and physical abilities to ensure consistency.', 'In conclusion, regular exercise is a powerful investment in both physical and mental health. From its contributions to cardiovascular fitness and disease prevention to its positive impact on mental well-being and longevity, the importance of staying active cannot be underestimated. By prioritizing regular physical activity, individuals pave the way for a healthier, happier, and more fulfilling life.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `InActive` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id`, `Name`, `InActive`) VALUES
(1, 'Admin', b'0'),
(2, 'Customer', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `id` int(13) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `a_bio` varchar(500) NOT NULL,
  `b_bio` varchar(500) NOT NULL,
  `c_bio` varchar(500) NOT NULL,
  `Deleted` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`id`, `image`, `name`, `description`, `a_bio`, `b_bio`, `c_bio`, `Deleted`) VALUES
(1, 'Services/Fitnessprogram/image/walking.jpg', 'walking', 'Benefits:', 'Low-impact cardiovascular exercise', 'Improves joint mobility', 'Enhances overall mood and mental well-being', b'0'),
(2, 'Services/Fitnessprogram/image/Chairyoga.jpg', 'Chair Yoga', 'Benefits:', 'Improves flexibility and balance', 'Enhances relaxation and stress reduction', 'Gentle on joints and suitable for all fitness levels', b'0'),
(3, 'Services/Fitnessprogram/image/seated-exercises.jpg', 'Seated Exercises', 'Benefits:', 'Improves muscle strength and flexibility', 'Can be done safely while sitting', 'Enhances circulation and joint health', b'0'),
(4, 'Services/Fitnessprogram/image/stretching.jpg', 'Stretching', 'Benefits:', 'Improves flexibility and range of motion', 'Helps relieve muscle tension and discomfort', 'Reduces the risk of injury', b'0'),
(5, 'Services/Fitnessprogram/image/balance-exercises.jpg', 'Balance Exercises', 'Benefits:', 'Enhances stability and reduces the risk of falls', 'Strengthens core muscles and improves posture', 'Boosts confidence and independence', b'0'),
(6, 'Services/Fitnessprogram/image/water-aerobics.jpg', 'Water Aerobics', 'Benefits:', 'Low-impact cardiovascular workout', 'Provides resistance for muscle strengthening', 'Gentle on joints and soothing for sore muscles', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `snacks_recipes`
--

CREATE TABLE `snacks_recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks_recipes`
--

INSERT INTO `snacks_recipes` (`id`, `title`, `ingredients`, `instructions`, `picture`) VALUES
(1, 'Greek Yogurt Parfait', 'Greek yogurt, mixed berries, honey, granola', '1. Layer yogurt, berries, honey, and granola.', 'Ourspecialities/img/Greek_Yogurt_Parfait.jpg'),
(2, 'Apple Slices with Almond Butter', 'Apple slices, almond butter', '1. Spread almond butter on apple slices.', 'Ourspecialities/img/Apple_SliceswithAlmond_Butter.jpg'),
(3, 'Carrot and Hummus', 'Baby carrots, hummus', '1. Dip carrot sticks in hummus.', 'Ourspecialities/img/CarrotandHummus.jpg'),
(4, 'Mixed Nuts', 'Assorted nuts (almonds, walnuts, cashews)', '1. Enjoy a handful of mixed nuts.', 'Ourspecialities/img/Mixed-Nuts.jpg'),
(5, 'Trail Mix', 'Nuts, seeds, dried fruit', '1. Mix nuts, seeds, and dried fruit.', 'Ourspecialities/img/Trail-Mix.jpg'),
(6, 'Cottage Cheese with Berries', 'Low-fat cottage cheese, mixed berries', '1. Top cottage cheese with berries.', 'Ourspecialities/img/Cottage_CheesewithBerries.jpg'),
(7, 'Rice Cakes with Peanut Butter', 'Rice cakes, natural peanut butter', '1. Spread peanut butter on rice cakes.', 'Ourspecialities/img/Rice_CakeswithPeanut_Butter.jpg'),
(8, 'Popcorn', 'Air-popped popcorn, olive oil, nutritional yeast', '1. Drizzle popcorn with olive oil and sprinkle with nutritional yeast.', 'Ourspecialities/img/Popcorn.jpg'),
(9, 'Roasted Chickpeas', 'Roasted chickpeas, spices (paprika, cumin, etc.)', '1. Season roasted chickpeas with spices.', 'Ourspecialities/img/roastedchickpeas.jpg'),
(10, 'Whole Grain Crackers with Cheese', 'Whole grain crackers, cheese', '1. Top crackers with cheese.', 'Ourspecialities/img/Whole_Grain_CrackerswithCheese.jpg'),
(11, 'Frozen Grapes', 'Grapes', '1. Freeze grapes for a refreshing snack.', 'Ourspecialities/img/Frozen-Grapes.jpg'),
(12, 'Celery with Peanut Butter and Raisins', 'Celery sticks, natural peanut butter, raisins', '1. Fill celery sticks with peanut butter and raisins.', 'Ourspecialities/img/CelerywithPeanut_ButterandRaisins.jpg'),
(13, 'Hard-Boiled Eggs', 'Hard-boiled eggs, salt, pepper', '1. Season hard-boiled eggs with salt and pepper.', 'Ourspecialities/img/Hard-Boiled_Eggs.jpg'),
(14, 'Chia Pudding', 'Chia seeds, almond milk, honey, vanilla extract', '1. Mix chia seeds, almond milk, honey, and vanilla.\n2. Let it set and thicken.', 'Ourspecialities/img/Chia-Pudding.jpg'),
(15, 'Veggie Chips with Salsa', 'Baked vegetable chips (kale, sweet potato, etc.), salsa', '1. Dip veggie chips in salsa.', 'Ourspecialities/img/Veggie_ChipswithSalsa.jpg'),
(16, 'Edamame', 'Steamed edamame, sea salt', '1. Sprinkle steamed edamame with sea salt.', 'Ourspecialities/img/easy-edamame-hero.jpg'),
(17, 'Greek Yogurt with Fruit', 'Greek yogurt, sliced fruit (kiwi, mango, etc.)', '1. Top Greek yogurt with sliced fruit.', 'Ourspecialities/img/Greek_YogurtwithFruit.jpg'),
(18, 'Sliced Cucumber with Hummus', 'Cucumber slices, hummus', '1. Dip cucumber slices in hummus.', 'Ourspecialities/img/Sliced_CucumberwithHummus.jpg'),
(19, 'Mini Bell Peppers with Guacamole', 'Mini bell peppers, guacamole', '1. Fill mini bell peppers with guacamole.', 'Ourspecialities/img/Mini-Bell-PepperswithGuacamole.jpg'),
(20, 'Fruit Salad', 'Assorted fruits (melon, berries, etc.), mint leaves', '1. Mix sliced fruits and mint leaves.', 'Ourspecialities/img/Fruit_Salad.jpg'),
(21, 'Frozen Yogurt Bark', 'Greek yogurt, mixed berries, honey', '1. Spread yogurt on a baking sheet.\n2. Top with berries and honey.\n3. Freeze and break into pieces.', 'Ourspecialities/img/Frozen_Yogurt_Bark.jpg'),
(22, 'Cherry Tomatoes with Mozzarella', 'Cherry tomatoes, fresh mozzarella balls, basil leaves', '1. Skewer tomatoes, mozzarella, and basil.', 'Ourspecialities/img/cherry-tomato-salad-3.jpg'),
(23, 'Almond Energy Bites', 'Almond butter, oats, honey, chopped almonds', '1. Mix almond butter, oats, honey, and chopped almonds.\n2. Roll into bite-sized balls.', 'Ourspecialities/img/Almond_Energy_Bites.jpg'),
(24, 'Apple and Cheese Quesadilla', 'Whole-grain tortilla, thinly sliced apple, shredded cheese', '1. Place apple slices and cheese on half of the tortilla.\n2. Fold and cook on a pan.', 'Ourspecialities/img/AppleandCheese-Quesadilla.jpg'),
(25, 'Frozen Banana Bites', 'Banana slices, dark chocolate, chopped nuts', '1. Dip banana slices in melted dark chocolate.\n2. Sprinkle with chopped nuts.\n3. Freeze.', 'Ourspecialities/img/Frozen_Banana_Bites.jpg'),
(26, 'Yogurt-Dipped Strawberries', 'Strawberries, Greek yogurt, honey', '1. Dip strawberries in Greek yogurt.\n2. Drizzle with honey.', 'Ourspecialities/img/Yogurt-Dipped-Strawberries.jpg'),
(27, 'Rice Cakes with Cottage Cheese', 'Rice cakes, low-fat cottage cheese, fresh herbs', '1. Spread cottage cheese on rice cakes.\n2. Garnish with fresh herbs.', 'Ourspecialities/img/Rice_CakeswithCottage_Cheese.jpg'),
(28, 'Roasted Seaweed Snacks', 'Roasted seaweed sheets', '1. Enjoy crispy roasted seaweed sheets.', 'Ourspecialities/img/Roasted_Seaweed_Snacks.jpg'),
(29, 'Homemade Salsa with Whole Wheat Pita', 'Homemade salsa (tomatoes, onion, cilantro, lime), whole wheat pita', '1. Dip whole wheat pita in homemade salsa.', 'Ourspecialities/img/Homemade_SalsawithWhole_Wheat_Pita.jpg'),
(30, 'Homemade Granola Bars', 'Rolled oats, almond butter, honey, nuts (almonds, walnuts), dried fruit (raisins, cranberries), dark chocolate chips', '1. Mix oats, almond butter, honey, nuts, dried fruit, and chocolate chips.\n2. Press into a pan and refrigerate.\n3. Cut into bars and enjoy.', 'Ourspecialities/img/Homemade_Granola_Bars.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stress_management`
--

CREATE TABLE `stress_management` (
  `id` int(13) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `paragraph` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stress_management`
--

INSERT INTO `stress_management` (`id`, `heading`, `description`, `paragraph`) VALUES
(1, 'Effective Stress Management Techniques', 'In the modern world, where the pace of life can be overwhelming, mastering effective stress management techniques is essential. One approach is mindfulness and meditation, practices that encourage living in the present moment without judgment and promote a sense of calm. Regular exercise is another powerful tool, as physical activity triggers the release of endorphins, natural mood enhancers that combat stress. A well-rounded lifestyle also plays a significant role: maintaining a balanced diet, ', 'In the modern world, where the pace of life can be overwhelming, mastering effective stress management techniques is essential. One approach is mindfulness and meditation, practices that encourage living in the present moment without judgment and promote a sense of calm. Regular exercise is another powerful tool, as physical activity triggers the release of endorphins, natural mood enhancers that combat stress. A well-rounded lifestyle also plays a significant role: maintaining a balanced diet, getting adequate sleep, and staying hydrated contribute to a more resilient stress response.'),
(2, '', '', 'Skillful time management helps prevent the feeling of being swamped by tasks, allowing for a balanced schedule with time for both work and relaxation. Social connections are vital as well – sharing concerns with friends, family, or professionals offers emotional relief and fresh perspectives on stressors. Engaging in hobbies offers a positive distraction, enabling a mental shift away from worries. It\'s important to set achievable goals, as unrealistic expectations can trigger unnecessary stress.'),
(3, '', '', 'Learning to say no is a valuable skill that prevents overcommitment and burnout, preserving mental well-being. Relaxation techniques like deep breathing and visualization soothe both mind and body. Creating clear boundaries between work and personal life ensures time for rest and prevents constant stress. Humor shouldn\'t be underestimated; laughter is a natural stress reducer. Finally, seeking professional help is wise if stress becomes unmanageable, ensuring access to coping strategies and emotional support. By incorporating these techniques into daily life, individuals can navigate stressors with greater resilience, ultimately leading to a healthier and more balanced life.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `FatherName` varchar(200) NOT NULL,
  `B_From` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentfee`
--

CREATE TABLE `studentfee` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL DEFAULT 0,
  `Fee` decimal(24,8) NOT NULL DEFAULT 0.00000000,
  `FeeType` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentfeepayments`
--

CREATE TABLE `studentfeepayments` (
  `Id` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL DEFAULT 0,
  `StudentFeeId` int(11) NOT NULL DEFAULT 0,
  `PaidAmount` decimal(24,8) NOT NULL DEFAULT 0.00000000,
  `RemainingAmount` decimal(24,8) NOT NULL DEFAULT 0.00000000,
  `Month` int(11) NOT NULL DEFAULT 0,
  `Year_` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `passsword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `passsword`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userprogress`
--

CREATE TABLE `userprogress` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `step_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userprogress`
--

INSERT INTO `userprogress` (`id`, `user_id`, `date`, `step_count`) VALUES
(1, NULL, '2023-09-04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_steps`
--

CREATE TABLE `user_steps` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `steps` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `youth`
--

CREATE TABLE `youth` (
  `id` int(13) NOT NULL,
  `image` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `a_bio` varchar(500) NOT NULL,
  `b_bio` varchar(500) NOT NULL,
  `c_bio` varchar(500) NOT NULL,
  `Deleted` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `youth`
--

INSERT INTO `youth` (`id`, `image`, `name`, `description`, `a_bio`, `b_bio`, `c_bio`, `Deleted`) VALUES
(1, 'Services/Fitnessprogram/image/pushups.jpg', 'Push-ups', 'Benefits:', 'Strengthens chest, shoulders, and triceps', 'Improves upper body endurance', 'Engages core muscles', b'0'),
(2, 'Services/Fitnessprogram/image/squats.jpg', 'Squats', 'Benefits:', 'Strengthens lower body muscles', 'Improves leg strength and endurance', 'Engage core muscles', b'0'),
(3, 'Services/Fitnessprogram/image/lunges.jpg', 'Lunges', 'Benefits:', 'Strengthens lower body muscles', 'Target quadriceps , hamstrings and glutes', 'Improves balance and stability', b'0'),
(4, 'Services/Fitnessprogram/image/jumpingjacks.jpg', 'Jumping jacks', 'Benefits:', 'Cardiovascular workout', 'Increase heart rate and burn calories', 'Works on coordination and agility', b'0'),
(5, 'Services/Fitnessprogram/image/MountainClimbers.jpg', 'Mountain climbers', 'Benefits:', 'Cardio and core workout', 'Increase heart rate and endurance', 'Works on shoulders core and legs', b'0'),
(6, 'Services/Fitnessprogram/image/highknees.jpg', 'High knees', 'Benefits:', 'Cardiovascular exercise', 'Improves leg strength and coordination', 'Burn calories and boosts metabolism', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adult`
--
ALTER TABLE `adult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_form`
--
ALTER TABLE `appointment_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balanced_diet`
--
ALTER TABLE `balanced_diet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast_recipes`
--
ALTER TABLE `breakfast_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner_recipes`
--
ALTER TABLE `dinner_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `healthy_heart`
--
ALTER TABLE `healthy_heart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch_recipes`
--
ALTER TABLE `lunch_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mindfulness_and_meditation_benefits`
--
ALTER TABLE `mindfulness_and_meditation_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_articles`
--
ALTER TABLE `news_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_comments`
--
ALTER TABLE `news_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_ratings`
--
ALTER TABLE `news_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optimal_well-being`
--
ALTER TABLE `optimal_well-being`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optimal_well_being`
--
ALTER TABLE `optimal_well_being`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `regular_exercise`
--
ALTER TABLE `regular_exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `senior`
--
ALTER TABLE `senior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks_recipes`
--
ALTER TABLE `snacks_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stress_management`
--
ALTER TABLE `stress_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `B_From` (`B_From`);

--
-- Indexes for table `studentfee`
--
ALTER TABLE `studentfee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `studentfeepayments`
--
ALTER TABLE `studentfeepayments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprogress`
--
ALTER TABLE `userprogress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_steps`
--
ALTER TABLE `user_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youth`
--
ALTER TABLE `youth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adult`
--
ALTER TABLE `adult`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `appointment_form`
--
ALTER TABLE `appointment_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `balanced_diet`
--
ALTER TABLE `balanced_diet`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `breakfast_recipes`
--
ALTER TABLE `breakfast_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dinner_recipes`
--
ALTER TABLE `dinner_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `healthy_heart`
--
ALTER TABLE `healthy_heart`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lunch_recipes`
--
ALTER TABLE `lunch_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mindfulness_and_meditation_benefits`
--
ALTER TABLE `mindfulness_and_meditation_benefits`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `news_articles`
--
ALTER TABLE `news_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_comments`
--
ALTER TABLE `news_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_ratings`
--
ALTER TABLE `news_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `optimal_well-being`
--
ALTER TABLE `optimal_well-being`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `optimal_well_being`
--
ALTER TABLE `optimal_well_being`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `regular_exercise`
--
ALTER TABLE `regular_exercise`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `senior`
--
ALTER TABLE `senior`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `snacks_recipes`
--
ALTER TABLE `snacks_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stress_management`
--
ALTER TABLE `stress_management`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentfee`
--
ALTER TABLE `studentfee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentfeepayments`
--
ALTER TABLE `studentfeepayments`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userprogress`
--
ALTER TABLE `userprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_steps`
--
ALTER TABLE `user_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `youth`
--
ALTER TABLE `youth`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userprogress`
--
ALTER TABLE `userprogress`
  ADD CONSTRAINT `userprogress_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
